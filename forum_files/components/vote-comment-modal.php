<!-- <button data-modal-target="vote-comment-modal" data-modal-toggle="vote-comment-modal" id="test-btn" class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">
    Toggle modal
  </button> -->
  
  <!-- Vote Comment Modal -->
  <div id="vote-comment-modal" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
      <div class="relative w-full max-w-2xl max-h-full">
          <!-- Modal content -->
          <div class="relative bg-white rounded-lg shadow dark:bg-gray-700 items-center">
              <!-- Modal header -->
              <div class="flex items-center justify-between p-4 border-b rounded-t dark:border-gray-600 m-auto">
                  <h2 class="text-xl font-semibold text-gray-900 dark:text-white">
                  🎁 Collect Your Reward!
                  </h2>
                  <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="vote-comment-modal">
                      <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                      <span class="sr-only">Close modal</span>
                  </button>
              </div>
              <!-- Modal body -->
              <div class="p-6 space-y-6">
                <h3 class="test-[32px] text-white dark:text-white"> Reward Type: <u>Comment Voting</u> </h3> 
                  <p class="font-[20px] leading-relaxed text-gray-500 dark:text-gray-300">
                  It is <strong><u>required</u></strong> to have your <strong>Crypto Wallet</strong> connected to this web site in order to obtain the Reward.
                  </p>
                  <p class="font-[20px] leading-relaxed text-gray-500 dark:text-gray-300">
                        To <strong>Connect</strong> press the "Connect Now" button below.
                  </p>
                  <p class="font-[20px] leading-relaxed text-gray-500 dark:text-gray-300">
                        If you need a crypto wallet go here: <a href="https://metamask.io/" class="font-semibold underline hover:no-underline"> Get MetaMask </a>
                  </p>
              </div>
              <!-- Modal footer -->
              <div class="flex items-center p-6 space-x-2 border-t border-gray-200 rounded-b dark:border-gray-600">
                  <button id="modal-btn-vote-comment-collect" data-modal-hide="vote-comment-modal" type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Get Reward!</button>
                  <button id="modal-btn-vote-comment-connect" data-modal-hide="vote-comment-modal" type="button" class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">Connect Now</button>
              </div>
          </div>
      </div>
  </div>

  <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/metamask-connection.js"></script>
  <script>
  // Wait for the DOM to be ready
  document.addEventListener('DOMContentLoaded', () => {
    // Get the alert component and the close button
    const alertSuccess = document.querySelector('.flowbite-success-alert');
    const closeAlertSuccess = document.querySelector('#closeAlertSuccess');
    const alertFailure = document.querySelector('.flowbite-fail-alert');
    const closeAlertFailure = document.querySelector('#closeAlertFail');
    const closeAlertButton = document.getElementById('closeAlert');
    const testBtn = document.getElementById('#test-btn');
    const modal = document.querySelector('#vote-comment-modal');
    const modal_btn_collect = document.querySelector('#modal-btn-vote-comment-collect');
    const modal_btn_connect = document.querySelector('#modal-btn-vote-comment-connect');
    const like_dislike_vote = document.querySelectorAll('.cld-like-dislike-trigger');
    // console.log("ASSSSSSDDD: ", like_dislike_vote);
    
    modal_btn_collect.addEventListener("click", (e) => {
        console.log("I am your collect BTN, fill me with logic...")
        showAlertSuccess()
    })

    modal_btn_connect.addEventListener("click", (e) => {
        console.log("I am your connect BTN, fill me with logic...")
        connectMetamask();
        showAlertFailure()
    })

    closeAlertSuccess.addEventListener('click', function() {
        hideAlertSuccess();
    });

    closeAlertFailure.addEventListener('click', function() {
        hideAlertFailure();
    });

    like_dislike_vote.forEach((vote) => {
    // console.log("FFFFFFFF: ", vote);
    vote.setAttribute('data-modal-target', "vote-comment-modal");
    vote.setAttribute('data-modal-toggle','vote-comment-modal');

    vote.addEventListener('click', (event) => {
            // console.log("$$$$$$$$$$$$: ", modal);
            event.preventDefault(); // Prevents the default link behavior
            modal.classList.remove('hidden');
        });
    })
    // Function to show the alert component
    function showAlertFailure() {
        hideAlertSuccess();
        alertFailure.classList.remove('hidden');
    }

        // Function to show the alert component
    function hideAlertFailure() {
        alertFailure.classList.add('hidden');
    }
    
    // Function to hide the alert component
    function showAlertSuccess() {
        hideAlertFailure(); // Hide the failure alert if it's visible
        alertSuccess.classList.remove('hidden');
    }

        // Function to hide the alert component
    function hideAlertSuccess() {
        alertSuccess.classList.add('hidden');
    }
    
//     // target element that will be dismissed
// const $targetEl = document.getElementById('targetElement');

// // optional trigger element
// const $triggerEl = document.getElementById('triggerElement');

// // options object
// const options = {
//   transition: 'transition-opacity',
//   duration: 1000,
//   timing: 'ease-out',

//   // callback functions
//   onHide: (context, targetEl) => {
//     console.log('element has been dismissed')
//     console.log(targetEl)
//   }
// };
    // // Add event listener to the close button
    // closeAlertButton.addEventListener('click', function() {
    //     hideAlertSuccess();
    //     hideAlertFailure();
    // });
    
    // Show the alert component initially (optional)
    // showAlert();
  });
</script>