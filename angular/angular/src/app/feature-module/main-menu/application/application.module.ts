import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';

import { ApplicationRoutingModule } from './application-routing.module';
import { ApplicationComponent } from './application.component';
import { FileManagerComponent } from './file/file-manager/file-manager.component';
import { ChatComponent } from './chat/chat.component';
import { CallHistoryComponent } from './call/call-history/call-history.component';
import { AudioCallComponent } from './call/audio-call/audio-call.component';

import { NotesComponent } from './notes/notes.component';
import { VideoCallComponent } from './call/video-call/video-call.component';
import { SharedModule } from '../../../../shared/shared.module';
import { ChipsModule } from 'primeng/chips';
import { InvoicesComponent } from './invoices/invoices.component';
import { TodoComponent } from './todo/todo.component';
import { InvoiceDetailsComponent } from './invoice-details/invoice-details.component';
import { SocialFeedComponent } from './social-feed/social-feed.component';


@NgModule({
  declarations: [
    ApplicationComponent,
    FileManagerComponent,
    ChatComponent,
    CallHistoryComponent,
    AudioCallComponent,
    TodoComponent,
    NotesComponent,
    VideoCallComponent,
    InvoicesComponent,
    InvoiceDetailsComponent,
    SocialFeedComponent
  ],
  imports: [
    CommonModule,
    ApplicationRoutingModule,
    SharedModule,
    ChipsModule
  ]
})
export class ApplicationModule { }
