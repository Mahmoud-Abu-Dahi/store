@extends('layouts.admin')
@section('content')
<div class="py-5">
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">الزبون</th>
            <th scope="col">المنتج</th>
            <th scope="col">الكمية</th>
            <th scope="col">الاحداث</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($orders as $order)
            <tr>
                <th scope="row">1</th>
                <td>{{$order->user_id}}</td>
                <td>{{$order->porduct_id}}</td>
                <td>{{$order->quantity}}</td>
                <td>
                    <a href="{{url('orders/delete/'.$order->id)}}" class="btn btn-danger">احدف</a>
                    <a href="{{url('orders/edit/'.$order->id)}}" class="btn btn-info">تعديل</a>
                </td>
              </tr>
            @endforeach


        </tbody>
      </table>
</div>
@endsection
