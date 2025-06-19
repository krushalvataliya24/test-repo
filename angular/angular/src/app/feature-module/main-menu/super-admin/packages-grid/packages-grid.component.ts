import { Component } from '@angular/core';
import { routes } from '../../../../../shared/routes/routes';



@Component({
    selector: 'app-packages-grid',
    templateUrl: './packages-grid.component.html',
    styleUrl: './packages-grid.component.scss',
    standalone: false
})
export class PackagesGridComponent {
  public routes = routes;

  constructor() {

}
}
