<?php

namespace App\Http\Controllers;

use App\Models\item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    { 
        $item = new item;
        $item->lname = $request->lname;
        $item->fname = $request->fname;
        $item->mname = $request->mname;
        //return view("item");
        return view('item',['lname' => $item->lname, 'fname' => $item->fname, 'st' => $item->st]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        //
        $item = new item;
        $item->lname = $request->lname;
        $item->fname = $request->fname;
        $item->mname = $request->mname;
        $item->num_h = $request->num_h;
        $item->st = $request->st;
        $item->brgy = $request->brgy;
        $item->city = $request->city;
        $item->p_num = $request->p_num;
        $item->email = $request->email;
        $item->rfid = $request->rfid;
        $item->save();

        // $i_email = $request->email;
        // \QrCode::email($i_email,'Sample Email','Sample body');
        
        //  \QrCode::size(500)
        //        ->format('png')
        //        ->generate('Segovia',public_path('images/qrcode.png'));
       
        return view('item',['lname' => $item->lname, 'fname' => $item->fname, 'st' => $item->st]);
    
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

        $item = new item;
        $item->create($request->all());
        return view('item');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\item  $item
     * @return \Illuminate\Http\Response
     */
    public function show(item $item)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\item  $item
     * @return \Illuminate\Http\Response
     */
    public function edit(item $item)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\item  $item
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, item $item)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\item  $item
     * @return \Illuminate\Http\Response
     */
    public function destroy(item $item)
    {
        //
    }
}
