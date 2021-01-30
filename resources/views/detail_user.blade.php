  
@extends("layouts.layouts")
@section("title","Home")


@section("main")

<div class="container">
    <div class="jumbotron">
        <a href="/" class="btn btn-danger p-3"><i class="bi bi-arrow-90deg-left"></i></a>
        <h1 class="text-align">{{ $detail->guest_full_name }}
        <h3>Room n° {{$detail->room}}</h3>
        <h5>From: {{$detail->from_date}} - To: {{$detail->to_date}}
        <hr class="my-3">
        <h6>More Details:</h6>
        <p>{{$detail->more_details}}
    </div>
</div>

@endsection