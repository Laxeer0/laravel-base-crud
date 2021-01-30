  
@extends("layouts.layouts")
@section("title","Home")


@section("main")

<div class="container">
        <div class="row">
                @foreach ($data as $booking )
                <div class="col-3">
                    <div class="card mb-5" style="">
                        <div class="card-body">
                            <h5 class="card-title">{{ $booking->guest_full_name }}</h5>
                            <h6 class="card-subtitle mb-2 text-muted">Stanza n° {{ $booking->room }}</h6>
                            <a href="{{route('booking.show', $booking->id)}}" class="btn btn-info">Reserved Details</a>
                        </div>
                    </div>
                </div>
                @endforeach
                
  

            
        </div>
    </div>

@endsection