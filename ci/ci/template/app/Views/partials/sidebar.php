<?php
$uri = new \CodeIgniter\HTTP\URI(current_url(true));
$pages = $uri->getSegments();
$page = $uri->getSegment(count($pages));
?>

<!-- Sidebar -->
<div class="sidebar" id="sidebar">
        <div class="sidebar-inner slimscroll">
                <div id="sidebar-menu" class="sidebar-menu">
                        <ul>
                                <li class="clinicdropdown">
                                        <a href="<?php echo base_url(); ?>profile">
                                                <img src="<?php echo base_url(); ?>assets/img/profiles/avatar-14.jpg" class="img-fluid" alt="Profile">
                                                <div class="user-names">
                                                        <h5>Adrian Davies</h5>
                                                        <h6>Tech Lead</h6>
                                                </div>
                                        </a>
                                </li>
                        </ul>
                        <ul>
                                <li>
                                        <h6 class="submenu-hdr">Main Menu</h6>
                                        <ul>
                                                <li class="submenu">
                                                        <a href="javascript:void(0);" class="<?php echo ($page == 'deals-dashboard' || $page == 'leads-dashboard' || $page == 'project-dashboard') ? 'subdrop active' : ''; ?>">
                                                                <i class="ti ti-layout-2"></i><span>Dashboard</span><span class="menu-arrow"></span>
                                                        </a>
                                                        <ul>
                                                                <li><a class="<?php echo ($page == 'deals-dashboard') ? 'active' : ''; ?>" href="<?php echo base_url(); ?>deals-dashboard">Deals Dashboard</a></li>
                                                                <li><a class="<?php echo ($page == 'leads-dashboard') ? 'active' : ''; ?>" href="<?php echo base_url(); ?>leads-dashboard">Leads Dashboard</a></li>
                                                                <li><a class="<?php echo ($page == 'project-dashboard') ? 'active' : ''; ?>" href="<?php echo base_url(); ?>project-dashboard">Project Dashboard</a></li>
                                                        </ul>
                                                </li>
                                                <li class="submenu">
                                                        <a href="javascript:void(0);" class="<?php echo ($page == 'chat' || $page == 'calendar' || $page == 'email' || $page == 'todo' || $page == 'notes' || $page == 'file-manager' || $page == 'video-call' || $page == 'audio-call' || $page == 'call-history') ? 'subdrop active' : ''; ?>"><i class="ti ti-brand-airtable"></i><span>Application</span><span class="menu-arrow"></span></a>
                                                        <ul>
                                                                <li><a class="<?php echo ($page == 'chat') ? 'active' : ''; ?>" href="<?php echo base_url(); ?>chat">Chat</a></li>
                                                                <li class="submenu submenu-two">
                                                                        <a href="javascript:void(0);" class="<?php echo ($page == 'video-call' || $page == 'audio-call' || $page == 'call-history') ? 'subdrop active' : ''; ?>">Call<span class="menu-arrow inside-submenu"></span></a>
                                                                        <ul>
                                                                                <li><a class="<?php echo ($page == 'video-call') ? 'active' : ''; ?>" href="<?php echo base_url(); ?>video-call">Video Call</a></li>
                                                                                <li><a class="<?php echo ($page == 'audio-call') ? 'active' : ''; ?>" href="<?php echo base_url(); ?>audio-call">Audio Call</a></li>
                                                                                <li><a class="<?php echo ($page == 'call-history') ? 'active' : ''; ?>" href="<?php echo base_url(); ?>call-history">Call History</a></li>
                                                                        </ul>
                                                                </li>
                                                                <li><a class="<?php echo ($page == 'calendar') ? 'active' : ''; ?>" href="<?php echo base_url(); ?>calendar">Calendar</a></li>
                                                                <li><a class="<?php echo ($page == 'email') ? 'active' : ''; ?>" href="<?php echo base_url(); ?>email">Email</a></li>
                                                                <li><a class="<?php echo ($page == 'todo') ? 'active' : ''; ?>" href="<?php echo base_url(); ?>todo">To
                                                                                Do</a></li>
                                                                <li><a class="<?php echo ($page == 'notes') ? 'active' : ''; ?>" href="<?php echo base_url(); ?>notes">Notes</a></li>
                                                                <li><a class="<?php echo ($page == 'file-manager') ? 'active' : ''; ?>" href="<?php echo base_url(); ?>file-manager">File Manager</a></li>
                                                        </ul>
                                                </li>
                                        </ul>
                                </li>
                                <li>
                                        <h6 class="submenu-hdr">CRM</h6>
                                        <ul>
                                                <li>
                                                        <a class="<?php echo ($page == 'contacts' || $page == 'contact-grid' || $page == 'contact-details') ? 'active' : ''; ?>" href="<?php echo base_url(); ?>contacts"><i class="ti ti-user-up"></i><span>Contacts</span></a>
                                                </li>
                                                <li>
                                                        <a class="<?php echo ($page == 'companies' || $page == 'companies-grid' || $page == 'company-details') ? 'active' : ''; ?>" href="<?php echo base_url(); ?>companies"><i class="ti ti-building-community"></i><span>Companies</span></a>
                                                </li>
                                                <li>
                                                        <a class="<?php echo ($page == 'deals' || $page == 'deals-kanban' || $page == 'deals-details') ? 'active' : ''; ?>" href="<?php echo base_url(); ?>deals"><i class="ti ti-medal"></i><span>Deals</span></a>
                                                </li>
                                                <li>
                                                        <a class="<?php echo ($page == 'leads' || $page == 'leads-details' || $page == 'leads-kanban') ? 'active' : ''; ?>" href="<?php echo base_url(); ?>leads"><i class="ti ti-chart-arcs"></i><span>Leads</span></a>
                                                </li>
                                                <li>
                                                        <a class="<?php echo ($page == 'pipeline') ? 'active' : ''; ?>" href="<?php echo base_url(); ?>pipeline"><i class="ti ti-timeline-event-exclamation"></i><span>Pipeline</span></a>
                                                </li>
                                                <li>
                                                        <a class="<?php echo ($page == 'campaign' || $page == 'campaign-complete' || $page == 'campaign-archieve') ? 'active' : ''; ?>" href="<?php echo base_url(); ?>campaign"><i class="ti ti-brand-campaignmonitor"></i><span>Campaign</span></a>
                                                </li>
                                                <li>
                                                        <a class="<?php echo ($page == 'projects' || $page == 'project-details' || $page == 'project-grid') ? 'active' : ''; ?>" href="<?php echo base_url(); ?>projects"><i class="ti ti-atom-2"></i><span>Projects</span></a>
                                                </li>
                                                <li>
                                                        <a class="<?php echo ($page == 'tasks' || $page == 'tasks-completed' || $page == 'tasks-important') ? 'active' : ''; ?>" href="<?php echo base_url(); ?>tasks"><i class="ti ti-list-check"></i><span>Tasks</span></a>
                                                </li>
                                                <li>
                                                        <a class="<?php echo ($page == 'proposals' || $page == 'proposals-grid' || $page == 'proposal-view') ? 'active' : ''; ?>" href="<?php echo base_url(); ?>proposals" class="active"><i class="ti ti-file-star"></i><span>Proposals</span></a>
                                                </li>
                                                <li>
                                                        <a class="<?php echo ($page == 'contracts' || $page == 'contracts-grid') ? 'active' : ''; ?>" href="<?php echo base_url(); ?>contracts"><i class="ti ti-file-check"></i><span>Contracts</span></a>
                                                </li>
                                                <li>
                                                        <a class="<?php echo ($page == 'estimations' || $page == 'estimations-kanban') ? 'active' : ''; ?>" href="<?php echo base_url(); ?>estimations"><i class="ti ti-file-report"></i><span>Estimations</span></a>
                                                </li>
                                                <li>
                                                        <a class="<?php echo ($page == 'invoices' || $page == 'invoice-grid' || $page == 'invoice-settings') ? 'active' : ''; ?>" href="<?php echo base_url(); ?>invoices"><i class="ti ti-file-invoice"></i><span>Invoices</span></a>
                                                </li>
                                                <li>
                                                        <a class="<?php echo ($page == 'payments' || $page == 'payment-gateways') ? 'active' : ''; ?>" href="<?php echo base_url(); ?>payments"><i class="ti ti-report-money"></i><span>Payments</span></a>
                                                </li>
                                                <li>
                                                        <a class="<?php echo ($page == 'analytics') ? 'active' : ''; ?>" href="<?php echo base_url(); ?>analytics"><i class="ti ti-chart-bar"></i><span>Analytics</span></a>
                                                </li>
                                                <li>
                                                        <a class="<?php echo ($page == 'activities' || $page == 'activity-calls' || $page == 'activity-mail' || $page == 'activity-meeting' || $page == 'activity-task') ? 'active' : ''; ?>" href="<?php echo base_url(); ?>activities"><i class="ti ti-bounce-right"></i><span>Activities</span></a>
                                                </li>
                                        </ul>
                                </li>
                                <li>
                                        <h6 class="submenu-hdr">Reports</h6>
                                        <ul>
                                                <li class="submenu">
                                                        <a href="javascript:void(0);" class="<?php echo ($page == 'lead-reports' || $page == 'deal-reports' || $page == 'contact-reports' || $page == 'company-reports' || $page == 'project-reports' || $page == 'task-reports') ? 'subdrop active' : ''; ?>">
                                                                <i class="ti ti-file-invoice"></i><span>Reports</span><span class="menu-arrow"></span>
                                                        </a>
                                                        <ul>
                                                                <li><a class="<?php echo ($page == 'lead-reports') ? 'active' : ''; ?>" href="<?php echo base_url(); ?>lead-reports">Lead Reports</a></li>
                                                                <li><a class="<?php echo ($page == 'deal-reports') ? 'active' : ''; ?>" href="<?php echo base_url(); ?>deal-reports">Deal Reports</a></li>
                                                                <li><a class="<?php echo ($page == 'contact-reports') ? 'active' : ''; ?>" href="<?php echo base_url(); ?>contact-reports">Contact Reports</a></li>
                                                                <li><a class="<?php echo ($page == 'company-reports') ? 'active' : ''; ?>" href="<?php echo base_url(); ?>company-reports">Company Reports</a></li>
                                                                <li><a class="<?php echo ($page == 'project-reports') ? 'active' : ''; ?>" href="<?php echo base_url(); ?>project-reports">Project Reports</a></li>
                                                                <li><a class="<?php echo ($page == 'task-reports') ? 'active' : ''; ?>" href="<?php echo base_url(); ?>task-reports">Task Reports</a></li>
                                                        </ul>
                                                </li>
                                        </ul>
                                </li>
                                <li>
                                        <h6 class="submenu-hdr">CRM Settings</h6>
                                        <ul>
                                                <li><a class="<?php echo ($page == 'sources') ? 'active' : ''; ?>" href="<?php echo base_url(); ?>sources"><i class="ti ti-artboard"></i><span>Sources</span></a></li>
                                                <li><a class="<?php echo ($page == 'lost-reason') ? 'active' : ''; ?>" href="<?php echo base_url(); ?>lost-reason"><i class="ti ti-message-exclamation"></i><span>Lost
                                                                        Reason</span></a></li>
                                                <li><a class="<?php echo ($page == 'contact-stage') ? 'active' : ''; ?>" href="<?php echo base_url(); ?>contact-stage"><i class="ti ti-steam"></i><span>Contact
                                                                        Stage</span></a></li>
                                                <li><a class="<?php echo ($page == 'industry') ? 'active' : ''; ?>" href="<?php echo base_url(); ?>industry"><i class="ti ti-building-factory"></i><span>Industry</span></a></li>
                                                <li><a class="<?php echo ($page == 'calls') ? 'active' : ''; ?>" href="<?php echo base_url(); ?>calls"><i class="ti ti-phone-check"></i><span>Calls</span></a></li>
                                        </ul>
                                </li>
                                <li>
                                        <h6 class="submenu-hdr">User Management</h6>
                                        <ul>
                                                <li><a class="<?php echo ($page == 'manage-users') ? 'active' : ''; ?>" href="<?php echo base_url(); ?>manage-users"><i class="ti ti-users"></i><span>Manage
                                                                        Users</span></a></li>
                                                <li><a class="<?php echo ($page == 'roles-permissions' || $page == 'permission') ? 'active' : ''; ?>" href="<?php echo base_url(); ?>roles-permissions"><i class="ti ti-navigation-cog"></i><span>Roles
                                                                        & Permissions</span></a></li>
                                                <li><a class="<?php echo ($page == 'delete-request') ? 'active' : ''; ?>" href="<?php echo base_url(); ?>delete-request"><i class="ti ti-flag-question"></i><span>Delete
                                                                        Request</span></a></li>
                                        </ul>
                                </li>
                                <li>
                                        <h6 class="submenu-hdr">Membership</h6>
                                        <ul>
                                                <li class="submenu">
                                                        <a href="javascript:void(0);" class="<?php echo ($page == 'membership-plans' || $page == 'membership-addons' || $page == 'membership-transactions') ? 'subdrop active' : ''; ?>">
                                                                <i class="ti ti-file-invoice"></i><span>Membership</span><span class="menu-arrow"></span>
                                                        </a>
                                                        <ul>
                                                                <li><a class="<?php echo ($page == 'membership-plans') ? 'active' : ''; ?>" href="<?php echo base_url(); ?>membership-plans">Membership Plans</a></li>
                                                                <li><a class="<?php echo ($page == 'membership-addons') ? 'active' : ''; ?>" href="<?php echo base_url(); ?>membership-addons">Membership Addons</a></li>
                                                                <li><a class="<?php echo ($page == 'membership-transactions') ? 'active' : ''; ?>" href="<?php echo base_url(); ?>membership-transactions">Transactions</a></li>
                                                        </ul>
                                                </li>
                                        </ul>
                                </li>
                                <li>
                                        <h6 class="submenu-hdr">Content</h6>
                                        <ul>
                                                <li><a class="<?php echo ($page == 'pages') ? 'active' : ''; ?>" href="<?php echo base_url(); ?>pages"><i class="ti ti-page-break"></i><span>Pages</span></a></li>
                                                <li class="submenu">
                                                        <a href="javascript:void(0);" class="<?php echo ($page == 'countries' || $page == 'states' || $page == 'cities') ? 'subdrop active' : ''; ?>">
                                                                <i class="ti ti-map-pin-pin"></i><span>Location</span><span class="menu-arrow"></span>
                                                        </a>
                                                        <ul>
                                                                <li><a class="<?php echo ($page == 'countries') ? 'active' : ''; ?>" href="<?php echo base_url(); ?>countries">Countries</a></li>
                                                                <li><a class="<?php echo ($page == 'states') ? 'active' : ''; ?>" href="<?php echo base_url(); ?>states">States</a></li>
                                                                <li><a class="<?php echo ($page == 'cities') ? 'active' : ''; ?>" href="<?php echo base_url(); ?>cities">Cities</a></li>
                                                        </ul>
                                                </li>
                                                <li><a class="<?php echo ($page == 'testimonials') ? 'active' : ''; ?>" href="<?php echo base_url(); ?>testimonials"><i class="ti ti-quote"></i><span>Testimonials</span></a></li>
                                                <li><a class="<?php echo ($page == 'faq') ? 'active' : ''; ?>" href="<?php echo base_url(); ?>faq"><i class="ti ti-question-mark"></i><span>FAQ</span></a></li>
                                        </ul>
                                </li>
                                <li>
                                        <h6 class="submenu-hdr">Support</h6>
                                        <ul>
                                                <li><a class="<?php echo ($page == 'contact-messages') ? 'active' : ''; ?>" href="<?php echo base_url(); ?>contact-messages"><i class="ti ti-page-break"></i><span>Contact
                                                                        Messages</span></a></li>
                                                <li><a class="<?php echo ($page == 'tickets') ? 'active' : ''; ?>" href="<?php echo base_url(); ?>tickets"><i class="ti ti-ticket"></i><span>Tickets</span></a></li>
                                        </ul>
                                </li>
                                <li>
                                        <h6 class="submenu-hdr">Settings</h6>
                                        <ul>
                                                <li class="submenu">
                                                        <a href="javascript:void(0);" class="<?php echo ($page == 'profile' || $page == 'security' || $page == 'notifications' || $page == 'connected-apps') ? 'subdrop active' : ''; ?>">
                                                                <i class="ti ti-settings-cog"></i><span>General Settings</span><span class="menu-arrow"></span>
                                                        </a>
                                                        <ul>
                                                                <li><a class="<?php echo ($page == 'profile') ? 'active' : ''; ?>" href="<?php echo base_url(); ?>profile">Profile</a></li>
                                                                <li><a class="<?php echo ($page == 'security') ? 'active' : ''; ?>" href="<?php echo base_url(); ?>security">Security</a></li>
                                                                <li><a class="<?php echo ($page == 'notifications') ? 'active' : ''; ?>" href="<?php echo base_url(); ?>notifications">Notifications</a></li>
                                                                <li><a class="<?php echo ($page == 'connected-apps') ? 'active' : ''; ?>" href="<?php echo base_url(); ?>connected-apps">Connected Apps</a></li>
                                                        </ul>
                                                </li>
                                                <li class="submenu">
                                                        <a href="javascript:void(0);" class="<?php echo ($page == 'company-settings' || $page == 'localization' || $page == 'prefixes' || $page == 'preference' || $page == 'appearance' || $page == 'language' ||  $page == 'language-web') ? 'subdrop active' : ''; ?>">
                                                                <i class="ti ti-world-cog"></i><span>Website Settings</span><span class="menu-arrow"></span>
                                                        </a>
                                                        <ul>
                                                                <li><a class="<?php echo ($page == 'company-settings') ? 'active' : ''; ?>" href="<?php echo base_url(); ?>company-settings">Company Settings</a></li>
                                                                <li><a class="<?php echo ($page == 'localization') ? 'active' : ''; ?>" href="<?php echo base_url(); ?>localization">Localization</a></li>
                                                                <li><a class="<?php echo ($page == 'prefixes') ? 'active' : ''; ?>" href="<?php echo base_url(); ?>prefixes">Prefixes</a></li>
                                                                <li><a class="<?php echo ($page == 'preference') ? 'active' : ''; ?>" href="<?php echo base_url(); ?>preference">Preference</a></li>
                                                                <li><a class="<?php echo ($page == 'appearance') ? 'active' : ''; ?>" href="<?php echo base_url(); ?>appearance">Appearance</a></li>
                                                                <li><a class="<?php echo ($page == 'language' || $page == 'language-web') ? 'active' : ''; ?>" href="<?php echo base_url(); ?>language">Language</a></li>
                                                        </ul>
                                                </li>
                                                <li class="submenu">
                                                        <a href="javascript:void(0);" class="<?php echo ($page == 'invoice-settings' || $page == 'printers' || $page == 'custom-fields') ? 'subdrop active' : ''; ?>">
                                                                <i class="ti ti-apps"></i><span>App Settings</span><span class="menu-arrow"></span>
                                                        </a>
                                                        <ul>
                                                                <li><a class="<?php echo ($page == 'invoice-settings') ? 'active' : ''; ?>" href="<?php echo base_url(); ?>invoice-settings">Invoice Settings</a></li>
                                                                <li><a class="<?php echo ($page == 'printers') ? 'active' : ''; ?>" href="<?php echo base_url(); ?>printers">Printers</a></li>
                                                                <li><a class="<?php echo ($page == 'custom-fields') ? 'active' : ''; ?>" href="<?php echo base_url(); ?>custom-fields">Custom Fields</a></li>
                                                        </ul>
                                                </li>
                                                <li class="submenu">
                                                        <a href="javascript:void(0);" class="<?php echo ($page == 'email-settings' || $page == 'sms-gateways' || $page == 'gdpr-cookies') ? 'subdrop active' : ''; ?>">
                                                                <i class="ti ti-device-laptop"></i><span>System Settings</span><span class="menu-arrow"></span>
                                                        </a>
                                                        <ul>
                                                                <li><a class="<?php echo ($page == 'email-settings') ? 'active' : ''; ?>" href="<?php echo base_url(); ?>email-settings">Email Settings</a></li>
                                                                <li><a class="<?php echo ($page == 'sms-gateways') ? 'active' : ''; ?>" href="<?php echo base_url(); ?>sms-gateways">SMS Gateways</a></li>
                                                                <li><a class="<?php echo ($page == 'gdpr-cookies') ? 'active' : ''; ?>" href="<?php echo base_url(); ?>gdpr-cookies">GDPR Cookies</a></li>
                                                        </ul>
                                                </li>
                                                <li class="submenu">
                                                        <a href="javascript:void(0);" class="<?php echo ($page == 'payment-gateways' || $page == 'bank-accounts' || $page == 'tax-rates' || $page == 'currencies') ? 'subdrop active' : ''; ?>">
                                                                <i class="ti ti-moneybag"></i><span>Financial Settings</span><span class="menu-arrow"></span>
                                                        </a>
                                                        <ul>
                                                                <li><a class="<?php echo ($page == 'payment-gateways') ? 'active' : ''; ?>" href="<?php echo base_url(); ?>payment-gateways">Payment Gateways</a></li>
                                                                <li><a class="<?php echo ($page == 'bank-accounts') ? 'active' : ''; ?>" href="<?php echo base_url(); ?>bank-accounts">Bank Accounts</a></li>
                                                                <li><a class="<?php echo ($page == 'tax-rates') ? 'active' : ''; ?>" href="<?php echo base_url(); ?>tax-rates">Tax Rates</a></li>
                                                                <li><a class="<?php echo ($page == 'currencies') ? 'active' : ''; ?>" href="<?php echo base_url(); ?>currencies">Currencies</a></li>
                                                        </ul>
                                                </li>
                                                <li class="submenu">
                                                        <a href="javascript:void(0);" class="<?php echo ($page == 'storage' || $page == 'ban-ip-address') ? 'subdrop active' : ''; ?>">
                                                                <i class="ti ti-flag-cog"></i><span>Other Settings</span><span class="menu-arrow"></span>
                                                        </a>
                                                        <ul>
                                                                <li><a class="<?php echo ($page == 'storage') ? 'active' : ''; ?>" href="<?php echo base_url(); ?>storage">Storage</a></li>
                                                                <li><a class="<?php echo ($page == 'ban-ip-address') ? 'active' : ''; ?>" href="<?php echo base_url(); ?>ban-ip-address">Ban IP Address</a></li>
                                                        </ul>
                                                </li>
                                        </ul>
                                </li>
                                <li>
                                        <h6 class="submenu-hdr">Pages</h6>
                                        <ul>
                                                <li class="submenu">
                                                        <a href="javascript:void(0);" class="<?php echo ($page == 'login' || $page == 'register' || $page == 'forgot-password' || $page == 'reset-password' || $page == 'email-verification' || $page == 'two-step-verification' || $page == 'lock-screen') ? 'subdrop active' : ''; ?>">
                                                                <i class="ti ti-lock-square-rounded"></i><span>Authentication</span><span class="menu-arrow"></span>
                                                        </a>
                                                        <ul>
                                                                <li><a class="<?php echo ($page == 'login') ? 'active' : ''; ?>" href="<?php echo base_url(); ?>login">Login</a></li>
                                                                <li><a class="<?php echo ($page == 'register') ? 'active' : ''; ?>" href="<?php echo base_url(); ?>register">Register</a></li>
                                                                <li><a class="<?php echo ($page == 'forgot-password') ? 'active' : ''; ?>" href="<?php echo base_url(); ?>forgot-password">Forgot Password</a></li>
                                                                <li><a class="<?php echo ($page == 'reset-password') ? 'active' : ''; ?>" href="<?php echo base_url(); ?>reset-password">Reset Password</a></li>
                                                                <li><a class="<?php echo ($page == 'email-verification') ? 'active' : ''; ?>" href="<?php echo base_url(); ?>email-verification">Email Verification</a></li>
                                                                <li><a class="<?php echo ($page == 'two-step-verification') ? 'active' : ''; ?>" href="<?php echo base_url(); ?>two-step-verification">2 Step Verification</a></li>
                                                                <li><a class="<?php echo ($page == 'lock-screen') ? 'active' : ''; ?>" href="<?php echo base_url(); ?>lock-screen">Lock Screen</a></li>
                                                        </ul>
                                                </li>
                                                <li class="submenu">
                                                        <a href="javascript:void(0);" class="<?php echo ($page == 'error-404' || $page == 'error-500') ? 'subdrop active' : ''; ?>">
                                                                <i class="ti ti-error-404"></i><span>Error Pages</span><span class="menu-arrow"></span>
                                                        </a>
                                                        <ul>
                                                                <li><a class="<?php echo ($page == 'error-404') ? 'active' : ''; ?>" href="<?php echo base_url(); ?>error-404">404 Error</a></li>
                                                                <li><a class="<?php echo ($page == 'error-500') ? 'active' : ''; ?>" href="<?php echo base_url(); ?>error-500">500 Error</a></li>
                                                        </ul>
                                                </li>
                                                <li><a class="<?php echo ($page == 'blank-page') ? 'active' : ''; ?>" href="<?php echo base_url(); ?>blank-page"><i class="ti ti-apps"></i><span>Blank Page</span></a>
                                                </li>
                                                <li><a class="<?php echo ($page == 'coming-soon') ? 'active' : ''; ?>" href="<?php echo base_url(); ?>coming-soon"><i class="ti ti-device-laptop"></i><span>Coming
                                                                        Soon</span></a></li>
                                                <li><a class="<?php echo ($page == 'under-maintenance') ? 'active' : ''; ?>" href="<?php echo base_url(); ?>under-maintenance"><i class="ti ti-moneybag"></i><span>Under
                                                                        Maintenance</span></a></li>
                                        </ul>
                                </li>
                                <li>
                                        <h6 class="submenu-hdr">UI Interface</h6>
                                        <ul>
                                                <li class="submenu">
                                                        <a href="javascript:void(0);" class="<?php echo ($page == 'ui-alerts' || $page == 'ui-accordion' || $page == 'ui-avatar' || $page == 'ui-badges' || $page == 'ui-borders'
                                                                                                        || $page == 'ui-buttons' || $page == 'ui-buttons-group' || $page == 'ui-breadcrumb' || $page == 'ui-cards' || $page == 'ui-carousel'
                                                                                                        || $page == 'ui-colors' || $page == 'ui-dropdowns' || $page == 'ui-grid' || $page == 'ui-images' || $page == 'ui-lightbox'
                                                                                                        || $page == 'ui-media' || $page == 'ui-modals' || $page == 'ui-offcanvas' || $page == 'ui-pagination' || $page == 'ui-popovers'
                                                                                                        || $page == 'ui-progress' || $page == 'ui-placeholders' || $page == 'ui-rangeslider' || $page == 'ui-spinner'
                                                                                                        || $page == 'ui-sweetalerts' || $page == 'ui-nav-tabs' || $page == 'ui-toasts' || $page == 'ui-tooltips'
                                                                                                        || $page == 'ui-typography' || $page == 'ui-video'
                                                                                                )
                                                                                                        ? 'subdrop active'
                                                                                                        : ''; ?>">
                                                                <i class="ti ti-adjustments-check"></i><span>Base UI</span><span class="menu-arrow"></span>
                                                        </a>
                                                        <ul>
                                                                <li><a class="<?php echo ($page == 'ui-alerts') ? 'active' : ''; ?>" href="<?php echo base_url(); ?>ui-alerts">Alerts</a></li>
                                                                <li><a class="<?php echo ($page == 'ui-accordion') ? 'active' : ''; ?>" href="<?php echo base_url(); ?>ui-accordion">Accordion</a></li>
                                                                <li><a class="<?php echo ($page == 'ui-avatar') ? 'active' : ''; ?>" href="<?php echo base_url(); ?>ui-avatar">Avatar</a></li>
                                                                <li><a class="<?php echo ($page == 'ui-badges') ? 'active' : ''; ?>" href="<?php echo base_url(); ?>ui-badges">Badges</a></li>
                                                                <li><a class="<?php echo ($page == 'ui-borders') ? 'active' : ''; ?>" href="<?php echo base_url(); ?>ui-borders">Border</a></li>
                                                                <li><a class="<?php echo ($page == 'ui-buttons') ? 'active' : ''; ?>" href="<?php echo base_url(); ?>ui-buttons">Buttons</a></li>
                                                                <li><a class="<?php echo ($page == 'ui-buttons-group') ? 'active' : ''; ?>" href="<?php echo base_url(); ?>ui-buttons-group">Button Group</a></li>
                                                                <li><a class="<?php echo ($page == 'ui-breadcrumb') ? 'active' : ''; ?>" href="<?php echo base_url(); ?>ui-breadcrumb">Breadcrumb</a></li>
                                                                <li><a class="<?php echo ($page == 'ui-cards') ? 'active' : ''; ?>" href="<?php echo base_url(); ?>ui-cards">Card</a></li>
                                                                <li><a class="<?php echo ($page == 'ui-carousel') ? 'active' : ''; ?>" href="<?php echo base_url(); ?>ui-carousel">Carousel</a></li>
                                                                <li><a class="<?php echo ($page == 'ui-colors') ? 'active' : ''; ?>" href="<?php echo base_url(); ?>ui-colors">Colors</a></li>
                                                                <li><a class="<?php echo ($page == 'ui-dropdowns') ? 'active' : ''; ?>" href="<?php echo base_url(); ?>ui-dropdowns">Dropdowns</a></li>
                                                                <li><a class="<?php echo ($page == 'ui-grid') ? 'active' : ''; ?>" href="<?php echo base_url(); ?>ui-grid">Grid</a></li>
                                                                <li><a class="<?php echo ($page == 'ui-images') ? 'active' : ''; ?>" href="<?php echo base_url(); ?>ui-images">Images</a></li>
                                                                <li><a class="<?php echo ($page == 'ui-lightbox') ? 'active' : ''; ?>" href="<?php echo base_url(); ?>ui-lightbox">Lightbox</a></li>
                                                                <li><a class="<?php echo ($page == 'ui-media') ? 'active' : ''; ?>" href="<?php echo base_url(); ?>ui-media">Media</a></li>
                                                                <li><a class="<?php echo ($page == 'ui-modals') ? 'active' : ''; ?>" href="<?php echo base_url(); ?>ui-modals">Modals</a></li>
                                                                <li><a class="<?php echo ($page == 'ui-offcanvas') ? 'active' : ''; ?>" href="<?php echo base_url(); ?>ui-offcanvas">Offcanvas</a></li>
                                                                <li><a class="<?php echo ($page == 'ui-pagination') ? 'active' : ''; ?>" href="<?php echo base_url(); ?>ui-pagination">Pagination</a></li>
                                                                <li><a class="<?php echo ($page == 'ui-popovers') ? 'active' : ''; ?>" href="<?php echo base_url(); ?>ui-popovers">Popovers</a></li>
                                                                <li><a class="<?php echo ($page == 'ui-progress') ? 'active' : ''; ?>" href="<?php echo base_url(); ?>ui-progress">Progress</a></li>
                                                                <li><a class="<?php echo ($page == 'ui-placeholders') ? 'active' : ''; ?>" href="<?php echo base_url(); ?>ui-placeholders">Placeholders</a></li>
                                                                <li><a class="<?php echo ($page == 'ui-rangeslider') ? 'active' : ''; ?>" href="<?php echo base_url(); ?>ui-rangeslider">Range Slider</a></li>
                                                                <li><a class="<?php echo ($page == 'ui-spinner') ? 'active' : ''; ?>" href="<?php echo base_url(); ?>ui-spinner">Spinner</a></li>
                                                                <li><a class="<?php echo ($page == 'ui-sweetalerts') ? 'active' : ''; ?>" href="<?php echo base_url(); ?>ui-sweetalerts">Sweet Alerts</a></li>
                                                                <li><a class="<?php echo ($page == 'ui-nav-tabs') ? 'active' : ''; ?>" href="<?php echo base_url(); ?>ui-nav-tabs">Tabs</a></li>
                                                                <li><a class="<?php echo ($page == 'ui-toasts') ? 'active' : ''; ?>" href="<?php echo base_url(); ?>ui-toasts">Toasts</a></li>
                                                                <li><a class="<?php echo ($page == 'ui-tooltips') ? 'active' : ''; ?>" href="<?php echo base_url(); ?>ui-tooltips">Tooltips</a></li>
                                                                <li><a class="<?php echo ($page == 'ui-typography') ? 'active' : ''; ?>" href="<?php echo base_url(); ?>ui-typography">Typography</a></li>
                                                                <li><a class="<?php echo ($page == 'ui-video') ? 'active' : ''; ?>" href="<?php echo base_url(); ?>ui-video">Video</a></li>
                                                        </ul>
                                                </li>
                                                <li class="submenu">
                                                        <a href="javascript:void(0);" class="<?php echo ($page == 'ui-ribbon' || $page == 'ui-clipboard' || $page == 'ui-drag-drop' || $page == 'ui-rating' || $page == 'ui-text-editor' || $page == 'ui-counter' || $page == 'ui-scrollbar' || $page == 'ui-stickynote' || $page == 'ui-timeline') ? 'subdrop active' : ''; ?>">
                                                                <i class="ti ti-box-align-bottom"></i><span>Advanced UI</span><span class="menu-arrow"></span>
                                                        </a>
                                                        <ul>
                                                                <li><a class="<?php echo ($page == 'ui-ribbon') ? 'active' : ''; ?>" href="<?php echo base_url(); ?>ui-ribbon">Ribbon</a></li>
                                                                <li><a class="<?php echo ($page == 'ui-clipboard') ? 'active' : ''; ?>" href="<?php echo base_url(); ?>ui-clipboard">Clipboard</a></li>
                                                                <li><a class="<?php echo ($page == 'ui-drag-drop') ? 'active' : ''; ?>" href="<?php echo base_url(); ?>ui-drag-drop">Drag & Drop</a></li>
                                                                <li><a class="<?php echo ($page == 'ui-rating') ? 'active' : ''; ?>" href="<?php echo base_url(); ?>ui-rating">Rating</a></li>
                                                                <li><a class="<?php echo ($page == 'ui-text-editor') ? 'active' : ''; ?>" href="<?php echo base_url(); ?>ui-text-editor">Text Editor</a></li>
                                                                <li><a class="<?php echo ($page == 'ui-counter') ? 'active' : ''; ?>" href="<?php echo base_url(); ?>ui-counter">Counter</a></li>
                                                                <li><a class="<?php echo ($page == 'ui-scrollbar') ? 'active' : ''; ?>" href="<?php echo base_url(); ?>ui-scrollbar">Scrollbar</a></li>
                                                                <li><a class="<?php echo ($page == 'ui-stickynote') ? 'active' : ''; ?>" href="<?php echo base_url(); ?>ui-stickynote">Sticky Note</a></li>
                                                                <li><a class="<?php echo ($page == 'ui-timeline') ? 'active' : ''; ?>" href="<?php echo base_url(); ?>ui-timeline">Timeline</a></li>
                                                        </ul>
                                                </li>
                                                <li class="submenu">
                                                        <a href="javascript:void(0);" class="<?php echo ($page == 'chart-apex' || $page == 'chart-js' || $page == 'chart-morris' || $page == 'chart-flot' || $page == 'chart-peity' || $page == 'chart-c3') ? 'subdrop active' : ''; ?>"><i class="ti ti-chart-donut-2"></i>
                                                                <span>Charts</span><span class="menu-arrow"></span>
                                                        </a>
                                                        <ul>
                                                                <li><a class="<?php echo ($page == 'chart-apex') ? 'active' : ''; ?>" href="<?php echo base_url(); ?>chart-apex">Apex Charts</a></li>
                                                                <li><a class="<?php echo ($page == 'chart-c3') ? 'active' : ''; ?>" href="<?php echo base_url(); ?>chart-c3">C3 Charts</a></li>
                                                                <li><a class="<?php echo ($page == 'chart-js') ? 'active' : ''; ?>" href="<?php echo base_url(); ?>chart-js">Chart Js</a></li>
                                                                <li><a class="<?php echo ($page == 'chart-morris') ? 'active' : ''; ?>" href="<?php echo base_url(); ?>chart-morris">Morris Charts</a></li>
                                                                <li><a class="<?php echo ($page == 'chart-flot') ? 'active' : ''; ?>" href="<?php echo base_url(); ?>chart-flot">Flot Charts</a></li>
                                                                <li><a class="<?php echo ($page == 'chart-peity') ? 'active' : ''; ?>" href="<?php echo base_url(); ?>chart-peity">Peity Charts</a></li>
                                                        </ul>
                                                </li>
                                                <li class="submenu">
                                                        <a href="javascript:void(0);" class="<?php echo ($page == 'icon-fontawesome' || $page == 'icon-feather' || $page == 'icon-ionic' || $page == 'icon-material' || $page == 'icon-pe7' || $page == 'icon-simpleline' || $page == 'icon-themify' || $page == 'icon-weather' || $page == 'icon-typicon' || $page == 'icon-flag') ? 'subdrop active' : ''; ?>"><i class="ti ti-icons"></i>
                                                                <span>Icons</span><span class="menu-arrow"></span>
                                                        </a>
                                                        <ul>
                                                                <li><a class="<?php echo ($page == 'icon-fontawesome') ? 'active' : ''; ?>" href="<?php echo base_url(); ?>icon-fontawesome">Fontawesome Icons</a></li>
                                                                <li><a class="<?php echo ($page == 'icon-feather') ? 'active' : ''; ?>" href="<?php echo base_url(); ?>icon-feather">Feather Icons</a></li>
                                                                <li><a class="<?php echo ($page == 'icon-ionic') ? 'active' : ''; ?>" href="<?php echo base_url(); ?>icon-ionic">Ionic Icons</a></li>
                                                                <li><a class="<?php echo ($page == 'icon-material') ? 'active' : ''; ?>" href="<?php echo base_url(); ?>icon-material">Material Icons</a></li>
                                                                <li><a class="<?php echo ($page == 'icon-pe7') ? 'active' : ''; ?>" href="<?php echo base_url(); ?>icon-pe7">Pe7 Icons</a></li>
                                                                <li><a class="<?php echo ($page == 'icon-simpleline') ? 'active' : ''; ?>" href="<?php echo base_url(); ?>icon-simpleline">Simpleline Icons</a></li>
                                                                <li><a class="<?php echo ($page == 'icon-themify') ? 'active' : ''; ?>" href="<?php echo base_url(); ?>icon-themify">Themify Icons</a></li>
                                                                <li><a class="<?php echo ($page == 'icon-weather') ? 'active' : ''; ?>" href="<?php echo base_url(); ?>icon-weather">Weather Icons</a></li>
                                                                <li><a class="<?php echo ($page == 'icon-typicon') ? 'active' : ''; ?>" href="<?php echo base_url(); ?>icon-typicon">Typicon Icons</a></li>
                                                                <li><a class="<?php echo ($page == 'icon-flag') ? 'active' : ''; ?>" href="<?php echo base_url(); ?>icon-flag">Flag Icons</a></li>
                                                        </ul>
                                                </li>
                                                <li class="submenu">
                                                        <a href="javascript:void(0);" class="<?php echo ($page == 'form-basic-inputs' || $page == 'form-checkbox-radios' || $page == 'form-input-groups' || $page == 'form-grid-gutters' || $page == 'form-select' || $page == 'form-mask' || $page == 'form-fileupload' || $page == 'form-horizontal' || $page == 'form-vertical' || $page == 'form-floating-labels' || $page == 'form-validation' || $page == 'form-wizard' || $page == 'form-select2') ? 'subdrop active' : ''; ?>">
                                                                <i class="ti ti-forms"></i><span>Forms</span><span class="menu-arrow"></span>
                                                        </a>
                                                        <ul>
                                                                <li class="submenu submenu-two">
                                                                        <a href="javascript:void(0);" class="<?php echo ($page == 'form-basic-inputs' || $page == 'form-checkbox-radios' || $page == 'form-input-groups' || $page == 'form-grid-gutters' || $page == 'form-select' || $page == 'form-mask' || $page == 'form-fileupload') ? 'subdrop active' : ''; ?>">Form
                                                                                Elements<span class="menu-arrow inside-submenu"></span></a>
                                                                        <ul>
                                                                                <li><a class="<?php echo ($page == 'form-basic-inputs') ? 'active' : ''; ?>" href="<?php echo base_url(); ?>form-basic-inputs">Basic Inputs </a></li>
                                                                                <li><a class="<?php echo ($page == 'form-checkbox-radios') ? 'active' : ''; ?>" href="<?php echo base_url(); ?>form-checkbox-radios">Checkbox & Radios </a></li>
                                                                                <li><a class="<?php echo ($page == 'form-input-groups') ? 'active' : ''; ?>" href="<?php echo base_url(); ?>form-input-groups">Input Groups </a></li>
                                                                                <li><a class="<?php echo ($page == 'form-grid-gutters') ? 'active' : ''; ?>" href="<?php echo base_url(); ?>form-grid-gutters"> Grid & Gutters </a></li>
                                                                                <li><a class="<?php echo ($page == 'form-select') ? 'active' : ''; ?>" href="<?php echo base_url(); ?>form-select">Form Select </a></li>
                                                                                <li><a class="<?php echo ($page == 'form-mask') ? 'active' : ''; ?>" href="<?php echo base_url(); ?>form-mask"> Input Masks </a></li>
                                                                                <li><a class="<?php echo ($page == 'form-fileupload') ? 'active' : ''; ?>" href="<?php echo base_url(); ?>form-fileupload">File Upload </a></li>
                                                                        </ul>
                                                                </li>
                                                                <li class="submenu submenu-two">
                                                                        <a href="javascript:void(0);" class="<?php echo ($page == 'form-horizontal' || $page == 'form-vertical' || $page == 'form-floating-labels') ? 'subdrop active' : ''; ?>">Layouts<span class="menu-arrow inside-submenu"></span></a>
                                                                        <ul>
                                                                                <li><a class="<?php echo ($page == 'form-horizontal') ? 'active' : ''; ?>" href="<?php echo base_url(); ?>form-horizontal">Horizontal Form </a></li>
                                                                                <li><a class="<?php echo ($page == 'form-vertical') ? 'active' : ''; ?>" href="<?php echo base_url(); ?>form-vertical"> Vertical Form </a></li>
                                                                                <li><a class="<?php echo ($page == 'form-floating-labels') ? 'active' : ''; ?>" href="<?php echo base_url(); ?>form-floating-labels">Floating Labels </a></li>
                                                                        </ul>
                                                                </li>
                                                                <li><a class="<?php echo ($page == 'form-validation') ? 'active' : ''; ?>" href="<?php echo base_url(); ?>form-validation"> Form Validation </a></li>
                                                                <li><a class="<?php echo ($page == 'form-select2') ? 'active' : ''; ?>" href="<?php echo base_url(); ?>form-select2">Select2 </a></li>
                                                                <li><a class="<?php echo ($page == 'form-wizard') ? 'active' : ''; ?>" href="<?php echo base_url(); ?>form-wizard">Form Wizard</a></li>
                                                        </ul>
                                                </li>
                                                <li class="submenu">
                                                        <a href="javascript:void(0);" class="<?php echo ($page == 'tables-basic' || $page == 'data-tables') ? 'subdrop active' : ''; ?>"><i class="ti ti-table"></i><span>Tables</span><span class="menu-arrow"></span></a>
                                                        <ul>
                                                                <li><a class="<?php echo ($page == 'tables-basic') ? 'active' : ''; ?>" href="<?php echo base_url(); ?>tables-basic">Basic Tables </a></li>
                                                                <li><a class="<?php echo ($page == 'data-tables') ? 'active' : ''; ?>" href="<?php echo base_url(); ?>data-tables">Data Table </a></li>
                                                        </ul>
                                                </li>
                                        </ul>
                                </li>
                                <li>
                                        <h6 class="submenu-hdr">Help</h6>
                                        <ul>
                                                <li><a href="javascript:void(0);"><i class="ti ti-file-type-doc"></i><span>Documentation</span></a></li>
                                                <li><a href="javascript:void(0);"><i class="ti ti-arrow-capsule"></i><span>Changelog
                                                                        v2.1.6</span></a></li>
                                                <li class="submenu">
                                                        <a href="javascript:void(0);"><i class="ti ti-brand-databricks"></i><span>Multi
                                                                        Level</span><span class="menu-arrow"></span></a>
                                                        <ul>
                                                                <li><a href="javascript:void(0);">Level 1.1</a></li>
                                                                <li class="submenu submenu-two"><a href="javascript:void(0);">Level 1.2<span class="menu-arrow inside-submenu"></span></a>
                                                                        <ul>
                                                                                <li><a href="javascript:void(0);">Level 2.1</a></li>
                                                                                <li class="submenu submenu-two submenu-three"><a href="javascript:void(0);">Level 2.2<span class="menu-arrow inside-submenu inside-submenu-two"></span></a>
                                                                                        <ul>
                                                                                                <li><a href="javascript:void(0);">Level 3.1</a></li>
                                                                                                <li><a href="javascript:void(0);">Level 3.2</a></li>
                                                                                        </ul>
                                                                                </li>
                                                                        </ul>
                                                                </li>
                                                        </ul>
                                                </li>
                                        </ul>
                                </li>
                        </ul>
                </div>
        </div>
</div>
<!-- /Sidebar -->