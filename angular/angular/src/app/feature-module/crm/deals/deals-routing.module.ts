import { NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';
import { DealsComponent } from './deals.component';
import { DealsDetailsComponent } from './deals-details/deals-details.component';
import { DealsListComponent } from './deals-list/deals-list.component';
import { DealsKanbanComponent } from './deals-kanban/deals-kanban.component';

const routes: Routes = [
  {
    path: '',
    component: DealsComponent,
    children: [
      {
        path: 'deals-list',
        component: DealsListComponent,
      },
      {
        path: 'deals-details',
        component: DealsDetailsComponent,
      },
      {
        path: 'deals-kanban',
        component: DealsKanbanComponent,
      },
    ],
  },
];

@NgModule({
  imports: [RouterModule.forChild(routes)],
  exports: [RouterModule],
})
export class DealsRoutingModule {}
