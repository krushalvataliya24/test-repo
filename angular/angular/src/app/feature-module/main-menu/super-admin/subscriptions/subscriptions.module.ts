import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';

import { SubscriptionsRoutingModule } from './subscriptions-routing.module';
import { SubscriptionsComponent } from './subscriptions.component';
import { CustomPaginationModule } from '../../../../../shared/custom-pagination/custom-pagination.module';
import { SharedModule } from '../../../../../shared/shared.module';



@NgModule({
  declarations: [
    SubscriptionsComponent
  ],
  imports: [
    CommonModule,
    SubscriptionsRoutingModule,
    CustomPaginationModule,
    SharedModule
  ]
})
export class SubscriptionsModule { }
