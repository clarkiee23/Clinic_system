
@extends('layout.admin-patientR-master')

@section('title')
Patient's Record
@stop



@section('content')
<style>
    .add-data{
        position:fixed;
        width:60px;
        height:60px;
        bottom:40px; 
        right:40px;
        background-color: #006dff;
        color: #ffffff;
        border-radius:50px;
        text-align:center;
        box-shadow: 2px 2px 3px #999;
        
    }
    .add-data i{
        margin-top:22px;
    }
    #hlthdash-header hr{
        margin-top: 0px;
    }
    #hlthdash-subhead a{
        color: #0266ea;
    }
    #hlthdash-subhead i{
        color: #1067d8;
        font-size: 22px;
    }
</style>

<div class="main-container">
                <div class="row mb-1" id="hlthdash-header">
                    <div class="col-md-11" style="margin: auto; padding: 0px;">
                        <div class="col-md-5 mt-5">
                            <h5>PATIENT HEALTH DATA</h5>
                        </div>
                        <div class="col-md-6"></div>  
                        <hr>
                    </div>
                </div>
                <div class="row mb-4" id="hlthdash-subhead">
                    <div class="col-md-11" style="margin: auto;">
                        <div class="row">
                            <div class="col-md-2">
                                <i class="fa fa-box-archive"></i> <a href="#">Archived</a>
                            </div>
                            <div class="col-md-3">
                                <i class="fa fa-plus"></i> <a href="#" data-bs-toggle="modal" data-bs-target="#uploadHealthData"> Upload Batch User</a>
                            </div>
                            <div class="col-md-4"></div> 
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-11 health-data">


                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Student</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Employee</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">Visitor</button>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab"><br>
                                <table id="hlt-student" class="table table-hover" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th class="bg-primary text-white">ID Number</th>
                                            <th class="bg-primary text-white">First Name</th>
                                            <th class="bg-primary text-white">M.Name</th>
                                            <th class="bg-primary text-white">Surname</th>
                                            <th class="bg-primary text-white">Suffix</th>
                                            <th class="bg-primary text-white">Age</th>
                                            <th class="bg-primary text-white">Gender</th>
                                            <th class="bg-primary text-white">Course/Year</th>
                                            <th class="bg-primary text-white">Date</th>
                                            <th class="bg-primary text-white text-center">actions</th>
                                            
                                        </tr>
                                    </thead>
                                    



@stop



