import { Component } from '@angular/core';
import { routes } from '../../../../../shared/routes/routes';

@Component({
    selector: 'app-proposals-grid',
    templateUrl: './proposals-grid.component.html',
    styleUrl: './proposals-grid.component.scss',
    standalone: false
})
export class ProposalsGridComponent {
  public routes = routes
  openSidebarPopup() {
    this.sidebarPopup = !this.sidebarPopup;
  }
  openSidebarPopup2() {
    this.sidebarPopup2 = !this.sidebarPopup2;
  }
  public sidebarPopup = false;
  public sidebarPopup2 = false;
  text: string | undefined;
  values1: string[] = ['Tag1','Tag2','Tag3'];
  values2: string[] = ['Tag1','Tag2','Tag3'];
  people = [
    { name: 'Hendry Milner', image: 'assets/img/profiles/avatar-14.jpg' },
    { name: 'Guilory Berggren', image: 'assets/img/profiles/avatar-15.jpg' },
    { name: 'Jami Carlile', image: 'assets/img/profiles/avatar-16.jpg' },
    { name: 'Theresa Nelson', image: 'assets/img/profiles/avatar-13.jpg' },
    { name: 'Smith Cooper', image: 'assets/img/profiles/avatar-24.jpg' }
  ];
}
