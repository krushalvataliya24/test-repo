import { Component } from '@angular/core';
import { DataService } from '../../../../../shared/data/data.service';

@Component({
    selector: 'app-system-settings',
    templateUrl: './system-settings.component.html',
    styleUrl: './system-settings.component.scss',
    standalone: false
})
export class SystemSettingsComponent {
  constructor( private data: DataService){}


  
  public filter = false;
  openFilter() {
    this.filter = !this.filter;
  }

}
