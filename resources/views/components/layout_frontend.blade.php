<!DOCTYPE html>
<html lang="en">
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>{{ $title }}</title>
    <meta name="description" content="{{ $description }}" />
    <meta name="keywords" content="{{ $keywords }}" />
    <meta name="author" content="adimiuprix" />
    <meta name="robots" content="index, follow" />

    <!-- Favicon -->
    <link rel="icon" type="image/png" sizes="32x32" href="assets/favicons/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="assets/favicons/favicon-16x16.png" />
    <link rel="manifest" href="assets/favicons/manifest.json" />
    <meta name="theme-color" content="#000000" />

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;500;600;700;800;900&amp;family=Rajdhani:wght@300;400;500;600;700&amp;display=swap" rel="stylesheet" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap%405.1.3/dist/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/responsive-navbar.css') }}">
    
    @livewireStyles

    <body>
        <!-- Animated Background -->
        <div class="cyber-grid"></div>
        <div class="particles" id="particles"></div>
        <div class="tron-coins-bg">
            <div class="tron-coin"></div>
            <div class="tron-coin"></div>
            <div class="tron-coin"></div>
            <div class="tron-coin"></div>
        </div>

        <!-- Navigation -->
        <nav class="nav">
            <div class="nav-inner">
                <a href="{{ route('home') }}" class="brand">
                    <div class="brand-icon">
                        <img src="https://cdn3d.iconscout.com/3d/premium/thumb/tron-coin-trx-3d-icon-png-download-5326811.png" alt="TronX" style="width: 100%; height: 100%; object-fit: contain;" />
                    </div>
                    <span> {{ $sitename }}</span>
                </a>

                <!-- Mobile Menu Toggle -->
                <button class="nav-toggle" type="button" aria-label="Toggle navigation menu" onclick="toggleMobileMenu()">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M3 12h18M3 6h18M3 18h18" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </button>

                <div class="nav-links">
                    <a href="#features">Features</a>
                    <a href="#stats">Statistics</a>
                    <a href="{{ route('payment.proofs') }}">Recent Payments</a>
                    <a href="#contact">Contact</a>
                </div>

            </div>
        </nav>

        {{ $slot }}

        <!-- Footer -->
        <footer class="footer">
            <div class="footer-content">
                <div class="footer-section">
                    <h3>TRONMINER</h3>
                    <p>
                        Futuristic cloud mining platform for TRX. Advanced technology, instant payouts, and maximum profitability.
                    </p>
                </div>

                <div class="footer-section">
                    <h3>Quick Links</h3>
                    <p><a href="#features">Features</a></p>
                    <p><a href="#stats">Statistics</a></p>
                    <p><a href="#about">About Us</a></p>
                    <p><a href="#contact">Contact</a></p>
                </div>

                <div class="footer-section">
                    <h3>Support</h3>
                    <p><a href="#">Help Center</a></p>
                    <p><a href="{{ route('payment.proofs') }}">Recent Payments</a></p>
                </div>
            </div>

            <div class="footer-bottom">
                <p>&copy; 2025 TRONMINER. All rights reserved. Powered by advanced blockchain technology.</p>
            </div>
        </footer>

        <!-- Bootstrap JS -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap%405.1.3/dist/js/bootstrap.bundle.min.js"></script>

        <!-- Livewire Scripts -->
        @livewireScripts

        <script>
            // Create floating particles
            function createParticles() {
                const particlesContainer = document.getElementById("particles");
                const particleCount = 50;

                for (let i = 0; i < particleCount; i++) {
                    const particle = document.createElement("div");
                    particle.className = "particle";
                    particle.style.left = Math.random() * 100 + "%";
                    particle.style.top = Math.random() * 100 + "%";
                    particle.style.animationDelay = Math.random() * 6 + "s";
                    particle.style.animationDuration = Math.random() * 3 + 3 + "s";
                    particlesContainer.appendChild(particle);
                }
            }

            // Scroll animations
            function handleScrollAnimations() {
                const elements = document.querySelectorAll(".stat-card, .feature-card");
                const observer = new IntersectionObserver(
                    (entries) => {
                        entries.forEach((entry) => {
                            if (entry.isIntersecting) {
                                entry.target.style.opacity = "1";
                                entry.target.style.transform = "translateY(0)";
                            }
                        });
                    },
                    { threshold: 0.1 }
                );

                elements.forEach((el) => {
                    el.style.opacity = "0";
                    el.style.transform = "translateY(30px)";
                    el.style.transition = "opacity 0.6s ease, transform 0.6s ease";
                    observer.observe(el);
                });
            }

            // Smooth scrolling for navigation links
            function initSmoothScrolling() {
                document.querySelectorAll('a[href^="#"]').forEach((anchor) => {
                    anchor.addEventListener("click", function (e) {
                        e.preventDefault();
                        const target = document.querySelector(this.getAttribute("href"));
                        if (target) {
                            target.scrollIntoView({
                                behavior: "smooth",
                                block: "start",
                            });
                        }
                    });
                });
            }

            // Initialize everything when DOM is loaded
            document.addEventListener("DOMContentLoaded", function () {
                createParticles();
                handleScrollAnimations();
                initSmoothScrolling();
                initTronValueDisplay();
            });

            // Dynamic TRON Value Display
            function initTronValueDisplay() {
                const tronValue = document.getElementById("tronValue");
                const tronChange = document.getElementById("tronChange");
                const miningAmount = document.getElementById("miningAmount");
                const progressFill = document.getElementById("progressFill");

                if (!tronValue || !tronChange || !miningAmount || !progressFill) return;

                // Simulate live TRON price changes
                let currentPrice = 0.33773;
                let currentMining = 0.105; // Start from 0.1050 TRX
                let progress = 0;

                function updateTronValue() {
                    // Simulate price fluctuations
                    const change = (Math.random() - 0.5) * 0.01; // ±0.5% change
                    currentPrice += change;
                    currentPrice = Math.max(0.3, Math.min(0.4, currentPrice)); // Keep within reasonable range

                    const priceChange = (change / (currentPrice - change)) * 100;
                    const isPositive = priceChange >= 0;

                    tronValue.textContent = "$" + currentPrice.toFixed(5);
                    tronChange.textContent = (isPositive ? "+" : "") + priceChange.toFixed(2) + "%";
                    tronChange.style.color = isPositive ? "#00FF88" : "#FF4444";
                    tronChange.innerHTML = (isPositive ? "↗" : "↘") + " " + (isPositive ? "+" : "") + priceChange.toFixed(2) + "%";
                }

                function updateMiningProgress() {
                    // Simulate mining progress with higher values
                    const miningIncrement = Math.random() * 0.01; // 0.01 TRX increment
                    currentMining += miningIncrement;

                    // Reset when reaching 2 TRX
                    if (currentMining >= 2.0) {
                        currentMining = 0.105; // Start from 0.1050 TRX instead of 0
                    }

                    // Ensure minimum value of 0.1050 TRX
                    if (currentMining < 0.105) {
                        currentMining = 0.105;
                    }

                    miningAmount.textContent = currentMining.toFixed(4) + " TRX";

                    // Update progress bar
                    progress += 0.5;
                    if (progress > 100) progress = 0;
                    progressFill.style.width = progress + "%";
                }

                // Update values every 2 seconds
                setInterval(updateTronValue, 2000);
                setInterval(updateMiningProgress, 1000);

                // Initial update
                updateTronValue();
                updateMiningProgress();
            }
        </script>

        <!-- Mobile Menu Toggle Script -->
        <script>
            function toggleMobileMenu() {
                const navLinks = document.querySelector(".nav-links");
                const navToggle = document.querySelector(".nav-toggle");

                navLinks.classList.toggle("active");

                // Animate the toggle button
                if (navLinks.classList.contains("active")) {
                    navToggle.style.transform = "rotate(90deg)";
                } else {
                    navToggle.style.transform = "rotate(0deg)";
                }
            }

            // Close mobile menu when clicking outside
            document.addEventListener("click", function (event) {
                const nav = document.querySelector(".nav");
                const navLinks = document.querySelector(".nav-links");
                const navToggle = document.querySelector(".nav-toggle");

                if (!nav.contains(event.target) && navLinks.classList.contains("active")) {
                    navLinks.classList.remove("active");
                    navToggle.style.transform = "rotate(0deg)";
                }
            });

            // Close mobile menu when clicking on a link
            document.querySelectorAll(".nav-links a").forEach((link) => {
                link.addEventListener("click", function () {
                    const navLinks = document.querySelector(".nav-links");
                    const navToggle = document.querySelector(".nav-toggle");

                    navLinks.classList.remove("active");
                    navToggle.style.transform = "rotate(0deg)";
                });
            });
        </script>

    </body>
</html>