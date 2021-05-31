@extends('layouts.plantilla')

@section('content')

<section class="page-section clearfix">
  <div class="container">
    <div class="intro">

      <div id="carouselExampleIndicators" class="carousel slide intro-img img-fluid mb-3 mb-lg-0 rounded" data-ride="carousel" data-interval="2000">
        <div class="carousel-inner">
          @for ($i = 0; $i < count($photos); $i++)
          <div class="carousel-item @if ($i==0) active @endif">
            <img class="d-block w-100 img-fluid mw-100 mh-100" src="{{$photos[$i]->fullRoute}}" alt="{{$photos[$i]->name}}">
          </div> <!-- img -->
          @endfor
        </div>
      </div>
      <div class="intro-text left-0 text-center bg-faded p-5 rounded">
        <h2 class="section-heading mb-4">
          <span class="section-heading-upper">{{$main_data['main-header']['pre-title']}}</span>
          <span class="section-heading-lower">{{$main_data['main-header']['title']}}</span>
        </h2>
        <p class="mb-3">{{$main_data['main-header']['content']}}
        </p>
        <div class="intro-button mx-auto">
          {{-- <a class="btn btn-primary btn-xl" href="#">¡Enviá tu consulta!</a> --}}
        </div>
      </div>
    </div>
  </div>
</section>
<section id="contact">
  <div class="container-fluid bg-faded">
      <div class="row justify-content-center">
        <div class="col-12 mt-3">
          <h2 class="section-heading mb-1">
            <span class="section-heading-lower">¡Contact us!</span>
          </h2>
        </div>
        <div class="col-sm-12 col-md-6 d-flex align-items-center mb-3">
          <div class="list-group contact-list w-100" style="border: 2px solid #000;"">
            @foreach ($main_data['contacts'] as $item)
            @if ($item['enabled'] == "true")
            <a href="#" class="list-group-item list-group-item-action list-group-item-light text-dark text-center "><i class="{{$item['icon']}}"></i> {{$item['value']}}</a>
            @endif
            @endforeach
          </div>
        </div>
        <div class="col-sm-12 col-md-6 mb-3">
          <iframe src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=es&amp;q=Les%20Rambles,%201%20Barcelona,%20Spain+(Mi%20nombre%20de%20egocios)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed" width="100%" height="100%" class="rounded" allowfullscreen="" loading="lazy" ></iframe>
        </div>
      </div> <!--Row-->
  </div>
</section>
@endsection