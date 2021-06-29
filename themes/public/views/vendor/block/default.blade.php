<div class="container-pad">
	 <div class="row ads-slider1">
  		@foreach($blocks as $key => $block)      
        <div class="col-md-4 col-sm-6">
        	<a href="{{trans_url('category/groceries')}}">
	            <div class="single-product-top" style="background: url({{url($block->defaultImage('images','original'))}});"></div>
            </a>
        </div>
        @endforeach   
    </div>
</div>