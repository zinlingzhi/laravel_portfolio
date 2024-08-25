@extends('layouts.master')

@section('content')

<div class="row mt-5 justify-content-center">
    <div class="col-md-4">
        <h2 class="mb-4">Login</h2>
        @if ($errors->any()) 
            @foreach ($errors->all() as $error)
                <div class="alert alert-danger">{{$error}}</div>
            @endforeach
        @endif
        <div class="card">
            <div class="card-body">
                <form action="{{route('login.submit')}}" method="POST">
                    @csrf
                    <div class="mb-2">
                        <label for="name" class="form-label">User Name</label>
                        <input name="name" type="text" class="form-control">
                    </div>
                    <div class="mb-2">
                        <label for="email" class="form-label">User Email</label>
                        <input name="email" type="email" class="form-control">
                    </div>
                    <div class="mb-2">
                        <label for="password" class="form-label">User Password</label>
                        <input name="password" type="password" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
        
    </div>
</div>
@endsection