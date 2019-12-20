
<script src="js/jquery.min.js"></script>
<div class="header">
<div class="container">
		<div class="head">
			<div class=" logo">
				<a href="#"><img src="images/logo.png" alt=""></a>	
			</div>
		</div>
	</div>
	<div class="header-top">
		<div class="container">
		<div class="col-sm-5 col-md-offset-2  header-login">
			@if (!Auth::user())
				<ul >
					<li><a href="{{ route('login') }}">Login</a></li>
					<li><a href="{{route('register')}}">Register</a></li>
					<li><a href="checkout.html">Checkout</a></li>
				</ul>
			@else
			<ul >
					<li><a href="#">{{ Auth::user()->name }} </a></li>
					<li><a href="checkout.html">Checkout</a></li>
				</ul>

			@endif


				</div>
				
			<div class="col-sm-5 header-social">		
					<ul >
						<li><a href="#"><i></i></a></li>
						<li><a href="#"><i class="ic1"></i></a></li>
						<li><a href="#"><i class="ic2"></i></a></li>
						<li><a href="#"><i class="ic3"></i></a></li>
						<li><a href="#"><i class="ic4"></i></a></li>
					</ul>
					
			</div>
				<div class="clearfix"> </div>
		</div>
		</div>
		
		<div class="container">
		
			<div class="head-top">
			
		 <div class="col-sm-8 col-md-offset-2 h_menu4">
				<nav class="navbar nav_bottom" role="navigation">
 
 <!-- Brand and toggle get grouped for better mobile display -->
  <div class="navbar-header nav_2">
      <button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
     
   </div> 
   <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
        <ul class="nav navbar-nav nav_1">
            <li><a class="color" href="index.html">Home</a></li>
            
    		<li class="dropdown mega-dropdown active">
			    <a class="color1" href="#" class="dropdown-toggle" data-toggle="dropdown">Women<span class="caret"></span></a>				
				<div class="dropdown-menu ">
                    <div class="menu-top">
						<div class="col1">
							<div class="h_nav">
								<h4>Submenu1</h4>
									<ul>
										<li><a href="product.html">Accessories</a></li>
										<li><a href="product.html">Bags</a></li>
										<li><a href="product.html">Caps & Hats</a></li>
										<li><a href="product.html">Hoodies & Sweatshirts</a></li>
										
									</ul>	
							</div>							
						</div>
					</div>                  
				</div>				
			</li>
            <li ><a class="color6" href="contact.html">Contact</a></li>
        </ul>
     </div><!-- /.navbar-collapse -->

</nav>
			</div>
			<div class="col-sm-2 search-right">
				<ul class="heart">
				<li>
				<a href="wishlist.html" >
				<span class="glyphicon glyphicon-heart" aria-hidden="true"></span>
				</a></li>
				<li><a class="play-icon popup-with-zoom-anim" href="#small-dialog"><i class="glyphicon glyphicon-search"> </i></a></li>
					</ul>
					<div class="cart box_1">
						<a href="checkout.html">
						<h3> <div class="total">
							<span class="simpleCart_total"></span></div>
							<img src="images/cart.png" alt=""/></h3>
						</a>
						<p><a href="javascript:;" class="simpleCart_empty">Empty Cart</a></p>

					</div>
					<div class="clearfix"> </div>
					
						<!----->

						<!---pop-up-box---->					  
			<link href="css/popuo-box.css" rel="stylesheet" type="text/css" media="all"/>
			<script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
			<!---//pop-up-box---->
			<div id="small-dialog" class="mfp-hide">
				<div class="search-top">
					<div class="login-search">
						<input type="submit" value="">
						<input type="text" value="Search.." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search..';}">		
					</div>
					<p>Shopin</p>
				</div>				
			</div>
				
						<!----->
			</div>
			<div class="clearfix"></div>
		</div>	
	</div>	
</div>
<!--banner-->
<div class="banner">
<div class="container">
<section class="rw-wrapper">
				<h1 class="rw-sentence">
					<span>Fashion &amp; Beauty</span>
					<div class="rw-words rw-words-1">
						<span>Beautiful Designs</span>
						<span>Sed ut perspiciatis</span>
						<span> Totam rem aperiam</span>
						<span>Nemo enim ipsam</span>
						<span>Temporibus autem</span>
						<span>intelligent systems</span>
					</div>
					<div class="rw-words rw-words-2">
						<span>We denounce with right</span>
						<span>But in certain circum</span>
						<span>Sed ut perspiciatis unde</span>
						<span>There are many variation</span>
						<span>The generated Lorem Ipsum</span>
						<span>Excepteur sint occaecat</span>
					</div>
				</h1>
			</section>
			</div>
</div>