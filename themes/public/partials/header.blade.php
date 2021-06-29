<header class="header-electronics">
    <div class="default-header">
        <div class="sticky-header">
            <div class="container-fluid">
             
                <div class="row align-items-center header-middle ">
                    <div class="col-lg-2 col-md-3 col-6 order-1 order-md-1">
                        <a href="{{trans_url('/')}}"><img src="{{theme_asset('img/logo/logozing5.png')}}" class="main-logo img-fluid"></a>
                    </div>
                    <div class="col-lg-10 col-md-9 ml-auto col-12 order-3 order-md-2">
                      <div class="header-bottom row align-items-center relative md-down-none">
                          <div class="col-lg-12 col-md-12">
                            <!--<div class="dropdown custom-department-dropdown">-->
                            <!--    <a href="#" class="department-list-btn d-flex align-items-center"><span class="lnr lnr-list"></span>Browse Categories</a>-->
                            <!--</div>-->
                            <div class="d-flex justify-content-between">
                              <div class="cat-offer-block d-flex align-items-center">
                                <div class="dropdown custom-department-dropdown ">
                                  <a href="#" class="department-list-btn d-flex align-items-center" role="button" id="dropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Categories<span class="fa fa-angle-down ml-5"></span></a>
                                  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink2">
                                      @foreach(Product::mainCategories() as  $category)
                                      <a class="dropdown-item" data-related="{{strtok($category->slug, '-')}}" href="{{url('category/'.@$category->slug)}}"><span>{{@$category->name}}</span> <span class="lnr lnr-arrow-right"></span></a>
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
                                  <a href="#" class="department-list-btn d-flex align-items-center" role="button" id="dropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Top Listing<span class="fa fa-angle-down ml-5"></span></a>
                                  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink2">
                                      @foreach(Product::mainCategories() as  $category)
                                      <a class="dropdown-item" data-related="{{strtok($category->slug, '-')}}" href="{{url('list_category/'.@$category->slug)}}"><span>{{@$category->name}}</span> <span class="lnr lnr-arrow-right"></span></a>
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
                                  <li class="drop-menu"><a href="{{url('products')}}"> New Products</a>                     
                                    </li>
                                    <li class="drop-menu"><a href="{{url('market-discount-items')}}"> Top Offers</a>  
                                      
                                      <li class="drop-menu"><a href="{{url('market-discount-items')}}"> About Us</a>  
                                     </li>
                                     <li class="drop-menu"><a href="{{url('market-discount-items')}}"> Contact Us</a>  
                                     </li>
                                  </ul>
                                </nav>
                              </div>
                              <div class="toll-free-no-wrap">
                                 <div class="header-search-bar-wrap">
                                    <form action="{{trans_url('products')}}" class="search-form search_product" id="">
                                        <div class="search-bar d-flex">
                                            <input class="search-input search_q" id="" name="search[title]" type="text" placeholder="Search product here" autocomplete="off">
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
      <div class="dropdown custom-department-dropdown ">
          <a href="#" class="department-list-btn" role="button" id="dropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="lnr lnr-menu-circle"></span></a>
          <div class="dropdown-menu" aria-labelledby="dropdownMenuLink2">
              <a class="dropdown-item" href="{{url('products')}}"><span>New Arrivals</span></a>
               @foreach(Product::mainCategories() as  $category)
              <a class="dropdown-item" data-related="{{strtok($category->slug, '-')}}" href="{{url('category/'.@$category->slug)}}"><span>{{@$category->name}}</span> <span class="lnr lnr-arrow-right"></span></a>
                
                <div class="side-menu-desc d-flex" id="{{strtok($category->slug, '-')}}" style="min-width: 250px;">
                  <div class="left">
                    <ul>
                     
                      <li><a href="{{url('category/'.@$child->slug)}}">eteryrtuy</a></li>
                      
                    </ul>
                  </div>
                </div>
                
              @endforeach

         </div>
      </div>
      <form action="{{trans_url('products')}}" class="search-form search_product" id="">
          <div class="search-bar d-flex">
              <input class="search-input search_q" id="" name="search[title]" type="text" placeholder="Search product here" autocomplete="off">
              <button class="search-submit"><span class="fa fa-search"></span></button>
          </div>
      </form>
      <div class="shortcut-icon cart-header">
          <div class="single-shortcut top-cart mr-0">
              <img src="{{theme_asset('img/logo/logozing5.png')}}" class=" img-fluid"   height="30" width="50">
             
          </div>
          
      </div>

    </div>
  </div>
</header>

<!-- <nav class="bottom-nav-mobile">
    <div class="nav-link-item logo">
        <a href="{{url('/')}}">
            <img src="{{theme_asset('img/logozing.jpg')}}" alt="logo" title="Rediho">
        </a>
    </div>
    <div class="nav-link-item">
      <a href="#SelectLocModal" data-toggle="modal" data-target="#SelectLocModal">
          <i class="fa fa-map-marker"></i>
          <span>Location</span>
      </a>
    </div>
    <div class="nav-link-item sign-in">
     
  </div>  
</nav> -->


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

    
</script>