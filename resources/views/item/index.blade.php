@extends('layouts.app')

@section('content')
<div>
  <a href="/item/create" class="btn btn-success float-right" >+ New Item</a>
</div>
<table class="table table-striped table-dark">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Price</th>
        <th scope="col">Size</th>
        <th scope="col">Image</th>
        <th scope="col">Action</th>

      </tr>
    </thead>
    <tbody>
        @foreach ($items as $item)          
        <tr>
        <th scope="row">{{$item->id}}</th>
        <td>{{$item->name}}</td>
        <td>{{$item->price}} </td>
        <td>{{$item->size}}</td>
        <td>
        <div>
        <img width="100" height="100" src="/storage/image/{{ $item->image }}" alt="item-image">
          </div>
        </td>
        <td>
        <form method="POST" action="/item/{{ $item->id }}">
          @csrf
          @method('delete')
          <input class="btn btn-danger" type="submit" value="Del">
        </form>
          
        <a class="btn btn-info" href="/item/{{$item->id}}/edit">Update</a>
        {{-- <a href="{{ route('item.update', ['id'=>$item->id]) }}"></a> --}}
        </td>
      </tr>
      @endforeach
    </tbody>
    </table>
    <div class="container">
      @foreach ($items as $item)
      @endforeach
  </div>
   {{ $items->links() }}
@endsection