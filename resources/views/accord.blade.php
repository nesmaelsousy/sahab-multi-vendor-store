@extends('app')
@section('title')
اكورد | الصفحة الرئيسية 
@endsection
@section('css')
<link rel="stylesheet" href="{{asset('assets/css/accord.css')}}">

@endsection
        @section('content')
        <div class="slider">
          <div class="contentslid">
            <h5>كل المراحب والله </h5>
            <p> ضيفوا البيانات مشان تتمتعوا بالعديد من المميزات </p>
            <form method="post">
              
                <label for="phone" class="form-label">رقم الجوال</label> <br>
                <input type="number" class="form-control " id=" phone" placeholder=" ادخل رقم الجوال الخاص بك " >
              
             
                <label for="namee" class="form-label">الاسم بالكامل </label> <br>
                <input type="text"class="form-control name" id=" namee" placeholder="ادخل الاسم بالكامل ">
             
              <button id="send">ارسال</button> 
              </div>
              
            </form>
            
          </div>
          <div class="container_fluid categories p-5">
            <h4>اكتشف اصنافنا </h4>
            <a href="#" class="float_end bed" > <p>كل التصنيفات <i class="fa-solid fa-angle-left"></i></p></a>
            @include('items-categories')
            
  
         
        </div>
        <span class="iconup"><i class="fa-solid fa-arrow-up"></i></span>
        
          <div class="container">
            <div class="row row-cols-1 row-cols-md-4 g-2 " >
              <div class="col m-3 ">
                <div class="card ">
                
                  <img src="{{asset('assets/images/accordd.png')}}" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 style="color:rgb(64, 63, 63); font-weight:bold;">أكورد , القصة,وبناء الثقة </h5>
                   <p style="font-size:12px;">ن ,تمتلك أكورد مئات الموردين والات المنتجات التي تملأ المنصة الان من جميع التصنيفات التي تهم المقبلين على الزواج بالاضافةالى ... </p>
                  </div>
                </div>
              </div>
              <div class="col m-3">
                <div class="card ">
                  <img src="{{asset('assets/images/تسليم.png')}}" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 style="color:rgb(64, 63, 63); font-weight:bold;">الشراكات , الطريق للراحة والتحكم </h5>
                   <p style="font-size:12px;"> من خلال اضافة خيار التقسيط الى خيارات الدفع كاش المتوفر لدينا , يمكننا توفير تجربة توسق اكثر شمولية , ومنح عملائنا مزيدا من الراحة والتحكم والوصول الى خيارات ...</p>
                  </div>
                </div>
              </div>
              <div class="col m-3">
                <div class="card">
                  <img src="{{asset('assets/images/market.png')}}" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 style="color:rgb(64, 63, 63); font-weight:bold;">المنتجات وقوة موردينا </h5>
                    <p style="font-size:12px;"> الافضل امام عينك , مع وجود خطة تمكن الفريق من جلب منتجات عديدة بمواصفات حقسقية , كان لابد من وجود العديد من العتبارات التي نأخذها ليكون احدهم من موردينل ...</p>
                  </div>
                </div>
              </div>
            </div>
            
            <div class="hederr" >
             <img src="{{asset('assets/images/heder.png')}}" alt="">
            </div>
            <div class="row row-cols-1 row-cols-md-4 g-2 " >
              <div class="col m-3 ">
                <div class="card ">
                  <img src="{{asset('assets/images/خاتمم.png')}}" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 style="color:rgb(64, 63, 63); font-weight:bold;">أكورد , القصة,وبناء الثقة </h5>
                   <p style="font-size:12px;">ن ,تمتلك أكورد مئات الموردين والات المنتجات التي تملأ المنصة الان من جميع التصنيفات التي تهم المقبلين على الزواج بالاضافةالى ... </p>
                  </div>
                </div>
              </div>
              <div class="col m-3">
                <div class="card ">
                  <img src="{{asset('assets/images/زواج.png')}}" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 style="color:rgb(64, 63, 63); font-weight:bold;">الشراكات , الطريق للراحة والتحكم </h5>
                   <p style="font-size:12px;"> من خلال اضافة خيار التقسيط الى خيارات الدفع كاش المتوفر لدينا , يمكننا توفير تجربة توسق اكثر شمولية , ومنح عملائنا مزيدا من الراحة والتحكم والوصول الى خيارات ...</p>
                  </div>
                </div>
              </div>
              <div class="col m-3">
                <div class="card">
                  <img src="{{asset('assets/images/مشتريات.png')}}" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 style="color:rgb(64, 63, 63); font-weight:bold;">المنتجات وقوة موردينا </h5>
                    <p style="font-size:12px;"> الافضل امام عينك , مع وجود خطة تمكن الفريق من جلب منتجات عديدة بمواصفات حقسقية , كان لابد من وجود العديد من العتبارات التي نأخذها ليكون احدهم من موردينل ...</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="row row-cols-1 row-cols-md-4 g-2 " >
              <div class="col m-3 ">
                <div class="card ">
                  <img src="{{asset('assets/images/باقات الافراح.png')}}" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h4 style="color:rgb(0, 0, 0); text-align: center;">باقات افراح الصيف 2023</h4>
                   
                  </div>
                </div>
              </div>
              <div class="col m-3">
                <div class="card ">
                  <img src="{{asset('assets/images/احدث العروض.png')}}" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h4 style="color:rgb(0, 0, 0); text-align: center;">أحدث العروض </h4>
                  
                  </div>
                </div>
              </div>
              <div class="col m-3">
                <div class="card">
              
    
              <img src="{{asset('assets/images/Screenshot 2023-09-29 العروض الفردية .png')}}" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 style="color:rgb(0, 0, 0); text-align: center;">العروض الفردية </h5>
                    
                  </div>
                </div>
              </div>
            </div>
          </div>
          



        <div>
          
           <hr class="color" style="height:1rem; margin-top:1rem;"></div>
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
    <form action="">
      <input type="text">
      <input type="button" placeholder="الاشتراك">
    </form>
    <h6>وسائل التواصل الاجتماعي </h6>
    <i></i>
    <i></i>

  </div>

</div>
<div class="secfo">
  <h6>Powered by Accord - Accord Group for Marketing & Trade</h6>
</div>
          </footer>
          <div class="boxform boxphone">
            <div class="welcom">
              <h5>أهلاً وسهلاً بك في أكورد</h5>
              <i class="fa-solid fa-x"></i>
            </div>
            <hr style="margin-top:0 ;">
            <h6 >يرجى التحقق من ادخال رقم الجوال.
            </h6>
            <hr style="margin-top:0 ;">
            <button type="button" class="btn btn-primary btn-sm btnboxform"> تسجيل الدخول </button>


          </div>
          <div class="boxform boxname">
            <div class="welcom">
              <h5>أهلاً وسهلاً بك في أكورد</h5>
              <i class="fa-solid fa-x"></i>
            </div>
            <hr style="margin-top:0 ;">
            <h6 >يرجى التحقق من ادخال الاسم.
  
            </h6>
            <hr style="margin-top:0 ;">
            <button type="button" class="btn btn-primary btn-sm btnboxform"> تسجيل الدخول </button>


          </div>
          <div class="boxform boxboth">
            <div class="welcom">
              <h5>أهلاً وسهلاً بك في أكورد</h5>
              <i class="fa-solid fa-x close"></i>
            </div>
            <hr style="margin-top:0 ;">
            <h6 >يرجى التحقق من ادخال رقم الهاتف و  الاسم.
  
            </h6>
            <hr style="margin-top:0 ;">
            <button type="button" class="btn btn-primary btn-sm btnboxform"> تسجيل الدخول </button>


          </div>
          <script src="js/bootstrap.bundle.js"></script>
          <script src="js/accord.js"> </script>
          @endsection
       