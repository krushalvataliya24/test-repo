import { Component } from '@angular/core';
import { Router } from '@angular/router';
import { DataService } from '../../../../../shared/data/data.service';
import { routes } from '../../../../../shared/routes/routes';

@Component({
    selector: 'app-profile',
    templateUrl: './profile.component.html',
    styleUrl: './profile.component.scss',
    standalone: false
})
export class ProfileComponent {
  public routes = routes;
  constructor(private data: DataService, private router: Router) {}


  
  navigation() {
    this.router.navigate([routes.generalSettings])
  }
}
