<!DOCTYPE html>
<html lang="ar" dir="rtl">
    
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    @yield('css')
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
       <link rel="stylesheet" href="{{asset('assets/css/all.min.css')}}"> 
       
</head>
<body>
<div> <hr class="color"></div>
        <div class="container containerwedth" >
          <nav class="navbar navbar-expand-lg bg-body-tertiary">
            
            <div class="container-fluid">
              <div class="one">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <a href="/products_page"> <img src="{{asset('assets/images/rasel-logo.png')}}" alt width="150px"></a>
               
                
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                  <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        التصنيفات 
                      </a>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#"><i class="fa-solid fa-angles-down"></i> اثاث المنزل </a>
                        
                        <li><a class="dropdown-item" href="#"><i class="fa-solid fa-angles-down"></i> الاجهزة الكهربائية </a></li>
                        <li><a class="dropdown-item" href="#"><i class="fa-solid fa-angles-down"></i> الصالات </a></li>
                      </ul>
                    </li>
                  </ul>
              </div>
             
              
               </div>
               <div class="two">
                <a class="logink" href="#"><i class="fa-solid fa-circle-plus"></i>سجل كمورد</a>
                <div class="search z">
                 
                  <i class="fa fa-search"></i>
                  <p>البحث</p>
                </div>
                <div class="heart z">
                  <span class="num1">0</span>
                  <a href="#"> <i class="fa-regular fa-heart"></i>
                    <p> المفضلة </p></a>
                 
                </div>
               <div class="shopp z">
                <span class="num">0</span>
                <a href="#"> <i class="fa-solid fa-cart-shopping"></i>
                  <p>سلة المشتريات </p></a>
               
               </div>
               <div class="prof z">
                <a href="#"><i class="fa-regular fa-circle-user"></i>
                  <p>تسجيل الدخول </p></a>
                
               </div>
              </div>
           
          </nav> </div>
          <hr style="margin: 0;">
      @yield('content')
                
      <div> <hr class="color" style="height:1rem; margin-top:1rem;"></div>
          <span class="iconup_pageprodect"><i class="fas fa-arrow-up"></i></span>

          <footer> 
            <div class="firstfooter container">
              <div class="onedivfo">
                <div class="callus">
                    <h5>للاتصال بنا</h5>
                     <h6 >يسرنا تواصلك معنا من خلال أي من القنوات المتاحة.</h6> <br>
                </div>
                <div class="address">
                  <div class="onefo2">
                    <h5 style="font-weight :650 ; font-size:14px ; color: rgb(104, 104, 104);" >أرقام التواصل</h5>
                    <p>1700400600</p>
                    <h6>العنوان</h6>
                    <p style="margin-left: 1.5rem; font-size: 14px;">فلسطين، غزة، مقابل البوابة الشمالية لجامعة الأزهر، مجمع الرؤيا التجاري</p>
              
                  </div>
                  <div class="onefo2">
                    <h6 style="font-weight :650 ; font-size:14px ; color: rgb(104, 104, 104);">البريد الإلكتروني
               
                    </h6>
                    <p style="font-size: 15px; margin: 0;">info@accord.ps
                    </p>
                    <p style="font-size: 15px; margin: 0;">ساعات العمل
                    </p>
                    <p style="font-size: 15px; margin: 0;">  السبت - الخميس
                    </p>
                    <p style="font-size: 15px; margin: 0;">9:00 صباحاً - 3:30 مساءً
                    </p>
              
                  </div>
                </div>
                
            
              </div>
              <div class="information">
                <h5>المعلومات</h5>
                <a href="#"><span>من نحن ؟</span></a> <br>
                <a href="#"><span>سياسة الخصوصية</span></a><br>
                <a href="#"><span>للاتصال بنا</span></a> <br>
                <a href="#"><span>الأسئلة الشائعة</span></a> <br>
                <a href="#"><span>مورد جديد</span></a>
              </div>
              <div class="information">
                <h5>الملف الشخصي</h5>
                <a href="#"><span>التسجيل</span></a> <br>
                <a href="#"><span>تسجيل الدخول</span></a><br>
                <a href="#"><span>المفضلة</span></a> <br>
                <a href="#"><span>سلة المشتريات</span></a> <br>
                <a href="#"><span>البحث</span></a>
              </div>
              <div class="therd">
                <h5>قائمة الواتس أب</h5>
                <p style="width:300px ; font-size: 15px;" >انضم إلى قائمة الواتس أب الخاصة بالمنصة للبقاء على إطلاع بأحدث الخصومات والعروض الخاصة.</p>
                <div class="container-fluid">
    <form class="d-flex" role="search">
      <input class="form-control me-2" type="number" placeholder="رقم الواتس اب ..." aria-label="number">
      <button class="btn btn-outline-success" type="submit">الاشتراك</button>
    </form>
  </div>
                <h6>وسائل التواصل الاجتماعي </h6>
                <div class="socal">
                <i class="fa-brands fa-facebook "></i>
                <i class="fa-brands fa-instagram"></i>
                </div>
                
            
              </div>
            
            </div>
            <div class="secfo">
              <h6>Powered by Accord - Accord Group for Marketing & Trade</h6>
            </div>
                      </footer>
                      <script src="{{asset('assets/js/bootstrap.bundle.js')}}"></script>
                      @yield('scribt')
</body>
</html>