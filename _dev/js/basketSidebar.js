const headerBasket = document.querySelector('.headerShop--basket')
const basketSidebar = document.querySelector('.basketSidebar--sidebar')
const basketSidebarBackground = document.querySelector('.basketSidebar--bg')
const closeSidebar = document.querySelector('.basketSidebar--close')

headerBasket.addEventListener('click', () => {
    basketSidebar.classList.toggle('--open');
    basketSidebarBackground.classList.toggle('--open');
})

closeSidebar.addEventListener('click', () => {
    basketSidebar.classList.toggle('--open');
    basketSidebarBackground.classList.toggle('--open');
})

basketSidebarBackground.addEventListener('click', () => {
    basketSidebar.classList.toggle('--open');
    basketSidebarBackground.classList.toggle('--open');
})