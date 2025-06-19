import { Component } from '@angular/core';
import { routes } from '../../../../shared/routes/routes';


@Component({
    selector: 'app-success',
    templateUrl: './success.component.html',
    styleUrl: './success.component.scss',
    standalone: false
})
export class SuccessComponent {
  public routes = routes
}
