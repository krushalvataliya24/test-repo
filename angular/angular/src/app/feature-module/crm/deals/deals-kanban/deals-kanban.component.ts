/* eslint-disable @typescript-eslint/no-explicit-any */
import { Component, OnInit, OnDestroy } from '@angular/core';
import { FormControl, FormGroup } from '@angular/forms';
import { Editor, Toolbar, Validators } from 'ngx-editor';
import { routes } from '../../../../../shared/routes/routes';
import {
  CdkDragDrop,
  moveItemInArray,
  transferArrayItem,
} from '@angular/cdk/drag-drop';
interface project {
  name: string;
}
interface hoursData {
  data: string;
}

@Component({
    selector: 'app-deals-kanban',
    templateUrl: './deals-kanban.component.html',
    styleUrl: './deals-kanban.component.scss',
    standalone: false
})
export class DealsKanbanComponent implements OnInit, OnDestroy {
  public routes = routes 
  public sidebarPopup = false;
  public sidebarPopup2 = false;
  public sidebarPopup3 = false;
  comments: boolean[] = [false, false, false];
  selectedOption2: any;
  selectedOption3: any;
  selectedOption4: any;
  selectedOption5: any;
  selectedOption6: any;
  
  public signContent: any[] = [];
  public chargesArray: hoursData[] = [];
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
    this.lstOne = [
      {
        CardClass: "bg-purple",
        Logo: "HT",
        CompanyName: "Howell, Tremblay and Rath",
        CompanyNameOne: "and Rath",
        Amount: "$03,50,000",
        Email: "darleeo@example.com",
        MobileNo: "+1 12445-47878",
        Location: "Newyork, United States",
        Image: "avatar-19.jpg",
        Name: "Darlee Robertson",
        Percentage: "85%",
        Date: "10 Jan 2024",
    },
    {
        CardClass: "bg-warning",
        Logo: "RJ",
        CompanyName: "Robert, John",
        CompanyNameOne: "and Carlos",
        Amount: "$02,10,000",
        Email: "sheron@example.com",
        MobileNo: "+1 12445-47878",
        Location: "Exeter, United States",
        Image: "avatar-20.jpg",
        Name: "Darlee Robertson",
        Percentage: "15%",
        Date: "12 Jan 2024",
    },
    {
        CardClass: "bg-success",
        Logo: "WS",
        CompanyName: "Wendy, Star",
        CompanyNameOne: "and David",
        Amount: "$04,22,000",
        Email: "vau@example.com",
        MobileNo: "+1 12445-47878",
        Location: "Phoenix, United States",
        Image: "avatar-21.jpg",
        Name: "Darlee Robertson",
        Percentage: "95%",
        Date: "14 Jan 2024",
    },
    ];
    this.lstTwo = [
      {
        CardClass: "bg-success",
        Logo: "BR",
        CompanyName: "Byron, Roman",
        CompanyNameOne: "and Bailey",
        Amount: "$02,45,000",
        Email: "jessica13@example.com",
        MobileNo: "+1 89351-90346",
        Location: "Chester, United States",
        Image: "avatar-01.jpg",
        Name: "Jessica",
        Percentage: "47%",
        Date: "06 Feb 2024",
    },
    {
        CardClass: "bg-purple",
        Logo: "CH",
        CompanyName: "Robert, John",
        CompanyNameOne: "and Carlos",
        Amount: "$01,17,000",
        Email: "caroltho3@example.com",
        MobileNo: "+1 78982-09163",
        Location: "Charlotte, United States",
        Image: "avatar-16.jpg",
        Name: "Carol Thomas",
        Percentage: "98%",
        Date: "15 Feb 2024",
    },
    {
        CardClass: "bg-danger",
        Logo: "IC",
        CompanyName: "Irene, Charles",
        CompanyNameOne: "and Wilston",
        Amount: "$02,12,000",
        Email: "dawnmercha@example.com",
        MobileNo: "+1 27691-89246",
        Location: "Bristol, United States",
        Image: "avatar-22.jpg",
        Name: "Dawn Mercha",
        Percentage: "78%",
        Date: "25 Jan 2024",
    },
    ];
    this.lstThree = [
      {
        CardClass: "bg-warning",
        Logo: "HT",
        CompanyName: "Jody, Powell",
        CompanyNameOne: "and Cecil",
        Amount: "$01,84,043",
        Email: "rachel@example.com",
        MobileNo: "+1 17839-93617",
        Location: "Baltimore, United States",
        Image: "avatar-23.jpg",
        Name: "Rachel Hampton",
        Percentage: "25%",
        Date: "18 Mar 2024",
    },
    {
        CardClass: "bg-success",
        Logo: "BL",
        CompanyName: "Bonnie, Linda",
        CompanyNameOne: "and Mullin",
        Amount: "$09,35,189",
        Email: "jonelle@example.com",
        MobileNo: "+1 16739-47193",
        Location: "Coventry, United States",
        Image: "avatar-24.jpg",
        Name: "Jonelle Curtiss",
        Percentage: "70%",
        Date: "15 Feb 2024",
    },
    {
        CardClass: "bg-purple",
        Logo: "CJ",
        CompanyName: "Carlos, Jones",
        CompanyNameOne: "and Jim",
        Amount: "$04,27,940",
        Email: "jonathan@example.com",
        MobileNo: "+1 18390-37153",
        Location: "Seattle",
        Image: "avatar-25.jpg",
        Name: "Jonathan",
        Percentage: "45%",
        Date: "30 Jan 2024",
    },
    ];
    this.lstFour = [
      {
        CardClass: "bg-danger",
        Logo: "FJ",
        CompanyName: "Freda,Jennfier",
        CompanyNameOne: "and Thompson",
        Amount: "$04,17,593",
        Email: "sidney@example.com",
        MobileNo: "+1 11739-38135",
        Location: "London, United States",
        Image: "avatar-17.jpg",
        Name: "Sidney Franks",
        Percentage: "59%",
        Date: "11 Apr 2024",
    },
    {
        CardClass: "bg-purple",
        Logo: "BF",
        CompanyName: "Bruce, Faulkner",
        CompanyNameOne: "and Lela",
        Amount: "$08,81,389",
        Email: "brook@example.com",
        MobileNo: "+1 19302-91043",
        Location: "Detroit, United States",
        Image: "avatar-26.jpg",
        Name: "Brook",
        Percentage: "72%",
        Date: "17 Apr 2024",
    },
    {
        CardClass: "bg-warning",
        Logo: "LP",
        CompanyName: "Lawrence, Patrick",
        CompanyNameOne: "and Vandorn",
        Amount: "$09,27,193",
        Email: "mickey@example.com",
        MobileNo: "+1 17280-92016",
        Location: "Manchester, United States",
        Image: "avatar-15.jpg",
        Name: "Mickey",
        Percentage: "20%",
        Date: "10 Feb 2024",
    },
    ];
  }

  ngOnDestroy(): void {
    this.editor.destroy();
  }
  project!: project[];
  selectedProjects!: project[];
  
  values: string[] = ['Jack', 'Darlee Robertson'];
  values2: string[] = ['Divine dran'];
  values3: string[] = ['James'];
  values4: string[] = ['Tag1'];
  values5: string[] = ['Tag1'];
  values6: string[] = ['Tag1'];
  text: string | undefined;

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

}

interface CardDetails {
  CardClass: string;
  Logo: string;
  CompanyName: string;
  CompanyNameOne: string;
  Amount: string;
  Email: string;
  MobileNo: string;
  Location: string;
  Image: string;
  Name: string;
  Percentage: string;
  Date: string;
}
