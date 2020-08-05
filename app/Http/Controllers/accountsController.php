<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Accounts;

class accountsController extends Controller
{

    function index()
    {

        $acc_data =Accounts::all()->toArray();

        
         
        return view('admin.all-accounts',compact('acc_data'));

    }

    function customer(Request $request){

        $cus=new Accounts();
        
        $cus->acc_name=$request->aname;
        $cus->acc_address=$request->aaddress;
        $cus->acc_contact1=$request->acontact1;
        $cus->acc_contact2=$request->acontact2;
        $cus->acc_designation=$request->adesignation;
        $cus->acc_area=$request->aarea;
        $cus->acc_type=$request->atype;
        $cus->acc_remarks=$request->aremarks;
       

        $cus->save();

        return view('admin.accounts');

    }

    function delete($id)
{

    $cus= Accounts::find($id);
    $cus->delete();
    $cus_data =Accounts::all()->toArray();
     
    return redirect()->back()->with('$cus_data',$cus_data)->with('success', 'Recod deleted');


}
}
