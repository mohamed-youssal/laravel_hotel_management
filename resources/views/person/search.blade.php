@section('title')
    M-hotel | search results
@endsection

@section('content')
    <div class="d-flex justify-content-center m-3">
        <a class="btn btn-secondary btn-sm" href="{{route('person.create')}}"><i class="fa-solid fa-user-plus"></i>  add your reservation</a>    
    </div>
    <div class="row">
        @if ($persons->isEmpty())
            <div class="col-10 text-primary">
                - No matched result found for the following name : <b>{{$term}}</b>
            </div>
        @else
            @foreach ($persons as $person)
                <div class="col col-lg-4 col-sm-12 my-2">
                    <div class="card h-100">
                        <img class="card-img-top" src="{{'storage/'.$person->image}}" alt="">
                        <div class="card-body">
                            <h4 class="card-title"><b>Name : </b>{{$person->name}}</h4>
                            <p class="card-text">Room number : {{$person->room_id}}</p>
                        </div>
                        <div class="d-flex justify-content-center pb-3">
                            <a href="{{route('person.edit', $person->id)}}" class="btn btn-primary mr-2">edit</a>
                            <form action="{{route('person.update', $person->id)}}" method="post">
                            @csrf
                            @method('DELETE')
                                <button class="btn btn-danger" type="submit">delete</button>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        @endif
        
        
    </div>
@endsection

@extends('layouts.master')