import { NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';
import { TasksComponent } from './tasks.component';
import { AllTasksComponent } from './all-tasks/all-tasks.component';
import { TasksCompletedComponent } from './tasks-completed/tasks-completed.component';
import { TasksImportantComponent } from './tasks-important/tasks-important.component';

const routes: Routes = [
  {
    path: '',
    component: TasksComponent,
    children: [
      { path: 'all-tasks', component: AllTasksComponent },
      { path: 'tasks-completed', component: TasksCompletedComponent },
      { path: 'tasks-important', component: TasksImportantComponent },
    ],
  },
];

@NgModule({
  imports: [RouterModule.forChild(routes)],
  exports: [RouterModule],
})
export class TasksRoutingModule {}
