// content-protection.js

// Disable right-click (context menu)
document.addEventListener('contextmenu', function(e) {
    e.preventDefault();
});

// Disable Ctrl+C, Ctrl+X (Cut), and Ctrl+V (Paste)
document.addEventListener('keydown', function(e) {
    if (e.ctrlKey && (e.key === 'c' || e.key === 'x' || e.key === 'v')) {
        e.preventDefault();
    }
});

// Disable copy, cut, and paste events
document.addEventListener('copy', function(e) {
    e.preventDefault();
});

document.addEventListener('cut', function(e) {
    e.preventDefault();
});

document.addEventListener('paste', function(e) {
    e.preventDefault();
});
