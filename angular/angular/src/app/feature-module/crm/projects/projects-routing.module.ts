import { NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';
import { ProjectsComponent } from './projects.component';
import { ProjectDetailsComponent } from './project-details/project-details.component';
import { ProjectGridComponent } from './project-grid/project-grid.component';
import { ProjectListsComponent } from './project-lists/project-lists.component';


const routes: Routes = [
  {
    path: '',
    component: ProjectsComponent,
    children: [
      {
        path: 'project-details',
        component: ProjectDetailsComponent,
      },
      {
        path: 'project-grid',
        component: ProjectGridComponent,
      },
      {
        path: 'project-lists',
        component: ProjectListsComponent,
      },
     
    ],
  },
];

@NgModule({
  imports: [RouterModule.forChild(routes)],
  exports: [RouterModule],
})
export class ProjectsRoutingModule {}
