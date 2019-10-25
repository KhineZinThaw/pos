@extends('layouts.app')

@section('content')

<table class="table table-striped table-dark">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Description</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($categories as $category)          
        <tr>
        <th scope="row">{{$category->id}}</th>
        <td>{{$category->name}}</td>
        <td>{{$category->description}} </td>
        <td>
            <form method="POST" action="/category/{{ $category->id }}">
              @csrf
              @method('delete')
              <input class="btn btn-danger" type="submit" value="Del">
            </form>
              
            <a class="btn btn-info" href="/category/{{$category->id}}/edit">Update</a>
            {{-- <a href="{{ route('item.update', ['id'=>$item->id]) }}"></a> --}}
            </td>
      </tr>
      @endforeach
    </tbody>
  </table>

  @endsection