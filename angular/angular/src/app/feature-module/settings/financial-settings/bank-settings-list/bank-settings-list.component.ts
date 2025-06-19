import { Component } from '@angular/core';
import { routes } from '../../../../../shared/routes/routes';



@Component({
    selector: 'app-bank-settings-list',
    templateUrl: './bank-settings-list.component.html',
    styleUrl: './bank-settings-list.component.scss',
    standalone: false
})
export class BankSettingsListComponent {
  public routes = routes;
}
