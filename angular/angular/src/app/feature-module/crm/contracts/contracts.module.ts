import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';

import { ContractsRoutingModule } from './contracts-routing.module';
import { ContractsComponent } from './contracts.component';
import { ContractsListComponent } from './contracts-list/contracts-list.component';
import { ContractsGridComponent } from './contracts-grid/contracts-grid.component';
import { SharedModule } from '../../../../shared/shared.module';


@NgModule({
  declarations: [
    ContractsComponent,
    ContractsListComponent,
    ContractsGridComponent
  ],
  imports: [
    CommonModule,
    ContractsRoutingModule,
    SharedModule
  ]
})
export class ContractsModule { }
