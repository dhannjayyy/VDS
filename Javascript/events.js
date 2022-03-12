const modal = ()=>{
    const quoteButtons = document.querySelectorAll('.quote-button');
    const modalClose = document.getElementById("modal-close");
    const modalBackground = document.querySelector('.modal-background');
    quoteButtons.forEach(element => {
        element.addEventListener('click',()=>{
            modalBackground.classList.add('modal-active');
        })
    });
    modalClose.addEventListener('click',()=>{
        modalBackground.classList.remove('modal-active');
    })
}

modal();