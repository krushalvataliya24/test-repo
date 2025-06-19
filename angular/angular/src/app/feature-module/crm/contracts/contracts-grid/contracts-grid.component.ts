/* eslint-disable @typescript-eslint/no-explicit-any */
import { Component, OnInit } from '@angular/core';
import { routes } from '../../../../../shared/routes/routes';

@Component({
    selector: 'app-contracts-grid',
    templateUrl: './contracts-grid.component.html',
    styleUrl: './contracts-grid.component.scss',
    standalone: false
})
export class ContractsGridComponent implements OnInit {
  public routes = routes
  text: string | undefined;
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
  selectedValue3: any[] | undefined;
  selectedValue4: any[] | undefined;

  selectedDatas1: any[] | undefined;
  selectedDatas2: any[] | undefined;
  selectedDatas3: any[] | undefined;
  selectedDatas4: any[] | undefined;
  ngOnInit() {
    this.selectedValue1 = [
      { name: 'Choose' },
      { name: 'NovaWave LLC' },
      { name: 'BlueSky Industries' },
      { name: 'SilverHawk' }
    ];
    this.selectedValue2 = [
      { name: 'Choose' },
      { name: 'Contracts under Seal' },
      { name: 'Implied Contracts' },
      { name: 'Executory Contracts' },
      { name: 'Voidable Contracts' },
    ];
    this.selectedValue3 = [
      { name: 'Choose' },
      { name: 'NovaWave LLC' },
      { name: 'BlueSky Industries' },
      { name: 'SilverHawk' }
    ];
    this.selectedValue4 = [
      { name: 'Choose' },
      { name: 'Contracts under Seal' },
      { name: 'Meeting' }
    ];
  }
}
