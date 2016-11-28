<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;
use App\Test as Test;


class TestController extends Controller {

    /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return Response
     */
    public function index() {
        $data = Test::all();
        foreach ($data as $da) {
            //   echo $da->name;
        }
        //return view('test');
//        $phone = Test::find(1)->order;
        //dd($phone);
//        foreach ($phone as $ph) {
//            $ph['test_id'];
//        }

        $comments = Test::find(1)->order;
dd($comments);
        foreach ($comments as $comment) {
            echo $comment['name'];
        }
    }

}
