
    <div class="col-xl-9 budget-role-notes">
                
        <div class="section-bulk-wrap">
            <div class="bulk-action-type">
                <div class="form-sort select-bluk ">
                    <select class="select">
                        <option>Bulk Actions</option>
                        <option>Delete Marked</option>
                        <option>Unmark All</option>
                        <option>Mark All</option>
                    </select>
                </div>
                <a href="javascript:void(0);" class="btn btn-added">Apply</a>
                <div class="search-set">
                    <div class="search-input">
                        <a href="javascript:void(0);" class="btn btn-searchset"><i data-feather="search" class="feather-search"></i></a>
                    <div id="DataTables_Table_0_filter" class="dataTables_filter">
                        <label> <input type="search" class="form-control form-control-sm" placeholder="Search"></label>
                    </div></div>
                </div>
            </div>
            <div class="form-sort">
                <i data-feather="filter" class="feather-filter"></i>
                <select class="select">
                    <option>Recent</option>
                    <option>Last Modified</option>
                    <option>Last Modified by me</option>
                </select>
            </div>
        </div>

        <div class="tab-content" id="v-pills-tabContent">
            <div class="tab-pane fade active show" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">	
                <div class="section-notes-slider">
                    <div class="row">
                        <div class="notes-content">
                            <div class="notes-header">
                                <h3>Important Notes </h3>
                            </div>  
                            <div class="notes-close">
                                <a href="javascript:void(0);"><i class="fas fa-times"></i> Close </a>
                            </div>
                        </div> 
                        <div class="col-md-12" id="notes-important">
                            <div class="notes-slider owl-carousel">
                                <div class="notes-card">
                                    <div class="notes-card-body">
                                        <p class="badged"><i class="fas fa-circle"></i> Low</p>
                                        <a href="javascript:void(0);" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="fas fa-ellipsis-v"></i>
                                        </a>
                                        <div class="dropdown-menu notes-menu dropdown-menu-end">
                                            <a href="#" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#edit-note-units"><span><i data-feather="edit"></i></span>Edit</a>
                                            <a href="#" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#delete-note-units"><span><i data-feather="trash-2"></i></span>Delete</a>
                                            <a href="javascript:void(0);" class="dropdown-item"><span><i data-feather="star"></i></span>Not Important</a>
                                            <a href="#" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#view-note-units"><span><i data-feather="eye"></i></span>View</a>
                                        </div>
                                    </div>
                                    <div class="notes-slider-content">
                                        <h4>
                                            <a href="javascript:void(0);">
                                            Plan a trip to another country
                                            </a>
                                            </h4>
                                        <p>Space, the final frontier. These are the voyages of the Starship Enterprise.</p>
                                    </div>
                                    <div class="notes-slider-widget">
                                        <div class="notes-logo">
                                            <a href="javascript:void(0);">
                                                <span>
                                                    <img src="{{URL::asset('/build/img/profiles/avatar-01.jpg')}}" alt="Profile" class="img-fluid">
                                                </span>																	
                                            </a>	
                                            <div class="d-flex">
                                                <span class="low-square"><i class="fas fa-square"></i></span>															
                                                <p> Personal</p>
                                            </div>
                                        </div>
                                        <div class="notes-star-delete">
                                            <a href="javascript:void(0);">
                                                <span><i class="fas fa-star"></i></span>
                                            </a>
                                            <a href="javascript:void(0);">
                                                <span><i data-feather="trash-2"></i></span>
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <div class="notes-card medium">
                                    <div class="notes-card-body">
                                        <p class="badged medium"><i class="fas fa-circle"></i> Medium</p>
                                        <a href="#" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="fas fa-ellipsis-v"></i>
                                        </a>
                                        <div class="dropdown-menu notes-menu dropdown-menu-end">
                                            <a href="#" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#edit-note-units"><span><i data-feather="edit"></i></span>Edit</a>
                                            <a href="#" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#delete-note-units"><span><i data-feather="trash-2"></i></span>Delete</a>
                                            <a href="#" class="dropdown-item"><span><i data-feather="star"></i></span>Not Important</a>
                                            <a href="#" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#view-note-units"><span><i data-feather="eye"></i></span>View</a>
                                        </div>
                                    </div>
                                    <div class="notes-slider-content">
                                        <h4>
                                            <a href="javascript:void(0);">
                                                Improve touch typing
                                            </a> 
                                        </h4>
                                        <p>Well, the way they make shows is, they make one show.</p>
                                    </div>
                                    <div class="notes-slider-widget">
                                        <div class="notes-logo">
                                            <a href="javascript:void(0);">
                                                <span>
                                                    <img src="{{URL::asset('/build/img/profiles/avatar-02.jpg')}}" alt="Profile" class="img-fluid">
                                                </span>
                                            </a>
                                            <div class="d-flex">
                                                <span class="medium-square"><i class="fas fa-square"></i></span>
                                                <p class="medium"> Work</p>
                                            </div>
                                        </div>
                                        <div class="notes-star-delete">
                                            <a href="javascript:void(0);">
                                                <span><i class="fas fa-star"></i></span>
                                            </a>
                                            <a href="javascript:void(0);">
                                                <span><i data-feather="trash-2"></i></span>
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <div class="notes-card high">
                                    <div class="notes-card-body">
                                        <p class="badged high"><i class="fas fa-circle"></i> High</p>
                                        <a href="#" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="fas fa-ellipsis-v"></i>
                                        </a>
                                        <div class="dropdown-menu notes-menu dropdown-menu-end">
                                            <a href="#" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#edit-note-units"><span><i data-feather="edit"></i></span>Edit</a>
                                            <a href="#" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#delete-note-units"><span><i data-feather="trash-2"></i></span>Delete</a>
                                            <a href="#" class="dropdown-item"><span><i data-feather="star"></i></span>Not Important</a>
                                            <a href="#" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#view-note-units"><span><i data-feather="eye"></i></span>View</a>
                                        </div>
                                    </div>
                                    <div class="notes-slider-content">
                                        <h4>
                                            <a href="javascript:void(0);">
                                                Learn calligraphy
                                            </a></h4>
                                        <p>Calligraphy, the art of beautiful handwriting. The term may derive from the Greek words. </p>
                                    </div>
                                    <div class="notes-slider-widget">
                                        <div class="notes-logo">
                                            <a href="javascript:void(0);">
                                                <span>
                                                    <img src="{{URL::asset('/build/img/profiles/avatar-03.jpg')}}" alt="Profile" class="img-fluid">
                                                </span>
                                            </a>
                                            <div class="d-flex">
                                                <span class="high-square"><i class="fas fa-square"></i></span>
                                                <p class="high"> Social</p>
                                            </div>
                                        </div>
                                        <div class="notes-star-delete">
                                            <a href="javascript:void(0);">
                                                <span><i class="fas fa-star"></i></span>
                                            </a>
                                            <a href="javascript:void(0);">
                                                <span><i data-feather="trash-2"></i></span>
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <div class="notes-card medium">
                                    <div class="notes-card-body">
                                        <p class="badged medium"><i class="fas fa-circle"></i> Medium</p>
                                        <a href="#" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="fas fa-ellipsis-v"></i>
                                        </a>
                                        <div class="dropdown-menu notes-menu dropdown-menu-end">
                                            <a href="#" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#edit-note-units"><span><i data-feather="edit"></i></span>Edit</a>
                                            <a href="#" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#delete-note-units"><span><i data-feather="trash-2"></i></span>Delete</a>
                                            <a href="#" class="dropdown-item"><span><i data-feather="star"></i></span>Not Important</a>
                                            <a href="#" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#view-note-units"><span><i data-feather="eye"></i></span>View</a>
                                        </div>
                                    </div>
                                    <div class="notes-slider-content">
                                        <h4>
                                            <a href="javascript:void(0);">
                                                Improve touch typing
                                            </a> 
                                        </h4>
                                        <p>Well, the way they make shows is, they make one show.</p>
                                    </div>
                                    <div class="notes-slider-widget">
                                        <div class="notes-logo">
                                            <a href="javascript:void(0);">
                                                <span>
                                                    <img src="{{URL::asset('/build/img/profiles/avatar-03.jpg')}}" alt="Profile" class="img-fluid">
                                                </span>
                                            </a>
                                            <div class="d-flex">
                                                <span class="medium-square"><i class="fas fa-square"></i></span>
                                                <p class="medium"> Work</p>
                                            </div>
                                        </div>
                                        <div class="notes-star-delete">
                                            <a href="javascript:void(0);">
                                                <span><i class="fas fa-star"></i></span>
                                            </a>
                                            <a href="javascript:void(0);">
                                                <span><i data-feather="trash-2"></i></span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>                                                     
                    </div>
                </div>
                <div class="section-card-body" id="notes-trash">
                    <div class="row">
                        <div class="col-md-4 d-flex">
                            <div class="notes-card notes-card-details w-100">
                                <div class="notes-card-body">
                                    <p class="badged medium"><i class="fas fa-circle"></i> Medium</p>
                                    <a href="#" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="fas fa-ellipsis-v"></i>
                                        </a>
                                        <div class="dropdown-menu notes-menu dropdown-menu-end">
                                            <a href="#" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#edit-note-units"><span><i data-feather="edit"></i></span>Edit</a>
                                            <a href="#" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#delete-note-units"><span><i data-feather="trash-2"></i></span>Delete</a>
                                            <a href="#" class="dropdown-item"><span><i data-feather="star"></i></span>Not Important</a>
                                            <a href="#" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#view-note-units"><span><i data-feather="eye"></i></span>View</a>
                                        </div>
                                </div>
                                <div class="notes-wrap-content">
                                    <h4>
                                        <a href="javascript:void(0);">
                                            Backup Files EOD
                                        </a>
                                        </h4>
                                    <p class="wrap-cal"><i data-feather="calendar" class="feather-calendar"></i>  25 Jul 2023</p>
                                    <p>Project files should be took backup before end of the day.</p>
                                </div>
                                <div class="notes-slider-widget notes-widget-profile">
                                    <div class="notes-logo">
                                        <a href="javascript:void(0);">
                                            <span>
                                                <img src="{{URL::asset('/build/img/users/user-26.jpg')}}" alt="Profile" class="img-fluid">
                                            </span>
                                        </a>
                                        <div class="d-flex">
                                            <span class="medium-square"><i class="fas fa-square"></i></span>
                                            <p class="medium"> Work</p>
                                        </div>
                                    </div>
                                    <div class="notes-star-delete">
                                        <a href="javascript:void(0);">
                                            <span><i data-feather="star"></i></span>
                                        </a>
                                        <a href="javascript:void(0);">
                                            <span><i data-feather="trash-2"></i></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 d-flex">
                            <div class="notes-card notes-card-details w-100">
                                <div class="notes-card-body">
                                    <p class="badged high"><i class="fas fa-circle"></i> High</p>
                                    <a href="#" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="fas fa-ellipsis-v"></i>
                                        </a>
                                        <div class="dropdown-menu notes-menu dropdown-menu-end">
                                            <a href="#" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#edit-note-units"><span><i data-feather="edit"></i></span>Edit</a>
                                            <a href="#" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#delete-note-units"><span><i data-feather="trash-2"></i></span>Delete</a>
                                            <a href="#" class="dropdown-item"><span><i data-feather="star"></i></span>Not Important</a>
                                            <a href="#" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#view-note-units"><span><i data-feather="eye"></i></span>View</a>
                                        </div>
                                </div>
                                <div class="notes-wrap-content">
                                    <h4>
                                        <a href="javascript:void(0);">
                                            Download Server Logs
                                        </a>
                                    </h4>
                                    <p class="wrap-cal"><i data-feather="calendar" class="feather-calendar"></i>  27 Jul 2023</p>
                                    <p>Server log is a text document that contains a record of all activity.</p>
                                </div>
                                <div class="notes-slider-widget notes-widget-profile">
                                    <div class="notes-logo">
                                        <a href="javascript:void(0);">
                                            <span>
                                                <img src="{{URL::asset('/build/img/users/user-27.jpg')}}" alt="Profile" class="img-fluid">
                                            </span>
                                        </a>
                                        <div class="d-flex">
                                            <span class="high-square"><i class="fas fa-square"></i></span>
                                            <p class="high"> Social</p>
                                        </div>
                                    </div>
                                    <div class="notes-star-delete">
                                        <a href="javascript:void(0);">
                                            <span><i data-feather="star"></i></span>
                                        </a>
                                        <a href="javascript:void(0);">
                                            <span><i data-feather="trash-2"></i></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 d-flex">
                            <div class="notes-card notes-card-details w-100">
                                <div class="notes-card-body">
                                    <p class="badged low"><i class="fas fa-circle"></i> Low</p>
                                    <a href="#" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="fas fa-ellipsis-v"></i>
                                        </a>
                                        <div class="dropdown-menu notes-menu dropdown-menu-end">
                                            <a href="#" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#edit-note-units"><span><i data-feather="edit"></i></span>Edit</a>
                                            <a href="#" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#delete-note-units"><span><i data-feather="trash-2"></i></span>Delete</a>
                                            <a href="#" class="dropdown-item"><span><i data-feather="star"></i></span>Not Important</a>
                                            <a href="#" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#view-note-units"><span><i data-feather="eye"></i></span>View</a>
                                        </div>
                                </div>
                                <div class="notes-wrap-content">
                                    <h4>
                                        <a href="javascript:void(0);">
                                            Team meet at Starbucks
                                        </a>
                                    </h4>
                                    <p class="wrap-cal"><i data-feather="calendar" class="feather-calendar"></i>  13 Aug 2023</p>
                                    <p>Meeting all teamets at Starbucks for identifying them all.</p>
                                </div>
                                <div class="notes-slider-widget notes-widget-profile">
                                    <div class="notes-logo">
                                        <a href="javascript:void(0);">
                                            <span>
                                                <img src="{{URL::asset('/build/img/users/user-28.jpg')}}" alt="Profile" class="img-fluid">
                                            </span>
                                        </a>
                                        <div class="d-flex">
                                            <span class="low-square"><i class="fas fa-square"></i></span>
                                            <p class="low"> Personal</p>
                                        </div>
                                    </div>
                                    <div class="notes-star-delete">
                                        <a href="javascript:void(0);">
                                            <span><i data-feather="star"></i></span>
                                        </a>
                                        <a href="javascript:void(0);">
                                            <span><i data-feather="trash-2"></i></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 d-flex">
                            <div class="notes-card notes-card-details w-100">
                                <div class="notes-card-body">
                                    <p class="badged high"><i class="fas fa-circle"></i> High</p>
                                    <a href="#" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="fas fa-ellipsis-v"></i>
                                        </a>
                                        <div class="dropdown-menu notes-menu dropdown-menu-end">
                                            <a href="#" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#edit-note-units"><span><i data-feather="edit"></i></span>Edit</a>
                                            <a href="#" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#delete-note-units"><span><i data-feather="trash-2"></i></span>Delete</a>
                                            <a href="#" class="dropdown-item"><span><i data-feather="star"></i></span>Not Important</a>
                                            <a href="#" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#view-note-units"><span><i data-feather="eye"></i></span>View</a>
                                        </div>
                                </div>
                                <div class="notes-wrap-content">
                                    <h4>
                                        <a href="javascript:void(0);">
                                            Create a compost pile
                                        </a>
                                        
                                    </h4>
                                    <p class="wrap-cal"><i data-feather="calendar" class="feather-calendar"></i>  23 Aug 2023</p>
                                    <p>Compost pile refers to fruit and vegetable scraps, used tea, coffee grounds etc..</p>
                                </div>
                                <div class="notes-slider-widget notes-widget-profile">
                                    <div class="notes-logo">
                                        <a href="javascript:void(0);">
                                            <span>
                                                <img src="{{URL::asset('/build/img/users/user-29.jpg')}}" alt="Profile" class="img-fluid">
                                            </span>
                                        </a>
                                        <div class="d-flex">
                                            <span class="high-square"><i class="fas fa-square"></i></span>
                                            <p class="high"> Social</p>
                                        </div>
                                    </div>
                                    <div class="notes-star-delete">
                                        <a href="javascript:void(0);">
                                            <span><i data-feather="star"></i></span>
                                        </a>
                                        <a href="javascript:void(0);">
                                            <span><i data-feather="trash-2"></i></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 d-flex">
                            <div class="notes-card notes-card-details w-100">
                                <div class="notes-card-body">
                                    <p class="badged low"><i class="fas fa-circle"></i> Low</p>
                                    <a href="#" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="fas fa-ellipsis-v"></i>
                                        </a>
                                        <div class="dropdown-menu notes-menu dropdown-menu-end">
                                            <a href="#" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#edit-note-units"><span><i data-feather="edit"></i></span>Edit</a>
                                            <a href="#" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#delete-note-units"><span><i data-feather="trash-2"></i></span>Delete</a>
                                            <a href="#" class="dropdown-item"><span><i data-feather="star"></i></span>Not Important</a>
                                            <a href="#" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#view-note-units"><span><i data-feather="eye"></i></span>View</a>
                                        </div>
                                </div>
                                <div class="notes-wrap-content">
                                    <h4>
                                        <a href="javascript:void(0);">
                                            Take a hike at a local park
                                        </a>
                                    </h4>
                                    <p class="wrap-cal"><i data-feather="calendar" class="feather-calendar"></i>  04 Sep 2023</p>
                                    <p>Hiking involves a long energetic walk in a natural environment.</p>
                                </div>
                                <div class="notes-slider-widget notes-widget-profile">
                                    <div class="notes-logo">
                                        <a href="javascript:void(0);">
                                            <span>
                                                <img src="{{URL::asset('/build/img/users/user-30.jpg')}}" alt="Profile" class="img-fluid">
                                            </span>
                                        </a>
                                        <div class="d-flex">
                                            <span class="low-square"><i class="fas fa-square"></i></span>
                                            <p class="low"> Personal</p>
                                        </div>
                                    </div>
                                    <div class="notes-star-delete">
                                        <a href="javascript:void(0);">
                                            <span><i data-feather="star"></i></span>
                                        </a>
                                        <a href="javascript:void(0);">
                                            <span><i data-feather="trash-2"></i></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 d-flex">
                            <div class="notes-card notes-card-details w-100">
                                <div class="notes-card-body">
                                    <p class="badged medium"><i class="fas fa-circle"></i> Medium</p>
                                    <a href="#" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="fas fa-ellipsis-v"></i>
                                        </a>
                                        <div class="dropdown-menu notes-menu dropdown-menu-end">
                                            <a href="#" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#edit-note-units"><span><i data-feather="edit"></i></span>Edit</a>
                                            <a href="#" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#delete-note-units"><span><i data-feather="trash-2"></i></span>Delete</a>
                                            <a href="#" class="dropdown-item"><span><i data-feather="star"></i></span>Not Important</a>
                                            <a href="#" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#view-note-units"><span><i data-feather="eye"></i></span>View</a>
                                        </div>
                                </div>
                                <div class="notes-wrap-content">
                                    <h4>
                                        <a href="javascript:void(0);">
                                            Research a topic interested
                                        </a>															
                                    </h4>
                                    <p class="wrap-cal"><i data-feather="calendar" class="feather-calendar"></i>  17 Sep 2023</p>
                                    <p>Research a topic interested by listen actively and attentively.</p>
                                </div>
                                <div class="notes-slider-widget notes-widget-profile">
                                    <div class="notes-logo">
                                        <a href="javascript:void(0);">
                                            <span>
                                                <img src="{{URL::asset('/build/img/users/user-31.jpg')}}" alt="Profile" class="img-fluid">
                                            </span>
                                        </a>
                                        <div class="d-flex">
                                            <span class="medium-square"><i class="fas fa-square"></i></span>
                                            <p class="medium"> Work</p>
                                        </div>																	
                                    </div>
                                    <div class="notes-star-delete">
                                        <a href="javascript:void(0);">
                                            <span><i data-feather="star"></i></span>
                                        </a>
                                        <a href="javascript:void(0);">
                                            <span><i data-feather="trash-2"></i></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                <div class="section-card-body pt-0" id="notes-trash2">
                    <div class="row">
                        <div class="col-md-4 d-flex">
                            <div class="notes-card notes-card-details w-100">
                                <div class="notes-card-body">
                                    <p class="badged medium"><i class="fas fa-circle"></i> Medium</p>
                                    <a href="#" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="fas fa-ellipsis-v"></i>
                                        </a>
                                        <div class="dropdown-menu notes-menu dropdown-menu-end">
                                            <a href="#" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#edit-note-units"><span><i data-feather="edit"></i></span>Edit</a>
                                            <a href="#" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#delete-note-units"><span><i data-feather="trash-2"></i></span>Delete</a>
                                            <a href="#" class="dropdown-item"><span><i data-feather="star"></i></span>Not Important</a>
                                            <a href="#" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#view-note-units"><span><i data-feather="eye"></i></span>View</a>
                                        </div>
                                </div>
                                <div class="notes-wrap-content">
                                    <h4>
                                        <a href="javascript:void(0);">
                                            Backup Files EOD
                                        </a>
                                        </h4>
                                    <p class="wrap-cal"><i data-feather="calendar" class="feather-calendar"></i>  25 Jul 2023</p>
                                    <p>Project files should be took backup before end of the day.</p>
                                </div>
                                <div class="notes-slider-widget notes-widget-profile">
                                    <div class="notes-logo">
                                        <a href="javascript:void(0);">
                                            <span>
                                                <img src="{{URL::asset('/build/img/users/user-26.jpg')}}" alt="Profile" class="img-fluid">
                                            </span>
                                        </a>
                                        <div class="d-flex">
                                            <span class="medium-square"><i class="fas fa-square"></i></span>
                                            <p class="medium"> Work</p>
                                        </div>
                                    </div>
                                    <div class="notes-star-delete">
                                        <a href="javascript:void(0);">
                                            <span><i data-feather="star"></i></span>
                                        </a>
                                        <a href="javascript:void(0);">
                                            <span><i data-feather="trash-2"></i></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 d-flex">
                            <div class="notes-card notes-card-details w-100">
                                <div class="notes-card-body">
                                    <p class="badged high"><i class="fas fa-circle"></i> High</p>
                                    <a href="#" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="fas fa-ellipsis-v"></i>
                                        </a>
                                        <div class="dropdown-menu notes-menu dropdown-menu-end">
                                            <a href="#" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#edit-note-units"><span><i data-feather="edit"></i></span>Edit</a>
                                            <a href="#" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#delete-note-units"><span><i data-feather="trash-2"></i></span>Delete</a>
                                            <a href="#" class="dropdown-item"><span><i data-feather="star"></i></span>Not Important</a>
                                            <a href="#" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#view-note-units"><span><i data-feather="eye"></i></span>View</a>
                                        </div>
                                </div>
                                <div class="notes-wrap-content">
                                    <h4>
                                        <a href="javascript:void(0);">
                                            Download Server Logs
                                        </a>
                                    </h4>
                                    <p class="wrap-cal"><i data-feather="calendar" class="feather-calendar"></i>  27 Jul 2023</p>
                                    <p>Server log is a text document that contains a record of all activity.</p>
                                </div>
                                <div class="notes-slider-widget notes-widget-profile">
                                    <div class="notes-logo">
                                        <a href="javascript:void(0);">
                                            <span>
                                                <img src="{{URL::asset('/build/img/users/user-27.jpg')}}" alt="Profile" class="img-fluid">
                                            </span>
                                        </a>
                                        <div class="d-flex">
                                            <span class="high-square"><i class="fas fa-square"></i></span>
                                            <p class="high"> Social</p>
                                        </div>
                                    </div>
                                    <div class="notes-star-delete">
                                        <a href="javascript:void(0);">
                                            <span><i data-feather="star"></i></span>
                                        </a>
                                        <a href="javascript:void(0);">
                                            <span><i data-feather="trash-2"></i></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 d-flex">
                            <div class="notes-card notes-card-details w-100">
                                <div class="notes-card-body">
                                    <p class="badged low"><i class="fas fa-circle"></i> Low</p>
                                    <a href="#" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="fas fa-ellipsis-v"></i>
                                        </a>
                                        <div class="dropdown-menu notes-menu dropdown-menu-end">
                                            <a href="#" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#edit-note-units"><span><i data-feather="edit"></i></span>Edit</a>
                                            <a href="#" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#delete-note-units"><span><i data-feather="trash-2"></i></span>Delete</a>
                                            <a href="#" class="dropdown-item"><span><i data-feather="star"></i></span>Not Important</a>
                                            <a href="#" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#view-note-units"><span><i data-feather="eye"></i></span>View</a>
                                        </div>
                                </div>
                                <div class="notes-wrap-content">
                                    <h4>
                                        <a href="javascript:void(0);">
                                            Team meet at Starbucks
                                        </a>
                                    </h4>
                                    <p class="wrap-cal"><i data-feather="calendar" class="feather-calendar"></i>  13 Aug 2023</p>
                                    <p>Meeting all teamets at Starbucks for identifying them all.</p>
                                </div>
                                <div class="notes-slider-widget notes-widget-profile">
                                    <div class="notes-logo">
                                        <a href="javascript:void(0);">
                                            <span>
                                                <img src="{{URL::asset('/build/img/users/user-28.jpg')}}" alt="Profile" class="img-fluid">
                                            </span>
                                        </a>
                                        <div class="d-flex">
                                            <span class="low-square"><i class="fas fa-square"></i></span>
                                            <p class="low"> Personal</p>
                                        </div>
                                    </div>
                                    <div class="notes-star-delete">
                                        <a href="javascript:void(0);">
                                            <span><i data-feather="star"></i></span>
                                        </a>
                                        <a href="javascript:void(0);">
                                            <span><i data-feather="trash-2"></i></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 d-flex">
                            <div class="notes-card notes-card-details w-100">
                                <div class="notes-card-body">
                                    <p class="badged high"><i class="fas fa-circle"></i> High</p>
                                    <a href="#" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="fas fa-ellipsis-v"></i>
                                        </a>
                                        <div class="dropdown-menu notes-menu dropdown-menu-end">
                                            <a href="#" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#edit-note-units"><span><i data-feather="edit"></i></span>Edit</a>
                                            <a href="#" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#delete-note-units"><span><i data-feather="trash-2"></i></span>Delete</a>
                                            <a href="#" class="dropdown-item"><span><i data-feather="star"></i></span>Not Important</a>
                                            <a href="#" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#view-note-units"><span><i data-feather="eye"></i></span>View</a>
                                        </div>
                                </div>
                                <div class="notes-wrap-content">
                                    <h4>
                                        <a href="javascript:void(0);">
                                            Create a compost pile
                                        </a>
                                        
                                    </h4>
                                    <p class="wrap-cal"><i data-feather="calendar" class="feather-calendar"></i>  23 Aug 2023</p>
                                    <p>Compost pile refers to fruit and vegetable scraps, used tea, coffee grounds etc..</p>
                                </div>
                                <div class="notes-slider-widget notes-widget-profile">
                                    <div class="notes-logo">
                                        <a href="javascript:void(0);">
                                            <span>
                                                <img src="{{URL::asset('/build/img/users/user-29.jpg')}}" alt="Profile" class="img-fluid">
                                            </span>
                                        </a>
                                        <div class="d-flex">
                                            <span class="high-square"><i class="fas fa-square"></i></span>
                                            <p class="high"> Social</p>
                                        </div>
                                    </div>
                                    <div class="notes-star-delete">
                                        <a href="javascript:void(0);">
                                            <span><i data-feather="star"></i></span>
                                        </a>
                                        <a href="javascript:void(0);">
                                            <span><i data-feather="trash-2"></i></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 d-flex">
                            <div class="notes-card notes-card-details w-100">
                                <div class="notes-card-body">
                                    <p class="badged low"><i class="fas fa-circle"></i> Low</p>
                                    <a href="#" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="fas fa-ellipsis-v"></i>
                                        </a>
                                        <div class="dropdown-menu notes-menu dropdown-menu-end">
                                            <a href="#" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#edit-note-units"><span><i data-feather="edit"></i></span>Edit</a>
                                            <a href="#" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#delete-note-units"><span><i data-feather="trash-2"></i></span>Delete</a>
                                            <a href="#" class="dropdown-item"><span><i data-feather="star"></i></span>Not Important</a>
                                            <a href="#" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#view-note-units"><span><i data-feather="eye"></i></span>View</a>
                                        </div>
                                </div>
                                <div class="notes-wrap-content">
                                    <h4>
                                        <a href="javascript:void(0);">
                                            Take a hike at a local park
                                        </a>
                                    </h4>
                                    <p class="wrap-cal"><i data-feather="calendar" class="feather-calendar"></i>  04 Sep 2023</p>
                                    <p>Hiking involves a long energetic walk in a natural environment.</p>
                                </div>
                                <div class="notes-slider-widget notes-widget-profile">
                                    <div class="notes-logo">
                                        <a href="javascript:void(0);">
                                            <span>
                                                <img src="{{URL::asset('/build/img/users/user-30.jpg')}}" alt="Profile" class="img-fluid">
                                            </span>
                                        </a>
                                        <div class="d-flex">
                                            <span class="low-square"><i class="fas fa-square"></i></span>
                                            <p class="low"> Personal</p>
                                        </div>
                                    </div>
                                    <div class="notes-star-delete">
                                        <a href="javascript:void(0);">
                                            <span><i data-feather="star"></i></span>
                                        </a>
                                        <a href="javascript:void(0);">
                                            <span><i data-feather="trash-2"></i></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 d-flex">
                            <div class="notes-card notes-card-details w-100">
                                <div class="notes-card-body">
                                    <p class="badged medium"><i class="fas fa-circle"></i> Medium</p>
                                    <a href="#" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="fas fa-ellipsis-v"></i>
                                        </a>
                                        <div class="dropdown-menu notes-menu dropdown-menu-end">
                                            <a href="#" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#edit-note-units"><span><i data-feather="edit"></i></span>Edit</a>
                                            <a href="#" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#delete-note-units"><span><i data-feather="trash-2"></i></span>Delete</a>
                                            <a href="#" class="dropdown-item"><span><i data-feather="star"></i></span>Not Important</a>
                                            <a href="#" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#view-note-units"><span><i data-feather="eye"></i></span>View</a>
                                        </div>
                                </div>
                                <div class="notes-wrap-content">
                                    <h4>
                                        <a href="javascript:void(0);">
                                            Research a topic interested
                                        </a>															
                                    </h4>
                                    <p class="wrap-cal"><i data-feather="calendar" class="feather-calendar"></i>  17 Sep 2023</p>
                                    <p>Research a topic interested by listen actively and attentively.</p>
                                </div>
                                <div class="notes-slider-widget notes-widget-profile">
                                    <div class="notes-logo">
                                        <a href="javascript:void(0);">
                                            <span>
                                                <img src="{{URL::asset('/build/img/users/user-31.jpg')}}" alt="Profile" class="img-fluid">
                                            </span>
                                        </a>
                                        <div class="d-flex">
                                            <span class="medium-square"><i class="fas fa-square"></i></span>
                                            <p class="medium"> Work</p>
                                        </div>
                                    </div>
                                    <div class="notes-star-delete">
                                        <a href="javascript:void(0);">
                                            <span><i data-feather="star"></i></span>
                                        </a>
                                        <a href="javascript:void(0);">
                                            <span><i data-feather="trash-2"></i></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                <div class="row">
                    <div class="col-12 d-flex align-items-center justify-content-end">
                        <a href="#" class="btn btn-cancel notes-trash-btn">
                            <span> <i data-feather="trash-2" class="feather-trash-2"></i>  </span>
                            Restore all
                        </a>
                    </div>
                </div>
                <div class="section-card-body pt-0" id="notes-trash3">
                    <div class="row">
                        <div class="col-md-4 d-flex">
                            <div class="notes-card notes-card-details w-100">
                                <div class="notes-card-body">
                                    <p class="badged medium"><i class="fas fa-circle"></i> Medium</p>
                                    <a href="#" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fas fa-ellipsis-v"></i>
                                    </a>
                                    <div class="dropdown-menu notes-menu dropdown-menu-end">
                                        <a href="#" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#delete-note-units"><span><i data-feather="edit"></i></span>Permanent Delete</a>
                                        <a href="javascript:void(0);" class="dropdown-item" ><span><i data-feather="trash-2"></i></span>Restore Task</a>
                                    </div>
                                </div>
                                <div class="notes-wrap-content">
                                    <h4>
                                        <a href="javascript:void(0);">
                                            Backup Files EOD
                                        </a>
                                        </h4>
                                    <p class="wrap-cal"><i data-feather="calendar" class="feather-calendar"></i>  25 Jul 2023</p>
                                    <p>Project files should be took backup before end of the day.</p>
                                </div>
                                <div class="notes-slider-widget notes-widget-profile">
                                    <div class="notes-logo">
                                        <a href="javascript:void(0);">
                                            <span>
                                                <img src="{{URL::asset('/build/img/users/user-31.jpg')}}" alt="Profile" class="img-fluid">
                                            </span>
                                        </a>
                                        <div class="d-flex">
                                            <span class="medium-square"><i class="fas fa-square"></i></span>
                                            <p class="medium"> Work</p>
                                        </div>
                                    </div>
                                    <div class="notes-star-delete">
                                        <a href="javascript:void(0);">
                                            <span><i data-feather="star"></i></span>
                                        </a>
                                        <a href="javascript:void(0);">
                                            <span><i data-feather="trash-2"></i></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 d-flex">
                            <div class="notes-card notes-card-details w-100">
                                <div class="notes-card-body">
                                    <p class="badged high"><i class="fas fa-circle"></i> High</p>
                                    <a href="#" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fas fa-ellipsis-v"></i>
                                    </a>
                                    <div class="dropdown-menu notes-menu dropdown-menu-end">
                                        <a href="#" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#delete-note-units"><span><i data-feather="edit"></i></span>Permanent Delete</a>
                                        <a href="javascript:void(0);" class="dropdown-item" ><span><i data-feather="trash-2"></i></span>Restore Task</a>
                                    </div>
                                </div>
                                <div class="notes-wrap-content">
                                    <h4>
                                        <a href="javascript:void(0);">
                                            Download Server Logs
                                        </a>
                                    </h4>
                                    <p class="wrap-cal"><i data-feather="calendar" class="feather-calendar"></i>  27 Jul 2023</p>
                                    <p>Server log is a text document that contains a record of all activity.</p>
                                </div>
                                <div class="notes-slider-widget notes-widget-profile">
                                    <div class="notes-logo">
                                        <a href="javascript:void(0);">
                                            <span>
                                                <img src="{{URL::asset('/build/img/users/user-29.jpg')}}" alt="Profile" class="img-fluid">
                                            </span>
                                        </a>
                                        <div class="d-flex">
                                            <span class="high-square"><i class="fas fa-square"></i></span>
                                            <p class="high"> Social</p>
                                        </div>
                                    </div>
                                    <div class="notes-star-delete">
                                        <a href="javascript:void(0);">
                                            <span><i data-feather="star"></i></span>
                                        </a>
                                        <a href="javascript:void(0);">
                                            <span><i data-feather="trash-2"></i></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 d-flex">
                            <div class="notes-card notes-card-details w-100">
                                <div class="notes-card-body">
                                    <p class="badged low"><i class="fas fa-circle"></i> Low</p>
                                    <a href="#" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fas fa-ellipsis-v"></i>
                                    </a>
                                    <div class="dropdown-menu notes-menu dropdown-menu-end">
                                        <a href="#" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#delete-note-units"><span><i data-feather="edit"></i></span>Permanent Delete</a>
                                        <a href="javascript:void(0);" class="dropdown-item" ><span><i data-feather="trash-2"></i></span>Restore Task</a>
                                    </div>
                                </div>
                                <div class="notes-wrap-content">
                                    <h4>
                                        <a href="javascript:void(0);">
                                            Team meet at Starbucks
                                        </a>
                                    </h4>
                                    <p class="wrap-cal"><i data-feather="calendar" class="feather-calendar"></i>  13 Aug 2023</p>
                                    <p>Meeting all teamets at Starbucks for identifying them all.</p>
                                </div>
                                <div class="notes-slider-widget notes-widget-profile">
                                    <div class="notes-logo">
                                        <a href="javascript:void(0);">
                                            <span>
                                                <img src="{{URL::asset('/build/img/users/user-30.jpg')}}" alt="Profile" class="img-fluid">
                                            </span>
                                        </a>
                                        <div class="d-flex">
                                            <span class="low-square"><i class="fas fa-square"></i></span>
                                            <p class="low"> Personal</p>
                                        </div>
                                    </div>
                                    <div class="notes-star-delete">
                                        <a href="javascript:void(0);">
                                            <span><i data-feather="star"></i></span>
                                        </a>
                                        <a href="javascript:void(0);">
                                            <span><i data-feather="trash-2"></i></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>			
                        
                    </div>
                </div>
            </div>
        </div>								
        <div class="row custom-pagination">
            <div class="col-md-12">
                <div class="paginations d-flex justify-content-end">
                    <span><i class="fas fa-chevron-left"></i></span>
                    <ul class="d-flex align-items-center page-wrap">
                        <li>
                            <a href="javascript:void(0);" class="active">
                                    1
                            </a>  
                        </li>
                        <li>
                            <a href="javascript:void(0);">
                                2
                            </a> 
                        </li>
                        <li>
                            <a href="javascript:void(0);">
                                3
                            </a> 
                        </li>
                        <li>
                            <a href="javascript:void(0);">
                                4
                            </a> 
                        </li>
                    </ul>
                    <span><i class="fas fa-chevron-right"></i></span>
                </div>
            </div>
        </div>
    </div>

