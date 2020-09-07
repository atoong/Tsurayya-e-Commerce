<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Userpayment;

class UserpaymentController extends Controller
{
    public function userpayment(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'transaction_total' => 'required',
            'bukti_transaksi' => 'required'
        ]);

        $data = $request->all();

        $insert = Userpayment::create($data);
      

        return ResponseFormatter::success($insert);

    }

    public function paymentuser(Request $request)
    {
        // return dd($request->all());
        // $this->validate($request,[
        //     'name' => 'required',
        //     'transaction_total' => 'required',
        //     'bukti_transaksi' => 'required'
        // ]);
        
        $name = time().'.'. explode('/', explode(':', substr($request->bukti_transaksi, 0, strpos($request->bukti_transaksi, ';')))[1])[1];
        \Image::make($request->bukti_transaksi)->save(public_path('img/buktipem/').$name);
        $request->merge(['bukti_transaksi' => $name]);
        $insert = Userpayment::create($request->all());
        return ['message' => 'Success'];
    }
}
