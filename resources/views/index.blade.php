<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('css/jquery-ui.css') }}" rel="stylesheet">

  <link href="{{ asset('css/bootstrap-icons.css') }}" rel="stylesheet">

  <link href="{{ asset('css/all.min.css') }}" rel="stylesheet">

  <link href="{{ asset('css/animate.min.css') }}" rel="stylesheet">

  <link href="{{ asset('css/jquery.fancybox.min.css') }}" rel="stylesheet">

  <link href="{{ asset('css/fontawesome.min.css') }}" rel="stylesheet">

  <link rel="stylesheet" href="{{ asset('css/swiper-bundle.min.css') }}">

  <link rel="stylesheet" href="{{ asset('css/slick.css') }}">
  <link rel="stylesheet" href="{{ asset('css/slick-theme.css') }}">

  <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">

  <link href="{{ asset('css/boxicons.min.css') }}" rel="stylesheet">

  <link href="{{ asset('css/nice-select.css') }}" rel="stylesheet">

  <link rel="stylesheet" href="{{ asset('css/style.css') }}">

  <title>Drivco - Car Dealer HTML Template</title>
  <link rel="icon" href="{{asset('images/sm-logo.svg')}}" type="image/gif" sizes="20x20">
</head>
<body class="tt-magic-cursor home-5">

<div class="egns-preloader">
  <div class="preloader-close-btn">
    <span><i class="bi bi-x-lg"></i> Close</span>
  </div>
  <div class="container">
    <div class="row d-flex justify-content-center">
      <div class="col-6">
        <div class="circle-border">
          <div class="moving-circle"></div>
          <div class="moving-circle"></div>
          <div class="moving-circle"></div>
          <svg width="180px" height="150px" viewBox="0 0 187.3 93.7" preserveAspectRatio="xMidYMid meet"
               style="left: 50%; top: 50%; position: absolute; transform: translate(-50%, -50%) matrix(1, 0, 0, 1, 0, 0);">
            <path stroke="#D90A2C" id="outline" fill="none" stroke-width="4" stroke-linecap="round"
                  stroke-linejoin="round" stroke-miterlimit="10"
                  d="M93.9,46.4c9.3,9.5,13.8,17.9,23.5,17.9s17.5-7.8,17.5-17.5s-7.8-17.6-17.5-17.5c-9.7,0.1-13.3,7.2-22.1,17.1 c-8.9,8.8-15.7,17.9-25.4,17.9s-17.5-7.8-17.5-17.5s7.8-17.5,17.5-17.5S86.2,38.6,93.9,46.4z"></path>
            <path id="outline-bg" opacity="0.05" fill="none" stroke="#959595" stroke-width="4"
                  stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"
                  d="M93.9,46.4c9.3,9.5,13.8,17.9,23.5,17.9s17.5-7.8,17.5-17.5s-7.8-17.6-17.5-17.5c-9.7,0.1-13.3,7.2-22.1,17.1 c-8.9,8.8-15.7,17.9-25.4,17.9s-17.5-7.8-17.5-17.5s7.8-17.5,17.5-17.5S86.2,38.6,93.9,46.4z"></path>
          </svg>
        </div>
      </div>
    </div>
  </div>
</div>


<div class="modal signUp-modal fade" id="signUpModal01" tabindex="-1" aria-labelledby="signUpModal01Label"
     aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="signUpModal01Label">Sign Up</h4>
        <p>Already have an account?
          <button type="button" data-bs-toggle="modal" data-bs-target="#logInModal01">Log In</button>
        </p>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i
            class="bi bi-x"></i></button>
      </div>
      <div class="modal-body">
        <form>
          <div class="row g-4">
            <div class="col-md-6">
              <div class="form-inner">
                <label>First Name*</label>
                <input type="text" placeholder="Daniel">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-inner">
                <label>Last Name*</label>
                <input type="text" placeholder="Last name">
              </div>
            </div>
            <div class="col-md-12">
              <div class="form-inner">
                <label>Enter your email address*</label>
                <input type="email" placeholder="Type email">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-inner">
                <label>Password*</label>
                <input id="password" type="password" placeholder="*** ***">
                <i class="bi bi-eye-slash" id="togglePassword"></i>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-inner">
                <label>Confirm Password*</label>
                <input id="password2" type="password" placeholder="*** ***">
                <i class="bi bi-eye-slash" id="togglePassword2"></i>
              </div>
            </div>
            <div class="col-md-12">
              <div class="form-inner">
                <button class="primary-btn2" type="submit">Sign Up Now</button>
              </div>
            </div>
          </div>
          <div class="terms-conditon">
            <p>By sign up,you agree to the <a href="#">‘terms &amp; conditons’</a></p>
          </div>
          <ul class="social-icon">
            <li><a href="#"><img src="images/google.svg" alt=""></a></li>
            <li><a href="#"><img src="images/facebook.svg" alt=""></a></li>
            <li><a href="#"><img src="images/twiter.svg" alt=""></a></li>
          </ul>
        </form>
      </div>
    </div>
  </div>
</div>
<div class="modal signUp-modal fade" id="logInModal01" tabindex="-1" aria-labelledby="logInModal01Label"
     aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="logInModal01Label">Log In</h4>
        <p>Don’t have any account?
          <button type="button" data-bs-toggle="modal" data-bs-target="#signUpModal01">Sign Up</button>
        </p>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i
            class="bi bi-x"></i></button>
      </div>
      <div class="modal-body">
        <form>
          <div class="row g-4">
            <div class="col-md-12">
              <div class="form-inner">
                <label>Enter your email address*</label>
                <input type="email" placeholder="Type email">
              </div>
            </div>
            <div class="col-md-12">
              <div class="form-inner">
                <label>Password*</label>
                <input id="password3" type="password" placeholder="*** ***">
                <i class="bi bi-eye-slash" id="togglePassword3"></i>
              </div>
            </div>
            <div class="col-lg-12">
              <div class="form-agreement form-inner d-flex justify-content-between flex-wrap">
                <div class="form-group">
                  <input type="checkbox" id="html">
                  <label for="html">Remember Me</label>
                </div>
                <a href="#" class="forgot-pass">Forget Password?</a>
              </div>
            </div>
            <div class="col-md-12">
              <div class="form-inner">
                <button class="primary-btn2" type="submit">Log In</button>
              </div>
            </div>
          </div>
          <div class="terms-conditon">
            <p>By sign up,you agree to the <a href="#">‘terms &amp; conditons’</a></p>
          </div>
          <ul class="social-icon">
            <li><a href="#"><img src="images/google.svg" alt=""></a></li>
            <li><a href="#"><img src="images/facebook.svg" alt=""></a></li>
            <li><a href="#"><img src="images/twiter.svg" alt=""></a></li>
          </ul>
        </form>
      </div>
    </div>
  </div>
</div>
<div class="modal signUp-modal sell-with-us fade" id="sellUsModal01" tabindex="-1" aria-labelledby="sellUsModal01Label"
     aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="sellUsModal01Label">Sell Your Car</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i
            class="bi bi-x"></i></button>
      </div>
      <div class="modal-body">
        <form>
          <div class="row">
            <div class="col-lg-12 mb-15">
              <h5>Your Personal Info</h5>
            </div>
            <div class="col-md-6 mb-20">
              <div class="form-inner">
                <label>Full Name*</label>
                <input type="text" placeholder="Full Name*">
              </div>
            </div>
            <div class="col-md-6 mb-20">
              <div class="form-inner">
                <label>Phone*</label>
                <input type="text" placeholder="+880- 123 234 ***">
              </div>
            </div>
            <div class="col-md-6 mb-20">
              <div class="form-inner">
                <label>Email (Optional)</label>
                <input type="text" placeholder="Enter your email address">
              </div>
            </div>
            <div class="col-md-6 mb-20">
              <div class="form-inner">
                <label>Location*</label>
                <input type="text" placeholder="Enter your address">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-12 mb-15 mt-25">
              <h5>Your Car Info</h5>
            </div>
            <div class="col-md-6 mb-20">
              <div class="form-inner">
                <label>Car Brand Name*</label>
                <input type="text" placeholder="Toyota">
              </div>
            </div>
            <div class="col-md-6 mb-20">
              <div class="form-inner">
                <label>Model*</label>
                <input type="text" placeholder="RS eTN 80">
              </div>
            </div>
            <div class="col-md-6 mb-20">
              <div class="form-inner">
                <label>Reg. Year*</label>
                <input type="text" placeholder="2022">
              </div>
            </div>
            <div class="col-md-6 mb-20">
              <div class="form-inner">
                <label>Mileage*</label>
                <input type="text" placeholder="23,456 miles">
              </div>
            </div>
            <div class="col-md-6 mb-20">
              <div class="form-inner">
                <label>Fuel Type*</label>
                <input type="text" placeholder="Petrol">
              </div>
            </div>
            <div class="col-md-6 mb-20">
              <div class="form-inner">
                <label>Selling Price*</label>
                <input type="text" placeholder="Ex- $23,342.000">
              </div>
            </div>
            <div class="col-md-12 mb-35">
              <div class="form-inner">
                <label>Your Car Note*</label>
                <textarea placeholder="Write somethings"></textarea>
              </div>
            </div>
            <div class="col-lg-12">
              <div class="form-inner">
                <button class="primary-btn2" type="submit">Submit Now</button>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<div class="modal adSearch-modal fade" id="adSearchModal01" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content">
      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i class="bi bi-x"></i>
      </button>
      <div class="modal-body">
        <form>
          <h5 class="main-title">Advanced Option</h5>
          <div class="row">
            <div class="col-md-12 mb-30">
              <div class="form-inner">
                <select>
                  <option value="1">Sydne City, Australia</option>
                  <option value="2">Dhaka, Bangladesh</option>
                  <option value="3">Tokyo, Japan</option>
                </select>
              </div>
            </div>
            <h5>More Filter</h5>
            <div class="row mb-10">
              <div class="col-md-6 mb-20">
                <div class="form-inner">
                  <label>Select Brand </label>
                  <select>
                    <option value="1"> Mercedes Benz</option>
                    <option value="2">Volkswagen</option>
                    <option value="3">Mitsubishi</option>
                    <option value="4 ">Tesla</option>
                  </select>
                </div>
              </div>
              <div class="col-md-6 mb-20">
                <div class="form-inner">
                  <label>Select Body Type</label>
                  <select>
                    <option value="1">Hatchback</option>
                    <option value="2">Covertible</option>
                    <option value="3">Coupe</option>
                    <option value="4 ">Truck</option>
                  </select>
                </div>
              </div>
              <div class="col-md-6 mb-20">
                <div class="form-inner">
                  <label>Select Fuel Type </label>
                  <select>
                    <option value="1"> Petrol + Gas</option>
                    <option value="2">Petrol</option>
                    <option value="3">Gas</option>
                  </select>
                </div>
              </div>
              <div class="col-md-6 mb-20">
                <div class="form-inner">
                  <label>Steering Side</label>
                  <select>
                    <option value="1">Left</option>
                    <option value="2">Right</option>
                  </select>
                </div>
              </div>
              <div class="col-md-6 mb-20">
                <div class="form-inner">
                  <label>Select Color</label>
                  <select>
                    <option value="1">Yellow</option>
                    <option value="2">Brown</option>
                    <option value="3">Red</option>
                    <option value="4">Silver</option>
                    <option value="5">Orange</option>
                    <option value="6">Blue</option>
                    <option value="7">Gray</option>
                  </select>
                </div>
              </div>
              <div class="col-md-6 mb-20">
                <div class="form-inner">
                  <label>Select Doors</label>
                  <select>
                    <option value="1">03 doors</option>
                    <option value="2">04 doors</option>
                    <option value="3">06 doors</option>
                    <option value="4 ">08 doors</option>
                  </select>
                </div>
              </div>
            </div>
            <h5>Year &amp; Mileage</h5>
            <div class="row">
              <div class="col-md-6 mb-20">
                <div class="form-inner">
                  <label>Select Year </label>
                  <select>
                    <option value="1">2021</option>
                    <option value="2">2020</option>
                    <option value="3">2019</option>
                    <option value="4 ">2018</option>
                  </select>
                </div>
              </div>
              <div class="col-md-3 mb-20">
                <div class="form-inner">
                  <label>Select Min (miles)</label>
                  <select>
                    <option value="1">800 miles</option>
                    <option value="2">1500 miles</option>
                    <option value="3">2000 miles</option>
                    <option value="4 ">2500 miles</option>
                  </select>
                </div>
              </div>
              <div class="col-md-3 mb-20">
                <div class="form-inner">
                  <label>Select Max (miles)</label>
                  <select>
                    <option value="1">1200 miles</option>
                    <option value="2">3000 miles</option>
                    <option value="3">3500 miles</option>
                    <option value="4 ">4000 miles</option>
                  </select>
                </div>
              </div>
            </div>
            <h5 class="mb-20">Price Range</h5>
            <div class="row">
              <div class="col-lg-6 mb-20">
                <div class="range-wrapper2">
                  <div class="slider-wrapper">
                    <div id="eg-range-slider"></div>
                  </div>
                  <div class="valus">
                    <div class="min-value">
                      <span>$</span>
                      <input type="text" class="from" value="200">
                    </div>
                    <div class="min-value">
                      <span>$</span>
                      <input type="text" class="to" value="2000">
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-3 mb-20">
                <div class="form-inner">
                  <label>Min (Price)</label>
                  <select>
                    <option value="1">$2,234</option>
                    <option value="2">$3,234</option>
                    <option value="3">$4,234</option>
                    <option value="4 ">$5,234</option>
                  </select>
                </div>
              </div>
              <div class="col-md-3 mb-20">
                <div class="form-inner">
                  <label>Max (Price)</label>
                  <select>
                    <option value="1">$12,234</option>
                    <option value="2">$13,234</option>
                    <option value="3">$14,234</option>
                    <option value="4 ">$15,234</option>
                  </select>
                </div>
              </div>
            </div>
          </div>
          <div class="apply-btn pt-30">
            <button class="primary-btn2" type="submit">Apply Filter</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<div class="top-bar style-5">
  <div class="logo-and-menu">
    <div class="company-logo">
      <a href="index.html"><img src="images/green-logo.svg" alt=""></a>
    </div>
    <div class="menu">
      <ul>
        <li><a href="#">Newly Listed Car</a></li>
        <li><a href="#">Lowest Mileage</a></li>
        <li><a href="#">Offer</a></li>
      </ul>
    </div>
  </div>
  <div class="topbar-right">
    <ul>
      <li>
        <button class="sell-btn" type="button" data-bs-toggle="modal" data-bs-target="#sellUsModal01">
          <svg width="16" height="16" viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/svg">
            <path
              d="M17.5588 0C17.447 0.00287726 17.3409 0.0492946 17.2629 0.129351L15.4245 1.97099L14.8707 1.4164C14.5627 1.10919 14.2078 0.938606 13.8585 0.928904C13.6483 0.923245 13.4543 0.953158 13.2231 0.985496L10.2237 1.40265C9.12021 1.55626 8.55995 2.02839 7.84852 2.69132L0.470643 9.56715C0.467641 9.5698 0.464677 9.5725 0.46175 9.57523C0.142414 9.89053 0.00416943 10.3206 0.000127199 10.7442C-0.00472348 11.1679 0.12867 11.6166 0.484386 11.9205L0.460133 11.8971L6.10309 17.5417L6.08045 17.5174C6.38443 17.8731 6.8323 18.0057 7.25674 18.0009C7.68036 17.9968 8.11127 17.8586 8.42575 17.54C8.42849 17.5368 8.43119 17.5336 8.43384 17.5303L8.94073 16.9863L10.9586 17.7381C11.1627 17.8161 11.3805 17.8522 11.5988 17.8442C11.8172 17.8361 12.0317 17.7841 12.2295 17.6912C12.6135 17.5109 12.9474 17.2062 13.101 16.7858L15.3161 10.1452C15.9758 9.4378 16.4455 8.87674 16.5983 7.77725L17.0155 4.77792C17.0478 4.5467 17.0777 4.35186 17.0721 4.14248C17.0624 3.79323 16.8926 3.43913 16.5846 3.1303L16.03 2.57652L17.87 0.736494C17.932 0.676327 17.9743 0.598838 17.9915 0.51419C18.0086 0.429542 17.9998 0.341686 17.9661 0.262143C17.9325 0.182601 17.8756 0.115085 17.8029 0.0684494C17.7302 0.0218141 17.6451 -0.00176348 17.5588 0.000808484V0ZM13.8351 1.78505C14.0032 1.78909 14.0372 1.79394 14.2643 2.02192L14.8189 2.57571L13.8351 3.5604C13.6631 3.47636 13.4743 3.43241 13.2829 3.43185C12.5779 3.43185 11.9967 4.01393 11.9967 4.71809C11.9967 5.42306 12.5779 6.00352 13.2821 6.00352C13.9871 6.00352 14.5683 5.42306 14.5683 4.71809C14.5683 4.52083 14.5214 4.33408 14.4406 4.16592L15.4245 3.18123L15.9783 3.73583C16.2062 3.963 16.2111 3.99696 16.2151 4.16431C16.2104 4.33015 16.1942 4.49547 16.1666 4.65907L15.7503 7.65841C15.6209 8.58812 15.342 8.85976 14.6831 9.56796L7.81537 16.9369C7.70462 17.0493 7.47583 17.1407 7.24704 17.1431C7.01825 17.1463 6.8226 17.0647 6.73286 16.9596C6.72537 16.9512 6.71755 16.9431 6.70942 16.9353L1.06647 11.2908C1.05869 11.2826 1.0506 11.2748 1.04221 11.2673C0.937116 11.1784 0.854655 10.9819 0.857888 10.7531C0.860314 10.5252 0.951668 10.2956 1.06404 10.1848L8.43303 3.31786C9.14123 2.65817 9.41286 2.38006 10.3426 2.25071L13.3419 1.83356C13.5731 1.80122 13.7348 1.78181 13.8351 1.78505ZM13.2829 4.28881C13.5246 4.28881 13.7114 4.47637 13.7114 4.71809C13.7114 4.95982 13.5246 5.14657 13.2829 5.14657C13.0404 5.14657 12.8544 4.95982 12.8544 4.71809C12.8544 4.47637 13.0404 4.28881 13.2829 4.28881ZM5.99314 8.99881C5.90784 8.99872 5.82446 9.0241 5.75367 9.07168C5.68288 9.11926 5.6279 9.18689 5.59578 9.2659C5.56365 9.34492 5.55584 9.43172 5.57334 9.5152C5.59084 9.59868 5.63286 9.67504 5.69401 9.7345L8.26568 12.3054C8.6699 12.7096 9.27624 12.1032 8.87201 11.699L6.30035 9.12816C6.26038 9.08717 6.2126 9.05461 6.15984 9.03239C6.10707 9.01017 6.05039 8.99876 5.99314 8.99881ZM4.70771 10.2834C4.62224 10.2832 4.53865 10.3085 4.46769 10.3561C4.39672 10.4037 4.34161 10.4715 4.30945 10.5507C4.27729 10.6299 4.26955 10.7168 4.28721 10.8005C4.30488 10.8841 4.34714 10.9605 4.40858 11.0199L6.98025 13.5908C7.38447 14.0217 8.01749 13.3879 7.58658 12.9845L5.01573 10.4144C4.9758 10.373 4.92795 10.3401 4.87503 10.3176C4.82212 10.2951 4.76521 10.2835 4.70771 10.2834ZM13.9094 11.6537L12.2958 16.4907C12.2408 16.6386 12.071 16.8181 11.8641 16.9151C11.6571 17.0121 11.4493 17.0097 11.32 16.9612L9.57213 16.3072L13.9094 11.6537Z"></path>
          </svg>
          SELL WITH US
        </button>
      </li>
      <li>
        <a href="#">
          <svg width="16" height="16" viewBox="0 0 14 14" xmlns="http://www.w3.org/2000/svg">
            <path
              d="M7.00012 2.40453L6.37273 1.75966C4.90006 0.245917 2.19972 0.76829 1.22495 2.67141C0.767306 3.56653 0.664053 4.8589 1.4997 6.50827C2.30473 8.09639 3.97953 9.99864 7.00012 12.0706C10.0207 9.99864 11.6946 8.09639 12.5005 6.50827C13.3362 4.85803 13.2338 3.56653 12.7753 2.67141C11.8005 0.76829 9.10019 0.245042 7.62752 1.75879L7.00012 2.40453ZM7.00012 13.125C-6.41666 4.25953 2.86912 -2.65995 6.84612 1.00016C6.89862 1.04829 6.95024 1.09816 7.00012 1.14979C7.04949 1.09821 7.10087 1.04859 7.15413 1.00104C11.1302 -2.6617 20.4169 4.25865 7.00012 13.125Z"></path>
          </svg>
          SAVE
        </a>
      </li>
      <li>
        <div class="hotline-area d-xl-flex d-none">
          <div class="icon">
            <img src="images/hotline-icon.svg" alt="">
          </div>
          <div class="content">
            <span>To More Inquiry</span>
            <h6><a href="tel:+990737621432">+990-737 621 432</a></h6>
          </div>
        </div>
      </li>
    </ul>
  </div>
</div>

<header class="header-area style-5">
  <div class="header-logo d-lg-none d-flex">
    <a href="index.html"><img alt="image" class="img-fluid" src="images/green-logo.svg"></a>
  </div>
  <div class="main-menu">
    <div class="mobile-logo-area d-lg-none d-flex justify-content-between align-items-center">
      <div class="mobile-logo-wrap">
        <a href="index.html"><img alt="image" src="images/green-logo.svg"></a>
      </div>
    </div>
    <ul class="menu-list">
      <li class="menu-item-has-children active">
        <a href="#" class="drop-down">Home</a><i class="bi bi-plus dropdown-icon"></i>
        <ul class="sub-menu">
          <li><a href="index.html">Home 01</a></li>
          <li><a href="index2.html">Home 02</a></li>
          <li><a href="index3.html">Home 03</a></li>
          <li><a href="index4.html">Home 04</a></li>
          <li><a href="index5.html">Home 05</a></li>
          <li><a href="index6.html">Home 06</a></li>
        </ul>
      </li>
      <li class="position-inherit">
        <a href="#" class="drop-down">NEW CAR</a>
        <i class="bi bi-plus dropdown-icon d-lg-none d-block"></i>
        <div class="mega-menu">
          <ul class="menu-row">
            <li class="menu-single-item">
              <h6>Browse by Brand</h6>
              <ul>
                <li><a href="single-brand-category.html">Merchedes Benz (10) <img
                      src="images/merchedes.svg" alt=""></a></li>
                <li><a href="single-brand-category.html">Volkswagen (10) <img
                      src="images/volkswagen.svg" alt=""></a></li>
                <li><a href="single-brand-category.html">Ferrari (10) <img src="images/ferrari.svg"
                                                                           alt=""></a></li>
                <li><a href="single-brand-category.html">Mazda (10) <img src="images/mazda.svg" alt=""></a>
                </li>
                <li><a href="single-brand-category.html">Mitsubishi (10) <img
                      src="images/mitsubishi.svg" alt=""></a></li>
                <li><a href="single-brand-category.html">Lamborghini (10) <img
                      src="images/lamborghini.svg" alt=""></a></li>
                <li><a href="single-brand-category.html">Tesla (10) <img src="images/tesla.svg" alt=""></a>
                </li>
                <li><a href="single-brand-category.html">Toyota (10) <img src="images/toyota.svg"
                                                                          alt=""></a></li>
                <li class="explore-more-btn">
                  <a href="brand-category.html">Explore More <i class="bi bi-arrow-right"></i></a>
                </li>
              </ul>
            </li>
            <li class="menu-single-item">
              <h6>Popular Models</h6>
              <ul>
                <li><a href="single-brand-category.html">Toyota Camry</a></li>
                <li><a href="single-brand-category.html">Ford Mustang</a></li>
                <li><a href="single-brand-category.html">Volkswagen Golf</a></li>
                <li><a href="single-brand-category.html">Mercedes C-Class</a></li>
                <li><a href="single-brand-category.html">Audi A4</a></li>
                <li><a href="single-brand-category.html">Jeep Wrangler</a></li>
                <li><a href="single-brand-category.html">Mazda CX-5</a></li>
                <li><a href="single-brand-category.html">Chevrolet Corvette</a></li>
                <li class="explore-more-btn">
                  <a href="brand-category.html">Explore More <i class="bi bi-arrow-right"></i></a>
                </li>
              </ul>
            </li>
            <li class="menu-single-item">
              <h6>Popular Cities </h6>
              <ul>
                <li><a href="single-brand-category.html">Panama City (10)<img src="images/panama.svg"
                                                                              alt=""></a></li>
                <li><a href="single-brand-category.html">Sydne City (10)<img src="images/sydne.svg"
                                                                             alt=""></a></li>
                <li><a href="single-brand-category.html">Melbourne City (10)<img
                      src="images/melbourne.svg" alt=""></a></li>
                <li><a href="single-brand-category.html">New Delhi (10)<img src="images/delhi.svg"
                                                                            alt=""></a></li>
                <li><a href="single-brand-category.html">New York (10)<img src="images/newYork.svg"
                                                                           alt=""></a></li>
                <li><a href="single-brand-category.html">Menchester City (10)<img
                      src="images/menchester.svg" alt=""></a></li>
                <li><a href="single-brand-category.html">City of Greece (10)<img src="images/greece.svg"
                                                                                 alt=""></a></li>
                <li><a href="single-brand-category.html">City of Abu-dabi (10)<img
                      src="images/abudabi.svg" alt=""></a></li>
                <li class="explore-more-btn">
                  <a href="brand-category.html">Explore More <i class="bi bi-arrow-right"></i></a>
                </li>
              </ul>
            </li>
          </ul>
        </div>
      </li>
      <li class="position-inherit">
        <a href="#" class="drop-down">USED CAR</a>
        <i class="bi bi-plus dropdown-icon d-lg-none d-block"></i>
        <div class="mega-menu">
          <ul class="menu-row">
            <li class="menu-single-item">
              <h6>Browse by Brand</h6>
              <ul>
                <li><a href="single-brand-category.html">Merchedes Benz (10) <img
                      src="images/merchedes.svg" alt=""></a></li>
                <li><a href="single-brand-category.html">Volkswagen (10) <img
                      src="images/volkswagen.svg" alt=""></a></li>
                <li><a href="single-brand-category.html">Ferrari (10) <img src="images/ferrari.svg"
                                                                           alt=""></a></li>
                <li><a href="single-brand-category.html">Mazda (10) <img src="images/mazda.svg" alt=""></a>
                </li>
                <li><a href="single-brand-category.html">Mitsubishi (10) <img
                      src="images/mitsubishi.svg" alt=""></a></li>
                <li><a href="single-brand-category.html">Lamborghini (10) <img
                      src="images/lamborghini.svg" alt=""></a></li>
                <li><a href="single-brand-category.html">Tesla (10) <img src="images/tesla.svg" alt=""></a>
                </li>
                <li><a href="single-brand-category.html">Toyota (10) <img src="images/toyota.svg"
                                                                          alt=""></a></li>
                <li class="explore-more-btn">
                  <a href="brand-category.html">Explore More <i class="bi bi-arrow-right"></i></a>
                </li>
              </ul>
            </li>
            <li class="menu-single-item">
              <h6>Popular Models</h6>
              <ul>
                <li><a href="single-brand-category.html">Toyota Camry</a></li>
                <li><a href="single-brand-category.html">Ford Mustang</a></li>
                <li><a href="single-brand-category.html">Volkswagen Golf</a></li>
                <li><a href="single-brand-category.html">Mercedes C-Class</a></li>
                <li><a href="single-brand-category.html">Audi A4</a></li>
                <li><a href="single-brand-category.html">Jeep Wrangler</a></li>
                <li><a href="single-brand-category.html">Mazda CX-5</a></li>
                <li><a href="single-brand-category.html">Chevrolet Corvette</a></li>
                <li class="explore-more-btn">
                  <a href="brand-category.html">Explore More <i class="bi bi-arrow-right"></i></a>
                </li>
              </ul>
            </li>
            <li class="menu-single-item">
              <h6>Popular Cities </h6>
              <ul>
                <li><a href="single-brand-category.html">Panama City (10)<img src="images/panama.svg"
                                                                              alt=""></a></li>
                <li><a href="single-brand-category.html">Sydne City (10)<img src="images/sydne.svg"
                                                                             alt=""></a></li>
                <li><a href="single-brand-category.html">Melbourne City (10)<img
                      src="images/melbourne.svg" alt=""></a></li>
                <li><a href="single-brand-category.html">New Delhi (10)<img src="images/delhi.svg"
                                                                            alt=""></a></li>
                <li><a href="single-brand-category.html">New York (10)<img src="images/newYork.svg"
                                                                           alt=""></a></li>
                <li><a href="single-brand-category.html">Menchester City (10)<img
                      src="images/menchester.svg" alt=""></a></li>
                <li><a href="single-brand-category.html">City of Greece (10)<img src="images/greece.svg"
                                                                                 alt=""></a></li>
                <li><a href="single-brand-category.html">City of Abu-dabi (10)<img
                      src="images/abudabi.svg" alt=""></a></li>
                <li class="explore-more-btn">
                  <a href="brand-category.html">Explore More <i class="bi bi-arrow-right"></i></a>
                </li>
              </ul>
            </li>
          </ul>
        </div>
      </li>
      <li class="menu-item-has-children">
        <a href="#" class="drop-down">Pages</a><i class="bi bi-plus dropdown-icon"></i>
        <ul class="sub-menu">
          <li><a href="about.html">About Us</a></li>
          <li><a href="brand-category.html">Brand Category</a></li>
          <li><a href="single-brand-category.html">Single Brand Category</a></li>
          <li>
            <a href="#">Car Listing System</a>
            <i class="d-lg-flex d-none bi bi-chevron-right dropdown-icon"></i>
            <i class="d-lg-none d-flex bi bi-plus dropdown-icon"></i>
            <ul class="sub-menu">
              <li><a href="car-listing-left-sidebar.html">Car Listing Left Sidebar</a></li>
              <li><a href="car-listing-right-sidebar.html">Car Listing Right Sidebar</a></li>
              <li><a href="car-listing-no-sidebar.html">Car Listing No Sidebar</a></li>
            </ul>
          </li>
          <li><a href="special-offer.html">Special Offer</a></li>
          <li><a href="car-deatils.html">Car Details </a></li>
          <li><a href="car-auction-details.html">Car Auction Details</a></li>
          <li><a href="compare.html"> Compare Car</a></li>
          <li>
            <a href="#">Shop</a>
            <i class="d-lg-flex d-none bi bi-chevron-right dropdown-icon"></i>
            <i class="d-lg-none d-flex bi bi-plus dropdown-icon"></i>
            <ul class="sub-menu">
              <li><a href="shop.html">Shop</a></li>
              <li><a href="product-details.html">Product Details</a></li>
              <li><a href="checkout.html">Checkout</a></li>
            </ul>
          </li>
          <li>
            <a href="#">Blog</a>
            <i class="d-lg-flex d-none bi bi-chevron-right dropdown-icon"></i>
            <i class="d-lg-none d-flex bi bi-plus dropdown-icon"></i>
            <ul class="sub-menu">
              <li><a href="blog-standard.html">Blog Standard</a></li>
              <li><a href="blog-details.html">Blog Details</a></li>
            </ul>
          </li>
          <li><a href="faq.html">FAQ's</a></li>
          <li><a href="error.html">Error</a></li>
          <li><a href="customer-review.html">Customer Review </a></li>
          <li><a href="return-enchange.html">Return &amp; Exchange</a></li>
        </ul>
      </li>
      <li>
        <a href="contact.html" class="drop-down">CONTACT US</a>
      </li>
    </ul>
    <div class="topbar-right d-lg-none d-block">
      <button class="sell-btn" type="button" data-bs-toggle="modal" data-bs-target="#sellUsModal01">
        <svg width="16" height="16" viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/svg">
          <path
            d="M17.5588 0C17.447 0.00287726 17.3409 0.0492946 17.2629 0.129351L15.4245 1.97099L14.8707 1.4164C14.5627 1.10919 14.2078 0.938606 13.8585 0.928904C13.6483 0.923245 13.4543 0.953158 13.2231 0.985496L10.2237 1.40265C9.12021 1.55626 8.55995 2.02839 7.84852 2.69132L0.470643 9.56715C0.467641 9.5698 0.464677 9.5725 0.46175 9.57523C0.142414 9.89053 0.00416943 10.3206 0.000127199 10.7442C-0.00472348 11.1679 0.12867 11.6166 0.484386 11.9205L0.460133 11.8971L6.10309 17.5417L6.08045 17.5174C6.38443 17.8731 6.8323 18.0057 7.25674 18.0009C7.68036 17.9968 8.11127 17.8586 8.42575 17.54C8.42849 17.5368 8.43119 17.5336 8.43384 17.5303L8.94073 16.9863L10.9586 17.7381C11.1627 17.8161 11.3805 17.8522 11.5988 17.8442C11.8172 17.8361 12.0317 17.7841 12.2295 17.6912C12.6135 17.5109 12.9474 17.2062 13.101 16.7858L15.3161 10.1452C15.9758 9.4378 16.4455 8.87674 16.5983 7.77725L17.0155 4.77792C17.0478 4.5467 17.0777 4.35186 17.0721 4.14248C17.0624 3.79323 16.8926 3.43913 16.5846 3.1303L16.03 2.57652L17.87 0.736494C17.932 0.676327 17.9743 0.598838 17.9915 0.51419C18.0086 0.429542 17.9998 0.341686 17.9661 0.262143C17.9325 0.182601 17.8756 0.115085 17.8029 0.0684494C17.7302 0.0218141 17.6451 -0.00176348 17.5588 0.000808484V0ZM13.8351 1.78505C14.0032 1.78909 14.0372 1.79394 14.2643 2.02192L14.8189 2.57571L13.8351 3.5604C13.6631 3.47636 13.4743 3.43241 13.2829 3.43185C12.5779 3.43185 11.9967 4.01393 11.9967 4.71809C11.9967 5.42306 12.5779 6.00352 13.2821 6.00352C13.9871 6.00352 14.5683 5.42306 14.5683 4.71809C14.5683 4.52083 14.5214 4.33408 14.4406 4.16592L15.4245 3.18123L15.9783 3.73583C16.2062 3.963 16.2111 3.99696 16.2151 4.16431C16.2104 4.33015 16.1942 4.49547 16.1666 4.65907L15.7503 7.65841C15.6209 8.58812 15.342 8.85976 14.6831 9.56796L7.81537 16.9369C7.70462 17.0493 7.47583 17.1407 7.24704 17.1431C7.01825 17.1463 6.8226 17.0647 6.73286 16.9596C6.72537 16.9512 6.71755 16.9431 6.70942 16.9353L1.06647 11.2908C1.05869 11.2826 1.0506 11.2748 1.04221 11.2673C0.937116 11.1784 0.854655 10.9819 0.857888 10.7531C0.860314 10.5252 0.951668 10.2956 1.06404 10.1848L8.43303 3.31786C9.14123 2.65817 9.41286 2.38006 10.3426 2.25071L13.3419 1.83356C13.5731 1.80122 13.7348 1.78181 13.8351 1.78505ZM13.2829 4.28881C13.5246 4.28881 13.7114 4.47637 13.7114 4.71809C13.7114 4.95982 13.5246 5.14657 13.2829 5.14657C13.0404 5.14657 12.8544 4.95982 12.8544 4.71809C12.8544 4.47637 13.0404 4.28881 13.2829 4.28881ZM5.99314 8.99881C5.90784 8.99872 5.82446 9.0241 5.75367 9.07168C5.68288 9.11926 5.6279 9.18689 5.59578 9.2659C5.56365 9.34492 5.55584 9.43172 5.57334 9.5152C5.59084 9.59868 5.63286 9.67504 5.69401 9.7345L8.26568 12.3054C8.6699 12.7096 9.27624 12.1032 8.87201 11.699L6.30035 9.12816C6.26038 9.08717 6.2126 9.05461 6.15984 9.03239C6.10707 9.01017 6.05039 8.99876 5.99314 8.99881ZM4.70771 10.2834C4.62224 10.2832 4.53865 10.3085 4.46769 10.3561C4.39672 10.4037 4.34161 10.4715 4.30945 10.5507C4.27729 10.6299 4.26955 10.7168 4.28721 10.8005C4.30488 10.8841 4.34714 10.9605 4.40858 11.0199L6.98025 13.5908C7.38447 14.0217 8.01749 13.3879 7.58658 12.9845L5.01573 10.4144C4.9758 10.373 4.92795 10.3401 4.87503 10.3176C4.82212 10.2951 4.76521 10.2835 4.70771 10.2834ZM13.9094 11.6537L12.2958 16.4907C12.2408 16.6386 12.071 16.8181 11.8641 16.9151C11.6571 17.0121 11.4493 17.0097 11.32 16.9612L9.57213 16.3072L13.9094 11.6537Z"></path>
        </svg>
        SELL WITH US
      </button>
      <a href="#">
        <svg width="16" height="16" viewBox="0 0 14 14" xmlns="http://www.w3.org/2000/svg">
          <path
            d="M7.00012 2.40453L6.37273 1.75966C4.90006 0.245917 2.19972 0.76829 1.22495 2.67141C0.767306 3.56653 0.664053 4.8589 1.4997 6.50827C2.30473 8.09639 3.97953 9.99864 7.00012 12.0706C10.0207 9.99864 11.6946 8.09639 12.5005 6.50827C13.3362 4.85803 13.2338 3.56653 12.7753 2.67141C11.8005 0.76829 9.10019 0.245042 7.62752 1.75879L7.00012 2.40453ZM7.00012 13.125C-6.41666 4.25953 2.86912 -2.65995 6.84612 1.00016C6.89862 1.04829 6.95024 1.09816 7.00012 1.14979C7.04949 1.09821 7.10087 1.04859 7.15413 1.00104C11.1302 -2.6617 20.4169 4.25865 7.00012 13.125Z"></path>
        </svg>
        SAVE
      </a>
      <button type="button" class="primary-btn3" data-bs-toggle="modal" data-bs-target="#signUpModal01">
        <svg width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
          <path fill-rule="evenodd" clip-rule="evenodd"
                d="M14.4311 12.759C15.417 11.4291 16 9.78265 16 8C16 3.58169 12.4182 0 8 0C3.58169 0 0 3.58169 0 8C0 12.4182 3.58169 16 8 16C10.3181 16 12.4058 15.0141 13.867 13.4387C14.0673 13.2226 14.2556 12.9957 14.4311 12.759ZM13.9875 12C14.7533 10.8559 15.1999 9.48009 15.1999 8C15.1999 4.02355 11.9764 0.799983 7.99991 0.799983C4.02355 0.799983 0.799983 4.02355 0.799983 8C0.799983 9.48017 1.24658 10.8559 2.01245 12C2.97866 10.5566 4.45301 9.48194 6.17961 9.03214C5.34594 8.45444 4.79998 7.49102 4.79998 6.39995C4.79998 4.63266 6.23271 3.19993 8 3.19993C9.76729 3.19993 11.2 4.63266 11.2 6.39995C11.2 7.49093 10.654 8.45444 9.82039 9.03206C11.5469 9.48194 13.0213 10.5565 13.9875 12ZM13.4722 12.6793C12.3495 10.8331 10.3188 9.59997 8.00008 9.59997C5.68126 9.59997 3.65049 10.8331 2.52776 12.6794C3.84829 14.2222 5.80992 15.2 8 15.2C10.1901 15.2 12.1517 14.2222 13.4722 12.6793ZM8 8.79998C9.32551 8.79998 10.4 7.72554 10.4 6.39995C10.4 5.07444 9.32559 3.99992 8 3.99992C6.6744 3.99992 5.59997 5.07452 5.59997 6.40003C5.59997 7.72554 6.67449 8.79998 8 8.79998Z"></path>
        </svg>
        SIGN UP
      </button>
    </div>
    <div class="hotline-area d-lg-none d-flex">
      <div class="icon">
        <svg width="26" height="27" viewBox="0 0 26 27" xmlns="http://www.w3.org/2000/svg">
          <path
            d="M13.5365 14.7303C12.5652 14.7257 11.6003 14.5735 10.6748 14.2788C9.94838 14.0358 9.29948 13.6044 8.79429 13.0286C8.28911 12.4529 7.94573 11.7534 7.79922 11.0016C7.47293 9.43032 8.06788 7.76895 9.43026 6.44297C9.57662 6.30051 9.7287 6.16404 9.88612 6.03391C10.5733 5.45852 11.3903 5.05903 12.2664 4.86992C13.1425 4.6808 14.0515 4.70775 14.9149 4.94843C15.7429 5.21282 16.4688 5.72699 16.9929 6.42036C17.5171 7.11374 17.8138 7.95233 17.8424 8.82106C17.906 9.84579 17.572 10.8556 16.9099 11.6403C16.6595 11.9557 16.3269 12.196 15.9488 12.3349C15.5708 12.4737 15.1617 12.5056 14.7667 12.4272C14.6037 12.3934 14.4491 12.327 14.3124 12.2321C14.1756 12.1371 14.0594 12.0156 13.9707 11.8747C13.891 11.7379 13.8399 11.5863 13.8202 11.4292C13.8006 11.2721 13.8128 11.1127 13.8563 10.9604C14.2354 9.52782 14.6206 7.35079 14.6245 7.32912C14.6344 7.27307 14.6553 7.21952 14.6859 7.17152C14.7165 7.12353 14.7562 7.08203 14.8029 7.04939C14.8495 7.01676 14.9021 6.99363 14.9577 6.98133C15.0133 6.96903 15.0707 6.96779 15.1268 6.97769C15.1828 6.9876 15.2364 7.00844 15.2844 7.03904C15.3324 7.06964 15.3739 7.10939 15.4065 7.15602C15.4391 7.20266 15.4623 7.25527 15.4746 7.31084C15.4869 7.36641 15.4881 7.42387 15.4782 7.47992C15.4622 7.57048 15.0826 9.71458 14.6943 11.1818C14.6806 11.2221 14.6753 11.2647 14.6787 11.3071C14.682 11.3495 14.694 11.3908 14.7138 11.4284C14.7738 11.5112 14.8642 11.5669 14.9651 11.5831C15.2071 11.6235 15.4554 11.597 15.6834 11.5065C15.9114 11.416 16.1103 11.2649 16.2586 11.0696C16.7728 10.4546 17.0303 9.66518 16.9779 8.86526C16.9573 8.17371 16.7231 7.5055 16.3075 6.95233C15.892 6.39916 15.3155 5.98813 14.657 5.77565C13.9317 5.57612 13.1686 5.55608 12.4338 5.71726C11.6989 5.87843 11.0143 6.21599 10.439 6.7008C10.2999 6.8165 10.1643 6.93739 10.0343 7.06393C9.36093 7.71912 8.28498 9.07889 8.64767 10.8252C8.76741 11.4247 9.04172 11.9826 9.44341 12.4435C9.8451 12.9044 10.3602 13.2524 10.9378 13.4529C12.9701 14.1011 15.8907 14.1796 17.429 12.2664C17.5019 12.1798 17.6058 12.1251 17.7185 12.114C17.8312 12.103 17.9438 12.1365 18.0321 12.2074C18.1203 12.2783 18.1774 12.381 18.1909 12.4934C18.2045 12.6058 18.1735 12.7191 18.1046 12.809C16.9667 14.2242 15.2351 14.7303 13.5365 14.7303Z"></path>
          <path
            d="M12.0531 12.4839C11.595 12.4919 11.1481 12.3418 10.7878 12.0588C9.9562 11.3933 9.93324 10.2367 10.1664 9.44935C10.2452 9.18719 10.3505 8.93369 10.4814 8.69319C10.8065 8.03717 11.3264 7.49763 11.9699 7.14839C12.3602 6.94593 12.8052 6.87437 13.2393 6.94429C13.6734 7.0142 14.0735 7.22188 14.3805 7.53665C14.6932 7.87932 14.9287 8.28509 15.0712 8.72656C15.107 8.83416 15.0992 8.95151 15.0495 9.05343C14.9998 9.15536 14.9121 9.23373 14.8052 9.27173C14.6984 9.30972 14.5809 9.30432 14.478 9.25668C14.3751 9.20903 14.295 9.12295 14.2548 9.01689C14.1521 8.69084 13.9813 8.39029 13.7539 8.13507C13.5751 7.95216 13.3414 7.83271 13.0884 7.79492C12.8354 7.75714 12.577 7.80309 12.3525 7.92577C11.8699 8.19795 11.4821 8.61118 11.241 9.11005C11.1398 9.29704 11.058 9.49394 10.9971 9.69765C10.8285 10.267 10.8658 11.0106 11.3303 11.3824C11.8381 11.7906 12.6953 11.6181 13.1776 11.2022C13.5368 10.8785 13.8454 10.5029 14.0932 10.0876C14.1232 10.0393 14.1624 9.99729 14.2087 9.96409C14.2549 9.93089 14.3073 9.90712 14.3627 9.89414C14.4181 9.88117 14.4756 9.87923 14.5317 9.88845C14.5879 9.89768 14.6417 9.91787 14.6901 9.94789C14.7384 9.97791 14.7804 10.0172 14.8136 10.0634C14.8468 10.1096 14.8706 10.162 14.8836 10.2174C14.8966 10.2728 14.8985 10.3303 14.8893 10.3864C14.88 10.4426 14.8598 10.4964 14.8298 10.5448C14.5361 11.0339 14.1705 11.4761 13.7452 11.8565C13.2714 12.2563 12.673 12.4782 12.0531 12.4839Z"></path>
          <path
            d="M24.7001 26.0015H1.30047C0.955797 26.0012 0.625342 25.8641 0.381624 25.6204C0.137905 25.3767 0.00083252 25.0462 0.000488366 24.7015V8.66847C0.000436861 8.58609 0.0238662 8.50541 0.0680306 8.43587C0.112195 8.36634 0.175264 8.31083 0.249847 8.27586C0.32443 8.24089 0.407436 8.2279 0.489137 8.23842C0.570838 8.24893 0.647849 8.28252 0.711144 8.33524L11.3432 17.1716C11.8096 17.557 12.3957 17.7678 13.0007 17.7678C13.6057 17.7678 14.1918 17.557 14.6582 17.1716L25.2894 8.33481C25.3527 8.28206 25.4298 8.24847 25.5115 8.23797C25.5933 8.22747 25.6763 8.24049 25.7509 8.27552C25.8255 8.31054 25.8886 8.36612 25.9327 8.43571C25.9768 8.50531 26.0002 8.58606 26.0001 8.66847V24.7015C25.9997 25.0462 25.8627 25.3767 25.6189 25.6204C25.3752 25.8641 25.0448 26.0012 24.7001 26.0015ZM0.867141 9.59189V24.7015C0.867141 24.9407 1.06127 25.1349 1.30047 25.1349H24.7001C24.815 25.1349 24.9252 25.0892 25.0065 25.008C25.0878 24.9267 25.1334 24.8165 25.1334 24.7015V9.59189L15.2111 17.8381C14.5891 18.3521 13.8075 18.6334 13.0007 18.6335C12.1938 18.6337 11.412 18.3527 10.7899 17.839L0.867141 9.59189Z"></path>
          <path
            d="M0.434172 9.10179C0.342147 9.10197 0.252454 9.07285 0.178087 9.01864C0.103719 8.96444 0.0485401 8.88797 0.020542 8.8003C-0.00745601 8.71264 -0.00681877 8.61834 0.0223615 8.53106C0.0515417 8.44379 0.10775 8.36807 0.182842 8.31487L4.08278 5.55025C4.17656 5.48377 4.29291 5.45726 4.40623 5.47656C4.51955 5.49586 4.62057 5.55939 4.68705 5.65316C4.75354 5.74694 4.78005 5.86329 4.76075 5.97662C4.74145 6.08994 4.67792 6.19095 4.58414 6.25744L0.684201 9.02206C0.611181 9.074 0.52378 9.10187 0.434172 9.10179ZM25.5662 9.10179C25.4766 9.10187 25.3892 9.074 25.3162 9.02206L21.4163 6.25744C21.3235 6.19062 21.2609 6.08984 21.242 5.97706C21.2232 5.86427 21.2498 5.74862 21.3159 5.65531C21.382 5.56201 21.4823 5.4986 21.5949 5.47892C21.7075 5.45924 21.8234 5.48488 21.9172 5.55025L25.8171 8.31487C25.8922 8.36802 25.9483 8.44367 25.9775 8.53086C26.0067 8.61805 26.0075 8.71227 25.9796 8.79989C25.9517 8.88751 25.8966 8.96399 25.8224 9.01826C25.7482 9.07253 25.6582 9.10179 25.5662 9.10179ZM17.0041 3.03522C16.9144 3.0353 16.8269 3.00744 16.7537 2.95549L14.6824 1.48651C14.2165 1.09272 13.6271 0.874976 13.0171 0.871254C12.4071 0.867532 11.8151 1.07807 11.3445 1.46615L9.24716 2.95549C9.15339 3.02198 9.03704 3.04848 8.92371 3.02918C8.81039 3.00988 8.70937 2.94635 8.64289 2.85258C8.57641 2.7588 8.5499 2.64245 8.5692 2.52912C8.5885 2.4158 8.65203 2.31479 8.74581 2.2483L10.8171 0.779325C11.4376 0.271931 12.2154 -0.00360176 13.017 3.55561e-05C13.8186 0.00367287 14.5938 0.286253 15.2097 0.799258L17.255 2.2483C17.3301 2.3015 17.3863 2.37722 17.4155 2.46449C17.4447 2.55177 17.4453 2.64607 17.4173 2.73373C17.3893 2.8214 17.3342 2.89787 17.2598 2.95207C17.1854 3.00628 17.0957 3.0354 17.0037 3.03522H17.0041ZM0.715401 25.7675C0.626173 25.7677 0.539066 25.7403 0.465979 25.6891C0.392892 25.638 0.337387 25.5655 0.307046 25.4815C0.276706 25.3976 0.273008 25.3064 0.296459 25.2203C0.31991 25.1342 0.369366 25.0575 0.438072 25.0005L10.3266 16.7847C10.3704 16.7483 10.4209 16.7209 10.4753 16.7041C10.5296 16.6873 10.5868 16.6813 10.6435 16.6865C10.7001 16.6918 10.7552 16.7082 10.8056 16.7347C10.8559 16.7612 10.9006 16.7974 10.9369 16.8412C10.9733 16.885 11.0007 16.9355 11.0175 16.9899C11.0343 17.0443 11.0403 17.1014 11.0351 17.1581C11.0298 17.2148 11.0134 17.2699 10.9869 17.3202C10.9604 17.3706 10.9242 17.4152 10.8804 17.4516L0.991863 25.6674C0.914246 25.7321 0.816424 25.7675 0.715401 25.7675ZM25.2846 25.7675C25.1835 25.7676 25.0857 25.7322 25.0081 25.6674L15.1196 17.4516C15.0747 17.4156 15.0374 17.371 15.0099 17.3204C14.9824 17.2699 14.9652 17.2143 14.9594 17.1571C14.9536 17.0998 14.9593 17.042 14.9761 16.9869C14.9929 16.9319 15.0205 16.8807 15.0573 16.8365C15.0941 16.7922 15.1393 16.7557 15.1903 16.7291C15.2414 16.7025 15.2972 16.6863 15.3546 16.6816C15.4119 16.6768 15.4697 16.6835 15.5244 16.7013C15.5791 16.719 15.6298 16.7475 15.6734 16.7851L25.5619 25.001C25.6306 25.0579 25.6801 25.1347 25.7035 25.2207C25.727 25.3068 25.7233 25.3981 25.6929 25.482C25.6626 25.5659 25.6071 25.6384 25.534 25.6896C25.4609 25.7408 25.3738 25.7677 25.2846 25.7675Z"></path>
          <path
            d="M21.667 12.343C21.5521 12.343 21.4419 12.2974 21.3606 12.2161C21.2793 12.1348 21.2337 12.0246 21.2337 11.9097V3.03864C21.2324 3.0473 21.2151 3.03517 21.186 3.03517H4.81495C4.80548 3.0346 4.79598 3.03595 4.78704 3.03916C4.77811 3.04236 4.76991 3.04734 4.76295 3.0538L4.76729 11.9097C4.76729 12.0246 4.72163 12.1348 4.64037 12.2161C4.5591 12.2974 4.44889 12.343 4.33396 12.343C4.21904 12.343 4.10882 12.2974 4.02755 12.2161C3.94629 12.1348 3.90063 12.0246 3.90063 11.9097V3.03517C3.90744 2.79916 4.00747 2.57546 4.17883 2.41303C4.35019 2.25061 4.57892 2.16269 4.81495 2.16852H21.186C21.4221 2.16269 21.6508 2.25061 21.8222 2.41303C21.9935 2.57546 22.0935 2.79916 22.1003 3.03517V11.9097C22.1003 12.0246 22.0547 12.1348 21.9734 12.2161C21.8922 12.2974 21.7819 12.343 21.667 12.343Z"></path>
        </svg>
      </div>
      <div class="content">
        <span>To More Inquiry</span>
        <h6><a href="tel:+990737621432">+990-737 621 432</a></h6>
      </div>
    </div>
  </div>
  <div class="nav-right d-flex jsutify-content-end align-items-center">

    <div class="dropdown">
      <button class="modal-btn header-cart-btn" type="button">
        <i class="bi bi-bag-check"></i> CART (2 )
      </button>
      <div class="cart-menu">
        <div class="cart-body">
          <ul>
            <li class="single-item">
              <div class="item-area">
                <div class="main-item">
                  <div class="item-img">
                    <img src="images/cart-01.png" alt="">
                  </div>
                  <div class="content-and-quantity">
                    <div class="content">
                      <div class="price-and-btn d-flex align-items-center justify-content-between">
                        <span>$234</span>
                        <button class="close-btn"><i class="bi bi-x"></i></button>
                      </div>
                      <h6><a href="product-details.html">Steering Rack Advance Auto Parts is a
                          retailer.</a></h6>
                    </div>
                    <div class="quantity-area">
                      <div class="quantity">
                        <a class="quantity__minus"><span><i class="bi bi-dash"></i></span></a>
                        <input name="quantity" type="text" class="quantity__input" value="01">
                        <a class="quantity__plus"><span><i class="bi bi-plus"></i></span></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </li>
            <li class="single-item">
              <div class="item-area">
                <div class="main-item">
                  <div class="item-img">
                    <img src="images/cart-01.png" alt="">
                  </div>
                  <div class="content-and-quantity">
                    <div class="content">
                      <div class="price-and-btn d-flex align-items-center justify-content-between">
                        <span>$234</span>
                        <button class="close-btn"><i class="bi bi-x"></i></button>
                      </div>
                      <h6><a href="product-details.html">Steering Rack Advance Auto Parts is a
                          retailer.</a></h6>
                    </div>
                    <div class="quantity-area">
                      <div class="quantity">
                        <a class="quantity__minus"><span><i class="bi bi-dash"></i></span></a>
                        <input name="quantity" type="text" class="quantity__input" value="01">
                        <a class="quantity__plus"><span><i class="bi bi-plus"></i></span></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </li>
          </ul>
        </div>
        <div class="cart-footer">
          <div class="pricing-area">
            <ul>
              <li><span>Sub Total</span><span>$468</span></li>
              <li><span>Offer (20%)</span><span>$56</span></li>
            </ul>
            <ul class="total">
              <li><span>Total</span><span>$425</span></li>
            </ul>
          </div>
          <div class="footer-button">
            <ul>
              <li><a class="primary-btn2" href="#">Continue Shopping</a></li>
              <li><a class="primary-btn2" href="#">Product Checkout</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <button type="button" class="primary-btn1" data-bs-toggle="modal" data-bs-target="#signUpModal01">
      <svg width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
        <path fill-rule="evenodd" clip-rule="evenodd"
              d="M14.4311 12.759C15.417 11.4291 16 9.78265 16 8C16 3.58169 12.4182 0 8 0C3.58169 0 0 3.58169 0 8C0 12.4182 3.58169 16 8 16C10.3181 16 12.4058 15.0141 13.867 13.4387C14.0673 13.2226 14.2556 12.9957 14.4311 12.759ZM13.9875 12C14.7533 10.8559 15.1999 9.48009 15.1999 8C15.1999 4.02355 11.9764 0.799983 7.99991 0.799983C4.02355 0.799983 0.799983 4.02355 0.799983 8C0.799983 9.48017 1.24658 10.8559 2.01245 12C2.97866 10.5566 4.45301 9.48194 6.17961 9.03214C5.34594 8.45444 4.79998 7.49102 4.79998 6.39995C4.79998 4.63266 6.23271 3.19993 8 3.19993C9.76729 3.19993 11.2 4.63266 11.2 6.39995C11.2 7.49093 10.654 8.45444 9.82039 9.03206C11.5469 9.48194 13.0213 10.5565 13.9875 12ZM13.4722 12.6793C12.3495 10.8331 10.3188 9.59997 8.00008 9.59997C5.68126 9.59997 3.65049 10.8331 2.52776 12.6794C3.84829 14.2222 5.80992 15.2 8 15.2C10.1901 15.2 12.1517 14.2222 13.4722 12.6793ZM8 8.79998C9.32551 8.79998 10.4 7.72554 10.4 6.39995C10.4 5.07444 9.32559 3.99992 8 3.99992C6.6744 3.99992 5.59997 5.07452 5.59997 6.40003C5.59997 7.72554 6.67449 8.79998 8 8.79998Z"></path>
      </svg>
      SIGN UP
    </button>
    <div class="sidebar-button mobile-menu-btn ">
      <span></span>
    </div>
  </div>
</header>

<div class="home5-banner-area">
  <div class="paginations111"></div>
  <div class="swiper home3-banner-slider">
    <div class="swiper-wrapper">
      <div class="swiper-slide">
        <div class="banner-bg"
             style="background-image: linear-gradient(180deg, rgba(0, 0, 0, 0.30) 0%, rgba(0, 0, 0, 0.30) 100%), url(images/home5-banner-img-01.png);">
        </div>
      </div>
      <div class="swiper-slide">
        <div class="banner-bg"
             style="background-image: linear-gradient(180deg, rgba(0, 0, 0, 0.30) 0%, rgba(0, 0, 0, 0.30) 100%), url(images/home5-banner-img-02.png);">
        </div>
      </div>
      <div class="swiper-slide">
        <div class="banner-bg"
             style="background-image: linear-gradient(180deg, rgba(0, 0, 0, 0.30) 0%, rgba(0, 0, 0, 0.30) 100%), url(images/home5-banner-img-03.png);">
        </div>
      </div>
    </div>
  </div>
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12">
        <div class="banner-content">
          <h1>Premier Auto Sales</h1>
          <p>Car dealerships may sell new cars from one or several manufacturers</p>
          <div class="banner-content-bottom">
            <a href="car-listing-left-sidebar.html" class="primary-btn3">
              <svg width="24" height="15" viewBox="0 0 24 15" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M3.25985 0C3.15704 0 3.05844 0.0413135 2.98574 0.114852C2.91304 0.18839 2.87219 0.28813 2.87219 0.392129C2.87219 0.496128 2.91304 0.595867 2.98574 0.669405C3.05844 0.742944 3.15704 0.784257 3.25985 0.784257H4.8105C4.91332 0.784257 5.01192 0.742944 5.08462 0.669405C5.15732 0.595867 5.19816 0.496128 5.19816 0.392129C5.19816 0.28813 5.15732 0.18839 5.08462 0.114852C5.01192 0.0413135 4.91332 0 4.8105 0H3.25985ZM5.77966 0C5.67684 0 5.57824 0.0413135 5.50554 0.114852C5.43284 0.18839 5.39199 0.28813 5.39199 0.392129C5.39199 0.496128 5.43284 0.595867 5.50554 0.669405C5.57824 0.742944 5.67684 0.784257 5.77966 0.784257H10.3347C10.4375 0.784257 10.5361 0.742944 10.6088 0.669405C10.6815 0.595867 10.7223 0.496128 10.7223 0.392129C10.7223 0.28813 10.6815 0.18839 10.6088 0.114852C10.5361 0.0413135 10.4375 0 10.3347 0H5.77966Z">
                </path>
                <path fill-rule="evenodd" clip-rule="evenodd"
                      d="M4.22917 2.7464C4.12636 2.7464 4.02776 2.78771 3.95505 2.86125C3.88235 2.93479 3.84151 3.03453 3.84151 3.13853C3.84151 3.24253 3.88235 3.34227 3.95505 3.4158C4.02776 3.48934 4.12636 3.53066 4.22917 3.53066H13.1454C14.653 3.53066 15.5822 3.76829 16.3256 4.15002C16.9575 4.47431 17.4672 4.90546 18.1055 5.44542C18.2375 5.55698 18.3749 5.67305 18.5201 5.79402L18.6101 5.86892L18.726 5.88127C22.2653 6.25811 23.0622 7.46822 23.2246 8.08778V9.60865C23.2246 9.71265 23.1838 9.81239 23.1111 9.88593C23.0384 9.95947 22.9398 10.0008 22.8369 10.0008H21.8356C21.6511 8.88811 20.6943 8.04014 19.5418 8.04014C18.3893 8.04014 17.4325 8.88811 17.248 10.0008H10.2058C10.0212 8.88811 9.06448 8.04014 7.91196 8.04014C6.75944 8.04014 5.80269 8.88811 5.61816 10.0008H3.7446C3.64178 10.0008 3.54318 10.0421 3.47048 10.1156C3.39778 10.1892 3.35693 10.2889 3.35693 10.3929C3.35693 10.4969 3.39778 10.5966 3.47048 10.6702C3.54318 10.7437 3.64178 10.785 3.7446 10.785H5.61816C5.80269 11.8977 6.75944 12.7457 7.91196 12.7457C9.06448 12.7457 10.0212 11.8977 10.2058 10.785H17.248C17.4325 11.8977 18.3893 12.7457 19.5418 12.7457C20.6943 12.7457 21.6511 11.8977 21.8356 10.785H22.8369C23.1454 10.785 23.4412 10.6611 23.6593 10.4405C23.8774 10.2199 23.9999 9.92065 23.9999 9.60865V7.99543L23.99 7.95191C23.7431 6.86983 22.5791 5.52855 18.9239 5.11407C18.8217 5.02859 18.7215 4.9435 18.6227 4.85978C17.9828 4.31766 17.3942 3.81887 16.6766 3.45047C15.7966 2.99893 14.7391 2.7464 13.1454 2.7464H4.22917ZM17.9912 10.3929C17.9912 9.97691 18.1545 9.57795 18.4453 9.2838C18.7361 8.98965 19.1306 8.82439 19.5418 8.82439C19.9531 8.82439 20.3475 8.98965 20.6383 9.2838C20.9291 9.57795 21.0925 9.97691 21.0925 10.3929C21.0925 10.8089 20.9291 11.2079 20.6383 11.502C20.3475 11.7962 19.9531 11.9614 19.5418 11.9614C19.1306 11.9614 18.7361 11.7962 18.4453 11.502C18.1545 11.2079 17.9912 10.8089 17.9912 10.3929ZM7.91196 8.82439C7.5007 8.82439 7.10629 8.98965 6.81549 9.2838C6.52468 9.57795 6.36131 9.97691 6.36131 10.3929C6.36131 10.8089 6.52468 11.2079 6.81549 11.502C7.10629 11.7962 7.5007 11.9614 7.91196 11.9614C8.32322 11.9614 8.71763 11.7962 9.00843 11.502C9.29923 11.2079 9.46261 10.8089 9.46261 10.3929C9.46261 9.97691 9.29923 9.57795 9.00843 9.2838C8.71763 8.98965 8.32322 8.82439 7.91196 8.82439Z">
                </path>
                <path
                  d="M0 5.09873C0 4.99473 0.0408428 4.89499 0.113543 4.82146C0.186244 4.74792 0.284847 4.7066 0.387662 4.7066H4.74886C4.85167 4.7066 4.95027 4.74792 5.02297 4.82146C5.09567 4.89499 5.13652 4.99473 5.13652 5.09873C5.13652 5.20273 5.09567 5.30247 5.02297 5.37601C4.95027 5.44955 4.85167 5.49086 4.74886 5.49086H0.387662C0.284847 5.49086 0.186244 5.44955 0.113543 5.37601C0.0408428 5.30247 0 5.20273 0 5.09873ZM15.6836 5.60575C15.7563 5.67929 15.7971 5.77901 15.7971 5.88299C15.7971 5.98697 15.7563 6.08669 15.6836 6.16022L15.6532 6.19101C15.2897 6.55865 14.7968 6.76522 14.2828 6.76528H8.14089C8.03808 6.76528 7.93948 6.72397 7.86678 6.65043C7.79408 6.57689 7.75323 6.47715 7.75323 6.37315C7.75323 6.26915 7.79408 6.16941 7.86678 6.09587C7.93948 6.02234 8.03808 5.98102 8.14089 5.98102H14.2826C14.4354 5.98104 14.5866 5.95063 14.7277 5.89152C14.8688 5.83241 14.997 5.74577 15.105 5.63654L15.1355 5.60575C15.2082 5.53224 15.3068 5.49094 15.4096 5.49094C15.5123 5.49094 15.6109 5.53224 15.6836 5.60575ZM8.52856 14.6079C8.52856 14.5039 8.5694 14.4041 8.6421 14.3306C8.7148 14.257 8.8134 14.2157 8.91622 14.2157H10.5638C10.6666 14.2157 10.7652 14.257 10.8379 14.3306C10.9106 14.4041 10.9514 14.5039 10.9514 14.6079C10.9514 14.7118 10.9106 14.8116 10.8379 14.8851C10.7652 14.9587 10.6666 15 10.5638 15H8.91622C8.8134 15 8.7148 14.9587 8.6421 14.8851C8.5694 14.8116 8.52856 14.7118 8.52856 14.6079ZM11.2422 14.6079C11.2422 14.5039 11.283 14.4041 11.3557 14.3306C11.4284 14.257 11.527 14.2157 11.6298 14.2157H15.991C16.0939 14.2157 16.1925 14.257 16.2652 14.3306C16.3379 14.4041 16.3787 14.5039 16.3787 14.6079C16.3787 14.7118 16.3379 14.8116 16.2652 14.8851C16.1925 14.9587 16.0939 15 15.991 15H11.6298C11.527 15 11.4284 14.9587 11.3557 14.8851C11.283 14.8116 11.2422 14.7118 11.2422 14.6079Z">
                </path>
              </svg>
              Find Your Car
            </a>
            <div class="rating">
              <a href="#">
                <div class="review-top">
                  <div class="logo">
                    <img src="images/trustpilot-logo2.svg" alt="">
                  </div>
                  <div class="star">
                    <img src="images/trustpilot-star.svg" alt="">
                  </div>
                </div>
                <div class="content">
                  <ul>
                    <li>Trust Rating <span>5.0</span></li>
                    <li><span>2348</span> Reviews</li>
                  </ul>
                </div>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="home5-featured-cars-section pt-100 mb-100">
  <div class="container">
    <div class="row mb-50 wow fadeInUp" data-wow-delay="200ms">
      <div class="col-lg-12 d-flex align-items-end justify-content-between gap-3 flex-wrap">
        <div class="section-title-2">
          <h2>Featured Cars</h2>
          <p>To get the most accurate and up-to-date information.</p>
        </div>
        <div class="slider-btn-group2 d-flex align-items-center justify-content-between">
          <div class="slider-btn prev-51">
            <svg width="9" height="15" viewBox="0 0 8 13" xmlns="http://www.w3.org/2000/svg">
              <path d="M0 6.50008L8 0L2.90909 6.50008L8 13L0 6.50008Z"></path>
            </svg>
          </div>
          <div class="slider-btn next-51">
            <svg width="9" height="15" viewBox="0 0 8 13" xmlns="http://www.w3.org/2000/svg">
              <path d="M8 6.50008L0 0L5.09091 6.50008L0 13L8 6.50008Z"></path>
            </svg>
          </div>
        </div>
      </div>
    </div>
    <div class="row wow fadeInUp" data-wow-delay="300ms">
      <div class="col-lg-12">
        <div class="swiper home5-fetured-slider">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <div class="product-card5">
                <div class="product-img">
                  <div class="product-price">
                    <span>$7,656.00</span>
                  </div>
                  <a href="#" class="fav">
                    <svg width="14" height="13" viewBox="0 0 14 14"
                         xmlns="http://www.w3.org/2000/svg">
                      <path
                        d="M7.00012 2.40453L6.37273 1.75966C4.90006 0.245917 2.19972 0.76829 1.22495 2.67141C0.767306 3.56653 0.664053 4.8589 1.4997 6.50827C2.30473 8.09639 3.97953 9.99864 7.00012 12.0706C10.0207 9.99864 11.6946 8.09639 12.5005 6.50827C13.3362 4.85803 13.2338 3.56653 12.7753 2.67141C11.8005 0.76829 9.10019 0.245042 7.62752 1.75879L7.00012 2.40453ZM7.00012 13.125C-6.41666 4.25953 2.86912 -2.65995 6.84612 1.00016C6.89862 1.04829 6.95024 1.09816 7.00012 1.14979C7.04949 1.09821 7.10087 1.04859 7.15413 1.00104C11.1302 -2.6617 20.4169 4.25865 7.00012 13.125Z">
                      </path>
                    </svg>
                  </a>
                  <div class="slider-btn-group">
                    <div class="product-stand-next swiper-arrow">
                      <svg width="8" height="13" viewBox="0 0 8 13"
                           xmlns="http://www.w3.org/2000/svg">
                        <path d="M0 6.50008L8 0L2.90909 6.50008L8 13L0 6.50008Z"></path>
                      </svg>
                    </div>
                    <div class="product-stand-prev swiper-arrow">
                      <svg width="8" height="13" viewBox="0 0 8 13"
                           xmlns="http://www.w3.org/2000/svg">
                        <path d="M8 6.50008L0 0L5.09091 6.50008L0 13L8 6.50008Z"></path>
                      </svg>
                    </div>
                  </div>
                  <div class="swiper product-img-slider">
                    <div class="swiper-wrapper">
                      <div class="swiper-slide">
                        <img src="images/feature-car-01.png" alt="image">
                      </div>
                      <div class="swiper-slide">
                        <img src="images/feature-car-01.png" alt="image">
                      </div>
                      <div class="swiper-slide">
                        <img src="images/feature-car-01.png" alt="image">
                      </div>
                      <div class="swiper-slide">
                        <img src="images/feature-car-01.png" alt="image">
                      </div>
                    </div>
                  </div>
                </div>
                <div class="product-content">
                  <div class="location">
                    <a href="#"><i class="bi bi-geo-alt"></i> Panama City</a>
                  </div>
                  <h6><a href="car-deatils.html">Mercedes-Benz Class-2023</a></h6>
                  <ul class="features">
                    <li>
                      <img src="images/miles.svg" alt="">
                      2500 miles
                    </li>
                    <li>
                      <img src="images/menual.svg" alt="">
                      Automatic
                    </li>
                    <li>
                      <img src="images/fuel.svg" alt="">
                      Petrol
                    </li>
                    <li>
                      <img src="images/electric.svg" alt="">
                      Electric
                    </li>
                  </ul>
                  <div class="content-btm">
                    <a class="view-btn2" href="car-deatils.html">
                      <svg width="35" height="21" viewBox="0 0 35 21"
                           xmlns="http://www.w3.org/2000/svg">
                        <path d="M11 20C5.47715 20 1 15.7467 1 10.5C1 5.25329 5.47715 1 11 1"
                              stroke-linecap="round"></path>
                        <path
                          d="M14.2597 3C14.1569 3 14.0583 3.04166 13.9856 3.11582C13.9129 3.18997 13.8721 3.29055 13.8721 3.39542C13.8721 3.50029 13.9129 3.60086 13.9856 3.67502C14.0583 3.74917 14.1569 3.79083 14.2597 3.79083H15.8104C15.9132 3.79083 16.0118 3.74917 16.0845 3.67502C16.1572 3.60086 16.198 3.50029 16.198 3.39542C16.198 3.29055 16.1572 3.18997 16.0845 3.11582C16.0118 3.04166 15.9132 3 15.8104 3H14.2597ZM16.7795 3C16.6767 3 16.5781 3.04166 16.5054 3.11582C16.4327 3.18997 16.3919 3.29055 16.3919 3.39542C16.3919 3.50029 16.4327 3.60086 16.5054 3.67502C16.5781 3.74917 16.6767 3.79083 16.7795 3.79083H21.3346C21.4374 3.79083 21.536 3.74917 21.6087 3.67502C21.6814 3.60086 21.7222 3.50029 21.7222 3.39542C21.7222 3.29055 21.6814 3.18997 21.6087 3.11582C21.536 3.04166 21.4374 3 21.3346 3H16.7795Z">
                        </path>
                        <path fill-rule="evenodd" clip-rule="evenodd"
                              d="M15.2292 5.76953C15.1264 5.76953 15.0278 5.81119 14.9551 5.88535C14.8824 5.9595 14.8415 6.06008 14.8415 6.16495C14.8415 6.26982 14.8824 6.3704 14.9551 6.44455C15.0278 6.51871 15.1264 6.56037 15.2292 6.56037H24.1454C25.653 6.56037 26.5822 6.79999 27.3256 7.18493C27.9575 7.51194 28.4672 7.9467 29.1055 8.49119C29.2375 8.60368 29.3749 8.72073 29.5201 8.84271L29.6101 8.91824L29.726 8.93069C33.2653 9.31069 34.0622 10.5309 34.2246 11.1557V12.6893C34.2246 12.7942 34.1838 12.8948 34.1111 12.9689C34.0384 13.0431 33.9398 13.0847 33.8369 13.0847H32.8356C32.6511 11.9627 31.6943 11.1077 30.5418 11.1077C29.3893 11.1077 28.4325 11.9627 28.248 13.0847H21.2058C21.0212 11.9627 20.0645 11.1077 18.912 11.1077C17.7594 11.1077 16.8027 11.9627 16.6182 13.0847H14.7446C14.6418 13.0847 14.5432 13.1264 14.4705 13.2006C14.3978 13.2747 14.3569 13.3753 14.3569 13.4802C14.3569 13.585 14.3978 13.6856 14.4705 13.7598C14.5432 13.8339 14.6418 13.8756 14.7446 13.8756H16.6182C16.8027 14.9976 17.7594 15.8527 18.912 15.8527C20.0645 15.8527 21.0212 14.9976 21.2058 13.8756H28.248C28.4325 14.9976 29.3893 15.8527 30.5418 15.8527C31.6943 15.8527 32.6511 14.9976 32.8356 13.8756H33.8369C34.1454 13.8756 34.4412 13.7506 34.6593 13.5281C34.8774 13.3057 34.9999 13.0039 34.9999 12.6893V11.0626L34.99 11.0187C34.7431 9.92754 33.5791 8.57502 29.9239 8.15706C29.8217 8.07086 29.7215 7.98505 29.6227 7.90063C28.9828 7.35397 28.3942 6.851 27.6766 6.4795C26.7966 6.02418 25.7391 5.76953 24.1454 5.76953H15.2292ZM28.9912 13.4802C28.9912 13.0607 29.1545 12.6584 29.4453 12.3618C29.7361 12.0651 30.1306 11.8985 30.5418 11.8985C30.9531 11.8985 31.3475 12.0651 31.6383 12.3618C31.9291 12.6584 32.0925 13.0607 32.0925 13.4802C32.0925 13.8996 31.9291 14.302 31.6383 14.5986C31.3475 14.8952 30.9531 15.0618 30.5418 15.0618C30.1306 15.0618 29.7361 14.8952 29.4453 14.5986C29.1545 14.302 28.9912 13.8996 28.9912 13.4802ZM18.912 11.8985C18.5007 11.8985 18.1063 12.0651 17.8155 12.3618C17.5247 12.6584 17.3613 13.0607 17.3613 13.4802C17.3613 13.8996 17.5247 14.302 17.8155 14.5986C18.1063 14.8952 18.5007 15.0618 18.912 15.0618C19.3232 15.0618 19.7176 14.8952 20.0084 14.5986C20.2992 14.302 20.4626 13.8996 20.4626 13.4802C20.4626 13.0607 20.2992 12.6584 20.0084 12.3618C19.7176 12.0651 19.3232 11.8985 18.912 11.8985Z">
                        </path>
                        <path
                          d="M11 8.14151C11 8.03664 11.0408 7.93606 11.1135 7.86191C11.1862 7.78775 11.2848 7.74609 11.3877 7.74609H15.7489C15.8517 7.74609 15.9503 7.78775 16.023 7.86191C16.0957 7.93606 16.1365 8.03664 16.1365 8.14151C16.1365 8.24638 16.0957 8.34696 16.023 8.42111C15.9503 8.49527 15.8517 8.53693 15.7489 8.53693H11.3877C11.2848 8.53693 11.1862 8.49527 11.1135 8.42111C11.0408 8.34696 11 8.24638 11 8.14151ZM26.6836 8.65278C26.7563 8.72694 26.7971 8.82749 26.7971 8.93234C26.7971 9.03719 26.7563 9.13775 26.6836 9.2119L26.6532 9.24294C26.2897 9.61367 25.7968 9.82197 25.2828 9.82203H19.1409C19.0381 9.82203 18.9395 9.78037 18.8668 9.70622C18.7941 9.63206 18.7532 9.53149 18.7532 9.42662C18.7532 9.32174 18.7941 9.22117 18.8668 9.14701C18.9395 9.07286 19.0381 9.0312 19.1409 9.0312H25.2826C25.4354 9.03122 25.5866 9.00055 25.7277 8.94095C25.8688 8.88134 25.997 8.79397 26.105 8.68382L26.1355 8.65278C26.2082 8.57866 26.3068 8.53701 26.4096 8.53701C26.5123 8.53701 26.6109 8.57866 26.6836 8.65278ZM19.5286 17.7304C19.5286 17.6255 19.5694 17.5249 19.6421 17.4508C19.7148 17.3766 19.8134 17.335 19.9162 17.335H21.5638C21.6666 17.335 21.7652 17.3766 21.8379 17.4508C21.9106 17.5249 21.9514 17.6255 21.9514 17.7304C21.9514 17.8352 21.9106 17.9358 21.8379 18.01C21.7652 18.0841 21.6666 18.1258 21.5638 18.1258H19.9162C19.8134 18.1258 19.7148 18.0841 19.6421 18.01C19.5694 17.9358 19.5286 17.8352 19.5286 17.7304ZM22.2422 17.7304C22.2422 17.6255 22.283 17.5249 22.3557 17.4508C22.4284 17.3766 22.527 17.335 22.6299 17.335H26.991C27.0939 17.335 27.1925 17.3766 27.2652 17.4508C27.3379 17.5249 27.3787 17.6255 27.3787 17.7304C27.3787 17.8352 27.3379 17.9358 27.2652 18.01C27.1925 18.0841 27.0939 18.1258 26.991 18.1258H22.6299C22.527 18.1258 22.4284 18.0841 22.3557 18.01C22.283 17.9358 22.2422 17.8352 22.2422 17.7304Z">
                        </path>
                      </svg>
                      View Details
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="product-card5">
                <div class="product-img">
                  <div class="product-price">
                    <span>$7,656.00</span>
                  </div>
                  <a href="#" class="fav">
                    <svg width="14" height="13" viewBox="0 0 14 14"
                         xmlns="http://www.w3.org/2000/svg">
                      <path
                        d="M7.00012 2.40453L6.37273 1.75966C4.90006 0.245917 2.19972 0.76829 1.22495 2.67141C0.767306 3.56653 0.664053 4.8589 1.4997 6.50827C2.30473 8.09639 3.97953 9.99864 7.00012 12.0706C10.0207 9.99864 11.6946 8.09639 12.5005 6.50827C13.3362 4.85803 13.2338 3.56653 12.7753 2.67141C11.8005 0.76829 9.10019 0.245042 7.62752 1.75879L7.00012 2.40453ZM7.00012 13.125C-6.41666 4.25953 2.86912 -2.65995 6.84612 1.00016C6.89862 1.04829 6.95024 1.09816 7.00012 1.14979C7.04949 1.09821 7.10087 1.04859 7.15413 1.00104C11.1302 -2.6617 20.4169 4.25865 7.00012 13.125Z">
                      </path>
                    </svg>
                  </a>
                  <div class="slider-btn-group">
                    <div class="product-stand-next swiper-arrow">
                      <svg width="8" height="13" viewBox="0 0 8 13"
                           xmlns="http://www.w3.org/2000/svg">
                        <path d="M0 6.50008L8 0L2.90909 6.50008L8 13L0 6.50008Z"></path>
                      </svg>
                    </div>
                    <div class="product-stand-prev swiper-arrow">
                      <svg width="8" height="13" viewBox="0 0 8 13"
                           xmlns="http://www.w3.org/2000/svg">
                        <path d="M8 6.50008L0 0L5.09091 6.50008L0 13L8 6.50008Z"></path>
                      </svg>
                    </div>
                  </div>
                  <div class="swiper product-img-slider">
                    <div class="swiper-wrapper">
                      <div class="swiper-slide">
                        <img src="images/feature-car-02.png" alt="image">
                      </div>
                      <div class="swiper-slide">
                        <img src="images/feature-car-02.png" alt="image">
                      </div>
                      <div class="swiper-slide">
                        <img src="images/feature-car-02.png" alt="image">
                      </div>
                      <div class="swiper-slide">
                        <img src="images/feature-car-02.png" alt="image">
                      </div>
                    </div>
                  </div>
                </div>
                <div class="product-content">
                  <div class="location">
                    <a href="#"><i class="bi bi-geo-alt"></i> Panama City</a>
                  </div>
                  <h6><a href="car-deatils.html">Nissan Altima S-2022</a></h6>
                  <ul class="features">
                    <li>
                      <img src="images/miles.svg" alt="">
                      2500 miles
                    </li>
                    <li>
                      <img src="images/menual.svg" alt="">
                      Manual
                    </li>
                    <li>
                      <img src="images/fuel.svg" alt="">
                      Petrol
                    </li>
                    <li>
                      <img src="images/electric.svg" alt="">
                      Electric
                    </li>
                  </ul>
                  <div class="content-btm">
                    <a class="view-btn2" href="car-deatils.html">
                      <svg width="35" height="21" viewBox="0 0 35 21"
                           xmlns="http://www.w3.org/2000/svg">
                        <path d="M11 20C5.47715 20 1 15.7467 1 10.5C1 5.25329 5.47715 1 11 1"
                              stroke-linecap="round"></path>
                        <path
                          d="M14.2597 3C14.1569 3 14.0583 3.04166 13.9856 3.11582C13.9129 3.18997 13.8721 3.29055 13.8721 3.39542C13.8721 3.50029 13.9129 3.60086 13.9856 3.67502C14.0583 3.74917 14.1569 3.79083 14.2597 3.79083H15.8104C15.9132 3.79083 16.0118 3.74917 16.0845 3.67502C16.1572 3.60086 16.198 3.50029 16.198 3.39542C16.198 3.29055 16.1572 3.18997 16.0845 3.11582C16.0118 3.04166 15.9132 3 15.8104 3H14.2597ZM16.7795 3C16.6767 3 16.5781 3.04166 16.5054 3.11582C16.4327 3.18997 16.3919 3.29055 16.3919 3.39542C16.3919 3.50029 16.4327 3.60086 16.5054 3.67502C16.5781 3.74917 16.6767 3.79083 16.7795 3.79083H21.3346C21.4374 3.79083 21.536 3.74917 21.6087 3.67502C21.6814 3.60086 21.7222 3.50029 21.7222 3.39542C21.7222 3.29055 21.6814 3.18997 21.6087 3.11582C21.536 3.04166 21.4374 3 21.3346 3H16.7795Z">
                        </path>
                        <path fill-rule="evenodd" clip-rule="evenodd"
                              d="M15.2292 5.76953C15.1264 5.76953 15.0278 5.81119 14.9551 5.88535C14.8824 5.9595 14.8415 6.06008 14.8415 6.16495C14.8415 6.26982 14.8824 6.3704 14.9551 6.44455C15.0278 6.51871 15.1264 6.56037 15.2292 6.56037H24.1454C25.653 6.56037 26.5822 6.79999 27.3256 7.18493C27.9575 7.51194 28.4672 7.9467 29.1055 8.49119C29.2375 8.60368 29.3749 8.72073 29.5201 8.84271L29.6101 8.91824L29.726 8.93069C33.2653 9.31069 34.0622 10.5309 34.2246 11.1557V12.6893C34.2246 12.7942 34.1838 12.8948 34.1111 12.9689C34.0384 13.0431 33.9398 13.0847 33.8369 13.0847H32.8356C32.6511 11.9627 31.6943 11.1077 30.5418 11.1077C29.3893 11.1077 28.4325 11.9627 28.248 13.0847H21.2058C21.0212 11.9627 20.0645 11.1077 18.912 11.1077C17.7594 11.1077 16.8027 11.9627 16.6182 13.0847H14.7446C14.6418 13.0847 14.5432 13.1264 14.4705 13.2006C14.3978 13.2747 14.3569 13.3753 14.3569 13.4802C14.3569 13.585 14.3978 13.6856 14.4705 13.7598C14.5432 13.8339 14.6418 13.8756 14.7446 13.8756H16.6182C16.8027 14.9976 17.7594 15.8527 18.912 15.8527C20.0645 15.8527 21.0212 14.9976 21.2058 13.8756H28.248C28.4325 14.9976 29.3893 15.8527 30.5418 15.8527C31.6943 15.8527 32.6511 14.9976 32.8356 13.8756H33.8369C34.1454 13.8756 34.4412 13.7506 34.6593 13.5281C34.8774 13.3057 34.9999 13.0039 34.9999 12.6893V11.0626L34.99 11.0187C34.7431 9.92754 33.5791 8.57502 29.9239 8.15706C29.8217 8.07086 29.7215 7.98505 29.6227 7.90063C28.9828 7.35397 28.3942 6.851 27.6766 6.4795C26.7966 6.02418 25.7391 5.76953 24.1454 5.76953H15.2292ZM28.9912 13.4802C28.9912 13.0607 29.1545 12.6584 29.4453 12.3618C29.7361 12.0651 30.1306 11.8985 30.5418 11.8985C30.9531 11.8985 31.3475 12.0651 31.6383 12.3618C31.9291 12.6584 32.0925 13.0607 32.0925 13.4802C32.0925 13.8996 31.9291 14.302 31.6383 14.5986C31.3475 14.8952 30.9531 15.0618 30.5418 15.0618C30.1306 15.0618 29.7361 14.8952 29.4453 14.5986C29.1545 14.302 28.9912 13.8996 28.9912 13.4802ZM18.912 11.8985C18.5007 11.8985 18.1063 12.0651 17.8155 12.3618C17.5247 12.6584 17.3613 13.0607 17.3613 13.4802C17.3613 13.8996 17.5247 14.302 17.8155 14.5986C18.1063 14.8952 18.5007 15.0618 18.912 15.0618C19.3232 15.0618 19.7176 14.8952 20.0084 14.5986C20.2992 14.302 20.4626 13.8996 20.4626 13.4802C20.4626 13.0607 20.2992 12.6584 20.0084 12.3618C19.7176 12.0651 19.3232 11.8985 18.912 11.8985Z">
                        </path>
                        <path
                          d="M11 8.14151C11 8.03664 11.0408 7.93606 11.1135 7.86191C11.1862 7.78775 11.2848 7.74609 11.3877 7.74609H15.7489C15.8517 7.74609 15.9503 7.78775 16.023 7.86191C16.0957 7.93606 16.1365 8.03664 16.1365 8.14151C16.1365 8.24638 16.0957 8.34696 16.023 8.42111C15.9503 8.49527 15.8517 8.53693 15.7489 8.53693H11.3877C11.2848 8.53693 11.1862 8.49527 11.1135 8.42111C11.0408 8.34696 11 8.24638 11 8.14151ZM26.6836 8.65278C26.7563 8.72694 26.7971 8.82749 26.7971 8.93234C26.7971 9.03719 26.7563 9.13775 26.6836 9.2119L26.6532 9.24294C26.2897 9.61367 25.7968 9.82197 25.2828 9.82203H19.1409C19.0381 9.82203 18.9395 9.78037 18.8668 9.70622C18.7941 9.63206 18.7532 9.53149 18.7532 9.42662C18.7532 9.32174 18.7941 9.22117 18.8668 9.14701C18.9395 9.07286 19.0381 9.0312 19.1409 9.0312H25.2826C25.4354 9.03122 25.5866 9.00055 25.7277 8.94095C25.8688 8.88134 25.997 8.79397 26.105 8.68382L26.1355 8.65278C26.2082 8.57866 26.3068 8.53701 26.4096 8.53701C26.5123 8.53701 26.6109 8.57866 26.6836 8.65278ZM19.5286 17.7304C19.5286 17.6255 19.5694 17.5249 19.6421 17.4508C19.7148 17.3766 19.8134 17.335 19.9162 17.335H21.5638C21.6666 17.335 21.7652 17.3766 21.8379 17.4508C21.9106 17.5249 21.9514 17.6255 21.9514 17.7304C21.9514 17.8352 21.9106 17.9358 21.8379 18.01C21.7652 18.0841 21.6666 18.1258 21.5638 18.1258H19.9162C19.8134 18.1258 19.7148 18.0841 19.6421 18.01C19.5694 17.9358 19.5286 17.8352 19.5286 17.7304ZM22.2422 17.7304C22.2422 17.6255 22.283 17.5249 22.3557 17.4508C22.4284 17.3766 22.527 17.335 22.6299 17.335H26.991C27.0939 17.335 27.1925 17.3766 27.2652 17.4508C27.3379 17.5249 27.3787 17.6255 27.3787 17.7304C27.3787 17.8352 27.3379 17.9358 27.2652 18.01C27.1925 18.0841 27.0939 18.1258 26.991 18.1258H22.6299C22.527 18.1258 22.4284 18.0841 22.3557 18.01C22.283 17.9358 22.2422 17.8352 22.2422 17.7304Z">
                        </path>
                      </svg>
                      View Details
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="product-card5">
                <div class="product-img">
                  <div class="product-price">
                    <span>$7,656.00</span>
                  </div>
                  <a href="#" class="fav">
                    <svg width="14" height="13" viewBox="0 0 14 14"
                         xmlns="http://www.w3.org/2000/svg">
                      <path
                        d="M7.00012 2.40453L6.37273 1.75966C4.90006 0.245917 2.19972 0.76829 1.22495 2.67141C0.767306 3.56653 0.664053 4.8589 1.4997 6.50827C2.30473 8.09639 3.97953 9.99864 7.00012 12.0706C10.0207 9.99864 11.6946 8.09639 12.5005 6.50827C13.3362 4.85803 13.2338 3.56653 12.7753 2.67141C11.8005 0.76829 9.10019 0.245042 7.62752 1.75879L7.00012 2.40453ZM7.00012 13.125C-6.41666 4.25953 2.86912 -2.65995 6.84612 1.00016C6.89862 1.04829 6.95024 1.09816 7.00012 1.14979C7.04949 1.09821 7.10087 1.04859 7.15413 1.00104C11.1302 -2.6617 20.4169 4.25865 7.00012 13.125Z">
                      </path>
                    </svg>
                  </a>
                  <div class="slider-btn-group">
                    <div class="product-stand-next swiper-arrow">
                      <svg width="8" height="13" viewBox="0 0 8 13"
                           xmlns="http://www.w3.org/2000/svg">
                        <path d="M0 6.50008L8 0L2.90909 6.50008L8 13L0 6.50008Z"></path>
                      </svg>
                    </div>
                    <div class="product-stand-prev swiper-arrow">
                      <svg width="8" height="13" viewBox="0 0 8 13"
                           xmlns="http://www.w3.org/2000/svg">
                        <path d="M8 6.50008L0 0L5.09091 6.50008L0 13L8 6.50008Z"></path>
                      </svg>
                    </div>
                  </div>
                  <div class="swiper product-img-slider">
                    <div class="swiper-wrapper">
                      <div class="swiper-slide">
                        <img src="images/feature-car-03.png" alt="image">
                      </div>
                      <div class="swiper-slide">
                        <img src="images/feature-car-03.png" alt="image">
                      </div>
                      <div class="swiper-slide">
                        <img src="images/feature-car-03.png" alt="image">
                      </div>
                      <div class="swiper-slide">
                        <img src="images/feature-car-03.png" alt="image">
                      </div>
                    </div>
                  </div>
                </div>
                <div class="product-content">
                  <div class="location">
                    <a href="#"><i class="bi bi-geo-alt"></i> Panama City</a>
                  </div>
                  <h6><a href="car-deatils.html">Hyundai Sonata-2022</a></h6>
                  <ul class="features">
                    <li>
                      <img src="images/miles.svg" alt="">
                      2500 miles
                    </li>
                    <li>
                      <img src="images/menual.svg" alt="">
                      Manual
                    </li>
                    <li>
                      <img src="images/fuel.svg" alt="">
                      Petrol
                    </li>
                    <li>
                      <img src="images/electric.svg" alt="">
                      Electric
                    </li>
                  </ul>
                  <div class="content-btm">
                    <a class="view-btn2" href="car-deatils.html">
                      <svg width="35" height="21" viewBox="0 0 35 21"
                           xmlns="http://www.w3.org/2000/svg">
                        <path d="M11 20C5.47715 20 1 15.7467 1 10.5C1 5.25329 5.47715 1 11 1"
                              stroke-linecap="round"></path>
                        <path
                          d="M14.2597 3C14.1569 3 14.0583 3.04166 13.9856 3.11582C13.9129 3.18997 13.8721 3.29055 13.8721 3.39542C13.8721 3.50029 13.9129 3.60086 13.9856 3.67502C14.0583 3.74917 14.1569 3.79083 14.2597 3.79083H15.8104C15.9132 3.79083 16.0118 3.74917 16.0845 3.67502C16.1572 3.60086 16.198 3.50029 16.198 3.39542C16.198 3.29055 16.1572 3.18997 16.0845 3.11582C16.0118 3.04166 15.9132 3 15.8104 3H14.2597ZM16.7795 3C16.6767 3 16.5781 3.04166 16.5054 3.11582C16.4327 3.18997 16.3919 3.29055 16.3919 3.39542C16.3919 3.50029 16.4327 3.60086 16.5054 3.67502C16.5781 3.74917 16.6767 3.79083 16.7795 3.79083H21.3346C21.4374 3.79083 21.536 3.74917 21.6087 3.67502C21.6814 3.60086 21.7222 3.50029 21.7222 3.39542C21.7222 3.29055 21.6814 3.18997 21.6087 3.11582C21.536 3.04166 21.4374 3 21.3346 3H16.7795Z">
                        </path>
                        <path fill-rule="evenodd" clip-rule="evenodd"
                              d="M15.2292 5.76953C15.1264 5.76953 15.0278 5.81119 14.9551 5.88535C14.8824 5.9595 14.8415 6.06008 14.8415 6.16495C14.8415 6.26982 14.8824 6.3704 14.9551 6.44455C15.0278 6.51871 15.1264 6.56037 15.2292 6.56037H24.1454C25.653 6.56037 26.5822 6.79999 27.3256 7.18493C27.9575 7.51194 28.4672 7.9467 29.1055 8.49119C29.2375 8.60368 29.3749 8.72073 29.5201 8.84271L29.6101 8.91824L29.726 8.93069C33.2653 9.31069 34.0622 10.5309 34.2246 11.1557V12.6893C34.2246 12.7942 34.1838 12.8948 34.1111 12.9689C34.0384 13.0431 33.9398 13.0847 33.8369 13.0847H32.8356C32.6511 11.9627 31.6943 11.1077 30.5418 11.1077C29.3893 11.1077 28.4325 11.9627 28.248 13.0847H21.2058C21.0212 11.9627 20.0645 11.1077 18.912 11.1077C17.7594 11.1077 16.8027 11.9627 16.6182 13.0847H14.7446C14.6418 13.0847 14.5432 13.1264 14.4705 13.2006C14.3978 13.2747 14.3569 13.3753 14.3569 13.4802C14.3569 13.585 14.3978 13.6856 14.4705 13.7598C14.5432 13.8339 14.6418 13.8756 14.7446 13.8756H16.6182C16.8027 14.9976 17.7594 15.8527 18.912 15.8527C20.0645 15.8527 21.0212 14.9976 21.2058 13.8756H28.248C28.4325 14.9976 29.3893 15.8527 30.5418 15.8527C31.6943 15.8527 32.6511 14.9976 32.8356 13.8756H33.8369C34.1454 13.8756 34.4412 13.7506 34.6593 13.5281C34.8774 13.3057 34.9999 13.0039 34.9999 12.6893V11.0626L34.99 11.0187C34.7431 9.92754 33.5791 8.57502 29.9239 8.15706C29.8217 8.07086 29.7215 7.98505 29.6227 7.90063C28.9828 7.35397 28.3942 6.851 27.6766 6.4795C26.7966 6.02418 25.7391 5.76953 24.1454 5.76953H15.2292ZM28.9912 13.4802C28.9912 13.0607 29.1545 12.6584 29.4453 12.3618C29.7361 12.0651 30.1306 11.8985 30.5418 11.8985C30.9531 11.8985 31.3475 12.0651 31.6383 12.3618C31.9291 12.6584 32.0925 13.0607 32.0925 13.4802C32.0925 13.8996 31.9291 14.302 31.6383 14.5986C31.3475 14.8952 30.9531 15.0618 30.5418 15.0618C30.1306 15.0618 29.7361 14.8952 29.4453 14.5986C29.1545 14.302 28.9912 13.8996 28.9912 13.4802ZM18.912 11.8985C18.5007 11.8985 18.1063 12.0651 17.8155 12.3618C17.5247 12.6584 17.3613 13.0607 17.3613 13.4802C17.3613 13.8996 17.5247 14.302 17.8155 14.5986C18.1063 14.8952 18.5007 15.0618 18.912 15.0618C19.3232 15.0618 19.7176 14.8952 20.0084 14.5986C20.2992 14.302 20.4626 13.8996 20.4626 13.4802C20.4626 13.0607 20.2992 12.6584 20.0084 12.3618C19.7176 12.0651 19.3232 11.8985 18.912 11.8985Z">
                        </path>
                        <path
                          d="M11 8.14151C11 8.03664 11.0408 7.93606 11.1135 7.86191C11.1862 7.78775 11.2848 7.74609 11.3877 7.74609H15.7489C15.8517 7.74609 15.9503 7.78775 16.023 7.86191C16.0957 7.93606 16.1365 8.03664 16.1365 8.14151C16.1365 8.24638 16.0957 8.34696 16.023 8.42111C15.9503 8.49527 15.8517 8.53693 15.7489 8.53693H11.3877C11.2848 8.53693 11.1862 8.49527 11.1135 8.42111C11.0408 8.34696 11 8.24638 11 8.14151ZM26.6836 8.65278C26.7563 8.72694 26.7971 8.82749 26.7971 8.93234C26.7971 9.03719 26.7563 9.13775 26.6836 9.2119L26.6532 9.24294C26.2897 9.61367 25.7968 9.82197 25.2828 9.82203H19.1409C19.0381 9.82203 18.9395 9.78037 18.8668 9.70622C18.7941 9.63206 18.7532 9.53149 18.7532 9.42662C18.7532 9.32174 18.7941 9.22117 18.8668 9.14701C18.9395 9.07286 19.0381 9.0312 19.1409 9.0312H25.2826C25.4354 9.03122 25.5866 9.00055 25.7277 8.94095C25.8688 8.88134 25.997 8.79397 26.105 8.68382L26.1355 8.65278C26.2082 8.57866 26.3068 8.53701 26.4096 8.53701C26.5123 8.53701 26.6109 8.57866 26.6836 8.65278ZM19.5286 17.7304C19.5286 17.6255 19.5694 17.5249 19.6421 17.4508C19.7148 17.3766 19.8134 17.335 19.9162 17.335H21.5638C21.6666 17.335 21.7652 17.3766 21.8379 17.4508C21.9106 17.5249 21.9514 17.6255 21.9514 17.7304C21.9514 17.8352 21.9106 17.9358 21.8379 18.01C21.7652 18.0841 21.6666 18.1258 21.5638 18.1258H19.9162C19.8134 18.1258 19.7148 18.0841 19.6421 18.01C19.5694 17.9358 19.5286 17.8352 19.5286 17.7304ZM22.2422 17.7304C22.2422 17.6255 22.283 17.5249 22.3557 17.4508C22.4284 17.3766 22.527 17.335 22.6299 17.335H26.991C27.0939 17.335 27.1925 17.3766 27.2652 17.4508C27.3379 17.5249 27.3787 17.6255 27.3787 17.7304C27.3787 17.8352 27.3379 17.9358 27.2652 18.01C27.1925 18.0841 27.0939 18.1258 26.991 18.1258H22.6299C22.527 18.1258 22.4284 18.0841 22.3557 18.01C22.283 17.9358 22.2422 17.8352 22.2422 17.7304Z">
                        </path>
                      </svg>
                      View Details
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="product-card5">
                <div class="product-img">
                  <div class="product-price">
                    <span>$7,656.00</span>
                  </div>
                  <a href="#" class="fav">
                    <svg width="14" height="13" viewBox="0 0 14 14"
                         xmlns="http://www.w3.org/2000/svg">
                      <path
                        d="M7.00012 2.40453L6.37273 1.75966C4.90006 0.245917 2.19972 0.76829 1.22495 2.67141C0.767306 3.56653 0.664053 4.8589 1.4997 6.50827C2.30473 8.09639 3.97953 9.99864 7.00012 12.0706C10.0207 9.99864 11.6946 8.09639 12.5005 6.50827C13.3362 4.85803 13.2338 3.56653 12.7753 2.67141C11.8005 0.76829 9.10019 0.245042 7.62752 1.75879L7.00012 2.40453ZM7.00012 13.125C-6.41666 4.25953 2.86912 -2.65995 6.84612 1.00016C6.89862 1.04829 6.95024 1.09816 7.00012 1.14979C7.04949 1.09821 7.10087 1.04859 7.15413 1.00104C11.1302 -2.6617 20.4169 4.25865 7.00012 13.125Z">
                      </path>
                    </svg>
                  </a>
                  <div class="slider-btn-group">
                    <div class="product-stand-next swiper-arrow">
                      <svg width="8" height="13" viewBox="0 0 8 13"
                           xmlns="http://www.w3.org/2000/svg">
                        <path d="M0 6.50008L8 0L2.90909 6.50008L8 13L0 6.50008Z"></path>
                      </svg>
                    </div>
                    <div class="product-stand-prev swiper-arrow">
                      <svg width="8" height="13" viewBox="0 0 8 13"
                           xmlns="http://www.w3.org/2000/svg">
                        <path d="M8 6.50008L0 0L5.09091 6.50008L0 13L8 6.50008Z"></path>
                      </svg>
                    </div>
                  </div>
                  <div class="swiper product-img-slider">
                    <div class="swiper-wrapper">
                      <div class="swiper-slide">
                        <img src="images/feature-car-04.png" alt="image">
                      </div>
                      <div class="swiper-slide">
                        <img src="images/feature-car-04.png" alt="image">
                      </div>
                      <div class="swiper-slide">
                        <img src="images/feature-car-04.png" alt="image">
                      </div>
                      <div class="swiper-slide">
                        <img src="images/feature-car-04.png" alt="image">
                      </div>
                    </div>
                  </div>
                </div>
                <div class="product-content">
                  <div class="location">
                    <a href="#"><i class="bi bi-geo-alt"></i> Panama City</a>
                  </div>
                  <h6><a href="car-deatils.html">Tesla Model S-2023</a></h6>
                  <ul class="features">
                    <li>
                      <img src="images/miles.svg" alt="">
                      2500 miles
                    </li>
                    <li>
                      <img src="images/menual.svg" alt="">
                      Automatic
                    </li>
                    <li>
                      <img src="images/fuel.svg" alt="">
                      Petrol
                    </li>
                    <li>
                      <img src="images/electric.svg" alt="">
                      Electric
                    </li>
                  </ul>
                  <div class="content-btm">
                    <a class="view-btn2" href="car-deatils.html">
                      <svg width="35" height="21" viewBox="0 0 35 21"
                           xmlns="http://www.w3.org/2000/svg">
                        <path d="M11 20C5.47715 20 1 15.7467 1 10.5C1 5.25329 5.47715 1 11 1"
                              stroke-linecap="round"></path>
                        <path
                          d="M14.2597 3C14.1569 3 14.0583 3.04166 13.9856 3.11582C13.9129 3.18997 13.8721 3.29055 13.8721 3.39542C13.8721 3.50029 13.9129 3.60086 13.9856 3.67502C14.0583 3.74917 14.1569 3.79083 14.2597 3.79083H15.8104C15.9132 3.79083 16.0118 3.74917 16.0845 3.67502C16.1572 3.60086 16.198 3.50029 16.198 3.39542C16.198 3.29055 16.1572 3.18997 16.0845 3.11582C16.0118 3.04166 15.9132 3 15.8104 3H14.2597ZM16.7795 3C16.6767 3 16.5781 3.04166 16.5054 3.11582C16.4327 3.18997 16.3919 3.29055 16.3919 3.39542C16.3919 3.50029 16.4327 3.60086 16.5054 3.67502C16.5781 3.74917 16.6767 3.79083 16.7795 3.79083H21.3346C21.4374 3.79083 21.536 3.74917 21.6087 3.67502C21.6814 3.60086 21.7222 3.50029 21.7222 3.39542C21.7222 3.29055 21.6814 3.18997 21.6087 3.11582C21.536 3.04166 21.4374 3 21.3346 3H16.7795Z">
                        </path>
                        <path fill-rule="evenodd" clip-rule="evenodd"
                              d="M15.2292 5.76953C15.1264 5.76953 15.0278 5.81119 14.9551 5.88535C14.8824 5.9595 14.8415 6.06008 14.8415 6.16495C14.8415 6.26982 14.8824 6.3704 14.9551 6.44455C15.0278 6.51871 15.1264 6.56037 15.2292 6.56037H24.1454C25.653 6.56037 26.5822 6.79999 27.3256 7.18493C27.9575 7.51194 28.4672 7.9467 29.1055 8.49119C29.2375 8.60368 29.3749 8.72073 29.5201 8.84271L29.6101 8.91824L29.726 8.93069C33.2653 9.31069 34.0622 10.5309 34.2246 11.1557V12.6893C34.2246 12.7942 34.1838 12.8948 34.1111 12.9689C34.0384 13.0431 33.9398 13.0847 33.8369 13.0847H32.8356C32.6511 11.9627 31.6943 11.1077 30.5418 11.1077C29.3893 11.1077 28.4325 11.9627 28.248 13.0847H21.2058C21.0212 11.9627 20.0645 11.1077 18.912 11.1077C17.7594 11.1077 16.8027 11.9627 16.6182 13.0847H14.7446C14.6418 13.0847 14.5432 13.1264 14.4705 13.2006C14.3978 13.2747 14.3569 13.3753 14.3569 13.4802C14.3569 13.585 14.3978 13.6856 14.4705 13.7598C14.5432 13.8339 14.6418 13.8756 14.7446 13.8756H16.6182C16.8027 14.9976 17.7594 15.8527 18.912 15.8527C20.0645 15.8527 21.0212 14.9976 21.2058 13.8756H28.248C28.4325 14.9976 29.3893 15.8527 30.5418 15.8527C31.6943 15.8527 32.6511 14.9976 32.8356 13.8756H33.8369C34.1454 13.8756 34.4412 13.7506 34.6593 13.5281C34.8774 13.3057 34.9999 13.0039 34.9999 12.6893V11.0626L34.99 11.0187C34.7431 9.92754 33.5791 8.57502 29.9239 8.15706C29.8217 8.07086 29.7215 7.98505 29.6227 7.90063C28.9828 7.35397 28.3942 6.851 27.6766 6.4795C26.7966 6.02418 25.7391 5.76953 24.1454 5.76953H15.2292ZM28.9912 13.4802C28.9912 13.0607 29.1545 12.6584 29.4453 12.3618C29.7361 12.0651 30.1306 11.8985 30.5418 11.8985C30.9531 11.8985 31.3475 12.0651 31.6383 12.3618C31.9291 12.6584 32.0925 13.0607 32.0925 13.4802C32.0925 13.8996 31.9291 14.302 31.6383 14.5986C31.3475 14.8952 30.9531 15.0618 30.5418 15.0618C30.1306 15.0618 29.7361 14.8952 29.4453 14.5986C29.1545 14.302 28.9912 13.8996 28.9912 13.4802ZM18.912 11.8985C18.5007 11.8985 18.1063 12.0651 17.8155 12.3618C17.5247 12.6584 17.3613 13.0607 17.3613 13.4802C17.3613 13.8996 17.5247 14.302 17.8155 14.5986C18.1063 14.8952 18.5007 15.0618 18.912 15.0618C19.3232 15.0618 19.7176 14.8952 20.0084 14.5986C20.2992 14.302 20.4626 13.8996 20.4626 13.4802C20.4626 13.0607 20.2992 12.6584 20.0084 12.3618C19.7176 12.0651 19.3232 11.8985 18.912 11.8985Z">
                        </path>
                        <path
                          d="M11 8.14151C11 8.03664 11.0408 7.93606 11.1135 7.86191C11.1862 7.78775 11.2848 7.74609 11.3877 7.74609H15.7489C15.8517 7.74609 15.9503 7.78775 16.023 7.86191C16.0957 7.93606 16.1365 8.03664 16.1365 8.14151C16.1365 8.24638 16.0957 8.34696 16.023 8.42111C15.9503 8.49527 15.8517 8.53693 15.7489 8.53693H11.3877C11.2848 8.53693 11.1862 8.49527 11.1135 8.42111C11.0408 8.34696 11 8.24638 11 8.14151ZM26.6836 8.65278C26.7563 8.72694 26.7971 8.82749 26.7971 8.93234C26.7971 9.03719 26.7563 9.13775 26.6836 9.2119L26.6532 9.24294C26.2897 9.61367 25.7968 9.82197 25.2828 9.82203H19.1409C19.0381 9.82203 18.9395 9.78037 18.8668 9.70622C18.7941 9.63206 18.7532 9.53149 18.7532 9.42662C18.7532 9.32174 18.7941 9.22117 18.8668 9.14701C18.9395 9.07286 19.0381 9.0312 19.1409 9.0312H25.2826C25.4354 9.03122 25.5866 9.00055 25.7277 8.94095C25.8688 8.88134 25.997 8.79397 26.105 8.68382L26.1355 8.65278C26.2082 8.57866 26.3068 8.53701 26.4096 8.53701C26.5123 8.53701 26.6109 8.57866 26.6836 8.65278ZM19.5286 17.7304C19.5286 17.6255 19.5694 17.5249 19.6421 17.4508C19.7148 17.3766 19.8134 17.335 19.9162 17.335H21.5638C21.6666 17.335 21.7652 17.3766 21.8379 17.4508C21.9106 17.5249 21.9514 17.6255 21.9514 17.7304C21.9514 17.8352 21.9106 17.9358 21.8379 18.01C21.7652 18.0841 21.6666 18.1258 21.5638 18.1258H19.9162C19.8134 18.1258 19.7148 18.0841 19.6421 18.01C19.5694 17.9358 19.5286 17.8352 19.5286 17.7304ZM22.2422 17.7304C22.2422 17.6255 22.283 17.5249 22.3557 17.4508C22.4284 17.3766 22.527 17.335 22.6299 17.335H26.991C27.0939 17.335 27.1925 17.3766 27.2652 17.4508C27.3379 17.5249 27.3787 17.6255 27.3787 17.7304C27.3787 17.8352 27.3379 17.9358 27.2652 18.01C27.1925 18.0841 27.0939 18.1258 26.991 18.1258H22.6299C22.527 18.1258 22.4284 18.0841 22.3557 18.01C22.283 17.9358 22.2422 17.8352 22.2422 17.7304Z">
                        </path>
                      </svg>
                      View Details
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="product-card5">
                <div class="product-img">
                  <div class="product-price">
                    <span>$7,656.00</span>
                  </div>
                  <a href="#" class="fav">
                    <svg width="14" height="13" viewBox="0 0 14 14"
                         xmlns="http://www.w3.org/2000/svg">
                      <path
                        d="M7.00012 2.40453L6.37273 1.75966C4.90006 0.245917 2.19972 0.76829 1.22495 2.67141C0.767306 3.56653 0.664053 4.8589 1.4997 6.50827C2.30473 8.09639 3.97953 9.99864 7.00012 12.0706C10.0207 9.99864 11.6946 8.09639 12.5005 6.50827C13.3362 4.85803 13.2338 3.56653 12.7753 2.67141C11.8005 0.76829 9.10019 0.245042 7.62752 1.75879L7.00012 2.40453ZM7.00012 13.125C-6.41666 4.25953 2.86912 -2.65995 6.84612 1.00016C6.89862 1.04829 6.95024 1.09816 7.00012 1.14979C7.04949 1.09821 7.10087 1.04859 7.15413 1.00104C11.1302 -2.6617 20.4169 4.25865 7.00012 13.125Z">
                      </path>
                    </svg>
                  </a>
                  <div class="slider-btn-group">
                    <div class="product-stand-next swiper-arrow">
                      <svg width="8" height="13" viewBox="0 0 8 13"
                           xmlns="http://www.w3.org/2000/svg">
                        <path d="M0 6.50008L8 0L2.90909 6.50008L8 13L0 6.50008Z"></path>
                      </svg>
                    </div>
                    <div class="product-stand-prev swiper-arrow">
                      <svg width="8" height="13" viewBox="0 0 8 13"
                           xmlns="http://www.w3.org/2000/svg">
                        <path d="M8 6.50008L0 0L5.09091 6.50008L0 13L8 6.50008Z"></path>
                      </svg>
                    </div>
                  </div>
                  <div class="swiper product-img-slider">
                    <div class="swiper-wrapper">
                      <div class="swiper-slide">
                        <img src="images/feature-car-01.png" alt="image">
                      </div>
                      <div class="swiper-slide">
                        <img src="images/feature-car-01.png" alt="image">
                      </div>
                      <div class="swiper-slide">
                        <img src="images/feature-car-01.png" alt="image">
                      </div>
                      <div class="swiper-slide">
                        <img src="images/feature-car-01.png" alt="image">
                      </div>
                    </div>
                  </div>
                </div>
                <div class="product-content">
                  <div class="location">
                    <a href="#"><i class="bi bi-geo-alt"></i> Panama City</a>
                  </div>
                  <h6><a href="car-deatils.html">Mercedes-Benz Class-2023</a></h6>
                  <ul class="features">
                    <li>
                      <img src="images/miles.svg" alt="">
                      2500 miles
                    </li>
                    <li>
                      <img src="images/menual.svg" alt="">
                      Automatic
                    </li>
                    <li>
                      <img src="images/fuel.svg" alt="">
                      Petrol
                    </li>
                    <li>
                      <img src="images/electric.svg" alt="">
                      Electric
                    </li>
                  </ul>
                  <div class="content-btm">
                    <a class="view-btn2" href="car-deatils.html">
                      <svg width="35" height="21" viewBox="0 0 35 21"
                           xmlns="http://www.w3.org/2000/svg">
                        <path d="M11 20C5.47715 20 1 15.7467 1 10.5C1 5.25329 5.47715 1 11 1"
                              stroke-linecap="round"></path>
                        <path
                          d="M14.2597 3C14.1569 3 14.0583 3.04166 13.9856 3.11582C13.9129 3.18997 13.8721 3.29055 13.8721 3.39542C13.8721 3.50029 13.9129 3.60086 13.9856 3.67502C14.0583 3.74917 14.1569 3.79083 14.2597 3.79083H15.8104C15.9132 3.79083 16.0118 3.74917 16.0845 3.67502C16.1572 3.60086 16.198 3.50029 16.198 3.39542C16.198 3.29055 16.1572 3.18997 16.0845 3.11582C16.0118 3.04166 15.9132 3 15.8104 3H14.2597ZM16.7795 3C16.6767 3 16.5781 3.04166 16.5054 3.11582C16.4327 3.18997 16.3919 3.29055 16.3919 3.39542C16.3919 3.50029 16.4327 3.60086 16.5054 3.67502C16.5781 3.74917 16.6767 3.79083 16.7795 3.79083H21.3346C21.4374 3.79083 21.536 3.74917 21.6087 3.67502C21.6814 3.60086 21.7222 3.50029 21.7222 3.39542C21.7222 3.29055 21.6814 3.18997 21.6087 3.11582C21.536 3.04166 21.4374 3 21.3346 3H16.7795Z">
                        </path>
                        <path fill-rule="evenodd" clip-rule="evenodd"
                              d="M15.2292 5.76953C15.1264 5.76953 15.0278 5.81119 14.9551 5.88535C14.8824 5.9595 14.8415 6.06008 14.8415 6.16495C14.8415 6.26982 14.8824 6.3704 14.9551 6.44455C15.0278 6.51871 15.1264 6.56037 15.2292 6.56037H24.1454C25.653 6.56037 26.5822 6.79999 27.3256 7.18493C27.9575 7.51194 28.4672 7.9467 29.1055 8.49119C29.2375 8.60368 29.3749 8.72073 29.5201 8.84271L29.6101 8.91824L29.726 8.93069C33.2653 9.31069 34.0622 10.5309 34.2246 11.1557V12.6893C34.2246 12.7942 34.1838 12.8948 34.1111 12.9689C34.0384 13.0431 33.9398 13.0847 33.8369 13.0847H32.8356C32.6511 11.9627 31.6943 11.1077 30.5418 11.1077C29.3893 11.1077 28.4325 11.9627 28.248 13.0847H21.2058C21.0212 11.9627 20.0645 11.1077 18.912 11.1077C17.7594 11.1077 16.8027 11.9627 16.6182 13.0847H14.7446C14.6418 13.0847 14.5432 13.1264 14.4705 13.2006C14.3978 13.2747 14.3569 13.3753 14.3569 13.4802C14.3569 13.585 14.3978 13.6856 14.4705 13.7598C14.5432 13.8339 14.6418 13.8756 14.7446 13.8756H16.6182C16.8027 14.9976 17.7594 15.8527 18.912 15.8527C20.0645 15.8527 21.0212 14.9976 21.2058 13.8756H28.248C28.4325 14.9976 29.3893 15.8527 30.5418 15.8527C31.6943 15.8527 32.6511 14.9976 32.8356 13.8756H33.8369C34.1454 13.8756 34.4412 13.7506 34.6593 13.5281C34.8774 13.3057 34.9999 13.0039 34.9999 12.6893V11.0626L34.99 11.0187C34.7431 9.92754 33.5791 8.57502 29.9239 8.15706C29.8217 8.07086 29.7215 7.98505 29.6227 7.90063C28.9828 7.35397 28.3942 6.851 27.6766 6.4795C26.7966 6.02418 25.7391 5.76953 24.1454 5.76953H15.2292ZM28.9912 13.4802C28.9912 13.0607 29.1545 12.6584 29.4453 12.3618C29.7361 12.0651 30.1306 11.8985 30.5418 11.8985C30.9531 11.8985 31.3475 12.0651 31.6383 12.3618C31.9291 12.6584 32.0925 13.0607 32.0925 13.4802C32.0925 13.8996 31.9291 14.302 31.6383 14.5986C31.3475 14.8952 30.9531 15.0618 30.5418 15.0618C30.1306 15.0618 29.7361 14.8952 29.4453 14.5986C29.1545 14.302 28.9912 13.8996 28.9912 13.4802ZM18.912 11.8985C18.5007 11.8985 18.1063 12.0651 17.8155 12.3618C17.5247 12.6584 17.3613 13.0607 17.3613 13.4802C17.3613 13.8996 17.5247 14.302 17.8155 14.5986C18.1063 14.8952 18.5007 15.0618 18.912 15.0618C19.3232 15.0618 19.7176 14.8952 20.0084 14.5986C20.2992 14.302 20.4626 13.8996 20.4626 13.4802C20.4626 13.0607 20.2992 12.6584 20.0084 12.3618C19.7176 12.0651 19.3232 11.8985 18.912 11.8985Z">
                        </path>
                        <path
                          d="M11 8.14151C11 8.03664 11.0408 7.93606 11.1135 7.86191C11.1862 7.78775 11.2848 7.74609 11.3877 7.74609H15.7489C15.8517 7.74609 15.9503 7.78775 16.023 7.86191C16.0957 7.93606 16.1365 8.03664 16.1365 8.14151C16.1365 8.24638 16.0957 8.34696 16.023 8.42111C15.9503 8.49527 15.8517 8.53693 15.7489 8.53693H11.3877C11.2848 8.53693 11.1862 8.49527 11.1135 8.42111C11.0408 8.34696 11 8.24638 11 8.14151ZM26.6836 8.65278C26.7563 8.72694 26.7971 8.82749 26.7971 8.93234C26.7971 9.03719 26.7563 9.13775 26.6836 9.2119L26.6532 9.24294C26.2897 9.61367 25.7968 9.82197 25.2828 9.82203H19.1409C19.0381 9.82203 18.9395 9.78037 18.8668 9.70622C18.7941 9.63206 18.7532 9.53149 18.7532 9.42662C18.7532 9.32174 18.7941 9.22117 18.8668 9.14701C18.9395 9.07286 19.0381 9.0312 19.1409 9.0312H25.2826C25.4354 9.03122 25.5866 9.00055 25.7277 8.94095C25.8688 8.88134 25.997 8.79397 26.105 8.68382L26.1355 8.65278C26.2082 8.57866 26.3068 8.53701 26.4096 8.53701C26.5123 8.53701 26.6109 8.57866 26.6836 8.65278ZM19.5286 17.7304C19.5286 17.6255 19.5694 17.5249 19.6421 17.4508C19.7148 17.3766 19.8134 17.335 19.9162 17.335H21.5638C21.6666 17.335 21.7652 17.3766 21.8379 17.4508C21.9106 17.5249 21.9514 17.6255 21.9514 17.7304C21.9514 17.8352 21.9106 17.9358 21.8379 18.01C21.7652 18.0841 21.6666 18.1258 21.5638 18.1258H19.9162C19.8134 18.1258 19.7148 18.0841 19.6421 18.01C19.5694 17.9358 19.5286 17.8352 19.5286 17.7304ZM22.2422 17.7304C22.2422 17.6255 22.283 17.5249 22.3557 17.4508C22.4284 17.3766 22.527 17.335 22.6299 17.335H26.991C27.0939 17.335 27.1925 17.3766 27.2652 17.4508C27.3379 17.5249 27.3787 17.6255 27.3787 17.7304C27.3787 17.8352 27.3379 17.9358 27.2652 18.01C27.1925 18.0841 27.0939 18.1258 26.991 18.1258H22.6299C22.527 18.1258 22.4284 18.0841 22.3557 18.01C22.283 17.9358 22.2422 17.8352 22.2422 17.7304Z">
                        </path>
                      </svg>
                      View Details
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="product-card5">
                <div class="product-img">
                  <div class="product-price">
                    <span>$7,656.00</span>
                  </div>
                  <a href="#" class="fav">
                    <svg width="14" height="13" viewBox="0 0 14 14"
                         xmlns="http://www.w3.org/2000/svg">
                      <path
                        d="M7.00012 2.40453L6.37273 1.75966C4.90006 0.245917 2.19972 0.76829 1.22495 2.67141C0.767306 3.56653 0.664053 4.8589 1.4997 6.50827C2.30473 8.09639 3.97953 9.99864 7.00012 12.0706C10.0207 9.99864 11.6946 8.09639 12.5005 6.50827C13.3362 4.85803 13.2338 3.56653 12.7753 2.67141C11.8005 0.76829 9.10019 0.245042 7.62752 1.75879L7.00012 2.40453ZM7.00012 13.125C-6.41666 4.25953 2.86912 -2.65995 6.84612 1.00016C6.89862 1.04829 6.95024 1.09816 7.00012 1.14979C7.04949 1.09821 7.10087 1.04859 7.15413 1.00104C11.1302 -2.6617 20.4169 4.25865 7.00012 13.125Z">
                      </path>
                    </svg>
                  </a>
                  <div class="slider-btn-group">
                    <div class="product-stand-next swiper-arrow">
                      <svg width="8" height="13" viewBox="0 0 8 13"
                           xmlns="http://www.w3.org/2000/svg">
                        <path d="M0 6.50008L8 0L2.90909 6.50008L8 13L0 6.50008Z"></path>
                      </svg>
                    </div>
                    <div class="product-stand-prev swiper-arrow">
                      <svg width="8" height="13" viewBox="0 0 8 13"
                           xmlns="http://www.w3.org/2000/svg">
                        <path d="M8 6.50008L0 0L5.09091 6.50008L0 13L8 6.50008Z"></path>
                      </svg>
                    </div>
                  </div>
                  <div class="swiper product-img-slider">
                    <div class="swiper-wrapper">
                      <div class="swiper-slide">
                        <img src="images/feature-car-02.png" alt="image">
                      </div>
                      <div class="swiper-slide">
                        <img src="images/feature-car-02.png" alt="image">
                      </div>
                      <div class="swiper-slide">
                        <img src="images/feature-car-02.png" alt="image">
                      </div>
                      <div class="swiper-slide">
                        <img src="images/feature-car-02.png" alt="image">
                      </div>
                    </div>
                  </div>
                </div>
                <div class="product-content">
                  <div class="location">
                    <a href="#"><i class="bi bi-geo-alt"></i> Panama City</a>
                  </div>
                  <h6><a href="car-deatils.html">Nissan Altima S-2022</a></h6>
                  <ul class="features">
                    <li>
                      <img src="images/miles.svg" alt="">
                      2500 miles
                    </li>
                    <li>
                      <img src="images/menual.svg" alt="">
                      Automatic
                    </li>
                    <li>
                      <img src="images/fuel.svg" alt="">
                      Petrol
                    </li>
                    <li>
                      <img src="images/electric.svg" alt="">
                      Electric
                    </li>
                  </ul>
                  <div class="content-btm">
                    <a class="view-btn2" href="car-deatils.html">
                      <svg width="35" height="21" viewBox="0 0 35 21"
                           xmlns="http://www.w3.org/2000/svg">
                        <path d="M11 20C5.47715 20 1 15.7467 1 10.5C1 5.25329 5.47715 1 11 1"
                              stroke-linecap="round"></path>
                        <path
                          d="M14.2597 3C14.1569 3 14.0583 3.04166 13.9856 3.11582C13.9129 3.18997 13.8721 3.29055 13.8721 3.39542C13.8721 3.50029 13.9129 3.60086 13.9856 3.67502C14.0583 3.74917 14.1569 3.79083 14.2597 3.79083H15.8104C15.9132 3.79083 16.0118 3.74917 16.0845 3.67502C16.1572 3.60086 16.198 3.50029 16.198 3.39542C16.198 3.29055 16.1572 3.18997 16.0845 3.11582C16.0118 3.04166 15.9132 3 15.8104 3H14.2597ZM16.7795 3C16.6767 3 16.5781 3.04166 16.5054 3.11582C16.4327 3.18997 16.3919 3.29055 16.3919 3.39542C16.3919 3.50029 16.4327 3.60086 16.5054 3.67502C16.5781 3.74917 16.6767 3.79083 16.7795 3.79083H21.3346C21.4374 3.79083 21.536 3.74917 21.6087 3.67502C21.6814 3.60086 21.7222 3.50029 21.7222 3.39542C21.7222 3.29055 21.6814 3.18997 21.6087 3.11582C21.536 3.04166 21.4374 3 21.3346 3H16.7795Z">
                        </path>
                        <path fill-rule="evenodd" clip-rule="evenodd"
                              d="M15.2292 5.76953C15.1264 5.76953 15.0278 5.81119 14.9551 5.88535C14.8824 5.9595 14.8415 6.06008 14.8415 6.16495C14.8415 6.26982 14.8824 6.3704 14.9551 6.44455C15.0278 6.51871 15.1264 6.56037 15.2292 6.56037H24.1454C25.653 6.56037 26.5822 6.79999 27.3256 7.18493C27.9575 7.51194 28.4672 7.9467 29.1055 8.49119C29.2375 8.60368 29.3749 8.72073 29.5201 8.84271L29.6101 8.91824L29.726 8.93069C33.2653 9.31069 34.0622 10.5309 34.2246 11.1557V12.6893C34.2246 12.7942 34.1838 12.8948 34.1111 12.9689C34.0384 13.0431 33.9398 13.0847 33.8369 13.0847H32.8356C32.6511 11.9627 31.6943 11.1077 30.5418 11.1077C29.3893 11.1077 28.4325 11.9627 28.248 13.0847H21.2058C21.0212 11.9627 20.0645 11.1077 18.912 11.1077C17.7594 11.1077 16.8027 11.9627 16.6182 13.0847H14.7446C14.6418 13.0847 14.5432 13.1264 14.4705 13.2006C14.3978 13.2747 14.3569 13.3753 14.3569 13.4802C14.3569 13.585 14.3978 13.6856 14.4705 13.7598C14.5432 13.8339 14.6418 13.8756 14.7446 13.8756H16.6182C16.8027 14.9976 17.7594 15.8527 18.912 15.8527C20.0645 15.8527 21.0212 14.9976 21.2058 13.8756H28.248C28.4325 14.9976 29.3893 15.8527 30.5418 15.8527C31.6943 15.8527 32.6511 14.9976 32.8356 13.8756H33.8369C34.1454 13.8756 34.4412 13.7506 34.6593 13.5281C34.8774 13.3057 34.9999 13.0039 34.9999 12.6893V11.0626L34.99 11.0187C34.7431 9.92754 33.5791 8.57502 29.9239 8.15706C29.8217 8.07086 29.7215 7.98505 29.6227 7.90063C28.9828 7.35397 28.3942 6.851 27.6766 6.4795C26.7966 6.02418 25.7391 5.76953 24.1454 5.76953H15.2292ZM28.9912 13.4802C28.9912 13.0607 29.1545 12.6584 29.4453 12.3618C29.7361 12.0651 30.1306 11.8985 30.5418 11.8985C30.9531 11.8985 31.3475 12.0651 31.6383 12.3618C31.9291 12.6584 32.0925 13.0607 32.0925 13.4802C32.0925 13.8996 31.9291 14.302 31.6383 14.5986C31.3475 14.8952 30.9531 15.0618 30.5418 15.0618C30.1306 15.0618 29.7361 14.8952 29.4453 14.5986C29.1545 14.302 28.9912 13.8996 28.9912 13.4802ZM18.912 11.8985C18.5007 11.8985 18.1063 12.0651 17.8155 12.3618C17.5247 12.6584 17.3613 13.0607 17.3613 13.4802C17.3613 13.8996 17.5247 14.302 17.8155 14.5986C18.1063 14.8952 18.5007 15.0618 18.912 15.0618C19.3232 15.0618 19.7176 14.8952 20.0084 14.5986C20.2992 14.302 20.4626 13.8996 20.4626 13.4802C20.4626 13.0607 20.2992 12.6584 20.0084 12.3618C19.7176 12.0651 19.3232 11.8985 18.912 11.8985Z">
                        </path>
                        <path
                          d="M11 8.14151C11 8.03664 11.0408 7.93606 11.1135 7.86191C11.1862 7.78775 11.2848 7.74609 11.3877 7.74609H15.7489C15.8517 7.74609 15.9503 7.78775 16.023 7.86191C16.0957 7.93606 16.1365 8.03664 16.1365 8.14151C16.1365 8.24638 16.0957 8.34696 16.023 8.42111C15.9503 8.49527 15.8517 8.53693 15.7489 8.53693H11.3877C11.2848 8.53693 11.1862 8.49527 11.1135 8.42111C11.0408 8.34696 11 8.24638 11 8.14151ZM26.6836 8.65278C26.7563 8.72694 26.7971 8.82749 26.7971 8.93234C26.7971 9.03719 26.7563 9.13775 26.6836 9.2119L26.6532 9.24294C26.2897 9.61367 25.7968 9.82197 25.2828 9.82203H19.1409C19.0381 9.82203 18.9395 9.78037 18.8668 9.70622C18.7941 9.63206 18.7532 9.53149 18.7532 9.42662C18.7532 9.32174 18.7941 9.22117 18.8668 9.14701C18.9395 9.07286 19.0381 9.0312 19.1409 9.0312H25.2826C25.4354 9.03122 25.5866 9.00055 25.7277 8.94095C25.8688 8.88134 25.997 8.79397 26.105 8.68382L26.1355 8.65278C26.2082 8.57866 26.3068 8.53701 26.4096 8.53701C26.5123 8.53701 26.6109 8.57866 26.6836 8.65278ZM19.5286 17.7304C19.5286 17.6255 19.5694 17.5249 19.6421 17.4508C19.7148 17.3766 19.8134 17.335 19.9162 17.335H21.5638C21.6666 17.335 21.7652 17.3766 21.8379 17.4508C21.9106 17.5249 21.9514 17.6255 21.9514 17.7304C21.9514 17.8352 21.9106 17.9358 21.8379 18.01C21.7652 18.0841 21.6666 18.1258 21.5638 18.1258H19.9162C19.8134 18.1258 19.7148 18.0841 19.6421 18.01C19.5694 17.9358 19.5286 17.8352 19.5286 17.7304ZM22.2422 17.7304C22.2422 17.6255 22.283 17.5249 22.3557 17.4508C22.4284 17.3766 22.527 17.335 22.6299 17.335H26.991C27.0939 17.335 27.1925 17.3766 27.2652 17.4508C27.3379 17.5249 27.3787 17.6255 27.3787 17.7304C27.3787 17.8352 27.3379 17.9358 27.2652 18.01C27.1925 18.0841 27.0939 18.1258 26.991 18.1258H22.6299C22.527 18.1258 22.4284 18.0841 22.3557 18.01C22.283 17.9358 22.2422 17.8352 22.2422 17.7304Z">
                        </path>
                      </svg>
                      View Details
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="product-card5">
                <div class="product-img">
                  <div class="product-price">
                    <span>$7,656.00</span>
                  </div>
                  <a href="#" class="fav">
                    <svg width="14" height="13" viewBox="0 0 14 14"
                         xmlns="http://www.w3.org/2000/svg">
                      <path
                        d="M7.00012 2.40453L6.37273 1.75966C4.90006 0.245917 2.19972 0.76829 1.22495 2.67141C0.767306 3.56653 0.664053 4.8589 1.4997 6.50827C2.30473 8.09639 3.97953 9.99864 7.00012 12.0706C10.0207 9.99864 11.6946 8.09639 12.5005 6.50827C13.3362 4.85803 13.2338 3.56653 12.7753 2.67141C11.8005 0.76829 9.10019 0.245042 7.62752 1.75879L7.00012 2.40453ZM7.00012 13.125C-6.41666 4.25953 2.86912 -2.65995 6.84612 1.00016C6.89862 1.04829 6.95024 1.09816 7.00012 1.14979C7.04949 1.09821 7.10087 1.04859 7.15413 1.00104C11.1302 -2.6617 20.4169 4.25865 7.00012 13.125Z">
                      </path>
                    </svg>
                  </a>
                  <div class="slider-btn-group">
                    <div class="product-stand-next swiper-arrow">
                      <svg width="8" height="13" viewBox="0 0 8 13"
                           xmlns="http://www.w3.org/2000/svg">
                        <path d="M0 6.50008L8 0L2.90909 6.50008L8 13L0 6.50008Z"></path>
                      </svg>
                    </div>
                    <div class="product-stand-prev swiper-arrow">
                      <svg width="8" height="13" viewBox="0 0 8 13"
                           xmlns="http://www.w3.org/2000/svg">
                        <path d="M8 6.50008L0 0L5.09091 6.50008L0 13L8 6.50008Z"></path>
                      </svg>
                    </div>
                  </div>
                  <div class="swiper product-img-slider">
                    <div class="swiper-wrapper">
                      <div class="swiper-slide">
                        <img src="images/feature-car-03.png" alt="image">
                      </div>
                      <div class="swiper-slide">
                        <img src="images/feature-car-03.png" alt="image">
                      </div>
                      <div class="swiper-slide">
                        <img src="images/feature-car-03.png" alt="image">
                      </div>
                      <div class="swiper-slide">
                        <img src="images/feature-car-03.png" alt="image">
                      </div>
                    </div>
                  </div>
                </div>
                <div class="product-content">
                  <div class="location">
                    <a href="#"><i class="bi bi-geo-alt"></i> Panama City</a>
                  </div>
                  <h6><a href="car-deatils.html">Hyundai Sonata-2022</a></h6>
                  <ul class="features">
                    <li>
                      <img src="images/miles.svg" alt="">
                      2500 miles
                    </li>
                    <li>
                      <img src="images/menual.svg" alt="">
                      Automatic
                    </li>
                    <li>
                      <img src="images/fuel.svg" alt="">
                      Petrol
                    </li>
                    <li>
                      <img src="images/electric.svg" alt="">
                      Electric
                    </li>
                  </ul>
                  <div class="content-btm">
                    <a class="view-btn2" href="car-deatils.html">
                      <svg width="35" height="21" viewBox="0 0 35 21"
                           xmlns="http://www.w3.org/2000/svg">
                        <path d="M11 20C5.47715 20 1 15.7467 1 10.5C1 5.25329 5.47715 1 11 1"
                              stroke-linecap="round"></path>
                        <path
                          d="M14.2597 3C14.1569 3 14.0583 3.04166 13.9856 3.11582C13.9129 3.18997 13.8721 3.29055 13.8721 3.39542C13.8721 3.50029 13.9129 3.60086 13.9856 3.67502C14.0583 3.74917 14.1569 3.79083 14.2597 3.79083H15.8104C15.9132 3.79083 16.0118 3.74917 16.0845 3.67502C16.1572 3.60086 16.198 3.50029 16.198 3.39542C16.198 3.29055 16.1572 3.18997 16.0845 3.11582C16.0118 3.04166 15.9132 3 15.8104 3H14.2597ZM16.7795 3C16.6767 3 16.5781 3.04166 16.5054 3.11582C16.4327 3.18997 16.3919 3.29055 16.3919 3.39542C16.3919 3.50029 16.4327 3.60086 16.5054 3.67502C16.5781 3.74917 16.6767 3.79083 16.7795 3.79083H21.3346C21.4374 3.79083 21.536 3.74917 21.6087 3.67502C21.6814 3.60086 21.7222 3.50029 21.7222 3.39542C21.7222 3.29055 21.6814 3.18997 21.6087 3.11582C21.536 3.04166 21.4374 3 21.3346 3H16.7795Z">
                        </path>
                        <path fill-rule="evenodd" clip-rule="evenodd"
                              d="M15.2292 5.76953C15.1264 5.76953 15.0278 5.81119 14.9551 5.88535C14.8824 5.9595 14.8415 6.06008 14.8415 6.16495C14.8415 6.26982 14.8824 6.3704 14.9551 6.44455C15.0278 6.51871 15.1264 6.56037 15.2292 6.56037H24.1454C25.653 6.56037 26.5822 6.79999 27.3256 7.18493C27.9575 7.51194 28.4672 7.9467 29.1055 8.49119C29.2375 8.60368 29.3749 8.72073 29.5201 8.84271L29.6101 8.91824L29.726 8.93069C33.2653 9.31069 34.0622 10.5309 34.2246 11.1557V12.6893C34.2246 12.7942 34.1838 12.8948 34.1111 12.9689C34.0384 13.0431 33.9398 13.0847 33.8369 13.0847H32.8356C32.6511 11.9627 31.6943 11.1077 30.5418 11.1077C29.3893 11.1077 28.4325 11.9627 28.248 13.0847H21.2058C21.0212 11.9627 20.0645 11.1077 18.912 11.1077C17.7594 11.1077 16.8027 11.9627 16.6182 13.0847H14.7446C14.6418 13.0847 14.5432 13.1264 14.4705 13.2006C14.3978 13.2747 14.3569 13.3753 14.3569 13.4802C14.3569 13.585 14.3978 13.6856 14.4705 13.7598C14.5432 13.8339 14.6418 13.8756 14.7446 13.8756H16.6182C16.8027 14.9976 17.7594 15.8527 18.912 15.8527C20.0645 15.8527 21.0212 14.9976 21.2058 13.8756H28.248C28.4325 14.9976 29.3893 15.8527 30.5418 15.8527C31.6943 15.8527 32.6511 14.9976 32.8356 13.8756H33.8369C34.1454 13.8756 34.4412 13.7506 34.6593 13.5281C34.8774 13.3057 34.9999 13.0039 34.9999 12.6893V11.0626L34.99 11.0187C34.7431 9.92754 33.5791 8.57502 29.9239 8.15706C29.8217 8.07086 29.7215 7.98505 29.6227 7.90063C28.9828 7.35397 28.3942 6.851 27.6766 6.4795C26.7966 6.02418 25.7391 5.76953 24.1454 5.76953H15.2292ZM28.9912 13.4802C28.9912 13.0607 29.1545 12.6584 29.4453 12.3618C29.7361 12.0651 30.1306 11.8985 30.5418 11.8985C30.9531 11.8985 31.3475 12.0651 31.6383 12.3618C31.9291 12.6584 32.0925 13.0607 32.0925 13.4802C32.0925 13.8996 31.9291 14.302 31.6383 14.5986C31.3475 14.8952 30.9531 15.0618 30.5418 15.0618C30.1306 15.0618 29.7361 14.8952 29.4453 14.5986C29.1545 14.302 28.9912 13.8996 28.9912 13.4802ZM18.912 11.8985C18.5007 11.8985 18.1063 12.0651 17.8155 12.3618C17.5247 12.6584 17.3613 13.0607 17.3613 13.4802C17.3613 13.8996 17.5247 14.302 17.8155 14.5986C18.1063 14.8952 18.5007 15.0618 18.912 15.0618C19.3232 15.0618 19.7176 14.8952 20.0084 14.5986C20.2992 14.302 20.4626 13.8996 20.4626 13.4802C20.4626 13.0607 20.2992 12.6584 20.0084 12.3618C19.7176 12.0651 19.3232 11.8985 18.912 11.8985Z">
                        </path>
                        <path
                          d="M11 8.14151C11 8.03664 11.0408 7.93606 11.1135 7.86191C11.1862 7.78775 11.2848 7.74609 11.3877 7.74609H15.7489C15.8517 7.74609 15.9503 7.78775 16.023 7.86191C16.0957 7.93606 16.1365 8.03664 16.1365 8.14151C16.1365 8.24638 16.0957 8.34696 16.023 8.42111C15.9503 8.49527 15.8517 8.53693 15.7489 8.53693H11.3877C11.2848 8.53693 11.1862 8.49527 11.1135 8.42111C11.0408 8.34696 11 8.24638 11 8.14151ZM26.6836 8.65278C26.7563 8.72694 26.7971 8.82749 26.7971 8.93234C26.7971 9.03719 26.7563 9.13775 26.6836 9.2119L26.6532 9.24294C26.2897 9.61367 25.7968 9.82197 25.2828 9.82203H19.1409C19.0381 9.82203 18.9395 9.78037 18.8668 9.70622C18.7941 9.63206 18.7532 9.53149 18.7532 9.42662C18.7532 9.32174 18.7941 9.22117 18.8668 9.14701C18.9395 9.07286 19.0381 9.0312 19.1409 9.0312H25.2826C25.4354 9.03122 25.5866 9.00055 25.7277 8.94095C25.8688 8.88134 25.997 8.79397 26.105 8.68382L26.1355 8.65278C26.2082 8.57866 26.3068 8.53701 26.4096 8.53701C26.5123 8.53701 26.6109 8.57866 26.6836 8.65278ZM19.5286 17.7304C19.5286 17.6255 19.5694 17.5249 19.6421 17.4508C19.7148 17.3766 19.8134 17.335 19.9162 17.335H21.5638C21.6666 17.335 21.7652 17.3766 21.8379 17.4508C21.9106 17.5249 21.9514 17.6255 21.9514 17.7304C21.9514 17.8352 21.9106 17.9358 21.8379 18.01C21.7652 18.0841 21.6666 18.1258 21.5638 18.1258H19.9162C19.8134 18.1258 19.7148 18.0841 19.6421 18.01C19.5694 17.9358 19.5286 17.8352 19.5286 17.7304ZM22.2422 17.7304C22.2422 17.6255 22.283 17.5249 22.3557 17.4508C22.4284 17.3766 22.527 17.335 22.6299 17.335H26.991C27.0939 17.335 27.1925 17.3766 27.2652 17.4508C27.3379 17.5249 27.3787 17.6255 27.3787 17.7304C27.3787 17.8352 27.3379 17.9358 27.2652 18.01C27.1925 18.0841 27.0939 18.1258 26.991 18.1258H22.6299C22.527 18.1258 22.4284 18.0841 22.3557 18.01C22.283 17.9358 22.2422 17.8352 22.2422 17.7304Z">
                        </path>
                      </svg>
                      View Details
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="product-card5">
                <div class="product-img">
                  <div class="product-price">
                    <span>$7,656.00</span>
                  </div>
                  <a href="#" class="fav">
                    <svg width="14" height="13" viewBox="0 0 14 14"
                         xmlns="http://www.w3.org/2000/svg">
                      <path
                        d="M7.00012 2.40453L6.37273 1.75966C4.90006 0.245917 2.19972 0.76829 1.22495 2.67141C0.767306 3.56653 0.664053 4.8589 1.4997 6.50827C2.30473 8.09639 3.97953 9.99864 7.00012 12.0706C10.0207 9.99864 11.6946 8.09639 12.5005 6.50827C13.3362 4.85803 13.2338 3.56653 12.7753 2.67141C11.8005 0.76829 9.10019 0.245042 7.62752 1.75879L7.00012 2.40453ZM7.00012 13.125C-6.41666 4.25953 2.86912 -2.65995 6.84612 1.00016C6.89862 1.04829 6.95024 1.09816 7.00012 1.14979C7.04949 1.09821 7.10087 1.04859 7.15413 1.00104C11.1302 -2.6617 20.4169 4.25865 7.00012 13.125Z">
                      </path>
                    </svg>
                  </a>
                  <div class="slider-btn-group">
                    <div class="product-stand-next swiper-arrow">
                      <svg width="8" height="13" viewBox="0 0 8 13"
                           xmlns="http://www.w3.org/2000/svg">
                        <path d="M0 6.50008L8 0L2.90909 6.50008L8 13L0 6.50008Z"></path>
                      </svg>
                    </div>
                    <div class="product-stand-prev swiper-arrow">
                      <svg width="8" height="13" viewBox="0 0 8 13"
                           xmlns="http://www.w3.org/2000/svg">
                        <path d="M8 6.50008L0 0L5.09091 6.50008L0 13L8 6.50008Z"></path>
                      </svg>
                    </div>
                  </div>
                  <div class="swiper product-img-slider">
                    <div class="swiper-wrapper">
                      <div class="swiper-slide">
                        <img src="images/feature-car-04.png" alt="image">
                      </div>
                      <div class="swiper-slide">
                        <img src="images/feature-car-04.png" alt="image">
                      </div>
                      <div class="swiper-slide">
                        <img src="images/feature-car-04.png" alt="image">
                      </div>
                      <div class="swiper-slide">
                        <img src="images/feature-car-04.png" alt="image">
                      </div>
                    </div>
                  </div>
                </div>
                <div class="product-content">
                  <div class="location">
                    <a href="#"><i class="bi bi-geo-alt"></i> Panama City</a>
                  </div>
                  <h6><a href="car-deatils.html">Tesla Model S-2023</a></h6>
                  <ul class="features">
                    <li>
                      <img src="images/miles.svg" alt="">
                      2500 miles
                    </li>
                    <li>
                      <img src="images/menual.svg" alt="">
                      Automatic
                    </li>
                    <li>
                      <img src="images/fuel.svg" alt="">
                      Petrol
                    </li>
                    <li>
                      <img src="images/electric.svg" alt="">
                      Electric
                    </li>
                  </ul>
                  <div class="content-btm">
                    <a class="view-btn2" href="car-deatils.html">
                      <svg width="35" height="21" viewBox="0 0 35 21"
                           xmlns="http://www.w3.org/2000/svg">
                        <path d="M11 20C5.47715 20 1 15.7467 1 10.5C1 5.25329 5.47715 1 11 1"
                              stroke-linecap="round"></path>
                        <path
                          d="M14.2597 3C14.1569 3 14.0583 3.04166 13.9856 3.11582C13.9129 3.18997 13.8721 3.29055 13.8721 3.39542C13.8721 3.50029 13.9129 3.60086 13.9856 3.67502C14.0583 3.74917 14.1569 3.79083 14.2597 3.79083H15.8104C15.9132 3.79083 16.0118 3.74917 16.0845 3.67502C16.1572 3.60086 16.198 3.50029 16.198 3.39542C16.198 3.29055 16.1572 3.18997 16.0845 3.11582C16.0118 3.04166 15.9132 3 15.8104 3H14.2597ZM16.7795 3C16.6767 3 16.5781 3.04166 16.5054 3.11582C16.4327 3.18997 16.3919 3.29055 16.3919 3.39542C16.3919 3.50029 16.4327 3.60086 16.5054 3.67502C16.5781 3.74917 16.6767 3.79083 16.7795 3.79083H21.3346C21.4374 3.79083 21.536 3.74917 21.6087 3.67502C21.6814 3.60086 21.7222 3.50029 21.7222 3.39542C21.7222 3.29055 21.6814 3.18997 21.6087 3.11582C21.536 3.04166 21.4374 3 21.3346 3H16.7795Z">
                        </path>
                        <path fill-rule="evenodd" clip-rule="evenodd"
                              d="M15.2292 5.76953C15.1264 5.76953 15.0278 5.81119 14.9551 5.88535C14.8824 5.9595 14.8415 6.06008 14.8415 6.16495C14.8415 6.26982 14.8824 6.3704 14.9551 6.44455C15.0278 6.51871 15.1264 6.56037 15.2292 6.56037H24.1454C25.653 6.56037 26.5822 6.79999 27.3256 7.18493C27.9575 7.51194 28.4672 7.9467 29.1055 8.49119C29.2375 8.60368 29.3749 8.72073 29.5201 8.84271L29.6101 8.91824L29.726 8.93069C33.2653 9.31069 34.0622 10.5309 34.2246 11.1557V12.6893C34.2246 12.7942 34.1838 12.8948 34.1111 12.9689C34.0384 13.0431 33.9398 13.0847 33.8369 13.0847H32.8356C32.6511 11.9627 31.6943 11.1077 30.5418 11.1077C29.3893 11.1077 28.4325 11.9627 28.248 13.0847H21.2058C21.0212 11.9627 20.0645 11.1077 18.912 11.1077C17.7594 11.1077 16.8027 11.9627 16.6182 13.0847H14.7446C14.6418 13.0847 14.5432 13.1264 14.4705 13.2006C14.3978 13.2747 14.3569 13.3753 14.3569 13.4802C14.3569 13.585 14.3978 13.6856 14.4705 13.7598C14.5432 13.8339 14.6418 13.8756 14.7446 13.8756H16.6182C16.8027 14.9976 17.7594 15.8527 18.912 15.8527C20.0645 15.8527 21.0212 14.9976 21.2058 13.8756H28.248C28.4325 14.9976 29.3893 15.8527 30.5418 15.8527C31.6943 15.8527 32.6511 14.9976 32.8356 13.8756H33.8369C34.1454 13.8756 34.4412 13.7506 34.6593 13.5281C34.8774 13.3057 34.9999 13.0039 34.9999 12.6893V11.0626L34.99 11.0187C34.7431 9.92754 33.5791 8.57502 29.9239 8.15706C29.8217 8.07086 29.7215 7.98505 29.6227 7.90063C28.9828 7.35397 28.3942 6.851 27.6766 6.4795C26.7966 6.02418 25.7391 5.76953 24.1454 5.76953H15.2292ZM28.9912 13.4802C28.9912 13.0607 29.1545 12.6584 29.4453 12.3618C29.7361 12.0651 30.1306 11.8985 30.5418 11.8985C30.9531 11.8985 31.3475 12.0651 31.6383 12.3618C31.9291 12.6584 32.0925 13.0607 32.0925 13.4802C32.0925 13.8996 31.9291 14.302 31.6383 14.5986C31.3475 14.8952 30.9531 15.0618 30.5418 15.0618C30.1306 15.0618 29.7361 14.8952 29.4453 14.5986C29.1545 14.302 28.9912 13.8996 28.9912 13.4802ZM18.912 11.8985C18.5007 11.8985 18.1063 12.0651 17.8155 12.3618C17.5247 12.6584 17.3613 13.0607 17.3613 13.4802C17.3613 13.8996 17.5247 14.302 17.8155 14.5986C18.1063 14.8952 18.5007 15.0618 18.912 15.0618C19.3232 15.0618 19.7176 14.8952 20.0084 14.5986C20.2992 14.302 20.4626 13.8996 20.4626 13.4802C20.4626 13.0607 20.2992 12.6584 20.0084 12.3618C19.7176 12.0651 19.3232 11.8985 18.912 11.8985Z">
                        </path>
                        <path
                          d="M11 8.14151C11 8.03664 11.0408 7.93606 11.1135 7.86191C11.1862 7.78775 11.2848 7.74609 11.3877 7.74609H15.7489C15.8517 7.74609 15.9503 7.78775 16.023 7.86191C16.0957 7.93606 16.1365 8.03664 16.1365 8.14151C16.1365 8.24638 16.0957 8.34696 16.023 8.42111C15.9503 8.49527 15.8517 8.53693 15.7489 8.53693H11.3877C11.2848 8.53693 11.1862 8.49527 11.1135 8.42111C11.0408 8.34696 11 8.24638 11 8.14151ZM26.6836 8.65278C26.7563 8.72694 26.7971 8.82749 26.7971 8.93234C26.7971 9.03719 26.7563 9.13775 26.6836 9.2119L26.6532 9.24294C26.2897 9.61367 25.7968 9.82197 25.2828 9.82203H19.1409C19.0381 9.82203 18.9395 9.78037 18.8668 9.70622C18.7941 9.63206 18.7532 9.53149 18.7532 9.42662C18.7532 9.32174 18.7941 9.22117 18.8668 9.14701C18.9395 9.07286 19.0381 9.0312 19.1409 9.0312H25.2826C25.4354 9.03122 25.5866 9.00055 25.7277 8.94095C25.8688 8.88134 25.997 8.79397 26.105 8.68382L26.1355 8.65278C26.2082 8.57866 26.3068 8.53701 26.4096 8.53701C26.5123 8.53701 26.6109 8.57866 26.6836 8.65278ZM19.5286 17.7304C19.5286 17.6255 19.5694 17.5249 19.6421 17.4508C19.7148 17.3766 19.8134 17.335 19.9162 17.335H21.5638C21.6666 17.335 21.7652 17.3766 21.8379 17.4508C21.9106 17.5249 21.9514 17.6255 21.9514 17.7304C21.9514 17.8352 21.9106 17.9358 21.8379 18.01C21.7652 18.0841 21.6666 18.1258 21.5638 18.1258H19.9162C19.8134 18.1258 19.7148 18.0841 19.6421 18.01C19.5694 17.9358 19.5286 17.8352 19.5286 17.7304ZM22.2422 17.7304C22.2422 17.6255 22.283 17.5249 22.3557 17.4508C22.4284 17.3766 22.527 17.335 22.6299 17.335H26.991C27.0939 17.335 27.1925 17.3766 27.2652 17.4508C27.3379 17.5249 27.3787 17.6255 27.3787 17.7304C27.3787 17.8352 27.3379 17.9358 27.2652 18.01C27.1925 18.0841 27.0939 18.1258 26.991 18.1258H22.6299C22.527 18.1258 22.4284 18.0841 22.3557 18.01C22.283 17.9358 22.2422 17.8352 22.2422 17.7304Z">
                        </path>
                      </svg>
                      View Details
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="home5-brand-category-area mb-100">
  <div class="container">
    <div class="row mb-50 wow fadeInUp" data-wow-delay="200ms">
      <div class="col-lg-12 d-flex align-items-end justify-content-between gap-3 flex-wrap">
        <div class="section-title-2">
          <h2>Brand Category</h2>
          <p>To get the most accurate and up-to-date information.</p>
        </div>
        <div class="filter-and-slider-btn">
          <div class="slider-btn-group2 d-flex align-items-center justify-content-between">
            <div class="slider-btn prev-52">
              <svg width="9" height="15" viewBox="0 0 8 13" xmlns="http://www.w3.org/2000/svg">
                <path d="M0 6.50008L8 0L2.90909 6.50008L8 13L0 6.50008Z"></path>
              </svg>
            </div>
            <div class="slider-btn next-52">
              <svg width="9" height="15" viewBox="0 0 8 13" xmlns="http://www.w3.org/2000/svg">
                <path d="M8 6.50008L0 0L5.09091 6.50008L0 13L8 6.50008Z"></path>
              </svg>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row wow fadeInUp" data-wow-delay="300ms">
      <div class="col-lg-12">
        <div class="swiper home5-brand-category-slider">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <div class="single-category5">
                <div class="category-icon">
                  <img src="images/tata.svg" alt="icon">
                </div>
                <div class="category-content">
                  <h5><a href="single-brand-category.html">TATA Car</a></h5>
                  <span>(23,533) +</span>
                </div>
                <div class="explore-btn5">
                  <a href="single-brand-category.html"><span>Explore</span> <i
                      class="bi bi-arrow-right-short"></i></a>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="single-category5">
                <div class="category-icon">
                  <img src="images/mercedes.svg" alt="icon">
                </div>
                <div class="category-content">
                  <h5><a href="single-brand-category.html">Mercedes</a></h5>
                  <span>(23,533) +</span>
                </div>
                <div class="explore-btn5">
                  <a href="single-brand-category.html"><span>Explore</span> <i
                      class="bi bi-arrow-right-short"></i></a>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="single-category5">
                <div class="category-icon">
                  <img src="images/toyota_1.svg" alt="icon">
                </div>
                <div class="category-content">
                  <h5><a href="single-brand-category.html">Toyota</a></h5>
                  <span>(64,543) +</span>
                </div>
                <div class="explore-btn5">
                  <a href="single-brand-category.html"><span>Explore</span> <i
                      class="bi bi-arrow-right-short"></i></a>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="single-category5">
                <div class="category-icon">
                  <img src="images/tesla_1.svg" alt="icon">
                </div>
                <div class="category-content">
                  <h5><a href="single-brand-category.html">Tesla</a></h5>
                  <span>(23,533) +</span>
                </div>
                <div class="explore-btn5">
                  <a href="single-brand-category.html"><span>Explore</span> <i
                      class="bi bi-arrow-right-short"></i></a>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="single-category5">
                <div class="category-icon">
                  <img src="images/mazda_1.svg" alt="icon">
                </div>
                <div class="category-content">
                  <h5><a href="single-brand-category.html">Mazda</a></h5>
                  <span>(23,533) +</span>
                </div>
                <div class="explore-btn5">
                  <a href="single-brand-category.html"><span>Explore</span> <i
                      class="bi bi-arrow-right-short"></i></a>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="single-category5">
                <div class="category-icon">
                  <img src="images/tata.svg" alt="icon">
                </div>
                <div class="category-content">
                  <h5><a href="single-brand-category.html">TATA Car</a></h5>
                  <span>(23,533) +</span>
                </div>
                <div class="explore-btn5">
                  <a href="single-brand-category.html"><span>Explore</span> <i
                      class="bi bi-arrow-right-short"></i></a>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="single-category5">
                <div class="category-icon">
                  <img src="images/mercedes.svg" alt="icon">
                </div>
                <div class="category-content">
                  <h5><a href="single-brand-category.html">Mercedes</a></h5>
                  <span>(23,533) +</span>
                </div>
                <div class="explore-btn5">
                  <a href="single-brand-category.html"><span>Explore</span> <i
                      class="bi bi-arrow-right-short"></i></a>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="single-category5">
                <div class="category-icon">
                  <img src="images/toyota_1.svg" alt="icon">
                </div>
                <div class="category-content">
                  <h5><a href="single-brand-category.html">Toyota</a></h5>
                  <span>(64,543) +</span>
                </div>
                <div class="explore-btn5">
                  <a href="single-brand-category.html"><span>Explore</span> <i
                      class="bi bi-arrow-right-short"></i></a>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="single-category5">
                <div class="category-icon">
                  <img src="images/tesla_1.svg" alt="icon">
                </div>
                <div class="category-content">
                  <h5><a href="single-brand-category.html">Tesla</a></h5>
                  <span>(23,533) +</span>
                </div>
                <div class="explore-btn5">
                  <a href="single-brand-category.html"><span>Explore</span> <i
                      class="bi bi-arrow-right-short"></i></a>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="single-category5">
                <div class="category-icon">
                  <img src="images/mazda_1.svg" alt="icon">
                </div>
                <div class="category-content">
                  <h5><a href="single-brand-category.html">Mazda</a></h5>
                  <span>(23,533) +</span>
                </div>
                <div class="explore-btn5">
                  <a href="single-brand-category.html"><span>Explore</span> <i
                      class="bi bi-arrow-right-short"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="home5-why-drivco-area pt-90 pb-90 mb-100">
  <div class="container">
    <div class="row g-lg-4 gy-5">
      <div class="col-lg-6 d-flex align-items-center">
        <div class="drivco-content">
          <div class="section-title-2 mb-60 wow fadeInUp" data-wow-delay="200ms">
            <h2>Why Drivco?</h2>
            <p>To get the most accurate and up-to-date information.</p>
          </div>
          <div class="drivco-featute">
            <ul>
              <li class="single-feature wow fadeInUp" data-wow-delay="300ms">
                <div class="feature-icon">
                  <img src="images/safe.svg" alt="icon">
                </div>
                <div class="feature-content">
                  <h5>Safe Purchase</h5>
                  <p>Safe purchase products are typically known for their high quality and
                    reliability.</p>
                </div>
              </li>
              <li class="single-feature wow fadeInUp" data-wow-delay="400ms">
                <div class="feature-icon">
                  <img src="images/warranty.svg" alt="icon">
                </div>
                <div class="feature-content">
                  <h5>90 Days Warranty</h5>
                  <p>The warranty generally covers repairs, replacements, or refunds for products
                    that exhibit defects.</p>
                </div>
              </li>
              <li class="single-feature wow fadeInUp" data-wow-delay="500ms">
                <div class="feature-icon">
                  <img src="images/hassle.svg" alt="icon">
                </div>
                <div class="feature-content">
                  <h5>Hassle &amp; Haggle Free</h5>
                  <p>Whether it's buying a product, negotiating a contract, or seeking customer
                    support.</p>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-lg-6 d-flex justify-content-lg-end justify-content-center">
        <div class="drivco-img wow zoomIn" data-wow-delay="400ms">
          <img src="images/why-drivco.png" alt="img">
        </div>
      </div>
    </div>
  </div>
</div>

<div class="home5-recent-car-section mb-100">
  <div class="container">
    <div class="row mb-50 wow fadeInUp" data-wow-delay="200ms">
      <div class="col-lg-12 d-flex align-items-end justify-content-between gap-3 flex-wrap">
        <div class="section-title-2">
          <h2>Recent Cars</h2>
          <p>To get the most accurate and up-to-date information.</p>
        </div>
        <div class="slider-btn-and-exp-btn">
          <div class="explore-more-btn two three">
            <a href="car-deatils.html">Explore More <i class="bi bi-arrow-right"></i></a>
          </div>
        </div>
      </div>
    </div>
    <div class="row wow fadeInUp" data-wow-delay="200ms">
      <div class="col-lg-12">
        <div class="slick-wrapper">
          <div id="slick3">
            <div class="slide-item">
              <div class="product-st-card1">
                <div class="product-img">
                  <div class="number-of-img">
                    <img src="images/gallery-icon-1.svg" alt="">
                    10
                  </div>
                  <div class="product-price">
                    <span>$7,656.00</span>
                  </div>
                  <a href="#" class="fav">
                    <svg width="14" height="13" viewBox="0 0 14 14"
                         xmlns="http://www.w3.org/2000/svg">
                      <path
                        d="M7.00012 2.40453L6.37273 1.75966C4.90006 0.245917 2.19972 0.76829 1.22495 2.67141C0.767306 3.56653 0.664053 4.8589 1.4997 6.50827C2.30473 8.09639 3.97953 9.99864 7.00012 12.0706C10.0207 9.99864 11.6946 8.09639 12.5005 6.50827C13.3362 4.85803 13.2338 3.56653 12.7753 2.67141C11.8005 0.76829 9.10019 0.245042 7.62752 1.75879L7.00012 2.40453ZM7.00012 13.125C-6.41666 4.25953 2.86912 -2.65995 6.84612 1.00016C6.89862 1.04829 6.95024 1.09816 7.00012 1.14979C7.04949 1.09821 7.10087 1.04859 7.15413 1.00104C11.1302 -2.6617 20.4169 4.25865 7.00012 13.125Z">
                      </path>
                    </svg>
                  </a>
                  <div class="slider-btn-group">
                    <div class="product-stand-next swiper-arrow">
                      <svg width="8" height="13" viewBox="0 0 8 13"
                           xmlns="http://www.w3.org/2000/svg">
                        <path d="M0 6.50008L8 0L2.90909 6.50008L8 13L0 6.50008Z"></path>
                      </svg>
                    </div>
                    <div class="product-stand-prev swiper-arrow">
                      <svg width="8" height="13" viewBox="0 0 8 13"
                           xmlns="http://www.w3.org/2000/svg">
                        <path d="M8 6.50008L0 0L5.09091 6.50008L0 13L8 6.50008Z"></path>
                      </svg>
                    </div>
                  </div>
                  <div class="swiper product-img-slider">
                    <div class="swiper-wrapper">
                      <div class="swiper-slide">
                        <img class="img-fluid" src="images/product-st-01.png" alt="image">
                      </div>
                    </div>
                  </div>
                </div>
                <div class="product-content">
                  <div class="location">
                    <a href="#"><i class="bi bi-geo-alt"></i> Panama City</a>
                  </div>
                  <h6><a href="car-deatils.html">Mercedes-Benz Class-2023</a></h6>
                  <ul class="features">
                    <li>
                      <img src="images/menual.svg" alt="">
                      Automatic
                    </li>
                    <li>
                      <img src="images/fuel.svg" alt="">
                      Petrol
                    </li>
                    <li>
                      <img src="images/electric.svg" alt="">
                      Electric
                    </li>
                  </ul>
                  <div class="content-btm">
                    <a class="view-btn2" href="car-deatils.html">
                      <svg width="35" height="21" viewBox="0 0 35 21"
                           xmlns="http://www.w3.org/2000/svg">
                        <path d="M11 20C5.47715 20 1 15.7467 1 10.5C1 5.25329 5.47715 1 11 1"
                              stroke-linecap="round"></path>
                        <path
                          d="M14.2597 3C14.1569 3 14.0583 3.04166 13.9856 3.11582C13.9129 3.18997 13.8721 3.29055 13.8721 3.39542C13.8721 3.50029 13.9129 3.60086 13.9856 3.67502C14.0583 3.74917 14.1569 3.79083 14.2597 3.79083H15.8104C15.9132 3.79083 16.0118 3.74917 16.0845 3.67502C16.1572 3.60086 16.198 3.50029 16.198 3.39542C16.198 3.29055 16.1572 3.18997 16.0845 3.11582C16.0118 3.04166 15.9132 3 15.8104 3H14.2597ZM16.7795 3C16.6767 3 16.5781 3.04166 16.5054 3.11582C16.4327 3.18997 16.3919 3.29055 16.3919 3.39542C16.3919 3.50029 16.4327 3.60086 16.5054 3.67502C16.5781 3.74917 16.6767 3.79083 16.7795 3.79083H21.3346C21.4374 3.79083 21.536 3.74917 21.6087 3.67502C21.6814 3.60086 21.7222 3.50029 21.7222 3.39542C21.7222 3.29055 21.6814 3.18997 21.6087 3.11582C21.536 3.04166 21.4374 3 21.3346 3H16.7795Z">
                        </path>
                        <path fill-rule="evenodd" clip-rule="evenodd"
                              d="M15.2292 5.76953C15.1264 5.76953 15.0278 5.81119 14.9551 5.88535C14.8824 5.9595 14.8415 6.06008 14.8415 6.16495C14.8415 6.26982 14.8824 6.3704 14.9551 6.44455C15.0278 6.51871 15.1264 6.56037 15.2292 6.56037H24.1454C25.653 6.56037 26.5822 6.79999 27.3256 7.18493C27.9575 7.51194 28.4672 7.9467 29.1055 8.49119C29.2375 8.60368 29.3749 8.72073 29.5201 8.84271L29.6101 8.91824L29.726 8.93069C33.2653 9.31069 34.0622 10.5309 34.2246 11.1557V12.6893C34.2246 12.7942 34.1838 12.8948 34.1111 12.9689C34.0384 13.0431 33.9398 13.0847 33.8369 13.0847H32.8356C32.6511 11.9627 31.6943 11.1077 30.5418 11.1077C29.3893 11.1077 28.4325 11.9627 28.248 13.0847H21.2058C21.0212 11.9627 20.0645 11.1077 18.912 11.1077C17.7594 11.1077 16.8027 11.9627 16.6182 13.0847H14.7446C14.6418 13.0847 14.5432 13.1264 14.4705 13.2006C14.3978 13.2747 14.3569 13.3753 14.3569 13.4802C14.3569 13.585 14.3978 13.6856 14.4705 13.7598C14.5432 13.8339 14.6418 13.8756 14.7446 13.8756H16.6182C16.8027 14.9976 17.7594 15.8527 18.912 15.8527C20.0645 15.8527 21.0212 14.9976 21.2058 13.8756H28.248C28.4325 14.9976 29.3893 15.8527 30.5418 15.8527C31.6943 15.8527 32.6511 14.9976 32.8356 13.8756H33.8369C34.1454 13.8756 34.4412 13.7506 34.6593 13.5281C34.8774 13.3057 34.9999 13.0039 34.9999 12.6893V11.0626L34.99 11.0187C34.7431 9.92754 33.5791 8.57502 29.9239 8.15706C29.8217 8.07086 29.7215 7.98505 29.6227 7.90063C28.9828 7.35397 28.3942 6.851 27.6766 6.4795C26.7966 6.02418 25.7391 5.76953 24.1454 5.76953H15.2292ZM28.9912 13.4802C28.9912 13.0607 29.1545 12.6584 29.4453 12.3618C29.7361 12.0651 30.1306 11.8985 30.5418 11.8985C30.9531 11.8985 31.3475 12.0651 31.6383 12.3618C31.9291 12.6584 32.0925 13.0607 32.0925 13.4802C32.0925 13.8996 31.9291 14.302 31.6383 14.5986C31.3475 14.8952 30.9531 15.0618 30.5418 15.0618C30.1306 15.0618 29.7361 14.8952 29.4453 14.5986C29.1545 14.302 28.9912 13.8996 28.9912 13.4802ZM18.912 11.8985C18.5007 11.8985 18.1063 12.0651 17.8155 12.3618C17.5247 12.6584 17.3613 13.0607 17.3613 13.4802C17.3613 13.8996 17.5247 14.302 17.8155 14.5986C18.1063 14.8952 18.5007 15.0618 18.912 15.0618C19.3232 15.0618 19.7176 14.8952 20.0084 14.5986C20.2992 14.302 20.4626 13.8996 20.4626 13.4802C20.4626 13.0607 20.2992 12.6584 20.0084 12.3618C19.7176 12.0651 19.3232 11.8985 18.912 11.8985Z">
                        </path>
                        <path
                          d="M11 8.14151C11 8.03664 11.0408 7.93606 11.1135 7.86191C11.1862 7.78775 11.2848 7.74609 11.3877 7.74609H15.7489C15.8517 7.74609 15.9503 7.78775 16.023 7.86191C16.0957 7.93606 16.1365 8.03664 16.1365 8.14151C16.1365 8.24638 16.0957 8.34696 16.023 8.42111C15.9503 8.49527 15.8517 8.53693 15.7489 8.53693H11.3877C11.2848 8.53693 11.1862 8.49527 11.1135 8.42111C11.0408 8.34696 11 8.24638 11 8.14151ZM26.6836 8.65278C26.7563 8.72694 26.7971 8.82749 26.7971 8.93234C26.7971 9.03719 26.7563 9.13775 26.6836 9.2119L26.6532 9.24294C26.2897 9.61367 25.7968 9.82197 25.2828 9.82203H19.1409C19.0381 9.82203 18.9395 9.78037 18.8668 9.70622C18.7941 9.63206 18.7532 9.53149 18.7532 9.42662C18.7532 9.32174 18.7941 9.22117 18.8668 9.14701C18.9395 9.07286 19.0381 9.0312 19.1409 9.0312H25.2826C25.4354 9.03122 25.5866 9.00055 25.7277 8.94095C25.8688 8.88134 25.997 8.79397 26.105 8.68382L26.1355 8.65278C26.2082 8.57866 26.3068 8.53701 26.4096 8.53701C26.5123 8.53701 26.6109 8.57866 26.6836 8.65278ZM19.5286 17.7304C19.5286 17.6255 19.5694 17.5249 19.6421 17.4508C19.7148 17.3766 19.8134 17.335 19.9162 17.335H21.5638C21.6666 17.335 21.7652 17.3766 21.8379 17.4508C21.9106 17.5249 21.9514 17.6255 21.9514 17.7304C21.9514 17.8352 21.9106 17.9358 21.8379 18.01C21.7652 18.0841 21.6666 18.1258 21.5638 18.1258H19.9162C19.8134 18.1258 19.7148 18.0841 19.6421 18.01C19.5694 17.9358 19.5286 17.8352 19.5286 17.7304ZM22.2422 17.7304C22.2422 17.6255 22.283 17.5249 22.3557 17.4508C22.4284 17.3766 22.527 17.335 22.6299 17.335H26.991C27.0939 17.335 27.1925 17.3766 27.2652 17.4508C27.3379 17.5249 27.3787 17.6255 27.3787 17.7304C27.3787 17.8352 27.3379 17.9358 27.2652 18.01C27.1925 18.0841 27.0939 18.1258 26.991 18.1258H22.6299C22.527 18.1258 22.4284 18.0841 22.3557 18.01C22.283 17.9358 22.2422 17.8352 22.2422 17.7304Z">
                        </path>
                      </svg>
                      View Details
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <div class="slide-item">
              <div class="product-st-card1">
                <div class="product-img">
                  <div class="number-of-img">
                    <img src="images/gallery-icon-1.svg" alt="">
                    10
                  </div>
                  <div class="product-price">
                    <span>$7,656.00</span>
                  </div>
                  <a href="#" class="fav">
                    <svg width="14" height="13" viewBox="0 0 14 14"
                         xmlns="http://www.w3.org/2000/svg">
                      <path
                        d="M7.00012 2.40453L6.37273 1.75966C4.90006 0.245917 2.19972 0.76829 1.22495 2.67141C0.767306 3.56653 0.664053 4.8589 1.4997 6.50827C2.30473 8.09639 3.97953 9.99864 7.00012 12.0706C10.0207 9.99864 11.6946 8.09639 12.5005 6.50827C13.3362 4.85803 13.2338 3.56653 12.7753 2.67141C11.8005 0.76829 9.10019 0.245042 7.62752 1.75879L7.00012 2.40453ZM7.00012 13.125C-6.41666 4.25953 2.86912 -2.65995 6.84612 1.00016C6.89862 1.04829 6.95024 1.09816 7.00012 1.14979C7.04949 1.09821 7.10087 1.04859 7.15413 1.00104C11.1302 -2.6617 20.4169 4.25865 7.00012 13.125Z">
                      </path>
                    </svg>
                  </a>
                  <div class="slider-btn-group">
                    <div class="product-stand-next swiper-arrow">
                      <svg width="8" height="13" viewBox="0 0 8 13"
                           xmlns="http://www.w3.org/2000/svg">
                        <path d="M0 6.50008L8 0L2.90909 6.50008L8 13L0 6.50008Z"></path>
                      </svg>
                    </div>
                    <div class="product-stand-prev swiper-arrow">
                      <svg width="8" height="13" viewBox="0 0 8 13"
                           xmlns="http://www.w3.org/2000/svg">
                        <path d="M8 6.50008L0 0L5.09091 6.50008L0 13L8 6.50008Z"></path>
                      </svg>
                    </div>
                  </div>
                  <div class="swiper product-img-slider">
                    <div class="swiper-wrapper">
                      <div class="swiper-slide">
                        <img class="img-fluid" src="images/product-st-02.png" alt="image">
                      </div>
                      <div class="swiper-slide">
                        <img class="img-fluid" src="images/product-st-02.png" alt="image">
                      </div>
                      <div class="swiper-slide">
                        <img class="img-fluid" src="images/product-st-02.png" alt="image">
                      </div>
                    </div>
                  </div>
                </div>
                <div class="product-content">
                  <div class="location">
                    <a href="#"><i class="bi bi-geo-alt"></i> Panama City</a>
                  </div>
                  <h6><a href="car-deatils.html">Volkswagen Golf-2023</a></h6>
                  <ul class="features">
                    <li>
                      <img src="images/menual.svg" alt="">
                      Automatic
                    </li>
                    <li>
                      <img src="images/fuel.svg" alt="">
                      Petrol
                    </li>
                    <li>
                      <img src="images/electric.svg" alt="">
                      Electric
                    </li>
                  </ul>
                  <div class="content-btm">
                    <a class="view-btn2" href="car-deatils.html">
                      <svg width="35" height="21" viewBox="0 0 35 21"
                           xmlns="http://www.w3.org/2000/svg">
                        <path d="M11 20C5.47715 20 1 15.7467 1 10.5C1 5.25329 5.47715 1 11 1"
                              stroke-linecap="round"></path>
                        <path
                          d="M14.2597 3C14.1569 3 14.0583 3.04166 13.9856 3.11582C13.9129 3.18997 13.8721 3.29055 13.8721 3.39542C13.8721 3.50029 13.9129 3.60086 13.9856 3.67502C14.0583 3.74917 14.1569 3.79083 14.2597 3.79083H15.8104C15.9132 3.79083 16.0118 3.74917 16.0845 3.67502C16.1572 3.60086 16.198 3.50029 16.198 3.39542C16.198 3.29055 16.1572 3.18997 16.0845 3.11582C16.0118 3.04166 15.9132 3 15.8104 3H14.2597ZM16.7795 3C16.6767 3 16.5781 3.04166 16.5054 3.11582C16.4327 3.18997 16.3919 3.29055 16.3919 3.39542C16.3919 3.50029 16.4327 3.60086 16.5054 3.67502C16.5781 3.74917 16.6767 3.79083 16.7795 3.79083H21.3346C21.4374 3.79083 21.536 3.74917 21.6087 3.67502C21.6814 3.60086 21.7222 3.50029 21.7222 3.39542C21.7222 3.29055 21.6814 3.18997 21.6087 3.11582C21.536 3.04166 21.4374 3 21.3346 3H16.7795Z">
                        </path>
                        <path fill-rule="evenodd" clip-rule="evenodd"
                              d="M15.2292 5.76953C15.1264 5.76953 15.0278 5.81119 14.9551 5.88535C14.8824 5.9595 14.8415 6.06008 14.8415 6.16495C14.8415 6.26982 14.8824 6.3704 14.9551 6.44455C15.0278 6.51871 15.1264 6.56037 15.2292 6.56037H24.1454C25.653 6.56037 26.5822 6.79999 27.3256 7.18493C27.9575 7.51194 28.4672 7.9467 29.1055 8.49119C29.2375 8.60368 29.3749 8.72073 29.5201 8.84271L29.6101 8.91824L29.726 8.93069C33.2653 9.31069 34.0622 10.5309 34.2246 11.1557V12.6893C34.2246 12.7942 34.1838 12.8948 34.1111 12.9689C34.0384 13.0431 33.9398 13.0847 33.8369 13.0847H32.8356C32.6511 11.9627 31.6943 11.1077 30.5418 11.1077C29.3893 11.1077 28.4325 11.9627 28.248 13.0847H21.2058C21.0212 11.9627 20.0645 11.1077 18.912 11.1077C17.7594 11.1077 16.8027 11.9627 16.6182 13.0847H14.7446C14.6418 13.0847 14.5432 13.1264 14.4705 13.2006C14.3978 13.2747 14.3569 13.3753 14.3569 13.4802C14.3569 13.585 14.3978 13.6856 14.4705 13.7598C14.5432 13.8339 14.6418 13.8756 14.7446 13.8756H16.6182C16.8027 14.9976 17.7594 15.8527 18.912 15.8527C20.0645 15.8527 21.0212 14.9976 21.2058 13.8756H28.248C28.4325 14.9976 29.3893 15.8527 30.5418 15.8527C31.6943 15.8527 32.6511 14.9976 32.8356 13.8756H33.8369C34.1454 13.8756 34.4412 13.7506 34.6593 13.5281C34.8774 13.3057 34.9999 13.0039 34.9999 12.6893V11.0626L34.99 11.0187C34.7431 9.92754 33.5791 8.57502 29.9239 8.15706C29.8217 8.07086 29.7215 7.98505 29.6227 7.90063C28.9828 7.35397 28.3942 6.851 27.6766 6.4795C26.7966 6.02418 25.7391 5.76953 24.1454 5.76953H15.2292ZM28.9912 13.4802C28.9912 13.0607 29.1545 12.6584 29.4453 12.3618C29.7361 12.0651 30.1306 11.8985 30.5418 11.8985C30.9531 11.8985 31.3475 12.0651 31.6383 12.3618C31.9291 12.6584 32.0925 13.0607 32.0925 13.4802C32.0925 13.8996 31.9291 14.302 31.6383 14.5986C31.3475 14.8952 30.9531 15.0618 30.5418 15.0618C30.1306 15.0618 29.7361 14.8952 29.4453 14.5986C29.1545 14.302 28.9912 13.8996 28.9912 13.4802ZM18.912 11.8985C18.5007 11.8985 18.1063 12.0651 17.8155 12.3618C17.5247 12.6584 17.3613 13.0607 17.3613 13.4802C17.3613 13.8996 17.5247 14.302 17.8155 14.5986C18.1063 14.8952 18.5007 15.0618 18.912 15.0618C19.3232 15.0618 19.7176 14.8952 20.0084 14.5986C20.2992 14.302 20.4626 13.8996 20.4626 13.4802C20.4626 13.0607 20.2992 12.6584 20.0084 12.3618C19.7176 12.0651 19.3232 11.8985 18.912 11.8985Z">
                        </path>
                        <path
                          d="M11 8.14151C11 8.03664 11.0408 7.93606 11.1135 7.86191C11.1862 7.78775 11.2848 7.74609 11.3877 7.74609H15.7489C15.8517 7.74609 15.9503 7.78775 16.023 7.86191C16.0957 7.93606 16.1365 8.03664 16.1365 8.14151C16.1365 8.24638 16.0957 8.34696 16.023 8.42111C15.9503 8.49527 15.8517 8.53693 15.7489 8.53693H11.3877C11.2848 8.53693 11.1862 8.49527 11.1135 8.42111C11.0408 8.34696 11 8.24638 11 8.14151ZM26.6836 8.65278C26.7563 8.72694 26.7971 8.82749 26.7971 8.93234C26.7971 9.03719 26.7563 9.13775 26.6836 9.2119L26.6532 9.24294C26.2897 9.61367 25.7968 9.82197 25.2828 9.82203H19.1409C19.0381 9.82203 18.9395 9.78037 18.8668 9.70622C18.7941 9.63206 18.7532 9.53149 18.7532 9.42662C18.7532 9.32174 18.7941 9.22117 18.8668 9.14701C18.9395 9.07286 19.0381 9.0312 19.1409 9.0312H25.2826C25.4354 9.03122 25.5866 9.00055 25.7277 8.94095C25.8688 8.88134 25.997 8.79397 26.105 8.68382L26.1355 8.65278C26.2082 8.57866 26.3068 8.53701 26.4096 8.53701C26.5123 8.53701 26.6109 8.57866 26.6836 8.65278ZM19.5286 17.7304C19.5286 17.6255 19.5694 17.5249 19.6421 17.4508C19.7148 17.3766 19.8134 17.335 19.9162 17.335H21.5638C21.6666 17.335 21.7652 17.3766 21.8379 17.4508C21.9106 17.5249 21.9514 17.6255 21.9514 17.7304C21.9514 17.8352 21.9106 17.9358 21.8379 18.01C21.7652 18.0841 21.6666 18.1258 21.5638 18.1258H19.9162C19.8134 18.1258 19.7148 18.0841 19.6421 18.01C19.5694 17.9358 19.5286 17.8352 19.5286 17.7304ZM22.2422 17.7304C22.2422 17.6255 22.283 17.5249 22.3557 17.4508C22.4284 17.3766 22.527 17.335 22.6299 17.335H26.991C27.0939 17.335 27.1925 17.3766 27.2652 17.4508C27.3379 17.5249 27.3787 17.6255 27.3787 17.7304C27.3787 17.8352 27.3379 17.9358 27.2652 18.01C27.1925 18.0841 27.0939 18.1258 26.991 18.1258H22.6299C22.527 18.1258 22.4284 18.0841 22.3557 18.01C22.283 17.9358 22.2422 17.8352 22.2422 17.7304Z">
                        </path>
                      </svg>
                      View Details
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <div class="slide-item">
              <div class="product-st-card1">
                <div class="product-img">
                  <div class="number-of-img">
                    <img src="images/gallery-icon-1.svg" alt="">
                    10
                  </div>
                  <div class="product-price">
                    <span>$7,656.00</span>
                  </div>
                  <a href="#" class="fav">
                    <svg width="14" height="13" viewBox="0 0 14 14"
                         xmlns="http://www.w3.org/2000/svg">
                      <path
                        d="M7.00012 2.40453L6.37273 1.75966C4.90006 0.245917 2.19972 0.76829 1.22495 2.67141C0.767306 3.56653 0.664053 4.8589 1.4997 6.50827C2.30473 8.09639 3.97953 9.99864 7.00012 12.0706C10.0207 9.99864 11.6946 8.09639 12.5005 6.50827C13.3362 4.85803 13.2338 3.56653 12.7753 2.67141C11.8005 0.76829 9.10019 0.245042 7.62752 1.75879L7.00012 2.40453ZM7.00012 13.125C-6.41666 4.25953 2.86912 -2.65995 6.84612 1.00016C6.89862 1.04829 6.95024 1.09816 7.00012 1.14979C7.04949 1.09821 7.10087 1.04859 7.15413 1.00104C11.1302 -2.6617 20.4169 4.25865 7.00012 13.125Z">
                      </path>
                    </svg>
                  </a>
                  <div class="slider-btn-group">
                    <div class="product-stand-next swiper-arrow">
                      <svg width="8" height="13" viewBox="0 0 8 13"
                           xmlns="http://www.w3.org/2000/svg">
                        <path d="M0 6.50008L8 0L2.90909 6.50008L8 13L0 6.50008Z"></path>
                      </svg>
                    </div>
                    <div class="product-stand-prev swiper-arrow">
                      <svg width="8" height="13" viewBox="0 0 8 13"
                           xmlns="http://www.w3.org/2000/svg">
                        <path d="M8 6.50008L0 0L5.09091 6.50008L0 13L8 6.50008Z"></path>
                      </svg>
                    </div>
                  </div>
                  <div class="swiper product-img-slider">
                    <div class="swiper-wrapper">
                      <div class="swiper-slide">
                        <img class="img-fluid" src="images/product-st-03.png" alt="image">
                      </div>
                      <div class="swiper-slide">
                        <img class="img-fluid" src="images/product-st-03.png" alt="image">
                      </div>
                      <div class="swiper-slide">
                        <img class="img-fluid" src="images/product-st-03.png" alt="image">
                      </div>
                      <div class="swiper-slide">
                        <img class="img-fluid" src="images/product-st-03.png" alt="image">
                      </div>
                    </div>
                  </div>
                </div>
                <div class="product-content">
                  <div class="location">
                    <a href="#"><i class="bi bi-geo-alt"></i> Sydne City</a>
                  </div>
                  <h6><a href="car-deatils.html">Audi A4s-2023</a></h6>
                  <ul class="features">
                    <li>
                      <img src="images/menual.svg" alt="">
                      Automatic
                    </li>
                    <li>
                      <img src="images/fuel.svg" alt="">
                      Petrol
                    </li>
                    <li>
                      <img src="images/electric.svg" alt="">
                      Electric
                    </li>
                  </ul>
                  <div class="content-btm">
                    <a class="view-btn2" href="car-deatils.html">
                      <svg width="35" height="21" viewBox="0 0 35 21"
                           xmlns="http://www.w3.org/2000/svg">
                        <path d="M11 20C5.47715 20 1 15.7467 1 10.5C1 5.25329 5.47715 1 11 1"
                              stroke-linecap="round"></path>
                        <path
                          d="M14.2597 3C14.1569 3 14.0583 3.04166 13.9856 3.11582C13.9129 3.18997 13.8721 3.29055 13.8721 3.39542C13.8721 3.50029 13.9129 3.60086 13.9856 3.67502C14.0583 3.74917 14.1569 3.79083 14.2597 3.79083H15.8104C15.9132 3.79083 16.0118 3.74917 16.0845 3.67502C16.1572 3.60086 16.198 3.50029 16.198 3.39542C16.198 3.29055 16.1572 3.18997 16.0845 3.11582C16.0118 3.04166 15.9132 3 15.8104 3H14.2597ZM16.7795 3C16.6767 3 16.5781 3.04166 16.5054 3.11582C16.4327 3.18997 16.3919 3.29055 16.3919 3.39542C16.3919 3.50029 16.4327 3.60086 16.5054 3.67502C16.5781 3.74917 16.6767 3.79083 16.7795 3.79083H21.3346C21.4374 3.79083 21.536 3.74917 21.6087 3.67502C21.6814 3.60086 21.7222 3.50029 21.7222 3.39542C21.7222 3.29055 21.6814 3.18997 21.6087 3.11582C21.536 3.04166 21.4374 3 21.3346 3H16.7795Z">
                        </path>
                        <path fill-rule="evenodd" clip-rule="evenodd"
                              d="M15.2292 5.76953C15.1264 5.76953 15.0278 5.81119 14.9551 5.88535C14.8824 5.9595 14.8415 6.06008 14.8415 6.16495C14.8415 6.26982 14.8824 6.3704 14.9551 6.44455C15.0278 6.51871 15.1264 6.56037 15.2292 6.56037H24.1454C25.653 6.56037 26.5822 6.79999 27.3256 7.18493C27.9575 7.51194 28.4672 7.9467 29.1055 8.49119C29.2375 8.60368 29.3749 8.72073 29.5201 8.84271L29.6101 8.91824L29.726 8.93069C33.2653 9.31069 34.0622 10.5309 34.2246 11.1557V12.6893C34.2246 12.7942 34.1838 12.8948 34.1111 12.9689C34.0384 13.0431 33.9398 13.0847 33.8369 13.0847H32.8356C32.6511 11.9627 31.6943 11.1077 30.5418 11.1077C29.3893 11.1077 28.4325 11.9627 28.248 13.0847H21.2058C21.0212 11.9627 20.0645 11.1077 18.912 11.1077C17.7594 11.1077 16.8027 11.9627 16.6182 13.0847H14.7446C14.6418 13.0847 14.5432 13.1264 14.4705 13.2006C14.3978 13.2747 14.3569 13.3753 14.3569 13.4802C14.3569 13.585 14.3978 13.6856 14.4705 13.7598C14.5432 13.8339 14.6418 13.8756 14.7446 13.8756H16.6182C16.8027 14.9976 17.7594 15.8527 18.912 15.8527C20.0645 15.8527 21.0212 14.9976 21.2058 13.8756H28.248C28.4325 14.9976 29.3893 15.8527 30.5418 15.8527C31.6943 15.8527 32.6511 14.9976 32.8356 13.8756H33.8369C34.1454 13.8756 34.4412 13.7506 34.6593 13.5281C34.8774 13.3057 34.9999 13.0039 34.9999 12.6893V11.0626L34.99 11.0187C34.7431 9.92754 33.5791 8.57502 29.9239 8.15706C29.8217 8.07086 29.7215 7.98505 29.6227 7.90063C28.9828 7.35397 28.3942 6.851 27.6766 6.4795C26.7966 6.02418 25.7391 5.76953 24.1454 5.76953H15.2292ZM28.9912 13.4802C28.9912 13.0607 29.1545 12.6584 29.4453 12.3618C29.7361 12.0651 30.1306 11.8985 30.5418 11.8985C30.9531 11.8985 31.3475 12.0651 31.6383 12.3618C31.9291 12.6584 32.0925 13.0607 32.0925 13.4802C32.0925 13.8996 31.9291 14.302 31.6383 14.5986C31.3475 14.8952 30.9531 15.0618 30.5418 15.0618C30.1306 15.0618 29.7361 14.8952 29.4453 14.5986C29.1545 14.302 28.9912 13.8996 28.9912 13.4802ZM18.912 11.8985C18.5007 11.8985 18.1063 12.0651 17.8155 12.3618C17.5247 12.6584 17.3613 13.0607 17.3613 13.4802C17.3613 13.8996 17.5247 14.302 17.8155 14.5986C18.1063 14.8952 18.5007 15.0618 18.912 15.0618C19.3232 15.0618 19.7176 14.8952 20.0084 14.5986C20.2992 14.302 20.4626 13.8996 20.4626 13.4802C20.4626 13.0607 20.2992 12.6584 20.0084 12.3618C19.7176 12.0651 19.3232 11.8985 18.912 11.8985Z">
                        </path>
                        <path
                          d="M11 8.14151C11 8.03664 11.0408 7.93606 11.1135 7.86191C11.1862 7.78775 11.2848 7.74609 11.3877 7.74609H15.7489C15.8517 7.74609 15.9503 7.78775 16.023 7.86191C16.0957 7.93606 16.1365 8.03664 16.1365 8.14151C16.1365 8.24638 16.0957 8.34696 16.023 8.42111C15.9503 8.49527 15.8517 8.53693 15.7489 8.53693H11.3877C11.2848 8.53693 11.1862 8.49527 11.1135 8.42111C11.0408 8.34696 11 8.24638 11 8.14151ZM26.6836 8.65278C26.7563 8.72694 26.7971 8.82749 26.7971 8.93234C26.7971 9.03719 26.7563 9.13775 26.6836 9.2119L26.6532 9.24294C26.2897 9.61367 25.7968 9.82197 25.2828 9.82203H19.1409C19.0381 9.82203 18.9395 9.78037 18.8668 9.70622C18.7941 9.63206 18.7532 9.53149 18.7532 9.42662C18.7532 9.32174 18.7941 9.22117 18.8668 9.14701C18.9395 9.07286 19.0381 9.0312 19.1409 9.0312H25.2826C25.4354 9.03122 25.5866 9.00055 25.7277 8.94095C25.8688 8.88134 25.997 8.79397 26.105 8.68382L26.1355 8.65278C26.2082 8.57866 26.3068 8.53701 26.4096 8.53701C26.5123 8.53701 26.6109 8.57866 26.6836 8.65278ZM19.5286 17.7304C19.5286 17.6255 19.5694 17.5249 19.6421 17.4508C19.7148 17.3766 19.8134 17.335 19.9162 17.335H21.5638C21.6666 17.335 21.7652 17.3766 21.8379 17.4508C21.9106 17.5249 21.9514 17.6255 21.9514 17.7304C21.9514 17.8352 21.9106 17.9358 21.8379 18.01C21.7652 18.0841 21.6666 18.1258 21.5638 18.1258H19.9162C19.8134 18.1258 19.7148 18.0841 19.6421 18.01C19.5694 17.9358 19.5286 17.8352 19.5286 17.7304ZM22.2422 17.7304C22.2422 17.6255 22.283 17.5249 22.3557 17.4508C22.4284 17.3766 22.527 17.335 22.6299 17.335H26.991C27.0939 17.335 27.1925 17.3766 27.2652 17.4508C27.3379 17.5249 27.3787 17.6255 27.3787 17.7304C27.3787 17.8352 27.3379 17.9358 27.2652 18.01C27.1925 18.0841 27.0939 18.1258 26.991 18.1258H22.6299C22.527 18.1258 22.4284 18.0841 22.3557 18.01C22.283 17.9358 22.2422 17.8352 22.2422 17.7304Z">
                        </path>
                      </svg>
                      View Details
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <div class="slide-item">
              <div class="product-st-card1">
                <div class="product-img">
                  <div class="number-of-img">
                    <img src="images/gallery-icon-1.svg" alt="">
                    10
                  </div>
                  <div class="product-price">
                    <span>$7,656.00</span>
                  </div>
                  <a href="#" class="fav">
                    <svg width="14" height="13" viewBox="0 0 14 14"
                         xmlns="http://www.w3.org/2000/svg">
                      <path
                        d="M7.00012 2.40453L6.37273 1.75966C4.90006 0.245917 2.19972 0.76829 1.22495 2.67141C0.767306 3.56653 0.664053 4.8589 1.4997 6.50827C2.30473 8.09639 3.97953 9.99864 7.00012 12.0706C10.0207 9.99864 11.6946 8.09639 12.5005 6.50827C13.3362 4.85803 13.2338 3.56653 12.7753 2.67141C11.8005 0.76829 9.10019 0.245042 7.62752 1.75879L7.00012 2.40453ZM7.00012 13.125C-6.41666 4.25953 2.86912 -2.65995 6.84612 1.00016C6.89862 1.04829 6.95024 1.09816 7.00012 1.14979C7.04949 1.09821 7.10087 1.04859 7.15413 1.00104C11.1302 -2.6617 20.4169 4.25865 7.00012 13.125Z">
                      </path>
                    </svg>
                  </a>
                  <div class="slider-btn-group">
                    <div class="product-stand-next swiper-arrow">
                      <svg width="8" height="13" viewBox="0 0 8 13"
                           xmlns="http://www.w3.org/2000/svg">
                        <path d="M0 6.50008L8 0L2.90909 6.50008L8 13L0 6.50008Z"></path>
                      </svg>
                    </div>
                    <div class="product-stand-prev swiper-arrow">
                      <svg width="8" height="13" viewBox="0 0 8 13"
                           xmlns="http://www.w3.org/2000/svg">
                        <path d="M8 6.50008L0 0L5.09091 6.50008L0 13L8 6.50008Z"></path>
                      </svg>
                    </div>
                  </div>
                  <div class="swiper product-img-slider">
                    <div class="swiper-wrapper">
                      <div class="swiper-slide">
                        <img class="img-fluid" src="images/product-st-04.png" alt="image">
                      </div>
                      <div class="swiper-slide">
                        <img class="img-fluid" src="images/product-st-04.png" alt="image">
                      </div>
                      <div class="swiper-slide">
                        <img class="img-fluid" src="images/product-st-04.png" alt="image">
                      </div>
                      <div class="swiper-slide">
                        <img class="img-fluid" src="images/product-st-04.png" alt="image">
                      </div>
                    </div>
                  </div>
                </div>
                <div class="product-content">
                  <div class="location">
                    <a href="#"><i class="bi bi-geo-alt"></i> New Delhi</a>
                  </div>
                  <h6><a href="car-deatils.html">Mazda MX-5 Miata-2023</a></h6>
                  <ul class="features">
                    <li>
                      <img src="images/menual.svg" alt="">
                      Automatic
                    </li>
                    <li>
                      <img src="images/fuel.svg" alt="">
                      Petrol
                    </li>
                    <li>
                      <img src="images/electric.svg" alt="">
                      Electric
                    </li>
                  </ul>
                  <div class="content-btm">
                    <a class="view-btn2" href="car-deatils.html">
                      <svg width="35" height="21" viewBox="0 0 35 21"
                           xmlns="http://www.w3.org/2000/svg">
                        <path d="M11 20C5.47715 20 1 15.7467 1 10.5C1 5.25329 5.47715 1 11 1"
                              stroke-linecap="round"></path>
                        <path
                          d="M14.2597 3C14.1569 3 14.0583 3.04166 13.9856 3.11582C13.9129 3.18997 13.8721 3.29055 13.8721 3.39542C13.8721 3.50029 13.9129 3.60086 13.9856 3.67502C14.0583 3.74917 14.1569 3.79083 14.2597 3.79083H15.8104C15.9132 3.79083 16.0118 3.74917 16.0845 3.67502C16.1572 3.60086 16.198 3.50029 16.198 3.39542C16.198 3.29055 16.1572 3.18997 16.0845 3.11582C16.0118 3.04166 15.9132 3 15.8104 3H14.2597ZM16.7795 3C16.6767 3 16.5781 3.04166 16.5054 3.11582C16.4327 3.18997 16.3919 3.29055 16.3919 3.39542C16.3919 3.50029 16.4327 3.60086 16.5054 3.67502C16.5781 3.74917 16.6767 3.79083 16.7795 3.79083H21.3346C21.4374 3.79083 21.536 3.74917 21.6087 3.67502C21.6814 3.60086 21.7222 3.50029 21.7222 3.39542C21.7222 3.29055 21.6814 3.18997 21.6087 3.11582C21.536 3.04166 21.4374 3 21.3346 3H16.7795Z">
                        </path>
                        <path fill-rule="evenodd" clip-rule="evenodd"
                              d="M15.2292 5.76953C15.1264 5.76953 15.0278 5.81119 14.9551 5.88535C14.8824 5.9595 14.8415 6.06008 14.8415 6.16495C14.8415 6.26982 14.8824 6.3704 14.9551 6.44455C15.0278 6.51871 15.1264 6.56037 15.2292 6.56037H24.1454C25.653 6.56037 26.5822 6.79999 27.3256 7.18493C27.9575 7.51194 28.4672 7.9467 29.1055 8.49119C29.2375 8.60368 29.3749 8.72073 29.5201 8.84271L29.6101 8.91824L29.726 8.93069C33.2653 9.31069 34.0622 10.5309 34.2246 11.1557V12.6893C34.2246 12.7942 34.1838 12.8948 34.1111 12.9689C34.0384 13.0431 33.9398 13.0847 33.8369 13.0847H32.8356C32.6511 11.9627 31.6943 11.1077 30.5418 11.1077C29.3893 11.1077 28.4325 11.9627 28.248 13.0847H21.2058C21.0212 11.9627 20.0645 11.1077 18.912 11.1077C17.7594 11.1077 16.8027 11.9627 16.6182 13.0847H14.7446C14.6418 13.0847 14.5432 13.1264 14.4705 13.2006C14.3978 13.2747 14.3569 13.3753 14.3569 13.4802C14.3569 13.585 14.3978 13.6856 14.4705 13.7598C14.5432 13.8339 14.6418 13.8756 14.7446 13.8756H16.6182C16.8027 14.9976 17.7594 15.8527 18.912 15.8527C20.0645 15.8527 21.0212 14.9976 21.2058 13.8756H28.248C28.4325 14.9976 29.3893 15.8527 30.5418 15.8527C31.6943 15.8527 32.6511 14.9976 32.8356 13.8756H33.8369C34.1454 13.8756 34.4412 13.7506 34.6593 13.5281C34.8774 13.3057 34.9999 13.0039 34.9999 12.6893V11.0626L34.99 11.0187C34.7431 9.92754 33.5791 8.57502 29.9239 8.15706C29.8217 8.07086 29.7215 7.98505 29.6227 7.90063C28.9828 7.35397 28.3942 6.851 27.6766 6.4795C26.7966 6.02418 25.7391 5.76953 24.1454 5.76953H15.2292ZM28.9912 13.4802C28.9912 13.0607 29.1545 12.6584 29.4453 12.3618C29.7361 12.0651 30.1306 11.8985 30.5418 11.8985C30.9531 11.8985 31.3475 12.0651 31.6383 12.3618C31.9291 12.6584 32.0925 13.0607 32.0925 13.4802C32.0925 13.8996 31.9291 14.302 31.6383 14.5986C31.3475 14.8952 30.9531 15.0618 30.5418 15.0618C30.1306 15.0618 29.7361 14.8952 29.4453 14.5986C29.1545 14.302 28.9912 13.8996 28.9912 13.4802ZM18.912 11.8985C18.5007 11.8985 18.1063 12.0651 17.8155 12.3618C17.5247 12.6584 17.3613 13.0607 17.3613 13.4802C17.3613 13.8996 17.5247 14.302 17.8155 14.5986C18.1063 14.8952 18.5007 15.0618 18.912 15.0618C19.3232 15.0618 19.7176 14.8952 20.0084 14.5986C20.2992 14.302 20.4626 13.8996 20.4626 13.4802C20.4626 13.0607 20.2992 12.6584 20.0084 12.3618C19.7176 12.0651 19.3232 11.8985 18.912 11.8985Z">
                        </path>
                        <path
                          d="M11 8.14151C11 8.03664 11.0408 7.93606 11.1135 7.86191C11.1862 7.78775 11.2848 7.74609 11.3877 7.74609H15.7489C15.8517 7.74609 15.9503 7.78775 16.023 7.86191C16.0957 7.93606 16.1365 8.03664 16.1365 8.14151C16.1365 8.24638 16.0957 8.34696 16.023 8.42111C15.9503 8.49527 15.8517 8.53693 15.7489 8.53693H11.3877C11.2848 8.53693 11.1862 8.49527 11.1135 8.42111C11.0408 8.34696 11 8.24638 11 8.14151ZM26.6836 8.65278C26.7563 8.72694 26.7971 8.82749 26.7971 8.93234C26.7971 9.03719 26.7563 9.13775 26.6836 9.2119L26.6532 9.24294C26.2897 9.61367 25.7968 9.82197 25.2828 9.82203H19.1409C19.0381 9.82203 18.9395 9.78037 18.8668 9.70622C18.7941 9.63206 18.7532 9.53149 18.7532 9.42662C18.7532 9.32174 18.7941 9.22117 18.8668 9.14701C18.9395 9.07286 19.0381 9.0312 19.1409 9.0312H25.2826C25.4354 9.03122 25.5866 9.00055 25.7277 8.94095C25.8688 8.88134 25.997 8.79397 26.105 8.68382L26.1355 8.65278C26.2082 8.57866 26.3068 8.53701 26.4096 8.53701C26.5123 8.53701 26.6109 8.57866 26.6836 8.65278ZM19.5286 17.7304C19.5286 17.6255 19.5694 17.5249 19.6421 17.4508C19.7148 17.3766 19.8134 17.335 19.9162 17.335H21.5638C21.6666 17.335 21.7652 17.3766 21.8379 17.4508C21.9106 17.5249 21.9514 17.6255 21.9514 17.7304C21.9514 17.8352 21.9106 17.9358 21.8379 18.01C21.7652 18.0841 21.6666 18.1258 21.5638 18.1258H19.9162C19.8134 18.1258 19.7148 18.0841 19.6421 18.01C19.5694 17.9358 19.5286 17.8352 19.5286 17.7304ZM22.2422 17.7304C22.2422 17.6255 22.283 17.5249 22.3557 17.4508C22.4284 17.3766 22.527 17.335 22.6299 17.335H26.991C27.0939 17.335 27.1925 17.3766 27.2652 17.4508C27.3379 17.5249 27.3787 17.6255 27.3787 17.7304C27.3787 17.8352 27.3379 17.9358 27.2652 18.01C27.1925 18.0841 27.0939 18.1258 26.991 18.1258H22.6299C22.527 18.1258 22.4284 18.0841 22.3557 18.01C22.283 17.9358 22.2422 17.8352 22.2422 17.7304Z">
                        </path>
                      </svg>
                      View Details
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <div class="slide-item">
              <div class="product-st-card1">
                <div class="product-img">
                  <div class="number-of-img">
                    <img src="images/gallery-icon-1.svg" alt="">
                    10
                  </div>
                  <div class="product-price">
                    <span>$7,656.00</span>
                  </div>
                  <a href="#" class="fav">
                    <svg width="14" height="13" viewBox="0 0 14 14"
                         xmlns="http://www.w3.org/2000/svg">
                      <path
                        d="M7.00012 2.40453L6.37273 1.75966C4.90006 0.245917 2.19972 0.76829 1.22495 2.67141C0.767306 3.56653 0.664053 4.8589 1.4997 6.50827C2.30473 8.09639 3.97953 9.99864 7.00012 12.0706C10.0207 9.99864 11.6946 8.09639 12.5005 6.50827C13.3362 4.85803 13.2338 3.56653 12.7753 2.67141C11.8005 0.76829 9.10019 0.245042 7.62752 1.75879L7.00012 2.40453ZM7.00012 13.125C-6.41666 4.25953 2.86912 -2.65995 6.84612 1.00016C6.89862 1.04829 6.95024 1.09816 7.00012 1.14979C7.04949 1.09821 7.10087 1.04859 7.15413 1.00104C11.1302 -2.6617 20.4169 4.25865 7.00012 13.125Z">
                      </path>
                    </svg>
                  </a>
                  <div class="slider-btn-group">
                    <div class="product-stand-next swiper-arrow">
                      <svg width="8" height="13" viewBox="0 0 8 13"
                           xmlns="http://www.w3.org/2000/svg">
                        <path d="M0 6.50008L8 0L2.90909 6.50008L8 13L0 6.50008Z"></path>
                      </svg>
                    </div>
                    <div class="product-stand-prev swiper-arrow">
                      <svg width="8" height="13" viewBox="0 0 8 13"
                           xmlns="http://www.w3.org/2000/svg">
                        <path d="M8 6.50008L0 0L5.09091 6.50008L0 13L8 6.50008Z"></path>
                      </svg>
                    </div>
                  </div>
                  <div class="swiper product-img-slider">
                    <div class="swiper-wrapper">
                      <div class="swiper-slide">
                        <img class="img-fluid" src="images/product-st-01.png" alt="image">
                      </div>
                    </div>
                  </div>
                </div>
                <div class="product-content">
                  <div class="location">
                    <a href="#"><i class="bi bi-geo-alt"></i> Panama City</a>
                  </div>
                  <h6><a href="car-deatils.html">Mercedes-Benz Class-2023</a></h6>
                  <ul class="features">
                    <li>
                      <img src="images/menual.svg" alt="">
                      Automatic
                    </li>
                    <li>
                      <img src="images/fuel.svg" alt="">
                      Petrol
                    </li>
                    <li>
                      <img src="images/electric.svg" alt="">
                      Electric
                    </li>
                  </ul>
                  <div class="content-btm">
                    <a class="view-btn2" href="car-deatils.html">
                      <svg width="35" height="21" viewBox="0 0 35 21"
                           xmlns="http://www.w3.org/2000/svg">
                        <path d="M11 20C5.47715 20 1 15.7467 1 10.5C1 5.25329 5.47715 1 11 1"
                              stroke-linecap="round"></path>
                        <path
                          d="M14.2597 3C14.1569 3 14.0583 3.04166 13.9856 3.11582C13.9129 3.18997 13.8721 3.29055 13.8721 3.39542C13.8721 3.50029 13.9129 3.60086 13.9856 3.67502C14.0583 3.74917 14.1569 3.79083 14.2597 3.79083H15.8104C15.9132 3.79083 16.0118 3.74917 16.0845 3.67502C16.1572 3.60086 16.198 3.50029 16.198 3.39542C16.198 3.29055 16.1572 3.18997 16.0845 3.11582C16.0118 3.04166 15.9132 3 15.8104 3H14.2597ZM16.7795 3C16.6767 3 16.5781 3.04166 16.5054 3.11582C16.4327 3.18997 16.3919 3.29055 16.3919 3.39542C16.3919 3.50029 16.4327 3.60086 16.5054 3.67502C16.5781 3.74917 16.6767 3.79083 16.7795 3.79083H21.3346C21.4374 3.79083 21.536 3.74917 21.6087 3.67502C21.6814 3.60086 21.7222 3.50029 21.7222 3.39542C21.7222 3.29055 21.6814 3.18997 21.6087 3.11582C21.536 3.04166 21.4374 3 21.3346 3H16.7795Z">
                        </path>
                        <path fill-rule="evenodd" clip-rule="evenodd"
                              d="M15.2292 5.76953C15.1264 5.76953 15.0278 5.81119 14.9551 5.88535C14.8824 5.9595 14.8415 6.06008 14.8415 6.16495C14.8415 6.26982 14.8824 6.3704 14.9551 6.44455C15.0278 6.51871 15.1264 6.56037 15.2292 6.56037H24.1454C25.653 6.56037 26.5822 6.79999 27.3256 7.18493C27.9575 7.51194 28.4672 7.9467 29.1055 8.49119C29.2375 8.60368 29.3749 8.72073 29.5201 8.84271L29.6101 8.91824L29.726 8.93069C33.2653 9.31069 34.0622 10.5309 34.2246 11.1557V12.6893C34.2246 12.7942 34.1838 12.8948 34.1111 12.9689C34.0384 13.0431 33.9398 13.0847 33.8369 13.0847H32.8356C32.6511 11.9627 31.6943 11.1077 30.5418 11.1077C29.3893 11.1077 28.4325 11.9627 28.248 13.0847H21.2058C21.0212 11.9627 20.0645 11.1077 18.912 11.1077C17.7594 11.1077 16.8027 11.9627 16.6182 13.0847H14.7446C14.6418 13.0847 14.5432 13.1264 14.4705 13.2006C14.3978 13.2747 14.3569 13.3753 14.3569 13.4802C14.3569 13.585 14.3978 13.6856 14.4705 13.7598C14.5432 13.8339 14.6418 13.8756 14.7446 13.8756H16.6182C16.8027 14.9976 17.7594 15.8527 18.912 15.8527C20.0645 15.8527 21.0212 14.9976 21.2058 13.8756H28.248C28.4325 14.9976 29.3893 15.8527 30.5418 15.8527C31.6943 15.8527 32.6511 14.9976 32.8356 13.8756H33.8369C34.1454 13.8756 34.4412 13.7506 34.6593 13.5281C34.8774 13.3057 34.9999 13.0039 34.9999 12.6893V11.0626L34.99 11.0187C34.7431 9.92754 33.5791 8.57502 29.9239 8.15706C29.8217 8.07086 29.7215 7.98505 29.6227 7.90063C28.9828 7.35397 28.3942 6.851 27.6766 6.4795C26.7966 6.02418 25.7391 5.76953 24.1454 5.76953H15.2292ZM28.9912 13.4802C28.9912 13.0607 29.1545 12.6584 29.4453 12.3618C29.7361 12.0651 30.1306 11.8985 30.5418 11.8985C30.9531 11.8985 31.3475 12.0651 31.6383 12.3618C31.9291 12.6584 32.0925 13.0607 32.0925 13.4802C32.0925 13.8996 31.9291 14.302 31.6383 14.5986C31.3475 14.8952 30.9531 15.0618 30.5418 15.0618C30.1306 15.0618 29.7361 14.8952 29.4453 14.5986C29.1545 14.302 28.9912 13.8996 28.9912 13.4802ZM18.912 11.8985C18.5007 11.8985 18.1063 12.0651 17.8155 12.3618C17.5247 12.6584 17.3613 13.0607 17.3613 13.4802C17.3613 13.8996 17.5247 14.302 17.8155 14.5986C18.1063 14.8952 18.5007 15.0618 18.912 15.0618C19.3232 15.0618 19.7176 14.8952 20.0084 14.5986C20.2992 14.302 20.4626 13.8996 20.4626 13.4802C20.4626 13.0607 20.2992 12.6584 20.0084 12.3618C19.7176 12.0651 19.3232 11.8985 18.912 11.8985Z">
                        </path>
                        <path
                          d="M11 8.14151C11 8.03664 11.0408 7.93606 11.1135 7.86191C11.1862 7.78775 11.2848 7.74609 11.3877 7.74609H15.7489C15.8517 7.74609 15.9503 7.78775 16.023 7.86191C16.0957 7.93606 16.1365 8.03664 16.1365 8.14151C16.1365 8.24638 16.0957 8.34696 16.023 8.42111C15.9503 8.49527 15.8517 8.53693 15.7489 8.53693H11.3877C11.2848 8.53693 11.1862 8.49527 11.1135 8.42111C11.0408 8.34696 11 8.24638 11 8.14151ZM26.6836 8.65278C26.7563 8.72694 26.7971 8.82749 26.7971 8.93234C26.7971 9.03719 26.7563 9.13775 26.6836 9.2119L26.6532 9.24294C26.2897 9.61367 25.7968 9.82197 25.2828 9.82203H19.1409C19.0381 9.82203 18.9395 9.78037 18.8668 9.70622C18.7941 9.63206 18.7532 9.53149 18.7532 9.42662C18.7532 9.32174 18.7941 9.22117 18.8668 9.14701C18.9395 9.07286 19.0381 9.0312 19.1409 9.0312H25.2826C25.4354 9.03122 25.5866 9.00055 25.7277 8.94095C25.8688 8.88134 25.997 8.79397 26.105 8.68382L26.1355 8.65278C26.2082 8.57866 26.3068 8.53701 26.4096 8.53701C26.5123 8.53701 26.6109 8.57866 26.6836 8.65278ZM19.5286 17.7304C19.5286 17.6255 19.5694 17.5249 19.6421 17.4508C19.7148 17.3766 19.8134 17.335 19.9162 17.335H21.5638C21.6666 17.335 21.7652 17.3766 21.8379 17.4508C21.9106 17.5249 21.9514 17.6255 21.9514 17.7304C21.9514 17.8352 21.9106 17.9358 21.8379 18.01C21.7652 18.0841 21.6666 18.1258 21.5638 18.1258H19.9162C19.8134 18.1258 19.7148 18.0841 19.6421 18.01C19.5694 17.9358 19.5286 17.8352 19.5286 17.7304ZM22.2422 17.7304C22.2422 17.6255 22.283 17.5249 22.3557 17.4508C22.4284 17.3766 22.527 17.335 22.6299 17.335H26.991C27.0939 17.335 27.1925 17.3766 27.2652 17.4508C27.3379 17.5249 27.3787 17.6255 27.3787 17.7304C27.3787 17.8352 27.3379 17.9358 27.2652 18.01C27.1925 18.0841 27.0939 18.1258 26.991 18.1258H22.6299C22.527 18.1258 22.4284 18.0841 22.3557 18.01C22.283 17.9358 22.2422 17.8352 22.2422 17.7304Z">
                        </path>
                      </svg>
                      View Details
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <div class="slide-item">
              <div class="product-st-card1">
                <div class="product-img">
                  <div class="number-of-img">
                    <img src="images/gallery-icon-1.svg" alt="">
                    10
                  </div>
                  <div class="product-price">
                    <span>$7,656.00</span>
                  </div>
                  <a href="#" class="fav">
                    <svg width="14" height="13" viewBox="0 0 14 14"
                         xmlns="http://www.w3.org/2000/svg">
                      <path
                        d="M7.00012 2.40453L6.37273 1.75966C4.90006 0.245917 2.19972 0.76829 1.22495 2.67141C0.767306 3.56653 0.664053 4.8589 1.4997 6.50827C2.30473 8.09639 3.97953 9.99864 7.00012 12.0706C10.0207 9.99864 11.6946 8.09639 12.5005 6.50827C13.3362 4.85803 13.2338 3.56653 12.7753 2.67141C11.8005 0.76829 9.10019 0.245042 7.62752 1.75879L7.00012 2.40453ZM7.00012 13.125C-6.41666 4.25953 2.86912 -2.65995 6.84612 1.00016C6.89862 1.04829 6.95024 1.09816 7.00012 1.14979C7.04949 1.09821 7.10087 1.04859 7.15413 1.00104C11.1302 -2.6617 20.4169 4.25865 7.00012 13.125Z">
                      </path>
                    </svg>
                  </a>
                  <div class="slider-btn-group">
                    <div class="product-stand-next swiper-arrow">
                      <svg width="8" height="13" viewBox="0 0 8 13"
                           xmlns="http://www.w3.org/2000/svg">
                        <path d="M0 6.50008L8 0L2.90909 6.50008L8 13L0 6.50008Z"></path>
                      </svg>
                    </div>
                    <div class="product-stand-prev swiper-arrow">
                      <svg width="8" height="13" viewBox="0 0 8 13"
                           xmlns="http://www.w3.org/2000/svg">
                        <path d="M8 6.50008L0 0L5.09091 6.50008L0 13L8 6.50008Z"></path>
                      </svg>
                    </div>
                  </div>
                  <div class="swiper product-img-slider">
                    <div class="swiper-wrapper">
                      <div class="swiper-slide">
                        <img class="img-fluid" src="images/product-st-02.png" alt="image">
                      </div>
                      <div class="swiper-slide">
                        <img class="img-fluid" src="images/product-st-02.png" alt="image">
                      </div>
                      <div class="swiper-slide">
                        <img class="img-fluid" src="images/product-st-02.png" alt="image">
                      </div>
                    </div>
                  </div>
                </div>
                <div class="product-content">
                  <div class="location">
                    <a href="#"><i class="bi bi-geo-alt"></i> Panama City</a>
                  </div>
                  <h6><a href="car-deatils.html">Volkswagen Golf-2023</a></h6>
                  <ul class="features">
                    <li>
                      <img src="images/menual.svg" alt="">
                      Automatic
                    </li>
                    <li>
                      <img src="images/fuel.svg" alt="">
                      Petrol
                    </li>
                    <li>
                      <img src="images/electric.svg" alt="">
                      Electric
                    </li>
                  </ul>
                  <div class="content-btm">
                    <a class="view-btn2" href="car-deatils.html">
                      <svg width="35" height="21" viewBox="0 0 35 21"
                           xmlns="http://www.w3.org/2000/svg">
                        <path d="M11 20C5.47715 20 1 15.7467 1 10.5C1 5.25329 5.47715 1 11 1"
                              stroke-linecap="round"></path>
                        <path
                          d="M14.2597 3C14.1569 3 14.0583 3.04166 13.9856 3.11582C13.9129 3.18997 13.8721 3.29055 13.8721 3.39542C13.8721 3.50029 13.9129 3.60086 13.9856 3.67502C14.0583 3.74917 14.1569 3.79083 14.2597 3.79083H15.8104C15.9132 3.79083 16.0118 3.74917 16.0845 3.67502C16.1572 3.60086 16.198 3.50029 16.198 3.39542C16.198 3.29055 16.1572 3.18997 16.0845 3.11582C16.0118 3.04166 15.9132 3 15.8104 3H14.2597ZM16.7795 3C16.6767 3 16.5781 3.04166 16.5054 3.11582C16.4327 3.18997 16.3919 3.29055 16.3919 3.39542C16.3919 3.50029 16.4327 3.60086 16.5054 3.67502C16.5781 3.74917 16.6767 3.79083 16.7795 3.79083H21.3346C21.4374 3.79083 21.536 3.74917 21.6087 3.67502C21.6814 3.60086 21.7222 3.50029 21.7222 3.39542C21.7222 3.29055 21.6814 3.18997 21.6087 3.11582C21.536 3.04166 21.4374 3 21.3346 3H16.7795Z">
                        </path>
                        <path fill-rule="evenodd" clip-rule="evenodd"
                              d="M15.2292 5.76953C15.1264 5.76953 15.0278 5.81119 14.9551 5.88535C14.8824 5.9595 14.8415 6.06008 14.8415 6.16495C14.8415 6.26982 14.8824 6.3704 14.9551 6.44455C15.0278 6.51871 15.1264 6.56037 15.2292 6.56037H24.1454C25.653 6.56037 26.5822 6.79999 27.3256 7.18493C27.9575 7.51194 28.4672 7.9467 29.1055 8.49119C29.2375 8.60368 29.3749 8.72073 29.5201 8.84271L29.6101 8.91824L29.726 8.93069C33.2653 9.31069 34.0622 10.5309 34.2246 11.1557V12.6893C34.2246 12.7942 34.1838 12.8948 34.1111 12.9689C34.0384 13.0431 33.9398 13.0847 33.8369 13.0847H32.8356C32.6511 11.9627 31.6943 11.1077 30.5418 11.1077C29.3893 11.1077 28.4325 11.9627 28.248 13.0847H21.2058C21.0212 11.9627 20.0645 11.1077 18.912 11.1077C17.7594 11.1077 16.8027 11.9627 16.6182 13.0847H14.7446C14.6418 13.0847 14.5432 13.1264 14.4705 13.2006C14.3978 13.2747 14.3569 13.3753 14.3569 13.4802C14.3569 13.585 14.3978 13.6856 14.4705 13.7598C14.5432 13.8339 14.6418 13.8756 14.7446 13.8756H16.6182C16.8027 14.9976 17.7594 15.8527 18.912 15.8527C20.0645 15.8527 21.0212 14.9976 21.2058 13.8756H28.248C28.4325 14.9976 29.3893 15.8527 30.5418 15.8527C31.6943 15.8527 32.6511 14.9976 32.8356 13.8756H33.8369C34.1454 13.8756 34.4412 13.7506 34.6593 13.5281C34.8774 13.3057 34.9999 13.0039 34.9999 12.6893V11.0626L34.99 11.0187C34.7431 9.92754 33.5791 8.57502 29.9239 8.15706C29.8217 8.07086 29.7215 7.98505 29.6227 7.90063C28.9828 7.35397 28.3942 6.851 27.6766 6.4795C26.7966 6.02418 25.7391 5.76953 24.1454 5.76953H15.2292ZM28.9912 13.4802C28.9912 13.0607 29.1545 12.6584 29.4453 12.3618C29.7361 12.0651 30.1306 11.8985 30.5418 11.8985C30.9531 11.8985 31.3475 12.0651 31.6383 12.3618C31.9291 12.6584 32.0925 13.0607 32.0925 13.4802C32.0925 13.8996 31.9291 14.302 31.6383 14.5986C31.3475 14.8952 30.9531 15.0618 30.5418 15.0618C30.1306 15.0618 29.7361 14.8952 29.4453 14.5986C29.1545 14.302 28.9912 13.8996 28.9912 13.4802ZM18.912 11.8985C18.5007 11.8985 18.1063 12.0651 17.8155 12.3618C17.5247 12.6584 17.3613 13.0607 17.3613 13.4802C17.3613 13.8996 17.5247 14.302 17.8155 14.5986C18.1063 14.8952 18.5007 15.0618 18.912 15.0618C19.3232 15.0618 19.7176 14.8952 20.0084 14.5986C20.2992 14.302 20.4626 13.8996 20.4626 13.4802C20.4626 13.0607 20.2992 12.6584 20.0084 12.3618C19.7176 12.0651 19.3232 11.8985 18.912 11.8985Z">
                        </path>
                        <path
                          d="M11 8.14151C11 8.03664 11.0408 7.93606 11.1135 7.86191C11.1862 7.78775 11.2848 7.74609 11.3877 7.74609H15.7489C15.8517 7.74609 15.9503 7.78775 16.023 7.86191C16.0957 7.93606 16.1365 8.03664 16.1365 8.14151C16.1365 8.24638 16.0957 8.34696 16.023 8.42111C15.9503 8.49527 15.8517 8.53693 15.7489 8.53693H11.3877C11.2848 8.53693 11.1862 8.49527 11.1135 8.42111C11.0408 8.34696 11 8.24638 11 8.14151ZM26.6836 8.65278C26.7563 8.72694 26.7971 8.82749 26.7971 8.93234C26.7971 9.03719 26.7563 9.13775 26.6836 9.2119L26.6532 9.24294C26.2897 9.61367 25.7968 9.82197 25.2828 9.82203H19.1409C19.0381 9.82203 18.9395 9.78037 18.8668 9.70622C18.7941 9.63206 18.7532 9.53149 18.7532 9.42662C18.7532 9.32174 18.7941 9.22117 18.8668 9.14701C18.9395 9.07286 19.0381 9.0312 19.1409 9.0312H25.2826C25.4354 9.03122 25.5866 9.00055 25.7277 8.94095C25.8688 8.88134 25.997 8.79397 26.105 8.68382L26.1355 8.65278C26.2082 8.57866 26.3068 8.53701 26.4096 8.53701C26.5123 8.53701 26.6109 8.57866 26.6836 8.65278ZM19.5286 17.7304C19.5286 17.6255 19.5694 17.5249 19.6421 17.4508C19.7148 17.3766 19.8134 17.335 19.9162 17.335H21.5638C21.6666 17.335 21.7652 17.3766 21.8379 17.4508C21.9106 17.5249 21.9514 17.6255 21.9514 17.7304C21.9514 17.8352 21.9106 17.9358 21.8379 18.01C21.7652 18.0841 21.6666 18.1258 21.5638 18.1258H19.9162C19.8134 18.1258 19.7148 18.0841 19.6421 18.01C19.5694 17.9358 19.5286 17.8352 19.5286 17.7304ZM22.2422 17.7304C22.2422 17.6255 22.283 17.5249 22.3557 17.4508C22.4284 17.3766 22.527 17.335 22.6299 17.335H26.991C27.0939 17.335 27.1925 17.3766 27.2652 17.4508C27.3379 17.5249 27.3787 17.6255 27.3787 17.7304C27.3787 17.8352 27.3379 17.9358 27.2652 18.01C27.1925 18.0841 27.0939 18.1258 26.991 18.1258H22.6299C22.527 18.1258 22.4284 18.0841 22.3557 18.01C22.283 17.9358 22.2422 17.8352 22.2422 17.7304Z">
                        </path>
                      </svg>
                      View Details
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <div class="slide-item">
              <div class="product-st-card1">
                <div class="product-img">
                  <div class="number-of-img">
                    <img src="images/gallery-icon-1.svg" alt="">
                    10
                  </div>
                  <div class="product-price">
                    <span>$7,656.00</span>
                  </div>
                  <a href="#" class="fav">
                    <svg width="14" height="13" viewBox="0 0 14 14"
                         xmlns="http://www.w3.org/2000/svg">
                      <path
                        d="M7.00012 2.40453L6.37273 1.75966C4.90006 0.245917 2.19972 0.76829 1.22495 2.67141C0.767306 3.56653 0.664053 4.8589 1.4997 6.50827C2.30473 8.09639 3.97953 9.99864 7.00012 12.0706C10.0207 9.99864 11.6946 8.09639 12.5005 6.50827C13.3362 4.85803 13.2338 3.56653 12.7753 2.67141C11.8005 0.76829 9.10019 0.245042 7.62752 1.75879L7.00012 2.40453ZM7.00012 13.125C-6.41666 4.25953 2.86912 -2.65995 6.84612 1.00016C6.89862 1.04829 6.95024 1.09816 7.00012 1.14979C7.04949 1.09821 7.10087 1.04859 7.15413 1.00104C11.1302 -2.6617 20.4169 4.25865 7.00012 13.125Z">
                      </path>
                    </svg>
                  </a>
                  <div class="slider-btn-group">
                    <div class="product-stand-next swiper-arrow">
                      <svg width="8" height="13" viewBox="0 0 8 13"
                           xmlns="http://www.w3.org/2000/svg">
                        <path d="M0 6.50008L8 0L2.90909 6.50008L8 13L0 6.50008Z"></path>
                      </svg>
                    </div>
                    <div class="product-stand-prev swiper-arrow">
                      <svg width="8" height="13" viewBox="0 0 8 13"
                           xmlns="http://www.w3.org/2000/svg">
                        <path d="M8 6.50008L0 0L5.09091 6.50008L0 13L8 6.50008Z"></path>
                      </svg>
                    </div>
                  </div>
                  <div class="swiper product-img-slider">
                    <div class="swiper-wrapper">
                      <div class="swiper-slide">
                        <img class="img-fluid" src="images/product-st-03.png" alt="image">
                      </div>
                      <div class="swiper-slide">
                        <img class="img-fluid" src="images/product-st-03.png" alt="image">
                      </div>
                      <div class="swiper-slide">
                        <img class="img-fluid" src="images/product-st-03.png" alt="image">
                      </div>
                      <div class="swiper-slide">
                        <img class="img-fluid" src="images/product-st-03.png" alt="image">
                      </div>
                    </div>
                  </div>
                </div>
                <div class="product-content">
                  <div class="location">
                    <a href="#"><i class="bi bi-geo-alt"></i> Sydne City</a>
                  </div>
                  <h6><a href="car-deatils.html">Audi A4s-2023</a></h6>
                  <ul class="features">
                    <li>
                      <img src="images/menual.svg" alt="">
                      Automatic
                    </li>
                    <li>
                      <img src="images/fuel.svg" alt="">
                      Petrol
                    </li>
                    <li>
                      <img src="images/electric.svg" alt="">
                      Electric
                    </li>
                  </ul>
                  <div class="content-btm">
                    <a class="view-btn2" href="car-deatils.html">
                      <svg width="35" height="21" viewBox="0 0 35 21"
                           xmlns="http://www.w3.org/2000/svg">
                        <path d="M11 20C5.47715 20 1 15.7467 1 10.5C1 5.25329 5.47715 1 11 1"
                              stroke-linecap="round"></path>
                        <path
                          d="M14.2597 3C14.1569 3 14.0583 3.04166 13.9856 3.11582C13.9129 3.18997 13.8721 3.29055 13.8721 3.39542C13.8721 3.50029 13.9129 3.60086 13.9856 3.67502C14.0583 3.74917 14.1569 3.79083 14.2597 3.79083H15.8104C15.9132 3.79083 16.0118 3.74917 16.0845 3.67502C16.1572 3.60086 16.198 3.50029 16.198 3.39542C16.198 3.29055 16.1572 3.18997 16.0845 3.11582C16.0118 3.04166 15.9132 3 15.8104 3H14.2597ZM16.7795 3C16.6767 3 16.5781 3.04166 16.5054 3.11582C16.4327 3.18997 16.3919 3.29055 16.3919 3.39542C16.3919 3.50029 16.4327 3.60086 16.5054 3.67502C16.5781 3.74917 16.6767 3.79083 16.7795 3.79083H21.3346C21.4374 3.79083 21.536 3.74917 21.6087 3.67502C21.6814 3.60086 21.7222 3.50029 21.7222 3.39542C21.7222 3.29055 21.6814 3.18997 21.6087 3.11582C21.536 3.04166 21.4374 3 21.3346 3H16.7795Z">
                        </path>
                        <path fill-rule="evenodd" clip-rule="evenodd"
                              d="M15.2292 5.76953C15.1264 5.76953 15.0278 5.81119 14.9551 5.88535C14.8824 5.9595 14.8415 6.06008 14.8415 6.16495C14.8415 6.26982 14.8824 6.3704 14.9551 6.44455C15.0278 6.51871 15.1264 6.56037 15.2292 6.56037H24.1454C25.653 6.56037 26.5822 6.79999 27.3256 7.18493C27.9575 7.51194 28.4672 7.9467 29.1055 8.49119C29.2375 8.60368 29.3749 8.72073 29.5201 8.84271L29.6101 8.91824L29.726 8.93069C33.2653 9.31069 34.0622 10.5309 34.2246 11.1557V12.6893C34.2246 12.7942 34.1838 12.8948 34.1111 12.9689C34.0384 13.0431 33.9398 13.0847 33.8369 13.0847H32.8356C32.6511 11.9627 31.6943 11.1077 30.5418 11.1077C29.3893 11.1077 28.4325 11.9627 28.248 13.0847H21.2058C21.0212 11.9627 20.0645 11.1077 18.912 11.1077C17.7594 11.1077 16.8027 11.9627 16.6182 13.0847H14.7446C14.6418 13.0847 14.5432 13.1264 14.4705 13.2006C14.3978 13.2747 14.3569 13.3753 14.3569 13.4802C14.3569 13.585 14.3978 13.6856 14.4705 13.7598C14.5432 13.8339 14.6418 13.8756 14.7446 13.8756H16.6182C16.8027 14.9976 17.7594 15.8527 18.912 15.8527C20.0645 15.8527 21.0212 14.9976 21.2058 13.8756H28.248C28.4325 14.9976 29.3893 15.8527 30.5418 15.8527C31.6943 15.8527 32.6511 14.9976 32.8356 13.8756H33.8369C34.1454 13.8756 34.4412 13.7506 34.6593 13.5281C34.8774 13.3057 34.9999 13.0039 34.9999 12.6893V11.0626L34.99 11.0187C34.7431 9.92754 33.5791 8.57502 29.9239 8.15706C29.8217 8.07086 29.7215 7.98505 29.6227 7.90063C28.9828 7.35397 28.3942 6.851 27.6766 6.4795C26.7966 6.02418 25.7391 5.76953 24.1454 5.76953H15.2292ZM28.9912 13.4802C28.9912 13.0607 29.1545 12.6584 29.4453 12.3618C29.7361 12.0651 30.1306 11.8985 30.5418 11.8985C30.9531 11.8985 31.3475 12.0651 31.6383 12.3618C31.9291 12.6584 32.0925 13.0607 32.0925 13.4802C32.0925 13.8996 31.9291 14.302 31.6383 14.5986C31.3475 14.8952 30.9531 15.0618 30.5418 15.0618C30.1306 15.0618 29.7361 14.8952 29.4453 14.5986C29.1545 14.302 28.9912 13.8996 28.9912 13.4802ZM18.912 11.8985C18.5007 11.8985 18.1063 12.0651 17.8155 12.3618C17.5247 12.6584 17.3613 13.0607 17.3613 13.4802C17.3613 13.8996 17.5247 14.302 17.8155 14.5986C18.1063 14.8952 18.5007 15.0618 18.912 15.0618C19.3232 15.0618 19.7176 14.8952 20.0084 14.5986C20.2992 14.302 20.4626 13.8996 20.4626 13.4802C20.4626 13.0607 20.2992 12.6584 20.0084 12.3618C19.7176 12.0651 19.3232 11.8985 18.912 11.8985Z">
                        </path>
                        <path
                          d="M11 8.14151C11 8.03664 11.0408 7.93606 11.1135 7.86191C11.1862 7.78775 11.2848 7.74609 11.3877 7.74609H15.7489C15.8517 7.74609 15.9503 7.78775 16.023 7.86191C16.0957 7.93606 16.1365 8.03664 16.1365 8.14151C16.1365 8.24638 16.0957 8.34696 16.023 8.42111C15.9503 8.49527 15.8517 8.53693 15.7489 8.53693H11.3877C11.2848 8.53693 11.1862 8.49527 11.1135 8.42111C11.0408 8.34696 11 8.24638 11 8.14151ZM26.6836 8.65278C26.7563 8.72694 26.7971 8.82749 26.7971 8.93234C26.7971 9.03719 26.7563 9.13775 26.6836 9.2119L26.6532 9.24294C26.2897 9.61367 25.7968 9.82197 25.2828 9.82203H19.1409C19.0381 9.82203 18.9395 9.78037 18.8668 9.70622C18.7941 9.63206 18.7532 9.53149 18.7532 9.42662C18.7532 9.32174 18.7941 9.22117 18.8668 9.14701C18.9395 9.07286 19.0381 9.0312 19.1409 9.0312H25.2826C25.4354 9.03122 25.5866 9.00055 25.7277 8.94095C25.8688 8.88134 25.997 8.79397 26.105 8.68382L26.1355 8.65278C26.2082 8.57866 26.3068 8.53701 26.4096 8.53701C26.5123 8.53701 26.6109 8.57866 26.6836 8.65278ZM19.5286 17.7304C19.5286 17.6255 19.5694 17.5249 19.6421 17.4508C19.7148 17.3766 19.8134 17.335 19.9162 17.335H21.5638C21.6666 17.335 21.7652 17.3766 21.8379 17.4508C21.9106 17.5249 21.9514 17.6255 21.9514 17.7304C21.9514 17.8352 21.9106 17.9358 21.8379 18.01C21.7652 18.0841 21.6666 18.1258 21.5638 18.1258H19.9162C19.8134 18.1258 19.7148 18.0841 19.6421 18.01C19.5694 17.9358 19.5286 17.8352 19.5286 17.7304ZM22.2422 17.7304C22.2422 17.6255 22.283 17.5249 22.3557 17.4508C22.4284 17.3766 22.527 17.335 22.6299 17.335H26.991C27.0939 17.335 27.1925 17.3766 27.2652 17.4508C27.3379 17.5249 27.3787 17.6255 27.3787 17.7304C27.3787 17.8352 27.3379 17.9358 27.2652 18.01C27.1925 18.0841 27.0939 18.1258 26.991 18.1258H22.6299C22.527 18.1258 22.4284 18.0841 22.3557 18.01C22.283 17.9358 22.2422 17.8352 22.2422 17.7304Z">
                        </path>
                      </svg>
                      View Details
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <div class="slide-item">
              <div class="product-st-card1">
                <div class="product-img">
                  <div class="number-of-img">
                    <img src="images/gallery-icon-1.svg" alt="">
                    10
                  </div>
                  <div class="product-price">
                    <span>$7,656.00</span>
                  </div>
                  <a href="#" class="fav">
                    <svg width="14" height="13" viewBox="0 0 14 14"
                         xmlns="http://www.w3.org/2000/svg">
                      <path
                        d="M7.00012 2.40453L6.37273 1.75966C4.90006 0.245917 2.19972 0.76829 1.22495 2.67141C0.767306 3.56653 0.664053 4.8589 1.4997 6.50827C2.30473 8.09639 3.97953 9.99864 7.00012 12.0706C10.0207 9.99864 11.6946 8.09639 12.5005 6.50827C13.3362 4.85803 13.2338 3.56653 12.7753 2.67141C11.8005 0.76829 9.10019 0.245042 7.62752 1.75879L7.00012 2.40453ZM7.00012 13.125C-6.41666 4.25953 2.86912 -2.65995 6.84612 1.00016C6.89862 1.04829 6.95024 1.09816 7.00012 1.14979C7.04949 1.09821 7.10087 1.04859 7.15413 1.00104C11.1302 -2.6617 20.4169 4.25865 7.00012 13.125Z">
                      </path>
                    </svg>
                  </a>
                  <div class="slider-btn-group">
                    <div class="product-stand-next swiper-arrow">
                      <svg width="8" height="13" viewBox="0 0 8 13"
                           xmlns="http://www.w3.org/2000/svg">
                        <path d="M0 6.50008L8 0L2.90909 6.50008L8 13L0 6.50008Z"></path>
                      </svg>
                    </div>
                    <div class="product-stand-prev swiper-arrow">
                      <svg width="8" height="13" viewBox="0 0 8 13"
                           xmlns="http://www.w3.org/2000/svg">
                        <path d="M8 6.50008L0 0L5.09091 6.50008L0 13L8 6.50008Z"></path>
                      </svg>
                    </div>
                  </div>
                  <div class="swiper product-img-slider">
                    <div class="swiper-wrapper">
                      <div class="swiper-slide">
                        <img class="img-fluid" src="images/product-st-04.png" alt="image">
                      </div>
                      <div class="swiper-slide">
                        <img class="img-fluid" src="images/product-st-04.png" alt="image">
                      </div>
                      <div class="swiper-slide">
                        <img class="img-fluid" src="images/product-st-04.png" alt="image">
                      </div>
                      <div class="swiper-slide">
                        <img class="img-fluid" src="images/product-st-04.png" alt="image">
                      </div>
                    </div>
                  </div>
                </div>
                <div class="product-content">
                  <div class="location">
                    <a href="#"><i class="bi bi-geo-alt"></i> New Delhi</a>
                  </div>
                  <h6><a href="car-deatils.html">Mazda MX-5 Miata-2023</a></h6>
                  <ul class="features">
                    <li>
                      <img src="images/menual.svg" alt="">
                      Automatic
                    </li>
                    <li>
                      <img src="images/fuel.svg" alt="">
                      Petrol
                    </li>
                    <li>
                      <img src="images/electric.svg" alt="">
                      Electric
                    </li>
                  </ul>
                  <div class="content-btm">
                    <a class="view-btn2" href="car-deatils.html">
                      <svg width="35" height="21" viewBox="0 0 35 21"
                           xmlns="http://www.w3.org/2000/svg">
                        <path d="M11 20C5.47715 20 1 15.7467 1 10.5C1 5.25329 5.47715 1 11 1"
                              stroke-linecap="round"></path>
                        <path
                          d="M14.2597 3C14.1569 3 14.0583 3.04166 13.9856 3.11582C13.9129 3.18997 13.8721 3.29055 13.8721 3.39542C13.8721 3.50029 13.9129 3.60086 13.9856 3.67502C14.0583 3.74917 14.1569 3.79083 14.2597 3.79083H15.8104C15.9132 3.79083 16.0118 3.74917 16.0845 3.67502C16.1572 3.60086 16.198 3.50029 16.198 3.39542C16.198 3.29055 16.1572 3.18997 16.0845 3.11582C16.0118 3.04166 15.9132 3 15.8104 3H14.2597ZM16.7795 3C16.6767 3 16.5781 3.04166 16.5054 3.11582C16.4327 3.18997 16.3919 3.29055 16.3919 3.39542C16.3919 3.50029 16.4327 3.60086 16.5054 3.67502C16.5781 3.74917 16.6767 3.79083 16.7795 3.79083H21.3346C21.4374 3.79083 21.536 3.74917 21.6087 3.67502C21.6814 3.60086 21.7222 3.50029 21.7222 3.39542C21.7222 3.29055 21.6814 3.18997 21.6087 3.11582C21.536 3.04166 21.4374 3 21.3346 3H16.7795Z">
                        </path>
                        <path fill-rule="evenodd" clip-rule="evenodd"
                              d="M15.2292 5.76953C15.1264 5.76953 15.0278 5.81119 14.9551 5.88535C14.8824 5.9595 14.8415 6.06008 14.8415 6.16495C14.8415 6.26982 14.8824 6.3704 14.9551 6.44455C15.0278 6.51871 15.1264 6.56037 15.2292 6.56037H24.1454C25.653 6.56037 26.5822 6.79999 27.3256 7.18493C27.9575 7.51194 28.4672 7.9467 29.1055 8.49119C29.2375 8.60368 29.3749 8.72073 29.5201 8.84271L29.6101 8.91824L29.726 8.93069C33.2653 9.31069 34.0622 10.5309 34.2246 11.1557V12.6893C34.2246 12.7942 34.1838 12.8948 34.1111 12.9689C34.0384 13.0431 33.9398 13.0847 33.8369 13.0847H32.8356C32.6511 11.9627 31.6943 11.1077 30.5418 11.1077C29.3893 11.1077 28.4325 11.9627 28.248 13.0847H21.2058C21.0212 11.9627 20.0645 11.1077 18.912 11.1077C17.7594 11.1077 16.8027 11.9627 16.6182 13.0847H14.7446C14.6418 13.0847 14.5432 13.1264 14.4705 13.2006C14.3978 13.2747 14.3569 13.3753 14.3569 13.4802C14.3569 13.585 14.3978 13.6856 14.4705 13.7598C14.5432 13.8339 14.6418 13.8756 14.7446 13.8756H16.6182C16.8027 14.9976 17.7594 15.8527 18.912 15.8527C20.0645 15.8527 21.0212 14.9976 21.2058 13.8756H28.248C28.4325 14.9976 29.3893 15.8527 30.5418 15.8527C31.6943 15.8527 32.6511 14.9976 32.8356 13.8756H33.8369C34.1454 13.8756 34.4412 13.7506 34.6593 13.5281C34.8774 13.3057 34.9999 13.0039 34.9999 12.6893V11.0626L34.99 11.0187C34.7431 9.92754 33.5791 8.57502 29.9239 8.15706C29.8217 8.07086 29.7215 7.98505 29.6227 7.90063C28.9828 7.35397 28.3942 6.851 27.6766 6.4795C26.7966 6.02418 25.7391 5.76953 24.1454 5.76953H15.2292ZM28.9912 13.4802C28.9912 13.0607 29.1545 12.6584 29.4453 12.3618C29.7361 12.0651 30.1306 11.8985 30.5418 11.8985C30.9531 11.8985 31.3475 12.0651 31.6383 12.3618C31.9291 12.6584 32.0925 13.0607 32.0925 13.4802C32.0925 13.8996 31.9291 14.302 31.6383 14.5986C31.3475 14.8952 30.9531 15.0618 30.5418 15.0618C30.1306 15.0618 29.7361 14.8952 29.4453 14.5986C29.1545 14.302 28.9912 13.8996 28.9912 13.4802ZM18.912 11.8985C18.5007 11.8985 18.1063 12.0651 17.8155 12.3618C17.5247 12.6584 17.3613 13.0607 17.3613 13.4802C17.3613 13.8996 17.5247 14.302 17.8155 14.5986C18.1063 14.8952 18.5007 15.0618 18.912 15.0618C19.3232 15.0618 19.7176 14.8952 20.0084 14.5986C20.2992 14.302 20.4626 13.8996 20.4626 13.4802C20.4626 13.0607 20.2992 12.6584 20.0084 12.3618C19.7176 12.0651 19.3232 11.8985 18.912 11.8985Z">
                        </path>
                        <path
                          d="M11 8.14151C11 8.03664 11.0408 7.93606 11.1135 7.86191C11.1862 7.78775 11.2848 7.74609 11.3877 7.74609H15.7489C15.8517 7.74609 15.9503 7.78775 16.023 7.86191C16.0957 7.93606 16.1365 8.03664 16.1365 8.14151C16.1365 8.24638 16.0957 8.34696 16.023 8.42111C15.9503 8.49527 15.8517 8.53693 15.7489 8.53693H11.3877C11.2848 8.53693 11.1862 8.49527 11.1135 8.42111C11.0408 8.34696 11 8.24638 11 8.14151ZM26.6836 8.65278C26.7563 8.72694 26.7971 8.82749 26.7971 8.93234C26.7971 9.03719 26.7563 9.13775 26.6836 9.2119L26.6532 9.24294C26.2897 9.61367 25.7968 9.82197 25.2828 9.82203H19.1409C19.0381 9.82203 18.9395 9.78037 18.8668 9.70622C18.7941 9.63206 18.7532 9.53149 18.7532 9.42662C18.7532 9.32174 18.7941 9.22117 18.8668 9.14701C18.9395 9.07286 19.0381 9.0312 19.1409 9.0312H25.2826C25.4354 9.03122 25.5866 9.00055 25.7277 8.94095C25.8688 8.88134 25.997 8.79397 26.105 8.68382L26.1355 8.65278C26.2082 8.57866 26.3068 8.53701 26.4096 8.53701C26.5123 8.53701 26.6109 8.57866 26.6836 8.65278ZM19.5286 17.7304C19.5286 17.6255 19.5694 17.5249 19.6421 17.4508C19.7148 17.3766 19.8134 17.335 19.9162 17.335H21.5638C21.6666 17.335 21.7652 17.3766 21.8379 17.4508C21.9106 17.5249 21.9514 17.6255 21.9514 17.7304C21.9514 17.8352 21.9106 17.9358 21.8379 18.01C21.7652 18.0841 21.6666 18.1258 21.5638 18.1258H19.9162C19.8134 18.1258 19.7148 18.0841 19.6421 18.01C19.5694 17.9358 19.5286 17.8352 19.5286 17.7304ZM22.2422 17.7304C22.2422 17.6255 22.283 17.5249 22.3557 17.4508C22.4284 17.3766 22.527 17.335 22.6299 17.335H26.991C27.0939 17.335 27.1925 17.3766 27.2652 17.4508C27.3379 17.5249 27.3787 17.6255 27.3787 17.7304C27.3787 17.8352 27.3379 17.9358 27.2652 18.01C27.1925 18.0841 27.0939 18.1258 26.991 18.1258H22.6299C22.527 18.1258 22.4284 18.0841 22.3557 18.01C22.283 17.9358 22.2422 17.8352 22.2422 17.7304Z">
                        </path>
                      </svg>
                      View Details
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="how-it-work-section style-2 mb-100">
  <div class="container">
    <div class="row mb-50 wow fadeInUp" data-wow-delay="200ms">
      <div class="col-lg-12 d-flex align-items-end justify-content-between gap-3 flex-wrap">
        <div class="section-title-2">
          <h2>How Does It Work</h2>
          <p>Here are some of the featured cars in different categories</p>
        </div>
        <div class="video-btn">
          <a class="video-popup"
             href="https://www.youtube.com/watch?v=u31qwQUeGuM&amp;pp=ygURcGxhY2Vob2xkZXIgdmlkZW8%3D"><i
              class="bi bi-play-circle"></i> Watch video</a>
        </div>
      </div>
    </div>
    <div class="row wow fadeInUp" data-wow-delay="300ms">
      <div class="col-lg-12">
        <div class="work-process-group">
          <div class="row justify-content-center g-lg-0 gy-5">
            <div class="col-lg-3 col-sm-6">
              <div class="single-work-process text-center">
                <div class="step">
                  <span>01</span>
                </div>
                <div class="icon">
                  <img src="images/loaction.svg" alt="">
                </div>
                <div class="content">
                  <h6>Choose Any where</h6>
                  <p>Car servicing is the regular maintenance and inspection of a vehicle to
                    ensure.</p>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-sm-6">
              <div class="single-work-process text-center">
                <div class="step">
                  <span>02</span>
                </div>
                <div class="icon">
                  <img src="images/contact.svg" alt="">
                </div>
                <div class="content">
                  <h6>Contact With Us</h6>
                  <p>Car servicing is the regular maintenance and inspection of a vehicle to
                    ensure.</p>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-sm-6">
              <div class="single-work-process text-center">
                <div class="step">
                  <span>03</span>
                </div>
                <div class="icon">
                  <img src="images/pay.svg" alt="">
                </div>
                <div class="content">
                  <h6>Pay For The Car</h6>
                  <p>Car servicing is the regular maintenance and inspection of a vehicle to
                    ensure.</p>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-sm-6">
              <div class="single-work-process text-center">
                <div class="step">
                  <span>04</span>
                </div>
                <div class="icon">
                  <img src="images/recieve.svg" alt="">
                </div>
                <div class="content">
                  <h6>Recieve The Car</h6>
                  <p>Car servicing is the regular maintenance and inspection of a vehicle to
                    ensure.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row wow fadeInUp" data-wow-delay="400ms">
      <div class="col-lg-12 d-flex justify-content-center">
        <div class="trustpilot-review">
          <strong>Excellent!</strong>
          <img src="images/trustpilot-star2.svg" alt="">
          <p>5.0 Rating out of <strong>5.0</strong> based on <a href="#"><strong>245354</strong>
              reviews</a></p>
          <img src="images/trustpilot-logo.svg" alt="">
        </div>
      </div>
    </div>
  </div>
</div>

<div class="home5-top-use-car-section mb-100">
  <div class="container">
    <div class="row mb-50 wow fadeInUp" data-wow-delay="200ms">
      <div class="col-lg-12 d-flex align-items-end justify-content-between gap-3 flex-wrap">
        <div class="section-title-2">
          <h2>Top Used Cars</h2>
          <p>To get the most accurate and up-to-date information.</p>
        </div>
        <div class="slider-btn-and-exp-btn">
          <div class="explore-more-btn">
            <a href="car-deatils.html">Explore More <i class="bi bi-arrow-right"></i></a>
          </div>
        </div>
      </div>
    </div>
    <div class="row g-4 justify-content-center">
      <div class="col-xl-3 col-lg-4 col-sm-2 wow fadeInUp" data-wow-delay="200ms">
        <div class="product-card5">
          <div class="product-img">
            <div class="product-price">
              <span>$7,656.00</span>
            </div>
            <a href="#" class="fav">
              <svg width="14" height="13" viewBox="0 0 14 14" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M7.00012 2.40453L6.37273 1.75966C4.90006 0.245917 2.19972 0.76829 1.22495 2.67141C0.767306 3.56653 0.664053 4.8589 1.4997 6.50827C2.30473 8.09639 3.97953 9.99864 7.00012 12.0706C10.0207 9.99864 11.6946 8.09639 12.5005 6.50827C13.3362 4.85803 13.2338 3.56653 12.7753 2.67141C11.8005 0.76829 9.10019 0.245042 7.62752 1.75879L7.00012 2.40453ZM7.00012 13.125C-6.41666 4.25953 2.86912 -2.65995 6.84612 1.00016C6.89862 1.04829 6.95024 1.09816 7.00012 1.14979C7.04949 1.09821 7.10087 1.04859 7.15413 1.00104C11.1302 -2.6617 20.4169 4.25865 7.00012 13.125Z">
                </path>
              </svg>
            </a>
            <div class="slider-btn-group">
              <div class="product-stand-next swiper-arrow">
                <svg width="8" height="13" viewBox="0 0 8 13" xmlns="http://www.w3.org/2000/svg">
                  <path d="M0 6.50008L8 0L2.90909 6.50008L8 13L0 6.50008Z"></path>
                </svg>
              </div>
              <div class="product-stand-prev swiper-arrow">
                <svg width="8" height="13" viewBox="0 0 8 13" xmlns="http://www.w3.org/2000/svg">
                  <path d="M8 6.50008L0 0L5.09091 6.50008L0 13L8 6.50008Z"></path>
                </svg>
              </div>
            </div>
            <div class="swiper product-img-slider">
              <div class="swiper-wrapper">
                <div class="swiper-slide">
                  <img src="images/feature-car-01.png" alt="image">
                </div>
                <div class="swiper-slide">
                  <img src="images/feature-car-01.png" alt="image">
                </div>
                <div class="swiper-slide">
                  <img src="images/feature-car-01.png" alt="image">
                </div>
                <div class="swiper-slide">
                  <img src="images/feature-car-01.png" alt="image">
                </div>
              </div>
            </div>
          </div>
          <div class="product-content">
            <div class="location">
              <a href="#"><i class="bi bi-geo-alt"></i> Panama City</a>
            </div>
            <h6><a href="car-deatils.html">Mercedes-Benz Class-2023</a></h6>
            <ul class="features">
              <li>
                <img src="images/miles.svg" alt="">
                2500 miles
              </li>
              <li>
                <img src="images/menual.svg" alt="">
                Manual
              </li>
              <li>
                <img src="images/fuel.svg" alt="">
                Petrol
              </li>
              <li>
                <img src="images/electric.svg" alt="">
                Electric
              </li>
            </ul>
            <div class="content-btm">
              <a class="view-btn2" href="car-deatils.html">
                <svg width="35" height="21" viewBox="0 0 35 21" xmlns="http://www.w3.org/2000/svg">
                  <path d="M11 20C5.47715 20 1 15.7467 1 10.5C1 5.25329 5.47715 1 11 1"
                        stroke-linecap="round"></path>
                  <path
                    d="M14.2597 3C14.1569 3 14.0583 3.04166 13.9856 3.11582C13.9129 3.18997 13.8721 3.29055 13.8721 3.39542C13.8721 3.50029 13.9129 3.60086 13.9856 3.67502C14.0583 3.74917 14.1569 3.79083 14.2597 3.79083H15.8104C15.9132 3.79083 16.0118 3.74917 16.0845 3.67502C16.1572 3.60086 16.198 3.50029 16.198 3.39542C16.198 3.29055 16.1572 3.18997 16.0845 3.11582C16.0118 3.04166 15.9132 3 15.8104 3H14.2597ZM16.7795 3C16.6767 3 16.5781 3.04166 16.5054 3.11582C16.4327 3.18997 16.3919 3.29055 16.3919 3.39542C16.3919 3.50029 16.4327 3.60086 16.5054 3.67502C16.5781 3.74917 16.6767 3.79083 16.7795 3.79083H21.3346C21.4374 3.79083 21.536 3.74917 21.6087 3.67502C21.6814 3.60086 21.7222 3.50029 21.7222 3.39542C21.7222 3.29055 21.6814 3.18997 21.6087 3.11582C21.536 3.04166 21.4374 3 21.3346 3H16.7795Z">
                  </path>
                  <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M15.2292 5.76953C15.1264 5.76953 15.0278 5.81119 14.9551 5.88535C14.8824 5.9595 14.8415 6.06008 14.8415 6.16495C14.8415 6.26982 14.8824 6.3704 14.9551 6.44455C15.0278 6.51871 15.1264 6.56037 15.2292 6.56037H24.1454C25.653 6.56037 26.5822 6.79999 27.3256 7.18493C27.9575 7.51194 28.4672 7.9467 29.1055 8.49119C29.2375 8.60368 29.3749 8.72073 29.5201 8.84271L29.6101 8.91824L29.726 8.93069C33.2653 9.31069 34.0622 10.5309 34.2246 11.1557V12.6893C34.2246 12.7942 34.1838 12.8948 34.1111 12.9689C34.0384 13.0431 33.9398 13.0847 33.8369 13.0847H32.8356C32.6511 11.9627 31.6943 11.1077 30.5418 11.1077C29.3893 11.1077 28.4325 11.9627 28.248 13.0847H21.2058C21.0212 11.9627 20.0645 11.1077 18.912 11.1077C17.7594 11.1077 16.8027 11.9627 16.6182 13.0847H14.7446C14.6418 13.0847 14.5432 13.1264 14.4705 13.2006C14.3978 13.2747 14.3569 13.3753 14.3569 13.4802C14.3569 13.585 14.3978 13.6856 14.4705 13.7598C14.5432 13.8339 14.6418 13.8756 14.7446 13.8756H16.6182C16.8027 14.9976 17.7594 15.8527 18.912 15.8527C20.0645 15.8527 21.0212 14.9976 21.2058 13.8756H28.248C28.4325 14.9976 29.3893 15.8527 30.5418 15.8527C31.6943 15.8527 32.6511 14.9976 32.8356 13.8756H33.8369C34.1454 13.8756 34.4412 13.7506 34.6593 13.5281C34.8774 13.3057 34.9999 13.0039 34.9999 12.6893V11.0626L34.99 11.0187C34.7431 9.92754 33.5791 8.57502 29.9239 8.15706C29.8217 8.07086 29.7215 7.98505 29.6227 7.90063C28.9828 7.35397 28.3942 6.851 27.6766 6.4795C26.7966 6.02418 25.7391 5.76953 24.1454 5.76953H15.2292ZM28.9912 13.4802C28.9912 13.0607 29.1545 12.6584 29.4453 12.3618C29.7361 12.0651 30.1306 11.8985 30.5418 11.8985C30.9531 11.8985 31.3475 12.0651 31.6383 12.3618C31.9291 12.6584 32.0925 13.0607 32.0925 13.4802C32.0925 13.8996 31.9291 14.302 31.6383 14.5986C31.3475 14.8952 30.9531 15.0618 30.5418 15.0618C30.1306 15.0618 29.7361 14.8952 29.4453 14.5986C29.1545 14.302 28.9912 13.8996 28.9912 13.4802ZM18.912 11.8985C18.5007 11.8985 18.1063 12.0651 17.8155 12.3618C17.5247 12.6584 17.3613 13.0607 17.3613 13.4802C17.3613 13.8996 17.5247 14.302 17.8155 14.5986C18.1063 14.8952 18.5007 15.0618 18.912 15.0618C19.3232 15.0618 19.7176 14.8952 20.0084 14.5986C20.2992 14.302 20.4626 13.8996 20.4626 13.4802C20.4626 13.0607 20.2992 12.6584 20.0084 12.3618C19.7176 12.0651 19.3232 11.8985 18.912 11.8985Z">
                  </path>
                  <path
                    d="M11 8.14151C11 8.03664 11.0408 7.93606 11.1135 7.86191C11.1862 7.78775 11.2848 7.74609 11.3877 7.74609H15.7489C15.8517 7.74609 15.9503 7.78775 16.023 7.86191C16.0957 7.93606 16.1365 8.03664 16.1365 8.14151C16.1365 8.24638 16.0957 8.34696 16.023 8.42111C15.9503 8.49527 15.8517 8.53693 15.7489 8.53693H11.3877C11.2848 8.53693 11.1862 8.49527 11.1135 8.42111C11.0408 8.34696 11 8.24638 11 8.14151ZM26.6836 8.65278C26.7563 8.72694 26.7971 8.82749 26.7971 8.93234C26.7971 9.03719 26.7563 9.13775 26.6836 9.2119L26.6532 9.24294C26.2897 9.61367 25.7968 9.82197 25.2828 9.82203H19.1409C19.0381 9.82203 18.9395 9.78037 18.8668 9.70622C18.7941 9.63206 18.7532 9.53149 18.7532 9.42662C18.7532 9.32174 18.7941 9.22117 18.8668 9.14701C18.9395 9.07286 19.0381 9.0312 19.1409 9.0312H25.2826C25.4354 9.03122 25.5866 9.00055 25.7277 8.94095C25.8688 8.88134 25.997 8.79397 26.105 8.68382L26.1355 8.65278C26.2082 8.57866 26.3068 8.53701 26.4096 8.53701C26.5123 8.53701 26.6109 8.57866 26.6836 8.65278ZM19.5286 17.7304C19.5286 17.6255 19.5694 17.5249 19.6421 17.4508C19.7148 17.3766 19.8134 17.335 19.9162 17.335H21.5638C21.6666 17.335 21.7652 17.3766 21.8379 17.4508C21.9106 17.5249 21.9514 17.6255 21.9514 17.7304C21.9514 17.8352 21.9106 17.9358 21.8379 18.01C21.7652 18.0841 21.6666 18.1258 21.5638 18.1258H19.9162C19.8134 18.1258 19.7148 18.0841 19.6421 18.01C19.5694 17.9358 19.5286 17.8352 19.5286 17.7304ZM22.2422 17.7304C22.2422 17.6255 22.283 17.5249 22.3557 17.4508C22.4284 17.3766 22.527 17.335 22.6299 17.335H26.991C27.0939 17.335 27.1925 17.3766 27.2652 17.4508C27.3379 17.5249 27.3787 17.6255 27.3787 17.7304C27.3787 17.8352 27.3379 17.9358 27.2652 18.01C27.1925 18.0841 27.0939 18.1258 26.991 18.1258H22.6299C22.527 18.1258 22.4284 18.0841 22.3557 18.01C22.283 17.9358 22.2422 17.8352 22.2422 17.7304Z">
                  </path>
                </svg>
                View Details
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-3 col-lg-4 col-sm-2 wow fadeInUp" data-wow-delay="300ms">
        <div class="product-card5">
          <div class="product-img">
            <div class="product-price">
              <span>$7,656.00</span>
            </div>
            <a href="#" class="fav">
              <svg width="14" height="13" viewBox="0 0 14 14" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M7.00012 2.40453L6.37273 1.75966C4.90006 0.245917 2.19972 0.76829 1.22495 2.67141C0.767306 3.56653 0.664053 4.8589 1.4997 6.50827C2.30473 8.09639 3.97953 9.99864 7.00012 12.0706C10.0207 9.99864 11.6946 8.09639 12.5005 6.50827C13.3362 4.85803 13.2338 3.56653 12.7753 2.67141C11.8005 0.76829 9.10019 0.245042 7.62752 1.75879L7.00012 2.40453ZM7.00012 13.125C-6.41666 4.25953 2.86912 -2.65995 6.84612 1.00016C6.89862 1.04829 6.95024 1.09816 7.00012 1.14979C7.04949 1.09821 7.10087 1.04859 7.15413 1.00104C11.1302 -2.6617 20.4169 4.25865 7.00012 13.125Z">
                </path>
              </svg>
            </a>
            <div class="slider-btn-group">
              <div class="product-stand-next swiper-arrow">
                <svg width="8" height="13" viewBox="0 0 8 13" xmlns="http://www.w3.org/2000/svg">
                  <path d="M0 6.50008L8 0L2.90909 6.50008L8 13L0 6.50008Z"></path>
                </svg>
              </div>
              <div class="product-stand-prev swiper-arrow">
                <svg width="8" height="13" viewBox="0 0 8 13" xmlns="http://www.w3.org/2000/svg">
                  <path d="M8 6.50008L0 0L5.09091 6.50008L0 13L8 6.50008Z"></path>
                </svg>
              </div>
            </div>
            <div class="swiper product-img-slider">
              <div class="swiper-wrapper">
                <div class="swiper-slide">
                  <img src="images/feature-car-02.png" alt="image">
                </div>
                <div class="swiper-slide">
                  <img src="images/feature-car-02.png" alt="image">
                </div>
                <div class="swiper-slide">
                  <img src="images/feature-car-02.png" alt="image">
                </div>
                <div class="swiper-slide">
                  <img src="images/feature-car-02.png" alt="image">
                </div>
              </div>
            </div>
          </div>
          <div class="product-content">
            <div class="location">
              <a href="#"><i class="bi bi-geo-alt"></i> Panama City</a>
            </div>
            <h6><a href="car-deatils.html">Nissan Altima S-2022</a></h6>
            <ul class="features">
              <li>
                <img src="images/miles.svg" alt="">
                2500 miles
              </li>
              <li>
                <img src="images/menual.svg" alt="">
                Automatic
              </li>
              <li>
                <img src="images/fuel.svg" alt="">
                Petrol
              </li>
              <li>
                <img src="images/electric.svg" alt="">
                Electric
              </li>
            </ul>
            <div class="content-btm">
              <a class="view-btn2" href="car-deatils.html">
                <svg width="35" height="21" viewBox="0 0 35 21" xmlns="http://www.w3.org/2000/svg">
                  <path d="M11 20C5.47715 20 1 15.7467 1 10.5C1 5.25329 5.47715 1 11 1"
                        stroke-linecap="round"></path>
                  <path
                    d="M14.2597 3C14.1569 3 14.0583 3.04166 13.9856 3.11582C13.9129 3.18997 13.8721 3.29055 13.8721 3.39542C13.8721 3.50029 13.9129 3.60086 13.9856 3.67502C14.0583 3.74917 14.1569 3.79083 14.2597 3.79083H15.8104C15.9132 3.79083 16.0118 3.74917 16.0845 3.67502C16.1572 3.60086 16.198 3.50029 16.198 3.39542C16.198 3.29055 16.1572 3.18997 16.0845 3.11582C16.0118 3.04166 15.9132 3 15.8104 3H14.2597ZM16.7795 3C16.6767 3 16.5781 3.04166 16.5054 3.11582C16.4327 3.18997 16.3919 3.29055 16.3919 3.39542C16.3919 3.50029 16.4327 3.60086 16.5054 3.67502C16.5781 3.74917 16.6767 3.79083 16.7795 3.79083H21.3346C21.4374 3.79083 21.536 3.74917 21.6087 3.67502C21.6814 3.60086 21.7222 3.50029 21.7222 3.39542C21.7222 3.29055 21.6814 3.18997 21.6087 3.11582C21.536 3.04166 21.4374 3 21.3346 3H16.7795Z">
                  </path>
                  <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M15.2292 5.76953C15.1264 5.76953 15.0278 5.81119 14.9551 5.88535C14.8824 5.9595 14.8415 6.06008 14.8415 6.16495C14.8415 6.26982 14.8824 6.3704 14.9551 6.44455C15.0278 6.51871 15.1264 6.56037 15.2292 6.56037H24.1454C25.653 6.56037 26.5822 6.79999 27.3256 7.18493C27.9575 7.51194 28.4672 7.9467 29.1055 8.49119C29.2375 8.60368 29.3749 8.72073 29.5201 8.84271L29.6101 8.91824L29.726 8.93069C33.2653 9.31069 34.0622 10.5309 34.2246 11.1557V12.6893C34.2246 12.7942 34.1838 12.8948 34.1111 12.9689C34.0384 13.0431 33.9398 13.0847 33.8369 13.0847H32.8356C32.6511 11.9627 31.6943 11.1077 30.5418 11.1077C29.3893 11.1077 28.4325 11.9627 28.248 13.0847H21.2058C21.0212 11.9627 20.0645 11.1077 18.912 11.1077C17.7594 11.1077 16.8027 11.9627 16.6182 13.0847H14.7446C14.6418 13.0847 14.5432 13.1264 14.4705 13.2006C14.3978 13.2747 14.3569 13.3753 14.3569 13.4802C14.3569 13.585 14.3978 13.6856 14.4705 13.7598C14.5432 13.8339 14.6418 13.8756 14.7446 13.8756H16.6182C16.8027 14.9976 17.7594 15.8527 18.912 15.8527C20.0645 15.8527 21.0212 14.9976 21.2058 13.8756H28.248C28.4325 14.9976 29.3893 15.8527 30.5418 15.8527C31.6943 15.8527 32.6511 14.9976 32.8356 13.8756H33.8369C34.1454 13.8756 34.4412 13.7506 34.6593 13.5281C34.8774 13.3057 34.9999 13.0039 34.9999 12.6893V11.0626L34.99 11.0187C34.7431 9.92754 33.5791 8.57502 29.9239 8.15706C29.8217 8.07086 29.7215 7.98505 29.6227 7.90063C28.9828 7.35397 28.3942 6.851 27.6766 6.4795C26.7966 6.02418 25.7391 5.76953 24.1454 5.76953H15.2292ZM28.9912 13.4802C28.9912 13.0607 29.1545 12.6584 29.4453 12.3618C29.7361 12.0651 30.1306 11.8985 30.5418 11.8985C30.9531 11.8985 31.3475 12.0651 31.6383 12.3618C31.9291 12.6584 32.0925 13.0607 32.0925 13.4802C32.0925 13.8996 31.9291 14.302 31.6383 14.5986C31.3475 14.8952 30.9531 15.0618 30.5418 15.0618C30.1306 15.0618 29.7361 14.8952 29.4453 14.5986C29.1545 14.302 28.9912 13.8996 28.9912 13.4802ZM18.912 11.8985C18.5007 11.8985 18.1063 12.0651 17.8155 12.3618C17.5247 12.6584 17.3613 13.0607 17.3613 13.4802C17.3613 13.8996 17.5247 14.302 17.8155 14.5986C18.1063 14.8952 18.5007 15.0618 18.912 15.0618C19.3232 15.0618 19.7176 14.8952 20.0084 14.5986C20.2992 14.302 20.4626 13.8996 20.4626 13.4802C20.4626 13.0607 20.2992 12.6584 20.0084 12.3618C19.7176 12.0651 19.3232 11.8985 18.912 11.8985Z">
                  </path>
                  <path
                    d="M11 8.14151C11 8.03664 11.0408 7.93606 11.1135 7.86191C11.1862 7.78775 11.2848 7.74609 11.3877 7.74609H15.7489C15.8517 7.74609 15.9503 7.78775 16.023 7.86191C16.0957 7.93606 16.1365 8.03664 16.1365 8.14151C16.1365 8.24638 16.0957 8.34696 16.023 8.42111C15.9503 8.49527 15.8517 8.53693 15.7489 8.53693H11.3877C11.2848 8.53693 11.1862 8.49527 11.1135 8.42111C11.0408 8.34696 11 8.24638 11 8.14151ZM26.6836 8.65278C26.7563 8.72694 26.7971 8.82749 26.7971 8.93234C26.7971 9.03719 26.7563 9.13775 26.6836 9.2119L26.6532 9.24294C26.2897 9.61367 25.7968 9.82197 25.2828 9.82203H19.1409C19.0381 9.82203 18.9395 9.78037 18.8668 9.70622C18.7941 9.63206 18.7532 9.53149 18.7532 9.42662C18.7532 9.32174 18.7941 9.22117 18.8668 9.14701C18.9395 9.07286 19.0381 9.0312 19.1409 9.0312H25.2826C25.4354 9.03122 25.5866 9.00055 25.7277 8.94095C25.8688 8.88134 25.997 8.79397 26.105 8.68382L26.1355 8.65278C26.2082 8.57866 26.3068 8.53701 26.4096 8.53701C26.5123 8.53701 26.6109 8.57866 26.6836 8.65278ZM19.5286 17.7304C19.5286 17.6255 19.5694 17.5249 19.6421 17.4508C19.7148 17.3766 19.8134 17.335 19.9162 17.335H21.5638C21.6666 17.335 21.7652 17.3766 21.8379 17.4508C21.9106 17.5249 21.9514 17.6255 21.9514 17.7304C21.9514 17.8352 21.9106 17.9358 21.8379 18.01C21.7652 18.0841 21.6666 18.1258 21.5638 18.1258H19.9162C19.8134 18.1258 19.7148 18.0841 19.6421 18.01C19.5694 17.9358 19.5286 17.8352 19.5286 17.7304ZM22.2422 17.7304C22.2422 17.6255 22.283 17.5249 22.3557 17.4508C22.4284 17.3766 22.527 17.335 22.6299 17.335H26.991C27.0939 17.335 27.1925 17.3766 27.2652 17.4508C27.3379 17.5249 27.3787 17.6255 27.3787 17.7304C27.3787 17.8352 27.3379 17.9358 27.2652 18.01C27.1925 18.0841 27.0939 18.1258 26.991 18.1258H22.6299C22.527 18.1258 22.4284 18.0841 22.3557 18.01C22.283 17.9358 22.2422 17.8352 22.2422 17.7304Z">
                  </path>
                </svg>
                View Details
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-3 col-lg-4 col-sm-2 wow fadeInUp" data-wow-delay="400ms">
        <div class="product-card5">
          <div class="product-img">
            <div class="product-price">
              <span>$7,656.00</span>
            </div>
            <a href="#" class="fav">
              <svg width="14" height="13" viewBox="0 0 14 14" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M7.00012 2.40453L6.37273 1.75966C4.90006 0.245917 2.19972 0.76829 1.22495 2.67141C0.767306 3.56653 0.664053 4.8589 1.4997 6.50827C2.30473 8.09639 3.97953 9.99864 7.00012 12.0706C10.0207 9.99864 11.6946 8.09639 12.5005 6.50827C13.3362 4.85803 13.2338 3.56653 12.7753 2.67141C11.8005 0.76829 9.10019 0.245042 7.62752 1.75879L7.00012 2.40453ZM7.00012 13.125C-6.41666 4.25953 2.86912 -2.65995 6.84612 1.00016C6.89862 1.04829 6.95024 1.09816 7.00012 1.14979C7.04949 1.09821 7.10087 1.04859 7.15413 1.00104C11.1302 -2.6617 20.4169 4.25865 7.00012 13.125Z">
                </path>
              </svg>
            </a>
            <div class="slider-btn-group">
              <div class="product-stand-next swiper-arrow">
                <svg width="8" height="13" viewBox="0 0 8 13" xmlns="http://www.w3.org/2000/svg">
                  <path d="M0 6.50008L8 0L2.90909 6.50008L8 13L0 6.50008Z"></path>
                </svg>
              </div>
              <div class="product-stand-prev swiper-arrow">
                <svg width="8" height="13" viewBox="0 0 8 13" xmlns="http://www.w3.org/2000/svg">
                  <path d="M8 6.50008L0 0L5.09091 6.50008L0 13L8 6.50008Z"></path>
                </svg>
              </div>
            </div>
            <div class="swiper product-img-slider">
              <div class="swiper-wrapper">
                <div class="swiper-slide">
                  <img src="images/feature-car-03.png" alt="image">
                </div>
                <div class="swiper-slide">
                  <img src="images/feature-car-03.png" alt="image">
                </div>
                <div class="swiper-slide">
                  <img src="images/feature-car-03.png" alt="image">
                </div>
                <div class="swiper-slide">
                  <img src="images/feature-car-03.png" alt="image">
                </div>
              </div>
            </div>
          </div>
          <div class="product-content">
            <div class="location">
              <a href="#"><i class="bi bi-geo-alt"></i> Panama City</a>
            </div>
            <h6><a href="car-deatils.html">Hyundai Sonata-2022</a></h6>
            <ul class="features">
              <li>
                <img src="images/miles.svg" alt="">
                2500 miles
              </li>
              <li>
                <img src="images/menual.svg" alt="">
                Manual
              </li>
              <li>
                <img src="images/fuel.svg" alt="">
                Petrol
              </li>
              <li>
                <img src="images/electric.svg" alt="">
                Electric
              </li>
            </ul>
            <div class="content-btm">
              <a class="view-btn2" href="car-deatils.html">
                <svg width="35" height="21" viewBox="0 0 35 21" xmlns="http://www.w3.org/2000/svg">
                  <path d="M11 20C5.47715 20 1 15.7467 1 10.5C1 5.25329 5.47715 1 11 1"
                        stroke-linecap="round"></path>
                  <path
                    d="M14.2597 3C14.1569 3 14.0583 3.04166 13.9856 3.11582C13.9129 3.18997 13.8721 3.29055 13.8721 3.39542C13.8721 3.50029 13.9129 3.60086 13.9856 3.67502C14.0583 3.74917 14.1569 3.79083 14.2597 3.79083H15.8104C15.9132 3.79083 16.0118 3.74917 16.0845 3.67502C16.1572 3.60086 16.198 3.50029 16.198 3.39542C16.198 3.29055 16.1572 3.18997 16.0845 3.11582C16.0118 3.04166 15.9132 3 15.8104 3H14.2597ZM16.7795 3C16.6767 3 16.5781 3.04166 16.5054 3.11582C16.4327 3.18997 16.3919 3.29055 16.3919 3.39542C16.3919 3.50029 16.4327 3.60086 16.5054 3.67502C16.5781 3.74917 16.6767 3.79083 16.7795 3.79083H21.3346C21.4374 3.79083 21.536 3.74917 21.6087 3.67502C21.6814 3.60086 21.7222 3.50029 21.7222 3.39542C21.7222 3.29055 21.6814 3.18997 21.6087 3.11582C21.536 3.04166 21.4374 3 21.3346 3H16.7795Z">
                  </path>
                  <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M15.2292 5.76953C15.1264 5.76953 15.0278 5.81119 14.9551 5.88535C14.8824 5.9595 14.8415 6.06008 14.8415 6.16495C14.8415 6.26982 14.8824 6.3704 14.9551 6.44455C15.0278 6.51871 15.1264 6.56037 15.2292 6.56037H24.1454C25.653 6.56037 26.5822 6.79999 27.3256 7.18493C27.9575 7.51194 28.4672 7.9467 29.1055 8.49119C29.2375 8.60368 29.3749 8.72073 29.5201 8.84271L29.6101 8.91824L29.726 8.93069C33.2653 9.31069 34.0622 10.5309 34.2246 11.1557V12.6893C34.2246 12.7942 34.1838 12.8948 34.1111 12.9689C34.0384 13.0431 33.9398 13.0847 33.8369 13.0847H32.8356C32.6511 11.9627 31.6943 11.1077 30.5418 11.1077C29.3893 11.1077 28.4325 11.9627 28.248 13.0847H21.2058C21.0212 11.9627 20.0645 11.1077 18.912 11.1077C17.7594 11.1077 16.8027 11.9627 16.6182 13.0847H14.7446C14.6418 13.0847 14.5432 13.1264 14.4705 13.2006C14.3978 13.2747 14.3569 13.3753 14.3569 13.4802C14.3569 13.585 14.3978 13.6856 14.4705 13.7598C14.5432 13.8339 14.6418 13.8756 14.7446 13.8756H16.6182C16.8027 14.9976 17.7594 15.8527 18.912 15.8527C20.0645 15.8527 21.0212 14.9976 21.2058 13.8756H28.248C28.4325 14.9976 29.3893 15.8527 30.5418 15.8527C31.6943 15.8527 32.6511 14.9976 32.8356 13.8756H33.8369C34.1454 13.8756 34.4412 13.7506 34.6593 13.5281C34.8774 13.3057 34.9999 13.0039 34.9999 12.6893V11.0626L34.99 11.0187C34.7431 9.92754 33.5791 8.57502 29.9239 8.15706C29.8217 8.07086 29.7215 7.98505 29.6227 7.90063C28.9828 7.35397 28.3942 6.851 27.6766 6.4795C26.7966 6.02418 25.7391 5.76953 24.1454 5.76953H15.2292ZM28.9912 13.4802C28.9912 13.0607 29.1545 12.6584 29.4453 12.3618C29.7361 12.0651 30.1306 11.8985 30.5418 11.8985C30.9531 11.8985 31.3475 12.0651 31.6383 12.3618C31.9291 12.6584 32.0925 13.0607 32.0925 13.4802C32.0925 13.8996 31.9291 14.302 31.6383 14.5986C31.3475 14.8952 30.9531 15.0618 30.5418 15.0618C30.1306 15.0618 29.7361 14.8952 29.4453 14.5986C29.1545 14.302 28.9912 13.8996 28.9912 13.4802ZM18.912 11.8985C18.5007 11.8985 18.1063 12.0651 17.8155 12.3618C17.5247 12.6584 17.3613 13.0607 17.3613 13.4802C17.3613 13.8996 17.5247 14.302 17.8155 14.5986C18.1063 14.8952 18.5007 15.0618 18.912 15.0618C19.3232 15.0618 19.7176 14.8952 20.0084 14.5986C20.2992 14.302 20.4626 13.8996 20.4626 13.4802C20.4626 13.0607 20.2992 12.6584 20.0084 12.3618C19.7176 12.0651 19.3232 11.8985 18.912 11.8985Z">
                  </path>
                  <path
                    d="M11 8.14151C11 8.03664 11.0408 7.93606 11.1135 7.86191C11.1862 7.78775 11.2848 7.74609 11.3877 7.74609H15.7489C15.8517 7.74609 15.9503 7.78775 16.023 7.86191C16.0957 7.93606 16.1365 8.03664 16.1365 8.14151C16.1365 8.24638 16.0957 8.34696 16.023 8.42111C15.9503 8.49527 15.8517 8.53693 15.7489 8.53693H11.3877C11.2848 8.53693 11.1862 8.49527 11.1135 8.42111C11.0408 8.34696 11 8.24638 11 8.14151ZM26.6836 8.65278C26.7563 8.72694 26.7971 8.82749 26.7971 8.93234C26.7971 9.03719 26.7563 9.13775 26.6836 9.2119L26.6532 9.24294C26.2897 9.61367 25.7968 9.82197 25.2828 9.82203H19.1409C19.0381 9.82203 18.9395 9.78037 18.8668 9.70622C18.7941 9.63206 18.7532 9.53149 18.7532 9.42662C18.7532 9.32174 18.7941 9.22117 18.8668 9.14701C18.9395 9.07286 19.0381 9.0312 19.1409 9.0312H25.2826C25.4354 9.03122 25.5866 9.00055 25.7277 8.94095C25.8688 8.88134 25.997 8.79397 26.105 8.68382L26.1355 8.65278C26.2082 8.57866 26.3068 8.53701 26.4096 8.53701C26.5123 8.53701 26.6109 8.57866 26.6836 8.65278ZM19.5286 17.7304C19.5286 17.6255 19.5694 17.5249 19.6421 17.4508C19.7148 17.3766 19.8134 17.335 19.9162 17.335H21.5638C21.6666 17.335 21.7652 17.3766 21.8379 17.4508C21.9106 17.5249 21.9514 17.6255 21.9514 17.7304C21.9514 17.8352 21.9106 17.9358 21.8379 18.01C21.7652 18.0841 21.6666 18.1258 21.5638 18.1258H19.9162C19.8134 18.1258 19.7148 18.0841 19.6421 18.01C19.5694 17.9358 19.5286 17.8352 19.5286 17.7304ZM22.2422 17.7304C22.2422 17.6255 22.283 17.5249 22.3557 17.4508C22.4284 17.3766 22.527 17.335 22.6299 17.335H26.991C27.0939 17.335 27.1925 17.3766 27.2652 17.4508C27.3379 17.5249 27.3787 17.6255 27.3787 17.7304C27.3787 17.8352 27.3379 17.9358 27.2652 18.01C27.1925 18.0841 27.0939 18.1258 26.991 18.1258H22.6299C22.527 18.1258 22.4284 18.0841 22.3557 18.01C22.283 17.9358 22.2422 17.8352 22.2422 17.7304Z">
                  </path>
                </svg>
                View Details
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-3 col-lg-4 col-sm-2 wow fadeInUp" data-wow-delay="500ms">
        <div class="product-card5">
          <div class="product-img">
            <div class="product-price">
              <span>$7,656.00</span>
            </div>
            <a href="#" class="fav">
              <svg width="14" height="13" viewBox="0 0 14 14" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M7.00012 2.40453L6.37273 1.75966C4.90006 0.245917 2.19972 0.76829 1.22495 2.67141C0.767306 3.56653 0.664053 4.8589 1.4997 6.50827C2.30473 8.09639 3.97953 9.99864 7.00012 12.0706C10.0207 9.99864 11.6946 8.09639 12.5005 6.50827C13.3362 4.85803 13.2338 3.56653 12.7753 2.67141C11.8005 0.76829 9.10019 0.245042 7.62752 1.75879L7.00012 2.40453ZM7.00012 13.125C-6.41666 4.25953 2.86912 -2.65995 6.84612 1.00016C6.89862 1.04829 6.95024 1.09816 7.00012 1.14979C7.04949 1.09821 7.10087 1.04859 7.15413 1.00104C11.1302 -2.6617 20.4169 4.25865 7.00012 13.125Z">
                </path>
              </svg>
            </a>
            <div class="slider-btn-group">
              <div class="product-stand-next swiper-arrow">
                <svg width="8" height="13" viewBox="0 0 8 13" xmlns="http://www.w3.org/2000/svg">
                  <path d="M0 6.50008L8 0L2.90909 6.50008L8 13L0 6.50008Z"></path>
                </svg>
              </div>
              <div class="product-stand-prev swiper-arrow">
                <svg width="8" height="13" viewBox="0 0 8 13" xmlns="http://www.w3.org/2000/svg">
                  <path d="M8 6.50008L0 0L5.09091 6.50008L0 13L8 6.50008Z"></path>
                </svg>
              </div>
            </div>
            <div class="swiper product-img-slider">
              <div class="swiper-wrapper">
                <div class="swiper-slide">
                  <img src="images/feature-car-04.png" alt="image">
                </div>
                <div class="swiper-slide">
                  <img src="images/feature-car-04.png" alt="image">
                </div>
                <div class="swiper-slide">
                  <img src="images/feature-car-04.png" alt="image">
                </div>
                <div class="swiper-slide">
                  <img src="images/feature-car-04.png" alt="image">
                </div>
              </div>
            </div>
          </div>
          <div class="product-content">
            <div class="location">
              <a href="#"><i class="bi bi-geo-alt"></i> Panama City</a>
            </div>
            <h6><a href="car-deatils.html">Tesla Model S-2023</a></h6>
            <ul class="features">
              <li>
                <img src="images/miles.svg" alt="">
                2500 miles
              </li>
              <li>
                <img src="images/menual.svg" alt="">
                Automatic
              </li>
              <li>
                <img src="images/fuel.svg" alt="">
                Petrol
              </li>
              <li>
                <img src="images/electric.svg" alt="">
                Electric
              </li>
            </ul>
            <div class="content-btm">
              <a class="view-btn2" href="car-deatils.html">
                <svg width="35" height="21" viewBox="0 0 35 21" xmlns="http://www.w3.org/2000/svg">
                  <path d="M11 20C5.47715 20 1 15.7467 1 10.5C1 5.25329 5.47715 1 11 1"
                        stroke-linecap="round"></path>
                  <path
                    d="M14.2597 3C14.1569 3 14.0583 3.04166 13.9856 3.11582C13.9129 3.18997 13.8721 3.29055 13.8721 3.39542C13.8721 3.50029 13.9129 3.60086 13.9856 3.67502C14.0583 3.74917 14.1569 3.79083 14.2597 3.79083H15.8104C15.9132 3.79083 16.0118 3.74917 16.0845 3.67502C16.1572 3.60086 16.198 3.50029 16.198 3.39542C16.198 3.29055 16.1572 3.18997 16.0845 3.11582C16.0118 3.04166 15.9132 3 15.8104 3H14.2597ZM16.7795 3C16.6767 3 16.5781 3.04166 16.5054 3.11582C16.4327 3.18997 16.3919 3.29055 16.3919 3.39542C16.3919 3.50029 16.4327 3.60086 16.5054 3.67502C16.5781 3.74917 16.6767 3.79083 16.7795 3.79083H21.3346C21.4374 3.79083 21.536 3.74917 21.6087 3.67502C21.6814 3.60086 21.7222 3.50029 21.7222 3.39542C21.7222 3.29055 21.6814 3.18997 21.6087 3.11582C21.536 3.04166 21.4374 3 21.3346 3H16.7795Z">
                  </path>
                  <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M15.2292 5.76953C15.1264 5.76953 15.0278 5.81119 14.9551 5.88535C14.8824 5.9595 14.8415 6.06008 14.8415 6.16495C14.8415 6.26982 14.8824 6.3704 14.9551 6.44455C15.0278 6.51871 15.1264 6.56037 15.2292 6.56037H24.1454C25.653 6.56037 26.5822 6.79999 27.3256 7.18493C27.9575 7.51194 28.4672 7.9467 29.1055 8.49119C29.2375 8.60368 29.3749 8.72073 29.5201 8.84271L29.6101 8.91824L29.726 8.93069C33.2653 9.31069 34.0622 10.5309 34.2246 11.1557V12.6893C34.2246 12.7942 34.1838 12.8948 34.1111 12.9689C34.0384 13.0431 33.9398 13.0847 33.8369 13.0847H32.8356C32.6511 11.9627 31.6943 11.1077 30.5418 11.1077C29.3893 11.1077 28.4325 11.9627 28.248 13.0847H21.2058C21.0212 11.9627 20.0645 11.1077 18.912 11.1077C17.7594 11.1077 16.8027 11.9627 16.6182 13.0847H14.7446C14.6418 13.0847 14.5432 13.1264 14.4705 13.2006C14.3978 13.2747 14.3569 13.3753 14.3569 13.4802C14.3569 13.585 14.3978 13.6856 14.4705 13.7598C14.5432 13.8339 14.6418 13.8756 14.7446 13.8756H16.6182C16.8027 14.9976 17.7594 15.8527 18.912 15.8527C20.0645 15.8527 21.0212 14.9976 21.2058 13.8756H28.248C28.4325 14.9976 29.3893 15.8527 30.5418 15.8527C31.6943 15.8527 32.6511 14.9976 32.8356 13.8756H33.8369C34.1454 13.8756 34.4412 13.7506 34.6593 13.5281C34.8774 13.3057 34.9999 13.0039 34.9999 12.6893V11.0626L34.99 11.0187C34.7431 9.92754 33.5791 8.57502 29.9239 8.15706C29.8217 8.07086 29.7215 7.98505 29.6227 7.90063C28.9828 7.35397 28.3942 6.851 27.6766 6.4795C26.7966 6.02418 25.7391 5.76953 24.1454 5.76953H15.2292ZM28.9912 13.4802C28.9912 13.0607 29.1545 12.6584 29.4453 12.3618C29.7361 12.0651 30.1306 11.8985 30.5418 11.8985C30.9531 11.8985 31.3475 12.0651 31.6383 12.3618C31.9291 12.6584 32.0925 13.0607 32.0925 13.4802C32.0925 13.8996 31.9291 14.302 31.6383 14.5986C31.3475 14.8952 30.9531 15.0618 30.5418 15.0618C30.1306 15.0618 29.7361 14.8952 29.4453 14.5986C29.1545 14.302 28.9912 13.8996 28.9912 13.4802ZM18.912 11.8985C18.5007 11.8985 18.1063 12.0651 17.8155 12.3618C17.5247 12.6584 17.3613 13.0607 17.3613 13.4802C17.3613 13.8996 17.5247 14.302 17.8155 14.5986C18.1063 14.8952 18.5007 15.0618 18.912 15.0618C19.3232 15.0618 19.7176 14.8952 20.0084 14.5986C20.2992 14.302 20.4626 13.8996 20.4626 13.4802C20.4626 13.0607 20.2992 12.6584 20.0084 12.3618C19.7176 12.0651 19.3232 11.8985 18.912 11.8985Z">
                  </path>
                  <path
                    d="M11 8.14151C11 8.03664 11.0408 7.93606 11.1135 7.86191C11.1862 7.78775 11.2848 7.74609 11.3877 7.74609H15.7489C15.8517 7.74609 15.9503 7.78775 16.023 7.86191C16.0957 7.93606 16.1365 8.03664 16.1365 8.14151C16.1365 8.24638 16.0957 8.34696 16.023 8.42111C15.9503 8.49527 15.8517 8.53693 15.7489 8.53693H11.3877C11.2848 8.53693 11.1862 8.49527 11.1135 8.42111C11.0408 8.34696 11 8.24638 11 8.14151ZM26.6836 8.65278C26.7563 8.72694 26.7971 8.82749 26.7971 8.93234C26.7971 9.03719 26.7563 9.13775 26.6836 9.2119L26.6532 9.24294C26.2897 9.61367 25.7968 9.82197 25.2828 9.82203H19.1409C19.0381 9.82203 18.9395 9.78037 18.8668 9.70622C18.7941 9.63206 18.7532 9.53149 18.7532 9.42662C18.7532 9.32174 18.7941 9.22117 18.8668 9.14701C18.9395 9.07286 19.0381 9.0312 19.1409 9.0312H25.2826C25.4354 9.03122 25.5866 9.00055 25.7277 8.94095C25.8688 8.88134 25.997 8.79397 26.105 8.68382L26.1355 8.65278C26.2082 8.57866 26.3068 8.53701 26.4096 8.53701C26.5123 8.53701 26.6109 8.57866 26.6836 8.65278ZM19.5286 17.7304C19.5286 17.6255 19.5694 17.5249 19.6421 17.4508C19.7148 17.3766 19.8134 17.335 19.9162 17.335H21.5638C21.6666 17.335 21.7652 17.3766 21.8379 17.4508C21.9106 17.5249 21.9514 17.6255 21.9514 17.7304C21.9514 17.8352 21.9106 17.9358 21.8379 18.01C21.7652 18.0841 21.6666 18.1258 21.5638 18.1258H19.9162C19.8134 18.1258 19.7148 18.0841 19.6421 18.01C19.5694 17.9358 19.5286 17.8352 19.5286 17.7304ZM22.2422 17.7304C22.2422 17.6255 22.283 17.5249 22.3557 17.4508C22.4284 17.3766 22.527 17.335 22.6299 17.335H26.991C27.0939 17.335 27.1925 17.3766 27.2652 17.4508C27.3379 17.5249 27.3787 17.6255 27.3787 17.7304C27.3787 17.8352 27.3379 17.9358 27.2652 18.01C27.1925 18.0841 27.0939 18.1258 26.991 18.1258H22.6299C22.527 18.1258 22.4284 18.0841 22.3557 18.01C22.283 17.9358 22.2422 17.8352 22.2422 17.7304Z">
                  </path>
                </svg>
                View Details
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="home5-upcomming-car-section pt-90 pb-90 mb-100">
  <div class="container">
    <div class="row mb-50 wow fadeInUp" data-wow-delay="200ms">
      <div class="col-lg-12 d-flex align-items-end justify-content-between gap-3 flex-wrap">
        <div class="section-title-2">
          <h2>Upcoming Cars</h2>
          <p>To get the most accurate and up-to-date information.</p>
        </div>
        <div class="slider-btn-group2 d-flex align-items-center justify-content-between">
          <div class="slider-btn prev-51">
            <svg width="9" height="15" viewBox="0 0 8 13" xmlns="http://www.w3.org/2000/svg">
              <path d="M0 6.50008L8 0L2.90909 6.50008L8 13L0 6.50008Z"></path>
            </svg>
          </div>
          <div class="slider-btn next-51">
            <svg width="9" height="15" viewBox="0 0 8 13" xmlns="http://www.w3.org/2000/svg">
              <path d="M8 6.50008L0 0L5.09091 6.50008L0 13L8 6.50008Z"></path>
            </svg>
          </div>
        </div>
      </div>
    </div>
    <div class="row wow fadeInUp" data-wow-delay="300ms">
      <div class="col-lg-12">
        <div class="swiper home5-fetured-slider">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <div class="product-card5 two">
                <div class="product-img">
                  <div class="product-price">
                    <span>$7,656.00</span>
                  </div>
                  <a href="#" class="fav">
                    <svg width="14" height="13" viewBox="0 0 14 14"
                         xmlns="http://www.w3.org/2000/svg">
                      <path
                        d="M7.00012 2.40453L6.37273 1.75966C4.90006 0.245917 2.19972 0.76829 1.22495 2.67141C0.767306 3.56653 0.664053 4.8589 1.4997 6.50827C2.30473 8.09639 3.97953 9.99864 7.00012 12.0706C10.0207 9.99864 11.6946 8.09639 12.5005 6.50827C13.3362 4.85803 13.2338 3.56653 12.7753 2.67141C11.8005 0.76829 9.10019 0.245042 7.62752 1.75879L7.00012 2.40453ZM7.00012 13.125C-6.41666 4.25953 2.86912 -2.65995 6.84612 1.00016C6.89862 1.04829 6.95024 1.09816 7.00012 1.14979C7.04949 1.09821 7.10087 1.04859 7.15413 1.00104C11.1302 -2.6617 20.4169 4.25865 7.00012 13.125Z">
                      </path>
                    </svg>
                  </a>
                  <div class="slider-btn-group">
                    <div class="product-stand-next swiper-arrow">
                      <svg width="8" height="13" viewBox="0 0 8 13"
                           xmlns="http://www.w3.org/2000/svg">
                        <path d="M0 6.50008L8 0L2.90909 6.50008L8 13L0 6.50008Z"></path>
                      </svg>
                    </div>
                    <div class="product-stand-prev swiper-arrow">
                      <svg width="8" height="13" viewBox="0 0 8 13"
                           xmlns="http://www.w3.org/2000/svg">
                        <path d="M8 6.50008L0 0L5.09091 6.50008L0 13L8 6.50008Z"></path>
                      </svg>
                    </div>
                  </div>
                  <div class="swiper product-img-slider">
                    <div class="swiper-wrapper">
                      <div class="swiper-slide">
                        <img src="images/feature-car-01.png" alt="image">
                      </div>
                      <div class="swiper-slide">
                        <img src="images/feature-car-01.png" alt="image">
                      </div>
                      <div class="swiper-slide">
                        <img src="images/feature-car-01.png" alt="image">
                      </div>
                      <div class="swiper-slide">
                        <img src="images/feature-car-01.png" alt="image">
                      </div>
                    </div>
                  </div>
                </div>
                <div class="product-content">
                  <h6><a href="car-deatils.html">Mercedes-Benz Class-2023</a></h6>
                  <div class="exp-date">
                    <p>Expected Date <span>02 April, 2023</span></p>
                  </div>
                  <div class="content-btm">
                    <a class="view-btn2" href="car-deatils.html">
                      <svg width="35" height="21" viewBox="0 0 35 21"
                           xmlns="http://www.w3.org/2000/svg">
                        <path d="M11 20C5.47715 20 1 15.7467 1 10.5C1 5.25329 5.47715 1 11 1"
                              stroke-linecap="round"></path>
                        <path
                          d="M14.2597 3C14.1569 3 14.0583 3.04166 13.9856 3.11582C13.9129 3.18997 13.8721 3.29055 13.8721 3.39542C13.8721 3.50029 13.9129 3.60086 13.9856 3.67502C14.0583 3.74917 14.1569 3.79083 14.2597 3.79083H15.8104C15.9132 3.79083 16.0118 3.74917 16.0845 3.67502C16.1572 3.60086 16.198 3.50029 16.198 3.39542C16.198 3.29055 16.1572 3.18997 16.0845 3.11582C16.0118 3.04166 15.9132 3 15.8104 3H14.2597ZM16.7795 3C16.6767 3 16.5781 3.04166 16.5054 3.11582C16.4327 3.18997 16.3919 3.29055 16.3919 3.39542C16.3919 3.50029 16.4327 3.60086 16.5054 3.67502C16.5781 3.74917 16.6767 3.79083 16.7795 3.79083H21.3346C21.4374 3.79083 21.536 3.74917 21.6087 3.67502C21.6814 3.60086 21.7222 3.50029 21.7222 3.39542C21.7222 3.29055 21.6814 3.18997 21.6087 3.11582C21.536 3.04166 21.4374 3 21.3346 3H16.7795Z">
                        </path>
                        <path fill-rule="evenodd" clip-rule="evenodd"
                              d="M15.2292 5.76953C15.1264 5.76953 15.0278 5.81119 14.9551 5.88535C14.8824 5.9595 14.8415 6.06008 14.8415 6.16495C14.8415 6.26982 14.8824 6.3704 14.9551 6.44455C15.0278 6.51871 15.1264 6.56037 15.2292 6.56037H24.1454C25.653 6.56037 26.5822 6.79999 27.3256 7.18493C27.9575 7.51194 28.4672 7.9467 29.1055 8.49119C29.2375 8.60368 29.3749 8.72073 29.5201 8.84271L29.6101 8.91824L29.726 8.93069C33.2653 9.31069 34.0622 10.5309 34.2246 11.1557V12.6893C34.2246 12.7942 34.1838 12.8948 34.1111 12.9689C34.0384 13.0431 33.9398 13.0847 33.8369 13.0847H32.8356C32.6511 11.9627 31.6943 11.1077 30.5418 11.1077C29.3893 11.1077 28.4325 11.9627 28.248 13.0847H21.2058C21.0212 11.9627 20.0645 11.1077 18.912 11.1077C17.7594 11.1077 16.8027 11.9627 16.6182 13.0847H14.7446C14.6418 13.0847 14.5432 13.1264 14.4705 13.2006C14.3978 13.2747 14.3569 13.3753 14.3569 13.4802C14.3569 13.585 14.3978 13.6856 14.4705 13.7598C14.5432 13.8339 14.6418 13.8756 14.7446 13.8756H16.6182C16.8027 14.9976 17.7594 15.8527 18.912 15.8527C20.0645 15.8527 21.0212 14.9976 21.2058 13.8756H28.248C28.4325 14.9976 29.3893 15.8527 30.5418 15.8527C31.6943 15.8527 32.6511 14.9976 32.8356 13.8756H33.8369C34.1454 13.8756 34.4412 13.7506 34.6593 13.5281C34.8774 13.3057 34.9999 13.0039 34.9999 12.6893V11.0626L34.99 11.0187C34.7431 9.92754 33.5791 8.57502 29.9239 8.15706C29.8217 8.07086 29.7215 7.98505 29.6227 7.90063C28.9828 7.35397 28.3942 6.851 27.6766 6.4795C26.7966 6.02418 25.7391 5.76953 24.1454 5.76953H15.2292ZM28.9912 13.4802C28.9912 13.0607 29.1545 12.6584 29.4453 12.3618C29.7361 12.0651 30.1306 11.8985 30.5418 11.8985C30.9531 11.8985 31.3475 12.0651 31.6383 12.3618C31.9291 12.6584 32.0925 13.0607 32.0925 13.4802C32.0925 13.8996 31.9291 14.302 31.6383 14.5986C31.3475 14.8952 30.9531 15.0618 30.5418 15.0618C30.1306 15.0618 29.7361 14.8952 29.4453 14.5986C29.1545 14.302 28.9912 13.8996 28.9912 13.4802ZM18.912 11.8985C18.5007 11.8985 18.1063 12.0651 17.8155 12.3618C17.5247 12.6584 17.3613 13.0607 17.3613 13.4802C17.3613 13.8996 17.5247 14.302 17.8155 14.5986C18.1063 14.8952 18.5007 15.0618 18.912 15.0618C19.3232 15.0618 19.7176 14.8952 20.0084 14.5986C20.2992 14.302 20.4626 13.8996 20.4626 13.4802C20.4626 13.0607 20.2992 12.6584 20.0084 12.3618C19.7176 12.0651 19.3232 11.8985 18.912 11.8985Z">
                        </path>
                        <path
                          d="M11 8.14151C11 8.03664 11.0408 7.93606 11.1135 7.86191C11.1862 7.78775 11.2848 7.74609 11.3877 7.74609H15.7489C15.8517 7.74609 15.9503 7.78775 16.023 7.86191C16.0957 7.93606 16.1365 8.03664 16.1365 8.14151C16.1365 8.24638 16.0957 8.34696 16.023 8.42111C15.9503 8.49527 15.8517 8.53693 15.7489 8.53693H11.3877C11.2848 8.53693 11.1862 8.49527 11.1135 8.42111C11.0408 8.34696 11 8.24638 11 8.14151ZM26.6836 8.65278C26.7563 8.72694 26.7971 8.82749 26.7971 8.93234C26.7971 9.03719 26.7563 9.13775 26.6836 9.2119L26.6532 9.24294C26.2897 9.61367 25.7968 9.82197 25.2828 9.82203H19.1409C19.0381 9.82203 18.9395 9.78037 18.8668 9.70622C18.7941 9.63206 18.7532 9.53149 18.7532 9.42662C18.7532 9.32174 18.7941 9.22117 18.8668 9.14701C18.9395 9.07286 19.0381 9.0312 19.1409 9.0312H25.2826C25.4354 9.03122 25.5866 9.00055 25.7277 8.94095C25.8688 8.88134 25.997 8.79397 26.105 8.68382L26.1355 8.65278C26.2082 8.57866 26.3068 8.53701 26.4096 8.53701C26.5123 8.53701 26.6109 8.57866 26.6836 8.65278ZM19.5286 17.7304C19.5286 17.6255 19.5694 17.5249 19.6421 17.4508C19.7148 17.3766 19.8134 17.335 19.9162 17.335H21.5638C21.6666 17.335 21.7652 17.3766 21.8379 17.4508C21.9106 17.5249 21.9514 17.6255 21.9514 17.7304C21.9514 17.8352 21.9106 17.9358 21.8379 18.01C21.7652 18.0841 21.6666 18.1258 21.5638 18.1258H19.9162C19.8134 18.1258 19.7148 18.0841 19.6421 18.01C19.5694 17.9358 19.5286 17.8352 19.5286 17.7304ZM22.2422 17.7304C22.2422 17.6255 22.283 17.5249 22.3557 17.4508C22.4284 17.3766 22.527 17.335 22.6299 17.335H26.991C27.0939 17.335 27.1925 17.3766 27.2652 17.4508C27.3379 17.5249 27.3787 17.6255 27.3787 17.7304C27.3787 17.8352 27.3379 17.9358 27.2652 18.01C27.1925 18.0841 27.0939 18.1258 26.991 18.1258H22.6299C22.527 18.1258 22.4284 18.0841 22.3557 18.01C22.283 17.9358 22.2422 17.8352 22.2422 17.7304Z">
                        </path>
                      </svg>
                      View Details
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="product-card5 two">
                <div class="product-img">
                  <div class="product-price">
                    <span>$7,656.00</span>
                  </div>
                  <a href="#" class="fav">
                    <svg width="14" height="13" viewBox="0 0 14 14"
                         xmlns="http://www.w3.org/2000/svg">
                      <path
                        d="M7.00012 2.40453L6.37273 1.75966C4.90006 0.245917 2.19972 0.76829 1.22495 2.67141C0.767306 3.56653 0.664053 4.8589 1.4997 6.50827C2.30473 8.09639 3.97953 9.99864 7.00012 12.0706C10.0207 9.99864 11.6946 8.09639 12.5005 6.50827C13.3362 4.85803 13.2338 3.56653 12.7753 2.67141C11.8005 0.76829 9.10019 0.245042 7.62752 1.75879L7.00012 2.40453ZM7.00012 13.125C-6.41666 4.25953 2.86912 -2.65995 6.84612 1.00016C6.89862 1.04829 6.95024 1.09816 7.00012 1.14979C7.04949 1.09821 7.10087 1.04859 7.15413 1.00104C11.1302 -2.6617 20.4169 4.25865 7.00012 13.125Z">
                      </path>
                    </svg>
                  </a>
                  <div class="slider-btn-group">
                    <div class="product-stand-next swiper-arrow">
                      <svg width="8" height="13" viewBox="0 0 8 13"
                           xmlns="http://www.w3.org/2000/svg">
                        <path d="M0 6.50008L8 0L2.90909 6.50008L8 13L0 6.50008Z"></path>
                      </svg>
                    </div>
                    <div class="product-stand-prev swiper-arrow">
                      <svg width="8" height="13" viewBox="0 0 8 13"
                           xmlns="http://www.w3.org/2000/svg">
                        <path d="M8 6.50008L0 0L5.09091 6.50008L0 13L8 6.50008Z"></path>
                      </svg>
                    </div>
                  </div>
                  <div class="swiper product-img-slider">
                    <div class="swiper-wrapper">
                      <div class="swiper-slide">
                        <img src="images/feature-car-02.png" alt="image">
                      </div>
                      <div class="swiper-slide">
                        <img src="images/feature-car-02.png" alt="image">
                      </div>
                      <div class="swiper-slide">
                        <img src="images/feature-car-02.png" alt="image">
                      </div>
                      <div class="swiper-slide">
                        <img src="images/feature-car-02.png" alt="image">
                      </div>
                    </div>
                  </div>
                </div>
                <div class="product-content">
                  <h6><a href="car-deatils.html">Nissan Altima S-2022</a></h6>
                  <div class="exp-date">
                    <p>Expected Date <span>02 April, 2023</span></p>
                  </div>
                  <div class="content-btm">
                    <a class="view-btn2" href="car-deatils.html">
                      <svg width="35" height="21" viewBox="0 0 35 21"
                           xmlns="http://www.w3.org/2000/svg">
                        <path d="M11 20C5.47715 20 1 15.7467 1 10.5C1 5.25329 5.47715 1 11 1"
                              stroke-linecap="round"></path>
                        <path
                          d="M14.2597 3C14.1569 3 14.0583 3.04166 13.9856 3.11582C13.9129 3.18997 13.8721 3.29055 13.8721 3.39542C13.8721 3.50029 13.9129 3.60086 13.9856 3.67502C14.0583 3.74917 14.1569 3.79083 14.2597 3.79083H15.8104C15.9132 3.79083 16.0118 3.74917 16.0845 3.67502C16.1572 3.60086 16.198 3.50029 16.198 3.39542C16.198 3.29055 16.1572 3.18997 16.0845 3.11582C16.0118 3.04166 15.9132 3 15.8104 3H14.2597ZM16.7795 3C16.6767 3 16.5781 3.04166 16.5054 3.11582C16.4327 3.18997 16.3919 3.29055 16.3919 3.39542C16.3919 3.50029 16.4327 3.60086 16.5054 3.67502C16.5781 3.74917 16.6767 3.79083 16.7795 3.79083H21.3346C21.4374 3.79083 21.536 3.74917 21.6087 3.67502C21.6814 3.60086 21.7222 3.50029 21.7222 3.39542C21.7222 3.29055 21.6814 3.18997 21.6087 3.11582C21.536 3.04166 21.4374 3 21.3346 3H16.7795Z">
                        </path>
                        <path fill-rule="evenodd" clip-rule="evenodd"
                              d="M15.2292 5.76953C15.1264 5.76953 15.0278 5.81119 14.9551 5.88535C14.8824 5.9595 14.8415 6.06008 14.8415 6.16495C14.8415 6.26982 14.8824 6.3704 14.9551 6.44455C15.0278 6.51871 15.1264 6.56037 15.2292 6.56037H24.1454C25.653 6.56037 26.5822 6.79999 27.3256 7.18493C27.9575 7.51194 28.4672 7.9467 29.1055 8.49119C29.2375 8.60368 29.3749 8.72073 29.5201 8.84271L29.6101 8.91824L29.726 8.93069C33.2653 9.31069 34.0622 10.5309 34.2246 11.1557V12.6893C34.2246 12.7942 34.1838 12.8948 34.1111 12.9689C34.0384 13.0431 33.9398 13.0847 33.8369 13.0847H32.8356C32.6511 11.9627 31.6943 11.1077 30.5418 11.1077C29.3893 11.1077 28.4325 11.9627 28.248 13.0847H21.2058C21.0212 11.9627 20.0645 11.1077 18.912 11.1077C17.7594 11.1077 16.8027 11.9627 16.6182 13.0847H14.7446C14.6418 13.0847 14.5432 13.1264 14.4705 13.2006C14.3978 13.2747 14.3569 13.3753 14.3569 13.4802C14.3569 13.585 14.3978 13.6856 14.4705 13.7598C14.5432 13.8339 14.6418 13.8756 14.7446 13.8756H16.6182C16.8027 14.9976 17.7594 15.8527 18.912 15.8527C20.0645 15.8527 21.0212 14.9976 21.2058 13.8756H28.248C28.4325 14.9976 29.3893 15.8527 30.5418 15.8527C31.6943 15.8527 32.6511 14.9976 32.8356 13.8756H33.8369C34.1454 13.8756 34.4412 13.7506 34.6593 13.5281C34.8774 13.3057 34.9999 13.0039 34.9999 12.6893V11.0626L34.99 11.0187C34.7431 9.92754 33.5791 8.57502 29.9239 8.15706C29.8217 8.07086 29.7215 7.98505 29.6227 7.90063C28.9828 7.35397 28.3942 6.851 27.6766 6.4795C26.7966 6.02418 25.7391 5.76953 24.1454 5.76953H15.2292ZM28.9912 13.4802C28.9912 13.0607 29.1545 12.6584 29.4453 12.3618C29.7361 12.0651 30.1306 11.8985 30.5418 11.8985C30.9531 11.8985 31.3475 12.0651 31.6383 12.3618C31.9291 12.6584 32.0925 13.0607 32.0925 13.4802C32.0925 13.8996 31.9291 14.302 31.6383 14.5986C31.3475 14.8952 30.9531 15.0618 30.5418 15.0618C30.1306 15.0618 29.7361 14.8952 29.4453 14.5986C29.1545 14.302 28.9912 13.8996 28.9912 13.4802ZM18.912 11.8985C18.5007 11.8985 18.1063 12.0651 17.8155 12.3618C17.5247 12.6584 17.3613 13.0607 17.3613 13.4802C17.3613 13.8996 17.5247 14.302 17.8155 14.5986C18.1063 14.8952 18.5007 15.0618 18.912 15.0618C19.3232 15.0618 19.7176 14.8952 20.0084 14.5986C20.2992 14.302 20.4626 13.8996 20.4626 13.4802C20.4626 13.0607 20.2992 12.6584 20.0084 12.3618C19.7176 12.0651 19.3232 11.8985 18.912 11.8985Z">
                        </path>
                        <path
                          d="M11 8.14151C11 8.03664 11.0408 7.93606 11.1135 7.86191C11.1862 7.78775 11.2848 7.74609 11.3877 7.74609H15.7489C15.8517 7.74609 15.9503 7.78775 16.023 7.86191C16.0957 7.93606 16.1365 8.03664 16.1365 8.14151C16.1365 8.24638 16.0957 8.34696 16.023 8.42111C15.9503 8.49527 15.8517 8.53693 15.7489 8.53693H11.3877C11.2848 8.53693 11.1862 8.49527 11.1135 8.42111C11.0408 8.34696 11 8.24638 11 8.14151ZM26.6836 8.65278C26.7563 8.72694 26.7971 8.82749 26.7971 8.93234C26.7971 9.03719 26.7563 9.13775 26.6836 9.2119L26.6532 9.24294C26.2897 9.61367 25.7968 9.82197 25.2828 9.82203H19.1409C19.0381 9.82203 18.9395 9.78037 18.8668 9.70622C18.7941 9.63206 18.7532 9.53149 18.7532 9.42662C18.7532 9.32174 18.7941 9.22117 18.8668 9.14701C18.9395 9.07286 19.0381 9.0312 19.1409 9.0312H25.2826C25.4354 9.03122 25.5866 9.00055 25.7277 8.94095C25.8688 8.88134 25.997 8.79397 26.105 8.68382L26.1355 8.65278C26.2082 8.57866 26.3068 8.53701 26.4096 8.53701C26.5123 8.53701 26.6109 8.57866 26.6836 8.65278ZM19.5286 17.7304C19.5286 17.6255 19.5694 17.5249 19.6421 17.4508C19.7148 17.3766 19.8134 17.335 19.9162 17.335H21.5638C21.6666 17.335 21.7652 17.3766 21.8379 17.4508C21.9106 17.5249 21.9514 17.6255 21.9514 17.7304C21.9514 17.8352 21.9106 17.9358 21.8379 18.01C21.7652 18.0841 21.6666 18.1258 21.5638 18.1258H19.9162C19.8134 18.1258 19.7148 18.0841 19.6421 18.01C19.5694 17.9358 19.5286 17.8352 19.5286 17.7304ZM22.2422 17.7304C22.2422 17.6255 22.283 17.5249 22.3557 17.4508C22.4284 17.3766 22.527 17.335 22.6299 17.335H26.991C27.0939 17.335 27.1925 17.3766 27.2652 17.4508C27.3379 17.5249 27.3787 17.6255 27.3787 17.7304C27.3787 17.8352 27.3379 17.9358 27.2652 18.01C27.1925 18.0841 27.0939 18.1258 26.991 18.1258H22.6299C22.527 18.1258 22.4284 18.0841 22.3557 18.01C22.283 17.9358 22.2422 17.8352 22.2422 17.7304Z">
                        </path>
                      </svg>
                      View Details
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="product-card5 two">
                <div class="product-img">
                  <div class="product-price">
                    <span>$7,656.00</span>
                  </div>
                  <a href="#" class="fav">
                    <svg width="14" height="13" viewBox="0 0 14 14"
                         xmlns="http://www.w3.org/2000/svg">
                      <path
                        d="M7.00012 2.40453L6.37273 1.75966C4.90006 0.245917 2.19972 0.76829 1.22495 2.67141C0.767306 3.56653 0.664053 4.8589 1.4997 6.50827C2.30473 8.09639 3.97953 9.99864 7.00012 12.0706C10.0207 9.99864 11.6946 8.09639 12.5005 6.50827C13.3362 4.85803 13.2338 3.56653 12.7753 2.67141C11.8005 0.76829 9.10019 0.245042 7.62752 1.75879L7.00012 2.40453ZM7.00012 13.125C-6.41666 4.25953 2.86912 -2.65995 6.84612 1.00016C6.89862 1.04829 6.95024 1.09816 7.00012 1.14979C7.04949 1.09821 7.10087 1.04859 7.15413 1.00104C11.1302 -2.6617 20.4169 4.25865 7.00012 13.125Z">
                      </path>
                    </svg>
                  </a>
                  <div class="slider-btn-group">
                    <div class="product-stand-next swiper-arrow">
                      <svg width="8" height="13" viewBox="0 0 8 13"
                           xmlns="http://www.w3.org/2000/svg">
                        <path d="M0 6.50008L8 0L2.90909 6.50008L8 13L0 6.50008Z"></path>
                      </svg>
                    </div>
                    <div class="product-stand-prev swiper-arrow">
                      <svg width="8" height="13" viewBox="0 0 8 13"
                           xmlns="http://www.w3.org/2000/svg">
                        <path d="M8 6.50008L0 0L5.09091 6.50008L0 13L8 6.50008Z"></path>
                      </svg>
                    </div>
                  </div>
                  <div class="swiper product-img-slider">
                    <div class="swiper-wrapper">
                      <div class="swiper-slide">
                        <img src="images/feature-car-03.png" alt="image">
                      </div>
                      <div class="swiper-slide">
                        <img src="images/feature-car-03.png" alt="image">
                      </div>
                      <div class="swiper-slide">
                        <img src="images/feature-car-03.png" alt="image">
                      </div>
                      <div class="swiper-slide">
                        <img src="images/feature-car-03.png" alt="image">
                      </div>
                    </div>
                  </div>
                </div>
                <div class="product-content">
                  <h6><a href="car-deatils.html">Hyundai Sonata-2022</a></h6>
                  <div class="exp-date">
                    <p>Expected Date <span>02 April, 2023</span></p>
                  </div>
                  <div class="content-btm">
                    <a class="view-btn2" href="car-deatils.html">
                      <svg width="35" height="21" viewBox="0 0 35 21"
                           xmlns="http://www.w3.org/2000/svg">
                        <path d="M11 20C5.47715 20 1 15.7467 1 10.5C1 5.25329 5.47715 1 11 1"
                              stroke-linecap="round"></path>
                        <path
                          d="M14.2597 3C14.1569 3 14.0583 3.04166 13.9856 3.11582C13.9129 3.18997 13.8721 3.29055 13.8721 3.39542C13.8721 3.50029 13.9129 3.60086 13.9856 3.67502C14.0583 3.74917 14.1569 3.79083 14.2597 3.79083H15.8104C15.9132 3.79083 16.0118 3.74917 16.0845 3.67502C16.1572 3.60086 16.198 3.50029 16.198 3.39542C16.198 3.29055 16.1572 3.18997 16.0845 3.11582C16.0118 3.04166 15.9132 3 15.8104 3H14.2597ZM16.7795 3C16.6767 3 16.5781 3.04166 16.5054 3.11582C16.4327 3.18997 16.3919 3.29055 16.3919 3.39542C16.3919 3.50029 16.4327 3.60086 16.5054 3.67502C16.5781 3.74917 16.6767 3.79083 16.7795 3.79083H21.3346C21.4374 3.79083 21.536 3.74917 21.6087 3.67502C21.6814 3.60086 21.7222 3.50029 21.7222 3.39542C21.7222 3.29055 21.6814 3.18997 21.6087 3.11582C21.536 3.04166 21.4374 3 21.3346 3H16.7795Z">
                        </path>
                        <path fill-rule="evenodd" clip-rule="evenodd"
                              d="M15.2292 5.76953C15.1264 5.76953 15.0278 5.81119 14.9551 5.88535C14.8824 5.9595 14.8415 6.06008 14.8415 6.16495C14.8415 6.26982 14.8824 6.3704 14.9551 6.44455C15.0278 6.51871 15.1264 6.56037 15.2292 6.56037H24.1454C25.653 6.56037 26.5822 6.79999 27.3256 7.18493C27.9575 7.51194 28.4672 7.9467 29.1055 8.49119C29.2375 8.60368 29.3749 8.72073 29.5201 8.84271L29.6101 8.91824L29.726 8.93069C33.2653 9.31069 34.0622 10.5309 34.2246 11.1557V12.6893C34.2246 12.7942 34.1838 12.8948 34.1111 12.9689C34.0384 13.0431 33.9398 13.0847 33.8369 13.0847H32.8356C32.6511 11.9627 31.6943 11.1077 30.5418 11.1077C29.3893 11.1077 28.4325 11.9627 28.248 13.0847H21.2058C21.0212 11.9627 20.0645 11.1077 18.912 11.1077C17.7594 11.1077 16.8027 11.9627 16.6182 13.0847H14.7446C14.6418 13.0847 14.5432 13.1264 14.4705 13.2006C14.3978 13.2747 14.3569 13.3753 14.3569 13.4802C14.3569 13.585 14.3978 13.6856 14.4705 13.7598C14.5432 13.8339 14.6418 13.8756 14.7446 13.8756H16.6182C16.8027 14.9976 17.7594 15.8527 18.912 15.8527C20.0645 15.8527 21.0212 14.9976 21.2058 13.8756H28.248C28.4325 14.9976 29.3893 15.8527 30.5418 15.8527C31.6943 15.8527 32.6511 14.9976 32.8356 13.8756H33.8369C34.1454 13.8756 34.4412 13.7506 34.6593 13.5281C34.8774 13.3057 34.9999 13.0039 34.9999 12.6893V11.0626L34.99 11.0187C34.7431 9.92754 33.5791 8.57502 29.9239 8.15706C29.8217 8.07086 29.7215 7.98505 29.6227 7.90063C28.9828 7.35397 28.3942 6.851 27.6766 6.4795C26.7966 6.02418 25.7391 5.76953 24.1454 5.76953H15.2292ZM28.9912 13.4802C28.9912 13.0607 29.1545 12.6584 29.4453 12.3618C29.7361 12.0651 30.1306 11.8985 30.5418 11.8985C30.9531 11.8985 31.3475 12.0651 31.6383 12.3618C31.9291 12.6584 32.0925 13.0607 32.0925 13.4802C32.0925 13.8996 31.9291 14.302 31.6383 14.5986C31.3475 14.8952 30.9531 15.0618 30.5418 15.0618C30.1306 15.0618 29.7361 14.8952 29.4453 14.5986C29.1545 14.302 28.9912 13.8996 28.9912 13.4802ZM18.912 11.8985C18.5007 11.8985 18.1063 12.0651 17.8155 12.3618C17.5247 12.6584 17.3613 13.0607 17.3613 13.4802C17.3613 13.8996 17.5247 14.302 17.8155 14.5986C18.1063 14.8952 18.5007 15.0618 18.912 15.0618C19.3232 15.0618 19.7176 14.8952 20.0084 14.5986C20.2992 14.302 20.4626 13.8996 20.4626 13.4802C20.4626 13.0607 20.2992 12.6584 20.0084 12.3618C19.7176 12.0651 19.3232 11.8985 18.912 11.8985Z">
                        </path>
                        <path
                          d="M11 8.14151C11 8.03664 11.0408 7.93606 11.1135 7.86191C11.1862 7.78775 11.2848 7.74609 11.3877 7.74609H15.7489C15.8517 7.74609 15.9503 7.78775 16.023 7.86191C16.0957 7.93606 16.1365 8.03664 16.1365 8.14151C16.1365 8.24638 16.0957 8.34696 16.023 8.42111C15.9503 8.49527 15.8517 8.53693 15.7489 8.53693H11.3877C11.2848 8.53693 11.1862 8.49527 11.1135 8.42111C11.0408 8.34696 11 8.24638 11 8.14151ZM26.6836 8.65278C26.7563 8.72694 26.7971 8.82749 26.7971 8.93234C26.7971 9.03719 26.7563 9.13775 26.6836 9.2119L26.6532 9.24294C26.2897 9.61367 25.7968 9.82197 25.2828 9.82203H19.1409C19.0381 9.82203 18.9395 9.78037 18.8668 9.70622C18.7941 9.63206 18.7532 9.53149 18.7532 9.42662C18.7532 9.32174 18.7941 9.22117 18.8668 9.14701C18.9395 9.07286 19.0381 9.0312 19.1409 9.0312H25.2826C25.4354 9.03122 25.5866 9.00055 25.7277 8.94095C25.8688 8.88134 25.997 8.79397 26.105 8.68382L26.1355 8.65278C26.2082 8.57866 26.3068 8.53701 26.4096 8.53701C26.5123 8.53701 26.6109 8.57866 26.6836 8.65278ZM19.5286 17.7304C19.5286 17.6255 19.5694 17.5249 19.6421 17.4508C19.7148 17.3766 19.8134 17.335 19.9162 17.335H21.5638C21.6666 17.335 21.7652 17.3766 21.8379 17.4508C21.9106 17.5249 21.9514 17.6255 21.9514 17.7304C21.9514 17.8352 21.9106 17.9358 21.8379 18.01C21.7652 18.0841 21.6666 18.1258 21.5638 18.1258H19.9162C19.8134 18.1258 19.7148 18.0841 19.6421 18.01C19.5694 17.9358 19.5286 17.8352 19.5286 17.7304ZM22.2422 17.7304C22.2422 17.6255 22.283 17.5249 22.3557 17.4508C22.4284 17.3766 22.527 17.335 22.6299 17.335H26.991C27.0939 17.335 27.1925 17.3766 27.2652 17.4508C27.3379 17.5249 27.3787 17.6255 27.3787 17.7304C27.3787 17.8352 27.3379 17.9358 27.2652 18.01C27.1925 18.0841 27.0939 18.1258 26.991 18.1258H22.6299C22.527 18.1258 22.4284 18.0841 22.3557 18.01C22.283 17.9358 22.2422 17.8352 22.2422 17.7304Z">
                        </path>
                      </svg>
                      View Details
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="product-card5 two">
                <div class="product-img">
                  <div class="product-price">
                    <span>$7,656.00</span>
                  </div>
                  <a href="#" class="fav">
                    <svg width="14" height="13" viewBox="0 0 14 14"
                         xmlns="http://www.w3.org/2000/svg">
                      <path
                        d="M7.00012 2.40453L6.37273 1.75966C4.90006 0.245917 2.19972 0.76829 1.22495 2.67141C0.767306 3.56653 0.664053 4.8589 1.4997 6.50827C2.30473 8.09639 3.97953 9.99864 7.00012 12.0706C10.0207 9.99864 11.6946 8.09639 12.5005 6.50827C13.3362 4.85803 13.2338 3.56653 12.7753 2.67141C11.8005 0.76829 9.10019 0.245042 7.62752 1.75879L7.00012 2.40453ZM7.00012 13.125C-6.41666 4.25953 2.86912 -2.65995 6.84612 1.00016C6.89862 1.04829 6.95024 1.09816 7.00012 1.14979C7.04949 1.09821 7.10087 1.04859 7.15413 1.00104C11.1302 -2.6617 20.4169 4.25865 7.00012 13.125Z">
                      </path>
                    </svg>
                  </a>
                  <div class="slider-btn-group">
                    <div class="product-stand-next swiper-arrow">
                      <svg width="8" height="13" viewBox="0 0 8 13"
                           xmlns="http://www.w3.org/2000/svg">
                        <path d="M0 6.50008L8 0L2.90909 6.50008L8 13L0 6.50008Z"></path>
                      </svg>
                    </div>
                    <div class="product-stand-prev swiper-arrow">
                      <svg width="8" height="13" viewBox="0 0 8 13"
                           xmlns="http://www.w3.org/2000/svg">
                        <path d="M8 6.50008L0 0L5.09091 6.50008L0 13L8 6.50008Z"></path>
                      </svg>
                    </div>
                  </div>
                  <div class="swiper product-img-slider">
                    <div class="swiper-wrapper">
                      <div class="swiper-slide">
                        <img src="images/feature-car-04.png" alt="image">
                      </div>
                      <div class="swiper-slide">
                        <img src="images/feature-car-04.png" alt="image">
                      </div>
                      <div class="swiper-slide">
                        <img src="images/feature-car-04.png" alt="image">
                      </div>
                      <div class="swiper-slide">
                        <img src="images/feature-car-04.png" alt="image">
                      </div>
                    </div>
                  </div>
                </div>
                <div class="product-content">
                  <h6><a href="car-deatils.html">Tesla Model S-2023</a></h6>
                  <div class="exp-date">
                    <p>Expected Date <span>02 April, 2023</span></p>
                  </div>
                  <div class="content-btm">
                    <a class="view-btn2" href="car-deatils.html">
                      <svg width="35" height="21" viewBox="0 0 35 21"
                           xmlns="http://www.w3.org/2000/svg">
                        <path d="M11 20C5.47715 20 1 15.7467 1 10.5C1 5.25329 5.47715 1 11 1"
                              stroke-linecap="round"></path>
                        <path
                          d="M14.2597 3C14.1569 3 14.0583 3.04166 13.9856 3.11582C13.9129 3.18997 13.8721 3.29055 13.8721 3.39542C13.8721 3.50029 13.9129 3.60086 13.9856 3.67502C14.0583 3.74917 14.1569 3.79083 14.2597 3.79083H15.8104C15.9132 3.79083 16.0118 3.74917 16.0845 3.67502C16.1572 3.60086 16.198 3.50029 16.198 3.39542C16.198 3.29055 16.1572 3.18997 16.0845 3.11582C16.0118 3.04166 15.9132 3 15.8104 3H14.2597ZM16.7795 3C16.6767 3 16.5781 3.04166 16.5054 3.11582C16.4327 3.18997 16.3919 3.29055 16.3919 3.39542C16.3919 3.50029 16.4327 3.60086 16.5054 3.67502C16.5781 3.74917 16.6767 3.79083 16.7795 3.79083H21.3346C21.4374 3.79083 21.536 3.74917 21.6087 3.67502C21.6814 3.60086 21.7222 3.50029 21.7222 3.39542C21.7222 3.29055 21.6814 3.18997 21.6087 3.11582C21.536 3.04166 21.4374 3 21.3346 3H16.7795Z">
                        </path>
                        <path fill-rule="evenodd" clip-rule="evenodd"
                              d="M15.2292 5.76953C15.1264 5.76953 15.0278 5.81119 14.9551 5.88535C14.8824 5.9595 14.8415 6.06008 14.8415 6.16495C14.8415 6.26982 14.8824 6.3704 14.9551 6.44455C15.0278 6.51871 15.1264 6.56037 15.2292 6.56037H24.1454C25.653 6.56037 26.5822 6.79999 27.3256 7.18493C27.9575 7.51194 28.4672 7.9467 29.1055 8.49119C29.2375 8.60368 29.3749 8.72073 29.5201 8.84271L29.6101 8.91824L29.726 8.93069C33.2653 9.31069 34.0622 10.5309 34.2246 11.1557V12.6893C34.2246 12.7942 34.1838 12.8948 34.1111 12.9689C34.0384 13.0431 33.9398 13.0847 33.8369 13.0847H32.8356C32.6511 11.9627 31.6943 11.1077 30.5418 11.1077C29.3893 11.1077 28.4325 11.9627 28.248 13.0847H21.2058C21.0212 11.9627 20.0645 11.1077 18.912 11.1077C17.7594 11.1077 16.8027 11.9627 16.6182 13.0847H14.7446C14.6418 13.0847 14.5432 13.1264 14.4705 13.2006C14.3978 13.2747 14.3569 13.3753 14.3569 13.4802C14.3569 13.585 14.3978 13.6856 14.4705 13.7598C14.5432 13.8339 14.6418 13.8756 14.7446 13.8756H16.6182C16.8027 14.9976 17.7594 15.8527 18.912 15.8527C20.0645 15.8527 21.0212 14.9976 21.2058 13.8756H28.248C28.4325 14.9976 29.3893 15.8527 30.5418 15.8527C31.6943 15.8527 32.6511 14.9976 32.8356 13.8756H33.8369C34.1454 13.8756 34.4412 13.7506 34.6593 13.5281C34.8774 13.3057 34.9999 13.0039 34.9999 12.6893V11.0626L34.99 11.0187C34.7431 9.92754 33.5791 8.57502 29.9239 8.15706C29.8217 8.07086 29.7215 7.98505 29.6227 7.90063C28.9828 7.35397 28.3942 6.851 27.6766 6.4795C26.7966 6.02418 25.7391 5.76953 24.1454 5.76953H15.2292ZM28.9912 13.4802C28.9912 13.0607 29.1545 12.6584 29.4453 12.3618C29.7361 12.0651 30.1306 11.8985 30.5418 11.8985C30.9531 11.8985 31.3475 12.0651 31.6383 12.3618C31.9291 12.6584 32.0925 13.0607 32.0925 13.4802C32.0925 13.8996 31.9291 14.302 31.6383 14.5986C31.3475 14.8952 30.9531 15.0618 30.5418 15.0618C30.1306 15.0618 29.7361 14.8952 29.4453 14.5986C29.1545 14.302 28.9912 13.8996 28.9912 13.4802ZM18.912 11.8985C18.5007 11.8985 18.1063 12.0651 17.8155 12.3618C17.5247 12.6584 17.3613 13.0607 17.3613 13.4802C17.3613 13.8996 17.5247 14.302 17.8155 14.5986C18.1063 14.8952 18.5007 15.0618 18.912 15.0618C19.3232 15.0618 19.7176 14.8952 20.0084 14.5986C20.2992 14.302 20.4626 13.8996 20.4626 13.4802C20.4626 13.0607 20.2992 12.6584 20.0084 12.3618C19.7176 12.0651 19.3232 11.8985 18.912 11.8985Z">
                        </path>
                        <path
                          d="M11 8.14151C11 8.03664 11.0408 7.93606 11.1135 7.86191C11.1862 7.78775 11.2848 7.74609 11.3877 7.74609H15.7489C15.8517 7.74609 15.9503 7.78775 16.023 7.86191C16.0957 7.93606 16.1365 8.03664 16.1365 8.14151C16.1365 8.24638 16.0957 8.34696 16.023 8.42111C15.9503 8.49527 15.8517 8.53693 15.7489 8.53693H11.3877C11.2848 8.53693 11.1862 8.49527 11.1135 8.42111C11.0408 8.34696 11 8.24638 11 8.14151ZM26.6836 8.65278C26.7563 8.72694 26.7971 8.82749 26.7971 8.93234C26.7971 9.03719 26.7563 9.13775 26.6836 9.2119L26.6532 9.24294C26.2897 9.61367 25.7968 9.82197 25.2828 9.82203H19.1409C19.0381 9.82203 18.9395 9.78037 18.8668 9.70622C18.7941 9.63206 18.7532 9.53149 18.7532 9.42662C18.7532 9.32174 18.7941 9.22117 18.8668 9.14701C18.9395 9.07286 19.0381 9.0312 19.1409 9.0312H25.2826C25.4354 9.03122 25.5866 9.00055 25.7277 8.94095C25.8688 8.88134 25.997 8.79397 26.105 8.68382L26.1355 8.65278C26.2082 8.57866 26.3068 8.53701 26.4096 8.53701C26.5123 8.53701 26.6109 8.57866 26.6836 8.65278ZM19.5286 17.7304C19.5286 17.6255 19.5694 17.5249 19.6421 17.4508C19.7148 17.3766 19.8134 17.335 19.9162 17.335H21.5638C21.6666 17.335 21.7652 17.3766 21.8379 17.4508C21.9106 17.5249 21.9514 17.6255 21.9514 17.7304C21.9514 17.8352 21.9106 17.9358 21.8379 18.01C21.7652 18.0841 21.6666 18.1258 21.5638 18.1258H19.9162C19.8134 18.1258 19.7148 18.0841 19.6421 18.01C19.5694 17.9358 19.5286 17.8352 19.5286 17.7304ZM22.2422 17.7304C22.2422 17.6255 22.283 17.5249 22.3557 17.4508C22.4284 17.3766 22.527 17.335 22.6299 17.335H26.991C27.0939 17.335 27.1925 17.3766 27.2652 17.4508C27.3379 17.5249 27.3787 17.6255 27.3787 17.7304C27.3787 17.8352 27.3379 17.9358 27.2652 18.01C27.1925 18.0841 27.0939 18.1258 26.991 18.1258H22.6299C22.527 18.1258 22.4284 18.0841 22.3557 18.01C22.283 17.9358 22.2422 17.8352 22.2422 17.7304Z">
                        </path>
                      </svg>
                      View Details
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="product-card5 two">
                <div class="product-img">
                  <div class="product-price">
                    <span>$7,656.00</span>
                  </div>
                  <a href="#" class="fav">
                    <svg width="14" height="13" viewBox="0 0 14 14"
                         xmlns="http://www.w3.org/2000/svg">
                      <path
                        d="M7.00012 2.40453L6.37273 1.75966C4.90006 0.245917 2.19972 0.76829 1.22495 2.67141C0.767306 3.56653 0.664053 4.8589 1.4997 6.50827C2.30473 8.09639 3.97953 9.99864 7.00012 12.0706C10.0207 9.99864 11.6946 8.09639 12.5005 6.50827C13.3362 4.85803 13.2338 3.56653 12.7753 2.67141C11.8005 0.76829 9.10019 0.245042 7.62752 1.75879L7.00012 2.40453ZM7.00012 13.125C-6.41666 4.25953 2.86912 -2.65995 6.84612 1.00016C6.89862 1.04829 6.95024 1.09816 7.00012 1.14979C7.04949 1.09821 7.10087 1.04859 7.15413 1.00104C11.1302 -2.6617 20.4169 4.25865 7.00012 13.125Z">
                      </path>
                    </svg>
                  </a>
                  <div class="slider-btn-group">
                    <div class="product-stand-next swiper-arrow">
                      <svg width="8" height="13" viewBox="0 0 8 13"
                           xmlns="http://www.w3.org/2000/svg">
                        <path d="M0 6.50008L8 0L2.90909 6.50008L8 13L0 6.50008Z"></path>
                      </svg>
                    </div>
                    <div class="product-stand-prev swiper-arrow">
                      <svg width="8" height="13" viewBox="0 0 8 13"
                           xmlns="http://www.w3.org/2000/svg">
                        <path d="M8 6.50008L0 0L5.09091 6.50008L0 13L8 6.50008Z"></path>
                      </svg>
                    </div>
                  </div>
                  <div class="swiper product-img-slider">
                    <div class="swiper-wrapper">
                      <div class="swiper-slide">
                        <img src="images/feature-car-01.png" alt="image">
                      </div>
                      <div class="swiper-slide">
                        <img src="images/feature-car-01.png" alt="image">
                      </div>
                      <div class="swiper-slide">
                        <img src="images/feature-car-01.png" alt="image">
                      </div>
                      <div class="swiper-slide">
                        <img src="images/feature-car-01.png" alt="image">
                      </div>
                    </div>
                  </div>
                </div>
                <div class="product-content">
                  <h6><a href="car-deatils.html">Mercedes-Benz Class-2023</a></h6>
                  <div class="exp-date">
                    <p>Expected Date <span>02 April, 2023</span></p>
                  </div>
                  <div class="content-btm">
                    <a class="view-btn2" href="car-deatils.html">
                      <svg width="35" height="21" viewBox="0 0 35 21"
                           xmlns="http://www.w3.org/2000/svg">
                        <path d="M11 20C5.47715 20 1 15.7467 1 10.5C1 5.25329 5.47715 1 11 1"
                              stroke-linecap="round"></path>
                        <path
                          d="M14.2597 3C14.1569 3 14.0583 3.04166 13.9856 3.11582C13.9129 3.18997 13.8721 3.29055 13.8721 3.39542C13.8721 3.50029 13.9129 3.60086 13.9856 3.67502C14.0583 3.74917 14.1569 3.79083 14.2597 3.79083H15.8104C15.9132 3.79083 16.0118 3.74917 16.0845 3.67502C16.1572 3.60086 16.198 3.50029 16.198 3.39542C16.198 3.29055 16.1572 3.18997 16.0845 3.11582C16.0118 3.04166 15.9132 3 15.8104 3H14.2597ZM16.7795 3C16.6767 3 16.5781 3.04166 16.5054 3.11582C16.4327 3.18997 16.3919 3.29055 16.3919 3.39542C16.3919 3.50029 16.4327 3.60086 16.5054 3.67502C16.5781 3.74917 16.6767 3.79083 16.7795 3.79083H21.3346C21.4374 3.79083 21.536 3.74917 21.6087 3.67502C21.6814 3.60086 21.7222 3.50029 21.7222 3.39542C21.7222 3.29055 21.6814 3.18997 21.6087 3.11582C21.536 3.04166 21.4374 3 21.3346 3H16.7795Z">
                        </path>
                        <path fill-rule="evenodd" clip-rule="evenodd"
                              d="M15.2292 5.76953C15.1264 5.76953 15.0278 5.81119 14.9551 5.88535C14.8824 5.9595 14.8415 6.06008 14.8415 6.16495C14.8415 6.26982 14.8824 6.3704 14.9551 6.44455C15.0278 6.51871 15.1264 6.56037 15.2292 6.56037H24.1454C25.653 6.56037 26.5822 6.79999 27.3256 7.18493C27.9575 7.51194 28.4672 7.9467 29.1055 8.49119C29.2375 8.60368 29.3749 8.72073 29.5201 8.84271L29.6101 8.91824L29.726 8.93069C33.2653 9.31069 34.0622 10.5309 34.2246 11.1557V12.6893C34.2246 12.7942 34.1838 12.8948 34.1111 12.9689C34.0384 13.0431 33.9398 13.0847 33.8369 13.0847H32.8356C32.6511 11.9627 31.6943 11.1077 30.5418 11.1077C29.3893 11.1077 28.4325 11.9627 28.248 13.0847H21.2058C21.0212 11.9627 20.0645 11.1077 18.912 11.1077C17.7594 11.1077 16.8027 11.9627 16.6182 13.0847H14.7446C14.6418 13.0847 14.5432 13.1264 14.4705 13.2006C14.3978 13.2747 14.3569 13.3753 14.3569 13.4802C14.3569 13.585 14.3978 13.6856 14.4705 13.7598C14.5432 13.8339 14.6418 13.8756 14.7446 13.8756H16.6182C16.8027 14.9976 17.7594 15.8527 18.912 15.8527C20.0645 15.8527 21.0212 14.9976 21.2058 13.8756H28.248C28.4325 14.9976 29.3893 15.8527 30.5418 15.8527C31.6943 15.8527 32.6511 14.9976 32.8356 13.8756H33.8369C34.1454 13.8756 34.4412 13.7506 34.6593 13.5281C34.8774 13.3057 34.9999 13.0039 34.9999 12.6893V11.0626L34.99 11.0187C34.7431 9.92754 33.5791 8.57502 29.9239 8.15706C29.8217 8.07086 29.7215 7.98505 29.6227 7.90063C28.9828 7.35397 28.3942 6.851 27.6766 6.4795C26.7966 6.02418 25.7391 5.76953 24.1454 5.76953H15.2292ZM28.9912 13.4802C28.9912 13.0607 29.1545 12.6584 29.4453 12.3618C29.7361 12.0651 30.1306 11.8985 30.5418 11.8985C30.9531 11.8985 31.3475 12.0651 31.6383 12.3618C31.9291 12.6584 32.0925 13.0607 32.0925 13.4802C32.0925 13.8996 31.9291 14.302 31.6383 14.5986C31.3475 14.8952 30.9531 15.0618 30.5418 15.0618C30.1306 15.0618 29.7361 14.8952 29.4453 14.5986C29.1545 14.302 28.9912 13.8996 28.9912 13.4802ZM18.912 11.8985C18.5007 11.8985 18.1063 12.0651 17.8155 12.3618C17.5247 12.6584 17.3613 13.0607 17.3613 13.4802C17.3613 13.8996 17.5247 14.302 17.8155 14.5986C18.1063 14.8952 18.5007 15.0618 18.912 15.0618C19.3232 15.0618 19.7176 14.8952 20.0084 14.5986C20.2992 14.302 20.4626 13.8996 20.4626 13.4802C20.4626 13.0607 20.2992 12.6584 20.0084 12.3618C19.7176 12.0651 19.3232 11.8985 18.912 11.8985Z">
                        </path>
                        <path
                          d="M11 8.14151C11 8.03664 11.0408 7.93606 11.1135 7.86191C11.1862 7.78775 11.2848 7.74609 11.3877 7.74609H15.7489C15.8517 7.74609 15.9503 7.78775 16.023 7.86191C16.0957 7.93606 16.1365 8.03664 16.1365 8.14151C16.1365 8.24638 16.0957 8.34696 16.023 8.42111C15.9503 8.49527 15.8517 8.53693 15.7489 8.53693H11.3877C11.2848 8.53693 11.1862 8.49527 11.1135 8.42111C11.0408 8.34696 11 8.24638 11 8.14151ZM26.6836 8.65278C26.7563 8.72694 26.7971 8.82749 26.7971 8.93234C26.7971 9.03719 26.7563 9.13775 26.6836 9.2119L26.6532 9.24294C26.2897 9.61367 25.7968 9.82197 25.2828 9.82203H19.1409C19.0381 9.82203 18.9395 9.78037 18.8668 9.70622C18.7941 9.63206 18.7532 9.53149 18.7532 9.42662C18.7532 9.32174 18.7941 9.22117 18.8668 9.14701C18.9395 9.07286 19.0381 9.0312 19.1409 9.0312H25.2826C25.4354 9.03122 25.5866 9.00055 25.7277 8.94095C25.8688 8.88134 25.997 8.79397 26.105 8.68382L26.1355 8.65278C26.2082 8.57866 26.3068 8.53701 26.4096 8.53701C26.5123 8.53701 26.6109 8.57866 26.6836 8.65278ZM19.5286 17.7304C19.5286 17.6255 19.5694 17.5249 19.6421 17.4508C19.7148 17.3766 19.8134 17.335 19.9162 17.335H21.5638C21.6666 17.335 21.7652 17.3766 21.8379 17.4508C21.9106 17.5249 21.9514 17.6255 21.9514 17.7304C21.9514 17.8352 21.9106 17.9358 21.8379 18.01C21.7652 18.0841 21.6666 18.1258 21.5638 18.1258H19.9162C19.8134 18.1258 19.7148 18.0841 19.6421 18.01C19.5694 17.9358 19.5286 17.8352 19.5286 17.7304ZM22.2422 17.7304C22.2422 17.6255 22.283 17.5249 22.3557 17.4508C22.4284 17.3766 22.527 17.335 22.6299 17.335H26.991C27.0939 17.335 27.1925 17.3766 27.2652 17.4508C27.3379 17.5249 27.3787 17.6255 27.3787 17.7304C27.3787 17.8352 27.3379 17.9358 27.2652 18.01C27.1925 18.0841 27.0939 18.1258 26.991 18.1258H22.6299C22.527 18.1258 22.4284 18.0841 22.3557 18.01C22.283 17.9358 22.2422 17.8352 22.2422 17.7304Z">
                        </path>
                      </svg>
                      View Details
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="product-card5 two">
                <div class="product-img">
                  <div class="product-price">
                    <span>$7,656.00</span>
                  </div>
                  <a href="#" class="fav">
                    <svg width="14" height="13" viewBox="0 0 14 14"
                         xmlns="http://www.w3.org/2000/svg">
                      <path
                        d="M7.00012 2.40453L6.37273 1.75966C4.90006 0.245917 2.19972 0.76829 1.22495 2.67141C0.767306 3.56653 0.664053 4.8589 1.4997 6.50827C2.30473 8.09639 3.97953 9.99864 7.00012 12.0706C10.0207 9.99864 11.6946 8.09639 12.5005 6.50827C13.3362 4.85803 13.2338 3.56653 12.7753 2.67141C11.8005 0.76829 9.10019 0.245042 7.62752 1.75879L7.00012 2.40453ZM7.00012 13.125C-6.41666 4.25953 2.86912 -2.65995 6.84612 1.00016C6.89862 1.04829 6.95024 1.09816 7.00012 1.14979C7.04949 1.09821 7.10087 1.04859 7.15413 1.00104C11.1302 -2.6617 20.4169 4.25865 7.00012 13.125Z">
                      </path>
                    </svg>
                  </a>
                  <div class="slider-btn-group">
                    <div class="product-stand-next swiper-arrow">
                      <svg width="8" height="13" viewBox="0 0 8 13"
                           xmlns="http://www.w3.org/2000/svg">
                        <path d="M0 6.50008L8 0L2.90909 6.50008L8 13L0 6.50008Z"></path>
                      </svg>
                    </div>
                    <div class="product-stand-prev swiper-arrow">
                      <svg width="8" height="13" viewBox="0 0 8 13"
                           xmlns="http://www.w3.org/2000/svg">
                        <path d="M8 6.50008L0 0L5.09091 6.50008L0 13L8 6.50008Z"></path>
                      </svg>
                    </div>
                  </div>
                  <div class="swiper product-img-slider">
                    <div class="swiper-wrapper">
                      <div class="swiper-slide">
                        <img src="images/feature-car-02.png" alt="image">
                      </div>
                      <div class="swiper-slide">
                        <img src="images/feature-car-02.png" alt="image">
                      </div>
                      <div class="swiper-slide">
                        <img src="images/feature-car-02.png" alt="image">
                      </div>
                      <div class="swiper-slide">
                        <img src="images/feature-car-02.png" alt="image">
                      </div>
                    </div>
                  </div>
                </div>
                <div class="product-content">
                  <h6><a href="car-deatils.html">Nissan Altima S-2022</a></h6>
                  <div class="exp-date">
                    <p>Expected Date <span>02 April, 2023</span></p>
                  </div>
                  <div class="content-btm">
                    <a class="view-btn2" href="car-deatils.html">
                      <svg width="35" height="21" viewBox="0 0 35 21"
                           xmlns="http://www.w3.org/2000/svg">
                        <path d="M11 20C5.47715 20 1 15.7467 1 10.5C1 5.25329 5.47715 1 11 1"
                              stroke-linecap="round"></path>
                        <path
                          d="M14.2597 3C14.1569 3 14.0583 3.04166 13.9856 3.11582C13.9129 3.18997 13.8721 3.29055 13.8721 3.39542C13.8721 3.50029 13.9129 3.60086 13.9856 3.67502C14.0583 3.74917 14.1569 3.79083 14.2597 3.79083H15.8104C15.9132 3.79083 16.0118 3.74917 16.0845 3.67502C16.1572 3.60086 16.198 3.50029 16.198 3.39542C16.198 3.29055 16.1572 3.18997 16.0845 3.11582C16.0118 3.04166 15.9132 3 15.8104 3H14.2597ZM16.7795 3C16.6767 3 16.5781 3.04166 16.5054 3.11582C16.4327 3.18997 16.3919 3.29055 16.3919 3.39542C16.3919 3.50029 16.4327 3.60086 16.5054 3.67502C16.5781 3.74917 16.6767 3.79083 16.7795 3.79083H21.3346C21.4374 3.79083 21.536 3.74917 21.6087 3.67502C21.6814 3.60086 21.7222 3.50029 21.7222 3.39542C21.7222 3.29055 21.6814 3.18997 21.6087 3.11582C21.536 3.04166 21.4374 3 21.3346 3H16.7795Z">
                        </path>
                        <path fill-rule="evenodd" clip-rule="evenodd"
                              d="M15.2292 5.76953C15.1264 5.76953 15.0278 5.81119 14.9551 5.88535C14.8824 5.9595 14.8415 6.06008 14.8415 6.16495C14.8415 6.26982 14.8824 6.3704 14.9551 6.44455C15.0278 6.51871 15.1264 6.56037 15.2292 6.56037H24.1454C25.653 6.56037 26.5822 6.79999 27.3256 7.18493C27.9575 7.51194 28.4672 7.9467 29.1055 8.49119C29.2375 8.60368 29.3749 8.72073 29.5201 8.84271L29.6101 8.91824L29.726 8.93069C33.2653 9.31069 34.0622 10.5309 34.2246 11.1557V12.6893C34.2246 12.7942 34.1838 12.8948 34.1111 12.9689C34.0384 13.0431 33.9398 13.0847 33.8369 13.0847H32.8356C32.6511 11.9627 31.6943 11.1077 30.5418 11.1077C29.3893 11.1077 28.4325 11.9627 28.248 13.0847H21.2058C21.0212 11.9627 20.0645 11.1077 18.912 11.1077C17.7594 11.1077 16.8027 11.9627 16.6182 13.0847H14.7446C14.6418 13.0847 14.5432 13.1264 14.4705 13.2006C14.3978 13.2747 14.3569 13.3753 14.3569 13.4802C14.3569 13.585 14.3978 13.6856 14.4705 13.7598C14.5432 13.8339 14.6418 13.8756 14.7446 13.8756H16.6182C16.8027 14.9976 17.7594 15.8527 18.912 15.8527C20.0645 15.8527 21.0212 14.9976 21.2058 13.8756H28.248C28.4325 14.9976 29.3893 15.8527 30.5418 15.8527C31.6943 15.8527 32.6511 14.9976 32.8356 13.8756H33.8369C34.1454 13.8756 34.4412 13.7506 34.6593 13.5281C34.8774 13.3057 34.9999 13.0039 34.9999 12.6893V11.0626L34.99 11.0187C34.7431 9.92754 33.5791 8.57502 29.9239 8.15706C29.8217 8.07086 29.7215 7.98505 29.6227 7.90063C28.9828 7.35397 28.3942 6.851 27.6766 6.4795C26.7966 6.02418 25.7391 5.76953 24.1454 5.76953H15.2292ZM28.9912 13.4802C28.9912 13.0607 29.1545 12.6584 29.4453 12.3618C29.7361 12.0651 30.1306 11.8985 30.5418 11.8985C30.9531 11.8985 31.3475 12.0651 31.6383 12.3618C31.9291 12.6584 32.0925 13.0607 32.0925 13.4802C32.0925 13.8996 31.9291 14.302 31.6383 14.5986C31.3475 14.8952 30.9531 15.0618 30.5418 15.0618C30.1306 15.0618 29.7361 14.8952 29.4453 14.5986C29.1545 14.302 28.9912 13.8996 28.9912 13.4802ZM18.912 11.8985C18.5007 11.8985 18.1063 12.0651 17.8155 12.3618C17.5247 12.6584 17.3613 13.0607 17.3613 13.4802C17.3613 13.8996 17.5247 14.302 17.8155 14.5986C18.1063 14.8952 18.5007 15.0618 18.912 15.0618C19.3232 15.0618 19.7176 14.8952 20.0084 14.5986C20.2992 14.302 20.4626 13.8996 20.4626 13.4802C20.4626 13.0607 20.2992 12.6584 20.0084 12.3618C19.7176 12.0651 19.3232 11.8985 18.912 11.8985Z">
                        </path>
                        <path
                          d="M11 8.14151C11 8.03664 11.0408 7.93606 11.1135 7.86191C11.1862 7.78775 11.2848 7.74609 11.3877 7.74609H15.7489C15.8517 7.74609 15.9503 7.78775 16.023 7.86191C16.0957 7.93606 16.1365 8.03664 16.1365 8.14151C16.1365 8.24638 16.0957 8.34696 16.023 8.42111C15.9503 8.49527 15.8517 8.53693 15.7489 8.53693H11.3877C11.2848 8.53693 11.1862 8.49527 11.1135 8.42111C11.0408 8.34696 11 8.24638 11 8.14151ZM26.6836 8.65278C26.7563 8.72694 26.7971 8.82749 26.7971 8.93234C26.7971 9.03719 26.7563 9.13775 26.6836 9.2119L26.6532 9.24294C26.2897 9.61367 25.7968 9.82197 25.2828 9.82203H19.1409C19.0381 9.82203 18.9395 9.78037 18.8668 9.70622C18.7941 9.63206 18.7532 9.53149 18.7532 9.42662C18.7532 9.32174 18.7941 9.22117 18.8668 9.14701C18.9395 9.07286 19.0381 9.0312 19.1409 9.0312H25.2826C25.4354 9.03122 25.5866 9.00055 25.7277 8.94095C25.8688 8.88134 25.997 8.79397 26.105 8.68382L26.1355 8.65278C26.2082 8.57866 26.3068 8.53701 26.4096 8.53701C26.5123 8.53701 26.6109 8.57866 26.6836 8.65278ZM19.5286 17.7304C19.5286 17.6255 19.5694 17.5249 19.6421 17.4508C19.7148 17.3766 19.8134 17.335 19.9162 17.335H21.5638C21.6666 17.335 21.7652 17.3766 21.8379 17.4508C21.9106 17.5249 21.9514 17.6255 21.9514 17.7304C21.9514 17.8352 21.9106 17.9358 21.8379 18.01C21.7652 18.0841 21.6666 18.1258 21.5638 18.1258H19.9162C19.8134 18.1258 19.7148 18.0841 19.6421 18.01C19.5694 17.9358 19.5286 17.8352 19.5286 17.7304ZM22.2422 17.7304C22.2422 17.6255 22.283 17.5249 22.3557 17.4508C22.4284 17.3766 22.527 17.335 22.6299 17.335H26.991C27.0939 17.335 27.1925 17.3766 27.2652 17.4508C27.3379 17.5249 27.3787 17.6255 27.3787 17.7304C27.3787 17.8352 27.3379 17.9358 27.2652 18.01C27.1925 18.0841 27.0939 18.1258 26.991 18.1258H22.6299C22.527 18.1258 22.4284 18.0841 22.3557 18.01C22.283 17.9358 22.2422 17.8352 22.2422 17.7304Z">
                        </path>
                      </svg>
                      View Details
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="product-card5 two">
                <div class="product-img">
                  <div class="product-price">
                    <span>$7,656.00</span>
                  </div>
                  <a href="#" class="fav">
                    <svg width="14" height="13" viewBox="0 0 14 14"
                         xmlns="http://www.w3.org/2000/svg">
                      <path
                        d="M7.00012 2.40453L6.37273 1.75966C4.90006 0.245917 2.19972 0.76829 1.22495 2.67141C0.767306 3.56653 0.664053 4.8589 1.4997 6.50827C2.30473 8.09639 3.97953 9.99864 7.00012 12.0706C10.0207 9.99864 11.6946 8.09639 12.5005 6.50827C13.3362 4.85803 13.2338 3.56653 12.7753 2.67141C11.8005 0.76829 9.10019 0.245042 7.62752 1.75879L7.00012 2.40453ZM7.00012 13.125C-6.41666 4.25953 2.86912 -2.65995 6.84612 1.00016C6.89862 1.04829 6.95024 1.09816 7.00012 1.14979C7.04949 1.09821 7.10087 1.04859 7.15413 1.00104C11.1302 -2.6617 20.4169 4.25865 7.00012 13.125Z">
                      </path>
                    </svg>
                  </a>
                  <div class="slider-btn-group">
                    <div class="product-stand-next swiper-arrow">
                      <svg width="8" height="13" viewBox="0 0 8 13"
                           xmlns="http://www.w3.org/2000/svg">
                        <path d="M0 6.50008L8 0L2.90909 6.50008L8 13L0 6.50008Z"></path>
                      </svg>
                    </div>
                    <div class="product-stand-prev swiper-arrow">
                      <svg width="8" height="13" viewBox="0 0 8 13"
                           xmlns="http://www.w3.org/2000/svg">
                        <path d="M8 6.50008L0 0L5.09091 6.50008L0 13L8 6.50008Z"></path>
                      </svg>
                    </div>
                  </div>
                  <div class="swiper product-img-slider">
                    <div class="swiper-wrapper">
                      <div class="swiper-slide">
                        <img src="images/feature-car-03.png" alt="image">
                      </div>
                      <div class="swiper-slide">
                        <img src="images/feature-car-03.png" alt="image">
                      </div>
                      <div class="swiper-slide">
                        <img src="images/feature-car-03.png" alt="image">
                      </div>
                      <div class="swiper-slide">
                        <img src="images/feature-car-03.png" alt="image">
                      </div>
                    </div>
                  </div>
                </div>
                <div class="product-content">
                  <h6><a href="car-deatils.html">Hyundai Sonata-2022</a></h6>
                  <div class="exp-date">
                    <p>Expected Date <span>02 April, 2023</span></p>
                  </div>
                  <div class="content-btm">
                    <a class="view-btn2" href="car-deatils.html">
                      <svg width="35" height="21" viewBox="0 0 35 21"
                           xmlns="http://www.w3.org/2000/svg">
                        <path d="M11 20C5.47715 20 1 15.7467 1 10.5C1 5.25329 5.47715 1 11 1"
                              stroke-linecap="round"></path>
                        <path
                          d="M14.2597 3C14.1569 3 14.0583 3.04166 13.9856 3.11582C13.9129 3.18997 13.8721 3.29055 13.8721 3.39542C13.8721 3.50029 13.9129 3.60086 13.9856 3.67502C14.0583 3.74917 14.1569 3.79083 14.2597 3.79083H15.8104C15.9132 3.79083 16.0118 3.74917 16.0845 3.67502C16.1572 3.60086 16.198 3.50029 16.198 3.39542C16.198 3.29055 16.1572 3.18997 16.0845 3.11582C16.0118 3.04166 15.9132 3 15.8104 3H14.2597ZM16.7795 3C16.6767 3 16.5781 3.04166 16.5054 3.11582C16.4327 3.18997 16.3919 3.29055 16.3919 3.39542C16.3919 3.50029 16.4327 3.60086 16.5054 3.67502C16.5781 3.74917 16.6767 3.79083 16.7795 3.79083H21.3346C21.4374 3.79083 21.536 3.74917 21.6087 3.67502C21.6814 3.60086 21.7222 3.50029 21.7222 3.39542C21.7222 3.29055 21.6814 3.18997 21.6087 3.11582C21.536 3.04166 21.4374 3 21.3346 3H16.7795Z">
                        </path>
                        <path fill-rule="evenodd" clip-rule="evenodd"
                              d="M15.2292 5.76953C15.1264 5.76953 15.0278 5.81119 14.9551 5.88535C14.8824 5.9595 14.8415 6.06008 14.8415 6.16495C14.8415 6.26982 14.8824 6.3704 14.9551 6.44455C15.0278 6.51871 15.1264 6.56037 15.2292 6.56037H24.1454C25.653 6.56037 26.5822 6.79999 27.3256 7.18493C27.9575 7.51194 28.4672 7.9467 29.1055 8.49119C29.2375 8.60368 29.3749 8.72073 29.5201 8.84271L29.6101 8.91824L29.726 8.93069C33.2653 9.31069 34.0622 10.5309 34.2246 11.1557V12.6893C34.2246 12.7942 34.1838 12.8948 34.1111 12.9689C34.0384 13.0431 33.9398 13.0847 33.8369 13.0847H32.8356C32.6511 11.9627 31.6943 11.1077 30.5418 11.1077C29.3893 11.1077 28.4325 11.9627 28.248 13.0847H21.2058C21.0212 11.9627 20.0645 11.1077 18.912 11.1077C17.7594 11.1077 16.8027 11.9627 16.6182 13.0847H14.7446C14.6418 13.0847 14.5432 13.1264 14.4705 13.2006C14.3978 13.2747 14.3569 13.3753 14.3569 13.4802C14.3569 13.585 14.3978 13.6856 14.4705 13.7598C14.5432 13.8339 14.6418 13.8756 14.7446 13.8756H16.6182C16.8027 14.9976 17.7594 15.8527 18.912 15.8527C20.0645 15.8527 21.0212 14.9976 21.2058 13.8756H28.248C28.4325 14.9976 29.3893 15.8527 30.5418 15.8527C31.6943 15.8527 32.6511 14.9976 32.8356 13.8756H33.8369C34.1454 13.8756 34.4412 13.7506 34.6593 13.5281C34.8774 13.3057 34.9999 13.0039 34.9999 12.6893V11.0626L34.99 11.0187C34.7431 9.92754 33.5791 8.57502 29.9239 8.15706C29.8217 8.07086 29.7215 7.98505 29.6227 7.90063C28.9828 7.35397 28.3942 6.851 27.6766 6.4795C26.7966 6.02418 25.7391 5.76953 24.1454 5.76953H15.2292ZM28.9912 13.4802C28.9912 13.0607 29.1545 12.6584 29.4453 12.3618C29.7361 12.0651 30.1306 11.8985 30.5418 11.8985C30.9531 11.8985 31.3475 12.0651 31.6383 12.3618C31.9291 12.6584 32.0925 13.0607 32.0925 13.4802C32.0925 13.8996 31.9291 14.302 31.6383 14.5986C31.3475 14.8952 30.9531 15.0618 30.5418 15.0618C30.1306 15.0618 29.7361 14.8952 29.4453 14.5986C29.1545 14.302 28.9912 13.8996 28.9912 13.4802ZM18.912 11.8985C18.5007 11.8985 18.1063 12.0651 17.8155 12.3618C17.5247 12.6584 17.3613 13.0607 17.3613 13.4802C17.3613 13.8996 17.5247 14.302 17.8155 14.5986C18.1063 14.8952 18.5007 15.0618 18.912 15.0618C19.3232 15.0618 19.7176 14.8952 20.0084 14.5986C20.2992 14.302 20.4626 13.8996 20.4626 13.4802C20.4626 13.0607 20.2992 12.6584 20.0084 12.3618C19.7176 12.0651 19.3232 11.8985 18.912 11.8985Z">
                        </path>
                        <path
                          d="M11 8.14151C11 8.03664 11.0408 7.93606 11.1135 7.86191C11.1862 7.78775 11.2848 7.74609 11.3877 7.74609H15.7489C15.8517 7.74609 15.9503 7.78775 16.023 7.86191C16.0957 7.93606 16.1365 8.03664 16.1365 8.14151C16.1365 8.24638 16.0957 8.34696 16.023 8.42111C15.9503 8.49527 15.8517 8.53693 15.7489 8.53693H11.3877C11.2848 8.53693 11.1862 8.49527 11.1135 8.42111C11.0408 8.34696 11 8.24638 11 8.14151ZM26.6836 8.65278C26.7563 8.72694 26.7971 8.82749 26.7971 8.93234C26.7971 9.03719 26.7563 9.13775 26.6836 9.2119L26.6532 9.24294C26.2897 9.61367 25.7968 9.82197 25.2828 9.82203H19.1409C19.0381 9.82203 18.9395 9.78037 18.8668 9.70622C18.7941 9.63206 18.7532 9.53149 18.7532 9.42662C18.7532 9.32174 18.7941 9.22117 18.8668 9.14701C18.9395 9.07286 19.0381 9.0312 19.1409 9.0312H25.2826C25.4354 9.03122 25.5866 9.00055 25.7277 8.94095C25.8688 8.88134 25.997 8.79397 26.105 8.68382L26.1355 8.65278C26.2082 8.57866 26.3068 8.53701 26.4096 8.53701C26.5123 8.53701 26.6109 8.57866 26.6836 8.65278ZM19.5286 17.7304C19.5286 17.6255 19.5694 17.5249 19.6421 17.4508C19.7148 17.3766 19.8134 17.335 19.9162 17.335H21.5638C21.6666 17.335 21.7652 17.3766 21.8379 17.4508C21.9106 17.5249 21.9514 17.6255 21.9514 17.7304C21.9514 17.8352 21.9106 17.9358 21.8379 18.01C21.7652 18.0841 21.6666 18.1258 21.5638 18.1258H19.9162C19.8134 18.1258 19.7148 18.0841 19.6421 18.01C19.5694 17.9358 19.5286 17.8352 19.5286 17.7304ZM22.2422 17.7304C22.2422 17.6255 22.283 17.5249 22.3557 17.4508C22.4284 17.3766 22.527 17.335 22.6299 17.335H26.991C27.0939 17.335 27.1925 17.3766 27.2652 17.4508C27.3379 17.5249 27.3787 17.6255 27.3787 17.7304C27.3787 17.8352 27.3379 17.9358 27.2652 18.01C27.1925 18.0841 27.0939 18.1258 26.991 18.1258H22.6299C22.527 18.1258 22.4284 18.0841 22.3557 18.01C22.283 17.9358 22.2422 17.8352 22.2422 17.7304Z">
                        </path>
                      </svg>
                      View Details
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="product-card5 two">
                <div class="product-img">
                  <div class="product-price">
                    <span>$7,656.00</span>
                  </div>
                  <a href="#" class="fav">
                    <svg width="14" height="13" viewBox="0 0 14 14"
                         xmlns="http://www.w3.org/2000/svg">
                      <path
                        d="M7.00012 2.40453L6.37273 1.75966C4.90006 0.245917 2.19972 0.76829 1.22495 2.67141C0.767306 3.56653 0.664053 4.8589 1.4997 6.50827C2.30473 8.09639 3.97953 9.99864 7.00012 12.0706C10.0207 9.99864 11.6946 8.09639 12.5005 6.50827C13.3362 4.85803 13.2338 3.56653 12.7753 2.67141C11.8005 0.76829 9.10019 0.245042 7.62752 1.75879L7.00012 2.40453ZM7.00012 13.125C-6.41666 4.25953 2.86912 -2.65995 6.84612 1.00016C6.89862 1.04829 6.95024 1.09816 7.00012 1.14979C7.04949 1.09821 7.10087 1.04859 7.15413 1.00104C11.1302 -2.6617 20.4169 4.25865 7.00012 13.125Z">
                      </path>
                    </svg>
                  </a>
                  <div class="slider-btn-group">
                    <div class="product-stand-next swiper-arrow">
                      <svg width="8" height="13" viewBox="0 0 8 13"
                           xmlns="http://www.w3.org/2000/svg">
                        <path d="M0 6.50008L8 0L2.90909 6.50008L8 13L0 6.50008Z"></path>
                      </svg>
                    </div>
                    <div class="product-stand-prev swiper-arrow">
                      <svg width="8" height="13" viewBox="0 0 8 13"
                           xmlns="http://www.w3.org/2000/svg">
                        <path d="M8 6.50008L0 0L5.09091 6.50008L0 13L8 6.50008Z"></path>
                      </svg>
                    </div>
                  </div>
                  <div class="swiper product-img-slider">
                    <div class="swiper-wrapper">
                      <div class="swiper-slide">
                        <img src="images/feature-car-04.png" alt="image">
                      </div>
                      <div class="swiper-slide">
                        <img src="images/feature-car-04.png" alt="image">
                      </div>
                      <div class="swiper-slide">
                        <img src="images/feature-car-04.png" alt="image">
                      </div>
                      <div class="swiper-slide">
                        <img src="images/feature-car-04.png" alt="image">
                      </div>
                    </div>
                  </div>
                </div>
                <div class="product-content">
                  <h6><a href="car-deatils.html">Tesla Model S-2023</a></h6>
                  <div class="exp-date">
                    <p>Expected Date <span>02 April, 2023</span></p>
                  </div>
                  <div class="content-btm">
                    <a class="view-btn2" href="car-deatils.html">
                      <svg width="35" height="21" viewBox="0 0 35 21"
                           xmlns="http://www.w3.org/2000/svg">
                        <path d="M11 20C5.47715 20 1 15.7467 1 10.5C1 5.25329 5.47715 1 11 1"
                              stroke-linecap="round"></path>
                        <path
                          d="M14.2597 3C14.1569 3 14.0583 3.04166 13.9856 3.11582C13.9129 3.18997 13.8721 3.29055 13.8721 3.39542C13.8721 3.50029 13.9129 3.60086 13.9856 3.67502C14.0583 3.74917 14.1569 3.79083 14.2597 3.79083H15.8104C15.9132 3.79083 16.0118 3.74917 16.0845 3.67502C16.1572 3.60086 16.198 3.50029 16.198 3.39542C16.198 3.29055 16.1572 3.18997 16.0845 3.11582C16.0118 3.04166 15.9132 3 15.8104 3H14.2597ZM16.7795 3C16.6767 3 16.5781 3.04166 16.5054 3.11582C16.4327 3.18997 16.3919 3.29055 16.3919 3.39542C16.3919 3.50029 16.4327 3.60086 16.5054 3.67502C16.5781 3.74917 16.6767 3.79083 16.7795 3.79083H21.3346C21.4374 3.79083 21.536 3.74917 21.6087 3.67502C21.6814 3.60086 21.7222 3.50029 21.7222 3.39542C21.7222 3.29055 21.6814 3.18997 21.6087 3.11582C21.536 3.04166 21.4374 3 21.3346 3H16.7795Z">
                        </path>
                        <path fill-rule="evenodd" clip-rule="evenodd"
                              d="M15.2292 5.76953C15.1264 5.76953 15.0278 5.81119 14.9551 5.88535C14.8824 5.9595 14.8415 6.06008 14.8415 6.16495C14.8415 6.26982 14.8824 6.3704 14.9551 6.44455C15.0278 6.51871 15.1264 6.56037 15.2292 6.56037H24.1454C25.653 6.56037 26.5822 6.79999 27.3256 7.18493C27.9575 7.51194 28.4672 7.9467 29.1055 8.49119C29.2375 8.60368 29.3749 8.72073 29.5201 8.84271L29.6101 8.91824L29.726 8.93069C33.2653 9.31069 34.0622 10.5309 34.2246 11.1557V12.6893C34.2246 12.7942 34.1838 12.8948 34.1111 12.9689C34.0384 13.0431 33.9398 13.0847 33.8369 13.0847H32.8356C32.6511 11.9627 31.6943 11.1077 30.5418 11.1077C29.3893 11.1077 28.4325 11.9627 28.248 13.0847H21.2058C21.0212 11.9627 20.0645 11.1077 18.912 11.1077C17.7594 11.1077 16.8027 11.9627 16.6182 13.0847H14.7446C14.6418 13.0847 14.5432 13.1264 14.4705 13.2006C14.3978 13.2747 14.3569 13.3753 14.3569 13.4802C14.3569 13.585 14.3978 13.6856 14.4705 13.7598C14.5432 13.8339 14.6418 13.8756 14.7446 13.8756H16.6182C16.8027 14.9976 17.7594 15.8527 18.912 15.8527C20.0645 15.8527 21.0212 14.9976 21.2058 13.8756H28.248C28.4325 14.9976 29.3893 15.8527 30.5418 15.8527C31.6943 15.8527 32.6511 14.9976 32.8356 13.8756H33.8369C34.1454 13.8756 34.4412 13.7506 34.6593 13.5281C34.8774 13.3057 34.9999 13.0039 34.9999 12.6893V11.0626L34.99 11.0187C34.7431 9.92754 33.5791 8.57502 29.9239 8.15706C29.8217 8.07086 29.7215 7.98505 29.6227 7.90063C28.9828 7.35397 28.3942 6.851 27.6766 6.4795C26.7966 6.02418 25.7391 5.76953 24.1454 5.76953H15.2292ZM28.9912 13.4802C28.9912 13.0607 29.1545 12.6584 29.4453 12.3618C29.7361 12.0651 30.1306 11.8985 30.5418 11.8985C30.9531 11.8985 31.3475 12.0651 31.6383 12.3618C31.9291 12.6584 32.0925 13.0607 32.0925 13.4802C32.0925 13.8996 31.9291 14.302 31.6383 14.5986C31.3475 14.8952 30.9531 15.0618 30.5418 15.0618C30.1306 15.0618 29.7361 14.8952 29.4453 14.5986C29.1545 14.302 28.9912 13.8996 28.9912 13.4802ZM18.912 11.8985C18.5007 11.8985 18.1063 12.0651 17.8155 12.3618C17.5247 12.6584 17.3613 13.0607 17.3613 13.4802C17.3613 13.8996 17.5247 14.302 17.8155 14.5986C18.1063 14.8952 18.5007 15.0618 18.912 15.0618C19.3232 15.0618 19.7176 14.8952 20.0084 14.5986C20.2992 14.302 20.4626 13.8996 20.4626 13.4802C20.4626 13.0607 20.2992 12.6584 20.0084 12.3618C19.7176 12.0651 19.3232 11.8985 18.912 11.8985Z">
                        </path>
                        <path
                          d="M11 8.14151C11 8.03664 11.0408 7.93606 11.1135 7.86191C11.1862 7.78775 11.2848 7.74609 11.3877 7.74609H15.7489C15.8517 7.74609 15.9503 7.78775 16.023 7.86191C16.0957 7.93606 16.1365 8.03664 16.1365 8.14151C16.1365 8.24638 16.0957 8.34696 16.023 8.42111C15.9503 8.49527 15.8517 8.53693 15.7489 8.53693H11.3877C11.2848 8.53693 11.1862 8.49527 11.1135 8.42111C11.0408 8.34696 11 8.24638 11 8.14151ZM26.6836 8.65278C26.7563 8.72694 26.7971 8.82749 26.7971 8.93234C26.7971 9.03719 26.7563 9.13775 26.6836 9.2119L26.6532 9.24294C26.2897 9.61367 25.7968 9.82197 25.2828 9.82203H19.1409C19.0381 9.82203 18.9395 9.78037 18.8668 9.70622C18.7941 9.63206 18.7532 9.53149 18.7532 9.42662C18.7532 9.32174 18.7941 9.22117 18.8668 9.14701C18.9395 9.07286 19.0381 9.0312 19.1409 9.0312H25.2826C25.4354 9.03122 25.5866 9.00055 25.7277 8.94095C25.8688 8.88134 25.997 8.79397 26.105 8.68382L26.1355 8.65278C26.2082 8.57866 26.3068 8.53701 26.4096 8.53701C26.5123 8.53701 26.6109 8.57866 26.6836 8.65278ZM19.5286 17.7304C19.5286 17.6255 19.5694 17.5249 19.6421 17.4508C19.7148 17.3766 19.8134 17.335 19.9162 17.335H21.5638C21.6666 17.335 21.7652 17.3766 21.8379 17.4508C21.9106 17.5249 21.9514 17.6255 21.9514 17.7304C21.9514 17.8352 21.9106 17.9358 21.8379 18.01C21.7652 18.0841 21.6666 18.1258 21.5638 18.1258H19.9162C19.8134 18.1258 19.7148 18.0841 19.6421 18.01C19.5694 17.9358 19.5286 17.8352 19.5286 17.7304ZM22.2422 17.7304C22.2422 17.6255 22.283 17.5249 22.3557 17.4508C22.4284 17.3766 22.527 17.335 22.6299 17.335H26.991C27.0939 17.335 27.1925 17.3766 27.2652 17.4508C27.3379 17.5249 27.3787 17.6255 27.3787 17.7304C27.3787 17.8352 27.3379 17.9358 27.2652 18.01C27.1925 18.0841 27.0939 18.1258 26.991 18.1258H22.6299C22.527 18.1258 22.4284 18.0841 22.3557 18.01C22.283 17.9358 22.2422 17.8352 22.2422 17.7304Z">
                        </path>
                      </svg>
                      View Details
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="trusted-partner-section mb-100">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="sub-title wow fadeInUp" data-wow-delay="200ms">
          <h6>Our Trusted Partners</h6>
          <div class="dash"></div>
        </div>
        <div class="partner-slider wow fadeInUp" data-wow-delay="300ms">
          <div class="marquee_text2">
            <img src="images/company-logo-01.png" alt="">
            <img src="images/company-logo-02.png" alt="">
            <img src="images/company-logo-03.png" alt="">
            <img src="images/company-logo-04.png" alt="">
            <img src="images/company-logo-05.png" alt="">
            <img src="images/company-logo-06.png" alt="">
            <img src="images/company-logo-01.png" alt="">
            <img src="images/company-logo-02.png" alt="">
            <img src="images/company-logo-03.png" alt="">
            <img src="images/company-logo-04.png" alt="">
            <img src="images/company-logo-05.png" alt="">
            <img src="images/company-logo-06.png" alt="">
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="home5-compare-car-section mb-100">
  <div class="modal compare-modal fade" id="compareModal01" tabindex="-1" aria-labelledby="compareModal01Label"
       aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="compareModal01Label">Comparision</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i
              class="bi bi-x"></i></button>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-lg-12">
              <div class="compare-top">
                <div class="single-car">
                  <div class="car-img">
                    <img src="images/compare-md-01.png" alt="car">
                  </div>
                  <div class="content text-center">
                    <h6 class="title"><a href="#">Mercedes-Benz C-Class-2023</a></h6>
                    <h6 class="price">$68, 219.000</h6>
                  </div>
                </div>
                <div class="vs">
                  <span>VS</span>
                </div>
                <div class="single-car">
                  <div class="car-img">
                    <img src="images/compare-md-02.png" alt="car">
                  </div>
                  <div class="content text-center">
                    <h6 class="title"><a href="#">Jeep Grand Cherokee-2023</a></h6>
                    <h6 class="price">$78, 729.000</h6>
                  </div>
                </div>
              </div>
              <div class="compare-btm">
                <div class="table-wrapper">
                  <table class="eg-table">
                    <thead>
                    <tr>
                      <th>SUV</th>
                      <th>TOYOTA</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                      <td><strong>Engine Speed:</strong> 34,563 cc</td>
                      <td><strong>Engine Speed:</strong> 35,533 cc</td>
                    </tr>
                    <tr>
                      <td><strong>Body Type:</strong> Convertible</td>
                      <td><strong>Body Type:</strong> Hatchback</td>
                    </tr>
                    <tr>
                      <td><strong>Max. Power:</strong> 140 kw 7000 rpm</td>
                      <td><strong>Max. Power:</strong> 142 kw 7000 rpm</td>
                    </tr>
                    <tr>
                      <td><strong>Steering:</strong> Right</td>
                      <td><strong>Steering:</strong> Left</td>
                    </tr>
                    <tr>
                      <td><strong>Engine Type:</strong> 1.5 L Gas Engine</td>
                      <td><strong>Engine Type:</strong> 1.55 L Petrol Engine</td>
                    </tr>
                    <tr>
                      <td><strong>No Of Cylinders:</strong> 04</td>
                      <td><strong>No Of Cylinders:</strong> 04</td>
                    </tr>
                    <tr>
                      <td><strong>Transmission:</strong> Automatic</td>
                      <td><strong>Transmission:</strong> Manual</td>
                    </tr>
                    <tr>
                      <td><strong>Fuel Type:</strong> Petrol</td>
                      <td><strong>Fuel Type:</strong> Gasoline</td>
                    </tr>
                    <tr>
                      <td><a class="primary-btn2" href="car-deatils.html">View Details</a></td>
                      <td><a class="primary-btn2" href="car-deatils.html">View Details</a></td>
                    </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row mb-50 wow fadeInUp" data-wow-delay="200ms">
      <div class="col-lg-12 d-flex align-items-end justify-content-between gap-3 flex-wrap">
        <div class="section-title-2">
          <h2>Comparing Cars</h2>
          <p>To get the most accurate and up-to-date information.</p>
        </div>
        <div class="slider-btn-and-exp-btn">
          <div class="explore-more-btn three">
            <a href="car-deatils.html">Explore More <i class="bi bi-arrow-right"></i></a>
          </div>
        </div>
      </div>
    </div>
    <div class="row g-4 justify-content-center">
      <div class="col-xl-6 wow fadeInUp" data-wow-delay="200ms">
        <div class="compare-card5">
          <button type="button" class="primary-btn3" data-bs-toggle="modal" data-bs-target="#compareModal01">
            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14">
              <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M2.54693 4.27346C3.03945 4.15021 3.47169 3.84203 3.76175 3.4073C4.05181 2.97257 4.17953 2.4415 4.12071 1.91474C4.06189 1.38797 3.82061 0.902101 3.44261 0.549202C3.0646 0.196303 2.57613 0.000892565 2.06975 9.59905e-07C1.56259 -0.000498882 1.07295 0.194226 0.693918 0.547147C0.314889 0.900069 0.072913 1.38657 0.0140025 1.91415C-0.044908 2.44173 0.0833555 2.97358 0.374403 3.40858C0.665451 3.84358 1.09898 4.15138 1.59257 4.27346V9.82902C1.59257 10.4918 1.84394 11.1274 2.29139 11.596C2.73883 12.0646 3.3457 12.3279 3.97849 12.3279H6.56419L5.78797 13.1409C5.74241 13.187 5.70609 13.2422 5.68111 13.3032C5.65613 13.3642 5.64299 13.4298 5.64247 13.4961C5.64195 13.5625 5.65405 13.6283 5.67808 13.6897C5.7021 13.7511 5.73755 13.8069 5.78238 13.8538C5.8272 13.9007 5.8805 13.9378 5.93915 13.9629C5.99781 13.988 6.06065 14.0006 6.12401 14C6.18737 13.9994 6.24998 13.9856 6.30819 13.9593C6.36639 13.9331 6.41903 13.895 6.46303 13.8473L8.05364 12.1813C8.143 12.0876 8.1932 11.9606 8.1932 11.8281C8.1932 11.6957 8.143 11.5687 8.05364 11.475L6.46303 9.80903C6.41934 9.75992 6.36666 9.72054 6.30813 9.69323C6.24959 9.66591 6.1864 9.65122 6.12233 9.65004C6.05826 9.64885 5.99462 9.6612 5.9352 9.68633C5.87578 9.71147 5.82181 9.74888 5.77649 9.79634C5.73118 9.8438 5.69546 9.90033 5.67146 9.96256C5.64746 10.0248 5.63567 10.0915 5.6368 10.1586C5.63793 10.2257 5.65196 10.2918 5.67804 10.3531C5.70412 10.4145 5.74172 10.4696 5.78861 10.5154L6.56483 11.3284H3.97849C3.59882 11.3284 3.23469 11.1704 2.96623 10.8892C2.69776 10.608 2.54693 10.2267 2.54693 9.82902V4.27346ZM2.06975 3.33187C2.21597 3.33187 2.36075 3.30171 2.49584 3.2431C2.63093 3.1845 2.75367 3.0986 2.85706 2.99031C2.96045 2.88203 3.04247 2.75347 3.09842 2.61198C3.15438 2.4705 3.18318 2.31886 3.18318 2.16572C3.18318 2.01258 3.15438 1.86093 3.09842 1.71945C3.04247 1.57796 2.96045 1.44941 2.85706 1.34112C2.75367 1.23283 2.63093 1.14694 2.49584 1.08833C2.36075 1.02973 2.21597 0.999562 2.06975 0.999562C1.77445 0.999562 1.49124 1.12242 1.28244 1.34112C1.07363 1.55982 0.95632 1.85643 0.95632 2.16572C0.95632 2.475 1.07363 2.77162 1.28244 2.99031C1.49124 3.20901 1.77445 3.33187 2.06975 3.33187ZM8.2127 0.85296C8.29699 0.758218 8.34288 0.632909 8.3407 0.503432C8.33852 0.373954 8.28844 0.250418 8.20101 0.15885C8.11358 0.0672815 7.99563 0.01483 7.87201 0.0125455C7.74838 0.010261 7.62874 0.058322 7.53828 0.146603L5.94767 1.81254C5.85831 1.90625 5.80811 2.03327 5.80811 2.16572C5.80811 2.29816 5.85831 2.42519 5.94767 2.5189L7.53828 4.18483C7.58197 4.23393 7.63465 4.27332 7.69318 4.30063C7.75172 4.32795 7.81491 4.34264 7.87898 4.34382C7.94305 4.34501 8.00669 4.33266 8.06611 4.30753C8.12553 4.28239 8.1795 4.24498 8.22482 4.19752C8.27013 4.15006 8.30585 4.09353 8.32985 4.0313C8.35385 3.96906 8.36564 3.90241 8.36451 3.8353C8.36338 3.7682 8.34935 3.70202 8.32327 3.64071C8.29719 3.5794 8.25959 3.52423 8.2127 3.47847L7.43648 2.6655H10.0228C10.2108 2.6655 10.397 2.70428 10.5707 2.77963C10.7443 2.85498 10.9022 2.96542 11.0351 3.10464C11.168 3.24387 11.2735 3.40916 11.3454 3.59107C11.4173 3.77297 11.4544 3.96794 11.4544 4.16484V9.7204C10.9611 9.8429 10.5279 10.1509 10.2371 10.5859C9.94635 11.0209 9.81824 11.5525 9.87712 12.0799C9.936 12.6073 10.1778 13.0937 10.5565 13.4467C10.9352 13.7997 11.4246 13.9947 11.9316 13.9947C12.4385 13.9947 12.9279 13.7997 13.3066 13.4467C13.6854 13.0937 13.9271 12.6073 13.986 12.0799C14.0449 11.5525 13.9168 11.0209 13.626 10.5859C13.3352 10.1509 12.9021 9.8429 12.4087 9.7204V4.16484C12.4087 3.50209 12.1574 2.86648 11.7099 2.39785C11.2625 1.92921 10.6556 1.66594 10.0228 1.66594H7.43712L8.2127 0.85296ZM10.8181 11.8281C10.8181 11.5189 10.9354 11.2222 11.1442 11.0035C11.3531 10.7849 11.6363 10.662 11.9316 10.662C12.2269 10.662 12.5101 10.7849 12.7189 11.0035C12.9277 11.2222 13.045 11.5189 13.045 11.8281C13.045 12.1374 12.9277 12.434 12.7189 12.6527C12.5101 12.8714 12.2269 12.9943 11.9316 12.9943C11.6363 12.9943 11.3531 12.8714 11.1442 12.6527C10.9354 12.434 10.8181 12.1374 10.8181 11.8281Z"></path>
            </svg>
            Compare Cars
          </button>
          <div class="single-compare">
            <div class="compare-img one">
              <img src="images/comoare-01.png" alt="img">
            </div>
            <div class="content one">
              <span>Toyota</span>
              <h6><a href="car-deatils.html">Toyota Camry-2023</a></h6>
              <div class="price">
                <span>$12,656.00</span>
              </div>
            </div>
          </div>
          <div class="single-compare">
            <div class="compare-img two">
              <img src="images/comoare-02.png" alt="img">
            </div>
            <div class="content">
              <span>SUV</span>
              <h6><a href="car-deatils.html">Chevrolet Corvette-2023</a></h6>
              <div class="price">
                <span>$11,656.00</span>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-6 wow fadeInUp" data-wow-delay="300ms">
        <div class="compare-card5">
          <button type="button" class="primary-btn3" data-bs-toggle="modal" data-bs-target="#compareModal01">
            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14">
              <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M2.54693 4.27346C3.03945 4.15021 3.47169 3.84203 3.76175 3.4073C4.05181 2.97257 4.17953 2.4415 4.12071 1.91474C4.06189 1.38797 3.82061 0.902101 3.44261 0.549202C3.0646 0.196303 2.57613 0.000892565 2.06975 9.59905e-07C1.56259 -0.000498882 1.07295 0.194226 0.693918 0.547147C0.314889 0.900069 0.072913 1.38657 0.0140025 1.91415C-0.044908 2.44173 0.0833555 2.97358 0.374403 3.40858C0.665451 3.84358 1.09898 4.15138 1.59257 4.27346V9.82902C1.59257 10.4918 1.84394 11.1274 2.29139 11.596C2.73883 12.0646 3.3457 12.3279 3.97849 12.3279H6.56419L5.78797 13.1409C5.74241 13.187 5.70609 13.2422 5.68111 13.3032C5.65613 13.3642 5.64299 13.4298 5.64247 13.4961C5.64195 13.5625 5.65405 13.6283 5.67808 13.6897C5.7021 13.7511 5.73755 13.8069 5.78238 13.8538C5.8272 13.9007 5.8805 13.9378 5.93915 13.9629C5.99781 13.988 6.06065 14.0006 6.12401 14C6.18737 13.9994 6.24998 13.9856 6.30819 13.9593C6.36639 13.9331 6.41903 13.895 6.46303 13.8473L8.05364 12.1813C8.143 12.0876 8.1932 11.9606 8.1932 11.8281C8.1932 11.6957 8.143 11.5687 8.05364 11.475L6.46303 9.80903C6.41934 9.75992 6.36666 9.72054 6.30813 9.69323C6.24959 9.66591 6.1864 9.65122 6.12233 9.65004C6.05826 9.64885 5.99462 9.6612 5.9352 9.68633C5.87578 9.71147 5.82181 9.74888 5.77649 9.79634C5.73118 9.8438 5.69546 9.90033 5.67146 9.96256C5.64746 10.0248 5.63567 10.0915 5.6368 10.1586C5.63793 10.2257 5.65196 10.2918 5.67804 10.3531C5.70412 10.4145 5.74172 10.4696 5.78861 10.5154L6.56483 11.3284H3.97849C3.59882 11.3284 3.23469 11.1704 2.96623 10.8892C2.69776 10.608 2.54693 10.2267 2.54693 9.82902V4.27346ZM2.06975 3.33187C2.21597 3.33187 2.36075 3.30171 2.49584 3.2431C2.63093 3.1845 2.75367 3.0986 2.85706 2.99031C2.96045 2.88203 3.04247 2.75347 3.09842 2.61198C3.15438 2.4705 3.18318 2.31886 3.18318 2.16572C3.18318 2.01258 3.15438 1.86093 3.09842 1.71945C3.04247 1.57796 2.96045 1.44941 2.85706 1.34112C2.75367 1.23283 2.63093 1.14694 2.49584 1.08833C2.36075 1.02973 2.21597 0.999562 2.06975 0.999562C1.77445 0.999562 1.49124 1.12242 1.28244 1.34112C1.07363 1.55982 0.95632 1.85643 0.95632 2.16572C0.95632 2.475 1.07363 2.77162 1.28244 2.99031C1.49124 3.20901 1.77445 3.33187 2.06975 3.33187ZM8.2127 0.85296C8.29699 0.758218 8.34288 0.632909 8.3407 0.503432C8.33852 0.373954 8.28844 0.250418 8.20101 0.15885C8.11358 0.0672815 7.99563 0.01483 7.87201 0.0125455C7.74838 0.010261 7.62874 0.058322 7.53828 0.146603L5.94767 1.81254C5.85831 1.90625 5.80811 2.03327 5.80811 2.16572C5.80811 2.29816 5.85831 2.42519 5.94767 2.5189L7.53828 4.18483C7.58197 4.23393 7.63465 4.27332 7.69318 4.30063C7.75172 4.32795 7.81491 4.34264 7.87898 4.34382C7.94305 4.34501 8.00669 4.33266 8.06611 4.30753C8.12553 4.28239 8.1795 4.24498 8.22482 4.19752C8.27013 4.15006 8.30585 4.09353 8.32985 4.0313C8.35385 3.96906 8.36564 3.90241 8.36451 3.8353C8.36338 3.7682 8.34935 3.70202 8.32327 3.64071C8.29719 3.5794 8.25959 3.52423 8.2127 3.47847L7.43648 2.6655H10.0228C10.2108 2.6655 10.397 2.70428 10.5707 2.77963C10.7443 2.85498 10.9022 2.96542 11.0351 3.10464C11.168 3.24387 11.2735 3.40916 11.3454 3.59107C11.4173 3.77297 11.4544 3.96794 11.4544 4.16484V9.7204C10.9611 9.8429 10.5279 10.1509 10.2371 10.5859C9.94635 11.0209 9.81824 11.5525 9.87712 12.0799C9.936 12.6073 10.1778 13.0937 10.5565 13.4467C10.9352 13.7997 11.4246 13.9947 11.9316 13.9947C12.4385 13.9947 12.9279 13.7997 13.3066 13.4467C13.6854 13.0937 13.9271 12.6073 13.986 12.0799C14.0449 11.5525 13.9168 11.0209 13.626 10.5859C13.3352 10.1509 12.9021 9.8429 12.4087 9.7204V4.16484C12.4087 3.50209 12.1574 2.86648 11.7099 2.39785C11.2625 1.92921 10.6556 1.66594 10.0228 1.66594H7.43712L8.2127 0.85296ZM10.8181 11.8281C10.8181 11.5189 10.9354 11.2222 11.1442 11.0035C11.3531 10.7849 11.6363 10.662 11.9316 10.662C12.2269 10.662 12.5101 10.7849 12.7189 11.0035C12.9277 11.2222 13.045 11.5189 13.045 11.8281C13.045 12.1374 12.9277 12.434 12.7189 12.6527C12.5101 12.8714 12.2269 12.9943 11.9316 12.9943C11.6363 12.9943 11.3531 12.8714 11.1442 12.6527C10.9354 12.434 10.8181 12.1374 10.8181 11.8281Z"></path>
            </svg>
            Compare Cars
          </button>
          <div class="single-compare">
            <div class="compare-img one">
              <img src="images/comoare-03.png" alt="img">
            </div>
            <div class="content one">
              <span>Toyota</span>
              <h6><a href="car-deatils.html">Ford Mustang S-2023</a></h6>
              <div class="price">
                <span>$12,656.00</span>
              </div>
            </div>
          </div>
          <div class="single-compare">
            <div class="compare-img two">
              <img src="images/comoare-04.png" alt="img">
            </div>
            <div class="content">
              <span>SUV</span>
              <h6><a href="car-deatils.html">Mercedes Benz-2023</a></h6>
              <div class="price">
                <span>$23,456.00</span>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-6 wow fadeInUp" data-wow-delay="400ms">
        <div class="compare-card5">
          <button type="button" class="primary-btn3" data-bs-toggle="modal" data-bs-target="#compareModal01">
            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14">
              <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M2.54693 4.27346C3.03945 4.15021 3.47169 3.84203 3.76175 3.4073C4.05181 2.97257 4.17953 2.4415 4.12071 1.91474C4.06189 1.38797 3.82061 0.902101 3.44261 0.549202C3.0646 0.196303 2.57613 0.000892565 2.06975 9.59905e-07C1.56259 -0.000498882 1.07295 0.194226 0.693918 0.547147C0.314889 0.900069 0.072913 1.38657 0.0140025 1.91415C-0.044908 2.44173 0.0833555 2.97358 0.374403 3.40858C0.665451 3.84358 1.09898 4.15138 1.59257 4.27346V9.82902C1.59257 10.4918 1.84394 11.1274 2.29139 11.596C2.73883 12.0646 3.3457 12.3279 3.97849 12.3279H6.56419L5.78797 13.1409C5.74241 13.187 5.70609 13.2422 5.68111 13.3032C5.65613 13.3642 5.64299 13.4298 5.64247 13.4961C5.64195 13.5625 5.65405 13.6283 5.67808 13.6897C5.7021 13.7511 5.73755 13.8069 5.78238 13.8538C5.8272 13.9007 5.8805 13.9378 5.93915 13.9629C5.99781 13.988 6.06065 14.0006 6.12401 14C6.18737 13.9994 6.24998 13.9856 6.30819 13.9593C6.36639 13.9331 6.41903 13.895 6.46303 13.8473L8.05364 12.1813C8.143 12.0876 8.1932 11.9606 8.1932 11.8281C8.1932 11.6957 8.143 11.5687 8.05364 11.475L6.46303 9.80903C6.41934 9.75992 6.36666 9.72054 6.30813 9.69323C6.24959 9.66591 6.1864 9.65122 6.12233 9.65004C6.05826 9.64885 5.99462 9.6612 5.9352 9.68633C5.87578 9.71147 5.82181 9.74888 5.77649 9.79634C5.73118 9.8438 5.69546 9.90033 5.67146 9.96256C5.64746 10.0248 5.63567 10.0915 5.6368 10.1586C5.63793 10.2257 5.65196 10.2918 5.67804 10.3531C5.70412 10.4145 5.74172 10.4696 5.78861 10.5154L6.56483 11.3284H3.97849C3.59882 11.3284 3.23469 11.1704 2.96623 10.8892C2.69776 10.608 2.54693 10.2267 2.54693 9.82902V4.27346ZM2.06975 3.33187C2.21597 3.33187 2.36075 3.30171 2.49584 3.2431C2.63093 3.1845 2.75367 3.0986 2.85706 2.99031C2.96045 2.88203 3.04247 2.75347 3.09842 2.61198C3.15438 2.4705 3.18318 2.31886 3.18318 2.16572C3.18318 2.01258 3.15438 1.86093 3.09842 1.71945C3.04247 1.57796 2.96045 1.44941 2.85706 1.34112C2.75367 1.23283 2.63093 1.14694 2.49584 1.08833C2.36075 1.02973 2.21597 0.999562 2.06975 0.999562C1.77445 0.999562 1.49124 1.12242 1.28244 1.34112C1.07363 1.55982 0.95632 1.85643 0.95632 2.16572C0.95632 2.475 1.07363 2.77162 1.28244 2.99031C1.49124 3.20901 1.77445 3.33187 2.06975 3.33187ZM8.2127 0.85296C8.29699 0.758218 8.34288 0.632909 8.3407 0.503432C8.33852 0.373954 8.28844 0.250418 8.20101 0.15885C8.11358 0.0672815 7.99563 0.01483 7.87201 0.0125455C7.74838 0.010261 7.62874 0.058322 7.53828 0.146603L5.94767 1.81254C5.85831 1.90625 5.80811 2.03327 5.80811 2.16572C5.80811 2.29816 5.85831 2.42519 5.94767 2.5189L7.53828 4.18483C7.58197 4.23393 7.63465 4.27332 7.69318 4.30063C7.75172 4.32795 7.81491 4.34264 7.87898 4.34382C7.94305 4.34501 8.00669 4.33266 8.06611 4.30753C8.12553 4.28239 8.1795 4.24498 8.22482 4.19752C8.27013 4.15006 8.30585 4.09353 8.32985 4.0313C8.35385 3.96906 8.36564 3.90241 8.36451 3.8353C8.36338 3.7682 8.34935 3.70202 8.32327 3.64071C8.29719 3.5794 8.25959 3.52423 8.2127 3.47847L7.43648 2.6655H10.0228C10.2108 2.6655 10.397 2.70428 10.5707 2.77963C10.7443 2.85498 10.9022 2.96542 11.0351 3.10464C11.168 3.24387 11.2735 3.40916 11.3454 3.59107C11.4173 3.77297 11.4544 3.96794 11.4544 4.16484V9.7204C10.9611 9.8429 10.5279 10.1509 10.2371 10.5859C9.94635 11.0209 9.81824 11.5525 9.87712 12.0799C9.936 12.6073 10.1778 13.0937 10.5565 13.4467C10.9352 13.7997 11.4246 13.9947 11.9316 13.9947C12.4385 13.9947 12.9279 13.7997 13.3066 13.4467C13.6854 13.0937 13.9271 12.6073 13.986 12.0799C14.0449 11.5525 13.9168 11.0209 13.626 10.5859C13.3352 10.1509 12.9021 9.8429 12.4087 9.7204V4.16484C12.4087 3.50209 12.1574 2.86648 11.7099 2.39785C11.2625 1.92921 10.6556 1.66594 10.0228 1.66594H7.43712L8.2127 0.85296ZM10.8181 11.8281C10.8181 11.5189 10.9354 11.2222 11.1442 11.0035C11.3531 10.7849 11.6363 10.662 11.9316 10.662C12.2269 10.662 12.5101 10.7849 12.7189 11.0035C12.9277 11.2222 13.045 11.5189 13.045 11.8281C13.045 12.1374 12.9277 12.434 12.7189 12.6527C12.5101 12.8714 12.2269 12.9943 11.9316 12.9943C11.6363 12.9943 11.3531 12.8714 11.1442 12.6527C10.9354 12.434 10.8181 12.1374 10.8181 11.8281Z"></path>
            </svg>
            Compare Cars
          </button>
          <div class="single-compare">
            <div class="compare-img one">
              <img src="images/comoare-05.png" alt="img">
            </div>
            <div class="content one">
              <span>Toyota</span>
              <h6><a href="car-deatils.html">Toyota Camry-2023</a></h6>
              <div class="price">
                <span>$12,656.00</span>
              </div>
            </div>
          </div>
          <div class="single-compare">
            <div class="compare-img two">
              <img src="images/comoare-06.png" alt="img">
            </div>
            <div class="content">
              <span>SUV</span>
              <h6><a href="car-deatils.html">Chevrolet Corvette-2023</a></h6>
              <div class="price">
                <span>$11,656.00</span>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-6 wow fadeInUp" data-wow-delay="500ms">
        <div class="compare-card5">
          <button type="button" class="primary-btn3" data-bs-toggle="modal" data-bs-target="#compareModal01">
            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14">
              <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M2.54693 4.27346C3.03945 4.15021 3.47169 3.84203 3.76175 3.4073C4.05181 2.97257 4.17953 2.4415 4.12071 1.91474C4.06189 1.38797 3.82061 0.902101 3.44261 0.549202C3.0646 0.196303 2.57613 0.000892565 2.06975 9.59905e-07C1.56259 -0.000498882 1.07295 0.194226 0.693918 0.547147C0.314889 0.900069 0.072913 1.38657 0.0140025 1.91415C-0.044908 2.44173 0.0833555 2.97358 0.374403 3.40858C0.665451 3.84358 1.09898 4.15138 1.59257 4.27346V9.82902C1.59257 10.4918 1.84394 11.1274 2.29139 11.596C2.73883 12.0646 3.3457 12.3279 3.97849 12.3279H6.56419L5.78797 13.1409C5.74241 13.187 5.70609 13.2422 5.68111 13.3032C5.65613 13.3642 5.64299 13.4298 5.64247 13.4961C5.64195 13.5625 5.65405 13.6283 5.67808 13.6897C5.7021 13.7511 5.73755 13.8069 5.78238 13.8538C5.8272 13.9007 5.8805 13.9378 5.93915 13.9629C5.99781 13.988 6.06065 14.0006 6.12401 14C6.18737 13.9994 6.24998 13.9856 6.30819 13.9593C6.36639 13.9331 6.41903 13.895 6.46303 13.8473L8.05364 12.1813C8.143 12.0876 8.1932 11.9606 8.1932 11.8281C8.1932 11.6957 8.143 11.5687 8.05364 11.475L6.46303 9.80903C6.41934 9.75992 6.36666 9.72054 6.30813 9.69323C6.24959 9.66591 6.1864 9.65122 6.12233 9.65004C6.05826 9.64885 5.99462 9.6612 5.9352 9.68633C5.87578 9.71147 5.82181 9.74888 5.77649 9.79634C5.73118 9.8438 5.69546 9.90033 5.67146 9.96256C5.64746 10.0248 5.63567 10.0915 5.6368 10.1586C5.63793 10.2257 5.65196 10.2918 5.67804 10.3531C5.70412 10.4145 5.74172 10.4696 5.78861 10.5154L6.56483 11.3284H3.97849C3.59882 11.3284 3.23469 11.1704 2.96623 10.8892C2.69776 10.608 2.54693 10.2267 2.54693 9.82902V4.27346ZM2.06975 3.33187C2.21597 3.33187 2.36075 3.30171 2.49584 3.2431C2.63093 3.1845 2.75367 3.0986 2.85706 2.99031C2.96045 2.88203 3.04247 2.75347 3.09842 2.61198C3.15438 2.4705 3.18318 2.31886 3.18318 2.16572C3.18318 2.01258 3.15438 1.86093 3.09842 1.71945C3.04247 1.57796 2.96045 1.44941 2.85706 1.34112C2.75367 1.23283 2.63093 1.14694 2.49584 1.08833C2.36075 1.02973 2.21597 0.999562 2.06975 0.999562C1.77445 0.999562 1.49124 1.12242 1.28244 1.34112C1.07363 1.55982 0.95632 1.85643 0.95632 2.16572C0.95632 2.475 1.07363 2.77162 1.28244 2.99031C1.49124 3.20901 1.77445 3.33187 2.06975 3.33187ZM8.2127 0.85296C8.29699 0.758218 8.34288 0.632909 8.3407 0.503432C8.33852 0.373954 8.28844 0.250418 8.20101 0.15885C8.11358 0.0672815 7.99563 0.01483 7.87201 0.0125455C7.74838 0.010261 7.62874 0.058322 7.53828 0.146603L5.94767 1.81254C5.85831 1.90625 5.80811 2.03327 5.80811 2.16572C5.80811 2.29816 5.85831 2.42519 5.94767 2.5189L7.53828 4.18483C7.58197 4.23393 7.63465 4.27332 7.69318 4.30063C7.75172 4.32795 7.81491 4.34264 7.87898 4.34382C7.94305 4.34501 8.00669 4.33266 8.06611 4.30753C8.12553 4.28239 8.1795 4.24498 8.22482 4.19752C8.27013 4.15006 8.30585 4.09353 8.32985 4.0313C8.35385 3.96906 8.36564 3.90241 8.36451 3.8353C8.36338 3.7682 8.34935 3.70202 8.32327 3.64071C8.29719 3.5794 8.25959 3.52423 8.2127 3.47847L7.43648 2.6655H10.0228C10.2108 2.6655 10.397 2.70428 10.5707 2.77963C10.7443 2.85498 10.9022 2.96542 11.0351 3.10464C11.168 3.24387 11.2735 3.40916 11.3454 3.59107C11.4173 3.77297 11.4544 3.96794 11.4544 4.16484V9.7204C10.9611 9.8429 10.5279 10.1509 10.2371 10.5859C9.94635 11.0209 9.81824 11.5525 9.87712 12.0799C9.936 12.6073 10.1778 13.0937 10.5565 13.4467C10.9352 13.7997 11.4246 13.9947 11.9316 13.9947C12.4385 13.9947 12.9279 13.7997 13.3066 13.4467C13.6854 13.0937 13.9271 12.6073 13.986 12.0799C14.0449 11.5525 13.9168 11.0209 13.626 10.5859C13.3352 10.1509 12.9021 9.8429 12.4087 9.7204V4.16484C12.4087 3.50209 12.1574 2.86648 11.7099 2.39785C11.2625 1.92921 10.6556 1.66594 10.0228 1.66594H7.43712L8.2127 0.85296ZM10.8181 11.8281C10.8181 11.5189 10.9354 11.2222 11.1442 11.0035C11.3531 10.7849 11.6363 10.662 11.9316 10.662C12.2269 10.662 12.5101 10.7849 12.7189 11.0035C12.9277 11.2222 13.045 11.5189 13.045 11.8281C13.045 12.1374 12.9277 12.434 12.7189 12.6527C12.5101 12.8714 12.2269 12.9943 11.9316 12.9943C11.6363 12.9943 11.3531 12.8714 11.1442 12.6527C10.9354 12.434 10.8181 12.1374 10.8181 11.8281Z"></path>
            </svg>
            Compare Cars
          </button>
          <div class="single-compare">
            <div class="compare-img one">
              <img src="images/comoare-01.png" alt="img">
            </div>
            <div class="content one">
              <span>Toyota</span>
              <h6><a href="car-deatils.html">Toyota Camry-2023</a></h6>
              <div class="price">
                <span>$12,656.00</span>
              </div>
            </div>
          </div>
          <div class="single-compare">
            <div class="compare-img two">
              <img src="images/comoare-02.png" alt="img">
            </div>
            <div class="content">
              <span>SUV</span>
              <h6><a href="car-deatils.html">Chevrolet Corvette-2023</a></h6>
              <div class="price">
                <span>$11,656.00</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="home5-testimonial-section pt-90 pb-90 mb-100">
  <div class="container">
    <div class="row mb-50 wow fadeInUp" data-wow-delay="200ms">
      <div class="col-lg-12 d-flex align-items-end justify-content-between gap-3 flex-wrap">
        <div class="section-title-2">
          <h2>Our Customer Reviews</h2>
          <p>Here are some of the featured cars in different categories</p>
        </div>
        <div class="review-and-btn d-flex flex-wrap align-items-center gap-sm-5 gap-3">
          <div class="rating">
            <a href="#">
              <div class="review-top">
                <div class="logo">
                  <img src="images/trustpilot-logo3.svg" alt="">
                </div>
                <div class="star">
                  <img src="images/trustpilot-star.svg" alt="">
                </div>
              </div>
              <div class="content">
                <ul>
                  <li>Trust Rating <span>5.0</span></li>
                  <li><span>2348</span> Reviews</li>
                </ul>
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>
    <div class="row wow fadeInUp" data-wow-delay="300ms">
      <div class="col-lg-12">
        <div class="swiper customer-feedback-slider2 wow fadeInUp" data-wow-delay="300ms">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <div class="feedback-card">
                <div class="feedback-top">
                  <div class="stat-area">
                    <img src="images/trustpilot-star.svg" alt="">
                  </div>
                  <div class="services">
                    <span>Trusted Company</span>
                  </div>
                </div>
                <p>Drivco-Agency customer feedback is an invaluable source of
                  information that can help businesses improve their offerings and provide
                  better experiences.</p>
                <div class="author-name">
                  <h6>Jhon Abraham</h6>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="feedback-card">
                <div class="feedback-top">
                  <div class="stat-area">
                    <img src="images/trustpilot-star.svg" alt="">
                  </div>
                  <div class="services">
                    <span>Great Service!</span>
                  </div>
                </div>
                <p>Drivco-Agency customer feedback is an invaluable source of
                  information that can help businesses improve their offerings and provide
                  better experiences.</p>
                <div class="author-name">
                  <h6>S Rahman</h6>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="feedback-card">
                <div class="feedback-top">
                  <div class="stat-area">
                    <img src="images/trustpilot-star.svg" alt="">
                  </div>
                  <div class="services">
                    <span>Easy to Buy</span>
                  </div>
                </div>
                <p>Drivco-Agency customer feedback is an invaluable source of
                  information that can help businesses improve their offerings and provide
                  better experiences.</p>
                <div class="author-name">
                  <h6>MGA Nahian</h6>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="slider-btn-group2 pt-50 wow fadeInUp" data-wow-delay="400ms">
          <div class="slider-btn prev-6 d-lg-flex d-none">
            <svg width="9" height="15" viewBox="0 0 8 13" xmlns="http://www.w3.org/2000/svg">
              <path d="M0 6.50008L8 0L2.90909 6.50008L8 13L0 6.50008Z"></path>
            </svg>
          </div>
          <div class="trustpilot-review">
            <strong>Excellent!</strong>
            <img src="images/trustpilot-star2.svg" alt="">
            <p>5.0 Rating out of <strong>5.0</strong> based on <a href="#"><strong>245354</strong>
                reviews</a></p>
            <img src="images/trustpilot-logo.svg" alt="">
          </div>
          <div class="slider-btn next-6 d-lg-flex d-none">
            <svg width="9" height="15" viewBox="0 0 8 13" xmlns="http://www.w3.org/2000/svg">
              <path d="M8 6.50008L0 0L5.09091 6.50008L0 13L8 6.50008Z"></path>
            </svg>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="news-section five mb-100">
  <div class="container">
    <div class="row mb-60 wow fadeInUp" data-wow-delay="200ms">
      <div class="col-lg-12 d-flex align-items-end justify-content-between flex-wrap gap-4">
        <div class="section-title-2">
          <h2>Latest Car Advice</h2>
          <p>Here are some of the featured cars in different categories</p>
        </div>
      </div>
    </div>
    <div class="row g-4 justify-content-center">
      <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="200ms">
        <div class="news-card style-2">
          <div class="news-img">
            <a href="blog-details.html"><img src="images/news-01.png" alt=""></a>
            <div class="date">
              <a href="blog-standard.html">Buying Advice</a>
            </div>
          </div>
          <div class="content">
            <h6><a href="blog-details.html">The Car Enthusiast: Exploring the World of Cars and Driving.</a>
            </h6>
            <div class="news-btm d-flex align-items-center justify-content-between">
              <div class="author-area">
                <div class="author-img">
                  <img src="images/author-01.png" alt="">
                </div>
                <div class="author-content">
                  <h6>Mr. Morris Mannu</h6>
                  <a href="blog-standard.html">Posted on - 03 April, 2023</a>
                </div>
              </div>
              <div class="social-area">
                <ul class="social-icons">
                  <li><a href="https://www.facebook.com/"><i class="bx bxl-facebook"></i></a></li>
                  <li><a href="https://twitter.com/"><i class="bx bxl-twitter"></i></a></li>
                  <li><a href="https://www.pinterest.com/"><i class="bx bxl-pinterest-alt"></i></a>
                  </li>
                  <li><a href="https://www.instagram.com/"><i class="bx bxl-instagram"></i></a></li>
                </ul>
                <div class="share-icon">
                  <svg xmlns="http://www.w3.org/2000/svg" width="12" height="13" viewBox="0 0 12 13">
                    <path
                      d="M10.125 0.750223C9.82667 0.750223 9.54052 0.868748 9.32955 1.07972C9.11857 1.2907 9.00005 1.57684 9.00005 1.8752C9.00005 2.17357 9.11857 2.45971 9.32955 2.67069C9.54052 2.88166 9.82667 3.00019 10.125 3.00019C10.4234 3.00019 10.7095 2.88166 10.9205 2.67069C11.1315 2.45971 11.25 2.17357 11.25 1.8752C11.25 1.57684 11.1315 1.2907 10.9205 1.07972C10.7095 0.868748 10.4234 0.750223 10.125 0.750223ZM8.25006 1.8752C8.25001 1.43529 8.40464 1.00936 8.68691 0.671933C8.96917 0.33451 9.3611 0.107081 9.79411 0.0294379C10.2271 -0.0482056 10.6736 0.0288801 11.0556 0.247208C11.4375 0.465536 11.7305 0.811204 11.8833 1.22373C12.0361 1.63626 12.0389 2.08939 11.8914 2.50382C11.7439 2.91826 11.4553 3.26762 11.0762 3.49078C10.6971 3.71395 10.2515 3.7967 9.81758 3.72456C9.38362 3.65243 8.98883 3.42999 8.7023 3.09618L3.66389 5.43615C3.77972 5.80322 3.77972 6.19705 3.66389 6.56413L8.7023 8.90409C9.00518 8.55184 9.42804 8.32458 9.88893 8.26634C10.3498 8.2081 10.8159 8.32303 11.1969 8.58886C11.5779 8.85469 11.8466 9.25249 11.951 9.70517C12.0554 10.1578 11.988 10.6332 11.7619 11.039C11.5359 11.4448 11.1672 11.7523 10.7273 11.9018C10.2875 12.0512 9.8078 12.0321 9.38125 11.8481C8.9547 11.6641 8.61165 11.3282 8.4186 10.9057C8.22554 10.4832 8.19621 10.004 8.33631 9.56108L3.29789 7.22112C3.04847 7.51179 2.71602 7.7191 2.34524 7.81517C1.97447 7.91124 1.58317 7.89145 1.22398 7.75847C0.864793 7.62548 0.554947 7.38569 0.336124 7.07133C0.117301 6.75698 0 6.38315 0 6.00014C0 5.61712 0.117301 5.24329 0.336124 4.92894C0.554947 4.61459 0.864793 4.37479 1.22398 4.24181C1.58317 4.10882 1.97447 4.08903 2.34524 4.1851C2.71602 4.28117 3.04847 4.48848 3.29789 4.77916L8.33631 2.4392C8.27896 2.2567 8.24987 2.0665 8.25006 1.8752ZM1.87517 4.87515C1.5768 4.87515 1.29066 4.99368 1.07969 5.20465C0.868711 5.41563 0.750187 5.70177 0.750187 6.00014C0.750187 6.2985 0.868711 6.58464 1.07969 6.79562C1.29066 7.00659 1.5768 7.12512 1.87517 7.12512C2.17353 7.12512 2.45968 7.00659 2.67065 6.79562C2.88162 6.58464 3.00015 6.2985 3.00015 6.00014C3.00015 5.70177 2.88162 5.41563 2.67065 5.20465C2.45968 4.99368 2.17353 4.87515 1.87517 4.87515ZM10.125 9.00009C9.82667 9.00009 9.54052 9.11861 9.32955 9.32959C9.11857 9.54056 9.00005 9.8267 9.00005 10.1251C9.00005 10.4234 9.11857 10.7096 9.32955 10.9205C9.54052 11.1315 9.82667 11.25 10.125 11.25C10.4234 11.25 10.7095 11.1315 10.9205 10.9205C11.1315 10.7096 11.25 10.4234 11.25 10.1251C11.25 9.8267 11.1315 9.54056 10.9205 9.32959C10.7095 9.11861 10.4234 9.00009 10.125 9.00009Z"></path>
                  </svg>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="300ms">
        <div class="news-card style-2">
          <div class="news-img">
            <a href="blog-details.html"><img src="images/news-02.png" alt=""></a>
            <div class="date">
              <a href="blog-standard.html">Car Advice</a>
            </div>
          </div>
          <div class="content">
            <h6><a href="blog-details.html">The Best Car Brands for Performance and Reliability.</a>
            </h6>
            <div class="news-btm d-flex align-items-center justify-content-between">
              <div class="author-area">
                <div class="author-img">
                  <img src="images/author-02.png" alt="">
                </div>
                <div class="author-content">
                  <h6>Daniel Scoot</h6>
                  <a href="blog-standard.html">Posted on - 03 April, 2023</a>
                </div>
              </div>
              <div class="social-area">
                <ul class="social-icons">
                  <li><a href="https://www.facebook.com/"><i class="bx bxl-facebook"></i></a></li>
                  <li><a href="https://twitter.com/"><i class="bx bxl-twitter"></i></a></li>
                  <li><a href="https://www.pinterest.com/"><i class="bx bxl-pinterest-alt"></i></a>
                  </li>
                  <li><a href="https://www.instagram.com/"><i class="bx bxl-instagram"></i></a></li>
                </ul>
                <div class="share-icon">
                  <svg xmlns="http://www.w3.org/2000/svg" width="12" height="13" viewBox="0 0 12 13">
                    <path
                      d="M10.125 0.750223C9.82667 0.750223 9.54052 0.868748 9.32955 1.07972C9.11857 1.2907 9.00005 1.57684 9.00005 1.8752C9.00005 2.17357 9.11857 2.45971 9.32955 2.67069C9.54052 2.88166 9.82667 3.00019 10.125 3.00019C10.4234 3.00019 10.7095 2.88166 10.9205 2.67069C11.1315 2.45971 11.25 2.17357 11.25 1.8752C11.25 1.57684 11.1315 1.2907 10.9205 1.07972C10.7095 0.868748 10.4234 0.750223 10.125 0.750223ZM8.25006 1.8752C8.25001 1.43529 8.40464 1.00936 8.68691 0.671933C8.96917 0.33451 9.3611 0.107081 9.79411 0.0294379C10.2271 -0.0482056 10.6736 0.0288801 11.0556 0.247208C11.4375 0.465536 11.7305 0.811204 11.8833 1.22373C12.0361 1.63626 12.0389 2.08939 11.8914 2.50382C11.7439 2.91826 11.4553 3.26762 11.0762 3.49078C10.6971 3.71395 10.2515 3.7967 9.81758 3.72456C9.38362 3.65243 8.98883 3.42999 8.7023 3.09618L3.66389 5.43615C3.77972 5.80322 3.77972 6.19705 3.66389 6.56413L8.7023 8.90409C9.00518 8.55184 9.42804 8.32458 9.88893 8.26634C10.3498 8.2081 10.8159 8.32303 11.1969 8.58886C11.5779 8.85469 11.8466 9.25249 11.951 9.70517C12.0554 10.1578 11.988 10.6332 11.7619 11.039C11.5359 11.4448 11.1672 11.7523 10.7273 11.9018C10.2875 12.0512 9.8078 12.0321 9.38125 11.8481C8.9547 11.6641 8.61165 11.3282 8.4186 10.9057C8.22554 10.4832 8.19621 10.004 8.33631 9.56108L3.29789 7.22112C3.04847 7.51179 2.71602 7.7191 2.34524 7.81517C1.97447 7.91124 1.58317 7.89145 1.22398 7.75847C0.864793 7.62548 0.554947 7.38569 0.336124 7.07133C0.117301 6.75698 0 6.38315 0 6.00014C0 5.61712 0.117301 5.24329 0.336124 4.92894C0.554947 4.61459 0.864793 4.37479 1.22398 4.24181C1.58317 4.10882 1.97447 4.08903 2.34524 4.1851C2.71602 4.28117 3.04847 4.48848 3.29789 4.77916L8.33631 2.4392C8.27896 2.2567 8.24987 2.0665 8.25006 1.8752ZM1.87517 4.87515C1.5768 4.87515 1.29066 4.99368 1.07969 5.20465C0.868711 5.41563 0.750187 5.70177 0.750187 6.00014C0.750187 6.2985 0.868711 6.58464 1.07969 6.79562C1.29066 7.00659 1.5768 7.12512 1.87517 7.12512C2.17353 7.12512 2.45968 7.00659 2.67065 6.79562C2.88162 6.58464 3.00015 6.2985 3.00015 6.00014C3.00015 5.70177 2.88162 5.41563 2.67065 5.20465C2.45968 4.99368 2.17353 4.87515 1.87517 4.87515ZM10.125 9.00009C9.82667 9.00009 9.54052 9.11861 9.32955 9.32959C9.11857 9.54056 9.00005 9.8267 9.00005 10.1251C9.00005 10.4234 9.11857 10.7096 9.32955 10.9205C9.54052 11.1315 9.82667 11.25 10.125 11.25C10.4234 11.25 10.7095 11.1315 10.9205 10.9205C11.1315 10.7096 11.25 10.4234 11.25 10.1251C11.25 9.8267 11.1315 9.54056 10.9205 9.32959C10.7095 9.11861 10.4234 9.00009 10.125 9.00009Z"></path>
                  </svg>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="400ms">
        <div class="news-card style-2">
          <div class="news-img">
            <a href="blog-details.html"><img src="images/news-03.png" alt=""></a>
            <div class="date">
              <a href="blog-standard.html">Driving Advice</a>
            </div>
          </div>
          <div class="content">
            <h6><a href="blog-details.html">The Environmental Impact of Cars and How to Minimize It.</a>
            </h6>
            <div class="news-btm d-flex align-items-center justify-content-between">
              <div class="author-area">
                <div class="author-img">
                  <img src="images/author-03.png" alt="">
                </div>
                <div class="author-content">
                  <h6>Rakhab Uddin</h6>
                  <a href="blog-standard.html">Posted on - 03 April, 2023</a>
                </div>
              </div>
              <div class="social-area">
                <ul class="social-icons">
                  <li><a href="https://www.facebook.com/"><i class="bx bxl-facebook"></i></a></li>
                  <li><a href="https://twitter.com/"><i class="bx bxl-twitter"></i></a></li>
                  <li><a href="https://www.pinterest.com/"><i class="bx bxl-pinterest-alt"></i></a>
                  </li>
                  <li><a href="https://www.instagram.com/"><i class="bx bxl-instagram"></i></a></li>
                </ul>
                <div class="share-icon">
                  <svg xmlns="http://www.w3.org/2000/svg" width="12" height="13" viewBox="0 0 12 13">
                    <path
                      d="M10.125 0.750223C9.82667 0.750223 9.54052 0.868748 9.32955 1.07972C9.11857 1.2907 9.00005 1.57684 9.00005 1.8752C9.00005 2.17357 9.11857 2.45971 9.32955 2.67069C9.54052 2.88166 9.82667 3.00019 10.125 3.00019C10.4234 3.00019 10.7095 2.88166 10.9205 2.67069C11.1315 2.45971 11.25 2.17357 11.25 1.8752C11.25 1.57684 11.1315 1.2907 10.9205 1.07972C10.7095 0.868748 10.4234 0.750223 10.125 0.750223ZM8.25006 1.8752C8.25001 1.43529 8.40464 1.00936 8.68691 0.671933C8.96917 0.33451 9.3611 0.107081 9.79411 0.0294379C10.2271 -0.0482056 10.6736 0.0288801 11.0556 0.247208C11.4375 0.465536 11.7305 0.811204 11.8833 1.22373C12.0361 1.63626 12.0389 2.08939 11.8914 2.50382C11.7439 2.91826 11.4553 3.26762 11.0762 3.49078C10.6971 3.71395 10.2515 3.7967 9.81758 3.72456C9.38362 3.65243 8.98883 3.42999 8.7023 3.09618L3.66389 5.43615C3.77972 5.80322 3.77972 6.19705 3.66389 6.56413L8.7023 8.90409C9.00518 8.55184 9.42804 8.32458 9.88893 8.26634C10.3498 8.2081 10.8159 8.32303 11.1969 8.58886C11.5779 8.85469 11.8466 9.25249 11.951 9.70517C12.0554 10.1578 11.988 10.6332 11.7619 11.039C11.5359 11.4448 11.1672 11.7523 10.7273 11.9018C10.2875 12.0512 9.8078 12.0321 9.38125 11.8481C8.9547 11.6641 8.61165 11.3282 8.4186 10.9057C8.22554 10.4832 8.19621 10.004 8.33631 9.56108L3.29789 7.22112C3.04847 7.51179 2.71602 7.7191 2.34524 7.81517C1.97447 7.91124 1.58317 7.89145 1.22398 7.75847C0.864793 7.62548 0.554947 7.38569 0.336124 7.07133C0.117301 6.75698 0 6.38315 0 6.00014C0 5.61712 0.117301 5.24329 0.336124 4.92894C0.554947 4.61459 0.864793 4.37479 1.22398 4.24181C1.58317 4.10882 1.97447 4.08903 2.34524 4.1851C2.71602 4.28117 3.04847 4.48848 3.29789 4.77916L8.33631 2.4392C8.27896 2.2567 8.24987 2.0665 8.25006 1.8752ZM1.87517 4.87515C1.5768 4.87515 1.29066 4.99368 1.07969 5.20465C0.868711 5.41563 0.750187 5.70177 0.750187 6.00014C0.750187 6.2985 0.868711 6.58464 1.07969 6.79562C1.29066 7.00659 1.5768 7.12512 1.87517 7.12512C2.17353 7.12512 2.45968 7.00659 2.67065 6.79562C2.88162 6.58464 3.00015 6.2985 3.00015 6.00014C3.00015 5.70177 2.88162 5.41563 2.67065 5.20465C2.45968 4.99368 2.17353 4.87515 1.87517 4.87515ZM10.125 9.00009C9.82667 9.00009 9.54052 9.11861 9.32955 9.32959C9.11857 9.54056 9.00005 9.8267 9.00005 10.1251C9.00005 10.4234 9.11857 10.7096 9.32955 10.9205C9.54052 11.1315 9.82667 11.25 10.125 11.25C10.4234 11.25 10.7095 11.1315 10.9205 10.9205C11.1315 10.7096 11.25 10.4234 11.25 10.1251C11.25 9.8267 11.1315 9.54056 10.9205 9.32959C10.7095 9.11861 10.4234 9.00009 10.125 9.00009Z"></path>
                  </svg>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<footer class="style-2">
  <div class="container-fluid">
    <div class="footer-top">
      <div
        class="row row-cols-xl-5 row-cols-lg-4 row-cols-md-3 row-cols-sm-3 row-cols-1 justify-content-center g-lg-4 gy-5 ">
        <div class="col d-flex justify-content-lg-start">
          <div class="footer-widget">
            <div class="widget-title">
              <h5>About Company</h5>
            </div>
            <div class="menu-container">
              <ul>
                <li><a href="about.html">About Us
                    <svg width="10" height="10" viewBox="0 0 10 10" xmlns="http://www.w3.org/2000/svg">
                      <path
                        d="M9.1605 0H0.849401C0.626751 0 0.413219 0.0884475 0.255781 0.245885C0.0983438 0.403323 0.00989626 0.616854 0.00989626 0.839505C0.00989626 1.06216 0.0983438 1.27569 0.255781 1.43312C0.413219 1.59056 0.626751 1.67901 0.849401 1.67901H7.13309L0.256291 8.55665C0.17611 8.63409 0.112154 8.72673 0.0681567 8.82915C0.0241591 8.93157 0.00100033 9.04173 3.16969e-05 9.1532C-0.000936937 9.26467 0.020304 9.37522 0.062515 9.47839C0.104726 9.58156 0.167062 9.67529 0.245885 9.75412C0.324709 9.83294 0.418441 9.89527 0.521613 9.93748C0.624785 9.9797 0.735331 10.0009 0.846799 9.99997C0.958268 9.999 1.06843 9.97584 1.17085 9.93184C1.27327 9.88785 1.36591 9.82389 1.44335 9.74371L8.32099 2.86649V9.1506C8.32099 9.37325 8.40944 9.58678 8.56688 9.74422C8.72431 9.90166 8.93785 9.9901 9.1605 9.9901C9.38315 9.9901 9.59668 9.90166 9.75412 9.74422C9.91155 9.58678 10 9.37325 10 9.1506V0.839505C10 0.616854 9.91155 0.403323 9.75412 0.245885C9.59668 0.0884475 9.38315 0 9.1605 0Z"></path>
                    </svg>
                  </a></li>
                <li><a href="return-enchange.html">Return &amp; Exchange
                    <svg width="10" height="10" viewBox="0 0 10 10" xmlns="http://www.w3.org/2000/svg">
                      <path
                        d="M9.1605 0H0.849401C0.626751 0 0.413219 0.0884475 0.255781 0.245885C0.0983438 0.403323 0.00989626 0.616854 0.00989626 0.839505C0.00989626 1.06216 0.0983438 1.27569 0.255781 1.43312C0.413219 1.59056 0.626751 1.67901 0.849401 1.67901H7.13309L0.256291 8.55665C0.17611 8.63409 0.112154 8.72673 0.0681567 8.82915C0.0241591 8.93157 0.00100033 9.04173 3.16969e-05 9.1532C-0.000936937 9.26467 0.020304 9.37522 0.062515 9.47839C0.104726 9.58156 0.167062 9.67529 0.245885 9.75412C0.324709 9.83294 0.418441 9.89527 0.521613 9.93748C0.624785 9.9797 0.735331 10.0009 0.846799 9.99997C0.958268 9.999 1.06843 9.97584 1.17085 9.93184C1.27327 9.88785 1.36591 9.82389 1.44335 9.74371L8.32099 2.86649V9.1506C8.32099 9.37325 8.40944 9.58678 8.56688 9.74422C8.72431 9.90166 8.93785 9.9901 9.1605 9.9901C9.38315 9.9901 9.59668 9.90166 9.75412 9.74422C9.91155 9.58678 10 9.37325 10 9.1506V0.839505C10 0.616854 9.91155 0.403323 9.75412 0.245885C9.59668 0.0884475 9.38315 0 9.1605 0Z"></path>
                    </svg>
                  </a></li>
                <li><a href="return-enchange.html">Refund Policy
                    <svg width="10" height="10" viewBox="0 0 10 10" xmlns="http://www.w3.org/2000/svg">
                      <path
                        d="M9.1605 0H0.849401C0.626751 0 0.413219 0.0884475 0.255781 0.245885C0.0983438 0.403323 0.00989626 0.616854 0.00989626 0.839505C0.00989626 1.06216 0.0983438 1.27569 0.255781 1.43312C0.413219 1.59056 0.626751 1.67901 0.849401 1.67901H7.13309L0.256291 8.55665C0.17611 8.63409 0.112154 8.72673 0.0681567 8.82915C0.0241591 8.93157 0.00100033 9.04173 3.16969e-05 9.1532C-0.000936937 9.26467 0.020304 9.37522 0.062515 9.47839C0.104726 9.58156 0.167062 9.67529 0.245885 9.75412C0.324709 9.83294 0.418441 9.89527 0.521613 9.93748C0.624785 9.9797 0.735331 10.0009 0.846799 9.99997C0.958268 9.999 1.06843 9.97584 1.17085 9.93184C1.27327 9.88785 1.36591 9.82389 1.44335 9.74371L8.32099 2.86649V9.1506C8.32099 9.37325 8.40944 9.58678 8.56688 9.74422C8.72431 9.90166 8.93785 9.9901 9.1605 9.9901C9.38315 9.9901 9.59668 9.90166 9.75412 9.74422C9.91155 9.58678 10 9.37325 10 9.1506V0.839505C10 0.616854 9.91155 0.403323 9.75412 0.245885C9.59668 0.0884475 9.38315 0 9.1605 0Z"></path>
                    </svg>
                  </a></li>
                <li><a href="customer-review.html">Reviews
                    <svg width="10" height="10" viewBox="0 0 10 10" xmlns="http://www.w3.org/2000/svg">
                      <path
                        d="M9.1605 0H0.849401C0.626751 0 0.413219 0.0884475 0.255781 0.245885C0.0983438 0.403323 0.00989626 0.616854 0.00989626 0.839505C0.00989626 1.06216 0.0983438 1.27569 0.255781 1.43312C0.413219 1.59056 0.626751 1.67901 0.849401 1.67901H7.13309L0.256291 8.55665C0.17611 8.63409 0.112154 8.72673 0.0681567 8.82915C0.0241591 8.93157 0.00100033 9.04173 3.16969e-05 9.1532C-0.000936937 9.26467 0.020304 9.37522 0.062515 9.47839C0.104726 9.58156 0.167062 9.67529 0.245885 9.75412C0.324709 9.83294 0.418441 9.89527 0.521613 9.93748C0.624785 9.9797 0.735331 10.0009 0.846799 9.99997C0.958268 9.999 1.06843 9.97584 1.17085 9.93184C1.27327 9.88785 1.36591 9.82389 1.44335 9.74371L8.32099 2.86649V9.1506C8.32099 9.37325 8.40944 9.58678 8.56688 9.74422C8.72431 9.90166 8.93785 9.9901 9.1605 9.9901C9.38315 9.9901 9.59668 9.90166 9.75412 9.74422C9.91155 9.58678 10 9.37325 10 9.1506V0.839505C10 0.616854 9.91155 0.403323 9.75412 0.245885C9.59668 0.0884475 9.38315 0 9.1605 0Z"></path>
                    </svg>
                  </a></li>
                <li><a href="faq.html">FAQ’s
                    <svg width="10" height="10" viewBox="0 0 10 10" xmlns="http://www.w3.org/2000/svg">
                      <path
                        d="M9.1605 0H0.849401C0.626751 0 0.413219 0.0884475 0.255781 0.245885C0.0983438 0.403323 0.00989626 0.616854 0.00989626 0.839505C0.00989626 1.06216 0.0983438 1.27569 0.255781 1.43312C0.413219 1.59056 0.626751 1.67901 0.849401 1.67901H7.13309L0.256291 8.55665C0.17611 8.63409 0.112154 8.72673 0.0681567 8.82915C0.0241591 8.93157 0.00100033 9.04173 3.16969e-05 9.1532C-0.000936937 9.26467 0.020304 9.37522 0.062515 9.47839C0.104726 9.58156 0.167062 9.67529 0.245885 9.75412C0.324709 9.83294 0.418441 9.89527 0.521613 9.93748C0.624785 9.9797 0.735331 10.0009 0.846799 9.99997C0.958268 9.999 1.06843 9.97584 1.17085 9.93184C1.27327 9.88785 1.36591 9.82389 1.44335 9.74371L8.32099 2.86649V9.1506C8.32099 9.37325 8.40944 9.58678 8.56688 9.74422C8.72431 9.90166 8.93785 9.9901 9.1605 9.9901C9.38315 9.9901 9.59668 9.90166 9.75412 9.74422C9.91155 9.58678 10 9.37325 10 9.1506V0.839505C10 0.616854 9.91155 0.403323 9.75412 0.245885C9.59668 0.0884475 9.38315 0 9.1605 0Z"></path>
                    </svg>
                  </a></li>
                <li><a href="contact.html">Contact Us
                    <svg width="10" height="10" viewBox="0 0 10 10" xmlns="http://www.w3.org/2000/svg">
                      <path
                        d="M9.1605 0H0.849401C0.626751 0 0.413219 0.0884475 0.255781 0.245885C0.0983438 0.403323 0.00989626 0.616854 0.00989626 0.839505C0.00989626 1.06216 0.0983438 1.27569 0.255781 1.43312C0.413219 1.59056 0.626751 1.67901 0.849401 1.67901H7.13309L0.256291 8.55665C0.17611 8.63409 0.112154 8.72673 0.0681567 8.82915C0.0241591 8.93157 0.00100033 9.04173 3.16969e-05 9.1532C-0.000936937 9.26467 0.020304 9.37522 0.062515 9.47839C0.104726 9.58156 0.167062 9.67529 0.245885 9.75412C0.324709 9.83294 0.418441 9.89527 0.521613 9.93748C0.624785 9.9797 0.735331 10.0009 0.846799 9.99997C0.958268 9.999 1.06843 9.97584 1.17085 9.93184C1.27327 9.88785 1.36591 9.82389 1.44335 9.74371L8.32099 2.86649V9.1506C8.32099 9.37325 8.40944 9.58678 8.56688 9.74422C8.72431 9.90166 8.93785 9.9901 9.1605 9.9901C9.38315 9.9901 9.59668 9.90166 9.75412 9.74422C9.91155 9.58678 10 9.37325 10 9.1506V0.839505C10 0.616854 9.91155 0.403323 9.75412 0.245885C9.59668 0.0884475 9.38315 0 9.1605 0Z"></path>
                    </svg>
                  </a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col d-flex justify-content-sm-center">
          <div class="footer-widget">
            <div class="widget-title">
              <h5>Search &amp; Explore</h5>
            </div>
            <div class="menu-container">
              <ul>
                <li><a href="car-listing-left-sidebar.html">Used Cars
                    <svg width="10" height="10" viewBox="0 0 10 10" xmlns="http://www.w3.org/2000/svg">
                      <path
                        d="M9.1605 0H0.849401C0.626751 0 0.413219 0.0884475 0.255781 0.245885C0.0983438 0.403323 0.00989626 0.616854 0.00989626 0.839505C0.00989626 1.06216 0.0983438 1.27569 0.255781 1.43312C0.413219 1.59056 0.626751 1.67901 0.849401 1.67901H7.13309L0.256291 8.55665C0.17611 8.63409 0.112154 8.72673 0.0681567 8.82915C0.0241591 8.93157 0.00100033 9.04173 3.16969e-05 9.1532C-0.000936937 9.26467 0.020304 9.37522 0.062515 9.47839C0.104726 9.58156 0.167062 9.67529 0.245885 9.75412C0.324709 9.83294 0.418441 9.89527 0.521613 9.93748C0.624785 9.9797 0.735331 10.0009 0.846799 9.99997C0.958268 9.999 1.06843 9.97584 1.17085 9.93184C1.27327 9.88785 1.36591 9.82389 1.44335 9.74371L8.32099 2.86649V9.1506C8.32099 9.37325 8.40944 9.58678 8.56688 9.74422C8.72431 9.90166 8.93785 9.9901 9.1605 9.9901C9.38315 9.9901 9.59668 9.90166 9.75412 9.74422C9.91155 9.58678 10 9.37325 10 9.1506V0.839505C10 0.616854 9.91155 0.403323 9.75412 0.245885C9.59668 0.0884475 9.38315 0 9.1605 0Z"></path>
                    </svg>
                  </a></li>
                <li><a href="car-listing-left-sidebar.html">New Cars
                    <svg width="10" height="10" viewBox="0 0 10 10" xmlns="http://www.w3.org/2000/svg">
                      <path
                        d="M9.1605 0H0.849401C0.626751 0 0.413219 0.0884475 0.255781 0.245885C0.0983438 0.403323 0.00989626 0.616854 0.00989626 0.839505C0.00989626 1.06216 0.0983438 1.27569 0.255781 1.43312C0.413219 1.59056 0.626751 1.67901 0.849401 1.67901H7.13309L0.256291 8.55665C0.17611 8.63409 0.112154 8.72673 0.0681567 8.82915C0.0241591 8.93157 0.00100033 9.04173 3.16969e-05 9.1532C-0.000936937 9.26467 0.020304 9.37522 0.062515 9.47839C0.104726 9.58156 0.167062 9.67529 0.245885 9.75412C0.324709 9.83294 0.418441 9.89527 0.521613 9.93748C0.624785 9.9797 0.735331 10.0009 0.846799 9.99997C0.958268 9.999 1.06843 9.97584 1.17085 9.93184C1.27327 9.88785 1.36591 9.82389 1.44335 9.74371L8.32099 2.86649V9.1506C8.32099 9.37325 8.40944 9.58678 8.56688 9.74422C8.72431 9.90166 8.93785 9.9901 9.1605 9.9901C9.38315 9.9901 9.59668 9.90166 9.75412 9.74422C9.91155 9.58678 10 9.37325 10 9.1506V0.839505C10 0.616854 9.91155 0.403323 9.75412 0.245885C9.59668 0.0884475 9.38315 0 9.1605 0Z"></path>
                    </svg>
                  </a></li>
                <li><a href="car-listing-left-sidebar.html">Auction Cars
                    <svg width="10" height="10" viewBox="0 0 10 10" xmlns="http://www.w3.org/2000/svg">
                      <path
                        d="M9.1605 0H0.849401C0.626751 0 0.413219 0.0884475 0.255781 0.245885C0.0983438 0.403323 0.00989626 0.616854 0.00989626 0.839505C0.00989626 1.06216 0.0983438 1.27569 0.255781 1.43312C0.413219 1.59056 0.626751 1.67901 0.849401 1.67901H7.13309L0.256291 8.55665C0.17611 8.63409 0.112154 8.72673 0.0681567 8.82915C0.0241591 8.93157 0.00100033 9.04173 3.16969e-05 9.1532C-0.000936937 9.26467 0.020304 9.37522 0.062515 9.47839C0.104726 9.58156 0.167062 9.67529 0.245885 9.75412C0.324709 9.83294 0.418441 9.89527 0.521613 9.93748C0.624785 9.9797 0.735331 10.0009 0.846799 9.99997C0.958268 9.999 1.06843 9.97584 1.17085 9.93184C1.27327 9.88785 1.36591 9.82389 1.44335 9.74371L8.32099 2.86649V9.1506C8.32099 9.37325 8.40944 9.58678 8.56688 9.74422C8.72431 9.90166 8.93785 9.9901 9.1605 9.9901C9.38315 9.9901 9.59668 9.90166 9.75412 9.74422C9.91155 9.58678 10 9.37325 10 9.1506V0.839505C10 0.616854 9.91155 0.403323 9.75412 0.245885C9.59668 0.0884475 9.38315 0 9.1605 0Z"></path>
                    </svg>
                  </a></li>
                <li><a href="car-listing-left-sidebar.html">Sell My Car
                    <svg width="10" height="10" viewBox="0 0 10 10" xmlns="http://www.w3.org/2000/svg">
                      <path
                        d="M9.1605 0H0.849401C0.626751 0 0.413219 0.0884475 0.255781 0.245885C0.0983438 0.403323 0.00989626 0.616854 0.00989626 0.839505C0.00989626 1.06216 0.0983438 1.27569 0.255781 1.43312C0.413219 1.59056 0.626751 1.67901 0.849401 1.67901H7.13309L0.256291 8.55665C0.17611 8.63409 0.112154 8.72673 0.0681567 8.82915C0.0241591 8.93157 0.00100033 9.04173 3.16969e-05 9.1532C-0.000936937 9.26467 0.020304 9.37522 0.062515 9.47839C0.104726 9.58156 0.167062 9.67529 0.245885 9.75412C0.324709 9.83294 0.418441 9.89527 0.521613 9.93748C0.624785 9.9797 0.735331 10.0009 0.846799 9.99997C0.958268 9.999 1.06843 9.97584 1.17085 9.93184C1.27327 9.88785 1.36591 9.82389 1.44335 9.74371L8.32099 2.86649V9.1506C8.32099 9.37325 8.40944 9.58678 8.56688 9.74422C8.72431 9.90166 8.93785 9.9901 9.1605 9.9901C9.38315 9.9901 9.59668 9.90166 9.75412 9.74422C9.91155 9.58678 10 9.37325 10 9.1506V0.839505C10 0.616854 9.91155 0.403323 9.75412 0.245885C9.59668 0.0884475 9.38315 0 9.1605 0Z"></path>
                    </svg>
                  </a></li>
                <li><a href="shop.html">Shop Now
                    <svg width="10" height="10" viewBox="0 0 10 10" xmlns="http://www.w3.org/2000/svg">
                      <path
                        d="M9.1605 0H0.849401C0.626751 0 0.413219 0.0884475 0.255781 0.245885C0.0983438 0.403323 0.00989626 0.616854 0.00989626 0.839505C0.00989626 1.06216 0.0983438 1.27569 0.255781 1.43312C0.413219 1.59056 0.626751 1.67901 0.849401 1.67901H7.13309L0.256291 8.55665C0.17611 8.63409 0.112154 8.72673 0.0681567 8.82915C0.0241591 8.93157 0.00100033 9.04173 3.16969e-05 9.1532C-0.000936937 9.26467 0.020304 9.37522 0.062515 9.47839C0.104726 9.58156 0.167062 9.67529 0.245885 9.75412C0.324709 9.83294 0.418441 9.89527 0.521613 9.93748C0.624785 9.9797 0.735331 10.0009 0.846799 9.99997C0.958268 9.999 1.06843 9.97584 1.17085 9.93184C1.27327 9.88785 1.36591 9.82389 1.44335 9.74371L8.32099 2.86649V9.1506C8.32099 9.37325 8.40944 9.58678 8.56688 9.74422C8.72431 9.90166 8.93785 9.9901 9.1605 9.9901C9.38315 9.9901 9.59668 9.90166 9.75412 9.74422C9.91155 9.58678 10 9.37325 10 9.1506V0.839505C10 0.616854 9.91155 0.403323 9.75412 0.245885C9.59668 0.0884475 9.38315 0 9.1605 0Z"></path>
                    </svg>
                  </a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col d-flex justify-content-lg-center justify-content-sm-end">
          <div class="footer-widget">
            <div class="widget-title">
              <h5>Car By Brands</h5>
            </div>
            <div class="menu-container">
              <ul>
                <li><a href="single-brand-category.html">Toyota
                    <svg width="10" height="10" viewBox="0 0 10 10" xmlns="http://www.w3.org/2000/svg">
                      <path
                        d="M9.1605 0H0.849401C0.626751 0 0.413219 0.0884475 0.255781 0.245885C0.0983438 0.403323 0.00989626 0.616854 0.00989626 0.839505C0.00989626 1.06216 0.0983438 1.27569 0.255781 1.43312C0.413219 1.59056 0.626751 1.67901 0.849401 1.67901H7.13309L0.256291 8.55665C0.17611 8.63409 0.112154 8.72673 0.0681567 8.82915C0.0241591 8.93157 0.00100033 9.04173 3.16969e-05 9.1532C-0.000936937 9.26467 0.020304 9.37522 0.062515 9.47839C0.104726 9.58156 0.167062 9.67529 0.245885 9.75412C0.324709 9.83294 0.418441 9.89527 0.521613 9.93748C0.624785 9.9797 0.735331 10.0009 0.846799 9.99997C0.958268 9.999 1.06843 9.97584 1.17085 9.93184C1.27327 9.88785 1.36591 9.82389 1.44335 9.74371L8.32099 2.86649V9.1506C8.32099 9.37325 8.40944 9.58678 8.56688 9.74422C8.72431 9.90166 8.93785 9.9901 9.1605 9.9901C9.38315 9.9901 9.59668 9.90166 9.75412 9.74422C9.91155 9.58678 10 9.37325 10 9.1506V0.839505C10 0.616854 9.91155 0.403323 9.75412 0.245885C9.59668 0.0884475 9.38315 0 9.1605 0Z"></path>
                    </svg>
                  </a></li>
                <li><a href="single-brand-category.html">BMW
                    <svg width="10" height="10" viewBox="0 0 10 10" xmlns="http://www.w3.org/2000/svg">
                      <path
                        d="M9.1605 0H0.849401C0.626751 0 0.413219 0.0884475 0.255781 0.245885C0.0983438 0.403323 0.00989626 0.616854 0.00989626 0.839505C0.00989626 1.06216 0.0983438 1.27569 0.255781 1.43312C0.413219 1.59056 0.626751 1.67901 0.849401 1.67901H7.13309L0.256291 8.55665C0.17611 8.63409 0.112154 8.72673 0.0681567 8.82915C0.0241591 8.93157 0.00100033 9.04173 3.16969e-05 9.1532C-0.000936937 9.26467 0.020304 9.37522 0.062515 9.47839C0.104726 9.58156 0.167062 9.67529 0.245885 9.75412C0.324709 9.83294 0.418441 9.89527 0.521613 9.93748C0.624785 9.9797 0.735331 10.0009 0.846799 9.99997C0.958268 9.999 1.06843 9.97584 1.17085 9.93184C1.27327 9.88785 1.36591 9.82389 1.44335 9.74371L8.32099 2.86649V9.1506C8.32099 9.37325 8.40944 9.58678 8.56688 9.74422C8.72431 9.90166 8.93785 9.9901 9.1605 9.9901C9.38315 9.9901 9.59668 9.90166 9.75412 9.74422C9.91155 9.58678 10 9.37325 10 9.1506V0.839505C10 0.616854 9.91155 0.403323 9.75412 0.245885C9.59668 0.0884475 9.38315 0 9.1605 0Z"></path>
                    </svg>
                  </a></li>
                <li><a href="single-brand-category.html">Chevrolet
                    <svg width="10" height="10" viewBox="0 0 10 10" xmlns="http://www.w3.org/2000/svg">
                      <path
                        d="M9.1605 0H0.849401C0.626751 0 0.413219 0.0884475 0.255781 0.245885C0.0983438 0.403323 0.00989626 0.616854 0.00989626 0.839505C0.00989626 1.06216 0.0983438 1.27569 0.255781 1.43312C0.413219 1.59056 0.626751 1.67901 0.849401 1.67901H7.13309L0.256291 8.55665C0.17611 8.63409 0.112154 8.72673 0.0681567 8.82915C0.0241591 8.93157 0.00100033 9.04173 3.16969e-05 9.1532C-0.000936937 9.26467 0.020304 9.37522 0.062515 9.47839C0.104726 9.58156 0.167062 9.67529 0.245885 9.75412C0.324709 9.83294 0.418441 9.89527 0.521613 9.93748C0.624785 9.9797 0.735331 10.0009 0.846799 9.99997C0.958268 9.999 1.06843 9.97584 1.17085 9.93184C1.27327 9.88785 1.36591 9.82389 1.44335 9.74371L8.32099 2.86649V9.1506C8.32099 9.37325 8.40944 9.58678 8.56688 9.74422C8.72431 9.90166 8.93785 9.9901 9.1605 9.9901C9.38315 9.9901 9.59668 9.90166 9.75412 9.74422C9.91155 9.58678 10 9.37325 10 9.1506V0.839505C10 0.616854 9.91155 0.403323 9.75412 0.245885C9.59668 0.0884475 9.38315 0 9.1605 0Z"></path>
                    </svg>
                  </a></li>
                <li><a href="single-brand-category.html">Hyundai
                    <svg width="10" height="10" viewBox="0 0 10 10" xmlns="http://www.w3.org/2000/svg">
                      <path
                        d="M9.1605 0H0.849401C0.626751 0 0.413219 0.0884475 0.255781 0.245885C0.0983438 0.403323 0.00989626 0.616854 0.00989626 0.839505C0.00989626 1.06216 0.0983438 1.27569 0.255781 1.43312C0.413219 1.59056 0.626751 1.67901 0.849401 1.67901H7.13309L0.256291 8.55665C0.17611 8.63409 0.112154 8.72673 0.0681567 8.82915C0.0241591 8.93157 0.00100033 9.04173 3.16969e-05 9.1532C-0.000936937 9.26467 0.020304 9.37522 0.062515 9.47839C0.104726 9.58156 0.167062 9.67529 0.245885 9.75412C0.324709 9.83294 0.418441 9.89527 0.521613 9.93748C0.624785 9.9797 0.735331 10.0009 0.846799 9.99997C0.958268 9.999 1.06843 9.97584 1.17085 9.93184C1.27327 9.88785 1.36591 9.82389 1.44335 9.74371L8.32099 2.86649V9.1506C8.32099 9.37325 8.40944 9.58678 8.56688 9.74422C8.72431 9.90166 8.93785 9.9901 9.1605 9.9901C9.38315 9.9901 9.59668 9.90166 9.75412 9.74422C9.91155 9.58678 10 9.37325 10 9.1506V0.839505C10 0.616854 9.91155 0.403323 9.75412 0.245885C9.59668 0.0884475 9.38315 0 9.1605 0Z"></path>
                    </svg>
                  </a></li>
                <li><a href="single-brand-category.html">Mercedes-Benz
                    <svg width="10" height="10" viewBox="0 0 10 10" xmlns="http://www.w3.org/2000/svg">
                      <path
                        d="M9.1605 0H0.849401C0.626751 0 0.413219 0.0884475 0.255781 0.245885C0.0983438 0.403323 0.00989626 0.616854 0.00989626 0.839505C0.00989626 1.06216 0.0983438 1.27569 0.255781 1.43312C0.413219 1.59056 0.626751 1.67901 0.849401 1.67901H7.13309L0.256291 8.55665C0.17611 8.63409 0.112154 8.72673 0.0681567 8.82915C0.0241591 8.93157 0.00100033 9.04173 3.16969e-05 9.1532C-0.000936937 9.26467 0.020304 9.37522 0.062515 9.47839C0.104726 9.58156 0.167062 9.67529 0.245885 9.75412C0.324709 9.83294 0.418441 9.89527 0.521613 9.93748C0.624785 9.9797 0.735331 10.0009 0.846799 9.99997C0.958268 9.999 1.06843 9.97584 1.17085 9.93184C1.27327 9.88785 1.36591 9.82389 1.44335 9.74371L8.32099 2.86649V9.1506C8.32099 9.37325 8.40944 9.58678 8.56688 9.74422C8.72431 9.90166 8.93785 9.9901 9.1605 9.9901C9.38315 9.9901 9.59668 9.90166 9.75412 9.74422C9.91155 9.58678 10 9.37325 10 9.1506V0.839505C10 0.616854 9.91155 0.403323 9.75412 0.245885C9.59668 0.0884475 9.38315 0 9.1605 0Z"></path>
                    </svg>
                  </a></li>
                <li><a href="single-brand-category.html">Jeep
                    <svg width="10" height="10" viewBox="0 0 10 10" xmlns="http://www.w3.org/2000/svg">
                      <path
                        d="M9.1605 0H0.849401C0.626751 0 0.413219 0.0884475 0.255781 0.245885C0.0983438 0.403323 0.00989626 0.616854 0.00989626 0.839505C0.00989626 1.06216 0.0983438 1.27569 0.255781 1.43312C0.413219 1.59056 0.626751 1.67901 0.849401 1.67901H7.13309L0.256291 8.55665C0.17611 8.63409 0.112154 8.72673 0.0681567 8.82915C0.0241591 8.93157 0.00100033 9.04173 3.16969e-05 9.1532C-0.000936937 9.26467 0.020304 9.37522 0.062515 9.47839C0.104726 9.58156 0.167062 9.67529 0.245885 9.75412C0.324709 9.83294 0.418441 9.89527 0.521613 9.93748C0.624785 9.9797 0.735331 10.0009 0.846799 9.99997C0.958268 9.999 1.06843 9.97584 1.17085 9.93184C1.27327 9.88785 1.36591 9.82389 1.44335 9.74371L8.32099 2.86649V9.1506C8.32099 9.37325 8.40944 9.58678 8.56688 9.74422C8.72431 9.90166 8.93785 9.9901 9.1605 9.9901C9.38315 9.9901 9.59668 9.90166 9.75412 9.74422C9.91155 9.58678 10 9.37325 10 9.1506V0.839505C10 0.616854 9.91155 0.403323 9.75412 0.245885C9.59668 0.0884475 9.38315 0 9.1605 0Z"></path>
                    </svg>
                  </a></li>
                <li><a href="single-brand-category.html">Suzuki
                    <svg width="10" height="10" viewBox="0 0 10 10" xmlns="http://www.w3.org/2000/svg">
                      <path
                        d="M9.1605 0H0.849401C0.626751 0 0.413219 0.0884475 0.255781 0.245885C0.0983438 0.403323 0.00989626 0.616854 0.00989626 0.839505C0.00989626 1.06216 0.0983438 1.27569 0.255781 1.43312C0.413219 1.59056 0.626751 1.67901 0.849401 1.67901H7.13309L0.256291 8.55665C0.17611 8.63409 0.112154 8.72673 0.0681567 8.82915C0.0241591 8.93157 0.00100033 9.04173 3.16969e-05 9.1532C-0.000936937 9.26467 0.020304 9.37522 0.062515 9.47839C0.104726 9.58156 0.167062 9.67529 0.245885 9.75412C0.324709 9.83294 0.418441 9.89527 0.521613 9.93748C0.624785 9.9797 0.735331 10.0009 0.846799 9.99997C0.958268 9.999 1.06843 9.97584 1.17085 9.93184C1.27327 9.88785 1.36591 9.82389 1.44335 9.74371L8.32099 2.86649V9.1506C8.32099 9.37325 8.40944 9.58678 8.56688 9.74422C8.72431 9.90166 8.93785 9.9901 9.1605 9.9901C9.38315 9.9901 9.59668 9.90166 9.75412 9.74422C9.91155 9.58678 10 9.37325 10 9.1506V0.839505C10 0.616854 9.91155 0.403323 9.75412 0.245885C9.59668 0.0884475 9.38315 0 9.1605 0Z"></path>
                    </svg>
                  </a></li>
                <li><a href="single-brand-category.html">Tesla
                    <svg width="10" height="10" viewBox="0 0 10 10" xmlns="http://www.w3.org/2000/svg">
                      <path
                        d="M9.1605 0H0.849401C0.626751 0 0.413219 0.0884475 0.255781 0.245885C0.0983438 0.403323 0.00989626 0.616854 0.00989626 0.839505C0.00989626 1.06216 0.0983438 1.27569 0.255781 1.43312C0.413219 1.59056 0.626751 1.67901 0.849401 1.67901H7.13309L0.256291 8.55665C0.17611 8.63409 0.112154 8.72673 0.0681567 8.82915C0.0241591 8.93157 0.00100033 9.04173 3.16969e-05 9.1532C-0.000936937 9.26467 0.020304 9.37522 0.062515 9.47839C0.104726 9.58156 0.167062 9.67529 0.245885 9.75412C0.324709 9.83294 0.418441 9.89527 0.521613 9.93748C0.624785 9.9797 0.735331 10.0009 0.846799 9.99997C0.958268 9.999 1.06843 9.97584 1.17085 9.93184C1.27327 9.88785 1.36591 9.82389 1.44335 9.74371L8.32099 2.86649V9.1506C8.32099 9.37325 8.40944 9.58678 8.56688 9.74422C8.72431 9.90166 8.93785 9.9901 9.1605 9.9901C9.38315 9.9901 9.59668 9.90166 9.75412 9.74422C9.91155 9.58678 10 9.37325 10 9.1506V0.839505C10 0.616854 9.91155 0.403323 9.75412 0.245885C9.59668 0.0884475 9.38315 0 9.1605 0Z"></path>
                    </svg>
                  </a></li>
                <li><a href="single-brand-category.html">Mazda
                    <svg width="10" height="10" viewBox="0 0 10 10" xmlns="http://www.w3.org/2000/svg">
                      <path
                        d="M9.1605 0H0.849401C0.626751 0 0.413219 0.0884475 0.255781 0.245885C0.0983438 0.403323 0.00989626 0.616854 0.00989626 0.839505C0.00989626 1.06216 0.0983438 1.27569 0.255781 1.43312C0.413219 1.59056 0.626751 1.67901 0.849401 1.67901H7.13309L0.256291 8.55665C0.17611 8.63409 0.112154 8.72673 0.0681567 8.82915C0.0241591 8.93157 0.00100033 9.04173 3.16969e-05 9.1532C-0.000936937 9.26467 0.020304 9.37522 0.062515 9.47839C0.104726 9.58156 0.167062 9.67529 0.245885 9.75412C0.324709 9.83294 0.418441 9.89527 0.521613 9.93748C0.624785 9.9797 0.735331 10.0009 0.846799 9.99997C0.958268 9.999 1.06843 9.97584 1.17085 9.93184C1.27327 9.88785 1.36591 9.82389 1.44335 9.74371L8.32099 2.86649V9.1506C8.32099 9.37325 8.40944 9.58678 8.56688 9.74422C8.72431 9.90166 8.93785 9.9901 9.1605 9.9901C9.38315 9.9901 9.59668 9.90166 9.75412 9.74422C9.91155 9.58678 10 9.37325 10 9.1506V0.839505C10 0.616854 9.91155 0.403323 9.75412 0.245885C9.59668 0.0884475 9.38315 0 9.1605 0Z"></path>
                    </svg>
                  </a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col d-flex justify-content-xl-center justify-content-lg-end justify-content-sm-center">
          <div class="footer-widget">
            <div class="widget-title">
              <h5>Car By Location</h5>
            </div>
            <div class="menu-container">
              <ul>
                <li><a href="car-listing-left-sidebar.html">Panama City
                    <svg width="10" height="10" viewBox="0 0 10 10" xmlns="http://www.w3.org/2000/svg">
                      <path
                        d="M9.1605 0H0.849401C0.626751 0 0.413219 0.0884475 0.255781 0.245885C0.0983438 0.403323 0.00989626 0.616854 0.00989626 0.839505C0.00989626 1.06216 0.0983438 1.27569 0.255781 1.43312C0.413219 1.59056 0.626751 1.67901 0.849401 1.67901H7.13309L0.256291 8.55665C0.17611 8.63409 0.112154 8.72673 0.0681567 8.82915C0.0241591 8.93157 0.00100033 9.04173 3.16969e-05 9.1532C-0.000936937 9.26467 0.020304 9.37522 0.062515 9.47839C0.104726 9.58156 0.167062 9.67529 0.245885 9.75412C0.324709 9.83294 0.418441 9.89527 0.521613 9.93748C0.624785 9.9797 0.735331 10.0009 0.846799 9.99997C0.958268 9.999 1.06843 9.97584 1.17085 9.93184C1.27327 9.88785 1.36591 9.82389 1.44335 9.74371L8.32099 2.86649V9.1506C8.32099 9.37325 8.40944 9.58678 8.56688 9.74422C8.72431 9.90166 8.93785 9.9901 9.1605 9.9901C9.38315 9.9901 9.59668 9.90166 9.75412 9.74422C9.91155 9.58678 10 9.37325 10 9.1506V0.839505C10 0.616854 9.91155 0.403323 9.75412 0.245885C9.59668 0.0884475 9.38315 0 9.1605 0Z"></path>
                    </svg>
                  </a></li>
                <li><a href="car-listing-left-sidebar.html">Sydne, AUS
                    <svg width="10" height="10" viewBox="0 0 10 10" xmlns="http://www.w3.org/2000/svg">
                      <path
                        d="M9.1605 0H0.849401C0.626751 0 0.413219 0.0884475 0.255781 0.245885C0.0983438 0.403323 0.00989626 0.616854 0.00989626 0.839505C0.00989626 1.06216 0.0983438 1.27569 0.255781 1.43312C0.413219 1.59056 0.626751 1.67901 0.849401 1.67901H7.13309L0.256291 8.55665C0.17611 8.63409 0.112154 8.72673 0.0681567 8.82915C0.0241591 8.93157 0.00100033 9.04173 3.16969e-05 9.1532C-0.000936937 9.26467 0.020304 9.37522 0.062515 9.47839C0.104726 9.58156 0.167062 9.67529 0.245885 9.75412C0.324709 9.83294 0.418441 9.89527 0.521613 9.93748C0.624785 9.9797 0.735331 10.0009 0.846799 9.99997C0.958268 9.999 1.06843 9.97584 1.17085 9.93184C1.27327 9.88785 1.36591 9.82389 1.44335 9.74371L8.32099 2.86649V9.1506C8.32099 9.37325 8.40944 9.58678 8.56688 9.74422C8.72431 9.90166 8.93785 9.9901 9.1605 9.9901C9.38315 9.9901 9.59668 9.90166 9.75412 9.74422C9.91155 9.58678 10 9.37325 10 9.1506V0.839505C10 0.616854 9.91155 0.403323 9.75412 0.245885C9.59668 0.0884475 9.38315 0 9.1605 0Z"></path>
                    </svg>
                  </a></li>
                <li><a href="car-listing-left-sidebar.html">New Delhi
                    <svg width="10" height="10" viewBox="0 0 10 10" xmlns="http://www.w3.org/2000/svg">
                      <path
                        d="M9.1605 0H0.849401C0.626751 0 0.413219 0.0884475 0.255781 0.245885C0.0983438 0.403323 0.00989626 0.616854 0.00989626 0.839505C0.00989626 1.06216 0.0983438 1.27569 0.255781 1.43312C0.413219 1.59056 0.626751 1.67901 0.849401 1.67901H7.13309L0.256291 8.55665C0.17611 8.63409 0.112154 8.72673 0.0681567 8.82915C0.0241591 8.93157 0.00100033 9.04173 3.16969e-05 9.1532C-0.000936937 9.26467 0.020304 9.37522 0.062515 9.47839C0.104726 9.58156 0.167062 9.67529 0.245885 9.75412C0.324709 9.83294 0.418441 9.89527 0.521613 9.93748C0.624785 9.9797 0.735331 10.0009 0.846799 9.99997C0.958268 9.999 1.06843 9.97584 1.17085 9.93184C1.27327 9.88785 1.36591 9.82389 1.44335 9.74371L8.32099 2.86649V9.1506C8.32099 9.37325 8.40944 9.58678 8.56688 9.74422C8.72431 9.90166 8.93785 9.9901 9.1605 9.9901C9.38315 9.9901 9.59668 9.90166 9.75412 9.74422C9.91155 9.58678 10 9.37325 10 9.1506V0.839505C10 0.616854 9.91155 0.403323 9.75412 0.245885C9.59668 0.0884475 9.38315 0 9.1605 0Z"></path>
                    </svg>
                  </a></li>
                <li><a href="car-listing-left-sidebar.html">Kualalumpur
                    <svg width="10" height="10" viewBox="0 0 10 10" xmlns="http://www.w3.org/2000/svg">
                      <path
                        d="M9.1605 0H0.849401C0.626751 0 0.413219 0.0884475 0.255781 0.245885C0.0983438 0.403323 0.00989626 0.616854 0.00989626 0.839505C0.00989626 1.06216 0.0983438 1.27569 0.255781 1.43312C0.413219 1.59056 0.626751 1.67901 0.849401 1.67901H7.13309L0.256291 8.55665C0.17611 8.63409 0.112154 8.72673 0.0681567 8.82915C0.0241591 8.93157 0.00100033 9.04173 3.16969e-05 9.1532C-0.000936937 9.26467 0.020304 9.37522 0.062515 9.47839C0.104726 9.58156 0.167062 9.67529 0.245885 9.75412C0.324709 9.83294 0.418441 9.89527 0.521613 9.93748C0.624785 9.9797 0.735331 10.0009 0.846799 9.99997C0.958268 9.999 1.06843 9.97584 1.17085 9.93184C1.27327 9.88785 1.36591 9.82389 1.44335 9.74371L8.32099 2.86649V9.1506C8.32099 9.37325 8.40944 9.58678 8.56688 9.74422C8.72431 9.90166 8.93785 9.9901 9.1605 9.9901C9.38315 9.9901 9.59668 9.90166 9.75412 9.74422C9.91155 9.58678 10 9.37325 10 9.1506V0.839505C10 0.616854 9.91155 0.403323 9.75412 0.245885C9.59668 0.0884475 9.38315 0 9.1605 0Z"></path>
                    </svg>
                  </a></li>
                <li><a href="car-listing-left-sidebar.html">Melbourne
                    <svg width="10" height="10" viewBox="0 0 10 10" xmlns="http://www.w3.org/2000/svg">
                      <path
                        d="M9.1605 0H0.849401C0.626751 0 0.413219 0.0884475 0.255781 0.245885C0.0983438 0.403323 0.00989626 0.616854 0.00989626 0.839505C0.00989626 1.06216 0.0983438 1.27569 0.255781 1.43312C0.413219 1.59056 0.626751 1.67901 0.849401 1.67901H7.13309L0.256291 8.55665C0.17611 8.63409 0.112154 8.72673 0.0681567 8.82915C0.0241591 8.93157 0.00100033 9.04173 3.16969e-05 9.1532C-0.000936937 9.26467 0.020304 9.37522 0.062515 9.47839C0.104726 9.58156 0.167062 9.67529 0.245885 9.75412C0.324709 9.83294 0.418441 9.89527 0.521613 9.93748C0.624785 9.9797 0.735331 10.0009 0.846799 9.99997C0.958268 9.999 1.06843 9.97584 1.17085 9.93184C1.27327 9.88785 1.36591 9.82389 1.44335 9.74371L8.32099 2.86649V9.1506C8.32099 9.37325 8.40944 9.58678 8.56688 9.74422C8.72431 9.90166 8.93785 9.9901 9.1605 9.9901C9.38315 9.9901 9.59668 9.90166 9.75412 9.74422C9.91155 9.58678 10 9.37325 10 9.1506V0.839505C10 0.616854 9.91155 0.403323 9.75412 0.245885C9.59668 0.0884475 9.38315 0 9.1605 0Z"></path>
                    </svg>
                  </a></li>
                <li><a href="car-listing-left-sidebar.html">City of Abu-Dubi
                    <svg width="10" height="10" viewBox="0 0 10 10" xmlns="http://www.w3.org/2000/svg">
                      <path
                        d="M9.1605 0H0.849401C0.626751 0 0.413219 0.0884475 0.255781 0.245885C0.0983438 0.403323 0.00989626 0.616854 0.00989626 0.839505C0.00989626 1.06216 0.0983438 1.27569 0.255781 1.43312C0.413219 1.59056 0.626751 1.67901 0.849401 1.67901H7.13309L0.256291 8.55665C0.17611 8.63409 0.112154 8.72673 0.0681567 8.82915C0.0241591 8.93157 0.00100033 9.04173 3.16969e-05 9.1532C-0.000936937 9.26467 0.020304 9.37522 0.062515 9.47839C0.104726 9.58156 0.167062 9.67529 0.245885 9.75412C0.324709 9.83294 0.418441 9.89527 0.521613 9.93748C0.624785 9.9797 0.735331 10.0009 0.846799 9.99997C0.958268 9.999 1.06843 9.97584 1.17085 9.93184C1.27327 9.88785 1.36591 9.82389 1.44335 9.74371L8.32099 2.86649V9.1506C8.32099 9.37325 8.40944 9.58678 8.56688 9.74422C8.72431 9.90166 8.93785 9.9901 9.1605 9.9901C9.38315 9.9901 9.59668 9.90166 9.75412 9.74422C9.91155 9.58678 10 9.37325 10 9.1506V0.839505C10 0.616854 9.91155 0.403323 9.75412 0.245885C9.59668 0.0884475 9.38315 0 9.1605 0Z"></path>
                    </svg>
                  </a></li>
                <li><a href="car-listing-left-sidebar.html">Menchester City
                    <svg width="10" height="10" viewBox="0 0 10 10" xmlns="http://www.w3.org/2000/svg">
                      <path
                        d="M9.1605 0H0.849401C0.626751 0 0.413219 0.0884475 0.255781 0.245885C0.0983438 0.403323 0.00989626 0.616854 0.00989626 0.839505C0.00989626 1.06216 0.0983438 1.27569 0.255781 1.43312C0.413219 1.59056 0.626751 1.67901 0.849401 1.67901H7.13309L0.256291 8.55665C0.17611 8.63409 0.112154 8.72673 0.0681567 8.82915C0.0241591 8.93157 0.00100033 9.04173 3.16969e-05 9.1532C-0.000936937 9.26467 0.020304 9.37522 0.062515 9.47839C0.104726 9.58156 0.167062 9.67529 0.245885 9.75412C0.324709 9.83294 0.418441 9.89527 0.521613 9.93748C0.624785 9.9797 0.735331 10.0009 0.846799 9.99997C0.958268 9.999 1.06843 9.97584 1.17085 9.93184C1.27327 9.88785 1.36591 9.82389 1.44335 9.74371L8.32099 2.86649V9.1506C8.32099 9.37325 8.40944 9.58678 8.56688 9.74422C8.72431 9.90166 8.93785 9.9901 9.1605 9.9901C9.38315 9.9901 9.59668 9.90166 9.75412 9.74422C9.91155 9.58678 10 9.37325 10 9.1506V0.839505C10 0.616854 9.91155 0.403323 9.75412 0.245885C9.59668 0.0884475 9.38315 0 9.1605 0Z"></path>
                    </svg>
                  </a></li>
                <li><a href="car-listing-left-sidebar.html">Dhaka City
                    <svg width="10" height="10" viewBox="0 0 10 10" xmlns="http://www.w3.org/2000/svg">
                      <path
                        d="M9.1605 0H0.849401C0.626751 0 0.413219 0.0884475 0.255781 0.245885C0.0983438 0.403323 0.00989626 0.616854 0.00989626 0.839505C0.00989626 1.06216 0.0983438 1.27569 0.255781 1.43312C0.413219 1.59056 0.626751 1.67901 0.849401 1.67901H7.13309L0.256291 8.55665C0.17611 8.63409 0.112154 8.72673 0.0681567 8.82915C0.0241591 8.93157 0.00100033 9.04173 3.16969e-05 9.1532C-0.000936937 9.26467 0.020304 9.37522 0.062515 9.47839C0.104726 9.58156 0.167062 9.67529 0.245885 9.75412C0.324709 9.83294 0.418441 9.89527 0.521613 9.93748C0.624785 9.9797 0.735331 10.0009 0.846799 9.99997C0.958268 9.999 1.06843 9.97584 1.17085 9.93184C1.27327 9.88785 1.36591 9.82389 1.44335 9.74371L8.32099 2.86649V9.1506C8.32099 9.37325 8.40944 9.58678 8.56688 9.74422C8.72431 9.90166 8.93785 9.9901 9.1605 9.9901C9.38315 9.9901 9.59668 9.90166 9.75412 9.74422C9.91155 9.58678 10 9.37325 10 9.1506V0.839505C10 0.616854 9.91155 0.403323 9.75412 0.245885C9.59668 0.0884475 9.38315 0 9.1605 0Z"></path>
                    </svg>
                  </a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col d-flex justify-content-xl-end justify-content-sm-center">
          <div class="footer-widget">
            <div class="widget-title">
              <h5>Download App</h5>
            </div>
            <div class="app-download">
              <ul>
                <li>
                  <a href="#"><img src="images/google-app.svg" alt=""></a>
                </li>
                <li>
                  <a href="#"><img src="images/apple-app.svg" alt=""></a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="footer-center">
      <div class="footer-logo">
        <a href="index.html"><img src="images/footer-logo.svg" alt=""></a>
      </div>
      <div class="contact-area">
        <div class="hotline-area">
          <div class="icon">
            <svg width="32" height="32" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg">
              <path
                d="M31.1603 24.6852L24.6834 20.3658C23.8615 19.8221 22.7597 20.001 22.152 20.7769L20.2654 23.2027C20.1481 23.3573 19.9789 23.4645 19.789 23.5045C19.599 23.5444 19.4011 23.5145 19.2314 23.4203L18.8725 23.2224C17.6828 22.574 16.2025 21.7667 13.22 18.7831C10.2375 15.7995 9.42859 14.3181 8.78012 13.1306L8.58334 12.7717C8.48781 12.6021 8.45678 12.4037 8.49597 12.213C8.53516 12.0223 8.64193 11.8522 8.79662 11.734L11.2208 9.84792C11.9964 9.2402 12.1756 8.13874 11.6324 7.31655L7.31309 0.83963C6.75648 0.00237835 5.63977 -0.24896 4.77809 0.269026L2.06967 1.89597C1.21867 2.39626 0.594346 3.20652 0.327557 4.15695C-0.647737 7.71055 0.0859667 13.8435 9.12038 22.879C16.3071 30.0651 21.6572 31.9976 25.3345 31.9976C26.1809 32.0013 27.0239 31.8912 27.8409 31.6703C28.7915 31.4038 29.6018 30.7794 30.1018 29.9281L31.7304 27.2214C32.2491 26.3595 31.9979 25.2421 31.1603 24.6852ZM30.8115 26.6742L29.1867 29.3826C28.8277 29.997 28.2449 30.4488 27.5603 30.6432C24.2797 31.5439 18.5483 30.7979 9.87489 22.1245C1.20149 13.4511 0.455538 7.72017 1.35622 4.4391C1.55097 3.75367 2.00324 3.17011 2.61841 2.81053L5.32682 1.1857C5.7007 0.960737 6.18538 1.06978 6.4269 1.4331L8.77324 4.95577L10.7426 7.90946C10.9784 8.26609 10.9009 8.74409 10.5645 9.00798L8.13978 10.8941C7.40188 11.4583 7.19117 12.4792 7.64547 13.2895L7.83801 13.6393C8.51953 14.8892 9.36684 16.4442 12.4603 19.5371C15.5537 22.63 17.1081 23.4773 18.3575 24.1588L18.7078 24.3518C19.518 24.8061 20.539 24.5954 21.1032 23.8575L22.9893 21.4328C23.2533 21.0966 23.7311 21.0191 24.0879 21.2547L30.5642 25.5741C30.9278 25.8154 31.0368 26.3004 30.8115 26.6742ZM18.1324 5.33496C23.1367 5.34053 27.1921 9.39599 27.1977 14.4003C27.1977 14.6948 27.4364 14.9335 27.7309 14.9335C28.0255 14.9335 28.2642 14.6948 28.2642 14.4003C28.258 8.8072 23.7255 4.27462 18.1324 4.2685C17.8378 4.2685 17.5991 4.50721 17.5991 4.80173C17.5991 5.09625 17.8378 5.33496 18.1324 5.33496Z"></path>
              <path
                d="M18.1324 8.53424C21.3704 8.53805 23.9944 11.162 23.9982 14.4001C23.9982 14.5415 24.0544 14.6771 24.1544 14.7771C24.2544 14.8771 24.39 14.9333 24.5314 14.9333C24.6728 14.9333 24.8085 14.8771 24.9085 14.7771C25.0085 14.6771 25.0646 14.5415 25.0646 14.4001C25.0602 10.5733 21.9591 7.47215 18.1324 7.46777C17.8378 7.46777 17.5991 7.70649 17.5991 8.00101C17.5991 8.29553 17.8378 8.53424 18.1324 8.53424Z"></path>
              <path
                d="M18.1324 11.7344C19.6041 11.7362 20.7968 12.9289 20.7986 14.4007C20.7986 14.5422 20.8548 14.6778 20.9548 14.7778C21.0548 14.8778 21.1905 14.934 21.3319 14.934C21.4733 14.934 21.6089 14.8778 21.7089 14.7778C21.8089 14.6778 21.8651 14.5422 21.8651 14.4007C21.8627 12.3402 20.1929 10.6703 18.1324 10.668C17.8378 10.668 17.5991 10.9067 17.5991 11.2012C17.5991 11.4957 17.8378 11.7344 18.1324 11.7344Z"></path>
            </svg>
          </div>
          <div class="content">
            <span>To More Inquiry</span>
            <h6><a href="tel:+990737621432">+990-737 621 432</a></h6>
          </div>
        </div>
        <div class="hotline-area">
          <div class="icon">
            <svg width="32" height="33" viewBox="0 0 32 33" xmlns="http://www.w3.org/2000/svg">
              <path
                d="M16.6608 18.13C15.4654 18.1243 14.2777 17.9369 13.1387 17.5742C12.2446 17.2751 11.446 16.7441 10.8242 16.0355C10.2024 15.3269 9.77978 14.466 9.59946 13.5406C9.19786 11.6068 9.93012 9.56195 11.6069 7.92995C11.7871 7.75461 11.9742 7.58665 12.168 7.42649C13.0138 6.71831 14.0193 6.22662 15.0976 5.99386C16.1759 5.7611 17.2947 5.79426 18.3573 6.09049C19.3764 6.4159 20.2699 7.04873 20.915 7.90213C21.5601 8.75553 21.9253 9.78766 21.9605 10.8569C22.0387 12.1181 21.6276 13.3609 20.8128 14.3268C20.5045 14.715 20.0953 15.0108 19.6299 15.1816C19.1646 15.3525 18.6612 15.3918 18.1749 15.2953C17.9743 15.2536 17.7841 15.172 17.6158 15.0551C17.4474 14.9383 17.3044 14.7887 17.1952 14.6153C17.0972 14.4468 17.0342 14.2603 17.01 14.067C16.9858 13.8736 17.0009 13.6774 17.0544 13.49C17.5211 11.7268 17.9952 9.04729 18 9.02062C18.0122 8.95163 18.0378 8.88572 18.0755 8.82665C18.1132 8.76757 18.1621 8.7165 18.2195 8.67633C18.2769 8.63617 18.3416 8.6077 18.41 8.59256C18.4784 8.57742 18.5491 8.5759 18.6181 8.58809C18.6871 8.60027 18.753 8.62593 18.8121 8.66359C18.8712 8.70125 18.9222 8.75017 18.9624 8.80757C19.0026 8.86497 19.031 8.92972 19.0462 8.99812C19.0613 9.06652 19.0628 9.13723 19.0507 9.20622C19.0309 9.31769 18.5637 11.9566 18.0859 13.7625C18.069 13.812 18.0625 13.8645 18.0666 13.9167C18.0707 13.9689 18.0854 14.0197 18.1099 14.066C18.1836 14.1679 18.2949 14.2364 18.4192 14.2564C18.7169 14.3061 19.0226 14.2735 19.3032 14.1621C19.5838 14.0507 19.8286 13.8648 20.0112 13.6244C20.644 12.8674 20.961 11.8958 20.8965 10.9113C20.8711 10.0601 20.5829 9.23771 20.0714 8.55687C19.56 7.87603 18.8504 7.37014 18.04 7.10862C17.1472 6.86304 16.2081 6.83838 15.3036 7.03675C14.3992 7.23513 13.5566 7.65059 12.8485 8.24729C12.6773 8.38969 12.5104 8.53849 12.3504 8.69422C11.5216 9.50062 10.1973 11.1742 10.6437 13.3236C10.7911 14.0615 11.1287 14.7481 11.6231 15.3153C12.1175 15.8826 12.7515 16.3109 13.4624 16.5577C15.9637 17.3556 19.5584 17.4521 21.4517 15.0974C21.5414 14.9907 21.6693 14.9234 21.808 14.9098C21.9467 14.8962 22.0852 14.9375 22.1939 15.0248C22.3026 15.1121 22.3728 15.2384 22.3895 15.3768C22.4061 15.5151 22.368 15.6546 22.2832 15.7652C20.8827 17.507 18.7515 18.13 16.6608 18.13Z"></path>
              <path
                d="M14.8353 15.3649C14.2714 15.3747 13.7214 15.1899 13.2779 14.8417C12.2545 14.0225 12.2262 12.599 12.5131 11.6299C12.6102 11.3073 12.7398 10.9953 12.9009 10.6993C13.301 9.89185 13.9409 9.22779 14.7329 8.79794C15.2132 8.54876 15.761 8.46069 16.2953 8.54674C16.8295 8.63279 17.322 8.8884 17.6998 9.27581C18.0847 9.69756 18.3746 10.197 18.5499 10.7403C18.594 10.8728 18.5844 11.0172 18.5232 11.1427C18.4621 11.2681 18.3541 11.3646 18.2226 11.4113C18.0911 11.4581 17.9465 11.4514 17.8198 11.3928C17.6932 11.3342 17.5946 11.2282 17.5451 11.0977C17.4187 10.6964 17.2085 10.3265 16.9286 10.0123C16.7085 9.78721 16.4209 9.6402 16.1095 9.59369C15.7981 9.54719 15.4801 9.60374 15.2038 9.75474C14.6098 10.0897 14.1325 10.5983 13.8358 11.2123C13.7112 11.4425 13.6106 11.6848 13.5355 11.9355C13.3281 12.6363 13.3739 13.5515 13.9457 14.0091C14.5707 14.5115 15.6257 14.2993 16.2193 13.7873C16.6614 13.389 17.0413 12.9266 17.3462 12.4155C17.3831 12.356 17.4314 12.3043 17.4884 12.2635C17.5453 12.2226 17.6097 12.1934 17.6779 12.1774C17.7461 12.1614 17.8168 12.159 17.886 12.1704C17.9551 12.1817 18.0213 12.2066 18.0809 12.2435C18.1404 12.2805 18.1921 12.3288 18.2329 12.3857C18.2738 12.4426 18.303 12.507 18.319 12.5753C18.335 12.6435 18.3374 12.7142 18.326 12.7833C18.3147 12.8524 18.2898 12.9187 18.2529 12.9782C17.8914 13.5802 17.4413 14.1245 16.9179 14.5926C16.3348 15.0847 15.5982 15.3578 14.8353 15.3649Z"></path>
              <path
                d="M30.4005 32.0023H1.60049C1.17627 32.0019 0.769552 31.8332 0.469585 31.5332C0.169619 31.2332 0.000911967 30.8265 0.000488386 30.4023V10.669C0.000424993 10.5676 0.0292616 10.4683 0.0836186 10.3827C0.137976 10.2971 0.215601 10.2288 0.307397 10.1858C0.399192 10.1427 0.501355 10.1267 0.601912 10.1397C0.702468 10.1526 0.797252 10.1939 0.875155 10.2588L13.961 21.1346C14.535 21.6089 15.2564 21.8683 16.001 21.8683C16.7456 21.8683 17.467 21.6089 18.041 21.1346L31.1258 10.2583C31.2038 10.1934 31.2986 10.152 31.3992 10.1391C31.4998 10.1262 31.602 10.1422 31.6938 10.1853C31.7856 10.2284 31.8633 10.2968 31.9176 10.3825C31.9719 10.4682 32.0007 10.5675 32.0005 10.669V30.4023C32.0001 30.8265 31.8314 31.2332 31.5314 31.5332C31.2314 31.8332 30.8247 32.0019 30.4005 32.0023ZM1.06716 11.8055V30.4023C1.06716 30.6967 1.30609 30.9356 1.60049 30.9356H30.4005C30.5419 30.9356 30.6776 30.8794 30.7776 30.7794C30.8776 30.6794 30.9338 30.5438 30.9338 30.4023V11.8055L18.7216 21.9548C17.956 22.5875 16.994 22.9337 16.0009 22.9339C15.0079 22.934 14.0457 22.5882 13.28 21.9559L1.06716 11.8055Z"></path>
              <path
                d="M0.534374 11.2024C0.42111 11.2026 0.310717 11.1668 0.219187 11.1C0.127657 11.0333 0.0597426 10.9392 0.0252829 10.8313C-0.00917678 10.7234 -0.00839247 10.6074 0.0275222 10.4999C0.063437 10.3925 0.132617 10.2993 0.22504 10.2339L5.02504 6.83119C5.14046 6.74936 5.28366 6.71673 5.42314 6.74049C5.56262 6.76424 5.68695 6.84243 5.76877 6.95785C5.8506 7.07327 5.88323 7.21648 5.85947 7.35595C5.83572 7.49543 5.75753 7.61976 5.64211 7.70159L0.842107 11.1043C0.752234 11.1682 0.644662 11.2025 0.534374 11.2024ZM31.4666 11.2024C31.3564 11.2025 31.2488 11.1682 31.1589 11.1043L26.3589 7.70159C26.2447 7.61935 26.1676 7.49531 26.1445 7.35649C26.1213 7.21768 26.154 7.07534 26.2353 6.9605C26.3167 6.84566 26.4401 6.76762 26.5788 6.7434C26.7174 6.71918 26.86 6.75073 26.9754 6.83119L31.7754 10.2339C31.8678 10.2993 31.9369 10.3924 31.9729 10.4997C32.0088 10.607 32.0097 10.723 31.9754 10.8308C31.941 10.9386 31.8733 11.0328 31.7819 11.0996C31.6906 11.1664 31.5798 11.2024 31.4666 11.2024ZM20.9285 3.73572C20.8181 3.73582 20.7103 3.70152 20.6202 3.63759L18.0709 1.82959C17.4975 1.34491 16.7721 1.07691 16.0213 1.07233C15.2705 1.06775 14.5419 1.32688 13.9626 1.80452L11.3813 3.63759C11.2659 3.71941 11.1227 3.75204 10.9832 3.72828C10.8437 3.70453 10.7194 3.62634 10.6376 3.51092C10.5557 3.3955 10.5231 3.2523 10.5469 3.11282C10.5706 2.97334 10.6488 2.84901 10.7642 2.76719L13.3136 0.959185C14.0773 0.33469 15.0346 -0.00443301 16.0212 4.37621e-05C17.0077 0.00452053 17.9619 0.352318 18.72 0.983718L21.2373 2.76719C21.3297 2.83266 21.3989 2.92585 21.4348 3.03327C21.4707 3.14069 21.4715 3.25675 21.4371 3.36465C21.4026 3.47254 21.3347 3.56667 21.2432 3.63338C21.1516 3.7001 21.0412 3.73594 20.928 3.73572H20.9285ZM0.880507 31.7144C0.770687 31.7146 0.663477 31.6809 0.573522 31.6179C0.483567 31.5549 0.415252 31.4657 0.377909 31.3624C0.340566 31.2591 0.336016 31.1468 0.364879 31.0409C0.393742 30.9349 0.454612 30.8405 0.539174 30.7704L12.7098 20.6584C12.7637 20.6136 12.8259 20.5799 12.8928 20.5592C12.9598 20.5385 13.0301 20.5311 13.0999 20.5376C13.1696 20.5441 13.2374 20.5642 13.2994 20.5969C13.3614 20.6295 13.4163 20.6741 13.461 20.728C13.5058 20.7819 13.5395 20.8441 13.5602 20.911C13.5809 20.9779 13.5883 21.0482 13.5818 21.118C13.5754 21.1878 13.5552 21.2556 13.5226 21.3175C13.4899 21.3795 13.4453 21.4344 13.3914 21.4792L1.22077 31.5912C1.12524 31.6708 1.00485 31.7144 0.880507 31.7144ZM31.12 31.7144C30.9956 31.7145 30.8752 31.6709 30.7797 31.5912L18.609 21.4792C18.5538 21.4349 18.5079 21.38 18.474 21.3178C18.4402 21.2556 18.4191 21.1872 18.4119 21.1167C18.4048 21.0463 18.4117 20.9751 18.4324 20.9073C18.4531 20.8396 18.4871 20.7766 18.5323 20.7221C18.5776 20.6676 18.6333 20.6227 18.6961 20.59C18.7589 20.5573 18.8276 20.5374 18.8982 20.5315C18.9688 20.5256 19.0399 20.5338 19.1073 20.5557C19.1746 20.5776 19.237 20.6127 19.2906 20.6589L31.4613 30.7709C31.5459 30.841 31.6067 30.9355 31.6356 31.0414C31.6645 31.1474 31.6599 31.2597 31.6226 31.3629C31.5852 31.4662 31.5169 31.5554 31.427 31.6184C31.337 31.6814 31.2298 31.7146 31.12 31.7144Z"></path>
              <path
                d="M26.6672 15.1919C26.5258 15.1919 26.3901 15.1358 26.2901 15.0357C26.1901 14.9357 26.1339 14.8001 26.1339 14.6586V3.74021C26.1323 3.75088 26.1109 3.73595 26.0752 3.73595H5.92587C5.91421 3.73524 5.90252 3.73691 5.89152 3.74085C5.88052 3.7448 5.87043 3.75093 5.86187 3.75888L5.8672 14.6586C5.8672 14.8001 5.81101 14.9357 5.71099 15.0357C5.61097 15.1358 5.47532 15.1919 5.33387 15.1919C5.19242 15.1919 5.05677 15.1358 4.95675 15.0357C4.85673 14.9357 4.80054 14.8001 4.80054 14.6586V3.73595C4.80891 3.44547 4.93203 3.17014 5.14294 2.97023C5.35384 2.77032 5.63536 2.66211 5.92587 2.66928H26.0752C26.3657 2.66211 26.6472 2.77032 26.8581 2.97023C27.069 3.17014 27.1922 3.44547 27.2005 3.73595V14.6586C27.2005 14.8001 27.1443 14.9357 27.0443 15.0357C26.9443 15.1358 26.8087 15.1919 26.6672 15.1919Z"></path>
            </svg>
          </div>
          <div class="content">
            <span>To Send Mail</span>
            <h6><a href="/cdn-cgi/l/email-protection#f1989f979eb1969c90989ddf929e9c"><span
                  class="__cf_email__" data-cfemail="670e09010827000a060e0b4904080a">[email�&nbsp;protected]</span></a>
            </h6>
          </div>
        </div>
      </div>
      <div class="footer-btm-menu">
        <ul>
          <li><a href="#">Advertise With Us</a></li>
          <li><a href="#">Our Sitemap</a></li>
        </ul>
      </div>
    </div>
    <div class="footer-btm">
      <div class="copyright-area">
        <p>Copyright 2023 <a href="#">DRIVCO</a> | Design By <a href="#">Egens Lab</a></p>
      </div>
      <div class="social-area">
        <h6>Follow Drivco:</h6>
        <ul>
          <li><a href="https://www.facebook.com/"><i class="bx bxl-facebook"></i></a></li>
          <li><a href="https://twitter.com/"><i class="bx bxl-twitter"></i></a></li>
          <li><a href="https://www.linkedin.com/"><i class="bx bxl-linkedin"></i></a></li>
          <li><a href="https://www.instagram.com/"><i class="bx bxl-instagram-alt"></i></a></li>
        </ul>
      </div>
    </div>
  </div>
</footer>

<script data-cfasync="false" src="{{ asset('js/email-decode.min.js') }}"></script>
<script src="{{ asset('js/jquery-3.6.0.min.js') }}"></script>
<script src="{{ asset('js/jquery-ui.js') }}"></script>

<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/popper.min.js') }}"></script>

<script src="{{ asset('js/swiper-bundle.min.js') }}"></script>
<script src="{{ asset('js/slick.js') }}"></script>

<script src="{{ asset('js/waypoints.min.js') }}"></script>

<script src="{{ asset('js/wow.min.js') }}"></script>

<script src="{{ asset('js/jquery.counterup.min.js') }}"></script>

<script src="{{ asset('js/isotope.pkgd.min.js') }}"></script>

<script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>

<script src="{{ asset('js/gsap.min.js') }}"></script>
<script src="{{ asset('js/simpleParallax.min.js') }}"></script>
<script src="{{ asset('js/TweenMax.min.js') }}"></script>

<script src="{{ asset('js/jquery.marquee.min.js') }}"></script>

<script src="{{ asset('js/jquery.nice-select.min.js') }}"></script>

<script src="{{ asset('js/jquery.fancybox.min.js') }}"></script>

<script src="{{ asset('js/custom.js') }}"></script>
<script>
  $(".marquee_text").marquee({
    direction: "left",
    duration: 25000,
    gap: 50,
    delayBeforeStart: 0,
    duplicated: true,
    startVisible: true,
  });
  $(".marquee_text2").marquee({
    direction: "left",
    duration: 25000,
    gap: 50,
    delayBeforeStart: 0,
    duplicated: true,
    startVisible: true,
  });
</script>

</body>
</html>
