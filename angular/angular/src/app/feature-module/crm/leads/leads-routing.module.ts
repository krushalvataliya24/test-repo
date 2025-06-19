import { NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';
import { LeadsComponent } from './leads.component';
import { LeadsListComponent } from './leads-list/leads-list.component';
import { LeadsKanbanComponent } from './leads-kanban/leads-kanban.component';
import { LeadsDetailsComponent } from './leads-details/leads-details.component';

const routes: Routes = [
  {
    path: '',
    component: LeadsComponent,
    children: [{ path: 'leads-list', component: LeadsListComponent },
    { path: 'leads-kanban', component: LeadsKanbanComponent },
    { path: 'leads-details', component: LeadsDetailsComponent }],
  },
];

@NgModule({
  imports: [RouterModule.forChild(routes)],
  exports: [RouterModule],
})
export class LeadsRoutingModule {}
