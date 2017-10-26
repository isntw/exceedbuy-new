<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\WarrantyRequest;

class WarrantyController extends Controller {

    public function index() {
        return view('web.warranty');
    }

    public function store(WarrantyRequest $request) {

        \Mail::send('email.warranty', array(
            'name' => $request->post('lname') . " " . $request->post('fname'),
            'email' => $request->post('email'),
            'date' => $request->post('date'),
            'body' => $request->post('body')
                ), function($message) {
            $message->from('contact@exceedbuy.com');
            $message->to('moneaiustin@gmail.com', 'Admin')->subject('Warranty registration from an Exceedbuy user.');
        });

        \Toastr::success('Success', 'Succefully registered.');
        return redirect()->back();
    }

}
