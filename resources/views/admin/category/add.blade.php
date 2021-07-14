@extends('layouts.app')
@section('content')
    

    @php
   
    $save = url('admin/category/save');
 
    $page = 'Category';
    $val_name = '';
    $val_slug = '';
    $val_id='';
    $addedit='Add';
    if ($id != '') {
        
        $val_name = $data->name;
        $val_slug = $data->slug;
        $val_id = $data->id;
        $addedit='Edit';
       
    }

    @endphp
    <div class="content-wrapper">

        <div class="page-header">
            <h3 class="page-title">
                <span class="page-title-icon bg-gradient-primary text-white mr-2">
                    <i class="mdi mdi-home"></i>
                </span> Category
            </h3>
        </div>
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">category <?=$addedit?></h4>
                <form class="forms-sample" action="<?=$save?>" method="POST">
                    @csrf
                    <div class="row" id="proBanner">
                        <div class="col-12">
                            @error('category')
                                {{ alert($message) }}
                            @enderror
                            @error('Slug')
                                {{ alert($message) }}
                            @enderror
                        </div>
                    </div>
                    <div class="row">
                        <input type="hidden" name='id' value='{{ $val_id }}'>
                        {{ editbox('6', 'category', 'category', 'Enter category Name', $val_name) }}
                  
                        {{ editbox('6', 'Slug', 'Slug', 'Enter Slug Name', $val_slug ) }}
                    </div>
                    <button type="submit" class="btn btn-gradient-primary mr-2">Submit</button>
                    <a href="{{ url('admin/category') }}" class="btn btn-light">Cancel</a>
                </form>
            </div>
        </div>
    </div>
@endsection
