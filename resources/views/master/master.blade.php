<!DOCTYPE html>
<html lang="en">
  <head>
    <title>UPSRJ</title>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="Unicat project" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" type="text/css" href="{{url('/')}}/styles/bootstrap4/bootstrap.min.css" />
    <link href="{{url('/')}}/plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" type="text/css" href="{{url('/')}}/plugins/OwlCarousel2-2.2.1/owl.carousel.css" />
    <link rel="stylesheet" type="text/css" href="{{url('/')}}/plugins/OwlCarousel2-2.2.1/owl.theme.default.css" /> 
    <link rel="stylesheet" type="text/css" href="{{url('/')}}/plugins/OwlCarousel2-2.2.1/animate.css" />
    
    
    @yield('css')
  </head>
  <link rel="icon" href="https://upsrj.edu.mx/wp-content/uploads/2019/06/isoheartHistoria.png" type="image/x-icon">

  <body>
    <div class="super_container">
      <!-- Header -->

      <header class="header">
        <!-- Top Bar -->
        <div class="top_bar">
          <div class="top_bar_container">
            <div class="container">
              <div class="row">
                <div class="col">
                  <div
                    class="top_bar_content d-flex flex-row align-items-center justify-content-start"
                  >
                    <ul class="top_bar_contact_list">
                      <li><div class="question">Have any questions?</div></li>
                      <li>
                        <i class="fa fa-phone" aria-hidden="true"></i>
                        <div>442-123-1234</div>
                      </li>
                      <li>
                        <i class="fa fa-envelope-o" aria-hidden="true"></i>
                        <div>UPSRJ@upsrj.edu.mx</div>
                      </li>
                    </ul>
                    <div class="top_bar_login ml-auto">
                      <div class="login_button">
                        <a href="https://upsrj.edu.mx/sistemaintegral/web/alumnos.php/" target="_blank">SAI</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Header Content -->
        <div class="header_container">
  <div class="container">
    <div class="row">
      <div class="col">
        <div
          class="header_content d-flex flex-row align-items-center justify-content-start"
        >
          <div class="logo_container">
            <a href="#">
              <img src="{{ asset('images/logo.png') }}" alt="Logo" width="250 " height="auto">
            </a>
          </div>
          @include('master.nav')
        </div>
      </div>
    </div>
  </div>
</div>




        <!-- Header Search Panel -->
        <div class="header_search_container">
          <div class="container">
            <div class="row">
              <div class="col">
                <div
                  class="header_search_content d-flex flex-row align-items-center justify-content-end"
                >
                  <form action="#" class="header_search_form">
                    <input
                      type="search"
                      class="search_input"
                      placeholder="Search"
                      required="required"
                    />
                    <button
                      class="header_search_button d-flex flex-column align-items-center justify-content-center"
                    >
                      <i class="fa fa-search" aria-hidden="true"></i>
                    </button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </header>

      <!-- Menu -->

      <div
        class="menu d-flex flex-column align-items-end justify-content-start text-right menu_mm trans_400"
      >
        <div class="menu_close_container">
          <div class="menu_close">
            <div></div>
            <div></div>
          </div>
        </div>
        <div class="search">
          <form action="#" class="header_search_form menu_mm">
            <input
              type="search"
              class="search_input menu_mm"
              placeholder="Search"
              required="required"
            />
            <button
              class="header_search_button d-flex flex-column align-items-center justify-content-center menu_mm"
            >
              <i class="fa fa-search menu_mm" aria-hidden="true"></i>
            </button>
          </form>
        </div>
        @include('master.menu')
      </div>

     
      @yield('body')

      <!-- Footer -->

      <footer class="footer">
        <div class="footer_background"></div>
        <div class="container">
          <div class="row footer_row">
            <div class="col">
              <div class="footer_content">
                <div class="row">
                  <div class="col-lg-3 footer_col">
                    <!-- Footer About -->
                    <div class="footer_section footer_about">
                      <div class="footer_logo_container">
                      <a href="#">
                        <img src="{{ asset('images/footer_logo.png') }}" alt="Footer Logo" width="150" height="auto">
                      </a>
                      </div>
                      <div class="footer_about_text">
                        <p>
Universidad Politecnicas Santa Rosa Jauregui
                        </p>
                      </div>
                      <div class="footer_social">
                        <ul>
                          <li>
                            <a href="#"
                              ><i class="fa fa-facebook" aria-hidden="true"></i
                            ></a>
                          </li>
                          <li>
                            <a href="#"
                              ><i
                                class="fa fa-google-plus"
                                aria-hidden="true"
                              ></i
                            ></a>
                          </li>
                          <li>
                            <a href="#"
                              ><i class="fa fa-instagram" aria-hidden="true"></i
                            ></a>
                          </li>
                          <li>
                            <a href="#"
                              ><i class="fa fa-twitter" aria-hidden="true"></i
                            ></a>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>

                  <div class="col-lg-3 footer_col">
                    <!-- Footer Contact -->
                    <div class="footer_section footer_contact">
                      <div class="footer_title">Contact Us</div>
                      <div class="footer_contact_info">
                        <ul>
                          <li>Email: UPSRJ@upsrj.edu.com</li>
                          <li>Phone: +(442) 111 555 666</li>
                          <li>
                            Santa Rosa Jauregui, Queretaro, Qro.
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>

                  <div class="col-lg-3 footer_col">
                    <!-- Footer links -->
                    <div class="footer_section footer_links">
                      <div class="footer_title">Links</div>
                      <div class="footer_links_container">
                        <ul>
                          <li><a href="{{url('/')}}">Home</a></li>
                          <li><a href="{{url('/about')}}">About</a></li>
                          <li><a href="{{url('/courses')}}">Courses</a></li>
                          <li><a href="{{url('/blog')}}">Blog</a></li>
                          <li><a href="{{url('/contact')}}">Contact</a></li>
                          
                        </ul>
                      </div>
                    </div>
                  </div>

                  <div class="col-lg-3 footer_col clearfix">
                    <!-- Footer links -->
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          
      </footer>
    </div>


    <script src="{{url('/')}}/js/jquery-3.2.1.min.js"></script>
    <script src="{{url('/')}}/styles/bootstrap4/popper.js"></script>
    <script src="{{url('/')}}/styles/bootstrap4/bootstrap.min.js"></script>
    <script src="{{url('/')}}/plugins/greensock/TweenMax.min.js"></script>
    <script src="{{url('/')}}/plugins/greensock/TimelineMax.min.js"></script>
    <script src="{{url('/')}}/plugins/scrollmagic/ScrollMagic.min.js"></script>
    <script src="{{url('/')}}/plugins/greensock/animation.gsap.min.js"></script>
    <script src="{{url('/')}}/plugins/greensock/ScrollToPlugin.min.js"></script>
    <script src="{{url('/')}}/plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
    <script src="{{url('/')}}/plugins/easing/easing.js"></script>
    <script src="{{url('/')}}/plugins/parallax-js-master/parallax.min.js"></script>
    <script src="{{url('/')}}/js/custom.js"></script>
    @yield('js')
  </body>
</html>
