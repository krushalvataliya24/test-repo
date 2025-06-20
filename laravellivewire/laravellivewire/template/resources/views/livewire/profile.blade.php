<div>
  <!-- Settings Info -->
  <div class="card">
    <div class="card-body">
        <h4 class="fw-semibold mb-3">Profile Settings</h4>
        <form action="profile">
            <div class="border-bottom mb-3 pb-3">
                <h5 class="fw-semibold mb-1">Employee Information</h5>
                <p>Provide the information below</p>
            </div>
            <div class="mb-3">
                <div class="profile-upload">
                    <div class="profile-upload-img">
                        <span><i class="ti ti-photo"></i></span>
                        <img id="ImgPreview" src="{{URL::asset('/build/img/profiles/avatar-02.jpg')}}" alt="img" class="preview1">
                        <button type="button" id="removeImage1" class="profile-remove">
                            <i class="feather-x"></i>
                        </button>
                    </div>
                    <div class="profile-upload-content">
                        <label class="profile-upload-btn">
                            <i class="ti ti-file-broken"></i> Upload File 
                            <input type="file" id="imag" class="input-img">
                        </label>
                        <p>JPG, GIF or PNG. Max size of 800K</p>
                    </div>
                </div>
            </div>
            <div class="border-bottom mb-3">
                <div class="row">
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label class="form-label">
                                First Name  <span class="text-danger">*</span>
                            </label>
                            <input type="text" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label class="form-label">
                                Last Name  <span class="text-danger">*</span>
                            </label>
                            <input type="text" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label class="form-label">
                                User Name  <span class="text-danger">*</span>
                            </label>
                            <input type="text" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label class="form-label">
                                Phone Number  <span class="text-danger">*</span>
                            </label>
                            <input type="text" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label class="form-label">
                                Email  <span class="text-danger">*</span>
                            </label>
                            <input type="text" class="form-control">
                        </div>
                    </div>
                </div>
            </div>
            <div class="border-bottom mb-3 pb-3">
                <h5 class="fw-semibold mb-1">Address</h5>
                <p>Please enter the address details</p>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="mb-3">
                        <label class="form-label">
                            Address  <span class="text-danger">*</span>
                        </label>
                        <input type="text" class="form-control">
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="mb-3">
                        <label class="form-label">
                            Country <span class="text-danger">*</span>
                        </label>
                        <input type="text" class="form-control">
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="mb-3">
                        <label class="form-label">
                            State / Province <span class="text-danger">*</span>
                        </label>
                        <input type="text" class="form-control">
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="mb-3">
                        <label class="form-label">
                            City <span class="text-danger">*</span>
                        </label>
                        <input type="text" class="form-control">
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="mb-3">
                        <label class="form-label">
                            Postal Code <span class="text-danger">*</span>
                        </label>
                        <input type="text" class="form-control">
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
<!-- /Settings Info -->

</div>
