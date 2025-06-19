/* eslint-disable @typescript-eslint/no-explicit-any */
import { Component, Renderer2, OnInit, OnDestroy } from '@angular/core';
import { routes } from '../../../../../shared/routes/routes';
import { MatTableDataSource } from '@angular/material/table';
import { DataService } from '../../../../../shared/data/data.service';
import {
  PaginationService,
  tablePageSize,
} from '../../../../../shared/custom-pagination/pagination.service';
import { Router } from '@angular/router';
import { Sort } from '@angular/material/sort';
import { Editor, Toolbar, Validators } from 'ngx-editor';
import { FormControl, FormGroup } from '@angular/forms';
import {
  apiResultFormat,
  dealsList,
  pageSelection,
} from '../../../../../shared/model/pages.model';
interface project {
  name: string;
}

@Component({
    selector: 'app-deals-list',
    templateUrl: './deals-list.component.html',
    styleUrl: './deals-list.component.scss',
    standalone: false
})
export class DealsListComponent implements OnInit, OnDestroy {
  public routes = routes;
  // pagination variables
  public tableData: dealsList[] = [];
  public pageSize = 10;
  public serialNumberArray: number[] = [];
  public totalData = 0;
  showFilter = false;
  dataSource!: MatTableDataSource<dealsList>;
  public searchDataValue = '';
  public tableDataCopy: dealsList[] = [];
  public actualData: dealsList[] = [];
  //** pagination variables

  public sidebarPopup = false;
  public sidebarPopup2 = false;
  public sidebarPopup3 = false;

  initChecked = false;

  bsValue = new Date();
  bsRangeValue: Date[];
  maxDate = new Date();

  project!: project[];
  selectedProjects!: project[];

  constructor(
    private data: DataService,
    private pagination: PaginationService,
    private router: Router,
    private renderer: Renderer2,
  ) {
    this.data.getDealsList().subscribe((apiRes: apiResultFormat) => {
      this.actualData = apiRes.data;
      this.pagination.tablePageSize.subscribe((res: tablePageSize) => {
        if (this.router.url == this.routes.dealsList) {
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
    this.data.getDealsList().subscribe((apiRes: apiResultFormat) => {
      this.tableData = [];
      this.tableDataCopy = [];
      this.serialNumberArray = [];
      this.totalData = apiRes.totalData;
      apiRes.data.map((res: dealsList, index: number) => {
        const serialNumber = index + 1;
        if (index >= pageOption.skip && serialNumber <= pageOption.limit) {
          res.id = serialNumber;
          this.tableData.push(res);
          this.serialNumberArray.push(serialNumber);
          this.tableDataCopy.push(res);
        }
      });
      this.dataSource = new MatTableDataSource<dealsList>(this.actualData);
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

  editor!: Editor;
  toolbar: Toolbar = [
    ['bold', 'italic'],
    ['underline', 'strike'],
    ['code', 'blockquote'],
    ['ordered_list', 'bullet_list'],
    [{ heading: ['h1', 'h2', 'h3', 'h4', 'h5', 'h6'] }],
    ['link', 'image'],
    ['text_color', 'background_color'],
    ['align_left', 'align_center', 'align_right', 'align_justify'],
  ];

  form = new FormGroup({
    editorContent: new FormControl('', Validators.required()),
  });

  ngOnInit(): void {
    this.editor = new Editor();
    this.selectedValue1 = [
      { name: 'Sales' },
      { name: 'Marketing' },
      { name: 'Calls' },
    ];
    this.selectedValue2 = [
      { name: 'Open' },
      { name: 'Lost' },
      { name: 'Won' },
    ];
  }

  ngOnDestroy(): void {
    this.editor.destroy();
  }
  values: string[] = ['Jack', 'Darlee Robertson'];
  values2: string[] = ['Divine dran'];
  values3: string[] = ['James'];
  values4: string[] = ['Collab', 'Rated'];
  values5: string[] = ['Tag1'];
  values6: string[] = ['Tag1'];
  text: string | undefined;
  onClickStar(item: dealsList) {
    item.isStarActive = !item.isStarActive;
  }
  selectedOption1: any;
  selectedOption2: any;
  selectedOption3: any;
  selectedOption4: any;
  selectedOption5: any;
  selectedOption6: any;

  option1 = [
    {
      id: 1,
      name: 'Jerald',
      image: 'assets/img/profiles/avatar-18.jpg',
    },
    { id: 2, name: 'Sharon Roy', image: 'assets/img/profiles/avatar-20.jpg' },
    { id: 3, name: 'Vaughan', image: 'assets/img/profiles/avatar-21.jpg' },
    { id: 4, name: 'Jessica', image: 'assets/img/profiles/avatar-23.jpg' },
    { id: 5, name: 'Carol Thomas', image: 'assets/img/profiles/avatar-16.jpg' },
  ];
  option2 = [
    {
      id: 1,
      name: 'Jerald',
      image: 'assets/img/profiles/avatar-18.jpg',
    },
    { id: 2, name: 'Sharon Roy', image: 'assets/img/profiles/avatar-20.jpg' },
    { id: 3, name: 'Vaughan', image: 'assets/img/profiles/avatar-21.jpg' },
    { id: 4, name: 'Jessica', image: 'assets/img/profiles/avatar-23.jpg' },
    { id: 5, name: 'Carol Thomas', image: 'assets/img/profiles/avatar-16.jpg' },
  ];
  option3 = [
    {
      id: 1,
      name: 'Jerald',
      image: 'assets/img/profiles/avatar-18.jpg',
    },
    { id: 2, name: 'Sharon Roy', image: 'assets/img/profiles/avatar-20.jpg' },
    { id: 3, name: 'Vaughan', image: 'assets/img/profiles/avatar-21.jpg' },
    { id: 4, name: 'Jessica', image: 'assets/img/profiles/avatar-23.jpg' },
    { id: 5, name: 'Carol Thomas', image: 'assets/img/profiles/avatar-16.jpg' },
  ];
  option4 = [
    {
      id: 1,
      name: 'Jerald',
      image: 'assets/img/profiles/avatar-18.jpg',
    },
    { id: 2, name: 'Sharon Roy', image: 'assets/img/profiles/avatar-20.jpg' },
    { id: 3, name: 'Vaughan', image: 'assets/img/profiles/avatar-21.jpg' },
    { id: 4, name: 'Jessica', image: 'assets/img/profiles/avatar-23.jpg' },
    { id: 5, name: 'Carol Thomas', image: 'assets/img/profiles/avatar-16.jpg' },
  ];
  option5 = [
    {
      id: 1,
      name: 'Jerald',
      image: 'assets/img/profiles/avatar-18.jpg',
    },
    { id: 2, name: 'Sharon Roy', image: 'assets/img/profiles/avatar-20.jpg' },
    { id: 3, name: 'Vaughan', image: 'assets/img/profiles/avatar-21.jpg' },
    { id: 4, name: 'Jessica', image: 'assets/img/profiles/avatar-23.jpg' },
    { id: 5, name: 'Carol Thomas', image: 'assets/img/profiles/avatar-16.jpg' },
  ];
  option6 = [
    {
      id: 1,
      name: 'Jerald',
      image: 'assets/img/profiles/avatar-18.jpg',
    },
    { id: 2, name: 'Sharon Roy', image: 'assets/img/profiles/avatar-20.jpg' },
    { id: 3, name: 'Vaughan', image: 'assets/img/profiles/avatar-21.jpg' },
    { id: 4, name: 'Jessica', image: 'assets/img/profiles/avatar-23.jpg' },
    { id: 5, name: 'Carol Thomas', image: 'assets/img/profiles/avatar-16.jpg' },
  ];

  removeOption1(user: any) {
    const index = this.selectedOption1.indexOf(user);
    if (index !== -1) {
      this.selectedOption1.splice(index, 1);
    }
  }
  removeOption2(user: any) {
    const index = this.selectedOption2.indexOf(user);
    if (index !== -1) {
      this.selectedOption2.splice(index, 1);
    }
  }
  removeOption3(user: any) {
    const index = this.selectedOption3.indexOf(user);
    if (index !== -1) {
      this.selectedOption3.splice(index, 1);
    }
  }
  removeOption4(user: any) {
    const index = this.selectedOption4.indexOf(user);
    if (index !== -1) {
      this.selectedOption4.splice(index, 1);
    }
  }
  removeOption5(user: any) {
    const index = this.selectedOption5.indexOf(user);
    if (index !== -1) {
      this.selectedOption5.splice(index, 1);
    }
  }
  removeOption6(user: any) {
    const index = this.selectedOption5.indexOf(user);
    if (index !== -1) {
      this.selectedOption5.splice(index, 1);
    }
  }

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

  values1: string[] = ['Collab'];

  matSelectChipDataSelected: string[] = [
    'Devops Design',
    'MargrateDesign',
    'UI for Chat',
  ];
  matSelectChipData: string[] = [
    'Devops Design',
    'MargrateDesign',
    'UI for Chat',
    'Web Chat',
  ];
  removeOptionUnique(option: any) {
    const index = this.matSelectChipDataSelected.indexOf(option);
    if (index !== -1) {
      this.matSelectChipDataSelected.splice(index, 1);
    }
  }
  navigateToGigs() {
    // Remove the modal backdrop
    const backdrop = document.querySelector('.modal-backdrop');
    if (backdrop) {
      this.renderer.removeChild(backdrop.parentNode, backdrop);
    }
  
    // Reset any potential scroll blockers
    document.body.style.overflow = 'auto';
  
    // Navigate to the specified route
    this.router.navigate(['/deals/deals-details']);
  }
}
