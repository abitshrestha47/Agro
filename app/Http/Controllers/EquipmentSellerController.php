<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\EquipmentSeller;
use Illuminate\Support\Facades\Session;

class EquipmentSellerController extends Controller
{
    //
    public function sellerPage(){
        $data = null;
        if(Session::has('userid')){
            $data = User::find(Session::get('userid'));
        }
        $user=User::find(Session::get('userid'));
        $equipmentDatas=$user->EquipmentSeller;

        return view('seller.seller',compact('data','equipmentDatas'));
      }

    public function postSellerPage(Request $req){
        $image=$req->file('image');
        $response=$image->store('dbimages','public');
        $equipment=new EquipmentSeller();
        $equipment->toolname=$req->toolname;
        $equipment->description=$req->description;
        $equipment->price=$req->price;
        $equipment->imgname=$response;
        $equipment->loan=$req->loan;
        $user=User::find(Session::get('userid'));
        $user->EquipmentSeller()->save($equipment);
        $equipment->save();
        return back();
    }
}
