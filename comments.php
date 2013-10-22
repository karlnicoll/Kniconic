<?php
/*
 * Comment display template of Kniconic.
 * @package Kniconic
 * @since Kniconic 1.0
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() )
	return;

if ( !comments_open() && ( 0 == get_comments_number() ) )
	return;
?>

<aside id="comments" class="comments-area">

	<?php // You can start editing here -- including this comment! ?>
		<header>
			<h1 class="comments-title">Commentary</h1>
		</header>
	
	<?php if ( have_comments() ) : ?>
		
		<ol class="commentlist">
			<?php wp_list_comments( array( 'callback' => 'themonic_comment', 'style' => 'ol' ) ); ?>
		</ol><!-- .commentlist -->

		<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // are there comments to navigate through ?>
		<nav id="comment-nav-below" class="navigation" role="navigation">
			<h1 class="assistive-text section-heading"><?php _e( 'Comment navigation', 'themonic' ); ?></h1>
			<div class="nav-previous"><?php previous_comments_link( __( '&larr; Older Comments', 'themonic' ) ); ?></div>
			<div class="nav-next"><?php next_comments_link( __( 'Newer Comments &rarr;', 'themonic' ) ); ?></div>
		</nav>
		<?php endif; // check for comment navigation ?>

		<?php
		/* If there are no comments and comments are closed, let's leave a note.
		 * But we only want the note on posts and pages that had comments in the first place.
		 */
		if ( ! comments_open() && get_comments_number() ) : ?>
		<p class="nocomments"><?php _e( 'Comments are closed.' , 'themonic' ); ?></p>
		<?php endif; ?>

	<?php endif; // have_comments() ?>

	<?php comment_form(array('comment_notes_after' => '')); ?>

</aside><!-- #comments .comments-area -->