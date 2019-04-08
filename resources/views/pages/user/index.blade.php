@extends('layouts.frontLayout')
@section('title')
    <title>E-SHOP | Home</title>
@endsection
@section('slider')
    @include('components.user.slider')
@endsection

@section('section_top')
    @include('components.user.new_collection')
@endsection

@section('section_bottom')
   @include('components.user.latest_products')
@endsection
