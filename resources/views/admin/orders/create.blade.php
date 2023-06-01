@extends('layouts.admin')
@section('content')
<div class="py-3">
    <form action="{{url('orders/store')}}" method="post">
@csrf
        <div class="mb-3">
            <label for="nameFormControlInput" class="form-label">الزبون</label>
            <input type="number" class="form-control" id="user_id" name="user_id" placeholder="الزبون">
        </div>

        <div class="mb-3">
            <label for="nameFormControlInput" class="form-label">المنتج</label>
            <input type="number" class="form-control" id="product_id" name="product_id" placeholder="المنتج">
        </div>

        <div class="mb-3">
            <label for="nameFormControlInput" class="form-label">الكمية</label>
            <input type="number" class="form-control" id="quantity" name="quantity" placeholder="الكمية">
        </div>

        <div class="mb-3">
            <input type="submit" value="احفظ" class="btn btn-info">
        </div>
    </form>
</div>

@endsection
