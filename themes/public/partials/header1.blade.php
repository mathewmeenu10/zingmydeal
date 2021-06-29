<header class="header-electronics">
  <div class="default-header">
    <div class="sticky-header">
      <div class="container-fluid">
        <div class="row align-items-center header-middle ">
          <div class="col-lg-2 col-md-3 col-6 order-1 order-md-1">
            <a href="{{trans_url('/')}}">
              <img src="{{theme_asset('img/logo/zingmydealLogo.png')}}" class="main-logo " >
            </a>
          </div>
          <div class="col-lg-10 col-md-9 ml-auto col-12 order-3 order-md-2">
            <div class="header-bottom row align-items-center relative md-down-none">
              <div class="col-lg-12 col-md-12">
                <div class="d-flex justify-content-between">
                  
                  <div class="cat-offer-block d-flex align-items-center">
                    <nav>
                    <ul class="main-menu pr-0">
                      <li class="drop-menu"><a href="{{url('/')}}"><i class="fa fa-home"></i> Home </a></li>
                      <!-- <li class="drop-menu"><a href="{{url('/')}}"><span class="lnr lnr-menu"></span> Home </a></li> -->
                    </ul>
                  </nav>
                    <div class="dropdown custom-department-dropdown ">
                      <a href="#" class="department-list-btn d-flex align-items-center" role="button" id="dropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Products<span class="fa fa-angle-down pl-25"></span></a>
                      <div class="dropdown-menu" aria-labelledby="dropdownMenuLink2">
                        <a class="dropdown-item" href="{{url('products')}}"><span>All products</span> 
                          <!-- <span class="lnr lnr-arrow-right"></span> -->
                          </a>
                        @foreach(Product::mainCategories() as  $category)
                          <a class="dropdown-item" data-related="{{strtok($category->slug, '-')}}" href="{{url('category/'.@$category->slug)}}"><span>{{@$category->name}}</span> 
                          <!-- <span class="lnr lnr-arrow-right"></span> -->
                          </a>
                          @if(count(@$category->children) > 0)
                            <div class="side-menu-desc d-flex" id="{{strtok($category->slug, '-')}}" style="min-width: 250px;">
                              <div class="left">
                                <ul>
                                  @foreach($category->children as  $child)
                                    <li><a href="{{url('category/'.@$child->slug)}}">{{@$child->name}}</a></li>
                                  @endforeach
                                </ul>
                              </div>
                            </div>
                          @endif
                        @endforeach
                      </div>
                    </div>
                    <div class="dropdown custom-department-dropdown ">
                      <a href="#" class="department-list-btn d-flex align-items-center" role="button" id="dropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Top 10<span class="fa fa-angle-down pl-25"></span></a>
                      <div class="dropdown-menu" aria-labelledby="dropdownMenuLink2">
                        <a class="dropdown-item"  href="{{url('list_category/all')}}"><span>All</span> 
                          <!--  <span class="lnr lnr-arrow-right"></span> -->
                          </a>
                        @foreach(Product::mainCategories() as  $category)
                          <a class="dropdown-item" data-related="{{strtok($category->slug, '-')}}" href="{{url('list_category/'.@$category->slug)}}"><span>{{@$category->name}}</span> 
                          <!--  <span class="lnr lnr-arrow-right"></span> -->
                          </a>
                          @if(count(@$category->children) > 0)
                            <div class="side-menu-desc d-flex" id="{{strtok($category->slug, '-')}}" style="min-width: 250px;">
                              <div class="left">
                                <ul>
                                  @foreach($category->children as  $child)
                                    <li><a href="{{url('list_category/'.@$child->slug)}}">{{@$child->name}}</a></li>
                                  @endforeach
                                </ul>
                              </div>
                            </div>
                          @endif
                        @endforeach
                      </div>
                    </div>
                    <nav>
                      <ul class="main-menu">
                        <li class="drop-menu"><a href="{{url('products')}}"> New Products</a></li>
                        <li class="drop-menu"><a href="{{url('products?search%5Boffer%5D=Yes')}}"> Top Offers</a></li>
                        <li class="drop-menu"><a href="{{url('about-us')}}"> About Us</a></li>
                        <li class="drop-menu"><a href="{{url('contact')}}"> Contact Us</a></li>
                      </ul>
                    </nav>
                  </div>
                  <div class="toll-free-no-wrap">
                    <div class="header-search-bar-wrap">
                      <form action="{{trans_url('products')}}" class="search-form search_product">
                        <div class="search-bar d-flex">
                          <input class="search-input search_q" id="" name="search[name]" type="text" placeholder="Search here" autocomplete="off">
                          <button class="search-submit"><span class="fa fa-search"></span></button>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div> 
          </div>
        </div>   
      </div>
    </div>
  </div>
</header>

<header class="mob-header">
  <div class="container">
    <div class="mob-header-inner-wrap">
    <!-- Top Navigation Menu -->
      <div class="dropdown custom-department-dropdown ">
        <a href="#" class="department-list-btn toggle-menu menu-left"><span class="lnr lnr-menu"></span></a>
      </div>
      <form action="{{trans_url('products')}}" class="search-form search_product" id="">
        <div class="search-bar d-flex">
          <input class="search-input search_q" id="" name="search[name]" type="text" placeholder="&nbsp;&nbsp;&nbsp;Search here" autocomplete="off">
          <button class="search-submit"><span class="fa fa-search"></span></button>
        </div>
      </form>
      <div class="shortcut-icon cart-header">
        <div class="single-shortcut top-cart mr-0">
          <a href="{{url('/')}}">  <img src="{{theme_asset('img/logo/zingmydealLogo.png')}}"    height="23" width="55"></a>
        </div>
      </div>
    </div>
  </div>
</header>


       
<script>

    jQuery(document).ready(function($) {
      // $('.drop123').jPushMenu({
      //   closeOnClickInside: false
      // })
      $('.toggle-menu').jPushMenu({
        closeOnClickOutside:false
      });
    });
    </script>

<style>
.modal-dialog {
    max-width: 500px;
}
.ui-autocomplete {
      max-height: 300px;
      overflow-y: auto;
      /* prevent horizontal scrollbar */
      overflow-x: hidden;
      /* add padding to account for vertical scrollbar */
      padding-right: 20px;
  }

  .img-fluid, .img-thumbnail {
    max-width: 55%;
    height: auto;
}


</style>
<link rel="stylesheet" href="{{theme_asset('css/jquery-ui.css')}}">
<script src="{{theme_asset('js/jquery-ui.js')}}"></script>


<script type="text/javascript">
$(document).ready(function() {
 $('body').removeClass('cbp-spmenu-push cbp-spmenu-push-toright');
         $('.cbp-spmenu-left').removeClass('cbp-spmenu-open');
  $('.cbp-spmenu-left').removeClass('cbp-spmenu-open');

  $('.cart-toggle-btn').jPushMenu({
        closeOnClickLink: false
    });

  $('.cart-close-btn').click(function(){
     $('body').removeClass('cbp-spmenu-push cbp-spmenu-push-toright');
      $('.cbp-spmenu-left').removeClass('cbp-spmenu-open');
  })
    $( ".search_q" ).autocomplete({
      source: function( request, response ) {
        $.ajax( {
          url: "{{url('products/ajax')}}",
          dataType: "jsonp",
          data: {
            term: request.term
          },
          success: function( data ) { 
            console.log(data);
            response( data );
          }
        } );
      },
      minLength: 2,
        select: function( event, ui ) { 
          console.log(ui.item);
        $('.search_q').val(ui.item.value);
             $('.search_product').submit();
          //$("#product-product-search").attr('action', "formUrl +'/'+ui.item.id");
        }
    });
 });

    function myFunction() {
  var x = document.getElementById("myLinks");
  if (x.style.display === "block") {
    x.style.display = "none";
  } else {
    x.style.display = "block";
  }
}
</script>
