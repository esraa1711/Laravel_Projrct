
@extends('layout')
@section("title")
Create
@endsection
@section('content')



    <form method="POST" action="{{route('posts.store')}}" >
        @csrf
        <div class="mb-3">
          <label class="form-label">title</label>
          <input type="text" class="form-control" name="title">
        </div>
        <div class="mb-3">
          <label  class="form-label">desc</label>
          <textarea name="desc" id="" cols="30" rows="10" class="form-control"></textarea>
        </div>
        <div class="mb-3">
            <label class="form-label">creator</label>
            <select name="creator" id=""class="form-control" >
                @foreach ($Users as $user)
                <option value="{{$user->id}}">{{$user->name}}</option>

                @endforeach


            </select>
          </div>
        <button type="submit" class="btn btn-success">Submit</button>
      </form>

      @endsection
