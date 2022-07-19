@extends('layouts.app')
@section('title', ' Deposit Balance')
@section('content')
    <div class="body">
        <div class="centerize">
            <div class="head">
                <div class="offer">
                    <marquee>👉 Welcome to WinCash30.Com ! এখানে মিনিমাম Deposit ৩০০ টাকা, সর্বোচ্চ ২৫,০০০ টাকা এবং ১০০০ টাকা Deposit করলে ১০০০ টাকা বোনাস। মিনিমাম Withdraw ৫০০ টাকা , সর্বোচ্চ ২৫,০০০ টাকা (৫ মিনিটে পেমেন্ট) 💖 👈</marquee>
                </div>
            </div>
            <div class="bet_bd">
                <div class="wrapper_bdt" style="background-color: #FFFFFF;">
                    <form action="{{ route('deposit.submit') }}" method="POST">
                        @csrf
                        <center>
                            <a href="{{ route('index') }}">
                                <img width="180" src="{{ asset('FILE/img/WinTk71.com.png') }}" alt="">
                            </a>
                        </center>
                        <div class="flex_wp">
                        <div class="box" style="width: 100%;">
                            <p>Select Payment Method</p>
                            <span style="display: flex;">
                                <select name="payment_method" id="methodofdeposit" required="" onchange="deposit_method()" style="margin-top: 10px;width: 100%;height: 40px;padding-left: 16px;padding-right: 16px;font-size: 15px;outline: none;border: 1px solid #ced4da;font-family: Inter, &quot;Open Sans&quot;, sans-serif !important;border-radius: 4px;background-color: #FFFFFF;cursor: pointer;">
                                    <option value="">Select Method</option>
                                    <option value="Bkash">Bkash</option>
                                    <option value="Rocket">Rocket</option>
                                    <option value="Nagad">Nagad</option>
                                </select>
                            </span>
                        </div>
                        </div>
                        <div class="flex_wp">
                        <div class="box" style="width: 100%;">
                            <p>Our Account Number (Send Money)</p>
                            <span style="display: flex;">
                            <input name="marchent_number" type="number" value="01234567891" id="number_admin" disabled="" required="">
                            </span>
                        </div>
                        </div>
                        <div class="flex_wp">
                        <div class="box" style="width: 100%;">
                            <p>Account Number</p>
                            <span style="display: flex;">
                            <input type="number" name="account_number" id="number_deposit" placeholder="0177777777777" required="">
                            </span>
                        </div>
                        </div>
                        <div class="flex_wp">
                        <div class="box">
                            <p>Amount</p>
                            <span style="display: flex;">
                            <input name="amount" type="number" id="amount_deposit" onchange="change_retrun()" placeholder="300" required="">
                            </span>
                        </div>
                        <div class="box">
                            <p>Transaction Id</p>
                            <span style="display: flex;">
                            <input name="transaction_id" type="text" id="transaction_deposit" placeholder="9FC4QTTGTF" required="">
                            </span>
                        </div>
                        </div>
                        <div class="flex">
                        <button type="submit" id="place_deposit" style="margin-left: 20px;">Deposit</button>
                        </div>
                    </form>
                </div>
            </div>
            <br>
            <br>
            <br>
            <br>
        </div>
    </div>
@endsection






