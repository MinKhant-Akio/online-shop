<!-- Desktop Nav -->
<nav class="nav container flex">
      <div class="nav__logo flex">
        <img src="../images/fashionlogo.jpg" alt="" />
        <div class="nav__logo-headings flex">
          <h1>Fashion</h1>
          <h1>World Hello</h1>
        </div>
      </div>
      <!-- desktop nav links -->
      <ul class="nav__links flex">
        <li><a href="">Home</a></li>
        <li><button onclick="category_dialog.showModal()">Products</button></li>
        <li>
          <a href="" class="flex">Cart<i class="bx bx-cart"></i></a>
        </li>
        <li><a href="../Code/aboutUs.html">About</a></li>
        <li><a href="">Contact</a></li>
        <li class="nav__links-line"></li>
        <li><button class="btn" name="Login">Login</button></li>
      </ul>

      <button class="nav__menu-btn" onclick="mobile_menu.showModal()">
        <i class="bx bx-menu"></i>
      </button>
    </nav>

    <!-- mobile menu links -->
    <dialog id="mobile_menu" class="nav__mobile">
      <ul class="nav__mobile-links flex">
        <li><a href="#">Home</a></li>
        <li><button onclick="category_dialog.showModal()">Products</button></li>
        <li>
          <a href="" class="flex">Cart<i class="bx bx-cart"></i></a>
        </li>
        <li><a href="../Code/aboutUs.html">About</a></li>
        <li><a href="#">Contact</a></li>
        <li class="nav__mobile-links-line"></li>
        <li><button class="btn" name="login?click=do">Login</button></li>
        <li>
          <button class="nav__menu-btn" onclick="mobile_menu.close()">
            <i class="bx bx-x-circle"></i>
          </button>
        </li>
      </ul>
    </dialog>

    <!-- Category -->
    <dialog id="category_dialog" class="flex">
      <div class="category flex">
        <div class="category__men">
          <h2>Men</h2>
          <div class="category-clothing flex">
            <a href="#">Hats</a>
            <a href="#">Jewelry</a>
            <a href="#">Suits</a>
            <a href="../Code/product.php">Shoes</a>
          </div>
        </div>
        <div class="category__women">
          <h2>Women</h2>
          <div class="category-clothing flex">
            <a href="#">Hats</a>
            <a href="#">Jewelry</a>
            <a href="#">Dresses</a>
            <a href="../Code/product.php">Shoes</a>
          </div>
        </div>
        <div class="category__children">
          <h2>Children</h2>
          <div class="category-clothing flex">
            <a href="#">Hats</a>
            <a href="#">Jewelry</a>
            <a href="#">One-sets</a>
            <a href="../Code/product.php">Shoes</a>
          </div>
        </div>
      </div>
      <button class="category-back flex" onclick="category_dialog.close()">
        <i class="bx bx-chevron-left"></i>
        <span>Go Back</span>
      </button>
    </dialog>