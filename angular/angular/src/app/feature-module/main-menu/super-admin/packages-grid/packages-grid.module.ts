import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';

import { PackagesGridRoutingModule } from './packages-grid-routing.module';
import { PackagesGridComponent } from './packages-grid.component';
import { SharedModule } from '../../../../../shared/shared.module';
import { CustomPaginationModule } from '../../../../../shared/custom-pagination/custom-pagination.module';


@NgModule({
  declarations: [
    PackagesGridComponent
  ],
  imports: [
    CommonModule,
    PackagesGridRoutingModule,
    SharedModule,
    CustomPaginationModule
  ]
})
export class PackagesGridModule { }
