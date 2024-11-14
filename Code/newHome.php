<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../Css/newhome.css">
    <link rel="stylesheet" href="../Css/nav&footer.css">
    <link rel="stylesheet" href="../Css/slide.css">
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" />

    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous"
        referrerpolicy="no-referrer" />
        <!-- <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
      /> -->
</head>

<body>
    <header>
        <?php
        include 'newNav.php';
        ?>
    </header>
    <div class="container mt-3">
        <div class="">
            <div class="image-text-container border border-black rounded position-relative">
                <img src="../images/carousel-img5.jpg" class="d-block w-100" alt="Nike Air Force 1 Shadow">
                <div class="text-overlay d-none d-md-block position-absolute">
                    <h5>Nike Air Force 1 Shadow</h5>
                    <p>
                        The Nike Air Force 1 Shadow puts a playful spin on a classic basketball silhouette.
                        The AF1's DNA is highlighted by the layered aesthetic, dual branding and oversized midsole of this bold new model.
                    </p>
                    <a href="#">
                        <button class="btn btn-danger">See More</button>
                    </a>
                </div>
                <div class="text-side d-md-none px-3 py-3">
                    <h5>Nike Air Force 1 Shadow</h5>
                    <p>
                        The Nike Air Force 1 Shadow puts a playful spin on a classic basketball silhouette.
                        The AF1's DNA is highlighted by the layered aesthetic, dual branding and oversized midsole of this bold new model.
                    </p>
                    <a href="#">
                        <button class="btn btn-danger">See More</button>
                    </a>
                </div>
            </div>
        </div>
        <!-- <div class="mt-2">
                <div class="image-text-container border border-black rounded position-relative">
                    <img src="../images/carousel-img3.jpg" class="d-block w-100" alt="Nike Air Force 1 Shadow">
                    <div class="text-overlay d-none d-md-block position-absolute">
                        <h5>Nike Air Force 1 Shadow</h5>
                        <p>
                            The Nike Air Force 1 Shadow puts a playful spin on a classic basketball silhouette.
                            The AF1's DNA is highlighted by the layered aesthetic, dual branding and oversized midsole of this bold new model.
                        </p>
                        <a href="#">
                            <button class="btn btn-danger">See More</button>
                        </a>
                    </div>
                    <div class="text-side d-md-none px-3 py-3">
                        <h5>Nike Air Force 1 Shadow</h5>
                        <p>
                            The Nike Air Force 1 Shadow puts a playful spin on a classic basketball silhouette.
                            The AF1's DNA is highlighted by the layered aesthetic, dual branding and oversized midsole of this bold new model.
                        </p>
                        <a href="#">
                            <button class="btn btn-danger">See More</button>
                        </a>
                    </div>
                </div>
            </div> -->
    </div>
    <?php
        include 'slide.php';
    ?>
    <section class=" py-2 my-2 py-md-5 my-md-5">
        <div class="container border border-3 bg-grey">
            <div class="position-relative p-5">
                <div class=" bold-text position-absolute">10% OFF</div>
                <div class="row justify-content-between align-items-center" >
                    <div class="col-lg-7 col-md-12 mb-3">
                        <div>
                            <h2 class="coupon">10% OFF Discount Coupons</h2>
                            <p class="m-0">Subscribe us to get 10% OFF on all the purchases</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-12">
                        <button class="btn btn-dark email" >
                            Email me
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="latest-products" class="my-2 py-2">
        <div class="container-md">
            <div class=" d-flex align-items-center justify-content-between">
                <h2 class="title">Latest Products</h2>
                <div class="top">
                    <nav><a href="#" class="fs-4">View all</a></nav>
                </div>
            </div>
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4 mx-1">
                <div class="col">
                    <img src="../images/shoe-1.png" alt="" class="img-fluid w-70">
                    <span class="d-flex justify-content-between my-3">
                        <p>Product Name</p>
                        <p>$50.00</p>
                    </span>
                </div>
                <div class="col">
                    <img src="../images/shoe-2.png" alt="" class="img-fluid w-70">
                    <span class="d-flex justify-content-between my-3">
                        <p>Product Name</p>
                        <p>$50.00</p>
                    </span>
                </div>
                <div class="col">
                    <img src="../images/shoe-3.png" alt="" class="img-fluid w-70">
                    <span class="d-flex justify-content-between my-3">
                        <p>Product Name</p>
                        <p>$50.00</p>
                    </span>
                </div>
                <div class="col">
                    <img src="../images/shoe-4.png" alt="" class="img-fluid w-70">
                    <span class="d-flex justify-content-between my-3">
                        <p>Product Name</p>
                        <p>$50.00</p>
                    </span>
                </div>
            </div>
        </div>
    </section>
    <footer>
        <?php
        include 'footer.php';
        ?>
    </footer>
</body>

</html>