@extends('layouts.app')
@section('content');
<div class="container">
  <div class="col-md">
    <div class="panel panel-default">
      <div class="panel-heading">Edit Merek</div>
      <div class="panel-body">
        <form action="{{ route('merek.update',$merek) }}" method="post">
          {{ csrf_field() }}
          {{ method_field('PATCH') }}
          <div class="form-group">
            <label for="">Name</label>
            <input type="text" class="form-control" name="name_merek" placeholder="Enter Your Name" value="{{$merek->name_merek}}">
          </div>
          <div class="form-group">
            <input type="submit" value="Edit" class="btn btn-primary">
            <a href="{{URL('/merek')}}" class="btn btn-danger">Cancel</a>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection();
