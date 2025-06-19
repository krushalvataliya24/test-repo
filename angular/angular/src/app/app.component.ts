import { Component } from '@angular/core';
import { Router } from '@angular/router';
import {
  
  NavigationStart,
  
  Event as RouterEvent,
} from '@angular/router';

@Component({
    selector: 'app-root',
    templateUrl: './app.component.html',
    styleUrl: './app.component.scss',
    standalone: false
})
export class AppComponent  {
  title = 'template';
  public page = '';
  constructor(private router: Router) {
    this.router.events.subscribe((event: RouterEvent) => {
      if (event instanceof NavigationStart) {
        const URL = event.url.split('/');
        this.page = URL[1];
      }
      // if (event instanceof NavigationEnd){}
    });
  }
}
