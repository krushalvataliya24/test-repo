/* eslint-disable @typescript-eslint/no-explicit-any */
import { Component } from '@angular/core';
import { routes } from '../../../../../shared/routes/routes';
import {
  CdkDragDrop,
  moveItemInArray,
  transferArrayItem,
} from '@angular/cdk/drag-drop';
@Component({
    selector: 'app-leads-kanban',
    templateUrl: './leads-kanban.component.html',
    styleUrl: './leads-kanban.component.scss',
    standalone: false
})
export class LeadsKanbanComponent {
  public routes = routes
  public sidebarPopup = false;
  public sidebarPopup2 = false;
  public sidebarPopup3 = false;
  public lstOne: CardDetails[] = [];
  public lstTwo: CardDetails[] = [];
  public lstThree: CardDetails[] = [];
  public lstFour: CardDetails[] = [];

  //  drap and drop
    onDrop(event: CdkDragDrop<CardDetails[]>) {
      if (event.previousContainer === event.container) {
        moveItemInArray(
          event.container.data,
          event.previousIndex,
          event.currentIndex
        );
      } else {
        transferArrayItem(
          event.previousContainer.data,
          event.container.data,
          event.previousIndex,
          event.currentIndex
        );
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
  values1: string[] = ['Rated'];
  values2: string[] = ['Rated'];
  selectedOption1: any;
  selectedOption2: any;
  selectedOption3: any;
  selectedOption4: any;
  selectedOption5: any;
  selectedOption6: any;
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
  newContents: number[] = [0];

  addNewContent() {
    this.newContents.push(this.newContents.length);
  }
  ngOnInit(): void {
    this.lstOne = [
      {
        CardClass: "bg-warning",
        Logo: "SM",
        CompanyName: "Schumm",
        Amount: "$03,50,000",
        Email: "darleeo@example.com",
        MobileNo: "+1 12445-47878",
        Location: "Newyork, United States",
        Image: "company-icon-09.svg",
      },
      {
        CardClass: "bg-success",
        Logo: "CS",
        CompanyName: "Collins",
        Amount: "$02,10,000",
        Email: "robertson@example.com",
        MobileNo: "+1 13987-90231",
        Location: "Austin, United States",
        Image: "company-icon-01.svg",
      },
      {
        CardClass: "bg-danger",
        Logo: "KI",
        CompanyName: "Konopelski",
        Amount: "$02,18,000",
        Email: "sharon@example.com",
        MobileNo: "+1 17932-04278",
        Location: "Atlanta, United States",
        Image: "company-icon-02.svg",
      },
    ];
    this.lstTwo = [
      {
        CardClass: "bg-purple",
        Logo: "AS",
        CompanyName: "Adams",
        Amount: "$02,45,000",
        Email: "vaughan12@example.com",
        MobileNo: "+1 17392-27846",
        Location: "London, United Kingdom",
        Image: "company-icon-03.svg",
      },
      {
        CardClass: "bg-warning",
        Logo: "WK",
        CompanyName: "Wizosk",
        Amount: "$01,17,000",
        Email: "caroltho3@example.com",
        MobileNo: "+1 78982-09163",
        Location: "Bristol, United Kingdom",
        Image: "company-icon-04.svg",
      },
      {
        CardClass: "bg-success",
        Logo: "HR",
        CompanyName: "Heller",
        Amount: "$02,12,000",
        Email: "dawnmercha@example.com",
        MobileNo: "+1 27691-89246",
        Location: "San Francisco, United States",
        Image: "company-icon-05.svg",
      },
    ];
    this.lstThree = [
      {
        CardClass: "bg-success",
        Logo: "GI",
        CompanyName: "Gutkowsi",
        Amount: "$01,84,043",
        Email: "rachel@example.com",
        MobileNo: "+1 17839-93617",
        Location: "Dallas, United States",
        Image: "company-icon-06.svg",
      },
      {
        CardClass: "bg-danger",
        Logo: "WR",
        CompanyName: "Walter",
        Amount: "$09,35,189",
        Email: "jonelle@example.com",
        MobileNo: "+1 16739-47193",
        Location: "Leicester, United Kingdom",
        Image: "company-icon-07.svg",
      },
      {
        CardClass: "bg-purple",
        Logo: "HN",
        CompanyName: "Hansen",
        Amount: "$04,27,940",
        Email: "jonathan@example.com",
        MobileNo: "+1 18390-37153",
        Location: "Norwich, United Kingdom",
        Image: "company-icon-08.svg",
      },
    ];
    this.lstFour = [
      {
        CardClass: "bg-danger",
        Logo: "SE",
        CompanyName: "Steve",
        Amount: "$04,17,593",
        Email: "sidney@example.com",
        MobileNo: "+1 11739-38135",
        Location: "Manchester, United Kingdom",
        Image: "company-icon-09.svg",
      },
      {
        CardClass: "bg-success",
        Logo: "LE",
        CompanyName: "Leuschke",
        Amount: "$08,81,389",
        Email: "brook@example.com",
        MobileNo: "+1 19302-91043",
        Location: "Chicago, United States",
        Image: "company-icon-10.svg",
      },
      {
        CardClass: "bg-warning",
        Logo: "AY",
        CompanyName: "Anthony",
        Amount: "$09,27,193",
        Email: "mickey@example.com",
        MobileNo: "+1 17280-92016",
        Location: "Derby, United Kingdom",
        Image: "company-icon-01.svg",
      },
    ];
  }
}
interface CardDetails {
  CardClass: string;
  Logo: string;
  CompanyName: string;
  Amount: string;
  Email: string;
  MobileNo: string;
  Location: string;
  Image: string;
}