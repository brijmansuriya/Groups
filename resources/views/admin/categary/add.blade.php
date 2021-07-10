@extends('layouts.app')
@section('content')
    @php
    $save = url('admin/categary/save');
    @endphp
    <div class="content-wrapper">
       
        <div class="page-header">
            <h3 class="page-title">
                <span class="page-title-icon bg-gradient-primary text-white mr-2">
                    <i class="mdi mdi-home"></i>
                </span> Dashboard
            </h3>
        </div>
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Categary Add</h4>
                <form class="forms-sample" action="<?= $save ?>" method="POST">
                    @csrf
                    <div class="row" id="proBanner">
                      <div class="col-12">
                        @error('Categary')
                            {{ alert($message) }}
                        @enderror 
                        @error('Slug')
                            {{ alert($message) }}
                        @enderror 
                      </div>
                  </div>
                    <div class="row">
                        <input type="hidden" name="id" value="" >
                        {{ editbox('6', 'Categary', 'Categary', 'Enter Categary Name', '') }}
                        {{ editbox('6', 'Slug', 'Slug', 'Enter Slug Name', '') }}
                      </div>
                      <button type="submit" class="btn btn-gradient-primary mr-2">Submit</button>
                      <a href="{{ url('admin/categary') }}" class="btn btn-light">Cancel</a>
                  </form>
                </div>
              </div>
            </div>
@endsection
