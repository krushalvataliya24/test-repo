import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';

import { ProjectsRoutingModule } from './projects-routing.module';
import { ProjectsComponent } from './projects.component';
import { ProjectDetailsComponent } from './project-details/project-details.component';
import { ProjectGridComponent } from './project-grid/project-grid.component';
import { ProjectReportsComponent } from '../../reports/project-reports/project-reports.component';
import { ProjectListsComponent } from './project-lists/project-lists.component';
import { SharedModule } from '../../../../shared/shared.module';


@NgModule({
  declarations: [
    ProjectsComponent,
    ProjectDetailsComponent,
    ProjectGridComponent,
    ProjectReportsComponent,
    ProjectListsComponent
  ],
  imports: [
    CommonModule,
    ProjectsRoutingModule,
    SharedModule
  ]
})
export class ProjectsModule { }
