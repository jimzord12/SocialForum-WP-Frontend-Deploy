<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package kadence
 */

namespace Kadence;

if (!defined('ABSPATH')) {
	exit;
}

?>
<!doctype html>
<html <?php language_attributes(); ?> class="no-js" <?php kadence()->print_microdata('html'); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
	<?php wp_head(); ?>

	<!-- GENERA - START -->

	<link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.css" rel="stylesheet" />
	<!-- <link rel="stylesheet" type="text/css" href="./components/successAnimation.css"> -->



	<script src="https://cdn.tailwindcss.com"></script>
	<script>
		tailwind.config = {
			theme: {
				extend: {
					colors: {
						clifford: '#da373d',
					}
				}
			}
		}
	</script>
	<style type="text/tailwindcss">
		@layer utilities {
      .content-auto {
        content-visibility: auto;
      }
    }
  </style>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.js"></script>

	<script src="<?php echo get_template_directory_uri(); ?>/blockchain/ethers.umd.min.js"></script>

	<script src="<?php echo get_template_directory_uri(); ?>/js/utils.js"></script>

	<script src="<?php echo get_template_directory_uri(); ?>/js/blockchain-functions.js"></script>

	<!-- GENERA - END -->


</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<?php
	/**
	 * Kadence before wrapper hook.
	 */
	do_action('kadence_before_wrapper');
	?>
	<div id="wrapper" class="site wp-site-blocks">
		<?php
		/**
		 * Kadence before header hook.
		 *
		 * @hooked kadence_do_skip_to_content_link - 2
		 */
		do_action('kadence_before_header');

		/**
		 * Kadence header hook.
		 *
		 * @hooked Kadence/header_markup - 10
		 */
		do_action('kadence_header');

		do_action('kadence_after_header');
		?>

		<div id="inner-wrap" class="wrap hfeed kt-clear">
			<?php
			/**
			 * Hook for top of inner wrap.
			 */
			do_action('kadence_before_content');
			?>