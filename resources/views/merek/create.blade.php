
@extends('layouts.app')
@section('content')
<div class="container">
  <div class="row">
    <div class="col-md">
      <div class="panel panel-default">
        <div class="panel-heading">Create New Merek</div>
        <div class="panel-body">
          <form action="{{ url('/merek/create') }}" method="post">
            {{ csrf_field() }}
            <div class="form-group">
              <label for="">Name</label>
              <input type="text" class="form-control" name="name_merek" placeholder="Enter Name Merek">
            </div>
            <div class="form-group">
              <input type="submit" value="Save" class="btn btn-primary">
              <a href="{{URL('/merek')}}" class="btn btn-danger">Back</a>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
</div>
@endsection()
