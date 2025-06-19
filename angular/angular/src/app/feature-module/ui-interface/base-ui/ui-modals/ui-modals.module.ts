import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';

import { UiModalsRoutingModule } from './ui-modals-routing.module';
import { UiModalsComponent } from './ui-modals.component';
import { SharedModule } from '../../../../../shared/shared.module';


@NgModule({
  declarations: [
    UiModalsComponent
  ],
  imports: [
    CommonModule,
    UiModalsRoutingModule,
    SharedModule
  ]
})
export class UiModalsModule { }
