import { NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';
import { CampaignComponent } from './campaign.component';
import { CampaignArchieveComponent } from './campaign-archieve/campaign-archieve.component';
import { CampaignCompleteComponent } from './campaign-complete/campaign-complete.component';
import { CampaignListComponent } from './campaign-list/campaign-list.component';

const routes: Routes = [
  {
    path: '',
    component: CampaignComponent,
    children: [
      {
        path: 'compaign-archieve',
        component: CampaignArchieveComponent,
      },
      {
        path: 'compaign-complete',
        component: CampaignCompleteComponent,
      },
      {
        path: 'compaign-list',
        component: CampaignListComponent,
      },
    ],
  },
];

@NgModule({
  imports: [RouterModule.forChild(routes)],
  exports: [RouterModule],
})
export class CampaignRoutingModule {}
