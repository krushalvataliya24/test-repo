import { NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';
import { EstimationsComponent } from './estimations.component';
import { EstimationListComponent } from './estimation-list/estimation-list.component';
import { EstimationKanbanComponent } from './estimation-kanban/estimation-kanban.component';

const routes: Routes = [
  {
    path: '',
    component: EstimationsComponent,
    children: [{ path: 'estimation-list', component: EstimationListComponent },
      { path: 'estimation-kanban', component: EstimationKanbanComponent}
    ],
  },
];

@NgModule({
  imports: [RouterModule.forChild(routes)],
  exports: [RouterModule],
})
export class EstimationsRoutingModule {}
