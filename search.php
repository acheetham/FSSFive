<?php get_header(); ?>

			<div class="fl-container fl-container-flex fl-push">

				<section id="nav:content" class="content fl-col fl-container-flex70" role="main">

					<?php if (have_posts()) : ?>

					<h2>Search Results for &quot;<?php the_search_query(); ?>&quot;</h2>

					<section class="search" id="post-<?php the_ID(); ?>">

						<ol id="search-results">

							<?php while (have_posts()) : the_post(); ?>

							<li>
								<h3><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
								<?php the_excerpt(); ?>
								<p class="entry-meta">Posted <time datetime="<?php the_time('Y-m-d') ?>" pubdate="pubdate"><?php the_time('F jS, Y') ?></time> by <?php the_author(); ?></p>
							</li>

							<?php endwhile; ?>

						</ol>
					</section><!-- /.search -->

					<?php include (TEMPLATEPATH . '/inc/posts-nav.php' ); ?>

					<?php else : ?>

					<?php include (TEMPLATEPATH . '/inc/not-found.php' ); ?>

					<?php endif; ?>

				</section><!-- /#nav:content -->

<?php get_sidebar(); ?>

<?php get_footer(); ?>