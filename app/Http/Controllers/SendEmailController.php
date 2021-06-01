<?php

namespace App\Http\Controllers;

use App\Models\SendEmail;
use App\Mail\EmailSent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class SendEmailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('mailForm');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Mail::to($request->email)->send(new EmailSent($request));
        return view('success');
        // Mail::to($request->user())->send(new MailableClass);
        // dd($request);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SendEmail  $sendEmail
     * @return \Illuminate\Http\Response
     */
    public function show(SendEmail $sendEmail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SendEmail  $sendEmail
     * @return \Illuminate\Http\Response
     */
    public function edit(SendEmail $sendEmail)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SendEmail  $sendEmail
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SendEmail $sendEmail)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SendEmail  $sendEmail
     * @return \Illuminate\Http\Response
     */
    public function destroy(SendEmail $sendEmail)
    {
        //
    }
}
