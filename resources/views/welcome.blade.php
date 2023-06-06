@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('Selamat datang!') }}
                </div>
            </div>
        </div>
    </div>
    <button><a href="{{route('product')}}" class="button">Product</a></button>
        <button><a href="{{route('news', 'covid-19')}}" class="button">News</a></button>
        <button><a href="{{route('program')}}" class="button">Program</a></button>
        <button><a href="{{route('about-us')}}" class="button">About Us</a></button>
        <button><a href="{{route('contact-us.index')}}" class="button">Contact Us</a></button>
</div>
@endsection
