import { NgxMaskDirective, NgxMaskPipe, provideNgxMask } from 'ngx-mask';
import { NgModule } from '@angular/core';
import { CommonModule, DatePipe } from '@angular/common';
import { NgScrollbarModule } from 'ngx-scrollbar';
import { NgApexchartsModule } from 'ng-apexcharts';
import {
  BsDatepickerModule,
  BsDatepickerConfig,
} from 'ngx-bootstrap/datepicker';
import { CustomPaginationModule } from './custom-pagination/custom-pagination.module';
import {  provideHttpClient, withInterceptorsFromDi } from '@angular/common/http';
import { MaterialModule } from './material/material.module';
import { FormsModule, ReactiveFormsModule } from '@angular/forms';
import { NgxEditorModule } from 'ngx-editor';
import { MultiSelectModule } from 'primeng/multiselect';
import { CollapseHeaderModule } from '../app/feature-module/common/collapse-header/collapse-header.module';
import { CarouselModule } from 'ngx-owl-carousel-o';
import { LightgalleryModule } from 'lightgallery/angular'; 
import { FullCalendarModule } from '@fullcalendar/angular';
import { ToastModule } from 'primeng/toast';
import { TooltipModule } from 'ngx-bootstrap/tooltip';
import { PopoverModule } from 'ngx-bootstrap/popover';
import { NgxDropzoneModule } from 'ngx-dropzone';
import { LightboxModule } from 'ngx-lightbox';
import { ChipsModule } from 'primeng/chips';
import { EditorModule } from 'primeng/editor';
import { DateRangePickerModule } from '../app/feature-module/common/date-range-picker/date-range-picker.module';
import { DropdownModule } from 'primeng/dropdown';
import { TimepickerModule } from 'ngx-bootstrap/timepicker';
import {NgxMatTimepickerModule} from 'ngx-mat-timepicker';
import { BsDaterangepickerConfig } from 'ngx-bootstrap/datepicker';
import { MatSelectModule } from '@angular/material/select';
import { NgChartsModule } from 'ng2-charts';



@NgModule({ declarations: [],
    exports: [
        CommonModule,
        NgScrollbarModule,
        NgApexchartsModule,
        BsDatepickerModule,
        CustomPaginationModule,
        MaterialModule,
        FormsModule,
        ReactiveFormsModule,
        BsDatepickerModule,
        NgxEditorModule,
        MultiSelectModule,
        CollapseHeaderModule,
        CarouselModule,
        LightgalleryModule,
        FullCalendarModule,
        ToastModule,
        TooltipModule,
        PopoverModule,
        NgxMaskDirective,
        NgxMaskPipe,
        NgxDropzoneModule,
        NgChartsModule,
        LightboxModule,
        ChipsModule,
        EditorModule,
        DateRangePickerModule,
        DropdownModule,
        TimepickerModule,
        NgxMatTimepickerModule,
    ], imports: [CommonModule,
        NgScrollbarModule,
        NgApexchartsModule,
        BsDatepickerModule,
        CustomPaginationModule,
        MaterialModule,
        FormsModule,
        ReactiveFormsModule,
        BsDatepickerModule.forRoot(),
        NgxEditorModule,
        MultiSelectModule,
        CollapseHeaderModule,
        CarouselModule,
        LightgalleryModule,
        FullCalendarModule,
        MatSelectModule,
        ToastModule,
        TooltipModule,
        PopoverModule,
        NgxMaskDirective,
        NgxMaskPipe,
        NgxDropzoneModule,
        NgChartsModule.forRoot(),
        LightboxModule,
        ChipsModule,
        EditorModule,
        MatSelectModule,
        DateRangePickerModule,
        DropdownModule,
        TimepickerModule.forRoot(),
        NgxMatTimepickerModule], providers: [provideNgxMask(),BsDatepickerConfig, DatePipe, BsDaterangepickerConfig, provideHttpClient(withInterceptorsFromDi())] })
export class SharedModule {}
