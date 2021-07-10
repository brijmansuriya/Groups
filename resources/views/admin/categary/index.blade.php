@extends('layouts.app')

@section('content')

@php
$add=url('admin/categary/add');
@endphp
<div class="content-wrapper">

   

    <div class="row" id="proBanner">
        <div class="col-12">
          @if(session()->has('message'))
          <span class="d-flex align-items-center purchase-popup">
            <p> {{session('message')}}  </p>
            <a href=""target="_blank" class="ml-auto"></a>
            <i class="mdi mdi-close" id="bannerClose"></i>
          </span>
          @endif  
          
       
    
        </div>
      </div>

    <div class="page-header">
        <h3 class="page-title">
            <span class="page-title-icon bg-gradient-primary text-white mr-2">
                <i class="mdi mdi-home"></i>
            </span> Dashboard
        </h3>
        <nav aria-label="breadcrumb">
            <ul class="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page">
                    <span></span>Overview <i class="mdi mdi-alert-circle-outline icon-sm text-primary align-middle"></i>
                </li>
            </ul>
        </nav>
    </div>

    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-6">
                    <h4 class="card-title">Categary</h4>
                </div>
                <div class="col-6 " > 
                    <a class="btn btn-gradient-primary btn-rounded btn-fw float-right"
                     href="{{ $add }}">Add</a></div>
            </div>


            <table class="table table-striped">
                <thead>
                    <tr>
                        <th> User </th>
                        <th> First name </th>
                        <th> Progress </th>
                        <th> Amount </th>
                        <th> Deadline </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="py-1">
                            <img src="../../assets/images/faces-clipart/pic-1.png" alt="image">
                        </td>
                        <td> Herman Beck </td>
                        <td>
                            <div class="progress">
                                <div class="progress-bar bg-success" role="progressbar" style="width: 55%"
                                    aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </td>
                        <td> $ 77.99 </td>
                        <td> May 15, 2015 </td>
                    </tr>

                </tbody>
            </table>
        </div>
    </div>
</div>


@endsection