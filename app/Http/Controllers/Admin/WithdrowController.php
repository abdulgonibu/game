<?php

namespace App\Http\Controllers\Admin;

use App\Models\Withdrow;
use Illuminate\Http\Request;
use Idemonbd\Notify\Facades\Notify;
use App\Http\Controllers\Controller;
use App\Models\Balance;

class WithdrowController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['withdrow'] = Withdrow::all();
        return view('admin.withdrow.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {
        Withdrow::where('id', $id)->update([
            'status' => $request->status,
        ]);

        $previous_balance = Balance::where('user_id', $request->user_id)->first()->balance;
        Balance::where('user_id', $request->user_id)->update([
            'balance' => $previous_balance - $request->amount,
        ]);

        Notify::success('Withdrow Amount Submitted', 'Success');
        return redirect(route('withdrow.index'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Withdrow::where('id', $id)->first()->delete();
        Notify::success('This Withdrow Deleted', 'Deleted');
        return back();
    }

}
