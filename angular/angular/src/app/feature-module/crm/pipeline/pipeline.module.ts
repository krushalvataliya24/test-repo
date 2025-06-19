import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';

import { SharedModule } from '../../../../shared/shared.module';
import { PipelineListComponent } from './pipeline-list/pipeline-list.component';
import { PipelineComponent } from './pipeline.component';
import { PipelineRoutingModule } from './pipeline-routing.module';


@NgModule({
  declarations: [
    PipelineComponent,
    PipelineListComponent,
  ],
  imports: [
    CommonModule,
    PipelineRoutingModule,
    SharedModule
  ]
})
export class PipelineModule { }
