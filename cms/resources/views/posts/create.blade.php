@extends('layouts.app')

@section('pageName') Create @endsection

@section('content')

@if ($errors->any())

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

    <div class="alert alert-danger">
        <ul>
             
                <li>errors</li>
            
        </ul>
    </div>
@endif

<form method="POST" action="{{route('posts.store')}}" class="m-5">
    @csrf

    <div class="form-group">
      <label for="exampleInputEmail1">Title</label>
      <input name="title" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>

    <div class="form-group">
      <label for="exampleInputPassword1">Description</label>
      <textarea name="description" class="form-control"></textarea>
    </div>

    <div class="form-group">
        <label for="exampleInputPassword1">Post Creator</label>
        <select name="post_creator" class="form-control ">
           @foreach ($users as $user)
            <option value="{{$user=>id}}"> {{$user=>name}}</option>
         
        </select>
      </div>

    <button type="submit" class="btn btn-success">Submit</button>
  </form>
@endsection
