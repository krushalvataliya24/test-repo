<div>
    <div class="card">
        <div class="card-header">
            <!-- Search -->
            <div class="row align-items-center">
                <div class="col-sm-4">
                    <div class="icon-form mb-3 mb-sm-0">
                        <span class="form-icon"><i class="ti ti-search"></i></span>
                        <input type="text" class="form-control" placeholder="Search Roles">
                    </div>							
                </div>		
                <div class="col-sm-8">					
                    <div class="text-sm-end">
    
                        <a href="javascript:void(0);" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#add_role"><i class="ti ti-square-rounded-plus me-2"></i>Add New Roles</a>
                    </div>
                </div>
            </div>
            <!-- /Search -->
        </div>
        <div class="card-body">
            <!-- Roles List -->
            <div class="table-responsive custom-table">
                <table class="table" id="roles_list">
                    <thead class="thead-light">
                        <tr>
                            <th class="no-sort">
                                <label class="checkboxs">
                                    <input type="checkbox" id="select-all"><span class="checkmarks"></span>
                                </label>
                            </th>
                            <th>Role Name</th>
                            <th>Created at</th>
                            <th class="no-sort">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                    </tbody>
                </table>
            </div>
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="datatable-length"></div>
                </div>
                <div class="col-md-6">
                    <div class="datatable-paginate"></div>
                </div>
            </div>
            <!-- /Roles List -->

        </div>
    </div>

</div>
