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

    // Jika URL adalah /admin/home, aktifkan tombol Home
    if (currentPath === '/petugas/home') {
        activateNav(homeNav, productItemNav);
    } else if (currentPath === '/petugas/product') {
        activateNav(productItemNav, homeNav);
    }
});

document.addEventListener('DOMContentLoaded', function() {
    const showFormButton = document.getElementById('show-form-btn');
    const closeFormButton = document.getElementById('close-form-btn');
    const employeeForm = document.getElementById('employee-form');

    // Show the form with animation
    showFormButton.addEventListener('click', function() {
        employeeForm.classList.add('show');
    });

    // Hide the form with animation
    closeFormButton.addEventListener('click', function() {
        employeeForm.classList.remove('show');
    });
});
