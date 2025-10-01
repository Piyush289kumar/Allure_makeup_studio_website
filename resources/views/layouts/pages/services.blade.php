@extends('layouts.app')
@section('title', 'Our Services')
@section('content')
    <div class="breadcumb-wrapper" data-bg-src="assets/img/breadcumb/breadcumb-1.jpg">
        <div class="container z-index-common">
            <div class="breadcumb-content text-center">
                <h1 class="breadcumb-title">Our Services</h1>
                <div class="breadcumb-menu-wrap">
                    <ul class="breadcumb-menu">
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li class="active">Our Services</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    @include('layouts.components.services')
    @include('layouts.components.offer')
    @include('layouts.components.discover')
    @include('layouts.components.testimonials')
@endsection
