const header = document.querySelector('.header')
const hamburger = document.querySelector('.hamburger')
const headerLinks = document.querySelectorAll('.header li:not(.menu-item-has-children)')
const headerLinks_withChildren = document.querySelectorAll('.header li:has(.sub-menu)')

console.log(headerLinks_withChildren)

hamburger.addEventListener('click', () => {
    header.classList.toggle('--active')
})

headerLinks.forEach(link => {
    link.addEventListener('click', () => {
        header.classList.remove('--active')
    })
})

headerLinks_withChildren.forEach(link_children => {
    link_children.addEventListener('click', () => {
        link_children.classList.toggle('show-subMenu')
    })
})

