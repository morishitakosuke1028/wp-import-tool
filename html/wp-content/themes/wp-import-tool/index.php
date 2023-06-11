<h1>これはインポートツール用のテーマです。</h1>

<!-- <a href="<?php //echo get_permalink( get_option( 'page_for_posts' ) ); ?>">View All Categories</a> -->
<?php if ( have_posts() ) : ?>
	<ul>
    <?php while ( have_posts() ) : the_post(); ?>
        <!-- 投稿のループ内のコード -->
				<li>
					<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
				</li>
        <!-- 他の投稿関連のコード -->
    <?php endwhile; ?>
	</ul>
<?php else : ?>
    <p>No posts found.</p>
<?php endif; ?>

<a href="<?php echo esc_url(home_url('/csv_import/')); ?>">CSVインポートページへ</a>