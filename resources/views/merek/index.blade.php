@extends('layouts.app')
@section('content')
  <div class="container">
    <div class="row">
        <div class="col-md-3">
            @include('layouts.sidebar')
        </div>
      <div class="col-md">
        <a href="{{ url('/merek/create') }}" class="btn btn-primary">Tambah Merek <i class="fa fa-plus"></i></a>
        <h1></h1>
        <table class="table">
          <thead>
            <tr>
              <th>No</th>
              <th>Name Merek</th>
              <th>Option</th>
            </tr>
          </thead>
          <tbody>
            @foreach($mereks as $merek)
            <tr>
              <td>{{ $no++ }}</td>
              <td>{{ $merek->name_merek }}</td>
              <td>
                <a href="{{ route('merek.edit', $merek) }}" class="btn btn-success btn-sm" style="float:left;">Edit</a>
                    <form action="{{ route('merek.destroy',$merek) }}" method="post">
                        {{ csrf_field() }}
                        <input type="hidden" name="_method" value="DELETE">
                        <button type="submit" class="btn btn-danger btn-sm" style="margin-left:3px;">Hapus</button>
                    </form>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
@endsection()
