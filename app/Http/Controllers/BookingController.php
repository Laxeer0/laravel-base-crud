<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\BookingModel;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = BookingModel::all();
        return view('home',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("create_data");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $createBook = new BookingModel();
        $createBook->guest_full_name = $request->input('guestFullName');
        $createBook->guest_credit_card = $request->input("guestCard");
        $createBook->room = $request->input("guestRoom");
        $createBook->from_date = $request->input("guestFrom");
        $createBook->to_date = $request->input("guestTo");
        $createBook->more_details = $request->input("guestDetails");

        $createBook->save();

        $lastID = $createBook->id;
        $detail = BookingModel::find($lastID);
        return view('detail_user', compact('detail'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $detail = BookingModel::find($id);
        return view('detail_user', compact('detail'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
