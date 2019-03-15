<?php

namespace App\Http\Controllers;
use App\User;
use App\Models\Room;
use Illuminate\Http\Request;
use Validator;

class RoomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('rooms.create');
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
        $validator = Validator::make($request->all(), [
        'beds' => 'required|min:0|numeric',
        'cupboards' => 'required|min:0|numeric',
        'desks' => 'required|min:0|numeric',
        'rate' => 'required|min:0|numeric',
        'city' => 'required|string',
        'address' => 'required|string',
        'phone' => 'required|string',
        'image' => 'sometimes|image|mimes:jpg,png,jpeg,gif,svg'
        ]);

        if ($validator->fails())   
            return response()->json(array('errors' => $validator->getMessageBag()->toArray()));
     
        $room = new Room();
        $room->beds = $request->input('beds');
        $room->cupboards = $request->input('cupboards');
        $room->desks = $request->input('desks');
        $room->rate = $request->input('rate');
        $room->city = $request->input('city');
        $room->address = $request->input('address');
        $room->phone = $request->input('phone');

        if ($request->file('file')) {
            $image = $request->file('file');
            $roomId = Room::max('id') + 1;
            $name = "$roomId".'.'.$image->getClientOriginalExtension();
            $destinationPath1 = public_path('/images');
            $image->move($destinationPath1, $name);
            $room->image = $name;
        }
        else 
            $room->image = null;

        $room->save();
        return response()->json($room);  
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $id)
    {
        //
        return view('rooms.show');

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
