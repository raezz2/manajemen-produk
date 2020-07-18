@extends('layouts.app')
@section('content')
<div class="container">
  <div class="row">
    <div class="col-md">
      <div class="panel panel-default">
        <div class="panel-heading">Tambah Produk</div>
        <div class="panel-body">
          <form action="{{ url('/produk/create') }}" method="post">
            {{ csrf_field() }}
            <div class="form-group">
              <label for="">Name Produk</label>
              <input type="text" class="form-control" name="title" placeholder="Enter Name Produk">
            </div>
            <div class="form-group">
              <label for="">Harga Produk</label>
              <input type="text" class="form-control" name="price" placeholder="Enter Produk Price">
            </div>
            <div class="form-group">
              <label for="">Merek</label>
              <select name="merek_id" id="" class="form-control">
                @foreach($mereks as $c)
                <option value="<?=$c->id?>"><?=$c->name_merek?></option>
                @endforeach
              </select>
            </div>
            <div class="form-group">
              <label for="">Kategori Produk</label>
              <select name="kategori_id" id="" class="form-control">
                @foreach($kategoris as $c1)
                <option value="<?=$c1->id?>"><?=$c1->name?></option>
                @endforeach
              </select>
            </div>
          <div class="form-group">
            <input type="submit" value="Save" class="btn btn-primary">
            <a href="{{URL('/produk')}}" class="btn btn-danger">Back</a>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
</div>
</div>
@endsection()
