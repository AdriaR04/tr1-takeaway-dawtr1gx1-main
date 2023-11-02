<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\MailNotify;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function index()
    {
        $data = [
            'subject'=>'FASTBITES Mail',
            'body'=> 'Hello this is my email delibery!',
        ];
        try
        {
            MailNotify::to('a16adrrodgon@inspedralbes.cat')->send(new MailNotify($data));
            return response()->json(['Great check your mail box']);
        } catch(\Exception $th) 
        {
            return response()->json(['Sorry something went wrong!']);
        }
    }
}
