</main>
<footer class="footer">
    <div class="footer__contacts">
<?php 
$thumbnail_link = carbon_get_theme_option('contact_link');
$thumbnail_id = carbon_get_theme_option('contact_image');
$thumbnail_url = wp_get_attachment_image_url( $thumbnail_id, 'full' );

if( $contacts = carbon_get_theme_option('contacts' ) ) {
	foreach( $contacts as $contact ) {
    ?>
    <a href="<?php echo $contact[ 'contact_link']; ?>" class="header__contacts__item">
  <?php
    $thumb_contact = wp_get_attachment_image_url( $contact['contact_image'], 'full' );
?>
    <img class="footer__contacts__item__img" src="<?php echo $thumb_contact; ?>" alt="">
  </a>
<?php
	}
}
?>
</div>

</footer>


<?php wp_footer(); ?>