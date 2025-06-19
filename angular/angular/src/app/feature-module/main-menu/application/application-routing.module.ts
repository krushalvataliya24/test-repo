import { NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';
import { CallHistoryComponent } from './call/call-history/call-history.component';
import { ApplicationComponent } from './application.component';
import { FileManagerComponent } from './file/file-manager/file-manager.component';
import { AudioCallComponent } from './call/audio-call/audio-call.component';
import { VideoCallComponent } from './call/video-call/video-call.component';
import { ChatComponent } from './chat/chat.component';
import { TodoComponent } from './todo/todo.component';
import { NotesComponent } from './notes/notes.component';
import { SocialFeedComponent } from './social-feed/social-feed.component';
import { InvoicesComponent } from './invoices/invoices.component';
import { InvoiceDetailsComponent } from './invoice-details/invoice-details.component';


const routes: Routes = [
  {
    path: '',
    component: ApplicationComponent,
    children: [
      {
        path: 'chat',
        component: ChatComponent,
      },
      {
        path: 'calendar',
        loadChildren: () =>
          import('./calendar/calendar.module').then((m) => m.CalendarModule),
      },
      {
        path: 'email',
        loadChildren: () =>
          import('./email/email.module').then((m) => m.EmailModule),
      },
      {
        path: 'call-history',
        component: CallHistoryComponent,
      },
      {
        path: 'file-manager',
        component: FileManagerComponent,
      },
      {
        path: 'audio-call',
        component: AudioCallComponent,
      },
      {
        path: 'video-call',
        component: VideoCallComponent,
      },
      {
        path: 'todo',
        component: TodoComponent,
      },
      {
        path: 'notes',
        component: NotesComponent,
      },
      {
        path: 'social-feed',
        component: SocialFeedComponent,
      },
      {
        path: 'invoices',
        component: InvoicesComponent,
      },
      {
        path: 'invoice-details',
        component: InvoiceDetailsComponent,
      },
      { path: 'kanban-view', loadChildren: () => import('./kanban-view/kanban-view.module').then(m => m.KanbanViewModule) },
      
    ],
  },
  
];

@NgModule({
  imports: [RouterModule.forChild(routes)],
  exports: [RouterModule],
})
export class ApplicationRoutingModule {}
