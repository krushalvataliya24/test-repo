<?php $page = 'chart-c3'; ?>
@extends('layout.mainlayout')
@section('content')

<div class="page-wrapper cardhead">
    <div class="content">

      
        @component('components.breadcrumb')
        @slot('title')
        C3 Chart
        @endslot
        @endcomponent
        
        
        <div class="row">
        
            <!-- Chart -->
            <div class="col-md-6">	
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">Bar Chart</div>
                    </div>
                    <div class="card-body">
                        <div id="chart-bar-stacked"></div>
                    </div>
                </div>
            </div>
            <!-- /Chart -->
            
            <!-- Chart -->
            <div class="col-md-6">	
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">Multiple Bar Chart</div>
                    </div>
                    <div class="card-body">
                        <div  id="chart-bar"></div>
                    </div>
                </div>
            </div>
            <!-- /Chart -->
            
            <!-- Chart -->
            <div class="col-md-6">	
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">Horizontal Bar Chart</div>
                    </div>
                    <div class="card-body">
                        <div  id="chart-bar-rotated" ></div>
                    </div>
                </div>
            </div>
            <!-- /Chart -->
            
            <!-- Chart -->
            <div class="col-md-6">	
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">Line Chart</div>
                    </div>
                    <div class="card-body">
                        <div id="chart-sracked"></div>
                    </div>
                </div>
            </div>
            <!-- /Chart -->
            
            <!-- Chart -->
            <div class="col-md-6">	
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">Line Chart</div>
                    </div>
                    <div class="card-body">
                        <div id="chart-spline-rotated"></div>
                    </div>
                </div>
            </div>
            <!-- /Chart -->
            
         
            
        </div>
    
    </div>			
</div>
@endsection