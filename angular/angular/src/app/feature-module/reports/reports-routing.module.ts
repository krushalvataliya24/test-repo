import { NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';
import { ReportsComponent } from './reports.component';

import { DealReportComponent } from './deal-report/deal-report.component';
import { LeadReportComponent } from './lead-report/lead-report.component';
import { TaskReportsComponent } from './task-reports/task-reports.component';
import { CompaniesReportsComponent } from './companies-reports/companies-reports.component';
import { ContactReportsComponent } from './contact-reports/contact-reports.component';
import { ProjectReportsComponent } from './project-reports/project-reports.component';

const routes: Routes = [
  {
    path: '',
    component: ReportsComponent,
    children: [
      { path: 'deal-report', component: DealReportComponent },
      { path: 'lead-report', component: LeadReportComponent },
      { path: 'task-report', component: TaskReportsComponent },
      {
        path: 'contact-reports',
        component: ContactReportsComponent,
      },
      {
        path: 'companies-reports',
        component: CompaniesReportsComponent,
      },
      {
        path: 'project-reports',
        component: ProjectReportsComponent,
      },
    ],
  },
];

@NgModule({
  imports: [RouterModule.forChild(routes)],
  exports: [RouterModule],
})
export class ReportsRoutingModule {}
