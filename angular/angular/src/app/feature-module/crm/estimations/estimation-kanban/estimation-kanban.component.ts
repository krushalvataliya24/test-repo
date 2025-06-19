
/* eslint-disable @typescript-eslint/no-explicit-any */
import { Component, OnInit } from '@angular/core';
import { DataService } from '../../../../../shared/data/data.service';
import { PaginationService,  } from '../../../../../shared/custom-pagination/pagination.service';
import { Router } from '@angular/router';
import { routes } from '../../../../../shared/routes/routes';

@Component({
    selector: 'app-estimation-kanban',
    templateUrl: './estimation-kanban.component.html',
    styleUrl: './estimation-kanban.component.scss',
    standalone: false
})
export class EstimationKanbanComponent implements OnInit {
  public routes = routes
  bsValue = new Date();
  bsRangeValue: Date[];
  maxDate = new Date();
  constructor(
    private data: DataService,
    private pagination: PaginationService,
    private router: Router
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
  text: string | undefined;
  values1: string[] = ['Tags','Tags','Tags'];
  values2: string[] = ['Tags','Tags','Tags'];
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
      { name: 'Choose' },
      { name: 'Darlee Robertson' },
      { name: 'Sharon Roy' },
      { name: 'Vaughan' }
    ];
    this.selectedValue2 = [
      { name: 'Choose' },
      { name: 'Darlee Robertson' },
      { name: 'Sharon Roy' },
      { name: 'Vaughan' }
    ];
    this.selectedValue3 = [
      { name: 'Choose' },
      { name: 'Darlee Robertson' },
      { name: 'Sharon Roy' },
      { name: 'Vaughan' }
    ];
    this.selectedValue4 = [
      { name: 'Choose' },
      { name: 'Darlee Robertson' },
      { name: 'Sharon Roy' },
      { name: 'Vaughan' }
    ];
  }
}
