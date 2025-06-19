/* eslint-disable @typescript-eslint/no-explicit-any */
import { Component, ViewChild } from '@angular/core';
import { routes } from '../../../../shared/routes/routes';
import { apiResultFormat, leadsList, pageSelection } from '../../../../shared/model/pages.model';
import { MatTableDataSource } from '@angular/material/table';
import { DataService } from '../../../../shared/data/data.service';
import { PaginationService, tablePageSize } from '../../../../shared/custom-pagination/pagination.service';
import { Router } from '@angular/router';
import { Sort } from '@angular/material/sort';
import {
  ApexAxisChartSeries,
  ApexChart,
  ChartComponent,
  ApexDataLabels,
  ApexXAxis,
  ApexPlotOptions,
} from 'ng-apexcharts';
export interface ChartOptions {
  series: ApexAxisChartSeries | any;
  chart: ApexChart | any;
  dataLabels: ApexDataLabels | any;
  plotOptions: ApexPlotOptions | any;
  xaxis: ApexXAxis | any;
  
  
}

@Component({
    selector: 'app-lead-report',
    templateUrl: './lead-report.component.html',
    styleUrl: './lead-report.component.scss',
    standalone: false
})
export class LeadReportComponent {
  @ViewChild('chart') chart!: ChartComponent;
  public chartOptions1: Partial<ChartOptions> | any;
  public chartOptions2: Partial<ChartOptions> | any;
  public chartOptions3: Partial<ChartOptions> | any;
  public chartOptions4: Partial<ChartOptions> | any;
  public routes = routes;
  // pagination variables
  public tableData: leadsList[] = [];
  public pageSize = 10;
  public serialNumberArray: number[] = [];
  public totalData = 0;
  showFilter = false;
  dataSource!: MatTableDataSource<leadsList>;
  public searchDataValue = '';
  public tableDataCopy: leadsList[] = [];
  public actualData: leadsList[] = [];
  //** pagination variables
  
  public sidebarPopup = false;
  public sidebarPopup2 = false;
  filled = false;

  initChecked = false;

  bsValue = new Date();
  bsRangeValue: Date[];
  bsRangeValue1: Date[];
  bsRangeValue2: Date[];
  
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
    colors: ['#0092E4', '#4A00E5' , '#E41F07' , '#FFA201' ],
    dataLabels: {
      enabled: false
    },
    plotOptions: {
      pie: {
        startAngle: -90,
        endAngle: 270
      }
    },
    
    
  
     
    };
   
    this.chartOptions3 = {
      series: [{
        name: "Reports",
        colors: ['#FFC38F'],
        data: [{
          x: 'Jan',
          y: 400,
        }, {
          x: 'Feb',
          y: 130
        }, {
          x: 'Mar',
          y: 240
        }, {
          x: 'Apr',
          y: 450
        }, {
          x: 'May',
          y: 250
        }, {
          x: 'Jun',
          y: 180
        }, {
          x: 'Jul',
          y: 300
        }, {
          x: 'Aug',
          y: 240
        }, {
          x: 'Sep',
          y: 300
        }, {
          x: 'Oct',
          y: 150
        }, {
          x: 'Nov',
          y: 250
        },
        {
          x: 'Dec',
          y: 500
        }]
      }],
      colors: ['#00918E'],
      chart: {
        type: 'bar',
        height: 275,
      },
      plotOptions: {
        bar: {
          borderRadiusApplication: 'around',
          columnWidth: '50%',
        },
      },

      xaxis: {
        type: 'category',
        group: {
          style: {
            fontSize: '0px',
            fontWeight: 700,
          },
        },
      },
    };
   
    this.data.getLeadsList().subscribe((apiRes: apiResultFormat) => {
      this.actualData = apiRes.data;
      this.pagination.tablePageSize.subscribe((res: tablePageSize) => {
        if (this.router.url == this.routes.leadReport) {
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
    this.data.getLeadsList().subscribe((apiRes: apiResultFormat) => {
      this.tableData = [];
      this.tableDataCopy = [];
      this.serialNumberArray = [];
      this.totalData = apiRes.totalData;
      apiRes.data.map((res: leadsList, index: number) => {
        const serialNumber = index + 1;
        if (index >= pageOption.skip && serialNumber <= pageOption.limit) {
          res.id = serialNumber;
          this.tableData.push(res);
          this.serialNumberArray.push(serialNumber);
          this.tableDataCopy.push(res);
        }
      });
      this.dataSource = new MatTableDataSource<leadsList>(this.actualData);
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

  
  onClickStar(item: leadsList) {
    item.isStarActive = !item.isStarActive;
  }
 

}
