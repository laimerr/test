<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use DB;

class EmailController extends Controller
{
      public function create()
    {
        return view('welcome');
    }

    public function sendEmail(Request $request)
    {
        $request->validate([
          'email' => 'required|email',
          'name' => 'required',
          'content' => 'required',
        ]);

        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'content' => $request->content
        ];


        Mail::send([], $data, function($message) use ($data) {
          $message->to('qmrkentq@gmail.com', 'Roman')->from($data['email'], $data['name'])->replyTo($data['email'], $data['name'])->setBody($data['content']);
        });

        DB::insert('insert into message (Text, Sender, Name) values (?,?,?)', [$data['content'], $data['email'], $data['name']]);
        return back()->with(['message' => 'Email успешно отправлен!']);
    }
}
