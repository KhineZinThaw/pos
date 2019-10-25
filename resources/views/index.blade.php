@extends('layouts.app')

@section('content')

<table class="table table-striped table-dark">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Price</th>
        <th scope="col">Size</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($items as $item)          
        <tr>
        <th scope="row">{{$item->id}}</th>
        <td>{{$item->name}}</td>
        <td>{{$item->price}} </td>
        <td>{{$item->size}}</td>
      </tr>
      @endforeach
    </tbody>
  </table>

  @endsection