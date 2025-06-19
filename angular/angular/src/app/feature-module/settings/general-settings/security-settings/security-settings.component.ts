import { Component } from '@angular/core';
import { DataService } from '../../../../../shared/data/data.service';
import { routes } from '../../../../../shared/routes/routes';

@Component({
    selector: 'app-security-settings',
    templateUrl: './security-settings.component.html',
    styleUrl: './security-settings.component.scss',
    standalone: false
})
export class SecuritySettingsComponent {
  public routes = routes;
  constructor(private data: DataService) {}

  
}
