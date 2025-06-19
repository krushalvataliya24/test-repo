/* eslint-disable @typescript-eslint/no-explicit-any */
import { Component, ViewChild } from '@angular/core';
import { apiResultFormat, taskReports } from '../../../../shared/model/pages.model';
import { MatTableDataSource } from '@angular/material/table';
import { DataService } from '../../../../shared/data/data.service';
import { PaginationService, pageSelection, tablePageSize } from '../../../../shared/custom-pagination/pagination.service';
import { Router } from '@angular/router';
import { Sort } from '@angular/material/sort';
import {
  ChartComponent,
  ApexAxisChartSeries,
  ApexChart,
  ApexXAxis,
  ApexDataLabels,
  ApexTitleSubtitle,
  ApexStroke,
  ApexGrid
} from "ng-apexcharts";
import { routes } from '../../../../shared/routes/routes';

export interface ChartOptions {
  series: ApexAxisChartSeries | any;
  chart: ApexChart | any;
  xaxis: ApexXAxis | any;
  dataLabels: ApexDataLabels | any;
  grid: ApexGrid | any;
  stroke: ApexStroke | any;
  title: ApexTitleSubtitle | any;
 
}

@Component({
    selector: 'app-task-reports',
    templateUrl: './task-reports.component.html',
    styleUrl: './task-reports.component.scss',
    standalone: false
})
export class TaskReportsComponent {
  @ViewChild('chart') chart!: ChartComponent;
  public chartOptions1: Partial<ChartOptions> | any;
  public chartOptions2: Partial<ChartOptions> | any;
  
  public routes = routes;
  // pagination variables
  public tableData: taskReports[] = [];
  public pageSize = 10;
  public serialNumberArray: number[] = [];
  public totalData = 0;
  showFilter = false;
  dataSource!: MatTableDataSource<taskReports>;
  public searchDataValue = '';
  public tableDataCopy: taskReports[] = [];
  public actualData: taskReports[] = [];
  //** pagination variables
  
  public sidebarPopup = false;
  public sidebarPopup2 = false;

  initChecked = false;

  bsValue = new Date();
  bsRangeValue1: Date[];
  bsRangeValue2: Date[];
  bsRangeValue: Date[];
 
  maxDate = new Date();

 
  constructor(
    private data: DataService,
    private pagination: PaginationService,
    private router: Router
  ) {
    this.chartOptions1 = {
      series: [44, 55, 41, 17],
      chart: {
        type: 'donut',
      },
    colors: ['#4A00E5', '#0092E4' , '#E41F07' , '#FFA201' ],
    dataLabels: {
      enabled: false
    },
    
    
  
     
    };
    this.chartOptions2 = {
      series: [{
        name: "Task",
        data: [10, 38, 18, 47, 13, 32, 15, 40, 18, 50, 30, 15]
    }],
    colors: ['#3C2371'],
    chart: {
      height: 273,
      type: 'line',
      zoom: {
        enabled: false
      }
    },
    dataLabels: {
      enabled: false
    },
    stroke: {
      curve: 'stepline'
    },
   
    title: {
      text: '',
      align: 'left'
    },
     
      xaxis: {
        categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
      },
    };
   
   
    this.data.getTaskReport().subscribe((apiRes: apiResultFormat) => {
      this.actualData = apiRes.data;
      this.pagination.tablePageSize.subscribe((res: tablePageSize) => {
        if (this.router.url == this.routes.taskReport) {
          this.getTableData({ skip: res.skip, limit: res.limit });
          this.pageSize = res.pageSize;
        }
      });
    });
    this.maxDate.setDate(this.maxDate.getDate() + 7);
    this.bsRangeValue = [this.bsValue, this.maxDate];
    this.bsRangeValue1 = [this.bsValue, this.maxDate];
    this.bsRangeValue2 = [this.bsValue, this.maxDate];
   
  }

  private getTableData(pageOption: pageSelection): void {
    this.data.getTaskReport().subscribe((apiRes: apiResultFormat) => {
      this.tableData = [];
      this.tableDataCopy = [];
      this.serialNumberArray = [];
      this.totalData = apiRes.totalData;
      apiRes.data.map((res: taskReports, index: number) => {
        const serialNumber = index + 1;
        if (index >= pageOption.skip && serialNumber <= pageOption.limit) {
          res.id = serialNumber;
          this.tableData.push(res);
          this.serialNumberArray.push(serialNumber);
          this.tableDataCopy.push(res);
        }
      });
      this.dataSource = new MatTableDataSource<taskReports>(this.actualData);
      this.pagination.calculatePageSize.next({
        totalData: this.totalData,
        pageSize: this.pageSize,
        tableData: this.tableData,
        tableDataCopy: this.tableDataCopy,
        serialNumberArray: this.serialNumberArray,
      });
    });
  }

  public sortData(sort: Sort) {
    const data = this.tableData.slice();
    if (!sort.active || sort.direction === '') {
      this.tableData = data;
    } else {
      this.tableData = data.sort((a, b) => {
        const aValue = (a as never)[sort.active];
        const bValue = (b as never)[sort.active];
        return (aValue < bValue ? -1 : 1) * (sort.direction === 'asc' ? 1 : -1);
      });
    }
  }
  public searchData(value: string): void {
    if (value == '') {
      this.tableData = this.tableDataCopy;
    } else {
      this.dataSource.filter = value.trim().toLowerCase();
      this.tableData = this.dataSource.filteredData;
    }
  }
  selectAll(initChecked: boolean) {
    if (!initChecked) {
      this.tableData.forEach((f) => {
        f.isSelected = true;
      });
    } else {
      this.tableData.forEach((f) => {
        f.isSelected = false;
      });
    }
  }

  openSidebarPopup() {
    this.sidebarPopup = !this.sidebarPopup;
  }
  openSidebarPopup2() {
    this.sidebarPopup2 = !this.sidebarPopup2;
  }
  selectedUser: any;
  selectedUser2: any;
  onClickStar(item: taskReports) {
    item.isStarActive = !item.isStarActive;
  }
}
