@extends('layouts.app')

@section('content')

<table class="table table-striped table-dark">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Code_id</th>
        <th scope="col">Quality</th>
        <th scope="col">Total</th>
        <th scope="col">Customer_id</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($orders as $order)          
        <tr>
        <th scope="row">{{$order->id}}</th>
        <td>{{$order->code_id}}</td>
        <td>{{$order->quality}} </td>
        <td>{{$order->total}}</td>
        <td>{{$order->customer_id}}</td>
      </tr>
      @endforeach
    </tbody>
  </table>

  @endsection