// Utilities
function isMetamaskConnected() {
  return window?.ethereum?.selectedAddress;
}

function hasMetamask() {
  return !!window?.ethereum;
}

async function isWalletConnected() {
  const accounts = await window?.ethereum?.request({
    method: "eth_accounts",
  });
  console.log("isWalletConnected(): ", accounts);
  return accounts !== undefined && accounts.length > 0;
}

function hasWallet() {
  return !!window?.ethereum;
}