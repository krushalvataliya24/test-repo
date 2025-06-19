import { Component } from '@angular/core';
import { DataService } from '../../../../../shared/data/data.service';
import { routes } from '../../../../../shared/routes/routes';

@Component({
    selector: 'app-sms-gateway',
    templateUrl: './sms-gateway.component.html',
    styleUrl: './sms-gateway.component.scss',
    standalone: false
})
export class SmsGatewayComponent {
  public routes = routes; 
  constructor( private data: DataService){

  }

  
}
