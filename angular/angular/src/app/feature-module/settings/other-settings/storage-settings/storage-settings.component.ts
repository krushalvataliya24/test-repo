import { Component } from '@angular/core';
import { DataService } from '../../../../../shared/data/data.service';
import { routes } from '../../../../../shared/routes/routes';

@Component({
    selector: 'app-storage-settings',
    templateUrl: './storage-settings.component.html',
    styleUrl: './storage-settings.component.scss',
    standalone: false
})
export class StorageSettingsComponent {
  public routes = routes;
  constructor( private data: DataService){
    
  }

  
}
