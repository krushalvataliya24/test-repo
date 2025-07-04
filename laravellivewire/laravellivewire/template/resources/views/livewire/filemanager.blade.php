<div>
    <div class="row">
        <div class="col-lg-3 col-md-12 sidebars-right theiaStickySidebar section-bulk-widget">
            <aside class="card file-manager-sidebar mb-0">
                <h5 class="d-flex align-items-center"><span class="me-2 d-flex align-items-center"><i data-feather="folder" class="feather-20"></i></span>Files</h5>
                <div class="dropdown">
                    <a href="javascript:void(0);" data-bs-toggle="dropdown" aria-expanded="false" class="dropset btn btn-primary mb-3 btn-icon">
                        <span class="me-1 w-auto btn-icon d-flex align-items-center"><i data-feather="plus-circle" class="feather-16"></i></span>New
                    </a>
                    <ul class="dropdown-menu">
                        <li data-bs-toggle="modal" data-bs-target="#upload-file"><a href="javascript:void(0);" class="dropdown-item"><i data-feather="upload-cloud" class="feather-16 me-2"></i>Upload File</a></li>
                        <li data-bs-toggle="modal" data-bs-target="#upload-folder"><a href="javascript:void(0);" class="dropdown-item"><i data-feather="folder" class="feather-16 me-2"></i>Upload Folder</a></li>
                        <li data-bs-toggle="modal" data-bs-target="#create-folder"><a href="javascript:void(0);" class="dropdown-item"><i data-feather="folder-minus" class="feather-16 me-2"></i>Create folder</a></li>
                    </ul>
                </div>

                <ul class="mb-5">
                    <li><a  href="{{url('file-manager')}}" class="active"><span class="me-2 btn-icon"><i data-feather="file-text" class="feather-16"></i></span>My Files</a></li>
                    <li><a  href="javascript:void(0);"><span class="me-2 btn-icon"><i data-feather="star" class="feather-16"></i></span>Google Drive</a></li>
                    <li><a  href="javascript:void(0);"><span class="me-2 btn-icon"><i data-feather="send" class="feather-16"></i></span>Dropbox</a></li>
                    <li><a  href="javascript:void(0);"><span class="me-2 btn-icon"><i data-feather="file" class="feather-16"></i></span>Shared With Me</a></li>
                    <li><a  href="javascript:void(0);"><span class="me-2 btn-icon"><i data-feather="file" class="feather-16"></i></span>Document</a></li>
                    <li><a  href="javascript:void(0);"><span class="me-2 btn-icon"><i data-feather="clock" class="feather-16"></i></span>Recent</a></li>
                    <li><a  href="javascript:void(0);"><span class="me-2 btn-icon"><i data-feather="star" class="feather-16"></i></span>Favourites</a></li>
                    <li><a  href="javascript:void(0);"><span class="me-2 btn-icon"><i data-feather="target" class="feather-16"></i></span>Archived</a></li>
                    <li><a  href="javascript:void(0);"><span class="me-2 btn-icon"><i data-feather="trash-2" class="feather-16"></i></span>Deleted</a></li>
                    <li><a  href="javascript:void(0);"><span class="me-2 btn-icon"><i data-feather="settings" class="feather-16"></i></span>Settings</a></li>
                </ul>
                <div class="d-flex align-items-center justify-content-between">
                    <div class="d-flex align-items-center">
                        <span class="me-2 btn-icon"><i data-feather="hard-drive" class="feather-16"></i></span>
                        <h6>Storage</h6>
                    </div>
                    <span>70%</span>
                </div>
                <div class="progress my-2">
                      <div class="progress-bar progress-bar bg-danger" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <span>78.5 GB of 1 TB Free Used</span>
            </aside>
        </div>

        <div class="col-lg-9 budget-role-notes">
            <div class="row">
                <div class="col-12">
                    <div class="section-bulk-wrap">
                        <div class="bulk-action-type col-lg-6 col-md-6">
                            <div class="form-sort select-bluk">
                                <select class="select">
                                    <option>Sort by Date</option>
                                    <option>Sort By Relevance</option>
                                    <option>Sort By Size</option>
                                    <option>Order Ascending</option>
                                    <option>Order Descending</option>
                                    <option>Upload Time</option>
                                </select>
                            </div>
                            <div class="search-set me-2" id="dropdownSort" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                                <div class="search-input">
                                    <a href="" class="btn btn-searchset"><i data-feather="search" class="feather-search"></i></a>
                                <div class="dataTables_filter">
                                    <label> <input type="search" class="form-control form-control-sm width-auto" placeholder="Search"></label>
                                </div></div>
                            </div>

                            <div class="dropdown-menu search-dropdown" aria-labelledby="dropdownMenuClickable">
                                <div class="search-info">
                                    <h6><span><i data-feather="search" class="feather-16"></i></span>Recent Searches</h6>
                                    <ul class="search-tags">
                                        <li><a href="javascript:void(0);">Filename</a></li>
                                        <li><a href="javascript:void(0);">Excel Files</a></li>
                                    </ul>
                                </div>
                                <div class="search-info">
                                    <h6>Search Results</h6>
                                    <p class="d-flex align-items-center justify-content-between">Sportsmodel.pdf <i data-feather="chevron-right" class="feather-16"></i></p>
                                    <p class="d-flex align-items-center justify-content-between">Projectdetails.xls<i data-feather="chevron-right" class="feather-16"></i></p>
                                </div>
                            </div>
                        </div>
                        <div class="d-sm-flex align-items-center col-lg-6 col-md-6 justify-content-end">
                            <div class="form-sort me-3">
                                <i data-feather="filter" class="fa-filter"></i>
                                <select class="select">
                                    <option>Recent</option>
                                    <option>Last Week</option>
                                    <option>Last Month</option>
                                </select>
                            </div>
                            <div class="form-sort">
                                <i data-feather="file-text" class="fa-filter"></i>
                                <select class="select">
                                    <option>All File types</option>
                                    <option>Folders</option>
                                    <option>PDF</option>
                                    <option>Images</option>
                                    <option>Videos</option>
                                    <option>Audios</option>
                                    <option>Excel</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <!-- /Overview -->
            <div class="overview seprator-lg">
                <h4 class="mb-2">Overview</h4>
                <div class="row g-3">
                    <div class="col-sm-6 col-md-3">
                        <div class="detail">
                            <a href="javascript:void(0);" class="d-flex align-items-center justify-content-center bg-light-orange bg p-4">
                                <span class="d-flex align-items-center justify-content-center"><img src="{{URL::asset('/build/img/icons/folder.svg')}}" alt="Folder"></span>
                            </a>
                            <div class="d-flex align-items-center justify-content-between info">
                                <h6><a href="javascript:void(0);">Folders</a></h6>
                                <span>300 Files</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="detail">
                            <a href="javascript:void(0);" class="d-flex align-items-center justify-content-center bg-light-red bg p-4">
                                <span class="d-flex align-items-center justify-content-center"><img src="{{URL::asset('/build/img/icons/pdf-02.svg')}}" alt="Folder"></span>
                            </a>
                            <div class="d-flex align-items-center justify-content-between info">
                                <h6><a href="javascript:void(0);">PDF</a></h6>
                                <span>50 Files</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="detail">
                            <a href="javascript:void(0);" class="d-flex align-items-center justify-content-center bg-light-green bg p-4">
                                <span class="d-flex align-items-center justify-content-center"><img src="{{URL::asset('/build/img/icons/image.svg')}}" alt="Folder"></span>
                            </a>
                            <div class="d-flex align-items-center justify-content-between info">
                                <h6><a href="javascript:void(0);">Images</a></h6>
                                <span>240 Files</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="detail">
                            <a href="javascript:void(0);" class="d-flex align-items-center justify-content-center bg-light-red bg p-4">
                                <span class="d-flex align-items-center justify-content-center"><img src="{{URL::asset('/build/img/icons/video.svg')}}" alt="Folder"></span>
                            </a>
                            <div class="d-flex align-items-center justify-content-between info">
                                <h6><a href="javascript:void(0);">Videos</a></h6>
                                <span>30 Files</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="detail">
                            <a href="javascript:void(0);" class="d-flex align-items-center justify-content-center bg-light-orange bg p-4">
                                <span class="d-flex align-items-center justify-content-center"><img src="{{URL::asset('/build/img/icons/audio.svg')}}" alt="Folder"></span>
                            </a>
                            <div class="d-flex align-items-center justify-content-between info">
                                <h6><a href="javascript:void(0);">Audios</a></h6>
                                <span>100 Files</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Overview -->

            <!-- Accordian -->
            <div class="accordion" id="accordionPanelsStayOpenExample">
                  <div class="accordion-item seprator-lg">
                    <h4 class="accordion-header d-flex align-items-center justify-content-between" id="panelsStayOpen-headingOne">Folders
                          <a href="javascript:void(0);" class="accordion-button a-auto" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne"></a>
                    </h4>
                    <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
                          <div class="accordion-body">
                            <div class="owl-carousel folders-carousel owl-theme">
                                <div class="folders p-3">
                                  <div class="d-flex align-items-center justify-content-between head">
                                    <div class="d-flex align-items-center">
                                      <img src="{{URL::asset('/build/img/icons/folder.svg')}}" alt="Folder" class="me-2">
                                      <h6 class="popup-toggle"><a href="javascript:void(0);">Project Details</a></h6>
                                    </div>
                                    <div class="dropdown">
                                      <a href="javascript:void(0);" data-bs-toggle="dropdown" aria-expanded="false"
                                        class="dropset">
                                        <i class="fa fa-ellipsis-v"></i>
                                      </a>
                                      <ul class="dropdown-menu">
                                        <li><a href="javascript:void(0);" class="dropdown-item">Details</a></li>
                                        <li><a href="javascript:void(0);" class="dropdown-item">Share</a></li>
                                        <li><a href="javascript:void(0);" class="dropdown-item">Copy</a></li>
                                        <li><a href="javascript:void(0);" class="dropdown-item">Move</a></li>
                                        <li><a href="javascript:void(0);" class="dropdown-item">Download</a></li>
                                        <li><a href="javascript:void(0);" class="dropdown-item">Rename</a></li>
                                        <li><a href="javascript:void(0);" class="dropdown-item">Archeived</a></li>
                                        <li><a href="javascript:void(0);" class="dropdown-item">Delete</a></li>
                                      </ul>
                                    </div>
                                  </div>
                                  <div class="d-flex align-items-center justify-content-start project-plan my-3">
                                    <label>Project plan</label>
                                    <ul class="d-flex">
                                      <li class="d-flex align-items-center">154 KB</li>
                                      <li class="d-flex align-items-center">8 Files</li>
                                    </ul>
                                  </div>
                                  <div class="d-flex align-items-center justify-content-between avatar-wrap">
                                    <div class="group-avatar">
                                        <span class="avatar">
                                            <a href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="right" aria-label="Member 1" data-bs-original-title="Member 1"><img src="{{URL::asset('/build/img/profiles/avatar-02.jpg')}}" alt="Avatar"></a>
                                        </span>
                                        <span class="avatar">
                                            <a href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="right" aria-label="Member 2" data-bs-original-title="Member 2"><img src="{{URL::asset('/build/img/profiles/avatar-01.jpg')}}" alt="Avatar"></a>
                                        </span>
                                        <span class="count d-block">
                                           <a href="javascript:void(0);">1 Members</a>
                                        </span>
                                    </div>
                                    <a  href="javascript:void(0);" class=""><i data-feather="star" class="feather-16"></i></a>
                                  </div>
                                </div>
                                <div class="folders p-3">
                                  <div class="d-flex align-items-center justify-content-between head">
                                    <div class="d-flex align-items-center">
                                      <img src="{{URL::asset('/build/img/icons/folder.svg')}}" alt="Folder" class="me-2">
                                      <h6 class="popup-toggle"><a href="javascript:void(0);">Project Details</a></h6>
                                    </div>
                                    <div class="dropdown">
                                      <a href="javascript:void(0);" data-bs-toggle="dropdown" aria-expanded="false"
                                        class="dropset">
                                        <i class="fa fa-ellipsis-v"></i>
                                      </a>
                                      <ul class="dropdown-menu">
                                        <li><a href="javascript:void(0);" class="dropdown-item">Details</a></li>
                                        <li><a href="javascript:void(0);" class="dropdown-item">Share</a></li>
                                        <li><a href="javascript:void(0);" class="dropdown-item">Copy</a></li>
                                        <li><a href="javascript:void(0);" class="dropdown-item">Move</a></li>
                                        <li><a href="javascript:void(0);" class="dropdown-item">Download</a></li>
                                        <li><a href="javascript:void(0);" class="dropdown-item">Rename</a></li>
                                        <li><a href="javascript:void(0);" class="dropdown-item">Archeived</a></li>
                                        <li><a href="javascript:void(0);" class="dropdown-item">Delete</a></li>
                                      </ul>
                                    </div>
                                  </div>
                                  <div class="d-flex align-items-center justify-content-start project-plan my-3">
                                    <label>Project plan</label>
                                    <ul class="d-flex">
                                      <li class="d-flex align-items-center">154 KB</li>
                                      <li class="d-flex align-items-center">8 Files</li>
                                    </ul>
                                  </div>
                                  <div class="d-flex align-items-center justify-content-between avatar-wrap">
                                    <div class="group-avatar">
                                        <span class="avatar">
                                            <a href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="right" aria-label="Member 1" data-bs-original-title="Member 1"><img src="{{URL::asset('/build/img/profiles/avatar-06.jpg')}}" alt="Avatar"></a>
                                        </span>
                                        <span class="avatar">
                                            <a href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="right" aria-label="Member 2" data-bs-original-title="Member 2"><img src="{{URL::asset('/build/img/profiles/avatar-14.jpg')}}" alt="Avatar"></a>
                                        </span>
                                        <span class="avatar">
                                            <a href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="right" aria-label="Member 3" data-bs-original-title="Member 3"><img src="{{URL::asset('/build/img/profiles/avatar-15.jpg')}}" alt="Avatar"></a>
                                        </span>
                                        <span class="avatar">
                                           <a href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="right" aria-label="Member 4" data-bs-original-title="Member 4"><img src="{{URL::asset('/build/img/profiles/avatar-16.jpg')}}" alt="Avatar"></a>
                                        </span>
                                        <span class="avatar">
                                           <a href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="right" aria-label="Member 5" data-bs-original-title="Member 5"><img src="{{URL::asset('/build/img/profiles/avatar-17.jpg')}}" alt="Avatar"></a>
                                        </span>
                                        <span class="count d-block">
                                           <a href="javascript:void(0);">+9 Members</a>
                                        </span>
                                    </div>
                                    <a  href="javascript:void(0);" class=""><i data-feather="star" class="feather-16"></i></a>
                                  </div>
                                </div>
                                <div class="folders p-3">
                                  <div class="d-flex align-items-center justify-content-between head">
                                    <div class="d-flex align-items-center">
                                      <img src="{{URL::asset('/build/img/icons/folder.svg')}}" alt="Folder" class="me-2">
                                      <h6 class="popup-toggle"><a href="javascript:void(0);">Project Details</a></h6>
                                    </div>
                                    <div class="dropdown">
                                      <a href="javascript:void(0);" data-bs-toggle="dropdown" aria-expanded="false"
                                        class="dropset">
                                        <i class="fa fa-ellipsis-v"></i>
                                      </a>
                                      <ul class="dropdown-menu">
                                        <li><a href="javascript:void(0);" class="dropdown-item">Details</a></li>
                                        <li><a href="javascript:void(0);" class="dropdown-item">Share</a></li>
                                        <li><a href="javascript:void(0);" class="dropdown-item">Copy</a></li>
                                        <li><a href="javascript:void(0);" class="dropdown-item">Move</a></li>
                                        <li><a href="javascript:void(0);" class="dropdown-item">Download</a></li>
                                        <li><a href="javascript:void(0);" class="dropdown-item">Rename</a></li>
                                        <li><a href="javascript:void(0);" class="dropdown-item">Archeived</a></li>
                                        <li><a href="javascript:void(0);" class="dropdown-item">Delete</a></li>
                                      </ul>
                                    </div>
                                  </div>
                                  <div class="d-flex align-items-center justify-content-start project-plan my-3">
                                    <label>Project plan</label>
                                    <ul class="d-flex">
                                      <li class="d-flex align-items-center">154 KB</li>
                                      <li class="d-flex align-items-center">8 Files</li>
                                    </ul>
                                  </div>
                                  <div class="d-flex align-items-center justify-content-between avatar-wrap">
                                    <div class="group-avatar">
                                        <span class="avatar">
                                            <a href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="right" aria-label="Member 1" data-bs-original-title="Member 1"><img src="{{URL::asset('/build/img/profiles/avatar-18.jpg')}}" alt="Avatar"></a>
                                        </span>
                                        <span class="avatar">
                                            <a href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="right" aria-label="Member 2" data-bs-original-title="Member 2"><img src="{{URL::asset('/build/img/profiles/avatar-05.jpg')}}" alt="Avatar"></a>
                                        </span>
                                        <span class="count d-block">
                                           <a href="javascript:void(0);">
                                           +2 Members</a>
                                        </span>
                                    </div>
                                    <a  href="javascript:void(0);" class=""><i data-feather="star" class="feather-16"></i></a>
                                  </div>
                                </div>
                                <div class="folders p-3">
                                  <div class="d-flex align-items-center justify-content-between head">
                                    <div class="d-flex align-items-center">
                                      <img src="{{URL::asset('/build/img/icons/folder.svg')}}" alt="Folder" class="me-2">
                                      <h6 class="popup-toggle"><a href="javascript:void(0);">Project Details</a></h6>
                                    </div>
                                    <div class="dropdown">
                                      <a href="javascript:void(0);" data-bs-toggle="dropdown" aria-expanded="false"
                                        class="dropset">
                                        <i class="fa fa-ellipsis-v"></i>
                                      </a>
                                      <ul class="dropdown-menu">
                                        <li><a href="javascript:void(0);" class="dropdown-item">Details</a></li>
                                        <li><a href="javascript:void(0);" class="dropdown-item">Share</a></li>
                                        <li><a href="javascript:void(0);" class="dropdown-item">Copy</a></li>
                                        <li><a href="javascript:void(0);" class="dropdown-item">Move</a></li>
                                        <li><a href="javascript:void(0);" class="dropdown-item">Download</a></li>
                                        <li><a href="javascript:void(0);" class="dropdown-item">Rename</a></li>
                                        <li><a href="javascript:void(0);" class="dropdown-item">Archeived</a></li>
                                        <li><a href="javascript:void(0);" class="dropdown-item">Delete</a></li>
                                      </ul>
                                    </div>
                                  </div>
                                  <div class="d-flex align-items-center justify-content-start project-plan my-3">
                                    <label>Project plan</label>
                                    <ul class="d-flex">
                                      <li class="d-flex align-items-center">154 KB</li>
                                      <li class="d-flex align-items-center">8 Files</li>
                                    </ul>
                                  </div>
                                  <div class="d-flex align-items-center justify-content-between avatar-wrap">
                                    <div class="group-avatar">
                                        <span class="avatar">
                                            <a href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="right" aria-label="Member 1" data-bs-original-title="Member 1"><img src="{{URL::asset('/build/img/profiles/avatar-01.jpg')}}" alt="Avatar"></a>
                                        </span>
                                        <span class="avatar">
                                            <a href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="right" aria-label="Member 2" data-bs-original-title="Member 2"><img src="{{URL::asset('/build/img/profiles/avatar-02.jpg')}}" alt="Avatar"></a>
                                        </span>
                                        <span class="avatar">
                                            <a href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="right" aria-label="Member 3" data-bs-original-title="Member 3"><img src="{{URL::asset('/build/img/profiles/avatar-03.jpg')}}" alt="Avatar"></a>
                                        </span>
                                        <span class="avatar">
                                           <a href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="right" aria-label="Member 4" data-bs-original-title="Member 4"><img src="{{URL::asset('/build/img/profiles/avatar-04.jpg')}}" alt="Avatar"></a>
                                        </span>
                                        <span class="count d-block">
                                           <a href="javascript:void(0);">1 Members</a>
                                        </span>
                                    </div>
                                    <a  href="javascript:void(0);" class=""><i data-feather="star" class="feather-16"></i></a>
                                  </div>
                                </div>
                            </div>
                        </div>
                      </div>
                </div>
                  <div class="accordion-item seprator-lg">
                <h4 class="accordion-header d-flex align-items-center justify-content-between" id="panelsStayOpen-headingTwo">Files
                  <a href="javascript:void(0);" class="accordion-button w-auto" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                  </a>
                </h4>
                <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingTwo">
                  <div class="accordion-body">
                    <div class="owl-carousel files-carousel owl-theme">
                        <div class="folders p-3">
                            <div class="d-flex align-items-center justify-content-between head">
                                <div class="d-flex align-items-center">
                                    <img src="{{URL::asset('/build/img/icons/pdf-02.svg')}}" alt="File" class="me-2">
                                    <h6 class="popup-toggle"><a href="javascript:void(0);">hsa.pdf</a></h6>
                                </div>
                                <div class="d-flex align-items-center">
                                    <a  href="javascript:void(0);" class=""><i class="fa fa-star me-2"></i></a>
                                    <div class="dropdown">
                                        <a href="javascript:void(0);" data-bs-toggle="dropdown" aria-expanded="false"
                                            class="dropset">
                                            <i class="fa fa-ellipsis-v"></i>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a href="javascript:void(0);" class="dropdown-item">Details</a></li>
                                            <li><a href="javascript:void(0);" class="dropdown-item">Share</a></li>
                                            <li><a href="javascript:void(0);" class="dropdown-item">Copy</a></li>
                                            <li><a href="javascript:void(0);" class="dropdown-item">Move</a></li>
                                            <li><a href="javascript:void(0);" class="dropdown-item">Download</a></li>
                                            <li><a href="javascript:void(0);" class="dropdown-item">Rename</a></li>
                                            <li><a href="javascript:void(0);" class="dropdown-item">Archeived</a></li>
                                            <li><a href="javascript:void(0);" class="dropdown-item">Delete</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex align-items-center justify-content-start project-plan mt-3">
                                <label>12 Jul</label>
                                <ul class="d-flex">
                                    <li class="d-flex align-items-center">85 MB</li>
                                </ul>
                            </div>
                        </div>
                        <div class="folders p-3">
                            <div class="d-flex align-items-center justify-content-between head">
                                <div class="d-flex align-items-center">
                                    <img src="{{URL::asset('/build/img/icons/pdf-02.svg')}}" alt="File" class="me-2">
                                    <h6 class="popup-toggle"><a href="javascript:void(0);">Haird.pdf</a></h6>
                                </div>
                                <div class="d-flex align-items-center">
                                    <a  href="javascript:void(0);" class=""><i class="fa fa-star me-2"></i></a>
                                    <div class="dropdown">
                                        <a href="javascript:void(0);" data-bs-toggle="dropdown" aria-expanded="false"
                                            class="dropset">
                                            <i class="fa fa-ellipsis-v"></i>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a href="javascript:void(0);" class="dropdown-item">Details</a></li>
                                            <li><a href="javascript:void(0);" class="dropdown-item">Share</a></li>
                                            <li><a href="javascript:void(0);" class="dropdown-item">Copy</a></li>
                                            <li><a href="javascript:void(0);" class="dropdown-item">Move</a></li>
                                            <li><a href="javascript:void(0);" class="dropdown-item">Download</a></li>
                                            <li><a href="javascript:void(0);" class="dropdown-item">Rename</a></li>
                                            <li><a href="javascript:void(0);" class="dropdown-item">Archeived</a></li>
                                            <li><a href="javascript:void(0);" class="dropdown-item">Delete</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex align-items-center justify-content-start project-plan mt-3">
                                <label>14 Jul</label>
                                <ul class="d-flex">
                                    <li class="d-flex align-items-center">4 MB</li>
                                </ul>
                            </div>
                        </div>
                        <div class="folders p-3">
                            <div class="d-flex align-items-center justify-content-between head">
                                <div class="d-flex align-items-center">
                                    <img src="{{URL::asset('/build/img/icons/xls.svg')}}" alt="File" class="me-2">
                                    <h6 class="popup-toggle"><a href="javascript:void(0);">Estimation.xls</a></h6>
                                </div>
                                <div class="d-flex align-items-center">
                                    <a  href="javascript:void(0);" class=""><i class="fa fa-star me-2"></i></a>
                                    <div class="dropdown">
                                        <a href="javascript:void(0);" data-bs-toggle="dropdown" aria-expanded="false"
                                            class="dropset">
                                            <i class="fa fa-ellipsis-v"></i>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a href="javascript:void(0);" class="dropdown-item">Details</a></li>
                                            <li><a href="javascript:void(0);" class="dropdown-item">Share</a></li>
                                            <li><a href="javascript:void(0);" class="dropdown-item">Copy</a></li>
                                            <li><a href="javascript:void(0);" class="dropdown-item">Move</a></li>
                                            <li><a href="javascript:void(0);" class="dropdown-item">Download</a></li>
                                            <li><a href="javascript:void(0);" class="dropdown-item">Rename</a></li>
                                            <li><a href="javascript:void(0);" class="dropdown-item">Archeived</a></li>
                                            <li><a href="javascript:void(0);" class="dropdown-item">Delete</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex align-items-center justify-content-start project-plan mt-3">
                                <label>14 Jul</label>
                                <ul class="d-flex">
                                    <li class="d-flex align-items-center">500 KB</li>
                                </ul>
                            </div>
                        </div>
                        <div class="folders p-3">
                            <div class="d-flex align-items-center justify-content-between head">
                                <div class="d-flex align-items-center">
                                    <img src="{{URL::asset('/build/img/icons/pdf-02.svg')}}" alt="File" class="me-2">
                                    <h6 class="popup-toggle"><a href="javascript:void(0);">hsa.pdf</a></h6>
                                </div>
                                <div class="d-flex align-items-center">
                                    <a  href="javascript:void(0);" class=""><i class="fa fa-star me-2"></i></a>
                                    <div class="dropdown">
                                        <a href="javascript:void(0);" data-bs-toggle="dropdown" aria-expanded="false"
                                            class="dropset">
                                            <i class="fa fa-ellipsis-v"></i>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a href="javascript:void(0);" class="dropdown-item">Details</a></li>
                                            <li><a href="javascript:void(0);" class="dropdown-item">Share</a></li>
                                            <li><a href="javascript:void(0);" class="dropdown-item">Copy</a></li>
                                            <li><a href="javascript:void(0);" class="dropdown-item">Move</a></li>
                                            <li><a href="javascript:void(0);" class="dropdown-item">Download</a></li>
                                            <li><a href="javascript:void(0);" class="dropdown-item">Rename</a></li>
                                            <li><a href="javascript:void(0);" class="dropdown-item">Archeived</a></li>
                                            <li><a href="javascript:void(0);" class="dropdown-item">Delete</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex align-items-center justify-content-start project-plan mt-3">
                                <label>12 Jul</label>
                                <ul class="d-flex">
                                    <li class="d-flex align-items-center">85 MB</li>
                                </ul>
                            </div>
                        </div>
                        <div class="folders p-3">
                            <div class="d-flex align-items-center justify-content-between head">
                                <div class="d-flex align-items-center">
                                    <img src="{{URL::asset('/build/img/icons/pdf-02.svg')}}" alt="File" class="me-2">
                                    <h6 class="popup-toggle"><a href="javascript:void(0);">Haird.pdf</a></h6>
                                </div>
                                <div class="d-flex align-items-center">
                                    <a  href="javascript:void(0);" class=""><i class="fa fa-star me-2"></i></a>
                                    <div class="dropdown">
                                        <a href="javascript:void(0);" data-bs-toggle="dropdown" aria-expanded="false"
                                            class="dropset">
                                            <i class="fa fa-ellipsis-v"></i>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a href="javascript:void(0);" class="dropdown-item">Details</a></li>
                                            <li><a href="javascript:void(0);" class="dropdown-item">Share</a></li>
                                            <li><a href="javascript:void(0);" class="dropdown-item">Copy</a></li>
                                            <li><a href="javascript:void(0);" class="dropdown-item">Move</a></li>
                                            <li><a href="javascript:void(0);" class="dropdown-item">Download</a></li>
                                            <li><a href="javascript:void(0);" class="dropdown-item">Rename</a></li>
                                            <li><a href="javascript:void(0);" class="dropdown-item">Archeived</a></li>
                                            <li><a href="javascript:void(0);" class="dropdown-item">Delete</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex align-items-center justify-content-start project-plan mt-3">
                                <label>14 Jul</label>
                                <ul class="d-flex">
                                    <li class="d-flex align-items-center">4 MB</li>
                                </ul>
                            </div>
                        </div>
                        <div class="folders p-3">
                            <div class="d-flex align-items-center justify-content-between head">
                                <div class="d-flex align-items-center">
                                    <img src="{{URL::asset('/build/img/icons/xls.svg')}}" alt="File" class="me-2">
                                    <h6 class="popup-toggle"><a href="javascript:void(0);">Estimation.xls</a></h6>
                                </div>
                                <div class="d-flex align-items-center">
                                    <a  href="javascript:void(0);" class=""><i class="fa fa-star me-2"></i></a>
                                    <div class="dropdown">
                                        <a href="javascript:void(0);" data-bs-toggle="dropdown" aria-expanded="false"
                                            class="dropset">
                                            <i class="fa fa-ellipsis-v"></i>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a href="javascript:void(0);" class="dropdown-item">Details</a></li>
                                            <li><a href="javascript:void(0);" class="dropdown-item">Share</a></li>
                                            <li><a href="javascript:void(0);" class="dropdown-item">Copy</a></li>
                                            <li><a href="javascript:void(0);" class="dropdown-item">Move</a></li>
                                            <li><a href="javascript:void(0);" class="dropdown-item">Download</a></li>
                                            <li><a href="javascript:void(0);" class="dropdown-item">Rename</a></li>
                                            <li><a href="javascript:void(0);" class="dropdown-item">Archeived</a></li>
                                            <li><a href="javascript:void(0);" class="dropdown-item">Delete</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex align-items-center justify-content-start project-plan mt-3">
                                <label>14 Jul</label>
                                <ul class="d-flex">
                                    <li class="d-flex align-items-center">500 KB</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                  </div>
                </div>
                  </div>
                  <div class="accordion-item mb-4">
                <h4 class="accordion-header d-flex align-items-center justify-content-between" id="panelsStayOpen-headingThree">Videos
                  <a href="javascript:void(0);" class="accordion-button w-auto" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree"></a>
                </h4>
                <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingThree">
                  <div class="accordion-body">
                    <div class="owl-carousel video-section">

                        <div class="item">
                              <div>
                                <video width="100" height="100" class="js-player" crossorigin playsinline poster="build/img/file-manager/video1.jpg">
                                    <source src="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-720p.mp4" type="video/mp4">
                                </video>
                            </div>

                            <div class="info">
                                <div class="d-flex align-items-center justify-content-between">
                                    <h6 class="popup-toggle"><a href="javascript:void(0);">Demo_dw</a></h6>
                                    <div class="d-flex align-items-center">
                                        <a href="javascript:void(0);" class="d-flex align-items-center"><i data-feather="star" class="feather-16 me-2"></i></a>
                                        <div class="dropdown">
                                            <a href="javascript:void(0);" data-bs-toggle="dropdown" aria-expanded="false" class="dropset">
                                                <i class="fa fa-ellipsis-v"></i>
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li><a href="javascript:void(0);" class="dropdown-item">Details</a></li>
                                                <li><a href="javascript:void(0);" class="dropdown-item">Share</a></li>
                                                <li><a href="javascript:void(0);" class="dropdown-item">Copy</a></li>
                                                <li><a href="javascript:void(0);" class="dropdown-item">Move</a></li>
                                                <li><a href="javascript:void(0);" class="dropdown-item">Download</a></li>
                                                <li><a href="javascript:void(0);" class="dropdown-item">Rename</a></li>
                                                <li><a href="javascript:void(0);" class="dropdown-item">Archeived</a></li>
                                                <li><a href="javascript:void(0);" class="dropdown-item">Delete</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center justify-content-start project-plan">
                                    <label>12 Jul</label>
                                    <ul class="d-flex">
                                        <li class="d-flex align-items-center">5 MB</li>
                                    </ul>
                                </div>
                            </div>

                          </div>
                        <div class="item">
                            <div>
                                <video class="js-player" crossorigin playsinline poster="build/img/file-manager/video2.jpg">
                                    <source src="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-720p.mp4" type="video/mp4">
                                </video>
                            </div>
                            <div class="info">
                                <div class="d-flex align-items-center justify-content-between">
                                    <h6 class="popup-toggle"><a href="javascript:void(0);">Android_bike.mp4</a></h6>
                                    <div class="d-flex align-items-center">
                                        <a href="javascript:void(0);" class="d-flex align-items-center"><i data-feather="star" class="feather-16 me-2"></i></a>
                                        <div class="dropdown">
                                            <a href="javascript:void(0);" data-bs-toggle="dropdown" aria-expanded="false" class="dropset">
                                                <i class="fa fa-ellipsis-v"></i>
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li><a href="javascript:void(0);" class="dropdown-item">Details</a></li>
                                                <li><a href="javascript:void(0);" class="dropdown-item">Share</a></li>
                                                <li><a href="javascript:void(0);" class="dropdown-item">Copy</a></li>
                                                <li><a href="javascript:void(0);" class="dropdown-item">Move</a></li>
                                                <li><a href="javascript:void(0);" class="dropdown-item">Download</a></li>
                                                <li><a href="javascript:void(0);" class="dropdown-item">Rename</a></li>
                                                <li><a href="javascript:void(0);" class="dropdown-item">Archeived</a></li>
                                                <li><a href="javascript:void(0);" class="dropdown-item">Delete</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center justify-content-start project-plan">
                                    <label>14 Jul</label>
                                    <ul class="d-flex">
                                        <li class="d-flex align-items-center">23 MB</li>
                                    </ul>
                                </div>
                            </div>
                          </div>
                        <div class="item">
                          <div>
                                  <video class="js-player" crossorigin playsinline poster="build/img/file-manager/video3.jpg">
                                    <source src="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-720p.mp4" type="video/mp4">
                                </video>
                          </div>
                          <div class="info">
                                <div class="d-flex align-items-center justify-content-between">
                                    <h6 class="popup-toggle"><a href="javascript:void(0);">Demoparticles.mp4</a></h6>
                                    <div class="d-flex align-items-center">
                                        <a href="javascript:void(0);" class="d-flex align-items-center"><i data-feather="star" class="feather-16 me-2"></i></a>
                                        <div class="dropdown">
                                            <a href="javascript:void(0);" data-bs-toggle="dropdown" aria-expanded="false" class="dropset">
                                                <i class="fa fa-ellipsis-v"></i>
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li><a href="javascript:void(0);" class="dropdown-item">Details</a></li>
                                                <li><a href="javascript:void(0);" class="dropdown-item">Share</a></li>
                                                <li><a href="javascript:void(0);" class="dropdown-item">Copy</a></li>
                                                <li><a href="javascript:void(0);" class="dropdown-item">Move</a></li>
                                                <li><a href="javascript:void(0);" class="dropdown-item">Download</a></li>
                                                <li><a href="javascript:void(0);" class="dropdown-item">Rename</a></li>
                                                <li><a href="javascript:void(0);" class="dropdown-item">Archeived</a></li>
                                                <li><a href="javascript:void(0);" class="dropdown-item">Delete</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center justify-content-start project-plan">
                                    <label>14 Jul</label>
                                    <ul class="d-flex">
                                        <li class="d-flex align-items-center">173 MB</li>
                                    </ul>
                                </div>
                            </div>
                          </div>
                    </div>

                  </div>
                </div>
                  </div>
            </div>
            <!-- /Accordian -->

            <div class="card p-4 bg-white all-files mb-0">
                <div class="seprator-lg d-lg-flex align-items-center justify-content-between">
                    <h4>All Files</h4>
                </div>

                <div class="table-responsive">
                    <table class="table datanew">
                        <thead>
                            <tr>
                                <th>
                                    <label class="checkboxs">
                                        <input type="checkbox" id="select-all">
                                        <span class="checkmarks"></span>
                                    </label>
                                </th>
                                <th>Name</th>
                                <th>Last Modified</th>
                                <th>Size</th>
                                <th>Owned Memebr</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <label class="checkboxs">
                                        <input type="checkbox">
                                        <span class="checkmarks"></span>
                                    </label>
                                </td>
                                <td class="productimgname">
                                    <a href="{{url('product-list')}}" class="product-img d-flex align-items-center">
                                        <img src="{{URL::asset('/build/img/icons/folder.svg')}}" alt="Product" class="me-2">
                                        <span>Digimed</span>
                                    </a>
                                </td>
                                <td>Today 08:30 AM <br>by Angel</td>
                                <td>200 MB</td>
                                <td>
                                    <a href="javascript:void(0);" class="product-img d-flex align-items-center">
                                        <img src="{{URL::asset('/build/img/profiles/avatar-06.jpg')}}" alt="Product" class="me-2 rounded-circle">
                                        <span>Nolan Christopher</span>
                                    </a>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <a href="javascript:void(0);" class=""><i data-feather="star" class="feather-16 me-2 color-primary"></i></a>
                                        <div class="dropdown">
                                            <a href="javascript:void(0);" data-bs-toggle="dropdown" aria-expanded="false" class="dropset">
                                                <i class="fa fa-ellipsis-v"></i>
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li><a href="javascript:void(0);" class="dropdown-item"><i data-feather="trash-2" class="feather-14 me-2"></i>Permanent Delete</a></li>
                                                <li><a href="javascript:void(0);" class="dropdown-item"><i data-feather="edit" class="feather-14 me-2"></i>Restore File</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label class="checkboxs">
                                        <input type="checkbox">
                                        <span class="checkmarks"></span>
                                    </label>
                                </td>
                                <td class="productimgname">
                                    <a href="{{url('product-list')}}" class="product-img d-flex align-items-center">
                                        <img src="{{URL::asset('/build/img/icons/xls.svg')}}" alt="Product" class="me-2">
                                        <span>Estimation</span>
                                    </a>
                                </td>
                                <td>Today 09:20 AM</td>
                                <td>140 MB</td>
                                <td>
                                    <a href="javascript:void(0);" class="product-img d-flex align-items-center">
                                        <img src="{{URL::asset('/build/img/profiles/avatar-05.jpg')}}" alt="Product" class="me-2 rounded-circle">
                                        <span>Nolan Harris</span>
                                    </a>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <a href="javascript:void(0);" class=""><i data-feather="star" class="feather-16 me-2 color-primary"></i></a>
                                        <div class="dropdown">
                                            <a href="javascript:void(0);" data-bs-toggle="dropdown" aria-expanded="false" class="dropset">
                                                <i class="fa fa-ellipsis-v"></i>
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li><a href="javascript:void(0);" class="dropdown-item"><i data-feather="trash-2" class="feather-14 me-2"></i>Permanent Delete</a></li>
                                                <li><a href="javascript:void(0);" class="dropdown-item"><i data-feather="edit" class="feather-14 me-2"></i>Restore File</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label class="checkboxs">
                                        <input type="checkbox">
                                        <span class="checkmarks"></span>
                                    </label>
                                </td>
                                <td class="productimgname">
                                    <a href="{{url('product-list')}}" class="product-img d-flex align-items-center">
                                        <img src="{{URL::asset('/build/img/icons/pdf-02.svg')}}" alt="Product" class="me-2">
                                        <span>Intro.pdf</span>
                                    </a>
                                </td>
                                <td>27 July 2023</td>
                                <td>70 MB</td>
                                <td>
                                    <a href="javascript:void(0);" class="product-img d-flex align-items-center">
                                        <img src="{{URL::asset('/build/img/profiles/avatar-10.jpg')}}" alt="Product" class="me-2 rounded-circle">
                                        <span>Me</span>
                                    </a>
                                </td>
                                <td class="text-end">
                                    <div class="d-flex align-items-center">
                                        <a href="javascript:void(0);" class=""><i data-feather="star" class="feather-16 me-2 color-primary"></i></a>
                                        <div class="dropdown">
                                            <a href="javascript:void(0);" data-bs-toggle="dropdown" aria-expanded="false" class="dropset">
                                                <i class="fa fa-ellipsis-v"></i>
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li><a href="javascript:void(0);" class="dropdown-item"><i data-feather="trash-2" class="feather-14 me-2"></i>Permanent Delete</a></li>
                                                <li><a href="javascript:void(0);" class="dropdown-item"><i data-feather="edit" class="feather-14 me-2"></i>Restore File</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <label class="checkboxs">
                                        <input type="checkbox">
                                        <span class="checkmarks"></span>
                                    </label>
                                </td>
                                <td class="productimgname">
                                    <a href="{{url('product-list')}}" class="product-img d-flex align-items-center">
                                        <img src="{{URL::asset('/build/img/icons/video.svg')}}" alt="Product" class="me-2">
                                        <span>Demoworrking.mp4</span>
                                    </a>
                                </td>
                                <td>24 July 2023<br>08:25 AM</td>
                                <td>180 MB</td>
                                <td>
                                    <a href="javascript:void(0);" class="product-img d-flex align-items-center">
                                        <img src="{{URL::asset('/build/img/profiles/avatar-02.jpg')}}" alt="Product" class="me-2 rounded-circle">
                                        <span>Daniel</span>
                                    </a>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <a href="javascript:void(0);" class=""><i data-feather="star" class="feather-16 me-2 color-primary"></i></a>
                                        <div class="dropdown">
                                            <a href="javascript:void(0);" data-bs-toggle="dropdown" aria-expanded="false" class="dropset">
                                                <i class="fa fa-ellipsis-v"></i>
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li><a href="javascript:void(0);" class="dropdown-item"><i data-feather="trash-2" class="feather-14 me-2"></i>Permanent Delete</a></li>
                                                <li><a href="javascript:void(0);" class="dropdown-item"><i data-feather="edit" class="feather-14 me-2"></i>Restore File</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label class="checkboxs">
                                        <input type="checkbox">
                                        <span class="checkmarks"></span>
                                    </label>
                                </td>
                                <td class="productimgname">
                                    <a href="{{url('product-list')}}" class="product-img d-flex align-items-center">
                                        <img src="{{URL::asset('/build/img/icons/audio.svg')}}" alt="Product" class="me-2">
                                        <span>voice.mp3</span>
                                    </a>
                                </td>
                                <td>27 July 2023</td>
                                <td>80 MB</td>
                                <td>
                                    <a href="javascript:void(0);" class="product-img d-flex align-items-center">
                                        <img src="{{URL::asset('/build/img/profiles/avatar-07.jpg')}}" alt="Product" class="me-2 rounded-circle">
                                        <span>Henriques</span>
                                    </a>
                                </td>
                                <td class="text-end">
                                    <div class="d-flex align-items-center">
                                        <a href="javascript:void(0);" class=""><i data-feather="star" class="feather-16 me-2 color-primary"></i></a>
                                        <div class="dropdown">
                                            <a href="javascript:void(0);" data-bs-toggle="dropdown" aria-expanded="false" class="dropset">
                                                <i class="fa fa-ellipsis-v"></i>
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li><a href="javascript:void(0);" class="dropdown-item"><i data-feather="trash-2" class="feather-14 me-2"></i>Permanent Delete</a></li>
                                                <li><a href="javascript:void(0);" class="dropdown-item"><i data-feather="edit" class="feather-14 me-2"></i>Restore File</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            
                        </tbody>
                    </table>
                </div>

            </div>

        </div>
    </div>
</div>
