"use strict";
var __classPrivateFieldGet = (this && this.__classPrivateFieldGet) || function (receiver, state, kind, f) {
    if (kind === "a" && !f) throw new TypeError("Private accessor was defined without a getter");
    if (typeof state === "function" ? receiver !== state || !f : !state.has(receiver)) throw new TypeError("Cannot read private member from an object whose class did not declare it");
    return kind === "m" ? f : kind === "a" ? f.call(receiver) : f ? f.value : state.get(receiver);
};
var _MenuButtonToggle_instances, _MenuButtonToggle_initialize, _MenuButtonToggle_toggleMenu;
Object.defineProperty(exports, "__esModule", { value: true });
class MenuButtonToggle {
    constructor() {
        _MenuButtonToggle_instances.add(this);
        this.header = document.querySelector('.header');
        if (!this.header)
            return;
        this.headerMenuButtonToggle = this.header.querySelector('.header__mobile-burger') || null;
        this.headerNavigationContainer = this.header.querySelector('.header__menu') || null;
        __classPrivateFieldGet(this, _MenuButtonToggle_instances, "m", _MenuButtonToggle_initialize).call(this);
    }
}
_MenuButtonToggle_instances = new WeakSet(), _MenuButtonToggle_initialize = function _MenuButtonToggle_initialize() {
    if (this.headerMenuButtonToggle) {
        this.headerMenuButtonToggle.addEventListener('click', () => __classPrivateFieldGet(this, _MenuButtonToggle_instances, "m", _MenuButtonToggle_toggleMenu).call(this));
    }
}, _MenuButtonToggle_toggleMenu = function _MenuButtonToggle_toggleMenu() {
    if (this.headerNavigationContainer && this.headerMenuButtonToggle) {
        this.headerNavigationContainer.classList.toggle('active');
        this.headerMenuButtonToggle.classList.toggle('active');
    }
};
exports.default = MenuButtonToggle;
