<?php $page = 'form-floating-labels'; ?>
@extends('layout.mainlayout')
@section('content')
<div class="page-wrapper cardhead">
    <div class="content container-fluid">

    
        @component('components.breadcrumb')
        @slot('title')
        Floating Label
        @endslot
        @endcomponent
        

        <!-- Floating Label -->
        <div class="row">
            <div class="col-xl-6">
                <div class="card">
                    <div class="card-header justify-content-between">
                        <div class="card-title">
                            Basic Examples
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control" id="floatingInput"
                                placeholder="name@example.com">
                            <label for="floatingInput">Email address</label>
                        </div>
                        <div class="form-floating">
                            <input type="password" class="form-control" id="floatingPassword"
                                placeholder="Password">
                            <label for="floatingPassword">Password</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="card">
                    <div class="card-header justify-content-between">
                        <div class="card-title">
                            Readonly plain text
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="form-floating mb-3">
                            <input type="email" readonly class="form-control-plaintext"
                                id="floatingEmptyPlaintextInput" placeholder="name@example.com">
                            <label for="floatingEmptyPlaintextInput">Empty input</label>
                        </div>
                        <div class="form-floating">
                            <input type="email" readonly class="form-control-plaintext"
                                id="floatingPlaintextInput" placeholder="name@example.com"
                                value="name@example.com">
                            <label for="floatingPlaintextInput">Input with value</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Floating Label -->

       
        @livewire('formfloatinglabels')
        
    </div>	
</div>
@endsection