import { Component } from '@angular/core';
import { DataService } from '../../../../../shared/data/data.service';
import { routes } from '../../../../../shared/routes/routes';
interface data {
  value: string;
}

@Component({
    selector: 'app-gdpr-settings',
    templateUrl: './gdpr-settings.component.html',
    styleUrl: './gdpr-settings.component.scss',
    standalone: false
})
export class GdprSettingsComponent {
  public routes = routes;
  constructor( private data: DataService){}


  
  public selectedValue1 = '';
  selectedList1: data[] = [
    { value: 'Left' },
    { value: 'Center' },
    { value: 'Right' },
  ];
}
