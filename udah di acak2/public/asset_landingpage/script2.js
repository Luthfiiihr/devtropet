
// Optional: Toggle sub-menu on click (instead of hover)
    document.addEventListener('DOMContentLoaded', function() {
        var profilLink = document.querySelector('nav ul li a[href="#profil"]');
        var subMenu = profilLink.nextElementSibling;
        
        profilLink.addEventListener('click', function(event) {
            event.preventDefault(); // Prevent default link behavior
            subMenu.style.display = subMenu.style.display === 'block' ? 'none' : 'block';
        });

        // Hide sub-menu when clicking outside of it
        document.addEventListener('click', function(event) {
            if (!profilLink.contains(event.target) && !subMenu.contains(event.target)) {
                subMenu.style.display = 'none';
            }
        });
    });
