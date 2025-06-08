<!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Malu's Spices</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" type="text/css" href="style.css">

    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css">

 </head>
 <body>
   <header class="header">

   <a href="#"class="logo">
      <i class="fa fa-shopping-basket"> </i> Malu's Spices
   </a>   

   <nav class="navbar">
      <a href="#home">home</a>
      <a href="#about">about</a>
      <a href="#categories">categories</a>
      <a href="#products">products</a>
      <a href="#customers">customers</a>
   </nav>

   <div class="icons">
      <div class="fa fa-bars" id="menu-btn"></div>
      <div class="fa fa-search" id="search-btn"></div>
      <div class="fa fa-shopping-cart" id="cart-btn"></div>
      <div class="fa fa-user" id="login-btn"></div>
   </div>

   <form class="search-form">
      <input type="search" id="search-box" placeholder="Search here...">
      <label for="search-box" class="fa fa-search"></label>
   </form>

   <div class="shopping-cart">
      <div class="box">
         <i class="fa fa-trash"></i>
         <img src="../Images/reviewimage.png"  width="100px">
         <div class="content">
            <h3>Item 1 </h3>
            <span class="price">110 rs/-</span>
            <span class="quantity"> Qty : 1 </span>
         </div>
      </div>

      <div class="box">
         <i class="fa fa-trash"></i>
         <img src="../Images/reviewimage.png" >
         <div class="content">
            <h3>Item 2</h3>
            <span class="price">100 rs/- </span>
            <span class="quantity"> Qty : 1 </span>
         </div>
      </div>

      <div class="box">
         <i class="fa fa-trash"></i>
         <img src="../Images/reviewimage.png" >
         <div class="content">
            <h3>Item 3</h3>
            <span class="price">150 rs/- </span>
            <span class="quantity"> Qty : 1 </span>
         </div>
      </div>

      <div class="total">total : 360 rs/- </div>
      <a href="#"class="btn">Checkout</a>
   </div>
   
   <form action="login.php" method="POST" class="login-form">
    <h3>Login Now</h3><br>
    <input type="email" name="email" placeholder="Enter your email" class="box" required>
    <input type="password" name="password" placeholder="Enter your password" class="box" required>
    <p>Forgot Your Password <a href="#">Click Here</a></p>
    <p>Don't Have An Account <a href="signup.html">Create Now</a></p>
    <input type="submit" name="login" value="Login Now" class="btn">
</form>
   </header>
   <section class="home" id="home">
      <div class="content">
         <h3>Fresh And Organic Products For You</h3> <br>
         <p> “A little bit of everything.” </p> <p> “A family that eats together stays together.”</p>
         <p>“Its not just a meal, its an experience.”</p>
         <a href="#categories" class="btn"onclick="promptLogin(event)">Shop Now</a>
        </div>
   </section>

   <section class="about" id="about">

    <div class="about-text">
      <h1 class="heading"><span> About</span> Us</h1>
      <div class="box">
          <img src="../Images/cover page pic 2.png" >
          <div class="content">
              <p>Our main goal is to provide people with mouthwatering dishes that are not only delicious but also nutritious. This drove us to explore the concept of making vathal. Our vathals, pickles, and podi are meticulously prepared at home with no artificial additives, ensuring a pure and wholesome taste.We are thrilled that our creations have resonated with a wide audience, including our children who have embraced these dishes wholeheartedly.</p>
              <a href="#" class="btn" onclick="promptLogin(event)">Shop Now</a>
          </div>
      </div>
  </div>
  
  </section>

   <section class="categories" id="categories">
      <h1 class="heading">product <span> categories</span></h1>
      <div class="box-container">
         <div class="box">
         <img src="../Images/plain javarusi.png">
         <h3>Vathal</h3>
         <p> 10 Items</p>
         <a href="#" class="btn" onclick="promptLogin(event)">Shop Now</a>
         </div>

         <div class="box">
            <img src="../Images/spices.png">
            <h3>Spices</h3>
            <p> 3 Items</p>
            <a href="#" class="btn"onclick="promptLogin(event)">Shop Now</a>
            </div>

            <div class="box">
               <img src="../Images/pickle.png">
               <h3>Pickles</h3>
               <p> 2 Items</p>
               <a href="#" class="btn"onclick="promptLogin(event)" >Shop Now</a>
               </div>

      </div>
   </section>

   <section class="products" id="products">
      <h1 class="heading">Our <span>products</span></h1>
      <div class="swiper product-slider">
        <div class="swiper-wrapper">
          <div class="swiper-slide box">
            <img src="../Images/vadam.png" alt="Javvarusi Vadam">
            <h1>Javvarusi Vadam</h1>
            <div class="price">Rs. 350/kg</div>
            <div class="stars">
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star-half"></i>
            </div>
            <a href="#" class="btn"onclick="promptLogin(event)">Add to cart</a>
          </div>
    
          <div class="swiper-slide box">
            <img src="../Images/Javvarusi(tomato) photo.png" alt="Javvarusi Tomato Vadam">
            <h1>Javvarusi Tomato Vadam</h1>
            <div class="price">Rs. 350/kg</div>
            <div class="stars">
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star-half"></i>
            </div>
            <a href="#" class="btn"onclick="promptLogin(event)">Add to cart</a>
          </div>
    
          <div class="swiper-slide box">
            <img src="../Images/Javvarusi(pudhina) photo.png" alt="Javvarusi Pudhina Vadam">
            <h1>Javvarusi Pudhina Vadam</h1>
            <div class="price">Rs. 350/kg</div>
            <div class="stars">
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star-half"></i>
            </div>
            <a href="#" class="btn"onclick="promptLogin(event)">Add to cart</a>
          </div>
    
          <div class="swiper-slide box">
            <img src="../Images/Javvarusi(garlic) photo.png" alt="Javvarusi Garlic Vadam">
            <h1>Javvarusi Garlic Vadam</h1>
            <div class="price">Rs. 350/kg</div>
            <div class="stars">
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
            </div>
            <a href="#" class="btn"onclick="promptLogin(event)">Add to cart</a>
          </div>
    
          <div class="swiper-slide box">
            <img src="../Images/Ilaivadam(plain) photo.png" alt="Ilaivadam">
            <h1>Ilaivadam</h1>
            <div class="price">Rs. 450/kg</div>
            <div class="stars">
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
            </div>
            <a href="#" class="btn"onclick="promptLogin(event)">Add to cart</a>
          </div>
    
          <div class="swiper-slide box">
            <img src="../Images/Ilaivadam(tomato) photo.png" alt="Ilaivadam Tomato">
            <h1>Ilaivadam Tomato</h1>
            <div class="price">Rs. 450/kg</div>
            <div class="stars">
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
            </div>
            <a href="#" class="btn"onclick="promptLogin(event)">Add to cart</a>
          </div>
    
          <div class="swiper-slide box">
            <img src="../Images/Ilaivadam(pudhina) photo.png" alt="Ilaivadam Pudhina">
            <h1>Ilaivadam Pudhina</h1>
            <div class="price">Rs. 450/kg</div>
            <div class="stars">
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star-half"></i>
            </div>
            <a href="#" class="btn"onclick="promptLogin(event)">Add to cart</a>
          </div>
          
        </div>
      </div>
      <div class="swiper product-slider">
         <div class="swiper-wrapper">
           <div class="swiper-slide box">
             <img src="../Images/Kattaivadam photo.png" alt="Kattaivadam">
             <h1>Kattaivadam</h1>
             <div class="price">Rs. 350/kg</div>
             <div class="stars">
               <i class="fa fa-star"></i>
               <i class="fa fa-star"></i>
               <i class="fa fa-star"></i>
               <i class="fa fa-star"></i>
               <i class="fa fa-star-half"></i>
             </div>
             <a href="#" class="btn"onclick="promptLogin(event)">Add to cart</a>
           </div>
       
           <div class="swiper-slide box">
             <img src="../Images/Onion vadam photo.png" alt="Onion Vadam">
             <h1>Onion Vadam</h1>
             <div class="price">Rs. 350/kg</div>
             <div class="stars">
               <i class="fa fa-star"></i>
               <i class="fa fa-star"></i>
               <i class="fa fa-star"></i>
               <i class="fa fa-star-half"></i>
             </div>
             <a href="#" class="btn"onclick="promptLogin(event)">Add to cart</a>
           </div>
       
           <div class="swiper-slide box">
             <img src="../Images/Omapudi photo.png" alt="Ompudi Vadam">
             <h1>Ompudi Vadam</h1>
             <div class="price">Rs. 350/kg</div>
             <div class="stars">
               <i class="fa fa-star"></i>
               <i class="fa fa-star"></i>
               <i class="fa fa-star"></i>
               <i class="fa fa-star-half"></i>
             </div>
             <a href="#" class="btn"onclick="promptLogin(event)">Add to cart</a>
           </div>
       
           <div class="swiper-slide box">
             <img src="../Images/parupu podi.png" alt="Paruppu Podi">
             <h1>Paruppu Podi</h1>
             <div class="price">Rs. 200/kg</div>
             <div class="stars">
               <i class="fa fa-star"></i>
               <i class="fa fa-star"></i>
               <i class="fa fa-star"></i>
               <i class="fa fa-star"></i>
             </div>
             <a href="#" class="btn"onclick="promptLogin(event)">Add to cart</a>
           </div>
       
           <div class="swiper-slide box">
             <img src="../Images/pudhina podi.png" alt="Pudhina Podi">
             <h1>Pudhina Podi</h1>
             <div class="price">Rs. 200/kg</div>
             <div class="stars">
               <i class="fa fa-star"></i>
               <i class="fa fa-star"></i>
               <i class="fa fa-star"></i>
               <i class="fa fa-star"></i>
             </div>
             <a href="#" class="btn"onclick="promptLogin(event)">Add to cart</a>
           </div>
       
           <div class="swiper-slide box">
             <img src="../Images/CoconutPodi3.png" alt="Coconut Podi">
             <h1>Coconut Podi</h1>
             <div class="price">Rs. 200/kg</div>
             <div class="stars">
               <i class="fa fa-star"></i>
               <i class="fa fa-star"></i>
               <i class="fa fa-star"></i>
               <i class="fa fa-star"></i>
             </div>
             <a href="#" class="btn"onclick="promptLogin(event)">Add to cart</a>
           </div>
       
           <div class="swiper-slide box">
             <img src="../Images/mango-pickle.png" alt="Mango Pickle">
             <h1>Mango Pickle</h1>
             <div class="price">Rs. 400/kg</div>
             <div class="stars">
               <i class="fa fa-star"></i>
               <i class="fa fa-star"></i>
               <i class="fa fa-star"></i>
               <i class="fa fa-star-half"></i>
             </div>
             <a href="#" class="btn"onclick="promptLogin(event)">Add to cart</a>
           </div>
       
           <div class="swiper-slide box">
             <img src="../Images/lemonpickle.png" alt="Lemon Pickle">
             <h1>Lemon Pickle</h1>
             <div class="price">Rs. 400/kg</div>
             <div class="stars">
               <i class="fa fa-star"></i>
               <i class="fa fa-star"></i>
               <i class="fa fa-star"></i>
               <i class="fa fa-star-half"></i>
             </div>
             <a href="#" class="btn">Add to cart</a>
           </div>
         </div>
       </div>
      
      </section>

      <section class="customers" id="customers">
        <h1 class="heading">Customer's <span> Reviews</span></h1>
        <div class=" swiper review-slider">
          <div class="swiper-wrapper">
            <div class="swiper-slide box">
              <img src="../Images/reviewimage.png">
              <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Est perspiciatis dignissimos nobis, magni nam ad quibusdam necessitatibus consequatur aspernatur harum!</p>
            <h3>Person 1</h3>
            <div class="stars">
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star-half"></i>
            </div>
            </div>

            <div class="swiper-slide box">
              <img src="../Images/reviewimage.png">
              <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Est perspiciatis dignissimos nobis, magni nam ad quibusdam necessitatibus consequatur aspernatur harum!</p>
            <h3>Person 2</h3>
            <div class="stars">
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star-half"></i>
            </div>
            </div>

            <div class="swiper-slide box">
              <img src="../Images/reviewimage.png">
              <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Est perspiciatis dignissimos nobis, magni nam ad quibusdam necessitatibus consequatur aspernatur harum!</p>
            <h3>Person 3</h3>
            <div class="stars">
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
            </div>
            </div>
            
            <div class="swiper-slide box">
              <img src="../Images/reviewimage.png">
              <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Est perspiciatis dignissimos nobis, magni nam ad quibusdam necessitatibus consequatur aspernatur harum!</p>
            <h3>Person 4</h3>
            <div class="stars">
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
            </div>
            </div>

          </div>
        </div>

      </section>

   <section class="footer">

    <div class="box-container">
      <div class="box">
        <h3>Malu's Spices  <i class="fa fa-shopping-basket"> </i> </h3>
        <p> Follow us on Social media platform 
          to know about Our offers and updates ,
          Here the Link is provided below .
        </p>
       <div class="share"> 
        <a href="#https://www.instagram.com/maluspices_?igsh=YmZqamNuaTlubzBy" class="fa fa-instagram">&nbsp; Instagram</a>
       </div>
      </div>

      <div class="box">
        <h3> Contact Info  </h3>
        <a href="#" class="links"><i class="fa fa-phone"></i>     +91 1234567890</a>
        <a href="#" class="links"><i class="fa fa-envelope"></i>    maluspices@gmail.com</a>
        <a href="#" class="links"><i class="fa fa-map-marker"></i>    Tamilnadu, India </a>
      </div>

      <div class="box">
        <h3> Quick Links  </h3>
        <a href="#home" class="links"><i class="fa fa-arrow-right"></i> Home</a>
        <a href="#about" class="links"><i class="fa fa-arrow-right"></i> About</a>
        <a href="#categories" class="links"><i class="fa fa-arrow-right"></i> Categories</a>
        <a href="#products" class="links"><i class="fa fa-arrow-right"></i> Products</a>
        <a href="#customers" class="links"><i class="fa fa-arrow-right"></i> Customers</a>
      </div>
    </div>

    <div class="credits">
      <span> &copy; 2024 Malu's Spices </span> | All Rights Reserved
    </div>
    </section>

      <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <script src="Javascript.js"> </script>
      
 </body>
 </html>