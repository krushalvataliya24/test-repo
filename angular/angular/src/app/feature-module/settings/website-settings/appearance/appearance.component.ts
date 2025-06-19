import { Component } from '@angular/core';
import { DataService } from '../../../../../shared/data/data.service';
import { routes } from '../../../../../shared/routes/routes';
interface data {
  value: string;
}

@Component({
    selector: 'app-appearance',
    templateUrl: './appearance.component.html',
    styleUrl: './appearance.component.scss',
    standalone: false
})
export class AppearanceComponent {
  public routes = routes;
  constructor(private data: DataService) {}

  isActive = 'Light';

  setActive(theme: string) {
    this.isActive = theme;
  }
  public selectedValue1 = '';
  public selectedValue2 = '';

  selectedList1: data[] = [
    { value: 'Small - 85px' },
    { value: 'Large - 250px' },
  ];
  selectedList2: data[] = [{ value: 'Nunito' }, { value: 'Poppins' }];

  
}
