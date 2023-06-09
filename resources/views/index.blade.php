@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="{{ asset('/css/app.css') }}">
{{-- <link rel="stylesheet" href="{{ asset('/css/app.css') }}"> --}}
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
 


<center>
  <div style="display:flex; justify-content: center;">
  <h1 style="font-family: 'Lobster Two', cursive; ">Welcome Your Idea</h1>


  
</div>

<div
><svg width="180" height="180" xmlns="http://www.w3.org/2000/svg">
 <g fill-rule="nonzero" fill="none" id="Page-1">
  <rect rx="4" height="127" width="177" y="44.5" x="1.5" fill="#D8D8D8" fill-opacity="0" stroke-width="3" stroke="#4A4A4A" id="Rectangle-30"/>
  <path stroke="#4A4A4A" stroke-linecap="round" stroke-width="3" id="Line-2" d="m39.75007,100.0001c1.41334,4.02187 5.37168,6.03281 11.87504,6.03281c6.50335,0 10.4617,-2.01094 11.87504,-6.03281"/>
  <path stroke="#4A4A4A" stroke-linecap="round" stroke-width="3" id="Line-2-Copy" d="m125.75001,100.0001c1.35383,4.02187 5.14551,6.03281 11.37505,6.03281c6.22954,0 10.02122,-2.01094 11.37505,-6.03281"/>
  <path stroke-linecap="round" stroke-width="3" stroke="#4A4A4A" id="Line-2-Copy-2" d="m89.25006,110.25009c0.83312,3.33333 3.16645,5 7,5c3.83355,0 6.16688,-1.66667 7,-5"/>
  <path stroke-linecap="square" stroke-width="3" stroke="#4A4A4A" id="Line" d="m1.5,66.25l177,0"/>
  <circle r="3.5" cy="55.5" cx="38.5" fill="#4A4A4A" id="Oval"/>
  <circle r="3.5" cy="55.5" cx="25.5" fill="#4A4A4A" id="Oval-Copy"/>
  <circle r="3.5" cy="55.5" cx="12.5" fill="#4A4A4A" id="Oval-Copy-2"/>
  <path fill="#4A4A4A" id="Shape" d="m134.31116,18.65421c-0.76424,0 -1.31116,-0.41883 -1.31116,-1.20191c0,-0.69257 0.65617,-1.20247 1.31116,-1.20247l7.15856,0c0.96575,0 1.53028,0.5463 1.53028,1.31178c0,0.3642 -0.12748,0.7284 -0.3642,1.0562l-5.86502,8.1965l4.78997,0c0.72902,0 1.27476,0.41882 1.27476,1.1655c0,0.69201 -0.58276,1.23831 -1.27476,1.23831l-6.66684,0c-1.05564,0 -1.52909,-0.67378 -1.52909,-1.31116c0,-0.40065 0.16388,-0.85588 0.40003,-1.1655l5.82919,-8.08725l-5.28288,0z"/>
  <path fill="#4A4A4A" id="Shape-Copy" d="m150.36218,11.78936c-0.64824,0 -1.11215,-0.35526 -1.11215,-1.01948c0,-0.58746 0.55658,-1.01997 1.11215,-1.01997l6.07207,0c0.81916,0 1.29801,0.46339 1.29801,1.11268c0,0.30892 -0.10813,0.61785 -0.30892,0.8959l-4.97485,6.95245l4.06296,0c0.61838,0 1.08128,0.35526 1.08128,0.98861c0,0.58697 -0.4943,1.05036 -1.08128,1.05036l-5.65496,0c-0.89542,0 -1.29701,-0.57151 -1.29701,-1.11215c0,-0.33985 0.139,-0.72598 0.33932,-0.98861l4.94445,-6.85979l-4.48107,0z"/>
  <path fill="#4A4A4A" id="Shape-Copy-2" d="m164.16783,7.18289c-0.53496,0 -0.91781,-0.29318 -0.91781,-0.84134c0,-0.4848 0.45932,-0.84173 0.91781,-0.84173l5.011,0c0.67602,0 1.07119,0.38241 1.07119,0.91824c0,0.25494 -0.08923,0.50989 -0.25494,0.73935l-4.10551,5.73754l3.35297,0c0.51032,0 0.89233,0.29318 0.89233,0.81586c0,0.4844 -0.40792,0.86681 -0.89233,0.86681l-4.66678,0c-0.73895,0 -1.07037,-0.47164 -1.07037,-0.91781c0,-0.28045 0.11472,-0.59911 0.28003,-0.81585l4.08043,-5.66107l-3.69802,0z"/>
 </g>
</svg>
</div>
<div class="d-flex justify-content-center my-4">
  <p style="color: #676767;">the exchange of ideas is crucial to progress and innovation</p>
</div>
@if(Auth::check())
<div class="d-flex justify-content-center my-4">
  <div class="" style="background-color: #eef4ff6e; padding: 10px 15px; border: 1px;border-radius: 19px 0px 0px 19px;width: 23%;">what's on your mind?</div>
  <a href="/post/create" class="" style="background-color: #87CEEB; color: #ffffff; font-weight: bold; border: none; padding: 15px 15px ;  text-decoration: none; border-radius: 10px 0px; ">
    <i class="fas fa-plus-circle"></i>
  </a>
  
</div>
@endif


</center>

@endsection