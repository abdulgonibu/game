@extends('layouts.app')
@section('title', ' Profile')
@section('content')
    <div class="body">
        <div class="centerize">
            <div class="head">
                <div class="offer">
                    <marquee>👉 Welcome to WinCash30.Com ! এখানে মিনিমাম Deposit ৩০০ টাকা, সর্বোচ্চ ২৫,০০০ টাকা এবং ১০০০ টাকা Deposit করলে ১০০০ টাকা বোনাস। মিনিমাম Withdraw ৫০০ টাকা , সর্বোচ্চ ২৫,০০০ টাকা (৫ মিনিটে পেমেন্ট) 💖 👈</marquee>
                </div>
            </div>
            <div class="profile_wrapper" style="padding: 30px; color: #000;">
                <div class="table-responsive">
                    <table class="table m-0 table-actions-bar table-bordered">
                        @php
                            $user = Auth::user();
                        @endphp
                        <tr>
                            <th>Full Name: </th>
                            <td>{{ $user->name }}</td>
                        </tr>
                        <tr>
                            <th>User Name:</th>
                            <h5><td>{{ $user->username }}</td></h5>
                        </tr>
                        <tr>
                            <th>Email:</th>
                            <h5><td>{{ $user->email }}</td></h5>
                        </tr>
                        <tr>
                            <th>Phone:</th>
                            <h5><td>{{ $user->phone }}</td></h5>
                        </tr>
                        <tr>
                            <th>Balance:</th>
                            <h5><td>0.00 TK</td></h5>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection






