@extends('home')
@section('content')

    @if(count($books)==0)
        <h3 class="text-danger text-center">Not Data</h3>
    @else
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">List Books</a>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{route('index')}}">Home <span class="sr-only">(current)</span></a>
                    </li>
                     <li class="nav-item active">
                        <a class="nav-link" href="{{route('index')}}">List All<span class="sr-only">(current)</span></a>
                    </li>
                     <li class="nav-item active">
                        <a class="nav-link" href="{{route('create')}}">Add New<span class="sr-only">(current)</span></a>
                    </li>

                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>
        </nav>
        <h3 class="text-center mt-5">List Books</h3>
        <table class="table text-center mt-3 table table-bordered">
            <thead class="thead-dark">
            <tr>
                <th scope="col">STT</th>
                <th scope="col">Name</th>
                <th scope="col">Author</th>
                <th scope="col">Description</th>
                <th scope="col">Amount</th>
                <th scope="col">Public</th>
                <th scope="col">Show</th>
                <th scope="col">Edit</th>
                <th scope="col">Remove</th>
            </tr>
            </thead>
            <tbody>
            @foreach($books as $key =>$book)
                <tr>
                    <th scope="row">{{++$key}}</th>
                    <td>{{$book->name}}</td>
                    <td>{{$book->author}}</td>
                    <td>{{$book->description}}</td>
                    <td>{{$book->count}}</td>
                    <td>{{$book->public}}</td>
                    <td><a href="{{route('show',$book->id)}} " class="btn btn-success">Show</a></td>
                    <td><a href="{{route('edit',$book->id)}} " class="btn btn-warning">Edit</a></td>
                    <td><a href="{{route('delete',$book->id)}} " class="btn btn-danger">Remove</a></td>
                </tr>
            @endforeach
            </tbody>
        </table>
    @endif
    <div>
        <a href="{{route('create')}} " class="btn btn-info">Add New</a>
    </div>

@endsection
