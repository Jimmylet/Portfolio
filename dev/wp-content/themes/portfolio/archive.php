<?php

/*
Template Name: Portfolio-list
*/

get_header();

if(is_page()){
    query_posts([
        'posts_per_page' => 10,
        'orderby' => 'date',
        'order' => 'DESC',
        'post_type' => 'post'
    ]);
};

?>

  <section class="portfolio-intro">
    <h2 aria-level="2" class="portfolio-intro__section-title">Mon portfolio</h2>
    <span class="portfolio-intro__title">
      Je <span class="portfolio-intro__word">développe</span> <span class="portfolio-intro__swap"></span> beaucoup de projets
    </span>
    <p class="portfolio-intro__text">
      J’aime mon boulot. C’est une passion, un mode de vie, une idéologie.
      Je ne compte plus les heures passées derrière un éditeur de code depuis longtemps.
      Au travers de cette section, je vous fais découvrir certains projets que j’ai pu réaliser.
    </p>
    <svg class="portfolio-intro__bottomarrow" width="27" height="26" viewBox="0 0 27 26" xmlns="http://www.w3.org/2000/svg"><path d="M26.97 12.153c0 .592-.206 1.094-.619 1.507l-10.898 10.915c-.435.413-.943.619-1.523.619-.592 0-1.094-.206-1.507-.619l-10.898-10.915c-.424-.402-.636-.904-.636-1.507 0-.592.212-1.099.636-1.523l1.239-1.256c.435-.413.943-.619 1.523-.619.592 0 1.094.206 1.507.619l4.922 4.922v-11.786c0-.58.212-1.083.636-1.507.424-.424.926-.636 1.507-.636h2.143c.58 0 1.083.212 1.507.636.424.424.636.926.636 1.507v11.786l4.922-4.922c.413-.413.915-.619 1.507-.619.58 0 1.088.206 1.523.619l1.256 1.256c.413.435.619.943.619 1.523z" fill="#27384A"/></svg>
  </section>

  <?php if ( have_posts() ): while ( have_posts() ): the_post(); ?>
  <article class="work-article">
    <h3 aria-level="3" class="work-article__title"><?php the_title(); ?></h3>
    <div class="work">
      <div class="work__browser">
        <a href="<?php the_permalink(); ?>" class="work__link">
          Vers la présentation de <?php the_title; ?>
          <div class="work__topbar">
            <span class="work__topbar__circles"></span>
          </div>
          <?php $url = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID()), 'full' ); ?>
          <?php $thumb_id = get_post_thumbnail_id($post->id);
           $alt = get_post_meta($thumb_id, '_wp_attachment_image_alt', true);?>
          <img class="work__img work__img-baobab" style="bottom:<?php echo the_field("pf_csshack");?>"
               src="<?php echo $url[0] ;?>" alt="<?php echo $alt;?>"
               width="<?php echo $url[1] ?>" height="<?php echo $url[2] ?>">
          <div class="work__hovereffect"></div>
        </a>
      </div>
    </div>
  </article>
  <?php endwhile; endif; ?>

</main>
<?php get_footer();?>
<script type="text/javascript" src="<?php echo get_template_directory_uri() . '/assets/scripts/jquery.viewportchecker.js';?>"></script>
<script type="text/javascript">
  $(function() { // DOM ready
    $(".portfolio-intro__title").addClass("js--active");

    var txt = ['code', 'réalise', 'développe', 'design', 'crée', 'réalise'],
        n = txt.length,
        $swap = $('.portfolio-intro__swap'),
        $span,
        c = -1;

    // CREATE SPANS INSIDE SPAN
    for(var i=0; i<txt.length; i++) $swap.append($('<span />',{text:txt[i]}));
    // HIDE AND COLLECT THEM
    $span = $("span", $swap).hide();

    (function loop(){
        c = ++c % n;
        $swap.animate({width: $span.eq( c ).width() });
        $span.stop().fadeOut().eq(c).fadeIn().delay(1000).show(0, loop);
    }());

  });
</script>
<script type="text/javascript">
  $("body").addClass("js--active");
  $('.work').viewportChecker({
    classToAdd: 'fadeInUp',
    offset: 150,
    repeat: false,
  });
</script>

</body>
</html>
