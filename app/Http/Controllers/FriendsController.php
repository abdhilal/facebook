<?php

namespace App\Http\Controllers;

use App\Models\friend;
use App\Models\User;
use App\Models\friends;

use Illuminate\Support\Facades\Auth;



use Illuminate\Http\Request;

class FriendsController extends Controller
{
public function friends($id){

 $friends=User::find($id);

 return view('profile.profiles',compact('friends'));
}

public function addfriend($friend_id){

$isfrien=friend::where('user_id',Auth::user()->id)->where('friend_id',$friend_id)->first();
if($isfrien){
    return 'الطلب مرسل مسبقا';
}

friend::create([
    'user_id' => Auth::user()->id,
    'friend_id' => $friend_id,
    'status' => 'pending',
]);

return "تم ارسال الطلب";


   }

   public function accspted($friend_id){

$friendship=friend::where('user_id',$friend_id)->where('friend_id',Auth::user()->id)
->where('status', 'pending')
->first();

if($friendship){

    $friendship->update(['status' => 'accepted']);
    return 'تم قبول الطلب';             
}


   }

}
