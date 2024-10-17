export default class MenuButtonToggle {
    private readonly header: HTMLElement | null;
    private readonly headerMenuButtonToggle: Element | null | undefined;
    private readonly headerNavigationContainer: Element | null | undefined;


    constructor() {
        this.header = document.querySelector('.header');

        if (!this.header) return;

        this.headerMenuButtonToggle = this.header.querySelector('.header__mobile-burger') || null;
        this.headerNavigationContainer = this.header.querySelector('.header__menu') || null;
        this.#initialize();
    }

    #initialize(): void {
        if (this.headerMenuButtonToggle) {
            this.headerMenuButtonToggle.addEventListener('click', () => this.#toggleMenu());
        }
    }

    #toggleMenu(): void {
        if (this.headerNavigationContainer && this.headerMenuButtonToggle) {
            this.headerNavigationContainer.classList.toggle('active');
            this.headerMenuButtonToggle.classList.toggle('active');
        }
    }
}
