import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';

import { CampaignRoutingModule } from './campaign-routing.module';
import { CampaignComponent } from './campaign.component';
import { CampaignListComponent } from './campaign-list/campaign-list.component';
import { CampaignArchieveComponent } from './campaign-archieve/campaign-archieve.component';
import { CampaignCompleteComponent } from './campaign-complete/campaign-complete.component';
import { SharedModule } from '../../../../shared/shared.module';


@NgModule({
  declarations: [
    CampaignComponent,
    CampaignListComponent,
    CampaignArchieveComponent,
    CampaignCompleteComponent
  ],
  imports: [
    CommonModule,
    CampaignRoutingModule,
    SharedModule
  ]
})
export class CampaignModule { }
