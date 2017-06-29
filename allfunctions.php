<?php
  // Load scripts and styles

  function scriptsAndStyles() {
    //React, React-dom, jQuery, bootstrap, babel-core,
    wp_enqueue_style("style", get_stylesheet_uri());
    wp_enqueue_style("bootstrap", "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css");
    wp_enqueue_script("react", "https://unpkg.com/react@15.6.0/dist/react.js");
    wp_enqueue_script("react-dom", "https://unpkg.com/react-dom@15.6.0/dist/react-dom.js", array("react"));
    wp_enqueue_script("babel-core", "https://cdnjs.cloudflare.com/ajax/libs/babel-standalone/6.25.0/babel.min.js");
    wp_enqueue_script("main", get_template_directory_uri() . "/scripts/main.js", array("react", "react-dom", "babel"));
  }
 ?>
