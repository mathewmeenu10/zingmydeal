<div class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left">
  <h3>Menu</h3>
  <a href="{{url('/')}}">Home</a>
    <div class="dropdown custom-department-dropdown " style="background: none;">
      <a href="#" role="button" id="dropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropbutton">Products<span class="fa fa-angle-down ml-5"></span></a>
      <div class="dropdown-menu" aria-labelledby="dropdownMenuLink2">
        <a class="dropdown-item" href="{{url('products')}}"><span>All products</span></a>
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
  <div class="dropdown custom-department-dropdown " style="background: none;">
    <a href="#" role="button" id="dropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropbutton">Top 10<span class="fa fa-angle-down ml-5"></span></a>
    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink2">
      @foreach(Product::mainCategories() as  $category)
        <a class="dropdown-item" data-related="{{strtok($category->slug, '-')}}" href="{{url('list_category/'.@$category->slug)}}"><span>{{@$category->name}}</span> 
        <!-- <span class="lnr lnr-arrow-right"></span> -->
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
  <a href="{{url('products')}} ">New Products</a>
  <a href="{{url('products?search%5Boffer%5D=Yes')}}">Top Offers</a>
  <a href="{{url('about-us')}}">About Us</a>
  <a href="{{url('contact')}}">Contact Us</a>
</div>  
<!-- Start Footer Area -->
<footer class="organic-footer">
  <div class="container-pad">
    <div class="footer-widget">
      <div class="row">
        <div class="col-lg-3 col-sm-12 pt-10">
          <div class="single-footer-widget">
            <a href="{{trans_url('/')}}"><img src="{{theme_asset('img/logo/zingmydealLogo.png')}}" class="main-logo img-fluid" style="max-width: 50%;"></a>
          </div>
          <div class="footer-social ml-35" ></div>
        </div>
        <div class="col-lg-3 col-sm-12">
          <div class="single-footer-widget">
            <h5>Categories</h5>
            <ul>
            @foreach(Product::mainCategories() as  $category)
              <li><a href="{{trans_url('category/'.$category->slug)}}">{{$category->name}}</a></li>
            @endforeach
            </ul>
          </div>
        </div>
        <div class="col-lg-3 col-sm-12">
          <div class="single-footer-widget">
            <h5>Get to know Us</h5>
            <ul>
              <li><a href="{{trans_url('about-us')}}">About Us</a></li>
              <li><a href="{{trans_url('contact')}}">Contact</a></li>
            </ul>
          </div>
        </div>
        <div class="col-lg-3 col-sm-12">
          <div class="single-footer-widget">
            <h5>Follow Us</h5>
            <ul>
              <a href="https://www.facebook.com/ZingMydeal-111172050758862/" class="p-1 footer-icon" > <i class="fa fa-facebook fa-lg fa-2x"></i></a>
              <a href="https://twitter.com/zingmydeal?s=08" class="p-1 footer-icon"><i class="fa fa-twitter fa-lg fa-2x"></i></a>
              <a href="https://www.instagram.com/invites/contact/?utm_source=ig_contact_invite&utm_medium=user_system_sheet&utm_content=jty9xu9" class="p-1 footer-icon"><i class="fa fa-instagram fa-lg fa-2x"></i></a>
              <a href="https://www.youtube.com/channel/UCoB52a_orpej220zK6N_Isw" class="p-1 footer-icon"><i class="fa fa-youtube-play fa-lg fa-2x"></i></a>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="copyright"> <p class="copyright-text text-center footer-icon">Copyright &copy; 2020 <a href="{{url('/')}}" class="footer-icon">zingmydeal</a>.  All rights reserved.</p></div>
</footer>
<!-- End Footer Area -->
    
<footer class="footer-mob">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="footer-bottom">
          <div class="footer-nav">
            <h3>Quick Links</h3>
            <a href="{{trans_url('products')}}">New Products</a>
            <a href="{{url('about-us')}}">About Us</a>
            <a href="{{trans_url('top-listing')}}">Top Listing</a>
            
            <a href="{{trans_url('contact')}}">Contact Us</a>
            <a href="{{url('products?search%5Boffer%5D=Yes')}}">Top Offers</a>
            <a href="#"></a>
            <a href=""></a>
            <a href="#"></a>
            <div class="footer-social">
                <h3>Follow Us</h3>
                <a href="https://www.facebook.com/ZingMydeal-111172050758862/"><i class="fa fa-facebook"></i></a>
                <a href="https://twitter.com/zingmydeal?s=08"><i class="fa fa-twitter"></i></a>
                <a href="https://www.instagram.com/invites/contact/?utm_source=ig_contact_invite&utm_medium=user_system_sheet&utm_content=jty9xu9"><i class="fa fa-instagram"></i></a>
                <a href="https://www.youtube.com/channel/UCoB52a_orpej220zK6N_Isw"><i class="fa fa-youtube-play"></i></a>
            </div>
          </div>
        </div>
         <!--  <p class="copyright-text">Copyright &copy; 2020 <a href="#">ZingMyDeals</a>. All rights reserved.</p> -->
      </div>
    </div>
  </div>
  <div class="copyright"> <p class="copyright-text text-center footer-icon">Copyright &copy; 2020 <a href="{{url('/')}}" class="footer-icon">zingmydeal</a>.  All rights reserved.</p></div>
</footer>
