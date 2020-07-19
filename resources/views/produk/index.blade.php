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
            {{-- <td>
                <a href="{{ route('produk.edit', $produk) }}" class="btn btn-primary btn-sm" style="float:left;">Edit</a>
                <form action="{{ route('produk.destroy',$produk) }}" method="post">
                  {{ csrf_field() }}
                  <input type="hidden" name="_method" value="DELETE">
                  <button type="submit" class="btn btn-danger btn-sm" style="margin-left:3px;">Hapus</button>
                </form>
            </td> --}}
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>
@endsection()
