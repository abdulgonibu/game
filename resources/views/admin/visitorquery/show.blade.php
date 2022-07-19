@extends('admin.layouts.app')
@section('title', $reserve_info->reserv_name)
@section('content')

 <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <h4 class="page-title float-left">Reservation Information</h4>
                    <ol class="breadcrumb float-right">
                        <li class="breadcrumb-item"><a href="">Admin</a></li>
                        <li class="breadcrumb-item"><a href="">{{ $reserve_info->reserv_name }}</a></li>
                    </ol>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
        <!-- end row -->
        <div class="row">
            <div class="col-md-12">
                <div class="card-box">
                    <h4 class="m-t-0 header-title pb-3"><b>{{ $reserve_info->reserv_name }}</b></h4>
                    <div class="table-responsive">
                        <table class="table m-0 table-actions-bar">
                            <tr>
                                <th>Reserver Name</th>
                                <td class="h6">{{ $reserve_info->reserv_name }}</td>
                            </tr>
                            <tr>
                                <th>Reserver Phone</th>
                                <td class="h6">{{ $reserve_info->phone }}</td>
                            </tr>
                            <tr>
                                <th>Reserver Email</th>
                                <td class="h6">{{ $reserve_info->email }}</td>
                            </tr>
                            <tr>
                                <th>Reserved Table</th>
                                <td class="h6">{{ $reserve_info->table }}</td>
                            </tr>
                            <tr>
                                <th>Reserved Date </th>
                                <td class="h6">{{ $reserve_info->date }}</td>
                            </tr>
                            <tr>
                                <th>Reserved Time </th>
                                <td class="h6">{{ $reserve_info->reserv_time }}</td>
                            </tr>
                            <tr>
                                <th>Indoor Reservation </th>
                                <td class="h6">{{ $reserve_info->reserv_persons }}</td>
                            </tr>
                            <tr>
                                <th>Reserver NID Number </th>
                                <td class="h6">{{ $reserve_info->nid_number }}</td>
                            </tr>
                            <tr>
                                <th>Place </th>
                                <td class="h6">{{ $reserve_info->place }}</td>
                            </tr>
                            <tr>
                                <th>Reserved Placed </th>
                                <td class="h6">{{ $reserve_info->created_at->diffForHumans() }}</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>

        </div>

    </div>
@endsection

