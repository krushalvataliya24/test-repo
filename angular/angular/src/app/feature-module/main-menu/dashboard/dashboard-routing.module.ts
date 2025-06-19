import { NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';
import { DashboardComponent } from './dashboard.component';
import { DealsDashboardComponent } from './deals-dashboard/deals-dashboard.component';

import { ProjectDashboardComponent } from './project-dashboard/project-dashboard.component';
import { LeadDashboardComponent } from './lead-dashboard/lead-dashboard.component';

const routes: Routes = [
  {
    path: '',
    component: DashboardComponent,
    children: [
      {
        path: 'deals-dashboard',
        component: DealsDashboardComponent,
      },
      {
        path: 'project-dashboard',
        component: ProjectDashboardComponent ,
      },
      {
        path: 'lead-dashboard',
        component: LeadDashboardComponent,
      },
     
    ],
  },
  
];

@NgModule({
  imports: [RouterModule.forChild(routes)],
  exports: [RouterModule],
})
export class DashboardRoutingModule {}
