@extends('layouts.app')
@section('content');
<div class="container">
  <div class="col-md">
    <div class="panel panel-default">
      <div class="panel-heading">Edit produk</div>
      <div class="panel-body">
        <form action="{{ route('produk.update',$produk) }}" method="post">
          {{ csrf_field() }}
          {{ method_field('PATCH') }}
          <div class="form-group">
            <label for="">Name produk</label>
            <input type="text" class="form-control" name="name" placeholder="Enter Your Name" value="{{$produk->title}}">
          </div>
          <div class="form-group">
            <label for="">Price produk</label>
            <input type="text" class="form-control" name="no_hp" placeholder="Enter Your Phone Number" value="{{$produk->price}}">
          </div>
          <div class="form-group">
            <label for="">Merek Name</label>
            <select name="name_merek" id="" class="form-control">
              @foreach($mereks as $c)
              <option value="<?=$c->id?>"><?=$c->name?></option>
              @endforeach
            </select>
          </div>
          <div class="form-group">
            <label for="">kategori produk</label>
            <select name="name_kategori" id="" class="form-control">
              @foreach($kategoris as $c1)
              <option value="<?=$c1->id?>"><?=$c1->name?></option>
              @endforeach
            </select>
          </div>
          <div class="form-group">
            <input type="submit" value="Edit" class="btn btn-primary">
            <a href="{{URL('/produk')}}" class="btn btn-danger">Cancel</a>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection();
