<?php include 'include/header.php'; ?>

<div class="flexslider">
	<ul class="slides">
		<li><img src="images/slider1.jpg"></li>
		<li><img src="images/slider2.jpg"></li>
		<li><img src="images/slider3.jpg"></li>
		<li><img src="images/slider4.jpg"></li>
		<li><img src="images/slider5.jpg"></li>
		<li><img src="images/slider6.jpg"></li>
	</ul>
</div>
<div class="content">
	<div class="align">
		<h2>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum 
			consectetur nisi a dolor iaculis id viverra lectus facilisis. Curabitur diam tellus,</h2>
		<p class="slider-under">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum 
			consectetur nisi a dolor iaculis id viverra lectus</br>facilisis. Curabitur diam tellus, fermentum id aliquet non, 
			rhoncus et orci. Aenean ac tellus turpis, nec porttitor elit.</p>
		<article>
			<div class="control">
				<span class="prev-item"></span>
				<span class="next-item"></span>
			</div>
			<div class="item-desc">
				<h3>Recent work</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis laoreet laoreet leo at dictum. </p>
			</div>
			<div class="items-content">
				<div class="item-wrap">
					<div class="item-content">
						<a rel="lightbox-gallery" title="ME SO HUNGRY" href="images/prew-post 1.png">
							<img src="images/post 1.png" alt="">
						</a>
						<h4>Me so hungry</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis laoreet laoreet 
							leo at dictum. Sed egestas dignissim tincidunt.
							 Nam sit amet quam sed dolor
							 ullamcorper </p>
					</div>
					<div class="item-content">
						<a rel="lightbox-gallery" title="ART AGAIN" href="images/prew-post 2.png">
							<img src="images/post 2.png">
						</a>
						<h4>art again</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis laoreet laoreet 
							leo at dictum. Sed egestas dignissim tincidunt.
							 Nam sit amet quam sed dolor
							 ullamcorper </p>
					</div>
					<div class="item-content">
						<a rel="lightbox-gallery" title="Yeh ok whatever" href="images/prew-post 3.png">
							<img src="images/post 3.png">
						</a>
						<h4>Yeh ok whatever</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis laoreet laoreet 
							leo at dictum. Sed egestas dignissim tincidunt.
							 Nam sit amet quam sed dolor
							 ullamcorper </p>
					</div>
					<div class="item-content">
						<a rel="lightbox-gallery" title="Krzysztof Nowak" href="images/prew-post 4.png">
							<img src="images/post 4.png">
						</a>
						<h4>Krzysztof Nowak</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis laoreet laoreet leo at dictum. Sed egestas</p>
					</div>
					<div class="item-content">
						<a rel="lightbox-gallery" title="Krzysztof Nowak" href="images/prew-post 5.png">
							<img src="images/post 5.png">
						</a>
						<h4>Krzysztof Nowak</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis laoreet laoreet leo at dictum. Sed egestas dignissim tincidunt.</p>
					</div>
					<div class="item-content">
						<a rel="lightbox-gallery" title="Krzysztof Nowak" href="images/prew-post 6.png">
							<img src="images/post 6.png">
						</a>
						<h4>Krzysztof Nowak</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis laoreet laoreet leo at dictum. Sed egestas dignissim tincidunt.</p>
					</div>
				</div>
			</div>
		</article>
		<div class="bottom-content">
			<h3>About the Author</h3>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis laoreet laoreet leo at dictum. Sed egestas dignissim tincidunt. Nam sit amet quam sed</p>
			<img src="images/bt-post 1.png">
		</div>
		<div class="bottom-content">
			<h3>We’ll It’s a bloody text box init?</h3>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis laoreet laoreet leo at dictum. Sed egestas dignissim tincidunt. Nam sit amet quam sed</p>
			<img src="images/bt-post 2.png">
		</div>
	</div>
</div>

	<!-- jQuery -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="js/libs/jquery-1.7.min.js">x3C/script>')</script>


<script src='js/slimbox2.js'></script>
<script src='js/content-items.js'></script>

<!-- FlexSlider -->
<script src='js/jquery.flexslider.min.js'></script>
<script>
	$(window).load(function() {
		$('.flexslider').flexslider({
			animation: "slide"
		});
	});
</script>

<?php include 'include/footer.php'; ?>