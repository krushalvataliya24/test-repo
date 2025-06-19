import { Component } from '@angular/core';
import { routes } from '../../../../../shared/routes/routes';

@Component({
    selector: 'app-invoice-details',
    templateUrl: './invoice-details.component.html',
    styleUrl: './invoice-details.component.scss',
    standalone: false
})
export class InvoiceDetailsComponent {
routes=routes
}
