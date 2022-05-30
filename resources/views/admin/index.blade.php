@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <h1 class="p-5">Ciao {{ Auth::user()->name }} ! </h1>
                <div class="card-header">{{ __('Feed') }}</div>

                <div class="card-body text-center d-flex flex-column align-items-center">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @foreach($posts as $post)
                    <div class="w-50 m-5">
                        <h3>{{$post->username}}</h3>
                        <img src="{{$post->cover_url}}" alt="{{$post->username}}">
                        <p class="p-2">{{$post->description}} </p>
                    </div>

                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
