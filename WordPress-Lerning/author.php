
<h2><?php  the_author_meta('display_name') ?></h2>
<ul>
  <li>user_login:<?php  the_author_meta('user_login') ?></li>
  <li>user_pass:<?php  the_author_meta('user_pass') ?></li>
  <li>user_nicename:<?php  the_author_meta('user_nicename') ?></li>
  <li>user_email:<?php  the_author_meta('user_email') ?></li>
  <li>user_url:<?php  the_author_meta('user_url') ?></li>
  <li>nickname:<?php  the_author_meta('nickname') ?></li>
  <li>first_name:<?php  the_author_meta('first_name') ?></li>
  <li>last_name:<?php  the_author_meta('last_name') ?></li>
  <li>user_level:<?php  the_author_meta('user_level') ?></li>
  <li>description:<?php  the_author_meta('description') ?></li>
  <li>Get_Avatar:<?php echo get_avatar(get_the_author_meta('ID')) ?></li>
  <li>
    get_tha_user_link
    <a href="<?php  echo get_edit_user_link(get_the_author_meta('ID')) ?>">
    <?php  _e('Edit','alihossain')  ?>
  </a>
  </li>
  
</ul>