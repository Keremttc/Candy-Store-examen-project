</div>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
</head>
<style>
.cart-button {
  display: block;
  position: relative;
  justify-content: flex-end;
  bottom: 12px;
  right: 75px;
}

#cart {
  position: relative;
  font-size: 1.5rem;
  cursor: pointer;
  margin: 1em 4em 0 0;
}

i:hover {
  color:var(--pink);
}

.cart-quantity {
  color: white;
  background-color: red;
  padding: .2em .3em;
  position: absolute;
  margin: .3em 4.5em 0 0;
  right: 0;
  border: solid 2px red;
  border-radius: 15px;
  font-weight: bolder;
}

.items-container {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
  margin-top: 1em
}

.card {
/*   width: 15rem; */
  margin: 1em;
  position: relative;
  overflow: hidden; 
  text-align: center
}

.card:hover .add-to-cart {
  transform: translateX(0);
}

.product-image {
  margin-bottom: 1em
} 

.product-price {
  padding-top: 1em;
  font-weight: bold;
  font-size: 1.5rem;
}

.cart-modal-overlay {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-color: rgba(0, 0, 0, .5);
  z-index: 2;
  transform: translateX(-200%);
  transition: .5s ease-out;
  
}

.cart-modal {
  height: 100vh;
  width: 50%;
  background-color: rgb(50,50,50);
  float: right;
  overflow: scroll;
  overflow-x: hidden;
}

#close-btn {
  font-size: 1.5rem;
  float: right;
  margin: .5em 2em 0 0;
  color: white;
  cursor: pointer;
}

.cart-is-empty {
  color: white;
  text-align: center;
  font-size: 1.5rem;
  margin-bottom: 1em;
  display: none;
  
}

.total {
  text-align: center;
  margin: 2em 0 2em 0;
/*   display: none; */
}

.cart-total {
  color: white;
}

.total-price {
  color: white;
  font-size: 2rem;
  display: block;
}

.purchase-btn {
  font-size: 1rem;
  font-weight: bolder;
  background-color: green;
  color: white;
  padding: 1em 2em;
  border-radius: 10px;
  outline: none;
  border: none;
  cursor: pointer;
  margin: 2em 0 1em 0;
}

.product-rows {
  margin-top: 3em;
  width: 95%;
  margin-left: auto;
  margin-right: auto;
  
}

.product-row {
  display: flex;
  align-items: center;
}

.cart-image {
  width: 10rem;
  margin: 1em;
}

.cart-price {
  color: white;
  font-size: 1.5rem;
  font-weight: bolder;
}

.product-quantity {
  width: 4rem;
  font-size: 2rem;
  margin-left: 3rem;
}

.remove-btn {
  padding: 1em 2em;
  background-color: red;
  color: white;
  outline: none;
  border: none;
  cursor: pointer;
  margin-left: 3rem;
  font-weight: bolder;
  font-size: 1rem;
}

.remove-btn:active {
  transform: translateY(5px);
}

@media (max-width: 1000px){
  .cart-modal {
    width: 100vw;
  } 
  
  .product-row {
    flex-direction: column;
    text-align: center;
    margin-bottom: 2em;
  }
  
  .remove-btn {
    margin: 0
  }
  
  .product-quantity {
    margin: .5em 0 .5em 0
  }
}

</style>
<body>

     <!-- Start DEMO HTML (Use the following code into your project)-->
     <div class="cart-modal-overlay">
    <div class="cart-modal">
      <i id="close-btn" class="fas fa-times"></i>
        <h1 class="cart-is-empty">Winkelwagen is leeg</h1>
      
        <div class="product-rows">
        </div>
        <div class="total">
          <h1 class="cart-total">Totaal</h1>
            <span class="total-price">€0</span>
              <button class="purchase-btn">Kopen</button>
        </div>
      </div>
</div>
      
<!--   end of cart modal -->
  <div class="cart-button">
    <i id="cart" class="fas fa-shopping-cart"></i>
      <span class ="cart-quantity">0</span>
  </div>
  
</body>

<script>
    // open cart modal
const cart = document.querySelector('#cart');
const cartModalOverlay = document.querySelector('.cart-modal-overlay');

cart.addEventListener('click', () => {
  if (cartModalOverlay.style.transform === 'translateX(-200%)'){
    cartModalOverlay.style.transform = 'translateX(0)';
  } else {
    cartModalOverlay.style.transform = 'translateX(-200%)';
  }
})
// end of open cart modal

// close cart modal
const closeBtn = document.querySelector ('#close-btn');

closeBtn.addEventListener('click', () => {
  cartModalOverlay.style.transform = 'translateX(-200%)';
});

cartModalOverlay.addEventListener('click', (e) => {
  if (e.target.classList.contains('cart-modal-overlay')){
    cartModalOverlay.style.transform = 'translateX(-200%)'
  }
})
// end of close cart modal

// add products to cart
const addToCart = document.getElementsByClassName('add-to-cart');
const productRow = document.getElementsByClassName('product-row');

for (var i = 0; i < addToCart.length; i++) {
  button = addToCart[i];
  button.addEventListener('click', addToCartClicked)
}

function addToCartClicked (event) {
  button = event.target;
  var cartItem = button.parentElement;
  var price = cartItem.getElementsByClassName('product-price')[0].innerText;
  
  var imageSrc = cartItem.getElementsByClassName('product-image')[0].src;
  addItemToCart (price, imageSrc);
  updateCartPrice()
}

function addItemToCart (price, imageSrc) {
  var productRow = document.createElement('div');
  productRow.classList.add('product-row');
  var productRows = document.getElementsByClassName('product-rows')[0];
  var cartImage = document.getElementsByClassName('cart-image');
  
  for (var i = 0; i < cartImage.length; i++){
    if (cartImage[i].src == imageSrc){
      alert ('This item has already been added to the cart')
      return;
    }
  }
  
  var cartRowItems = `
  <div class="product-row">
        <img class="cart-image" src="${imageSrc}" alt="">
        <span class ="cart-price">${price}</span>
        <input class="product-quantity" type="number" value="1">
        <button class="remove-btn">Remove</button>
        </div>
        
      `
  productRow.innerHTML = cartRowItems;
  productRows.append(productRow);
  productRow.getElementsByClassName('remove-btn')[0].addEventListener('click', removeItem)
  productRow.getElementsByClassName('product-quantity')[0].addEventListener('change', changeQuantity)
  updateCartPrice()
}
// end of add products to cart

// Remove products from cart
const removeBtn = document.getElementsByClassName('remove-btn');
for (var i = 0; i < removeBtn.length; i++) {
  button = removeBtn[i]
  button.addEventListener('click', removeItem)
}

function removeItem (event) {
  btnClicked = event.target
  btnClicked.parentElement.parentElement.remove()
  updateCartPrice()
}

// update quantity input
var quantityInput = document.getElementsByClassName('product-quantity')[0];

for (var i = 0; i < quantityInput; i++){
  input = quantityInput[i]
  input.addEventListener('change', changeQuantity)
}

function changeQuantity(event) {
  var input = event.target
  if (isNaN(input.value) || input.value <= 0){
    input.value = 1
  }
  updateCartPrice()
}
// end of update quantity input

// update total price
function updateCartPrice() {
  var total = 0
  for (var i = 0; i < productRow.length; i += 2) {
    cartRow = productRow[i]
  var priceElement = cartRow.getElementsByClassName('cart-price')[0]
  var quantityElement = cartRow.getElementsByClassName('product-quantity')[0]
  var price = parseFloat(priceElement.innerText.replace('$', ''))
  var quantity = quantityElement.value
  total = total + (price * quantity )
    
  }
  document.getElementsByClassName('total-price')[0].innerText =  '$' + total

document.getElementsByClassName('cart-quantity')[0].textContent = i /= 2
}
// end of update total price

// purchase items
const purchaseBtn = document.querySelector('.purchase-btn');

const closeCartModal = document.querySelector('.cart-modal');

purchaseBtn.addEventListener('click', purchaseBtnClicked)

function purchaseBtnClicked () {
  alert ('Thank you for your purchase');
  cartModalOverlay.style.transform= 'translateX(-100%)'
 var cartItems = document.getElementsByClassName('product-rows')[0]
 while (cartItems.hasChildNodes()) {
   cartItems.removeChild(cartItems.firstChild)
   
 }
  updateCartPrice()
}
// end of purchase items

//alert user if cart is empty
</script>
</html>