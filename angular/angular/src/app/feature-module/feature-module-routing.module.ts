import { NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';
import { FeatureModuleComponent } from './feature-module.component';
import { TicketsComponent } from './support/tickets/tickets.component';
import { ContactMessagesComponent } from './support/contact-messages/contact-messages.component';
import { ModalDashboardComponent } from './main-menu/dashboard/modal-dashboard/modal-dashboard.component';

const routes: Routes = [
  {
    path: '',
    component: FeatureModuleComponent,
    children: [
      {
        path: 'dashboard',
        loadChildren: () =>
          import('./main-menu/dashboard/dashboard.module').then(
            (m) => m.DashboardModule
          ),
      },
      {
        path: 'contacts',
        loadChildren: () =>
          import('./crm/contacts/contacts.module').then(
            (m) => m.ContactsModule
          ),
        data: { title: 'Contacts - CRMS Admin' },
      },
      {
        path: 'companies',
        loadChildren: () =>
          import('./crm/companies/companies.module').then(
            (m) => m.CompaniesModule
          ),
      },
      {
        path: 'settings',
        loadChildren: () =>
          import('./settings/settings.module').then((m) => m.SettingsModule),
      },
      {
        path: 'collapse-header',
        loadChildren: () =>
          import('./common/collapse-header/collapse-header.module').then(
            (m) => m.CollapseHeaderModule
          ),
      },
      {
        path: 'application',
        loadChildren: () =>
          import('./main-menu/application/application.module').then(
            (m) => m.ApplicationModule
          ),
      },
      {
        path: 'super-admin',
        loadChildren: () =>
          import('./main-menu/super-admin/super-admin.module').then(
            (m) => m.SuperAdminModule
          ),
      },
      {
        path: 'leads',
        loadChildren: () =>
          import('./crm/leads/leads.module').then((m) => m.LeadsModule),
      },
      {
        path: 'deals',
        loadChildren: () =>
          import('./crm/deals/deals.module').then((m) => m.DealsModule),
      },
      {
        path: 'reports',
        loadChildren: () =>
          import('./reports/reports.module').then((m) => m.ReportsModule),
      },
      {
        path: 'base-ui',
        loadChildren: () =>
          import('../feature-module/ui-interface/base-ui/base-ui.module').then(
            (m) => m.BaseUiModule
          ),
      },
      {
        path: 'advanced-ui',
        loadChildren: () =>
          import(
            '../feature-module/ui-interface/advanced-ui/advanced-ui.module'
          ).then((m) => m.AdvancedUiModule),
      },
      {
        path: 'charts',
        loadChildren: () =>
          import('../feature-module/ui-interface/charts/charts.module').then(
            (m) => m.ChartsModule
          ),
      },
      {
        path: 'forms',
        loadChildren: () =>
          import('../feature-module/ui-interface/forms/forms.module').then(
            (m) => m.FormsModule
          ),
      },
      {
        path: 'table',
        loadChildren: () =>
          import('../feature-module/ui-interface/table/table.module').then(
            (m) => m.TableModule
          ),
      },
      {
        path: 'icons',
        loadChildren: () =>
          import('../feature-module/ui-interface/icons/icons.module').then(
            (m) => m.IconsModule
          ),
      },
      {
        path: 'maps',
        loadChildren: () =>
          import('../feature-module/ui-interface/maps/maps.module').then(
            (m) => m.MapsModule
          ),
      },
      {
        path: 'tickets',
        component: TicketsComponent,
        data: { title: 'tickets - CRMS Admin' },
      },
      {
        path: 'contact-messages',
        component: ContactMessagesComponent,
      },
      {
        path: 'pipeline',
        loadChildren: () =>
          import('./crm/pipeline/pipeline.module').then(
            (m) => m.PipelineModule
          ),
      },
      {
        path: 'campaign',
        loadChildren: () =>
          import('./crm/campaign/campaign.module').then(
            (m) => m.CampaignModule
          ),
      },
      {
        path: 'projects',
        loadChildren: () =>
          import('./crm/projects/projects.module').then(
            (m) => m.ProjectsModule
          ),
      },
      {
        path: 'membership',
        loadChildren: () =>
          import('./membership/membership.module').then(
            (m) => m.MembershipModule
          ),
      },
      {
        path: 'activities',
        loadChildren: () =>
          import('./crm/activities/activities.module').then(
            (m) => m.ActivitiesModule
          ),
      },
      {
        path: 'user-management',
        loadChildren: () =>
          import('./user-management/user-management.module').then(
            (m) => m.UserManagementModule
          ),
      },

      {
        path: 'location',
        loadChildren: () =>
          import('./content/location/location.module').then(
            (m) => m.LocationModule
          ),
      },
      {
        path: 'tasks',
        loadChildren: () =>
          import('./crm/tasks/tasks.module').then((m) => m.TasksModule),
      },
      {
        path: 'analytics',
        loadChildren: () =>
          import('./crm/analytics/analytics.module').then(
            (m) => m.AnalyticsModule
          ),
      },
      {
        path: 'pages',
        loadChildren: () =>
          import('./pages/pages.module').then((m) => m.PagesModule),
      },
      {
        path: 'date-range-picker',
        loadChildren: () =>
          import('./common/date-range-picker/date-range-picker.module').then(
            (m) => m.DateRangePickerModule
          ),
      },
      {
        path: 'content',
        loadChildren: () =>
          import('../feature-module/content/content.module').then(
            (m) => m.ContentModule
          ),
      },
      {
        path: 'compaign',
        loadChildren: () =>
          import('../feature-module/crm/campaign/campaign.module').then(
            (m) => m.CampaignModule
          ),
      },
      {
        path: 'crmsetting',
        loadChildren: () =>
          import('./crmsetting/crmsetting.module').then(
            (m) => m.CrmsettingModule
          ),
      },
      {
        path: 'support',
        loadChildren: () =>
          import('./support/support.module').then((m) => m.SupportModule),
      },
      {
        path: 'proposals',
        loadChildren: () =>
          import('./crm/proposals/proposals.module').then(
            (m) => m.ProposalsModule
          ),
      },
      {
        path: 'contracts',
        loadChildren: () =>
          import('./crm/contracts/contracts.module').then(
            (m) => m.ContractsModule
          ),
      },
      {
        path: 'estimations',
        loadChildren: () =>
          import('./crm/estimations/estimations.module').then(
            (m) => m.EstimationsModule
          ),
      },
      {
        path: 'payments',
        loadChildren: () =>
          import('./crm/payments/payments.module').then(
            (m) => m.PaymentsModule
          ),
      },
      {
        path: 'invoice',
        loadChildren: () =>
          import('./crm/invoice/invoice.module').then((m) => m.InvoiceModule),
      },
      { path: 'layout-mini', component: ModalDashboardComponent },
      { path: 'layout-detached', component: ModalDashboardComponent },
      { path: 'layout-modern', component: ModalDashboardComponent },
      { path: 'layout-two-column', component: ModalDashboardComponent },
      { path: 'layout-hovered', component: ModalDashboardComponent },
      { path: 'layout-boxed', component: ModalDashboardComponent },
      { path: 'layout-horizontal-single', component: ModalDashboardComponent },
      { path: 'layout-horizontal-overlay', component: ModalDashboardComponent },
      { path: 'layout-horizontal-box', component: ModalDashboardComponent },
      { path: 'layout-horizontal-sidemenu', component: ModalDashboardComponent },
      { path: 'layout-vertical-transparent', component: ModalDashboardComponent },
      { path: 'layout-without-header', component: ModalDashboardComponent },
      { path: 'layout-default', component: ModalDashboardComponent },
      { path: 'layout-rtl', component: ModalDashboardComponent },
      { path: 'layout-dark', component: ModalDashboardComponent },
    ],
  },
];

@NgModule({
  imports: [RouterModule.forChild(routes)],
  exports: [RouterModule],
})
export class FeatureModuleRoutingModule {}
