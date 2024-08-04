document.addEventListener('DOMContentLoaded', function() {
    const homeNav = document.getElementById('nav-home');
    const productItemNav = document.getElementById('nav-product-item');

    // Fungsi untuk mengaktifkan dan menonaktifkan state
    function activateNav(activeNav, inactiveNav) {
        activeNav.classList.add('active');
        inactiveNav.classList.remove('active');
    }

    // Event listener untuk Home
    homeNav.addEventListener('click', function() {
        activateNav(homeNav, productItemNav);
    });

    // Event listener untuk Product Item
    productItemNav.addEventListener('click', function() {
        activateNav(productItemNav, homeNav);
    });

    // Cek URL saat halaman dimuat
    const currentPath = window.location.pathname;

    // Jika URL /admin/home atau /admin/employe maka aktifkan tombol sesuai Url
    if (currentPath === '/admin/home') {
        activateNav(homeNav, productItemNav);
    } else if (currentPath === '/admin/employe') {
        activateNav(productItemNav, homeNav);
    }
});
