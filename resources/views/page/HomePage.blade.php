@extends('master')
@section('content')
<section class="section row-sp deal-hot" id="section_289245873">
		<div class="bg section-bg fill bg-fill  bg-loaded">

			
			
			

		</div><!-- .section-bg -->

		<div class="section-content relative">
<div class="container section-title-container"><h3 class="section-title section-title-normal"><b></b><span class="section-title-main">Sản phẩm <strike>đắt nhất</strike> hot nhất</span><b></b><a href="#" target="">Xem thêm<i class="icon-angle-right"></i></a></h3></div><!-- .section-title -->

    <div class="row large-columns-6 medium-columns-3 small-columns-2 row-collapse slider row-slider slider-nav-simple slider-nav-outside slider-nav-push" data-flickity-options='{"imagesLoaded": true, "groupCells": "100%", "dragThreshold" : 5, "cellAlign": "left","wrapAround": true,"prevNextButtons": true,"percentPosition": true,"pageDots": false, "rightToLeft": false, "autoPlay" : false}'>
    	 <!--top product list start here -->
    	 @foreach($top_product as $product)
    	<div class="col">
						<div class="col-inner">
						
							<div class="badge-container absolute left top z-1">
									<div class="callout badge badge-square">
										<div class="badge-inner secondary on-sale">
											<span class="onsale">-{{$product->sale}}%</span>
										</div>
									</div>
							</div>
						<div class="product-small box has-hover box-normal box-text-bottom">
							<div class="box-image">
								<div class="image-overlay-add image-zoom image-cover" style="padding-top:100%;">
									<a href="san-pham\mascara-lam-day-va-toi-mi-maybelline-lash-sensational-10ml-lash-sensational-waterproof-mascara\index.htm">
										<img width="358" height="358" src="wp-content\themes\flatsome\assets\img\lazy.png" data-src="{{$product->image}}" class="lazy-load attachment-original size-original" alt="" srcset="" data-srcset="{{$product->image}} 358w, {{$product->image}} 150w, {{$product->image}} 300w, {{$product->image}} 100w" sizes="(max-width: 358px) 100vw, 358px">									</a>
									<div class="overlay fill" style="background-color: rgba(255, 255, 255, 0.27)"></div>									 								</div>
								<div class="image-tools top right show-on-hover">
																	</div>
																	<div class="image-tools grid-tools text-center hide-for-small bottom hover-slide-in show-on-hover">
																			</div>
																							</div><!-- box-image -->

							<div class="box-text text-left" style="text-align: center;">
								<div class="title-wrapper">
									<p class="category uppercase is-smaller no-text-overflow product-cat op-7">{{$product->name}}</p>
								</div>
	<div class="price-wrapper">
		<div class="pwb-brands-in-loop" style="margin-left: 0px;">
			<span><a href="thuong-hieu\aleda\index.htm"><img width="120" height="60" src="wp-content\themes\flatsome\assets\img\lazy.png" data-src="
			@foreach($brand as $key)
				@if($product->id_brand == $key->id)
				{{$key->image}}
				@endif
			@endforeach
			" class="lazy-load attachment-thumbnail size-thumbnail" alt=""></a>
			</span>
		</div>
		<p class="name product-title"><a href="san-pham\mascara-lam-day-va-toi-mi-maybelline-lash-sensational-10ml-lash-sensational-waterproof-mascara\index.htm">Siêu ngầu</a></p>
	@if ($product->promotion_price != 0)
	<span class="price"><del><span class="woocommerce-Price-amount amount">{{$product->unit_price}}<span class="woocommerce-Price-currencySymbol">&#8363;</span></span></del> <ins><span class="woocommerce-Price-amount amount">{{$product->promotion_price}}<span class="woocommerce-Price-currencySymbol">&#8363;</span></span></ins></span>
	@else
	<span class="price"><ins><span class="woocommerce-Price-amount amount">{{$product->unit_price}}<span class="woocommerce-Price-currencySymbol">&#8363;</span></span></ins></span>
	@endif
</div>							</div><!-- box-text -->
						</div><!-- box -->
						</div><!-- .col-inner -->
	</div><!-- col -->    

	@endforeach
	 <!--list end here -->    			            
	</div>
</div><!-- .section-content -->

		
<style scope="scope">

#section_289245873 {
  padding-top: 10px;
  padding-bottom: 10px;
  background-color: rgb(245, 251, 246);
}
</style>
	</section>
	
	<section class="section row-sp thuong-hieu" id="section_1158551858">
		<div class="bg section-bg fill bg-fill  bg-loaded"></div><!-- .section-bg -->
		<div class="section-content relative">
			
<div class="container section-title-container"><h3 class="section-title section-title-normal"><b></b><span class="section-title-main">Thương hiệu nổi bật</span><b></b><a href="thuong-hieu\index.htm" target="">Xem thêm<i class="icon-angle-right"></i></a></h3></div><!-- .section-title -->
<div class="row row-small row-thuong-hieu" id="row-457468224">

  <!--brand list start here -->
	@foreach($brand as $key)
	<div class="col medium-3 small-6 large-3"><div class="col-inner">
	<div class="img has-hover x md-x lg-x y md-y lg-y image_329986142">
		<a class="" href="#" target="_blank" rel="noopener noreferrer">						<div class="img-inner image-color dark">
			<img width="150" height="75" src="wp-content\themes\flatsome\assets\img\lazy.png" data-src="{{$key->image}}" class="lazy-load attachment-original size-original" alt="">						
					</div>
						</a>		
		<style scope="scope">

		.image_329986142 {
		  width: 100%;
		}
		</style>
			</div>
			
		</div>
	</div>
	@endforeach
	<!--brand list end here -->
<style scope="scope">

</style>
</div>
		</div><!-- .section-content -->

		
<style scope="scope">

#section_1158551858 {
  padding-top: 10px;
  padding-bottom: 10px;
  background-color: rgb(245, 251, 246);
}
</style>
	</section>
	
	<section class="section category-row" id="section_34774294">
		<div class="bg section-bg fill bg-fill  bg-loaded">

			
			
			

		</div><!-- .section-bg -->

		<div class="section-content relative">
			
<div class="row" id="row-2084844182">
<div class="col small-12 large-12"><div class="col-inner">
<div class="tieu-de-row">
<div class="left">
<h1><a href="#" target="blank" style="color: #f69;">Samsung</a></h1>
</div>
<div class="right">
<ul>
<li><a href="#" target="blank">+ Xem thêm</a></li>
</ul>
</div>
<div class="clearboth"></div>
</div>
</div></div>
</div>
<div class="row row-collapse" id="row-197847448">
<div class="col cot1 medium-2 small-12 large-2"><div class="col-inner">
	<div class="img has-hover x md-x lg-x y md-y lg-y" id="image_1779448087">
								<div class="img-inner dark">
			<img width="220" height="350" src="wp-content\themes\flatsome\assets\img\lazy.png" data-src="https://cdn.24h.com.vn/upload/1-2019/images/2019-01-01/1546334082-244-2-1546271424-width660height885.jpg" class="lazy-load attachment-original size-original" alt="" srcset="" data-srcset="https://cdn.24h.com.vn/upload/1-2019/images/2019-01-01/1546334082-244-2-1546271424-width660height885.jpg 220w, https://cdn.24h.com.vn/upload/1-2019/images/2019-01-01/1546334082-244-2-1546271424-width660height885.jpg 189w" sizes="(max-width: 220px) 100vw, 220px">						
					</div>
								
<style scope="scope">

#image_1779448087 {
  width: 100%;
}
</style>
	</div>
	
<div class="cloud-tag">
<ul>
<li><a href="#" target="blank">sang trọng</a></li>
<li><a href="#" target="blank">thời thượng</a></li>
</ul>
</div>
</div></div>
<div class="col cot2 row-sp medium-9 small-12 large-9"><div class="col-inner">
<div class="row row-collapse" id="row-1088066314">
	<!-- image brand start here-->
<div class="col medium-4 small-12 large-4"><div class="col-inner">
	<div class="img has-hover x md-x lg-x y md-y lg-y" id="image_1940431317">
		<a class="" href="#" target="_blank" rel="noopener noreferrer">						<div class="img-inner image-zoom dark">
			<img width="366" height="200" src="wp-content\themes\flatsome\assets\img\lazy.png" data-src="https://cafebiz.cafebizcdn.vn/thumb_w/600/2017/dsc-4389-1502180086536-1502180938181.jpg" class="lazy-load attachment-original size-original" alt="" srcset="" data-srcset="https://cafebiz.cafebizcdn.vn/thumb_w/600/2017/dsc-4389-1502180086536-1502180938181.jpg 366w, https://cafebiz.cafebizcdn.vn/thumb_w/600/2017/dsc-4389-1502180086536-1502180938181.jpg 300w" sizes="(max-width: 366px) 100vw, 366px">						
					</div>
						</a>		
		<style scope="scope">

		#image_1940431317 {
		  width: 100%;
		}
		</style>
			</div>
			
		</div>
	</div>
	<div class="col medium-4 small-12 large-4"><div class="col-inner">
	<div class="img has-hover x md-x lg-x y md-y lg-y" id="image_1940431317">
		<a class="" href="#" target="_blank" rel="noopener noreferrer">						<div class="img-inner image-zoom dark">
			<img width="366" height="200" src="wp-content\themes\flatsome\assets\img\lazy.png" data-src="https://cafebiz.cafebizcdn.vn/thumb_w/600/2017/dsc-4389-1502180086536-1502180938181.jpg" class="lazy-load attachment-original size-original" alt="" srcset="" data-srcset="https://cafebiz.cafebizcdn.vn/thumb_w/600/2017/dsc-4389-1502180086536-1502180938181.jpg 366w, https://cafebiz.cafebizcdn.vn/thumb_w/600/2017/dsc-4389-1502180086536-1502180938181.jpg 300w" sizes="(max-width: 366px) 100vw, 366px">						
					</div>
						</a>		
		<style scope="scope">

		#image_1940431317 {
		  width: 100%;
		}
		</style>
			</div>
			
		</div>
	</div>
<!-- image brand end here-->

<style scope="scope">

</style>
</div>
<div class="container section-title-container"><h3 class="section-title section-title-normal"><b></b><span class="section-title-main">Nổi bật và bán chạy</span><b></b><a href="#" target="">+ Xem thêm<i class="icon-angle-right"></i></a></h3></div><!-- .section-title -->

  
    <div class="row large-columns-5 medium-columns-3 small-columns-2 row-collapse slider row-slider slider-nav-simple slider-nav-push" data-flickity-options='{"imagesLoaded": true, "groupCells": "100%", "dragThreshold" : 5, "cellAlign": "left","wrapAround": true,"prevNextButtons": true,"percentPosition": true,"pageDots": false, "rightToLeft": false, "autoPlay" : false}'>
		<!--list start-->
		@foreach($samsung as $phone)
			<div class="col">
						<div class="col-inner">
						
<div class="badge-container absolute left top z-1">
		<div class="callout badge badge-square"><div class="badge-inner secondary on-sale"><span class="onsale">-{{$phone->sale}}%</span></div></div>
</div>
						<div class="product-small box has-hover box-normal box-text-bottom">
							<div class="box-image">
								<div class="image-overlay-add image-zoom image-cover" style="padding-top:100%;">
									<a href="san-pham\mascara-lam-day-va-toi-mi-maybelline-lash-sensational-10ml-lash-sensational-waterproof-mascara\index.htm">
										<img width="358" height="358" src="wp-content\themes\flatsome\assets\img\lazy.png" data-src="{{$phone->image}}" class="lazy-load attachment-original size-original" alt="">									</a>
									<div class="overlay fill" style="background-color: rgba(255, 255, 255, 0.26)"></div>									 								</div>
								<div class="image-tools top right show-on-hover">
																	</div>
																	<div class="image-tools grid-tools text-center hide-for-small bottom hover-slide-in show-on-hover">
																			</div>
																							</div><!-- box-image -->

							<div class="box-text text-left" style="text-align: center;">
								<div class="title-wrapper">
							<p class="category uppercase is-smaller no-text-overflow product-cat op-7">{{$phone->name}}</p>
	<p class="name product-title"><a href="san-pham\mascara-lam-day-va-toi-mi-maybelline-lash-sensational-10ml-lash-sensational-waterproof-mascara\index.htm">Siêu điện thoại cực ngầu</a></p></div><div class="price-wrapper"><div class="pwb-brands-in-loop"><span><a href="thuong-hieu\aleda\index.htm"><img width="120" height="60" src="wp-content\themes\flatsome\assets\img\lazy.png" data-src="@foreach($brand as $key)
		@if ($phone->id_brand == $key->id)
			{{$key->image}}
		@endif
	@endforeach" class="lazy-load attachment-thumbnail size-thumbnail" alt=""></a></span></div>
	@if ($phone->promotion_price != 0)
	<span class="price"><del><span class="woocommerce-Price-amount amount">{{$phone->unit_price}}<span class="woocommerce-Price-currencySymbol">&#8363;</span></span></del> <ins><span class="woocommerce-Price-amount amount">{{$phone->promotion_price}}<span class="woocommerce-Price-currencySymbol">&#8363;</span></span></ins></span>
	@else
	<span class="price"><ins><span class="woocommerce-Price-amount amount">{{$phone->unit_price}}<span class="woocommerce-Price-currencySymbol">&#8363;</span></span></ins></span>
	@endif
</div>							</div><!-- box-text -->
						</div><!-- box -->
						</div><!-- .col-inner -->
					</div><!-- col -->
					@endforeach
  		<!--list end-->			            
	   </div>
	</div>
</div>

<style scope="scope">

</style>
</div>
		</div><!-- .section-content -->

		
<style scope="scope">

#section_34774294 {
  padding-top: 10px;
  padding-bottom: 10px;
  background-color: rgb(245, 251, 246);
}
</style>
	</section>
	
		<section class="section category-row" id="section_34774294">
		<div class="bg section-bg fill bg-fill  bg-loaded">

			
			
			

		</div><!-- .section-bg -->

		<div class="section-content relative">
			
<div class="row" id="row-2084844182">
<div class="col small-12 large-12"><div class="col-inner">
<div class="tieu-de-row">
<div class="left">
<h2><a href="#" target="blank">Iphone</a></h2>
</div>
<div class="right">
<ul>
<li><a href="#" target="blank">+ Xem thêm</a></li>
</ul>
</div>
<div class="clearboth"></div>
</div>
</div></div>
</div>
<div class="row row-collapse" id="row-197847448">
<div class="col cot1 medium-2 small-12 large-2"><div class="col-inner">
	<div class="img has-hover x md-x lg-x y md-y lg-y" id="image_1779448087">
								<div class="img-inner dark">
			<img width="220" height="350" src="wp-content\themes\flatsome\assets\img\lazy.png" data-src="https://shoplamdep.haiphongweb.com/wp-content/uploads/2019/02/220-x-350.jpg" class="lazy-load attachment-original size-original" alt="" srcset="" data-srcset="https://shoplamdep.haiphongweb.com/wp-content/uploads/2019/02/220-x-350.jpg 220w, https://shoplamdep.haiphongweb.com/wp-content/uploads/2019/02/220-x-350-189x300.jpg 189w" sizes="(max-width: 220px) 100vw, 220px">						
					</div>
								
<style scope="scope">

#image_1779448087 {
  width: 100%;
}
</style>
	</div>
	
<div class="cloud-tag">
<ul>
<li><a href="#" target="blank">sang trọng</a></li>
<li><a href="#" target="blank">thời thượng</a></li>
</ul>
</div>
</div></div>
<div class="col cot2 row-sp medium-9 small-12 large-9"><div class="col-inner">
<div class="row row-collapse" id="row-1088066314">
	<!-- image brand start here-->
<div class="col medium-4 small-12 large-4"><div class="col-inner">
	<div class="img has-hover x md-x lg-x y md-y lg-y" id="image_1940431317">
		<a class="" href="#" target="_blank" rel="noopener noreferrer">						<div class="img-inner image-zoom dark">
			<img width="366" height="200" src="wp-content\themes\flatsome\assets\img\lazy.png" data-src="https://shoplamdep.haiphongweb.com/wp-content/uploads/2019/02/omg-desktop_4.jpg" class="lazy-load attachment-original size-original" alt="" srcset="" data-srcset="https://shoplamdep.haiphongweb.com/wp-content/uploads/2019/02/omg-desktop_4.jpg 366w, https://shoplamdep.haiphongweb.com/wp-content/uploads/2019/02/omg-desktop_4-300x164.jpg 300w" sizes="(max-width: 366px) 100vw, 366px">						
					</div>
						</a>		
		<style scope="scope">

		#image_1940431317 {
		  width: 100%;
		}
		</style>
			</div>
			
		</div>
	</div>
<!-- image brand end here-->

<style scope="scope">

</style>
</div>
<div class="container section-title-container"><h3 class="section-title section-title-normal"><b></b><span class="section-title-main">Nổi bật và bán chạy</span><b></b><a href="#" target="">+ Xem thêm<i class="icon-angle-right"></i></a></h3></div><!-- .section-title -->

  
    <div class="row large-columns-5 medium-columns-3 small-columns-2 row-collapse slider row-slider slider-nav-simple slider-nav-push" data-flickity-options='{"imagesLoaded": true, "groupCells": "100%", "dragThreshold" : 5, "cellAlign": "left","wrapAround": true,"prevNextButtons": true,"percentPosition": true,"pageDots": false, "rightToLeft": false, "autoPlay" : false}'>
		<!--list start-->
		@foreach($iphone as $phone)
			<div class="col">
						<div class="col-inner">
						
<div class="badge-container absolute left top z-1">
		<div class="callout badge badge-square"><div class="badge-inner secondary on-sale"><span class="onsale">-{{$phone->sale}}%</span></div></div>
</div>
						<div class="product-small box has-hover box-normal box-text-bottom">
							<div class="box-image">
								<div class="image-overlay-add image-zoom image-cover" style="padding-top:100%;">
									<a href="san-pham\mascara-lam-day-va-toi-mi-maybelline-lash-sensational-10ml-lash-sensational-waterproof-mascara\index.htm">
										<img width="358" height="358" src="wp-content\themes\flatsome\assets\img\lazy.png" data-src="{{$phone->image}}" class="lazy-load attachment-original size-original" alt="">									</a>
									<div class="overlay fill" style="background-color: rgba(255, 255, 255, 0.26)"></div>									 								</div>
								<div class="image-tools top right show-on-hover">
																	</div>
																	<div class="image-tools grid-tools text-center hide-for-small bottom hover-slide-in show-on-hover">
																			</div>
																							</div><!-- box-image -->

							<div class="box-text text-left" style="text-align: center;">
								<div class="title-wrapper">
							<p class="category uppercase is-smaller no-text-overflow product-cat op-7">{{$phone->name}}</p>
	<p class="name product-title"><a href="san-pham\mascara-lam-day-va-toi-mi-maybelline-lash-sensational-10ml-lash-sensational-waterproof-mascara\index.htm">Siêu điện thoại cực ngầu</a></p></div><div class="price-wrapper"><div class="pwb-brands-in-loop"><span><a href="thuong-hieu\aleda\index.htm"><img width="120" height="60" src="wp-content\themes\flatsome\assets\img\lazy.png" data-src="@foreach($brand as $key)
		@if ($phone->id_brand == $key->id)
			{{$key->image}}
		@endif
	@endforeach" class="lazy-load attachment-thumbnail size-thumbnail" alt=""></a></span></div>
	@if ($phone->promotion_price != 0)
	<span class="price"><del><span class="woocommerce-Price-amount amount">{{$phone->unit_price}}<span class="woocommerce-Price-currencySymbol">&#8363;</span></span></del> <ins><span class="woocommerce-Price-amount amount">{{$phone->promotion_price}}<span class="woocommerce-Price-currencySymbol">&#8363;</span></span></ins></span>
	@else
	<span class="price"><ins><span class="woocommerce-Price-amount amount">{{$phone->unit_price}}<span class="woocommerce-Price-currencySymbol">&#8363;</span></span></ins></span>
	@endif
</div>							</div><!-- box-text -->
						</div><!-- box -->
						</div><!-- .col-inner -->
					</div><!-- col -->
					@endforeach
  		<!--list end-->		            
	   </div>
	</div>
</div>

<style scope="scope">

</style>
</div>
		</div><!-- .section-content -->

		
<style scope="scope">

#section_34774294 {
  padding-top: 10px;
  padding-bottom: 10px;
  background-color: rgb(245, 251, 246);
}
</style>
	</section>
		<section class="section category-row" id="section_34774294">
		<div class="bg section-bg fill bg-fill  bg-loaded">

			
			
			

		</div><!-- .section-bg -->

		<div class="section-content relative">
			
<div class="row" id="row-2084844182">
<div class="col small-12 large-12"><div class="col-inner">
<div class="tieu-de-row">
<div class="left">
<h2><a href="#" target="blank">Xiaomi</a></h2>
</div>
<div class="right">
<ul>
<li><a href="#" target="blank">+ Xem thêm</a></li>
</ul>
</div>
<div class="clearboth"></div>
</div>
</div></div>
</div>
<div class="row row-collapse" id="row-197847448">
<div class="col cot1 medium-2 small-12 large-2"><div class="col-inner">
	<div class="img has-hover x md-x lg-x y md-y lg-y" id="image_1779448087">
								<div class="img-inner dark">
			<img width="220" height="350" src="wp-content\themes\flatsome\assets\img\lazy.png" data-src="https://shoplamdep.haiphongweb.com/wp-content/uploads/2019/02/220-x-350.jpg" class="lazy-load attachment-original size-original" alt="" srcset="" data-srcset="https://shoplamdep.haiphongweb.com/wp-content/uploads/2019/02/220-x-350.jpg 220w, https://shoplamdep.haiphongweb.com/wp-content/uploads/2019/02/220-x-350-189x300.jpg 189w" sizes="(max-width: 220px) 100vw, 220px">						
					</div>
								
<style scope="scope">

#image_1779448087 {
  width: 100%;
}
</style>
	</div>
	
<div class="cloud-tag">
<ul>
<li><a href="#" target="blank">sang trọng</a></li>
<li><a href="#" target="blank">thời thượng</a></li>
</ul>
</div>
</div></div>
<div class="col cot2 row-sp medium-9 small-12 large-9"><div class="col-inner">
<div class="row row-collapse" id="row-1088066314">
	<!-- image brand start here-->
<div class="col medium-4 small-12 large-4"><div class="col-inner">
	<div class="img has-hover x md-x lg-x y md-y lg-y" id="image_1940431317">
		<a class="" href="#" target="_blank" rel="noopener noreferrer">						<div class="img-inner image-zoom dark">
			<img width="366" height="200" src="wp-content\themes\flatsome\assets\img\lazy.png" data-src="https://shoplamdep.haiphongweb.com/wp-content/uploads/2019/02/omg-desktop_4.jpg" class="lazy-load attachment-original size-original" alt="" srcset="" data-srcset="https://shoplamdep.haiphongweb.com/wp-content/uploads/2019/02/omg-desktop_4.jpg 366w, https://shoplamdep.haiphongweb.com/wp-content/uploads/2019/02/omg-desktop_4-300x164.jpg 300w" sizes="(max-width: 366px) 100vw, 366px">						
					</div>
						</a>		
		<style scope="scope">

		#image_1940431317 {
		  width: 100%;
		}
		</style>
			</div>
			
		</div>
	</div>
<!-- image brand end here-->

<style scope="scope">

</style>
</div>
<div class="container section-title-container"><h3 class="section-title section-title-normal"><b></b><span class="section-title-main">Nổi bật và bán chạy</span><b></b><a href="#" target="">+ Xem thêm<i class="icon-angle-right"></i></a></h3></div><!-- .section-title -->

  
    <div class="row large-columns-5 medium-columns-3 small-columns-2 row-collapse slider row-slider slider-nav-simple slider-nav-push" data-flickity-options='{"imagesLoaded": true, "groupCells": "100%", "dragThreshold" : 5, "cellAlign": "left","wrapAround": true,"prevNextButtons": true,"percentPosition": true,"pageDots": false, "rightToLeft": false, "autoPlay" : false}'>
		<!--list start-->
		@foreach($xiaomi as $phone)
			<div class="col">
						<div class="col-inner">
						
<div class="badge-container absolute left top z-1">
		<div class="callout badge badge-square"><div class="badge-inner secondary on-sale"><span class="onsale">-{{$phone->sale}}%</span></div></div>
</div>
						<div class="product-small box has-hover box-normal box-text-bottom">
							<div class="box-image">
								<div class="image-overlay-add image-zoom image-cover" style="padding-top:100%;">
									<a href="san-pham\mascara-lam-day-va-toi-mi-maybelline-lash-sensational-10ml-lash-sensational-waterproof-mascara\index.htm">
										<img width="358" height="358" src="wp-content\themes\flatsome\assets\img\lazy.png" data-src="{{$phone->image}}" class="lazy-load attachment-original size-original" alt="">									</a>
									<div class="overlay fill" style="background-color: rgba(255, 255, 255, 0.26)"></div>									 								</div>
								<div class="image-tools top right show-on-hover">
																	</div>
																	<div class="image-tools grid-tools text-center hide-for-small bottom hover-slide-in show-on-hover">
																			</div>
																							</div><!-- box-image -->

							<div class="box-text text-left" style="text-align: center;">
								<div class="title-wrapper">
							<p class="category uppercase is-smaller no-text-overflow product-cat op-7">{{$phone->name}}</p>
	<p class="name product-title"><a href="san-pham\mascara-lam-day-va-toi-mi-maybelline-lash-sensational-10ml-lash-sensational-waterproof-mascara\index.htm">Siêu điện thoại cực ngầu</a></p></div><div class="price-wrapper"><div class="pwb-brands-in-loop"><span><a href="thuong-hieu\aleda\index.htm"><img width="120" height="60" src="wp-content\themes\flatsome\assets\img\lazy.png" data-src="@foreach($brand as $key)
		@if ($phone->id_brand == $key->id)
			{{$key->image}}
		@endif
	@endforeach" class="lazy-load attachment-thumbnail size-thumbnail" alt=""></a></span></div>
	@if ($phone->promotion_price != 0)
	<span class="price"><del><span class="woocommerce-Price-amount amount">{{$phone->unit_price}}<span class="woocommerce-Price-currencySymbol">&#8363;</span></span></del> <ins><span class="woocommerce-Price-amount amount">{{$phone->promotion_price}}<span class="woocommerce-Price-currencySymbol">&#8363;</span></span></ins></span>
	@else
	<span class="price"><ins><span class="woocommerce-Price-amount amount">{{$phone->unit_price}}<span class="woocommerce-Price-currencySymbol">&#8363;</span></span></ins></span>
	@endif
</div>							</div><!-- box-text -->
						</div><!-- box -->
						</div><!-- .col-inner -->
					</div><!-- col -->
					@endforeach
  		<!--list end-->		            
	   </div>
	</div>
</div>

<style scope="scope">

</style>
</div>
		</div><!-- .section-content -->

		
<style scope="scope">

#section_34774294 {
  padding-top: 10px;
  padding-bottom: 10px;
  background-color: rgb(245, 251, 246);
}
</style>
	</section>
		<section class="section category-row" id="section_34774294">
		<div class="bg section-bg fill bg-fill  bg-loaded">

			
			
			

		</div><!-- .section-bg -->

		<div class="section-content relative">
			
<div class="row" id="row-2084844182">
<div class="col small-12 large-12"><div class="col-inner">
<div class="tieu-de-row">
<div class="left">
<h2><a href="#" target="blank">Vinsmart</a></h2>
</div>
<div class="right">
<ul>
<li><a href="#" target="blank">+ Xem thêm</a></li>
</ul>
</div>
<div class="clearboth"></div>
</div>
</div></div>
</div>
<div class="row row-collapse" id="row-197847448">
<div class="col cot1 medium-2 small-12 large-2"><div class="col-inner">
	<div class="img has-hover x md-x lg-x y md-y lg-y" id="image_1779448087">
								<div class="img-inner dark">
			<img width="220" height="350" src="wp-content\themes\flatsome\assets\img\lazy.png" data-src="https://shoplamdep.haiphongweb.com/wp-content/uploads/2019/02/220-x-350.jpg" class="lazy-load attachment-original size-original" alt="" srcset="" data-srcset="https://shoplamdep.haiphongweb.com/wp-content/uploads/2019/02/220-x-350.jpg 220w, https://shoplamdep.haiphongweb.com/wp-content/uploads/2019/02/220-x-350-189x300.jpg 189w" sizes="(max-width: 220px) 100vw, 220px">						
					</div>
								
<style scope="scope">

#image_1779448087 {
  width: 100%;
}
</style>
	</div>
	
<div class="cloud-tag">
<ul>
<li><a href="#" target="blank">sang trọng</a></li>
<li><a href="#" target="blank">thời thượng</a></li>
</ul>
</div>
</div></div>
<div class="col cot2 row-sp medium-9 small-12 large-9"><div class="col-inner">
<div class="row row-collapse" id="row-1088066314">
	<!-- image brand start here-->
<div class="col medium-4 small-12 large-4"><div class="col-inner">
	<div class="img has-hover x md-x lg-x y md-y lg-y" id="image_1940431317">
		<a class="" href="#" target="_blank" rel="noopener noreferrer">						<div class="img-inner image-zoom dark">
			<img width="366" height="200" src="wp-content\themes\flatsome\assets\img\lazy.png" data-src="https://shoplamdep.haiphongweb.com/wp-content/uploads/2019/02/omg-desktop_4.jpg" class="lazy-load attachment-original size-original" alt="" srcset="" data-srcset="https://shoplamdep.haiphongweb.com/wp-content/uploads/2019/02/omg-desktop_4.jpg 366w, https://shoplamdep.haiphongweb.com/wp-content/uploads/2019/02/omg-desktop_4-300x164.jpg 300w" sizes="(max-width: 366px) 100vw, 366px">						
					</div>
						</a>		
		<style scope="scope">

		#image_1940431317 {
		  width: 100%;
		}
		</style>
			</div>
			
		</div>
	</div>
<!-- image brand end here-->

<style scope="scope">

</style>
</div>
<div class="container section-title-container"><h3 class="section-title section-title-normal"><b></b><span class="section-title-main">Nổi bật và bán chạy</span><b></b><a href="#" target="">+ Xem thêm<i class="icon-angle-right"></i></a></h3></div><!-- .section-title -->

  
    <div class="row large-columns-5 medium-columns-3 small-columns-2 row-collapse slider row-slider slider-nav-simple slider-nav-push" data-flickity-options='{"imagesLoaded": true, "groupCells": "100%", "dragThreshold" : 5, "cellAlign": "left","wrapAround": true,"prevNextButtons": true,"percentPosition": true,"pageDots": false, "rightToLeft": false, "autoPlay" : false}'>
		<!--list start-->
			<div class="col">
						<div class="col-inner">
						
<div class="badge-container absolute left top z-1">
		<div class="callout badge badge-square"><div class="badge-inner secondary on-sale"><span class="onsale">-19%</span></div></div>
</div>
						<div class="product-small box has-hover box-normal box-text-bottom">
							<div class="box-image">
								<div class="image-overlay-add image-zoom image-cover" style="padding-top:100%;">
									<a href="san-pham\mascara-lam-day-va-toi-mi-maybelline-lash-sensational-10ml-lash-sensational-waterproof-mascara\index.htm">
										<img width="358" height="358" src="wp-content\themes\flatsome\assets\img\lazy.png" data-src="https://shoplamdep.haiphongweb.com/wp-content/uploads/2019/02/mascara-maybelline-lam-day-va-toi-mi-10ml_1__img_358x358_843626_fit_center.jpg" class="lazy-load attachment-original size-original" alt="" srcset="" data-srcset="https://shoplamdep.haiphongweb.com/wp-content/uploads/2019/02/mascara-maybelline-lam-day-va-toi-mi-10ml_1__img_358x358_843626_fit_center.jpg 358w, https://shoplamdep.haiphongweb.com/wp-content/uploads/2019/02/mascara-maybelline-lam-day-va-toi-mi-10ml_1__img_358x358_843626_fit_center-150x150.jpg 150w, https://shoplamdep.haiphongweb.com/wp-content/uploads/2019/02/mascara-maybelline-lam-day-va-toi-mi-10ml_1__img_358x358_843626_fit_center-300x300.jpg 300w, https://shoplamdep.haiphongweb.com/wp-content/uploads/2019/02/mascara-maybelline-lam-day-va-toi-mi-10ml_1__img_358x358_843626_fit_center-100x100.jpg 100w" sizes="(max-width: 358px) 100vw, 358px">									</a>
									<div class="overlay fill" style="background-color: rgba(255, 255, 255, 0.26)"></div>									 								</div>
								<div class="image-tools top right show-on-hover">
																	</div>
																	<div class="image-tools grid-tools text-center hide-for-small bottom hover-slide-in show-on-hover">
																			</div>
																							</div><!-- box-image -->

							<div class="box-text text-left">
								<div class="title-wrapper">		<p class="category uppercase is-smaller no-text-overflow product-cat op-7">
			Chăm sóc da mặt		</p>
	<p class="name product-title"><a href="san-pham\mascara-lam-day-va-toi-mi-maybelline-lash-sensational-10ml-lash-sensational-waterproof-mascara\index.htm">Mascara Làm Dày Và Tơi Mi Maybelline Lash Sensation...</a></p></div><div class="price-wrapper"><div class="pwb-brands-in-loop"><span><a href="thuong-hieu\aleda\index.htm"><img width="120" height="60" src="wp-content\themes\flatsome\assets\img\lazy.png" data-src="https://shoplamdep.haiphongweb.com/wp-content/uploads/2019/02/1538456535ALEDA_img_120x60_63ea52_fit_center.jpg" class="lazy-load attachment-thumbnail size-thumbnail" alt=""></a></span></div>
	<span class="price"><del><span class="woocommerce-Price-amount amount">148.000<span class="woocommerce-Price-currencySymbol">&#8363;</span></span></del> <ins><span class="woocommerce-Price-amount amount">120.000<span class="woocommerce-Price-currencySymbol">&#8363;</span></span></ins></span>
</div>							</div><!-- box-text -->
						</div><!-- box -->
						</div><!-- .col-inner -->
					</div><!-- col -->
  		<!--list end-->			            
	   </div>
	</div>
</div>

<style scope="scope">

</style>
</div>
		</div><!-- .section-content -->

		
<style scope="scope">

#section_34774294 {
  padding-top: 10px;
  padding-bottom: 10px;
  background-color: rgb(245, 251, 246);
}
</style>
	</section>
	
		
				
</div>



</main><!-- #main -->

@endsection
@section('script')
 <script type="text/javascript">
		var c = document.body.className;
		c = c.replace(/woocommerce-no-js/, 'woocommerce-js');
		document.body.className = c;
	</script>
	<script type='text/javascript' src='wp-content\plugins\devvn-quick-buy\js\jquery.validate.min.js?ver=2.0.0'></script>
<script type='text/javascript' src='wp-content\plugins\devvn-quick-buy\js\jquery.bpopup.min.js?ver=2.0.0'></script>
<script type='text/javascript' src='wp-includes\js\underscore.min.js?ver=1.8.3'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var _wpUtilSettings = {"ajax":{"url":"\/wp-admin\/admin-ajax.php"}};
/* ]]> */
</script>
<script type='text/javascript' src='wp-includes\js\wp-util.min.js?ver=5.2.1'></script>
<script type='text/javascript' src='wp-content\plugins\woocommerce\assets\js\jquery-blockui\jquery.blockUI.min.js?ver=2.70'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var wc_add_to_cart_variation_params = {"wc_ajax_url":"\/?wc-ajax=%%endpoint%%","i18n_no_matching_variations_text":"R\u1ea5t ti\u1ebfc, kh\u00f4ng c\u00f3 s\u1ea3n ph\u1ea9m n\u00e0o ph\u00f9 h\u1ee3p v\u1edbi l\u1ef1a ch\u1ecdn c\u1ee7a b\u1ea1n. H\u00e3y ch\u1ecdn m\u1ed9t ph\u01b0\u01a1ng th\u1ee9c k\u1ebft h\u1ee3p kh\u00e1c.","i18n_make_a_selection_text":"Ch\u1ecdn c\u00e1c t\u00f9y ch\u1ecdn cho s\u1ea3n ph\u1ea9m tr\u01b0\u1edbc khi cho s\u1ea3n ph\u1ea9m v\u00e0o gi\u1ecf h\u00e0ng c\u1ee7a b\u1ea1n.","i18n_unavailable_text":"R\u1ea5t ti\u1ebfc, s\u1ea3n ph\u1ea9m n\u00e0y hi\u1ec7n kh\u00f4ng t\u1ed3n t\u1ea1i. H\u00e3y ch\u1ecdn m\u1ed9t ph\u01b0\u01a1ng th\u1ee9c k\u1ebft h\u1ee3p kh\u00e1c."};
/* ]]> */
</script>
<script type='text/javascript' src='wp-content\plugins\woocommerce\assets\js\frontend\add-to-cart-variation.min.js?ver=3.6.4'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var devvn_quickbuy_array = {"ajaxurl":"https:\/\/shoplamdep.haiphongweb.com\/wp-admin\/admin-ajax.php","siteurl":"https:\/\/shoplamdep.haiphongweb.com","popup_error":"\u0110\u1eb7t h\u00e0ng th\u1ea5t b\u1ea1i. Vui l\u00f2ng \u0111\u1eb7t h\u00e0ng l\u1ea1i. Xin c\u1ea3m \u01a1n!","out_of_stock_mess":"H\u1ebft h\u00e0ng!","price_decimal":".","num_decimals":"0","currency_format":"\u20ab"};
/* ]]> */
</script>
<script type='text/javascript' src='wp-content\plugins\devvn-quick-buy\js\devvn-quick-buy.js?ver=2.0.0'></script>
<script type='text/javascript' src='wp-content\plugins\ot-flatsome-vertical-menu\assets\js\ot-vertical-menu.js?ver=1.1.0'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var pwb_ajax_object = {"carousel_prev":"<","carousel_next":">"};
/* ]]> */
</script>
<script type='text/javascript' src='wp-content\plugins\perfect-woocommerce-brands\assets\js\functions-frontend.min.js?ver=1.7.6'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var wc_add_to_cart_params = {"ajax_url":"\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/?wc-ajax=%%endpoint%%","i18n_view_cart":"Xem gi\u1ecf h\u00e0ng","cart_url":"https:\/\/shoplamdep.haiphongweb.com\/gio-hang\/","is_cart":"","cart_redirect_after_add":"no"};
/* ]]> */
</script>
<script type='text/javascript' src='wp-content\plugins\woocommerce\assets\js\frontend\add-to-cart.min.js?ver=3.6.4'></script>
<script type='text/javascript' src='wp-content\plugins\woocommerce\assets\js\js-cookie\js.cookie.min.js?ver=2.1.4'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var woocommerce_params = {"ajax_url":"\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/?wc-ajax=%%endpoint%%"};
/* ]]> */
</script>
<script type='text/javascript' src='wp-content\plugins\woocommerce\assets\js\frontend\woocommerce.min.js?ver=3.6.4'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var wc_cart_fragments_params = {"ajax_url":"\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/?wc-ajax=%%endpoint%%","cart_hash_key":"wc_cart_hash_025ce6b2ff7afa0426b00a51009431d2","fragment_name":"wc_fragments_025ce6b2ff7afa0426b00a51009431d2","request_timeout":"5000"};
/* ]]> */
</script>
<script type='text/javascript' src='wp-content\plugins\woocommerce\assets\js\frontend\cart-fragments.min.js?ver=3.6.4'></script>
<script type='text/javascript' src='wp-includes\js\hoverIntent.min.js?ver=1.8.1'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var flatsomeVars = {"ajaxurl":"https:\/\/shoplamdep.haiphongweb.com\/wp-admin\/admin-ajax.php","rtl":"","sticky_height":"45","user":{"can_edit_pages":false}};
/* ]]> */
</script>
<script type='text/javascript' src='wp-content\themes\flatsome\assets\js\flatsome.js?ver=3.8.3'></script>
<script type='text/javascript' src='wp-content\themes\flatsome\inc\extensions\flatsome-lazy-load\flatsome-lazy-load.js?ver=1.0'></script>
<script type='text/javascript' src='wp-content\themes\flatsome\assets\js\woocommerce.js?ver=3.8.3'></script>
<script type='text/javascript' src='wp-includes\js\wp-embed.min.js?ver=5.2.1'></script>
<script type='text/javascript' src='wp-content\plugins\woocommerce-products-filter\js\icheck\icheck.min.js?ver=5.2.1'></script>
<script type='text/javascript' src='wp-content\plugins\woocommerce-products-filter\js\front.js?ver=5.2.1'></script>
<script type='text/javascript' src='wp-content\plugins\woocommerce-products-filter\js\html_types\radio.js?ver=5.2.1'></script>
<script type='text/javascript' src='wp-content\plugins\woocommerce-products-filter\js\html_types\checkbox.js?ver=5.2.1'></script>
<script type='text/javascript' src='wp-content\plugins\woocommerce-products-filter\js\html_types\select.js?ver=5.2.1'></script>
<script type='text/javascript' src='wp-content\plugins\woocommerce-products-filter\js\html_types\mselect.js?ver=5.2.1'></script>
<script type='text/javascript' src='wp-content\plugins\woocommerce-products-filter\js\chosen\chosen.jquery.min.js?ver=5.2.1'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var _zxcvbnSettings = {"src":"https:\/\/shoplamdep.haiphongweb.com\/wp-includes\/js\/zxcvbn.min.js"};
/* ]]> */
</script>
<script type='text/javascript' src='wp-includes\js\zxcvbn-async.min.js?ver=1.0'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var pwsL10n = {"unknown":"M\u1eadt kh\u1ea9u m\u1ea1nh kh\u00f4ng x\u00e1c \u0111\u1ecbnh","short":"R\u1ea5t y\u1ebfu","bad":"Y\u1ebfu","good":"Trung b\u00ecnh","strong":"M\u1ea1nh","mismatch":"M\u1eadt kh\u1ea9u kh\u00f4ng kh\u1edbp"};
/* ]]> */
</script>
<script type='text/javascript' src='wp-admin\js\password-strength-meter.min.js?ver=5.2.1'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var wc_password_strength_meter_params = {"min_password_strength":"3","i18n_password_error":"Vui l\u00f2ng nh\u1eadp m\u1eadt kh\u1ea9u kh\u00f3 h\u01a1n.","i18n_password_hint":"G\u1ee3i \u00fd: M\u1eadt kh\u1ea9u ph\u1ea3i c\u00f3 \u00edt nh\u1ea5t 12 k\u00fd t\u1ef1. \u0110\u1ec3 n\u00e2ng cao \u0111\u1ed9 b\u1ea3o m\u1eadt, s\u1eed d\u1ee5ng ch\u1eef in hoa, in th\u01b0\u1eddng, ch\u1eef s\u1ed1 v\u00e0 c\u00e1c k\u00fd t\u1ef1 \u0111\u1eb7c bi\u1ec7t nh\u01b0 ! \" ? $ % ^ & )."};
/* ]]> */
</script>
<script type='text/javascript' src='wp-content\plugins\woocommerce\assets\js\frontend\password-strength-meter.min.js?ver=3.6.4'></script>

		<style type="text/css">
	
	


	

	        /***** START: hiding submit button of the price slider ******/
	        .woof_price_search_container .price_slider_amount button.button{
	    	display: none;
	        }

	        .woof_price_search_container .price_slider_amount .price_label{
	    	text-align: left !important;
	        }

	        .woof .widget_price_filter .price_slider_amount .button {
	    	float: left;
	        }

	        /***** END: hiding submit button of the price slider ******/


	



		        .woof_edit_view{
	    	display: none;
	        }
	
	</style>
@endsection