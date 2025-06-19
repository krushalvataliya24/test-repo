import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';

import { DashboardRoutingModule } from './dashboard-routing.module';
import { DashboardComponent } from './dashboard.component';
import { DealsDashboardComponent } from './deals-dashboard/deals-dashboard.component';
import { ProjectDashboardComponent } from './project-dashboard/project-dashboard.component';
import { LeadDashboardComponent } from './lead-dashboard/lead-dashboard.component';
import { SharedModule } from '../../../../shared/shared.index';
import { ModalDashboardComponent } from './modal-dashboard/modal-dashboard.component';



@NgModule({
  declarations: [
    DashboardComponent,
    DealsDashboardComponent,
    ProjectDashboardComponent,
    LeadDashboardComponent,
    ModalDashboardComponent
  ],
  imports: [
    CommonModule,
    DashboardRoutingModule,
    SharedModule
  ]
})
export class DashboardModule { }
