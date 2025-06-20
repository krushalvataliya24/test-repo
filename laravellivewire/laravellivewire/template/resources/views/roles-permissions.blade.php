<?php $page = 'roles-permissions'; ?>
@extends('layout.mainlayout')
@section('content')
    <!-- Page Wrapper -->
    <div class="page-wrapper">
        <div class="content">

            <div class="row">
                <div class="col-md-12">

                    @component('components.breadcrumb')
                        @slot('title')
                            Roles
                        @endslot
                        @slot('item2')
                            roles-permissions
                        @endslot
                    @endcomponent

                    @livewire('rolespermissions')
                </div>
            </div>

        </div>
    </div>
    <!-- /Page Wrapper -->
    @component('components.model-popup')
    @endcomponent
@endsection
