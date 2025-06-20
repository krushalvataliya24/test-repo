<?php $page = 'coming-soon'; ?>
@extends('layout.mainlayout')
@section('content')
    <div class="d-flex flex-wrap w-100 vh-100 overflow-hidden">
        <div class="d-flex align-items-center justify-content-center flex-fill flex-column vh-100 overflow-auto">
            <div class="comming-shapes">
                <div class="comming-right-shape">
                    <img src="{{ URL::asset('/build/img/authentication/shape-03.png')}}" alt="Shape">
                </div>
                <div class="comming-left-shape">
                    <img src="{{ URL::asset('/build/img/authentication/shape-04.png')}}" alt="Shape"> 
                </div> 
            </div>
            @livewire('comingsoon')
        </div>
    </div>
@endsection
