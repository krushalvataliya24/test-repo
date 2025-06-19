/* eslint-disable @typescript-eslint/no-explicit-any */
import { Component, Renderer2, OnDestroy } from '@angular/core';
import { routes } from '../../../shared/routes/routes';
import { CommonService } from '../../../shared/common/common.service';
import { Router } from '@angular/router';


@Component({
    selector: 'app-lock-screen',
    templateUrl: './lock-screen.component.html',
    styleUrl: './lock-screen.component.scss',
    standalone: false
})
export class LockScreenComponent implements OnDestroy {
  public routes = routes;
  public password : boolean[] = [false];

  public togglePassword(index: any){
    this.password[index] = !this.password[index]
  }

  base = '';
  page = '';
  last = '';
  constructor(
    private common: CommonService,
    private renderer: Renderer2,
    private router: Router
  ) {
    this.common.base.subscribe((res: string) => {
      this.base = res;
    });
    this.common.page.subscribe((res: string) => {
      this.page = res;
    });
    this.common.last.subscribe((res: string) => {
      this.last = res;
    });
    if (this.base == 'lock-screen') {
      this.renderer.addClass(document.body, 'account-page');
    }
  }
  ngOnDestroy(): void {
    this.renderer.removeClass(document.body, 'account-page');
  }
  
  public navigate() {
    this.router.navigate([routes.login]);
  }
}
