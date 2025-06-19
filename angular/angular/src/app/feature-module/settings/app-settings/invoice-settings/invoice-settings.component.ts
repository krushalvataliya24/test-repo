import { Component } from '@angular/core';
import { routes } from '../../../../../shared/routes/routes';
interface data {
  value: string;
}

@Component({
    selector: 'app-invoice-settings',
    templateUrl: './invoice-settings.component.html',
    styleUrl: './invoice-settings.component.scss',
    standalone: false
})
export class InvoiceSettingsComponent {
  public routes = routes;
  public selectedValue1 = '';
  public selectedValue2 = '';
  selectedList1: data[] = [{ value: '5' }, { value: '6' }, { value: '7' }];
  selectedList2: data[] = [
    { value: 'Round Off Up' },
    { value: 'Round Off Down' },
  ];

  text1: string | undefined;
  text2: string | undefined;
}
