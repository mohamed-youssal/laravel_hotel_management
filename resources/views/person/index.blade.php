@section('title')
    M-hotel | all Reservations
@endsection

@section('content')
    <div class="d-flex justify-content-center m-3">
        <a class="btn btn-secondary btn-sm" href="{{route('person.create')}}"><i class="fa-solid fa-user-plus"></i>  add your reservation</a>
    </div>
    @if ($persons->isEmpty())
        <div class="col-10 text-primary">
            - There is no reservation now, <b>you can add a new one</b>
        </div>
    @else
        <div class="row m-3">
            @foreach ($persons as $person)
                <div class="col-lg-4 col-sm-10 my-3">
                        <div class="card h-100">
                            <img class="card-img-top" src="{{asset('storage/'.$person->image)}}" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title"><b>Client name :</b> {{$person->name}}</h5>
                                <p>has reserved roon number : {{$person->room_id}}</p>
                                <div class="d-flex justify-content-center">
                                    <a href="{{route('person.edit', $person->id)}}" class="btn btn-primary mr-2">edit</a>
                                    <form action="{{route('person.update', $person->id)}}" method="post">
                                    @csrf
                                    @method('DELETE')
                                        <button class="btn btn-danger" type="submit">delete</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                </div>
            @endforeach
        </div>
    @endif
@endsection
@extends('layouts.master')