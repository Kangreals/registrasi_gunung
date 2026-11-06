const hamburger = document.getElementById("hamburgers-menu");
const navLink = document.getElementById("nav-menu");
const pRemove = document.getElementById("hidden");

hamburger.addEventListener("click", () => {
  hamburger.classList.toggle("active");
  navLink.classList.toggle("active");
});

document.querySelectorAll(".nav-link a").forEach((link) => {
  hamburger.classList.remove("active");
  navLink.classList.remove("active");
});

// isi tambahan
document.querySelectorAll(".toggle-content").forEach((link) => {
  link.addEventListener("click", function (event) {
    event.preventDefault();

    const box = this.closest(".box");

    box.classList.toggle("active");

    if (box.classList.contains("active")) {
      this.value = "Tutup";
    } else {
      this.value = "Registrasi >>>";
    }
  });
});

const form = document.querySelector(".form-registrasi");

if (form) {
  form.addEventListener("submit", function (event) {
    event.preventDefault();

    alert("Registrasi berhasil!");

    form.reset();
  });
}
