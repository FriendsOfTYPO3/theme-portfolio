"use strict";
function headerComponent() {
    const header = document.querySelector('.header');
    const headerMenuButtonToggle = header === null || header === void 0 ? void 0 : header.querySelector('.header__mobile-burger');
    const headerNavigationContainer = header === null || header === void 0 ? void 0 : header.querySelector('.header__menu');
    if (headerMenuButtonToggle) {
        headerMenuButtonToggle.addEventListener('click', () => {
            if (headerNavigationContainer) {
                headerNavigationContainer.classList.toggle('active');
                headerMenuButtonToggle.classList.toggle('active');
            }
        });
    }
}
headerComponent();
