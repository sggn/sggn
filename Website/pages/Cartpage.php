<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Cart Page</title>
  
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
:root {
    --green: green;
    --black: #130f40;
    --light-color: #666; 
    --box-shadow: 0 .5rem 1.5rem rgba(0, 0, 0, 0.1); 
    --border: .3rem solid rgba(0, 0, 0, 0.86); 
    --outline: 0.2rem solid rgba(0, 0, 0, 0.86); 
}
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: Arial, sans-serif;
    }

    body {
      background: #f9f9f9;
      margin-top: 80px; 
       margin-bottom: 100px;
}
    .container {
      max-width: 1200px;
      margin: auto;
    }

.heading{
    text-align: center;
    padding: 6rem 0;
    padding-bottom: 3rem;
    font-size: 2.5rem;
    color: var(--black);
}
.heading span{
    background: var(--green);
    color: #fff;
    display: inline-block;
    padding: .5rem 3rem;
    clip-path: polygon(100% 0, 93% 50%, 100% 99%, 0% 100%, 7% 50%, 0% 0%);
}
header {
    border: none;
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    z-index: 1000;
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 1.5rem 5%;
    background-color: #fff;
    box-shadow: 0 5px 15px rgba(0,0,0,0.05);
}

.header .logo {
    font-size: 1.7rem;
    font-weight: bold;
    color: #222;
    display: flex;
    align-items: center;
    gap: 0.6rem;
    text-decoration: none;
}

.header .logo i {
    color: var(--green);
    font-size: 1.4rem;
}

.header .navbar {
    display: flex;
    align-items: center;
    gap: 2rem;
}

.header .navbar a {
    font-size: 1.5rem;
    text-decoration: none;
    color: var(--black);
    font-weight: 500;
    transition: 0.3s ease;
}

.header .navbar a:hover {
    color: var(--green);
}

.header .icons {
    display: flex;
    align-items: center;
    gap: 1.5rem;
    font-size: 1.8rem;
}

.header .icons i {
    color: var(--black);
    cursor: pointer;
    transition: color 0.3s ease;
}

.header .icons i:hover {
    color: var(--green);
}


    .products, .cart {
      display: flex;
      flex-wrap: wrap;
      gap: 20px;
    }

    .product, .cart-item {
      background: white;
      border: 5px solid #ccc;
      border-radius: 10px;
      padding: 15px;
      width: 100%;
      display: flex;
      flex-direction: column;
      align-items: center; 
      text-align: center; 

    }
    .product:hover {
  transform: translateY(-10px);
  box-shadow: 1px 1px 15px 5px #27ae60;
}

    .product img {
      width: 100%;
      max-height: 200px;
      object-fit: cover;
      border-radius: 10px;
    }

    .product h3 {
      font-size: 18px;
      margin: 10px 0;
    }

    .product button {
      background: #27ae60;
      color: white;
      padding: 20px 18px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }

    .cart {
      flex-direction: column;
      margin-top: 30px;
    }

    .cart-item {
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    .cart-item h4 {
      font-size: 16px;
    }

    .quantity {
      display: flex;
      align-items: center;
      gap: 10px;
    }

    .quantity button {
      background: #333;
      color: white;
      border: none;
      padding: 5px 10px;
      cursor: pointer;
    }

    .total {
      font-size: 18px;
      text-align: right;
      margin-top: 15px;
    }

    @media (min-width: 600px) {
      .product {
        width: calc(50% - 10px);
      }

      .cart-item {
        flex-direction: row;
      }
    }

    @media (min-width: 900px) {
      .product {
        width: calc(33.33% - 13.33px);
      }
    }
    .checkout-container {
    text-align: center;
    margin-top: 2rem;
    padding-bottom: 4rem; 
}

.checkout-container {
    width: 100%;
    display: flex;
    justify-content: flex-end;
    padding: 2rem 5% 5rem 5%; 
    box-sizing: border-box;
}

.checkout-btn {
    background-color: var(--green); 
    color: #fff;
    border: none;
    padding: 1rem 2.5rem;
    font-size: 1.6rem;
    border-radius: 0.5rem;
    cursor: pointer;
    transition: 0.3s ease;
    box-shadow: 0 4px 8px rgba(0,0,0,0.1);
    text-decoration: none;
}

.checkout-btn:hover {
    background-color:rgb(17, 221, 102);
}


  </style>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

</head>
<body>
  <header class="header">
    <a href="#" class="logo"><i class="fa fa-shopping-basket"></i> Malu's Spices</a>

    <nav class="navbar">
        <a href="#product-list">Products</a>
        <a href="#cart-list">Cart</a>
    </nav>

</header>


<div class="container">
 <h1 class="heading"> Our <span>Products</span></h1>
  <div class="products" id="product-list">
    <div class="product" data-id="1" data-name="Javvarusi Vadam" data-price="₹350/kg">
      <img src="../Images/vadam.png" alt="Javvarusi Vadam">
      <h3>Javvarusi Vadam - ₹350/kg</h3>
      <button onclick="addToCart(1)">Add to Cart</button>
    </div>
    <div class="product" data-id="2" data-name="Katta Vadam" data-price="₹300/kg">
      <img src="../Images/Kattaivadam photo.png" alt="Katta Vadam">
      <h3>Katta Vadam - ₹300/kg</h3>
      <button onclick="addToCart(2)">Add to Cart</button>
    </div>
    <div class="product" data-id="3" data-name="IlaiVadam" data-price="₹280/kg">
      <img src="../Images/Ilaivadam(plain) photo.png" alt="IlaiVadam">
      <h3> Ilaivadam - ₹280/kg</h3>
      <button onclick="addToCart(3)">Add to Cart</button>
    </div>
    <div class="product" data-id="4" data-name="Parupu podi" data-price="₹250/kg">
      <img src="../Images/parupu podi.png" alt="Parupu podi">
      <h3> Parupu podi - ₹250/kg</h3>
      <button onclick="addToCart(4)">Add to Cart</button>
    </div>
    <div class="product" data-id="5" data-name="Pudhina podi" data-price="₹250/kg">
      <img src="../Images/pudhina podi.png" alt="Pudhina podi">
      <h3> Pudhina podi - ₹250/kg</h3>
      <button onclick="addToCart(5)">Add to Cart</button>
    </div>
    <div class="product" data-id="6" data-name="Coconut podi" data-price="₹250/kg">
      <img src="../Images/CoconutPodi3.png" alt="Coconut podi">
      <h3> Coconut podi - ₹250/kg</h3>
      <button onclick="addToCart(6)">Add to Cart</button>
    </div>
  </div>

 <h1 class="heading"> Your<span>Cart</span></h1>
  <div class="cart" id="cart-list">
  </div>
  <div class="total" id="cart-total">Total: ₹0</div>
</div>
<div class="checkout-container">
    <button class="checkout-btn "onclick="promptLogin(event)">Proceed to Checkout</button>
</div>
<script>
  const cart = {};

  const products = {
    1: { name: "Javvarusi Vadam", price: 350 },
    2: { name: "Katta Vadam", price: 300 },
    3: { name: "IlaiVadam", price: 280 },
    4: { name: "Parupu podi", price: 250 },
    5: { name: "Pudhina podi", price: 250 },
    6: { name: "Coconut podi", price: 250 },
  };

  function addToCart(id) {
    if (cart[id]) {
      cart[id].quantity += 1;
    } else {
      cart[id] = { ...products[id], quantity: 1 };
    }
    renderCart();
  }

  function changeQuantity(id, change) {
    if (cart[id]) {
      cart[id].quantity += change;
      if (cart[id].quantity <= 0) delete cart[id];
    }
    renderCart();
  }

  function renderCart() {
    const cartList = document.getElementById("cart-list");
    const totalEl = document.getElementById("cart-total");
    cartList.innerHTML = '';
    let total = 0;

    for (let id in cart) {
      const item = cart[id];
      total += item.price * item.quantity;

      cartList.innerHTML += `
        <div class="cart-item">
          <h4>${item.name} - ₹${item.price}</h4>
          <div class="quantity">
            <button onclick="changeQuantity(${id}, -1)">-</button>
            <span>${item.quantity}</span>
            <button onclick="changeQuantity(${id}, 1)">+</button>
          </div>
        </div>
      `;
    }

    totalEl.innerText = "Total: ₹" + total;
  }
  function promptLogin(event) {
  event.preventDefault(); // Prevent default form/button behavior

  // Show confirmation or alert
  const proceed = confirm("Thanks for Shopping with us !");
  
  if (proceed) {
    // Redirect to index.php
    window.location.href = "index.php";
  }
}
</script>

</body>
</html>
