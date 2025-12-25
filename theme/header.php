<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Trusted dewatering and pump rental company in UAE delivering fast, effective water control solutions">
    <meta name="keywords" content="dewatering, pump rental, UAE, construction, wellpoint, deep well">
    <?php wp_head(); ?>
    <style>
        /* Add CSS for mobile menu */
        .nav-links.active {
            display: flex !important;
        }
        
        @media (max-width: 768px) {
            .nav-links {
                display: none;
                flex-direction: column;
                position: absolute;
                top: 100%;
                left: 0;
                right: 0;
                background: white;
                padding: 20px;
                box-shadow: 0 5px 10px rgba(0,0,0,0.1);
            }
        }
    </style>
</head>
<body <?php body_class(); ?>>
    <!-- Header -->
    <header>
        <nav>
            <div class="logo" onclick="showPage('home')">AQUALUX</div>
            <ul class="nav-links" id="navLinks">
                <li><a onclick="showPageAndCloseMenu('home')">Home</a></li>
                <li><a onclick="showPageAndCloseMenu('services')">Services</a></li>
                <li><a onclick="showPageAndCloseMenu('deep-well')">Dewatering</a></li>
                <li><a onclick="showPageAndCloseMenu('pump-rental')">Pump Rental</a></li>
                <li><a onclick="showPageAndCloseMenu('projects')">Projects</a></li>
                <li><a onclick="showPageAndCloseMenu('about')">About</a></li>
                <li><a onclick="showPageAndCloseMenu('contact')">Contact</a></li>
            </ul>
            <div class="mobile-menu" onclick="toggleMenu()">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </nav>
    </header>
    
    <main>
    
    <script>
        // Toggle mobile menu
        function toggleMenu() {
            const navLinks = document.getElementById('navLinks');
            navLinks.classList.toggle('active');
        }
        
        // Close mobile menu
        function closeMenu() {
            const navLinks = document.getElementById('navLinks');
            navLinks.classList.remove('active');
        }
        
        // Original page function (keep if needed)
        function showPage(pageId) {
            // Your existing page switching logic here
            console.log('Showing page:', pageId);
        }
        
        // New function that shows page AND closes menu
        function showPageAndCloseMenu(pageId) {
            // Close the mobile menu first
            closeMenu();
            
            // Then show the page (call your existing function)
            showPage(pageId);
            
            // Alternatively, if you want to navigate directly:
            // window.location.href = '#' + pageId;
        }
        
        // Optional: Close menu when clicking outside on mobile
        document.addEventListener('click', function(event) {
            const navLinks = document.getElementById('navLinks');
            const mobileMenu = document.querySelector('.mobile-menu');
            
            if (window.innerWidth <= 768) {
                if (!navLinks.contains(event.target) && !mobileMenu.contains(event.target)) {
                    closeMenu();
                }
            }
        });
        
        // Optional: Close menu on window resize if switching to desktop
        window.addEventListener('resize', function() {
            if (window.innerWidth > 768) {
                closeMenu();
            }
        });
    </script>