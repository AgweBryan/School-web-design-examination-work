<style>
  * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
  }

  .pics {
    width: 100px;
    height: 100px;
  }
  .pics img {
    width: 100%;
    height: 100%;
  }

  .cart-overlay {
    width: 400px;
    background: blue;
    position: absolute;
    right: 1rem;
    z-index: 999;
    background: white;
    color: #000;
    padding: 0 1.5rem 1.5rem 1.5rem;
    transition: all 1s ease-out;
  }

  .cartHeader {
    padding: 1rem 0 0 0;
    margin-bottom: 1rem;
    border-bottom:1px solid black;
  }

  .bottom {
    padding: 1rem 0;
    justify-content: space-between;
  }

  .bottom button {
    background: #ffc10f !important;
    color: black;
  }

  .theCloser {
    border: none;
    padding: .1rem .5rem;
    border-radius: 3px;
  }

  .main-header {
    box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.4);
    border-bottom: 3px solid #ffc10f !important;
  }

</style>


<header id='navigationer'>
  <div class="main-header">

    <div class="container">

      <!--<nav class="nav-top">

        <div class="row">
          <div class="col-7">
            <div class="socialLinks">
              <a href="#" class='btn'><i class="fab fa-facebook-f"></i></a>
              <a href="#" class='btn'><i class="fab fa-twitter"></i></a>
              <a href="#" class='btn'><i class="fab fa-whatsapp"></i></a>
              <a href="#" class='btn'><i class="fab fa-instagram"></i></a>
              <a href="#" class='btn'><i class="fab fa-linkedin"></i></a>
            </div>
          </div>
          <div class="col">
            <div class="languages float-right">

              <div class="btn-group dropdown">

               
                <button id="my-dropdown" class="btn dropdown-toggle" data-toggle="dropdown">English
                </button>

                <div class="dropdown-menu">
                  <a class="dropdown-item active" href="#">English</a>
                  <a class="dropdown-item" href="#">French</a>
                  <a class="dropdown-item" href="#">Spanish</a>
                </div>

              </div>
              
              
              <div class="btn-group dropdown">

                <button id="my-dropdown" class="btn dropdown-toggle" data-toggle="dropdown">USD
                </button>

                <div class="dropdown-menu">
                  <a class="dropdown-item active" href="#">Francs</a>
                  <a class="dropdown-item" href="#">Rand</a>
                  <a class="dropdown-item" href="#">Euros</a>
                </div>

              </div>
              
              
              <div class="btn-group dropdown">

                <button id="my-dropdown" class="btn dropdown-toggle" data-toggle="dropdown">My Account
                </button>

                <div class="dropdown-menu">
                  <a class="dropdown-item active" href="#">Login</a>
                  <a class="dropdown-item" href="#">Signup</a>
                </div>

              </div>

            </div>
          </div>
        </div>

      </nav>-->

     <!-- <nav class="nav-middle py-3">
        <div class="row">
          <div class="col-4">
            <div class="webLink mt-3">
              <p><span>A<span class='text-amber'>B</span></span> <a href="https://agwetech.netlify.app" class='text-secondary'>agwetech.netlify.app</a></p>
            </div>
          </div>
          <div class="col-4 pageHeader text-center">
            <h1 class='text-secondary'><strong>Agwe<span class='text-amber'>Bryan</span></strong></h1>
          </div>
          <div class="col-4">
            <div class="d-flex align-items-center mt-3 float-right pr-5">
              <i class="fa fa-search mr-4" aria-hidden="true"></i>
              <i class="fa fa-heart mr-3" aria-hidden="true"></i>
              <i class="fa fa-cart-plus mr-3" aria-hidden="true"></i>
              <span>232323.23 <i class="fa fa-caret-down" aria-hidden="true"></i></span>
            </div>
          </div>
        </div>
      </nav>
   -->
   <nav class="nav-bottom">
       <div class="main-nav">
          <input type="checkbox" name="check" id="checked">

          <h1 class='text-secondary hit'><strong>Agwe<span class='text-amber'>Bryan</span></strong></h1>
         
          <h1 class='text-secondary hit2'><strong><span class='text-amber'>CEC</span>319 Exams</strong></h1>

          <div class="links navigationer ml-auto">
           <ul class="links">
             <li class="link btn"><a href="index.php">Home</a></li>
             <li class="link btn"><a href="./about.php">About</a></li>
             <li class="link btn"><a href="./index.php?must log in to access Services">Services</a></li>
             <button class='btn' data-toggle='collapse' data-target='.collapse'>View Cart</button>
             <li class="dropdown">
               <button id="my-dropdown" class="btn dropdown-toggle" data-toggle="dropdown">Toggle Boxes</button>
               <div class="dropdown-menu" aria-labelledby="my-dropdown">
                 <button class="btn dropdown-item" data-target='.box1' data-toggle='collapse'>Box 1</button>
                 <button class="btn dropdown-item" data-target='.box2' data-toggle='collapse'>Box 2</button>
                 <button class="btn dropdown-item" data-target='.box3' data-toggle='collapse'>Box 3</button>
                 <button class="btn dropdown-item" data-target='.portfolio' data-toggle='collapse'>All Boxes</button>
               </div>
             </li>
           </ul>
          </div>

          <label for="checked" class='hamburger'>
           <label for="checked" class='hamburger_icon'></label>
          </label>

       </div>

       

     </nav>

    </div>

  </div>
</header>


<!-- cart starts here -->
<div class="cart-overlay collapse">
  <div class="cart">
    <div class="cart__inner">
      <div class="cartHeader">
        <button class='theCloser float-right'><i class="fa fa-times" data-toggle='collapse' data-target='.collapse' aria-hidden="true"></i></button>
        <p>You have 2 items in the cart</p>
      </div>

      <div class="row">

        <div class="col-4 pics">
          <img src="./images/shoe3.jpg" alt="" class="img-fluids">
        </div>

        <div class="col-lg-8 col-md-5 col-sm-5 text-left">
          <div>Woman</div>
          <div class="lead">Ring</div>
          <div><del>25,000frs</del> <span class='text-amber'>50,000frs</span></div>
        </div>
              
      </div>
    
      <br>
    
      <div class="row">

        <div class="col-4 pics">
          <img src="./images/shoe2.jpg" alt="" class="img-fluids">
        </div>

        <div class="col-lg-8 col-md-5 col-sm-5 text-left">
          <div>Woman</div>
          <div class="lead">Ring</div>
          <div><del>25,000frs</del> <span class='text-amber'>50,000frs</span></div>
        </div>
              
      </div>

      <div class="d-flex bottom">
      <h3>Total = 100,000 <span class='text-amber'>Frs</span></h3>
      <button class='proceed btn btn-sm' data-toggle='collapse' data-target='.collapse'>Proceed</button>
      </div>
    </div>
  </div>
</div>

<script>
  // ####  Navbar Javascript  ####

  let navbar = document.getElementById("navigationer");
  window.addEventListener("scroll", function () {
    let scrollHeight = window.pageYOffset;
    let navHeight = navbar.getBoundingClientRect().height;
    if (scrollHeight > navHeight) {
      navbar.classList.add("fixed-top");
    } else {
      navbar.classList.remove("fixed-top");
    }
  });
</script>