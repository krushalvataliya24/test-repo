import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';

import { FeatureModuleRoutingModule } from './feature-module-routing.module';
import { FeatureModuleComponent } from './feature-module.component';
import { SidebarComponent } from './common/sidebar/sidebar.component';
import { HeaderComponent } from './common/header/header.component';
import { SharedModule } from '../../shared/shared.module';

import { PagesComponent } from './content/pages/pages.component';
import { FaqComponent } from './content/faq/faq.component';
import { TestimonialsComponent } from './content/testimonials/testimonials.component';


import { LayoutComponent } from './common/layout/layout.component';
import { HorizontalSidebarComponent } from './common/horizontal-sidebar/horizontal-sidebar.component';



@NgModule({
  declarations: [
    FeatureModuleComponent,
    SidebarComponent,
    HeaderComponent,
    PagesComponent,
    FaqComponent,
    TestimonialsComponent,
    LayoutComponent,
    HorizontalSidebarComponent
  ],
  imports: [
    CommonModule,
    FeatureModuleRoutingModule,
    SharedModule
  ]
})
export class FeatureModuleModule { }
