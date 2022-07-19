@extends('admin.layouts.app')
@section('title',' New Arrivals Medicine')
@section('content')

 <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <h4 class="page-title float-left">Create New Hospitals</h4>
                    <ol class="breadcrumb float-right">
                        <li class="breadcrumb-item"><a href="">Admin</a></li>
                        <li class="breadcrumb-item"><a href="">Create New Hospitals</a></li>
                    </ol>

                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
        <!-- end row -->

        <div class="row">
            <div class="col-md-12">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Create New Hospitals</h4>
                    </div>
                    <form method="POST" action="{{ route('newarrivals.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="field-2" class="control-label">Hospital Name</label>
                                        <input type="text" class="form-control" id="field-2" placeholder="hospital name" name="hospital_name" value="{{ old('hospital_name'); }}" required>
                                        @error('hospital_name')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="field-2" class="control-label">Phone Number</label>
                                        <input type="text" class="form-control" id="field-2" placeholder="Phone" name="phone" value="{{ old('phone'); }}" required>
                                        @error('phone')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="field-2" class="control-label">Hospital Address</label>
                                        <input type="text" class="form-control" id="field-2" placeholder="Address" name="address" value="{{ old('address'); }}" required>
                                        @error('address')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <label for="field-1" class="control-label">Hospital Image One <span class="text-light"> &nbsp;(Preferable width : 600px Height: 490px)</span></label><br>
                                    <button type="button" class="btn btn-secondary btn-file">
                                        <input type="file" class="btn-secondary" name="image" />
                                    </button><br>
                                    @error('image')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="col-md-6">
                                    <label for="field-1" class="control-label">Hospital Image Two <span class="text-light"> &nbsp;(Preferable width : 600px Height: 490px)</span></label><br>
                                    <button type="button" class="btn btn-secondary btn-file">
                                        <input type="file" class="btn-secondary" name="image_two" />
                                    </button><br>
                                    @error('image_two')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="field-2" class="control-label">Hospital Description</label>
                                        <textarea style="height: 220px;" type="text" class="form-control" placeholder="Hospital Description" name="description" required>{{ old('description') }}</textarea>
                                        @error('description')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <a href="{{ route('newarrivals.index') }}" type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Cancel</a>
                            <button type="submit" class="btn btn-info waves-effect waves-light">Published Now</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
@endsection

