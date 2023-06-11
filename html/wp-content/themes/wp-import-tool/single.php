
<div id="primary" class="content-area">
    <main id="main" class="site-main">

        <?php while ( have_posts() ) : the_post(); ?>

            <!-- <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <header class="entry-header">
                    <h1 class="entry-title"><?php the_title(); ?></h1>
                </header> -->

                <div class="entry-content">
									<?php
										$name_values = get_post_meta(get_the_ID(), 'name');
										$kana_values = get_post_meta(get_the_ID(), 'kana');
										$height_values = get_post_meta(get_the_ID(), 'height');
										$weight_values = get_post_meta(get_the_ID(), 'weight');
										$gender_values = get_post_meta(get_the_ID(), 'gender');
										$tel_values = get_post_meta(get_the_ID(), 'tel');
										$address_values = get_post_meta(get_the_ID(), 'address');
										$occupation_values = get_post_meta(get_the_ID(), 'occupation');
										$broad_cat_values = get_post_meta(get_the_ID(), 'broad_cat');
										$sub_cat_values = get_post_meta(get_the_ID(), 'sub_cat');
										$company_values = get_post_meta(get_the_ID(), 'company');
										$company_tel_values = get_post_meta(get_the_ID(), 'company_tel');
										$company_address_values = get_post_meta(get_the_ID(), 'company_address');
										$department_values = get_post_meta(get_the_ID(), 'department');
										$position_values = get_post_meta(get_the_ID(), 'position');
									?>

									<div>
											名前：<?php echo implode(', ', $name_values); ?>
									</div>
									<div>
											かな：<?php echo implode(', ', $kana_values); ?>
									</div>
									<div>
											身長：<?php echo implode(', ', $height_values); ?>
									</div>
									<div>
											体重：<?php echo implode(', ', $weight_values); ?>
									</div>
									<div>
											性別：<?php echo implode(', ', $gender_values); ?>
									</div>
									<div>
											電話番号：<?php echo implode(', ', $tel_values); ?>
									</div>
									<div>
											住所：<?php echo implode(', ', $address_values); ?>
									</div>
									<div>
											職種：<?php echo implode(', ', $occupation_values); ?>
									</div>
									<div>
											職業大分類：<?php echo implode(', ', $broad_cat_values); ?>
									</div>
									<div>
											職業小分類：<?php echo implode(', ', $sub_cat_values); ?>
									</div>
									<div>
											会社名：<?php echo implode(', ', $company_values); ?>
									</div>
									<div>
											会社電話番号：<?php echo implode(', ', $company_tel_values); ?>
									</div>
									<div>
											会社住所：<?php echo implode(', ', $company_address_values); ?>
									</div>
									<div>
											部署：<?php echo implode(', ', $department_values); ?>
									</div>
									<div>
											役職：<?php echo implode(', ', $position_values); ?>
									</div>
                    
                </div>
            <!-- </article> -->

        <?php endwhile; ?>

    </main>
</div>
