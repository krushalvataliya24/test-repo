import { NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';
import { ProposalsComponent } from './proposals.component';


import { ProposalsListComponent } from './proposals-list/proposals-list.component';
import { ProposalsGridComponent } from './proposals-grid/proposals-grid.component';

const routes: Routes = [
  {
    path: '',
    component: ProposalsComponent,
    children: [
     
      {
        path: 'proposals-grid',
        component: ProposalsGridComponent,
      },
      {
        path: 'proposals-list',
        component: ProposalsListComponent,
      },
    ],
  },
];

@NgModule({
  imports: [RouterModule.forChild(routes)],
  exports: [RouterModule],
})
export class ProposalsRoutingModule {}
