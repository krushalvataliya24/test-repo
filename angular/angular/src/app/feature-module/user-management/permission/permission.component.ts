import { Component } from '@angular/core';
import { routes } from '../../../../shared/routes/routes';

@Component({
    selector: 'app-permission',
    templateUrl: './permission.component.html',
    styleUrl: './permission.component.scss',
    standalone: false
})
export class PermissionComponent {
  public routes = routes

}
