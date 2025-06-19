import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';

import { LeadsRoutingModule } from './leads-routing.module';
import { LeadsComponent } from './leads.component';
import { LeadsListComponent } from './leads-list/leads-list.component';
import { LeadsKanbanComponent } from './leads-kanban/leads-kanban.component';
import { LeadsDetailsComponent } from './leads-details/leads-details.component';
import { SharedModule } from '../../../../shared/shared.module';



@NgModule({
  declarations: [
    LeadsComponent,
    LeadsListComponent,
    LeadsKanbanComponent,
    LeadsDetailsComponent
  ],
  imports: [
    CommonModule,
    LeadsRoutingModule,
    SharedModule
  ]
})
export class LeadsModule { }
