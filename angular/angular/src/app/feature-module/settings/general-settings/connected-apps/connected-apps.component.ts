import { Component } from '@angular/core';
import { DataService } from '../../../../../shared/data/data.service';
import { routes } from '../../../../../shared/routes/routes';

@Component({
    selector: 'app-connected-apps',
    templateUrl: './connected-apps.component.html',
    styleUrl: './connected-apps.component.scss',
    standalone: false
})
export class ConnectedAppsComponent {
  public routes = routes;
  constructor( private data: DataService){}

  

}
