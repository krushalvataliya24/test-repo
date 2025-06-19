import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';

import { CrmsettingRoutingModule } from './crmsetting-routing.module';
import { CrmsettingComponent } from './crmsetting.component';
import { CallsComponent } from './calls/calls.component';
import { ContactStageComponent } from './contact-stage/contact-stage.component';
import { IndustryComponent } from './industry/industry.component';
import { LostReasonComponent } from './lost-reason/lost-reason.component';
import { SourcesComponent } from './sources/sources.component';
import { SharedModule } from '../../../shared/shared.module';


@NgModule({
  declarations: [
    CrmsettingComponent,
    CallsComponent,
    ContactStageComponent,
    IndustryComponent,
    LostReasonComponent,
    SourcesComponent
  ],
  imports: [
    CommonModule,
    CrmsettingRoutingModule,
    SharedModule
  ]
})
export class CrmsettingModule { }
