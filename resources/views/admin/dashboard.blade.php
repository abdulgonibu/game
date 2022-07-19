@extends('admin.layouts.app')
@section('title','Admin panel')
@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <h4 class="page-title float-left">Dashboard</h4>

                    <ol class="breadcrumb float-right">
                        <li class="breadcrumb-item"><a href="">Dashboard</a></li>
                    </ol>

                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6 text-center">
                <div class="card-box widget-box-two widget-two-custom">
                    <i class="mdi mdi-account-multiple widget-two-icon"></i>
                    <div class="wigdet-two-content">
                        <p class="m-0 text-uppercase font-bold font-secondary text-overflow" title="Statistics">TOTAL USERS</p>
                        <h2 class="font-600"><span></span> <span data-plugin="counterup"> {{ $users }} </span></h2>
                        <p style="opacity: 0;" class="m-0">10 jul 2022 - @php echo date("d M Y") @endphp</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 text-center">
                <div class="card-box widget-box-two widget-two-custom">
                    <i class="mdi mdi-currency-usd widget-two-icon"></i>
                    <div class="wigdet-two-content">
                        <p class="m-0 text-uppercase font-bold font-secondary text-overflow" title="Statistics">TOTAL USER BALANCE</p>
                        <h2 class="font-600"><span></span> <span data-plugin="counterup"> 65841 </span> ৳</h2>
                        <p style="opacity: 0;" class="m-0">10 jul 2022 - @php echo date("d M Y") @endphp</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 text-center">
                <div class="card-box widget-box-two widget-two-custom">
                    <i class="mdi mdi-account-card-details widget-two-icon"></i>
                    <div class="wigdet-two-content">
                        <p class="m-0 text-uppercase font-bold font-secondary text-overflow" title="Statistics">Pending Deposit</p>
                        <h2 class="font-600"><span></span> <span data-plugin="counterup"> -173 </span></h2>
                        <p style="opacity: 0;" class="m-0">Jan - Apr 2017</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 text-center">
                <div class="card-box widget-box-two widget-two-custom">
                    <i class="mdi mdi-currency-usd widget-two-icon"></i>
                    <div class="wigdet-two-content">
                        <p class="m-0 text-uppercase font-bold font-secondary text-overflow" title="Statistics">TOTAL DEPOSIT BALANCE</p>
                        <h2 class="font-600"><span></span> <span data-plugin="counterup"> 43502 </span> ৳</h2>
                        <p style="opacity: 0;" class="m-0">10 jul 2022 - @php echo date("d M Y") @endphp</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 text-center">
                <div class="card-box widget-box-two widget-two-custom">
                    <i class="mdi mdi-currency-usd widget-two-icon"></i>
                    <div class="wigdet-two-content">
                        <p class="m-0 text-uppercase font-bold font-secondary text-overflow" title="Statistics">TOTAL COST BALANCE</p>
                        <h2 class="font-600"><span></span> <span data-plugin="counterup"> 0.00 </span> ৳</h2>
                        <p style="opacity: 0;" class="m-0">10 jul 2022 - @php echo date("d M Y") @endphp</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 text-center">
                <div class="card-box widget-box-two widget-two-custom">
                    <i class="mdi mdi-currency-usd widget-two-icon"></i>
                    <div class="wigdet-two-content">
                        <p class="m-0 text-uppercase font-bold font-secondary text-overflow" title="Statistics">MY PROFIT BALANCE</p>
                        <h2 class="font-600"><span></span> <span data-plugin="counterup"> 3453.56 </span> ৳</h2>
                        <p style="opacity: 0;" class="m-0">10 jul 2022 - @php echo date("d M Y") @endphp</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 text-center">
                <div class="card-box widget-box-two widget-two-custom">
                    <i class="mdi mdi-account-card-details widget-two-icon"></i>
                    <div class="wigdet-two-content">
                        <p class="m-0 text-uppercase font-bold font-secondary text-overflow" title="Statistics">TOTAL WITHDRAW</p>
                        <h2 class="font-600"><span></span> <span data-plugin="counterup"> 24523 </span></h2>
                        <p style="opacity: 0;" class="m-0">10 jul 2022 - @php echo date("d M Y") @endphp</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 text-center">
                <div class="card-box widget-box-two widget-two-custom">
                    <i class="mdi mdi-account-card-details widget-two-icon"></i>
                    <div class="wigdet-two-content">
                        <p class="m-0 text-uppercase font-bold font-secondary text-overflow" title="Statistics">TOTAL WITHDRAW BALANCE</p>
                        <h2 class="font-600"><span></span> <span data-plugin="counterup"> 24523 </span></h2>
                        <p style="opacity: 0;" class="m-0">10 jul 2022 - @php echo date("d M Y") @endphp</p>
                    </div>
                </div>
            </div>
            
        </div>
        <!-- end row -->

    </div>



@endsection
