@extends('admin.layouts.app')
@section('title',' Website Settings')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <h4 class="page-title float-left">Settings</h4>
                    <ol class="breadcrumb float-right">
                    <li class="breadcrumb-item"><a href="#">Admin</a></li>
                    <li class="breadcrumb-item"><a href="#">Update Settings</a></li>
                    </ol>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
        <!-- end row -->
        <div class="row">
            <div class="col-md-12">
                <div class="card-box">
                    <form role="form" method="post" action="{{ route('setting.update') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="">Website Name</label>
                            <input type="text" class="form-control" name="website_title" id="name" value="{{ $settings->website_title }}">
                            <div class="text-danger">
                                {{ $errors->first('website_title') }}
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="">Website Slide Text</label>
                            <input type="text" class="form-control" name="slide_text" id="name" value="{{ $settings->slide_text }}">
                            <div class="text-danger">
                                {{ $errors->first('slide_text') }}
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="">Website Logo</label>
                            <input type="file" class="form-control" name="site_logo" id="name" value="{{ $settings->site_logo }}">
                            <div class="text-danger">
                                {{ $errors->first('site_logo') }}
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="">Minimum Deposit</label>
                            <input type="number" class="form-control" name="deposit_minimum" id="name" value="{{ $settings->deposit_minimum }}">
                            <div class="text-danger">
                                {{ $errors->first('deposit_minimum') }}
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="">Minimum Withdrow</label>
                            <input type="number" class="form-control" name="withdrow_minimum" id="name" value="{{ $settings->withdrow_minimum }}">
                            <div class="text-danger">
                                {{ $errors->first('withdrow_minimum') }}
                            </div>
                        </div>
                        <button type="submit" class="btn btn-purple waves-effect waves-light">Submit</button>
                    </form>
                </div>
            </div>
            <!-- end col -->
        </div>
        <!-- end row -->
    </div>
@endsection
