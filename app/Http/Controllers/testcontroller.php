<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class testcontroller extends Controller
{
    //



    public function search(){
        $val=request()->validate([
            'id'=> 'required|numeric|min:1'
        ]);


$post=Post::find($val['id']);


if($post=Post::find($val['id'])){
    // dd($post->id);
return redirect()->route('show.test')->with('sec',$post->comment);

}


else{

    return redirect()->route('show.test')->with('sec','تم');};


    //  dd(request('id'));

    }
}
