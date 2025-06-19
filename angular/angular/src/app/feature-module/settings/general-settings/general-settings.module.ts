import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';

import { GeneralSettingsRoutingModule } from './general-settings-routing.module';
import { GeneralSettingsComponent } from './general-settings.component';
import { ConnectedAppsComponent } from './connected-apps/connected-apps.component';
import { ProfileComponent } from './profile/profile.component';
import { SecuritySettingsComponent } from './security-settings/security-settings.component';
import { NotificationComponent } from './notification/notification.component';
import { SharedModule } from '../../../../shared/shared.module';


@NgModule({
  declarations: [
    GeneralSettingsComponent,
    ConnectedAppsComponent,
    SecuritySettingsComponent,
    ProfileComponent,
    NotificationComponent
  ],
  imports: [
    CommonModule,
    GeneralSettingsRoutingModule,
    SharedModule
  ]
})
export class GeneralSettingsModule { }
