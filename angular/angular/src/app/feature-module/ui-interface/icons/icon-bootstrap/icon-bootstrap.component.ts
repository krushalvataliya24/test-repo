import { Component } from '@angular/core';
import { routes } from '../../../../../shared/routes/routes';

@Component({
    selector: 'app-icon-bootstrap',
    templateUrl: './icon-bootstrap.component.html',
    styleUrl: './icon-bootstrap.component.scss',
    standalone: false
})
export class IconBootstrapComponent {
  public routes=routes;
}
