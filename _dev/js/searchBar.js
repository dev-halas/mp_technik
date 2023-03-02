const searchBarButton = document.querySelector('.headerShop--searchIcon')
const searchBar = document.querySelector('.searchBar')
const closeSearchBar = document.querySelector('.dgwt-wcas-preloader')
const searchInput = document.querySelector('.dgwt-wcas-search-input')


searchBarButton.addEventListener('click', () => {
    searchBar.classList.toggle('--show')
    searchInput.select()
})

closeSearchBar.addEventListener('click', () => {
    searchBar.classList.remove('--show')
})