import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';

import { AnalyticsRoutingModule } from '../analytics/analytics-routing.module';
import { AnalyticsComponent } from '../analytics/analytics.component';
import { SharedModule } from '../../../../shared/shared.module';
import { AnalyticsListComponent } from '../analytics/analytics-list/analytics-list.component';


@NgModule({
  declarations: [
    AnalyticsComponent,
    AnalyticsListComponent
  ],
  imports: [
    CommonModule,
    AnalyticsRoutingModule,
    SharedModule
  ]
})
export class AnalyticsModule { }
