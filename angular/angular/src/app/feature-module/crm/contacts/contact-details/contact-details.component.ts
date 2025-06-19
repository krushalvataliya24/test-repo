/* eslint-disable @typescript-eslint/no-explicit-any */
import { Component, OnInit, OnDestroy } from '@angular/core';
import { Editor, Toolbar, Validators } from 'ngx-editor';
import { FormControl, FormGroup } from '@angular/forms';
import { routes } from '../../../../../shared/routes/routes';
interface project {
  name: string;
}
interface hoursData {
  data: string;
}
@Component({
    selector: 'app-contact-details',
    templateUrl: './contact-details.component.html',
    styleUrl: './contact-details.component.scss',
    standalone: false
})
export class ContactDetailsComponent implements OnInit, OnDestroy {
  public sidebarPopup = false;
  public sidebarPopup2 = false;
  public sidebarPopup3 = false;
  comments: boolean[] = [false, false, false];
  public routes = routes;
  
  public signContent: any[] = [];
  public chargesArray: hoursData[] = [];

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
