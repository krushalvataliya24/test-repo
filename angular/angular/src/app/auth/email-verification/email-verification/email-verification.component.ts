import { Component } from '@angular/core';
import { routes } from '../../../../shared/routes/routes';
import { Router } from '@angular/router';


@Component({
    selector: 'app-email-verification',
    templateUrl: './email-verification.component.html',
    styleUrl: './email-verification.component.scss',
    standalone: false
})
export class EmailVerificationComponent {
  public routes = routes;
  constructor(private router: Router) {}

  navigation() {
    this.router.navigate([routes.login])
  }
}
