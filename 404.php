<?php
/*
 * Template for displaying 404 pages.
 * @package Kniconic
 * @since Kniconic 1.0
 */

get_header(); ?>

	<div id="primary" class="site-content">
		<div id="content" role="main">

			<article id="post-0" class="post error404 no-results not-found">
				<header class="entry-header">
					<h1 class="entry-title"><?php _e( 'Page not found!', 'themonic' ); ?></h1>
				</header>

				<div class="entry-content">
					<blockquote>
						On two occasions I have been asked, "Pray, Mr. Babbage, if you put into the machine wrong figures, will the
						right answers come out?"...I am not able rightly to apprehend the kind of confusion of ideas that could
						provoke such a question.
						<footer>
							<cite>Charles Babbage</cite>
						</footer>
					</blockquote>
					
					<p>
						Looks like the page you were looking for isn't here. Did you spell the address correctly? If you know what
						you're looking for, perhaps searching will help?
					</p>
					
					<?php get_search_form(); ?>
				</div><!-- .entry-content -->
			</article><!-- #post-0 -->

		</div><!-- #content -->
	</div><!-- #primary -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>