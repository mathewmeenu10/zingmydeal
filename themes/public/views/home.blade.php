<section class="hero-wrap ">
    {!!Slider::index()!!}
</section>    
<div class="home-wrap">
    <section class="lattest-product-area pt-30">
       {!!Product::gadget('public.product.gadget.categorySlider')!!}
    </section>
    <div class="products-top electronic-product-top pt-30">
        {!!Product::gadget('public.product.gadget.listing', 6)!!}
    </div>
     <section class="lattest-product-area pt-30 pb-30">
        {!!Product::gadget('public.product.gadget.newproducts',10)!!}
    </section>
     <section class="section-half pt-0 pb-30">
         {!!Product::gadget('public.product.gadget.searchproduct',12)!!}
    </section>
    <section class="container-pad pb-30">
        <!-- TESTIMONIALS -->
          <div class="banner-area middle organic-banner-area pt-50 pb-50" style="border-radius: 6px;">
            {!!Product::reviews()!!}
        </div>
</section>
    <!-- END OF TESTIMONIALS -->
    
</div>
<style type="text/css">


</style>
