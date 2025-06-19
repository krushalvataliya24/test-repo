/* eslint-disable @typescript-eslint/no-explicit-any */
import { Component, OnInit, ViewChild } from '@angular/core';
import {
  ApexAxisChartSeries,
  ApexChart,
  ApexDataLabels,
  ApexGrid,
  ApexStroke,
  ApexTitleSubtitle,
  ApexXAxis,
  ChartComponent,
} from 'ng-apexcharts';

import { MatTableDataSource } from '@angular/material/table';

import { Router } from '@angular/router';
import { Sort } from '@angular/material/sort';
import { routes } from '../../../../../shared/routes/routes';
import { apiResultFormat, CompanyAccount, pageSelection } from '../../../../../shared/model/pages.model';
import { DataService } from '../../../../../shared/data/data.service';
import { PaginationService, tablePageSize } from '../../../../../shared/shared.index';
export interface ChartOptions  {
  series: ApexAxisChartSeries;
  chart: ApexChart;
  xaxis: ApexXAxis;
  dataLabels: ApexDataLabels;
  grid: ApexGrid;
  stroke: ApexStroke;
  title: ApexTitleSubtitle;
};

interface project {
  name: string;
}

@Component({
    selector: 'app-companies',
    templateUrl: './companies.component.html',
    styleUrl: './companies.component.scss',
    standalone: false
})
export class CompaniesComponent implements OnInit {
  @ViewChild('chart')
  chart!: ChartComponent;
  public Areachart: Partial<ChartOptions> | any;
  public Areachart2: Partial<ChartOptions> | any;
  public Areachart3: Partial<ChartOptions> | any;
  public Areachart4: Partial<ChartOptions> | any;
  public routes = routes;
  initChecked = false;
  // pagination variables
  public pageSize = 10;
  public tableData: CompanyAccount[] = [];
  public tableDataCopy: CompanyAccount[] = [];
  public actualData: CompanyAccount[] = [];
  public currentPage = 1;
  public skip = 0;
  public limit: number = this.pageSize;
  public serialNumberArray: number[] = [];
  public totalData = 0;
  showFilter = false;
  public pageSelection: pageSelection[] = [];
  dataSource!: MatTableDataSource<CompanyAccount>;
  public searchDataValue = '';

  //** pagination variables
  selectedValue1: any[] | undefined;
  selectedValue2: any[] | undefined;
  selectedValue3: any[] | undefined;
  selectedValue4: any[] | undefined;
  selectedValue5: any[] | undefined;
  selectedValue6: any[] | undefined;
  selectedDatas1: any[] | undefined;
  selectedDatas2: any[] | undefined;
  selectedDatas3: any[] | undefined;
  selectedDatas4: any[] | undefined;
  selectedDatas5: any[] | undefined;
  selectedDatas6: any[] | undefined;

  public sidebarPopup = false;
  public sidebarPopup2 = false;
  public sidebarPopup3 = false;



  bsValue = new Date();
  bsRangeValue: Date[];
  maxDate = new Date();

  selectedOption3: any;
  project!: project[];
  selectedProjects!: project[];

  public password: boolean[] = [false,false,false,false];
  togglePassword(index: number) {
    this.password[index] = !this.password[index];
  }
  constructor(
    private data: DataService,
    private router: Router,
    private pagination: PaginationService
  ) {

    this.data.getCompanies().subscribe((apiRes: apiResultFormat) => {
      this.actualData = apiRes.data;
      this.pagination.tablePageSize.subscribe((res: tablePageSize) => {
        if (this.router.url == this.routes.superAdminCompanies) {
          this.getTableData({ skip: res.skip, limit: res.limit });
          this.pageSize = res.pageSize;
        }
      });
    });
    this.maxDate.setDate(this.maxDate.getDate() + 7);
    this.bsRangeValue = [this.bsValue, this.maxDate];
    this.project = [
      { name: 'Devops Design' },
      { name: 'MargrateDesign' },
      { name: 'UI for Chat' },
      { name: 'Web Chat' },
    ];
    this.selectedProjects = [
      { name: 'Devops Design' },
      { name: 'Web Chat' },
      { name: 'UI for Chat' },
    ];
  }
  private getTableData(pageOption: pageSelection): void {
    this.data.getCompanies().subscribe((apiRes: apiResultFormat) => {
      this.tableData = [];
      this.tableDataCopy = [];
      this.serialNumberArray = [];
      this.totalData = apiRes.totalData;
      apiRes.data.map((res: CompanyAccount, index: number) => {
        const serialNumber = index + 1;
        if (index >= pageOption.skip && serialNumber <= pageOption.limit) {
          res.sNo = serialNumber;
          this.tableData.push(res);
          this.tableDataCopy.push(res);
          this.serialNumberArray.push(serialNumber);
        }
      });
      this.dataSource = new MatTableDataSource<CompanyAccount>(this.actualData);
      this.pagination.calculatePageSize.next({
        totalData: this.totalData,
        pageSize: this.pageSize,
        tableData: this.tableData,
        tableDataCopy: this.tableDataCopy,
        serialNumberArray: this.serialNumberArray,
      });
    });
  }

  public searchData(value: string): void {
    if (value == '') {
      this.tableData = this.tableDataCopy;
    } else {
      this.dataSource.filter = value.trim().toLowerCase();
      this.tableData = this.dataSource.filteredData;
    }
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
  public changePageSize(pageSize: number): void {
    this.pageSelection = [];
    this.limit = pageSize;
    this.skip = 0;
    this.currentPage = 1;
    this.pagination.tablePageSize.next({
      skip: this.skip,
      limit: this.limit,
      pageSize: this.pageSize,
    });
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
  onClickStar(item: CompanyAccount) {
    item.isStarActive = !item.isStarActive;
  }
  openSidebarPopup() {
    this.sidebarPopup = !this.sidebarPopup;
  }
  openSidebarPopup2() {
    this.sidebarPopup2 = !this.sidebarPopup2;
  }
  openSidebarPopup3() {
    this.sidebarPopup3 = !this.sidebarPopup3;
  }
  selectedUser: any;
  selectedUser2: any;

  users = [
    { name: 'Jerald', image: 'assets/img/profiles/avatar-14.jpg' },
    { name: 'Guillory', image: 'assets/img/profiles/avatar-15.jpg' },
    { name: 'Jami', image: 'assets/img/profiles/avatar-16.jpg' },
    { name: 'Theresa', image: 'assets/img/profiles/avatar-13.jpg' },
    { name: 'Espinosa', image: 'assets/img/profiles/avatar-24.jpg' },
  ];
  users2 = [
    { name: 'Jerald', image: 'assets/img/profiles/avatar-14.jpg' },
    { name: 'Guillory', image: 'assets/img/profiles/avatar-15.jpg' },
    { name: 'Jami', image: 'assets/img/profiles/avatar-16.jpg' },
    { name: 'Theresa', image: 'assets/img/profiles/avatar-13.jpg' },
    { name: 'Espinosa', image: 'assets/img/profiles/avatar-24.jpg' },
  ];

  ngOnInit(): void {
    this.Areachart = {
      series: [{
        name: "",
        data: [25, 66, 41, 12, 36, 9, 21]
      }],
      fill: {
        type: 'gradient',
        gradient: {
          opacityFrom: 0, // Start with 0 opacity (transparent)
          opacityTo: 0    // End with 0 opacity (transparent)
        }
      },
      chart: {
        foreColor: '#fff',
        type: "area",
        width: 50,
        toolbar: {
          show: !1
        },
        zoom: {
          enabled: !1
        },
        dropShadow: {
          enabled: 0,
          top: 3,
          left: 14,
          blur: 4,
          opacity: .12,
          color: "#fff"
        },
        sparkline: {
          enabled: !0
        }
      },
      markers: {
        size: 0,
        colors: ["#F26522"],
        strokeColors: "#fff",
        strokeWidth: 2,
        hover: {
          size: 7
        }
      },
      plotOptions: {
        bar: {
          horizontal: !1,
          columnWidth: "35%",
          endingShape: "rounded"
        }
      },
      dataLabels: {
        enabled: !1
      },
      stroke: {
        show: !0,
        width: 2.5,
        curve: "smooth"
      },
      colors: ["#F26522"],
      xaxis: {
        categories: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep"]
      },
      tooltip: {
        theme: "dark",
        fixed: {
          enabled: !1
        },
        x: {
          show: !1
        },

        marker: {
          show: !1
        }
      }
    };
    this.Areachart2 = {
      series: [{
        name: "",
        data: [25, 40, 35, 20, 36, 9, 21]
      }],
      fill: {
        type: 'gradient',
        gradient: {
          opacityFrom: 0, // Start with 0 opacity (transparent)
          opacityTo: 0    // End with 0 opacity (transparent)
        }
      },
      chart: {
        foreColor: '#fff',
        type: "area",
        width: 50,
        toolbar: {
          show: !1
        },
        zoom: {
          enabled: !1
        },
        dropShadow: {
          enabled: 0,
          top: 3,
          left: 14,
          blur: 4,
          opacity: .12,
          color: "#fff"
        },
        sparkline: {
          enabled: !0
        }
      },
      markers: {
        size: 0,
        colors: ["#F26522"],
        strokeColors: "#fff",
        strokeWidth: 2,
        hover: {
          size: 7
        }
      },
      plotOptions: {
        bar: {
          horizontal: !1,
          columnWidth: "35%",
          endingShape: "rounded"
        }
      },
      dataLabels: {
        enabled: !1
      },
      stroke: {
        show: !0,
        width: 2.5,
        curve: "smooth"
      },
      colors: ["#F26522"],
      xaxis: {
        categories: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep"]
      },
      tooltip: {
        theme: "dark",
        fixed: {
          enabled: !1
        },
        x: {
          show: !1
        },

        marker: {
          show: !1
        }
      }
    };
    this.Areachart3 = {
      series: [{
        name: "",
        data: [25, 10, 35, 5, 25, 28, 21]
      }],
      fill: {
        type: 'gradient',
        gradient: {
          opacityFrom: 0, // Start with 0 opacity (transparent)
          opacityTo: 0    // End with 0 opacity (transparent)
        }
      },
      chart: {
        foreColor: '#fff',
        type: "area",
        width: 50,
        toolbar: {
          show: !1
        },
        zoom: {
          enabled: !1
        },
        dropShadow: {
          enabled: 0,
          top: 3,
          left: 14,
          blur: 4,
          opacity: .12,
          color: "#fff"
        },
        sparkline: {
          enabled: !0
        }
      },
      markers: {
        size: 0,
        colors: ["#F26522"],
        strokeColors: "#fff",
        strokeWidth: 2,
        hover: {
          size: 7
        }
      },
      plotOptions: {
        bar: {
          horizontal: !1,
          columnWidth: "35%",
          endingShape: "rounded"
        }
      },
      dataLabels: {
        enabled: !1
      },
      stroke: {
        show: !0,
        width: 2.5,
        curve: "smooth"
      },
      colors: ["#F26522"],
      xaxis: {
        categories: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep"]
      },
      tooltip: {
        theme: "dark",
        fixed: {
          enabled: !1
        },
        x: {
          show: !1
        },

        marker: {
          show: !1
        }
      }
    };
    this.Areachart4 = {
      series: [{
        name: "",
        data: [30, 40, 15, 23, 20, 23, 25]
      }],
      fill: {
        type: 'gradient',
        gradient: {
          opacityFrom: 0, // Start with 0 opacity (transparent)
          opacityTo: 0    // End with 0 opacity (transparent)
        }
      },
      chart: {
        foreColor: '#fff',
        type: "area",
        width: 50,
        toolbar: {
          show: !1
        },
        zoom: {
          enabled: !1
        },
        dropShadow: {
          enabled: 0,
          top: 3,
          left: 14,
          blur: 4,
          opacity: .12,
          color: "#fff"
        },
        sparkline: {
          enabled: !0
        }
      },
      markers: {
        size: 0,
        colors: ["#F26522"],
        strokeColors: "#fff",
        strokeWidth: 2,
        hover: {
          size: 7
        }
      },
      plotOptions: {
        bar: {
          horizontal: !1,
          columnWidth: "35%",
          endingShape: "rounded"
        }
      },
      dataLabels: {
        enabled: !1
      },
      stroke: {
        show: !0,
        width: 2.5,
        curve: "smooth"
      },
      colors: ["#F26522"],
      xaxis: {
        categories: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep"]
      },
      tooltip: {
        theme: "dark",
        fixed: {
          enabled: !1
        },
        x: {
          show: !1
        },

        marker: {
          show: !1
        }
      }
    };
  }
}
