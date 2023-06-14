<script>
  document.addEventListener("DOMContentLoaded", () => {
    const connectButton = document.querySelector(".menu-item.menu-item-type-custom.menu-item-object-custom");
    // try {
    //   connectButton.removeAttribute("href");
    //   connectButton.removeAttribute("target");
    // } catch (error) {
    //   console.log("💎 😅 Error: Something went wrong with the Connect Btn")
    // }

    if (window?.ethereum?.selectedAddress && connectButton) {
      connectButton.innerHTML = `Connected ✅`;
    }

    connectButton && connectButton.addEventListener('click', (event) => {
      if (window?.ethereum) {
        console.log(
          "User has Metamask installed, trying to connect it..."
        )
        connectMetamask();
      }
    });
  });
</script>