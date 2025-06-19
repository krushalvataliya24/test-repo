/* eslint-disable @typescript-eslint/no-explicit-any */
import { Component, OnInit, OnDestroy } from '@angular/core';
import { FormControl, FormGroup } from '@angular/forms';
import { Editor, Toolbar, Validators } from 'ngx-editor';
import { routes } from '../../../../../shared/routes/routes';
interface hoursData {
  data: string;
}
export interface datasModel {
  name: string;
}

@Component({
    selector: 'app-deals-details',
    templateUrl: './deals-details.component.html',
    styleUrl: './deals-details.component.scss',
    standalone: false
})
export class DealsDetailsComponent implements OnInit, OnDestroy {
  public signContent: any[] = []
  public routes = routes
  text: string | undefined;
  editor!: Editor;
  activeTab = 'activities';
  activeStep = 0;
  comment: any;
  public selectedFieldSet = [0];
  comments: boolean[] = [false, false, false];
  openComment(index: number) {
    this.comments[index] = !this.comments[index];
  }
  currentStep = 0;
  nextStep() {
    this.currentStep++;
  }

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
  public chargesArray: hoursData[] = [];
  addCharges() {
    const newData: hoursData = {
      data: '',
    };

    this.chargesArray.push(newData);
  }
  deleteCharges(index: number) {
    this.chargesArray.splice(index, 1);
  }
  public sidebarPopup = false;
  openSidebarPopup() {
    this.sidebarPopup = !this.sidebarPopup;
  }
  addSignContent(){
    this.signContent.push(1)
  }
}
