<?php get_header(); ?>



<!-- Slider main container -->

<div class="swiper-container">
    <!-- Additional required wrapper -->
    <div class="swiper-wrapper">
        <!-- Slides -->
        <div class="swiper-slide">
			<div class="container">
				<div class="row">
					<div class="col-md-4">This is left</div>
					<div class="col-md-8">This is right</div>
				</div>
			</div>
        </div>
        <div class="swiper-slide">
			<img src="/wp-content/themes/cola/images/everything-easier.png" alt="Everything easier" class="img-responsive">
        </div>
        ...
    </div>
    <!-- If we need pagination -->
    <div class="swiper-pagination"></div>
</div>

<section id="private-beta">
	<div class="container">
		<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<h3>Sign up for the private beta</h3>
			<?php get_template_part('loop', 'home'); ?>
		</div>		
	</div>
	</div>
</section>

<section id="team">
	<div class="container">
		<div class="row">
			<h3>Meet the Cola Team</h3>
		</div>
		<div class="row">
			<div class="col-md-4">
				<img src="/wp-content/themes/cola/images/david-temkin.jpg" alt="David Temkin" class="img-circle img-responsive">
				<h4>David Temkin</h4>
				<span>Founder, CEO</span>
				<p>Founder Laszlo Systems, Worked at Apple, AOL, Studied at Brown </p>
			</div>
			<div class="col-md-4">
				<img src="/wp-content/themes/cola/images/marc-camter.jpg" alt="Marc Canter" class="img-circle img-responsive">
				<h4>Marc Canter</h4>
				<span>Founder, Chief Evangelist</span>
			</div>
			<div class="col-md-4">
				<img src="/wp-content/themes/cola/images/mike-mcevoy.jpg" alt="Mike McEvoy" class="img-circle img-responsive">
				<h4>Mike McEvoy</h4>
				<span>Founder, COO</span>
			</div>
		</div><!-- end row 1 -->
		<div class="row">
			<div class="col-md-4">
				<img src="/wp-content/themes/cola/images/jeremy-wyld.jpg" alt="Jeremy Wyld" class="img-circle img-responsive">
				<h4>Jeremy Wyld</h4>
				<span>Founder, Software Development</span>
			</div>
			<div class="col-md-4">
				<img src="/wp-content/themes/cola/images/brian-maggi.jpg" alt="Brian Maggi" class="img-circle img-responsive">
				<h4>Brian Maggi</h4>
				<span>Founder, Product &amp; Marketing</span>
			</div>
			<div class="col-md-4">
				<img src="/wp-content/themes/cola/images/tom-broadbent.jpg" alt="Tom Broadbent" class="img-circle img-responsive">
				<h4>Tom Broadbent</h4>
				<span>Software Development</span>
			</div>
		</div>
		<div class="row">
			<div class="col-md-4">
				<img src="/wp-content/themes/cola/images/erin-rosenthal.jpg" alt="Erin Rosenthal" class="img-circle img-responsive">
				<h4>Erin Rosenthal</h4>
				<span>User Experience</span>
			</div>
			<div class="col-md-4">
				<img src="/wp-content/themes/cola/images/oliver-steele.jpg" alt="Oliver Steele" class="img-circle img-responsive">
				<h4>Oliver Steele</h4>
				<span>Software Development</span>
			</div>
			<div class="col-md-4">
				<img src="/wp-content/themes/cola/images/max-carlson.jpg" alt="Max Carlson" class="img-circle img-responsive">
				<h4>Max Carlson</h4>
				<span>Software Development</span>
			</div>
		</div>
	</div>
</section>










<?php get_footer(); ?>
