<form role="search" method="get" class="search-form e-comme-search" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<div class="col-md-12 form-group">
		<label  class="search-label">
			<span class="screen-reader-text"><?php _e('Search for:','e-comme'); ?></span>
			<input type="search" class="search-field" placeholder="<?php esc_attr_e('Search ','e-comme'); ?>" value="<?php echo esc_attr(get_search_query()); ?>" name="s" title="<?php esc_attr_e('Search for:','e-comme'); ?>">
		</label>
	</div>
</form>