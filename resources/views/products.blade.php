@extends('app')
@section('title')
اكورد | صفحة المنتج 
@endsection
@section('css')
<link rel="stylesheet" href="{{asset('assets/css/products.css')}}">
@endsection
@section('content')
<div class="container containerwedth" >
           <div class="hedd"><img src="{{asset('assets/images/Screenshot 2023-09-26 135853.png')}}" alt=""></div>
         <div class="links">
          <a href="#">الرئيسة </a> <p>/</p>
          <a href="#">صالات الافراح </a> <p>/</p>
          <a href="#">قاعة افراح </a> <p>/</p>
          <a href="">صالة اللوتس</a>
        </div>
        <div class="container allplus">
           <div class="allsec"> 
         <div id="carouselExampleInterval" class="carousel slide wid" data-bs-ride="carousel">
              <div class="carousel-inner ">
                @foreach ($images as $index => $image)
                <div class='carousel-item @if($index==0) active @endif 'data-bs-interval="10000">
                <img src='{{asset("assets/images/$image.png")}}' class="d-block w-100 " alt="..."> 
                  <div class="carousel-caption">
                  <h5 class="contener-pages text-white m-auto text-nowrap fw-bold w-25">
                    {{ $index + 1 }} من   {{ count($images)}} 
                  </h5>
                 </div>
               
                 
                </div>
                @endforeach
              </div>
              <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>
            <div class="lotes">
              <p># {{$id}}</p>
              <h2> {{$name}}</h2>
              <p>السعر : {{$price}} <i class="fa-solid fa-shekel-sign"></i></p>
  
              <p>اسم المورد :صالة اللوتس للافراح <i class="fa-solid fa-eye"></i>
              </p>
              <br>
              <br>
            </div>
            <div class="description">
              <h5  style="color:rgb(57, 53, 53) ;">الوصف </h5>
              <p style="font-size:small ; font: weight 900px ;">
              {{$descrebtion}}
            </p>

             
            </div>
           <div class="tab">
            
            <table class="table size">
              
              <thead>
                <tr><th style="color: rgb(57, 53, 53); font-size:large">المواصفات </th> 
                <th></th></tr>
                <tr>
                  <th scope="col" style=" font-size:small" >نوع الصفة </th>
                  <th scope="col" style=" font-size:small">قيمة الصفة </th>
                  
                </tr>
              </thead>
              <tbody>
                @foreach ($tables as $key => $table)
                <tr>
                  
                  <td>{{$key}}</td>
                  <td> {{$table}}</td>
                  
                </tr>
                <tr>
                  @endforeach

              </tbody>
            </table>
           </div>
           <div class="description " style="border-top: 0.3rem solid #a72ca7; margin-top: 20px;">
              <h5 style="color:rgb(57, 53, 53) ;">تفاصيل اضافية  </h5>
              <p style="font-size:small ; font: weight 900px ;">
              {{$Additional}}
            </p>
              
            </div>
          </div>
  
          <div class="sec">
            <div class="imges">
              <img src="{{asset('assets/images/04.png')}}" alt="">
              <img src="{{asset('assets/images/03.png')}}" alt="">
              <img src="{{asset('assets/images/05.png')}}" alt="">
            </div>
          </div> 
        </div>
           </div>

          <div class="class">
            <div class="container Classify">
              
              <h3 style="padding:2rem 5rem 0 ; color: rgb(41, 41, 41);" >أصناف مشابهة </h3>
              <div class="row row-cols-1 row-cols-md-5 g-3 " >
                <div class="col ms-2">
                  <div class="card ">
                  @foreach
                    <img src="{{asset('assets/images/.png')}}" class="card-img-top p-2" alt="...">
                   
                    <div class="card-body">
                      <div class="test"><h5 class="card-title">قاعة الافراح </h5></div>
                      
                      <h6>قاعة الروتانا</h6>
                      <h6  >(فندق سي ستار )</h6>
                      <p class="card-text" style=" font-size: small;
                      text-align: center;">من شهر 1 الى شهر 11 ,غزة , مكيف ,400 كرسي ,30 طاولة </p>
                      <div class="sel">
                       <div class="div"><h6>1400  <i class="fa-solid fa-shekel-sign"></i> </h6></div> 
                       <div class="div"><h6>3.4% </h6></div>
                       <div class="div"><h6> <del>1450</del>  <i class="fa-solid fa-shekel-sign"></i> </h6></div>
                      </div>
                      

                    </div>
                  </div>
                </div>
                <div class="col ms-2">
                  <div class="card ">
                    <img src="{{asset('assets/images/صورة 2 مقصوصة .png')}}" class="card-img-top p-2" alt="...">
                    <div class="card-body">
                      <div class="test"><h5 class="card-title">قاعة الافراح </h5></div>
                      
                      <h6>قاعة الروتانا</h6>
                      <h6  >(فندق سي ستار )</h6>
                      <p class="card-text" style=" font-size: small;
                      text-align: center;">من شهر 1 الى شهر 11 ,غزة , مكيف ,400 كرسي ,30 طاولة </p>
                      <div class="sel">
                        <div class="div"><h6>1400  <i class="fa-solid fa-shekel-sign"></i> </h6></div> 
                        <div class="div"><h6>3.4% </h6></div>
                        <div class="div"><h6> <del>1450</del>   <i class="fa-solid fa-shekel-sign"></i> </h6></div>
                       </div>
                    </div>
                  </div>
                </div>
                <div class="col">
                  <div class="card me-2">
                    <img src="{{asset('assets/images/pec3.png')}}" class="card-img-top p-2" alt="...">
                    <div class="card-body">
                      <div class="test"><h5 class="card-title">قاعة الافراح </h5></div>
                      
                      <h6>قاعة الروتانا</h6>
                      <h6  >(فندق سي ستار )</h6>
                      <p class="card-text" style=" font-size: small;
                      text-align: center;">من شهر 1 الى شهر 11 ,غزة , مكيف ,400 كرسي ,30 طاولة </p>
                      <div class="sel">
                        <div class="div"><h6>1400 <i class="fa-solid fa-shekel-sign"></i> </h6></div> 
                        <div class="div"><h6>3.4% </h6></div>
                        <div class="div"><h6> <del>1450</del>  <i class="fa-solid fa-shekel-sign"></i> </h6></div>
                       </div>
                    </div>
                  </div>
                </div>
                <div class="col me-2">
                  <div class="card">
                    <img src="{{asset('assets/images/pec3.png')}}" class="card-img-top p-2" alt="...">
                    <div class="card-body">
                      <div class="test"><h5 class="card-title">قاعة الافراح </h5></div>
                      
                      <h6>قاعة الروتانا</h6>
                      <h6  >(فندق سي ستار )</h6>
                      <p class="card-text" style=" font-size: small;
                      text-align: center;">من شهر 1 الى شهر 11 ,غزة , مكيف ,400 كرسي ,30 طاولة </p>
                      <div class="sel">
                        <div class="div"><h6>1400 <i class="fa-solid fa-shekel-sign"></i> </h6></div> 
                        <div class="div"><h6>3.4% </h6></div>
                        <div class="div"><h6> <del>1450</del>  <i class="fa-solid fa-shekel-sign"></i> </h6></div>
                       </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="container containerwedth">
            <div class="hedd"><img src="{{asset('assets/images/endhed.png')}}" style="margin-top:3rem ;"></div>

          </div>

@endsection
@section('scribt')
<script src="{{asset('assets/js/products.js')}}"></script>
@endsection