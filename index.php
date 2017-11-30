<?php get_header();?>

<!-- Main -->
<div id="main">
	<div class="inner">
		<header>
			<h1>This is Phantom, a free, fully responsive site<br />
				template designed by <a href="http://html5up.net">HTML5 UP</a>.</h1>
				<p>Etiam quis viverra lorem, in semper lorem. Sed nisl arcu euismod sit amet nisi euismod sed cursus arcu elementum ipsum arcu vivamus quis venenatis orci lorem ipsum et magna feugiat veroeros aliquam. Lorem ipsum dolor sit amet nullam dolore.</p>
			</header>

			<?php if(!have_posts()){?>
			<h2>Nenhum post encontrado...</h2>
			<?php }else{?>
			<section class="tiles">
				<?php while( have_posts() ){

					the_post();
					global $post; ?>

					<article class="style1">
						<span class="image">
							<?php if(!has_post_thumbnail( )){?>
							<img src="<?php echo THEME_URL; ?>images/pic01.jpg" alt="" />
							<?php }else{?>
							<?php the_post_thumbnail('thumbnail');?>
							<?php }?>
						</span>
						<a href="<?php echo get_permalink($post)?>">
							<h2><?php the_title(); ?></h2>
							<div class="content">
								<p><?php echo get_the_excerpt(); ?></p>
							</div>
						</a>
					</article>
					<?php }?>
				</section>
				<?php }?>
			</div>
		</div>



		<?php get_footer();?>