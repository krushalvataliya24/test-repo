/* eslint-disable @typescript-eslint/no-explicit-any */
import { Component, OnInit } from '@angular/core';
import { Sort } from '@angular/material/sort';
import { MatTableDataSource } from '@angular/material/table';
import { Router } from '@angular/router';
import { DataService } from '../../../../../shared/data/data.service';
import { compaignList, apiResultFormat } from '../../../../../shared/model/pages.model';
import { routes } from '../../../../../shared/routes/routes';
import { PaginationService, tablePageSize, pageSelection } from '../../../../../shared/shared.index';

@Component({
    selector: 'app-campaign-archieve',
    templateUrl: './campaign-archieve.component.html',
    styleUrl: './campaign-archieve.component.scss',
    standalone: false
})
export class CampaignArchieveComponent implements OnInit {
  public routes = routes;
  // pagination variables
  public tableData: compaignList[] = [];
  public pageSize = 10;
  public serialNumberArray: number[] = [];
  public totalData = 0;
  showFilter = false;
  dataSource!: MatTableDataSource<compaignList>;
  public searchDataValue = '';
  public tableDataCopy: compaignList[] = [];
  public actualData: compaignList[] = [];
  //** pagination variables
  initChecked = false;
  public sidebarPopup1 = false;
  public sidebarPopup2 = false;

  constructor(
    private data: DataService,
    private pagination: PaginationService,
    private router: Router
  ) {
    this.data.getCompaignArchive().subscribe((apiRes: apiResultFormat) => {
      this.actualData = apiRes.data;
      this.pagination.tablePageSize.subscribe((res: tablePageSize) => {
        if (this.router.url == this.routes.compaignArchieve) {
          this.getTableData({ skip: res.skip, limit: res.limit });
          this.pageSize = res.pageSize;
        }
      });
    });
  }

  private getTableData(pageOption: pageSelection): void {
    this.data.getCompaignArchive().subscribe((apiRes: apiResultFormat) => {
      this.tableData = [];
      this.tableDataCopy = [];
      this.serialNumberArray = [];
      this.totalData = apiRes.totalData;
      apiRes.data.map((res: compaignList, index: number) => {
        const serialNumber = index + 1;
        if (index >= pageOption.skip && serialNumber <= pageOption.limit) {
          res.id = serialNumber;
          this.tableData.push(res);
          this.serialNumberArray.push(serialNumber);
          this.tableDataCopy.push(res);
        }
      });
      this.dataSource = new MatTableDataSource<compaignList>(this.actualData);
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
  openSidebarPopup1() {
    this.sidebarPopup1 = !this.sidebarPopup1;
  }
  openSidebarPopup2() {
    this.sidebarPopup2 = !this.sidebarPopup2;
  }
  selectedValue1: any[] | undefined;
  selectedValue2: any[] | undefined;

  selectedDatas1: any[] | undefined;
  selectedDatas2: any[] | undefined;

  ngOnInit() {
    this.selectedValue1 = [
      { name: 'Public Relations' },
      { name: 'Brand' },
      { name: 'Media' }
    ];
    this.selectedValue2 = [
      { name: 'Public Relations' },
      { name: 'Brand' },
      { name: 'Media' },
      { name: 'Sales' }
    ];
  }
  matSelectChipDataSelected: string[] = [
    'Small Business',
    'Corporate Companies',
    'Urban Apartment',
  ];
  matSelectChipData: string[] = [
    'Small Business',
    'Corporate Companies',
    'Urban Apartment',
    'Business',
  ];
  matSelectChipDataSelected2: string[] = [
    'Small Business',
    'Corporate Companies',
    'Urban Apartment',
  ];
  matSelectChipData2: string[] = [
    'Small Business',
    'Corporate Companies',
    'Urban Apartment',
    'Business',
  ];
  removeOptionUnique(option: any) {
    const index = this.matSelectChipDataSelected.indexOf(option);
    if (index !== -1) {
      this.matSelectChipDataSelected.splice(index, 1);
    }
  }
  removeOptionUnique2(option: any) {
    const index = this.matSelectChipDataSelected2.indexOf(option);
    if (index !== -1) {
      this.matSelectChipDataSelected2.splice(index, 1);
    }
  }
}
