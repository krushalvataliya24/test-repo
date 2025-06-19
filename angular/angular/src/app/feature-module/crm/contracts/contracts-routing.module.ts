import { NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';
import { ContractsComponent } from './contracts.component';
import { ContractsListComponent } from './contracts-list/contracts-list.component';
import { ContractsGridComponent } from './contracts-grid/contracts-grid.component';

const routes: Routes = [
  {
    path: '',
    component: ContractsComponent,
    children: [
      { path: 'contracts-list', component: ContractsListComponent },
      { path: 'contracts-grid', component: ContractsGridComponent },
    ],
  },
];

@NgModule({
  imports: [RouterModule.forChild(routes)],
  exports: [RouterModule],
})
export class ContractsRoutingModule {}
