<?php

	get_header();

?>

<section class="content px-3 py-5 p-md-5">
    <div class="container">
		<?php
			if(have_posts()) {
				while (have_posts()) {
					the_post();
					//the_content();
					get_template_part('templates-parts/content', 'archive');
				}
			}
		?>
		
		<?php
			the_posts_pagination();
		?>
    </div>
</section>

<?php
	get_footer();
?>