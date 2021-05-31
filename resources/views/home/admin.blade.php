@extends('layouts.admin')

@section('content')

<div class="container mt-3">
  <h1>Landing page content administration</h1>
  <p>Use the forms above to configure the information and pictures displayed in landing page.</p>
  <h2>Main header</h2>
  <form action="{{route('home.save')}}" method="post">
    @csrf
    <div class="form-group row">
      <label for="pre-title" class="col-sm-2 col-form-label">Pre title</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="pre-title-1" name="pre-title-1" value="{{$main_data['main-header']['pre-title']}}">
      </div>
    </div>
    <div class="form-group row">
      <label for="title" class="col-sm-2 col-form-label">Title</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="title-1" name="title-1" value="{{$main_data['main-header']['title']}}">
      </div>
    </div>
    <div class="form-group row">
      <label for="content" class="col-sm-2">Content</label>
      <div class="col-sm-10">
        <textarea class="form-control" id="content-1" name="content-1" rows="5">{{$main_data['main-header']['content']}}</textarea>
      </div>
    </div>
    <h2>Second header</h2>
    <div class="form-group row">
      <label for="pre-title" class="col-sm-2 col-form-label">Pre title</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="pre-title-2" name="pre-title-2" placeholder="Email" value="{{$main_data['second-header']['pre-title']}}">
      </div>
    </div>
    <div class="form-group row">
      <label for="title" class="col-sm-2 col-form-label">Title</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="title-2" name="title-2" placeholder="Password" value="{{$main_data['second-header']['title']}}">
      </div>
    </div>
    <div class="form-group row">
      <label for="content" class="col-sm-2">Content</label>
      <div class="col-sm-10">
        <textarea class="form-control" id="content-2" name="content-2" rows="5">{{$main_data['second-header']['content']}}</textarea>
      </div>
    </div>
    <h2>Contacts</h2>
    <div class="form-group row">
      <label for="Whatsapp" class="col-sm-2 col-form-label">Whatsapp</label>
      <div class="col-sm-3 mt-xsm-1 mt-sm-0">
        <select name="whatsapp-active" id="whatsapp-active" class="custom-select contact-select">
          <option value="true">Active</option>
          <option value="false" @if ($main_data['contacts']['whatsapp']['enabled'] == "false") selected  @endif>Disabled</option>
        </select>
      </div>
      <div class="col-sm-7">
        <input type="text" class="form-control" id="whatsapp-value" name="whatsapp-value" value="{{$main_data['contacts']['whatsapp']['value']}}">
      </div>
    </div>

    <div class="form-group row">
      <label for="Whatsapp" class="col-sm-2 col-form-label">Facebook</label>
      <div class="col-sm-3 mt-xsm-1 mt-sm-0">
        <select name="facebook-active" id="facebook-active" class="custom-select contact-select">
          <option value="true">Active</option>
          <option value="false" @if ($main_data['contacts']['facebook']['enabled'] == "false") selected  @endif>Disabled</option>
        </select>
      </div>
      <div class="col-sm-7">
        <input type="text" class="form-control" id="facebook-value" name="facebook-value" value="{{$main_data['contacts']['facebook']['value']}}">
      </div>
    </div>

    <div class="form-group row">
      <label for="Whatsapp" class="col-sm-2 col-form-label">Telephone</label>
      <div class="col-sm-3 mt-xsm-1 mt-sm-0">
        <select name="telephone-active" id="telephone-active" class="custom-select contact-select">
          <option value="true">Active</option on>
            <option value="false" @if ($main_data['contacts']['telephone']['enabled'] == "false") selected  @endif>Disabled</option>
          </select>
        </div>
        <div class="col-sm-7">
          <input type="text" class="form-control" id="telephone-value" name="telephone-value" value="{{$main_data['contacts']['telephone']['value']}}">
        </div>
      </div>

      <div class="form-group row">
        <label for="address" class="col-sm-2 col-form-label">Address</label>
        <div class="col-sm-3 mt-xsm-1 mt-sm-0">
          <select name="address-active" id="address-active" class="custom-select contact-select">
            <option value="true">Active</option>
            <option value="false" @if ($main_data['contacts']['address']['enabled'] == "false") selected  @endif>Disabled</option>
          </select>
        </div>
        <div class="col-sm-7">
          <input type="text" class="form-control" id="address-value" name="address-value" value="{{$main_data['contacts']['address']['value']}}">
        </div>
      </div>

      <div class="form-group row">
        <label for="instagram" class="col-sm-2 col-form-label">Instagram</label>
        <div class="col-sm-3 mt-xsm-1 mt-sm-0">
          <select name="instagram-active" id="instagram-active" class="custom-select contact-select">
            <option value="true">Active</option>
            <option value="false" @if ($main_data['contacts']['instagram']['enabled'] == "false") selected  @endif>Disabled</option>
          </select>
        </div>
        <div class="col-sm-7">
          <input type="text" class="form-control" id="instagram-value" name="instagram-value" value="{{$main_data['contacts']['instagram']['value']}}">
        </div>
      </div>

      <div class="form-group row">
        <div class="col-sm-12">
          <button type="submit" class="btn btn-success w-100"><i class="fa fa-save"></i> Save main header changes</button>
        </div>
      </div>
    </form>
    <script src="js/main.js"></script>
    <h1 id="carousel-upload-list">Main carousel images</h1>
    <form action="{{ route('home.carousel-upload') }}" method="POST" enctype="multipart/form-data">
      @csrf
      <h2>Upload new image</h2>
      <div class="form-group row">
        <div class="col-md-9">
          <input type="file" name="image" class="form-control w-100" id="carousel-new-photo">
        </div>
        <div class="col-md-3">
          <button type="submit" class="btn btn-success w-100"><i class="fa fa-save"></i> Upload</button>
        </div>
      </div>
    </form>
    <h2>Current carousel images</h2>
    <ul class="list-group">
      @foreach ($photos as $p)
      <li class="list-group-item text-dark d-flex justify-content-between align-items-center">{{ $p->fullRoute }} <span class="text-danger h2"> <img src="{{$p->fullRoute}}" style="width: 100px;" class="shadow-lg"> <a style="color: red;" href="{{route('home.carousel-delete', ['id'=>$p->id])}}"><i class="fa fa-trash"></i></a> </span></li>
  @endforeach
    </ul>

  </div>
  @endsection