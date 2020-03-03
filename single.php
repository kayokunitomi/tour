<?php get_header(); ?>

       <!-- トップラッパーここから -->

<div class="container">
      <h2 class="subtitle">新着情報</h2>

<?php if (have_posts()) : //wordpress ループ
while (have_posts()) : the_post(); //繰り返し処理作業 ?>

<h3 class="entrytitle"><?php the_title(); ?></h3>
<ul class="entryinnav">
  <li><?php the_time('Y.m.d') ?></li>
</ul>

<?php the_content(); ?>

<?php endwhile; //繰り返し処理終了
else : //ここから記事が見つからない場合の処理 ?>
<p>記事がありません</p>
<?php endif; //wordpress ループ終了 ?>

</div>

<?php get_footer(); ?>
