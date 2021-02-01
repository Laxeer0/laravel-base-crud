<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\BookingModel;

use Dotenv\Validator;

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
        
        $validated = $request->validate([
            'guestFullName' => 'required|min:3',
            'guestCard' => 'required',
            'guestRoom' => 'required',
            'guestFrom' => 'required',
            'guestTo' => 'required',
        ]);

        
        $createBook = new BookingModel();
        $createBook->guest_full_name = $validated['guestFullName'];
        $createBook->guest_credit_card = $validated["guestCard"];
        $createBook->room = $validated["guestRoom"];
        $createBook->from_date = $validated["guestFrom"];
        $createBook->to_date = $validated["guestTo"];
        $createBook->more_details = $request["guestDetails"];

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
        $edit = BookingModel::find($id);
        return view('edit_data', compact('edit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id,Request $request)
    {
        $validated = $request->validate([
            'guestFullName' => 'required|min:3',
            'guestCard' => 'required',
            'guestRoom' => 'required',
            'guestFrom' => 'required',
            'guestTo' => 'required',
        ]);

        
        $editBook = BookingModel::find($id);
        $editBook->guest_full_name = $validated['guestFullName'];
        $editBook->guest_credit_card = $validated["guestCard"];
        $editBook->room = $validated["guestRoom"];
        $editBook->from_date = $validated["guestFrom"];
        $editBook->to_date = $validated["guestTo"];
        $editBook->more_details = $request["guestDetails"];

        $editBook->save();

        $lastID = $editBook->id;
        $detail = BookingModel::find($lastID);
        return view('detail_user', compact('detail'));
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
