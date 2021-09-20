@extends('layouts.app')

@section('content')
    <div class="m-auto w-4/8 py-24">
        <div class="text-center">
            <h1 class="text-5xl uppercase bold">
                Add a movie
            </h1>

        </div>
    </div>
    <div class="d-flex justify-content-center pt-20">
        <form action="/movies" method="POST">
            @csrf
            <div class="form-group">
                
                    <label for="movie_name">Movie Name</label>
                    <input type="text" class="form-control block shadow-5xl p-2 w-80 italic placeholder-gray-400"
                    id ="movie_name"
                    name="name"
                    placeholder="The greate gatspy">
               
            </div>
            <div class="form-group">
                
                <label for="movie_description">Movie description</label>
                <textarea type="field" name ="description" class="form-control w-1000 h-auto" rows="5" id="movie_description"></textarea>
           
        </div>
            <div class="form-group">
                
            <label for="movie_rating">rating (range 0.0 to 5.0)</label>
            <input type="numeric" class="form-control block shadow-5xl p-2 w-80 italic placeholder-gray-400"
            id ="movie_rating"
            name="rating"
            placeholder="4.1">
       
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        
    </div>
    @if ($errors->any())
            <div class="m-auto text-center">
                <ul class="list-group">
                @foreach ($errors->all() as $error )
                <li class="text-danger">
                    {{ $error }}
                </li>    
                @endforeach
            </ul>
            </div>
            
     @endif  

@endsection