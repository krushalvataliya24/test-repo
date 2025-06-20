import { createApp } from 'vue';
import { router } from '@/router';
import App from "@/App.vue";
import { BootstrapVue3, BToastPlugin } from 'bootstrap-vue-3'
import Antd from 'ant-design-vue'
import 'ant-design-vue/dist/reset.css';
import VueSelect from 'vue3-select2-component';
import VueApexCharts from 'vue3-apexcharts';
import DatePicker from 'vue3-datepicker';
import FlagIcon from 'vue-flag-icon';
import VueFeather from 'vue-feather';
import StarRating from "vue-star-rating";
import VueToast from 'vue-toast-notification';
import 'vue-toast-notification/dist/theme-default.css';
import ThemifyIcon from "vue-themify-icons";
import SimpleLineIcons from "vue-simple-line";
import VueEasyLightbox from "vue-easy-lightbox";
import CKEditor from '@ckeditor/ckeditor5-vue';


import 'bootstrap/dist/css/bootstrap.min.css'
import 'bootstrap-vue/dist/bootstrap-vue.css'
import '@fortawesome/fontawesome-free/css/fontawesome.min.css'
import '@fortawesome/fontawesome-free/css/all.min.css'
import 'sweetalert2/dist/sweetalert2.min.css';
import "boxicons/css/boxicons.min.css";
import 'pe7-icon/dist/dist/pe-icon-7-stroke.css';
import 'typicons.font/src/font/typicons.css';
import 'weathericons/css/weather-icons.css'
import 'ionicons-npm/css/ionicons.css';
import 'remixicon/fonts/remixicon.css';
import 'leaflet/dist/leaflet.css';
import '@/assets/css/feather.css'
import '@/assets/css/tabler-icons.css'
import '@/assets/scss/main.scss';


// *************** Components ***************
import Breadcrumb from "@/components/breadcrumb/page-header.vue"
import DashboardHeader from "@/components/breadcrumb/dashboard-header.vue"

// *************** Layout Component ***************
import Header from "@/views/layouts/layouts-header.vue"
import ThemeHeader from "@/views/layouts/theme-header.vue"
import Sidebar from "@/views/layouts/layouts-sidebar.vue"
import VerticalSidebar from '@/views/layouts/vertical-sidebar.vue'
import FilesSidebar from "@/views/layouts/files-sidebar.vue";
import SideSettings from '@/views/layouts/side-settings.vue'
import IndexLoader from '@/views/layouts/index-loader.vue'
import headerLayout from '@/views/layouts/header-layout.vue'

// *************** Page Component ***************
import Carouselthree from "@/views/pages/uiinterface/baseui/carousel/carousel-three.vue";
import Carouseltwo from "@/views/pages/uiinterface/baseui/carousel/carousel-two.vue";
import Carouselone from "@/views/pages/uiinterface/baseui/carousel/carousel-one.vue";
import LightBoxOne from "@/views/pages/uiinterface/baseui/lightbox/lightbox-one.vue";
import LightBoxTwo from "@/views/pages/uiinterface/baseui/lightbox/lightbox-two.vue";
import ContactTeble from '@/views/pages/crm/contacts/contacts-table.vue'
import ContactContent from '@/views/pages/crm/contacts/contact-content.vue'
import CompaniesTable from '@/views/pages/crm/companies/companies-table.vue'
import CompaniesContent from '@/views/pages/crm/companies/companies-content.vue'
import DealsTable from '@/views/pages/crm/deals/deals-table.vue'
import DealsBoard from '@/views/pages/crm/deals/deals-board.vue'
import Contact_Message_Filter from '@/views/pages/support/contact-message-filter.vue'
import Ticket_Filter from '@/views/pages/support/ticket-filter.vue'
import General_Sidebar from '@/views/pages/settings/general-settings/general-sidebar.vue'
import Website_Sidebar from '@/views/pages/settings/website-settings/website-sidebar.vue'
import App_Sidebar from '@/views/pages/settings/app-settings/app-sidebar.vue'
import System_Sidebar from '@/views/pages/settings/system-settings/system-sidebar.vue'
import Financial_Sidebar from '@/views/pages/settings/financial-settings/financial-sidebar.vue'
import Other_Sidebar from '@/views/pages/settings/other-settings/other-sidebar.vue'
import Settings_Tab from '@/views/pages/settings/settings-tabs.vue'
import LeadsTable from '@/views/pages/crm/leads/leads-table.vue'
import Manage_Filter from '@/views/pages/user/manage-filter.vue'
import Delete_Filter from '@/views/pages/user/delete-filter.vue'
import Pages_Filter from '@/views/pages/content/pages-filter.vue'
import Countires_Filter from '@/views/pages/content/location/countires-filter.vue'
import States_Filter from '@/views/pages/content/location/states-filter.vue'
import Cities_Filter from '@/views/pages/content/location/cities-filter.vue'
import Testimonials_Filter from '@/views/pages/content/testimonials-filter.vue'
import Faq_Filter from '@/views/pages/content/faq-filter.vue'
import Membership_Filter from '@/views/pages/membership/membership-filter.vue'
import Lead_Report_Filter from '@/views/pages/report/lead-reports/lead-report-filter.vue'
import Deal_Report_Filter from '@/views/pages/report/deal-reports/deal-report-filter.vue'
import Contact_Report_Filter from '@/views/pages/report/contact-reports/contact-report-filter.vue'
import Company_Report_Filter from '@/views/pages/report/company-reports/company-report-filter.vue'
import Project_Report_Filter from '@/views/pages/report/project-reports/project-report-filter.vue'
import Task_Report_Filter from '@/views/pages/report/task-reports/task-report-filter.vue'
import LeadsBoard from '@/views/pages/crm/leads/leads-board.vue'
import PipelineTable from '@/views/pages/crm/pipeline/pipeline-table.vue'
import CampaignActive from '@/views/pages/crm/campaign/campaign-active.vue'
import ArchieveTable from '@/views/pages/crm/campaign/archieve-table.vue'
import ProjectsTable from '@/views/pages/crm/projects/projects-table.vue'
import Proposals_Filter from '@/views/pages/crm/proposals/proposals-filter.vue'
import Estimations_Filter from '@/views/pages/crm/estimations/estimations-filter.vue'
import Payments_Filter from '@/views/pages/crm/payments/payments-filter.vue'
import Invoices_Filter from '@/views/pages/crm/invoices/invoices-filter.vue'
import Contracts_Filter from '@/views/pages/crm/contracts/contracts-filter.vue'
import AnalyticsContacts from '@/views/pages/crm/analytics/analytics-contacts.vue'
import WonChart from '@/views/pages/crm/analytics/won-chart.vue'
import AnalyticsDeals from '@/views/pages/crm/analytics/analytics-deals.vue'
import LostChart from '@/views/pages/crm/analytics/lost-chart.vue'
import LostCharts from '@/views/pages/crm/analytics/lost-charts.vue'
import LeadsChart from '@/views/pages/crm/analytics/leads-chart.vue'
import AnalyticsCompanies from '@/views/pages/crm/analytics/analytics-companies.vue'
import DealsChart from '@/views/pages/crm/analytics/deals-chart.vue'
import AnalyticsActivity from '@/views/pages/crm/analytics/analytics-activity.vue'
import AnalyticsLeads from '@/views/pages/crm/analytics/analytics-leads.vue'
import AnalyticsCampagin from '@/views/pages/crm/analytics/analytics-campagin.vue'
import ActivitiesTable from '@/views/pages/crm/activities/activities-table.vue'
import ActivitiesTabset from '@/views/pages/crm/activities/activities-tabset.vue'
import CallsTable from '@/views/pages/crm/activities/calls-table.vue'
import MailTable from '@/views/pages/crm/activities/mail-table.vue'
import TaskTable from '@/views/pages/crm/activities/task-table.vue'
import MeetingTable from '@/views/pages/crm/activities/meeting-table.vue'
import DealsDashboardTable from '@/views/pages/dashboard/deals-dashboard/deals-dashboard-table.vue'
import RtlDealsDashboardTable from '@/views/pages/layouts/layout-rtl/rtl-deals-dashboard-table.vue';
import ChatContent from "@/views/pages/application/chat/chat-content.vue";
import ChatImage from "@/views/pages/application/chat/chat-images.vue";
import ChatRightimage from "@/views/pages/application/chat/chat-right-image.vue";
import ChatRightVideo from "@/views/pages/application/chat/chat-right-video.vue";
import FolderCarousel from "@/views/pages/application/folder-carousel.vue";
import FileCarousel from "@/views/pages/application/files/files-carousel.vue";
import FileTable from "@/views/pages/application/files/file-table.vue";
import NotesCarousel from "@/views/pages/application/notes-carousel.vue";
import allKanban from '@/views/pages/application/kanban-view/all-kanban.vue';
import highKanban from '@/views/pages/application/kanban-view/high-kanban.vue';
import lowKanban from '@/views/pages/application/kanban-view/low-kanban.vue';
import mediumKanban from '@/views/pages/application/kanban-view/medium-kanban.vue';
import socialImage from '@/views/pages/application/social-image.vue';
import socialCarousel from '@/views/pages/application/social-carousel.vue';
import ProjectContent from '@/views/pages/crm/projects/project-content.vue'
import EstimatesBoard from '@/views/pages/crm/estimations/estimations-board.vue'
import Form_Validation_One from '@/views/pages/uiinterface/forms/form-validation-one.vue'
import PackagesTable from '@/views/pages/superadmin/packages/packages-table.vue';
import DomainTable from '@/views/pages/superadmin/domain/domain-table.vue';
import PurchaseTable from '@/views/pages/superadmin/purchase/purchase-table.vue';
import SubscriptionTable from '@/views/pages/superadmin/subscription-table.vue';




// *************** modal Component ***************
import DomainModal from '@/components/modal/domain-modal.vue';
import companiesModal from '@/components/modal/companies-modal.vue';
import ContactsModal from '@/components/modal/contacts-modal.vue'
import Contact_Message_Modal from '@/components/modal/contact-message-modal.vue'
import Tickets_Modal from '@/components/modal/ticket-modal.vue'
import Email_Modal from '@/components/modal/email-modal.vue'
import Custom_Fields_Modal from '@/components/modal/custom-fields-modal.vue'
import Sms_Gateways_Modal from '@/components/modal/sms-gateways-modal.vue'
import Bank_Modal from '@/components/modal/bank-modal.vue'
import Tax_Rates_Modal from '@/components/modal/tax-rates-modal.vue'
import Currencies_Modal from '@/components/modal/currencies-modal.vue'
import Storage_Modal from '@/components/modal/storage-modal.vue'
import BanIp_Modal from '@/components/modal/banip-modal.vue'
import Printers_Modal from '@/components/modal/printers-modal.vue'
import Payment_Gateways_Modal from '@/components/modal/payment-gateways-modal.vue'
import Language_Web_Modal from '@/components/modal/language-web-modal.vue'
import Language_Settings_Modal from '@/components/modal/language-settings-modal.vue'
import Manage_Users_Modal from '@/components/modal/manage-users-modal.vue'
import Roles_Permissions_Modal from '@/components/modal/roles-permissions-modal.vue'
import Pages_Modal from '@/components/modal/pages-modal.vue'
import Countires_Modal from '@/components/modal/countires-modal.vue'
import States_Modal from '@/components/modal/states-modal.vue'
import Cities_Modal from '@/components/modal/cities-modal.vue'
import Testimonials_Modal from '@/components/modal/testimonials-modal.vue'
import Faq_Modal from '@/components/modal/faq-modal.vue'
import Membership_Modal from '@/components/modal/membership-modal.vue'
import Calls_Modal from '@/components/modal/calls-modal.vue'
import Industry_Modal from '@/components/modal/industry-modal.vue'
import Contact_Stage_Modal from '@/components/modal/contact-stage-modal.vue'
import Lost_Reason_Modal from '@/components/modal/lost-reason-modal.vue'
import Sources_Modal from '@/components/modal/sources-modal.vue'
import Lead_Report_Modal from '@/components/modal/lead-report-modal.vue'
import Deal_Report_Modal from '@/components/modal/deal-report-modal.vue'
import Contact_Report_Modal from '@/components/modal/contact-report-modal.vue'
import Company_Report_Modal from '@/components/modal/company-report-modal.vue'
import Project_Report_Modal from '@/components/modal/project-report-modal.vue'
import Task_Report_Modal from '@/components/modal/task-report-modal.vue'
import Activities_List_Modal from '@/components/modal/activities-list-modal.vue'
import Analytics_List_Modal from '@/components/modal/analytics-list-modal.vue'
import Task_Content_Modal from '@/components/modal/task-content-modal.vue'
import Campaign_Modal from '@/components/modal/campaign-modal.vue'
import Pipeline_Modal from '@/components/modal/pipeline-modal.vue'
import Leads_List_Modal from '@/components/modal/leads-list-modal.vue'
import ContactDetailsModal from '@/components/modal/contact-details-modal.vue';
import ProjectDetailsModal from '@/components/modal/project-details-modal.vue';
import ProjectsListModal from '@/components/modal/projects-list-modal.vue';
import CompaniesListModal from '@/components/modal/companies-list-modal.vue';
import DealsListModal from '@/components/modal/deals-list-modal.vue';
import DealsDetailsModal from '@/components/modal/deals-details-modal.vue';
import Project_Dashboard_Modal from '@/components/modal/project-dashboard-modal.vue'
import Calendar_Modal from '@/components/modal/calendar-modal.vue'
import NotesModal from '@/components/modal/notes-modal.vue'
import FileManagerModal from '@/components/modal/file-manager-modal.vue'
import Proposals_Modal from '@/components/modal/proposals-modal.vue'
import Contracts_Modal from '@/components/modal/contracts-modal.vue'
import Estimations_Modal from '@/components/modal/estimations-modal.vue'
import Payments_Modal from '@/components/modal/payments-modal.vue'
import Invoices_Modal from '@/components/modal/invoices-modal.vue'
import Leads_Details_Modal from '@/components/modal/leads-details-modal.vue'
import PackagesModal from '@/components/modal/packages-modal.vue';


import swal from 'sweetalert2';


window.Swal = swal;

const app = createApp(App)

// *************** Components ***************
app.component('page-header', Breadcrumb)
app.component('dashboard-header', DashboardHeader)

// *************** Layout Component ***************
app.component('layouts-header', Header)
app.component('theme-header', ThemeHeader)
app.component('layouts-sidebar', Sidebar)
app.component('vertical-sidebar', VerticalSidebar)
app.component("files-sidebar", FilesSidebar);
app.component('side-settings', SideSettings)
app.component('index-loader', IndexLoader)
app.component('header-layout', headerLayout)

// *************** Page Component ***************
app.component("carousel-one", Carouselone);
app.component("carousel-two", Carouseltwo);
app.component("carousel-three", Carouselthree);
app.component("lightbox-one", LightBoxOne);
app.component("lightbox-two", LightBoxTwo);
app.component('contacts-table', ContactTeble)
app.component('contact-content', ContactContent)
app.component('companies-table', CompaniesTable)
app.component('companies-content', CompaniesContent)
app.component('deals-table', DealsTable)
app.component('contact-messages-filter',Contact_Message_Filter)
app.component('ticket-filter',Ticket_Filter)
app.component('general-sidebar',General_Sidebar)
app.component('website-sidebar',Website_Sidebar)
app.component('app-sidebar',App_Sidebar)
app.component('system-sidebar',System_Sidebar)
app.component('financial-sidebar',Financial_Sidebar)
app.component('other-sidebar',Other_Sidebar)
app.component('settings-tabs',Settings_Tab)
app.component('deals-board', DealsBoard)
app.component('leads-table', LeadsTable)
app.component('manage-filter',Manage_Filter)
app.component('delete-filter',Delete_Filter)
app.component('pages-filter',Pages_Filter)
app.component('countires-filter',Countires_Filter)
app.component('states-filter',States_Filter)
app.component('cities-filter',Cities_Filter)
app.component('testimonials-filter',Testimonials_Filter)
app.component('faq-filter',Faq_Filter)
app.component('membership-filter',Membership_Filter)
app.component('lead-report-filter',Lead_Report_Filter)
app.component('deal-report-filter',Deal_Report_Filter)
app.component('contact-report-filter',Contact_Report_Filter)
app.component('company-report-filter',Company_Report_Filter)
app.component('project-report-filter',Project_Report_Filter)
app.component('task-report-filter',Task_Report_Filter)
app.component('leads-board', LeadsBoard )
app.component('pipeline-table', PipelineTable)
app.component('campaign-active', CampaignActive)
app.component('archieve-table', ArchieveTable)
app.component('projects-table', ProjectsTable)
app.component('proposals-filter',Proposals_Filter)
app.component('estimations-filter',Estimations_Filter)
app.component('payments-filter',Payments_Filter)
app.component('invoices-filter',Invoices_Filter)
app.component('contracts-filter',Contracts_Filter)
app.component('analytics-contacts', AnalyticsContacts)
app.component('won-chart', WonChart)
app.component('analytics-deals', AnalyticsDeals)
app.component('lost-chart', LostChart)
app.component('lost-charts', LostCharts)
app.component('leads-chart', LeadsChart)
app.component('analytics-companies', AnalyticsCompanies)
app.component('deals-chart', DealsChart)
app.component('analytics-activity', AnalyticsActivity)
app.component('analytics-leads', AnalyticsLeads )
app.component('analytics-campagin', AnalyticsCampagin)
app.component('activities-table', ActivitiesTable)
app.component('activities-tabset', ActivitiesTabset)
app.component('calls-table', CallsTable)
app.component('mail-table', MailTable)
app.component('task-table', TaskTable)
app.component('meeting-table', MeetingTable)
app.component('deals-dashboard-table', DealsDashboardTable)
app.component('rtl-deals-dashboard-table', RtlDealsDashboardTable)
app.component("chat-content", ChatContent);
app.component("chat-image", ChatImage);
app.component("chat-right-image", ChatRightimage);
app.component("chat-right-video", ChatRightVideo);
app.component("folder-carousel", FolderCarousel);
app.component("files-carousel", FileCarousel);
app.component('all-kanban',allKanban)
app.component('high-kanban',highKanban)
app.component('low-kanban',lowKanban)
app.component('medium-kanban',mediumKanban)
app.component('social-image',socialImage)
app.component('social-carousel',socialCarousel)
app.component("file-table", FileTable);
app.component("notes-carousel", NotesCarousel);
app.component('project-content', ProjectContent)
app.component('estimates-board', EstimatesBoard)
app.component('form-validation-one',Form_Validation_One)
app.component('packages-table', PackagesTable)
app.component('domain-table', DomainTable)
app.component('purchase-table', PurchaseTable)
app.component('subscription-table', SubscriptionTable)

// *************** modal Component ***************
app.component('domain-modal', DomainModal)
app.component('companies-modal',companiesModal)
app.component('contacts-modal', ContactsModal)
app.component('contact-message-modal',Contact_Message_Modal)
app.component('ticket-modal',Tickets_Modal)
app.component('email-modal',Email_Modal)
app.component('custom-fields-modal',Custom_Fields_Modal)
app.component('sms-gateways-modal',Sms_Gateways_Modal)
app.component('bank-modal',Bank_Modal)
app.component('tax-rates-modal',Tax_Rates_Modal)
app.component('currencies-modal',Currencies_Modal)
app.component('storage-modal',Storage_Modal)
app.component('banip-modal',BanIp_Modal)
app.component('printers-modal',Printers_Modal)
app.component('payment-gateways-modal',Payment_Gateways_Modal)
app.component('language-web-modal',Language_Web_Modal)
app.component('language-settings-modal',Language_Settings_Modal)
app.component('manage-users-modal',Manage_Users_Modal)
app.component('roles-permissions-modal',Roles_Permissions_Modal)
app.component('pages-modal',Pages_Modal)
app.component('countires-modal',Countires_Modal)
app.component('states-modal',States_Modal)
app.component('cities-modal',Cities_Modal)
app.component('testimonials-modal',Testimonials_Modal)
app.component('faq-modal',Faq_Modal)
app.component('membership-modal',Membership_Modal)
app.component('calls-modal',Calls_Modal)
app.component('industry-modal',Industry_Modal)
app.component('contact-stage-modal',Contact_Stage_Modal)
app.component('lost-reason-modal',Lost_Reason_Modal)
app.component('sources-modal',Sources_Modal)
app.component('lead-report-modal',Lead_Report_Modal)
app.component('deal-report-modal',Deal_Report_Modal)
app.component('contact-report-modal',Contact_Report_Modal)
app.component('company-report-modal',Company_Report_Modal)
app.component('project-report-modal',Project_Report_Modal)
app.component('task-report-modal',Task_Report_Modal)
app.component('activities-list-modal',Activities_List_Modal)
app.component('analytics-list-modal',Analytics_List_Modal)
app.component('task-content-modal',Task_Content_Modal)
app.component('campaign-modal',Campaign_Modal)
app.component('pipeline-modal',Pipeline_Modal)
app.component('leads-list-modal',Leads_List_Modal)
app.component('contact-details-modal', ContactDetailsModal)
app.component('project-details-modal', ProjectDetailsModal)
app.component( 'projects-list-modal', ProjectsListModal )
app.component('companies-list-modal', CompaniesListModal)
app.component('deals-list-modal', DealsListModal )
app.component('deals-details-modal', DealsDetailsModal)
app.component('project-dashboard-modal',Project_Dashboard_Modal)
app.component('calendar-modal',Calendar_Modal)
app.component('notes-modal', NotesModal)
app.component('file-manager-modal', FileManagerModal)
app.component('proposals-modal',Proposals_Modal)
app.component('contracts-modal',Contracts_Modal)
app.component('estimations-modal', Estimations_Modal)
app.component('payments-modal', Payments_Modal)
app.component('invoices-modal', Invoices_Modal)
app.component('leads-details-modal', Leads_Details_Modal)
app.component('packages-modal', PackagesModal) 


app.component('date-picker', DatePicker)
app.component("star-rating", StarRating);
app.component('vue-select', VueSelect)
app.component(VueFeather.name, VueFeather);

app.use(VueApexCharts)
  .use(VueEasyLightbox)
    .use(Antd) 
    .use(BootstrapVue3)
    .use(BToastPlugin)
    .use(ThemifyIcon)
    .use(SimpleLineIcons)
.use(VueToast, {
    position: "top-right",
  });
app.use(FlagIcon)
app.use(CKEditor);
app.use(router).mount('#app');

