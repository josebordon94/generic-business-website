@extends('layouts.plantilla')

@section('content')
<section id="events">
    <div class="container">
        <hr>

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
            <div class="card-footer">
                <p style="text-align: right"><small class="text-muted"> Publicado: {{$item->updated_at}}</small></p>
              </div>
        </div>
        @endforeach
    </div>

</section>
@endsection