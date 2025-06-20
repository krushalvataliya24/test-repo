<?php $page = 'lock-screen'; ?>
@extends('layout.mainlayout')
@section('content')
    <div class="account-content">
        <div class="d-flex flex-wrap w-100 vh-100 overflow-hidden">
            <div class="d-flex align-items-center justify-content-center flex-fill flex-wrap vh-100 overflow-auto">
                <div class="login-shapes">
                    <div class="login-right-shape">
                        <img src="{{ URL::asset('/build/img/authentication/shape-01.png')}}" alt="Shape">
                    </div>
                    <div class="login-left-shape">
                        <img src="{{ URL::asset('/build/img/authentication/shape-02.png')}}" alt="Shape"> 
                    </div> 
                </div>
                @livewire('lockscreen')
            </div>
        </div>
	</div>
@endsection