import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';

import { DealsRoutingModule } from './deals-routing.module';
import { DealsComponent } from './deals.component';
import { DealsListComponent } from './deals-list/deals-list.component';
import { DealsKanbanComponent } from './deals-kanban/deals-kanban.component';
import { DealsDetailsComponent } from './deals-details/deals-details.component';
import { SharedModule } from '../../../../shared/shared.module';



@NgModule({
  declarations: [
    DealsComponent,
    DealsListComponent,
    DealsKanbanComponent,
    DealsDetailsComponent
  ],
  imports: [
    CommonModule,
    DealsRoutingModule,
    SharedModule
  ]
})
export class DealsModule { }
