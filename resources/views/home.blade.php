@extends('layouts.master')

@section('content')
<!-- Main Content -->
<main role="main" class="container">
    {{-- <div class="row mt-5">
        @foreach ($users as $user)
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h4>{{$user->name}}</h4>
                        <p>{{$user->email}}</p>
                        <p>{{$user->address}}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div> --}}
    <div class="card-body">
        <form action="{{route('upload-file')}}" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label for="">Upload</label>
                <input type="file" name="image" class="form-control">
            </div>
            <div class="form-group">
                <button type="submit">Submit</button>
            </div>
        </form>
    </div>
</main>
@endsection
