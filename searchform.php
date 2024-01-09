	<form role="search" method="get" id="searchform" class="searchform" action="<?php esc_url(home_url(' / ')) ?>">
				<div>
					<label class="screen-reader-text" for="s">Rechercher&nbsp;:</label>
					<input type="text" value="<?php get_search_query(); ?>" name="s" id="s" fdprocessedid="umqvm">
					<input type="submit" id="searchsubmit" value="Rechercher" fdprocessedid="r4mz35">
				</div>
	</form>