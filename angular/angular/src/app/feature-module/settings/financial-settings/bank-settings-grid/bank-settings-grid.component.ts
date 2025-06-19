import { Component } from '@angular/core';
import { DataService } from '../../../../../shared/data/data.service';
import { routes } from '../../../../../shared/routes/routes';

@Component({
    selector: 'app-bank-settings-grid',
    templateUrl: './bank-settings-grid.component.html',
    styleUrl: './bank-settings-grid.component.scss',
    standalone: false
})
export class BankSettingsGridComponent {
  public routes = routes;
  isActive = 'Karur vysya bank'
  constructor( private data: DataService){}

  setActive(theme: string) {
    this.isActive = theme;
  }

  
}
