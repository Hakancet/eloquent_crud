
@extends('layout.app')
@section('title') Veri Ekle @endsection
@section('content')

<form  action="{{ route('module.store') }}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
      <label  class="form-label">Başlık</label>
      <input type="text" class="form-control" name="title" id="exampleInputEmail1" >
    </div>
    <div class="mb-3">
      <label  class="form-label">Altbaşlık</label>
      <input type="text" class="form-control" name="subtitle" id="exampleInputEmail1" >
    </div>
    <div class="mb-3">
      <label  class="form-label">İçerik</label>
      <textarea name="content" class="form-control" ></textarea>
    </div>
    <div class="mb-3">
      <label  class="form-label">Resim</label>
      <input type="file" class="form-control" name="image" id="exampleInputEmail1" >
    </div>
    <button type="submit" class="btn btn-primary">Kaydet</button>
  </form>
    

@endsection

