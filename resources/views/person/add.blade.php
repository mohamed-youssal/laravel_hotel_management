@section('title')
    M-hotel | Reserve a room
@endsection

@section('content')
<h2 class="d-flex justify-content-center font-italic mt-3"><i class="bi bi-plus-circle"></i>Add new reservation</h2>
    <div class="row">
        <div class="col col-lg-4 col-sm-10 mx-auto">
            <form method="POST" action="{{route('person.store')}}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label>Name</label>
                    <input type="text" name="name" class="form-control" placeholder="write your full name here">
                </div>
                <div class="form-group">
                    <label>Image</label>
                    <input type="file" name="image" class="form-control-file">
                </div>
                <div class="form-group">
                    <label> room number : </label>
                    <select name="room_id">
                        @foreach ($rooms as $room)
                            @if ($room->state === 0)
                                <option value="{{$room->id}}">{{$room->number}}</option>
                            @endif
                        @endforeach
                    </select>
                </div>
                
                
                <button type="submit" class="btn btn-primary w-100 mb-3">Reserve</button>
            </form>
        </div>
    </div>
@endsection

@extends('layouts.master')