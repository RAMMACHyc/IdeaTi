@extends('layouts.app')

@section('content')
@if(session()->has('message'))
<div class="alert alert-danger" role="alert">
  <center>
  {{session()->get('message')}}
  </center>
</div>
@endif
<center>
  <div>
  <h1 style="font-family: 'Lobster Two', cursive; margin-top: 3%;">All Posts</h1>
</div>
</center>

  @if(Auth::check())
  <center>
  <div class="d-flex justify-content-center">
  <div class="" style="background-color: #fff; padding: 10px 15px; border: 1px;border-radius: 19px 0px 0px 19px;width: 23%;">what's on your mind?</div>
  <a href="/post/create" class="" style="background-color: #87CEEB; color: #ffffff; font-weight: bold; border: none; padding: 15px 15px ;  text-decoration: none; border-radius: 10px 0px; ">
    <i class="fas fa-plus-circle"></i>
  </a>
  
</div>

    
  </center>
  @endif
@foreach ($posts as $post)

<section style="background-color: #f8fafc;">
  <div class="container my-5 py-5">
  
    <div class="row d-flex justify-content-center">
      <div class="col-md-12 col-lg-10 col-xl-8">
        <div class="card">
          <div class="card-body">
            <div class="d-flex flex-start align-items-center">
              <img class="rounded-circle shadow-1-strong me-3"
                src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRFtmCCXQ1CRqhrCgqONuYChTz9lsJL5Ru1brHzqdoFixY_cUOxIAl9n40FCdtWS_zPSFc&usqp=CAU" alt="avatar" width="60"
                height="60" />
             
              <div>
                <h5 class="fw-bold text-primary mb-1">{{$post->user->name}}</h5>
               <div style="display:flex;">
               <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="gray" class="bi bi-bookmarks mx-1" viewBox="0 0 16 16">
  <path d="M2 4a2 2 0 0 1 2-2h6a2 2 0 0 1 2 2v11.5a.5.5 0 0 1-.777.416L7 13.101l-4.223 2.815A.5.5 0 0 1 2 15.5V4zm2-1a1 1 0 0 0-1 1v10.566l3.723-2.482a.5.5 0 0 1 .554 0L11 14.566V4a1 1 0 0 0-1-1H4z"/>
  <path d="M4.268 1H12a1 1 0 0 1 1 1v11.768l.223.148A.5.5 0 0 0 14 13.5V2a2 2 0 0 0-2-2H6a2 2 0 0 0-1.732 1z"/>
</svg>
                <p class="text-muted small mb-1">
                  Category :
                
                  {{$post->title}}
                
               
                </p>
     
              </div>
                <div style="display:flex;"><svg xmlns="http://www.w3.org/2000/svg"  width="14" height="14" fill="gray" class="bi bi-clock mx-1" viewBox="0 0 16 16">
  <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z"/>
  <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z"/>
</svg><h6 class=" small mx-1 mb-0" style="color: #949494;">On : {{date('d-m-Y',strtotime($post->updated_at))}}</h6></div>
                
              </div>
            </div>

            <p class="mt-3 mb-4 pb-2">
             {{$post->description}}
            </p>
            <center>
              <div class="im">
                <img src="/images/{{$post->image_path}}" class="img-fluid" alt="Responsive image"  >
              </div><br> </center>
              
            <div class="small d-flex justify-content-start">
              
            </a>
            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="gray" class="bi bi-chat ml-3" viewBox="0 0 16 16">
            <path d="M2.678 11.894a1 1 0 0 1 .287.801 10.97 10.97 0 0 1-.398 2c1.395-.323 2.247-.697 2.634-.893a1 1 0 0 1 .71-.074A8.06 8.06 0 0 0 8 14c3.996 0 7-2.807 7-6 0-3.192-3.004-6-7-6S1 4.808 1 8c0 1.468.617 2.83 1.678 3.894zm-.493 3.905a21.682 21.682 0 0 1-.713.129c-.2.032-.352-.176-.273-.362a9.68 9.68 0 0 0 .244-.637l.003-.01c.248-.72.45-1.548.524-2.319C.743 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7-3.582 7-8 7a9.06 9.06 0 0 1-2.347-.306c-.52.263-1.639.742-3.468 1.105z"/>
            </svg>
            <p class="d-flex align-items-center me-3   text-decoration-none">{{ $post->commentCount() }}  </p>
            </div>
            
          </div>

       
          <form  method="POST" action="/comments">
            @csrf
           
          <div class="card-footer py-3 border-0" style="background-color: #f8f9fa;">
            <div class="d-flex flex-start w-100">
              <img class="rounded-circle shadow-1-strong me-3"
                src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRFtmCCXQ1CRqhrCgqONuYChTz9lsJL5Ru1brHzqdoFixY_cUOxIAl9n40FCdtWS_zPSFc&usqp=CAU" alt="avatar" width="40"
                height="40" />
              <div class="form-outline w-100">
                <textarea class="form-control" id="textAreaExample" rows="4"
                  style="background: #fff;" name="body" placeholder="Comment"></textarea>
                  <input type="hidden" name="post_id" value="{{$post->id}}" >
                
              </div>
            </div>
            <div class="float-end mt-2 pt-1">
            <a href="/post/{{$post->id}}" class="btn btn-dark ">
    <svg fill="#ffff" height="18" width="18" viewBox="0 0 512.011 512.011" xmlns="http://www.w3.org/2000/svg">
        <g>
            <g>
                <g>
                    <path d="M505.755,240.92l-89.088-89.088c-88.576-88.597-232.747-88.597-321.323,0L6.256,240.92c-8.341,8.341-8.341,21.824,0,30.165l89.088,89.088c44.288,44.288,102.464,66.453,160.661,66.453s116.373-22.165,160.661-66.453l89.088-89.088C514.096,262.744,514.096,249.261,505.755,240.92z M256.005,362.669c-58.816,0-106.667-47.851-106.667-106.667s47.851-106.667,106.667-106.667s106.667,47.851,106.667,106.667S314.821,362.669,256.005,362.669z"/>
                    <path d="M256.005,192.003c-35.285,0-64,28.715-64,64s28.715,64,64,64s64-28.715,64-64S291.291,192.003,256.005,192.003z"/>
                </g>
            </g>
        </g>
    </svg>
  
</a>

<button type="submit" class="btn ">

  <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-send-fill" viewBox="0 0 16 16">
    <path d="M15.964.686a.5.5 0 0 0-.65-.65L.767 5.855H.766l-.452.18a.5.5 0 0 0-.082.887l.41.26.001.002 4.995 3.178 3.178 4.995.002.002.26.41a.5.5 0 0 0 .886-.083l6-15Zm-1.833 1.89L6.637 10.07l-.215-.338a.5.5 0 0 0-.154-.154l-.338-.215 7.494-7.494 1.178-.471-.47 1.178Z"/>
  </svg>
</button>

              <button type="button" class="btn btn-outline-primary btn-sm">Cancel</button>
            </div>
          </div>
        </form>
        </div>
      </div>
    </div>
  </div>
</section>

    
@endforeach

@endsection
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
 