import { Component } from '@angular/core';
import { routes } from '../../../../../shared/routes/routes';

@Component({
    selector: 'app-invoices',
    templateUrl: './invoices.component.html',
    styleUrl: './invoices.component.scss',
    standalone: false
})
export class InvoicesComponent {
 routes=routes
 public appSidebar = true;
 toggleChange() {
  this.appSidebar = !this.appSidebar;
}
}
