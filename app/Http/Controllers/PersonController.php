<?php

namespace App\Http\Controllers;

use App\Models\Person;
use App\Http\Requests\StorePersonRequest;
use App\Http\Requests\UpdatePersonRequest;
use App\Models\Room;
use GuzzleHttp\Psr7\Request;
use RealRashid\SweetAlert\Facades\Alert;


class PersonController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $persons = Person::with('rooms')->get();
        
        return view('person.index', compact('persons'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $rooms = Room::all();
        return view('person.add', compact('rooms'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePersonRequest $request)
    {
        $name = $request->name;
        $room_id = $request->room_id;
        $image = $request->file('image')->store('person', 'public');
        Person::create([
            'name' => $name,
            'image' => $image,
            'room_id' => $room_id
        ]);
        Alert::success('Success', 'Reservation added succesfully');
        return to_route('person.index')->with('success', 'person added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Person $person)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Person $person)
    {
        $rooms = Room::all();
        return view('person.edit', compact('person', 'rooms'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePersonRequest $request, Person $person)
    {
        $name = $request->name;
        $room_id = $request->room_id;
        $image = $request->file('image')->store('person', 'public');
        $person->update([
            'name' => $name,
            'image' => $image,
            'room_id' => $room_id
        ]);
        Alert::success('Success', 'Reservation edited succesfully');
        return to_route('person.index')->with('success', 'person updated successfully');   
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Person $person)
    {
        $person->delete();
        Alert::success('Success', 'Reservation deleted succesfully');
        return to_route('person.index')->with('success', 'person deleted successfully');   
    }


    /**
     * Search Item.
     */
    public function search(){
        $term = $_GET['search'];
        $persons = Person::where('name', 'LIKE', '%'.$term.'%')->get();
        return view('person.search', compact('persons', 'term'));
    }

     /**
     * Similate.
     */
    public function similation(){
        $rooms = Room::all();
        return view('person.similator', compact('rooms'));
    }


    public function calculate(){
        $room_id = $_POST['room_id'];
        $days = intval($_POST['days']);
        $rooms = Room::where('id', 'LIKE', $room_id)->get();
        $room_daily_price = floatval($rooms[0]->daily_price);
        $total = $room_daily_price * $days;
        
        return view('person.similate_result', compact('total', 'rooms', 'days'));
    }


}
