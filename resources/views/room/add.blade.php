@section('title')
    M-hotel | add new room
@endsection

@section('content')
<h2 class="d-flex justify-content-center font-italic mt-3">Add new room</h2>
<div class="row">
    <div class="col col-lg-5 col-sm-10 mx-auto">
        <form class="mb-5" method="POST" action="{{route('room.store')}}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label>Number</label>
                <input type="number" name="number" class="form-control">
            </div>
            <div class="form-group">
                <label>description</label><br>
                <textarea class="w-100" rows="3" name="description"></textarea>
            </div>
            <div class="form-group">
                <label>daily price</label>
                <input type="float"  name="daily_price"  class="form-control">
            </div>
            <div class="form-group">
                <label>state</label>
                <select class="form-control" name="state">
                    <option value="0">available</option>
                    <option value="1">not available</option>
                </select>
            </div>
            <div class="form-group">
                <label>image</label>
                <input type="file" name="image" class="form-control-file">
            </div>
            
            
            <button type="submit" class="btn btn-primary w-100 mt-3">add new room</button>
        </form>
    </div>
</div>
@endsection

@extends('layouts.master')