@extends('layouts.app')
@section('css')
    <style>
        .hidden {
            display: none;
        }
        .top{
            width: 100px;
            margin: 20px;
        }
    </style>
@endsection
@section('content')



    @php
    $save = url('admin/addgroup/save');
    $import = url('importExcel');

    $page = 'Group';
    $val_gname = '';
    $val_name = '';
    $val_url = '';
    $val_gimg ='';
    $val_gmail = '';
    $val_cat_id = '';
    $val_type = '';
    $val_id = '';
    $addedit = 'Add';

    if ($id != '') {
        $val_gname = $data->gname;
        $val_url = $data->url;
        $val_gimg = $data->gimg;
        $val_gmail = $data->gmail;
        $val_cat_id = $data->cat_id;
        $val_type = $data->type;
        $val_id = $data->id;
        $addedit = 'Edit';
    }

    @endphp

    <div class="content-wrapper">

        <div class="page-header">
            <h3 class="page-title">
                <span class="page-title-icon bg-gradient-primary text-white mr-2">
                    <i class="mdi mdi-home"></i>
                </span> <?= $page ?>
            </h3>
        </div>

        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-6">
                        <h4 class="card-title"><?= $page ?> <?= $addedit ?></h4>
                    </div>
                    <div class="col-6 ">
                        <button type="button" class="btn btn-gradient-primary btn-rounded btn-fw float-right mb-5" data-toggle="modal" data-target="#exampleModal">
                            Import Data
                          </button>
                    </div>
                </div>

                    <!-- Button trigger modal -->


                <form class="forms-sample" action="<?= $save ?>" enctype="multipart/form-data" method="POST">
                    @csrf
                    <div class="row" id="proBanner">
                        <div class="col-12">
                            @if ($errors->any())
                                @foreach ($errors->all() as $item)
                                    <li>{{ $item }}</li>
                                @endforeach

                            @endif
                        </div>
                    </div>
                    <div class="row">
                        <input type="hidden" name='id' value='{{ $val_id }}'>
                        {{ editbox('6', 'Group Name', 'gname', 'Enter Group Name', $val_gname) }}
                        {{ editbox('6', 'Url', 'url', 'Enter Url', $val_url) }}
                        {{ editbox('6', 'Gmail', 'gmail', 'Enter Gmail', $val_gmail) }}
                        <div class="col-md-6">
                            <label for="exampleFormControlSelect3">Select Categoris</label>
                            <select class="form-control form-control-sm" id="exampleFormControlSelect3" name="cat_id">
                                @foreach ($category as $cat)
                                    <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-6 mb-5">
                            <label>Select Categoris</label>
                            <select name="type" id="type" class="form-control form-control-sm">
                                <option disabled="disabled" selected="selected">
                                    Whatsapp/Telegram</option>
                                <option value="1">Whatsapp</option>
                                <option value="2">Telegram</option>
                            </select>
                        </div>
                        <div class="col-md-6 hidden" id="addremove">
                            <label>Select Categoris</label>
                            <select name="gctype" class="form-control form-control-sm">
                                <option disabled="disabled" selected="selected">Telegram
                                    Channel/Group</option>
                                <option value="1">Channel</option>
                                <option value="2">Group</option>
                            </select>
                        </div>
                        <div class="col-md-12 mb-5">
                            <label>Select Categoris</label>
                            <div class="custom-file">
                                <input accept="image/*" name="gimg" type="file" class="custom-file-input" id="imgInp">
                                <label class="custom-file-label" for="customFile">Choose file</label>
                                <img id="blah" src="{{ asset('av.jpg') }}" alt="your image" class="top" />
                            </div>
                        </div>


                    </div>
                    <button type="submit" class="btn btn-gradient-primary mr-2">Submit</button>
                    <a href="{{ url('admin/category') }}" class="btn btn-light">Cancel</a>
                </form>
            </div>
        </div>
    </div>


  
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form class="forms-sample" action="<?= $import ?>" enctype="multipart/form-data" method="POST">
                @csrf
                <input accept=".csv, application/vnd.openxmlformats-officedocument.spreadsheetml.sheet, application/vnd.ms-excel" name="import" type="file" >
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                  </div>
            </form>
        </div>
        
      </div>
    </div>
  </div>
@endsection
@section('js')
    <script>
        $('#type').on('change', function() {
            if (this.value == '2') {
                $("#addremove").removeClass("hidden");
            } else {
                $("#addremove").addClass("hidden");
            }

        });
    </script>
    <script>
        imgInp.onchange = evt => {
            const [file] = imgInp.files
            if (file) {
                blah.src = URL.createObjectURL(file)
            }
        }
    </script>
@endsection
