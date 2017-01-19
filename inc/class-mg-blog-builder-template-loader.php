<?php

/**
 * Template loader for MG Blog Builder
 *
 * Only need to specify class properties here.
 *
 */
class MG_Blog_Builder_Template_Loader extends Gamajo_Template_Loader {

	/**
	 * Prefix for filter names.
	 *
	 * @since 1.0.0
	 * @type string
	 */
	protected $filter_prefix = 'mg';

	/**
	 * Directory name where custom templates for this plugin should be found in the theme.
	 *
	 * @since 1.0.0
	 * @type string
	 */
	protected $theme_template_directory = 'builder';

	/**
	 * Reference to the root directory path of this plugin.
	 *
	 * @since 1.0.0
	 * @type string
	 */
	protected $plugin_directory = MG_BLOG_BUILDER_PLUGIN_DIR;

}
