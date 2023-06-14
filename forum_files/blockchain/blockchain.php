<?php
/**
 *
 * Inserting blockchain logic into WordPress
 */
require_once 'smart-contract-abi.php';


/**
 * Inserting metamask functionality (browser crypto wallet extension) into WordPress
 */
function enqueue_metamask_script() {
    wp_enqueue_script(
        'metamask-connection',
        get_template_directory_uri() . '/js/metamask-connection.js',
        array(),
        '1.0',
        true
    );
}

/**
 * Inserting The Contract's ABI, (basically it's Interface, can not use Contract otherwise) into WordPress
 */
function enqueue_smart_contract_abi() {
    global $abi;    
    wp_register_script( 'contract_abi', get_template_directory_uri() . '/js/blockchain-functions.js', array('jquery'), '1.0.0', true );
    wp_localize_script( 'contract_abi', 'smartContractABI', $abi );
    wp_enqueue_script( 'contract_abi' );
}

/**
 * Inserting The some useful Utility JS function into WordPress
 */
function enqueue_smart_contract_utils_script() {
    wp_register_script( 'contract_utils', get_template_directory_uri() . '/js/utils.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'contract_utils' );
}

/**
 * Inserting a function that is used to call the Smart Contract's functions into WordPress
 */
function enqueue_smart_contract_fns_script() {
    wp_enqueue_script(
        'blockchain-functions',
        get_template_directory_uri() . '/js/blockchain-functions.js',
        array(),
        '1.1',
        true
    );
}

//@Custom Code: Enables MetaMask Connection
add_action('wp_enqueue_scripts', 'enqueue_metamask_script');

//@Custom Code: Provides the Smart Contract's ABI
add_action('wp_enqueue_scripts', 'enqueue_smart_contract_abi');

//@Custom Code: Enables Smart Conrtact Calls
add_action('wp_enqueue_scripts', 'enqueue_smart_contract_fns_script');