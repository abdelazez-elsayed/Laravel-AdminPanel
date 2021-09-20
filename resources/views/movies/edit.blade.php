@extends('layouts.app')

@section('content')
    <div class="m-auto w-4/8 py-24">
        <div class="text-center">
            <h1 class="text-5xl bold">
                Edit movie
            </h1>

        </div>
    </div>
    <div class="d-flex justify-content-center pt-20">
        <form action="/movies/{{ $movie->id }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                
                    <label for="movie_name">Movie Name</label>
                    <input type="text" class="form-control block shadow-5xl p-2 w-80 italic placeholder-gray-400"
                    id ="movie_name"
                    name="name"
                    value="{{ $movie->name }}">
               
            </div>
            <div class="form-group">
                
                <label for="movie_description">Movie description</label>
                <textarea type="field"  name ="description" class="form-control w-1000 h-auto" rows="5" id="movie_description">{{ $movie->description }}</textarea>
             </div>
            <div class="form-group">
                
            <label for="movie_rating">rating (range 0.0 to 5.0)</label>
            <input type="numeric" class="form-control block shadow-5xl p-2 w-80 italic placeholder-gray-400"
            id ="movie_rating"
            name="rating"
            value="{{ $movie->rating }}">
       
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection