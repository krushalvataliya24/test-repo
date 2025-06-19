import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';

import { EstimationsRoutingModule } from './estimations-routing.module';
import { EstimationsComponent } from './estimations.component';
import { EstimationListComponent } from './estimation-list/estimation-list.component';
import { EstimationKanbanComponent } from './estimation-kanban/estimation-kanban.component';
import { SharedModule } from '../../../../shared/shared.module';


@NgModule({
  declarations: [
    EstimationsComponent,
    EstimationListComponent,
    EstimationKanbanComponent
  ],
  imports: [
    CommonModule,
    EstimationsRoutingModule,
    SharedModule
  ]
})
export class EstimationsModule { }
