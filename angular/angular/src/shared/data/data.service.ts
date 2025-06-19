import { Injectable } from '@angular/core';
import { BehaviorSubject, Observable, map } from 'rxjs';
import { routes } from '../routes/routes';
import { HttpClient } from '@angular/common/http';
import { apiResultFormat } from '../model/pages.model';
import { MainMenu } from '../model/sidebar.model';

@Injectable({
  providedIn: 'root',
})
export class DataService {
  constructor(private http: HttpClient) {}

  private collapseSubject = new BehaviorSubject<boolean>(false);
  collapse$ = this.collapseSubject.asObservable();

  toggleCollapse() {
    this.collapseSubject.next(!this.collapseSubject.value);
  }

  public getContactList(): Observable<apiResultFormat> {
    return this.http.get<apiResultFormat>('assets/json/contact-list.json').pipe(
      map((res: apiResultFormat) => {
        return res;
      })
    );
  }
  public getCompaniesList(): Observable<apiResultFormat> {
    return this.http
      .get<apiResultFormat>('assets/json/companies-list.json')
      .pipe(
        map((res: apiResultFormat) => {
          return res;
        })
      );
  }
  public getLanguageSetting(): Observable<apiResultFormat> {
    return this.http
      .get<apiResultFormat>('assets/json/language-setting.json')
      .pipe(
        map((res: apiResultFormat) => {
          return res;
        })
      );
  }
  public getFile(): Observable<apiResultFormat> {
    return this.http.get<apiResultFormat>('assets/json/files.json').pipe(
      map((res: apiResultFormat) => {
        return res;
      })
    );
  }
  public getCallHistory(): Observable<apiResultFormat> {
    return this.http.get<apiResultFormat>('assets/json/call-history.json').pipe(
      map((res: apiResultFormat) => {
        return res;
      })
    );
  }
  public getFileShared(): Observable<apiResultFormat> {
    return this.http.get<apiResultFormat>('assets/json/file-shared.json').pipe(
      map((res: apiResultFormat) => {
        return res;
      })
    );
  }
  public getLeadsList(): Observable<apiResultFormat> {
    return this.http.get<apiResultFormat>('assets/json/leads.json').pipe(
      map((res: apiResultFormat) => {
        return res;
      })
    );
  }
  public getDealsList(): Observable<apiResultFormat> {
    return this.http.get<apiResultFormat>('assets/json/deals.json').pipe(
      map((res: apiResultFormat) => {
        return res;
      })
    );
  }

  public getLanguageSettingsWeb(): Observable<apiResultFormat> {
    return this.http
      .get<apiResultFormat>('assets/json/language-settings-web.json')
      .pipe(
        map((res: apiResultFormat) => {
          return res;
        })
      );
  }
  public getFaq(): Observable<apiResultFormat> {
    return this.http.get<apiResultFormat>('assets/json/faq.json').pipe(
      map((res: apiResultFormat) => {
        return res;
      })
    );
  }
  public getDataTable() {
    return this.http.get<apiResultFormat>('assets/json/data-tables.json').pipe(
      map((res: apiResultFormat) => {
        return res;
      })
    );
  }
  public getTestimonials(): Observable<apiResultFormat> {
    return this.http.get<apiResultFormat>('assets/json/testimonials.json').pipe(
      map((res: apiResultFormat) => {
        return res;
      })
    );
  }
  public getCountries(): Observable<apiResultFormat> {
    return this.http.get<apiResultFormat>('assets/json/countries.json').pipe(
      map((res: apiResultFormat) => {
        return res;
      })
    );
  }
  public getStates(): Observable<apiResultFormat> {
    return this.http.get<apiResultFormat>('assets/json/states.json').pipe(
      map((res: apiResultFormat) => {
        return res;
      })
    );
  }
  public getCity(): Observable<apiResultFormat> {
    return this.http.get<apiResultFormat>('assets/json/city.json').pipe(
      map((res: apiResultFormat) => {
        return res;
      })
    );
  }
  public getSource(): Observable<apiResultFormat> {
    return this.http.get<apiResultFormat>('assets/json/sources.json').pipe(
      map((res: apiResultFormat) => {
        return res;
      })
    );
  }
  public getLostReason(): Observable<apiResultFormat> {
    return this.http.get<apiResultFormat>('assets/json/lost-reason.json').pipe(
      map((res: apiResultFormat) => {
        return res;
      })
    );
  }
  public getContactStage(): Observable<apiResultFormat> {
    return this.http
      .get<apiResultFormat>('assets/json/contact-stage.json')
      .pipe(
        map((res: apiResultFormat) => {
          return res;
        })
      );
  }
  public getContactReports() {
    return this.http
      .get<apiResultFormat>('assets/json/contact-reports.json')
      .pipe(
        map((res: apiResultFormat) => {
          return res;
        })
      );
  }
  public getIndustry(): Observable<apiResultFormat> {
    return this.http.get<apiResultFormat>('assets/json/industry.json').pipe(
      map((res: apiResultFormat) => {
        return res;
      })
    );
  }
  public getCalls(): Observable<apiResultFormat> {
    return this.http.get<apiResultFormat>('assets/json/calls.json').pipe(
      map((res: apiResultFormat) => {
        return res;
      })
    );
  }
  public getTaskReport(): Observable<apiResultFormat> {
    return this.http.get<apiResultFormat>('assets/json/task.json').pipe(
      map((res: apiResultFormat) => {
        return res;
      })
    );
  }
  public getMembershipTransactions(): Observable<apiResultFormat> {
    return this.http
      .get<apiResultFormat>('assets/json/membership-transactions.json')
      .pipe(
        map((res: apiResultFormat) => {
          return res;
        })
      );
  }
  public getManageUsers(): Observable<apiResultFormat> {
    return this.http.get<apiResultFormat>('assets/json/manage-users.json').pipe(
      map((res: apiResultFormat) => {
        return res;
      })
    );
  }
  public getRolesPermissions(): Observable<apiResultFormat> {
    return this.http
      .get<apiResultFormat>('assets/json/roles-permissions.json')
      .pipe(
        map((res: apiResultFormat) => {
          return res;
        })
      );
  }
  public getDeleteRequest(): Observable<apiResultFormat> {
    return this.http
      .get<apiResultFormat>('assets/json/delete-request.json')
      .pipe(
        map((res: apiResultFormat) => {
          return res;
        })
      );
  }
  public getPages(): Observable<apiResultFormat> {
    return this.http.get<apiResultFormat>('assets/json/pages.json').pipe(
      map((res: apiResultFormat) => {
        return res;
      })
    );
  }
  public getProjectLists(): Observable<apiResultFormat> {
    return this.http
      .get<apiResultFormat>('assets/json/project-lists.json')
      .pipe(
        map((res: apiResultFormat) => {
          return res;
        })
      );
  }
  public getActivitiesList(): Observable<apiResultFormat> {
    return this.http
      .get<apiResultFormat>('assets/json/activities-list.json')
      .pipe(
        map((res: apiResultFormat) => {
          return res;
        })
      );
  }
  public getProjectReports(): Observable<apiResultFormat> {
    return this.http
      .get<apiResultFormat>('assets/json/project-reports.json')
      .pipe(
        map((res: apiResultFormat) => {
          return res;
        })
      );
  }
  public getCompaignList(): Observable<apiResultFormat> {
    return this.http
      .get<apiResultFormat>('assets/json/campaign-list.json')
      .pipe(
        map((res: apiResultFormat) => {
          return res;
        })
      );
  }
  public getCompaignArchive(): Observable<apiResultFormat> {
    return this.http
      .get<apiResultFormat>('assets/json/campaign-archive.json')
      .pipe(
        map((res: apiResultFormat) => {
          return res;
        })
      );
  }
  public getPipeline(): Observable<apiResultFormat> {
    return this.http.get<apiResultFormat>('assets/json/pipeline.json').pipe(
      map((res: apiResultFormat) => {
        return res;
      })
    );
  }
  public getActivityCalls(): Observable<apiResultFormat> {
    return this.http
      .get<apiResultFormat>('assets/json/activity-calls.json')
      .pipe(
        map((res: apiResultFormat) => {
          return res;
        })
      );
  }
  public getActivityMail(): Observable<apiResultFormat> {
    return this.http
      .get<apiResultFormat>('assets/json/activity-mail.json')
      .pipe(
        map((res: apiResultFormat) => {
          return res;
        })
      );
  }
  public getActivityMeeting(): Observable<apiResultFormat> {
    return this.http
      .get<apiResultFormat>('assets/json/activity-meeting.json')
      .pipe(
        map((res: apiResultFormat) => {
          return res;
        })
      );
  }
  public getActivityTask(): Observable<apiResultFormat> {
    return this.http
      .get<apiResultFormat>('assets/json/activity-task.json')
      .pipe(
        map((res: apiResultFormat) => {
          return res;
        })
      );
  }
  public getCompaniesReports(): Observable<apiResultFormat> {
    return this.http
      .get<apiResultFormat>('assets/json/companies-reports.json')
      .pipe(
        map((res: apiResultFormat) => {
          return res;
        })
      );
  }

  public getPackage(): Observable<apiResultFormat> {
    return this.http.get<apiResultFormat>('assets/json/package-list.json').pipe(
      map((res: apiResultFormat) => {
        return res;
      })
    );
  }

  public getSubscription(): Observable<apiResultFormat> {
    return this.http.get<apiResultFormat>('assets/json/subscription.json').pipe(
      map((res: apiResultFormat) => {
        return res;
      })
    );
  }

  public getCompanies(): Observable<apiResultFormat> {
    return this.http.get<apiResultFormat>('assets/json/companies.json').pipe(
      map((res: apiResultFormat) => {
        return res;
      })
    );
  }

  public sidebarData1 = [
    {
      tittle: 'Main MENU',
      showAsTab: false,
      separateRoute: false,
      hasSubRoute: false,
      showSubRoute: true,
      menu: [
        {
          menuValue: 'Dashboard',
          hasSubRoute: true,
          showSubRoute: true,
          icon: 'layout-2',
          base1: 'dashboard',
          subMenus: [
            {
              menuValue: 'Deals Dashboard',
              route: routes.dealsDashboard,
            },
            {
              menuValue: 'Leads Dashboard',
              route: routes.leadsDashboard,
            },
            {
              menuValue: 'Project Dashboard',
              route: routes.projectDashboard,
            },
          ],
        },
        {
          menuValue: 'Application',
          hasSubRouteTwo: true,
          showSubRoute: false,
          base: 'application',
          icon: 'brand-airtable',
          subMenus: [
            {
              menuValue: 'Chat',
              route: routes.chat,
              hasSubRoute: false,
              showSubRoute: false,
              customSubmenuTwo: false,
            },
            {
              menuValue: 'Call',
              customSubmenuTwo: true,
              hasSubRoute: true,
              showSubRoute: false,
              page1: 'video-call',
              page2: 'audio-call',
              page3: 'call-history',
              subMenusTwo: [
                {
                  menuValue: 'Video Call',
                  route: routes.videoCall,
                  hasSubRoute: false,
                  showSubRoute: false,
                  page: 'call',
                },
                {
                  menuValue: 'Audio Call',
                  route: routes.audioCall,
                  hasSubRoute: false,
                  showSubRoute: false,
                },
                {
                  menuValue: 'Call History',
                  route: routes.callHistory,
                  hasSubRoute: false,
                  showSubRoute: false,
                },
              ],
            },
            {
              menuValue: 'Calendar',
              route: routes.calendar,
              hasSubRoute: false,
              showSubRoute: false,
              customSubmenuTwo: false,
            },
            {
              menuValue: 'Email',
              hasSubRoute: false,
              showSubRoute: false,
              route: routes.email,
              customSubmenuTwo: false,
              subRoutes: [],
            },
            {
              menuValue: 'To Do',
              hasSubRoute: false,
              showSubRoute: false,
              route: routes.toDo,
              customSubmenuTwo: false,
              subRoutes: [],
            },
            {
              menuValue: 'Notes',
              hasSubRoute: false,
              showSubRoute: false,
              route: routes.notes,
              customSubmenuTwo: false,
              subRoutes: [],
            },
            {
              menuValue: 'File Manager',
              hasSubRoute: false,
              showSubRoute: false,
              route: routes.fileManager,
              customSubmenuTwo: false,
              subRoutes: [],
            },
            {
              menuValue: 'Kanban',
              hasSubRoute: false,
              showSubRoute: false,
              route: routes.kanban,
              customSubmenuTwo: false,
              subRoutes: [],
            },
            {
              menuValue: 'Social Feed',
              hasSubRoute: false,
              showSubRoute: false,
              route: routes.socialFeed,
              customSubmenuTwo: false,
              subRoutes: [],
            },
            {
              menuValue: 'Invoices',
              hasSubRoute: false,
              showSubRoute: false,
              route: routes.invoices,
              customSubmenuTwo: false,
              subRoutes: [],
            },
          ],
        },
        {
          menuValue: 'Super Admin',
          hasSubRouteTwo: true,
          showSubRoute: false,
          base: 'super-admin',
          icon: 'user-star',
          subMenus: [
            {
              menuValue: 'Dashboard',
              route: routes.superAdminDash,
              hasSubRoute: false,
              showSubRoute: false,
              customSubmenuTwo: false,
            },
            {
              menuValue: 'Companies',
              route: routes.superAdminCompanies,
              hasSubRoute: false,
              showSubRoute: false,
              customSubmenuTwo: false,
            },
            {
              menuValue: 'Subscription',
              hasSubRoute: false,
              showSubRoute: false,
              route: routes.superAdminSubscriptions,
              customSubmenuTwo: false,
              subRoutes: [],
            },
            {
              menuValue: 'Packages',
              hasSubRoute: false,
              showSubRoute: false,
              route: routes.superAdminPackages,
              customSubmenuTwo: false,
              subRoutes: [],
            },
            {
              menuValue: 'Domain',
              hasSubRoute: false,
              showSubRoute: false,
              route: routes.superAdminDomain,
              customSubmenuTwo: false,
              subRoutes: [],
            },
            {
              menuValue: 'Purchase Transaction',
              hasSubRoute: false,
              showSubRoute: false,
              route: routes.superAdminPurchaseTransaction,
              customSubmenuTwo: false,
              subRoutes: [],
            },
          ],
        },
      ],
    },
    {
      tittle: 'LAYOUT',
      icon: 'file',
      showAsTab: false,
      separateRoute: false,
      menu: [
        {
          menuValue: 'Mini',
          route: routes.Mini,
          hasSubRoute: false,
          showSubRoute: false,
          base: 'layout-mini',
          icon: 'layout-navbar',
          materialicons: 'confirmation_number',
          subMenus: [],
        },
        {
          menuValue: 'Horizontal Single',
          route: routes.HorizontalSingle,
          hasSubRoute: false,
          showSubRoute: false,
          icon: 'layout-navbar-inactive',
          base: 'layout-horizontal-single',
          materialicons: 'shopping_bag',
          subMenus: [],
        },
        {
          menuValue: 'Without Header',
          route: routes.WithoutHeader,
          hasSubRoute: false,
          showSubRoute: false,
          icon: 'layout-sidebar',
          base: 'layout-without-header',
          materialicons: 'shopping_bag',
          subMenus: [],
        },
        {
          menuValue: 'RTL',
          route: routes.RTL,
          hasSubRoute: false,
          showSubRoute: false,
          icon: 'text-direction-rtl',
          base: 'layout-rtl',
          materialicons: 'shopping_bag',
          subMenus: [],
        },
        {
          menuValue: 'Detached',
          route: routes.Detached,
          hasSubRoute: false,
          showSubRoute: false,
          icon: 'details',
          base: 'layout-detached',
          materialicons: 'shopping_bag',
          subMenus: [],
        },
        {
          menuValue: 'Dark',
          route: routes.Dark,
          hasSubRoute: false,
          showSubRoute: false,
          icon: 'moon',
          base: 'layout-dark',
          materialicons: 'shopping_bag',
          subMenus: [],
        },
      ],
    },
    {
      tittle: 'CRM',
      showAsTab: true,
      separateRoute: false,
      menu: [
        {
          menuValue: 'Contacts',
          icon: 'user-up',
          route: routes.contactList,
          base: 'contacts',
          hasSubRoute: false,
          showSubRoute: false,
        },
        {
          menuValue: 'Companies',
          icon: 'building-community',
          hasSubRoute: false,
          showSubRoute: false,
          route: routes.companiesList,
          base: 'companies',
          subRoutes: [],
        },
        {
          menuValue: 'Deals',
          icon: 'medal',
          hasSubRoute: false,
          showSubRoute: false,
          route: routes.dealsList,
          base: 'deals',
          subRoutes: [],
        },
        {
          menuValue: 'Leads',
          icon: 'chart-arcs',
          hasSubRoute: false,
          showSubRoute: false,
          route: routes.leadsList,
          base: 'leads',
          subRoutes: [],
        },
        {
          menuValue: 'Pipeline',
          icon: 'timeline-event-exclamation',
          hasSubRoute: false,
          showSubRoute: false,
          route: routes.pipelineList,
          base: 'pipeline',
          subRoutes: [],
        },
        {
          menuValue: 'Compaign',
          icon: 'brand-campaignmonitor',
          hasSubRoute: false,
          showSubRoute: false,
          route: routes.compaignList,
          base: 'compaign',
          subRoutes: [],
        },
        {
          menuValue: 'Projects',
          icon: 'atom-2',
          hasSubRoute: false,
          showSubRoute: false,
          route: routes.projectLists,
          base: 'projects',
          subRoutes: [],
        },
        {
          menuValue: 'Tasks',
          icon: 'list-check',
          hasSubRoute: false,
          showSubRoute: false,
          route: routes.allTasks,
          base: 'tasks',
          subRoutes: [],
        },
        {
          menuValue: 'Proposals',
          icon: 'file-star',
          hasSubRoute: false,
          showSubRoute: false,
          route: routes.proposalsList,
          base: 'proposals',
          subRoutes: [],
        },
        {
          menuValue: 'Contracts',
          icon: 'file-check',
          hasSubRoute: false,
          showSubRoute: false,
          route: routes.contractList,
          base: 'contracts',
          subRoutes: [],
        },
        {
          menuValue: 'Estimations',
          icon: 'file-report',
          hasSubRoute: false,
          showSubRoute: false,
          route: routes.estimationList,
          base: 'estimations',
          subRoutes: [],
        },
        {
          menuValue: 'Invoices',
          icon: 'file-invoice',
          hasSubRoute: false,
          showSubRoute: false,
          route: routes.invoiceList,
          base: 'invoice',
          subRoutes: [],
        },
        {
          menuValue: 'Payments',
          icon: 'report-money',
          hasSubRoute: false,
          showSubRoute: false,
          route: routes.paymentsList,
          base: 'payments',
          subRoutes: [],
        },
        {
          menuValue: 'Analytics',
          icon: 'chart-bar',
          hasSubRoute: false,
          showSubRoute: false,
          route: routes.analyticsList,
          base: 'analytics',
          subRoutes: [],
        },
        {
          menuValue: 'Activities',
          icon: 'bounce-right',
          hasSubRoute: false,
          showSubRoute: false,
          route: routes.activitiesList,
          base: 'activities',
          subRoutes: [],
        },
      ],
    },
    {
      tittle: 'Reports',
      showAsTab: true,
      separateRoute: false,
      menu: [
        {
          menuValue: 'Reports',
          base1: 'reports',
          icon: 'file-invoice',
          hasSubRoute: true,
          showSubRoute: false,
          subMenus: [
            {
              menuValue: 'Lead Reports',
              icon: 'package',
              route: routes.leadReport,
              hasSubRoute: false,
              showSubRoute: false,
            },
            {
              menuValue: 'Deals Reports',
              icon: 'clipboard',
              route: routes.dealReport,
              hasSubRoute: false,
              showSubRoute: false,
            },
            {
              menuValue: 'Contact Reports',
              icon: 'truck',
              route: routes.contactReport,
              hasSubRoute: false,
              showSubRoute: false,
            },
            {
              menuValue: 'Company Reports',
              icon: 'truck',
              route: routes.companiesReports,
              hasSubRoute: false,
              showSubRoute: false,
            },
            {
              menuValue: 'Project Reports',
              icon: 'truck',
              route: routes.projectReports,
              hasSubRoute: false,
              showSubRoute: false,
            },
            {
              menuValue: 'Task Reports',
              icon: 'truck',
              route: routes.taskReport,
              hasSubRoute: false,
              showSubRoute: false,
            },
          ],
        },
      ],
    },

    {
      tittle: 'CRM SETTINGS',
      showAsTab: true,
      separateRoute: false,
      menu: [
        {
          menuValue: 'Sources',
          icon: 'artboard',
          route: routes.source,
          hasSubRoute: false,
          showSubRoute: false,
          base: 'sources',
        },
        {
          menuValue: 'Lost Reason',
          icon: 'message-exclamation',
          route: routes.LostReason,
          hasSubRoute: false,
          showSubRoute: false,
          base: 'lost-reason',
        },
        {
          menuValue: 'Contact Stage',
          icon: 'steam',
          route: routes.contactStage,
          hasSubRoute: false,
          showSubRoute: false,
          base: 'contact-stage',
        },
        {
          menuValue: 'Industry',
          icon: 'building-factory',
          route: routes.industry,
          hasSubRoute: false,
          showSubRoute: false,
          base: 'industry',
        },
        {
          menuValue: 'Calls',
          icon: 'phone-check',
          route: routes.calls,
          hasSubRoute: false,
          showSubRoute: false,
          base: 'calls',
        },
      ],
    },

    {
      tittle: 'USER MANAGEMENT',
      showAsTab: true,
      separateRoute: false,
      menu: [
        {
          menuValue: 'Manage Users',
          icon: 'users',
          route: routes.manageUsers,
          hasSubRoute: false,
          showSubRoute: false,
          base: 'manage-users',
        },
        {
          menuValue: 'Roles & Permissions',
          icon: 'navigation-cog',
          route: routes.rolesPermissions,
          hasSubRoute: false,
          showSubRoute: false,
          base: 'roles-permissions',
        },
        {
          menuValue: 'Delete Request',
          icon: 'flag-question',
          route: routes.deleteRequest,
          hasSubRoute: false,
          showSubRoute: false,
          base: 'delete-request',
        },
      ],
    },
    {
      tittle: 'MEMBERSHIP',
      showAsTab: true,
      separateRoute: false,
      menu: [
        {
          menuValue: 'Membership',
          base: 'expense',
          icon: 'file-text',
          hasSubRoute: true,
          showSubRoute: false,
          base1: 'membership',
          subMenus: [
            {
              menuValue: 'Membership Plans',
              hasSubRoute: false,
              showSubRoute: false,
              route: routes.membershipPlans,
            },
            {
              menuValue: 'Membership Addons',
              hasSubRoute: false,
              showSubRoute: false,
              route: routes.membershipAddons,
            },
            {
              menuValue: 'Transactions',
              hasSubRoute: false,
              showSubRoute: false,
              route: routes.membershipTransactions,
            },
          ],
        },
      ],
    },
    {
      tittle: 'CONTENT',
      showAsTab: true,
      separateRoute: false,
      menu: [
        {
          menuValue: 'Pages',
          base: 'pages',
          icon: 'page-break',
          hasSubRoute: false,
          showSubRoute: false,
          route: routes.pagesContent,
        },
        {
          menuValue: 'Location',
          base: 'expense',
          icon: 'map-pin-pin',
          hasSubRoute: true,
          showSubRoute: false,
          base1: 'location',
          subMenus: [
            {
              menuValue: 'Countries',
              route: routes.countries,
            },
            {
              menuValue: 'States',
              route: routes.states,
            },
            {
              menuValue: 'Cities',
              route: routes.cities,
            },
          ],
        },
        {
          menuValue: 'Testimonials',
          base: 'testimonials',
          icon: 'quote',
          route: routes.testimonials,
          hasSubRoute: false,
          showSubRoute: false,
        },
        {
          menuValue: 'FAQ',
          base: 'faq',
          icon: 'question-mark',
          route: routes.faq,
          hasSubRoute: false,
          showSubRoute: false,
        },
      ],
    },
    {
      tittle: 'SUPPORT',
      showAsTab: true,
      separateRoute: false,
      menu: [
        {
          menuValue: 'Contact Messages',
          icon: 'page-break',
          route: routes.contactMessage,
          hasSubRoute: false,
          showSubRoute: false,
          base: 'contact-messages',
        },
        {
          menuValue: 'Tickets',
          icon: 'ticket',
          route: routes.tickets,
          hasSubRoute: false,
          showSubRoute: false,
          base: 'tickets',
        },
      ],
    },
    {
      tittle: 'Settings',
      showAsTab: true,
      separateRoute: false,
      menu: [
        {
          menuValue: 'General Settings',
          icon: 'settings-cog',
          hasSubRoute: true,
          showSubRoute: false,
          page: 'general-settings',
          subMenus: [
            {
              menuValue: 'Profile',
              route: routes.generalSettings,
              hasSubRoute: false,
              showSubRoute: false,
            },
            {
              menuValue: 'Security',
              route: routes.securitySettings,
              hasSubRoute: false,
              showSubRoute: false,
            },
            {
              menuValue: 'Notifications',
              route: routes.settingsNotification,
              hasSubRoute: false,
              showSubRoute: false,
            },
            {
              menuValue: 'Connected Apps',
              route: routes.connectedApps,
              hasSubRoute: false,
              showSubRoute: false,
            },
          ],
        },
        {
          menuValue: 'Website Settings',
          page: 'website-settings',
          icon: 'world-cog',
          hasSubRoute: true,
          showSubRoute: false,
          subMenus: [
            {
              menuValue: 'Company Settings',
              route: routes.companySettings,
              hasSubRoute: false,
              showSubRoute: false,
            },
            {
              menuValue: 'Localization',
              route: routes.localizationSettings,
              hasSubRoute: false,
              showSubRoute: false,
            },
            {
              menuValue: 'Prefixes',
              route: routes.prefixes,
              hasSubRoute: false,
              showSubRoute: false,
            },
            {
              menuValue: 'Preference',
              route: routes.preference,
              hasSubRoute: false,
              showSubRoute: false,
            },
            {
              menuValue: 'Appearance',
              route: routes.appearance,
              hasSubRoute: false,
              showSubRoute: false,
            },
            {
              menuValue: 'Language',
              route: routes.languageSettings,
              hasSubRoute: false,
              showSubRoute: false,
            },
          ],
        },
        {
          menuValue: 'App Settings',
          page: 'app-settings',
          icon: 'apps',
          hasSubRoute: true,
          showSubRoute: false,
          base: 'app-settings',
          subMenus: [
            {
              menuValue: 'Invoice Settings',
              route: routes.invoiceSettings,
              hasSubRoute: false,
              showSubRoute: false,
            },
            {
              menuValue: 'Printers',
              route: routes.printerSettings,
              hasSubRoute: false,
              showSubRoute: false,
            },

            {
              menuValue: 'Custom Fields',
              route: routes.customFields,
              hasSubRoute: false,
              showSubRoute: false,
            },
          ],
        },
        {
          menuValue: 'System Settings',
          page: 'system-settings',
          icon: 'device-laptop',
          hasSubRoute: true,
          showSubRoute: false,
          subMenus: [
            {
              menuValue: 'Email Settings',
              route: routes.emailSettings,
              hasSubRoute: false,
              showSubRoute: false,
            },
            {
              menuValue: 'SMS Gateways',
              route: routes.smsGateway,
              hasSubRoute: false,
              showSubRoute: false,
            },
            {
              menuValue: 'GDPR Cookies',
              route: routes.gdprSettings,
              hasSubRoute: false,
              showSubRoute: false,
            },
          ],
        },
        {
          menuValue: 'Financial Settings',
          page: 'financial-settings',
          icon: 'moneybag',
          hasSubRoute: true,
          showSubRoute: false,
          subMenus: [
            {
              menuValue: 'Payment Gateways',
              route: routes.paymentGatewaySettings,
              hasSubRoute: false,
              showSubRoute: false,
            },
            {
              menuValue: 'Bank Accounts',
              route: routes.bankAccounts,
              hasSubRoute: false,
              showSubRoute: false,
            },
            {
              menuValue: 'Tax Rates',
              route: routes.taxRates,
              hasSubRoute: false,
              showSubRoute: false,
            },
            {
              menuValue: 'Currencies',
              route: routes.currencySettings,
              hasSubRoute: false,
              showSubRoute: false,
            },
          ],
        },
        {
          menuValue: 'Other Settings',
          page: 'other-settings',
          icon: 'flag-cog',
          hasSubRoute: true,
          showSubRoute: false,
          subMenus: [
            {
              menuValue: 'Storage',
              route: routes.storageSettings,
              hasSubRoute: false,
              showSubRoute: false,
            },
            {
              menuValue: 'Ban IP Address',
              route: routes.banIpAddress,
              hasSubRoute: false,
              showSubRoute: false,
            },
          ],
        },
      ],
    },
    {
      tittle: 'Pages',
      showAsTab: true,
      separateRoute: false,
      menu: [
        {
          menuValue: 'Authentication',
          icon: 'lock-square-rounded',
          hasSubRoute: true,
          showSubRoute: false,
          subMenus: [
            {
              menuValue: 'Login',
              route: routes.login,
            },
            {
              menuValue: 'Register',
              route: routes.register,
            },
            {
              menuValue: 'Forgot Password',
              route: routes.forgotPassword,
            },
            {
              menuValue: 'Reset Password',
              route: routes.resetPasseword,
            },
            {
              menuValue: 'Email Verification',
              route: routes.emailVerification,
            },
            {
              menuValue: '2 Step Verification',
              route: routes.twoStepVerfication,
            },
            {
              menuValue: 'Lock Screen',
              route: routes.lockScreen,
              hasSubRoute: false,
              showSubRoute: false,
              customSubmenuTwo: false,
            },
          ],
        },
        {
          menuValue: 'Error Pages',
          icon: 'error-404',
          hasSubRoute: true,
          showSubRoute: false,
          subMenus: [
            {
              menuValue: '404 Error',
              route: routes.error404,
              hasSubRoute: false,
              showSubRoute: false,
            },
            {
              menuValue: '500 Error',
              route: routes.error500,
              hasSubRoute: false,
              showSubRoute: false,
            },
          ],
        },
        {
          menuValue: 'Blank Page',
          icon: 'apps',
          route: routes.blankPage,
          hasSubRoute: false,
          showSubRoute: false,
        },
        {
          menuValue: 'Coming Soon',
          icon: 'device-laptop',
          route: routes.comingSoon,
          hasSubRoute: false,
          showSubRoute: false,
        },
        {
          menuValue: 'Under Maintenance',
          icon: 'moneybag',
          route: routes.underMaintenance,
          hasSubRoute: false,
          showSubRoute: false,
        },
      ],
    },
    {
      tittle: 'UI Interface',
      showAsTab: true,
      separateRoute: false,
      menu: [
        {
          menuValue: 'Base UI',
          base: 'base-ui',
          icon: 'adjustments-check',
          hasSubRoute: true,
          showSubRoute: false,
          subMenus: [
            {
              menuValue: 'Alerts',
              route: routes.uiAlerts,
              hasSubRoute: false,
              showSubRoute: false,
            },
            {
              menuValue: 'Accordion',
              route: routes.uiAccordion,
              hasSubRoute: false,
              showSubRoute: false,
            },
            {
              menuValue: 'Avatar',
              route: routes.uiAvatar,
              hasSubRoute: false,
              showSubRoute: false,
            },
            {
              menuValue: 'Badges',
              route: routes.uiBadges,
              hasSubRoute: false,
              showSubRoute: false,
            },
            {
              menuValue: 'Border',
              route: routes.uiBorders,
              hasSubRoute: false,
              showSubRoute: false,
            },
            {
              menuValue: 'Buttons',
              route: routes.uiButtons,
              hasSubRoute: false,
              showSubRoute: false,
            },
            {
              menuValue: 'Button Group',
              route: routes.uiButtonsGroup,
              hasSubRoute: false,
              showSubRoute: false,
            },
            {
              menuValue: 'Breadcrumb',
              route: routes.uiBreadcrumb,
              hasSubRoute: false,
              showSubRoute: false,
            },
            {
              menuValue: 'Card',
              route: routes.uiCards,
              hasSubRoute: false,
              showSubRoute: false,
            },
            {
              menuValue: 'Carousel',
              route: routes.uiCarousel,
              hasSubRoute: false,
              showSubRoute: false,
            },
            {
              menuValue: 'Colors',
              route: routes.uiColors,
              hasSubRoute: false,
              showSubRoute: false,
            },
            {
              menuValue: 'Dropdowns',
              route: routes.uiDropdowns,
              hasSubRoute: false,
              showSubRoute: false,
            },
            {
              menuValue: 'Grid',
              route: routes.uiGrid,
              hasSubRoute: false,
              showSubRoute: false,
            },
            {
              menuValue: 'Images',
              route: routes.uiImages,
              hasSubRoute: false,
              showSubRoute: false,
            },
            {
              menuValue: 'Lightbox',
              route: routes.uiLightbox,
              hasSubRoute: false,
              showSubRoute: false,
            },
            {
              menuValue: 'Media',
              route: routes.uiMedia,
              hasSubRoute: false,
              showSubRoute: false,
            },
            {
              menuValue: 'Modals',
              route: routes.uiModals,
              hasSubRoute: false,
              showSubRoute: false,
            },
            {
              menuValue: 'Offcanvas',
              route: routes.uiOffcanvas,
              hasSubRoute: false,
              showSubRoute: false,
            },
            {
              menuValue: 'Pagination',
              route: routes.uiPagination,
              hasSubRoute: false,
              showSubRoute: false,
            },
            {
              menuValue: 'Popovers',
              route: routes.uiPopovers,
              hasSubRoute: false,
              showSubRoute: false,
            },
            {
              menuValue: 'Progress',
              route: routes.uiProgress,
              hasSubRoute: false,
              showSubRoute: false,
            },
            {
              menuValue: 'Placeholders',
              route: routes.uiPlaceholders,
              hasSubRoute: false,
              showSubRoute: false,
            },
            {
              menuValue: 'Range Slider',
              route: routes.uiRangeSlider,
              hasSubRoute: false,
              showSubRoute: false,
            },
            {
              menuValue: 'Spinner',
              route: routes.uiSpinner,
              hasSubRoute: false,
              showSubRoute: false,
            },
            {
              menuValue: 'Sweet Alerts',
              route: routes.uiSweetAlerts,
              hasSubRoute: false,
              showSubRoute: false,
            },
            {
              menuValue: 'Tabs',
              route: routes.uiNavTabs,
              hasSubRoute: false,
              showSubRoute: false,
            },
            {
              menuValue: 'Toasts',
              route: routes.uiToasts,
              hasSubRoute: false,
              showSubRoute: false,
            },
            {
              menuValue: 'Tooltips',
              route: routes.uiTooltips,
              hasSubRoute: false,
              showSubRoute: false,
            },
            {
              menuValue: 'Typography',
              route: routes.uiTypography,
              hasSubRoute: false,
              showSubRoute: false,
            },
            {
              menuValue: 'Video',
              route: routes.uiVideo,
              hasSubRoute: false,
              showSubRoute: false,
            },
            {
              menuValue: 'Sortable',
              route: routes.uiSortable,
              hasSubRoute: false,
              showSubRoute: false,
            },
          ],
        },
        {
          menuValue: 'Advanced UI',
          base: 'advanced-ui',
          icon: 'box-align-bottom',
          hasSubRoute: true,
          showSubRoute: false,
          subMenus: [
            {
              menuValue: 'Ribbon',
              route: routes.ribbon,
              hasSubRoute: false,
              showSubRoute: false,
            },
            {
              menuValue: 'Clipboard',
              route: routes.clipboard,
              hasSubRoute: false,
              showSubRoute: false,
            },
            {
              menuValue: 'Drag & Drop',
              route: routes.dragDrop,
              hasSubRoute: false,
              showSubRoute: false,
            },
            {
              menuValue: 'Rating',
              route: routes.rating,
              hasSubRoute: false,
              showSubRoute: false,
            },
            {
              menuValue: 'Text Editor',
              route: routes.textEditor,
              hasSubRoute: false,
              showSubRoute: false,
            },
            {
              menuValue: 'Counter',
              route: routes.counter,
              hasSubRoute: false,
              showSubRoute: false,
            },
            {
              menuValue: 'Scrollbar',
              route: routes.scrollbar,
              hasSubRoute: false,
              showSubRoute: false,
            },

            {
              menuValue: 'Timeline',
              route: routes.timeline,
              hasSubRoute: false,
              showSubRoute: false,
            },
          ],
        },
        {
          menuValue: 'Charts',
          icon: 'chart-donut-2',
          hasSubRoute: true,
          showSubRoute: false,
          base: 'charts',
          subMenus: [
            {
              menuValue: 'Apex Charts',
              route: routes.chartApex,
              hasSubRoute: false,
              showSubRoute: false,
            },
            {
              menuValue: 'Ng2 Charts',
              hasSubRoute: false,
              showSubRoute: false,
              route: routes.chartNg2,
              subRoutes: [],
            },
            {
              menuValue: 'Prime NG Charts',
              hasSubRoute: false,
              showSubRoute: false,
              route: routes.chartPrime,
              subRoutes: [],
            },
          ],
        },
        {
          menuValue: 'Icons',
          icon: 'icons',
          hasSubRoute: true,
          showSubRoute: false,
          base: 'icons',
          subMenus: [
            {
              menuValue: 'Fontawesome Icons',
              route: routes.iconFontAwesome,
              hasSubRoute: false,
              showSubRoute: false,
            },
            {
              menuValue: 'Feather Icons',
              route: routes.iconFeather,
              hasSubRoute: false,
              showSubRoute: false,
            },
            {
              menuValue: 'Ionic Icons',
              route: routes.iconIonic,
              hasSubRoute: false,
              showSubRoute: false,
            },
            {
              menuValue: 'Material Icons',
              route: routes.iconMaterial,
              hasSubRoute: false,
              showSubRoute: false,
            },
            {
              menuValue: 'Pe7 Icons',
              route: routes.iconPe7,
              hasSubRoute: false,
              showSubRoute: false,
            },
            {
              menuValue: 'Simpleline Icons',
              route: routes.iconSimpleline,
              hasSubRoute: false,
              showSubRoute: false,
            },
            {
              menuValue: 'Themify Icons',
              route: routes.iconThemify,
              hasSubRoute: false,
              showSubRoute: false,
            },
            {
              menuValue: 'Weather Icons',
              route: routes.iconWeather,
              hasSubRoute: false,
              showSubRoute: false,
            },
            {
              menuValue: 'Typicon Icons',
              route: routes.iconTypicon,
              hasSubRoute: false,
              showSubRoute: false,
            },
            {
              menuValue: 'Flag Icons',
              route: routes.iconFlag,
              hasSubRoute: false,
              showSubRoute: false,
            },
            {
              menuValue: 'Bootstrap Icons',
              route: routes.bootstrap,
              hasSubRoute: false,
              showSubRoute: false,
            },
            {
              menuValue: 'Tabler Icons',
              route: routes.tabler,
              hasSubRoute: false,
              showSubRoute: false,
            },
            {
              menuValue: 'Remix Icons',
              route: routes.remix,
              hasSubRoute: false,
              showSubRoute: false,
            },
          ],
        },
        {
          menuValue: 'Forms',
          icon: 'forms',
          base: 'forms',
          hasSubRouteTwo: true,
          showSubRoute: false,
          subMenus: [
            {
              menuValue: 'Form Elements',
              page1: 'form-basic-inputs',
              page2: 'form-checkbox-radios',
              page3: 'form-input-groups',
              page4: 'form-grid-gutters',
              page5: 'form-select',
              page6: 'form-mask',
              page7: 'form-fileupload',
              page8: 'form-elements',
              customSubmenuTwo: true,
              hasSubRoute: true,
              showSubRoute: false,
              subMenusTwo: [
                {
                  menuValue: 'Basic Inputs',
                  route: routes.formBasicInputs,
                  hasSubRoute: false,
                  showSubRoute: false,
                },
                {
                  menuValue: 'Checkbox & Radios',
                  route: routes.formCheckboxRadios,
                  hasSubRoute: false,
                  showSubRoute: false,
                },
                {
                  menuValue: 'Input Groups',
                  route: routes.formInputsGroups,
                  hasSubRoute: false,
                  showSubRoute: false,
                },
                {
                  menuValue: 'Grid & Gutters',
                  route: routes.formGridGutters,
                  hasSubRoute: false,
                  showSubRoute: false,
                },
                {
                  menuValue: 'Form Select',
                  route: routes.formSelect,
                  hasSubRoute: false,
                  showSubRoute: false,
                },
                {
                  menuValue: 'Input Masks',
                  route: routes.formMask,
                  hasSubRoute: false,
                  showSubRoute: false,
                },
                {
                  menuValue: 'File Uploads',
                  route: routes.formFileUpload,
                  hasSubRoute: false,
                  showSubRoute: false,
                },
              ],
            },
            {
              menuValue: 'Layouts',
              customSubmenuTwo: true,
              page1: 'form-horizontal',
              page2: 'form-vertical',
              page3: 'form-floating-labels',
              hasSubRoute: true,
              showSubRoute: false,
              subMenusTwo: [
                {
                  menuValue: 'Horizontal Form',
                  route: routes.formHorizontal,
                  hasSubRoute: false,
                  showSubRoute: false,
                },
                {
                  menuValue: 'Vertical Form',
                  route: routes.formVertical,
                  hasSubRoute: false,
                  showSubRoute: false,
                },
                {
                  menuValue: 'Floating Labels',
                  route: routes.formFloatingLabels,
                  hasSubRoute: false,
                  showSubRoute: false,
                },
              ],
            },
            {
              menuValue: 'Form Validation',
              route: routes.formValidation,
              hasSubRoute: false,
              showSubRoute: false,
              customSubmenuTwo: false,
            },
            {
              menuValue: 'Mat Select',
              route: routes.formSelect2,
              hasSubRoute: false,
              showSubRoute: false,
              customSubmenuTwo: false,
            },
            {
              menuValue: 'Form Wizard',
              route: routes.formWizard,
              hasSubRoute: false,
              showSubRoute: false,
              customSubmenuTwo: false,
            },
            {
              menuValue: 'Form Pickers',
              route: routes.formPickers,
              hasSubRoute: false,
              showSubRoute: false,
              customSubmenuTwo: false,
            },
          ],
        },
        {
          menuValue: 'Tables',
          icon: 'table',
          base: 'table',
          hasSubRoute: true,
          showSubRoute: false,
          subMenus: [
            {
              menuValue: 'Basic Tables',
              route: routes.basicTable,
              hasSubRoute: false,
              showSubRoute: false,
            },
            {
              menuValue: 'Data Table',
              route: routes.dataTable,
              hasSubRoute: false,
              showSubRoute: false,
            },
          ],
        },
        {
          menuValue: 'Maps',
          hasSubRoute: true,
          showSubRoute: false,
          icon: 'map',
          base: 'maps',
          materialicons: 'people',
          subMenus: [
            {
              menuValue: 'Leaflets',
              route: routes.leaflet,
              base: 'leaflets',
            },
          ],
        },
      ],
    },
    {
      tittle: 'HELP',
      showAsTab: true,
      separateRoute: false,
      menu: [
        {
          menuValue: 'Documentation',
          icon: 'file-type-doc',
          hasSubRoute: false,
          showSubRoute: false,
        },
        {
          menuValue: 'Changelog v2.1.8',
          icon: 'arrow-capsule',
          hasSubRoute: false,
          showSubRoute: false,
        },
        {
          menuValue: 'Multi Level',
          hasSubRouteThree: true,
          icon: 'brand-databricks',
          showSubRoute: false,
          subMenus: [
            {
              menuValue: 'Level 1.1',
              hasSubRoute: false,
              showSubRoute: false,
              customSubmenuThree: false,
            },
            {
              menuValue: 'Level 1.2',
              hasSubRoute: false,
              showSubRoute: false,
              customSubmenuThree: true,
              subMenusTwo: [
                {
                  menuValue: 'Level 2.1',
                  hasSubRoute: false,
                  showSubRoute: false,
                  customSubmenuFour: false,
                },
                {
                  menuValue: 'Level 2.2',
                  hasSubRoute: false,
                  showSubRoute: false,
                  customSubmenuFour: true,
                  subMenusThree: [
                    {
                      menuValue: 'Level 3.1',
                      hasSubRoute: false,
                      showSubRoute: false,
                      customSubmenuFour: true,
                    },
                    {
                      menuValue: 'Level 3.2',
                      hasSubRoute: false,
                      showSubRoute: false,
                      customSubmenuFour: true,
                    },
                  ],
                },
              ],
            },
          ],
        },
      ],
    },
  ];
  public videocall = [
    {
      img: 'assets/img/users/user-01.jpg',
      name: 'Barbara',
    },
    {
      img: 'assets/img/users/user-02.jpg',
      name: 'Linnea',
    },
    {
      img: 'assets/img/users/user-05.jpg',
      name: 'Richard',
    },
    {
      img: 'assets/img/users/user-03.jpg',
      name: 'Freda',
    },
  ];
  public horizontalSidebar: MainMenu[] = [
    {
      title: 'Main',
      showAsTab: false,
      separateRoute: false,
      menu: [
        {
          menuValue: 'Dashboard',
          hasSubRouteTwo: true,
          showSubRoute: false,
          icon: 'layout-2',
          base: 'dashboard',
          subMenus: [
            {
              menuValue: 'Deals Dashboard',
              route: routes.dealsDashboard,
              base: 'deals-dashboard',
              customSubmenuTwo: false,
            },
            {
              menuValue: 'Leads Dashboard',
              route: routes.leadsDashboard,
              base: 'lead-dashboard',
              customSubmenuTwo: false,
            },
            {
              menuValue: 'Project Dashboard',
              route: routes.projectDashboard,
              base: 'project-dashboard',
              customSubmenuTwo: false,
            },
            {
              menuValue: 'Super Admin',
              customSubmenuTwo: true,
              hasSubRoute: true,
              showSubRoute: false,
              base: 'super-admin',
              subMenusTwo: [
                {
                  menuValue: 'Dashboard',
                  route: routes.superAdminDash,
                  base: 'super-admin-dashboard',
                  hasSubRoute: false,
                  showSubRoute: false,
                },
                {
                  menuValue: 'Companies',
                  route: routes.superAdminCompanies,
                  base: 'companies',
                  hasSubRoute: false,
                  showSubRoute: false,
                },
                {
                  menuValue: 'Subscriptions',
                  route: routes.superAdminSubscriptions,
                  base: 'subscriptions',
                  hasSubRoute: false,
                  showSubRoute: false,
                },
                {
                  menuValue: 'Packages',
                  route: routes.superAdminPackages,
                  base: 'packages',
                  base2: 'packages-grid',

                },
                {
                  menuValue: 'Domain',
                  route: routes.superAdminDomain,
                  base: 'domain',
                  hasSubRoute: false,
                  showSubRoute: false,
                },
                {
                  menuValue: 'Purchase Transaction',
                  route: routes.superAdminPurchaseTransaction,
                  base: 'purchase-transaction',
                  hasSubRoute: false,
                  showSubRoute: false,
                },
              ],
            }
          ],
        },
        {
          menuValue: 'Application',
          hasSubRouteTwo: true,
          showSubRoute: false,
          icon: 'brand-airtable',
          base: 'application',
          subMenus: [
            {
              menuValue: 'Chat',
              route: routes.chat,
              base: 'chats',
              customSubmenuTwo: false,
            },
            {
              menuValue: 'Calls',
              customSubmenuTwo: true,
              hasSubRoute: true,
              showSubRoute: false,
              route: routes.calendar,
              base: 'calls',
              subMenusTwo: [
                {
                  menuValue: 'Audio Call',
                  route: routes.audioCall,
                  hasSubRoute: false,
                  showSubRoute: false,
                  base: 'voice-call',
                },
                {
                  menuValue: 'Video Call',
                  route: routes.videoCall,
                  hasSubRoute: false,
                  showSubRoute: false,
                  base: 'video-call',
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
              route: routes.toDo,
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
              route: routes.socialFeed,
              customSubmenuTwo: false,
              base: 'social-feed',
            },
            {
              menuValue: 'File Manager',
              hasSubRoute: true,
              showSubRoute: false,
              // route: routes.filemanager,
              customSubmenuTwo: false,
              base: 'file-manager',
            },
            {
              menuValue: 'Kanban',
              hasSubRoute: true,
              showSubRoute: false,
              route: routes.kanban,
              customSubmenuTwo: false,
              base: 'kanban',
            },
            {
              menuValue: 'Invoices',
              hasSubRoute: true,
              showSubRoute: false,
              route: routes.invoice,
              customSubmenuTwo: false,
              base: 'invoices',
            },
          ],
        },
        {
          menuValue: 'Layouts',
          hasSubRouteTwo: true,
          showSubRoute: false,
          icon: 'layout-board-split',
          base: 'Layouts',
          subMenus: [
            {
              menuValue: 'Mini',
              route: routes.Mini,
              base: 'layout-mini',
              customSubmenuTwo: false,
            },
            {
              menuValue: 'Horizontal Single',
              route: routes.HorizontalSingle,
              base: 'layout-horizontal-single',
              customSubmenuTwo: false,
            },
            {
              menuValue: 'Without Header',
              route: routes.WithoutHeader,
              base: 'layout-without-header',
              customSubmenuTwo: false,
            },
            {
              menuValue: 'RTL',
              route: routes.RTL,
              base: 'layout-rtl',
              customSubmenuTwo: false,
            },
            {
              menuValue: 'Detached',
              route: routes.Detached,
              base: 'layout-detached',
              customSubmenuTwo: false,
            },
            {
              menuValue: 'Dark',
              route: routes.Dark,
              base: 'layout-dark',
              customSubmenuTwo: false,
            },
          ],
        },
        {
          menuValue: 'Crm',
          hasSubRouteTwo: true,
          showSubRoute: false,
          icon: 'user-up',
          subMenus: [
                {
                  menuValue: 'Contacts',
                  route: routes.contactGrid,
                  base: 'contact',
                  customSubmenuTwo: false,
                },
                {
                  menuValue: 'Companies',
                  route: routes.companiesGrid,
                  base: 'company',
                  customSubmenuTwo: false,
                },
                {
                  menuValue: 'Deals',
                  route: routes.dealsList,
                  base: 'deals',
                  customSubmenuTwo: false,
                },
                {
                  menuValue: 'Leads',
                  route: routes.leadsList,
                  base: 'leads',
                  customSubmenuTwo: false,
                },

                {
                  menuValue: ' Pipeline',
                  route: routes.pipelineList,
                  base: 'pipeline',
                  customSubmenuTwo: false,
                },
                {
                  menuValue: ' Compaign',
                  route: routes.compaignList,
                  base: 'compaign',
                  customSubmenuTwo: false,
                },
                {
                  menuValue: ' Projects',
                  route: routes.projectLists,
                  base: 'projects',
                  customSubmenuTwo: false,
                },
                {
                  menuValue: ' Tasks',
                  route: routes.allTasks,
                  base: 'tasks',
                  customSubmenuTwo: false,
                },
                {
                  menuValue: ' Proposals',
                  route: routes.proposalsList,
                  base: 'proposals',
                  customSubmenuTwo: false,
                },
                {
                  menuValue: ' Contracts',
                  route: routes.contractList,
                  base: 'contracts',
                  customSubmenuTwo: false,
                },
                {
                  menuValue: ' Estimations',
                  route: routes.estimationList,
                  base: 'estimations',
                  customSubmenuTwo: false,
                },
                {
                  menuValue: ' Invoices',
                  route: routes.invoiceList,
                  base: 'invoices',
                  customSubmenuTwo: false,
                },
                {
                  menuValue: ' Payments',
                  route: routes.paymentsList,
                  base: 'payments',
                  customSubmenuTwo: false,
                },
                {
                  menuValue: 'Analytics',
                  route: routes.analyticsList,
                  base: 'analytics',
                  customSubmenuTwo: false,
                },
                {
                  menuValue: 'Activities',
                  route: routes.activitiesList,
                  base: 'activities',
                  customSubmenuTwo: false,
                },
                {
                  menuValue: 'Crm Settings',
                  customSubmenuTwo: true,
                  hasSubRoute: true,
                  showSubRoute: false,
                  route: routes.calendar,
                  base: 'calls',
                  subMenusTwo: [
                    {
                      menuValue: 'Sources',
                      route: routes.source,
                      hasSubRoute: false,
                      showSubRoute: false,
                      base: 'sources',
                    },
                    {
                      menuValue: 'Lost Reason',
                      route: routes.LostReason,
                      hasSubRoute: false,
                      showSubRoute: false,
                      base: 'lost-reason',
                    },
                    {
                      menuValue: 'Contact Stage',
                      route: routes.contactStage,
                      hasSubRoute: false,
                      showSubRoute: false,
                      base: 'contact-stage',
                    },
                    {
                      menuValue: 'Industry',
                      route: routes.industry,
                      hasSubRoute: false,
                      showSubRoute: false,
                      base: 'industry',
                    },
                    {
                      menuValue: 'Calls',
                      route: routes.calls,
                      hasSubRoute: false,
                      showSubRoute: false,
                      base: 'calls',
                    },
                  ],
                },
              ],
            
        },
        {
          menuValue: 'Reports',
          hasSubRouteTwo: true,
          showSubRoute: false,
          icon: 'file-invoice',
          base: 'reports',
          subMenus: [
            {
              menuValue: 'Lead Reports',
              route: routes.leadReport,
              customSubmenuTwo: false,
            },
            {
              menuValue: 'Deals Reports',
              route: routes.dealReport,
              base: 'lead-dashboard',
              customSubmenuTwo: false,
            },
            {
              menuValue: 'Contact Reports',
              route: routes.contactReport,
              base: 'project-dashboard',
              customSubmenuTwo: false,
            },
            {
              menuValue: 'Company Reports',
              route: routes.companiesReports,
              base: 'project-dashboard',
              customSubmenuTwo: false,
            },
            {
              menuValue: 'Project Reports',
              route: routes.projectReports,
              base: 'project-dashboard',
              customSubmenuTwo: false,
            },
            {
              menuValue: 'Task Reports',
              route: routes.taskReport,
              base: 'project-dashboard',
              customSubmenuTwo: false,
            },
          ],
        },
        {
          menuValue: 'Pages',
          hasSubRouteTwo: true,
          showSubRoute: false,
          icon: 'page-break',
          base: 'jobs',
          base2: 'candidates',
          base3: 'refferals',
          base4: 'sales',
          base5: 'accounting',
          base6: 'payroll',
          base7: 'assets',
          base8: 'support',
          base9: 'user-management',
          base10: 'reports',
          subMenus: [
            {
              menuValue: 'Manage Users',
              route: routes.manageUsers,
              hasSubRoute: false,
              showSubRoute: false,
              customSubmenuTwo: false,
            },
            {
              menuValue: 'Roles & Permissions',
              route: routes.rolesPermissions,
              hasSubRoute: false,
              showSubRoute: false,
              customSubmenuTwo: false,
            },
            {
              menuValue: 'Delete Request',
              route: routes.deleteRequest,
              hasSubRoute: false,
              showSubRoute: false,
              customSubmenuTwo: false,
            },
            {
              menuValue: 'Membership',
              base: 'membership',
              customSubmenuTwo: true,
              subMenusTwo: [
                {
                  menuValue: 'Membership Plans',
                  hasSubRoute: false,
                  showSubRoute: false,
                  route: routes.membershipPlans,
                },
                {
                  menuValue: 'Membership Addons',
                  hasSubRoute: false,
                  showSubRoute: false,
                  route: routes.membershipAddons,
                },
                {
                  menuValue: 'Transactions',
                  hasSubRoute: false,
                  showSubRoute: false,
                  route: routes.membershipTransactions,
                },
              ],
            },
            {
              menuValue: 'Location',
              base: 'location',
              customSubmenuTwo: true,
              subMenusTwo: [
                {
                  menuValue: 'Countries',
                  route: routes.countries,
                },
                {
                  menuValue: 'States',
                   route: routes.states,
                },
                {
                  menuValue: 'Cities',
                  route: routes.cities,
                },
              ],
            },
            {
              menuValue: 'Testimonials',
              base: 'testimonials',
              route: routes.testimonials,
              hasSubRoute: false,
              showSubRoute: false,
              customSubmenuTwo:false,
            },
            {
              menuValue: 'FAQ',
              base: 'faq',
              route: routes.faq,
              hasSubRoute: false,
              showSubRoute: false,
              customSubmenuTwo:false,
            },
            {
              menuValue: 'Contact Messages',
              route: routes.contactMessage,
              hasSubRoute: false,
              showSubRoute: false,
              base: 'contact-messages',
              customSubmenuTwo:false,
            },
            {
              menuValue: 'Tickets',
              route: routes.tickets,
              hasSubRoute: false,
              showSubRoute: false,
              base: 'tickets',
              customSubmenuTwo:false,
            },
            {
              menuValue: 'Authentication',
              base: 'authentication',
              customSubmenuTwo: true,
              subMenusTwo: [
                {
                  menuValue: 'Login',
                  route: routes.login,
                },
                {
                  menuValue: 'Register',
                  route: routes.register,
                },
                {
                  menuValue: 'Forgot Password',
                  route: routes.forgotPassword,
                },
                {
                  menuValue: 'Reset Password',
                  route: routes.resetPasseword,
                },
                {
                  menuValue: 'Email Verification',
                  route: routes.emailVerification,
                },
                {
                  menuValue: '2 Step Verification',
                  route: routes.twoStepVerfication,
                },
                {
                  menuValue: 'Lock Screen',
                  route: routes.lockScreen,
                  hasSubRoute: false,
                  showSubRoute: false,
                },
              ],
            },
            {
              menuValue: 'Error Pages',
              base: 'error-pages',
              customSubmenuTwo: true,
              subMenusTwo: [
                {
                  menuValue: '404 Error',
                  route: routes.error404,
                  hasSubRoute: false,
                  showSubRoute: false,
                },
                {
                  menuValue: '500 Error',
                  route: routes.error500,
                  hasSubRoute: false,
                  showSubRoute: false,
                },
              ],
            },
            {
              menuValue: 'Blank Page',
              route: routes.blankPage,
              hasSubRoute: false,
              showSubRoute: false,
              customSubmenuTwo:false,
            },
            {
              menuValue: 'Coming Soon',
              route: routes.comingSoon,
              hasSubRoute: false,
              showSubRoute: false,
              customSubmenuTwo:false,
            },
            {
              menuValue: 'Under Maintenance',
              route: routes.underMaintenance,
              hasSubRoute: false,
              showSubRoute: false,
              customSubmenuTwo:false,
            },
            {
              menuValue: 'Base UI',
              base: 'base-ui',
              customSubmenuTwo: true,
              subMenusTwo: [
                {
                  menuValue: 'Alerts',
                  route: routes.uiAlerts,
                  hasSubRoute: false,
                  showSubRoute: false,
                },
                {
                  menuValue: 'Accordion',
                  route: routes.uiAccordion,
                  hasSubRoute: false,
                  showSubRoute: false,
                },
                {
                  menuValue: 'Avatar',
                  route: routes.uiAvatar,
                  hasSubRoute: false,
                  showSubRoute: false,
                },
                {
                  menuValue: 'Badges',
                  route: routes.uiBadges,
                  hasSubRoute: false,
                  showSubRoute: false,
                },
                {
                  menuValue: 'Border',
                  route: routes.uiBorders,
                  hasSubRoute: false,
                  showSubRoute: false,
                },
                {
                  menuValue: 'Buttons',
                  route: routes.uiButtons,
                  hasSubRoute: false,
                  showSubRoute: false,
                },
                {
                  menuValue: 'Button Group',
                  route: routes.uiButtonsGroup,
                  hasSubRoute: false,
                  showSubRoute: false,
                },
                {
                  menuValue: 'Breadcrumb',
                  route: routes.uiBreadcrumb,
                  hasSubRoute: false,
                  showSubRoute: false,
                },
                {
                  menuValue: 'Card',
                  route: routes.uiCards,
                  hasSubRoute: false,
                  showSubRoute: false,
                },
                {
                  menuValue: 'Carousel',
                  route: routes.uiCarousel,
                  hasSubRoute: false,
                  showSubRoute: false,
                },
                {
                  menuValue: 'Colors',
                  route: routes.uiColors,
                  hasSubRoute: false,
                  showSubRoute: false,
                },
                {
                  menuValue: 'Dropdowns',
                  route: routes.uiDropdowns,
                  hasSubRoute: false,
                  showSubRoute: false,
                },
                {
                  menuValue: 'Grid',
                  route: routes.uiGrid,
                  hasSubRoute: false,
                  showSubRoute: false,
                },
                {
                  menuValue: 'Images',
                  route: routes.uiImages,
                  hasSubRoute: false,
                  showSubRoute: false,
                },
                {
                  menuValue: 'Lightbox',
                  route: routes.uiLightbox,
                  hasSubRoute: false,
                  showSubRoute: false,
                },
                {
                  menuValue: 'Media',
                  route: routes.uiMedia,
                  hasSubRoute: false,
                  showSubRoute: false,
                },
                {
                  menuValue: 'Modals',
                  route: routes.uiModals,
                  hasSubRoute: false,
                  showSubRoute: false,
                },
                {
                  menuValue: 'Offcanvas',
                  route: routes.uiOffcanvas,
                  hasSubRoute: false,
                  showSubRoute: false,
                },
                {
                  menuValue: 'Pagination',
                  route: routes.uiPagination,
                  hasSubRoute: false,
                  showSubRoute: false,
                },
                {
                  menuValue: 'Popovers',
                  route: routes.uiPopovers,
                  hasSubRoute: false,
                  showSubRoute: false,
                },
                {
                  menuValue: 'Progress',
                  route: routes.uiProgress,
                  hasSubRoute: false,
                  showSubRoute: false,
                },
                {
                  menuValue: 'Placeholders',
                  route: routes.uiPlaceholders,
                  hasSubRoute: false,
                  showSubRoute: false,
                },
                {
                  menuValue: 'Range Slider',
                  route: routes.uiRangeSlider,
                  hasSubRoute: false,
                  showSubRoute: false,
                },
                {
                  menuValue: 'Spinner',
                  route: routes.uiSpinner,
                  hasSubRoute: false,
                  showSubRoute: false,
                },
                {
                  menuValue: 'Sweet Alerts',
                  route: routes.uiSweetAlerts,
                  hasSubRoute: false,
                  showSubRoute: false,
                },
                {
                  menuValue: 'Tabs',
                  route: routes.uiNavTabs,
                  hasSubRoute: false,
                  showSubRoute: false,
                },
                {
                  menuValue: 'Toasts',
                  route: routes.uiToasts,
                  hasSubRoute: false,
                  showSubRoute: false,
                },
                {
                  menuValue: 'Tooltips',
                  route: routes.uiTooltips,
                  hasSubRoute: false,
                  showSubRoute: false,
                },
                {
                  menuValue: 'Typography',
                  route: routes.uiTypography,
                  hasSubRoute: false,
                  showSubRoute: false,
                },
                {
                  menuValue: 'Video',
                  route: routes.uiVideo,
                  hasSubRoute: false,
                  showSubRoute: false,
                },
                {
                  menuValue: 'Sortable',
                  route: routes.uiSortable,
                  hasSubRoute: false,
                  showSubRoute: false,
                },
              ],
            },
            {
              menuValue: 'Advanced UI',
              base: 'advanced-ui',
              customSubmenuTwo: true,
              subMenusTwo: [
                {
                  menuValue: 'Ribbon',
                  route: routes.ribbon,
                  hasSubRoute: false,
                  showSubRoute: false,
                },
                {
                  menuValue: 'Clipboard',
                  route: routes.clipboard,
                  hasSubRoute: false,
                  showSubRoute: false,
                },
                {
                  menuValue: 'Drag & Drop',
                  route: routes.dragDrop,
                  hasSubRoute: false,
                  showSubRoute: false,
                },
                {
                  menuValue: 'Rating',
                  route: routes.rating,
                  hasSubRoute: false,
                  showSubRoute: false,
                },
                {
                  menuValue: 'Text Editor',
                  route: routes.textEditor,
                  hasSubRoute: false,
                  showSubRoute: false,
                },
                {
                  menuValue: 'Counter',
                  route: routes.counter,
                  hasSubRoute: false,
                  showSubRoute: false,
                },
                {
                  menuValue: 'Scrollbar',
                  route: routes.scrollbar,
                  hasSubRoute: false,
                  showSubRoute: false,
                },
    
                {
                  menuValue: 'Timeline',
                  route: routes.timeline,
                  hasSubRoute: false,
                  showSubRoute: false,
                },
              ],
            },
            {
              menuValue: 'Charts',
              base: 'charts',
              customSubmenuTwo: true,
              subMenusTwo: [
                {
                  menuValue: 'Apex Charts',
                  route: routes.chartApex,
                  hasSubRoute: false,
                  showSubRoute: false,
                },
                {
                  menuValue: 'Ng2 Charts',
                  hasSubRoute: false,
                  showSubRoute: false,
                  route: routes.chartNg2,
                },
                {
                  menuValue: 'Prime NG Charts',
                  hasSubRoute: false,
                  showSubRoute: false,
                  route: routes.chartPrime,
                },
              ],
            },
            {
              menuValue: 'Icons',
              base: 'icons',
              customSubmenuTwo: true,
              subMenusTwo: [
                {
                  menuValue: 'Fontawesome Icons',
                  route: routes.iconFontAwesome,
                  hasSubRoute: false,
                  showSubRoute: false,
                },
                {
                  menuValue: 'Feather Icons',
                  route: routes.iconFeather,
                  hasSubRoute: false,
                  showSubRoute: false,
                },
                {
                  menuValue: 'Ionic Icons',
                  route: routes.iconIonic,
                  hasSubRoute: false,
                  showSubRoute: false,
                },
                {
                  menuValue: 'Material Icons',
                  route: routes.iconMaterial,
                  hasSubRoute: false,
                  showSubRoute: false,
                },
                {
                  menuValue: 'Pe7 Icons',
                  route: routes.iconPe7,
                  hasSubRoute: false,
                  showSubRoute: false,
                },
                {
                  menuValue: 'Simpleline Icons',
                  route: routes.iconSimpleline,
                  hasSubRoute: false,
                  showSubRoute: false,
                },
                {
                  menuValue: 'Themify Icons',
                  route: routes.iconThemify,
                  hasSubRoute: false,
                  showSubRoute: false,
                },
                {
                  menuValue: 'Weather Icons',
                  route: routes.iconWeather,
                  hasSubRoute: false,
                  showSubRoute: false,
                },
                {
                  menuValue: 'Typicon Icons',
                  route: routes.iconTypicon,
                  hasSubRoute: false,
                  showSubRoute: false,
                },
                {
                  menuValue: 'Flag Icons',
                  route: routes.iconFlag,
                  hasSubRoute: false,
                  showSubRoute: false,
                },
                {
                  menuValue: 'Bootstrap Icons',
                  route: routes.bootstrap,
                  hasSubRoute: false,
                  showSubRoute: false,
                },
                {
                  menuValue: 'Tabler Icons',
                  route: routes.tabler,
                  hasSubRoute: false,
                  showSubRoute: false,
                },
                {
                  menuValue: 'Remix Icons',
                  route: routes.remix,
                  hasSubRoute: false,
                  showSubRoute: false,
                },
              ],
            },
            {
              menuValue: 'Forms',
              base: 'forms',
              customSubmenuTwo: true,
              subMenusTwo: [
                
                    {
                      menuValue: 'Basic Inputs',
                      route: routes.formBasicInputs,
                      hasSubRoute: false,
                      showSubRoute: false,
                    },
                    {
                      menuValue: 'Checkbox & Radios',
                      route: routes.formCheckboxRadios,
                      hasSubRoute: false,
                      showSubRoute: false,
                    },
                    {
                      menuValue: 'Input Groups',
                      route: routes.formInputsGroups,
                      hasSubRoute: false,
                      showSubRoute: false,
                    },
                    {
                      menuValue: 'Grid & Gutters',
                      route: routes.formGridGutters,
                      hasSubRoute: false,
                      showSubRoute: false,
                    },
                    {
                      menuValue: 'Form Select',
                      route: routes.formSelect,
                      hasSubRoute: false,
                      showSubRoute: false,
                    },
                    {
                      menuValue: 'Input Masks',
                      route: routes.formMask,
                      hasSubRoute: false,
                      showSubRoute: false,
                    },
                    {
                      menuValue: 'File Uploads',
                      route: routes.formFileUpload,
                      hasSubRoute: false,
                      showSubRoute: false,
                    },
                    {
                      menuValue: 'Horizontal Form',
                      route: routes.formHorizontal,
                      hasSubRoute: false,
                      showSubRoute: false,
                    },
                    {
                      menuValue: 'Vertical Form',
                      route: routes.formVertical,
                      hasSubRoute: false,
                      showSubRoute: false,
                    },
                    {
                      menuValue: 'Floating Labels',
                      route: routes.formFloatingLabels,
                      hasSubRoute: false,
                      showSubRoute: false,
                    },
                {
                  menuValue: 'Form Validation',
                  route: routes.formValidation,
                  hasSubRoute: false,
                  showSubRoute: false,
                },
                {
                  menuValue: 'Mat Select',
                  route: routes.formSelect2,
                  hasSubRoute: false,
                  showSubRoute: false,
                },
                {
                  menuValue: 'Form Wizard',
                  route: routes.formWizard,
                  hasSubRoute: false,
                  showSubRoute: false,
                },
                {
                  menuValue: 'Form Pickers',
                  route: routes.formPickers,
                  hasSubRoute: false,
                  showSubRoute: false,
                },
              ],
            },
            {
              menuValue: 'Tables',
              base: 'table',
              customSubmenuTwo: true,
              subMenusTwo: [
                {
                  menuValue: 'Basic Tables',
                  route: routes.basicTable,
                  hasSubRoute: false,
                  showSubRoute: false,
                },
                {
                  menuValue: 'Data Table',
                  route: routes.dataTable,
                  hasSubRoute: false,
                  showSubRoute: false,
                },
              ],
            },
            {
              menuValue: 'Maps',
              base: 'maps',
              customSubmenuTwo: true,
              subMenusTwo: [
                {
                  menuValue: 'Leaflets',
                  route: routes.leaflet,
                  base: 'leaflets',
                },
              ],
            },
            {
              menuValue: 'Documentation',
              hasSubRoute: false,
              showSubRoute: false,
              customSubmenuTwo: false,
            },
            {
              menuValue: 'Changelog v2.1.8',
              hasSubRoute: false,
              showSubRoute: false,
              customSubmenuTwo: false,
            },
            
          ],
          
        },
        {
          menuValue: 'Settings',
          hasSubRouteTwo: true,
          showSubRoute: false,
          icon: 'settings-cog',
          base: 'settings',
          subMenus: [
            {
              menuValue: 'General Settings',
              customSubmenuTwo: true,
              base: 'general-settings',
              subMenusTwo: [
                {
                  menuValue: 'Profile',
                  route: routes.generalSettings,
                  base: 'profile-settings',
                  hasSubRoute: false,
                  showSubRoute: false,
                },
                {
                  menuValue: 'Security',
                  route: routes.securitySettings,
                  base: 'security-settings',
                  hasSubRoute: false,
                  showSubRoute: false,
                },
                {
                  menuValue: 'Notifications',
                  route: routes.settingsNotification,
                  base: 'notification-settings',
                  hasSubRoute: false,
                  showSubRoute: false,
                },
                {
                  menuValue: 'Connected Apps',
                  route: routes.connectedApps,
                  base: 'connected-apps',
                  hasSubRoute: false,
                  showSubRoute: false,
                },
              ],
            },
            {
              menuValue: 'Website Settings',
              customSubmenuTwo: true,
              base: 'website-settings',
              subMenusTwo: [
                {
                  menuValue: 'Company Settings',
                  route: routes.companySettings,
                  base: 'bussiness-settings',
                },
                {
                  menuValue: 'Localization',
                  route: routes.localizationSettings,
                  base: 'localization-settings',
                },
                {
                  menuValue: 'Prefixes',
                  route: routes.prefixes,
                  base: 'prefixes',
                },
                {
                  menuValue: 'Preferences',
                  route: routes.preference,
                  base: 'preferences',
                },
                {
                  menuValue: 'Appearance',
                  route: routes.appearance,
                  base: 'appearance',
                },
                {
                  menuValue: 'Language',
                  route: routes.languageSettings,
                  base: 'language',
                  base2: 'add-language',
                },
              ],
            },
            {
              menuValue: 'App Settings',
              customSubmenuTwo: true,
              base: 'app-settings',
              subMenusTwo: [
                {
                  menuValue: 'Invoice Settings',
                  route: routes.invoiceSettings,
                  base: 'invoice-settings',
                },
                {
                  menuValue: 'Printers',
                  route: routes.printerSettings,
                  base: 'printers',
                },
                {
                  menuValue: 'Custom Fields',
                  route: routes.customFields,
                  base: 'custom-fields',
                },
              ],
            },
            {
              menuValue: 'System Settings',
              customSubmenuTwo: true,
              base: 'system-settings',
              subMenusTwo: [
                {
                  menuValue: 'Email Settings',
                  route: routes.emailSettings,
                  base: 'email-settings',
                },
                {
                  menuValue: 'SMS Gateways',
                  route: routes.smsGateway,
                  base: 'sms-gateways',
                },
                {
                  menuValue: 'GDPR Cookies',
                  route: routes.gdprSettings,
                  base: 'gdpr',
                },
              ],
            },
            {
              menuValue: 'Financial Settings',
              customSubmenuTwo: true,
              base: 'financial-settings',
              subMenusTwo: [
                {
                  menuValue: 'Payment Gateways',
                  route: routes.paymentGatewaySettings,
                  base: 'payment-gateways',
                },
                {
                  menuValue: 'Bank Accounts',
                  route: routes.bankAccounts,
                  base: 'bank-accounts',
                },
                {
                  menuValue: 'Tax Rate',
                  route: routes.taxRates,
                  base: 'tax-rates',
                },
                {
                  menuValue: 'Currencies',
                  route: routes.currencySettings,
                  base: 'currencies',
                },
              ],
            },
            {
              menuValue: 'Other Settings',
              customSubmenuTwo: true,
              base: 'other-settings',
              subMenusTwo: [
                {
                  menuValue: 'Storage',
                  route: routes.storageSettings,
                  base: 'storage-settings',
                },
                {
                  menuValue: 'Ban IP Address',
                  route: routes.banIpAddress,
                  base: 'ban-ip-address',
                },
              ],
            },
          ],
        },
      ],
    },
  ];

public getSideBarData3: BehaviorSubject<MainMenu[]> = new BehaviorSubject<
  MainMenu[]
>(this.horizontalSidebar);
// public resetData3(): void {
//   this.sideBar.map((res: SideBar) => {
//     res.showAsTab = false;
//     res.menu.map((menus: SideBarMenu) => {
//       menus.showSubRoute = false;
//     });
//   });
  public gettickets(): Observable<apiResultFormat> {
    return this.http.get<apiResultFormat>('assets/json/tickets.json').pipe(
      map((res: apiResultFormat) => {
        return res;
      })
    );
  }
  public getContactMessage(): Observable<apiResultFormat> {
    return this.http
      .get<apiResultFormat>('assets/json/contact-messages.json')
      .pipe(
        map((res: apiResultFormat) => {
          return res;
        })
      );
  }
  public getProposalsList(): Observable<apiResultFormat> {
    return this.http
      .get<apiResultFormat>('assets/json/proposals-list.json')
      .pipe(
        map((res: apiResultFormat) => {
          return res;
        })
      );
  }
  public getProposalsView(): Observable<apiResultFormat> {
    return this.http
      .get<apiResultFormat>('assets/json/proposal-view.json')
      .pipe(
        map((res: apiResultFormat) => {
          return res;
        })
      );
  }
  public getContractList(): Observable<apiResultFormat> {
    return this.http
      .get<apiResultFormat>('assets/json/contract-list.json')
      .pipe(
        map((res: apiResultFormat) => {
          return res;
        })
      );
  }
  public getPaymentList(): Observable<apiResultFormat> {
    return this.http.get<apiResultFormat>('assets/json/payment-list.json').pipe(
      map((res: apiResultFormat) => {
        return res;
      })
    );
  }
  public getEstimationList(): Observable<apiResultFormat> {
    return this.http
      .get<apiResultFormat>('assets/json/estimation-list.json')
      .pipe(
        map((res: apiResultFormat) => {
          return res;
        })
      );
  }
  public getInvoiceList(): Observable<apiResultFormat> {
    return this.http.get<apiResultFormat>('assets/json/invoice-list.json').pipe(
      map((res: apiResultFormat) => {
        return res;
      })
    );
  }
}
