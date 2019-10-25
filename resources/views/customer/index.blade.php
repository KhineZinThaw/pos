@extends('layouts.app')

@section('content')

<table class="table table-striped table-dark">
    <div>
    <div class="float-right"><a class="btn btn-success" href="{{ route('customer.create') }}">New Customer</a></div>
    
    </div>
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">Password</th>
        <th scope="col">Phone No:</th>
        <th scope="col">Address</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($customers as $customer)          
        <tr>
        <th scope="row">{{$customer->id}}</th>
        <td>{{$customer->name}}</td>
        <td>{{$customer->email}} </td>
        <td>{{$customer->password}}</td>
        <td>{{$customer->phone_no}}</td>
        <td>{{$customer->address}}</td>
      </tr>
      @endforeach
    </tbody>
  </table>

  @endsection