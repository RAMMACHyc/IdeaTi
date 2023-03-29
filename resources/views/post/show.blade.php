@extends('layouts.app')


@section('content')
@if(session()->has('message'))
<div class="alert alert-success" role="alert">
  <center>
  {{session()->get('message')}}
  </center>
</div>
@endif
  <body>

<br>
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-8">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">{{$post->title}}</h3>
              <div>
                <h6 class="fw-bold text-primary mb-1">By : {{$post->user->name}}</h6>
                <h6 class="text-dark mb-1">On : {{date('d-m-Y',strtotime($post->updated_at))}}</h6>
                <a class="float-right toggle-buttons" href="" ><i class="fas fa-ellipsis-h"></i></a>
                @if(Auth::user() && Auth::user()->id == $post->user_id)
                <div class="d-flex me-3 buttons-container d-none">
               <a href="/post/{{$post->id}}/edit"><button class="btn btn-sm btn-primary edit-button">Edit</button></a>
                <form action="/post/{{$post->slug}}" method="POST" class="">
              @csrf
              @method('DELETE')
                <button type="submit" class="btn btn-sm btn-danger mr-1 delete-button">Delete</button>
                </form>
                @endif
               
                </div>
               
              </div>
            </div>
           
              <div class="card-body">
                
                <div class="im">
                  <center>
                  <img src="/images/{{$post->image_path}}" class="img-fluid" alt="Responsive image" >
                 </center> 
                </div>
                <div class="mt-3 mb-4 pb-2">
                <p>{{$post->description}}</></p> 
                </div>
               
               </div>

               <div class="container">
               <div class="small d-flex justify-content-start">
               
                </a>
               
            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="gray" class="bi bi-chat ml-3" viewBox="0 0 16 16">
            <path d="M2.678 11.894a1 1 0 0 1 .287.801 10.97 10.97 0 0 1-.398 2c1.395-.323 2.247-.697 2.634-.893a1 1 0 0 1 .71-.074A8.06 8.06 0 0 0 8 14c3.996 0 7-2.807 7-6 0-3.192-3.004-6-7-6S1 4.808 1 8c0 1.468.617 2.83 1.678 3.894zm-.493 3.905a21.682 21.682 0 0 1-.713.129c-.2.032-.352-.176-.273-.362a9.68 9.68 0 0 0 .244-.637l.003-.01c.248-.72.45-1.548.524-2.319C.743 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7-3.582 7-8 7a9.06 9.06 0 0 1-2.347-.306c-.52.263-1.639.742-3.468 1.105z"/>
            </svg>
            <p class="d-flex align-items-center me-3   text-decoration-none">{{ $post->commentCount() }}  </p>
               
              </div>
            </div>
            

               <section style="background-color: #f3f4f5;">
                <div class="container  my-3 text-dark">
                  
                  <div class="row d-flex justify-content-center">
                    @foreach ($post->comments as $comment)
                    <div class="col-md-11 col-lg-9 col-xl-7">
                     
                      <div class="d-flex flex-start mb-4">
                        <img class="rounded-circle shadow-1-strong me-3"
                src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRFtmCCXQ1CRqhrCgqONuYChTz9lsJL5Ru1brHzqdoFixY_cUOxIAl9n40FCdtWS_zPSFc&usqp=CAU" alt="avatar" width="40"
                           alt="avatar" width="40"
                          height="40" />
                        <div class="card w-100 h-50 ">
                          <div class="card-body p-4">
                            
                            

                            <div class="text-primary p-3 mb-2 bg-light rounded"><span class="bold">{{$comment->user->name}}</span><span class="text-dark p-1">{{ $comment->body }}</span></div>
                            <p class="text-muted" style="font-size:10px; float: right; ">{{date('d-m-Y',strtotime($post->updated_at))}}</p>
                            
                            
                        
                               
                               <div>
                                
                                  
                               </div>

                            @if(!$comment->likes()->where('user_id', Auth::id())->exists())

                              <form action="/likes" method="POST" style="display: inline;">
                                @csrf
                                
                                <input type="hidden" name="comment_id" value="{{ $comment->id }}">

                                
                                
                                    <button type="submit" class="btn btn-light"><i class="fa-solid fa-heart text-danger"></i></button>
                                
                            </form>
                            @else
                                

                              <form action="/likes/{{ $comment->id }}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                
                                <input type="hidden" name="comment_id" value="{{ $comment->id }}">

                                
                                
                                    <button type="submit" class="btn btn-light" > <i class="fas fa-thumbs-down text-primary"></i></button>
                                
                            </form>
                            @endif
                                
                            
                                
                              <span>{{ $comment->likes()->count() }} likes</span>
                               
                             
                     

                            </div>
                            </div>
                            

                          </div>
                        </div>
                        
                      </div>
              
                      @endforeach
                    </div>
                    
                  </div>
                </div>
                {{-- @endforeach --}}
              </section>
             
             </div>
            
             
          </div>
       </div>

    </div>

    
@endsection

<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />


 