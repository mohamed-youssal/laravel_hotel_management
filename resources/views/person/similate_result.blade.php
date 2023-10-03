@section('title')
    M-hotel | similator
@endsection

@section('content')
    <div class="row">
        <div class="col col-lg-10 col-sm-12 mx-auto my-5">
                <div class="card bg-light mb-3 w-100">
                    <div class="card-header">Similator</div>
                    <div class="card-body">
                        <form>
                            @csrf
                            <div>
                                <label class="form-group" for="">room number : </label>
                                @foreach ($rooms as $room)
                                    <label class="form-group">{{$room->number}}</label>                                    
                                @endforeach
                            </div>
                            <div>
                                <label class="form-group" for="">days number : </label>
                                <label class="form-group">{{$days}}</label>
                            </div>
                        </form>
                    </div>
                </div>
        <div class="card bg-light my-3 w-100">
            <div class="d-flex justify-content-center text-info">
                Total to pay : {{$total}} MAD
            </div>
        </div>
    </div>
@endsection

@extends('layouts.master')