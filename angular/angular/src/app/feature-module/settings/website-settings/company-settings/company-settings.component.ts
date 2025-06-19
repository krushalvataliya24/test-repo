import { Component } from '@angular/core';
import { DataService } from '../../../../../shared/data/data.service';
import { routes } from '../../../../../shared/routes/routes';

@Component({
    selector: 'app-company-settings',
    templateUrl: './company-settings.component.html',
    styleUrl: './company-settings.component.scss',
    standalone: false
})
export class CompanySettingsComponent {
  public routes = routes;
  constructor( private data: DataService){}


  
  public filter = false;
  openFilter() {
    this.filter = !this.filter;
  }
}
