<?php


class aesopEditorComponentSaving {

	function __construct(){

		add_action( 'wp_ajax_process_update_component', 				array($this, 'process_update_component' ));

	}

	function process_update_component(){

		if ( isset( $_POST['action'] ) && $_POST['action'] == 'process_update_component' ) {

			// only run for logged in users and check caps
			if( !aesop_editor_user_can_edit() )
				return;

			// ok security passes so let's process some data
			if ( wp_verify_nonce( $_POST['nonce'], 'aesop-generator-settings' ) ) {

				$postid 	= isset( $_POST['unique'] ) ? sanitize_text_field( trim( $_POST['unique'] ) ) : false;
				$options 	= isset( $_POST['fields'] ) ? $_POST['fields'] : false;

				$type = $options ? $options['galleryType'] : false;

				$gallery_ids = isset( $_POST['gallery_ids']) ? $_POST['gallery_ids'] : false;

				// update gallery ids
				if ( $gallery_ids ) {

					update_post_meta( $postid, '_ase_gallery_images', $gallery_ids );

				}

				// update the gallery type
				if ( $type ) {

					update_post_meta( $postid, 'aesop_gallery_type', $type );

				}

				// run an action
				do_action( 'aesop_editor_gallery_saved', $postid, $gallery_ids, get_current_user_ID() );

				// send back success
				wp_send_json_success();

			} else {

				// aww snap something went wrong so say something
				wp_send_json_error();
			}
		}

		die();
	}


}
new aesopEditorComponentSaving;



