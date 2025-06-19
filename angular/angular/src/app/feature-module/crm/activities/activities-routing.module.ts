import { NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';
import { ActivitiesComponent } from './activities.component';
import { ActivityCallsComponent } from './activity-calls/activity-calls.component';
import { ActivityMailComponent } from './activity-mail/activity-mail.component';
import { ActivityMeetingComponent } from './activity-meeting/activity-meeting.component';
import { ActivityTaskComponent } from './activity-task/activity-task.component';
import { ActivitiesListComponent } from './activities-list/activities-list.component';

const routes: Routes = [
  {
    path: '',
    component: ActivitiesComponent,
    children: [
      {
        path: 'activities-list',
        component: ActivitiesListComponent,
      },
      {
        path: 'activity-calls',
        component: ActivityCallsComponent,
      },
      {
        path: 'activity-mail',
        component: ActivityMailComponent,
      },
      {
        path: 'activity-meeting',
        component: ActivityMeetingComponent,
      },
      {
        path: 'activity-task',
        component: ActivityTaskComponent,
      },
    ],
  },
];

@NgModule({
  imports: [RouterModule.forChild(routes)],
  exports: [RouterModule],
})
export class ActivitiesRoutingModule {}
