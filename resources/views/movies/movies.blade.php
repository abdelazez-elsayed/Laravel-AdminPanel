@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }} 
                    
                      <button type="button" onclick="location.href = 'movies/create';" class="btn btn-outline-secondary float-right" id="addBtn">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-square" viewBox="0 0 16 16">
                        <path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"></path>
                        <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"></path>
                        </svg>
                                        
                      </button>
                </div>
                
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status')  }}
                            
                        </div>
                    @endif
                    
                    
                    <div class="container py-0">

                        <!-- For demo purpose -->
                        
                        <!-- End -->
                      
                        <div class="row">
                          <div class="col-lg-8 mx-auto">
                      
                            <!-- List group-->
                            <ul class="list-group">
                      
                              <!-- list group item-->
                              @foreach ($movies as $movie)
                                  
                              
                              <li class="list-group-item" id="{{ $movie->id }}">
                                <!-- Custom content-->
                                <div class="media align-items-lg-center  flex-lg-row">
                                    
                                  <div class="media-body order-2 order-lg-1">
                                    <h5 class="mt-0 font-weight-bold mb-2">{{ $movie->name }}</h5>
                                    <p class="font-italic text-muted mb-0 small">{{ $movie->description }}</p>
                                    <p class="text small">rating :{{ $movie->rating }}</p>
                                    <button type="button" onclick="location.href = 'movies/{{ $movie->id }}/edit';" class="btn btn-outline-secondary float-right">
                                        <svg xmlns="http://www.w3.org/2000/svg"  width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                        <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"></path>
                                        <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"></path>
                                        </svg>
                                
                                    </button>
                                    <form action="/movies/{{ $movie->id }}" method="POST">
                                      @csrf
                                      @method('delete')
                                      <button type="submit" class="btn btn-outline-secondary float-right" id="deleteBtn{{ $movie->id }}">
                                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                          <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"></path>
                                          <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"></path>
                                          </svg>
                  
                                      </button>
                                  </form>
                                    
                                </div>
                                <!-- End -->
                              </li>
                              <!-- End -->
                              @endforeach
                      
                             
                      
                              <!-- list group item -->
                              
                      
                            </ul>
                            <!-- End -->
                          </div>
                        </div>
                      </div>
                        
                    
                   
                    
                </div>
            </div>
        </div>
    </div>
</div>
@push('scripts')
<script src="{{ asset('js/movies.js')}}" defer></script>

@endpush


@endsection
