<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Product</title>
  <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />
  <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" />
  <link rel="stylesheet" href="../Css/nav&footer.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <style>
    .btn:hover {
      background-color: whitesmoke;
      color: black;
    }
  </style>
</head>

<body class="overflow-x-hidden">
  <?php
  include 'newNav.php';
  ?>
  <section>
    <div>
      <div class="row my-2">
        <div id="carouselExampleCaptions" class="carousel slide">
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
          </div>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="../images/carousel-img5.jpg" class="d-block w-100" alt="...">
              <div class="carousel-caption d-none d-md-block">
                <h5>First slide label</h5>
                <p>Some representative placeholder content for the first slide.</p>
              </div>
            </div>
            <div class="carousel-item">
              <img src="../images/carousel-img3.jpg" class="d-block w-100" alt="...">
              <div class="carousel-caption d-none d-md-block">
                <h5>Second slide label</h5>
                <p>Some representative placeholder content for the second slide.</p>
              </div>
            </div>
            <div class="carousel-item">
              <img src="../images/carousel-img4.jpg" class="d-block w-100" alt="...">
              <div class="carousel-caption d-none d-md-block">
                <h5>Third slide label</h5>
                <p>Some representative placeholder content for the third slide.</p>
              </div>
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon bg-black rounded" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon bg-black rounded" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>
      <h3 class="ms-3 mt-3">Nike</h3>
      <div class="row g-4 mx-3">
        <div class="col-lg-3 col-md-4 col-12">
          
            <div class="bg-light fw-bold px-2 py-3 shadow">
              <img
                src="../images/shoe-1.png"
                alt=""
                class="img-fluid border border-1" />
              <span class="col-12 d-block">
                <i class="bi bi-star"></i>
                <i class="bi bi-star"></i>
                <i class="bi bi-star"></i>
                <i class="bi bi-star"></i>
                <i class="bi bi-star"></i>
              </span>
              <span class="d-flex justify-content-between">
                <p>Product Name</p>
                <p>$50.00</p>
              </span>
          
          <div class="d-flex justify-content-between">
            <button class="btn btn-dark">
              Add to Cart <span><i class="bi bi-cart2"></i></span>
            </button>
            <button class="btn btn-danger">
              Save <span><i class="bi bi-heart"></i></span>
            </button>
          </div>
        </div>

      </div>
      <div class="col-lg-3 col-md-4 col-12">
        <div class="bg-light fw-bold px-2 py-3 shadow">
          <img
            src="../images/shoe-2.png"
            alt=""
            class="img-fluid border border-1" />
          <span>
            <i class="bi bi-star"></i>
            <i class="bi bi-star"></i>
            <i class="bi bi-star"></i>
            <i class="bi bi-star"></i>
            <i class="bi bi-star"></i>
          </span>
          <span class="d-flex justify-content-between">
            <p>Product Name</p>
            <p>$50.00</p>
          </span>
          <div class="d-flex justify-content-center">
            <button class="btn btn-dark">
              Add to Cart <span><i class="bi bi-cart2"></i></span>
            </button>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-4 col-12">
        <div class="bg-light fw-bold px-2 py-3 shadow">
          <img
            src="../images/shoe-3.png"
            alt=""
            class="img-fluid border border-1" />
          <span>
            <i class="bi bi-star"></i>
            <i class="bi bi-star"></i>
            <i class="bi bi-star"></i>
            <i class="bi bi-star"></i>
            <i class="bi bi-star"></i>
          </span>
          <span class="d-flex justify-content-between">
            <p>Product Name</p>
            <p>$50.00</p>
          </span>
          <div class="d-flex justify-content-center">
            <button class="btn btn-dark">
              Add to Cart <span><i class="bi bi-cart2"></i></span>
            </button>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-4 col-12">
        <div class="bg-light fw-bold px-2 py-3 shadow">
          <img
            src="../images/shoe-4.png"
            alt=""
            class="img-fluid border border-1" />
          <span>
            <i class="bi bi-star"></i>
            <i class="bi bi-star"></i>
            <i class="bi bi-star"></i>
            <i class="bi bi-star"></i>
            <i class="bi bi-star"></i>
          </span>
          <span class="d-flex justify-content-between">
            <p>Product Name</p>
            <p>$50.00</p>
          </span>
          <div class="d-flex justify-content-center">
            <button class="btn btn-dark">
              Add to Cart <span><i class="bi bi-cart2"></i></span>
            </button>
          </div>
        </div>
      </div>
    </div>
    <h3 class="ms-3 mt-3">Jordan</h3>
    <div class="row g-4 mx-3 mt-3">
      <div class="col-lg-3 col-md-4 col-12">
        <div class="bg-light fw-bold px-2 py-3 shadow">
          <img
            src="../images/shoe-5.png"
            alt=""
            class="img-fluid border border-1" />
          <span>
            <i class="bi bi-star"></i>
            <i class="bi bi-star"></i>
            <i class="bi bi-star"></i>
            <i class="bi bi-star"></i>
            <i class="bi bi-star"></i>
          </span>
          <span class="d-flex justify-content-between">
            <p>Product Name</p>
            <p>$50.00</p>
          </span>
          <div class="d-flex justify-content-center">
            <button class="btn btn-dark">
              Add to Cart <span><i class="bi bi-cart2"></i></span>
            </button>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-4 col-12">
        <div class="bg-light fw-bold px-2 py-3 shadow">
          <img
            src="../images/shoe-6.png"
            alt=""
            class="img-fluid border border-1" />
          <span>
            <i class="bi bi-star"></i>
            <i class="bi bi-star"></i>
            <i class="bi bi-star"></i>
            <i class="bi bi-star"></i>
            <i class="bi bi-star"></i>
          </span>
          <span class="d-flex justify-content-between">
            <p>Product Name</p>
            <p>$50.00</p>
          </span>
          <div class="d-flex justify-content-center">
            <button class="btn btn-dark">
              Add to Cart <span><i class="bi bi-cart2"></i></span>
            </button>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-4 col-12">
        <div class="bg-light fw-bold px-2 py-3 shadow">
          <img
            src="../images/shoe-7.png"
            alt=""
            class="img-fluid border border-1" />
          <span>
            <i class="bi bi-star"></i>
            <i class="bi bi-star"></i>
            <i class="bi bi-star"></i>
            <i class="bi bi-star"></i>
            <i class="bi bi-star"></i>
          </span>
          <span class="d-flex justify-content-between">
            <p>Product Name</p>
            <p>$50.00</p>
          </span>
          <div class="d-flex justify-content-center">
            <button class="btn btn-dark">
              Add to Cart <span><i class="bi bi-cart2"></i></span>
            </button>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-4 col-12">
        <div class="bg-light fw-bold px-2 py-3 shadow">
          <img
            src="../images/shoe-8.png"
            alt=""
            class="img-fluid border border-1" />
          <span>
            <i class="bi bi-star"></i>
            <i class="bi bi-star"></i>
            <i class="bi bi-star"></i>
            <i class="bi bi-star"></i>
            <i class="bi bi-star"></i>
          </span>
          <span class="d-flex justify-content-between">
            <p>Product Name</p>
            <p>$50.00</p>
          </span>
          <div class="d-flex justify-content-center">
            <button class="btn btn-dark">
              Add to Cart <span><i class="bi bi-cart2"></i></span>
            </button>
          </div>
        </div>
      </div>
    </div>
    </div>
  </section>
  <?php
  include 'footer.php';
  ?>
</body>

</html>