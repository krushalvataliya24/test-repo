import { NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';
import { CrmsettingComponent } from './crmsetting.component';
import { CallsComponent } from './calls/calls.component';
import { ContactStageComponent } from './contact-stage/contact-stage.component';
import { IndustryComponent } from './industry/industry.component';
import { LostReasonComponent } from './lost-reason/lost-reason.component';
import { SourcesComponent } from './sources/sources.component';

const routes: Routes = [
  {
    path: '',
    component: CrmsettingComponent,
    children: [
      { path: 'calls', component: CallsComponent },
      { path: 'contact-stage', component: ContactStageComponent },
      { path: 'industry', component: IndustryComponent },
      { path: 'lost-reason', component: LostReasonComponent },
      { path: 'sources', component:SourcesComponent},
    ],
  },
];

@NgModule({
  imports: [RouterModule.forChild(routes)],
  exports: [RouterModule],
})
export class CrmsettingRoutingModule {}
