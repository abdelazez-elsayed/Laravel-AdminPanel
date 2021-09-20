const deleteBtns = document.querySelectorAll('[id^="deleteBtn"]')

function confirmDelete (evt){
    const order = confirm("Are sure you want to delete this movie?")
    if(order == false)
        evt.preventDefault()

}
deleteBtns.forEach(btn =>{
    btn.addEventListener('click',confirmDelete)
})