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
  <?php echo do_shortcode('[contact-form-7 id="209" title="Contact form 1"]'); ?>
</div>

  <!-- <form action="post" class="form">
    <div class="form__container__names">
      <fieldset class="form__firstname__field">
        <label for="firstname" class="form__firstname__label">Votre prénom&nbsp;:</label>
        <input type="text" class="form__firstname__input" id="firstname" name="firstname" required placeholder="Ex: Fanfan">
      </fieldset>
      <fieldset class="form__lastname__field">
        <label for="lastname" class="form__lastname__label">Votre nom&nbsp;:</label>
        <input type="text" class="form__lastname__input" id="lastname" name="lastname" required placeholder="Ex: Latulipe">
      </fieldset>
    </div>
    <fieldset class="form__email__field">
      <label for="email" class="form__email__label">Votre adresse email&nbsp;:</label>
      <input type="email" class="form__email__input" id="email" name="email" required placeholder="Ex: fanfan.latulipe@gmail.com">
    </fieldset>
    <fieldset class="form__subject__field">
      <label for="subject" class="form__subject__label">Le sujet de votre message&nbsp;:</label>
      <input type="text" class="form__subject__input" id="subject" name="subject" required placeholder="Ex: J’aimerais un site web pour mon entreprise">
    </fieldset>
    <fieldset class="form__message__field">
      <label for="message" class="form__message__label">Votre message&nbsp;:</label>
      <textarea name="textarea" class="form__message__textarea" id="textarea" placeholder="J’ai un petit quelque chose à vous demander…"></textarea>
    </fieldset>
    <div class="form__container__submit">
      <input type="submit" class="form__submit" id="submit" value="J’envoie !">
      <span class="form__submit__required">Tous les champs sont obligatoire*</span>
    </div>
  </form> -->

</section>


<?php get_footer();?>
