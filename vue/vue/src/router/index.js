import { createRouter, createWebHistory } from 'vue-router';

import Login from '@/views/pages/pages/authentication/auth-login.vue'
import Register from '@/views/pages/pages/authentication/auth-register.vue'
import Forgot_Password from '@/views/pages/pages/authentication/forgot-password.vue'
import Reset_Password from '@/views/pages/pages/authentication/reset-password.vue'
import Email_Verification from '@/views/pages/pages/authentication/email-verification.vue'
import Two_Step_Verification from '@/views/pages/pages/authentication/two-step-verification.vue'
import Success from '@/views/pages/pages/authentication/auth-success.vue'
import Lock_Screen from '@/views/pages/pages/authentication/lock-screen.vue'
import Crm_Error from '@/views/pages/pages/error/crm-error.vue'
import Error_404 from '@/views/pages/pages/error/error-404.vue'
import Error_500 from '@/views/pages/pages/error/error-500.vue'
import Blank_Page from '@/views/pages/pages/blank-page.vue'
import Coming_Soon from '@/views/pages/pages/coming-soon.vue'
import Under_Maintenance from '@/views/pages/pages/under-maintenance.vue'
import CRM from '@/views/pages/crm/crm-index.vue'
import ContactsList from '@/views/pages/crm/contacts/contacts-list.vue'
import Crm_Support from '@/views/pages/support/crm-support.vue'
import Contact_Messages from '@/views/pages/support/contact-messages.vue'
import Crm_Tickets from '@/views/pages/support/crm-tickets.vue'
import Crm_Settings from '@/views/pages/settings/crm-settings.vue'
import Crm_Profile from '@/views/pages/settings/general-settings/crm-profile.vue'
import Crm_Security from '@/views/pages/settings/general-settings/crm-security.vue'
import Crm_Notifications from '@/views/pages/settings/general-settings/crm-notifications.vue'
import Connected_Apps from '@/views/pages/settings/general-settings/connected-apps.vue'
import Website_Settings from '@/views/pages/settings/website-settings/website-settings.vue'
import Company_Settings from '@/views/pages/settings/website-settings/company-settings.vue'
import Localization from '@/views/pages/settings/website-settings/localization-settings.vue'
import Prefixes from '@/views/pages/settings/website-settings/prefixes-settings.vue'
import Preference from '@/views/pages/settings/website-settings/preference-settings.vue'
import Appearance from '@/views/pages/settings/website-settings/appearance-settings.vue'
import Language_Settings from '@/views/pages/settings/website-settings/language-settings.vue'
import Language_Web from '@/views/pages/settings/website-settings/language-web.vue'
import App_Settings from '@/views/pages/settings/app-settings/app-settings.vue'
import Invoice_Settings from '@/views/pages/settings/app-settings/invoice-settings.vue'
import Printers from '@/views/pages/settings/app-settings/printers-settings.vue'
import Custom_Fields from '@/views/pages/settings/app-settings/custom-fields.vue'
import System_Settings from '@/views/pages/settings/system-settings/system-settings.vue'
import Email_Settings from '@/views/pages/settings/system-settings/email-settings.vue'
import Sms_Gateways from '@/views/pages/settings/system-settings/sms-gateways.vue'
import Gdpr_Cookies from '@/views/pages/settings/system-settings/gdpr-cookies.vue'
import Financial_Settings from '@/views/pages/settings/financial-settings/financial-settings.vue'
import Payment_Gateways from '@/views/pages/settings/financial-settings/payment-gateways.vue'
import Bank_Accounts from '@/views/pages/settings/financial-settings/bank-accounts.vue'
import Tax_Rates from '@/views/pages/settings/financial-settings/tax-rates.vue'
import Currencies from '@/views/pages/settings/financial-settings/currencies-settings.vue'
import Other_Settings from '@/views/pages/settings/other-settings/other-settings.vue'
import Storage_Settings from '@/views/pages/settings/other-settings/storage-settings.vue'
import Ban_Ip_Address from '@/views/pages/settings/other-settings/ban-ip-address.vue'
import ContactGrid from '@/views/pages/crm/contacts/contact-grid.vue'
import ContactDetails from '@/views/pages/crm/contacts/contact-details/contact-details.vue'
import CompaniesList from '@/views/pages/crm/companies/companies-list.vue';
import Crm_User from '@/views/pages/user/crm-user.vue'
import Manage_Users from '@/views/pages/user/manage-users.vue'
import Roles_Permissions from '@/views/pages/user/roles-permissions.vue'
import Crm_Permission from '@/views/pages/user/crm-permission.vue'
import Delete_Request from '@/views/pages/user/delete-request.vue'
import Crm_Content from '@/views/pages/content/crm-content.vue'
import Crm_Pages from '@/views/pages/content/crm-pages.vue'
import Crm_Testimonials from '@/views/pages/content/crm-testimonials.vue'
import Crm_Faq from '@/views/pages/content/crm-faq.vue'
import Crm_Location from '@/views/pages/content/location/crm-location.vue'
import Crm_Countries from '@/views/pages/content/location/crm-countries.vue'
import Crm_States from '@/views/pages/content/location/crm-states.vue'
import Crm_Cities from '@/views/pages/content/location/crm-cities.vue'
import Crm_Membership from '@/views/pages/membership/crm-membership.vue'
import Membership_Plans from '@/views/pages/membership/membership-plans.vue'
import Membership_Addons from '@/views/pages/membership/membership-addons.vue'
import Membership_Transactions from '@/views/pages/membership/membership-transactions.vue'
import Crm_Index from '@/views/pages/crm-settings/crm-index.vue'
import Crm_Calls from '@/views/pages/crm-settings/crm-calls.vue'
import Crm_Industry from '@/views/pages/crm-settings/crm-industry.vue'
import Contact_Stage from '@/views/pages/crm-settings/contact-stage.vue'
import Lost_Reason from '@/views/pages/crm-settings/lost-reason.vue'
import Crm_Sources from '@/views/pages/crm-settings/crm-sources.vue'
import Crm_Report from '@/views/pages/report/crm-report.vue'
import Lead_Report from '@/views/pages/report/lead-reports/lead-reports.vue'
import Deal_Report from '@/views/pages/report/deal-reports/deal-reports.vue'
import Contact_Report from '@/views/pages/report/contact-reports/contact-reports.vue'
import Company_Report from '@/views/pages/report/company-reports/company-reports.vue'
import Project_Report from '@/views/pages/report/project-reports/project-reports.vue'
import Task_Report from '@/views/pages/report/task-reports/task-reports.vue'


import Tables from '@/views/pages/uiinterface/tables/ui-tables.vue'
import Tables_Basic from '@/views/pages/uiinterface/tables/tables-basic.vue'
import Data_Tables from '@/views/pages/uiinterface/tables/data-tables.vue'
import Chartapex from '@/views/pages/uiinterface/charts/apex/chart-apex.vue'
import Chartc3 from '@/views/pages/uiinterface/charts/c3/chart-c3.vue'
import Chartflot from '@/views/pages/uiinterface/charts/flot/chart-flot.vue'
import Chartjs from '@/views/pages/uiinterface/charts/js/chart-js.vue'
import Chartmorris from '@/views/pages/uiinterface/charts/morris/chart-morris.vue'
import Charts from '@/views/pages/uiinterface/charts/ui-charts.vue'
import Forms from '@/views/pages/uiinterface/forms/ui-forms.vue'
import FormLayouts from '@/views/pages/uiinterface/forms/layouts/form-layouts.vue';
import FormElements from '@/views/pages/uiinterface/forms/form-elements/form-elements.vue'
import Formbasicinput from '@/views/pages/uiinterface/forms/form-elements/formbasic/formbasic-input.vue'
import Formcheckboxradios from '@/views/pages/uiinterface/forms/form-elements/form-checkbox-radios.vue'
import Formgridgutters from '@/views/pages/uiinterface/forms/form-elements/form-grid-gutters.vue'
import Formselect from '@/views/pages/uiinterface/forms/form-elements/form-select.vue'
import FormInput from '@/views/pages/uiinterface/forms/form-elements/forminput/form-input.vue'
import Formmask from '@/views/pages/uiinterface/forms/form-elements/formmask/formmask.vue'
import Formfileupload from '@/views/pages/uiinterface/forms/form-elements/formfile-upload.vue'
import FormHorizontal from '@/views/pages/uiinterface/forms/layouts/form-horizontal.vue'
import Formvertical from '@/views/pages/uiinterface/forms/layouts/form-vertical.vue'
import Formfloatinglabels from '@/views/pages/uiinterface/forms/layouts/form-floating-labels.vue'
import Formvalidation from '@/views/pages/uiinterface/forms/form-validation.vue'
import Formselect2 from '@/views/pages/uiinterface/forms/form-select2.vue'
import Formwizard from '@/views/pages/uiinterface/forms/form-wizard.vue'
import Advancedui from '@/views/pages/uiinterface/advancedUI/advanced-ui.vue'
import UI_Ribbon from '@/views/pages/uiinterface/advancedUI/ui-ribbon.vue'
import UI_Clipboard from '@/views/pages/uiinterface/advancedUI/ui-clipboard.vue'
import UI_Drag_Drop from '@/views/pages/uiinterface/advancedUI/ui-drag-drop.vue'
import UI_Text_Editor from '@/views/pages/uiinterface/advancedUI/ui-text-editor.vue'
import UI_Counter from '@/views/pages/uiinterface/advancedUI/ui-counter.vue'
import UI_Scrollbar from '@/views/pages/uiinterface/advancedUI/ui-scrollbar.vue'
import UI_Rating from '@/views/pages/uiinterface/advancedUI/ui-rating.vue'
import UI_Stickynote from '@/views/pages/uiinterface/advancedUI/ui-stickynote.vue'
import UI_Timeline from '@/views/pages/uiinterface/advancedUI/ui-timeline.vue'
import BaseUi from '@/views/pages/uiinterface/baseui/base-ui.vue'
import UI_Alerts from '@/views/pages/uiinterface/baseui/ui-alerts.vue'
import UI_Accordion from '@/views/pages/uiinterface/baseui/ui-accordion.vue'
import UI_Avatar from '@/views/pages/uiinterface/baseui/ui-avatar.vue'
import UI_Badges from '@/views/pages/uiinterface/baseui/ui-badges.vue'
import UI_Borders from '@/views/pages/uiinterface/baseui/ui-borders.vue'
import UI_Buttons from '@/views/pages/uiinterface/baseui/ui-buttons.vue'
import UI_Buttons_group from '@/views/pages/uiinterface/baseui/ui-buttons-group.vue'
import UI_Breadcrumb from '@/views/pages/uiinterface/baseui/ui-breadcrumb.vue'
import UI_Cards from '@/views/pages/uiinterface/baseui/ui-cards.vue'
import UI_Carousel from '@/views/pages/uiinterface/baseui/carousel/ui-carousel.vue'
import UI_Colors from '@/views/pages/uiinterface/baseui/ui-colors.vue'
import UI_Dropdowns from '@/views/pages/uiinterface/baseui/ui-dropdowns.vue'
import UI_Grid from '@/views/pages/uiinterface/baseui/ui-grid.vue'
import UI_Images from '@/views/pages/uiinterface/baseui/ui-images.vue'
import UI_Lightbox from '@/views/pages/uiinterface/baseui/lightbox/ui-lightbox.vue'
import UI_Media from '@/views/pages/uiinterface/baseui/ui-media.vue'
import UI_Modals from '@/views/pages/uiinterface/baseui/ui-modals.vue'
import UI_Offcanvas from '@/views/pages/uiinterface/baseui/ui-offcanvas.vue'
import UI_Pagination from '@/views/pages/uiinterface/baseui/ui-pagination.vue'
import UI_Popovers from '@/views/pages/uiinterface/baseui/ui-popovers.vue'
import UI_Progress from '@/views/pages/uiinterface/baseui/ui-progress.vue'
import UI_Placeholders from '@/views/pages/uiinterface/baseui/ui-placeholders.vue'
import UI_Rangeslider from '@/views/pages/uiinterface/baseui/ui-rangeslider.vue'
import UI_Spinner from '@/views/pages/uiinterface/baseui/ui-spinner.vue'
import UI_Sortable from '@/views/pages/uiinterface/baseui/ui-sortable.vue'
import UI_Sweetalerts from '@/views/pages/uiinterface/baseui/ui-sweetalerts.vue'
import UI_Nav_Tabs from '@/views/pages/uiinterface/baseui/ui-nav-tabs.vue'
import UI_Tooltips from '@/views/pages/uiinterface/baseui/ui-tooltips.vue'
import UI_Typography from '@/views/pages/uiinterface/baseui/ui-typography.vue'
import UI_Video from '@/views/pages/uiinterface/baseui/ui-video.vue'
import Icons from '@/views/pages/uiinterface/icons/ui-icons.vue'
import UI_Iconfontawesome from "@/views/pages/uiinterface/icons/icon-fontawesome.vue";
import UI_Iconfeather from "@/views/pages/uiinterface/icons/icon-feather.vue";
import UI_Iconionic from "@/views/pages/uiinterface/icons/icon-ionic.vue";
import UI_Iconmaterial from "@/views/pages/uiinterface/icons/icon-material.vue";
import UI_Iconpe7 from "@/views/pages/uiinterface/icons/icon-pe7.vue";
import UI_Iconsimpleline from "@/views/pages/uiinterface/icons/icon-simpleline.vue";
import UI_Iconthemify from "@/views/pages/uiinterface/icons/icon-themify.vue";
import UI_Iconweather from "@/views/pages/uiinterface/icons/icon-weather.vue";
import UI_Icontypicon from "@/views/pages/uiinterface/icons/icon-typicon.vue";
import UI_Iconflag from "@/views/pages/uiinterface/icons/icon-flag.vue";
import iconTabler from '@/views/pages/uiinterface/icons/icon-tabler.vue';
import iconBootstrap from '@/views/pages/uiinterface/icons/icon-bootstrap.vue';
import iconRemix from '@/views/pages/uiinterface/icons/icon-remix.vue';
import Ui_Maps from '@/views/pages/uiinterface/maps/ui-maps.vue'
import MapsVector from '@/views/pages/uiinterface/maps/maps-vector.vue';
import MapsLeaflet from '@/views/pages/uiinterface/maps/maps-leaflet.vue'
import CompaniesGrid from '@/views/pages/crm/companies/companies-grid.vue'
import CompanyDetails from '@/views/pages/crm/companies/company-details/company-details.vue'
import DealsList from '@/views/pages/crm/deals/deals-list.vue'
import DealsKanban from '@/views/pages/crm/deals/deals-kanban.vue'
import DealsDetails from '@/views/pages/crm/deals/deals-details.vue'
import LeadsList from '@/views/pages/crm/leads/leads-list.vue'
import LeadsKanban from '@/views/pages/crm/leads/leads-kanban.vue'
import LeadsDetails from '@/views/pages/crm/leads/leads-details.vue'
import PipelineList from '@/views/pages/crm/pipeline/pipeline-list.vue'
import Campaign from '@/views/pages/crm/campaign/campaign-index.vue'
import CampaignComplete from '@/views/pages/crm/campaign/campaign-complete.vue'
import CampaignArchieve from '@/views/pages/crm/campaign/campaign-archieve.vue'
import ProjectsList from '@/views/pages/crm/projects/projects-list.vue'
import ProjectGrid from '@/views/pages/crm/projects/project-grid.vue'
import Tasks from '@/views/pages/crm/tasks/task-content.vue'
import TasksImportant from '@/views/pages/crm/tasks/task-important.vue'
import TasksCompleted from '@/views/pages/crm/tasks/task-completed.vue'
import Analytics from '@/views/pages/crm/analytics/analytics-index.vue'
import Activities from '@/views/pages/crm/activities/activities-list.vue'
import ActivityCalls from '@/views/pages/crm/activities/activity-calls.vue'
import ActivityMail from '@/views/pages/crm/activities/activity-mail.vue'
import ActivityTask from '@/views/pages/crm/activities/activity-task.vue'
import ActivityMeeting from '@/views/pages/crm/activities/activity-meeting.vue'
import Dashboard from '@/views/pages/dashboard/dashboard-index.vue'
import DealsDashboard from '@/views/pages/dashboard/deals-dashboard/deals-dashboard.vue'
import Application from '@/views/pages/application/application-index.vue'
import Chat from '@/views/pages/application/chat/chat-index.vue'
import Call from '@/views/pages/application/call/call-index.vue'
import VideoCall from '@/views/pages/application/call/video-call.vue'
import AudioCall from '@/views/pages/application/call/audio-call.vue'
import CallHistory from '@/views/pages/application/call/call-history.vue'
import Calendar from '@/views/pages/application/calendar-index.vue'
import Email from '@/views/pages/application/email-index.vue'
import Todo from '@/views/pages/application/todo-index.vue'
import Notes from '@/views/pages/application/notes-index.vue'
import FileManager from '@/views/pages/application/files/file-manager.vue'
import socialFeed from '@/views/pages/application/social-feed.vue';
import kanbanView from '@/views/pages/application/kanban-view/kanban-view.vue';
import LeadsDashboard from '@/views/pages/dashboard/leads-dashboard/leads-dashboard.vue';
import ProjectDashboard from '@/views/pages/dashboard/project-dashboard/project-dashboard.vue';
import ProjectDetails from '@/views/pages/crm/projects/project-details.vue'
import Proposals_List from '@/views/pages/crm/proposals/proposals-list.vue'
import Contracts_List from '@/views/pages/crm/contracts/contracts-list.vue'
import Invoices_List from '@/views/pages/crm/invoices/invoices-list.vue'
import Proposals_Grid from '@/views/pages/crm/proposals/proposals-grid.vue'
import Estimations_Kanban from '@/views/pages/crm/estimations/estimations-kanban.vue'
import Estimations_List from '@/views/pages/crm/estimations/estimations-list.vue'
import Payments_List from '@/views/pages/crm/payments/payments-list.vue'
import Invoice_Grid from '@/views/pages/crm/invoices/invoice-grid.vue'
import Contracts_Grid from '@/views/pages/crm/contracts/contracts-grid.vue'
import superAdmin from '@/views/pages/superadmin/super-admin.vue';
import superDashboard from '@/views/pages/superadmin/super-dashboard/super-dashboard.vue';
import companyList from '@/views/pages/superadmin/companies/company-list.vue';
import superSubscription from '@/views/pages/superadmin/super-subscription.vue';
import packagesList from '@/views/pages/superadmin/packages/packages-list.vue';
import packagesGrid from '@/views/pages/superadmin/packages/packages-grid.vue';
import domainList from '@/views/pages/superadmin/domain/domain-list.vue';
import purchaseTransaction from '@/views/pages/superadmin/purchase/purchase-transaction.vue';
import CrmLayouts from '@/views/pages/layouts/crm-layouts.vue';
import Layout_Mini from '@/views/pages/layouts/layout-mini.vue';
import Layout_Horizontal_Single from '@/views/pages/layouts/layout-horizontal-single.vue';
import Layout_Without_Header from '@/views/pages/layouts/layout-without-header.vue';
import Layout_Detached from '@/views/pages/layouts/layout-detached.vue';
import Layout_Dark from '@/views/pages/layouts/layout-dark.vue';
import Layout_rtl from '@/views/pages/layouts/layout-rtl/layout-rtl.vue';


const routes = [
  {
    path: '/',
    name: 'login',
    component: Login,
    meta: { title: 'Login  | CRMS - Advanced Bootstrap 5 Admin Template for Customer Management' }
  },
  {
    path: '/register',
    name: 'register',
    component: Register,
    meta: { title: 'Register  | CRMS - Advanced Bootstrap 5 Admin Template for Customer Management' }
  },
  {
    path: '/forgot-password',
    name: 'forgot-password',
    component: Forgot_Password,
    meta: { title: 'Register  | CRMS - Advanced Bootstrap 5 Admin Template for Customer Management' }
  },
  {
    path: '/reset-password',
    name: 'reset-password',
    component: Reset_Password,
    meta: { title: 'Forgot Password  | CRMS - Advanced Bootstrap 5 Admin Template for Customer Management' }
  },
  {
    path: '/email-verification',
    name: 'email-verification',
    component: Email_Verification,
    meta: { title: 'Email Verification | CRMS - Advanced Bootstrap 5 Admin Template for Customer Management' }
  },
  {
    path: '/two-step-verification',
    name: 'two-step-verification',
    component: Two_Step_Verification,
    meta: { title: 'Two Step Verification | CRMS - Advanced Bootstrap 5 Admin Template for Customer Management' }
  },
  {
    path: '/lock-screen',
    name: 'lock-screen',
    component: Lock_Screen,
    meta: { title: 'Lock Screen  | CRMS - Advanced Bootstrap 5 Admin Template for Customer Management' }
  },
  {
    path: '/success',
    name: 'success',
    component: Success,
    meta: { title: 'Success | CRMS - Advanced Bootstrap 5 Admin Template for Customer Management' }
  },
  {
    path: '/blank-page',
    name: 'blank-page',
    component: Blank_Page,
    meta: { title: 'Blank Page | CRMS - Advanced Bootstrap 5 Admin Template for Customer Management' }
  },
  {
    path: '/coming-soon',
    name: 'coming-soon',
    component: Coming_Soon,
    meta: { title: 'Coming Soon | CRMS - Advanced Bootstrap 5 Admin Template for Customer Management' }
  },
  {
    path: '/under-maintenance',
    name: 'under-maintenance',
    component: Under_Maintenance,
    meta: { title: 'Under Maintenance | CRMS - Advanced Bootstrap 5 Admin Template for Customer Management' }

  },
  {
    path: '/dashboard',
    component: Dashboard,
    children: [
      { path: '', redirect: '/dashboard/deals-dashboard' },
      { path: 'deals-dashboard', component: DealsDashboard, meta: { title: 'Dashboard | CRMS - Advanced Bootstrap 5 Admin Template for Customer Management' } },
      { path: 'leads-dashboard', component: LeadsDashboard, meta: { title: 'Leads Dashboard | CRMS - Advanced Bootstrap 5 Admin Template for Customer Management' } },
      { path: 'project-dashboard', component: ProjectDashboard, meta: { title: 'Project Dashboard | CRMS - Advanced Bootstrap 5 Admin Template for Customer Management' } },
    ]
  },
  {
    path: '/layouts',
    component: CrmLayouts,
    children: [
      { path: '', redirect: '/layouts/layout-mini' },
      { path: 'layout-mini', component: Layout_Mini, meta: { title: 'Layout Mini | CRMS - Advanced Bootstrap 5 Admin Template for Customer Management' } },
      { path: 'layout-horizontal-single', component: Layout_Horizontal_Single, meta: { title: 'Layout Horizontal | CRMS - Advanced Bootstrap 5 Admin Template for Customer Management' } },
      { path: 'layout-without-header', component: Layout_Without_Header, meta: { title: 'Layout Without Header | CRMS - Advanced Bootstrap 5 Admin Template for Customer Management' } },
      { path: 'layout-detached', component: Layout_Detached, meta: { title: 'Layout Detached | CRMS - Advanced Bootstrap 5 Admin Template for Customer Management' } },
      { path: 'layout-dark', component: Layout_Dark, meta: { title: 'Layout Dark | CRMS - Advanced Bootstrap 5 Admin Template for Customer Management' } },
      { path: 'layout-rtl', component: Layout_rtl, meta: { title: 'Layout RTL | CRMS - Advanced Bootstrap 5 Admin Template for Customer Management' } },
    ]
  },
  {
    path: '/application',
    component: Application,
    children: [
      {path: '', redirect: '/application/chat'},
      {path: 'chat', component: Chat, meta: { title: 'Chat | CRMS - Advanced Bootstrap 5 Admin Template for Customer Management' } },
      { path: "calendar", component: Calendar, meta: { title: 'Calendar | CRMS - Advanced Bootstrap 5 Admin Template for Customer Management' } },
      { path: "email", component: Email, meta: { title: 'Email | CRMS - Advanced Bootstrap 5 Admin Template for Customer Management' } },
      { path: "todo", component: Todo, meta: { title: 'Todo | CRMS - Advanced Bootstrap 5 Admin Template for Customer Management' } },
      { path: "notes", component: Notes ,meta: { title: 'Notes | CRMS - Advanced Bootstrap 5 Admin Template for Customer Management' } },
      { path: "file-manager", component: FileManager, meta: { title: 'File Manager | CRMS - Advanced Bootstrap 5 Admin Template for Customer Management' } },
      { path: "kanban-view", component: kanbanView, meta: { title: 'Kanban View | CRMS - Advanced Bootstrap 5 Admin Template for Customer Management' } },
      { path: "social-feed", component: socialFeed, meta: { title: 'Social Feed | CRMS - Advanced Bootstrap 5 Admin Template for Customer Management' } }
    ]
  },
  {
    path: '/call',
    component: Call,
    children: [
      { path: '', redirect: '/call/video-call' },
      { path: "video-call", component: VideoCall, meta: { title: 'Video Call | CRMS - Advanced Bootstrap 5 Admin Template for Customer Management' } },
      { path: "audio-call", component: AudioCall, meta: { title: 'Audio Call | CRMS - Advanced Bootstrap 5 Admin Template for Customer Management' } },
      { path: "call-history", component: CallHistory, meta: { title: 'Call History | CRMS - Advanced Bootstrap 5 Admin Template for Customer Management' } },
    ]
  },
  {
    path: '/report',
    component: Crm_Report,
    children: [
      { path: '', redirect: '/report/lead-reports' },
      { path: "lead-reports", component: Lead_Report, meta: { title: 'Lead Reports | CRMS - Advanced Bootstrap 5 Admin Template for Customer Management' } },
      { path: "deal-reports", component: Deal_Report, meta: { title: 'Deal Reports | CRMS - Advanced Bootstrap 5 Admin Template for Customer Management' } },
      { path: "contact-reports", component: Contact_Report, meta: { title: 'Contact Reports | CRMS - Advanced Bootstrap 5 Admin Template for Customer Management' } },
      { path: "company-reports", component: Company_Report, meta: { title: 'Company Reports | CRMS - Advanced Bootstrap 5 Admin Template for Customer Management' } },
      { path: "project-reports", component: Project_Report, meta: { title: 'Project Reports | CRMS - Advanced Bootstrap 5 Admin Template for Customer Management' } },
      { path: "task-reports", component: Task_Report, meta: { title: 'Task Reports | CRMS - Advanced Bootstrap 5 Admin Template for Customer Management' } },
    ]
  },
  {
    path: '/crm-settings',
    component: Crm_Index,
    children: [
      { path: '', redirect: '/crm-settings/calls' },
      { path: "calls", component: Crm_Calls, meta: { title: 'Calls | CRMS - Advanced Bootstrap 5 Admin Template for Customer Management' } },
      { path: "industry", component: Crm_Industry, meta: { title: 'Industry | CRMS - Advanced Bootstrap 5 Admin Template for Customer Management' } },
      { path: "contact-stage", component: Contact_Stage, meta: { title: 'Contact Stage | CRMS - Advanced Bootstrap 5 Admin Template for Customer Management' } },
      { path: "lost-reason", component: Lost_Reason, meta: { title: 'Lost Reason | CRMS - Advanced Bootstrap 5 Admin Template for Customer Management' } },
      { path: "sources", component: Crm_Sources, meta: { title: 'Sources | CRMS - Advanced Bootstrap 5 Admin Template for Customer Management' } },
    ]
  },
  {
    path: '/membership',
    component: Crm_Membership,
    children: [
      { path: '', redirect: '/membership/membership-plans'},
      { path: "membership-plans", component: Membership_Plans, meta: { title: 'Membership Plans | CRMS - Advanced Bootstrap 5 Admin Template for Customer Management' } },
      { path: "membership-addons", component: Membership_Addons, meta: { title: 'Membership Addons | CRMS - Advanced Bootstrap 5 Admin Template for Customer Management' } },
      { path: "membership-transactions", component: Membership_Transactions, meta: { title: 'Membership Transactions | CRMS - Advanced Bootstrap 5 Admin Template for Customer Management' } },
    ]
  },
  {
    path: '/content',
    component: Crm_Content,
    children: [
      { path: '', redirect: '/content/pages' },
      { path: "pages", component: Crm_Pages, meta: { title: 'Pages | CRMS - Advanced Bootstrap 5 Admin Template for Customer Management' } },
      { path: "testimonials", component: Crm_Testimonials, meta: { title: 'Testimonials | CRMS - Advanced Bootstrap 5 Admin Template for Customer Management' } },
      { path: "faq", component: Crm_Faq },
    ]
  },
  {
    path: '/location',
    component: Crm_Location,
    children: [
      { path: '', redirect: '/location/countries' },
      { path: "countries", component: Crm_Countries, meta: { title: 'Countries | CRMS - Advanced Bootstrap 5 Admin Template for Customer Management' } },
      { path: "states", component: Crm_States, meta: { title: 'States | CRMS - Advanced Bootstrap 5 Admin Template for Customer Management' } },
      { path: "cities", component: Crm_Cities, meta: { title: 'Cities | CRMS - Advanced Bootstrap 5 Admin Template for Customer Management' } },
    ]
  },
  {
    path: '/error',
    component: Crm_Error,
    children: [
      { path: '', redirect: '/error/error-404' },
      { path: "error-404", component: Error_404, meta: { title: 'Error 404 | CRMS - Advanced Bootstrap 5 Admin Template for Customer Management' } },
      { path: "error-500", component: Error_500, meta: { title: 'Error 500 | CRMS - Advanced Bootstrap 5 Admin Template for Customer Management' } },
    ]
  },
  {
    path: '/user',
    component: Crm_User,
    children: [
      { path: '', redirect: '/user/manage-users' },
      { path: "manage-users", component: Manage_Users, meta: { title: 'Manage Users | CRMS - Advanced Bootstrap 5 Admin Template for Customer Management' } },
      { path: "roles-permissions", component: Roles_Permissions, meta: { title: 'Roles Permissions | CRMS - Advanced Bootstrap 5 Admin Template for Customer Management' } },
      { path: "permission", component: Crm_Permission, meta: { title: 'Permission | CRMS - Advanced Bootstrap 5 Admin Template for Customer Management' } },
      { path: "delete-request", component: Delete_Request, meta: { title: 'Delete Request | CRMS - Advanced Bootstrap 5 Admin Template for Customer Management' } },
    ]
  },
  {
    path: '/settings',
    component: Crm_Settings,
    children: [
      { path: '', redirect: '/settings/profile' },
      { path: "profile", component: Crm_Profile, meta: { title: 'Profile | CRMS - Advanced Bootstrap 5 Admin Template for Customer Management' } },
      { path: "security", component: Crm_Security, meta: { title: 'Security | CRMS - Advanced Bootstrap 5 Admin Template for Customer Management' } },
      { path: "notifications", component: Crm_Notifications, meta: { title: 'Notifications | CRMS - Advanced Bootstrap 5 Admin Template for Customer Management' } },
      { path: "connected-apps", component: Connected_Apps, meta: { title: 'Connected Apps | CRMS - Advanced Bootstrap 5 Admin Template for Customer Management' } },
    ]
  },
  {
    path: '/website-settings',
    component: Website_Settings,
    children: [
      { path: '', redirect: '/website-settings/company-settings' },
      { path: "company-settings", component: Company_Settings, meta: { title: 'Company Settings | CRMS - Advanced Bootstrap 5 Admin Template for Customer Management' } },
      { path: "localization", component: Localization, meta: { title: 'Localization | CRMS - Advanced Bootstrap 5 Admin Template for Customer Management' } },
      { path: "prefixes", component: Prefixes, meta: { title: 'Prefixes | CRMS - Advanced Bootstrap 5 Admin Template for Customer Management' } },
      { path: "preference", component: Preference, meta: { title: 'Preference | CRMS - Advanced Bootstrap 5 Admin Template for Customer Management' } },
      { path: "appearance", component: Appearance, meta: { title: 'Appearance | CRMS - Advanced Bootstrap 5 Admin Template for Customer Management' } },
      { path: "language", component: Language_Settings, meta: { title: 'Language Settings | CRMS - Advanced Bootstrap 5 Admin Template for Customer Management' } },
      { path: "language-web", component: Language_Web, meta: { title: 'Language Web | CRMS - Advanced Bootstrap 5 Admin Template for Customer Management' }},
    ]
  },
  {
    path: '/app-settings',
    component: App_Settings,
    children: [
      { path: '', redirect: '/app-settings/invoice-settings' },
      { path: "invoice-settings", component: Invoice_Settings, meta: { title: 'Invoice Settings | CRMS - Advanced Bootstrap 5 Admin Template for Customer Management' } },
      { path: "printers", component: Printers, meta: { title: 'Printers | CRMS - Advanced Bootstrap 5 Admin Template for Customer Management' } },
      { path: "custom-fields", component: Custom_Fields, meta: { title: 'Custom Fields | CRMS - Advanced Bootstrap 5 Admin Template for Customer Management' } },
    ]
  },
  {
    path: '/system-settings',
    component: System_Settings,
    children: [
      { path: '', redirect: '/system-settings/email-settings' },
      { path: "email-settings", component: Email_Settings, meta: { title: 'Email Settings | CRMS - Advanced Bootstrap 5 Admin Template for Customer Management' } },
      { path: "sms-gateways", component: Sms_Gateways, meta: { title: 'SMS Gateways | CRMS - Advanced Bootstrap 5 Admin Template for Customer Management' } },
      { path: "gdpr-cookies", component: Gdpr_Cookies, meta: { title: 'Gdpr Cookies | CRMS - Advanced Bootstrap 5 Admin Template for Customer Management' } },
    ]
  },
  {
    path: '/financial-settings',
    component: Financial_Settings,
    children: [
      { path: '', redirect: '/financial-settings/payment-gateways' },
      { path: "payment-gateways", component: Payment_Gateways, meta: { title: 'Payment Gateways | CRMS - Advanced Bootstrap 5 Admin Template for Customer Management' } },
      { path: "bank-accounts", component: Bank_Accounts, meta: { title: 'Bank Accounts | CRMS - Advanced Bootstrap 5 Admin Template for Customer Management' } },
      { path: "tax-rates", component: Tax_Rates, meta: { title: 'Tax Rates | CRMS - Advanced Bootstrap 5 Admin Template for Customer Management' } },
      { path: "currencies", component: Currencies, meta: { title: 'Currencies | CRMS - Advanced Bootstrap 5 Admin Template for Customer Management' } },
    ]
  },
  {
    path: '/other-settings',
    component: Other_Settings,
    children: [
      { path: '', redirect: '/other-settings/storage' },
      { path: "storage", component: Storage_Settings, meta: { title: 'Storage | CRMS - Advanced Bootstrap 5 Admin Template for Customer Management' } },
      { path: "ban-ip-address", component: Ban_Ip_Address, meta: { title: 'Ban Ip Address | CRMS - Advanced Bootstrap 5 Admin Template for Customer Management' } },
    ]
  },
  {
    path: '/support',
    component: Crm_Support,
    children: [
      { path: '', redirect: '/support/contact-messages' },
      { path: "contact-messages", component: Contact_Messages, meta: { title: 'Contact Messages | CRMS - Advanced Bootstrap 5 Admin Template for Customer Management' } },
      { path: "tickets", component: Crm_Tickets, meta: { title: 'Tickets | CRMS - Advanced Bootstrap 5 Admin Template for Customer Management' } },
    ]
  },
  {
    path: '/icons',
    component: Icons,
    children: [
      { path: '', redirect: '/icons/icon-fontawesome' },
      { path: "icon-fontawesome", component: UI_Iconfontawesome, meta: { title: 'Icon Fontawesome | CRMS - Advanced Bootstrap 5 Admin Template for Customer Management' } },
      { path: "icon-feather", component: UI_Iconfeather, meta: { title: 'Icon Feather | CRMS - Advanced Bootstrap 5 Admin Template for Customer Management' } },
      { path: "icon-ionic", component: UI_Iconionic, meta: { title: 'Icon Ionic | CRMS - Advanced Bootstrap 5 Admin Template for Customer Management' } },
      { path: "icon-material", component: UI_Iconmaterial, meta: { title: 'Icon Material | CRMS - Advanced Bootstrap 5 Admin Template for Customer Management' } },
      { path: "icon-pe7", component: UI_Iconpe7, meta: { title: 'Icon pe7 | CRMS - Advanced Bootstrap 5 Admin Template for Customer Management' } },
      { path: "icon-simpleline", component: UI_Iconsimpleline, meta: { title: 'Icon Simpleline | CRMS - Advanced Bootstrap 5 Admin Template for Customer Management' } },
      { path: "icon-themify", component: UI_Iconthemify, meta: { title: 'Icon Themify | CRMS - Advanced Bootstrap 5 Admin Template for Customer Management' } },
      { path: "icon-weather", component: UI_Iconweather, meta: { title: 'Icon Weather | CRMS - Advanced Bootstrap 5 Admin Template for Customer Management' } },
      { path: "icon-typicon", component: UI_Icontypicon, meta: { title: 'Icon Typicon | CRMS - Advanced Bootstrap 5 Admin Template for Customer Management' } },
      { path: "icon-flag", component: UI_Iconflag, meta: { title: 'Icon Flag | CRMS - Advanced Bootstrap 5 Admin Template for Customer Management' } },
      { path: "icon-tabler", component: iconTabler, meta: { title: 'Icon Tabler | CRMS - Advanced Bootstrap 5 Admin Template for Customer Management' } },
      { path: "icon-bootstrap", component: iconBootstrap, meta: { title: 'Bootstrap Flag | CRMS - Advanced Bootstrap 5 Admin Template for Customer Management' } },
      { path: "icon-remix", component: iconRemix, meta: { title: 'Icon Remix | CRMS - Advanced Bootstrap 5 Admin Template for Customer Management' } },
    ]
  },
  {
    path: '/baseui',
    component: BaseUi,
    children: [
      { path: '', redirect: '/baseui/ui-alerts' },
      { path: "ui-alerts", component: UI_Alerts, meta: { title: 'UI Alerts | CRMS - Advanced Bootstrap 5 Admin Template for Customer Management' } },
      { path: "ui-accordion", component: UI_Accordion, meta: { title: 'UI Accordion | CRMS - Advanced Bootstrap 5 Admin Template for Customer Management' } },
      { path: "ui-avatar", component: UI_Avatar, meta: { title: 'UI Avatar | CRMS - Advanced Bootstrap 5 Admin Template for Customer Management' } },
      { path: "ui-badges", component: UI_Badges, meta: { title: 'UI Badges | CRMS - Advanced Bootstrap 5 Admin Template for Customer Management' } },
      { path: "ui-borders", component: UI_Borders, meta: { title: 'UI Borders | CRMS - Advanced Bootstrap 5 Admin Template for Customer Management' } },
      { path: "ui-buttons", component: UI_Buttons, meta: { title: 'UI Buttons | CRMS - Advanced Bootstrap 5 Admin Template for Customer Management' } },
      { path: "ui-buttons-group", component: UI_Buttons_group, meta: { title: 'UI Buttons Group | CRMS - Advanced Bootstrap 5 Admin Template for Customer Management' } },
      { path: "ui-breadcrumb", component: UI_Breadcrumb, meta: { title: 'UI Breadcrumb | CRMS - Advanced Bootstrap 5 Admin Template for Customer Management' } },
      { path: "ui-cards", component: UI_Cards, meta: { title: 'UI Cards | CRMS - Advanced Bootstrap 5 Admin Template for Customer Management' } },
      { path: "ui-carousel", component: UI_Carousel, meta: { title: 'UI Carousel | CRMS - Advanced Bootstrap 5 Admin Template for Customer Management' } },
      { path: "ui-colors", component: UI_Colors, meta: { title: 'UI Colors | CRMS - Advanced Bootstrap 5 Admin Template for Customer Management' } },
      { path: "ui-dropdowns", component: UI_Dropdowns, meta: { title: 'UI Dropdowns | CRMS - Advanced Bootstrap 5 Admin Template for Customer Management' } },
      { path: "ui-grid", component: UI_Grid, meta: { title: 'UI Grid | CRMS - Advanced Bootstrap 5 Admin Template for Customer Management' } },
      { path: "ui-images", component: UI_Images, meta: { title: 'UI Images | CRMS - Advanced Bootstrap 5 Admin Template for Customer Management' } },
      { path: "ui-lightbox", component: UI_Lightbox, meta: { title: 'UI Lightbox | CRMS - Advanced Bootstrap 5 Admin Template for Customer Management' } },
      { path: "ui-media", component: UI_Media, meta: { title: 'UI Media | CRMS - Advanced Bootstrap 5 Admin Template for Customer Management' } },
      { path: "ui-modals", component: UI_Modals, meta: { title: 'UI Modals | CRMS - Advanced Bootstrap 5 Admin Template for Customer Management' } },
      { path: "ui-offcanvas", component: UI_Offcanvas, meta: { title: 'UI Offcanvas | CRMS - Advanced Bootstrap 5 Admin Template for Customer Management' } },
      { path: "ui-pagination", component: UI_Pagination, meta: { title: 'UI Pagination | CRMS - Advanced Bootstrap 5 Admin Template for Customer Management' } },
      { path: "ui-popovers", component: UI_Popovers, meta: { title: 'UI Popovers | CRMS - Advanced Bootstrap 5 Admin Template for Customer Management' } },
      { path: "ui-progress", component: UI_Progress, meta: { title: 'UI Progress | CRMS - Advanced Bootstrap 5 Admin Template for Customer Management' } },
      { path: "ui-placeholders", component: UI_Placeholders, meta: { title: 'UI Placeholders | CRMS - Advanced Bootstrap 5 Admin Template for Customer Management' } },
      { path: "ui-rangeslider", component: UI_Rangeslider, meta: { title: 'UI Rangeslider | CRMS - Advanced Bootstrap 5 Admin Template for Customer Management' } },
      { path: "ui-spinner", component: UI_Spinner, meta: { title: 'UI Spinner | CRMS - Advanced Bootstrap 5 Admin Template for Customer Management' } },
      { path: "ui-sortable", component: UI_Sortable, meta: { title: 'UI Sortable | CRMS - Advanced Bootstrap 5 Admin Template for Customer Management' }},
      { path: "ui-sweetalerts", component: UI_Sweetalerts, meta: { title: 'UI Sweetalerts | CRMS - Advanced Bootstrap 5 Admin Template for Customer Management' } },
      { path: "ui-nav-tabs", component: UI_Nav_Tabs, meta: { title: 'UI Nav Tabs | CRMS - Advanced Bootstrap 5 Admin Template for Customer Management' } },
      { path: "ui-tooltips", component: UI_Tooltips, meta: { title: 'UI Tooltips | CRMS - Advanced Bootstrap 5 Admin Template for Customer Management' } },
      { path: "ui-typography", component: UI_Typography, meta: { title: 'UI Typography | CRMS - Advanced Bootstrap 5 Admin Template for Customer Management' } },
      { path: "ui-video", component: UI_Video, meta: { title: 'UI Video | CRMS - Advanced Bootstrap 5 Admin Template for Customer Management' } },
    ]
  },
  {
    path: '/advancedui',
    component: Advancedui,
    children: [
      { path: '', redirect: '/advancedui/ui-ribbon' },
      { path: "ui-ribbon", component: UI_Ribbon, meta: { title: 'UI Ribbon | CRMS - Advanced Bootstrap 5 Admin Template for Customer Management' } },
      { path: "ui-clipboard", component: UI_Clipboard, meta: { title: 'UI Clipboard | CRMS - Advanced Bootstrap 5 Admin Template for Customer Management' } },
      { path: "ui-drag-drop", component: UI_Drag_Drop, meta: { title: 'UI Drag Drop | CRMS - Advanced Bootstrap 5 Admin Template for Customer Management' } },
      { path: "ui-text-editor", component: UI_Text_Editor, meta: { title: 'UI Text Editor | CRMS - Advanced Bootstrap 5 Admin Template for Customer Management' } },
      { path: "ui-counter", component: UI_Counter, meta: { title: 'UI Counter | CRMS - Advanced Bootstrap 5 Admin Template for Customer Management' } },
      { path: "ui-scrollbar", component: UI_Scrollbar, meta: { title: 'UI Scrollbar | CRMS - Advanced Bootstrap 5 Admin Template for Customer Management' } },
      { path: "ui-rating", component: UI_Rating, meta: { title: 'UI Rating | CRMS - Advanced Bootstrap 5 Admin Template for Customer Management' } },
      { path: "ui-stickynote", component: UI_Stickynote, meta: { title: 'UI Sticknote | CRMS - Advanced Bootstrap 5 Admin Template for Customer Management' } },
      { path: "ui-timeline", component: UI_Timeline, meta: { title: 'UI Timeline | CRMS - Advanced Bootstrap 5 Admin Template for Customer Management' } }
    ]
  },
  {
    path: '/tables',
    component: Tables,
    children: [
      { path: '', redirect: '/tables/data-tables' },
      { path: "data-tables", component: Data_Tables, meta: { title: 'Data Tables | CRMS - Advanced Bootstrap 5 Admin Template for Customer Management' } },
      { path: "tables-basic", component: Tables_Basic, meta: { title: 'Tables Basic | CRMS - Advanced Bootstrap 5 Admin Template for Customer Management' } }
    ]
  },
  {
    path: '/charts',
    component: Charts,
    children: [
      { path: '', redirect: '/charts/chart-apex' },
      { path: "chart-apex", component: Chartapex, meta: { title: 'Chart Apex | CRMS - Advanced Bootstrap 5 Admin Template for Customer Management' } },
      { path: "chart-c3", component: Chartc3, meta: { title: 'Chart C3 | CRMS - Advanced Bootstrap 5 Admin Template for Customer Management' } },
      { path: "chart-flot", component: Chartflot, meta: { title: 'Chart Flot | CRMS - Advanced Bootstrap 5 Admin Template for Customer Management' } },
      { path: "chart-js", component: Chartjs, meta: { title: 'Chart Js | CRMS - Advanced Bootstrap 5 Admin Template for Customer Management' } },
      { path: "chart-morris", component: Chartmorris, meta: { title: 'Chart Morris | CRMS - Advanced Bootstrap 5 Admin Template for Customer Management' } }
    ]
  }, 
  {
    path: '/form-elements',
    component: FormElements,
    children: [
      { path: '', redirect: '/form-elements/form-basic-inputs' },
      { path: "form-basic-inputs", component: Formbasicinput, meta: { title: 'Form Basic Inputs | CRMS - Advanced Bootstrap 5 Admin Template for Customer Management' } },
      { path: "form-checkbox-radios", component: Formcheckboxradios, meta: { title: 'Form Checkbox Radios | CRMS - Advanced Bootstrap 5 Admin Template for Customer Management' } },
      { path: "form-grid-gutters", component: Formgridgutters, meta: { title: 'Form Grid Gutters | CRMS - Advanced Bootstrap 5 Admin Template for Customer Management' } },
      { path: "form-input-groups", component: FormInput, meta: { title: 'Form Input Groups | CRMS - Advanced Bootstrap 5 Admin Template for Customer Management' } },
      { path: "form-select", component: Formselect, meta: { title: 'Form Select | CRMS - Advanced Bootstrap 5 Admin Template for Customer Management' } },
      { path: "form-mask", component: Formmask, meta: { title: 'Form Mask | CRMS - Advanced Bootstrap 5 Admin Template for Customer Management' } },
      { path: "form-fileupload", component: Formfileupload, meta: { title: 'Form Fileupload | CRMS - Advanced Bootstrap 5 Admin Template for Customer Management' } },
    ]
  },
  {
    path: '/form-layouts',
    component: FormLayouts,
    children: [
      { path: '', redirect: '/form-layouts/form-horizontal' },
      { path: "form-horizontal", component: FormHorizontal, meta: { title: 'Form Horizontal | CRMS - Advanced Bootstrap 5 Admin Template for Customer Management' } },
      { path: "form-vertical", component: Formvertical, meta: { title: 'Form Vertical | CRMS - Advanced Bootstrap 5 Admin Template for Customer Management' } },
      { path: "form-floating-labels", component: Formfloatinglabels, meta: { title: 'Form Floating Labels | CRMS - Advanced Bootstrap 5 Admin Template for Customer Management' } },
    ]
  },
  {
    path: '/forms',
    component: Forms,
    children: [
      { path: '', redirect: '/forms/form-validation' },
      { path: "form-validation", component: Formvalidation, meta: { title: 'Form Validation | CRMS - Advanced Bootstrap 5 Admin Template for Customer Management' } },
      { path: "form-select2", component: Formselect2, meta: { title: 'Form Select2 | CRMS - Advanced Bootstrap 5 Admin Template for Customer Management' } },
      { path: "form-wizard", component: Formwizard, meta: { title: 'Form Wizard | CRMS - Advanced Bootstrap 5 Admin Template for Customer Management' } },
    ]
  },
  {
    path: '/maps',
    component: Ui_Maps,
    children: [
      { path: '', redirect: '/maps/maps-vector' },
      { path: "maps-vector", component: MapsVector, meta: { title: 'Maps Vector | CRMS - Advanced Bootstrap 5 Admin Template for Customer Management' } },
      { path: "maps-leaflet", component: MapsLeaflet, meta: { title: 'Maps Leaflet | CRMS - Advanced Bootstrap 5 Admin Template for Customer Management' } },
    ]
  },
  {
    path: '/crm',
    component: CRM,
    children: [
      { path: '', redirect: '/crm/contacts-list' },
      { path: 'contacts-list', component: ContactsList, meta: { title: 'Contacts | CRMS - Advanced Bootstrap 5 Admin Template for Customer Management' } },
      { path: 'contact-grid', component: ContactGrid, meta: { title: 'Contact Grid | CRMS - Advanced Bootstrap 5 Admin Template for Customer Management' } },
      { path: 'contact-details', component: ContactDetails, meta: { title: 'Contact Details | CRMS - Advanced Bootstrap 5 Admin Template for Customer Management' } },
      { path: 'companies-list', component: CompaniesList, meta: { title: 'Companies | CRMS - Advanced Bootstrap 5 Admin Template for Customer Management' } },
      { path: 'companies-grid', component: CompaniesGrid, meta: { title: 'Companies Grid | CRMS - Advanced Bootstrap 5 Admin Template for Customer Management' } },
      { path: 'company-details', component: CompanyDetails, meta: { title: 'Company Details | CRMS - Advanced Bootstrap 5 Admin Template for Customer Management' } },
      { path: 'deals-list', component: DealsList, meta: { title: 'Deals | CRMS - Advanced Bootstrap 5 Admin Template for Customer Management' } },
      { path: 'deals-kanban', component: DealsKanban, meta: { title: 'Deals Kanban | CRMS - Advanced Bootstrap 5 Admin Template for Customer Management' } },
      { path: 'deals-details', component: DealsDetails, meta: { title: 'Deals Details | CRMS - Advanced Bootstrap 5 Admin Template for Customer Management' } },
      { path: 'leads-list', component: LeadsList, meta: { title: 'Leads | CRMS - Advanced Bootstrap 5 Admin Template for Customer Management' } },
      { path: 'leads-kanban', component: LeadsKanban, meta: { title: 'Leads Kanban | CRMS - Advanced Bootstrap 5 Admin Template for Customer Management' } },
      { path: 'leads-details', component: LeadsDetails, meta: { title: 'Leads Details | CRMS - Advanced Bootstrap 5 Admin Template for Customer Management' } },
      { path: 'pipeline-list', component: PipelineList, meta: { title: 'Pipline | CRMS - Advanced Bootstrap 5 Admin Template for Customer Management' } },
      { path: 'campaign', component: Campaign, meta: { title: 'Campaign | CRMS - Advanced Bootstrap 5 Admin Template for Customer Management' } },
      { path: 'campaign-complete', component: CampaignComplete, meta: { title: 'Campaign Complete | CRMS - Advanced Bootstrap 5 Admin Template for Customer Management' } },
      { path: 'campaign-archieve', component: CampaignArchieve, meta: { title: 'Campaign Archieve | CRMS - Advanced Bootstrap 5 Admin Template for Customer Management' } },
      { path: 'projects-list', component: ProjectsList, meta: { title: 'Projects | CRMS - Advanced Bootstrap 5 Admin Template for Customer Management' } },
      { path: 'project-grid', component: ProjectGrid, meta: { title: 'Project Grid | CRMS - Advanced Bootstrap 5 Admin Template for Customer Management' } },
      { path: 'tasks', component: Tasks, meta: { title: 'Tasks | CRMS - Advanced Bootstrap 5 Admin Template for Customer Management' } },
      { path: 'tasks-important', component: TasksImportant, meta: { title: 'Tasks Important | CRMS - Advanced Bootstrap 5 Admin Template for Customer Management' } },
      { path: 'tasks-completed', component: TasksCompleted, meta: { title: 'Tasks Completed | CRMS - Advanced Bootstrap 5 Admin Template for Customer Management' } },
      { path: 'analytics', component: Analytics, meta: { title: 'Analytics | CRMS - Advanced Bootstrap 5 Admin Template for Customer Management' } },
      { path: 'activities-list', component: Activities, meta: { title: 'Activities | CRMS - Advanced Bootstrap 5 Admin Template for Customer Management' } },
      { path: 'activity-calls', component: ActivityCalls, meta: { title: 'Activities Calls | CRMS - Advanced Bootstrap 5 Admin Template for Customer Management' } },
      { path: 'activity-mail', component: ActivityMail, meta: { title: 'Activities Mail | CRMS - Advanced Bootstrap 5 Admin Template for Customer Management' } },
      { path: 'activity-task', component: ActivityTask, meta: { title: 'Activities Task | CRMS - Advanced Bootstrap 5 Admin Template for Customer Management' } },
      { path: 'activity-meeting', component: ActivityMeeting, meta: { title: 'Activities Meeting | CRMS - Advanced Bootstrap 5 Admin Template for Customer Management' } },
      { path: 'project-details', component: ProjectDetails, meta: { title: 'Project Details | CRMS - Advanced Bootstrap 5 Admin Template for Customer Management' } },
      { path: 'estimations-kanban', component: Estimations_Kanban, meta: { title: 'Estimations Kanban | CRMS - Advanced Bootstrap 5 Admin Template for Customer Management' } },
      { path: 'estimations-list', component: Estimations_List, meta: { title: 'Estimations | CRMS - Advanced Bootstrap 5 Admin Template for Customer Management' } },
      { path: 'payments-list', component: Payments_List, meta: { title: 'Payments | CRMS - Advanced Bootstrap 5 Admin Template for Customer Management' } },
      { path: 'proposals-list', component: Proposals_List, meta: { title: 'Proposals | CRMS - Advanced Bootstrap 5 Admin Template for Customer Management' } },
      { path: 'invoices-list', component: Invoices_List, meta: { title: 'Invoices | CRMS - Advanced Bootstrap 5 Admin Template for Customer Management' } },
      { path: 'contracts-list', component: Contracts_List, meta: { title: 'Contracts | CRMS - Advanced Bootstrap 5 Admin Template for Customer Management' } },
      { path: 'proposals-grid', component: Proposals_Grid, meta: { title: 'Proposals Grid | CRMS - Advanced Bootstrap 5 Admin Template for Customer Management' } },
      { path: 'invoice-grid', component: Invoice_Grid, meta: { title: 'Invoice Grid | CRMS - Advanced Bootstrap 5 Admin Template for Customer Management' } },
      { path: 'contracts-grid', component: Contracts_Grid, meta: { title: 'Contacts Grid | CRMS - Advanced Bootstrap 5 Admin Template for Customer Management' } },
    ]
  },
  {
    path: '/super-admin',
    component: superAdmin,
    children: [
      { path: '', redirect: '/super-admin/dashboard' },
      { path: "dashboard", component: superDashboard, meta: { title: 'Dashboard | CRMS - Advanced Bootstrap 5 Admin Template for Customer Management' } },
      { path: "company", component: companyList, meta: { title: 'Companies | CRMS - Advanced Bootstrap 5 Admin Template for Customer Management' } },
      { path: "subscription" , component: superSubscription, meta: { title: 'Subscription | CRMS - Advanced Bootstrap 5 Admin Template for Customer Management' } },
      { path: "packages" , component: packagesList, meta: { title: 'Packages | CRMS - Advanced Bootstrap 5 Admin Template for Customer Management' } },
      { path: "packages-grid" , component: packagesGrid, meta: { title: 'Packages | CRMS - Advanced Bootstrap 5 Admin Template for Customer Management' } },
      { path: "domain" , component: domainList, meta: { title: 'Domain | CRMS - Advanced Bootstrap 5 Admin Template for Customer Management' } },
      { path: "purchase-transaction" , component: purchaseTransaction, meta: { title: 'Purchase Transaction | CRMS - Advanced Bootstrap 5 Admin Template for Customer Management' } },
    ]
  }
];

export const router = createRouter({
  history: createWebHistory('/vue/template/'),
  linkActiveClass: 'active',
  routes,
});

router.beforeEach((to, from, next) => {
  document.title = to.meta.title || 'CRMS - Advanced Bootstrap 5 Admin Template for Customer Management';
  // Scroll to the top of the page
  window.scrollTo({ top: 0, behavior: 'smooth' });
  // Continue with the navigation
  next();
});
