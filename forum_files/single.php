<?php
/**
 * The main single item template file.
 *
 * @package kadence
 */

namespace Kadence;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header();

kadence()->print_styles( 'kadence-content' );
/**
 * Hook for everything, makes for better elementor theming support.
 */
do_action( 'kadence_single' );
?>

<!-- <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/metamask-connection.js"></script> -->

<?php
// $hasMetamask = hasWallet(); // from UI
// $isConnected = isWalletConnected(); // from UI
// $canVoteComment = false;  // from MySQL
// $canVotePost = false;  // from MySQL
// $canPostComment = false;  // from MySQL

// echo $hasMetamask, ' ', $isConnected;

	/**
	 * GENERA => Write logic to use in the modal
	 * 1. Check if metamask exists
	 * 2. Check if user has connected his wallet
	 * 3. Check if user can vote
	 */
?>

<?php 
	/**
	 * GENERA => modal html + CSS code
	 */
	include 'components/initialize.php'; 
	// include 'components/successAlert.php'; 
	// include 'components/failAlert.php'; 
	// include 'components/leave-comment-modal.php'; 
	// include 'components/vote-comment-modal.php'; 
	// include 'components/vote-post-modal.php'; 
?>

<?php
get_footer();
