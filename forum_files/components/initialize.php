<!-- *** HTML Section - START ***-->
<!-- <link rel="stylesheet" type="text/css" href="./successAnimation.css"> -->

<!-- The 4 Modals (from: Flowbite) -->
<!-- 1. Leave Comment modal -->
<div id="leave-comment-modal" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
  <div class="relative w-full max-w-2xl max-h-full">
    <!-- Modal content -->
    <div class="relative bg-white rounded-lg shadow dark:bg-gray-700 items-center">
      <!-- Modal header -->
      <div class="flex items-center justify-between p-4 border-b rounded-t dark:border-gray-600 m-auto">
        <h2 class="text-xl font-semibold text-gray-900 dark:text-white">
          🎁 Collect Your Reward
        </h2>
        <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="leave-comment-modal">
          <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
          </svg>
          <span class="sr-only">Close modal</span>
        </button>
      </div>
      <!-- Modal body -->
      <div class="p-6 space-y-6">
        <h3 class="test-[32px] text-white dark:text-white"> Reward Type: <u>Comment Submission</u> </h3>
        <p class="font-[20px] leading-relaxed text-gray-500 dark:text-gray-300">
          It is <strong><u>required</u></strong> to have your <strong>Crypto Wallet</strong> connected to this web site in order to obtain the Reward.
        </p>
        <p class="font-[20px] leading-relaxed text-gray-500 dark:text-gray-300">
          To <strong>Connect</strong> press the "Connect Now" button below.
        </p>
        <p class="font-[20px] leading-relaxed text-gray-500 dark:text-gray-300">
          If you need a crypto wallet go here: <a href="https://metamask.io/" class="font-semibold underline hover:no-underline"> Get MetaMask </a>
        </p>
        <p class="font-[20px] leading-relaxed text-gray-500 dark:text-gray-300">
          if you <b><u>don't want the Reward</u></b>, just close the window. Your comment has been submitted.
        </p>
      </div>
      <!-- Modal footer -->
      <div class="flex items-center p-6 space-x-2 border-t border-gray-200 rounded-b dark:border-gray-600">
        <button id="modal-btn-leave-comment-collect" data-modal-hide="leave-comment-modal" type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Get Reward!</button>
        <button id="modal-btn-leave-comment-connect" type="button" class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">Connect Now</button>
      </div>
    </div>
  </div>
</div>

<!-- 2. Vote Comment Modal -->
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
          <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
          </svg>
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
        <p class="font-[20px] leading-relaxed text-gray-500 dark:text-gray-300">
          if you <b><u>don't want the Reward</u></b>, just close the window. Your vote has been casted.
        </p>
      </div>
      <!-- Modal footer -->
      <div class="flex items-center p-6 space-x-2 border-t border-gray-200 rounded-b dark:border-gray-600">
        <button id="modal-btn-vote-comment-collect" data-modal-hide="vote-comment-modal" type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Get Reward!</button>
        <button id="modal-btn-vote-comment-connect" type="button" class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">Connect Now</button>
      </div>
    </div>
  </div>
</div>

<!-- 3. Vote Post Modal -->
<div id="post-modal" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
  <div class="relative w-full max-w-2xl max-h-full">
    <!-- Modal content -->
    <div class="relative bg-white rounded-lg shadow dark:bg-gray-700 items-center">
      <!-- Modal header -->
      <div class="flex items-center justify-between p-4 border-b rounded-t dark:border-gray-600 m-auto">
        <h2 class="text-xl font-semibold text-gray-900 dark:text-white">
          🎁 Collect Your Reward!
        </h2>
        <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="post-modal">
          <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
          </svg>
          <span class="sr-only">Close modal</span>
        </button>
      </div>
      <!-- Modal body -->
      <div class="p-6 space-y-6">
        <h3 class="test-[32px] text-white dark:text-white"> Reward Type: <u>Post Voting</u> </h3>
        <p class="font-[20px] leading-relaxed text-gray-500 dark:text-gray-300">
          It is <strong><u>required</u></strong> to have your <strong>Crypto Wallet</strong> connected to this web site in order to obtain the Reward.
        </p>
        <p class="font-[20px] leading-relaxed text-gray-500 dark:text-gray-300">
          To <strong>Connect</strong> press the "Connect Now" button below.
        </p>
        <p class="font-[20px] leading-relaxed text-gray-500 dark:text-gray-300">
          If you need a crypto wallet go here: <a href="https://metamask.io/" class="font-semibold underline hover:no-underline"> Get MetaMask </a>
        </p>
        <p class="font-[20px] leading-relaxed text-gray-500 dark:text-gray-300">
          if you <b><u>don't want the Reward</u></b>, just close the window. Your vote has been casted.
        </p>
      </div>
      <!-- Modal footer -->
      <div class="flex items-center p-6 space-x-2 border-t border-gray-200 rounded-b dark:border-gray-600">
        <button id="modal-btn-vote-post-collect" data-modal-hide="post-modal" type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Get Reward!</button>
        <button id="modal-btn-vote-post-connect" type="button" class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">Connect Now</button>
      </div>
    </div>
  </div>
</div>

<!-- 4. Success Modal -->
<div id="success-modal" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
  <div class="relative w-full max-w-2xl max-h-full">
    <!-- Modal content -->
    <div class="relative bg-white rounded-lg shadow dark:bg-gray-700 items-center">
      <!-- Modal header -->
      <div class="flex items-center justify-between p-4 border-b rounded-t dark:border-gray-600 m-auto">
        <h2 class="text-xl text-center font-semibold text-gray-900 dark:text-white">
          🎉 Your Transaction was Confirmed! 🎉
        </h2>
        <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="post-modal">
          <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
          </svg>
          <span class="sr-only">Close modal</span>
        </button>
      </div>
      <!-- Modal body -->
      <div class="p-6 space-y-6">
        <div class="success-checkmark">
          <div class="check-icon">
            <span class="icon-line line-tip"></span>
            <span class="icon-line line-long"></span>
            <div class="icon-circle"></div>
            <div class="icon-fix"></div>
          </div>
        </div>
        <!-- <h3 class="test-[32px] text-white dark:text-white"> Reward Type: <u>Post Voting</u> </h3>  -->
        <p class="text-[20px] text-center leading-relaxed text-gray-500 dark:text-gray-300">
          This page will reload in 5 seconds...
        </p>
        <!-- <p class="font-[20px] leading-relaxed text-gray-500 dark:text-gray-300">
                      To <strong>Connect</strong> press the "Connect Now" button below.
                </p>
                <p class="font-[20px] leading-relaxed text-gray-500 dark:text-gray-300">
                      If you need a crypto wallet go here: <a href="https://metamask.io/" class="font-semibold underline hover:no-underline"> Get MetaMask </a>
                </p> -->
      </div>
      <!-- Modal footer -->
      <!-- <div class="flex items-center p-6 space-x-2 border-t border-gray-200 rounded-b dark:border-gray-600">
                <button id="modal-btn-vote-post-collect" data-modal-hide="post-modal" type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Get Reward!</button>
                <button id="modal-btn-vote-post-connect" type="button" class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">Connect Now</button>
            </div> -->
    </div>
  </div>
</div>

<!-- 5. Failure Modal -->
<div id="failure-modal" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
  <div class="relative w-full max-w-2xl max-h-full">
    <!-- Modal content -->
    <div class="relative bg-white rounded-lg shadow dark:bg-gray-700 items-center">
      <!-- Modal header -->
      <div class="flex items-center justify-between p-4 border-b rounded-t dark:border-gray-600 m-auto">
        <h2 class="text-xl font-semibold text-gray-900 dark:text-white">
          😓 The Transaction Failed!
        </h2>
        <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="post-modal">
          <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
          </svg>
          <span class="sr-only">Close modal</span>
        </button>
      </div>
      <!-- Modal body -->
      <div class="p-6 space-y-6">
        <div style="display: flex; justify-content: center; align-items: center;">
          <svg style="width:125px;height:125px;" xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#" xmlns="http://www.w3.org/2000/svg" xmlns:cc="http://creativecommons.org/ns#" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:svg="http://www.w3.org/2000/svg" id="svg2" viewBox="0 0 34 34" version="1.0">
            <defs id="defs4">
              <linearGradient id="linearGradient1483" y2="48.977" gradientUnits="userSpaceOnUse" x2="40.305" gradientTransform="matrix(.88932 0 0 .88932 3.5416 3.5416)" y1="13.746" x1="20.153">
                <stop id="stop1354" stop-color="#982007" offset="0" />
                <stop id="stop1356" stop-color="#510f02" offset="1" />
              </linearGradient>
              <linearGradient id="linearGradient1485" y2="46.762" gradientUnits="userSpaceOnUse" x2="47.844" gradientTransform="matrix(.88932 0 0 .88932 -32.549 2.4514)" y1="17.421" x1="18.505">
                <stop id="stop1367" stop-color="#f1140c" offset="0" />
                <stop id="stop1370" stop-color="#8d1a02" offset="1" />
              </linearGradient>
              <linearGradient id="linearGradient1487" y2="46.762" gradientUnits="userSpaceOnUse" x2="47.844" gradientTransform="matrix(.88932 0 0 .88932 3.5416 3.5416)" y1="17.421" x1="18.505">
                <stop id="stop1380" stop-color="#ff8b8e" offset="0" />
                <stop id="stop1382" stop-color="#b42314" stop-opacity=".72241" offset="1" />
              </linearGradient>
            </defs>
            <g id="layer1">
              <g id="g1478" transform="translate(-15,-15)">
                <path id="path1349" fill="url(#linearGradient1483)" d="m16.025 21.211c-0.376 0.454-0.342 1.12 0.079 1.533l9.256 9.256-9.256 9.256c-0.215 0.213-0.336 0.503-0.336 0.806 0 0.302 0.121 0.592 0.336 0.805l5.03 5.031c0.213 0.215 0.504 0.336 0.806 0.336 0.303 0 0.593-0.121 0.806-0.336l9.256-9.256 9.256 9.256c0.213 0.215 0.503 0.336 0.805 0.336 0.303 0 0.593-0.121 0.806-0.336l5.031-5.031c0.215-0.213 0.336-0.503 0.336-0.805 0-0.303-0.121-0.593-0.336-0.806l-9.256-9.256 9.256-9.256c0.215-0.213 0.336-0.503 0.336-0.806 0-0.302-0.121-0.592-0.336-0.805l-5.031-5.031c-0.213-0.215-0.503-0.336-0.806-0.336-0.302 0-0.592 0.121-0.805 0.336l-9.256 9.256-9.256-9.256c-0.213-0.215-0.503-0.336-0.806-0.336-0.302 0-0.593 0.121-0.806 0.336l-5.03 5.031c-0.028 0.025-0.054 0.051-0.079 0.078z" />
                <path id="path1468" d="m-14.375 15.844c-0.18 0.047-0.342 0.145-0.469 0.281l-4.031 4.031c-0.377 0.381-0.377 0.995 0 1.375l9.375 9.375-9.375 9.375c-0.377 0.381-0.377 0.995 0 1.375l4.031 4.032c0.381 0.377 0.995 0.377 1.375 0l9.3752-9.376 9.375 9.376c0.3808 0.377 0.9943 0.377 1.375 0l4.0318-4.032c0.377-0.38 0.377-0.994 0-1.375l-9.3755-9.375 9.3755-9.375c0.377-0.38 0.377-0.994 0-1.375l-4.0318-4.031c-0.3807-0.377-0.9942-0.377-1.375 0l-9.375 9.375-9.3752-9.375c-0.233-0.244-0.576-0.35-0.906-0.281z" fill="url(#linearGradient1485)" transform="translate(36.094 1.1033)" />
                <path id="path1472" fill="url(#linearGradient1487)" d="m21.844 17.656c-0.036 0.014-0.068 0.035-0.094 0.063l-4.031 4.031c-0.032 0.035-0.054 0.078-0.063 0.125-0.016 0.051-0.016 0.105 0 0.156 0.014 0.036 0.035 0.068 0.063 0.094l9.562 9.563c0.088 0.083 0.157 0.198 0.157 0.312s-0.069 0.229-0.157 0.312l-9.562 9.563c-0.032 0.035-0.054 0.078-0.063 0.125-0.016 0.051-0.016 0.105 0 0.156 0.014 0.036 0.035 0.068 0.063 0.094l4.031 4.031c0.035 0.032 0.078 0.054 0.125 0.063 0.051 0.016 0.105 0.016 0.156 0 0.036-0.014 0.068-0.035 0.094-0.063l9.563-9.562c0.083-0.088 0.198-0.157 0.312-0.157s0.229 0.069 0.312 0.157l9.563 9.562c0.035 0.032 0.078 0.054 0.125 0.063 0.051 0.016 0.105 0.016 0.156 0 0.036-0.014 0.068-0.035 0.094-0.063l4.031-4.031c0.032-0.035 0.054-0.078 0.063-0.125 0.016-0.051 0.016-0.105 0-0.156-0.014-0.036-0.035-0.068-0.063-0.094l-9.562-9.563c-0.088-0.083-0.157-0.198-0.157-0.312s0.069-0.229 0.157-0.312l9.562-9.563c0.032-0.035 0.054-0.078 0.063-0.125 0.016-0.051 0.016-0.105 0-0.156-0.014-0.036-0.035-0.068-0.063-0.094l-4.031-4.031c-0.035-0.032-0.078-0.054-0.125-0.063-0.051-0.016-0.105-0.016-0.156 0-0.036 0.014-0.068 0.035-0.094 0.063l-9.563 9.562c-0.083 0.088-0.198 0.157-0.312 0.157s-0.229-0.069-0.312-0.157l-9.563-9.562c-0.035-0.032-0.078-0.054-0.125-0.063-0.051-0.016-0.105-0.016-0.156 0z" />
              </g>
            </g>
            <metadata>
              <rdf:RDF>
                <cc:Work>
                  <dc:format>image/svg+xml</dc:format>
                  <dc:type rdf:resource="http://purl.org/dc/dcmitype/StillImage" />
                  <cc:license rdf:resource="http://creativecommons.org/licenses/publicdomain/" />
                  <dc:publisher>
                    <cc:Agent rdf:about="http://openclipart.org/">
                      <dc:title>Openclipart</dc:title>
                    </cc:Agent>
                  </dc:publisher>
                  <dc:title>cross</dc:title>
                  <dc:date>2008-05-26T11:40:39</dc:date>
                  <dc:description>cancel, cancel, clip art, clipart, delete, delete, icon, icon, image, media, png, public domain, svg, </dc:description>
                  <dc:source>http://openclipart.org/detail/16982/cross-by-jean_victor_balin</dc:source>
                  <dc:creator>
                    <cc:Agent>
                      <dc:title>jean_victor_balin</dc:title>
                    </cc:Agent>
                  </dc:creator>
                  <dc:subject>
                    <rdf:Bag>
                      <rdf:li>cancel</rdf:li>
                      <rdf:li>clip art</rdf:li>
                      <rdf:li>clipart</rdf:li>
                      <rdf:li>delete</rdf:li>
                      <rdf:li>icon</rdf:li>
                      <rdf:li>image</rdf:li>
                      <rdf:li>media</rdf:li>
                      <rdf:li>png</rdf:li>
                      <rdf:li>public domain</rdf:li>
                      <rdf:li>svg</rdf:li>
                    </rdf:Bag>
                  </dc:subject>
                </cc:Work>
                <cc:License rdf:about="http://creativecommons.org/licenses/publicdomain/">
                  <cc:permits rdf:resource="http://creativecommons.org/ns#Reproduction" />
                  <cc:permits rdf:resource="http://creativecommons.org/ns#Distribution" />
                  <cc:permits rdf:resource="http://creativecommons.org/ns#DerivativeWorks" />
                </cc:License>
              </rdf:RDF>
            </metadata>
          </svg>
        </div>
        <p class="font-[20px] text-center leading-relaxed text-gray-500 dark:text-gray-300">
          This page will reload in 5 seconds...
        </p>
      </div>
    </div>
  </div>
</div>

<!-- 6. Error Modal -->
<div id="error-modal" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
  <div class="relative w-full max-w-2xl max-h-full">
    <!-- Modal content -->
    <div class="relative bg-white rounded-lg shadow dark:bg-gray-700 items-center">
      <!-- Modal header -->
      <div class="flex items-center justify-between p-4 border-b rounded-t dark:border-gray-600 m-auto">
        <h2 class="text-xl font-semibold text-gray-900 dark:text-white">
          😓 Something Went Wrong!
        </h2>
        <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="sth-error-modal">
          <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
          </svg>
          <span class="sr-only">Close modal</span>
        </button>
      </div>
      <!-- Modal body -->
      <div class="p-6 space-y-6">
        <div style="display: flex; justify-content: center; align-items: center;">
          <!-- <svg style="width:125px;height:125px;" xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#" xmlns="http://www.w3.org/2000/svg" xmlns:cc="http://creativecommons.org/ns#" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:svg="http://www.w3.org/2000/svg" id="svg2" viewBox="0 0 34 34" version="1.0">
            <defs id="defs4">
              <linearGradient id="linearGradient1483" y2="48.977" gradientUnits="userSpaceOnUse" x2="40.305" gradientTransform="matrix(.88932 0 0 .88932 3.5416 3.5416)" y1="13.746" x1="20.153">
                <stop id="stop1354" stop-color="#982007" offset="0" />
                <stop id="stop1356" stop-color="#510f02" offset="1" />
              </linearGradient>
              <linearGradient id="linearGradient1485" y2="46.762" gradientUnits="userSpaceOnUse" x2="47.844" gradientTransform="matrix(.88932 0 0 .88932 -32.549 2.4514)" y1="17.421" x1="18.505">
                <stop id="stop1367" stop-color="#f1140c" offset="0" />
                <stop id="stop1370" stop-color="#8d1a02" offset="1" />
              </linearGradient>
              <linearGradient id="linearGradient1487" y2="46.762" gradientUnits="userSpaceOnUse" x2="47.844" gradientTransform="matrix(.88932 0 0 .88932 3.5416 3.5416)" y1="17.421" x1="18.505">
                <stop id="stop1380" stop-color="#ff8b8e" offset="0" />
                <stop id="stop1382" stop-color="#b42314" stop-opacity=".72241" offset="1" />
              </linearGradient>
            </defs>
            <g id="layer1">
              <g id="g1478" transform="translate(-15,-15)">
                <path id="path1349" fill="url(#linearGradient1483)" d="m16.025 21.211c-0.376 0.454-0.342 1.12 0.079 1.533l9.256 9.256-9.256 9.256c-0.215 0.213-0.336 0.503-0.336 0.806 0 0.302 0.121 0.592 0.336 0.805l5.03 5.031c0.213 0.215 0.504 0.336 0.806 0.336 0.303 0 0.593-0.121 0.806-0.336l9.256-9.256 9.256 9.256c0.213 0.215 0.503 0.336 0.805 0.336 0.303 0 0.593-0.121 0.806-0.336l5.031-5.031c0.215-0.213 0.336-0.503 0.336-0.805 0-0.303-0.121-0.593-0.336-0.806l-9.256-9.256 9.256-9.256c0.215-0.213 0.336-0.503 0.336-0.806 0-0.302-0.121-0.592-0.336-0.805l-5.031-5.031c-0.213-0.215-0.503-0.336-0.806-0.336-0.302 0-0.592 0.121-0.805 0.336l-9.256 9.256-9.256-9.256c-0.213-0.215-0.503-0.336-0.806-0.336-0.302 0-0.593 0.121-0.806 0.336l-5.03 5.031c-0.028 0.025-0.054 0.051-0.079 0.078z" />
                <path id="path1468" d="m-14.375 15.844c-0.18 0.047-0.342 0.145-0.469 0.281l-4.031 4.031c-0.377 0.381-0.377 0.995 0 1.375l9.375 9.375-9.375 9.375c-0.377 0.381-0.377 0.995 0 1.375l4.031 4.032c0.381 0.377 0.995 0.377 1.375 0l9.3752-9.376 9.375 9.376c0.3808 0.377 0.9943 0.377 1.375 0l4.0318-4.032c0.377-0.38 0.377-0.994 0-1.375l-9.3755-9.375 9.3755-9.375c0.377-0.38 0.377-0.994 0-1.375l-4.0318-4.031c-0.3807-0.377-0.9942-0.377-1.375 0l-9.375 9.375-9.3752-9.375c-0.233-0.244-0.576-0.35-0.906-0.281z" fill="url(#linearGradient1485)" transform="translate(36.094 1.1033)" />
                <path id="path1472" fill="url(#linearGradient1487)" d="m21.844 17.656c-0.036 0.014-0.068 0.035-0.094 0.063l-4.031 4.031c-0.032 0.035-0.054 0.078-0.063 0.125-0.016 0.051-0.016 0.105 0 0.156 0.014 0.036 0.035 0.068 0.063 0.094l9.562 9.563c0.088 0.083 0.157 0.198 0.157 0.312s-0.069 0.229-0.157 0.312l-9.562 9.563c-0.032 0.035-0.054 0.078-0.063 0.125-0.016 0.051-0.016 0.105 0 0.156 0.014 0.036 0.035 0.068 0.063 0.094l4.031 4.031c0.035 0.032 0.078 0.054 0.125 0.063 0.051 0.016 0.105 0.016 0.156 0 0.036-0.014 0.068-0.035 0.094-0.063l9.563-9.562c0.083-0.088 0.198-0.157 0.312-0.157s0.229 0.069 0.312 0.157l9.563 9.562c0.035 0.032 0.078 0.054 0.125 0.063 0.051 0.016 0.105 0.016 0.156 0 0.036-0.014 0.068-0.035 0.094-0.063l4.031-4.031c0.032-0.035 0.054-0.078 0.063-0.125 0.016-0.051 0.016-0.105 0-0.156-0.014-0.036-0.035-0.068-0.063-0.094l-9.562-9.563c-0.088-0.083-0.157-0.198-0.157-0.312s0.069-0.229 0.157-0.312l9.562-9.563c0.032-0.035 0.054-0.078 0.063-0.125 0.016-0.051 0.016-0.105 0-0.156-0.014-0.036-0.035-0.068-0.063-0.094l-4.031-4.031c-0.035-0.032-0.078-0.054-0.125-0.063-0.051-0.016-0.105-0.016-0.156 0-0.036 0.014-0.068 0.035-0.094 0.063l-9.563 9.562c-0.083 0.088-0.198 0.157-0.312 0.157s-0.229-0.069-0.312-0.157l-9.563-9.562c-0.035-0.032-0.078-0.054-0.125-0.063-0.051-0.016-0.105-0.016-0.156 0z" />
              </g>
            </g>
            <metadata>
              <rdf:RDF>
                <cc:Work>
                  <dc:format>image/svg+xml</dc:format>
                  <dc:type rdf:resource="http://purl.org/dc/dcmitype/StillImage" />
                  <cc:license rdf:resource="http://creativecommons.org/licenses/publicdomain/" />
                  <dc:publisher>
                    <cc:Agent rdf:about="http://openclipart.org/">
                      <dc:title>Openclipart</dc:title>
                    </cc:Agent>
                  </dc:publisher>
                  <dc:title>cross</dc:title>
                  <dc:date>2008-05-26T11:40:39</dc:date>
                  <dc:description>cancel, cancel, clip art, clipart, delete, delete, icon, icon, image, media, png, public domain, svg, </dc:description>
                  <dc:source>http://openclipart.org/detail/16982/cross-by-jean_victor_balin</dc:source>
                  <dc:creator>
                    <cc:Agent>
                      <dc:title>jean_victor_balin</dc:title>
                    </cc:Agent>
                  </dc:creator>
                  <dc:subject>
                    <rdf:Bag>
                      <rdf:li>cancel</rdf:li>
                      <rdf:li>clip art</rdf:li>
                      <rdf:li>clipart</rdf:li>
                      <rdf:li>delete</rdf:li>
                      <rdf:li>icon</rdf:li>
                      <rdf:li>image</rdf:li>
                      <rdf:li>media</rdf:li>
                      <rdf:li>png</rdf:li>
                      <rdf:li>public domain</rdf:li>
                      <rdf:li>svg</rdf:li>
                    </rdf:Bag>
                  </dc:subject>
                </cc:Work>
                <cc:License rdf:about="http://creativecommons.org/licenses/publicdomain/">
                  <cc:permits rdf:resource="http://creativecommons.org/ns#Reproduction" />
                  <cc:permits rdf:resource="http://creativecommons.org/ns#Distribution" />
                  <cc:permits rdf:resource="http://creativecommons.org/ns#DerivativeWorks" />
                </cc:License>
              </rdf:RDF>
            </metadata>
          </svg> -->
          <img src="https://life-genera.eu/wp-content/uploads/2023/06/red-x-error.png" alt="red-x-img-used-for-errors">
        </div>
        <p id="error-modal-text" class="font-[20px] text-center leading-relaxed text-gray-500 dark:text-gray-300">
          Make sure you have your <b><u>Crypto Wallet is Installed and Connected</u></b> to receive your Reward.
          If you don't desire the Reward just close the this window.
        </p>
      </div>
    </div>
  </div>
</div>

<!-- The Two Alerts (from: Flowbite) -->
<!-- 1. Success Alert -->
<div class="flowbite-success-alert hidden flex justify-end fixed md:-bottom-2 md:right-0 -bottom-2 right-0 z-[1001]">
  <div class="sm:w-fit w-full mx-4">
    <div id="alert-3" class="flex p-4 mb-4 text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400" role="alert">
      <!-- <svg aria-hidden="true" class="flex-shrink-0 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg> -->
      <span class="text-xl">✅ </span>
      <!-- <span class="sr-only">Info</span> -->
      <div class="ml-3 text-large font-medium mr-2 my-auto text-l">
        <!-- A simple info alert with an <a href="#" class="font-semibold underline hover:no-underline">example link</a>. Give it a click if you like. -->
        The transaction was successful!
      </div>
      <button id="closeAlertSuccess" type="button" class="ml-auto -mx-1.5 -my-1.5 bg-green-50 text-green-500 rounded-lg focus:ring-2 focus:ring-green-400 p-1.5 hover:bg-green-200 inline-flex h-8 w-8 dark:bg-gray-800 dark:text-green-400 dark:hover:bg-gray-700" aria-label="Close">
        <span class="sr-only">Close</span>
        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
          <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
        </svg>
      </button>
    </div>
  </div>
</div>

<!-- 2. Fail Alert -->
<div class="flowbite-fail-alert hidden flex justify-end fixed md:-bottom-2 md:right-00 -bottom-2 right-0 z-[1001]">
  <div class="sm:w-fit w-full mx-4">

    <div id="alert-2" class="flex p-4 mb-4 text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400" role="alert">
      <!-- <svg aria-hidden="true" class="flex-shrink-0 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg> -->
      <span class="text-xl">❌ </span>
      <!-- <span class="sr-only">Info</span> -->
      <div class="ml-3 text-large font-medium mr-2 my-auto text-l">
        <!-- A simple info alert with an <a href="#" class="font-semibold underline hover:no-underline">example link</a>. Give it a click if you like. -->
        The transaction failed!
        Check if your wallet is connected!
      </div>
      <button id="closeAlertFail" type="button" class="ml-auto -mx-1.5 -my-1.5 bg-red-50 text-red-500 rounded-lg focus:ring-2 focus:ring-red-400 p-1.5 hover:bg-red-200 inline-flex h-8 w-8 dark:bg-gray-800 dark:text-red-400 dark:hover:bg-gray-700" aria-label="Close">
        <span class="sr-only">Close</span>
        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
          <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
        </svg>
      </button>
    </div>
  </div>
</div>
<!-- *** HTML Section - END *** -->

<!-- *** JavaScript Section - START *** -->

<script>
  document.addEventListener("DOMContentLoaded", () => {

    console.log("(1) - Running => EventListener from => Initialize PHP");

    const connectButton = document.querySelector(".menu-item.menu-item-type-custom.menu-item-object-custom");

    async function isConnected() {
      const _isConnected = await isWalletConnected();
      if (hasMetamask() && _isConnected && connectButton) {
        connectButton.innerHTML = `Connected ✅`;
      }
    }

    isConnected();


    // === Selecting HTML Elements ===
    // Alerts
    const alertSuccess = document.querySelector(".flowbite-success-alert");
    const closeAlertSuccess = document.querySelector("#closeAlertSuccess");
    const alertFailure = document.querySelector(".flowbite-fail-alert");
    const closeAlertFailure = document.querySelector("#closeAlertFail");
    const error_modal_close_btn = document.querySelector('button[data-modal-hide="sth-error-modal"]')

    // Error Modal - Initialization
    const error_modal = document.getElementById('error-modal');

    const error_modal_options = {
      placement: 'center',
      backdrop: 'dynamic',
      backdropClasses: 'bg-gray-900 bg-opacity-50 dark:bg-opacity-80 fixed inset-0 z-40',
      closable: true,
      onHide: () => {
        console.log('modal is hidden');
      },
      onShow: () => {
        console.log('modal is shown');
      },
      onToggle: () => {
        console.log('modal has been toggled');
      }
    }

    const js_error_modal = new Modal(error_modal, error_modal_options)

    // Voting Btns
    const comment_like_dislike_vote = document.querySelectorAll(
      ".cld-like-dislike-trigger");
    const post_like_dislike_vote = document.querySelectorAll(
      ".pld-like-dislike-trigger");

    // Modals Btns
    // Collecting Reward
    // The Get Reward for: Submitting a Comment
    const leave_comment_modal_btn_collect = document.querySelector(
      "#modal-btn-leave-comment-collect");

    // The Get Reward for: Voting on a Comment
    const modal_btn_vote_comment_collect = document.querySelector(
      "#modal-btn-vote-comment-collect");

    // The Get Reward for: Voting on a Comment
    const modal_btn_vote_post_collect = document.querySelector(
      "#modal-btn-vote-post-collect");

    // Connecting with Metamask
    // The Connect Now Btns of each Modal
    const leave_comment_modal_btn_connect = document.querySelector(
      "#modal-btn-leave-comment-connect");

    const vote_comment_modal_btn_connect = document.querySelector(
      "#modal-btn-vote-comment-connect");

    const vote_post_modal_btn_connect = document.querySelector(
      "#modal-btn-vote-post-connect");

    // Comment Form Submission
    const sumbit_comment_btn = document.querySelector("#submit");
    const commentForm = document.querySelector("#commentform");

    // Linking Modals with other HTML elements (the use of data attributes is required from the Flowbite library)
    // 1. Type: Comment Submission
    sumbit_comment_btn.setAttribute('data-modal-target', "leave-comment-modal")
    sumbit_comment_btn.setAttribute('data-modal-toggle', 'leave-comment-modal');

    // 2. Type: Post Voting
    post_like_dislike_vote.forEach((post) => {
      // console.log("FFFFFFFF: ", vote);
      post.setAttribute('data-modal-target', "post-modal");
      post.setAttribute('data-modal-toggle', 'post-modal');

      post.addEventListener('click', (event) => {
        event.preventDefault(); // Prevents the default link behavior
      });
    })

    // 3. Type: Comment Voting
    comment_like_dislike_vote.forEach((comment) => {
      // console.log("FFFFFFFF: ", vote);
      comment.setAttribute('data-modal-target', "vote-comment-modal");
      comment.setAttribute('data-modal-toggle', 'vote-comment-modal');

      comment.addEventListener('click', (event) => {
        event.preventDefault(); // Prevents the default link behavior
      });
    })

    // === Adding The Event Listeners and Handlers ===
    // -- Header Button "Connect Wallet" --
    connectButton && connectButton.addEventListener('click', (event) => {
      if (hasMetamask() && !isMetamaskConnected()) {
        console.log(
          "User has Metamask installed, trying to connect it..."
        )
        connectMetamask();
      } else {
        const error_modal_content = document.querySelector('#error-modal-text')
        const _prev = error_modal_content;
        error_modal_content.textContent = "Probably, you do NOT have a Crypto Wallet installed on your browser. To 'Connect your Wallet' to our website, you kinda need a wallet first 😁"
        js_error_modal.show();
      }
    });

    // -- Modal's BTNs --
    // Get Reward Buttons EventListeners
    // 1. For Leaving a Comment Modal
    leave_comment_modal_btn_collect.addEventListener("click", async (e) => {
      if (await isWalletConnected()) {
        await handleTransactionCall('submitComment', showAlertSuccess, showAlertFailure)
      } else {
        js_error_modal.show();
      }
    })

    // 2. For Voting on a Comment Modal
    modal_btn_vote_comment_collect.addEventListener("click", async (e) => {
      if (await isWalletConnected()) {
        await handleTransactionCall('voteOnComment', showAlertSuccess, showAlertFailure)
      } else {
        js_error_modal.show();
      }
    })

    // 3. For Voting on a Post Modal
    modal_btn_vote_post_collect.addEventListener("click", async (e) => {
      if (await isWalletConnected()) {
        await handleTransactionCall('voteOnPost', showAlertSuccess, showAlertFailure)
      } else {
        js_error_modal.show();
      }
    })

    // Connect Now Buttons EventListeners
    // 1. For Leaving a Comment Modal
    leave_comment_modal_btn_connect.addEventListener("click", (e) => {
      if (hasMetamask()) {
        if (!isMetamaskConnected()) {
          connectMetamask();
          console.log(
            "User has Metamask installed, trying to connect it..."
          )
        } else if (isMetamaskConnected()) {
          leave_comment_modal_btn_connect.textContent = "You are connected"
          leave_comment_modal_btn_connect.style.color = 'green';
          leave_comment_modal_btn_connect.style.borderColor = 'green';
          leave_comment_modal_btn_connect.style.fontWeight = "800";
        }
      } else {
        const error_modal_content = document.querySelector('#error-modal-text')
        const _prev = error_modal_content;
        error_modal_content.textContent = "Probably, you do NOT have a Crypto Wallet installed on your browser. To 'Connect your Wallet' to our website, you kinda need a wallet first 😁"
        js_error_modal.show();
      }
    })

    // 2. For Voting on a Comment Modal
    vote_comment_modal_btn_connect.addEventListener("click", (e) => {
      if (hasMetamask()) {
        if (!isMetamaskConnected()) {
          connectMetamask();
          console.log(
            "User has Metamask installed, trying to connect it..."
          )
        } else if (isMetamaskConnected()) {
          vote_comment_modal_btn_connect.textContent = "You are connected"
          vote_comment_modal_btn_connect.style.color = 'green';
          vote_comment_modal_btn_connect.style.borderColor = 'green';
          vote_comment_modal_btn_connect.style.fontWeight = "800";
        }
      } else {
        const error_modal_content = document.querySelector('#error-modal-text')
        const _prev = error_modal_content;
        error_modal_content.textContent = "Probably, you do NOT have a Crypto Wallet installed on your browser. To 'Connect your Wallet' to our website, you kinda need a wallet first 😁"
        js_error_modal.show();
      }
    })

    // 3. For Voting on a Post Modal
    vote_post_modal_btn_connect.addEventListener("click", (e) => {
      if (hasMetamask()) {
        if (!isMetamaskConnected()) {
          connectMetamask();
          console.log(
            "User has Metamask installed, trying to connect it..."
          )
        } else if (isMetamaskConnected()) {
          vote_post_modal_btn_connect.textContent = "You are connected"
          vote_post_modal_btn_connect.style.color = 'green';
          vote_post_modal_btn_connect.style.borderColor = 'green';
          vote_post_modal_btn_connect.style.fontWeight = "800";
        }
      } else {
        const error_modal_content = document.querySelector('#error-modal-text')
        const _prev = error_modal_content;
        error_modal_content.textContent = "Probably, you do NOT have a Crypto Wallet installed on your browser. To 'Connect your Wallet' to our website, you kinda need a wallet first 😁"
        js_error_modal.show();
      }
    })

    // 4. For Error Modal, close Button
    error_modal_close_btn.addEventListener("click", (e) => {
      const error_modal_content = document.querySelector('#error-modal-text')
      js_error_modal.hide();
      error_modal_content.innerHTML = `Make sure you have your <b><u>Crypto Wallet is Installed and Connected</u></b> to receive your Reward.
          If you don't desire the Reward just close the this window.`
    })

    // === Comment Form Submission ===
    // When user sumbits a Comment, this callback is executed
    commentForm.addEventListener("submit", (event) => {
      console.log("::From Leave-Comment-Modal::");
      event.preventDefault();

      // Get form data
      const formData = new FormData(commentForm);

      // Submit form data manually
      // NOTE: Page reload is required to update the DOM
      fetch(commentForm.action, {
          method: 'POST',
          body: formData,
        })
        .then(response => response.json())
        .then(data => console.log(data))
        .catch((error) => {
          console.error('Error:', error);
        });
    });

    // === Alerts ===
    // Handlers for Showing/Hiding the Alerts
    function hideAlertSuccess() {
      alertSuccess.classList.add('hidden');
    }

    function hideAlertFailure() {
      alertFailure.classList.add('hidden');
    }

    function showAlertSuccess() {
      hideAlertFailure();
      alertSuccess.classList.remove('hidden');
    }

    function showAlertFailure() {
      hideAlertSuccess();
      alertFailure.classList.remove('hidden');
    }

    // Alert's Close BTNs
    closeAlertSuccess.addEventListener('click', hideAlertSuccess);
    closeAlertFailure.addEventListener('click', hideAlertFailure);

  });

  async function handleTransactionCall(rewardType, showAlertSuccess, showAlertFailure, action = 'addPoints', service = 'forum') {
    const provider = new ethers.providers.Web3Provider(window.ethereum);
    console.log('The Provider: ', provider)
    try {
      const transactionResponse = await call_SC_function(provider, action, service, rewardType);
      console.log('Transaction Hash:', transactionResponse.hash);
      provider.waitForTransaction(transactionResponse.hash, 1)
        .then((transaction) => {
          console.log('Transaction mined:', transaction);
          provider.getTransactionReceipt(transaction.transactionHash)
            .then((receipt) => {
              console.log('Transaction receipt:', receipt);
              if (receipt.status === 1) {
                rewardType === 'submitComment' && showTransactionModal(true)
                showAlertSuccess();
              } else {
                rewardType === 'submitComment' && showTransactionModal(false)
                showAlertFailure();
              }
            });
        })
        .catch((error) => {
          showAlertFailure();
          console.error('Error occurred: ', error);
        });
    } catch (error) {
      showAlertFailure();
      console.log("Error: ", error);
    }
  }

  // get modal element
  const success_modal = document.getElementById('success-modal');

  const success_modal_options = {
    placement: 'bottom-right',
    backdrop: 'dynamic',
    backdropClasses: 'bg-gray-900 bg-opacity-50 dark:bg-opacity-80 fixed inset-0 z-40',
    closable: true,
    onHide: () => {
      console.log('modal is hidden');
    },
    onShow: () => {
      console.log('modal is shown');
    },
    onToggle: () => {
      console.log('modal has been toggled');
    }
  }

  const modal = new Modal(success_modal, success_modal_options)
  // const failure_modal = document.getElementById('failure-modal');

  function showTransactionModal(wasSuccess) {
    const success_modal = document.getElementById('success-modal');
    const failure_modal = document.getElementById('failure-modal');

    const $targetEl = wasSuccess ? success_modal : failure_modal;

    const options = {
      placement: 'center',
      backdrop: 'dynamic',
      backdropClasses: 'bg-gray-900 bg-opacity-50 dark:bg-opacity-80 fixed inset-0 z-40',
      closable: true,
      onHide: () => {
        console.log('modal is hidden');
        const error_modal_content = document.querySelector('#error-modal-text')
        error_modal_content.innerHTML = `Make sure you have your <b><u>Crypto Wallet is Installed and Connected</u></b> to receive your Reward.
          If you don't desire the Reward just close the this window.`
      },
      onShow: () => {
        console.log('modal is shown');
        console.log('Timer for reload is set!');
        setTimeout(() => window.location.reload(), 5 * 1000);
      },
      onToggle: () => {
        console.log('modal has been toggled');
      }
    }
    const modal = new Modal($targetEl, options)
    modal.show();
  }
</script>