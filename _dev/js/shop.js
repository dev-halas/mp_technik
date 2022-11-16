const shopCat = document.querySelector('.cat-parent')
console.log(shopCat)


shopCat.addEventListener('click', () => {
    shopCat.classList.toggle('catOpen')
})