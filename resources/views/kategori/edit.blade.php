@extends('layouts.app')
@section('content');
<div class="container">
  <div class="col-md">
    <div class="panel panel-default">
      <div class="panel-heading">Edit Kategori</div>
      <div class="panel-body">
        <form action="{{ route('kategori.update',$kategori) }}" method="post">
          {{ csrf_field() }}
          {{ method_field('PATCH') }}
          <div class="form-group">
            <label for="">Name</label>
            <input type="text" class="form-control" name="name" placeholder="Enter Your Name" value="{{$kategori->name}}">
          </div>
          <div class="form-group">
            <input type="submit" value="Edit" class="btn btn-primary">
            <a href="{{URL('/kategori')}}" class="btn btn-danger">Cancel</a>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection();
