@extends('layouts.app')
@section('css')
{{-- 
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
--}}
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap4.min.css">
@endsection
@section('content')
@php
$add = url('admin/category/add');
$page = 'Category';
@endphp
<div class="content-wrapper">
  <div class="row" id="proBanner">
    <div class="col-12">
      @if (session()->has('message'))
      <span class="d-flex align-items-center purchase-popup">
        <p> {{ session('message') }} </p>
        <a href="" target="_blank" class="ml-auto"></a>
        <i class="mdi mdi-close" id="bannerClose"></i>
      </span>
      @endif
    </div>
  </div>
  <div class="page-header">
    <h3 class="page-title">
      <span class="page-title-icon bg-gradient-primary text-white mr-2">
      <i class="mdi mdi-home"></i>
      </span> <?=$page?>
    </h3>
   
  </div>
  <div class="card">
    <div class="card-body">
      <div class="row">
        <div class="col-6">
          <h4 class="card-title">category</h4>
        </div>
        <div class="col-6 ">
          <a class="btn btn-gradient-primary btn-rounded btn-fw float-right mb-5"
            href="{{ $add }}">Add</a>
        </div>
      </div>
      <table id="example" class="table table-striped">
        <thead>
          <tr>
            <th> # </th>
            <th> Category Name </th>
            <th> Category </th>
            <th> Action </th>
          </tr>
        </thead>
        <tbody>
          @php
          $i = 0;
          @endphp
          @foreach ($categorydata as $list)
          @php
          $i++;
          @endphp
          <tr>
            <td class="py-1">{{ $i }}</td>
            <td>{{ $list->name }} </td>
            <td>{{ $list->slug }}</td>
            <td>
              <a href="{{ url('admin/category/add/') }}/{{ $list->id }}">
              <button type="button" class="btn btn-inverse-success btn-icon"><i
                class="mdi mdi-grease-pencil"></i></button></a>
              <a href="{{ url('admin/category/delete/') }}/{{ $list->id }}">
              <button type="button" class="btn btn-inverse-danger btn-icon"><i
                class="mdi mdi-delete-forever"></i></button></a>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>
@endsection
@section('js')
<script>
  $(document).ready(function() {
      $('#example').DataTable();
  });
</script>
{{-- <script src="https://code.jquery.com/jquery-3.5.1.js"></script> --}}
<script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap4.min.js"></script>
@endsection