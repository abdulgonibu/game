@extends('layouts.app')
@section('title', 'Ludo')
@section('content')
    <body style="background-color: #387D71;" data-new-gr-c-s-check-loaded="14.1068.0" data-gr-ext-installed="">
        <div class="body_wp" style="width: 100%;display: flex;justify-content: center;margin-top: 170px;">
            <div class="centerisssze_game">
                <div class="head">Ludo</div>
                <center><img src="{{ asset('FILE/IMAGE/ludo.png') }}" alt="" id="result_one"></center>
                <center><img src="{{ asset('FILE/IMAGE/dice.gif') }}" alt="" id="result_two" style="display:none"></center>
                <center><img src="{{ asset('FILE/IMAGE/result/ludo/win/1.png') }}" alt="" id="win1" style="display:none"></center>
                <center><img src="{{ asset('FILE/IMAGE/result/ludo/win/2.png') }}" alt="" id="win2" style="display:none"></center>
                <center><img src="{{ asset('FILE/IMAGE/result/ludo/win/3.png') }}" alt="" id="win3" style="display:none"></center>
                <center><img src="{{ asset('FILE/IMAGE/result/ludo/win/4.png') }}" alt="" id="win4" style="display:none"></center>
                <center><img src="{{ asset('FILE/IMAGE/result/ludo/win/5.png') }}" alt="" id="win5" style="display:none"></center>
                <center><img src="{{ asset('FILE/IMAGE/result/ludo/win/6.png') }}" alt="" id="win6" style="display:none"></center>
                <center><img src="{{ asset('FILE/IMAGE/result/ludo/loss/1.png') }}" alt="" id="loss1" style="display:none"></center>
                <center><img src="{{ asset('FILE/IMAGE/result/ludo/loss/2.png') }}" alt="" id="loss2" style="display:none"></center>
                <center><img src="{{ asset('FILE/IMAGE/result/ludo/loss/3.png') }}" alt="" id="loss3" style="display:none"></center>
                <center><img src="{{ asset('FILE/IMAGE/result/ludo/loss/4.png') }}" alt="" id="loss4" style="display:none"></center>
                <center><img src="{{ asset('FILE/IMAGE/result/ludo/loss/5.png') }}" alt="" id="loss5" style="display:none"></center>
                <center><img src="{{ asset('FILE/IMAGE/result/ludo/loss/6.png') }}" alt="" id="loss6" style="display:none"></center>
                <div class="all_controls">
                    <br>
                    <div class="result">
                    <span id="result_text">Balance insufficient</span>
                    </div>
                    <p id="ti">All Number</p>
                    <div class="flex">
                    <div class="ssbtn" id="one" onclick="choose_btn_one()">
                        1
                    </div>
                    <div class="ssbtn" id="two" onclick="choose_btn_two()">
                        2
                    </div>
                    </div>
                    <div class="flex">
                    <div class="ssbtn" id="three" onclick="choose_btn_three()">
                        3
                    </div>
                    <div class="ssbtn" id="four" onclick="choose_btn_four()">
                        4
                    </div>
                    </div>
                    <div class="flex">
                    <div class="ssbtn" id="five" onclick="choose_btn_five()">
                        5
                    </div>
                    <div class="ssbtn" id="six" onclick="choose_btn_six()">
                        6
                    </div>
                    </div>
                    <div class="flex">
                    <input type="number" placeholder="Amount" onchange="change_retrun()" id="bet_amount">
                    </div>
                    <p id="sub">Possible win (2): <span id="bet_retrun"></span></p>
                    <input type="hidden" id="select_item_id">
                    <input type="hidden" id="bet_value" value="2">
                    <input type="hidden" id="utyityiy" value="">
                    <div class="flex">
                    <button id="play_game">Play</button>
                    </div>
                </div>
            </div>
        </div>
        <script>
            function choose_btn_one() {
                var one = document.querySelector("#one");
                var two = document.querySelector("#two");
                var three = document.querySelector("#three");
                var four = document.querySelector("#four");
                var five = document.querySelector("#five");
                var six = document.querySelector("#six");
            
                var select_item_id = document.querySelector("#select_item_id");
            
                one.style.backgroundColor = "#d9293f";
                two.style.backgroundColor = "#ffc107";
                three.style.backgroundColor = "#ffc107";
                four.style.backgroundColor = "#ffc107";
                five.style.backgroundColor = "#ffc107";
                six.style.backgroundColor = "#ffc107";
            
                select_item_id.value = '1';
            }
            
            
            function choose_btn_two() {
                var one = document.querySelector("#one");
                var two = document.querySelector("#two");
                var three = document.querySelector("#three");
                var four = document.querySelector("#four");
                var five = document.querySelector("#five");
                var six = document.querySelector("#six");
            
                var select_item_id = document.querySelector("#select_item_id");
            
                one.style.backgroundColor = "#ffc107";
                two.style.backgroundColor = "#d9293f";
                three.style.backgroundColor = "#ffc107";
                four.style.backgroundColor = "#ffc107";
                five.style.backgroundColor = "#ffc107";
                six.style.backgroundColor = "#ffc107";
            
                select_item_id.value = '2';
            }
            
            
            function choose_btn_three() {
                var one = document.querySelector("#one");
                var two = document.querySelector("#two");
                var three = document.querySelector("#three");
                var four = document.querySelector("#four");
                var five = document.querySelector("#five");
                var six = document.querySelector("#six");
            
                var select_item_id = document.querySelector("#select_item_id");
            
                one.style.backgroundColor = "#ffc107";
                two.style.backgroundColor = "#ffc107";
                three.style.backgroundColor = "#d9293f";
                four.style.backgroundColor = "#ffc107";
                five.style.backgroundColor = "#ffc107";
                six.style.backgroundColor = "#ffc107";
            
                select_item_id.value = '3';
            }
            
            
            function choose_btn_four() {
                var one = document.querySelector("#one");
                var two = document.querySelector("#two");
                var three = document.querySelector("#three");
                var four = document.querySelector("#four");
                var five = document.querySelector("#five");
                var six = document.querySelector("#six");
            
                var select_item_id = document.querySelector("#select_item_id");
            
                one.style.backgroundColor = "#ffc107";
                two.style.backgroundColor = "#ffc107";
                three.style.backgroundColor = "#ffc107";
                four.style.backgroundColor = "#d9293f";
                five.style.backgroundColor = "#ffc107";
                six.style.backgroundColor = "#ffc107";
            
                select_item_id.value = '4';
            }
            
            
            function choose_btn_five() {
                var one = document.querySelector("#one");
                var two = document.querySelector("#two");
                var three = document.querySelector("#three");
                var four = document.querySelector("#four");
                var five = document.querySelector("#five");
                var six = document.querySelector("#six");
            
                var select_item_id = document.querySelector("#select_item_id");
            
                one.style.backgroundColor = "#ffc107";
                two.style.backgroundColor = "#ffc107";
                three.style.backgroundColor = "#ffc107";
                four.style.backgroundColor = "#ffc107";
                five.style.backgroundColor = "#d9293f";
                six.style.backgroundColor = "#ffc107";
            
                select_item_id.value = '5';
            }
            
            
            function choose_btn_six() {
                var one = document.querySelector("#one");
                var two = document.querySelector("#two");
                var three = document.querySelector("#three");
                var four = document.querySelector("#four");
                var five = document.querySelector("#five");
                var six = document.querySelector("#six");
            
                var select_item_id = document.querySelector("#select_item_id");
            
                one.style.backgroundColor = "#ffc107";
                two.style.backgroundColor = "#ffc107";
                three.style.backgroundColor = "#ffc107";
                four.style.backgroundColor = "#ffc107";
                five.style.backgroundColor = "#ffc107";
                six.style.backgroundColor = "#d9293f";
            
                select_item_id.value = '6';
            }
            
            
            
            
            
            
            
            function change_retrun() {
                var bet_retrun = document.querySelector('#bet_retrun');
                var bet_value = document.querySelector('#bet_value').value;
                var bet_amount = document.querySelector('#bet_amount').value;
            
                $('#utyityiy').val(bet_amount * bet_value);
            
                if (bet_amount < 10) {
                    alert("Minimum Bet Is 10Taka");
                } else {
            
                    bet_retrun.innerHTML = bet_amount * bet_value;
            
                }
            }
            
            $(document).ready(function() {
                $('#play_game').click(function(e) {
                    e.preventDefault();
                    var bet_amount = $('#bet_amount').val();
                    var bet_retrun = $('#utyityiy').val();
                    var select_item_id = $('#select_item_id').val();
            
                    document.querySelector("#win1").style.display = 'none';
                    document.querySelector("#win2").style.display = 'none';
                    document.querySelector("#win3").style.display = 'none';
                    document.querySelector("#win4").style.display = 'none';
                    document.querySelector("#win5").style.display = 'none';
                    document.querySelector("#win6").style.display = 'none';
            
                    document.querySelector("#loss1").style.display = 'none';
                    document.querySelector("#loss2").style.display = 'none';
                    document.querySelector("#loss3").style.display = 'none';
                    document.querySelector("#loss4").style.display = 'none';
                    document.querySelector("#loss5").style.display = 'none';
                    document.querySelector("#loss6").style.display = 'none';
            
            
                    if (bet_amount < 10) {
                        alert("Minimum Bet Is 10Taka");
                    } else {
                        document.querySelector("#result_two").style.display = 'block';
                        document.querySelector("#result_one").style.display = 'none';
            
                        $.ajax({
                            type: "POST",
                            url: "FILE/ACTION/bet_ludo.php",
                            data: {
                                "bet_amount": bet_amount,
                                "bet_retrun": bet_retrun,
                                "select_item_id": select_item_id
                            },
                            success: function(data) {
                                setTimeout(function() {
                                    if (data == "win1") {
                                        document.querySelector("#result_two").style.display = 'none';
                                        document.querySelector("#win1").style.display = 'block';
                                    } else {
                                        if (data == "win2") {
                                            document.querySelector("#result_two").style.display = 'none';
                                            document.querySelector("#win2").style.display = 'block';
                                        } else {
                                            if (data == "win3") {
                                                document.querySelector("#result_two").style.display = 'none';
                                                document.querySelector("#win3").style.display = 'block';
                                            } else {
                                                if (data == "win4") {
                                                    document.querySelector("#result_two").style.display = 'none';
                                                    document.querySelector("#win4").style.display = 'block';
                                                } else {
                                                    if (data == "win5") {
                                                        document.querySelector("#result_two").style.display = 'none';
                                                        document.querySelector("#win5").style.display = 'block';
                                                    } else {
                                                        if (data == "win6") {
                                                            document.querySelector("#result_two").style.display = 'none';
                                                            document.querySelector("#win6").style.display = 'block';
                                                        }
                                                    }
                                                }
                                            }
                                        }
                                    }
            
                                    if (data == "loss1") {
                                        document.querySelector("#result_two").style.display = 'none';
                                        document.querySelector("#loss1").style.display = 'block';
                                    } else {
                                        if (data == "loss2") {
                                            document.querySelector("#result_two").style.display = 'none';
                                            document.querySelector("#loss2").style.display = 'block';
                                        } else {
                                            if (data == "loss3") {
                                                document.querySelector("#result_two").style.display = 'none';
                                                document.querySelector("#loss3").style.display = 'block';
                                            } else {
                                                if (data == "loss4") {
                                                    document.querySelector("#result_two").style.display = 'none';
                                                    document.querySelector("#loss4").style.display = 'block';
                                                } else {
                                                    if (data == "loss5") {
                                                        document.querySelector("#result_two").style.display = 'none';
                                                        document.querySelector("#loss5").style.display = 'block';
                                                    } else {
                                                        if (data == "loss6") {
                                                            document.querySelector("#result_two").style.display = 'none';
                                                            document.querySelector("#loss6").style.display = 'block';
                                                        }
                                                    }
                                                }
                                            }
                                        }
                                    }
            
            
                                    if (data == "Minimum Deposit Balance Need 10 Taka") {
                                        document.querySelector("#result_two").style.display = 'none';
                                        document.querySelector("#result_one").style.display = 'block';
            
                                        document.querySelector(".result").style.display = "flex";
                                        $('#result_text').html('Minimum Deposit Balance Need 10 Taka');
                                    } else {
                                        if (data == "Minimum Bet 10 Taka") {
                                            document.querySelector("#result_two").style.display = 'none';
                                            document.querySelector("#result_one").style.display = 'block';
            
                                            document.querySelector(".result").style.display = "flex";
                                            $('#result_text').html('Minimum Bet 10 Taka');
                                        } else {
                                            if (data == "Select Number") {
                                                document.querySelector("#result_two").style.display = 'none';
                                                document.querySelector("#result_one").style.display = 'block';
            
                                                document.querySelector(".result").style.display = "flex";
                                                $('#result_text').html('Select Number');
                                            } else {
                                                if (data == "Login To Your Account") {
                                                    document.querySelector("#result_two").style.display = 'none';
                                                    document.querySelector("#result_one").style.display = 'block';
            
                                                    document.querySelector(".result").style.display = "flex";
                                                    $('#result_text').html('Login To Your Account');
                                                } else {
                                                    if (data == "insufficient balance") {
                                                        document.querySelector("#result_two").style.display = 'none';
                                                        document.querySelector("#result_one").style.display = 'block';
            
                                                        document.querySelector(".result").style.display = "flex";
                                                        $('#result_text').html('Insufficient balance');
                                                    }
                                                }
                                            }
                                        }
                                    }
            
            
                                }, 5000);
                            }
                        });
            
                    }
            
                });
            });
        </script>
        <iframe src="about:blank" style="display: none;"></iframe>
        </body>
@endsection