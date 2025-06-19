import { Component } from '@angular/core';
import { DataService } from '../../../../../shared/data/data.service';
import { routes } from '../../../../../shared/routes/routes';

@Component({
    selector: 'app-prefixes',
    templateUrl: './prefixes.component.html',
    styleUrl: './prefixes.component.scss',
    standalone: false
})
export class PrefixesComponent {
  public routes = routes;
  constructor( private data: DataService){}


  
  public filter = false;
  openFilter() {
    this.filter = !this.filter;
  }
}
