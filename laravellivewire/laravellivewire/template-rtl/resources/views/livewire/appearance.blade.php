<div>
  <!-- Appearance -->
  <div class="card">
    <div class="card-body">
        <h4 class="fw-semibold mb-3">Appearance</h4>
        <form action="appearance">
            <div class="mb-0">
                <div class="row">
                    <div class="col-md-4">
                        <div class="mb-3">
                            <h6 class="fw-medium">Select Theme</h6>
                            <p>Select theme of the website</p>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="mb-3 mb-0">
                            <div class="theme-type-images d-flex align-items-center">
                                <div class="theme-image active">
                                    <div class="theme-image-set">
                                        <img src="{{URL::asset('/build/img/theme/theme-01.jpg')}}" alt="">
                                    </div>
                                    <span>Light</span>
                                </div>
                                <div class="theme-image">
                                    <div class="theme-image-set">
                                        <img src="{{URL::asset('/build/img/theme/theme-02.jpg')}}" alt="">
                                    </div>
                                    <span>Dark</span>
                                </div>
                                <div class="theme-image">
                                    <div class="theme-image-set">
                                        <img src="{{URL::asset('/build/img/theme/theme-03.jpg')}}" alt="">
                                    </div>
                                    <span>Automatic</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="mb-3">
                            <h6 class="fw-medium">Accent Color</h6>
                            <p>Select accent color of website</p>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="mb-3">
                            <div class="theme-colors">
                                <ul>
                                    <li>
                                        <span class="themecolorset defaultcolor active"></span>
                                    </li>
                                    <li>
                                        <span class="themecolorset theme-secondary"></span>
                                    </li>
                                    <li>
                                        <span class="themecolorset theme-violet"></span>
                                    </li>
                                    <li>
                                        <span class="themecolorset theme-blue"></span>
                                    </li>
                                    <li>
                                        <span class="themecolorset theme-brown"></span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="mb-3">
                            <h6 class="fw-medium">Expand Sidebar</h6>
                            <p>To display in all the pages</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-3">
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" checked>
                            </div>
                        </div>
                    </div>
                </div>			
                <div class="row">
                    <div class="col-md-4">
                        <div class="mb-3">
                            <h6 class="fw-medium">Sidebar Size</h6>
                            <p>Select size of sidebar to display</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-3">
                            <select class="select">
                                <option selected>Large - 250px</option>
                                <option>Small - 85px</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="mb-3">
                            <h6 class="fw-medium">Font Family</h6>
                            <p>Select font family of website</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-3">
                            <select class="select">
                                <option selected>Noto Sans</option>
                                <option>Nunito</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>											
            <div>
                <a href="#" class="btn btn-light me-2">Cancel</a>
                <button type="submit" class="btn btn-primary">Save Changes</button>
            </div>
        </form>
    </div>
</div>
<!-- /Appearance -->
</div>
