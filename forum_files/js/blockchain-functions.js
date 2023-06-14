async function call_SC_function(provider, funcName, ...args) {
  console.log("(3) - Running => call_SC_function() ");

  let signer = null;

  if (window?.ethereum?.selectedAddress) {
    // provider = new ethers.BrowserProvider(window.ethereum);
    signer = await provider.getSigner();
    console.log("The Signer: ", signer);
  } else {
    console.error("😋 Check If you are Connected Dummy!");
    provider = ethers.getDefaultProvider();
  }

  // const contractAddress = "0x1f34e5DAAD9E0ea020133e250A67FF7ceaA0DbAF"; // Old one
  const contractAddress = "0x300302fEc3D905eb66Cb7743C636F8741B72dB3a"; // New one
  const contract = new ethers.Contract(
    contractAddress,
    smartContractABI,
    signer
  );

  try {
    const result = await contract[funcName](...args);
    console.log(
      "The following Smart Contract function is been called: ",
      funcName
    );
    console.log("With the following arguments: ", ...args);
    console.log("The Result is: ", result);
    return result;
  } catch (error) {
    console.error("Error calling contract function", error);
  }
}