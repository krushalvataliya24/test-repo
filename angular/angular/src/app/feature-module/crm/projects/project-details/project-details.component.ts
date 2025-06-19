/* eslint-disable @typescript-eslint/no-explicit-any */
import { Component, OnInit } from '@angular/core';
import { routes } from '../../../../../shared/routes/routes';
interface hoursData {
  data: string;
}
@Component({
    selector: 'app-project-details',
    templateUrl: './project-details.component.html',
    styleUrl: './project-details.component.scss',
    standalone: false
})
export class ProjectDetailsComponent implements OnInit {
  public routes = routes;

  public sidebarPopup1 = false;
  public sidebarPopup2 = false;
  text: string | undefined;
  comments: boolean[] = [false, false, false];

  public signContent: any[] = [];
  public chargesArray: hoursData[] = [];

  selectedValue1: any[] | undefined;
  selectedValue2: any[] | undefined;
  selectedValue3: any[] | undefined;
  selectedValue4: any[] | undefined;

  selectedDatas1: any[] | undefined;
  selectedDatas2: any[] | undefined;
  selectedDatas3: any[] | undefined;
  selectedDatas4: any[] | undefined;

  ngOnInit() {
    this.selectedValue1 = [
      { name: 'Sales' },
      { name: 'Marketing' },
      { name: 'Calls' },
    ];
    this.selectedValue2 = [{ name: 'Mobile App' }, { name: 'Meeting' }];
    this.selectedValue3 = [{ name: 'Active' }, { name: 'Inactive' }];
    this.selectedValue4 = [{ name: 'Active' }, { name: 'Inactive' }];
  }

  openSidebarPopup1() {
    this.sidebarPopup1 = !this.sidebarPopup1;
  }
  openSidebarPopup2() {
    this.sidebarPopup2 = !this.sidebarPopup2;
  }
  openComment(index: number) {
    this.comments[index] = !this.comments[index];
  }

  addSignContent() {
    this.signContent.push(1);
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

  values1: string[] = ['Collab','Promotion'];
  values2: string[] = ['Collab','Promotion'];
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
  removeOption1(user: any) {
    const index = this.selectedOption1.indexOf(user);
    if (index !== -1) {
      this.selectedOption1.splice(index, 1);
    }
  }
  selectedOption1: any;
}
