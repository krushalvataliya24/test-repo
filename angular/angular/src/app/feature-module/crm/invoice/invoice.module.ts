import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';

import { InvoiceRoutingModule } from './invoice-routing.module';
import { InvoiceComponent } from './invoice.component';
import { InvoiceListComponent } from './invoice-list/invoice-list.component';
import { InvoiceGridComponent } from './invoice-grid/invoice-grid.component';
import { SharedModule } from '../../../../shared/shared.module';


@NgModule({
  declarations: [
    InvoiceComponent,
    InvoiceListComponent,
    InvoiceGridComponent
  ],
  imports: [
    CommonModule,
    InvoiceRoutingModule,
    SharedModule
  ]
})
export class InvoiceModule { }
