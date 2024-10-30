<?php
/**
 * Plugin Name: Close Comments on Media Attachments
 * Plugin URI:
 * Description: The plugin disable/closes comments on media attachment pages in your WordPress blog.
 * Author: Janmejai
 * Version: 1.1
 * Author URI: http://www.wpcub.com/
 * License: GPLv2 or later
 * License URI: http://www.gnu.org/licenses/gpl-2.0.html
 */

add_filter( 'comments_open', 'close_media_attachment_comments', 10 , 2 );
function close_media_attachment_comments( $open, $post_id ) {
	$post = get_post( $post_id );
	if( $post->post_type == 'attachment' ) {
		return false;
	}
	return $open;
}
