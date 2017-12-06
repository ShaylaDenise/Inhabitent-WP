<!-- This file is used to markup the administration form of the widget. -->

<div class="widget-content">
   <p><label for="<?php echo $this->get_field_id('title'); ?>">Title:</label>
		<input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo $title; ?>">
   </p>
   <p><label for="<?php echo $this->get_field_id('email'); ?>"><i class="fa fa-envelope" aria-hidden="true"></i></label>
		<input class="widefat" id="<?php echo $this->get_field_id('email'); ?>" name="<?php echo $this->get_field_name('email'); ?>" type="text" value="<?php echo $email; ?>">
   </p>
  <p><label for="<?php echo $this->get_field_id('telephone'); ?>"><i class="fa fa-phone" aria-hidden="true"></i></label>
		<input class="widefat" id="<?php echo $this->get_field_id('telephone'); ?>" name="<?php echo $this->get_field_name('telephone'); ?>" type="text" value="<?php echo $telephone; ?>">
   </p>
   <p><label for="<?php echo $this->get_field_id('social_media'); ?>"><i class="fa fa-facebook" aria-hidden="true"></i><i class="fa fa-twitter" aria-hidden="true"></i><i class="fa fa-google-plus" aria-hidden="true"></i></label>
		<input class="widefat" id="<?php echo $this->get_field_id('social_media'); ?>" name="<?php echo $this->get_field_name('social_media'); ?>" type="text" value="<?php echo $social_media; ?>">
   </p>

</div>
