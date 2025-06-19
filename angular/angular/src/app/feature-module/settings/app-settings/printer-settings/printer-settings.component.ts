import { Component } from '@angular/core';


import { routes } from '../../../../../shared/routes/routes';
// interface data {
//   value: string;
// }

@Component({
    selector: 'app-printer-settings',
    templateUrl: './printer-settings.component.html',
    styleUrl: './printer-settings.component.scss',
    standalone: false
})
export class PrinterSettingsComponent {
  public routes = routes;
}
