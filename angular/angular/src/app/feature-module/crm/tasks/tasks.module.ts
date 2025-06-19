import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';

import { TasksRoutingModule } from './tasks-routing.module';
import { TasksComponent } from './tasks.component';
import { SharedModule } from '../../../../shared/shared.module';
import { AllTasksComponent } from './all-tasks/all-tasks.component';
import { TasksImportantComponent } from './tasks-important/tasks-important.component';
import { TasksCompletedComponent } from './tasks-completed/tasks-completed.component';


@NgModule({
  declarations: [
    TasksComponent,
    AllTasksComponent,
    TasksImportantComponent,
    TasksCompletedComponent
  ],
  imports: [
    CommonModule,
    TasksRoutingModule,
    SharedModule
  ]
})
export class TasksModule { }
