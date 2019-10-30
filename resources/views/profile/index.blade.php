@extends('layouts.app')

@section('content')

<table class="table table-striped table-dark">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Customer_id</th>
        <th scope="col">Level</th>
        <th scope="col">Picture</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($profiles as $profile)          
        <tr>
        <th scope="row">{{$profile->id}}</th>
        <td>{{$profile->customer_id}}</td>
        <td>{{$profile->level}} </td>
        <td>{{$profile->pic}}</td>
      </tr>
      @endforeach
    </tbody>
  </table>

  @endsection