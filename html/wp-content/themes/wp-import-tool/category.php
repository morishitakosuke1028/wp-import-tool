<?php if ( have_posts() ) : ?>

<header class="page-header">
		<h1 class="page-title">
				<?php single_cat_title(); // カテゴリのタイトルを表示 ?>
		</h1>
</header>

<?php while ( have_posts() ) : the_post(); ?>

		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<header class="entry-header">
						<h2 class="entry-title">
								<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
						</h2>
				</header>

				<div class="entry-content">
						<?php the_excerpt(); // 抜粋を表示 ?>
				</div>
		</article>

<?php endwhile; ?>

<?php the_posts_navigation(); // ページ送りのナビゲーションを表示 ?>

<?php else : ?>

<p><?php esc_html_e( 'No posts found.', 'text-domain' ); ?></p>

<?php endif; ?>



<?php
$category = get_queried_object(); // 現在のカテゴリ情報を取得
$category_link = get_category_link( $category->term_id ); // カテゴリページのリンクを取得
?>
<a href="<?php echo esc_url( $category_link ); ?>"><?php single_cat_title(); ?></a>