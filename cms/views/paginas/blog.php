  <nav class="nav navbar navbar-expand-lg d-lg-flex flex-lg-column align-items-lg-start">
      <div class="container-fluid d-flex justify-content-end display-lg-none">
          <a class="gray-opacity" href="#">Iniciar sesión</a>
          <a class="gray-opacity margin-left-20" href="#">Registro</a>
      </div>
      <a class="navbar-brand nav--title" href="#"><?php echo NOMBRE_BLOG; ?></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon d-flex flex-column justify-content-around">
              <div class="bar-nav rounded"></div>
              <div class="bar-nav rounded"></div>
              <div class="bar-nav rounded"></div>
          </span>
      </button>

      <div class="collapse navbar-collapse d-lg-flex justify-content-start" id="navbarSupportedContent">
          <div class="container-fluid d-flex justify-content-start display-lg-block">
              <a class="gray-opacity" href="#">Iniciar sesión</a>
              <a class="gray-opacity margin-left-20" href="#">Registro</a>
          </div>
          <ul class="navbar-nav mr-auto">
              <li class="nav-item active">
                  <a class="nav-link gray-opacity" href="#">HOME</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link gray-opacity" href="#">FRONTEND</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link gray-opacity" href="#">BACKEND</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link gray-opacity" href="#">MÓVIL</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link gray-opacity" href="#">INTELIGENCIA ARTIFICIAL</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link gray-opacity" href="#">CONTACTO</a>
              </li>
          </ul>
      </div>
  </nav>

  <div class="container-fluid blog">
      <section class="row d-flex justify-content-between container__news">
          <div class="col-12 col-xl-7 news p-0">
              <div class="d-xl-flex">
                  <div class="news__image__contain">
                      <img class="news--image" src="https://wallpapers.wallhaven.cc/wallpapers/full/wallhaven-716116.jpg" alt="notice">
                  </div>
                  <div class="news__description">
                      <h1 class="blog--title">Título de la noticia</h1>
                      <p class="text-justify">Resumen de la nota</p>
                  </div>
              </div>
          </div>
          <div class="col-12 col-xl-4 relevant">
              <div class="relevant__head d-flex justify-content-between mb-4">
                  <h2 class="h4 relevant--title">RELEVANTES</h2>
                  <div class="container__arrows">
                      <span class="arrow--left mr-5">
                          <i class="fas fa-angle-left"></i>
                      </span>
                      <span class="arrow--right">
                          <i class="fas fa-angle-right"></i>
                      </span>
                  </div>
              </div>

              <div class="relevant__body">
                  <article class=" mb-5">
                      <span class="relevant__article--category">CATEGORÍA</span>
                      <h6 class="relevant__article--title">Título artículo</h3>
                      <p class="relevant__article--p">Lorem ipsum dolor sit amet, ipsum labitur lucilius mel id, ad has appareat…</p>
                      <em class="relevant__article--public">Publicador por</em>
                  </article>
                  <article>
                      <span class="relevant__article--category">CATEGORÍA</span>
                      <h6 class="relevant__article--title">Título artículo</h3>
                      <p class="relevant__article--p">Lorem ipsum dolor sit amet, ipsum labitur lucilius mel id, ad has appareat…</p>
                      <em class="relevant__article--public">Publicador por</em>
                  </article>

              </div>
          </div>

      </section>

      <section class="row d-flex justify-content-between">
          <div class="col-12 col-xl-8">
              <h2 class="h4 mb-5">ÚLTIMAS PUBLICACIONES</h2>
              <div class="post">
                  <div class="post__img__contain">
                      <img class="post--img" src="../imagenes/post@2x.png" alt="">
                  </div>
                  <div class="post__description">
                      <h6 class="h4 post__description--title">Título del artículo</h3>
                      <p class="text-justify post__description--p">Lorem ipsum dolor sit amet, in eam odio amet, vix id nullam detracto, vidit vituperatoribus duo id. Affert detraxit voluptatum vis eu, inermis eloquentiam.</p>
                      <em class="post__description--em">Publicador por:</em>
                  </div>
              </div>

              <div class="post">
                  <div class="post__img__contain">
                      <img class="post--img" src="https://wallpapers.wallhaven.cc/wallpapers/full/wallhaven-716116.jpg" alt="">
                  </div>
                  <div class="post__description">
                      <h6 class="h4 post__description--title">Título del artículo</h3>
                      <p class="text-justify post__description--p">Lorem ipsum dolor sit amet, in eam odio amet, vix id nullam detracto, vidit vituperatoribus duo id. Affert detraxit voluptatum vis eu, inermis eloquentiam.</p>
                      <em class="post__description--em">Publicador por:</em>
                  </div>
              </div>

              <div class="post">
                  <div class="post__img__contain">
                      <img class="post--img" src="https://wallpapers.wallhaven.cc/wallpapers/full/wallhaven-716116.jpg" alt="">
                  </div>
                  <div class="post__description">
                      <h6 class="h4 post__description--title">Título del artículo</h3>
                      <p class="text-justify post__description--p">Lorem ipsum dolor sit amet, in eam odio amet, vix id nullam detracto, vidit vituperatoribus duo id. Affert detraxit voluptatum vis eu, inermis eloquentiam.</p>
                      <em class="post__description--em">Publicador por:</em>
                  </div>
              </div>
          </div>

          <aside class="sidebar col-12 col-xl-3 d-lg-flex flex-xl-column">
              <div class="widget__twitter text-center">
                  <p>widget comment</p>
              </div>
              <div class="widget__comment text-center">
                  <p>widget comment</p>
              </div>
          </aside>
      </section>

  </div>

  <footer class="footer">
      <div class="container">
          <div class="row text-center">

              <div class="col-12 col-sm-1 col-md-1 col-lg-1 col-xl-1 mr-50">
                  <span><a href="#">Blog</a></span>
              </div>

              <div class="col-12 col-sm-2 col-md-2 col-lg-2 col-xl-2">
                  <ul class="d-flex flex-column footer--ul">
                      <li>
                          <a href="#">Inicio</a>
                      </li>
                      <li class="m-2">
                          <a href="#">Contacto</a>
                      </li>
                      <li>
                          <a href="#">Acerca de</a>
                      </li>
                  </ul>
              </div>

              <div class="col-12 col-sm-9 col-md-9 col-lg-9 col-xl-9
                  d-flex
                  justify-content-center
                  justify-content-sm-end
                  justify-content-md-end
                  justify-content-lg-end
                  justify-content-xl-end
                  ">
                  <span class="social ml-0 ml-sm-4 ml-md-4 ml-lg-4 ml-xl-4" >
                      <a href="#"><i class="fab fa-instagram"></i></a>
                  </span>
                  <span class="social ml-4" >
                      <a href="#"><i class="fab fa-twitter"></i></a>
                  </span>
                  <span class="social ml-4" >
                      <a href="#"><i class="fab fa-facebook-f"></i></a>
                  </span>
                  <span class="social ml-4" >
                      <a href="#"><i class="fas fa-globe-americas"></i></a>
                  </span>
              </div>
          </div>
      </div>
  </footer>