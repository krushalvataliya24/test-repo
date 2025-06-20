<?php
// Function to check if the link is active
function isActive($linkUrl, $currentPath)
{
	// Normalize the link URL and current path by removing leading/trailing slashes
	$linkUrl = trim($linkUrl, '/');
	$currentPath = trim($currentPath, '/');

	// Check if the current path matches the link URL
	return $currentPath === $linkUrl ? 'active' : '';
}

// Get the current request path using CakePHP's request object
$currentPath = $this->request->getPath();
?>




<!-- Sidebar -->
<div class="sidebar" id="sidebar">
	<div class="sidebar-inner slimscroll">
		<div id="sidebar-menu" class="sidebar-menu">
			<ul>
				<li class="clinicdropdown">
					<a href="profile">

						<?php echo $this->Html->image('profiles/avatar-14.jpg', [
							'alt' => 'Profile',
							'class' => 'img-fluid'
						]); ?>
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
							<a href="javascript:void(0);" class="<?php echo isActive('index', $currentPath) || isActive('leads_dashboard', $currentPath) || isActive('project_dashboard', $currentPath) || isActive('home', $currentPath) ? 'active subdrop' : ''; ?>">
								<i class="ti ti-layout-2"></i><span>Dashboard</span><span
									class="menu-arrow"></span>
							</a>
							<ul>
								<li><a href="home" class="<?php echo isActive('home', $currentPath)|| isActive('home', $currentPath)?'active subdrop' : '' ; ?>">Deals Dashboard</a></li>
								<li><a href="leads_dashboard" class="<?php echo isActive('leads_dashboard', $currentPath); ?>">Leads Dashboard</a></li>

								<li><a href="project_dashboard" class="<?php echo isActive('project_dashboard', $currentPath); ?>">Project Dashboard</a></li>
							</ul>
						</li>
						<li class="submenu">
							<a href="javascript:void(0);" class="<?php echo isActive('chat', $currentPath) || isActive('call', $currentPath) || isActive('calendar', $currentPath) || isActive('email', $currentPath) || isActive('todo', $currentPath) || isActive('notes', $currentPath) || isActive('file_manager', $currentPath)|| isActive('video_call', $currentPath)|| isActive('audio_call', $currentPath)|| isActive('call_history', $currentPath) ? 'active subdrop' : ''; ?>"><i class="ti ti-brand-airtable"></i><span>Application</span><span class="menu-arrow"></span></a>
							<ul>
								<li><a href="chat" class="<?php echo isActive('chat', $currentPath); ?>">Chat</a></li>
								<li class="submenu submenu-two" >
									<a href="javascript:void(0);"class="<?php echo isActive('video_call', $currentPath) || isActive('audio_call', $currentPath) || isActive('call_history', $currentPath) ? 'active subdrop' : ''; ?>">Call<span class="menu-arrow inside-submenu"></span></a>
									<ul>
										<li><a href="video_call" class="<?php echo isActive('video_call', $currentPath); ?>">Video Call</a></li>
										<li><a href="audio_call" class="<?php echo isActive('audio_call', $currentPath); ?>">Audio Call</a></li>
										<li><a href="call_history" class="<?php echo isActive('call_history', $currentPath); ?>">Call History</a></li>
									</ul>
								</li>
								<li><a href="calendar" class="<?php echo isActive('calendar', $currentPath); ?>">Calendar</a></li>
								<li><a href="email" class="<?php echo isActive('email', $currentPath); ?>">Email</a></li>
								<li><a href="todo" class="<?php echo isActive('todo', $currentPath); ?>">To Do</a></li>
								<li><a href="notes" class="<?php echo isActive('notes', $currentPath); ?>">Notes</a></li>
								<li><a href="file_manager" class="<?php echo isActive('file_manager', $currentPath); ?>">File Manager</a></li>
							</ul>
						</li>
					</ul>
				</li>
				<li>
					<h6 class="submenu-hdr">CRM</h6>
					<ul>
						<li>
							<a href="contacts" class="<?php echo isActive('contacts', $currentPath) || isActive('contact_details', $currentPath)  || isActive('contact_grid', $currentPath)  ? 'active' : ''; ?>"><i class="ti ti-user-up"></i><span>Contacts</span></a>
						</li>
						<li>
							<a href="companies" class="<?php echo isActive('companies', $currentPath)|| isActive('companies_grid', $currentPath) || isActive('company_details', $currentPath)  ? 'active' : ''; ?>"><i class="ti ti-building-community"></i><span>Companies</span></a>
						</li>
						<li>
							<a href="deals" class="<?php echo isActive('deals', $currentPath)|| isActive('deals_details', $currentPath)|| isActive('deals_kanban', $currentPath)  ? 'active' : ''; ?>"><i class="ti ti-medal"></i><span>Deals</span></a>
						</li>
						<li>
							<a href="leads" class="<?php echo isActive('leads', $currentPath)|| isActive('leads_details', $currentPath)|| isActive('leads_kanban', $currentPath)  ? 'active' : ''; ?>"><i class="ti ti-chart-arcs"></i><span>Leads</span></a>
						</li>
						<li>
							<a href="pipeline" class="<?php echo isActive('pipeline', $currentPath); ?>"><i class="ti ti-timeline-event-exclamation"></i><span>Pipeline</span></a>
						</li>
						<li>
							<a href="campaign" class="<?php echo isActive('campaign', $currentPath)|| isActive('campaign_archieve', $currentPath)|| isActive('campaign_complete', $currentPath)  ? 'active' : ''; ?>"><i class="ti ti-brand-campaignmonitor"></i><span>Campaign</span></a>
						</li>
						<li>
							<a href="projects" class="<?php echo isActive('projects', $currentPath)|| isActive('project_details', $currentPath)|| isActive('project_grid', $currentPath)  ? 'active' : ''; ?>"><i class="ti ti-atom-2"></i><span>Projects</span></a>
						</li>
						<li>
							<a href="tasks" class="<?php echo isActive('tasks', $currentPath); ?>"><i class="ti ti-list-check"></i><span>Tasks</span></a>
						</li>
						<li>
							<a href="proposals" class="<?php echo isActive('proposals', $currentPath)|| isActive('proposals_grid', $currentPath)  ? 'active' : ''; ?>"><i class="ti ti-file-star"></i><span>Proposals</span></a>
						</li>
						<li>
							<a href="contracts" class="<?php echo isActive('contracts', $currentPath)|| isActive('contracts_grid', $currentPath)  ? 'active' : ''; ?>"><i class="ti ti-file-check"></i><span>Contracts</span></a>
						</li>
						<li>
							<a href="estimations" class="<?php echo isActive('estimations', $currentPath)|| isActive('estimations_kanban', $currentPath)  ? 'active' : ''; ?>"><i class="ti ti-file-report"></i><span>Estimations</span></a>
						</li>
						<li>
							<a href="invoices" class="<?php echo isActive('invoices', $currentPath)|| isActive('invoice_grid', $currentPath)  ? 'active' : ''; ?>"><i class="ti ti-file-invoice"></i><span>Invoices</span></a>
						</li>
						<li>
							<a href="payments" class="<?php echo isActive('payments', $currentPath); ?>"><i class="ti ti-report-money"></i><span>Payments</span></a>
						</li>
						<li>
							<a href="analytics" class="<?php echo isActive('analytics', $currentPath); ?>"><i class="ti ti-chart-bar"></i><span>Analytics</span></a>
						</li>
						<li>
							<a href="activities" class="<?php echo isActive('activities', $currentPath); ?>"><i class="ti ti-bounce-right"></i><span>Activities</span></a>
						</li>
					</ul>
				</li>
				
				<li>
							<h6 class="submenu-hdr">Reports</h6>
							<ul>
								<li class="submenu">
									<a href="javascript:void(0);" class="<?php echo isActive('lead_reports', $currentPath) || isActive('deal_reports', $currentPath) || isActive('contact_reports', $currentPath)|| isActive('company_reports', $currentPath)|| isActive('project_reports', $currentPath)|| isActive('task_reports', $currentPath) ? 'active subdrop' : ''; ?>">
										<i class="ti ti-file-invoice"></i><span>Reports</span><span
											class="menu-arrow"></span>
									</a>
									<ul>
										<li><a href="lead_reports"class="<?php echo isActive('lead_reports', $currentPath); ?>">Lead Reports</a></li>
										<li><a href="deal_reports"class="<?php echo isActive('deal_reports', $currentPath); ?>">Deal Reports</a></li>
										<li><a href="contact_reports"class="<?php echo isActive('contact_reports', $currentPath); ?>">Contact Reports</a></li>
										<li><a href="company_reports"class="<?php echo isActive('company_reports', $currentPath); ?>">Company Reports</a></li>
										<li><a href="project_reports" class="<?php echo isActive('project_reports', $currentPath); ?>">Project Reports</a></li>
										<li><a href="task_reports"class="<?php echo isActive('task_reports', $currentPath); ?>">Task Reports</a></li>
									</ul>
								</li>
							</ul>
						</li>
						
						<li>
							<h6 class="submenu-hdr">CRM Settings</h6>
							<ul>
								<li><a href="sources" class="<?php echo isActive('sources', $currentPath); ?>"><i class="ti ti-artboard"></i><span>Sources</span></a></li>
								<li><a href="lost_reason" class="<?php echo isActive('lost_reason', $currentPath); ?>"><i class="ti ti-message-exclamation"></i><span>Lost Reason</span></a></li>
								<li><a href="contact_stage" class="<?php echo isActive('contact_stage', $currentPath); ?>"><i class="ti ti-steam"></i><span>Contact Stage</span></a></li>
								<li><a href="industry" class="<?php echo isActive('industry', $currentPath); ?>"><i class="ti ti-building-factory"></i><span>Industry</span></a></li>
								<li><a href="calls" class="<?php echo isActive('calls', $currentPath); ?>"><i class="ti ti-phone-check"></i><span>Calls</span></a></li>
							</ul>
						</li>
						<li>
							<h6 class="submenu-hdr">User Management</h6>
							<ul>
								<li><a href="manage_users" class="<?php echo isActive('manage_users', $currentPath); ?>"><i class="ti ti-users"></i><span>Manage Users</span></a></li>
								<li><a href="roles_permissions" class="<?php echo isActive('roles_permissions', $currentPath); ?>"><i class="ti ti-navigation-cog"></i><span>Roles & Permissions</span></a></li>
								<li><a href="delete_request" class="<?php echo isActive('delete_request', $currentPath); ?>"><i class="ti ti-flag-question"></i><span>Delete Request</span></a></li>
							</ul>
						</li>
						<li>
							<h6 class="submenu-hdr">Membership</h6>
							<ul>
								<li class="submenu">
									<a href="javascript:void(0);" class="<?php echo isActive('membership_plans', $currentPath) || isActive('membership_addons', $currentPath) || isActive('membership_transactions', $currentPath) ? 'active subdrop' : ''; ?>">
										<i class="ti ti-file-invoice"></i><span>Membership</span><span class="menu-arrow"></span>
									</a>
									<ul>
										<li><a href="membership_plans" class="<?php echo isActive('membership_plans', $currentPath); ?>">Membership Plans</a></li>
										<li><a href="membership_addons" class="<?php echo isActive('membership_addons', $currentPath); ?>">Membership Addons</a></li>
										<li><a href="membership_transactions" class="<?php echo isActive('membership_transactions', $currentPath); ?>">Transactions</a></li>
									</ul>
								</li>
							</ul>
						</li>
						<li>
							<h6 class="submenu-hdr">Content</h6>
							<ul>
								<li><a href="page" class="<?php echo isActive('page', $currentPath); ?>"><i class="ti ti-page-break"></i><span>Pages</span></a></li>
								<li class="submenu">
									<a href="javascript:void(0);" class="<?php echo isActive('countries', $currentPath) || isActive('states', $currentPath) || isActive('cities', $currentPath) ? 'active subdrop' : ''; ?>">
										<i class="ti ti-map-pin-pin"></i><span>Location</span><span class="menu-arrow"></span>
									</a>
									<ul>
										<li><a href="countries" class="<?php echo isActive('countries', $currentPath); ?>">Countries</a></li>
										<li><a href="states" class="<?php echo isActive('states', $currentPath); ?>">States</a></li>
										<li><a href="cities" class="<?php echo isActive('cities', $currentPath); ?>">Cities</a></li>
									</ul>
								</li>
								<li><a href="testimonials" class="<?php echo isActive('testimonials', $currentPath); ?>"><i class="ti ti-quote"></i><span>Testimonials</span></a></li>
								<li><a href="faq" class="<?php echo isActive('faq', $currentPath); ?>"><i class="ti ti-question-mark"></i><span>FAQ</span></a></li>
							</ul>
						</li>
						<li>
							<h6 class="submenu-hdr">Support</h6>
							<ul>
								<li><a href="contact_messages" class="<?php echo isActive('contact_messages', $currentPath); ?>"><i class="ti ti-page-break"></i><span>Contact Messages</span></a></li>
								<li><a href="tickets" class="<?php echo isActive('tickets', $currentPath); ?>"><i class="ti ti-ticket"></i><span>Tickets</span></a></li>
							</ul>
						</li>
						<li>
							<h6 class="submenu-hdr">Settings</h6>
							<ul>
								<li class="submenu">
									<a href="javascript:void(0);" class="<?php echo isActive('profile', $currentPath) || isActive('security', $currentPath) || isActive('notifications', $currentPath) || isActive('connected_apps', $currentPath) ? 'active subdrop' : ''; ?>">
										<i class="ti ti-settings-cog"></i><span>General Settings</span><span class="menu-arrow"></span>
									</a>
									<ul>
										<li><a href="profile" class="<?php echo isActive('profile', $currentPath); ?>">Profile</a></li>
										<li><a href="security" class="<?php echo isActive('security', $currentPath); ?>">Security</a></li>
										<li><a href="notifications" class="<?php echo isActive('notifications', $currentPath); ?>">Notifications</a></li>
										<li><a href="connected_apps" class="<?php echo isActive('connected_apps', $currentPath); ?>">Connected Apps</a></li>
									</ul>
								</li>
								<li class="submenu">
									<a href="javascript:void(0);" class="<?php echo isActive('company_settings', $currentPath) || isActive('localization', $currentPath) || isActive('prefixes', $currentPath) || isActive('preference', $currentPath) || isActive('appearance', $currentPath) || isActive('language', $currentPath) ? 'active subdrop' : ''; ?>">
										<i class="ti ti-world-cog"></i><span>Website Settings</span><span class="menu-arrow"></span>
									</a>
									<ul>
										<li><a href="company_settings" class="<?php echo isActive('company_settings', $currentPath); ?>">Company Settings</a></li>
										<li><a href="localization" class="<?php echo isActive('localization', $currentPath); ?>">Localization</a></li>
										<li><a href="prefixes" class="<?php echo isActive('prefixes', $currentPath); ?>">Prefixes</a></li>
										<li><a href="preference" class="<?php echo isActive('preference', $currentPath); ?>">Preference</a></li>
										<li><a href="appearance" class="<?php echo isActive('appearance', $currentPath); ?>">Appearance</a></li>
										<li><a href="language" class="<?php echo isActive('language', $currentPath); ?>">Language</a></li>
									</ul>
								</li>
								<li class="submenu">
									<a href="javascript:void(0);" class="<?php echo isActive('invoice_settings', $currentPath) || isActive('printers', $currentPath) || isActive('custom_fields', $currentPath) ? 'active subdrop' : ''; ?>">
										<i class="ti ti-apps"></i><span>App Settings</span><span class="menu-arrow"></span>
									</a>
									<ul>
										<li><a href="invoice_settings" class="<?php echo isActive('invoice_settings', $currentPath); ?>">Invoice Settings</a></li>
										<li><a href="printers" class="<?php echo isActive('printers', $currentPath); ?>">Printers</a></li>
										<li><a href="custom_fields" class="<?php echo isActive('custom_fields', $currentPath); ?>">Custom Fields</a></li>
									</ul>
								</li>
								<li class="submenu">
									<a href="javascript:void(0);" class="<?php echo isActive('email_settings', $currentPath) || isActive('sms_gateways', $currentPath) || isActive('gdpr_cookies', $currentPath) ? 'active subdrop' : ''; ?>">
										<i class="ti ti-device-laptop"></i><span>System Settings</span><span class="menu-arrow"></span>
									</a>
									<ul>
										<li><a href="email_settings" class="<?php echo isActive('email_settings', $currentPath); ?>">Email Settings</a></li>
										<li><a href="sms_gateways" class="<?php echo isActive('sms_gateways', $currentPath); ?>">SMS Gateways</a></li>
										<li><a href="gdpr_cookies" class="<?php echo isActive('gdpr_cookies', $currentPath); ?>">GDPR Cookies</a></li>
									</ul>
								</li>
								<li class="submenu">
									<a href="javascript:void(0);" class="<?php echo isActive('payment_gateways', $currentPath) || isActive('bank_accounts', $currentPath) || isActive('tax_rates', $currentPath) || isActive('currencies', $currentPath) ? 'active subdrop' : ''; ?>">
										<i class="ti ti-moneybag"></i><span>Financial Settings</span><span class="menu-arrow"></span>
									</a>
									<ul>
										<li><a href="payment_gateways" class="<?php echo isActive('payment_gateways', $currentPath); ?>">Payment Gateways</a></li>
										<li><a href="bank_accounts" class="<?php echo isActive('bank_accounts', $currentPath); ?>">Bank Accounts</a></li>
										<li><a href="tax_rates" class="<?php echo isActive('tax_rates', $currentPath); ?>">Tax Rates</a></li>
										<li><a href="currencies" class="<?php echo isActive('currencies', $currentPath); ?>">Currencies</a></li>
									</ul>
								</li>
								<li class="submenu">
									<a href="javascript:void(0);" class="<?php echo isActive('storage', $currentPath) || isActive('ban_ip_address', $currentPath) ? 'active subdrop' : ''; ?>">
										<i class="ti ti-flag-cog"></i><span>Other Settings</span><span class="menu-arrow"></span>
									</a>
									<ul>
										<li><a href="storage" class="<?php echo isActive('storage', $currentPath); ?>">Storage</a></li>
										<li><a href="ban_ip_address" class="<?php echo isActive('ban_ip_address', $currentPath); ?>">Ban IP Address</a></li>
									</ul>
								</li>
							</ul>
						</li>
						<li>
							<h6 class="submenu-hdr">Pages</h6>
							<ul>
								<li class="submenu">
									<a href="javascript:void(0);">
										<i class="ti ti-lock-square-rounded"></i><span>Authentication</span><span class="menu-arrow"></span>
									</a>
									<ul>
										<li><a href="login" class="<?php echo isActive('login', $currentPath); ?>">Login</a></li>
										<li><a href="register" class="<?php echo isActive('register', $currentPath); ?>">Register</a></li>
										<li><a href="forgot_password" class="<?php echo isActive('forgot_password', $currentPath); ?>">Forgot Password</a></li>
										<li><a href="reset_password" class="<?php echo isActive('reset_password', $currentPath); ?>">Reset Password</a></li>
										<li><a href="email_verification" class="<?php echo isActive('email_verification', $currentPath); ?>">Email Verification</a></li>
										<li><a href="two_step_verification" class="<?php echo isActive('two_step_verification', $currentPath); ?>">2 Step Verification</a></li>
										<li><a href="lock_screen" class="<?php echo isActive('lock_screen', $currentPath); ?>">Lock Screen</a></li>
									</ul>
								</li>
								<li class="submenu">
									<a href="javascript:void(0);">
										<i class="ti ti-error-404"></i><span>Error Pages</span><span class="menu-arrow"></span>
									</a>
									<ul>
										<li><a href="error_404" class="<?php echo isActive('error_404', $currentPath); ?>">404 Error</a></li>
										<li><a href="error_500" class="<?php echo isActive('error_500', $currentPath); ?>">500 Error</a></li>
									</ul>
								</li>
								<li><a href="blank_page" class="<?php echo isActive('blank_page', $currentPath); ?>"><i class="ti ti-apps"></i><span>Blank Page</span></a></li>
								<li><a href="coming_soon" class="<?php echo isActive('coming_soon', $currentPath); ?>"><i class="ti ti-device-laptop"></i><span>Coming Soon</span></a></li>
								<li><a href="under_maintenance" class="<?php echo isActive('under_maintenance', $currentPath); ?>"><i class="ti ti-moneybag"></i><span>Under Maintenance</span></a></li>
							</ul>
						</li>
						<li>
							<h6 class="submenu-hdr">UI Interface</h6>
							<ul>
								<li class="submenu">
									<a href="javascript:void(0);" class="<?php echo isActive('ui_alerts', $currentPath) || isActive('ui_accordion', $currentPath) || isActive('ui_avatar', $currentPath) || isActive('ui_badges', $currentPath) || isActive('ui_borders', $currentPath) || isActive('ui_buttons', $currentPath) || isActive('ui_buttons_group', $currentPath) || isActive('ui_breadcrumb', $currentPath) || isActive('ui_cards', $currentPath) || isActive('ui_carousel', $currentPath) || isActive('ui_colors', $currentPath) || isActive('ui_dropdowns', $currentPath) || isActive('ui_grid', $currentPath) || isActive('ui_images', $currentPath) || isActive('ui_lightbox', $currentPath) || isActive('ui_media', $currentPath) || isActive('ui_modals', $currentPath) || isActive('ui_offcanvas', $currentPath) || isActive('ui_pagination', $currentPath) || isActive('ui_popovers', $currentPath) || isActive('ui_progress', $currentPath) || isActive('ui_placeholders', $currentPath) || isActive('ui_spinner', $currentPath) || isActive('ui_sweetalerts', $currentPath) || isActive('ui_nav_tabs', $currentPath) || isActive('ui_toasts', $currentPath) || isActive('ui_tooltips', $currentPath) || isActive('ui_typography', $currentPath) || isActive('ui_video', $currentPath) ? 'active subdrop' : ''; ?>">
										<i class="ti ti-adjustments-check"></i><span>Base UI</span><span class="menu-arrow"></span>
									</a>
									<ul>
										<li><a href="ui_alerts" class="<?php echo isActive('ui_alerts', $currentPath); ?>">Alerts</a></li>
										<li><a href="ui_accordion" class="<?php echo isActive('ui_accordion', $currentPath); ?>">Accordion</a></li>
										<li><a href="ui_avatar" class="<?php echo isActive('ui_avatar', $currentPath); ?>">Avatar</a></li>
										<li><a href="ui_badges" class="<?php echo isActive('ui_badges', $currentPath); ?>">Badges</a></li>
										<li><a href="ui_borders" class="<?php echo isActive('ui_borders', $currentPath); ?>">Border</a></li>
										<li><a href="ui_buttons" class="<?php echo isActive('ui_buttons', $currentPath); ?>">Buttons</a></li>
										<li><a href="ui_buttons_group" class="<?php echo isActive('ui_buttons_group', $currentPath); ?>">Button Group</a></li>
										<li><a href="ui_breadcrumb" class="<?php echo isActive('ui_breadcrumb', $currentPath); ?>">Breadcrumb</a></li>
										<li><a href="ui_cards" class="<?php echo isActive('ui_cards', $currentPath); ?>">Card</a></li>
										<li><a href="ui_carousel" class="<?php echo isActive('ui_carousel', $currentPath); ?>">Carousel</a></li>
										<li><a href="ui_colors" class="<?php echo isActive('ui_colors', $currentPath); ?>">Colors</a></li>
										<li><a href="ui_dropdowns" class="<?php echo isActive('ui_dropdowns', $currentPath); ?>">Dropdowns</a></li>
										<li><a href="ui_grid" class="<?php echo isActive('ui_grid', $currentPath); ?>">Grid</a></li>
										<li><a href="ui_images" class="<?php echo isActive('ui_images', $currentPath); ?>">Images</a></li>
										<li><a href="ui_lightbox" class="<?php echo isActive('ui_lightbox', $currentPath); ?>">Lightbox</a></li>
										<li><a href="ui_media" class="<?php echo isActive('ui_media', $currentPath); ?>">Media</a></li>
										<li><a href="ui_modals" class="<?php echo isActive('ui_modals', $currentPath); ?>">Modals</a></li>
										<li><a href="ui_offcanvas" class="<?php echo isActive('ui_offcanvas', $currentPath); ?>">Offcanvas</a></li>
										<li><a href="ui_pagination" class="<?php echo isActive('ui_pagination', $currentPath); ?>">Pagination</a></li>
										<li><a href="ui_popovers" class="<?php echo isActive('ui_popovers', $currentPath); ?>">Popovers</a></li>
										<li><a href="ui_progress" class="<?php echo isActive('ui_progress', $currentPath); ?>">Progress</a></li>
										<li><a href="ui_placeholders" class="<?php echo isActive('ui_placeholders', $currentPath); ?>">Placeholders</a></li>
										<li><a href="ui_rangeslider" class="<?php echo isActive('ui_rangeslider', $currentPath); ?>">Range Slider</a></li>
										<li><a href="ui_spinner" class="<?php echo isActive('ui_spinner', $currentPath); ?>">Spinner</a></li>
										<li><a href="ui_sweetalerts" class="<?php echo isActive('ui_sweetalerts', $currentPath); ?>">Sweet Alerts</a></li>
										<li><a href="ui_nav_tabs" class="<?php echo isActive('ui_tabs', $currentPath); ?>">Tabs</a></li>
										<li><a href="ui_toasts" class="<?php echo isActive('ui_toasts', $currentPath); ?>">Toasts</a></li>
										<li><a href="ui_tooltips" class="<?php echo isActive('ui_tooltips', $currentPath); ?>">Tooltips</a></li>
										<li><a href="ui_typography" class="<?php echo isActive('ui_typography', $currentPath); ?>">Typography</a></li>
										<li><a href="ui_video" class="<?php echo isActive('ui_video', $currentPath); ?>">Video</a></li>
									</ul>
								</li>
								<li class="submenu">
									<a href="javascript:void(0);" class="<?php echo isActive('ui_ribbon', $currentPath) || isActive('ui_clipboard', $currentPath) || isActive('ui_drag_drop', $currentPath) || isActive('ui_rangeslider', $currentPath) || isActive('ui_rating', $currentPath) || isActive('ui_text_editor', $currentPath) || isActive('ui_counter', $currentPath) || isActive('ui_scrollbar', $currentPath) || isActive('ui_stickynote', $currentPath) || isActive('ui_timeline', $currentPath) ? 'active subdrop' : ''; ?>">
										<i class="ti ti-box-align-bottom"></i><span>Advanced UI</span><span class="menu-arrow"></span>
									</a>
									<ul>
										<li><a href="ui_ribbon" class="<?php echo isActive('ui_ribbon', $currentPath); ?>">Ribbon</a></li>
										<li><a href="ui_clipboard" class="<?php echo isActive('ui_clipboard', $currentPath); ?>">Clipboard</a></li>
										<li><a href="ui_drag_drop" class="<?php echo isActive('ui_drag_drop', $currentPath); ?>">Drag & Drop</a></li>
										<li><a href="ui_rangeslider" class="<?php echo isActive('ui_rangeslider', $currentPath); ?>">Range Slider</a></li>
										<li><a href="ui_rating" class="<?php echo isActive('ui_rating', $currentPath); ?>">Rating</a></li>
										<li><a href="ui_text_editor" class="<?php echo isActive('ui_text_editor', $currentPath); ?>">Text Editor</a></li>
										<li><a href="ui_counter" class="<?php echo isActive('ui_counter', $currentPath); ?>">Counter</a></li>
										<li><a href="ui_scrollbar" class="<?php echo isActive('ui_scrollbar', $currentPath); ?>">Scrollbar</a></li>
										<li><a href="ui_stickynote" class="<?php echo isActive('ui_stickynote', $currentPath); ?>">Sticky Note</a></li>
										<li><a href="ui_timeline" class="<?php echo isActive('ui_timeline', $currentPath); ?>">Timeline</a></li>
									</ul>
								</li>
								<li class="submenu">
									<a href="javascript:void(0);" class="<?php echo isActive('chart_apex', $currentPath) || isActive('chart_c3', $currentPath) || isActive('chart_js', $currentPath) || isActive('chart_morris', $currentPath) || isActive('chart_flot', $currentPath) || isActive('chart_peity', $currentPath) ? 'active subdrop' : ''; ?>"><i class="ti ti-chart-donut-2"></i>
										<span>Charts</span><span class="menu-arrow"></span>
									</a>
									<ul>
										<li><a href="chart_apex" class="<?php echo isActive('chart_apex', $currentPath); ?>">Apex Charts</a></li>
										<li><a href="chart_c3" class="<?php echo isActive('chart_c3', $currentPath); ?>">Chart C3</a></li>
										<li><a href="chart_js" class="<?php echo isActive('chart_js', $currentPath); ?>">Chart Js</a></li>
										<li><a href="chart_morris" class="<?php echo isActive('chart_morris', $currentPath); ?>">Morris Charts</a></li>
										<li><a href="chart_flot" class="<?php echo isActive('chart_flot', $currentPath); ?>">Flot Charts</a></li>
										<li><a href="chart_peity" class="<?php echo isActive('chart_peity', $currentPath); ?>">Peity Charts</a></li>
									</ul>
								</li>
								<li class="submenu">
									<a href="javascript:void(0);" class="<?php echo isActive('icon_fontawesome', $currentPath) || isActive('icon_feather', $currentPath) || isActive('icon_ionic', $currentPath) || isActive('icon_material', $currentPath) || isActive('icon_pe7', $currentPath) || isActive('icon_simpleline', $currentPath) || isActive('icon_themify', $currentPath) || isActive('icon_weather', $currentPath) || isActive('icon_typicon', $currentPath) || isActive('icon_flag', $currentPath) ? 'active subdrop' : ''; ?>"><i class="ti ti-icons"></i>
										<span>Icons</span><span class="menu-arrow"></span>
									</a>
									<ul>
										<li><a href="icon_fontawesome" class="<?php echo isActive('icon_fontawesome', $currentPath); ?>">Fontawesome Icons</a></li>
										<li><a href="icon_feather" class="<?php echo isActive('icon_feather', $currentPath); ?>">Feather Icons</a></li>
										<li><a href="icon_ionic" class="<?php echo isActive('icon_ionic', $currentPath); ?>">Ionic Icons</a></li>
										<li><a href="icon_material" class="<?php echo isActive('icon_material', $currentPath); ?>">Material Icons</a></li>
										<li><a href="icon_pe7" class="<?php echo isActive('icon_pe7', $currentPath); ?>">Pe7 Icons</a></li>
										<li><a href="icon_simpleline" class="<?php echo isActive('icon_simpleline', $currentPath); ?>">Simpleline Icons</a></li>
										<li><a href="icon_themify" class="<?php echo isActive('icon_themify', $currentPath); ?>">Themify Icons</a></li>
										<li><a href="icon_weather" class="<?php echo isActive('icon_weather', $currentPath); ?>">Weather Icons</a></li>
										<li><a href="icon_typicon" class="<?php echo isActive('icon_typicon', $currentPath); ?>">Typicon Icons</a></li>
										<li><a href="icon_flag" class="<?php echo isActive('icon_flag', $currentPath); ?>">Flag Icons</a></li>
									</ul>
								</li>
								<li class="submenu">
									<a href="javascript:void(0);" class="<?php echo isActive('form_basic_inputs', $currentPath) || isActive('form_checkbox_radios', $currentPath) || isActive('form_input_groups', $currentPath) || isActive('form_grid_gutters', $currentPath) || isActive('form_select', $currentPath) || isActive('form_mask', $currentPath) || isActive('form_fileupload', $currentPath) || isActive('form_horizontal', $currentPath) || isActive('form_vertical', $currentPath) || isActive('form_floating_labels', $currentPath) || isActive('form_validation', $currentPath) || isActive('form_select2', $currentPath) || isActive('form_wizard', $currentPath) ? 'active subdrop' : ''; ?>">
										<i class="ti ti-forms"></i><span>Forms</span><span class="menu-arrow"></span>
									</a>
									<ul>
										<li class="submenu submenu-two">
											<a href="javascript:void(0);" class="<?php echo isActive('form_basic_inputs', $currentPath) || isActive('form_checkbox_radios', $currentPath) || isActive('form_input_groups', $currentPath) || isActive('form_grid_gutters', $currentPath) || isActive('form_select', $currentPath) || isActive('form_mask', $currentPath) || isActive('form_fileupload', $currentPath) ? 'active subdrop' : ''; ?>">Form Elements<span class="menu-arrow inside-submenu"></span></a>
											<ul>
												<li><a href="form_basic_inputs" class="<?php echo isActive('form_basic_inputs', $currentPath); ?>">Basic Inputs</a></li>
												<li><a href="form_checkbox_radios" class="<?php echo isActive('form_checkbox_radios', $currentPath); ?>">Checkbox & Radios</a></li>
												<li><a href="form_input_groups" class="<?php echo isActive('form_input_groups', $currentPath); ?>">Input Groups</a></li>
												<li><a href="form_grid_gutters" class="<?php echo isActive('form_grid_gutters', $currentPath); ?>">Grid & Gutters</a></li>
												<li><a href="form_select" class="<?php echo isActive('form_select', $currentPath); ?>">Form Select</a></li>
												<li><a href="form_mask" class="<?php echo isActive('form_mask', $currentPath); ?>">Input Masks</a></li>
												<li><a href="form_fileupload" class="<?php echo isActive('form_fileupload', $currentPath); ?>">File Uploads</a></li>
											</ul>
										</li>
										<li class="submenu submenu-two">
											<a href="javascript:void(0);" class="<?php echo isActive('form_horizontal', $currentPath) || isActive('form_vertical', $currentPath) || isActive('form_floating_labels', $currentPath) ? 'active subdrop' : ''; ?>">Layouts<span class="menu-arrow inside-submenu"></span></a>
											<ul>
												<li><a href="form_horizontal" class="<?php echo isActive('form_horizontal', $currentPath); ?>">Horizontal Form</a></li>
												<li><a href="form_vertical" class="<?php echo isActive('form_vertical', $currentPath); ?>">Vertical Form</a></li>
												<li><a href="form_floating_labels" class="<?php echo isActive('form_floating_labels', $currentPath); ?>">Floating Labels</a></li>
											</ul>
										</li>
										<li><a href="form_validation" class="<?php echo isActive('form_validation', $currentPath); ?>">Form Validation</a></li>
										<li><a href="form_select2" class="<?php echo isActive('form_select2', $currentPath); ?>">Select2</a></li>
										<li><a href="form_wizard" class="<?php echo isActive('form_wizard', $currentPath); ?>">Form Wizard</a></li>
									</ul>
								</li>
								<li class="submenu">
									<a href="javascript:void(0);" class="<?php echo isActive('tables_basic', $currentPath) || isActive('data_tables', $currentPath) ? 'active subdrop' : ''; ?>"><i class="ti ti-table"></i><span>Tables</span><span
											class="menu-arrow"></span></a>
									<ul>
										<li><a href="tables_basic" class="<?php echo isActive('tables_basic', $currentPath); ?>">Basic Tables </a></li>
										<li><a href="data_tables" class="<?php echo isActive('data_tables', $currentPath); ?>">Data Table </a></li>
									</ul>
								</li>
							</ul>
						</li>
						<li>
							<h6 class="submenu-hdr">Help</h6>
							<ul>
								<li><a href="javascript:void(0);"><i class="ti ti-file-type-doc"></i><span>Documentation</span></a></li>
								<li><a href="javascript:void(0);"><i class="ti ti-arrow-capsule"></i><span>Changelog v2.2.1</span></a></li>
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
				</li>
			</ul>
		</div>
	</div>
</div>
<!-- /Sidebar -->