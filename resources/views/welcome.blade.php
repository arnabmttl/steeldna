
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>{{ config('app.name', 'Laravel') }}</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
  <link href="{{ asset('assets/front/css/style.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/front/css/responsive.css') }}" rel="stylesheet">
</head>

<body>

  <!-- Modal -->
  <div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        <div class="modal-body">
          <div class="loginBlock">
            <img src="{{ asset('assets/front/images/logo.png') }}" class="loginLogo">
            <h2 class="text-center">Welcome to Steel!</h2>
            <h5>Register to create your first account and start exploring the prices in steel</h5>

            <div class="form-group">
              <label class="control-label">Email</label>
              <input type="email" name="" class="form-control">
            </div>
            <div class="form-group">
              <label class="control-label">Password</label>
              <input type="password" name="" class="form-control">
            </div>
            <div class="row remember_area">
              <div class="col-sm-6">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                  <label class="form-check-label" for="flexCheckDefault">
                    Remember Me
                  </label>
                </div>
              </div>
              <div class="col-sm-6">
                <p class="text-end m-0"><a href="#">Forgot Password?</a></p>
              </div>
            </div>
            <p>By logging in to Steel you have accepted the <a href="#">Terms & Conditions</a> and <a href="#">Privacy
                Policy</a></p>
            <div class="btnArea">
              <input type="submit" name="" class="btn btn-black" value="Login">
            </div>

            <p class="text-center m-0">Didn't have an account? <a href="#" data-bs-toggle="modal"
                data-bs-target="#registerModal" data-bs-dismiss="modal" aria-label="Close">Register</a></p>
          </div>
        </div>
      </div>
    </div>
  </div>


  <!-- Modal -->
  <div class="modal fade" id="registerModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        <div class="modal-body">
          <div class="loginBlock">
            <img src="{{ asset('assets/front/images/logo.png') }}" class="loginLogo">
            <h2 class="text-center">Welcome to Steel!</h2>
            <h5>Login to start exploring the prices in steel</h5>

            <div class="row">
              <div class="col-6">
                <div class="form-group">
                  <label class="control-label">First Name</label>
                  <input type="text" name="" class="form-control">
                </div>
              </div>
              <div class="col-6">
                <div class="form-group">
                  <label class="control-label">Last Name</label>
                  <input type="text" name="" class="form-control">
                </div>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label">Email</label>
              <input type="email" name="" class="form-control">
            </div>
            <div class="form-group">
              <label class="control-label">Phone</label>
              <input type="tel" name="" class="form-control">
            </div>
            <div class="form-group">
              <label class="control-label">Password</label>
              <input type="password" name="" class="form-control">
            </div>
            <p>By registering in to Steel you have accepted the <a href="#">Terms & Conditions</a> and <a
                href="#">Privacy Policy</a></p>
            <div class="btnArea">
              <input type="submit" name="" class="btn btn-black" value="Register">
            </div>

            <p class="text-center m-0">Already have an account? <a href="#" data-bs-toggle="modal"
                data-bs-target="#loginModal" data-bs-dismiss="modal" aria-label="Close">Login</a></p>
          </div>
        </div>
      </div>
    </div>
  </div>


  <section class="top_bar">
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-6">
          <a href="#" class="top_link">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
              stroke="#ffffff" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"
              class="feather feather-phone-call">
              <path
                d="M15.05 5A5 5 0 0 1 19 8.95M15.05 1A9 9 0 0 1 23 8.94m-1 7.98v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z">
              </path>
            </svg>
            <span>+91 98000 00555</span>
          </a>
          <a href="#" class="top_link">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
              stroke="#ffffff" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"
              class="feather feather-mail">
              <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
              <polyline points="22,6 12,13 2,6"></polyline>
            </svg>
            <span>info@steeldna.com</span>
          </a>
        </div>
        <div class="col-sm-6 text-end">
          <a href="#" class="top_link" data-bs-toggle="modal" data-bs-target="#loginModal">Login</a>
          <a href="#" class="top_link">Demo</a>
          <a href="#" class="top_link">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
              stroke="#ffffff" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"
              class="feather feather-search">
              <circle cx="11" cy="11" r="8"></circle>
              <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
            </svg>
          </a>
        </div>
      </div>
    </div>
  </section>
  <nav class="navbar navbar-expand-lg header inner_header">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">
        <img src="{{ asset('assets/front/images/logo.png') }}">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <!-- <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="price.html">Price & Index</a>
          </li> -->
          <div class="dropdown">
            <button class="btn  dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
              Steel Products
            </button>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Iron Ore</a></li>
              <li><a class="dropdown-item" href="#">Coking coal </a></li>
              <li><a class="dropdown-item" href="#">HBI (Hot Briquette Iron), DRI (Direct Reduced Iron) & Scrap</a></li>
              <li><a class="dropdown-item" href="#">Billets & Slabs</a></li>
              <li><a class="dropdown-item" href="#">Deformed Bars, Wire Rods, Wires</a></li>
              <li><a class="dropdown-item" href="#">Angles & Beams</a></li>
              <li><a class="dropdown-item" href="#">HRC (Hot Rolled Coils), CRC (Cold Rolled Coils), Galvanized Coils & Sheets</a></li>
              <li><a class="dropdown-item" href="#">Pipes & Tubes</a></li>
              <li><a class="dropdown-item" href="#">Stainless Steels</a></li>
            </ul>
          </div>
          <div class="dropdown">
            <button class="btn  dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
              Products & Services
            </button>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">TheSteelDNA daily news & Analysis</a></li>
              <li><a class="dropdown-item" href="#">TheSteelDNA Weekly Global Steel Market review</a></li>
              <li><a class="dropdown-item" href="#">TheSteelDNA monthly review of Steel raw materials </a></li>
              <li><a class="dropdown-item" href="#">Price Data – Historical </a></li>
              <li><a class="dropdown-item" href="#">Realtime Trade Alerts</a></li>
              <li><a class="dropdown-item" href="#">Forecast SMART (Steel Market Analytics, Research and Trend)</a></li>
              <li><a class="dropdown-item" href="#">Risk Management</a></li>
              <li><a class="dropdown-item" href="#">Consulting</a></li>
            </ul>
          </div>
          <div class="dropdown">
            <button class="btn  dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
              Market Insights
            </button>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Latest Market Headlines</a></li>
              <li><a class="dropdown-item" href="#">Technological developments & Innovation</a></li>
              <li><a class="dropdown-item" href="#">Podcasts</a></li>
              <li><a class="dropdown-item" href="#">Special Reports</a></li>
              <li><a class="dropdown-item" href="#">Research & Analysis</a></li>
            </ul>
          </div>
          <div class="dropdown">
            <button class="btn  dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
              Methodology
            </button>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Our methodology</a></li>
              <li><a class="dropdown-item" href="#">Price evaluation and Real time Assessment</a></li>
              <li><a class="dropdown-item" href="#">Feedback</a></li>
              <li><a class="dropdown-item" href="#">SOP and Continuous learning and Updates</a></li>
              <li><a class="dropdown-item" href="#">Hypothesis and testing</a></li>
            </ul>
          </div>
          <div class="dropdown">
            <button class="btn  dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
              Technology
            </button>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Green Energy Transition</a></li>
              <li><a class="dropdown-item" href="#">Research & Development</a></li>
              <li><a class="dropdown-item" href="#">Innovation</a></li>
            </ul>
          </div>
          <div class="dropdown">
            <button class="btn  dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
              Events
            </button>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Podcasts</a></li>
              <li><a class="dropdown-item" href="#">Global and Regional Networking</a></li>
              <li><a class="dropdown-item" href="#">Expert Group discussions</a></li>
              <li><a class="dropdown-item" href="#">Conferences and exhibitions</a></li>
            </ul>
          </div>
          <!-- <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Dropdown link
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item" href="#">Action</a>
              <a class="dropdown-item" href="#">Another action</a>
              <a class="dropdown-item" href="#">Something else here</a>
            </div>
          </li> -->
          <!-- <li class="nav-item">
            <a class="nav-link" href="news.html">News</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Market Data</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Forecast</a>
          </li> -->
        </ul>
        <h6 class="ms-4 mt-1em text-white"><span class="text-13 text-inherit">call us now</span><br><span
            class="text-secondary text-16">+1 714 7788</span></h6>
      </div>
    </div>
  </nav>

  <section class="video_banner">
    <video muted="muted" autoplay="autoplay" loop="loop">
      <source src="{{ asset('assets/front/video/steel.mp4') }}" type="video/mp4">
    </video>

    <div class="banner_caption">
      <div class="row">
        <div class="col-sm-7">
          <h1>First Class Investments</h1>
          <p>Take your business to the next level Hub's built-in risk and profit management tools.</p>

          <div class="row align-items-center">
            <div class="col-auto">
              <a href="#">
                <span>Get a quote</span>
                <span>
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"
                    class="feather feather-arrow-right">
                    <line x1="5" y1="12" x2="19" y2="12"></line>
                    <polyline points="12 5 19 12 12 19"></polyline>
                  </svg>
                </span>
              </a>
            </div>
            <div class="col-sm-6">
              <h6 class="ms-4 mt-1em text-white"><span class="text-13 text-inherit">call us now</span><br><span
                  class="text-secondary text-16">+1 714 7788</span></h6>
            </div>
          </div>
        </div>
        <div class="col-sm-5">
        </div>
      </div>
    </div>
  </section>

  <section class="about_section">
    <div class="container">
      <div class="row align-items-center justify-content-between">
        <div class="col-sm-5">
          <h6>About Us</h6>
          <h2>Welcome to TheSteelDNA</h2>
          <p>In a world driven by industrial progress and economic growth, the steel industry stands
            as a foundational pillar, shaping infrastructures, economies, and societies. In the fastpaced world of Global steel markets, having access to timely and accurate information is
            crucial for making informed decisions. We recognize the paramount importance of
            accurate, insightful analysis in navigating the complexities of the global steel market. At
            TheSteelDNA.com, we are dedicated to providing you with comprehensive analysis,
            insightful reports, and reliable data to navigate the complexities of the global steel
            industry. 
            </p>
        </div>
        <div class="col-sm-7 d-flex">
          <div class="about_form ms-auto">
            <h6>Send a message</h6>
            <h3>request a call back</h3>
            <form>
              <div class="form-group">
                <input type="text" name="" placeholder="Your Name" class="form-control">
              </div>
              <div class="form-group">
                <input type="email" name="" placeholder="Email" class="form-control">
              </div>
              <div class="form-group">
                <input type="tel" name="" placeholder="Contact Number" class="form-control">
              </div>
              <div class="form-group">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                  <label class="form-check-label" for="flexCheckDefault">
                    I agree to the terms of service.
                  </label>
                </div>
              </div>
              <div class="form-group">
                <input type="submit" name="" class="btn btn-theme btn-block" value="Get quote now">
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="who-we-are">
    <div class="container">
      <div class="row">
        <div class="col-sm-6">
          <img src="{{ asset('assets/front/images/trading.jpg') }}" class="service_img">
        </div>
        <div class="col-sm-6">
          <div class="section_heading">
            <h6>About Company</h6>
            <h2>Who We Are</h2>
          </div>
          <p>TheSteelDNA is a premier online platform dedicated to providing comprehensive analysis,
            data, and insights into the dynamic landscape of the steel market. Our team comprises
            seasoned industry experts, economists, and data scientists committed to delivering
            actionable intelligence to stakeholders across the steel value chain. </p>
        </div>
      </div>
    </div>
  </section>

  <section class="service_section">
    <div class="container">
      <div class="row align-items-center justify-content-between">
        <div class="col-sm-6">
          <div class="section_heading">
            <h6>Our Services</h6>
            <h2>What We Offer</h2>
          </div>
          <div class="service_area">
            <div class="service_block">
              <div class="service_wrap">
                <figure>
                  <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink"
                    xmlns:svgjs="http://svgjs.com/svgjs" width="512" height="512" x="0" y="0" viewBox="0 0 512 512.001"
                    style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                    <g>
                      <path
                        d="M348.945 221.64v-96.894c0-2.773-1.28-5.336-3.093-7.363L237.219 3.309C235.19 1.176 232.309 0 229.429 0H57.196C25.398 0 0 25.93 0 57.73v325.684c0 31.8 25.398 57.305 57.195 57.305h135.953C218.863 483.402 265.605 512 318.852 512c80.886 0 146.941-65.734 146.941-146.727.11-70.75-50.688-129.867-116.848-143.632ZM240.102 37.458l72.882 76.723h-47.273c-14.086 0-25.61-11.63-25.61-25.715ZM57.195 419.375c-19.953 0-35.851-16.008-35.851-35.96V57.73c0-20.062 15.898-36.386 35.851-36.386h161.563v67.12c0 25.93 21.023 47.06 46.953 47.06h61.89v83.34c-3.199-.106-5.761-.427-8.535-.427-37.242 0-71.496 14.301-97.32 36.711H86.223c-5.871 0-10.672 4.801-10.672 10.668 0 5.872 4.8 10.672 10.672 10.672h115.675c-7.578 10.672-13.875 21.344-18.78 33.082H86.222c-5.871 0-10.672 4.801-10.672 10.672 0 5.867 4.8 10.672 10.672 10.672h89.957c-2.668 10.672-4.055 22.516-4.055 34.36 0 19.206 3.734 38.203 10.457 54.21H57.195Zm261.766 71.39c-69.149 0-125.387-56.238-125.387-125.386 0-69.149 56.13-125.387 125.387-125.387 69.254 0 125.383 56.238 125.383 125.387 0 69.148-56.235 125.387-125.383 125.387Zm0 0"
                        style="stroke:none;fill-rule:nonzero;fill-opacity:1;" fill="" data-original="#000000" class="">
                      </path>
                      <path
                        d="M86.223 223.027H194.32c5.871 0 10.672-4.804 10.672-10.672 0-5.87-4.8-10.671-10.672-10.671H86.223c-5.871 0-10.672 4.8-10.672 10.671 0 5.868 4.8 10.672 10.672 10.672ZM315.438 299.54c.855.21 1.707.32 2.562.32 1.066 0 2.027-.11 2.988-.43 14.086 1.175 25.078 12.914 25.078 27.215 0 5.867 4.801 10.668 10.668 10.668 5.871 0 10.672-4.801 10.672-10.668 0-23.477-16.644-43.114-38.734-47.704v-6.828c0-5.87-4.805-10.672-10.672-10.672-5.871 0-10.672 4.801-10.672 10.672v7.258c-21.344 5.121-37.242 24.438-37.242 47.274 0 26.89 21.875 48.66 48.66 48.66 15.047 0 27.32 12.27 27.32 27.316 0 15.047-12.168 27.426-27.32 27.426-15.047 0-27.316-12.274-27.316-27.32 0-5.868-4.805-10.672-10.672-10.672-5.871 0-10.672 4.804-10.672 10.672 0 22.945 15.898 42.152 37.242 47.273v10.992c0 5.871 4.8 10.672 10.672 10.672 5.867 0 10.672-4.8 10.672-10.672V450.32c22.09-4.59 38.734-24.222 38.734-47.699 0-26.89-21.875-48.66-48.66-48.66-15.047 0-27.316-12.274-27.316-27.316 0-13.875 10.457-25.504 24.007-27.106Zm0 0"
                        style="stroke:none;fill-rule:nonzero;fill-opacity:1;" fill="" data-original="#000000" class="">
                      </path>
                    </g>
                  </svg>
                </figure>
                <h5>Market Intelligence</h5>
                <p>Stay ahead of the curve with our in-depth market intelligence
                  reports, covering key trends, emerging opportunities, and market dynamics influencing
                  the steel industry.</p>
                <a href="#" class="readmore">
                  <span>Learn More</span>
                  <span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                      stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"
                      class="feather feather-arrow-right">
                      <line x1="5" y1="12" x2="19" y2="12"></line>
                      <polyline points="12 5 19 12 12 19"></polyline>
                    </svg>
                  </span>
                </a>
              </div>
            </div>
            <div class="service_block">
              <div class="service_wrap">
                <figure>
                  <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink"
                    xmlns:svgjs="http://svgjs.com/svgjs" width="512" height="512" x="0" y="0" viewBox="0 0 442 442"
                    style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                    <g>
                      <path
                        d="M171 336H70c-5.523 0-10 4.477-10 10s4.477 10 10 10h101c5.523 0 10-4.477 10-10s-4.477-10-10-10zM322 336H221c-5.523 0-10 4.477-10 10s4.477 10 10 10h101c5.522 0 10-4.477 10-10s-4.478-10-10-10zM322 86H70c-5.523 0-10 4.477-10 10s4.477 10 10 10h252c5.522 0 10-4.477 10-10s-4.478-10-10-10zM322 136H221c-5.523 0-10 4.477-10 10s4.477 10 10 10h101c5.522 0 10-4.477 10-10s-4.478-10-10-10zM322 186H221c-5.523 0-10 4.477-10 10s4.477 10 10 10h101c5.522 0 10-4.477 10-10s-4.478-10-10-10zM322 236H221c-5.523 0-10 4.477-10 10s4.477 10 10 10h101c5.522 0 10-4.477 10-10s-4.478-10-10-10zM322 286H221c-5.523 0-10 4.477-10 10s4.477 10 10 10h101c5.522 0 10-4.477 10-10s-4.478-10-10-10zM171 286H70c-5.523 0-10 4.477-10 10s4.477 10 10 10h101c5.523 0 10-4.477 10-10s-4.477-10-10-10zM171 136H70c-5.523 0-10 4.477-10 10v101c0 5.523 4.477 10 10 10h101c5.523 0 10-4.477 10-10V146c0-5.523-4.477-10-10-10zm-10 101H80v-81h81v81z"
                        fill="" opacity="1" data-original="" class=""></path>
                      <path
                        d="M422 76h-30V46c0-11.028-8.972-20-20-20H20C8.972 26 0 34.972 0 46v320c0 27.57 22.43 50 50 50h342c27.57 0 50-22.43 50-50V96c0-11.028-8.972-20-20-20zm0 290c0 16.542-13.458 30-30 30H50c-16.542 0-30-13.458-30-30V46h352v305c0 13.785 11.215 25 25 25 5.522 0 10-4.477 10-10s-4.478-10-10-10c-2.757 0-5-2.243-5-5V96h30v270z"
                        fill="" opacity="1" data-original="" class=""></path>
                    </g>
                  </svg>
                </figure>
                <h5>Data Analytics</h5>
                <p>Harness the power of data with our advanced analytics tools, offering
                  granular insights into production volumes, pricing trends, consumption patterns, and
                  trade flows. </p>
                <a href="#" class="readmore">
                  <span>Learn More</span>
                  <span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                      stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"
                      class="feather feather-arrow-right">
                      <line x1="5" y1="12" x2="19" y2="12"></line>
                      <polyline points="12 5 19 12 12 19"></polyline>
                    </svg>
                  </span>
                </a>
              </div>
            </div>
            <div class="service_block">
              <div class="service_wrap">
                <figure>
                  <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink"
                    xmlns:svgjs="http://svgjs.com/svgjs" width="512" height="512" x="0" y="0" viewBox="0 0 512 512"
                    style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                    <g>
                      <path
                        d="M488.399 492h-21.933V173.536c0-14.823-12.06-26.882-26.882-26.882H390.56c-14.823 0-26.882 12.06-26.882 26.882V492h-55.692V317.825c0-14.823-12.059-26.882-26.882-26.882H232.08c-14.823 0-26.882 12.06-26.882 26.882V492h-55.692v-90.204c0-14.823-12.06-26.882-26.882-26.882H73.599c-14.823 0-26.882 12.06-26.882 26.882V492H23.601c-5.523 0-10 4.477-10 10s4.477 10 10 10h464.798c5.523 0 10-4.477 10-10s-4.477-10-10-10zm-358.895 0H66.716v-90.204a6.89 6.89 0 0 1 6.882-6.882h49.024a6.89 6.89 0 0 1 6.882 6.882V492zm158.481 0h-62.788V317.825a6.89 6.89 0 0 1 6.882-6.882h49.024a6.89 6.89 0 0 1 6.882 6.882V492zm158.481 0h-62.788V173.536a6.89 6.89 0 0 1 6.882-6.882h49.024a6.89 6.89 0 0 1 6.882 6.882V492zM466.442 10.516A9.965 9.965 0 0 0 455.95.024c-.161-.007-.32-.024-.484-.024h-60.5c-5.523 0-10 4.477-10 10s4.477 10 10 10h37.357l-98.857 98.858-37.28-37.28a10.001 10.001 0 0 0-14.142 0l-179.769 179.77c-3.905 3.905-3.905 10.237 0 14.143 1.953 1.951 4.512 2.927 7.071 2.927s5.119-.976 7.071-2.929L289.115 102.79l37.28 37.28c3.905 3.905 10.237 3.905 14.143 0L446.466 34.143v33.81c0 5.523 4.477 10 10 10s10-4.477 10-10V11c0-.163-.017-.322-.024-.484z"
                        fill="" opacity="1" data-original=""></path>
                      <circle cx="75.64" cy="303.31" r="10" fill="" opacity="1" data-original=""></circle>
                    </g>
                  </svg>
                </figure>
                <h5>Forecasting Services</h5>
                <p>Make informed decisions with confidence using our robust
                  forecasting services, which leverage cutting-edge models and methodologies to predict
                  future market trends and scenarios. </p>
                <a href="#" class="readmore">
                  <span>Learn More</span>
                  <span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                      stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"
                      class="feather feather-arrow-right">
                      <line x1="5" y1="12" x2="19" y2="12"></line>
                      <polyline points="12 5 19 12 12 19"></polyline>
                    </svg>
                  </span>
                </a>
              </div>
            </div>
            <div class="service_block">
              <div class="service_wrap">
                <figure>
                  <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink"
                    xmlns:svgjs="http://svgjs.com/svgjs" width="512" height="512" x="0" y="0" viewBox="0 0 64 64"
                    style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                    <g>
                      <g data-name="Layer 8">
                        <path
                          d="m19.5 19.9 4.5 1.132a3.99 3.99 0 0 0 7.858.968h3.284a4 4 0 1 0 0-2h-3.284a3.973 3.973 0 0 0-7.353-.905L20 17.968a4.047 4.047 0 1 0-.5 1.936ZM39 19a2 2 0 1 1-2 2 2 2 0 0 1 2-2Zm-11 0a2 2 0 1 1-2 2 2 2 0 0 1 2-2Zm-14-1a2 2 0 1 1 2 2 2 2 0 0 1-2-2ZM38 31a1 1 0 0 0-1-1h-4a1 1 0 0 0-1 1v7h-2V28a1 1 0 0 0-1-1h-4a1 1 0 0 0-1 1v10h-2V25a1 1 0 0 0-1-1h-4a1 1 0 0 0-1 1v13h-2v2h30v-2h-6Zm-4 1h2v6h-2Zm-8-3h2v9h-2Zm-8-3h2v12h-2Z"
                          fill="" opacity="1" data-original="" class=""></path>
                        <path d="M7 27a20 20 0 0 1 40 0h2a22 22 0 1 0-22 22v-2A20.023 20.023 0 0 1 7 27Z" fill=""
                          opacity="1" data-original="" class=""></path>
                        <path
                          d="m61.672 55.257-9.3-9.3A3.4 3.4 0 0 0 52 41.586l-2.165-2.165a26.015 26.015 0 1 0-10.414 10.414L41.586 52a3.4 3.4 0 0 0 4.373.373l9.3 9.3a4.535 4.535 0 0 0 6.414-6.414ZM3 27a24 24 0 1 1 24 24A24.028 24.028 0 0 1 3 27Zm40 23.586-1.814-1.814a26.188 26.188 0 0 0 7.586-7.586L50.586 43a1.415 1.415 0 0 1 0 2L45 50.585a1.447 1.447 0 0 1-2 .001ZM58.465 61a2.52 2.52 0 0 1-1.793-.743L47.414 51 51 47.414l9.258 9.257A2.536 2.536 0 0 1 58.465 61Z"
                          fill="" opacity="1" data-original="" class=""></path>
                      </g>
                    </g>
                  </svg>
                </figure>
                <h5>Customized Solutions</h5>
                <p>Tailored to meet your specific needs, our customized solutions
                  provide bespoke analysis and consulting services designed to address your unique
                  challenges and opportunities. </p>
                <a href="#" class="readmore">
                  <span>Learn More</span>
                  <span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                      stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"
                      class="feather feather-arrow-right">
                      <line x1="5" y1="12" x2="19" y2="12"></line>
                      <polyline points="12 5 19 12 12 19"></polyline>
                    </svg>
                  </span>
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-5">
          <img src="{{ asset('assets/front/images/trading.jpg') }}" class="service_img">
        </div>
      </div>
    </div>
  </section>

  <section class="service_section">
    <div class="container">
      <div class="row align-items-center justify-content-between">
        <div class="col-sm-12">
          <div class="section_heading">
            <h6>Our Services</h6>
            <h2>What We Offer</h2>
          </div>
          <div class="service_area">
            <div class="service_block">
              <div class="service_wrap">
                <figure>
                  <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink"
                    xmlns:svgjs="http://svgjs.com/svgjs" width="512" height="512" x="0" y="0" viewBox="0 0 512 512.001"
                    style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                    <g>
                      <path
                        d="M348.945 221.64v-96.894c0-2.773-1.28-5.336-3.093-7.363L237.219 3.309C235.19 1.176 232.309 0 229.429 0H57.196C25.398 0 0 25.93 0 57.73v325.684c0 31.8 25.398 57.305 57.195 57.305h135.953C218.863 483.402 265.605 512 318.852 512c80.886 0 146.941-65.734 146.941-146.727.11-70.75-50.688-129.867-116.848-143.632ZM240.102 37.458l72.882 76.723h-47.273c-14.086 0-25.61-11.63-25.61-25.715ZM57.195 419.375c-19.953 0-35.851-16.008-35.851-35.96V57.73c0-20.062 15.898-36.386 35.851-36.386h161.563v67.12c0 25.93 21.023 47.06 46.953 47.06h61.89v83.34c-3.199-.106-5.761-.427-8.535-.427-37.242 0-71.496 14.301-97.32 36.711H86.223c-5.871 0-10.672 4.801-10.672 10.668 0 5.872 4.8 10.672 10.672 10.672h115.675c-7.578 10.672-13.875 21.344-18.78 33.082H86.222c-5.871 0-10.672 4.801-10.672 10.672 0 5.867 4.8 10.672 10.672 10.672h89.957c-2.668 10.672-4.055 22.516-4.055 34.36 0 19.206 3.734 38.203 10.457 54.21H57.195Zm261.766 71.39c-69.149 0-125.387-56.238-125.387-125.386 0-69.149 56.13-125.387 125.387-125.387 69.254 0 125.383 56.238 125.383 125.387 0 69.148-56.235 125.387-125.383 125.387Zm0 0"
                        style="stroke:none;fill-rule:nonzero;fill-opacity:1;" fill="" data-original="#000000" class="">
                      </path>
                      <path
                        d="M86.223 223.027H194.32c5.871 0 10.672-4.804 10.672-10.672 0-5.87-4.8-10.671-10.672-10.671H86.223c-5.871 0-10.672 4.8-10.672 10.671 0 5.868 4.8 10.672 10.672 10.672ZM315.438 299.54c.855.21 1.707.32 2.562.32 1.066 0 2.027-.11 2.988-.43 14.086 1.175 25.078 12.914 25.078 27.215 0 5.867 4.801 10.668 10.668 10.668 5.871 0 10.672-4.801 10.672-10.668 0-23.477-16.644-43.114-38.734-47.704v-6.828c0-5.87-4.805-10.672-10.672-10.672-5.871 0-10.672 4.801-10.672 10.672v7.258c-21.344 5.121-37.242 24.438-37.242 47.274 0 26.89 21.875 48.66 48.66 48.66 15.047 0 27.32 12.27 27.32 27.316 0 15.047-12.168 27.426-27.32 27.426-15.047 0-27.316-12.274-27.316-27.32 0-5.868-4.805-10.672-10.672-10.672-5.871 0-10.672 4.804-10.672 10.672 0 22.945 15.898 42.152 37.242 47.273v10.992c0 5.871 4.8 10.672 10.672 10.672 5.867 0 10.672-4.8 10.672-10.672V450.32c22.09-4.59 38.734-24.222 38.734-47.699 0-26.89-21.875-48.66-48.66-48.66-15.047 0-27.316-12.274-27.316-27.316 0-13.875 10.457-25.504 24.007-27.106Zm0 0"
                        style="stroke:none;fill-rule:nonzero;fill-opacity:1;" fill="" data-original="#000000" class="">
                      </path>
                    </g>
                  </svg>
                </figure>
                <h5>Unrivaled Expertise</h5>
                <p>Benefit from the collective expertise of our team, which boasts years
                  of experience and a deep understanding of the intricacies of the steel industry. </p>
                
              </div>
            </div>
            <div class="service_block">
              <div class="service_wrap">
                <figure>
                  <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink"
                    xmlns:svgjs="http://svgjs.com/svgjs" width="512" height="512" x="0" y="0" viewBox="0 0 442 442"
                    style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                    <g>
                      <path
                        d="M171 336H70c-5.523 0-10 4.477-10 10s4.477 10 10 10h101c5.523 0 10-4.477 10-10s-4.477-10-10-10zM322 336H221c-5.523 0-10 4.477-10 10s4.477 10 10 10h101c5.522 0 10-4.477 10-10s-4.478-10-10-10zM322 86H70c-5.523 0-10 4.477-10 10s4.477 10 10 10h252c5.522 0 10-4.477 10-10s-4.478-10-10-10zM322 136H221c-5.523 0-10 4.477-10 10s4.477 10 10 10h101c5.522 0 10-4.477 10-10s-4.478-10-10-10zM322 186H221c-5.523 0-10 4.477-10 10s4.477 10 10 10h101c5.522 0 10-4.477 10-10s-4.478-10-10-10zM322 236H221c-5.523 0-10 4.477-10 10s4.477 10 10 10h101c5.522 0 10-4.477 10-10s-4.478-10-10-10zM322 286H221c-5.523 0-10 4.477-10 10s4.477 10 10 10h101c5.522 0 10-4.477 10-10s-4.478-10-10-10zM171 286H70c-5.523 0-10 4.477-10 10s4.477 10 10 10h101c5.523 0 10-4.477 10-10s-4.477-10-10-10zM171 136H70c-5.523 0-10 4.477-10 10v101c0 5.523 4.477 10 10 10h101c5.523 0 10-4.477 10-10V146c0-5.523-4.477-10-10-10zm-10 101H80v-81h81v81z"
                        fill="" opacity="1" data-original="" class=""></path>
                      <path
                        d="M422 76h-30V46c0-11.028-8.972-20-20-20H20C8.972 26 0 34.972 0 46v320c0 27.57 22.43 50 50 50h342c27.57 0 50-22.43 50-50V96c0-11.028-8.972-20-20-20zm0 290c0 16.542-13.458 30-30 30H50c-16.542 0-30-13.458-30-30V46h352v305c0 13.785 11.215 25 25 25 5.522 0 10-4.477 10-10s-4.478-10-10-10c-2.757 0-5-2.243-5-5V96h30v270z"
                        fill="" opacity="1" data-original="" class=""></path>
                    </g>
                  </svg>
                </figure>
                <h5>Accuracy</h5>
                <p>Trust in the accuracy and reliability of our data and analysis, backed by rigorous
                  research methodologies and a commitment to excellence. </p>
              </div>
            </div>
            <div class="service_block">
              <div class="service_wrap">
                <figure>
                  <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink"
                    xmlns:svgjs="http://svgjs.com/svgjs" width="512" height="512" x="0" y="0" viewBox="0 0 512 512"
                    style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                    <g>
                      <path
                        d="M488.399 492h-21.933V173.536c0-14.823-12.06-26.882-26.882-26.882H390.56c-14.823 0-26.882 12.06-26.882 26.882V492h-55.692V317.825c0-14.823-12.059-26.882-26.882-26.882H232.08c-14.823 0-26.882 12.06-26.882 26.882V492h-55.692v-90.204c0-14.823-12.06-26.882-26.882-26.882H73.599c-14.823 0-26.882 12.06-26.882 26.882V492H23.601c-5.523 0-10 4.477-10 10s4.477 10 10 10h464.798c5.523 0 10-4.477 10-10s-4.477-10-10-10zm-358.895 0H66.716v-90.204a6.89 6.89 0 0 1 6.882-6.882h49.024a6.89 6.89 0 0 1 6.882 6.882V492zm158.481 0h-62.788V317.825a6.89 6.89 0 0 1 6.882-6.882h49.024a6.89 6.89 0 0 1 6.882 6.882V492zm158.481 0h-62.788V173.536a6.89 6.89 0 0 1 6.882-6.882h49.024a6.89 6.89 0 0 1 6.882 6.882V492zM466.442 10.516A9.965 9.965 0 0 0 455.95.024c-.161-.007-.32-.024-.484-.024h-60.5c-5.523 0-10 4.477-10 10s4.477 10 10 10h37.357l-98.857 98.858-37.28-37.28a10.001 10.001 0 0 0-14.142 0l-179.769 179.77c-3.905 3.905-3.905 10.237 0 14.143 1.953 1.951 4.512 2.927 7.071 2.927s5.119-.976 7.071-2.929L289.115 102.79l37.28 37.28c3.905 3.905 10.237 3.905 14.143 0L446.466 34.143v33.81c0 5.523 4.477 10 10 10s10-4.477 10-10V11c0-.163-.017-.322-.024-.484z"
                        fill="" opacity="1" data-original=""></path>
                      <circle cx="75.64" cy="303.31" r="10" fill="" opacity="1" data-original=""></circle>
                    </g>
                  </svg>
                </figure>
                <h5>Data-driven Insights</h5>
                <p>Access timely, reliable insights backed by comprehensive data sets
                  and rigorous analysis, empowering you to make strategic decisions with precision. </p>
              </div>
            </div>
            <div class="service_block">
              <div class="service_wrap">
                <figure>
                  <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink"
                    xmlns:svgjs="http://svgjs.com/svgjs" width="512" height="512" x="0" y="0" viewBox="0 0 64 64"
                    style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                    <g>
                      <g data-name="Layer 8">
                        <path
                          d="m19.5 19.9 4.5 1.132a3.99 3.99 0 0 0 7.858.968h3.284a4 4 0 1 0 0-2h-3.284a3.973 3.973 0 0 0-7.353-.905L20 17.968a4.047 4.047 0 1 0-.5 1.936ZM39 19a2 2 0 1 1-2 2 2 2 0 0 1 2-2Zm-11 0a2 2 0 1 1-2 2 2 2 0 0 1 2-2Zm-14-1a2 2 0 1 1 2 2 2 2 0 0 1-2-2ZM38 31a1 1 0 0 0-1-1h-4a1 1 0 0 0-1 1v7h-2V28a1 1 0 0 0-1-1h-4a1 1 0 0 0-1 1v10h-2V25a1 1 0 0 0-1-1h-4a1 1 0 0 0-1 1v13h-2v2h30v-2h-6Zm-4 1h2v6h-2Zm-8-3h2v9h-2Zm-8-3h2v12h-2Z"
                          fill="" opacity="1" data-original="" class=""></path>
                        <path d="M7 27a20 20 0 0 1 40 0h2a22 22 0 1 0-22 22v-2A20.023 20.023 0 0 1 7 27Z" fill=""
                          opacity="1" data-original="" class=""></path>
                        <path
                          d="m61.672 55.257-9.3-9.3A3.4 3.4 0 0 0 52 41.586l-2.165-2.165a26.015 26.015 0 1 0-10.414 10.414L41.586 52a3.4 3.4 0 0 0 4.373.373l9.3 9.3a4.535 4.535 0 0 0 6.414-6.414ZM3 27a24 24 0 1 1 24 24A24.028 24.028 0 0 1 3 27Zm40 23.586-1.814-1.814a26.188 26.188 0 0 0 7.586-7.586L50.586 43a1.415 1.415 0 0 1 0 2L45 50.585a1.447 1.447 0 0 1-2 .001ZM58.465 61a2.52 2.52 0 0 1-1.793-.743L47.414 51 51 47.414l9.258 9.257A2.536 2.536 0 0 1 58.465 61Z"
                          fill="" opacity="1" data-original="" class=""></path>
                      </g>
                    </g>
                  </svg>
                </figure>
                <h5>Global Perspective</h5>
                <p>Gain a global perspective on the steel market, with coverage
                  spanning major regions, markets, and product segments, ensuring you stay informed
                  about developments around the world. </p>
              </div>
            </div>
            <div class="service_block">
              <div class="service_wrap">
                <figure>
                  <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink"
                    xmlns:svgjs="http://svgjs.com/svgjs" width="512" height="512" x="0" y="0" viewBox="0 0 512 512"
                    style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                    <g>
                      <path
                        d="M488.399 492h-21.933V173.536c0-14.823-12.06-26.882-26.882-26.882H390.56c-14.823 0-26.882 12.06-26.882 26.882V492h-55.692V317.825c0-14.823-12.059-26.882-26.882-26.882H232.08c-14.823 0-26.882 12.06-26.882 26.882V492h-55.692v-90.204c0-14.823-12.06-26.882-26.882-26.882H73.599c-14.823 0-26.882 12.06-26.882 26.882V492H23.601c-5.523 0-10 4.477-10 10s4.477 10 10 10h464.798c5.523 0 10-4.477 10-10s-4.477-10-10-10zm-358.895 0H66.716v-90.204a6.89 6.89 0 0 1 6.882-6.882h49.024a6.89 6.89 0 0 1 6.882 6.882V492zm158.481 0h-62.788V317.825a6.89 6.89 0 0 1 6.882-6.882h49.024a6.89 6.89 0 0 1 6.882 6.882V492zm158.481 0h-62.788V173.536a6.89 6.89 0 0 1 6.882-6.882h49.024a6.89 6.89 0 0 1 6.882 6.882V492zM466.442 10.516A9.965 9.965 0 0 0 455.95.024c-.161-.007-.32-.024-.484-.024h-60.5c-5.523 0-10 4.477-10 10s4.477 10 10 10h37.357l-98.857 98.858-37.28-37.28a10.001 10.001 0 0 0-14.142 0l-179.769 179.77c-3.905 3.905-3.905 10.237 0 14.143 1.953 1.951 4.512 2.927 7.071 2.927s5.119-.976 7.071-2.929L289.115 102.79l37.28 37.28c3.905 3.905 10.237 3.905 14.143 0L446.466 34.143v33.81c0 5.523 4.477 10 10 10s10-4.477 10-10V11c0-.163-.017-.322-.024-.484z"
                        fill="" opacity="1" data-original=""></path>
                      <circle cx="75.64" cy="303.31" r="10" fill="" opacity="1" data-original=""></circle>
                    </g>
                  </svg>
                </figure>
                <h5>Commitment to Excellence</h5>
                <p>Count on TheSteelDNA for excellence in quality, accuracy,
                  and reliability, as we strive to exceed your expectations and deliver value at every
                  touchpoint. </p>
              </div>
            </div>
            <div class="service_block">
              <div class="service_wrap">
                <figure>
                  <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink"
                    xmlns:svgjs="http://svgjs.com/svgjs" width="512" height="512" x="0" y="0" viewBox="0 0 64 64"
                    style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                    <g>
                      <g data-name="Layer 8">
                        <path
                          d="m19.5 19.9 4.5 1.132a3.99 3.99 0 0 0 7.858.968h3.284a4 4 0 1 0 0-2h-3.284a3.973 3.973 0 0 0-7.353-.905L20 17.968a4.047 4.047 0 1 0-.5 1.936ZM39 19a2 2 0 1 1-2 2 2 2 0 0 1 2-2Zm-11 0a2 2 0 1 1-2 2 2 2 0 0 1 2-2Zm-14-1a2 2 0 1 1 2 2 2 2 0 0 1-2-2ZM38 31a1 1 0 0 0-1-1h-4a1 1 0 0 0-1 1v7h-2V28a1 1 0 0 0-1-1h-4a1 1 0 0 0-1 1v10h-2V25a1 1 0 0 0-1-1h-4a1 1 0 0 0-1 1v13h-2v2h30v-2h-6Zm-4 1h2v6h-2Zm-8-3h2v9h-2Zm-8-3h2v12h-2Z"
                          fill="" opacity="1" data-original="" class=""></path>
                        <path d="M7 27a20 20 0 0 1 40 0h2a22 22 0 1 0-22 22v-2A20.023 20.023 0 0 1 7 27Z" fill=""
                          opacity="1" data-original="" class=""></path>
                        <path
                          d="m61.672 55.257-9.3-9.3A3.4 3.4 0 0 0 52 41.586l-2.165-2.165a26.015 26.015 0 1 0-10.414 10.414L41.586 52a3.4 3.4 0 0 0 4.373.373l9.3 9.3a4.535 4.535 0 0 0 6.414-6.414ZM3 27a24 24 0 1 1 24 24A24.028 24.028 0 0 1 3 27Zm40 23.586-1.814-1.814a26.188 26.188 0 0 0 7.586-7.586L50.586 43a1.415 1.415 0 0 1 0 2L45 50.585a1.447 1.447 0 0 1-2 .001ZM58.465 61a2.52 2.52 0 0 1-1.793-.743L47.414 51 51 47.414l9.258 9.257A2.536 2.536 0 0 1 58.465 61Z"
                          fill="" opacity="1" data-original="" class=""></path>
                      </g>
                    </g>
                  </svg>
                </figure>
                <h5>Customer Focus</h5>
                <p>We prioritize customer satisfaction and strive to exceed your
                  expectations by delivering value-added solutions and exceptional service. </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="price_section">
    <div class="container">
      <div class="section_heading mb-5 text-center">
        <h6>Pricing</h6>
        <h2>Latest Steel Price</h2>
      </div>

      <div class="row">
        <div class="col-12 table-wrap">
          <table class="table price_chart">
            <thead>
              <tr>
                <th colspan="2">Particular/Delivery/Region</th>
                <th>Size/Grade</th>
                <th>Price</th>
                <th>Min/Max</th>
                <th>Tax</th>
                <th>Delivery Period</th>
                <th></th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>
                  <img src="{{ asset('assets/front/images/in.png') }}">
                  <p class="text-center">IND</p>
                </td>
                <td>
                  <h5>Ingot, Steel Long Futures (NCDEX), India - Oct 2023</h5>
                  <p>2023-09-22 17:03:41 IST | Daily</p>
                </td>
                <td>
                  <p>IS 2830, 2831</p>
                </td>
                <td>
                  <span class="price_up">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                      stroke="" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"
                      class="feather feather-arrow-up">
                      <line x1="12" y1="19" x2="12" y2="5"></line>
                      <polyline points="5 12 12 5 19 12"></polyline>
                    </svg>
                  </span>
                </td>
                <td>
                  <p>INR</p>
                </td>
                <td>
                  <div class="badge text-bg-light">Tax</div>
                </td>
                <td>
                  <p>Within 45 Days</p>
                </td>
                <td>
                  <a href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                      stroke="" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"
                      class="feather feather-bar-chart-2">
                      <line x1="18" y1="20" x2="18" y2="10"></line>
                      <line x1="12" y1="20" x2="12" y2="4"></line>
                      <line x1="6" y1="20" x2="6" y2="14"></line>
                    </svg>
                  </a>
                  <a href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                      stroke="" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"
                      class="feather feather-plus-circle">
                      <circle cx="12" cy="12" r="10"></circle>
                      <line x1="12" y1="8" x2="12" y2="16"></line>
                      <line x1="8" y1="12" x2="16" y2="12"></line>
                    </svg>
                  </a>
                </td>
              </tr>
              <tr>
                <td>
                  <img src="{{ asset('assets/front/images/cn.png') }}">
                  <p class="text-center">CHN</p>
                </td>
                <td>
                  <h5>Ingot, Steel Long Futures (NCDEX), India - Oct 2023</h5>
                  <p>2023-09-22 17:03:41 IST | Daily</p>
                </td>
                <td>
                  <p>IS 2830, 2831</p>
                </td>
                <td>
                  <span class="price_down">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                      stroke="" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"
                      class="feather feather-arrow-down">
                      <line x1="12" y1="5" x2="12" y2="19"></line>
                      <polyline points="19 12 12 19 5 12"></polyline>
                    </svg>
                  </span>
                </td>
                <td>
                  <p>INR</p>
                </td>
                <td>
                  <div class="badge text-bg-light">Tax</div>
                </td>
                <td>
                  <p>Within 45 Days</p>
                </td>
                <td>
                  <a href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                      stroke="" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"
                      class="feather feather-bar-chart-2">
                      <line x1="18" y1="20" x2="18" y2="10"></line>
                      <line x1="12" y1="20" x2="12" y2="4"></line>
                      <line x1="6" y1="20" x2="6" y2="14"></line>
                    </svg>
                  </a>
                  <a href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                      stroke="" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"
                      class="feather feather-plus-circle">
                      <circle cx="12" cy="12" r="10"></circle>
                      <line x1="12" y1="8" x2="12" y2="16"></line>
                      <line x1="8" y1="12" x2="16" y2="12"></line>
                    </svg>
                  </a>
                </td>
              </tr>
              <tr>
                <td>
                  <img src="images/in.png">
                  <p class="text-center">IND</p>
                </td>
                <td>
                  <h5>Ingot, Steel Long Futures (NCDEX), India - Oct 2023</h5>
                  <p>2023-09-22 17:03:41 IST | Daily</p>
                </td>
                <td>
                  <p>IS 2830, 2831</p>
                </td>
                <td>
                  <span class="price_up">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                      stroke="" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"
                      class="feather feather-arrow-up">
                      <line x1="12" y1="19" x2="12" y2="5"></line>
                      <polyline points="5 12 12 5 19 12"></polyline>
                    </svg>
                  </span>
                </td>
                <td>
                  <p>INR</p>
                </td>
                <td>
                  <div class="badge text-bg-light">Tax</div>
                </td>
                <td>
                  <p>Within 45 Days</p>
                </td>
                <td>
                  <a href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                      stroke="" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"
                      class="feather feather-bar-chart-2">
                      <line x1="18" y1="20" x2="18" y2="10"></line>
                      <line x1="12" y1="20" x2="12" y2="4"></line>
                      <line x1="6" y1="20" x2="6" y2="14"></line>
                    </svg>
                  </a>
                  <a href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                      stroke="" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"
                      class="feather feather-plus-circle">
                      <circle cx="12" cy="12" r="10"></circle>
                      <line x1="12" y1="8" x2="12" y2="16"></line>
                      <line x1="8" y1="12" x2="16" y2="12"></line>
                    </svg>
                  </a>
                </td>
              </tr>
              <tr>
                <td>
                  <img src="{{ asset('assets/front/images/cn.png') }}">
                  <p class="text-center">CHN</p>
                </td>
                <td>
                  <h5>Ingot, Steel Long Futures (NCDEX), India - Oct 2023</h5>
                  <p>2023-09-22 17:03:41 IST | Daily</p>
                </td>
                <td>
                  <p>IS 2830, 2831</p>
                </td>
                <td>
                  <span class="price_down">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                      stroke="" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"
                      class="feather feather-arrow-down">
                      <line x1="12" y1="5" x2="12" y2="19"></line>
                      <polyline points="19 12 12 19 5 12"></polyline>
                    </svg>
                  </span>
                </td>
                <td>
                  <p>INR</p>
                </td>
                <td>
                  <div class="badge text-bg-light">Tax</div>
                </td>
                <td>
                  <p>Within 45 Days</p>
                </td>
                <td>
                  <a href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                      stroke="" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"
                      class="feather feather-bar-chart-2">
                      <line x1="18" y1="20" x2="18" y2="10"></line>
                      <line x1="12" y1="20" x2="12" y2="4"></line>
                      <line x1="6" y1="20" x2="6" y2="14"></line>
                    </svg>
                  </a>
                  <a href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                      stroke="" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"
                      class="feather feather-plus-circle">
                      <circle cx="12" cy="12" r="10"></circle>
                      <line x1="12" y1="8" x2="12" y2="16"></line>
                      <line x1="8" y1="12" x2="16" y2="12"></line>
                    </svg>
                  </a>
                </td>
              </tr>
              <tr>
                <td>
                  <img src="images/in.png">
                  <p class="text-center">IND</p>
                </td>
                <td>
                  <h5>Ingot, Steel Long Futures (NCDEX), India - Oct 2023</h5>
                  <p>2023-09-22 17:03:41 IST | Daily</p>
                </td>
                <td>
                  <p>IS 2830, 2831</p>
                </td>
                <td>
                  <span class="price_up">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                      stroke="" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"
                      class="feather feather-arrow-up">
                      <line x1="12" y1="19" x2="12" y2="5"></line>
                      <polyline points="5 12 12 5 19 12"></polyline>
                    </svg>
                  </span>
                </td>
                <td>
                  <p>INR</p>
                </td>
                <td>
                  <div class="badge text-bg-light">Tax</div>
                </td>
                <td>
                  <p>Within 45 Days</p>
                </td>
                <td>
                  <a href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                      stroke="" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"
                      class="feather feather-bar-chart-2">
                      <line x1="18" y1="20" x2="18" y2="10"></line>
                      <line x1="12" y1="20" x2="12" y2="4"></line>
                      <line x1="6" y1="20" x2="6" y2="14"></line>
                    </svg>
                  </a>
                  <a href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                      stroke="" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"
                      class="feather feather-plus-circle">
                      <circle cx="12" cy="12" r="10"></circle>
                      <line x1="12" y1="8" x2="12" y2="16"></line>
                      <line x1="8" y1="12" x2="16" y2="12"></line>
                    </svg>
                  </a>
                </td>
              </tr>
              <tr>
                <td>
                  <img src="{{ asset('assets/front/images/cn.png') }}">
                  <p class="text-center">CHN</p>
                </td>
                <td>
                  <h5>Ingot, Steel Long Futures (NCDEX), India - Oct 2023</h5>
                  <p>2023-09-22 17:03:41 IST | Daily</p>
                </td>
                <td>
                  <p>IS 2830, 2831</p>
                </td>
                <td>
                  <span class="price_down">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                      stroke="" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"
                      class="feather feather-arrow-down">
                      <line x1="12" y1="5" x2="12" y2="19"></line>
                      <polyline points="19 12 12 19 5 12"></polyline>
                    </svg>
                  </span>
                </td>
                <td>
                  <p>INR</p>
                </td>
                <td>
                  <div class="badge text-bg-light">Tax</div>
                </td>
                <td>
                  <p>Within 45 Days</p>
                </td>
                <td>
                  <a href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                      stroke="" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"
                      class="feather feather-bar-chart-2">
                      <line x1="18" y1="20" x2="18" y2="10"></line>
                      <line x1="12" y1="20" x2="12" y2="4"></line>
                      <line x1="6" y1="20" x2="6" y2="14"></line>
                    </svg>
                  </a>
                  <a href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                      stroke="" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"
                      class="feather feather-plus-circle">
                      <circle cx="12" cy="12" r="10"></circle>
                      <line x1="12" y1="8" x2="12" y2="16"></line>
                      <line x1="8" y1="12" x2="16" y2="12"></line>
                    </svg>
                  </a>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </section>

  <section class="blog_section">
    <div class="container">
      <div class="section_heading mb-5 text-center">
        <h6>Insights</h6>
        <h2>Latest Steel Blogs</h2>
      </div>

      <div class="row">
        <div class="col-sm-6">
          <div class="blog_block">
            <figure>
              <img src="{{ asset('assets/front/images/news1.jpg') }}">
            </figure>
            <figcaption>
              <div class="blog_meta">
                <div class="date"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                    fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"
                    class="feather feather-calendar">
                    <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
                    <line x1="16" y1="2" x2="16" y2="6"></line>
                    <line x1="8" y1="2" x2="8" y2="6"></line>
                    <line x1="3" y1="10" x2="21" y2="10"></line>
                  </svg> <span>18 NOV, 2023</span></div>

                <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                    fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"
                    class="feather feather-bookmark">
                    <path d="M19 21l-7-5-7 5V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2z"></path>
                  </svg></a>
              </div>
              <h3><a href="#">I think that you should be able to select more than one reason for rating.</a></h3>
              <ul class="blog_tag">
                <li>Only Steel</li>
                <li class="active">Insight</li>
              </ul>
            </figcaption>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="blog_block">
            <figure>
              <img src="{{ asset('assets/front/images/news2.jpg') }}">
            </figure>
            <figcaption>
              <div class="blog_meta">
                <div class="date"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                    fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"
                    class="feather feather-calendar">
                    <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
                    <line x1="16" y1="2" x2="16" y2="6"></line>
                    <line x1="8" y1="2" x2="8" y2="6"></line>
                    <line x1="3" y1="10" x2="21" y2="10"></line>
                  </svg> <span>18 NOV, 2023</span></div>

                <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                    fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"
                    class="feather feather-bookmark">
                    <path d="M19 21l-7-5-7 5V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2z"></path>
                  </svg></a>
              </div>
              <h3><a href="#">I think that you should be able to select more than one reason for rating.</a></h3>
              <ul class="blog_tag">
                <li>Only Steel</li>
                <li class="active">Insight</li>
              </ul>
            </figcaption>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="blog_block">
            <figure>
              <img src="{{ asset('assets/front/images/news3.jpg') }}">
            </figure>
            <figcaption>
              <div class="blog_meta">
                <div class="date"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                    fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"
                    class="feather feather-calendar">
                    <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
                    <line x1="16" y1="2" x2="16" y2="6"></line>
                    <line x1="8" y1="2" x2="8" y2="6"></line>
                    <line x1="3" y1="10" x2="21" y2="10"></line>
                  </svg> <span>18 NOV, 2023</span></div>

                <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                    fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"
                    class="feather feather-bookmark">
                    <path d="M19 21l-7-5-7 5V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2z"></path>
                  </svg></a>
              </div>
              <h3><a href="#">I think that you should be able to select more than one reason for rating.</a></h3>
              <ul class="blog_tag">
                <li>Only Steel</li>
                <li class="active">Insight</li>
              </ul>
            </figcaption>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="blog_block">
            <figure>
              <img src="{{ asset('assets/front/images/news1.jpg') }}">
            </figure>
            <figcaption>
              <div class="blog_meta">
                <div class="date"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                    fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"
                    class="feather feather-calendar">
                    <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
                    <line x1="16" y1="2" x2="16" y2="6"></line>
                    <line x1="8" y1="2" x2="8" y2="6"></line>
                    <line x1="3" y1="10" x2="21" y2="10"></line>
                  </svg> <span>18 NOV, 2023</span></div>

                <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                    fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"
                    class="feather feather-bookmark">
                    <path d="M19 21l-7-5-7 5V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2z"></path>
                  </svg></a>
              </div>
              <h3><a href="#">I think that you should be able to select more than one reason for rating.</a></h3>
              <ul class="blog_tag">
                <li>Only Steel</li>
                <li class="active">Insight</li>
              </ul>
            </figcaption>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="blog_block">
            <figure>
              <img src="{{ asset('assets/front/images/news2.jpg') }}">
            </figure>
            <figcaption>
              <div class="blog_meta">
                <div class="date"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                    fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"
                    class="feather feather-calendar">
                    <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
                    <line x1="16" y1="2" x2="16" y2="6"></line>
                    <line x1="8" y1="2" x2="8" y2="6"></line>
                    <line x1="3" y1="10" x2="21" y2="10"></line>
                  </svg> <span>18 NOV, 2023</span></div>

                <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                    fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"
                    class="feather feather-bookmark">
                    <path d="M19 21l-7-5-7 5V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2z"></path>
                  </svg></a>
              </div>
              <h3><a href="#">I think that you should be able to select more than one reason for rating.</a></h3>
              <ul class="blog_tag">
                <li>Only Steel</li>
                <li class="active">Insight</li>
              </ul>
            </figcaption>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="blog_block">
            <figure>
              <img src="{{ asset('assets/front/images/news3.jpg') }}">
            </figure>
            <figcaption>
              <div class="blog_meta">
                <div class="date"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                    fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"
                    class="feather feather-calendar">
                    <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
                    <line x1="16" y1="2" x2="16" y2="6"></line>
                    <line x1="8" y1="2" x2="8" y2="6"></line>
                    <line x1="3" y1="10" x2="21" y2="10"></line>
                  </svg> <span>18 NOV, 2023</span></div>

                <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                    fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"
                    class="feather feather-bookmark">
                    <path d="M19 21l-7-5-7 5V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2z"></path>
                  </svg></a>
              </div>
              <h3><a href="#">I think that you should be able to select more than one reason for rating.</a></h3>
              <ul class="blog_tag">
                <li>Only Steel</li>
                <li class="active">Insight</li>
              </ul>
            </figcaption>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="news_section">
    <div class="container">
      <div class="section_heading mb-5 text-center">
        <h6>News Desk</h6>
        <h2>Latest Steel News</h2>
      </div>

      <div class="row">
        <div class="col-sm-4">
          <div class="news_block">
            <figure>
              <img src="{{ asset('assets/front/images/news1.jpg') }}">
            </figure>
            <figcaption>
              <h3>Investing in the digital future.</h3>
              <p>STEEL allows your business and technology computers to store, transmit, analyze, and manipulate big
                data.</p>
              <a href="#">Continue reading</a>
            </figcaption>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="news_block">
            <figure>
              <img src="{{ asset('assets/front/images/news2.jpg') }}">
            </figure>
            <figcaption>
              <h3>Investing in the digital future.</h3>
              <p>STEEL allows your business and technology computers to store, transmit, analyze, and manipulate big
                data.</p>
              <a href="#">Continue reading</a>
            </figcaption>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="news_block">
            <figure>
              <img src="{{ asset('assets/front/images/news3.jpg') }}">
            </figure>
            <figcaption>
              <h3>Investing in the digital future.</h3>
              <p>STEEL allows your business and technology computers to store, transmit, analyze, and manipulate big
                data.</p>
              <a href="#">Continue reading</a>
            </figcaption>
          </div>
        </div>
      </div>
    </div>
  </section>


  <section class="price_section">
    <div class="container">
      <div class="section_heading mb-5 text-center">
        <h6>Pricing</h6>
        <h2>Latest Steel Prices</h2>
      </div>
      <div class="swiper mySwiper">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <div class="price_block">
              <div class="price_header">
                <figure>
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"
                    class="feather feather-table">
                    <path
                      d="M9 3H5a2 2 0 0 0-2 2v4m6-6h10a2 2 0 0 1 2 2v4M9 3v18m0 0h10a2 2 0 0 0 2-2V9M9 21H5a2 2 0 0 1-2-2V9m0 0h18">
                    </path>
                  </svg>
                </figure>
                <figcaption>Platinum</figcaption>
              </div>
              <div class="price">
                <span class="symbol">INR</span>
                <span class="amount">1200</span>
                <span class="symbol">/month</span>
              </div>
              <ul>
                <li>Price & Desk</li>
                <li>Latest News</li>
                <li>Market Datas</li>
                <li>Forecasts</li>
              </ul>
              <a href="#">
                <span>Sign Up Now</span>
                <span>
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"
                    class="feather feather-arrow-right">
                    <line x1="5" y1="12" x2="19" y2="12"></line>
                    <polyline points="12 5 19 12 12 19"></polyline>
                  </svg>
                </span>
              </a>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="price_block">
              <div class="price_header">
                <figure>
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"
                    class="feather feather-table">
                    <path
                      d="M9 3H5a2 2 0 0 0-2 2v4m6-6h10a2 2 0 0 1 2 2v4M9 3v18m0 0h10a2 2 0 0 0 2-2V9M9 21H5a2 2 0 0 1-2-2V9m0 0h18">
                    </path>
                  </svg>
                </figure>
                <figcaption>Platinum</figcaption>
              </div>
              <div class="price">
                <span class="symbol">INR</span>
                <span class="amount">1200</span>
                <span class="symbol">/month</span>
              </div>
              <ul>
                <li>Price & Desk</li>
                <li>Latest News</li>
                <li>Market Datas</li>
                <li>Forecasts</li>
              </ul>
              <a href="#">
                <span>Sign Up Now</span>
                <span>
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"
                    class="feather feather-arrow-right">
                    <line x1="5" y1="12" x2="19" y2="12"></line>
                    <polyline points="12 5 19 12 12 19"></polyline>
                  </svg>
                </span>
              </a>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="price_block">
              <div class="price_header">
                <figure>
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"
                    class="feather feather-table">
                    <path
                      d="M9 3H5a2 2 0 0 0-2 2v4m6-6h10a2 2 0 0 1 2 2v4M9 3v18m0 0h10a2 2 0 0 0 2-2V9M9 21H5a2 2 0 0 1-2-2V9m0 0h18">
                    </path>
                  </svg>
                </figure>
                <figcaption>Platinum</figcaption>
              </div>
              <div class="price">
                <span class="symbol">INR</span>
                <span class="amount">1200</span>
                <span class="symbol">/month</span>
              </div>
              <ul>
                <li>Price & Desk</li>
                <li>Latest News</li>
                <li>Market Datas</li>
                <li>Forecasts</li>
              </ul>
              <a href="#">
                <span>Sign Up Now</span>
                <span>
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"
                    class="feather feather-arrow-right">
                    <line x1="5" y1="12" x2="19" y2="12"></line>
                    <polyline points="12 5 19 12 12 19"></polyline>
                  </svg>
                </span>
              </a>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="price_block">
              <div class="price_header">
                <figure>
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"
                    class="feather feather-table">
                    <path
                      d="M9 3H5a2 2 0 0 0-2 2v4m6-6h10a2 2 0 0 1 2 2v4M9 3v18m0 0h10a2 2 0 0 0 2-2V9M9 21H5a2 2 0 0 1-2-2V9m0 0h18">
                    </path>
                  </svg>
                </figure>
                <figcaption>Platinum</figcaption>
              </div>
              <div class="price">
                <span class="symbol">INR</span>
                <span class="amount">1200</span>
                <span class="symbol">/month</span>
              </div>
              <ul>
                <li>Price & Desk</li>
                <li>Latest News</li>
                <li>Market Datas</li>
                <li>Forecasts</li>
              </ul>
              <a href="#">
                <span>Sign Up Now</span>
                <span>
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"
                    class="feather feather-arrow-right">
                    <line x1="5" y1="12" x2="19" y2="12"></line>
                    <polyline points="12 5 19 12 12 19"></polyline>
                  </svg>
                </span>
              </a>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="price_block">
              <div class="price_header">
                <figure>
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"
                    class="feather feather-table">
                    <path
                      d="M9 3H5a2 2 0 0 0-2 2v4m6-6h10a2 2 0 0 1 2 2v4M9 3v18m0 0h10a2 2 0 0 0 2-2V9M9 21H5a2 2 0 0 1-2-2V9m0 0h18">
                    </path>
                  </svg>
                </figure>
                <figcaption>Platinum</figcaption>
              </div>
              <div class="price">
                <span class="symbol">INR</span>
                <span class="amount">1200</span>
                <span class="symbol">/month</span>
              </div>
              <ul>
                <li>Price & Desk</li>
                <li>Latest News</li>
                <li>Market Datas</li>
                <li>Forecasts</li>
              </ul>
              <a href="#">
                <span>Sign Up Now</span>
                <span>
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"
                    class="feather feather-arrow-right">
                    <line x1="5" y1="12" x2="19" y2="12"></line>
                    <polyline points="12 5 19 12 12 19"></polyline>
                  </svg>
                </span>
              </a>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="price_block">
              <div class="price_header">
                <figure>
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"
                    class="feather feather-table">
                    <path
                      d="M9 3H5a2 2 0 0 0-2 2v4m6-6h10a2 2 0 0 1 2 2v4M9 3v18m0 0h10a2 2 0 0 0 2-2V9M9 21H5a2 2 0 0 1-2-2V9m0 0h18">
                    </path>
                  </svg>
                </figure>
                <figcaption>Platinum</figcaption>
              </div>
              <div class="price">
                <span class="symbol">INR</span>
                <span class="amount">1200</span>
                <span class="symbol">/month</span>
              </div>
              <ul>
                <li>Price & Desk</li>
                <li>Latest News</li>
                <li>Market Datas</li>
                <li>Forecasts</li>
              </ul>
              <a href="#">
                <span>Sign Up Now</span>
                <span>
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"
                    class="feather feather-arrow-right">
                    <line x1="5" y1="12" x2="19" y2="12"></line>
                    <polyline points="12 5 19 12 12 19"></polyline>
                  </svg>
                </span>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <footer>
    <div class="container">
      <div class="row">
        <div class="col-sm-4">
          <div class="footer_content me-5">
            <img src="images/footer-logo.png" class="footer_logo">
            <p>STEEL allows your business and technology computers to store, transmit, analyze, and manipulate big data.
            </p>
          </div>
        </div>
        <div class="col-sm-4">
          <h4>Contact</h4>

          <div class="footer_meta">
            <figure>
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"
                class="feather feather-mail">
                <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
                <polyline points="22,6 12,13 2,6"></polyline>
              </svg>
            </figure>
            <figcaption>
              <h6>Looking for collaboration?</h6>
              <p>info@steeldna.com</p>
            </figcaption>
          </div>

          <div class="footer_meta">
            <figure>
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"
                class="feather feather-phone-call">
                <path
                  d="M15.05 5A5 5 0 0 1 19 8.95M15.05 1A9 9 0 0 1 23 8.94m-1 7.98v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z">
                </path>
              </svg>
            </figure>
            <figcaption>
              <h6>Monday-Friday: 08am-9pm</h6>
              <p>+(1) 123 456 7890</p>
            </figcaption>
          </div>

          <div class="footer_meta">
            <figure>
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"
                class="feather feather-map-pin">
                <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                <circle cx="12" cy="10" r="3"></circle>
              </svg>
            </figure>
            <figcaption>
              <h6>Visit our Local Store</h6>
              <p>14th Street, Soho</p>
            </figcaption>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="row">
            <div class="col-6">
              <h4>Useful Links</h4>
              <ul class="footer_menu">
                <li><a href="#">Our Vision, Mission & Core Values</a></li>
                <li><a href="#">Ethics & Integrity</a></li>
                <li><a href="#">Locations</a></li>
              </ul>
            </div>
            <div class="col-6">
              <h4>Company</h4>
              <ul class="footer_menu">
                <li><a href="#">Contact Us</a></li>
                <li><a href="#">Careers</a></li>
                <li><a href="#">Terms of Use</a></li>
                <li><a href="#">Cookie Update</a></li>
                <li><a href="#">Privacy Policy</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>

    <section class="footer_bottom">
      <p>Copyright ©2020 Steel Corporation.</p>
    </section>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <script type="text/javascript" src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
  <script type="text/javascript">
    $(window).on("scroll", function () {
      if ($(window).scrollTop() > 200) {
        $(".header").addClass("is-stuck");
      } else {
        $(".header").removeClass("is-stuck");
      }
    });
  </script>
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

  <!-- Initialize Swiper -->
  <script>
    var swiper = new Swiper(".mySwiper", {
      slidesPerView: 3,
      spaceBetween: 30,
      autoplay: true,
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
      breakpoints: {
        540: {
          slidesPerView: 1,
          spaceBetween: 20,
        },
        768: {
          slidesPerView: 2,
          spaceBetween: 40,
        },
        1024: {
          slidesPerView: 3,
          spaceBetween: 50,
        },
      },
    });
  </script>
</body>

</html>