<?php get_header();
	while ( have_posts() ) : the_post();

?>

<div class="container">
	<article class="contenu-area">
		<div class="contenu-container">
				<h1 class="h1" itemprop="headline"><?php the_title(); ?></h1>
			
			
			<div class="container_editor">
				<?php the_content(); ?>
				
			</div>

			<div class="entry-meta link-editer">
				<?php
					if($post->post_parent=="20") {
						echo '<a href="'.get_permalink(20).'" class="link_back button_">⇦ '.__('Retour à nos solutions','Open innovation').'</a>';
					}
					edit_post_link( __( 'Modifier', 'Open innovation' ), '<span class="edit-link">', '</span>' );
				?>
			</div>
		</div>
	</article>
</div>

	<?php endwhile;
get_footer(); ?>
