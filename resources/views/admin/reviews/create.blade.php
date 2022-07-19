@extends('admin.layouts.app')
@section('title',' Reviews')
@section('content')

 <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <h4 class="page-title float-left">Create New</h4>
                    <ol class="breadcrumb float-right">
                        <li class="breadcrumb-item"><a href="">Admin</a></li>
                        <li class="breadcrumb-item"><a href="">Create Review</a></li>
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
                        <h4 class="modal-title">Create Review</h4>
                    </div>
                    <form method="POST" action="{{ route('review.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-6 my-2">
                                    <div class="form-group">
                                        <label for="field-2" class="control-label">Person Name</label>
                                        <input type="text" class="form-control" id="field-2" placeholder="name" name="name" value="{{ old('name'); }}" required>
                                        @error('name')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6 my-2">
                                    <div class="form-group">
                                        <label for="field-2" class="control-label">Review Rating</label>
                                        <input type="text" class="form-control" id="field-2" placeholder="review rating" name="review_rating" value="{{ old('review_rating'); }}" required>
                                        @error('review_rating')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-12 my-2">
                                    <div class="form-group">
                                        <label for="field-2" class="control-label">Review Details</label><br>
                                        <textarea name="review_details" id="" class="form-control" cols="30" rows="10" required>{{ old('review_details'); }}</textarea>
                                        @error('review_details')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <a href="{{ route('review.index') }}" type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Cancel</a>
                            <button type="submit" class="btn btn-info waves-effect waves-light">Published Now</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
@endsection

