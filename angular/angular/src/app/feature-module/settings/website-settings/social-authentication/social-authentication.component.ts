import { Component } from '@angular/core';
import { DataService } from '../../../../../shared/data/data.service';

@Component({
    selector: 'app-social-authentication',
    templateUrl: './social-authentication.component.html',
    styleUrl: './social-authentication.component.scss',
    standalone: false
})
export class SocialAuthenticationComponent {
  constructor( private data: DataService){

  }

  
}
