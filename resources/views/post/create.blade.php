
@extends('layouts.app')


@section('content')
<center>
<div class="d-flex justify-content-center">
  <div class="" style="background-color: #fff; padding: 10px 15px; border: 1px;border-radius: 19px 0px 0px 19px;width: 23%;">what's on your mind?</div>
  <a href=""  style="background-color: #87CEEB; color: #ffffff; font-weight: bold; border: none; padding: 15px 15px ;  text-decoration: none; border-radius: 10px 0px; ">
    <i class="fas fa-plus-circle"></i>
  </a>
  
</div>
    
  </center>
  <body>
<br>
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-8">
          <div class="card">
            <div class="card-header">
              <h3 style="font-family: 'Lobster Two', cursive;" class="card-title">Post your idea</h3>
            </div>
    <div class="card-body">
      <form  action="/post" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
          <label for="description" >Description</label>
          <textarea class="form-control" id="description" name="description"></textarea>
         
        </div>
        {{-- <div class="form-group">
          <label for="title" >Titre</label>
          <textarea class="form-control" id="description" name="title"></textarea>
        </div> --}}
        
       <div class="form-group">
          <label for="categorie" >Catégorie</label>
          <select class="form-control" id="categorie" name="title">
            <option value="">Sélectionner une catégorie</option>
            <option value="Technologie">Technologie</option>
            <option value="Art">Art</option>
            <option value="Musique">Musique</option>
            <option value="Design">Design</option>
          </select>
        </div> 
        <br>
        <div class="form-group">
          {{-- <label for="image" >Image</label> --}}
          <div class="input-group">
  <div class="input-group-prepend">
    <span class="input-group-text">
      <svg fill="#000000" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="16" height="16" viewBox="0 0 485.561 485.561" xml:space="preserve">
        <g>
          <g>
            <path d="M369.697,359.053V116.682C369.697,47.982,326.765,0,265.297,0h-47.493C156.83,0,115.862,46.89,115.862,116.682c0,0,0,269.708,0,269.8c0,53.341,43.439,99.078,97.031,99.025c0.684,0.014,1.36,0.053,2.047,0.053c53.809,0,97.703-43.125,99.078-96.62V200.612c0-39.487-29.852-70.419-67.963-70.419h-7.368c-37.345,0-65.508,30.274-65.508,70.419v156.394h36.847V200.612c0-16.711,8.861-33.573,28.658-33.573h7.37c17.738,0,31.115,14.433,31.115,33.573v185.87c0,34.313-27.916,62.23-62.23,62.23c-18.405,0-34.962-8.038-46.367-20.781c-9.177-11.877-15.862-30.354-15.862-59.053v-252.2c0-58.863,33.627-79.833,65.097-79.833h47.492c46.663,0,67.553,40.096,67.553,79.833v242.372h36.849v0.002H369.697z"/>
          </g>
        </g>
      </svg>
    </span>
  </div>
  <input type="file" class="form-control-file" id="images" name="image">
</div>

        </div> <br>
        <button type="submit" class="btn btn-primary">Publier</button>
      </form>
    </div>
  </div>
</div>
</div>
</div>

@endsection