/**
 * Function to copy promo code to clipboard /
 * Función para copiar el código de promoción al portapapeles
 */
(() => {
  const copy_promo_btn = document.querySelector(".copy_promo_code_btn");
  const promo_code = document.querySelector(".promo_code");

  copy_promo_btn.addEventListener("click", copy_promo);

  async function copy_promo() {
    if (navigator.clipboard && window.isSecureContext) {
      // If clipboard is not blocked / Si el portapapeles no está bloqueado
      await navigator.clipboard.writeText(promo_code.textContent);
    } else {
      // If clipboard is blocked / Si el portapapeles está bloqueado
      const textArea = document.createElement("textarea");
      textArea.value = promo_code.textContent;

      textArea.style.position = "absolute";
      textArea.style.left = "-999999px";

      document.body.prepend(textArea);
      textArea.select();

      try {
        document.execCommand("copy");
      } catch (error) {
        console.error(error);
      } finally {
        textArea.remove();
      }
    }
  }
})();

/**
 * Function to toggle mobile menu /
 * Función para alternar menú móvil
 */
(() => {
  const mobileMenu = document.querySelector(".mobile_menu");
  const openMenuBtn = document.querySelector(".open_mob_menu");
  const closeMenuBtn = document.querySelector(".close_mob_menu");
  const body = document.body;

  const toggleMenu = () => {
    mobileMenu.classList.toggle("is_open");
    body.classList.toggle("disabled_scroll");
  };

  openMenuBtn.addEventListener("click", toggleMenu);
  closeMenuBtn.addEventListener("click", toggleMenu);

  // Close the mobile menu on wider screens if the device orientation changes /
  // Cierra el menú del móvil en pantallas más anchas si cambia la orientación del dispositivo
  window.matchMedia("(min-width: 1440px)").addEventListener("change", e => {
    if (!e.matches) return;
    mobileMenu.classList.remove("is_open");
    body.classList.remove("disabled_scroll");
  });
})();
