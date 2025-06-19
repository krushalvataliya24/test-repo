import { Component } from '@angular/core';
import { DataService } from '../../../../../shared/data/data.service';
import { routes } from '../../../../../shared/routes/routes';

@Component({
    selector: 'app-preference',
    templateUrl: './preference.component.html',
    styleUrl: './preference.component.scss',
    standalone: false
})
export class PreferenceComponent {
  public routes = routes;
  constructor( private data: DataService){}

  
}
