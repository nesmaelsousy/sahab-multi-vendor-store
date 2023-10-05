
    @extends('app')
    @section('title')
اكورد | الصفحة البحث 
@endsection
    @section('css')
<link rel="stylesheet" href="{{asset('assets/css/search.css')}}">
@endsection
         @section('content')

         <div class="thesearh">
          <div class="container" style="width:70% ;">
         
            <!-- <i class="fa-solid fa-magnifying-glass"></i> -->
              <form class="d-flex searchform" role="search">
                <input class="form-control ms-5" type="search" placeholder="البحث.." aria-label="Search">
              </form>
          </div>
          
         </div>
         <div class="container" style="width:76%">
         <img class="advertising-4 headersearch" src="https://accord.ps/Modules/Website/Resources/assets/images/adv-search4.jpg" alt="">
         </div>
         <div class="container_fluid categories p-5 ">
            <h4>اكتشف اصنافنا </h4>
            <a href="#" class="float_end bed" > <p>كل التصنيفات <i class="fa-solid fa-angle-left"></i></p></a>
           @include('items-categories')

          <div class="row">
            <div class="col-lg-9">
                <div class="row d-flex align-items-center">
                    <div class="col-md-2">
                        <div class="dropdown">
                            <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                التـرتـيب حسـب
                            </button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">اللأقل سعراً</a></li>
                                <li><a class="dropdown-item" href="#"> الأعلى سعـراً</a></li>
                                <li><a class="dropdown-item" href="#">الأكثـر خصـومات </a></li>
                                <li><a class="dropdown-item" href="#">الأحـدث </a></li>
                                <li><a class="dropdown-item" href="#">الأقـدم </a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="row d-flex align-items-center">
                            <div class="col-md-5 col-5 my-1">
                                <input type="text" id="inputPassword6" class="form-control"
                                    placeholder="الاقل سعرا" aria-describedby="passwordHelpInline">
                            </div>
                            <div class="col-md-2 col-2 p-0 text-center my-1">
                                <h5 class="d-md-block">الى</h5>
                            </div>
                            <div class="col-md-5 col-5">
                                <input type="text" id="inputPassword6" class="form-control"
                                    placeholder="الاعلى سعرا" aria-describedby="passwordHelpInline">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 text-md-end text-center mt-1">
                        <h5 class="font-14">4263 صنف</h5>
                    </div>
                </div>
            </div>
        </div>
         
        <script src="js/search.js"></script>
          <script src="js/bootstrap.bundle.js"></script>
          @endsection
        