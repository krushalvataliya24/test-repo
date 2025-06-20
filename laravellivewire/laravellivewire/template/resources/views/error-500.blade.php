<?php $page = 'error-500'; ?>
@extends('layout.mainlayout')
@section('content')

    <div class="d-flex flex-wrap w-100 vh-100 overflow-hidden">
        <div class="d-flex align-items-center justify-content-center flex-fill flex-column vh-100 overflow-auto">
            <div class="error-img mb-4">
                <img src="{{ URL::asset('/build/img/authentication/error-500.png')}}" class="img-fluid" alt="">
            </div>
            @livewire('error500')
        </div>
    </div>
@endsection