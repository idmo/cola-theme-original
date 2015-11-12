<?php get_header(); ?> 



<!-- Slider main container -->

<div class="swiper-container">
    <!-- Additional required wrapper -->
    <div class="swiper-wrapper">
        <!-- Slides -->
        <div class="swiper-slide" id="f0">
        	<p>You know the drill</p>
        </div>
        <div class="swiper-slide" id="f1">
        	<p>You know the drill<br>
        	Just one small quesiton</p>
        </div>
        <div class="swiper-slide" id="f2">
        	<p>Can lead to a hundred texts</p>
        </div>
        <div class="swiper-slide" id="f3">
        	<p>Can lead to a hundred texts<br>
        	And jumping in and out of apps</p>
        </div>
        <div class="swiper-slide" id="f4">
        	<p>Cola turns those 100 frustrating texts into one useful Bubble</p>
        </div>
        <div class="swiper-slide" id="f5">
        </div>
    </div>
    <div class="swiper-pagination"></div>
</div>

<section id="tagline">
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<p>Don't just text. Do Something.</p>
		</div>
	</div>
</div>	
</section>

<section id="private-beta">
<div class="container">
	<h3>Sign up for the private beta</h3>
	<?php get_template_part('loop', 'home'); ?>
</div>
</section>


<section id="team">
	<div class="container">
		<div class="row">
			<h3>Meet the Cola Team</h3>
		</div>
		<div class="row">
			<div class="col-sm-4">
				<img src="https://media.licdn.com/media/p/2/005/009/0a5/0058350.jpg" alt="David Temkin" class="img-responsive img-circle">
				<h4>David Temkin, CEO</h4>
				<p>Experience: Founder Laszlo Systems, Worked at Apple, AOL, Studied at Brown </p>
			</div>
			<div class="col-sm-4">
				<img src="https://media.licdn.com/media/p/3/000/003/108/1a69531.jpg" alt="Marc Canter" class="img-responsive img-circle">
				<h4>Marc Canter</h4>
				<p>Experience: Founder MacroMind / Macromedia, Interactive Music pioneer, Digital City Project</p>
			</div>
			<div class="col-sm-4">
				<img src="/wp-content/themes/cola-theme/images/mike-mcevoy.jpg" alt="Mike McEvoy" class="img-responsive img-circle">
				<h4>Mike McEvoy</h4>
				<p>Experience: VP of Engineering, Johnson &amp; Johnson, Adobe Photoshop team</p>
			</div>
		</div><!-- end row 1 -->
		<div class="row">
			<div class="col-sm-3">
				<img src="https://media.licdn.com/media/p/8/000/1ac/18a/217c0bb.jpg" alt="Jeremy Wyld" class="img-responsive img-circle">
				<h4>Jeremy Wyld</h4>
				<p>Experience: Founder Quake Labs, iPhone and iPad teams, @Home, Apple Newton</p>
			</div>
			<div class="col-sm-3">
				<img src="/wp-content/themes/cola-theme/images/brian-maggi.jpg" alt="Brian Maggi" class="img-responsive img-circle">
				<h4>Brian Maggi</h4>
				<p>Experience: Founder Postini, Apple Newton and iMac teams</p>
			</div>
			<div class="col-sm-3">
				<img src="/wp-content/themes/cola-theme/images/tom-broadbent.jpg" alt="Tom Broadbent" class="img-responsive img-circle">
				<h4>Tom Broadbent</h4>
				<p>Experience: Northrup Grumman, Zing, Dell, Plastic Logic, PayPal, Duff</p>
			</div>
			<div class="col-sm-3">
				<img src="/wp-content/themes/cola-theme/images/dave-good.jpg" alt="Dave Good" class="img-responsive img-circle">
				<h4>Dave Good</h4>
				<p>Experience: Engineering Director PayPal and Eventbrite, Partner Duff, Microsoft, Adobe</p>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-4">
				<img src="https://media.licdn.com/media/AAEAAQAAAAAAAAJkAAAAJDBmMTVkOWNjLTc2MzYtNGNjZi05NzJiLWUzNzU0MTM5YTEyYQ.jpg" alt="Erin Rosenthal" class="img-responsive img-circle">
				<h4>Erin Rosenthal</h4>
				<p>Experience: Apple iPhone and iPad teams, Google Keep Team</p>
			</div>
			<div class="col-sm-4">
				<img src="https://media.licdn.com/media/p/1/000/20b/350/2417bd8.jpg" alt="Oliver Steele" class="img-responsive img-circle">
				<h4>Oliver Steele</h4>
				<p>Oliver got through Apple and Nest. He’ll get through this</p>
			</div>
			<div class="col-sm-4">
				<img src="/wp-content/themes/cola-theme/images/max-carlson.jpg" alt="Max Carlson" class="img-responsive img-circle">
				<h4>Max Carlson</h4>
				<p>Experience: Laszlo, @Home, Nest</p>
			</div>
		</div>
	</div>
</section>




<?php get_footer(); ?>
