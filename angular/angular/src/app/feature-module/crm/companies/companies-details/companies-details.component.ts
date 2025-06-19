/* eslint-disable @typescript-eslint/no-explicit-any */
import { Component, OnInit } from '@angular/core';
import { routes } from '../../../../../shared/routes/routes';

interface hoursData {
  data: string;
}
@Component({
    selector: 'app-companies-details',
    templateUrl: './companies-details.component.html',
    styleUrl: './companies-details.component.scss',
    standalone: false
})
export class CompaniesDetailsComponent implements OnInit {
  public routes = routes;
  public sidebarPopup1 = false;
  public sidebarPopup2 = false;
  public sidebarPopup3 = false;
  text: string | undefined;
  comments: boolean[] = [false, false, false];
  public signContent: any[] = [];
  public chargesArray: hoursData[] = [];

  openSidebarPopup1() {
    this.sidebarPopup1 = !this.sidebarPopup1;
  }
  openSidebarPopup2() {
    this.sidebarPopup2 = !this.sidebarPopup2;
  }
  openSidebarPopup3() {
    this.sidebarPopup3 = !this.sidebarPopup3;
  }
  values1: string[] = ['Collab'];
  values2: string[] = ['Collab'];
  values3: string[] = ['Collab', 'Rated'];
  values4: string[] = ['Tag1'];

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

  
  ngOnInit() {
    this.selectedValue1 = [
      { name: 'Collins' },
      { name: 'Konopelski' },
      { name: 'Adams' },
      { name: 'Schumm' },
      { name: 'Wisozk' }
    ];
    this.selectedValue2 = [
      { name: 'Choose' },
      { name: 'Phone Calls' },
      { name: 'Social Media' },
      { name: 'Referral Sites' },
      { name: 'Web Analytics' },
      { name: 'Previous Purchases' }
    ];
    this.selectedValue3 = [
      { name: 'Collins' },
      { name: 'Konopelski' },
      { name: 'Adams' },
      { name: 'Schumm' },
      { name: 'Wisozk' }
    ];
    this.selectedValue4 = [
      { name: 'Choose' },
      { name: 'Phone Calls' },
      { name: 'Social Media' },
      { name: 'Referral Sites' },
      { name: 'Web Analytics' },
      { name: 'Previous Purchases' }
    ];
    this.selectedValue5 = [
      { name: 'Sales' },
      { name: 'Marketing' },
      { name: 'Calls' },
    ];
    this.selectedValue6 = [
      { name: 'Open' },
      { name: 'Lost' },
      { name: 'Won' },
    ];
  }
  openComment(index: number) {
    this.comments[index] = !this.comments[index];
  }
  addCharges() {
    const newData: hoursData = {
      data: '',
    };
    this.chargesArray.push(newData);
  }
  deleteCharges(index: number) {
    this.chargesArray.splice(index, 1);
  }
}
