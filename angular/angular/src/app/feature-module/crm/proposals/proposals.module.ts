import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';

import { ProposalsRoutingModule } from './proposals-routing.module';
import { ProposalsComponent } from './proposals.component';
import { ProposalsGridComponent } from './proposals-grid/proposals-grid.component';
import { ProposalsListComponent } from './proposals-list/proposals-list.component';

import { SharedModule } from '../../../../shared/shared.module';


@NgModule({
  declarations: [
    ProposalsComponent,
    ProposalsGridComponent,
    ProposalsListComponent,
   
  ],
  imports: [
    CommonModule,
    ProposalsRoutingModule,
    SharedModule
  ]
})
export class ProposalsModule { }
