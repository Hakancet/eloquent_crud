
@extends('layout.app')
@section('title') Model Veri Listesi @endsection
@section('content')

<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">First</th>
        <th scope="col">Last</th>
        <th scope="col" style="max-width-100px">İşlemler</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">1</th>
        <td>Mark</td>
        <td>Otto</td>
        <td>
            <button class="btn btn-primary btn-sm">Göster</button>
            <button class="btn btn-success btn-sm">Göster</button>
            <button class="btn btn-danger btn-sm">Sil</button>
        </td>
      </tr>
    </tbody>
  </table>
    

@endsection

