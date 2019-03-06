@extends('home')
@section('content')
    <div class="text-center">
        <h3 class="text-dark mt-5">Book</h3>
        <div class="col-sm-4 offset-4">
            <div class="card text-center" style="width: 18rem;">
                {{--//{{dd($book)}}--}}
                <div class="card-body">
                    <h5 class="card-title">Name: {{$book->name}}</h5>
                    <h6 class="card-subtitle mb-2 text-muted">Author: {{$book->author}}</h6>
                    <p class="card-text">Description: {{$book->description}}</p>
                    <p>Amount: {{$book->count}}</p>
                    <p>Public: {{$book->public}}</p>
                </div>
            </div>
        </div>
        <a href="{{route('index')}}" class="btn btn-success mt-3">Back</a>
    </div>
@endsection
