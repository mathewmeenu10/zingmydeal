<header class="header-electronics">
    <div class="default-header">
        <div class="sticky-header">
            <div class="container-fluid">
              <div class="header-top clearfix">
                <div class="row">
                  <div class="col-md-5">
                    <div class="header-top-marquee">
                      <marquee onmouseover="this.stop();" onmouseout="this.start();">
                        <span>Delivery within 24 hours anywhere in Thrissur District</span>
                        <i class="fa fa-circle ml-5 mr-5"></i>
                        <span>Free delivery within almost 5 KM radius of Thrissur town</span>
                      </marquee>
                    </div>
                  </div>
              
                  <div class="col-md-7 text-right">
                    <ul class="top-right-section">
                      <li>
                        <div class="header-search-bar-wrap">
                          <form action="{{trans_url('products')}}" class="search-form search_product" id="">
                              <div class="search-bar d-flex">
                                  <input class="search-input search_q" id="" name="search[title]" type="text" placeholder="Search product here" autocomplete="off">
                                  <button class="search-submit"><span class="fa fa-search"></span></button>
                              </div>
                          </form>
                          
                        </div>
                      </li>
                      
                      <li>
                        <span class="fa fa-map-marker"></span><a href="#SelectLocModal" data-toggle="modal" data-target="#SelectLocModal" id="dellocation">{{!empty(Session::get('location')) ? (Session::get('location')) : 'Select Location' }}</a>
                      </li>
                      @if(!Auth::user())
                      <li>
                        <span class="fa fa-user-circle-o"></span><a href="{{trans_url('/client')}}">Login</a> | <a href="{{trans_url('/client/register')}}">Register</a>
                      </li>
                      @elseif(Auth::user())
                      <li class="dropdown">
                        <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="fa fa-user-circle-o"></span>{{users('name')}}</button>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                          <a class="dropdown-item" href="{{trans_url('client')}}">Dashboard</a>
                          <a class="dropdown-item" href="{{trans_url('client/profile')}}">My profile</a>
                          <a class="dropdown-item" href="{{trans_url('client/password')}}">Reset password</a>
                          <a class="dropdown-item" href="{{trans_url('client/cart/referral')}}">My Reference</a>
                          <a class="dropdown-item" href="{{trans_url('client/cart/referralorders')}}">Reference orders</a>
                          <a class="dropdown-item" href="{{trans_url('client/cart/myorders')}}">My Orders</a>
                          <a class="dropdown-item" href="{{trans_url('client/logout')}}">Logout</a>
                        </div>
                      </li>
                      @endif
                      <li>
                          <div class="shortcut-icon relative d-flex align-items-center cart-header">
                              <div class="single-shortcut top-cart mr-0">
                                  <span class="fa fa-shopping-basket"></span>
                                  <span class="cart-count">{{Cart::count()}}</span>
                              </div>
                              <div class="mini-cart mini-cart-2">
                                  <div class="mini-border"></div>
                                  <div class="total-amount d-flex justify-content-between">
                                      <div class="title">
                                          <h6>My Cart</h6>
                                          <span>({{Cart::count()}} items)</span>
                                      </div>
                                      <div class="amount">₹{{Cart::subtotal()}}</div>
                                  </div>
                                  @foreach(Cart::content() as $item)
                                  <div class="single-cart-item d-flex justify-content-between align-items-center">
                                      <a href="{{$item->name}}"><img src="{{url($item->image)}}" alt=""></a>
                                      <div class="middle">
                                          <h5><a href="index.html#">{{$item->name}}</a></h5>
                                          <h6><span class="lnr lnr-tag"></span> ₹{{$item->price}} x {{$item->qty}}</h6>
                                      </div>
                                      <div class="cross"><a href="{{url('carts/remove/'. $item->rowId)}}"><span class="lnr lnr-cross"></span></a></div>
                                  </div>
                                 @endforeach
                                  @if(Cart::count() != 0)
                                  <div class="proceed-btn"><a href="{{trans_url('cart/view')}}" class="view-btn color-1"><span>Proceed to checkout</span></a></div>
                                  @else
                                   <div class="proceed-btn"><a href="#" class="view-btn color-1"><span>Proceed to checkout</span></a></div>
                                  @endif
                              </div>
                          </div>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
                <div class="row align-items-center header-middle">
                    <div class="col-md-3 col-6 order-1 order-md-1">
                        <a href="{{trans_url('/')}}"><img src="{{theme_asset('img/logo/logo.png')}}" class="main-logo img-fluid"></a>
                    </div>
                    <div class="col-lg-9 col-md-7 ml-auto col-12 order-3 order-md-2">
                      <div class="header-bottom row align-items-center relative md-down-none">
                          <div class="col-lg-12 col-md-12">
                            <!--<div class="dropdown custom-department-dropdown">-->
                            <!--    <a href="#" class="department-list-btn d-flex align-items-center"><span class="lnr lnr-list"></span>Browse Categories</a>-->
                            <!--</div>-->
                            <div class="d-flex justify-content-between">
                              <div class="cat-offer-block d-flex align-items-center">
                                <div class="dropdown custom-department-dropdown ">
                                  <a href="#" class="department-list-btn d-flex align-items-center" role="button" id="dropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Browse Categories<span class="fa fa-angle-down"></span></a>
                                  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink2">
                                      <a class="dropdown-item" href="{{url('products')}}"><span>New Arrivals</span></a>
                                       @foreach(Ecommerce::mainCategories() as  $category)
                                      <a class="dropdown-item" data-related="{{strtok($category->slug, '-')}}" href="{{url('category/'.@$category->slug)}}"><span>{{@$category->name}}</span> <span class="lnr lnr-arrow-right"></span></a>
                                        @if(count($category->children) > 0)
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
                                <nav>
                                  <ul class="main-menu">
                                    <li class="drop-menu"><a href="{{url('discount-items')}}"><span class="fa fa-certificate"></span> Rediho Offers</a></li>
                                    <li class="drop-menu"><a href="{{url('market-discount-items')}}"><span class="fa fa-tags"></span> Market Offers</a>                        
                                    </li>
                                  </ul>
                                </nav>
                              </div>
                              <div class="toll-free-no-wrap">
                                <img src="{{theme_asset('img/tollfree.png')}}" alt="">
                                <h2><span>Toll-free</span>1800-1111-2222</h2>
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
          <a href="#" class="department-list-btn" role="button" id="dropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="lnr lnr-menu"></span></a>
          <div class="dropdown-menu" aria-labelledby="dropdownMenuLink2">
              <a class="dropdown-item" href="{{url('products')}}"><span>New Arrivals</span></a>
               @foreach(Ecommerce::mainCategories() as  $category)
              <a class="dropdown-item" data-related="{{strtok($category->slug, '-')}}" href="{{url('category/'.@$category->slug)}}"><span>{{@$category->name}}</span> <span class="lnr lnr-arrow-right"></span></a>
                @if(count($category->children) > 0)
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
      <form action="{{trans_url('products')}}" class="search-form search_product" id="">
          <div class="search-bar d-flex">
              <input class="search-input search_q" id="" name="search[title]" type="text" placeholder="Search product here" autocomplete="off">
              <button class="search-submit"><span class="fa fa-search"></span></button>
          </div>
      </form>
      <div class="shortcut-icon cart-header">
          <div class="single-shortcut top-cart mr-0">
              <span class="fa fa-shopping-basket"></span>
              <span class="cart-count">{{Cart::count()}}</span>
          </div>
          <div class="mini-cart mini-cart-2">
              <div class="mini-border"></div>
              <div class="total-amount d-flex justify-content-between">
                  <div class="title">
                      <h6>My Cart</h6>
                      <span>({{Cart::count()}} items)</span>
                  </div>
                  <div class="amount">₹{{Cart::subtotal()}}</div>
              </div>
              @foreach(Cart::content() as $item)
              <div class="single-cart-item d-flex justify-content-between align-items-center">
                  <a href="{{$item->name}}"><img src="{{url($item->image)}}" alt=""></a>
                  <div class="middle">
                      <h5><a href="index.html#">{{$item->name}}</a></h5>
                      <h6><span class="lnr lnr-tag"></span> ₹{{$item->price}} x {{$item->qty}}</h6>
                  </div>
                  <div class="cross"><a href="{{url('carts/remove/'. $item->rowId)}}"><span class="lnr lnr-cross"></span></a></div>
              </div>
             @endforeach
              @if(Cart::count() != 0)
              <div class="proceed-btn"><a href="{{trans_url('cart/view')}}" class="view-btn color-1"><span>Proceed to checkout</span></a></div>
              @else
               <div class="proceed-btn"><a href="#" class="view-btn color-1"><span>Proceed to checkout</span></a></div>
              @endif
          </div>
      </div>

    </div>
  </div>
</header>

<nav class="bottom-nav-mobile">
    <div class="nav-link-item logo">
        <a href="{{url('/')}}">
            <img src="{{theme_asset('img/logo-sm.png')}}" alt="logo" title="Rediho">
        </a>
    </div>
    <div class="nav-link-item">
      <a href="#SelectLocModal" data-toggle="modal" data-target="#SelectLocModal">
          <i class="fa fa-map-marker"></i>
          <span>Location</span>
      </a>
    </div>
    <div class="nav-link-item sign-in">
      @if(!Auth::user())
      <a href="{{trans_url('/client')}}">
        <i class="fa fa-user-circle-o"></i>
      </a>
      @elseif(Auth::user())
      <div class="dropup">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fa fa-user-circle-o"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-right">
          <a class="dropdown-item" href="{{trans_url('client/profile')}}">My profile</a>
          <a class="dropdown-item" href="{{trans_url('client/cart/referral')}}">My Reference</a>
          <a class="dropdown-item" href="{{trans_url('client/cart/referralorders')}}">Reference orders</a>
          <a class="dropdown-item" href="{{trans_url('client/cart/myorders')}}">My Orders</a>
          <a class="dropdown-item" href="{{trans_url('client/logout')}}">Logout</a>
        </div>
      </div>
      
      @endif
  </div>  
</nav>

<div class="modal fade location-select-modal" id="SelectLocModal" tabindex="-1" role="dialog" aria-labelledby="SelectLocModalTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span class="lnr lnr-cross-circle"></span></button>
                <h4>Select Location</h4>
                <div class="loction-select-wrap">
                    <div class="location-wrap-inner">
                        <div class="loc-item ">
                            {!!Form::select('search[location_id]')
                            ->label('Location')
                            ->id('location-srch')
                            ->options(Location::parent(1))
                            ->placeholder('Location')
                            ->addClass('chosen-select')
                            -> raw()!!}
                        </div>
                        <div class="loc-item ">
                            {!!Form::select('search[sublocation_id]')
                            ->label('Sublocation')
                            ->id('srch-sublocation')
                            ->options(array())
                            ->placeholder('Sublocation')
                            -> raw()!!}
                        </div>
                    </div>
                    <button type="button" class="btn btn-primary color-1" id="location_submit"><i class="fa fa-angle-right"></i></button>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade location-select-modal" id="SelectLocModal1" tabindex="-1" role="dialog" aria-labelledby="SelectLocModalTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered "  role="document">
        <div class="modal-content" style="min-height: 100px;">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span class="lnr lnr-cross-circle"></span></button>
                <div class="loction-select-wrap" id="location_details">
                </div>
            </div>
        </div>
    </div>
</div>

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
            $('.search_q').val(ui.item.value);
             $('.search_product').submit();
          //$("#product-product-search").attr('action', "formUrl +'/'+ui.item.id");
        }
    });
    // $(".add-to-cart").on('click', function(e) {
    //      e.preventDefault();
    //     var id = $(this).attr("data-product"); 
    //     let selectedSize = selectedSizes[id];
    //     $url = "{{trans_url('carts/save')}}"+"/"+id;
    //     if(selectedSize == undefined && selectedProduct['size'] != null){
    //         alert('Please select a size');
    //         return;
    //     }
    //     if(selectedSize != undefined)
    //     {
    //         $url = "{{trans_url('carts/save')}}"+"/"+id+"/"+selectedSize;
    //     }
    //      $.ajax({
    //         //  url: "{{trans_url('carts/save')}}"+"/"+id,
    //          url: $url,
    //          type: 'GET',
    //           processData: true,
    //          contentType: false,
    //          success: function(data, textStatus, jqXHR) {
             
    //             $(".cart-header").html(data);
    //          },
    //          error: function(jqXHR, textStatus, errorThrown) {
    //              console.log(jqXHR);
    //          }
    //      });
    //  });


    $("#location-srch").change(function(){
        var sublocation = $("#location-srch option:selected").val();
        $("#srch-sublocation").load('{{url("location/options")}}'+'/'+sublocation);
    });

    $('#location_submit').click(function(e){
        var loc = $("#location-srch option:selected").val(),
            subloc = $("#srch-sublocation option:selected").val(),
            address = loc+', '+subloc; 
             $.ajax({
              url: "{{ URL::to('location/setLocation') }}/"+loc+"/"+subloc,
              dataType:'JSON',
              success: function(data){ 
                $("#dellocation").html(data.location);
                $('#SelectLocModal1').modal('show');
                $('#location_details').html(data.view);
              }
              
          });
             // $("#dellocation").html(data.location);
        $('#SelectLocModal').modal('hide');
    });

});   

    // $( document ).ajaxComplete(function() {
    //     $(".add-to-cart").on('click', function(e) { 
    //          e.preventDefault();
    //         var id = $(this).attr("data-product"); 
    //          $.ajax({
    //              url: "{{trans_url('carts/save')}}"+"/"+id,
    //              type: 'GET',
    //               processData: true,
    //              contentType: false,
    //              success: function(data, textStatus, jqXHR) {
                 
    //                 $(".cart-header").html(data);
    //              },
    //              error: function(jqXHR, textStatus, errorThrown) {
    //                  console.log(jqXHR);
    //              }
    //          });
    //      });  
    // });
</script>