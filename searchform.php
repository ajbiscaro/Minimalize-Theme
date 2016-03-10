<?php
/**
 * The template for displaying search forms in Minimalize
 *
 * @package Minimalize
 * @since Minimalize 1.0
 */
?>

<form role="search" method="post" action="<?php echo home_url( '/' ); ?>">
	<fieldset>
		<input type="text" name="s" value="search here" class="input-text" />
		<input type="submit" name="search-button" id="searchsubmit" value="Search" class="input-button" />
	</fieldset>
</form>
