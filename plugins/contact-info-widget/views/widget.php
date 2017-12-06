<!-- This file is used to markup the public-facing widget. -->

<?php if ( strlen( trim( $email ) ) > 0 ) : ?>
   <p>
      <span class="email"><i class="fa fa-envelope" aria-hidden="true"></i></span> <?php echo $email; ?>
   </p>
<?php endif; ?>

<?php if ( strlen( trim( $telephone ) ) > 0 ) : ?>
   <p>
      <span class="telephone"><i class="fa fa-phone" aria-hidden="true"></i></span> <?php echo $telephone; ?>
   </p>
<?php endif; ?>

<?php if ( strlen( trim( $social_media ) ) > 0 ) : ?>
   <p>
      <span class="social_media"><i class="fa fa-facebook" aria-hidden="true"></i><i class="fa fa-twitter" aria-hidden="true"></i><i class="fa fa-google-plus" aria-hidden="true"></i></span> <?php echo $social_media; ?>
   </p>
<?php endif; ?>
