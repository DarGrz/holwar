<?php
// Preloader wyłączony
return;
?>
<!-- Preloader -->
<div id="preloader"
    class="fixed inset-0 z-[1000] flex items-center justify-center bg-background-dark transition-opacity duration-700">
    <div class="relative flex flex-col items-center">
        <!-- Outer Glowing Ring -->
        <div class="absolute w-24 h-24 rounded-full border-2 border-primary/20 animate-[ping_2s_linear_infinite]"></div>

        <!-- Rotating Spinner -->
        <div class="w-16 h-16 rounded-full border-t-4 border-r-4 border-primary border-transparent animate-spin"></div>

        <!-- Logo in Center -->
        <div class="absolute inset-0 flex items-center justify-center p-4">
            <img src="img/holwar-logo-wide.png" alt="HOLWAR Logo" class="h-8 w-auto object-contain" loading="lazy">
        </div>

        <!-- Loading Bar -->
        <div class="mt-12 flex flex-col items-center">
            <div class="h-[2px] w-24 bg-primary/30 relative overflow-hidden rounded-full">
                <div class="absolute inset-0 bg-primary w-1/2 animate-[loading-bar_1.5s_ease-in-out_infinite]"></div>
            </div>
        </div>
    </div>
</div>

<style>
    @keyframes loading-bar {
        0% {
            transform: translateX(-100%);
        }

        100% {
            transform: translateX(200%);
        }
    }

    #preloader.loaded {
        opacity: 0;
        pointer-events: none;
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const preloader = document.getElementById('preloader');
        setTimeout(() => {
            preloader.classList.add('loaded');
            // Allow scrolling after preloader is hidden
            document.body.style.overflow = '';
        }, 300); // Small delay for better UX
    });

    // Safety fallback: force hide loader after 2 seconds in case page loading is slow
    setTimeout(() => {
        const preloader = document.getElementById('preloader');
        if (preloader && !preloader.classList.contains('loaded')) {
            preloader.classList.add('loaded');
            document.body.style.overflow = '';
        }
    }, 2000);

    // Prevent scrolling while preloader is visible
    document.body.style.overflow = 'hidden';
</script>