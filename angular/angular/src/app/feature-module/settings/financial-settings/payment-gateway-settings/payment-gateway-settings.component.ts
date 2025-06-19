import { Component } from '@angular/core';
import { DataService } from '../../../../../shared/data/data.service';
import { routes } from '../../../../../shared/routes/routes';

@Component({
    selector: 'app-payment-gateway-settings',
    templateUrl: './payment-gateway-settings.component.html',
    styleUrl: './payment-gateway-settings.component.scss',
    standalone: false
})
export class PaymentGatewaySettingsComponent {
  public routes = routes;

  

  constructor( private data: DataService){}
}
