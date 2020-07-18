@extends('layouts.app')
@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-3">
        @include('layouts.sidebar')
    </div>
    <div class="col-md">
      <a href="{{ url('/produk/create') }}" class="btn btn-primary">Tambah Produk <i class="fa fa-plus"></i></a>
      <h1></h1>
      <table class="table">
        <thead>
          <tr>
            <th>No</th>
            <th>Name Produk</th>
            <th>Harga</th>
            <th>Kategori</th>
            <th>Merek</th>
          </tr>
        </thead>
        <tbody>
          @foreach($produks as $produk)
          <tr>
            <td>{{ $no++ }}</td>
            <td>{{ $produk->title }}</td>
            <td>{{ $produk->price }}</td>
            <td>{{ $produk->name }}</td>
            <td>{{ $produk->name_merek }}</td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>
@endsection()
