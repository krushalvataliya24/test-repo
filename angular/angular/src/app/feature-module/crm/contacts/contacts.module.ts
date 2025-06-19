import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';

import { ContactsRoutingModule } from './contacts-routing.module';
import { ContactsComponent } from './contacts.component';
import { ContactListComponent } from './contact-list/contact-list.component';
import { ContactGridComponent } from './contact-grid/contact-grid.component';
import { ContactDetailsComponent } from './contact-details/contact-details.component';
import { ContactReportsComponent } from '../../reports/contact-reports/contact-reports.component';
import { SharedModule } from '../../../../shared/shared.module';

@NgModule({
  declarations: [
    ContactsComponent,
    ContactListComponent,
    ContactGridComponent,
    ContactDetailsComponent,
    ContactReportsComponent
  ],
  imports: [
    CommonModule,
    ContactsRoutingModule,
    SharedModule
  ]
})
export class ContactsModule { }
