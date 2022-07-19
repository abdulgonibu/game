@extends('layouts.app')
@section('title', ' Balance Statement')
@section('content')
    <div class="body">
        <div class="centerize">
            <div class="head">
                <div class="offer">
                    <marquee>👉 Welcome to WinCash30.Com ! এখানে মিনিমাম Deposit ৩০০ টাকা, সর্বোচ্চ ২৫,০০০ টাকা এবং ১০০০ টাকা Deposit করলে ১০০০ টাকা বোনাস। মিনিমাম Withdraw ৫০০ টাকা , সর্বোচ্চ ২৫,০০০ টাকা (৫ মিনিটে পেমেন্ট) 💖 👈</marquee>
                </div>
            </div>
            <br>
            <div class="statement">
                <div class="head">
                    Statement Deposit
                </div>
                <div class="p-4">
                    <table class="table table-bordered">
                        <thead>
                            <tr class="text-white" style="border: 1px solid #fffff;">
                                <th scope="col">Amount</th>
                                <th scope="col">Method </th>
                                <th scope="col">Method Number</th>
                                <th scope="col">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($deposits as $item)
                                <tr class="text-white">
                                    <td>{{ $item->amount }} Tk</td>
                                    <td>{{ $item->payment_method }}</td>
                                    <td>{{ $item->account_number }}</td>
                                    <td>
                                        <h5 class="p-2 badge @php if ($item->status == 1) { echo "btn btn-success text-white"; }else { echo "btn btn-danger text-white"; }  @endphp">
                                            @php
                                                if ($item->status == 1) { echo "Accepted Balance"; }else { echo "Pending"; }
                                            @endphp
                                        </h5>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <br>
            </div>
            <div class="statement">
                <div class="head">
                    Statement Withdraw
                </div>
                <div class="p-4">
                    <table class="table table-bordered">
                        <thead>
                            <tr class="text-white" style="border: 1px solid #fffff;">
                                <th scope="col">Amount</th>
                                <th scope="col">Method </th>
                                <th scope="col">Method Number</th>
                                <th scope="col">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($withdrow as $item)
                                <tr class="text-white">
                                    <td>{{ $item->amount_withdrow }} TK</td>
                                    <td>{{ $item->payment_method }}</td>
                                    <td>{{ $item->account_number }}</td>
                                    <td>
                                        <h5 class="p-2 badge @php if ($item->status == 1) { echo "btn btn-success text-white"; }else { echo "btn btn-danger text-white"; }  @endphp">
                                            @php
                                                if ($item->status == 1) { echo "Accepted Balance"; }else { echo "Pending"; }
                                            @endphp
                                        </h5>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <br>
            </div>
            <div class="statement">
                <div class="head">
                    Statement Games
                </div>
                <div class="p-4">
                    <table class="table table-bordered">
                        <thead>
                            <tr class="text-white" style="border: 1px solid #fffff;">
                                <th scope="col">Amount</th>
                                <th scope="col">Method </th>
                                <th scope="col">Method Number</th>
                                <th scope="col">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            {{-- <tr class="text-white">
                                <td>4200 Tk</td>
                                <td>Bkash </td>
                                <td>01235465465</td>
                                <td>
                                    Delete
                                </td>
                            </tr> --}}
                        </tbody>
                    </table>
                </div>
                <br>
            </div>
        </div>
    </div>
    <br>
    <br>
@endsection






