@extends('admin.layouts.app')
@section('title',' Review list')
@section('content')

 <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <h4 class="page-title float-left">Review </h4>
                    <ol class="breadcrumb float-right">
                        <li class="breadcrumb-item"><a href="">Admin</a></li>
                        <li class="breadcrumb-item"><a href="">Review List</a></li>
                    </ol>

                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
        <!-- end row -->

        <div class="row">
            <div class="col-md-12">
                <div class="card-box">
                    <h4 class="m-t-0 header-title"><b>Offer List</b></h4>

                    <div class="table-responsive">
                        <table class="table table-hover m-0 table-actions-bar">

                            <thead>
                            <tr>
                                <th>SI NO.</th>
                                <th>Person Name</th>
                                <th>Review Description</th>
                                <th>Review Rating</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach ($reviews as $item)
                                    <tr>
                                        <td>
                                            <h5>{{ $loop->index + 1 }}</h5>
                                        </td>

                                        <td>
                                            <h5>{{ $item->name }}</h5>
                                        </td>

                                        <td>
                                            <p>{{ Str::limit($item->review_details, 220, $end='..') }}</p>
                                        </td>

                                        <td>
                                            <h5>{{ $item->review_rating }}</h5>
                                        </td>

                                        <form method="POST" action="{{ route('review.destroy', $item->id) }}">
                                            @csrf
                                            @method('DELETE')
                                            <td>
                                                <a href="{{ route('review.edit', $item->id) }}" class="table-action-btn"> <i class="far fa-edit"></i> </a>
                                                <button onclick="blogDelete()" style="border: none; background:none; cursor:pointer;" type="submit" name="submit" class="table-action-btn"><i class="mdi mdi-close"></i></button>
                                            </td>
                                        </form>
                                    </tr>
                                    @empty($item)
                                        <div class="alert alert-info">
                                            Nothing to show any Review !
                                        </div>
                                    @endempty
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>

    </div>
@endsection

@section('footer_script')
    <script>
        function blogDelete(){
            alert('Are you shure ? You want to delete this Review !')
        }
    </script>
@endsection
