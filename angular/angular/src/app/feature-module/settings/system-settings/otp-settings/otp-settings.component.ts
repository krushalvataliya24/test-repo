import { Component } from '@angular/core';
import { DataService } from '../../../../../shared/data/data.service';

@Component({
    selector: 'app-otp-settings',
    templateUrl: './otp-settings.component.html',
    styleUrl: './otp-settings.component.scss',
    standalone: false
})
export class OtpSettingsComponent {
  selectedValue1 = '';
  selectedValue2 = '';
  selectedValue3 = '';

  

  constructor( private data: DataService){}
}
