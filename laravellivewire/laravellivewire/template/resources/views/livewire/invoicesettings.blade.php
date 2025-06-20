<div>
    <!-- Invoice Settings -->
    <div class="card">
        <div class="card-body">
            <h4 class="fw-semibold mb-3">Invoice Settings</h4>
            <form action="{{url('invoice-settings')}}">
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <h6 class="fw-medium">Invoice Logo</h6>
                            <p>Upload logo of your company to display in invoice</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <div class="profile-upload">
                                <div class="profile-upload-img">
                                    <span><i class="ti ti-photo"></i></span>
                                    <img id="ImgPreview" src="{{URL::asset('/build/img/logo.svg')}}" alt="img" class="preview1">
                                    <button type="button" id="removeImage1" class="profile-remove">
                                        <i class="feather-x"></i>
                                    </button>
                                </div>
                                <div class="profile-upload-content">
                                    <label class="profile-upload-btn">
                                        <i class="ti ti-file-broken"></i> Upload File 
                                        <input type="file" id="imag" class="input-img">
                                    </label>
                                    <p>Upload Logo of your company to display in website(JPG or PNG). Max size of 800K</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <h6 class="fw-medium">Invoice Prefix</h6>
                            <p>Add prefix to your invoice</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-3">
                            <input type="text" class="form-control" value="INV-">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <h6 class="fw-medium">Invoice Due</h6>
                            <p>Select due date to display in invoice</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-3">
                            <div class="d-flex align-items-center inv-days">
                                <div class="select-drop">
                                    <select class="select">
                                        <option selected>5</option>
                                        <option>7</option>
                                    </select>
                                </div>
                                <p>Days</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <h6 class="fw-medium">Invoice Round Off</h6>
                            <p>Value roundoff in invoice</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-3">
                            <div class="d-flex align-items-center">
                                <div class="form-check form-switch me-2">
                                    <input class="form-check-input" type="checkbox" role="switch" checked>
                                </div>
                                <div class="select-drop w-100">
                                    <select class="select">
                                        <option selected>Roundoff Up</option>
                                        <option>Roundoff Down</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <h6 class="fw-medium">Show Company Details</h6>
                            <p>Show/hide company details in invoice</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" role="switch" checked>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <h6 class="fw-medium">Invoice Header Terms</h6>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <div class="summernote"></div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <h6 class="fw-medium">Invoice Footer Terms</h6>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <div class="summernote"></div>
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
    <!-- /Invoice Settings -->
</div>
