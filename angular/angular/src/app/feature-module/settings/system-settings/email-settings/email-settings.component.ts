import { Component } from '@angular/core';
import { DataService } from '../../../../../shared/data/data.service';
import { routes } from '../../../../../shared/routes/routes';

@Component({
    selector: 'app-email-settings',
    templateUrl: './email-settings.component.html',
    styleUrl: './email-settings.component.scss',
    standalone: false
})
export class EmailSettingsComponent {
  public routes = routes;
  constructor( private data: DataService){}


  
}
