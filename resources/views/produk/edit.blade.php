@extends('layouts.app')
@section('content');
<div class="container">
  <div class="col-md">
    <div class="panel panel-default">
      <div class="panel-heading">Edit Produk</div>
      <div class="panel-body">
        <form action="{{route('produk.update', $produk->id)}}" method="post">
          {{ csrf_field() }}
          {{ method_field('PATCH') }}
          <div class="form-group">
            <label for="">Nama Produk</label>
            <input type="text" class="form-control" name="title" placeholder="Enter Your Name" value="{{$produk->title}}">
          </div>
          <div class="form-group">
            <label for="">Harga Produk</label>
            <input type="text" class="form-control" name="no_hp" placeholder="Enter Your Phone Number" value="{{$produk->price}}">
          </div>
          <div class="form-group">
            <label for="">Id Merek</label>
            <input type="text" class="form-control" name="merek_id" placeholder="Enter Merek" value="{{$produk->merek_id}}">
          </div>
          <div class="form-group">
            <label for="">Id Kategori</label>
            <input type="text" class="form-control" name="kategori_id" placeholder="Enter Kategori" value="{{$produk->kategori_id}}">
          </div>

          {{-- <div class="form-group">
            <label for="">Merek Name</label>
            <select name="name_merek" id="" class="form-control">
                @if ($produk->merek_id === $mereks->id)
                    <td>{{$mereks->name}}</td>
                @endif
              @foreach($mereks as $c)
              <option value="<?=$c->id?>"><?=$c->name?></option>
              @endforeach
            </select>
          </div> --}}
          {{-- <div class="form-group">
            <label for="">kategori produk</label>
            <select name="name_kategori" id="" class="form-control">
              @foreach($kategoris as $c1)
              <option value="<?=$c1->id?>"><?=$c1->name?></option>
              @endforeach
            </select>
          </div> --}}

          {{-- <div class="form-group">
            <label for="Kategori">Kategori</label>
            <select name="kategori_id" id="kategori_id" class="form-control">
                @foreach ($kategoris as $kategori)
                    <option value="{{ $kategori->id }}"
                            @if (isset($post))
                                @if ($kategori->id == $post->kategori_id)
                                selected
                                @endif
                            @endif
                        >
                        {{ $kategori->name }}
                    </option>
                @endforeach
            </select>
        </div> --}}

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
