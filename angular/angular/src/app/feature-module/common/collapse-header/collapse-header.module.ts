import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { CollapseHeaderComponent } from './collapse-header.component';
import { MatTooltipModule } from '@angular/material/tooltip';



@NgModule({
  declarations: [
    CollapseHeaderComponent
  ],
  imports: [
    CommonModule,
    MatTooltipModule
  ],
  exports: [CollapseHeaderComponent],
})
export class CollapseHeaderModule { }
