@extends("layouts.layouts")
@section("title","Create Data")


@section("main")
<div class="container">
    <div class="jumbotron py-4">
        <h1 class="">Create Guest Detail</h1>
        <hr class="my-3">
        <form method="post" action="{{ route('booking.store') }}">
        @csrf
            <div class="form-group row">
                <label for="inputGuestName" class="col-sm-2 col-form-label">Full Name</label>
                <div class="col-sm-10">
                    <input type="name" class="form-control" id="inputGuestName" name="guestFullName" placeholder="Full Name">
                    @error('guestFullName')
                        <div class="invalid-feedback d-block">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <label for="inputGuestCard" class="col-sm-2 col-form-label">Credit Card</label>
                <div class="col-sm-10">
                    <input type="name" class="form-control" id="inputGuestCard" name="guestCard" placeholder="Credit Card">
                    @error('guestCard')
                        <div class="invalid-feedback d-block">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <label for="inputGuestRoom" class="col-sm-2 col-form-label">Room</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" id="inputGuestRoom" name="guestRoom" placeholder="Room">
                    @error('guestRoom')
                        <div class="invalid-feedback d-block">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <label for="inputGuestFromTo" class="col-sm-2 col-form-label">From/To</label>
                <div class="col-sm-5">
                    <input type="date" class="form-control" id="inputGuestFromTo" name="guestFrom" placeholder="From">
                    @error('guestFrom')
                        <div class="invalid-feedback d-block">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="col-sm-5">
                    <input type="date" class="form-control" id="inputGuestFromTo" name="guestTo" placeholder="To">
                    @error('guestTo')
                        <div class="invalid-feedback d-block">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <label for="inputGuestDetails" class="col-sm-2 col-form-label">More Details:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputGuestDetails" name="guestDetails" placeholder="More Details">
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-10">
                <button type="submit" class="btn btn-primary">Create</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection