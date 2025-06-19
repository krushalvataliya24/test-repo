import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';

import { AppSettingsRoutingModule } from './app-settings-routing.module';
import { AppSettingsComponent } from './app-settings.component';
import { CustomFieldsComponent } from './custom-fields/custom-fields.component';
import { InvoiceSettingsComponent } from './invoice-settings/invoice-settings.component';
import { PrinterSettingsComponent } from './printer-settings/printer-settings.component';
import { SharedModule } from '../../../../shared/shared.module';


@NgModule({
  declarations: [
    AppSettingsComponent,
    CustomFieldsComponent,
    InvoiceSettingsComponent,
    PrinterSettingsComponent
  ],
  imports: [
    CommonModule,
    AppSettingsRoutingModule,
    SharedModule
  ]
})
export class AppSettingsModule { }
