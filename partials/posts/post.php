<article itemscope itemtype="http://schema.org/BlogPosting" <?php post_class( 'leftaside' ); ?>>
	<header class="post-header">
		<h1 class="post-title">
			<a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
		</h1>
		<?php get_template_part( 'partials/post-metadata'); ?>
	</header>
	<div class="row">
		<section class="post-content">
			<?php the_post_thumbnail( 'medium-thumbnail' ); ?>
			<?php the_content( __( 'Read On&hellip;', 'frank_theme' ) ); ?>
		</section>
	</div>
</article>