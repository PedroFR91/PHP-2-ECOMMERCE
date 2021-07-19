<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Tienda Móviles</title>
    <!--RECURSOS-->
    <!--Bootstrap-->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
      integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l"
      crossorigin="anonymous"
    />
    <!--Owl carousel-->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
      integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
      integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <!--Font awesome-->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
      integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <!--Custom CSS file-->
    <link rel="stylesheet" href="./style.css" />
  </head>
  <body>
    <!--Header-->
    <header id="header">
      <div class="strip d-flex justify-content-between px-4 py-1 bg-light">
        <p class="font-rale font-size-12 text-black-50 m-0">
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo
          voluptate debitis harum architecto voluptatum, quae doloribus natus
          quo sint distinctio.
        </p>
        <div class="font-rale font-size-14">
          <a href="#" class="px-3 border-right border-left text-dark">Login</a>
          <a href="#" class="px-3 border-right text-dark">Cesta (0)</a>
        </div>
      </div>
      <!--NavBar-->
      <nav class="navbar navbar-expand-lg navbar-dark color-second-bg">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Tienda de móviles</a>
          <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarNav"
            aria-controls="navbarNav"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav m-auto font-poppins">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#"
                  >En venta</a
                >
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Categoría</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#"
                  >Productos <i class="fas fa-chevron-down"></i
                ></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Blog</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#"
                  >Categorías<i class="fas fa-chevron-down"></i
                ></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Proximamente</a>
              </li>
            </ul>
            <form action="#" class="font-size-14 font-rale">
              <a href="#" class="py-2 rounded-pill color-primary-bg">
                <span class="font-size-16 px-2 text-white"
                  ><i class="fas fa-shopping-cart"></i
                ></span>
                <span class="px-3 py-2 rounded-pill text-dark bg-light">O</span>
              </a>
            </form>
          </div>
        </div>
      </nav>
    </header>
    <!--Main-->
    <main id="main-site">
      <!--Carousel1-->
      <section id="banner-area">
        <div class="owl-carousel owl-theme">
          <div class="item">
            <img src="./assets/banner1.png" alt="" />
          </div>
          <div class="item">
            <img src="./assets/banner4.jpg" alt="" />
          </div>
        </div>
      </section>
      <!--Carousel2-->
      <!--Top Sale-->
      <section id="top-sale">
        <div class="container py-5">
          <h4 class="font-Roboto font-size-20">Top Ventas</h4>
          <hr />
          <!--Carousel-->
          <div class="owl-carousel owl-theme">
            <div class="item py-2">
              <div class="product font-rale">
                <a href="#"
                  ><img
                    src="./assets/products/1.png"
                    alt="product1"
                    class="img-fluid"
                /></a>
                <div class="text-center">
                  <h6>Samsung galaxy 10</h6>
                  <div class="rating text-warning font-size-12">
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="far fa-star"></i></span>
                  </div>
                  <div class="price py-2">
                    <span>$15</span>
                  </div>
                  <button type="submit" class="btn btn-warning font-size-12">
                    Añadir a la Cesta
                  </button>
                </div>
              </div>
            </div>
            <div class="item py-2">
              <div class="product font-rale">
                <a href="#"
                  ><img
                    src="./assets/products/2.png"
                    alt="product1"
                    class="img-fluid"
                /></a>
                <div class="text-center">
                  <h6>Redmi Note 7</h6>
                  <div class="rating text-warning font-size-12">
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="far fa-star"></i></span>
                  </div>
                  <div class="price py-2">
                    <span>$15</span>
                  </div>
                  <button type="submit" class="btn btn-warning font-size-12">
                    Añadir a la Cesta
                  </button>
                </div>
              </div>
            </div>
            <div class="item py-2">
              <div class="product font-rale">
                <a href="#"
                  ><img
                    src="./assets/products/3.png"
                    alt="product1"
                    class="img-fluid"
                /></a>
                <div class="text-center">
                  <h6>Redmi Note 7 Pro</h6>
                  <div class="rating text-warning font-size-12">
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="far fa-star"></i></span>
                  </div>
                  <div class="price py-2">
                    <span>$15</span>
                  </div>
                  <button type="submit" class="btn btn-warning font-size-12">
                    Añadir a la Cesta
                  </button>
                </div>
              </div>
            </div>
            <div class="item py-2">
              <div class="product font-rale">
                <a href="#"
                  ><img
                    src="./assets/products/4.png"
                    alt="product1"
                    class="img-fluid"
                /></a>
                <div class="text-center">
                  <h6>Redmi Note 7 Pro</h6>
                  <div class="rating text-warning font-size-12">
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="far fa-star"></i></span>
                  </div>
                  <div class="price py-2">
                    <span>$15</span>
                  </div>
                  <button type="submit" class="btn btn-warning font-size-12">
                    Añadir a la Cesta
                  </button>
                </div>
              </div>
            </div>
            <div class="item py-2">
              <div class="product font-rale">
                <a href="#"
                  ><img
                    src="./assets/products/5.png"
                    alt="product1"
                    class="img-fluid"
                /></a>
                <div class="text-center">
                  <h6>Redmi Note 7 Pro</h6>
                  <div class="rating text-warning font-size-12">
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="far fa-star"></i></span>
                  </div>
                  <div class="price py-2">
                    <span>$15</span>
                  </div>
                  <button type="submit" class="btn btn-warning font-size-12">
                    Añadir a la Cesta
                  </button>
                </div>
              </div>
            </div>
            <div class="item py-2">
              <div class="product font-rale">
                <a href="#"
                  ><img
                    src="./assets/products/6.png"
                    alt="product1"
                    class="img-fluid"
                /></a>
                <div class="text-center">
                  <h6>Redmi Note 7 Pro</h6>
                  <div class="rating text-warning font-size-12">
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="far fa-star"></i></span>
                  </div>
                  <div class="price py-2">
                    <span>$15</span>
                  </div>
                  <button type="submit" class="btn btn-warning font-size-12">
                    Añadir a la Cesta
                  </button>
                </div>
              </div>
            </div>
            <div class="item py-2">
              <div class="product font-rale">
                <a href="#"
                  ><img
                    src="./assets/products/8.png"
                    alt="product1"
                    class="img-fluid"
                /></a>
                <div class="text-center">
                  <h6>Samsung galaxy 10</h6>
                  <div class="rating text-warning font-size-12">
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="far fa-star"></i></span>
                  </div>
                  <div class="price py-2">
                    <span>$15</span>
                  </div>
                  <button type="submit" class="btn btn-warning font-size-12">
                    Añadir a la Cesta
                  </button>
                </div>
              </div>
            </div>
            <div class="item py-2">
              <div class="product font-rale">
                <a href="#"
                  ><img
                    src="./assets/products/10.png"
                    alt="product1"
                    class="img-fluid"
                /></a>
                <div class="text-center">
                  <h6>Samsung galaxy 10</h6>
                  <div class="rating text-warning font-size-12">
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="far fa-star"></i></span>
                  </div>
                  <div class="price py-2">
                    <span>$15</span>
                  </div>
                  <button type="submit" class="btn btn-warning font-size-12">
                    Añadir a la Cesta
                  </button>
                </div>
              </div>
            </div>
            <div class="item py-2">
              <div class="product font-rale">
                <a href="#"
                  ><img
                    src="./assets/products/11.png"
                    alt="product1"
                    class="img-fluid"
                /></a>
                <div class="text-center">
                  <h6>Samsung galaxy 10</h6>
                  <div class="rating text-warning font-size-12">
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="far fa-star"></i></span>
                  </div>
                  <div class="price py-2">
                    <span>$15</span>
                  </div>
                  <button type="submit" class="btn btn-warning font-size-12">
                    Añadir a la Cesta
                  </button>
                </div>
              </div>
            </div>
            <div class="item py-2">
              <div class="product font-rale">
                <a href="#"
                  ><img
                    src="./assets/products/12.png"
                    alt="product1"
                    class="img-fluid"
                /></a>
                <div class="text-center">
                  <h6>Samsung galaxy 10</h6>
                  <div class="rating text-warning font-size-12">
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="far fa-star"></i></span>
                  </div>
                  <div class="price py-2">
                    <span>$15</span>
                  </div>
                  <button type="submit" class="btn btn-warning font-size-12">
                    Añadir a la Cesta
                  </button>
                </div>
              </div>
            </div>
            <div class="item py-2">
              <div class="product font-rale">
                <a href="#"
                  ><img
                    src="./assets/products/13.png"
                    alt="product1"
                    class="img-fluid"
                /></a>
                <div class="text-center">
                  <h6>Samsung galaxy 10</h6>
                  <div class="rating text-warning font-size-12">
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="far fa-star"></i></span>
                  </div>
                  <div class="price py-2">
                    <span>$15</span>
                  </div>
                  <button type="submit" class="btn btn-warning font-size-12">
                    Añadir a la Cesta
                  </button>
                </div>
              </div>
            </div>
            <div class="item py-2">
              <div class="product font-rale">
                <a href="#"
                  ><img
                    src="./assets/products/14.png"
                    alt="product1"
                    class="img-fluid"
                /></a>
                <div class="text-center">
                  <h6>Samsung galaxy 10</h6>
                  <div class="rating text-warning font-size-12">
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="far fa-star"></i></span>
                  </div>
                  <div class="price py-2">
                    <span>$15</span>
                  </div>
                  <button type="submit" class="btn btn-warning font-size-12">
                    Añadir a la Cesta
                  </button>
                </div>
              </div>
            </div>
            <div class="item py-2">
              <div class="product font-rale">
                <a href="#"
                  ><img
                    src="./assets/products/15.png"
                    alt="product1"
                    class="img-fluid"
                /></a>
                <div class="text-center">
                  <h6>Samsung galaxy 10</h6>
                  <div class="rating text-warning font-size-12">
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="far fa-star"></i></span>
                  </div>
                  <div class="price py-2">
                    <span>$15</span>
                  </div>
                  <button type="submit" class="btn btn-warning font-size-12">
                    Añadir a la Cesta
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--Special price-->
      <section class="special-price">
        <div class="container">
          <h4 class="font-roboto font-size-20">Precios Especiales</h4>
          <div id="filters" class="button-group text-right">
            <button class="btn is-checked" data-filter="*">
              Todas las marcas
            </button>
            <button class="btn" data-filter=".Apple">Apple</button>
            <button class="btn" data-filter=".Samsung">Samsung</button>
            <button class="btn" data-filter=".Redmi">Redmi</button>
          </div>
          <div class="grid">
            <div class="grid-item Apple border">
              <div class="item py-2" style="width: 200px">
                <div class="product font-rale">
                  <a href="#"
                    ><img
                      src="./assets/products/13.png"
                      alt="product1"
                      class="img-fluid"
                  /></a>
                  <div class="text-center">
                    <h6>Iphone</h6>
                    <div class="rating text-warning font-size-12">
                      <span><i class="fas fa-star"></i></span>
                      <span><i class="fas fa-star"></i></span>
                      <span><i class="fas fa-star"></i></span>
                      <span><i class="fas fa-star"></i></span>
                      <span><i class="far fa-star"></i></span>
                    </div>
                    <div class="price py-2">
                      <span>$15</span>
                    </div>
                    <button type="submit" class="btn btn-warning font-size-12">
                      Añadir a la Cesta
                    </button>
                  </div>
                </div>
              </div>
            </div>
            <div class="grid-item Samsung border">
              <div class="item py-2" style="width: 200px">
                <div class="product font-rale">
                  <a href="#"
                    ><img
                      src="./assets/products/11.png"
                      alt="product1"
                      class="img-fluid"
                  /></a>
                  <div class="text-center">
                    <h6>Samsung galaxy 10</h6>
                    <div class="rating text-warning font-size-12">
                      <span><i class="fas fa-star"></i></span>
                      <span><i class="fas fa-star"></i></span>
                      <span><i class="fas fa-star"></i></span>
                      <span><i class="fas fa-star"></i></span>
                      <span><i class="far fa-star"></i></span>
                    </div>
                    <div class="price py-2">
                      <span>$15</span>
                    </div>
                    <button type="submit" class="btn btn-warning font-size-12">
                      Añadir a la Cesta
                    </button>
                  </div>
                </div>
              </div>
            </div>
            <div class="grid-item Redmi border">
              <div class="item py-2" style="width: 200px">
                <div class="product font-rale">
                  <a href="#"
                    ><img
                      src="./assets/products/3.png"
                      alt="product1"
                      class="img-fluid"
                  /></a>
                  <div class="text-center">
                    <h6>Redmi Note 7 Pro</h6>
                    <div class="rating text-warning font-size-12">
                      <span><i class="fas fa-star"></i></span>
                      <span><i class="fas fa-star"></i></span>
                      <span><i class="fas fa-star"></i></span>
                      <span><i class="fas fa-star"></i></span>
                      <span><i class="far fa-star"></i></span>
                    </div>
                    <div class="price py-2">
                      <span>$15</span>
                    </div>
                    <button type="submit" class="btn btn-warning font-size-12">
                      Añadir a la Cesta
                    </button>
                  </div>
                </div>
              </div>
            </div>
            <div class="grid-item Apple border">
              <div class="item py-2" style="width: 200px">
                <div class="product font-rale">
                  <a href="#"
                    ><img
                      src="./assets/products/14.png"
                      alt="product1"
                      class="img-fluid"
                  /></a>
                  <div class="text-center">
                    <h6>Iphone</h6>
                    <div class="rating text-warning font-size-12">
                      <span><i class="fas fa-star"></i></span>
                      <span><i class="fas fa-star"></i></span>
                      <span><i class="fas fa-star"></i></span>
                      <span><i class="fas fa-star"></i></span>
                      <span><i class="far fa-star"></i></span>
                    </div>
                    <div class="price py-2">
                      <span>$15</span>
                    </div>
                    <button type="submit" class="btn btn-warning font-size-12">
                      Añadir a la Cesta
                    </button>
                  </div>
                </div>
              </div>
            </div>
            <div class="grid-item Samsung border">
              <div class="item py-2" style="width: 200px">
                <div class="product font-rale">
                  <a href="#"
                    ><img
                      src="./assets/products/12.png"
                      alt="product1"
                      class="img-fluid"
                  /></a>
                  <div class="text-center">
                    <h6>Samsung galaxy 10</h6>
                    <div class="rating text-warning font-size-12">
                      <span><i class="fas fa-star"></i></span>
                      <span><i class="fas fa-star"></i></span>
                      <span><i class="fas fa-star"></i></span>
                      <span><i class="fas fa-star"></i></span>
                      <span><i class="far fa-star"></i></span>
                    </div>
                    <div class="price py-2">
                      <span>$15</span>
                    </div>
                    <button type="submit" class="btn btn-warning font-size-12">
                      Añadir a la Cesta
                    </button>
                  </div>
                </div>
              </div>
            </div>
            <div class="grid-item Redmi border">
              <div class="item py-2" style="width: 200px">
                <div class="product font-rale">
                  <a href="#"
                    ><img
                      src="./assets/products/3.png"
                      alt="product1"
                      class="img-fluid"
                  /></a>
                  <div class="text-center">
                    <h6>Redmi Note 7 Pro</h6>
                    <div class="rating text-warning font-size-12">
                      <span><i class="fas fa-star"></i></span>
                      <span><i class="fas fa-star"></i></span>
                      <span><i class="fas fa-star"></i></span>
                      <span><i class="fas fa-star"></i></span>
                      <span><i class="far fa-star"></i></span>
                    </div>
                    <div class="price py-2">
                      <span>$15</span>
                    </div>
                    <button type="submit" class="btn btn-warning font-size-12">
                      Añadir a la Cesta
                    </button>
                  </div>
                </div>
              </div>
            </div>
            <div class="grid-item Redmi border">
              <div class="item py-2" style="width: 200px">
                <div class="product font-rale">
                  <a href="#"
                    ><img
                      src="./assets/products/2.png"
                      alt="product1"
                      class="img-fluid"
                  /></a>
                  <div class="text-center">
                    <h6>Redmi Note 7 Pro</h6>
                    <div class="rating text-warning font-size-12">
                      <span><i class="fas fa-star"></i></span>
                      <span><i class="fas fa-star"></i></span>
                      <span><i class="fas fa-star"></i></span>
                      <span><i class="fas fa-star"></i></span>
                      <span><i class="far fa-star"></i></span>
                    </div>
                    <div class="price py-2">
                      <span>$15</span>
                    </div>
                    <button type="submit" class="btn btn-warning font-size-12">
                      Añadir a la Cesta
                    </button>
                  </div>
                </div>
              </div>
            </div>
            <div class="grid-item Redmi border">
              <div class="item py-2" style="width: 200px">
                <div class="product font-rale">
                  <a href="#"
                    ><img
                      src="./assets/products/4.png"
                      alt="product1"
                      class="img-fluid"
                  /></a>
                  <div class="text-center">
                    <h6>Redmi Note 7 Pro</h6>
                    <div class="rating text-warning font-size-12">
                      <span><i class="fas fa-star"></i></span>
                      <span><i class="fas fa-star"></i></span>
                      <span><i class="fas fa-star"></i></span>
                      <span><i class="fas fa-star"></i></span>
                      <span><i class="far fa-star"></i></span>
                    </div>
                    <div class="price py-2">
                      <span>$15</span>
                    </div>
                    <button type="submit" class="btn btn-warning font-size-12">
                      Añadir a la Cesta
                    </button>
                  </div>
                </div>
              </div>
            </div>
            <div class="grid-item Apple border">
              <div class="item py-2" style="width: 200px">
                <div class="product font-rale">
                  <a href="#"
                    ><img
                      src="./assets/products/14.png"
                      alt="product1"
                      class="img-fluid"
                  /></a>
                  <div class="text-center">
                    <h6>Iphone</h6>
                    <div class="rating text-warning font-size-12">
                      <span><i class="fas fa-star"></i></span>
                      <span><i class="fas fa-star"></i></span>
                      <span><i class="fas fa-star"></i></span>
                      <span><i class="fas fa-star"></i></span>
                      <span><i class="far fa-star"></i></span>
                    </div>
                    <div class="price py-2">
                      <span>$15</span>
                    </div>
                    <button type="submit" class="btn btn-warning font-size-12">
                      Añadir a la Cesta
                    </button>
                  </div>
                </div>
              </div>
            </div>
            <div class="grid-item Samsung border">
              <div class="item py-2" style="width: 200px">
                <div class="product font-rale">
                  <a href="#"
                    ><img
                      src="./assets/products/12.png"
                      alt="product1"
                      class="img-fluid"
                  /></a>
                  <div class="text-center">
                    <h6>Samsung galaxy 10</h6>
                    <div class="rating text-warning font-size-12">
                      <span><i class="fas fa-star"></i></span>
                      <span><i class="fas fa-star"></i></span>
                      <span><i class="fas fa-star"></i></span>
                      <span><i class="fas fa-star"></i></span>
                      <span><i class="far fa-star"></i></span>
                    </div>
                    <div class="price py-2">
                      <span>$15</span>
                    </div>
                    <button type="submit" class="btn btn-warning font-size-12">
                      Añadir a la Cesta
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--Banner adds-->
      <section id="banner_adds">
        <div class="container py-5 text-center align-bottom">
          <img
            src="./assets/banner2.jpg"
            alt="banner1"
            class="img-fluid"
            width="400px"
          />
          <img
            src="./assets/banner3.jpg"
            alt="banner2"
            class="img-fluid"
            width="400px"
          />
        </div>
      </section>
      <!--New phones-->
      <section id="new-phones">
        <div class="container">
          <h4 class="font-roboto font-size-20">Nuevos Smartphones</h4>
          <hr />
          <div class="owl-carousel owl-theme">
            <div class="item py-2 bg-light">
              <div class="product font-rale">
                <a href="#"
                  ><img
                    src="./assets/products/1.png"
                    alt="product1"
                    class="img-fluid"
                /></a>
                <div class="text-center">
                  <h6>Samsung galaxy 10</h6>
                  <div class="rating text-warning font-size-12">
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="far fa-star"></i></span>
                  </div>
                  <div class="price py-2">
                    <span>$15</span>
                  </div>
                  <button type="submit" class="btn btn-warning font-size-12">
                    Añadir a la Cesta
                  </button>
                </div>
              </div>
            </div>
            <div class="item py-2 bg-light">
              <div class="product font-rale">
                <a href="#"
                  ><img
                    src="./assets/products/2.png"
                    alt="product1"
                    class="img-fluid"
                /></a>
                <div class="text-center">
                  <h6>Redmi Note 7</h6>
                  <div class="rating text-warning font-size-12">
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="far fa-star"></i></span>
                  </div>
                  <div class="price py-2">
                    <span>$15</span>
                  </div>
                  <button type="submit" class="btn btn-warning font-size-12">
                    Añadir a la Cesta
                  </button>
                </div>
              </div>
            </div>
            <div class="item py-2 bg-light">
              <div class="product font-rale">
                <a href="#"
                  ><img
                    src="./assets/products/3.png"
                    alt="product1"
                    class="img-fluid"
                /></a>
                <div class="text-center">
                  <h6>Redmi Note 7 Pro</h6>
                  <div class="rating text-warning font-size-12">
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="far fa-star"></i></span>
                  </div>
                  <div class="price py-2">
                    <span>$15</span>
                  </div>
                  <button type="submit" class="btn btn-warning font-size-12">
                    Añadir a la Cesta
                  </button>
                </div>
              </div>
            </div>
            <div class="item py-2 bg-light">
              <div class="product font-rale">
                <a href="#"
                  ><img
                    src="./assets/products/4.png"
                    alt="product1"
                    class="img-fluid"
                /></a>
                <div class="text-center">
                  <h6>Redmi Note 7 Pro</h6>
                  <div class="rating text-warning font-size-12">
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="far fa-star"></i></span>
                  </div>
                  <div class="price py-2">
                    <span>$15</span>
                  </div>
                  <button type="submit" class="btn btn-warning font-size-12">
                    Añadir a la Cesta
                  </button>
                </div>
              </div>
            </div>
            <div class="item py-2 bg-light">
              <div class="product font-rale">
                <a href="#"
                  ><img
                    src="./assets/products/5.png"
                    alt="product1"
                    class="img-fluid"
                /></a>
                <div class="text-center">
                  <h6>Redmi Note 7 Pro</h6>
                  <div class="rating text-warning font-size-12">
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="far fa-star"></i></span>
                  </div>
                  <div class="price py-2">
                    <span>$15</span>
                  </div>
                  <button type="submit" class="btn btn-warning font-size-12">
                    Añadir a la Cesta
                  </button>
                </div>
              </div>
            </div>
            <div class="item py-2 bg-light">
              <div class="product font-rale">
                <a href="#"
                  ><img
                    src="./assets/products/6.png"
                    alt="product1"
                    class="img-fluid"
                /></a>
                <div class="text-center">
                  <h6>Redmi Note 7 Pro</h6>
                  <div class="rating text-warning font-size-12">
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="far fa-star"></i></span>
                  </div>
                  <div class="price py-2">
                    <span>$15</span>
                  </div>
                  <button type="submit" class="btn btn-warning font-size-12">
                    Añadir a la Cesta
                  </button>
                </div>
              </div>
            </div>
            <div class="item py-2 bg-light">
              <div class="product font-rale">
                <a href="#"
                  ><img
                    src="./assets/products/8.png"
                    alt="product1"
                    class="img-fluid"
                /></a>
                <div class="text-center">
                  <h6>Samsung galaxy 10</h6>
                  <div class="rating text-warning font-size-12">
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="far fa-star"></i></span>
                  </div>
                  <div class="price py-2">
                    <span>$15</span>
                  </div>
                  <button type="submit" class="btn btn-warning font-size-12">
                    Añadir a la Cesta
                  </button>
                </div>
              </div>
            </div>
            <div class="item py-2 bg-light">
              <div class="product font-rale">
                <a href="#"
                  ><img
                    src="./assets/products/10.png"
                    alt="product1"
                    class="img-fluid"
                /></a>
                <div class="text-center">
                  <h6>Samsung galaxy 10</h6>
                  <div class="rating text-warning font-size-12">
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="far fa-star"></i></span>
                  </div>
                  <div class="price py-2">
                    <span>$15</span>
                  </div>
                  <button type="submit" class="btn btn-warning font-size-12">
                    Añadir a la Cesta
                  </button>
                </div>
              </div>
            </div>
            <div class="item py-2 bg-light">
              <div class="product font-rale">
                <a href="#"
                  ><img
                    src="./assets/products/11.png"
                    alt="product1"
                    class="img-fluid"
                /></a>
                <div class="text-center">
                  <h6>Samsung galaxy 10</h6>
                  <div class="rating text-warning font-size-12">
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="far fa-star"></i></span>
                  </div>
                  <div class="price py-2">
                    <span>$15</span>
                  </div>
                  <button type="submit" class="btn btn-warning font-size-12">
                    Añadir a la Cesta
                  </button>
                </div>
              </div>
            </div>
            <div class="item py-2 bg-light">
              <div class="product font-rale">
                <a href="#"
                  ><img
                    src="./assets/products/12.png"
                    alt="product1"
                    class="img-fluid"
                /></a>
                <div class="text-center">
                  <h6>Samsung galaxy 10</h6>
                  <div class="rating text-warning font-size-12">
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="far fa-star"></i></span>
                  </div>
                  <div class="price py-2">
                    <span>$15</span>
                  </div>
                  <button type="submit" class="btn btn-warning font-size-12">
                    Añadir a la Cesta
                  </button>
                </div>
              </div>
            </div>
            <div class="item py-2 bg-light">
              <div class="product font-rale">
                <a href="#"
                  ><img
                    src="./assets/products/13.png"
                    alt="product1"
                    class="img-fluid"
                /></a>
                <div class="text-center">
                  <h6>Samsung galaxy 10</h6>
                  <div class="rating text-warning font-size-12">
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="far fa-star"></i></span>
                  </div>
                  <div class="price py-2">
                    <span>$15</span>
                  </div>
                  <button type="submit" class="btn btn-warning font-size-12">
                    Añadir a la Cesta
                  </button>
                </div>
              </div>
            </div>
            <div class="item py-2 bg-light">
              <div class="product font-rale">
                <a href="#"
                  ><img
                    src="./assets/products/14.png"
                    alt="product1"
                    class="img-fluid"
                /></a>
                <div class="text-center">
                  <h6>Samsung galaxy 10</h6>
                  <div class="rating text-warning font-size-12">
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="far fa-star"></i></span>
                  </div>
                  <div class="price py-2">
                    <span>$15</span>
                  </div>
                  <button type="submit" class="btn btn-warning font-size-12">
                    Añadir a la Cesta
                  </button>
                </div>
              </div>
            </div>
            <div class="item py-2 bg-light">
              <div class="product font-rale">
                <a href="#"
                  ><img
                    src="./assets/products/15.png"
                    alt="product1"
                    class="img-fluid"
                /></a>
                <div class="text-center">
                  <h6>Samsung galaxy 10</h6>
                  <div class="rating text-warning font-size-12">
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="far fa-star"></i></span>
                  </div>
                  <div class="price py-2">
                    <span>$15</span>
                  </div>
                  <button type="submit" class="btn btn-warning font-size-12">
                    Añadir a la Cesta
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--Blog-->
      <section id="blogs">
        <div class="container py-4">
          <h4 class="font-roboto font-size-20">Últimas noticias</h4>
          <hr />
          <div class="owl-carousel pwl-theme">
            <div class="item">
              <div class="card border-0 font-raleway mr-5">
                <h5 class="card-title font-size-16">Novedades</h5>
                <img
                  src="./assets/products/blog1.jpg"
                  alt=""
                  class="card-img-top"
                  width="18rem"
                  object-fit="cover"
                />
                <p class="card-text font-size-14 text-black">
                  Lorem, ipsum dolor sit amet consectetur adipisicing elit. Illo
                  qui, ad velit nihil quos aliquid molestias cupiditate
                  voluptates beatae deleniti.
                </p>
                <a href="#" class="color-second text-left">Ir al sitio</a>
              </div>
            </div>
            <div class="item">
              <div class="card border-0 font-raleway mr-5">
                <h5 class="card-title font-size-16">Novedades</h5>
                <img
                  src="./assets/products/blog2.jpg"
                  alt=""
                  class="card-img-top"
                  width="18rem"
                  object-fit="cover"
                />
                <p class="card-text font-size-14 text-black py-1">
                  Lorem, ipsum dolor sit amet consectetur adipisicing elit. Illo
                  qui, ad velit nihil quos aliquid molestias cupiditate
                  voluptates beatae deleniti.
                </p>
                <a href="#" class="color-second text-left">Ir al sitio</a>
              </div>
            </div>
            <div class="item">
              <div class="card border-0 font-raleway mr-5 py-1">
                <h5 class="card-title font-size-16">Novedades</h5>
                <img
                  src="./assets/products/blog3.jpg"
                  alt=""
                  class="card-img-top"
                  width="18rem"
                  object-fit="cover"
                />
                <p class="card-text font-size-14 text-black py-1">
                  Lorem, ipsum dolor sit amet consectetur adipisicing elit. Illo
                  qui, ad velit nihil quos aliquid molestias cupiditate
                  voluptates beatae deleniti.
                </p>
                <a href="#" class="color-second text-left">Ir al sitio</a>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>
    <!--Footer-->
    <footer id="footer" class="bg-dark text-white py-5">
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-12">
            <h4 class="font-roboto font-size-20">Tienda Smartphones</h4>
            <p class="font-size-14 font-raleway text-white-50">
              Lorem ipsum, dolor sit amet consectetur adipisicing elit. Tempore,
              dolorum?
            </p>
          </div>
          <div class="col-lg-4 col-12">
            <h4 class="font-roboto font-size-20">Subscripción</h4>
            <form action="" class="form-row">
              <div class="col">
                <input type="text" class="form-control" placeholder="Email" />
              </div>
              <div class="col">
                <button class="btn btn-primary mb-2">Subscríbete</button>
              </div>
            </form>
          </div>
          <div class="col-lg-2 col-12">
            <h4 class="font-roboto font-size-20">Información</h4>
            <div class="d-flex flex-column flex-wrap">
              <a href="#" class="font-raleway font-size-14 text-white-50 pb-1"
                >Conócenos</a
              >
              <a href="#" class="font-raleway font-size-14 text-white-50 pb-1"
                >Política de empresa</a
              >
              <a href="#" class="font-raleway font-size-14 text-white-50 pb-1"
                >Privacidad</a
              >
              <a href="#" class="font-raleway font-size-14 text-white-50 pb-1"
                >Términos y condiciones</a
              >
            </div>
          </div>
          <div class="col-lg-2 col-12">
            <h4 class="font-raleway font-size-20">Cuenta</h4>
            <div class="d-flex flex-column flex-wrap">
              <a href="#" class="font-raleway font-size-14 text-white-50 pb-1"
                >Mis cuenta</a
              >
              <a href="#" class="font-raleway font-size-14 text-white-50 pb-1"
                >Mis pedidos</a
              >
              <a href="#" class="font-raleway font-size-14 text-white-50 pb-1"
                >Lista de deseos</a
              >
              <a href="#" class="font-raleway font-size-14 text-white-50 pb-1"
                >Subscripción</a
              >
            </div>
          </div>
        </div>
      </div>
    </footer>
    <div class="copyright text-center bg-dark text-white py-2">
      <p>
        &copy;Copyright 2021. Diseñado por
        <a href="#">Pedro Fernández</a>
      </p>
    </div>
    <!--Bootstrap-->
    <script
      src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
      integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
      integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"
      integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF"
      crossorigin="anonymous"
    ></script>
    <!--Owl Carousel JS-->
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
      integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    ></script>
    <!--Isotope plugin-->
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.min.js"
      integrity="sha512-Zq2BOxyhvnRFXu0+WE6ojpZLOU2jdnqbrM1hmVdGzyeCa1DgM3X5Q4A/Is9xA1IkbUeDd7755dNNI/PzSf2Pew=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    ></script>
    <!--My Script-->
    <script src="./index.js"></script>
  </body>
</html>
