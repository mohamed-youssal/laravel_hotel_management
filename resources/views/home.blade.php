@section('title')
    M-hotel | home
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col col-12">
                <img class="img-fluid w-100" alt="Responsive image" src="storage/static/hotel1.jpeg">
            </div>
        </div>
        <div class="d-flex justify-content-center font-weight-bold font-italic h2 mt-2">M-Hotel..</div>
        <div class="d-flex justify-content-center font-weight font-italic text-secondary mb-2 h4">
            "all what you want and more..."
        </div>
        <div class="row my-3">
            <div class="col-lg-4 col-sm-10 mx-auto">
                <img class="card-img-top rounded-top" src="{{asset('storage/static/room-.jpeg')}}" alt="Card image cap">
                <div class="d-flex justify-content-center text-primary my-2">
                    <h2><i class="fa-solid fa-award"></i></h2>
                </div>
                <p class="font-italic h5">
                    Our Hotel offers diffirent types of Rooms for everybody, in which you can find all what you need and more.
                </p>
            </div>
            <div class="col-lg-4 col-sm-10 mx-auto">
                <img class="card-img-top rounded-top" src="{{asset('storage/static/pool.jpeg')}}" alt="Card image cap">
                <div class="d-flex justify-content-center text-primary my-2">
                    <h2><i class="fa-regular fa-star"></i></h2>
                </div>
                <p class="font-italic h5">
                    We offer also Pools and tennis play for you alone or with your familly or partner, to enjoy your time during your stay with us.
                </p>
            </div>
            <div class="col-lg-4 col-sm-10 mx-auto">
                <img class="card-img-top rounded-top" src="{{asset('storage/static/food_service.jpeg')}}" alt="Card image cap">
                <div class="d-flex justify-content-center text-primary my-2">
                    <h2><i class="fa-solid fa-ranking-star"></i></h2>
                </div>
                <p class="font-italic h5">
                    You can also enjoy our restaurant, and the Meals prepared by our experts in cooking.
                </p>
            </div>
        </div>
        <div class="container my-5">
            <div class="d-flex justify-content-center">
                <h2>"M-Hotel"</h2> 
            </div>
            <div class="d-flex justify-content-center mb-5">
                <div class="text-secondary h4 font-italic">
                    the best services ever...
                </div>
            </div>
            
            <div class="row hv">
                <div class="col-lg-7 col-sm-6 d-flex align-items-center">
                    <p class="d-flex font-weight-bold m-3">
                        The rooms at the Panoramic Hotel are new, well-lit and inviting. Our reception staff will be happy to help you during your stay in Taormina, suggesting itineraries, guided visits and some good restaurants in the historic centre.
                        The rooms at the Panoramic Hotel are new, well-lit and inviting. Our reception staff will be happy to help you during your stay in Taormina, suggesting itineraries, guided visits and some good restaurants in the historic centre.
                    </p>
                </div>
                <div class="col-lg-5 col-sm-6">
                    <img class="img-fluid rounded" src="{{asset('storage/static/h1.jpg')}}" alt="">
                </div>
            </div>
            <div class="row hv my-3">
                <div class="col-lg-5 col-sm-6">
                    <img class="img-fluid float-end rounded" src="{{asset('storage/static/h33.jpeg')}}" alt="">
                </div>
                <div class="col-lg-7 col-sm-6 d-flex align-items-center">
                    <p  class="font-weight-bold m-3">
                        While you enjoy a cocktail by the swimming pool on the rooftop terrace, you will be stunned by the breathtaking view of the bay of Isola Bella. Here, during your summer stays, our bar serves traditional Sicilian dishes, snacks and salads.
                        While you enjoy a cocktail by the swimming pool on the rooftop terrace, you will be stunned by the breathtaking view of the bay of Isola Bella. Here, during your summer stays, our bar serves traditional Sicilian dishes, snacks and salads.
                    </p>
                </div>
            </div>
            <div class="row hv">
                <div class="col-lg-7 col-sm-6 d-flex align-items-center">
                    <p class="font-weight-bold m-3">
                        Disabled accessible
                        24h reception
                        Buffet Breakfast
                        Wi-Fi internet Fast Speed, perfect for Smart Working
                        innovative air conditioning system with primary air exchange to prevent the spread of viruses such as covid-19
                        Disabled accessible
                        24h reception
                        Buffet Breakfast
                        Wi-Fi internet Fast Speed, perfect for Smart Working
                    </p>
                </div>
                <div class="col-lg-5 col-sm-6">
                    <img class="img-fluid float-right rounded" src="{{asset('storage/static/h2.jpg')}}" alt="">
                </div>
            </div>
        </div>
    </div>
@endsection

@extends('layouts.master')