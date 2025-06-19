/* eslint-disable @typescript-eslint/no-explicit-any */
import { Component, OnInit } from '@angular/core';
import { routes } from '../../../../../shared/routes/routes';
import { Editor, Toolbar } from 'ngx-editor';

@Component({
    selector: 'app-contact-grid',
    templateUrl: './contact-grid.component.html',
    styleUrl: './contact-grid.component.scss',
    standalone: false
})
export class ContactGridComponent implements OnInit {
  public routes = routes;
  bsValue = new Date();
  bsRangeValue: Date[];
  maxDate = new Date();
  constructor() {
    this.maxDate.setDate(this.maxDate.getDate() + 7);
    this.bsRangeValue = [this.bsValue, this.maxDate];
  }
  public sidebarPopup1 = false;
  public sidebarPopup2 = false;
  public sidebarPopup3 = false;

  openSidebarPopup1() {
    this.sidebarPopup1 = !this.sidebarPopup1;
  }
  openSidebarPopup2() {
    this.sidebarPopup2 = !this.sidebarPopup2;
  }
  openSidebarPopup3() {
    this.sidebarPopup3 = !this.sidebarPopup3;
  }

  selectedValue1: any[] | undefined;
  selectedValue2: any[] | undefined;
  selectedValue3: any[] | undefined;
  selectedValue4: any[] | undefined;
  selectedValue5: any[] | undefined;
  selectedValue6: any[] | undefined;
  selectedValue7: any[] | undefined;
  selectedValue8: any[] | undefined;

  selectedDatas1: any[] | undefined;
  selectedDatas2: any[] | undefined;
  selectedDatas3: any[] | undefined;
  selectedDatas4: any[] | undefined;
  selectedDatas5: any[] | undefined;
  selectedDatas6: any[] | undefined;
  selectedDatas7: any[] | undefined;
  selectedDatas8: any[] | undefined;
  values1: string[] = ['Collab'];
  values2: string[] = ['Collab'];
  values3: string[] = ['Collab', 'Rated'];

  ngOnInit() {
    this.selectedValue1 = [
      { name: 'NovaWave LLC' },
      { name: 'BlueSky Industries' },
      { name: 'SilverHawk' },
      { name: 'SummitPeak' },
      { name: 'RiverStone Ventur' },
    ];
    this.selectedValue2 = [
      { name: 'NovaWave LLC' },
      { name: 'BlueSky Industries' },
      { name: 'SilverHawk' },
      { name: 'SummitPeak' },
      { name: 'RiverStone Ventur' },
    ];
    this.selectedValue3 = [
      { name: 'Collins' },
      { name: 'Konopelski' },
      { name: 'Adams' },
      { name: 'Schumm' },
      { name: 'Wisozk' },
    ];
    this.selectedValue4 = [
      { name: 'Collins' },
      { name: 'Konopelski' },
      { name: 'Adams' },
      { name: 'Schumm' },
      { name: 'Wisozk' },
    ];
    this.selectedValue5 = [
      { name: 'Phone Calls' },
      { name: 'Social Media' },
      { name: 'Referral Sites' },
      { name: 'Web Analytics' },
      { name: 'Previous Purchases' },
    ];
    this.selectedValue6 = [
      { name: 'Phone Calls' },
      { name: 'Social Media' },
      { name: 'Referral Sites' },
      { name: 'Web Analytics' },
      { name: 'Previous Purchases' },
    ];
    this.selectedValue7 = [
      { name: 'Sales' },
      { name: 'Marketing' },
      { name: 'Calls' },
    ];
    this.selectedValue8 = [{ name: 'Open' }, { name: 'Lost' }, { name: 'Won' }];
  }
  selectedOption1: any;
  selectedOption2: any;
  selectedOption3: any;
  selectedOption4: any;
  selectedOption5: any;
  selectedOption6: any;
  selectedOption7: any;
  selectedOption8: any;


  option1 = [
    {
      id: 1,
      name: 'Darlee Robertson',
      image: 'assets/img/profiles/avatar-19.jpg',
    },
    { id: 2, name: 'Sharon Roy', image: 'assets/img/profiles/avatar-20.jpg' },
    { id: 3, name: 'Vaughan', image: 'assets/img/profiles/avatar-21.jpg' },
    { id: 4, name: 'Jessica', image: 'assets/img/profiles/avatar-23.jpg' },
    { id: 5, name: 'Carol Thomas', image: 'assets/img/profiles/avatar-16.jpg' },
  ];
  option2 = [
    {
      id: 1,
      name: 'Darlee Robertson',
      image: 'assets/img/profiles/avatar-19.jpg',
    },
    { id: 2, name: 'Sharon Roy', image: 'assets/img/profiles/avatar-20.jpg' },
    { id: 3, name: 'Vaughan', image: 'assets/img/profiles/avatar-21.jpg' },
    { id: 4, name: 'Jessica', image: 'assets/img/profiles/avatar-23.jpg' },
    { id: 5, name: 'Carol Thomas', image: 'assets/img/profiles/avatar-16.jpg' },
  ];
  option3 = [
    {
      id: 1,
      name: 'Darlee Robertson',
      image: 'assets/img/profiles/avatar-19.jpg',
    },
    { id: 2, name: 'Sharon Roy', image: 'assets/img/profiles/avatar-20.jpg' },
    { id: 3, name: 'Vaughan', image: 'assets/img/profiles/avatar-21.jpg' },
    { id: 4, name: 'Jessica', image: 'assets/img/profiles/avatar-23.jpg' },
    { id: 5, name: 'Carol Thomas', image: 'assets/img/profiles/avatar-16.jpg' },
  ];
  option4 = [
    {
      id: 1,
      name: 'Darlee Robertson',
      image: 'assets/img/profiles/avatar-19.jpg',
    },
    { id: 2, name: 'Sharon Roy', image: 'assets/img/profiles/avatar-20.jpg' },
    { id: 3, name: 'Vaughan', image: 'assets/img/profiles/avatar-21.jpg' },
    { id: 4, name: 'Jessica', image: 'assets/img/profiles/avatar-23.jpg' },
    { id: 5, name: 'Carol Thomas', image: 'assets/img/profiles/avatar-16.jpg' },
  ];
  option5 = [
    {
      id: 1,
      name: 'Darlee Robertson',
      image: 'assets/img/profiles/avatar-19.jpg',
    },
    { id: 2, name: 'Sharon Roy', image: 'assets/img/profiles/avatar-20.jpg' },
    { id: 3, name: 'Vaughan', image: 'assets/img/profiles/avatar-21.jpg' },
    { id: 4, name: 'Jessica', image: 'assets/img/profiles/avatar-23.jpg' },
    { id: 5, name: 'Carol Thomas', image: 'assets/img/profiles/avatar-16.jpg' },
  ];
  option6 = [
    {
      id: 1,
      name: 'Darlee Robertson',
      image: 'assets/img/profiles/avatar-19.jpg',
    },
    { id: 2, name: 'Sharon Roy', image: 'assets/img/profiles/avatar-20.jpg' },
    { id: 3, name: 'Vaughan', image: 'assets/img/profiles/avatar-21.jpg' },
    { id: 4, name: 'Jessica', image: 'assets/img/profiles/avatar-23.jpg' },
    { id: 5, name: 'Carol Thomas', image: 'assets/img/profiles/avatar-16.jpg' },
  ];
  option7 = [
    {
      id: 1,
      name: 'Jerald',
      image: 'assets/img/profiles/avatar-14.jpg',
    },
    { id: 2, name: 'Guillory', image: 'assets/img/profiles/avatar-15.jpg' },
    { id: 3, name: 'Jami', image: 'assets/img/profiles/avatar-16.jpg' },
    { id: 4, name: 'Theresa', image: 'assets/img/profiles/avatar-13.jpg' },
    { id: 5, name: 'Espinosa', image: 'assets/img/profiles/avatar-24.jpg' },
  ];
  option8 = [
    {
      id: 1,
      name: 'Jerald',
      image: 'assets/img/profiles/avatar-14.jpg',
    },
    { id: 2, name: 'Guillory', image: 'assets/img/profiles/avatar-15.jpg' },
    { id: 3, name: 'Jami', image: 'assets/img/profiles/avatar-16.jpg' },
    { id: 4, name: 'Theresa', image: 'assets/img/profiles/avatar-13.jpg' },
    { id: 5, name: 'Espinosa', image: 'assets/img/profiles/avatar-24.jpg' },
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
  removeOption7(user: any) {
    const index = this.selectedOption7.indexOf(user);
    if (index !== -1) {
      this.selectedOption7.splice(index, 1);
    }
  }
  removeOption8(user: any) {
    const index = this.selectedOption7.indexOf(user);
    if (index !== -1) {
      this.selectedOption7.splice(index, 1);
    }
  }
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
}
