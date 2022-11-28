const productTabs = document.querySelector('.productTabs')

if(productTabs !== null) {
    console.log('works')

    const productTabHeader = document.querySelectorAll('.productTab--header')
    console.log(productTabHeader);

    const productTabContent = document.querySelectorAll('.productTab--content')
    console.log(productTabContent)

    productTabHeader.forEach((header, index) => {
        header.addEventListener('click', () => {
            
            productTabHeader.forEach(e => {
                e.classList.remove('--active');
            })

            productTabContent.forEach(e => {
                e.classList.remove('--active');
            })

            header.classList.add('--active')
            productTabContent[index].classList.add('--active')

        })
    })
}