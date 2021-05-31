@extends('layouts.admin')

@section('content')
<section id="events">
    <div class="container">
        <div class="col-12 d-flex justify-content-center">
            <a href="{{route('events.create')}}" class="btn btn-success w-50 mt-4"><i class="fa fa-file-alt"></i> Create new event</a>
        </div>
        @foreach ($events as $item)
        <div class="card mt-4">
            <div class="card-header">
                <h2 class="section-heading mt-3">
                    <span class="section-heading-lower mt-2">{{$item->title}}</span>
                </h2>
            </div>
            <div class="card-body">
                <p style="text-align: justify" clas="m-4">{!! nl2br($item->content) !!}</p>
            </div>
            <div class="card-footer d-flex justify-content-between">
                <a class="btn btn-danger" href="{{route('events.delete', $item->id)}}"><i class="fa fa-trash-alt"> Delete event</i></a>
                <p style="text-align: right"><small class="text-muted"> Publicado: {{$item->updated_at}}</small></p>
              </div>
        </div>
        @endforeach
    </div>

</section>
@endsection