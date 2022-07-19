<?php

namespace App\Http\Controllers\User;

use App\Models\Blog;
use App\Models\User;
use App\Models\Setting;
use App\Models\SaveLater;
use App\Models\Subscribe;
use Illuminate\Http\Request;
use Idemonbd\Notify\Facades\Notify;
use App\Http\Controllers\Controller;
use App\Models\Balance;
use App\Models\Deposit;
use App\Models\Withdrow;
use Illuminate\Support\Facades\Auth;

class UserDashboardController extends Controller
{
    public function deposit()
    {
        return view('dashboard.pages.deposit');
    }

    public function deposit_submit(Request $request)
    {
        $diposit_checking = Setting::first()->deposit_minimum;
        $request->validate([
            'payment_method' => 'required',
            'amount' => 'required',
            'account_number' => 'required',
            'transaction_id' => 'required',
        ]);
        if ($diposit_checking > $request->amount) {
            Notify::error('Minimum deposit amount ' . $diposit_checking . ' tk', 'Error');
            return back();
        }
        Deposit::create($request->except('_token') + [
            'user_id' => Auth::user()->id,
            'status' => 2,
        ]);
        Notify::success('Deposit amount submitted, waiting for admin approval !', 'Success');
        return redirect(route('statement'));
    }

    public function withdrow()
    {
        return view('dashboard.pages.withdrow');
    }

    public function withdrow_submit(Request $request)
    {
        $withdrow_checking = Setting::first()->withdrow_minimum;
        $request->validate([
            'amount_withdrow' => 'required',
            'payment_method' => 'required',
            'account_type' => 'required',
            'account_number' => 'required',
        ]);
        if ($withdrow_checking > $request->amount_withdrow) {
            Notify::error('Minimum withdrow amount ' . $withdrow_checking . ' tk', 'Error');
            return back();
        }

        $balance_account = Balance::where('user_id', Auth::user()->id)->get()->count();
        if ($balance_account == 0) {
            Notify::error('Insufficient balance', 'Balance: 0');
            return back();
        }

        $balance_checking = Balance::where('user_id', Auth::user()->id)->first()->balance;
        if ($balance_checking < $request->amount_withdrow) {
            Notify::error('' . $withdrow_checking . ' Tk balance not availabe', 'Error');
            return back();
        }

        Withdrow::create($request->except('_token') + [
            'user_id' => Auth::user()->id,
            'status' => 2,
        ]);
        Notify::success('Withdrow amount request submitted, waiting for admin approval !', 'Success');
        return redirect(route('statement'));
    }

    public function statement()
    {
        $data['deposits'] = Deposit::where('user_id', Auth::user()->id)->latest()->limit(40)->get();
        $data['withdrow'] = Withdrow::where('user_id', Auth::user()->id)->latest()->limit(40)->get();
        return view('dashboard.pages.statement', $data);
    }

    public function logout()
    {
        Auth::logout();

        $notification = array(
            'message' => 'Logout!',
            'alert-type' => 'success'
        );

        return redirect()->route('login')->with($notification);
    }

}
