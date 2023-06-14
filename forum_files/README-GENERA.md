# ⚙ Pending Features ⚙

## Reward Restrictions 🔐

Users should only be allowed to obtain every reward type only once, every X amount of time (ex. 8hrs) <br />
To achieve this a MySQL table is required. This table must have at least 4 columns.

- Col (1): User ID,
- Col (2): Reward Type #1 - timestamp,
- Col (3): Reward Type #2 - timestamp,
- Col (4): Reward Type #3 - timestamp,

Using these timestamps we can check if X amount of time has passed.

# Code Modifications

## new folder: "blockchain"

- PHP Script to import (to include) the Wallet Connect Script to WP
- Also contains the <b>Smart Contract's ABI</b> in JSON format. If there is a change in the SC the ABI must be updated

## new folder: "js"

Contains the JavaScript Scripts for:

- Wallet Connect Script (Metamask)
- Connecting to Smart Contract (blockchain-functions.js)

## new folder: "components"

The main file is the <b>initialize.php</b>, contains:

- The HTML for:
  - The 5 Modals
  - The 2 Alerts
- The JavaScript for:
  - Communicating with the Smart Contract
  - Connect Metamask with the Website

<br />

## Modifications in: "functions.php"

- Inserting a custom CSS file into WordPress:

  ```
  function my_custom_styles() {
      wp_enqueue_style( 'my-custom-style', get_template_directory_uri() . '/components/successAnimation.css', array(), '1.0', 'all');
  }

  add_action( 'wp_enqueue_scripts', 'my_custom_styles' );
  ```

## Modifications in: "header.php"

- Enabling Flowbite (Tailwind CSS - Components Library):

  ```
  <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.css"  rel="stylesheet" />
  ...
  <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.js"></script>
  ```

- Enabling Tailwind CSS:

  ```
  <script src="https://cdn.tailwindcss.com"></script>
  ```

- Enables the ethers.js library to be loaded:

  ```
  <script defer src="https://cdn.ethers.io/lib/ethers-5.0.min.js" type="text/javascript"></script>
  ```

- Enables custom functions:

  ```
  <script src="<?php echo get_template_directory_uri(); ?>/js/utils.js"></script>

  <script src="<?php echo get_template_directory_uri(); ?>/js/blockchain-functions.js"></script>
  ```

## Modifications in: "footer.php"

- Including a script that enables Wallet Connnection from the home page:

  ```
  include 'components/metamask-connect-home-page.php';
  ```

## Modifications in: "single.php"

- Including/Importing a large file that contains all the logic for the single-post page:

  ```
    include 'components/initialize.php';
  ```
