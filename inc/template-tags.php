<?php
/**
 * Custom template tags for this theme.
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package bowtie
 */

/**
 * Flush out the transients used in bowtie_categorized_blog.
 */
function bowtie_category_transient_flusher() {
	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
		return;
	}
	// Like, beat it. Dig?
	delete_transient( 'bowtie_categories' );
}
add_action( 'edit_category', 'bowtie_category_transient_flusher' );
add_action( 'save_post',     'bowtie_category_transient_flusher' );
