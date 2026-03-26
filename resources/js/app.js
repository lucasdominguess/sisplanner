import './bootstrap';
/**
 * Application JavaScript Entry Point
 *
 * This file is compiled by Vite and loaded on all pages.
 * Add application-level JavaScript here.
 */

// Import Font Awesome or Material Symbols if needed
// Make sure Material Symbols Outlined is loaded in the layout

// Initialize theme toggle functionality
document.addEventListener('DOMContentLoaded', function() {
    // Theme toggle button handler
    const themeButtons = document.querySelectorAll('[data-toggle-theme]');

    themeButtons.forEach(button => {
        button.addEventListener('click', function() {
            const html = document.documentElement;
            const isDark = html.classList.contains('dark');

            if (isDark) {
                html.classList.remove('dark');
                localStorage.setItem('theme', 'light');
            } else {
                html.classList.add('dark');
                localStorage.setItem('theme', 'dark');
            }
        });
    });

    // Restore theme preference from localStorage
    const savedTheme = localStorage.getItem('theme');
    if (savedTheme === 'dark') {
        document.documentElement.classList.add('dark');
    } else {
        document.documentElement.classList.remove('dark');
    }
});
