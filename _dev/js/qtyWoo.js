
const productQuantity = () => {

    const qtyInputs = document.querySelectorAll('.qtyInput')
    const qtyInc = document.querySelectorAll('.qtyInc')
    const qtyDec = document.querySelectorAll('.qtyDec')
    const buttonUpdate = document.querySelector('[name="update_cart"]');

    qtyInc.forEach((inc, index) => {
        inc.addEventListener('click', () => {
            qtyInputs[index].value++
            buttonUpdate ? buttonUpdate.removeAttribute('disabled') : null
        })
    })

    qtyDec.forEach((dec, index) => {
        dec.addEventListener('click', () => {
            qtyInputs[index].value--
            qtyInputs[index].value < 1 ? qtyInputs[index].value = 0 : qtyInputs[index].value
            buttonUpdate ? buttonUpdate.removeAttribute('disabled') : null
        })
    })

}

productQuantity()

jQuery(document.body).on('updated_cart_totals removed_from_cart', () => {
    productQuantity()
});



