<?php

namespace App\Http\Controllers;

use App\Models\Room;
use App\Http\Requests\StoreRoomRequest;
use App\Http\Requests\UpdateRoomRequest;
use RealRashid\SweetAlert\Facades\Alert;


class RoomController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rooms = Room::all();
        return view('room.index', compact('rooms'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('room.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRoomRequest $request)
    {
        
        $number = $request->number;
        $description = $request->description;
        $daily_price = $request->daily_price;
        $state = $request->state;
        $number = $request->number;
        $image = $request->file('image')->store('rooms', 'public');
        

        Room::create([
            'number' => $number,
            'description' => $description,
            'daily_price' => $daily_price,
            'state' => $state,
            'image' => $image
        ]);
        Alert::success('Success', 'Room added succesfully');
        return to_route('room.index')->with('success', 'room added succesfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Room $room)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Room $room)
    {
        return view('room.edit', compact('room'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRoomRequest $request, Room $room)
    {
        $number = $request->number;
        $description = $request->description;
        $daily_price = $request->daily_price;
        $state = $request->state;
        $number = $request->number;
        $image = $request->file('image')->store('rooms', 'public');

        $room->update([
            'number' => $number,
            'description' => $description,
            'daily_price' => $daily_price,
            'state' => $state,
            'image' => $image
        ]);
        Alert::success('Success', 'Room edited succesfully');
        return to_route('room.index')->with('sucess', 'room edited succesfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Room $room)
    {
        $room->delete();
        Alert::success('Success', 'Room deleted succesfully');
        return to_route('room.index')->with('success', 'room deleted succesfully!');
    }
}
