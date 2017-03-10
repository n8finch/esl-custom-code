<?php

/**
 * Create the Endpoint
 */

add_action( 'rest_api_init', function () {
  register_rest_route( 'esl/v2', '/job-postings', array(
    'methods' => 'GET',
    'callback' => 'my_awesome_func',
    'args' => array(
      'id' => array(
        'validate_callback' => function($param, $request, $key) {
          return is_numeric( $param );
        }
      ),
    ),
  ) );
} );


//TODO: get post meta, put into JSON response
//https://developer.wordpress.org/rest-api/extending-the-rest-api/adding-rest-api-support-for-custom-content-types/
