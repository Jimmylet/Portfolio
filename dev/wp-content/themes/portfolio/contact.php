<?php
/*
Template Name: Contactez-moi
*/

get_header();

?>

<section class="contact">
  <h2 class="contact__title">C’est le moment de se parler</h2>
  <span class="contact__subtitle">(Et plus si affinité…)</span>

<div class="form">
  <?php echo do_shortcode('[contact-form-7 id="202" title="Formulaire de contact"]'); ?>
</div>



</section>

</main>
<?php get_footer();?>
