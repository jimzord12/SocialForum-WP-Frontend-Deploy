async function connectMetamask() {
  console.log("(1) - Running => connectMetamask() ");

  // select the connect btn from the header based on its class name
  const connectButton = document.querySelector(
    ".menu-item.menu-item-type-custom.menu-item-object-custom"
  );
  // try {
  //   connectButton.removeAttribute("href");
  //   connectButton.removeAttribute("target");
  // } catch (error) {
  //   console.log("💎 😅 Error: Something went wrong with the Connect Btn");
  // }

  // Prevent the button click from reloading the page
  // event.preventDefault();

  // if metamask is installed...
  if (hasMetamask()) {
    try {
      // fetch the wallets accounts
      const accounts = await window.ethereum.request({
        method: "eth_requestAccounts",
      });

      // select the first account
      const account = accounts[0];
      console.log("Account: ", account);

      if (isWalletConnected() && connectButton)
        connectButton.innerHTML = `Connected ✅`;
      return { success: true, account };
    } catch (error) {
      // if something goes wrong...
      // Print the error message
      console.error("Error connecting to MetaMask", error);
    }
    // If Metasmask is not installed print follwing msg.
  } else {
    console.log("MetaMask is not installed");
  }
}
