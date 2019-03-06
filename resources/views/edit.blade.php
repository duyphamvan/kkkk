@extends('home')
@section('content')
    <h3 class="text-center">Add New Book</h3>
    <form action="{{route('update',$book->id)}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="exampleInputEmail1">Name Book</label>
            <input type="text" name="name" value="{{$book->name}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Author</label>
            <input type="text" name="author" value="{{$book->author}}" class="form-control" id="exampleInputPassword1" >
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Description</label>
            <input type="text" name="description" value="{{$book->description}}" class="form-control" id="exampleInputPassword1" >
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Amount</label>
            <input type="text" name="count" value="{{$book->amount}}" class="form-control" id="exampleInputPassword1" >
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Public</label>
            <input type="date" name="public" value="{{$book->public}}" class="form-control" id="exampleInputPassword1" >
        </div>
        <button type="submit" class="btn btn-primary">Edit</button>
    </form>

@endsection


