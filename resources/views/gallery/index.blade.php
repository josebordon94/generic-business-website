@extends('layouts.plantilla')

@section('content')
<section id="gallery">

    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


    <script src="js/gallery.js"></script>
    <div class="container">
        <div class="row">
            <div class="row">
                @foreach ($photos as $item)
                <div class="col-lg-3 col-md-4 col-xs-6 thumb d-flex justify-content-center align-items-center"  style="max-height: 400px;" >
                    <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="{{$item->name}}"
                    data-image="{{$item->fullRoute}}"
                    data-target="#image-gallery"><img class="img-thumbnail " style="max-height: 400px;" src="{{$item->fullRoute}}"
                    alt="Another alt text"></a>
                </div> <!-- Each photo column -->
                @endforeach
            </div>


            <div class="modal fade" id="image-gallery" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content" >
                        <div class="modal-header">
                            <h4 class="modal-title" id="image-gallery-title"></h4>
                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true"><i class="fa fa-times fa-lg"></i></span><span class="sr-only">Cerrar</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <img id="image-gallery-image" class="img-responsive col-md-12" src="">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-black rounded-circle float-left" id="show-previous-image"><i class="fa fa-arrow-left"></i>
                            </button>

                            <button type="button" id="show-next-image" class="btn btn-black rounded-circle float-right"><i class="fa fa-arrow-right"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- Album row -->
    </div>
</section>
@endsection