const hamburger = document.getElementById("hamburgers-menu");
const navLink = document.getElementById("nav-menu");

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
      this.value = "data-default";
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

document.querySelectorAll(".toggle-content").forEach((link) => {
  link.addEventListener("click", function (event) {
    event.preventDefault();

    // 1. Targetkan elemen penampung gunung berdasarkan ID-nya
    const listGunung = document.getElementById("card");
    
    if (!listGunung) {
      console.error("Elemen id='card' tidak ditemukan!");
      return;
    }

    // 2. Lakukan toggle class hidden (muncul / sembunyi)
    listGunung.classList.toggle("hidden");

    // 3. Ubah teks tombol secara dinamis
    if (listGunung.classList.contains("hidden")) {
      // Jika tersembunyi, kembalikan ke teks asli dari data-default
      this.value = this.getAttribute("data-default");
    } else {
      // Jika muncul, ubah teks tombol menjadi Tutup
      this.value = "Tutup";
    }
  });
});
