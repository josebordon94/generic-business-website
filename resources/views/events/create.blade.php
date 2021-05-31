@extends('layouts.admin')

@section('content')
<section id="create-event">
    <div class="container mt-2">
        <h1>Create new event</h1>
        <form method="post" action="{{route('events.store')}}">
            @csrf
            <div class="form-group">
                <label for="exampleFormControlInput1">Event title</label>
                <input type="text" class="form-control" id="title" name="title">
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Event content</label>
                <textarea class="form-control text-area" id="content" rows="3" name="content"></textarea>
            </div>
            <button type="submit" class="btn btn-success  w-100"> <i class="fa fa-save"></i> Save new event</button>
        </form>
    </div>

</section>
@endsection