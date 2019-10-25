@extends('layouts.app')

@section('content')

<table class="table table-striped table-dark">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Description</th>
        
      </tr>
    </thead>
    <tbody>
        @foreach ($categories as $category)          
        <tr>
        <th scope="row">{{$category->id}}</th>
        <td>{{$category->name}}</td>
        <td>{{$category->description}} </td>
      </tr>
      @endforeach
    </tbody>
  </table>

  @endsection