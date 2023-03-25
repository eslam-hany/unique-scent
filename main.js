const elements = document.querySelectorAll('.heart-icon');

function toggleColor() {
  const currentElement = this;
  
  if (currentElement.style.fill === 'white') {
    currentElement.style.fill = 'red';
    Swal.fire({
  title: 'added to favorites',
  showClass: {
    popup: 'animate__animated animate__fadeInDown'
  },
  hideClass: {
    popup: 'animate__animated animate__fadeOutUp'
  },
  timer:1000,
  showConfirmButton:false
})
  } else {
    currentElement.style.fill = 'white';
    Swal.fire({
  title: 'removed from favorites',
  showClass: {
    popup: 'animate__animated animate__fadeInDown'
  },
  hideClass: {
    popup: 'animate__animated animate__fadeOutUp'
  },
  timer:1000,
  showConfirmButton:false,
})
  }
}

elements.forEach(element => {
  element.addEventListener('click', toggleColor);
});



const cartBtns = document.querySelectorAll('.btn');

cartBtns.forEach(function(cartBtn) {
  cartBtn.addEventListener('click', function() {
    if(cartBtn.innerHTML === 'Add to cart') {
      cartBtn.innerHTML = 'Item added';
        Swal.fire({
  title: 'added to cart',
  showClass: {
    popup: 'animate__animated animate__fadeInDown'
  },
  hideClass: {
    popup: 'animate__animated animate__fadeOutUp'
  },
  timer:1000,
  showConfirmButton:false
})
    } else {
      cartBtn.innerHTML = 'Add to cart';
       Swal.fire({
  title: 'removed from cart',
  showClass: {
    popup: 'animate__animated animate__fadeInDown'
  },
  hideClass: {
    popup: 'animate__animated animate__fadeOutUp'
  },
  timer:1000,
  showConfirmButton:false
})
    }
     
  });
});



