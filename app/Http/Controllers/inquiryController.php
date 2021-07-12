<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class inquiryController extends Controller
{
    public function index(Request $request)
    {
        $param = [
            'name' => $request->name,
            'mailaddress' => $request->mailaddress,
        ];
        DB::insert('insert into inquiryforms (name, mailaddress) values (:name, :mailaddress)', $param);
        return view('/thanks');
    } //
}
