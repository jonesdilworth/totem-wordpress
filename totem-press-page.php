<?php
  /*
  Plugin Name: Totem Press Page
  Plugin URI: http://www.totemapp.com/
  Description: Embed your Totem press page into your Wordpress Blog, easily!
  Version: 0.3
  Author: Corey Ward
  Author URI: http://coreyward.github.com/
  Copyright: ©2012 Socks For Robots, LLC.
  License: Apache 2.0
  */

  add_shortcode( 'totem', 'embed_totem_press_page' );

  function embed_totem_press_page( $params ) {
    $totem_domain = 'totemapp.com';

    $params = shortcode_atts(
      array('subdomain' => false, 'id' => false ),
      $params
    );

    // If someone mistakenly pastes in the address to their Totem page,
    // we will extract the subdomain from it and use it.
    $subdomain = strtolower($params['subdomain']);
    if ( preg_match('/^https?:\/\/([a-z_-]+)\.' . preg_quote($totem_domain) . '/', $subdomain, $matches) ) {
      $subdomain = $matches[1];
    }

    if ( $subdomain && $subdomain != 'www' ) {
      $data_url = "http://$subdomain.{$totem_domain}/";
    } elseif ($params['id']) {
      $data_url = "http://www.{$totem_domain}/projects/{$params['id']}/embed";
    }

    if ($data_url) {
      wp_enqueue_script('jquery');
      wp_enqueue_script('jquery.postmessage', plugins_url('jquery.postmessage.js', __FILE__), array('jquery'));
      wp_enqueue_script('totem', plugins_url('totem-press-page.js', __FILE__), array('jquery', 'jquery.postmessage'));
      return "<div id='totem-press-page' data-url='$data_url'>&nbsp;</div>";
    }
  }
