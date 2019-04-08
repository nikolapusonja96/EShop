@extends('layouts.frontLayout')
@section('search')
<div class="header-search">
    <form>
        <input class="input search-input" type="text" placeholder="Enter your keyword">
        <select class="input search-categories">
            <option value="0">All Categories</option>
            <option value="1">Category 01</option>
            <option value="1">Category 02</option>
        </select>
        <button class="search-btn"><i class="fa fa-search"></i></button>
    </form>
</div>
    @endsection