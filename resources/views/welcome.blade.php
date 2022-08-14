<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name','Laravel Ajax Datable')  }}</title>

        <!-- Fonts -->
        <link href="{{ mix('css/app.css') }}" rel="stylesheet">
        <link href="{{asset('assets/css/bootstrap.css')}}" rel="stylesheet" type="text/css"/> 
        <link href="{{asset('assets/css/ui.css')}}" rel="stylesheet" type="text/css"/>
        <link href="{{asset('assets/fonts/fontawesome/css/fontawesome-all.min.css')}}" type="text/css" rel="stylesheet">
        <link href="{{asset('assets/css/OverlayScrollbars.css')}}" type="text/css" rel="stylesheet"/>
        <link href='https://fonts.googleapis.com/css?family=Nunito' rel='stylesheet'>
        <link href="{{asset('assets/css/asad.css')}}" type="text/css" rel="stylesheet">

        <script src="https://code.jquery.com/jquery-3.6.0.min.js" crossorigin="anonymous"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"></script>
        <link href="//netdna.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" />

    </head>
    <body>


        <section class="header-main">
               <div class="container">
                  <div class="row align-items-center">
                     <div class="col-lg-3">
                        <div class="brand-wrap">
                           <a href="#"><h2 class="logo-text"><b>Laravel Ajax Custom Datable</b></h2></a>
                        </div>
                        <!-- brand-wrap.// -->
                     </div>
                     <div class="col-lg-6 col-sm-6">
                        <form id="searchform" name="searchform" class="search-wrap">
                           <div class="input-group">
                              <input type="text" name="name" value="{{request()->get('name','')}}" class="form-control" placeholder="Search">
                              <div class="input-group-append">
                                 <a  href='/' id='search_btn' class="btn btn-primary">
                                 <i class="fa fa-search"></i>
                                 </a>
                              </div>
                           </div>
                        </form>
                        <!-- search-wrap .end// -->
                     </div>
                     <!-- col.// -->
                     <div class="col-lg-3 col-sm-6">
                        <div class="widgets-wrap d-flex justify-content-end">
                           
                           <div class="widget-header">
                              <a href="#" class="icontext">
                              <a href="#" class="btn btn-primary m-btn m-btn--icon m-btn--icon-only">
                              <i class="fa fa-fax"></i>
                              </a>
                              </a>
                           </div>
                           <div class="widget-header">
                              <a href="#" class="icontext">
                              <a href="#" class="btn btn-primary m-btn m-btn--icon m-btn--icon-only">
                              <i class="fa fa-shopping-basket"></i>
                              </a>
                              </a>
                           </div>
                           
                        </div>
                        <!-- widgets-wrap.// -->	
                     </div>
                     <!-- col.// -->
                  </div>
                  <!-- row.// -->
               </div>
               <!-- container.// -->
            </section>
         
            <section class="section-content padding-y-sm bg-default " style="padding:50px" >
                <div class="container-fluid">
                   <div class="row">
                      <div class="col-md-12 card padding-y-sm card ">
                         <ul class="nav bg radius nav-pills nav-fill mb-3 bg" role="tablist">
                         </ul>
                         <span id="pagination_data">
                            
                                @include("product.product-pagination",["product"=>$product])
                           
                         </span>
                      </div>
                   </div>
                </div>
                <!-- container //  -->
             </section>


             <script>
                $(function() {
                  $(document).on("click", "#pagination a,#search_btn", function() {
            
                    //get url and make final url for ajax 
                    var url = $(this).attr("href");
                    var append = url.indexOf("?") == -1 ? "?" : "&";
                    var finalURL = url + append + $("#searchform").serialize();
            
                    //set to current url
                    window.history.pushState({}, null, finalURL);
            
                    $.get(finalURL, function(data) {
            
                      $("#pagination_data").html(data);
            
                    });
            
                    return false;
                  })
            
                });
              </script>

        <script src="{{asset('assets/js/jquery-2.0.0.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('assets/js/bootstrap.bundle.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('assets/js/OverlayScrollbars.js')}}" type="text/javascript"></script>
        <script>
        	$(function() {
        	$("#items").height(552);
        	$("#items").overlayScrollbars({overflowBehavior : {
        		x : "hidden",
        		y : "scroll"
        	} });
        	$("#cart").height(445);
        	$("#cart").overlayScrollbars({ });
            });
        </script>
    </body>
</html>
