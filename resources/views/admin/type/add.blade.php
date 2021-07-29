@extends('layouts.app')
@section('content')
    

    @php
   
    $save = url('admin/type/save');
 
    $page = 'type';
    $val_type_name = '';
    $val_id='';
    $addedit='Add';
    if ($id != '') {
        
        $val_name = $data->type_name;
        $val_id = $data->id;
        $addedit='Edit';
       
    }

    @endphp
    <div class="content-wrapper">

        <div class="page-header">
            <h3 class="page-title">
                <span class="page-title-icon bg-gradient-primary text-white mr-2">
                    <i class="mdi mdi-home"></i>
                </span> type
            </h3>
        </div>
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">type <?=$addedit?></h4>
                <form class="forms-sample" action="<?=$save?>" method="POST">
                    @csrf
                    <div class="row" id="proBanner">
                        <div class="col-12">
                            @error('type')
                                {{ alert($message) }}
                            @enderror
                            @error('Slug')
                                {{ alert($message) }}
                            @enderror
                        </div>
                    </div>
                    <div class="row">
                        <input type="hidden" name='id' value='{{ $val_id }}'>
                        {{ editbox('6', 'type', 'type', 'Enter type Name', $val_name) }}
                  
                    </div>
                    <button type="submit" class="btn btn-gradient-primary mr-2">Submit</button>
                    <a href="{{ url('admin/type') }}" class="btn btn-light">Cancel</a>
                </form>
            </div>
        </div>
    </div>
@endsection
