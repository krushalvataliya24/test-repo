import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';

import { SupportRoutingModule } from './support-routing.module';
import { SupportComponent } from './support.component';
import { SharedModule } from '../../../shared/shared.module';
import { TicketsComponent } from './tickets/tickets.component';
import { ContactMessagesComponent } from './contact-messages/contact-messages.component';


@NgModule({
  declarations: [
    SupportComponent,
    TicketsComponent,
    ContactMessagesComponent
    
  ],
  imports: [
    CommonModule,
    SupportRoutingModule,
    SharedModule
  ]
})
export class SupportModule { }
