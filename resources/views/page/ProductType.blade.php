@extends('master')
@section('body_type')
<body class="archive tax-product_cat term-cham-soc-da-mat term-17 woocommerce woocommerce-page woocommerce-no-js header-shadow lightbox lazy-icons nav-dropdown-has-arrow">
@endsection
@section('content')
<div class="shop-page-title category-page-title page-title ">

	<div class="page-title-inner flex-row  medium-flex-wrap container">
	  <div class="flex-col flex-grow medium-text-center">
	  	 	 		<h1 class="shop-page-title is-xlarge">Điện thoại thông minh</h1>
		<div class="is-small">
	<nav class="woocommerce-breadcrumb breadcrumbs"><a style="text-decoration: none;"href="{{route('HomePage')}}">Trang chủ</a> <span class="divider">&#47;</span>Điện thoại thông minh</nav></div>
<div class="category-filtering category-filter-row show-for-medium">
	<a style="text-decoration: none;"href="#" data-open="#shop-sidebar" data-visible-after="true" data-pos="left" class="filter-button uppercase plain">
		<i class="icon-menu"></i>
		<strong>Lọc</strong>
	</a>
	<div class="inline-block">
			</div>
</div>
	  </div><!-- .flex-left -->
	  
	   <div class="flex-col medium-text-center">
	  	 	

<p class="woocommerce-result-count hide-for-medium">
	Hiển thị một kết quả duy nhất</p>
<form class="woocommerce-ordering" method="get">
	<select name="orderby" class="orderby" aria-label="Đơn hàng của cửa hàng">
					<option value="{{$orderby}}" selected='selected'>
						<?php 
							if($orderby == 'price') echo 'Thứ tự theo giá: thấp đến cao';
							if($orderby == 'price-desc') echo 'Thứ tự theo giá: cao xuống thấp';
							if($orderby == 'popularity') echo 'Thứ tự theo mức độ phổ biến';
							if($orderby == 'date') echo 'Mới nhất';
							if($orderby == 'rating') echo 'Thứ tự theo điểm đánh giá';
							if($orderby == 'default') echo 'Thứ tự mặc định';
						?>
					</option>
					@if($orderby!='default')
					<option value="default">Thứ tự mặc định</option>
					@endif
					@if($orderby!='popularity')
					<option value="popularity">Thứ tự theo mức độ phổ biến</option>
					@endif
					@if($orderby!='rating')
					<option value="rating">TThứ tự theo điểm đánh giá</option>
					@endif
					@if($orderby!='price')
					<option value="price">Thứ tự theo giá: thấp đến cao</option>
					@endif
					@if($orderby!='price-desc')
					<option value="price-desc">Thứ tự theo giá: cao xuống thấp</option>
					@endif
			</select>
	   </div><!-- .flex-right -->
	   
	</div><!-- flex-row -->
</div><!-- .page-title -->

<main id="main" class="">
<div class="row category-page-row">

		<div class="col large-3 hide-for-medium ">
			<div id="shop-sidebar" class="sidebar-inner col-inner">
				<aside id="woof_widget-2" class="widget WOOF_Widget">        <div class="widget widget-woof">
            

            
            



            <div class="woof woof_sid woof_sid_widget" data-sid="widget" data-shortcode="woof sid='widget' start_filtering_btn='0' price_filter='2' redirect='' ajax_redraw='1' " data-redirect="" data-autosubmit="1" data-ajax-redraw="1">

    		<a style="text-decoration: none;"href="#" class="woof_edit_view" data-sid="widget">show blocks helper</a>
    		<div></div>
    
                <!--- here is possible drop html code which is never redraws by AJAX ---->

                <div class="woof_redraw_zone" data-woof-ver="2.1.7">
    

    	
			
				    <div data-css-class="woof_price2_search_container" class="woof_price2_search_container woof_container">
		        <div class="woof_container_overlay_item"></div>
		        <div class="woof_container_inner" style="padding-top: 20px;">
		    				<h4>Lọc sản phẩm</h4>
		    
		    

<div class="woof_price_filter_dropdown_container">
    <select class = "pricerange" name="pricerange" class="woof_price_filter_dropdown">
        		<option value="-1">Lọc theo giá</option>
            
                <option value="0-5.999.990"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol"></span></span><span class="woocommerce-Price-amount amount">Dưới 5.000.000<span class="woocommerce-Price-currencySymbol">&#8363;</span></span> (2)</option>
            
                
                <option value="5.000.000-15.999.999"><span class="woocommerce-Price-amount amount">5.000.000<span class="woocommerce-Price-currencySymbol">&#8363;</span></span> - <span class="woocommerce-Price-amount amount">15.999.999<span class="woocommerce-Price-currencySymbol">&#8363;</span></span> (2)</option>
            
                
                <option value="16.000.000-50.999.999"><span class="woocommerce-Price-amount amount">16.000.000<span class="woocommerce-Price-currencySymbol">&#8363;</span></span> - <span class="woocommerce-Price-amount amount">50.999.999<span class="woocommerce-Price-currencySymbol">&#8363;</span></span> (4)</option>
    </select>
</div>



		        </div>
		    </div>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script>
		$(function(){
			$('.orderby').change(function(){
				$(".woocommerce-ordering").submit() ;
			})
			$('.pricerange').change(function(){
				$(".woocommerce-ordering").submit() ;
			})
		})
	</script>

		

			    			
				<div data-css-class="woof_container_pwb-brand" class="woof_container woof_container_checkbox woof_container_pwb-brand woof_container_2 woof_container_thnghiu">
	    <div class="woof_container_overlay_item"></div>
	    <div class="woof_container_inner woof_container_inner_thnghiu">
			    	<h4>Thương hiệu	    <a style="text-decoration: none;"href="javascript: void(0);" title="toggle" class="woof_front_toggle woof_front_toggle_opened" data-condition="opened">+</a>
	    </h4>
			    			<div class="woof_block_html_items woof_section_scrolled" style="max-height:300px; overflow-y: auto;">
			<ul class="woof_list woof_list_checkbox">
            <style type="text/css">
            	.woof_checkbox_label:hover {
            		color: red;
            	}
            </style>                               
			<!-- brand list here-->
			@foreach($brand as $key)
            <li class="woof_term_36 ">
            	<input type="checkbox" id="woof_36_5e8ab1a8a2ac5" class="woof_checkbox_term woof_checkbox_term_36" data-tax="pwb-brand" name="{{$key->name}}" data-term-id="36" value="true">
            	<label class="woof_checkbox_label " for="woof_36_5e8ab1a8a2ac5" style="text-transform: uppercase;">{{$key->name}}<span class="woof_checkbox_count">(2)</span></label>

            </li>
            @endforeach
			<!-- brand list here--> 
          </ul>
			</div>
	    </div>
	</div>
		    	<div data-css-class="woof_container_pa_xuat-xu" class="woof_container woof_container_checkbox woof_container_pa_xuat-xu woof_container_3 woof_container_">
	    <div class="woof_container_overlay_item"></div>
	    <div class="woof_container_inner woof_container_inner_">
			    	<h4>	    <a style="text-decoration: none;"href="javascript: void(0);" title="toggle" class="woof_front_toggle woof_front_toggle_opened" data-condition="opened">+</a>
	    </h4>
			    			<div class="woof_block_html_items">
			<ul class="woof_list woof_list_checkbox">
        </ul>
			</div>
	    </div>
	</div>
		    



    		    <div class="woof_submit_search_form_container">

			
						    <button type="submit" style="float: left;" class="button woof_submit_search_form">Lọc tìm sản phẩm</button>
			
    		    </div>
</form>

		    


                </div>

            </div>



		            </div>
        </aside>			</div><!-- .sidebar-inner -->
		</div><!-- #shop-sidebar -->

		<div class="col large-9">
		<div class="shop-container">
		
		<div class="woocommerce-notices-wrapper"></div>

	<div class="woof_products_top_panel"></div>
		<div class="products row row-small large-columns-6 medium-columns-3 small-columns-2 has-equal-box-heights equalize-box">
<!--product here-->
@foreach($product as $key)
                        	<?php 
                        	$entities = array(' ',"/");
                                    $replacements = array('-',"*");
                                    $name = str_replace($entities, $replacements,$key->name);
                        	$sale = (1-($key->promotion_price/$key->unit_price))*100;
                        	$key->promotion_price = number_format($key->promotion_price, 0, '.', '.' );
        				$key->unit_price = number_format($key->unit_price, 0, '.', '.' );
                        	?>
                           <div class="product-small col has-hover product type-product post-279 status-publish instock product_cat-cham-soc-toc product_cat-trang-diem has-post-thumbnail sale shipping-taxable purchasable product-type-simple">
                              <div class="col-inner">
                                 <div class="badge-container absolute left top z-1" style="margin-top:10px;">
                                    <div class="callout badge badge-square" style="height: 35px; width: 50px;">
                                       <div class="badge-inner secondary on-sale" style="background-color:red;border-radius: 5px;"><span class="onsale">-{{$sale}}%</span></div>
                                    </div>
                                 </div>
                                 <div class="product-small box ">
                                    <div class="box-image">
                                       <div class="image-zoom">
                                          <a style="text-decoration: none;"href="{{route('ProductDetail',$params = ['type' => 'dtdd','name' => $name])}}">
                                          <img width="300" height="300" src="{{$key->image}}" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="" srcset="{{$key->image}} 300w, {{$key->image}} 150w, {{$key->image}} 100w, {{$key->image}} 358w" sizes="(max-width: 300px) 100vw, 300px">				</a>
                                       </div>
                                       <div class="image-tools is-small top right show-on-hover">
                                       </div>
                                       <div class="image-tools is-small hide-for-small bottom left show-on-hover">
                                       </div>
                                       <div class="image-tools grid-tools text-center hide-for-small bottom hover-slide-in show-on-hover">
                                       </div>
                                    </div>
                                    <!-- box-image -->
                                    <div class="box-text box-text-products" style="text-align: center;">
                                       <div class="title-wrapper" style="height: 40px;">
                                          <p class="name product-title"><a style="text-decoration: none;"class="name" href="..\combo-2-son-kem-li-2-dau-lemonade-01-sugar-05-tea-perfect-couple-lip\index.htm">{{$key->name}}</a></p>
                                       </div>
                                       <div class="price-wrapper">
                                          <div class="pwb-brands-in-loop"><span><a style="text-decoration: none;"href="thuong-hieu\agapan\index.htm"><img width="120" height="60" src="
                                       @foreach($brand as $type)
                                       @if ($type->id == $key->id_brand)
                                       {{$type->image}}
                                       @endif
                                       @endforeach
                                       " class="attachment-thumbnail size-thumbnail" alt=""></a></span></div>
                                          @if($key->promotion_price != 0)
                                 <del><span class="woocommerce-Price-amount amount">{{$key->unit_price}}<span class="woocommerce-Price-currencySymbol">&#8363;</span></span></del> <ins><span class="woocommerce-Price-amount amount" style="color: red;">{{$key->promotion_price}}<span class="woocommerce-Price-currencySymbol">&#8363;</span></span></ins>
								@else 
								<del></del> <ins><span class="woocommerce-Price-amount amount" style="color: red;">{{$key->unit_price}}<span class="woocommerce-Price-currencySymbol">&#8363;</span></span></ins>
                                 @endif
                                       </div>
                                    </div>
                                    <!-- box-text -->
                                 </div>
                                 <!-- box -->
                              </div>
                              <!-- .col-inner -->
                           </div>
                        @endforeach
<!--product here-->

</div><!-- row -->
<div class="row">
	<div class="product-small col"></div>
	<div class="product-small col"></div>
	<div class="product-small col">
	{{ $product->appends(['orderby' => $orderby, 'pricerange' => -1])->links() }}
	</div>
	<div class="product-small col"></div>
	<div class="product-small col"></div>
</div>
		</div><!-- shop container -->
		</div>
</div>

</main><!-- #main -->
@endsection
@section('script')
  <script type="application/ld+json">{"@context":"https:\/\/schema.org\/","@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"item":{"name":"Trang ch\u1ee7","@id":"https:\/\/shoplamdep.haiphongweb.com"}},{"@type":"ListItem","position":2,"item":{"name":"Ch\u0103m s\u00f3c da m\u1eb7t","@id":"https:\/\/shoplamdep.haiphongweb.com\/danh-muc-san-pham\/cham-soc-da-mat\/"}}]}</script>	<script type="text/javascript">
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
<script type='text/javascript' src='wp-content\plugins\woocommerce-products-filter\js\woof_sid.js?ver=5.2.1'></script>
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
@section('style')
<meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
   <link rel="profile" href="http://gmpg.org/xfn/11">
   <link rel="pingback" href="https://shoplamdep.haiphongweb.com/xmlrpc.php">
   <title>WibShop</title>
   <link rel='dns-prefetch' href='//cdn.jsdelivr.net'>
   <link rel='dns-prefetch' href='//s.w.org'>
   <link rel="alternate" type="application/rss+xml" title="Sập sàn các món độ công nghệ &raquo;" href="feed\index.rss">
   <link rel="alternate" type="application/rss+xml" title="Sập sàn các món độ công nghệ &raquo;" href="comments\feed\index.rss">
   <script type="text/javascript">
      window._wpemojiSettings = {"baseUrl":"https:\/\/s.w.org\/images\/core\/emoji\/12.0.0-1\/72x72\/","ext":".png","svgUrl":"https:\/\/s.w.org\/images\/core\/emoji\/12.0.0-1\/svg\/","svgExt":".svg","source":{"concatemoji":"https:\/\/shoplamdep.haiphongweb.com\/wp-includes\/js\/wp-emoji-release.min.js?ver=5.2.1"}};
      !function(a,b,c){function d(a,b){var c=String.fromCharCode;l.clearRect(0,0,k.width,k.height),l.fillText(c.apply(this,a),0,0);var d=k.toDataURL();l.clearRect(0,0,k.width,k.height),l.fillText(c.apply(this,b),0,0);var e=k.toDataURL();return d===e}function e(a){var b;if(!l||!l.fillText)return!1;switch(l.textBaseline="top",l.font="600 32px Arial",a){case"flag":return!(b=d([55356,56826,55356,56819],[55356,56826,8203,55356,56819]))&&(b=d([55356,57332,56128,56423,56128,56418,56128,56421,56128,56430,56128,56423,56128,56447],[55356,57332,8203,56128,56423,8203,56128,56418,8203,56128,56421,8203,56128,56430,8203,56128,56423,8203,56128,56447]),!b);case"emoji":return b=d([55357,56424,55356,57342,8205,55358,56605,8205,55357,56424,55356,57340],[55357,56424,55356,57342,8203,55358,56605,8203,55357,56424,55356,57340]),!b}return!1}function f(a){var c=b.createElement("script");c.src=a,c.defer=c.type="text/javascript",b.getElementsByTagName("head")[0].appendChild(c)}var g,h,i,j,k=b.createElement("canvas"),l=k.getContext&&k.getContext("2d");for(j=Array("flag","emoji"),c.supports={everything:!0,everythingExceptFlag:!0},i=0;i<j.length;i++)c.supports[j[i]]=e(j[i]),c.supports.everything=c.supports.everything&&c.supports[j[i]],"flag"!==j[i]&&(c.supports.everythingExceptFlag=c.supports.everythingExceptFlag&&c.supports[j[i]]);c.supports.everythingExceptFlag=c.supports.everythingExceptFlag&&!c.supports.flag,c.DOMReady=!1,c.readyCallback=function(){c.DOMReady=!0},c.supports.everything||(h=function(){c.readyCallback()},b.addEventListener?(b.addEventListener("DOMContentLoaded",h,!1),a.addEventListener("load",h,!1)):(a.attachEvent("onload",h),b.attachEvent("onreadystatechange",function(){"complete"===b.readyState&&c.readyCallback()})),g=c.source||{},g.concatemoji?f(g.concatemoji):g.wpemoji&&g.twemoji&&(f(g.twemoji),f(g.wpemoji)))}(window,document,window._wpemojiSettings);
   </script>
   <style type="text/css">
      img.wp-smiley,
      img.emoji {
      display: inline !important;
      border: none !important;
      box-shadow: none !important;
      height: 1em !important;
      width: 1em !important;
      margin: 0 .07em !important;
      vertical-align: -0.1em !important;
      background: none !important;
      padding: 0 !important;
      }
   </style>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
   <link rel='stylesheet' id='dashicons-css' href='wp-includes\css\dashicons.min.css?ver=5.2.1' type='text/css' media='all'>
   <link rel='stylesheet' id='menu-icons-extra-css' href='wp-content\plugins\ot-flatsome-vertical-menu\libs\menu-icons\css\extra.min.css?ver=0.10.2' type='text/css' media='all'>
   <link rel='stylesheet' id='wp-block-library-css' href='wp-includes\css\dist\block-library\style.min.css?ver=5.2.1' type='text/css' media='all'>
   <link rel='stylesheet' id='wc-block-style-css' href='wp-content\plugins\woocommerce\assets\css\blocks\style.css?ver=3.6.4' type='text/css' media='all'>
   <link rel='stylesheet' id='devvn-quickbuy-style-css' href='wp-content\plugins\devvn-quick-buy\css\devvn-quick-buy.css?ver=2.0.0' type='text/css' media='all'>
   <link rel='stylesheet' id='ot-vertical-menu-css' href='wp-content\plugins\ot-flatsome-vertical-menu\assets\css\ot-vertical-menu.css?ver=1.1.0' type='text/css' media='all'>
   <link rel='stylesheet' id='pwb-styles-frontend-css' href='wp-content\plugins\perfect-woocommerce-brands\assets\css\styles-frontend.min.css?ver=1.7.6' type='text/css' media='all'>
   <link rel='stylesheet' id='woof-css' href='wp-content\plugins\woocommerce-products-filter\css\front.css?ver=5.2.1' type='text/css' media='all'>
   <link rel='stylesheet' id='chosen-drop-down-css' href='wp-content\plugins\woocommerce-products-filter\js\chosen\chosen.min.css?ver=5.2.1' type='text/css' media='all'>
   <link rel='stylesheet' id='icheck-jquery-color-css' href='wp-content\plugins\woocommerce-products-filter\js\icheck\skins\flat\green.css?ver=5.2.1' type='text/css' media='all'>
   <style id='woocommerce-inline-inline-css' type='text/css'>
      .woocommerce form .form-row .required { visibility: visible; }
   </style>
   <link rel="stylesheet" href="source/assets/dest/css/font-awesome.min.css">
   <link rel='stylesheet' id='flatsome-main-css' href='wp-content\themes\flatsome\assets\css\flatsome.css?ver=3.8.3' type='text/css' media='all'>
   <link rel='stylesheet' id='flatsome-shop-css' href='wp-content\themes\flatsome\assets\css\flatsome-shop.css?ver=3.8.3' type='text/css' media='all'>
   <link rel='stylesheet' id='flatsome-style-css' href='wp-content\themes\ban-hang\style.css?ver=3.0' type='text/css' media='all'>
   <script type="text/template" id="tmpl-unavailable-variation-template">
      <p>Rất tiếc, sản phẩm này hiện không tồn tại. Hãy chọn một phương thức kết hợp khác.</p>
   </script>
   <script type='text/javascript' src='wp-includes\js\jquery\jquery.js?ver=1.12.4-wp'></script>
   <script type='text/javascript' src='wp-includes\js\jquery\jquery-migrate.min.js?ver=1.4.1'></script>
   <link rel='https://api.w.org/' href='wp-json\index.json'>
   <link rel="EditURI" type="application/rsd+xml" title="RSD" href="xmlrpc.xml?rsd">
   <link rel="wlwmanifest" type="application/wlwmanifest+xml" href="wp-includes\wlwmanifest.xml">
   <meta name="generator" content="WordPress 5.2.1">
   <meta name="generator" content="WooCommerce 3.6.4">
   <link rel="canonical" href="index.htm">
   <link rel='shortlink' href='index.htm'>
   <link rel="alternate" type="application/json+oembed" href="wp-json\oembed\1.0\embed.json?url=https%3A%2F%2Fshoplamdep.haiphongweb.com%2F">
   <link rel="alternate" type="text/xml+oembed" href="wp-json\oembed\1.0\embed.xml?url=https%3A%2F%2Fshoplamdep.haiphongweb.com%2F&#038;format=xml">
   <style>.bg{opacity: 0; transition: opacity 1s; -webkit-transition: opacity 1s;} .bg-loaded{opacity: 1;}</style>
   <!--[if IE]>
   <link rel="stylesheet" type="text/css" href="https://shoplamdep.haiphongweb.com/wp-content/themes/flatsome/assets/css/ie-fallback.css">
   <script src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.6.1/html5shiv.js"></script><script>var head = document.getElementsByTagName('head')[0],style = document.createElement('style');style.type = 'text/css';style.styleSheet.cssText = ':before,:after{content:none !important';head.appendChild(style);setTimeout(function(){head.removeChild(style);}, 0);</script><script src="https://shoplamdep.haiphongweb.com/wp-content/themes/flatsome/assets/libs/ie-flexibility.js"></script><![endif]-->    <script type="text/javascript">
      WebFontConfig = {
        google: { families: [ "Roboto:regular,700","Roboto:regular,regular","Roboto:regular,500","Dancing+Script:regular,400", ] }
      };
      (function() {
        var wf = document.createElement('script');
        wf.src = 'https://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
        wf.type = 'text/javascript';
        wf.async = 'true';
        var s = document.getElementsByTagName('script')[0];
        s.parentNode.insertBefore(wf, s);
      })(); 
   </script>
   <style>.product-gallery img.lazy-load, .product-small img.lazy-load, .product-small img[data-lazy-srcset]:not(.lazyloaded){ padding-top: 100%;}</style>
   <noscript>
      <style>.woocommerce-product-gallery{ opacity: 1 !important; }</style>
   </noscript>
   <link rel="icon" href="wp-content\uploads\2019\05\cropped-shop3-32x32.jpg" sizes="32x32">
   <link rel="icon" href="wp-content\uploads\2019\05\cropped-shop3-192x192.jpg" sizes="192x192">
   <link rel="apple-touch-icon-precomposed" href="wp-content\uploads\2019\05\cropped-shop3-180x180.jpg">
   <meta name="msapplication-TileImage" content="https://shoplamdep.haiphongweb.com/wp-content/uploads/2019/05/cropped-shop3-270x270.jpg">
   <style id="custom-css" type="text/css">:root {--primary-color: #326e51;}.full-width .ubermenu-nav, .container, .row{max-width: 1310px}.row.row-collapse{max-width: 1280px}.row.row-small{max-width: 1302.5px}.row.row-large{max-width: 1340px}.header-main{height: 70px}#logo img{max-height: 70px}#logo{width:221px;}#logo img{padding:7px 0;}.header-bottom{min-height: 40px}.header-top{min-height: 30px}.transparent .header-main{height: 30px}.transparent #logo img{max-height: 30px}.has-transparent + .page-title:first-of-type,.has-transparent + #main > .page-title,.has-transparent + #main > div > .page-title,.has-transparent + #main .page-header-wrapper:first-of-type .page-title{padding-top: 80px;}.header.show-on-scroll,.stuck .header-main{height:45px!important}.stuck #logo img{max-height: 45px!important}.search-form{ width: 61%;}.header-bg-color, .header-wrapper {background-color: rgba(255,255,255,0.9)}.header-bottom {background-color: #326e51}.stuck .header-main .nav > li > a{line-height: 5px }@media (max-width: 549px) {.header-main{height: 70px}#logo img{max-height: 70px}}/* Color */.accordion-title.active, .has-icon-bg .icon .icon-inner,.logo a, .primary.is-underline, .primary.is-link, .badge-outline .badge-inner, .nav-outline > li.active> a,.nav-outline >li.active > a, .cart-icon strong,[data-color='primary'], .is-outline.primary{color: #326e51;}/* Color !important */[data-text-color="primary"]{color: #326e51!important;}/* Background Color */[data-text-bg="primary"]{background-color: #326e51;}/* Background */.scroll-to-bullets a,.featured-title, .label-new.menu-item > a:after, .nav-pagination > li > .current,.nav-pagination > li > span:hover,.nav-pagination > li > a:hover,.has-hover:hover .badge-outline .badge-inner,button[type="submit"], .button.wc-forward:not(.checkout):not(.checkout-button), .button.submit-button, .button.primary:not(.is-outline),.featured-table .title,.is-outline:hover, .has-icon:hover .icon-label,.nav-dropdown-bold .nav-column li > a:hover, .nav-dropdown.nav-dropdown-bold > li > a:hover, .nav-dropdown-bold.dark .nav-column li > a:hover, .nav-dropdown.nav-dropdown-bold.dark > li > a:hover, .is-outline:hover, .tagcloud a:hover,.grid-tools a, input[type='submit']:not(.is-form), .box-badge:hover .box-text, input.button.alt,.nav-box > li > a:hover,.nav-box > li.active > a,.nav-pills > li.active > a ,.current-dropdown .cart-icon strong, .cart-icon:hover strong, .nav-line-bottom > li > a:before, .nav-line-grow > li > a:before, .nav-line > li > a:before,.banner, .header-top, .slider-nav-circle .flickity-prev-next-button:hover svg, .slider-nav-circle .flickity-prev-next-button:hover .arrow, .primary.is-outline:hover, .button.primary:not(.is-outline), input[type='submit'].primary, input[type='submit'].primary, input[type='reset'].button, input[type='button'].primary, .badge-inner{background-color: #326e51;}/* Border */.nav-vertical.nav-tabs > li.active > a,.scroll-to-bullets a.active,.nav-pagination > li > .current,.nav-pagination > li > span:hover,.nav-pagination > li > a:hover,.has-hover:hover .badge-outline .badge-inner,.accordion-title.active,.featured-table,.is-outline:hover, .tagcloud a:hover,blockquote, .has-border, .cart-icon strong:after,.cart-icon strong,.blockUI:before, .processing:before,.loading-spin, .slider-nav-circle .flickity-prev-next-button:hover svg, .slider-nav-circle .flickity-prev-next-button:hover .arrow, .primary.is-outline:hover{border-color: #326e51}.nav-tabs > li.active > a{border-top-color: #326e51}.widget_shopping_cart_content .blockUI.blockOverlay:before { border-left-color: #326e51 }.woocommerce-checkout-review-order .blockUI.blockOverlay:before { border-left-color: #326e51 }/* Fill */.slider .flickity-prev-next-button:hover svg,.slider .flickity-prev-next-button:hover .arrow{fill: #326e51;}body{font-size: 100%;}@media screen and (max-width: 549px){body{font-size: 100%;}}body{font-family:"Roboto", sans-serif}body{font-weight: 0}body{color: #303030}.nav > li > a {font-family:"Roboto", sans-serif;}.nav > li > a {font-weight: 500;}h1,h2,h3,h4,h5,h6,.heading-font, .off-canvas-center .nav-sidebar.nav-vertical > li > a{font-family: "Roboto", sans-serif;}h1,h2,h3,h4,h5,h6,.heading-font,.banner h1,.banner h2{font-weight: 700;}h1,h2,h3,h4,h5,h6,.heading-font{color: #0a0a0a;}.alt-font{font-family: "Dancing Script", sans-serif;}.alt-font{font-weight: 400!important;}.products.has-equal-box-heights .box-image {padding-top: 100%;}@media screen and (min-width: 550px){.products .box-vertical .box-image{min-width: 300px!important;width: 300px!important;}}.page-title-small + main .product-container > .row{padding-top:0;}/* Custom CSS */#wide-nav>.flex-row>.flex-left{width:12.5%;min-width:212px;max-width:212px;margin-right:0}#mega-menu-title{font-size:14px;background:#4b8c6c}#mega_menu>li>a{color:#3d3d3d;padding:7.2px 15px}#mega_menu>li+li{border-top:none}#mega_menu>li:hover>a{background:#f60;color:#fff}.category-row .cloud-tag ul{margin:0}.category-row .cloud-tag ul li a:hover{color:#326e51}.category-row .cloud-tag ul li a{border:1px solid #c5c5c5;border-radius:4px;font-size:13px;padding:5px;margin-right:5px;color:#4e4e4e}.cloud-tag{padding:0 10px}.category-row .row-collapse{background:#fff;border:1px solid #ececec;border-bottom-left-radius:4px;border-bottom-right-radius:4px;border-top:none}.category-row .cloud-tag ul li{margin:0 0 12px;list-style:none;float:left;display:inline-block}#mega_menu>li>ul.sub-menu{position:absolute;overflow:hidden;top:0px;width:625px;background:#fff;padding:10px 20px;border:1px solid #ff6f0f;min-height:150px;margin:0;box-shadow:0 0 0 grey}#mega_menu ul.sub-menu>li.menu-cha a{font-weight:700}#mega_menu ul.sub-menu>li{width:32.5%;vertical-align:top;margin-bottom:0;position:relative;display:inline-block;z-index:6}#mega_menu li .sub-menu a{padding:4px 0;display:block;font-size:13px}#mega_menu ul.sub-menu>li:hover>a{background:0 0;color:#f60}#mega_menu ul.sub-menu>li .sub-menu{display:block;border-left:0}#mega_menu ul.sub-menu>li .sub-menu li{display:block;width:100%}#mega_menu ul.sub-menu>li.sp-ban-chay>a{border:1px solid #7a9c59;padding:4px 14px;display:inline-block;margin-bottom:10px;border-radius:4px;color:green}#mega_menu ul.sub-menu>li.sp-mua-nhieu>a{border:1px solid #00b9eb;padding:4px 14px;display:inline-block;margin-bottom:10px;border-radius:4px;color:#00a9d6}#mega_menu ul.sub-menu>li.giam-gia-hot-nhat>a{border:1px solid red;padding:4px 14px;display:inline-block;margin-bottom:10px;border-radius:4px;color:red}.section-title-container,.slider-row .cot2 .large-3 .img{margin-bottom:0}.header-block .icon-box .icon-box-text{padding-left:5px}.header-block .icon-box .icon-box-text p{line-height:18px;padding-top:6px}.searchform-wrapper{border:2px solid #326e51;border-radius:4px}.image-icon img{max-width:42px;min-width:100%}.header-bottom .nav li a:hover{background:#4b8c6c}.header-bottom-nav #mega_menu li{border-right:0}.header-bottom-nav li{border-right:1px solid #1c563a}.header-bottom .nav li a{padding-left:20px;padding-right:20px}.header-bottom .nav li{margin:0}.account-link .image-icon img{border:2px solid #326e51}.account-link span,.header-cart-link span{text-transform:none;font-size:15px;font-weight:400;letter-spacing:0;color:#326e51}.search-field{box-shadow:0 0 0 gray!important;font-size:13px!important;height:39px!important}.searchform .button.icon{background:#326e51;width:71px}.header-bottom .nav li.deal-hap-dan a:after{position:absolute;content:'';background-image:url(wp-content/uploads/2019/06/new-tag.png);background-repeat:no-repeat;background-position:center;width:35px;height:173px;left:98px;top:-70px;z-index:99999;background-size:contain}.search_categories{background-color:#f4f4f4;border:0}.header-nav .header-button-1{border-right:0}.header-nav .header-button-1 .header-button a:hover{border:2px solid #fff}.category-row .large-12{padding-bottom:0}.slider-row .cot2 .large-3{border-bottom:1px solid #ddd;border-left:1px solid #ddd;flex-basis:27%;max-width:27%}.slider-row .cot2 .large-9{flex-basis:73%;max-width:73%;border-bottom:1px solid #ddd}#mega_menu{padding-top:1px}.category-row .cot2{flex-basis:83.4%;max-width:83.4%}.slider-row .cot1 .slider-row .cot2{flex-basis:62%;max-width:62%;padding:0 .8px!important;border-right:1px solid #326e51}.slider-row .flickity-page-dots .dot{border:1px solid #326e51;opacity:1;background:#fff}.icon-box-center .icon-box-img{margin:0 auto}.slider-row .cot3 .section-title-container .section-title{margin-top:10px}.slider-row .cot3 .icon-box{border-top:1px solid #326e51;padding-top:10px}.slider-row .cot3 .medium-6 .icon-box{border-top:0;padding-top:0}.slider-row .cot3 .medium-6 .icon-box .icon-box-img{padding-top:15px}.slider-row .cot3 .icon-box .icon-box-text p{color:#326e51;line-height:15px;margin-top:7px}.slider-row .cot3 .col-inner .col-inner{padding:0}.slider-row .cot3 .icon-box .icon-box-text{padding-left:5px}.slider-row .cot3 .col-inner{padding:10px}.slider-row .cot2{flex-basis:66.8%;max-width:66.8%}.slider-row .cot3{background:#fff;flex-basis:16.6%;max-width:16.6%;padding:0 .8px!important;border-right:1px solid #ddd;border-bottom:1px solid #ddd;border-left:1px solid #ddd}.category-row .tieu-de-row,.thuong-hieu .row-thuong-hieu{border-left:1px solid #ececec;border-right:1px solid #ececec}.section-title-normal span{margin-right:15px;border-bottom:0 solid rgba(0,0,0,.1);margin-bottom:0;font-size:15px;color:#f60;padding:8px 10px}.section-title-normal{margin-bottom:0;border-bottom:1px solid #ececec;border-top:3px solid #fba262;background:#fff}.row-sp .box.product-small{border-right:1px solid #ececec}.section-title a{display:block;padding:4px 8px;margin-left:auto;border:1px solid #ececec;margin-right:10px;border-radius:4px;font-size:14px;font-weight:400}.single-product .is-divider{display:none}.single-product .cart{margin-bottom:0;display:inline-block;float:left;margin-right:12px}.single-product .thong-bao p{margin-bottom:5px}.product-summary .quantity{margin-bottom:0;margin-right:10px}.product_list_widget li{color:gray}.product_list_widget .star-rating{display:none}.product_list_widget li ins span{color:red;font-size:15px;font-weight:400}.product_list_widget li del span{font-size:14px;color:gray}.product_list_widget li a{height:43px;overflow:hidden}.single-product .large-9{padding-right:20px}.product_list_widget .product-title{font-size:13px;color:#434343}.single-product .product-main .row{margin-left:0!important;margin-right:0!important}.single-product .thong-bao{margin-bottom:20px;background:#fafafa;padding:10px;color:#464646;font-size:14px}.quantity+.button{margin-right:0;font-size:16px;border-radius:4px;background:#326e51;text-transform:none;padding:.5px 26px}.single-product .product-main .badge-container .badge-inner{background:0 0}.single-product .product-main .badge-container .badge-inner span{background:red;padding:5px 12px;color:#fff;font-size:15px;font-weight:400;border-radius:5px}.single-product .product-main .badge-container{margin:-10px 5px 5px}.single-product .product_meta{clear:both;margin-bottom:5px}a.devvn_buy_now_style:hover{background:#eb5e00}a.devvn_buy_now_style{margin-bottom:0;padding:10px 0;width:165px;display:inline-block;background:#f60;text-transform:none;font-size:16px}.single-product .product-info .price,.single-product .product-info .price del span{font-size:14px;color:gray}.single-product .product-info .price ins span{font-size:19px;color:Red;font-weight:500}.flickity-prev-next-button.previous svg{border-radius:5px;fill:#fff;color:#fff;width:30px;height:50px}.cham-soc-da-mat .tieu-de-row h2 a{color:#f93!important}.cham-soc-da-mat .tieu-de-row{border-top:3px solid #ffa74e!important}.row-sp .flickity-prev-next-button.next svg{background:gray;fill:#fff;color:#fff;width:30px;height:50px;border-radius:5px}.category-row .section-title a{background:#ff9f1b;color:#fff;font-size:14px}.category-row .section-title-normal span{text-transform:none;color:#326e51;font-weight:400}.thuong-hieu .section-title-normal span{margin-right:15px;border-bottom:0 solid rgba(0,0,0,.1);margin-bottom:0;font-size:15px;color:#ca64c2;padding:8px 10px}.row-sp .product-small .pwb-brands-in-loop img{max-width:75px}.thuong-hieu .section-title-normal{margin-bottom:0;border-bottom:1px solid #ececec;border-top:3px solid #ea8fe3;background:#fff}.thuong-hieu .row-thuong-hieu{background:#ffffff;padding-top:15px;border-bottom:1px solid #ececec;max-width:1280px}.thuong-hieu .col .col-inner{background:#fff}.row-sp .product-small .box-text{padding:10px 10px 20px}.category-row .large-12 .col-inner{padding-bottom:0;height:44px}.category-row .tieu-de-row .clearboth{clear:both}.category-row .tieu-de-row .right ul li{margin-bottom:0;float:left;list-style:none}.category-row .tieu-de-row .right ul li a:hover{color:#326e51}.category-row .tieu-de-row .right ul li a{line-height:40px;font-size:14px;color:#494949}.category-row .tieu-de-row .right ul{display:inline-block;margin-bottom:0}.category-row .tieu-de-row .right{width:75%;float:right;text-align:right;padding-right:15px}.category-row .tieu-de-row .left{width:25%;float:left;padding-left:15px;display:inline-block}.cham-soc-co-the .tieu-de-row h2 a{color:#326e51!important}.cham-soc-co-the .tieu-de-row{height:44px;display:inline-block;width:100%;background:#fff;border-top:3px solid #326e51!important}.footer-section{border-top:3px solid #326e51}.goi-y .col{padding:0 3.8px 9.6px}.goi-y .section-title-center span{font-size:16px}.goi-y .section-title-center{margin-bottom:17px}.spa .tieu-de-row{height:44px;display:inline-block;width:100%;background:#fff;border-top:3px solid #1e9b2b!important}.spa .tieu-de-row h2 a{color:#1e9b2b!important}.category-row .tieu-de-row h2 a{color:#f69}.category-row .tieu-de-row h2{margin-bottom:0;font-size:16px;line-height:41px;text-transform:uppercase;color:#f69!important}.category-row .tieu-de-row{border-bottom:1px solid #ececec;height:44px;display:inline-block;width:100%;background:#fff;border-top:3px solid #f69}.thuong-hieu .medium-3{padding-bottom:15px;flex-basis:12.5%;max-width:12.5%}.row-sp .product-small .box-text .category{font:14px/18px Helvetica,Arial,'DejaVu Sans','Liberation Sans',Freesans,sans-serif;letter-spacing:0}.row-sp .product-small .box-text .product-title a{margin-top:5px;margin-bottom:0px;font-size:13px;color:#326e51!important;line-height:20px}.row-sp .product-small .box-text .price ins span{color:#e10c00;font-size:16px;font-weight:500}.row-sp .product-small .box-text .price,.row-sp .product-small .box-text .price del span{color:#000;font-size:14px;font-weight:400}.row-sp .badge-container .badge-inner{background:0 0!important}.row-sp .badge-container .badge-inner span{background:#ff235c;padding:4px 5px;border-radius:4px;font-size:13px;font-weight:400}.row-sp .badge-container{margin:0px}.row-sp .product-small{background:#fff}.category-row .cot1,.slider-row .cot1{flex-basis:16.6%;max-width:16.6%}.category-row .section-title-container{margin-top:0}.category-row .section-title-normal{margin-bottom:0;border-bottom:none;border-top:none;background:#fff}.footer-section .row1,.page-title{border-bottom:1px solid #eee}.footer-section .row1{margin-bottom:20px}.footer-section .col{padding-bottom:0}.footer-secondary{padding:0}.absolute-footer{font-size:12px;background:#fcfcfc;border-top:1px solid #eee;color:#989898!important}.breadcrumbs a{color:#326e51}.archive .woocommerce-ordering select{font-size:14px;border-radius:4px}.archive .woocommerce-result-count{font-size:15px;color:#434343;font-weight:400}.footer-section h4{margin-bottom:15px;font-size:15px}.breadcrumbs{font-weight:400;text-transform:none}.breadcrumbs a:hover{color:#326e51}.widget .tieu-chi-sidebar .icon-box .icon-box-text{padding-left:5px;font-size:15px;line-height:18px;padding-top:7px}.single-product .product-main .large-6,.single-product .product-main .large-6 .large-10{padding-left:0}.product-main{padding:0;margin-left:-10px}.archive .title-overlay{background-color:#eee}.archive .page-title-inner{padding-top:0}.archive .shop-page-title{background:#fafafa;margin-bottom:0;font-weight:400;font-size:19px;color:#000;text-shadow:0 0 0 gray}.product-footer .woocommerce-tab ul li a,.product-tabs li a{padding-left:15px;padding-right:15px}.single-product .product .large-9{flex-basis:80%;max-width:80%}.product-footer .woocommerce-tab ul li{margin:0}.tab-panels{border:1px solid #e3e3e3!important;padding:15px!important;border-top:0!important}.tab-panels .entry-content p{margin-bottom:8px}.widget .tieu-chi-sidebar p,.woof_container{margin-bottom:0}.sticky-add-to-cart__product .product-title-small{margin-right:10px;max-width:310px;line-height:19px}.single-product .product-main .flickity-button{display:none}.sticky-add-to-cart--active{background-color:#f5fbf6}.tab-panels .entry-content{font-size:14px}.product-tabs li{margin:0;border-right:1px solid #e3e3e3}.single-product .related .large-columns-5,.widget .tieu-chi-sidebar{margin-left:0!important;margin-right:0!important}.product-gallery-slider img,.product-tabs{border:1px solid #e3e3e3}.social-icons a{border:1px solid #d7d7d7!important}.image-tools a{border:1px solid #d6d6d6!important}.widget .tieu-chi-sidebar a{display:block;width:100%;text-align:cn;text-align:center;font-size:13px;background:#f1f1f1;padding:7px 10px}.widget .tieu-chi-sidebar .icon-box{padding-bottom:15px}.widget .tieu-chi-sidebar .col{padding:10px}.widget-title{text-transform:none!important;letter-spacing:0!important;padding:10px;display:block;border-bottom:1px solid #e3e3e3}#wpcomm .wpdiscuz-form-bottom-bar,#wpcomm .wpdiscuz-form-top-bar,#wpcomm .wpdiscuz-front-actions,.blog-archive .large-9 .badge,.is-divider,.widget .is-divider{display:none}ul.product_list_widget li+li{border-top:1px solid #e3e3e3}.single-product .related .product-section-title{margin-bottom:0;border-bottom:1px solid #ececec;letter-spacing:0;text-transform:none;font-size:19px;padding:10px}.single-product .row-sp .product-small .box-text .product-title{height:40px}.single-product .row-sp .product-small .box-text .product-title a{height:39px;overflow:hidden}.single-product .flickity-prev-next-button.previous svg,.single-product .row-sp .flickity-prev-next-button.next svg{background:0 0;color:#000}.single-product .large-columns-5 .col{padding-left:0!important;padding-right:0!important;padding-bottom:0!important}.single-product .related{border:1px solid #ececec}.devvn-popup-title,.popup-customer-info-group .devvn-order-btn{background:#326e51}.recent-blog-posts-li .badge-inner{border-radius:99%}.recent-blog-posts-li{padding:0 10px}.blog-single .entry-header-text,.woof_container{padding-bottom:0}.recent-blog-posts a{font-size:13px}.widget{border:1px solid #e3e3e3;border-top:3px solid #326e51}.block_widget{margin-top:15px}.single-product #product-sidebar{flex-basis:20%;max-width:20%;padding-left:0}.single-product .content-row .large-9{border-right:0!important}.single-product .product-info .product-title{margin-top:5px;font-size:18px;color:#303030;font-weight:500}.single-product .product-info .pwb-single-product-brands a img{max-width:75px}.single-product .product-info{padding:0}.footer-section ul li{font-size:14px!important}.single-product .page-title-inner{position:relative;padding-top:0;min-height:40px}.archive .row-sp .box.product-small{border:1px solid #ececec}.archive .category-page-row{padding-top:20px}.widget_categories ul li{padding-left:10px;font-size:13px}.chosen-container-single .chosen-single{height:35px!important}.woof_list_checkbox li div{margin-top:0}.woof_submit_search_form{font-size:15px;text-transform:none;font-weight:400;width:100%;border-radius:4px}.blog-single .large-9{padding-right:0}.blog-single .entry-content p{margin-bottom:6px}.blog-single .entry-content{font-size:15px;padding-top:10px;padding-bottom:0}.blog-single .entry-content h2{font-size:20px;color:#326e51}.danh-muc{color:#000;font-size:14px;margin-bottom:5px}.the-tim-kiem a:hover{background:#326e51;color:#fff}.blog-single footer.entry-meta{border-top:1px solid #ececec;border-bottom:0 solid #ececec;padding:11px 0 0}.nav-dropdown-default{padding:0;font-size:14px}.blog-archive .post-item{padding-bottom:20px}.blog-archive .large-9{padding-right:20px}.blog-archive .large-3{padding-left:0;flex-basis:25%!important;max-width:25%!important}.blog-archive .post-item .box.box-vertical{border:1px solid #e3e3e3;border-radius:4px}.blog-archive .post-item .box-text{padding:0 0 0 15px}.blog-archive .post-item .box-text .post-title{font-size:20px;margin-bottom:13px}.blog-archive .taxonomy-description{text-align:left;font-size:15px}.blog-archive .archive-page-header .large-12{padding-bottom:0}.blog-archive{padding-top:20px;padding-bottom:20px}.blog-archive .page-title{text-align:left;letter-spacing:0;text-transform:none;border-bottom:0}#wpcomm .wpd-form-row .wpdiscuz-item input[type=email],#wpcomm input[type=text]{border:none;box-shadow:0 0}.comments-area{width:auto;background:#f6f6f6;border-radius:5px;padding:20px;margin-bottom:0}#wpcomm{max-width:100%;padding:1px 0 0;border-top:none;margin:0 auto}#wpcomm .wc_comm_form.wc_main_comm_form .wc-field-comment .wc-field-avatararea{margin:12px}#wpcomm .avatar{border-radius:99%;box-shadow:0 0}#wpcomm input[type=submit]{border:none;background-color:#326e51;border-radius:4px;font-size:12px}#wpcomm .wc-comment-right .wc-comment-text a,#wpcomm .wc-comment-right .wc-comment-text p{font-size:14px;line-height:21px}#wpcomm .wc-comment-header{margin-bottom:0;border-top:none}#wpcomm .wpdiscuz-textarea-wrap{border:0;border-radius:4px}#wpcomm .wc-follow-link{line-height:26px}#wpcomm .wc-comment-author{font-size:16px}#wpcomm .wc-field-textarea textarea{height:65px;min-height:65px!important}#wpcomm .wc_comm_form.wc_main_comm_form .wc-field-textarea .wpdiscuz-textarea-wrap textarea{box-shadow:0 0;margin-bottom:0!important;padding:20px 20px 20px 76px;font-size:15px}#wc-comment-header{max-width:100%;padding:0 0 10px;font-size:19px;font-weight:700;color:#326e51}.the-tim-kiem a{border-radius:4px;background:#e2e2e2;padding:3px 10px;margin-bottom:6px}.the-tim-kiem{color:#000;font-size:14px}.blog-single .entry-meta{font-size:12px;text-transform:none;letter-spacing:0;color:gray}.blog-single .entry-title{font-size:24px;margin-bottom:10px}.blog-single .entry-category a{letter-spacing:0;font-weight:400;font-size:12px}.blog-single{padding-top:20px;padding-bottom:20px}.blog-single .large-9 .article-inner{border:1px solid #e3e3e3;padding:15px}.blog-single .post-sidebar{padding-left:20px;border-left:0!important}.woof_price_filter_dropdown_container{margin-bottom:9px}.woof_list label{font-size:13px;font-weight:400;margin-bottom:0}.chosen-container-single .chosen-search input[type=text]:focus{box-shadow:0 0 0 gray;border:1px solid #326e51}.woof_list li{margin:0!important}.chosen-container-single .chosen-single{box-shadow:0 0 0 gray;background:#fff;border-radius:4px;font-size:14px;padding:5px 10px}.woof_container_inner h4{font-size:15px;color:#326e51}.archive.woocomerce-page .widget{border:0;border-top:0}.archive .col.product-small{padding:0!important;flex-basis:20%;max-width:20%}.archive .category-page-row .large-9{padding-bottom:20px;flex-basis:83.4%;max-width:83.4%;padding-left:25px!important}.archive .large-3{padding-right:0;flex-basis:16.6%;max-width:16.6%}#wc-comment-header .wpdiscuz-comment-count .wpd-cc-value{padding:1px 10px 2px 8px;min-width:34px;min-height:13px;font-size:12px;background:#326e51}#wpcomm .wc-footer-left .wc-cta-button,#wpcomm .wc-footer-left .wc-cta-button-x{border-radius:4px}#wpcomm .wc-thread-wrapper{padding:10px 0 0 2px;margin-bottom:0;margin-top:0}.devvn_prod_variable .quantity .screen-reader-text {display: none;}/* Custom CSS Mobile */@media (max-width: 549px){.archive .category-page-row .large-9,.archive .large-3,.category-row .cot2,.single-product .product .large-9,.slider-row .cot2,.slider-row .cot2 .large-9{flex-basis:100%!important;max-width:100%!important}.blog-archive .large-3,.category-row .cot1,.category-row .cot2 .row-collapse .medium-4,.category-row .section-title-normal,.category-row .tieu-de-row .right ul li,.footer-section .row2 .large-8,.slider-row .cot1,.slider-row .cot2 .large-3,.slider-row .cot3,.sticky-add-to-cart--active .sticky-add-to-cart__product{display:none}.category-row .large-12{padding:0}.thuong-hieu .row-thuong-hieu{padding-top:10px}.section-title-container{padding:0}.thuong-hieu .medium-3{flex-basis:33.33%;max-width:33.33%;padding:0 3.8px 8.6px}.row-sp .product-small .box-text .product-title a{font-size:12px}.category-row .tieu-de-row .left,.category-row .tieu-de-row .right{width:50%}.category-row .tieu-de-row .right ul li:last-child{display:block!important}.archive .col.product-small,.footer-section .large-8 .large-4{flex-basis:50%;max-width:50%}.product-main{margin:0}.single-product .large-9{padding-right:15px}.single-product .product-main .large-6,.single-product .product-main .large-6 .large-10{padding-right:0}a.devvn_buy_now_style{width:121px}.quantity+.button{padding:.5px 12px}span.devvn_title{font-size:14px}.product-tabs li a{padding:6px 15px}.blog-archive .large-9{padding-right:15px}.widget{border:0;border-top:0}.archive .category-page-row .large-9{padding-left:15px!important}}.label-new.menu-item > a:after{content:"New";}.label-hot.menu-item > a:after{content:"Hot";}.label-sale.menu-item > a:after{content:"Sale";}.label-popular.menu-item > a:after{content:"Popular";}</style>
   <script type="text/javascript">
      var woof_is_permalink =1;
      
      var woof_shop_page = "";
      
      var woof_really_curr_tax = {};
      var woof_current_page_link = location.protocol + '//' + location.host + location.pathname;
      //***lets remove pagination from woof_current_page_link
      woof_current_page_link = woof_current_page_link.replace(/\page\/[0-9]+/, "");
        woof_current_page_link = "https://shoplamdep.haiphongweb.com/mua/";
        var woof_link = 'https://shoplamdep.haiphongweb.com/wp-content/plugins/woocommerce-products-filter/';
      
   </script>
   <script>
      var woof_ajaxurl = "https://shoplamdep.haiphongweb.com/wp-admin/admin-ajax.php";
      
      var woof_lang = {
      'orderby': "orderby",
      'date': "date",
      'perpage': "per page",
      'pricerange': "price range",
      'menu_order': "menu order",
      'popularity': "popularity",
      'rating': "rating",
      'price': "price low to high",
      'price-desc': "price high to low"
      };
      
      if (typeof woof_lang_custom == 'undefined') {
      var woof_lang_custom = {};//!!important
      }
      
      //***
      
      var woof_is_mobile = 0;
      
      
      
      var woof_show_price_search_button = 0;
      var woof_show_price_search_type = 0;
      
      var woof_show_price_search_type = 2;
      
      var swoof_search_slug = "swoof";
      
      
      var icheck_skin = {};
       	        icheck_skin.skin = "flat";
          icheck_skin.color = "green";
      
      var is_woof_use_chosen =1;
      
      
      
      var woof_current_values = '[]';
      //+++
      var woof_lang_loading = "Loading ...";
      
      
      var woof_lang_show_products_filter = "show products filter";
      var woof_lang_hide_products_filter = "hide products filter";
      var woof_lang_pricerange = "price range";
      
      //+++
      
      var woof_use_beauty_scroll =0;
      //+++
      var woof_autosubmit =1;
      var woof_ajaxurl = "https://shoplamdep.haiphongweb.com/wp-admin/admin-ajax.php";
      var woof_submit_link = "";
      var woof_is_ajax = 0;
      var woof_ajax_redraw = 0;
      var woof_ajax_page_num =1;
      var woof_ajax_first_done = false;
      var woof_checkboxes_slide_flag = true;
      
      
      //toggles
      var woof_toggle_type = "text";
      
      var woof_toggle_closed_text = "-";
      var woof_toggle_opened_text = "+";
      
      var woof_toggle_closed_image = "https://shoplamdep.haiphongweb.com/wp-content/plugins/woocommerce-products-filter/img/plus3.png";
      var woof_toggle_opened_image = "https://shoplamdep.haiphongweb.com/wp-content/plugins/woocommerce-products-filter/img/minus3.png";
      
      
      //indexes which can be displayed in red buttons panel
       var woof_accept_array = ["min_price", "orderby", "perpage", ,"pwb-brand","product_visibility","product_cat","product_tag"];
      
      
      
      
      //***
      //for extensions
      
      var woof_ext_init_functions = null;
      
      
      
      var woof_overlay_skin = "default";
      
      
      jQuery(function () {
      woof_current_values = jQuery.parseJSON(woof_current_values);
      if (woof_current_values.length == 0) {
       woof_current_values = {};
      }
      
      });
      
      function woof_js_after_ajax_done() {
      jQuery(document).trigger('woof_ajax_done');
       }
   </script>
   <style>
   		a {
   		text-decoration: none;
   	}
      .col.product-small:hover a.name{
      color: #ff6600;
      }
   </style>
@endsection
