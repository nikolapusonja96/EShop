@extends('layouts.frontLayout')
@section('title')
    <title>E-SHOP | My Orders</title>
@endsection
@section('section_top')
    @include('components.user.showUserOrders')
@endsection