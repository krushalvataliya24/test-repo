<?php
$link = $_SERVER['PHP_SELF'];
$link_array = explode('/', $link);
$page = end($link_array);
?>

<!-- Sidebar -->
<div class="sidebar" id="sidebar">
    <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu" class="sidebar-menu">
            <ul>
                <li class="clinicdropdown">
                    <a href="profile.php">
                        <img src="assets/img/profiles/avatar-14.jpg" class="img-fluid" alt="Profile">
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
                            <a href="javascript:void(0);" class="<?php echo ($page == 'index.php' || $page == 'leads-dashboard.php' || $page == 'project-dashboard.php') ? 'active subdrop' : ''; ?>">
                                <i class="ti ti-layout-2"></i><span>Dashboard</span><span class="menu-arrow"></span>
                            </a>
                            <ul>
                                <li><a href="index.php" class="<?php echo ($page == 'index.php') ? 'active' : ''; ?>">Deals Dashboard</a></li>
                                <li><a href="leads-dashboard.php" class="<?php echo ($page == 'leads-dashboard.php') ? 'active' : ''; ?>">Leads Dashboard</a></li>
                                <li><a href="project-dashboard.php" class="<?php echo ($page == 'project-dashboard.php') ? 'active' : ''; ?>">Project Dashboard</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);" class="<?php echo ($page == 'chat.php' || $page == 'video-call.php' || $page == 'audio-call.php' || $page == 'call-history.php' || $page == 'calendar.php' || $page == 'email.php' || $page == 'todo.php' || $page == 'notes.php' || $page == 'file-manager.php') ? 'active subdrop' : ''; ?>"><i class="ti ti-brand-airtable"></i><span>Application</span><span class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="chat.php" class="<?php echo ($page == 'chat.php') ? 'active' : ''; ?>">Chat</a></li>
                                <li class="submenu submenu-two">
                                    <a href="javascript:void(0);" class="<?php echo ($page == 'video-call.php' || $page == 'audio-call.php' || $page == 'call-history.php') ? 'active subdrop' : ''; ?>">Call<span class="menu-arrow inside-submenu"></span></a>
                                    <ul>
                                        <li><a href="video-call.php" class="<?php echo ($page == 'video-call.php') ? 'active' : ''; ?>">Video Call</a></li>
                                        <li><a href="audio-call.php" class="<?php echo ($page == 'audio-call.php') ? 'active' : ''; ?>">Audio Call</a></li>
                                        <li><a href="call-history.php" class="<?php echo ($page == 'call-history.php') ? 'active' : ''; ?>">Call History</a></li>
                                    </ul>
                                </li>
                                <li><a href="calendar.php" class="<?php echo ($page == 'calendar.php') ? 'active' : ''; ?>">Calendar</a></li>
                                <li><a href="email.php" class="<?php echo ($page == 'email.php') ? 'active' : ''; ?>">Email</a></li>
                                <li><a href="todo.php" class="<?php echo ($page == 'todo.php') ? 'active' : ''; ?>">To Do</a></li>
                                <li><a href="notes.php" class="<?php echo ($page == 'notes.php') ? 'active' : ''; ?>">Notes</a></li>
                                <li><a href="file-manager.php" class="<?php echo ($page == 'file-manager.php') ? 'active' : ''; ?>">File Manager</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li>
                    <h6 class="submenu-hdr">CRM</h6>
                    <ul>
                        <li>
                            <a href="contacts.php" class="<?php echo ($page == 'contacts.php' || $page == 'contact-grid.php' || $page == 'contact-details.php') ? 'active' : ''; ?>"><i class="ti ti-user-up"></i><span>Contacts</span></a>
                        </li>
                        <li>
                            <a href="companies.php" class="<?php echo ($page == 'companies.php' || $page == 'companies-grid.php' || $page == 'company-details.php') ? 'active' : ''; ?>"><i class="ti ti-building-community"></i><span>Companies</span></a>
                        </li>
                        <li>
                            <a href="deals.php" class="<?php echo ($page == 'deals.php' || $page == 'deals-kanban.php' || $page == 'deals-details.php') ? 'active' : ''; ?>"><i class="ti ti-medal"></i><span>Deals</span></a>
                        </li>
                        <li>
                            <a href="leads.php" class="<?php echo ($page == 'leads.php' || $page == 'leads-details.php' || $page == 'leads-kanban.php') ? 'active' : ''; ?>"><i class="ti ti-chart-arcs"></i><span>Leads</span></a>
                        </li>
                        <li>
                            <a href="pipeline.php" class="<?php echo ($page == 'pipeline.php') ? 'active' : ''; ?>"><i class="ti ti-timeline-event-exclamation"></i><span>Pipeline</span></a>
                        </li>
                        <li>
                            <a href="campaign.php" class="<?php echo ($page == 'campaign.php' || $page == 'campaign-complete.php' || $page == 'campaign-archieve.php') ? 'active' : ''; ?>"><i class="ti ti-brand-campaignmonitor"></i><span>Campaign</span></a>
                        </li>
                        <li>
                            <a href="projects.php" class="<?php echo ($page == 'projects.php' || $page == 'project-details.php' || $page == 'project-grid.php') ? 'active' : ''; ?>"><i class="ti ti-atom-2"></i><span>Projects</span></a>
                        </li>
                        <li>
                            <a href="tasks.php" class="<?php echo ($page == 'tasks.php' || $page == 'tasks-completed.php' || $page == 'tasks-important.php') ? 'active' : ''; ?>"><i class="ti ti-list-check"></i><span>Tasks</span></a>
                        </li>
                        <li>
                            <a href="proposals.php" class="<?php echo ($page == 'proposals.php' || $page == 'proposals-grid.php') ? 'active' : ''; ?>"><i class="ti ti-file-star"></i><span>Proposals</span></a>
                        </li>
                        <li>
                            <a href="contracts.php" class="<?php echo ($page == 'contracts.php' || $page == 'contracts-grid.php') ? 'active' : ''; ?>"><i class="ti ti-file-check"></i><span>Contracts</span></a>
                        </li>
                        <li>
                            <a href="estimations.php" class="<?php echo ($page == 'estimations.php' || $page == 'estimations-kanban.php') ? 'active' : ''; ?>"><i class="ti ti-file-report"></i><span>Estimations</span></a>
                        </li>
                        <li>
                            <a href="invoices.php" class="<?php echo ($page == 'invoices.php' || $page == 'invoice-grid.php') ? 'active' : ''; ?>"><i class="ti ti-file-invoice"></i><span>Invoices</span></a>
                        </li>
                        <li>
                            <a href="payments.php" class="<?php echo ($page == 'payments.php') ? 'active' : ''; ?>"><i class="ti ti-report-money"></i><span>Payments</span></a>
                        </li>
                        <li>
                            <a href="analytics.php" class="<?php echo ($page == 'analytics.php') ? 'active' : ''; ?>"><i class="ti ti-chart-bar"></i><span>Analytics</span></a>
                        </li>
                        <li>
                            <a href="activities.php" class="<?php echo ($page == 'activities.php' || $page == 'activity-calls.php' || $page == 'activity-mail.php' || $page == 'activity-meeting.php' || $page == 'activity-task.php') ? 'active' : ''; ?>"><i class="ti ti-bounce-right"></i><span>Activities</span></a>
                        </li>
                    </ul>
                </li>
                <li>
                    <h6 class="submenu-hdr">Reports</h6>
                    <ul>
                        <li class="submenu">
                            <a href="javascript:void(0);" class="<?php echo ($page == 'lead-reports.php' || $page == 'deal-reports.php' || $page == 'contact-reports.php' || $page == 'company-reports.php' || $page == 'project-reports.php' || $page == 'task-reports.php') ? 'subdrop active' : ''; ?>">
                                <i class="ti ti-file-invoice"></i><span>Reports</span><span class="menu-arrow"></span>
                            </a>
                            <ul>
                                <li><a href="lead-reports.php" class="<?php echo ($page == 'lead-reports.php') ? 'active' : ''; ?>">Lead Reports</a></li>
                                <li><a href="deal-reports.php" class="<?php echo ($page == 'deal-reports.php') ? 'active' : ''; ?>">Deal Reports</a></li>
                                <li><a href="contact-reports.php" class="<?php echo ($page == 'contact-reports.php') ? 'active' : ''; ?>">Contact Reports</a></li>
                                <li><a href="company-reports.php" class="<?php echo ($page == 'company-reports.php') ? 'active' : ''; ?>">Company Reports</a></li>
                                <li><a href="project-reports.php" class="<?php echo ($page == 'project-reports.php') ? 'active' : ''; ?>">Project Reports</a></li>
                                <li><a href="task-reports.php" class="<?php echo ($page == 'task-reports.php') ? 'active' : ''; ?>">Task Reports</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li>
                    <h6 class="submenu-hdr">CRM Settings</h6>
                    <ul>
                        <li><a href="sources.php" class="<?php echo ($page == 'sources.php') ? 'active' : ''; ?>"><i class="ti ti-artboard"></i><span>Sources</span></a></li>
                        <li><a href="lost-reason.php" class="<?php echo ($page == 'lost-reason.php') ? 'active' : ''; ?>"><i class="ti ti-message-exclamation"></i><span>Lost Reason</span></a></li>
                        <li><a href="contact-stage.php" class="<?php echo ($page == 'contact-stage.php') ? 'active' : ''; ?>"><i class="ti ti-steam"></i><span>Contact Stage</span></a></li>
                        <li><a href="industry.php" class="<?php echo ($page == 'industry.php') ? 'active' : ''; ?>"><i class="ti ti-building-factory"></i><span>Industry</span></a></li>
                        <li><a href="calls.php" class="<?php echo ($page == 'calls.php') ? 'active' : ''; ?>"><i class="ti ti-phone-check"></i><span>Calls</span></a></li>
                    </ul>
                </li>
                <li>
                    <h6 class="submenu-hdr">User Management</h6>
                    <ul>
                        <li><a href="manage-users.php" class="<?php echo ($page == 'manage-users.php') ? 'active' : ''; ?>"><i class="ti ti-users"></i><span>Manage Users</span></a></li>
                        <li><a href="roles-permissions.php" class="<?php echo ($page == 'roles-permissions.php'  || $page == 'permission.php') ? 'active' : ''; ?>"><i class="ti ti-navigation-cog"></i><span>Roles & Permissions</span></a></li>
                        <li><a href="delete-request.php" class="<?php echo ($page == 'delete-request.php') ? 'active' : ''; ?>"><i class="ti ti-flag-question"></i><span>Delete Request</span></a></li>
                    </ul>
                </li>
                <li>
                    <h6 class="submenu-hdr">Membership</h6>
                    <ul>
                        <li class="submenu">
                            <a href="javascript:void(0);" class="<?php echo ($page == 'membership-plans.php' || $page == 'membership-addons.php' || $page == 'membership-transactions.php') ? 'active subdrop' : ''; ?>">
                                <i class="ti ti-file-invoice"></i><span>Membership</span><span class="menu-arrow"></span>
                            </a>
                            <ul>
                                <li><a href="membership-plans.php" class="<?php echo ($page == 'membership-plans.php') ? 'active' : ''; ?>">Membership Plans</a></li>
                                <li><a href="membership-addons.php" class="<?php echo ($page == 'membership-addons.php') ? 'active' : ''; ?>">Membership Addons</a></li>
                                <li><a href="membership-transactions.php" class="<?php echo ($page == 'membership-transactions.php') ? 'active' : ''; ?>">Transactions</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li>
                    <h6 class="submenu-hdr">Content</h6>
                    <ul>
                        <li><a href="pages.php" class="<?php echo ($page == 'pages.php') ? 'active' : ''; ?>"><i class="ti ti-page-break"></i><span>Pages</span></a></li>
                        <li class="submenu">
                            <a href="javascript:void(0);" class="<?php echo ($page == 'countries.php' || $page == 'states.php' || $page == 'cities.php') ? 'active subdrop' : ''; ?>">
                                <i class="ti ti-map-pin-pin"></i><span>Location</span><span class="menu-arrow"></span>
                            </a>
                            <ul>
                                <li><a href="countries.php" class="<?php echo ($page == 'countries.php') ? 'active' : ''; ?>">Countries</a></li>
                                <li><a href="states.php" class="<?php echo ($page == 'states.php') ? 'active' : ''; ?>">States</a></li>
                                <li><a href="cities.php" class="<?php echo ($page == 'cities.php') ? 'active' : ''; ?>">Cities</a></li>
                            </ul>
                        </li>
                        <li><a href="testimonials.php" class="<?php echo ($page == 'testimonials.php') ? 'active' : ''; ?>"><i class="ti ti-quote"></i><span>Testimonials</span></a></li>
                        <li><a href="faq.php" class="<?php echo ($page == 'faq.php') ? 'active' : ''; ?>"><i class="ti ti-question-mark"></i><span>FAQ</span></a></li>
                    </ul>
                </li>
                <li>
                    <h6 class="submenu-hdr">Support</h6>
                    <ul>
                        <li><a href="contact-messages.php" class="<?php echo ($page == 'contact-messages.php') ? 'active' : ''; ?>"><i class="ti ti-page-break"></i><span>Contact Messages</span></a></li>
                        <li><a href="tickets.php" class="<?php echo ($page == 'tickets.php') ? 'active' : ''; ?>"><i class="ti ti-ticket"></i><span>Tickets</span></a></li>
                    </ul>
                </li>
                <li>
                    <h6 class="submenu-hdr">Settings</h6>
                    <ul>
                        <li class="submenu">
                            <a href="javascript:void(0);" class="<?php echo ($page == 'profile.php' || $page == 'security.php' || $page == 'notifications.php' || $page == 'connected-apps.php') ? 'active subdrop' : ''; ?>">
                                <i class="ti ti-settings-cog"></i><span>General Settings</span><span class="menu-arrow"></span>
                            </a>
                            <ul>
                                <li><a href="profile.php" class="<?php echo ($page == 'profile.php') ? 'active' : ''; ?>">Profile</a></li>
                                <li><a href="security.php" class="<?php echo ($page == 'security.php') ? 'active' : ''; ?>">Security</a></li>
                                <li><a href="notifications.php" class="<?php echo ($page == 'notifications.php') ? 'active' : ''; ?>">Notifications</a></li>
                                <li><a href="connected-apps.php" class="<?php echo ($page == 'connected-apps.php') ? 'active' : ''; ?>">Connected Apps</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);" class="<?php echo ($page == 'company-settings.php' || $page == 'localization.php' || $page == 'prefixes.php' || $page == 'preference.php'  || $page == 'appearance.php'  || $page == 'language.php') ? 'active subdrop' : ''; ?>">
                                <i class="ti ti-world-cog"></i><span>Website Settings</span><span class="menu-arrow"></span>
                            </a>
                            <ul>
                                <li><a href="company-settings.php" class="<?php echo ($page == 'company-settings.php') ? 'active' : ''; ?>">Company Settings</a></li>
                                <li><a href="localization.php" class="<?php echo ($page == 'localization.php') ? 'active' : ''; ?>">Localization</a></li>
                                <li><a href="prefixes.php" class="<?php echo ($page == 'prefixes.php') ? 'active' : ''; ?>">Prefixes</a></li>
                                <li><a href="preference.php" class="<?php echo ($page == 'preference.php') ? 'active' : ''; ?>">Preference</a></li>
                                <li><a href="appearance.php" class="<?php echo ($page == 'appearance.php') ? 'active' : ''; ?>">Appearance</a></li>
                                <li><a href="language.php" class="<?php echo ($page == 'language.php') ? 'active' : ''; ?>">Language</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);" class="<?php echo ($page == 'invoice-settings.php' || $page == 'printers.php' || $page == 'custom-fields.php') ? 'active subdrop' : ''; ?>">
                                <i class="ti ti-apps"></i><span>App Settings</span><span class="menu-arrow"></span>
                            </a>
                            <ul>
                                <li><a href="invoice-settings.php" class="<?php echo ($page == 'invoice-settings.php') ? 'active' : ''; ?>">Invoice Settings</a></li>
                                <li><a href="printers.php" class="<?php echo ($page == 'printers.php') ? 'active' : ''; ?>">Printers</a></li>
                                <li><a href="custom-fields.php" class="<?php echo ($page == 'custom-fields.php') ? 'active' : ''; ?>">Custom Fields</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);" class="<?php echo ($page == 'email-settings.php' || $page == 'sms-gateways.php' || $page == 'gdpr-cookies.php') ? 'active subdrop' : ''; ?>">
                                <i class="ti ti-device-laptop"></i><span>System Settings</span><span class="menu-arrow"></span>
                            </a>
                            <ul>
                                <li><a href="email-settings.php" class="<?php echo ($page == 'email-settings.php') ? 'active' : ''; ?>">Email Settings</a></li>
                                <li><a href="sms-gateways.php" class="<?php echo ($page == 'sms-gateways.php') ? 'active' : ''; ?>">SMS Gateways</a></li>
                                <li><a href="gdpr-cookies.php" class="<?php echo ($page == 'gdpr-cookies.php') ? 'active' : ''; ?>">GDPR Cookies</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);" class="<?php echo ($page == 'payment-gateways.php' || $page == 'bank-accounts.php' || $page == 'tax-rates.php' || $page == 'currencies.php') ? 'active subdrop' : ''; ?>">
                                <i class="ti ti-moneybag"></i><span>Financial Settings</span><span class="menu-arrow"></span>
                            </a>
                            <ul>
                                <li><a href="payment-gateways.php" class="<?php echo ($page == 'payment-gateways.php') ? 'active' : ''; ?>">Payment Gateways</a></li>
                                <li><a href="bank-accounts.php" class="<?php echo ($page == 'bank-accounts.php') ? 'active' : ''; ?>">Bank Accounts</a></li>
                                <li><a href="tax-rates.php" class="<?php echo ($page == 'tax-rates.php') ? 'active' : ''; ?>">Tax Rates</a></li>
                                <li><a href="currencies.php" class="<?php echo ($page == 'currencies.php') ? 'active' : ''; ?>">Currencies</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);" class="<?php echo ($page == 'storage.php' || $page == 'ban-ip-address.php') ? 'active subdrop' : ''; ?>">
                                <i class="ti ti-flag-cog"></i><span>Other Settings</span><span class="menu-arrow"></span>
                            </a>
                            <ul>
                                <li><a href="storage.php" class="<?php echo ($page == 'storage.php') ? 'active' : ''; ?>">Storage</a></li>
                                <li><a href="ban-ip-address.php" class="<?php echo ($page == 'ban-ip-address.php') ? 'active' : ''; ?>">Ban IP Address</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li>
                    <h6 class="submenu-hdr">Pages</h6>
                    <ul>
                        <li class="submenu">
                            <a href="javascript:void(0);" class="<?php echo ($page == 'login.php' || $page == 'register.php' || $page == 'forgot-password.php' || $page == 'reset-password.php' || $page == 'email-verification.php' || $page == 'two-step-verification.php' || $page == 'lock-screen.php') ? 'active subdrop' : ''; ?>">
                                <i class="ti ti-lock-square-rounded"></i><span>Authentication</span><span class="menu-arrow"></span>
                            </a>
                            <ul>
                                <li><a href="login.php" class="<?php echo ($page == 'login.php') ? 'active' : ''; ?>">Login</a></li>
                                <li><a href="register.php" class="<?php echo ($page == 'register.php') ? 'active' : ''; ?>">Register</a></li>
                                <li><a href="forgot-password.php" class="<?php echo ($page == 'forgot-password.php') ? 'active' : ''; ?>">Forgot Password</a></li>
                                <li><a href="reset-password.php" class="<?php echo ($page == 'reset-password.php') ? 'active' : ''; ?>">Reset Password</a></li>
                                <li><a href="email-verification.php" class="<?php echo ($page == 'email-verification.php') ? 'active' : ''; ?>">Email Verification</a></li>
                                <li><a href="two-step-verification.php" class="<?php echo ($page == 'two-step-verification.php') ? 'active' : ''; ?>">2 Step Verification</a></li>
                                <li><a href="lock-screen.php" class="<?php echo ($page == 'lock-screen.php') ? 'active' : ''; ?>">Lock Screen</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);" class="<?php echo ($page == 'error-404.php' || $page == 'error-500.php') ? 'active subdrop' : ''; ?>">
                                <i class="ti ti-error-404"></i><span>Error Pages</span><span class="menu-arrow"></span>
                            </a>
                            <ul>
                                <li><a href="error-404.php" class="<?php echo ($page == 'error-404.php') ? 'active' : ''; ?>">404 Error</a></li>
                                <li><a href="error-500.php" class="<?php echo ($page == 'error-500.php') ? 'active' : ''; ?>">500 Error</a></li>
                            </ul>
                        </li>
                        <li><a href="blank-page.php" class="<?php echo ($page == 'blank-page.php') ? 'active' : ''; ?>"><i class="ti ti-apps"></i><span>Blank Page</span></a></li>
                        <li><a href="coming-soon.php" class="<?php echo ($page == 'coming-soon.php') ? 'active' : ''; ?>"><i class="ti ti-device-laptop"></i><span>Coming Soon</span></a></li>
                        <li><a href="under-maintenance.php" class="<?php echo ($page == 'under-maintenance.php') ? 'active' : ''; ?>"><i class="ti ti-moneybag"></i><span>Under Maintenance</span></a></li>
                    </ul>
                </li>
                <li>
                    <h6 class="submenu-hdr">UI Interface</h6>
                    <ul>
                        <li class="submenu">
                            <a href="javascript:void(0);" class="<?php echo ($page ==  'ui-alerts.php' || $page == 'ui-accordion.php' || $page == 'ui-avatar.php' || $page == 'ui-badges.php' || $page == 'ui-borders.php' || $page == 'ui-buttons.php' || $page == 'ui-buttons-group.php' || $page == 'ui-breadcrumb.php' || $page == 'ui-cards.php' || $page == 'ui-carousel.php' || $page == 'ui-colors.php' || $page == 'ui-dropdowns.php' || $page == 'ui-grid.php' || $page == 'ui-images.php' || $page == 'ui-lightbox.php' || $page == 'ui-media.php' || $page == 'ui-modals.php' || $page == 'ui-offcanvas.php' || $page == 'ui-pagination.php' || $page == 'ui-popovers.php' || $page == 'ui-progress.php' || $page == 'ui-placeholders.php' || $page == 'ui-rangeslider.php' || $page == 'ui-spinner.php' || $page == 'ui-sweetalerts.php' || $page == 'ui-nav-tabs.php' || $page == 'ui-toasts.php' || $page == 'ui-tooltips.php' || $page == 'ui-typography.php' || $page == 'ui-video.php') ? 'active subdrop' : ''; ?>">
                                <i class="ti ti-adjustments-check"></i><span>Base UI</span><span class="menu-arrow"></span>
                            </a>
                            <ul>
                                <li><a href="ui-alerts.php" class="<?php echo ($page == 'ui-alerts.php') ? 'active' : ''; ?>">Alerts</a></li>
                                <li><a href="ui-accordion.php" class="<?php echo ($page == 'ui-accordion.php') ? 'active' : ''; ?>">Accordion</a></li>
                                <li><a href="ui-avatar.php" class="<?php echo ($page == 'ui-avatar.php') ? 'active' : ''; ?>">Avatar</a></li>
                                <li><a href="ui-badges.php" class="<?php echo ($page == 'ui-badges.php') ? 'active' : ''; ?>">Badges</a></li>
                                <li><a href="ui-borders.php" class="<?php echo ($page == 'ui-borders.php') ? 'active' : ''; ?>">Border</a></li>
                                <li><a href="ui-buttons.php" class="<?php echo ($page == 'ui-buttons.php') ? 'active' : ''; ?>">Buttons</a></li>
                                <li><a href="ui-buttons-group.php" class="<?php echo ($page == 'ui-buttons-group.php') ? 'active' : ''; ?>">Button Group</a></li>
                                <li><a href="ui-breadcrumb.php" class="<?php echo ($page == 'ui-breadcrumb.php') ? 'active' : ''; ?>">Breadcrumb</a></li>
                                <li><a href="ui-cards.php" class="<?php echo ($page == 'ui-cards.php') ? 'active' : ''; ?>">Card</a></li>
                                <li><a href="ui-carousel.php" class="<?php echo ($page == 'ui-carousel.php') ? 'active' : ''; ?>">Carousel</a></li>
                                <li><a href="ui-colors.php" class="<?php echo ($page == 'ui-colors.php') ? 'active' : ''; ?>">Colors</a></li>
                                <li><a href="ui-dropdowns.php" class="<?php echo ($page == 'ui-dropdowns.php') ? 'active' : ''; ?>">Dropdowns</a></li>
                                <li><a href="ui-grid.php" class="<?php echo ($page == 'ui-grid.php') ? 'active' : ''; ?>">Grid</a></li>
                                <li><a href="ui-images.php" class="<?php echo ($page == 'ui-images.php') ? 'active' : ''; ?>">Images</a></li>
                                <li><a href="ui-lightbox.php" class="<?php echo ($page == 'ui-lightbox.php') ? 'active' : ''; ?>">Lightbox</a></li>
                                <li><a href="ui-media.php" class="<?php echo ($page == 'ui-media.php') ? 'active' : ''; ?>">Media</a></li>
                                <li><a href="ui-modals.php" class="<?php echo ($page == 'ui-modals.php') ? 'active' : ''; ?>">Modals</a></li>
                                <li><a href="ui-offcanvas.php" class="<?php echo ($page == 'ui-offcanvas.php') ? 'active' : ''; ?>">Offcanvas</a></li>
                                <li><a href="ui-pagination.php" class="<?php echo ($page == 'ui-pagination.php') ? 'active' : ''; ?>">Pagination</a></li>
                                <li><a href="ui-popovers.php" class="<?php echo ($page == 'ui-popovers.php') ? 'active' : ''; ?>">Popovers</a></li>
                                <li><a href="ui-progress.php" class="<?php echo ($page == 'ui-progress.php') ? 'active' : ''; ?>">Progress</a></li>
                                <li><a href="ui-placeholders.php" class="<?php echo ($page == 'ui-placeholders.php') ? 'active' : ''; ?>">Placeholders</a></li>
                                <li><a href="ui-rangeslider.php" class="<?php echo ($page == 'ui-rangeslider.php') ? 'active' : ''; ?>">Range Slider</a></li>
                                <li><a href="ui-spinner.php" class="<?php echo ($page == 'ui-spinner.php') ? 'active' : ''; ?>">Spinner</a></li>
                                <li><a href="ui-sweetalerts.php" class="<?php echo ($page == 'ui-sweetalerts.php') ? 'active' : ''; ?>">Sweet Alerts</a></li>
                                <li><a href="ui-nav-tabs.php" class="<?php echo ($page == 'ui-nav-tabs.php') ? 'active' : ''; ?>">Tabs</a></li>
                                <li><a href="ui-toasts.php" class="<?php echo ($page == 'ui-toasts.php') ? 'active' : ''; ?>">Toasts</a></li>
                                <li><a href="ui-tooltips.php" class="<?php echo ($page == 'ui-tooltips.php') ? 'active' : ''; ?>">Tooltips</a></li>
                                <li><a href="ui-typography.php" class="<?php echo ($page == 'ui-typography.php') ? 'active' : ''; ?>">Typography</a></li>
                                <li><a href="ui-video.php" class="<?php echo ($page == 'ui-video.php') ? 'active' : ''; ?>">Video</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);" class="<?php echo ($page == 'ui-ribbon.php' || $page == 'ui-clipboard.php' || $page == 'ui-drag-drop.php' || $page ==  'ui-rating.php' || $page == 'ui-text-editor.php' || $page == 'ui-counter.php' || $page == 'ui-scrollbar.php' || $page == 'ui-stickynote.php' || $page == 'ui-timeline.php') ? 'active subdrop' : ''; ?>">
                                <i class="ti ti-box-align-bottom"></i><span>Advanced UI</span><span class="menu-arrow"></span>
                            </a>
                            <ul>
                                <li><a href="ui-ribbon.php" class="<?php echo ($page == 'ui-ribbon.php') ? 'active' : ''; ?>">Ribbon</a></li>
                                <li><a href="ui-clipboard.php" class="<?php echo ($page == 'ui-clipboard.php') ? 'active' : ''; ?>">Clipboard</a></li>
                                <li><a href="ui-drag-drop.php" class="<?php echo ($page == 'ui-drag-drop.php') ? 'active' : ''; ?>">Drag & Drop</a></li>
                                <li><a href="ui-rangeslider.php" class="<?php echo ($page == 'ui-rangeslider.php') ? 'active' : ''; ?>">Range Slider</a></li>
                                <li><a href="ui-rating.php" class="<?php echo ($page == 'ui-rating.php') ? 'active' : ''; ?>">Rating</a></li>
                                <li><a href="ui-text-editor.php" class="<?php echo ($page == 'ui-text-editor.php') ? 'active' : ''; ?>">Text Editor</a></li>
                                <li><a href="ui-counter.php" class="<?php echo ($page == 'ui-counter.php') ? 'active' : ''; ?>">Counter</a></li>
                                <li><a href="ui-scrollbar.php" class="<?php echo ($page == 'ui-scrollbar.php') ? 'active' : ''; ?>">Scrollbar</a></li>
                                <li><a href="ui-stickynote.php" class="<?php echo ($page == 'ui-stickynote.php') ? 'active' : ''; ?>">Sticky Note</a></li>
                                <li><a href="ui-timeline.php" class="<?php echo ($page == 'ui-timeline.php') ? 'active' : ''; ?>">Timeline</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);" class="<?php echo ($page == 'chart-apex.php' || $page == 'chart-js.php' || $page == 'chart-morris.php' || $page == 'chart-flot.php' || $page == 'chart-peity.php' || $page == 'chart-c3.php') ? 'active subdrop' : ''; ?>"><i class="ti ti-chart-donut-2"></i>
                                <span>Charts</span><span class="menu-arrow"></span>
                            </a>
                            <ul>
                                <li><a href="chart-apex.php" class="<?php echo ($page == 'chart-apex.php') ? 'active' : ''; ?>">Apex Charts</a></li>
                                <li><a href="chart-c3.php" class="<?php echo ($page == 'chart-c3.php') ? 'active' : ''; ?>">Chart C3</a></li>
                                <li><a href="chart-js.php" class="<?php echo ($page == 'chart-js.php') ? 'active' : ''; ?>">Chart Js</a></li>
                                <li><a href="chart-morris.php" class="<?php echo ($page == 'chart-morris.php') ? 'active' : ''; ?>">Morris Charts</a></li>
                                <li><a href="chart-flot.php" class="<?php echo ($page == 'chart-flot.php') ? 'active' : ''; ?>">Flot Charts</a></li>
                                <li><a href="chart-peity.php" class="<?php echo ($page == 'chart-peity.php') ? 'active' : ''; ?>">Peity Charts</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);" class="<?php echo ($page == 'icon-fontawesome.php' || $page == 'icon-feather.php' || $page == 'icon-ionic.php' || $page == 'icon-material.php' || $page == 'icon-pe7.php' || $page == 'icon-simpleline.php' || $page == 'icon-themify.php' || $page == 'icon-weather.php' || $page == 'icon-typicon.php' || $page == 'icon-flag.php') ? 'active subdrop' : ''; ?>"><i class="ti ti-icons"></i>
                                <span>Icons</span><span class="menu-arrow"></span>
                            </a>
                            <ul>
                                <li><a href="icon-fontawesome.php" class="<?php echo ($page == 'icon-fontawesome.php') ? 'active' : ''; ?>">Fontawesome Icons</a></li>
                                <li><a href="icon-feather.php" class="<?php echo ($page == 'icon-feather.php') ? 'active' : ''; ?>">Feather Icons</a></li>
                                <li><a href="icon-ionic.php" class="<?php echo ($page == 'icon-ionic.php') ? 'active' : ''; ?>">Ionic Icons</a></li>
                                <li><a href="icon-material.php" class="<?php echo ($page == 'icon-material.php') ? 'active' : ''; ?>">Material Icons</a></li>
                                <li><a href="icon-pe7.php" class="<?php echo ($page == 'icon-pe7.php') ? 'active' : ''; ?>">Pe7 Icons</a></li>
                                <li><a href="icon-simpleline.php" class="<?php echo ($page == 'icon-simpleline.php') ? 'active' : ''; ?>">Simpleline Icons</a></li>
                                <li><a href="icon-themify.php" class="<?php echo ($page == 'icon-themify.php') ? 'active' : ''; ?>">Themify Icons</a></li>
                                <li><a href="icon-weather.php" class="<?php echo ($page == 'icon-weather.php') ? 'active' : ''; ?>">Weather Icons</a></li>
                                <li><a href="icon-typicon.php" class="<?php echo ($page == 'icon-typicon.php') ? 'active' : ''; ?>">Typicon Icons</a></li>
                                <li><a href="icon-flag.php" class="<?php echo ($page == 'icon-flag.php') ? 'active' : ''; ?>">Flag Icons</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);" class="<?php echo ($page == 'form-basic-inputs.php' || $page == 'form-checkbox-radios.php' || $page == 'form-input-groups.php' || $page == 'form-grid-gutters.php' || $page == 'form-select.php' || $page == 'form-mask.php' || $page == 'form-fileupload.php' || $page == 'form-horizontal.php' || $page == 'form-vertical.php' || $page == 'form-floating-labels.php' || $page == 'form-validation.php' || $page == 'form-wizard.php' || $page == 'form-select2.php') ? 'active subdrop' : ''; ?>">
                                <i class="ti ti-forms"></i><span>Forms</span><span class="menu-arrow"></span>
                            </a>
                            <ul>
                                <li class="submenu submenu-two">
                                    <a href="javascript:void(0);" class="<?php echo ($page == 'form-basic-inputs.php' || $page == 'form-checkbox-radios.php' || $page == 'form-input-groups.php' || $page == 'form-grid-gutters.php' || $page == 'form-select.php' || $page == 'form-mask.php' || $page == 'form-fileupload.php') ? 'active subdrop' : ''; ?>">Form Elements<span class="menu-arrow inside-submenu"></span></a>
                                    <ul>
                                        <li><a href="form-basic-inputs.php" class="<?php echo ($page == 'form-basic-inputs.php') ? 'active' : ''; ?>">Basic Inputs</a></li>
                                        <li><a href="form-checkbox-radios.php" class="<?php echo ($page == 'form-checkbox-radios.php') ? 'active' : ''; ?>">Checkbox & Radios</a></li>
                                        <li><a href="form-input-groups.php" class="<?php echo ($page == 'form-input-groups.php') ? 'active' : ''; ?>">Input Groups</a></li>
                                        <li><a href="form-grid-gutters.php" class="<?php echo ($page == 'form-grid-gutters.php') ? 'active' : ''; ?>">Grid & Gutters</a></li>
                                        <li><a href="form-select.php" class="<?php echo ($page == 'form-select.php') ? 'active' : ''; ?>">Form Select</a></li>
                                        <li><a href="form-mask.php" class="<?php echo ($page == 'form-mask.php') ? 'active' : ''; ?>">Input Masks</a></li>
                                        <li><a href="form-fileupload.php" class="<?php echo ($page == 'form-fileupload.php') ? 'active' : ''; ?>">File Uploads</a></li>
                                    </ul>
                                </li>
                                <li class="submenu submenu-two">
                                    <a href="javascript:void(0);" class="<?php echo ($page == 'form-horizontal.php' || $page == 'form-vertical.php' || $page == 'form-floating-labels.php') ? 'active subdrop' : ''; ?>">Layouts<span class="menu-arrow inside-submenu"></span></a>
                                    <ul>
                                        <li><a href="form-horizontal.php" class="<?php echo ($page == 'form-horizontal.php') ? 'active' : ''; ?>">Horizontal Form</a></li>
                                        <li><a href="form-vertical.php" class="<?php echo ($page == 'form-vertical.php') ? 'active' : ''; ?>">Vertical Form</a></li>
                                        <li><a href="form-floating-labels.php" class="<?php echo ($page == 'form-floating-labels.php') ? 'active' : ''; ?>">Floating Labels</a></li>
                                    </ul>
                                </li>
                                <li><a href="form-validation.php" class="<?php echo ($page == 'form-validation.php') ? 'active' : ''; ?>">Form Validation</a></li>
                                <li><a href="form-select2.php" class="<?php echo ($page == 'form-select2.php') ? 'active' : ''; ?>">Select2</a></li>
                                <li><a href="form-wizard.php" class="<?php echo ($page == 'form-wizard.php') ? 'active' : ''; ?>">Form Wizard</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);" class="<?php echo ($page == 'tables-basic.php' || $page == 'data-tables.php') ? 'active subdrop' : ''; ?>"><i class="ti ti-table"></i><span>Tables</span><span
                                    class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="tables-basic.php" class="<?php echo ($page == 'tables-basic.php') ? 'active' : ''; ?>">Basic Tables </a></li>
                                <li><a href="data-tables.php" class="<?php echo ($page == 'data-tables.php') ? 'active' : ''; ?>">Data Table </a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li>
                    <h6 class="submenu-hdr">Help</h6>
                    <ul>
                        <li><a href="javascript:void(0);"><i class="ti ti-file-type-doc"></i><span>Documentation</span></a></li>
                        <li><a href="javascript:void(0);"><i class="ti ti-arrow-capsule"></i><span>Changelog v2.0.3</span></a></li>
                        <li class="submenu">
                            <a href="javascript:void(0);"><i class="ti ti-brand-databricks"></i><span>Multi Level</span><span class="menu-arrow"></span></a>
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