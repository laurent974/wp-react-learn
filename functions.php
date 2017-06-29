<?php
  //Loads Functions
  get_template_part("allfunctions");

  //Loads scripts and Styles
  add_action("wp_enqueue_scripts", "scriptsAndStyles");
?>
