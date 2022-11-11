<?php
/**
* Template Name: Page - Home
* @package designingreen
*/

get_header(); ?>

<section class="mol--page-main" style="padding: 100px 0;">
	<div class="container">
		<div class="row">
			<div class="col-12 col-md-4">
				<figure>
					<img class="mw-100" src="<?php the_field('homepage_logo');?>">
				</figure>
			</div>
			<div class="col-12 col-md-8">
				<h1 class="large"><?php the_field('homepage_large'); ?></h1>
				<div>
					<h3><span><?php the_field('homepage_introduction'); ?></span></h3>
					<?php the_field('homepage_description'); ?>
				</div>
				<div>
					<h4 class="ut--uc">Expertise</h4>
					<!-- repeater: expertise -->
					<p class="skills">Code&nbsp;•&nbsp;Innovation&nbsp;•&nbsp;Technology</p>
				</div>
				<div>
					<h4 class="ut--uc">Services</h4>
					<!-- repeater: services -->
					<p class="skills">Design&nbsp;•&nbsp;Development&nbsp;•&nbsp;Prototyping&nbsp;•&nbsp;UX/UI&nbsp;•&nbsp;Design Coaching</p>
				</div>
			</div>

			<?php /*
				<h1><?php the_title();?></h1>
				<p>How do we update the navigation - we need 2x separate version.</p>
				<!-- A transparent white block / full width at 50-70% would work well on the background -->
				<a class="button atm--button-main" href="/labs">
					<span>Discover more</span><i class="fas fa-arrow-right"></i>
				</a>

				<h2>How I can help you?</h2>
				<p>Over the past 2 years I have started to hone the services I offer. Whether it's the opportunity to run an audit on your design or digital offering, or a full program of coaching, I am confident I can help you and I can help your business.</p>

				<h2>Who is this for?</h2>
			*/?>
			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>