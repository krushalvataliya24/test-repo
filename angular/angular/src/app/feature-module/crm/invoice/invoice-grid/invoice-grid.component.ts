/* eslint-disable @typescript-eslint/no-explicit-any */
import { Component, OnInit } from '@angular/core';
import { routes } from '../../../../../shared/routes/routes';

@Component({
    selector: 'app-invoice-grid',
    templateUrl: './invoice-grid.component.html',
    styleUrl: './invoice-grid.component.scss',
    standalone: false
})
export class InvoiceGridComponent implements OnInit {
  public routes = routes
  bsValue = new Date();
  bsRangeValue: Date[];
  maxDate = new Date();
  text: string | undefined;
  constructor(
  ) {
    this.maxDate.setDate(this.maxDate.getDate() + 7);
    this.bsRangeValue = [this.bsValue, this.maxDate];
  }
  public sidebarPopup = false;
  public sidebarPopup2 = false;
  openSidebarPopup() {
    this.sidebarPopup = !this.sidebarPopup;
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
      { name: 'Choose' },
      { name: '$' },
      { name: 'INR' },
      { name: 'Euro' }
    ];
    this.selectedValue2 = [
      { name: 'Choose' },
      { name: '$' },
      { name: 'INR' },
      { name: 'Euro' }
    ];
   
  }

}
