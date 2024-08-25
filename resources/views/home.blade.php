@extends('layouts.master')

@section('content')
<!-- Main Content -->
<div class="container mt-5">
    <h1 class="text-center">Welcome to My Laravel Website</h1>
    <p class="lead text-center">This is a simple home page built with Laravel and Bootstrap.</p>

    <div class="row mt-4">
        @foreach ($blogs as $blog)
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <h3>{{$blog['title']}}</h3>
                        <p>{{$blog['body']}}</p>
                    </div>
                </div>
            </div>
        @endforeach
        
    </div>
</div>
@endsection