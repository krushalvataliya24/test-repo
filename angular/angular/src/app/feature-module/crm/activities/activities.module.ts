import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';

import { ActivitiesRoutingModule } from './activities-routing.module';
import { ActivitiesComponent } from './activities.component';
import { ActivitiesListComponent } from './activities-list/activities-list.component';
import { ActivityCallsComponent } from './activity-calls/activity-calls.component';
import { ActivityMailComponent } from './activity-mail/activity-mail.component';
import { ActivityMeetingComponent } from './activity-meeting/activity-meeting.component';
import { ActivityTaskComponent } from './activity-task/activity-task.component';
import { SharedModule } from '../../../../shared/shared.module';


@NgModule({
  declarations: [
    ActivitiesComponent,
    ActivitiesListComponent,
    ActivityCallsComponent,
    ActivityMailComponent,
    ActivityMeetingComponent,
    ActivityTaskComponent
  ],
  imports: [
    CommonModule,
    ActivitiesRoutingModule,
    SharedModule
  ]
})
export class ActivitiesModule { }
