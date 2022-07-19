@extends('layouts.app')
@section('title', ' Withdrow Balance')
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
                    <form action="{{ route('withdrow.submit') }}" method="POST">
                        @csrf
                        <center>
                            <a href="{{ route('index') }}">
                                <img width="180" src="{{ asset('FILE/img/WinTk71.com.png') }}" alt="">
                            </a>
                        </center>
                        <div class="flex_wp">
                        <div class="box" style="width: 100%;">
                            <p>Amount</p>
                            <span style="display: flex;">
                                <input name="amount_withdrow" type="number" id="amount_withdrow" onchange="change_retrun()" value="{{ old('amount_withdrow') }}" required>
                            </span>
                        </div>
                        </div>
                        <div class="flex_wp">
                        <div class="box" style="width: 100%;">
                            <p>Method</p>
                            <span style="display: flex;">
                                <select name="payment_method" id="methodofdeposit" required="" onchange="deposit_method()" style="margin-top: 10px;width: 100%;height: 40px;padding-left: 16px;padding-right: 16px;font-size: 15px;outline: none;border: 1px solid #ced4da;font-family: Inter, &quot;Open Sans&quot;, sans-serif !important;border-radius: 4px;background-color: #FFFFFF;cursor: pointer;" required>
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
                            <p>Account Type</p>
                            <span style="display: flex;">
                                <select name="account_type" id="type_account" required="" style="margin-top: 10px;width: 100%;height: 40px;padding-left: 16px;padding-right: 16px;font-size: 15px;outline: none;border: 1px solid #ced4da;font-family: Inter, &quot;Open Sans&quot;, sans-serif !important;border-radius: 4px;background-color: #FFFFFF;cursor: pointer;" required>
                                    <option value="">Select Type</option>
                                    <option value="Agent">Agent</option>
                                    <option value="Personal">Personal</option>
                                </select>
                            </span>
                        </div>
                        </div>
                        <div class="flex_wp">
                        <div class="box" style="width: 100%;">
                            <p>Account Number</p>
                            <span style="display: flex;">
                            <input name="account_number" type="text" id="number_deposit" value="{{ old('account_number') }}" required>
                            </span>
                        </div>
                        </div>
                        <div class="flex">
                            <button type="submit" id="place_deposit" style="margin-left: 20px;">Withdrawal</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <br>
    <br>
    <br>
    <br>
    <br>
@endsection






