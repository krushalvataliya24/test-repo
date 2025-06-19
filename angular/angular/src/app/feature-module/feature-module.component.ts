
import { Component, OnInit, Renderer2 } from '@angular/core';
import { SidebarService } from '../../shared/sidebar/sidebar.service';
import {
  NavigationStart,
  Router,
  Event as RouterEvent,
  NavigationEnd,
} from '@angular/router';
import { url } from '../../shared/model/sidebar.model';
import { CommonService } from '../../shared/common/common.service';
import { DataService } from '../../shared/data/data.service';
import { SettingsService } from '../../shared/settings/settings.service';
import { Title } from '@angular/platform-browser';
import { ActivatedRoute } from '@angular/router';



@Component({
    selector: 'app-feature-module',
    templateUrl: './feature-module.component.html',
    styleUrl: './feature-module.component.scss',
    standalone: false
})
export class FeatureModuleComponent implements OnInit {
  public miniSidebar = false;
  public expandMenu = false;
  public mobileSidebar = false;
  public sideBarActivePath = false;
  public themeMode = '';
  public navigationColor = '';
  public layoutMode = '';
  public fontColor = '';
  layoutWidth = '1';
  sidebarSize = '1';
  topbarColor='white';
  primaryColor='1';
  selectedColor = '84, 109, 254, 1';
  selectedColor1 = '555, 555, 555, 1';
  horizontalColor='555, 555, 555, 1';
  dthemeColor= '84, 109, 254, 1';
  withoutLayouts:boolean|null = false;
  withoutWrapperPages:boolean|null = false;
  showPreloader = false;
  showPreloaderState = '';
  base = '';
  page = '';
  last = '';
  withoutLayoutArray = ['layout-mini','layout-detached', 'layout-horizontal-single','layout-without-header', 'layout-dark','layout-rtl'];
  withoutWrapperPagesArray = ['login','register', 'two-step-verification','success','under-construction','under-maintenance','coming-soon','lock-screen','error-404','error-500'];
  constructor(
    private Router: Router,
    private sidebar: SidebarService,
    private common: CommonService,
    private data: DataService,
    private settings: SettingsService,
    private renderer: Renderer2,
    private titleService: Title,
    private router: Router,
    private activatedRoute: ActivatedRoute
  ) {
    this.sidebar.toggleMobileSideBar.subscribe((res: string) => {
      if (res == 'true' || res == 'true') {
        this.mobileSidebar = true;
      } else {
        this.mobileSidebar = false;
      }
    });
    this.sidebar.expandSideBar.subscribe((res: boolean) => {
      this.expandMenu = res;
    });
    this.sidebar.sideBarPosition.subscribe((res: string) => {
      if (res == 'true') {
        this.miniSidebar = true;
      } else {
        this.miniSidebar = false;
      }
    });
    this.Router.events.subscribe((data: RouterEvent) => {
      if (data instanceof NavigationStart) {
        this.getRoutes(data);
      }
      if (data instanceof NavigationEnd) {
        localStorage.removeItem('isMobileSidebar');
        this.mobileSidebar = false;
      }
    });
    this.common.base.subscribe((res: string) => {
      this.base = res;
      this.withoutWrapperPages = this.withoutWrapperPagesArray.includes(this.base);
      this.withoutLayouts = this.withoutLayoutArray.includes(this.base);

    });
    this.common.page.subscribe((res: string) => {
      this.page = res;
    });
    this.common.last.subscribe((res: string) => {
      this.last = res;
    });
    this.settings.layoutMode.subscribe((res: string) => {
      this.layoutMode = res;
    });
    this.settings.layoutWidth.subscribe((res: string) => {
      this.layoutWidth = res;
    });
    this.settings.sidebarSize.subscribe((res: string) => {
      this.sidebarSize = res;
    });
    this.settings.sidebarColor2.subscribe((res: string) => {
      this.selectedColor = res;
    });
    this.settings.topbarColor2.subscribe((res: string) => {
      this.topbarColor = res;
    });
    this.settings.topbarColor3.subscribe((res: string) => {
      this.selectedColor1 = res;
    });
    this.settings.topbarColor4.subscribe((res: string) => {
      this.horizontalColor = res;
    });
    this.settings.primaryColor1.subscribe((res: string) => {
      this.dthemeColor = res;
    });

  }

  private getRoutes(data: url): void {
    const splitVal = data.url.split('/');
    this.base = splitVal[1];
    this.page = splitVal[2];
    this.last = splitVal[3];
    this.common.base.next(splitVal[1]);
    this.common.page.next(splitVal[2]);
    this.common.last.next(splitVal[3]);
    if (data.url.split('/')[1] === '404-error') {
      this.sideBarActivePath = true;
    } else {
      this.sideBarActivePath = false;
    }
   
  }
  isCollapsed = false;

  ngOnInit(): void {
    this.data.collapse$.subscribe((collapse: boolean) => {
      this.isCollapsed = collapse;
    });
    this.Router.events.subscribe((event) => {
      if (event instanceof NavigationStart) {
        const url = event.url;
        if (
          url.includes('deals-dashboard') ||
          url.includes('lead-dashboard') ||
          url.includes('project-dashboard')
        ) {
          this.showPreloader = true;
          setTimeout(() => {
            this.showPreloader = false;
          }, 2000);
        }
      }
    });
    
   
  }

 
}
