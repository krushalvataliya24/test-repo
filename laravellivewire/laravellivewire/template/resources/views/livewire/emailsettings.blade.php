<div>
     <!-- Email Wrap -->
     <div class="col-md-12">

        <!-- PHP Mailer -->
        <div class="border rounded p-3 mb-4">
            <div class="row gy-3">
                <div class="col-sm-5">
                    <div class="d-flex align-items-center">
                        <span class="avatar avtar-lg border me-2 flex-shrink-0">
                            <img src="{{ URL::asset('/build/img/icons/mail-01.svg')}}" class="w-auto h-auto" alt="">
                        </span>
                        <div>
                            <h6 class="fw-medium mb-1">PHP Mailer</h6>
                            <a href="javascript:void(0);" class="badge bg-soft-success">Connected</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-7">
                    <div class="d-flex align-items-center justify-content-between">
                        <div>
                            <a href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#php-mail" class="info-icon me-3 text-default"><i class="ti ti-info-circle-filled me-1"></i></a>
                            <a href="#" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#add_phpmail"><i class="ti ti-tool me-1"></i>View Integration</a>
                        </div>
                        <div class="status-toggle">
                            <input type="checkbox" id="mail1" class="check" checked="">
                            <label for="mail1" class="checktoggle">	</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="collapse" id="php-mail">
                <div class="mail-collapse">
                    <p>PHPMailer is a third-party PHP library that provides a simple way to send emails in PHP. It offers a range of features that make it a popular alternative to PHP's built-in mail() function, such as support for HTML emails, attachments, and SMTP authentication.</p>
                </div>
            </div>
        </div>
        <!-- /PHP Mailer -->

        <!-- SMTP -->
        <div class="border rounded p-3 mb-4">
            <div class="row gy-3">
                <div class="col-sm-5">
                    <div class="d-flex align-items-center">
                        <span class="avatar avtar-lg border me-2 flex-shrink-0">
                            <img src="{{ URL::asset('/build/img/icons/mail-02.svg')}}" class="w-auto h-auto" alt="">
                        </span>
                        <div>
                            <h6 class="fw-medium mb-1">SMTP</h6>
                            <a href="javascript:void(0);" class="badge bg-soft-success">Connected</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-7">
                    <div class="d-flex align-items-center justify-content-between">
                        <div>
                            <a href="javascript:void(0);" class="me-3 text-default"><i class="ti ti-info-circle-filled me-1"></i></a>
                            <a href="#" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#add_smtp"><i class="ti ti-tool me-1"></i>View Integration</a>
                        </div>
                        <div class="status-toggle">
                            <input type="checkbox" id="mail2" class="check" checked="">
                            <label for="mail2" class="checktoggle">	</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /SMTP -->

        <!-- SendGrid -->
        <div class="border rounded p-3">
            <div class="row gy-3">
                <div class="col-sm-5">
                    <div class="d-flex align-items-center">
                        <span class="avatar avtar-lg border me-2 flex-shrink-0">
                            <img src="{{ URL::asset('/build/img/icons/mail-03.svg')}}" class="w-auto h-auto" alt="">
                        </span>
                        <div>
                            <h6 class="fw-medium mb-1">SendGrid</h6>
                            <a href="javascript:void(0);" class="badge bg-soft-purple text-purple">Not Connected</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-7">
                    <div class="d-flex align-items-center justify-content-between">
                        <div>
                            <a href="javascript:void(0);" class="me-3 text-default"><i class="ti ti-info-circle-filled me-1"></i></a>
                            <a href="#" class="btn btn-primary"><i class="ti ti-plug-connected me-1"></i>Connect Now</a>
                        </div>
                        <div class="status-toggle">
                            <input type="checkbox" id="mail3" class="check" checked="">
                            <label for="mail3" class="checktoggle">	</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /SendGrid -->

    </div>
    <!-- /Email Wrap -->

</div>
