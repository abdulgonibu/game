@extends('admin.layouts.app')
@section('title','Visitor Querstion')
@section('content')

 <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <h4 class="page-title float-left">Visitor Queries</h4>
                    <ol class="breadcrumb float-right">
                        <li class="breadcrumb-item"><a href="">Admin</a></li>
                        <li class="breadcrumb-item"><a href="">Queries List</a></li>
                    </ol>

                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
        <!-- end row -->

        <div class="row">
            <div class="col-md-12">
                <div class="card-box">
                    <h4 class="m-t-0 header-title"><b>Queries List</b></h4>
                    <div class="table-responsive">
                        <table class="table table-hover m-0 table-actions-bar">
                            <thead>
                                <tr>
                                    <th>SI NO.</th>
                                    <th>Reserver Name </th>
                                    <th>Phone </th>
                                    <th>Date</th>
                                    <th>Time</th>
                                    <th>Table</th>
                                    <th>Reservation Placed</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($queries as $query)
                                    <tr>
                                        <td>
                                            <p>{{ $loop->index + 1 }}</p>
                                        </td>

                                        <td>
                                            <h6>
                                                <a href="{{ route('querstion.show', $query->id) }}">{{ $query->reserv_name }}</a>
                                            </h6>
                                        </td>
                                        <td>
                                            <h6>{{ $query->phone }}</h6>
                                        </td>
                                        <td>
                                            <h6>{{ $query->date }}</h6>
                                        </td>
                                        <td>
                                            <h6>{{ $query->reserv_time }}</h6>
                                        </td>
                                        <td>
                                            <h6>{{ $query->table }}</h6>
                                        </td>
                                        <td>
                                            <p class="m-b-0 m-t-0 font-600">{{ $query->created_at->diffForHumans() }}</p>
                                        </td>
                                        <form method="POST" action="{{ route('querstion.destroy', $query->id) }}">
                                            @csrf
                                            @method('DELETE')
                                            <td>
                                                <a href="{{ route('querstion.show', $query->id) }}"> <i class="fa-solid fa-eye text-warning mr-2"></i> </a>
                                                <a href="mailto:{{ $query->email }}"> <i class="fas fa-paper-plane"></i> </a>
                                                <button onclick="deleteQuries()" style="border: none; background:none; cursor:pointer;" type="submit" name="submit" class="table-action-btn"><i class="mdi mdi-close text-danger"></i></button>
                                            </td>
                                        </form>
                                    </tr>
                                    @empty($query)
                                        <div class="alert alert-info">
                                            Nothing to show any reservation !
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
        function deleteQuries(){
            alert('Are your Shure ? You want ot delete this Contact info !');
        }
    </script>
@endsection


