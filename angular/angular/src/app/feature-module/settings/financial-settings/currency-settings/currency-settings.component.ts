import { Component } from '@angular/core';
import { routes } from '../../../../../shared/routes/routes';


@Component({
    selector: 'app-currency-settings',
    templateUrl: './currency-settings.component.html',
    styleUrl: './currency-settings.component.scss',
    standalone: false
})
export class CurrencySettingsComponent {
  public routes = routes;
}
