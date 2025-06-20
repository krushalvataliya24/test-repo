<?php $page = 'email'; ?>
@extends('layout.mainlayout')
@section('content')

<div class="page-wrapper">
    <div class="content">
        <div class="page-header">
            <div class="row">
                <div class="col">
                    <h3 class="page-title">Inbox</h3>
                </div>
            </div>
        </div>
        @livewire('email')
    </div>
</div>
@component('components.model-popup')
@endcomponent
@endsection