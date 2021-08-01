const DARK_MODE = 'dark';
const LIGHT_MODE = 'light';
const THEME = 'mode';

document.addEventListener(
    'DOMContentLoaded', (event) => {
        applyTheme();
        const toggleSwitch = document.getElementById('darkmode-icon');
        toggleSwitch.onclick = function() {
            let currentMode = localStorage.getItem(THEME);
            localStorage.setItem(
                THEME,
                currentMode === DARK_MODE ? LIGHT_MODE : DARK_MODE
            );
            applyTheme();
        }
    }
);

function applyTheme() {
    let html = document.documentElement;
    let currentMode = localStorage.getItem(THEME);
    if (currentMode === DARK_MODE) {
        html.classList.add(DARK_MODE);
        document.getElementById('darkmode-icon').innerHTML =
            '<img src="/wp-content/themes/floweb-theme/assets/icons/sun.png" class="w-6 h-6 m-auto align-bottom">';
    }
    else {
        html.classList.remove(DARK_MODE);
        document.getElementById('darkmode-icon').innerHTML =
            '<img src="/wp-content/themes/floweb-theme/assets/icons/moon.png" class="w-6 h-6 m-auto align-bottom">';
    }
}