@section('title')
    M-hotel | similator
@endsection

@section('content')
    <div class="row">
        <div class="col col-lg-10 col-sm-12 mx-auto my-5">
                <div class="card bg-light mb-3 w-100">
                    <div class="card-header">Similator</div>
                    <div class="card-body">
                    <form method="POST" action="{{route('calculate')}}">
                        @csrf
                        <div>
                            <label class="form-group" for="">room number : </label>
                            <select class="form-group" name="room_id">
                                @foreach ($rooms as $room)
                                    <option value="{{$room->id}}">{{$room->number}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div>
                            <label class="form-group" for="">days : </label>
                            <input class="form-group" type="int" name="days">
                        </div>
                        <div class="d-flex justify-content-center">
                            <button type="submit" class="btn btn-primary btn-sm">calculate</button>
                        </div>
                    </form>

                </div>
        </div>
    </div>
@endsection

@extends('layouts.master')