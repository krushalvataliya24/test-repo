import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';

import { ReportsRoutingModule } from './reports-routing.module';
import { ReportsComponent } from './reports.component';

import { DealReportComponent } from './deal-report/deal-report.component';
import { LeadReportComponent } from './lead-report/lead-report.component';
import { SharedModule } from '../../../shared/shared.module';
import { TaskReportsComponent } from './task-reports/task-reports.component';


@NgModule({
  declarations: [
    ReportsComponent,
    DealReportComponent,
    LeadReportComponent,
    TaskReportsComponent
  ],
  imports: [
    CommonModule,
    ReportsRoutingModule,
    SharedModule
  ]
})
export class ReportsModule { }
