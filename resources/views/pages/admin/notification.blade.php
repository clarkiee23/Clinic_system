
@extends('layout.master')

@section('title')
Notification
@stop




<!-- CONTENT START SECTION-->
<!-- CONTENT START SECTION-->
<!-- CONTENT START SECTION-->
@section('content')

<!-- INTRO -->

<!-- <h3>Hello, {{$name}}</h3>
<h4>Wellcome to the, {{$pagetitle}}</h4>

<button onclick="testfunction()">Click Me</button> -->

<!-- INTRO END -->

<!-- STYLE OF THE BOOTSTRAP -->
    <!-- NAA SA MASTER -->
<!-- STYLE OF THE BOOTSTRAP -->



  <!-- Main Sidebar Container -->
  <!-- Main Sidebar Container -->
  <!-- Main Sidebar Container -->
  <!-- Main Sidebar Container -->

  <aside class="main-sidebar sidebar-dark-primary elevation-5 bg-success text-white">
    <!-- Brand Logo -->
    <a href="{{route('dashboard')}}" class="brand-link">
      <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">MEDISCAN</span>
    </a>

          <!-- Sidebar -->
          <div class="sidebar">
            <!-- Sidebar user panel (optional) -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
              <div class="image">
                <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
              </div>
              <div class="info">
                <a href="#" class="d-block">Clarkiee boyy</a>
              </div>
            </div>

            <!-- SidebarSearch Form -->
            <div class="form-inline">
              <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                  <button class="btn btn-sidebar">
                    <i class="fas fa-search fa-fw"></i>
                  </button>
                </div>
              </div>
            </div>

                          <!-- Sidebar Menu TABS-->
                          <!-- Sidebar Menu TABS-->
                          <!-- Sidebar Menu TABS-->
                          <!-- Sidebar Menu TABS-->
                          <!-- Sidebar Menu TABS-->
                          <!-- Sidebar Menu TABS-->
                                <nav class="mt-2">
                                  <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                                    <!-- Add icons to the links using the .nav-icon class
                                        with font-awesome or any other icon font library -->

                                        <!-- Sidebar Menu TABS -->
                                        <!-- Sidebar Menu TABS -->
                                    <!-- <li class="nav-item menu-open">
                                      <a href="#" class="nav-link active"> -->
                                        <!-- <i class="nav-icon fas fa-tachometer-alt"></i> -->
                                        <!-- <p>
                                            Dashboard
                                          <i class="right fas fa-angle-left"></i>
                                        </p>
                                      </a>
                                      <ul class="nav nav-treeview"> -->






                                        <li class="nav-item">
                                          <a href="{{route('dashboard')}}" class="nav-link">
                                            <!-- <i class="far fa-circle nav-icon"></i> -->
                                            <p>Dashboard</p>
                                          </a>
                                        </li>
                                        <li class="nav-item">
                                          <a href="{{route('patient_record')}}" class="nav-link">
                                            <!-- <i class="far fa-circle nav-icon"></i> -->
                                            <p>Patient's Record</p>
                                          </a>
                                        </li>
                                        <li class="nav-item">
                                          <a href="{{route('consultation_record')}}" class="nav-link">
                                            <!-- <i class="far fa-circle nav-icon"></i> -->
                                            <p>Consultation Record</p>
                                          </a>
                                        </li>
                                        <li class="nav-item">
                                          <a href="{{route('notification')}}" class="nav-link active">
                                            <!-- <i class="far fa-circle nav-icon"></i> -->
                                            <p>Notification</p>
                                          </a>
                                        </li>
                                        <li class="nav-item">
                                          <a href="{{route('reports')}}" class="nav-link">
                                            <!-- <i class="far fa-circle nav-icon"></i> -->
                                            <p>Reports</p>
                                          </a>
                                        </li>
                                      </ul>
                                    </li>
                          <!-- Sidebar Menu TABS END-->
                          <!-- Sidebar Menu TABS END-->
                          <!-- Sidebar Menu TABS END-->
                          <!-- Sidebar Menu TABS END-->
                                    


                        


          <!-- OTHER SIDEBAR TABS HERE -->
          <!-- OTHER SIDEBAR TABS HERE -->
            <!-- <li class="nav-header">MISCELLANEOUS</li> -->
          <!-- OTHER SIDEBAR TABS HERE ENDS-->
          <!-- OTHER SIDEBAR TABS HERE ENDS-->
          
  <!-- /.sidebar-menu END-->
  </div>
<!-- /.sidebar -->
</aside>
<!-- Main Sidebar Container END-->
<!-- Main Sidebar Container END-->
<!-- Main Sidebar Container END-->
<!-- Main Sidebar Container END-->




<!-- Content Wrapper. Contains page content -->
<!-- Content Wrapper. Contains page content -->
<!-- Content Wrapper. Contains page content -->
<!-- Content Wrapper. Contains page content -->


@include('shared.header')



<!-- Content Wrapper. Contains page content -->
<!-- Content Wrapper. Contains page content -->
<!-- Content Wrapper. Contains page content -->
<!-- Content Wrapper. Contains page content -->






@stop
<!-- CONTENT END SECTION -->
<!-- CONTENT END SECTION -->
<!-- CONTENT END SECTION -->


