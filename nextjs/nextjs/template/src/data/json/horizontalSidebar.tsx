"use client";
/* eslint-disable @next/next/no-img-element */

import { all_routes } from "../all_routes";
const routes = all_routes;

export const HorizontalSidebarData = [
  {
    title: 'MAIN MENU',
    showAsTab: false,
    separateRoute: false,
    menu: [
      {
        menuValue: 'Dashboard',
        hasSubRoute: true,
        showSubRoute: false,
        icon: 'ti ti-layout-2',
        base: 'dashboard',
        subMenus: [
          {
            menuValue: 'Deals Dashboard',
            route: routes.dealsDashboard,
            base: 'Deals Dashboard',
          },
          {
            menuValue: 'Leads Dashboard',
            route: routes.leadsDashboard,
            base: 'employee',
          },
          {
            menuValue: 'Project Dashboard',
            route: routes.projectDashboard,
            base: 'deals',
          },
          {
            menuValue: 'Super Admin',
            customSubmenuTwo: true,
            hasSubRoute: true,
            showSubRoute: false,
            icon: 'ti ti-user-star',
            base: 'dashboard',
            subMenusTwo: [
              {

                menuValue: 'Dashboard',
                route: routes.superadminDashboard,
                base: 'dashboard',
              },
              {
                menuValue: 'Company',
                route: routes.superadminCompany,
                base: 'company',
              },
              {
                menuValue: 'Subscription',
                route: routes.superadminSubscription,
                base: 'subscription',
              },
              {
                menuValue: 'Packages',
                route: routes.superadminPackagelist,
                base: 'Packages',
              },
              {
                menuValue: 'Domain',
                route: routes.superadminDomain,
                base: 'superadminDomain',
              },
              {
                menuValue: 'Purchase Transaction',
                route: routes.superadminPurchaseTransaction,
                base: 'purchase-transaction',
              },
            ],
          },
        ],

      },

      {
        menuValue: 'Application',
        hasSubRouteTwo: true,
        showSubRoute: false,
        icon: 'ti ti-brand-airtable',
        base: 'application',
        subMenus: [
          {
            menuValue: 'Chat',
            route: routes.chat,
            base: 'chats',
            customSubmenuTwo: false,
          },
          {
            menuValue: 'Call',
            customSubmenuTwo: true,
            hasSubRoute: true,
            showSubRoute: false,
            base: 'Call',
            subMenusTwo: [
              {
                menuValue: 'Video Call',
                route: routes.videoCall,
                hasSubRoute: false,
                showSubRoute: false,
                base: 'video-call',
              },
              {
                menuValue: 'Audio Call',
                route: routes.audioCall,
                hasSubRoute: false,
                showSubRoute: false,
                base: 'audio-call',
              },
              {
                menuValue: 'Call History',
                route: routes.callHistory,
                hasSubRoute: false,
                showSubRoute: false,
                base: 'call-history',
              },
            ],
          },
          {
            menuValue: 'Calendar',
            hasSubRoute: true,
            showSubRoute: false,
            route: routes.calendar,
            customSubmenuTwo: false,
            base: 'calendar',
          },

          {
            menuValue: 'Email',
            hasSubRoute: true,
            showSubRoute: false,
            route: routes.email,
            customSubmenuTwo: false,
            base: 'email',
          },
          {
            menuValue: 'To Do',
            hasSubRoute: true,
            showSubRoute: false,
            route: routes.todo,
            customSubmenuTwo: false,
            base: 'todo',
          },
          {
            menuValue: 'Notes',
            hasSubRoute: true,
            showSubRoute: false,
            route: routes.notes,
            customSubmenuTwo: false,
            base: 'notes',
          },
          {
            menuValue: 'Social Feed',
            hasSubRoute: true,
            showSubRoute: false,
            route: routes.socialfeed,
            customSubmenuTwo: false,
            base: 'social-feed',
          },
          {
            menuValue: 'File Manager',
            hasSubRoute: true,
            showSubRoute: false,
            route: routes.fileManager,
            customSubmenuTwo: false,
            base: 'file-manager',
          },
          {
            menuValue: 'Kanban View',
            hasSubRoute: true,
            showSubRoute: false,
            route: routes.kanbanview,
            customSubmenuTwo: false,
            base: 'Kanban View',
          },
          {
            menuValue: 'Invoices',
            hasSubRoute: true,
            showSubRoute: false,
            route: routes.invoice,
            customSubmenuTwo: false,
            base: 'invoices',
          },
          {
            menuValue: 'Invoices Details',
            hasSubRoute: true,
            showSubRoute: false,
            route: routes.invoice,
            customSubmenuTwo: false,
            base: 'invoices-details',
          },
        ],
      },
      {
        menuValue: 'Layout',
        hasSubRoute: true,
        showSubRoute: false,
        icon: 'ti ti-layout-2',
        base: 'Inventory',
        subMenus: [
          {
            menuValue: 'Mini',
            route: routes.layoutMini,
            base: 'Mini',
          },
          {
            menuValue: 'Horizontal Signle',
            route: routes.HorizontalSingle,
            base: 'Horizontal Signle',
          },
          {
            menuValue: 'Without Header',
            route: routes.WithoutHeader,
            base: 'Without Header',
          },
          {
            menuValue: 'RTL',
            route: routes.layoutRtl,
            base: 'Without Header',
          },
          {
            menuValue: 'Detached',
            route: routes.Detached,
            base: 'Detached',
          },
          {
            menuValue: 'Dark',
            route: routes.Dark,
            base: 'Without Header',
          },
        ],

      },
      {
        menuValue: 'Crm',
        hasSubRouteTwo: true,
        showSubRoute: false,
        icon: 'ti ti-ti ti-user-up',
        base: 'Inventory',
        subMenus: [
          {
            menuValue: 'Contacts',
            route: routes.contactList,
            base: 'Contacts',
            customSubmenuTwo: false,
          },
          {
            menuValue: 'Companies',
            hasSubRoute: true,
            showSubRoute: false,
            route: routes.companies,
            customSubmenuTwo: false,
            base: 'companies',
          },

          {
            menuValue: 'Deals',
            hasSubRoute: true,
            showSubRoute: false,
            route: routes.deals,
            customSubmenuTwo: false,
            base: 'deals',
          },
          {
            menuValue: 'Leads',
            hasSubRoute: true,
            showSubRoute: false,
            route: routes.leads,
            customSubmenuTwo: false,
            base: 'leads',
          },
          {
            menuValue: 'Pipeline',
            hasSubRoute: true,
            showSubRoute: false,
            route: routes.pipeline,
            customSubmenuTwo: false,
            base: 'pipeline',
          },
          {
            menuValue: 'Campaign',
            hasSubRoute: true,
            showSubRoute: false,
            route: routes.campaign,
            customSubmenuTwo: false,
            base: 'campaign',
          },
          {
            menuValue: 'Projects',
            hasSubRoute: true,
            showSubRoute: false,
            route: routes.projects,
            customSubmenuTwo: false,
            base: 'projects',
          },
          {
            menuValue: 'Tasks',
            hasSubRoute: true,
            showSubRoute: false,
            route: routes.tasks,
            customSubmenuTwo: false,
            base: 'Kanban View',
          },
          {
            menuValue: 'Proposals',
            hasSubRoute: true,
            showSubRoute: false,
            route: routes.ProposalsList,
            customSubmenuTwo: false,
            base: 'ProposalsList',
          },
          {
            menuValue: 'Contracts',
            hasSubRoute: true,
            showSubRoute: false,
            route: routes.ContractsList,
            customSubmenuTwo: false,
            base: 'invoices-details',
          },
          {
            menuValue: 'Estimations',
            hasSubRoute: true,
            showSubRoute: false,
            route: routes.estimationList,
            customSubmenuTwo: false,
            base: 'estimationList',
          },
          {
            menuValue: 'Invoices',
            hasSubRoute: true,
            showSubRoute: false,
            route: routes.InvoiceList,
            customSubmenuTwo: false,
            base: 'InvoiceList',
          },
          {
            menuValue: 'Payments',
            hasSubRoute: true,
            showSubRoute: false,
            route: routes.payments,
            customSubmenuTwo: false,
            base: 'payments',
          },
          {
            menuValue: 'Analytics',
            hasSubRoute: true,
            showSubRoute: false,
            route: routes.analytics,
            customSubmenuTwo: false,
            base: 'payments',
          },
          {
            menuValue: 'Activities',
            hasSubRoute: true,
            showSubRoute: false,
            route: routes.activities,
            customSubmenuTwo: false,
            base: 'payments',
          },
        ],
      },
      {
        menuValue: 'Reports',
        hasSubRouteTwo: true,
        showSubRoute: false,
        icon: 'ti ti-file-invoice',
        base: 'Finance & Accounts',
        subMenus: [
          {
            menuValue: 'Lead Reports',
            route: routes.leadReports,
            base: 'leadReports',
            customSubmenuTwo: false,
          },
          {
            menuValue: 'Deal Reports',
            hasSubRoute: true,
            showSubRoute: false,
            route: routes.dealReports,
            customSubmenuTwo: false,
            base: 'dealReports',
          },

          {
            menuValue: 'Contact Reports',
            hasSubRoute: true,
            showSubRoute: false,
            route: routes.contactReports,
            customSubmenuTwo: false,
            base: 'contactReports',
          },
          {
            menuValue: 'Company Reports',
            hasSubRoute: true,
            showSubRoute: false,
            route: routes.companyReports,
            customSubmenuTwo: false,
            base: 'companyReports',
          },
          {
            menuValue: 'Project Reports',
            hasSubRoute: true,
            showSubRoute: false,
            route: routes.projectReports,
            customSubmenuTwo: false,
            base: 'projectReports',
          },
          {
            menuValue: 'Task Reports',
            hasSubRoute: true,
            showSubRoute: false,
            route: routes.taskReports,
            customSubmenuTwo: false,
            base: 'taskReports',
          },
        ],
      },
      {
        menuValue: 'Pages',
        hasSubRouteTwo: true,
        showSubRoute: false,
        icon: 'ti ti-page-break',
        base: 'Finance & Accounts',
        subMenus: [
          {
            menuValue: 'Manage Users',
            route: routes.manageusers,
            base: 'manageusers',
            customSubmenuTwo: false,
          },
          {
            menuValue: 'Roles & Permission',
            hasSubRoute: true,
            showSubRoute: false,
            route: routes.rolesPermissions,
            customSubmenuTwo: false,
            base: 'rolesPermissions',
          },

          {
            menuValue: 'Delete  Request',
            hasSubRoute: true,
            showSubRoute: false,
            route: routes.deleteRequest,
            customSubmenuTwo: false,
            base: 'contactReports',
          },
          {
            menuValue: 'Membership Plans',
            hasSubRoute: true,
            showSubRoute: false,
            route: routes.membershipplan,
            customSubmenuTwo: false,
            base: 'membershipplan',
          },
          {
            menuValue: 'Membership Addons',
            hasSubRoute: true,
            showSubRoute: false,
            route: routes.membershipAddon,
            customSubmenuTwo: false,
            base: 'membershipAddon',
          },
          {
            menuValue: 'Transactions',
            hasSubRoute: true,
            showSubRoute: false,
            route: routes.membershipTransaction,
            customSubmenuTwo: false,
            base: 'membershipTransaction',
          },
          {
            menuValue: 'Location',
            customSubmenuTwo: true,
            hasSubRoute: true,
            showSubRoute: false,
            base: 'Location',
            subMenusTwo: [
              {
                menuValue: 'Countries',
                route: routes.countries,
                base: 'Countries',
              },
              {
                menuValue: 'States',
                route: routes.states,
                base: 'states',
              },
              {
                menuValue: 'Cities',
                route: routes.cities,
                base: 'cities',
              },
            ],
          },
          {
            menuValue: 'Testimonials',
            hasSubRoute: true,
            showSubRoute: false,
            route: routes.testimonials,
            customSubmenuTwo: false,
            base: 'testimonials',
          },
          {
            menuValue: 'FAQ',
            hasSubRoute: true,
            showSubRoute: false,
            route: routes.faq,
            customSubmenuTwo: false,
            base: 'faq',
          },
          {
            menuValue: 'Authentication',
            customSubmenuTwo: true,
            hasSubRoute: true,
            showSubRoute: false,
            base: 'Authentication',
            subMenusTwo: [
              {
                menuValue: 'Login',
                route: routes.login,
                base: 'login',
              },
              {
                menuValue: 'Register',
                route: routes.register,
                base: 'register',
              },
              {
                menuValue: 'Forgot Password',
                route: routes.forgotPassword,
                base: 'forgotPassword',
              },
              {
                menuValue: 'Reset Password',
                route: routes.resetPassword,
                base: 'resetPassword',
              },
              {
                menuValue: 'Email Verfication',
                route: routes.emailVerification,
                base: 'emailVerification',
              },
              {
                menuValue: '2 Step Verification',
                route: routes.twoStepVerification,
                base: 'twoStepVerification',
              },
              {
                menuValue: 'Lock Screen',
                route: routes.lockScreen,
                base: 'lockScreen',
              },
            ],
          },
          {
            menuValue: 'Error Pages',
            customSubmenuTwo: true,
            hasSubRoute: true,
            showSubRoute: false,
            base: 'Error Pages',
            subMenusTwo: [
              {
                menuValue: '404 Error',
                route: routes.error404,
                base: 'error404',
              },
              {
                menuValue: '500 Error',
                route: routes.error500,
                base: 'error500',
              },
            ],
          },
          {
            menuValue: 'Blank Page',
            hasSubRoute: true,
            showSubRoute: false,
            route: routes.blankPage,
            customSubmenuTwo: false,
            base: 'blankPage',
          },
          {
            menuValue: 'Coming Soon',
            hasSubRoute: true,
            showSubRoute: false,
            route: routes.comingSoon,
            customSubmenuTwo: false,
            base: 'comingSoon',
          },
          {
            menuValue: 'Under Maintenance',
            hasSubRoute: true,
            showSubRoute: false,
            route: routes.underMaintenance,
            customSubmenuTwo: false,
            base: 'underMaintenance',
          },
          {
            menuValue: 'Base UI',
            customSubmenuTwo: true,
            hasSubRoute: true,
            showSubRoute: false,
            base: 'Base UI',
            subMenusTwo: [
              {
                menuValue: 'Alerts',
                route: routes.alert,
                base: 'alert',
              },
              {
                menuValue: 'Accordion',
                route: routes.accordion,
                base: 'accordion',
              },
              {
                menuValue: 'Avatar',
                route: routes.avatar,
                base: 'avatar',
              },
              {
                menuValue: 'Badges',
                route: routes.uiBadges,
                base: 'uiBadges',
              },
              {
                menuValue: 'Border',
                route: routes.border,
                base: 'border',
              },
              {
                menuValue: 'Buttons',
                route: routes.button,
                base: 'button',
              },
              {
                menuValue: 'Button Group',
                route: routes.buttonGroup,
                base: 'buttonGroup',
              },
              {
                menuValue: 'Breadcrumb',
                route: routes.breadcrums,
                base: 'breadcrums',
              },
              {
                menuValue: 'Card',
                route: routes.cards,
                base: 'cards',
              },
              {
                menuValue: 'Carousel',
                route: routes.carousel,
                base: 'carousel',
              },
              {
                menuValue: 'Colors',
                route: routes.colors,
                base: 'colors',
              },
              {
                menuValue: 'Dropdowns',
                route: routes.dropdowns,
                base: 'dropdowns',
              },
              {
                menuValue: 'Grid',
                route: routes.grid,
                base: 'grid',
              },
              {
                menuValue: 'Images',
                route: routes.images,
                base: 'images',
              },
              {
                menuValue: 'Lightbox',
                route: routes.lightbox,
                base: 'lightbox',
              },
              {
                menuValue: 'Media',
                route: routes.media,
                base: 'media',
              },
              {
                menuValue: 'Modals',
                route: routes.modals,
                base: 'modals',
              },
              {
                menuValue: 'Offcanvas',
                route: routes.offcanvas,
                base: 'offcanvas',
              },
              {
                menuValue: 'Pagination',
                route: routes.pagination,
                base: 'pagination',
              },
              {
                menuValue: 'Popovers',
                route: routes.popover,
                base: 'popover',
              },
              {
                menuValue: 'Progress',
                route: routes.progress,
                base: 'progress',
              },
              {
                menuValue: 'Placeholders',
                route: routes.placeholder,
                base: 'placeholder',
              },
              {
                menuValue: 'Range Slider',
                route: routes.rangeSlider,
                base: 'rangeSlider',
              },
              {
                menuValue: 'Spinner',
                route: routes.spinner,
                base: 'spinner',
              },
              {
                menuValue: 'Sweet Alerts',
                route: routes.sweetalert,
                base: 'sweetalert',
              },
              {
                menuValue: 'Tabs',
                route: routes.navTabs,
                base: 'navTabs',
              },
              {
                menuValue: 'Toasts',
                route: routes.toasts,
                base: 'toasts',
              },
              {
                menuValue: 'Tooltips',
                route: routes.tooltip,
                base: 'tooltip',
              },
              {
                menuValue: 'Typography',
                route: routes.typography,
                base: 'typography',
              },
              {
                menuValue: 'Video',
                route: routes.video,
                base: 'video',
              },
              {
                menuValue: 'Sortable',
                route: routes.sortable,
                base: 'sortable',
              },
              {
                menuValue: 'SwiperJs',
                route: routes.swiperjs,
                base: 'swiperjs',
              },
            ],
          },
          {
            menuValue: 'Advanced UI',
            customSubmenuTwo: true,
            hasSubRoute: true,
            showSubRoute: false,
            base: 'Advanced UI',
            subMenusTwo: [
              {
                menuValue: 'Ribbon',
                route: routes.ribbon,
                base: 'ribbon',
              },
              {
                menuValue: 'Clipboard',
                route: routes.clipboard,
                base: 'clipboard',
              },
              {
                menuValue: 'Drag & Drop',
                route: routes.dragandDrop,
                base: 'dragandDrop',
              },
              {
                menuValue: 'Range Slider',
                route: routes.rangeSlider,
                base: 'rangeSlider',
              },
              {
                menuValue: 'Rating',
                route: routes.rating,
                base: 'rating',
              },
              {
                menuValue: 'Text Editor',
                route: routes.textEditor,
                base: 'textEditor',
              },
              {
                menuValue: 'Counter',
                route: routes.counter,
                base: 'counter',
              },
            
              {
                menuValue: 'Timeline',
                route: routes.timeLine,
                base: 'timeLine',
              },
            ],
          },
          {
            menuValue: 'Charts',
            customSubmenuTwo: true,
            hasSubRoute: true,
            showSubRoute: false,
            base: 'Charts',
            subMenusTwo: [
              {
                menuValue: 'Apex Charts',
                route: routes.apexChat,
                base: 'apexChat',
              },
            ],
          },
          {
            menuValue: 'Icons',
            customSubmenuTwo: true,
            hasSubRoute: true,
            showSubRoute: false,
            base: 'Icons',
            subMenusTwo: [
              {
                menuValue: 'Fontawesome Icons',
                route: routes.fantawesome,
                base: 'fantawesome',
              },
              {
                menuValue: 'Feather Icons',
                route: routes.featherIcons,
                base: 'featherIcons',
              },
              {
                menuValue: 'Ionic Icons',
                route: routes.iconicIcon,
                base: 'iconicIcon',
              },
              {
                menuValue: 'Material Icons',
                route: routes.materialIcon,
                base: 'materialIcon',
              },
              {
                menuValue: 'Pe7 Icons',
                route: routes.pe7icon,
                base: 'pe7icon',
              },
              {
                menuValue: 'Simpleline Icons',
                route: routes.simpleLineIcon,
                base: 'simpleLineIcon',
              },
              {
                menuValue: 'Themify Icons',
                route: routes.themifyIcon,
                base: 'themifyIcon',
              },
              {
                menuValue: 'Weather Icons',
                route: routes.weatherIcon,
                base: 'weatherIcon',
              },
              {
                menuValue: 'Typicon Icons',
                route: routes.typicon,
                base: 'typicon',
              },
              {
                menuValue: 'Flag Icons',
                route: routes.falgIcons,
                base: 'falgIcons',
              },
              {
                menuValue: 'Tabler Icons',
                route: routes.tablericons,
                base: 'tablericons',
              },
              {
                menuValue: 'Bootstrap Icons',
                route: routes.bootstrapicons,
                base: 'bootstrapicons',
              },
              {
                menuValue: 'Remix Icons',
                route: routes.remixicons,
                base: 'remixicons',
              },
            ],
          },
          {
            menuValue: 'Forms',
            customSubmenuTwo: true,
            hasSubRoute: true,
            showSubRoute: false,
            base: 'Forms',
            subMenusTwo: [

              {
                menuValue: 'Basic Inputs',
                route: routes.basicInput,
                hasSubRoute: false,
                showSubRoute: false,
                base: 'basicInput',
              },
              {
                menuValue: 'Checkbox & Radios',
                route: routes.checkboxandRadion,
                hasSubRoute: false,
                showSubRoute: false,
                base: 'checkboxandRadion',
              },
              {
                menuValue: 'Input Groups',
                route: routes.inputGroup,
                hasSubRoute: false,
                showSubRoute: false,
                base: 'inputGroup',
              },
              {
                menuValue: 'Grid & Gutters',
                route: routes.gridandGutters,
                hasSubRoute: false,
                showSubRoute: false,
                base: 'gridandGutters',
              },
              {
                menuValue: 'Form Select',
                route: routes.formSelect,
                hasSubRoute: false,
                showSubRoute: false,
                base: 'formSelect',
              },
              {
                menuValue: 'Input Masks',
                route: routes.formMask,
                hasSubRoute: false,
                showSubRoute: false,
                base: 'formMask',
              },
              {
                menuValue: 'File Uploads',
                route: routes.fileUpload,
                hasSubRoute: false,
                showSubRoute: false,
                base: 'fileUpload',
              },


              {
                menuValue: 'Horizontal Form',
                route: routes.horizontalForm,
                base: 'horizontalForm',
              },
              {
                menuValue: 'Vertical Form',
                route: routes.verticalForm,
                base: 'verticalForm',
              },
              {
                menuValue: 'Floating Labels',
                route: routes.floatingLable,
                base: 'floatingLable',
              },

              {
                menuValue: 'Form Validation',
                route: routes.formValidation,
                base: 'formValidation',
              },
              {
                menuValue: 'Select',
                route: routes.reactSelect,
                base: 'reactSelect',
              },
              {
                menuValue: 'Form Picker',
                route: routes.formpicker,
                base: 'formpicker',
              },
            ],
          },
          {
            menuValue: 'Tables',
            customSubmenuTwo: true,
            hasSubRoute: true,
            showSubRoute: false,
            base: 'Tables',
            subMenusTwo: [
              {
                menuValue: 'Basic Tables',
                link: "/tables-basic",
                base: 'Basic Tables',
              },
              {
                menuValue: 'Data Table',
                link: "/data-tables",
                base: 'Data Table',
              },

            ],
          },
          {
            menuValue: 'Maps',
            customSubmenuTwo: true,
            hasSubRoute: true,
            showSubRoute: false,
            base: 'Maps',
            subMenusTwo: [
              {
                menuValue: 'Map Leaflet',
                link: "/maps-leaflet",
                base: 'Map Leaflet',
              },
            ],
          },
        ],
      },
      {
        menuValue: 'Settings',
        hasSubRouteTwo: true,
        showSubRoute: false,
        icon: 'ti ti-settings-cog',
        base: 'Settings',
        subMenus: [
          {
            menuValue: 'General Settings',
            customSubmenuTwo: true,
            hasSubRoute: true,
            showSubRoute: false,
            base: 'General Settings',
            subMenusTwo: [
              {
                menuValue: 'Profile',
                route: routes.profile,
                base: 'profile',
              },
              {
                menuValue: 'Security',
                route: routes.security,
                base: 'security',
              },
              {
                menuValue: 'Notifications',
                route: routes.notification,
                base: 'notification',
              },
              {
                menuValue: 'Connected Apps',
                route: routes.connectedApps,
                base: 'Connected Apps',
              },
            ],
          },
          {
            menuValue: 'Website Settings',
            customSubmenuTwo: true,
            hasSubRoute: true,
            showSubRoute: false,
            base: 'Website Settings',
            subMenusTwo: [
              {
                menuValue: 'Company Settings',
                route: routes.companySettings,
                base: 'Company Settings',
              },
              {
                menuValue: 'Localization',
                route: routes.localization,
                base: 'localization',
              },
              {
                menuValue: 'Prefixes',
                route: routes.prefixes,
                base: 'Prefixes',
              },
              {
                menuValue: 'Preference',
                route: routes.preference,
                base: 'preference',
              },
              {
                menuValue: 'Appearance',
                route: routes.appearance,
                base: 'appearance',
              },
              {
                menuValue: 'Language',
                route: routes.language,
                base: 'language',
              },
            ],
          },
          {
            menuValue: 'App Settings',
            customSubmenuTwo: true,
            hasSubRoute: true,
            showSubRoute: false,
            base: 'App Settings',
            subMenusTwo: [
              {
                menuValue: 'Invoice',
                route: routes.invoiceSettings,
                base: 'Company Settings',
              },
              {
                menuValue: 'Printer',
                route: routes.printers,
                base: 'printers',
              },
              {
                menuValue: 'Custom Fields',
                route: routes.customFields,
                base: 'customFields',
              },
            ],
          },
          {
            menuValue: 'System Settings',
            customSubmenuTwo: true,
            hasSubRoute: true,
            showSubRoute: false,
            base: 'System Settings',
            subMenusTwo: [
              {
                menuValue: 'Email',
                route: routes.emailSettings,
                base: 'emailSettings',
              },
              {
                menuValue: 'SMS Gateways',
                route: routes.smsGateways,
                base: 'smsGateways',
              },
              {
                menuValue: 'GDPR Cookies',
                route: routes.gdprCookies,
                base: 'gdprCookies',
              },
            ],
          },
          {
            menuValue: 'Financial Settings',
            customSubmenuTwo: true,
            hasSubRoute: true,
            showSubRoute: false,
            base: 'Financial Settings',
            subMenusTwo: [
              {
                menuValue: 'Payment Gateway',
                route: routes.paymentGateways,
                base: 'paymentGateways',
              },
              {
                menuValue: 'Bank Accounts',
                route: routes.bankAccounts,
                base: 'bankAccounts',
              },
              {
                menuValue: 'Tax Rates',
                route: routes.taxRates,
                base: 'taxRates',
              },
              {
                menuValue: 'Currencies',
                route: routes.currencies,
                base: 'currencies',
              },
            ],
          },
          {
            menuValue: 'Other Settings',
            customSubmenuTwo: true,
            hasSubRoute: true,
            showSubRoute: false,
            base: 'Other Settings',
            subMenusTwo: [
              {
                menuValue: 'Storage',
                route: routes.storage,
                base: 'storage',
              },
              {
                menuValue: 'Ban IP Address',
                route: routes.banIpAddrress,
                base: 'banIpAddrress',
              },
            ],
          },

        ],
      },
    ],
  },
];