import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';

import { CompaniesRoutingModule } from './companies-routing.module';
import { CompaniesComponent } from './companies.component';
import { CompaniesListComponent } from './companies-list/companies-list.component';
import { CompaniesGridComponent } from './companies-grid/companies-grid.component';
import { CompaniesDetailsComponent } from './companies-details/companies-details.component';
import { CompaniesReportsComponent } from '../../reports/companies-reports/companies-reports.component';
import { SharedModule } from '../../../../shared/shared.module';


@NgModule({
  declarations: [
    CompaniesComponent,
    CompaniesListComponent,
    CompaniesGridComponent,
    CompaniesDetailsComponent,
    CompaniesReportsComponent
  ],
  imports: [
    CommonModule,
    CompaniesRoutingModule,
    SharedModule
  ]
})
export class CompaniesModule { }
