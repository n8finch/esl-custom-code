<?php

/**
 * Get post meta from Job Postings and add it to the JSON callback
 */

add_action( 'rest_api_init', 'create_job_posting_meta_field' );

function create_job_posting_meta_field() {

	register_rest_field( 'job-postings', 'job-posting-meta', array(
	       'get_callback'    => 'get_job_posting_meta_for_api',
	       'schema'          => null,
	    )
	);
}

function get_job_posting_meta_for_api( $object ) {
	$post_id = $object['id'];
 	return get_post_meta( $post_id );
}
