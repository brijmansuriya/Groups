@extends('layouts.appf')
@section('content')
@section('css')
    <style>
        .hidden {
            display: none;
        }

    </style>
    <style>
        .top {

            width: 270px;
            border-radius: 100%;
            height: 270px;
            margin-left: 55px;
            margin-top: 70px;
        }

        .imgbot {
            /* display: none; */
            margin: 70px;
            opacity: 0;
        }

        ::-webkit-file-upload-button {
            background: linear-gradient(42deg, #5846f9 0%, #7b27d8 100%);
            color: rgb(255, 255, 255);
            padding: 10px 35px;
            border: none;
            border-radius: 4px;
        }

        ::-webkit-file-upload-button:hover {
            background: linear-gradient(180deg, #5846f9 0%, #7b27d8 100%);
        }

    </style>
@endsection

<!-- Group Form -->
<!-- ======= Frequently Asked Questions Section ======= -->
<section id="" class="mt-5 pricing">
    <div class="container" data-aos="fade-up">

        <div class="section-title">
            <h2>Frequently Asked Questions</h2>
            <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit
                sint
                consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea.
                Quia fugiat sit
                in iste officiis commodi quidem hic quas.</p>
        </div>

        <div>
            @error('gname')
            {{ alert($message) }}
            @enderror
            @error('url')
                {{ alert($message) }}
            @enderror
            @error('gimg')
                {{ alert($message) }}
            @enderror
            @error('cat_id')
                {{ alert($message) }}
            @enderror
            @error('type')
                {{ alert($message) }}
            @enderror
            @error('gctype')
                {{ alert($message) }}
            @enderror
            <div class="card card-2">
                <div class="card-heading">
                    <input accept="image/*" type='file' id="" class="imgbot" disabled />
                    <img id="blah" src="{{ asset('av.jpg') }}" alt="your image" class="top" />
                </div>
                <div class="card-body">
                    <h2 class="title">Group Registration Info</h2>
                    <form method="POST" action="{{ url('savegroup') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="input-group">
                            <input class="input--style-2" type="text" placeholder="Group Name" name="gname">
                        </div>
                        <div class="input-group">
                            <input class="input--style-2" type="text" placeholder="Group Url" name="url">
                        </div>
                        <div class="input-group">
                            {{-- <input class="input--style-2" type="text" placeholder="Group Url" name="url"> --}}
                            <input accept="image/*" name="gimg"  type='file' id="imgInp" placeholder="Group Url" class="input--style-2" />
                        </div>
                        <div class="row row-space">
                            <div class="col-12">
                                <div class="input-group">
                                    <div class="col-12">
                                        <div>
                                            <div class="rs-select2 js-select-simple" >
                                                <select name="cat_id" required>
                                                    <option disabled="disabled" value="">Select Categoris</option>
                                                   
                                                    @foreach ($category as $cat)
                                                        <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                                                    @endforeach
                                                </select>
                                                <div class="select-dropdown"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="input-group">
                                    <div class="col-12">
                                        <div>
                                            <div class="rs-select2 js-select-simple">
                                                <select name="type" id="type">
                                                    <option disabled="disabled" selected="selected">
                                                        Whatsapp/Telegram</option>
                                                    <option value="1">Whatsapp</option>
                                                    <option value="2">Telegram</option>
                                                </select>
                                                <div class="select-dropdown"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="input-group hidden" id="addremove">
                                    <div class="col-12">
                                        <div>
                                            <div class="rs-select2 js-select-simple">
                                                <select name="gctype" id="Group">
                                                    <option disabled="disabled" selected="selected">Telegram
                                                        Channel/Group</option>
                                                    <option value="1">Channel</option>
                                                    <option value="2">Group</option>
                                                </select>
                                                <div class="select-dropdown"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row row-space">
                            <div class="col-12">
                                <div class="input-group">
                                    <input class="input--style-2" type="email" placeholder="Email" name="gmail">
                                </div>
                            </div>
                        </div>
                        <div class="p-t-30">
                            <button class="btn-buy" type="submit">Add Group</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
</section>

@endsection
@section('js')
<script>
    $("#Group").hide();
    $('#type').on('change', function() {
        // alert(this.value);
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
