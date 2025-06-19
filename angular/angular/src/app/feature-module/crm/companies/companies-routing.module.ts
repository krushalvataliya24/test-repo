import { NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';
import { CompaniesComponent } from './companies.component';
import { CompaniesListComponent } from './companies-list/companies-list.component';
import { CompaniesGridComponent } from './companies-grid/companies-grid.component';
import { CompaniesDetailsComponent } from './companies-details/companies-details.component';

const routes: Routes = [
  {
    path: '',
    component: CompaniesComponent,
    children: [
      {
        path: 'companies-list',
        component: CompaniesListComponent,
      },
      {
        path: 'companies-grid',
        component: CompaniesGridComponent,
      },

      {
        path: 'companies-details',
        component: CompaniesDetailsComponent,
      },
    ],
  },
];

@NgModule({
  imports: [RouterModule.forChild(routes)],
  exports: [RouterModule],
})
export class CompaniesRoutingModule {}
