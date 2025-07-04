<?php $page = 'audio-call'; ?>
@extends('layout.mainlayout')
@section('content')
<div class="page-wrapper">
    <div class="content">

        <!-- /product list -->
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="conference-meet-group">
                            <div class="meeting-list">
                        
                                <!-- Horizontal View -->
                                <div class="join-contents horizontal-view fade-whiteboard">						
                                    <div class="join-video audio-calls user-active">
                                        <div class="audio-call-group">
                                            <ul>
                                                <li class="active">
                                                    <div class="avatar ">
                                                        <img src="{{URL::asset('/build/img/profiles/avatar-02.jpg')}}" class="rounded-circle" alt="image">
                                                        <div class="more-icon">	
                                                            <a href="javascript:void(0);" >
                                                                <i class="feather feather-radio"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="user-audio-call">
                                                        <h5>Mark Villiams</h5>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="avatar ">
                                                        <img src="{{URL::asset('/build/img/users/user-16.jpg')}}" class="rounded-circle" alt="image">
                                                        <div class="more-icon audio-more-icon">	
                                                            <a href="javascript:void(0);" class="other-mic-off">
                                                                <i class="bx bx-microphone"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="user-audio-call">
                                                        <h5>Benjamin</h5>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="record-time">
                                            <span>40:12</span>
                                        </div>	
                                        <div class="meet-drop meet-mutes-bottom">
                                            <ul>
                                                <li><a href="javascript:void(0);" id="show-message"><i class="bx bx-message-alt-dots"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    
                                </div>
                                <!-- /Horizontal View -->
                                
                            </div>
                          
                            @livewire('audiocall')
                        </div>
                        <div class="meet-call-menu-blk">
                            <div class="video-call-action">
                                <ul class="nav">
                                    <li><a href="javascript:void(0);" class="mute-bt "><i class="bx bx-microphone" ></i></a></li>
                                    <li><a href="javascript:void(0);" class="call-end" ><i data-feather="phone" ></i></a></li>
                                    <li><a href="javascript:void(0);"  ><i class="bx bx-video-off"  ></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /product list -->
    </div>
</div>

@endsection