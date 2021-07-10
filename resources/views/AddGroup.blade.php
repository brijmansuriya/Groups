@extends('layouts.appf')
@section('content')

     <!-- Group Form -->
        <!-- ======= Frequently Asked Questions Section ======= -->
        <section id="" class="faq pricing">
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
                    <div class="card card-2">
                        <div class="card-heading"></div>
                        <div class="card-body">
                            <h2 class="title">Group Registration Info</h2>
                            <form method="POST">
                                <div class="input-group">
                                    <input class="input--style-2" type="text" placeholder="Group Name" name="groupname">
                                </div>
                                <div class="input-group">
                                    <input class="input--style-2" type="text" placeholder="Group Url" name="url">
                                </div>
                                <div class="row row-space">
                                    <div class="col-12">
                                        <div class="input-group">
                                            <div class="col-12">
                                                <div>
                                                    <div class="rs-select2 js-select-simple">
                                                        <select name="gender">
                                                            <option disabled="disabled" selected="selected">Categari
                                                            </option>
                                                            <option value="1">Male</option>
                                                            <option>Female</option>
                                                            <option>Other</option>
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
                                                        <select name="gender">
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
                                        
                                        <div class="input-group">
                                            <div class="col-12">
                                                <div>
                                                    <div class="rs-select2 js-select-simple">
                                                        <select name="gender">
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
                                            <input class="input--style-2" type="email" placeholder="Email" name="res_code">
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
        </section><!-- End Frequently Asked Questions Section -->


@endsection
