import { NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';
import { SupportComponent } from './support.component';
import { ContactMessagesComponent } from './contact-messages/contact-messages.component';
import { TicketsComponent } from './tickets/tickets.component';

const routes: Routes = [
  {
    path: '',
    component: SupportComponent,
    children: [
      { path: 'contact-messages', component: ContactMessagesComponent },
      { path: 'tickets', component: TicketsComponent },
    ],
  },
];

@NgModule({
  imports: [RouterModule.forChild(routes)],
  exports: [RouterModule],
})
export class SupportRoutingModule {}
