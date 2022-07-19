@extends('admin.layouts.app')
@section('title',' Deposit List')
@section('content')

 <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <h4 class="page-title float-left">Deposit List </h4>
                    <ol class="breadcrumb float-right">
                        <li class="breadcrumb-item"><a href="">Admin</a></li>
                        <li class="breadcrumb-item"><a href="">Deposit List</a></li>
                    </ol>

                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
        <!-- end row -->

        <div class="row">
            <div class="col-md-12">
                <div class="card-box">
                    <h4 class="m-t-0 header-title"><b>Deposit List</b></h4>

                    <div class="table-responsive">
                        <table class="table table-hover m-0 table-actions-bar table-bordered">

                            <thead>
                            <tr>
                                <th>SI NO.</th>
                                <th>Deposit Holder</th>
                                <th>Payment Method</th>
                                <th>Account Number</th>
                                <th>Amount</th>
                                <th>Transaction ID</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach ($deposit as $item)
                                    <tr>
                                        <td>
                                            <h5>{{ $loop->index + 1 }}</h5>
                                        </td>

                                        <td>
                                            <h5>{{ $item->user->name }}</h5>
                                        </td>

                                        <td>
                                            <h5>{{ $item->payment_method }}</h5>
                                        </td>

                                        <td>
                                            <h5>{{ $item->account_number }}</h5>
                                        </td>

                                        <td>
                                            <h5>{{ $item->amount }} <strong style="font-size: 24px;">৳</strong></h5>
                                        </td>

                                        <td>
                                            <h5>{{ $item->transaction_id }}</h5>
                                        </td>

                                        <td>
                                            <h5 class="p-2 badge @php if ($item->status == 1) { echo "badge-success"; }else { echo "badge-danger"; }  @endphp">
                                                @php
                                                if ($item->status == 1) { echo "Published"; }else { echo "Pending"; }
                                                @endphp
                                            </h5>
                                            <form method="GET" action="{{ route('deposit.edit', $item->id) }}">
                                                @csrf
                                                @method('PATCH')
                                                <input type="hidden" value="1" name="status">
                                                <input type="hidden" value="{{ $item->user->id }}" name="user_id">
                                                <input type="hidden" value="{{ $item->amount }}" name="amount">
                                                @php
                                                    if ($item->status == 1) { echo ""; }else { echo '<button class="btn btn-outline-success" type="submit">Payment Accepted</button>'; }
                                                @endphp
                                            </form>
                                        </td>

                                        <form method="POST" action="{{ route('deposit.destroy', $item->id) }}">
                                            @csrf
                                            @method('DELETE')
                                            <td>
                                                <button onclick="blogDelete()" style="border: none; background:none; cursor:pointer; color: red;" type="submit" name="submit" class="table-action-btn"><i class="mdi mdi-close"></i></button>
                                            </td>
                                        </form>
                                    </tr>
                                    @empty($item)
                                        <div class="alert alert-info">
                                            Nothing to show any Deposit !
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
            alert('Are you shure ? You want to delete this Deposit !')
        }
    </script>
@endsection
