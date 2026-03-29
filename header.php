<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Five Cross Architecture</title>
    <meta name="description" content="The title Five Cross refers to the practice's five core principles, as well as its association with the five elements found in nature. (Panchamahabhuta). ">
  
  <!--main cssfile-->
    <link href="css/style.css" rel="stylesheet">
    
    <!-- main bootstrap5 internal file-->
    <link href="css/bootstrap5main.css" rel="stylesheet">
    
    <!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">-->
    
    <!--fontawesome5 link-->
    <link href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" rel="stylesheet">
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    
    <!--link for font-family-->
    <!--<link href="https://fivecrossarchitects.com/css/font-style.css" rel="stylesheet">-->
    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    
    <!-- jQuery 2.2.0 -->
    <!--<script src="https://code.jquery.com/jquery-2.2.0.min.js"></script>-->
    <!-- Popper.js -->
    <!--<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.11.6/umd/popper.min.js"></script>-->
    <!-- Owl Carousel JS -->
    <!--<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>-->
    

<style>


.navmain-menu .nav-item .nav-link.active {
      background-color: #000 !important; /* Change background color here */
      color: #fff !important; /* Change text color here */
    }

div#google_translate_element {
    display: none;
}
.manu-trans-but {
    color: #000;
    border: 1px solid;
    border-radius: 25px;
    padding: 10px 10px;
    font-size: 16px;
    line-height: 19.2px;
    background-color: #ffffff73;
    font-family: "UniversNextProMedium" !important;
}
div#goog-gt-tt {
    display: none !important;
}


/*Font Family  Start*/
@font-face {
    font-family: "UniversNextProLight" ;
    src: url(/font/UniversNextProLight.ttf) format("truetype");
}

@font-face {
    font-family: "UniversNextProMedium";
    src: url(/font/UniversNextProMedium.ttf) format("truetype");
}

@font-face {
    font-family: "UniversNextProRegular";
    src: url(/font/UniversNextProRegular.ttf) format("truetype");
}

@font-face {
    font-family: "UniversNextProBold";
    src: url(/font/UniversNextProBold.ttf)
        format("truetype");
}
@font-face {
    font-family: "UniversNextProBoldCond";
    src: url(/font/UniversNextProBoldCond.ttf) format("truetype");
}




body{font-family: 'UniversNextProLight'}
.light_font
{
   font-family: 'UniversNextProLight';
}
.bold_font
{
   font-family: 'UniversNextProBold';
}
.boldcond_font
{
   font-family: 'UniversNextProBoldCond';
}
.medium_font
{
   font-family: 'UniversNextProMedium';
}
.regular_font
{
   font-family: 'UniversNextProRegular';
}
/*Font Family  end*/
</style>

</head>
<body>
    <!-- Header sectiopn start-->
    <div class="header_main">
        <nav class="navbar navbar-expand-md" id="site-header">
          <div class="container">
          <!-- Navbar Brand with Logo -->
          <a class="navbar-brand col-4" href="index.php">
            <img src="/image/logo-new.webp" alt="Logo" width="200" height="80" class="d-inline-block align-top">
          </a>
          <!-- Navbar Toggler Button for Small Screens -->
          <button class="navbar-toggler" type="button" aria-label="Toggle navigation" data-bs-toggle="collapse" href="#demo">
            <span class="navbar-toggler-icon"></span>
          </button>
          <!-- Navbar Links -->
          <div class="collapse navbar-collapse col-8 justify-content-end" id="demo">
            <ul class="navbar-nav navmain-menu">
              <li class="nav-item">
                <a class="nav-link" href="project.php">Project</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="new-&-insights.php">News & Insights</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="about-us.php">About Us</a>
              </li> 
              <li class="nav-item">
                <a class="nav-link" href="contact-us.php">Contact </a>
              </li> 
              <li class="nav-item">
<div id="google_translate_element"></div>
    <button class="manu-trans-but" id="btn-eng" onclick="toggleLanguage()">EN</button>
              </li>    
            </ul>
          </div>
        </div>
        </nav>
      </div>
      
<!-- header section end -->
<script>
     // Add 'active' class to navbar link corresponding to current page
  document.addEventListener("DOMContentLoaded", function() {
    const url = window.location.href;
    document.querySelectorAll('.navbar-nav .nav-link').forEach(item => {
      if (url.includes(item.getAttribute('href'))) {
        item.classList.add('active');
      }
    });
  });
</script>
