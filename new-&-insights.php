<?php include 'header.php'; ?> <div class="news-page">
    
    <style>.search-container {
    position: relative;
    
  }

  .search-icon {
    position: absolute;
    left: 0;
    top: 50%;
    transform: translateY(-50%);
    cursor: pointer;
    font-size: 22px;
    transition: left 0.3s ease;
  }

  .search-input {
    width: 0;
    padding: 8px;
    padding-left: 30px; /* Adjust padding to accommodate icon */
    border: none;
    outline: none;
    transition: width 0.3s ease;
  }

  .search-icon.active {
    left: -10px; /* Adjust distance to move icon to the left */
  }

  .search-icon.active + .search-input {
    width: 150px; /* Adjust width as needed */
  }
  .news-page a.nav-link.active{
          font-family: 'UniversNextProBold' !important;
  }
  .event-section {
    padding: 32px 0;
}
.recent-section {
    padding: 32px 0;
}
.insights-section {
    padding: 32px 0;
}
.exhibition-section {
    padding: 32px 0;
}

.com_soon {
    height: 400px !important;

}
.com_soon p {
    font-size: 40px;
    margin-top: 30px;
}
  </style>
  <div class="news-page newsmobhide">
<div class="container">
    <div class="news-navbar d-flex justify-content-between navbar_sticky">
        <nav id="navbar-example2" class="navbar ">
            <ul class="nav">
                <li class="nav-item">
                    <a class="nav-link regular_font active" href="#all">All</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link regular_font" href="#insights">Insights</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link regular_font" href="#exhibitions">Exhibitions</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link regular_font" href="#events">Events</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link regular_font" href="#publication">Publication</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link regular_font" href="#archives">Archives</a>
                </li>
            </ul>
        </nav>
        
        <div class="nav-item">
            <div class="search-container">
  <div class="search-icon" onclick="toggleSearch()"><i class="bi bi-search"></i></div>
  <input type="text" class="search-input" placeholder="Search...">
</div>
        </div>
    </div>
</div>


<!--<div data-bs-spy="scroll" data-bs-target="#navbar-example2" data-bs-root-margin="0px 0px -40%" data-bs-smooth-scroll="true" class="scrollspy-example rounded-2" tabindex="0">-->
<!--  <div id="all" class="recent-section">-->
<!--  <div class="container">-->
<!--      <h4 class="news-recent bold_font">RECENT NEWS</h4>-->
<!--      <p class="news-para regular_font">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>-->
<!--   </div>-->
<!--   <div class="container">-->
<!--      <div class="row">-->
<!--         <div class="col-3">-->
<!--            <div class="card-image">-->
<!--               <img src="/image/newsimage/6fbf113da681a5352f6a35d5f2bdbf2e.jpg" class="card-img-top" alt="..." height="192px" width="287px">-->
<!--               <div class="card-news">-->
<!--                  <h5 class="card-title medium_font">Hamilton Studios</h5>-->
<!--                  <p class="date-news medium_font">Nov’23</p>-->
<!--               </div>-->
<!--               <div>-->
<!--                  <p class="card-text regular_font">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>-->
<!--                  <a href="#" class="heri-button art-red regular_font">Heritage</a>-->
<!--                  <a href="#" class="heri-button art-yellow regular_font">Art</a>-->
<!--               </div>-->
<!--            </div>-->
<!--         </div>-->
<!--         <div class="col-3">-->
<!--            <div class="card-image">-->
<!--               <img src="/image/newsimage/57bc7fc77a5e3af755669417f3007c98.jpg" class="card-img-top" alt="..." height="335px" width="287px">-->
<!--               <div class="card-news">-->
<!--                  <h5 class="card-title medium_font">Hamilton Studios</h5>-->
<!--                  <p class="date-news medium_font">Nov’23</p>-->
<!--               </div>-->
<!--               <div>-->
<!--                  <p class="card-text regular_font">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>-->
<!--                  <a href="#" class="heri-button art-blue regular_font">Architecture</a>-->
<!--                  <a href="#" class="heri-button art-green regular_font">Culture</a>-->
<!--               </div>-->
<!--            </div>-->
<!--         </div>-->
<!--         <div class="col-3">-->
<!--            <div class="card-image">-->
<!--               <img src="/image/newsimage/1b4b3c53dbc3de1307a03544dcae5592.jpg" class="card-img-top" alt="..." height="255px" width="287px">-->
<!--               <div class="card-news">-->
<!--                  <h5 class="card-title medium_font">Hamilton Studios</h5>-->
<!--                  <p class="date-news medium_font">Nov’23</p>-->
<!--               </div>-->
<!--               <div>-->
<!--                  <p class="card-text regular_font">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>-->
<!--                  <a href="#" class="heri-button art-red regular_font">Heritage</a>-->
<!--                  <a href="#" class="heri-button art-darkgreen regular_font">Urban</a>-->
<!--               </div>-->
<!--            </div>-->
<!--         </div>-->
<!--         <div class="col-3">-->
<!--            <div class="card-image">-->
<!--               <img src="/image/newsimage/sgsdgdeharjr.png" class="card-img-top" alt="..." height="335px" width="287px">-->
<!--               <div class="card-news">-->
<!--                  <h5 class="card-title medium_font">Hamilton Studios</h5>-->
<!--                  <p class="date-news medium_font">Nov’23</p>-->
<!--               </div>-->
<!--               <div>-->
<!--                  <p class="card-text regular_font">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>-->
<!--                  <a href="#" class="heri-button art-blue regular_font">Architecture</a>-->
<!--                  <a href="#" class="heri-button art-green regular_font">Culture</a>-->
<!--               </div>-->
<!--            </div>-->
<!--         </div>		 -->
<!--      </div>-->
<!--   </div>-->
<!--   </div>-->
<!--   <div id="insights" class="insights-section">-->
<!--   <div class="container">-->
<!--      <h4 class="news-insights bold_font">INSIGHTS</h4>-->
<!--      <p class="news-para regular_font">Two three lines introducing Five cross architects, Two three lines introducing Five cross architects. Two three lines introducing Five cross architects. Two three lines introducing Five cross architects. Two three lines introducing Five cross architects. Two three lines</p>-->
<!--   </div>-->
<!--   <div class="container">-->
<!--      <div class="row">-->
<!--          <div class="col-3">-->
<!--            <div class="card-image">-->
<!--               <img src="/image/newsimage/57bc7fc77a5e3af755669417f3007c98.jpg" class="card-img-top" alt="..." height="335px" width="287px">-->
<!--               <div class="card-news">-->
<!--                  <h5 class="card-title medium_font">Hamilton Studios</h5>-->
<!--                  <p class="date-news medium_font">Nov’23</p>-->
<!--               </div>-->
<!--               <div>-->
<!--                  <p class="card-text regular_font">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, </p>-->
<!--                  <a href="#" class="heri-button art-blue regular_font">Architecture</a>-->
<!--                  <a href="#" class="heri-button art-green regular_font">Culture</a>-->
<!--               </div>-->
<!--            </div>-->
<!--         </div>-->
<!--		 <div class="col-3">-->
<!--            <div class="card-image">-->
<!--               <img src="/image/newsimage/57bc7fc77a5e3af755669417f3007c98.jpg" class="card-img-top" alt="..." height="335px" width="287px">-->
<!--               <div class="card-news">-->
<!--                  <h5 class="card-title medium_font">Hamilton Studios</h5>-->
<!--                  <p class="date-news medium_font">Nov’23</p>-->
<!--               </div>-->
<!--               <div>-->
<!--                  <p class="card-text regular_font">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit, </p>-->
<!--                  <a href="#" class="heri-button art-blue regular_font">Architecture</a>-->
<!--                  <a href="#" class="heri-button art-green regular_font">Culture</a>-->
<!--               </div>-->
<!--            </div>-->
<!--         </div>-->
<!--		 <div class="col-3">-->
<!--            <div class="card-image">-->
<!--               <img src="/image/newsimage/sgsdgdeharjr.png" class="card-img-top" alt="..." height="335px" width="287px">-->
<!--               <div class="card-news">-->
<!--                  <h5 class="card-title medium_font">Hamilton Studios</h5>-->
<!--                  <p class="date-news medium_font">Nov’23</p>-->
<!--               </div>-->
<!--               <div>-->
<!--                  <p class="card-text regular_font">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusm</p>-->
<!--                  <a href="#" class="heri-button art-blue regular_font">Architecture</a>-->
<!--                  <a href="#" class="heri-button art-green regular_font">Culture</a>-->
<!--               </div>-->
<!--            </div>-->
<!--         </div>	-->
<!--		 <div class="col-3">-->
<!--            <div class="card-image">-->
<!--               <img src="/image/newsimage/sgsdgdeharjr.png" class="card-img-top" alt="..." height="335px" width="287px">-->
<!--               <div class="card-news">-->
<!--                  <h5 class="card-title medium_font">Hamilton Studios</h5>-->
<!--                  <p class="date-news medium_font">Nov’23</p>-->
<!--               </div>-->
<!--               <div>-->
<!--                  <p class="card-text regular_font">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>-->
<!--                  <a href="#" class="heri-button art-blue regular_font">Architecture</a>-->
<!--                  <a href="#" class="heri-button art-green regular_font">Culture</a>-->
<!--               </div>-->
<!--            </div>-->
<!--         </div>	-->
<!--      </div>-->
<!--   </div>-->
<!--   </div>-->
<!--   <div id="exhibitions" class="exhibition-section">-->
<!--   <div class="container">-->
<!--      <h4 class="news-insights bold_font">EXHIBITONS</h4>-->
<!--      <p class="news-para regular_font">Two three lines introducing Five cross architects, Two three lines introducing Five cross architects. Two three lines introducing Five cross architects. Two three lines introducing Five cross architects. Two three lines introducing Five cross architects. Two three lines</p>-->
<!--   </div>-->
<!--   <div class="container">-->
<!--      <div class="row">-->
<!--         <div class="col-3">-->
<!--            <div class="card-image">-->
<!--               <img src="/image/newsimage/6fbf113da681a5352f6a35d5f2bdbf2e.jpg" class="card-img-top" alt="..." height="192px" width="287px">-->
<!--               <div class="card-news">-->
<!--                  <h5 class="card-title medium_font">Hamilton Studios</h5>-->
<!--                  <p class="date-news medium_font">Nov’23</p>-->
<!--               </div>-->
<!--               <div>-->
<!--                  <p class="card-text regular_font">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>-->
<!--                  <a href="#" class="heri-button art-red regular_font">Heritage</a>-->
<!--                  <a href="#" class="heri-button art-yellow regular_font">Art</a>-->
<!--               </div>-->
<!--            </div>-->
<!--         </div>-->
<!--		 <div class="col-3">-->
<!--            <div class="card-image">-->
<!--               <img src="/image/newsimage/1b4b3c53dbc3de1307a03544dcae5592.jpg" class="card-img-top" alt="..." height="255px" width="287px">-->
<!--               <div class="card-news">-->
<!--                  <h5 class="card-title medium_font">Hamilton Studios</h5>-->
<!--                  <p class="date-news medium_font">Nov’23</p>-->
<!--               </div>-->
<!--               <div>-->
<!--                  <p class="card-text regular_font">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>-->
<!--                  <a href="#" class="heri-button art-red regular_font">Heritage</a>-->
<!--                  <a href="#" class="heri-button art-darkgreen regular_font">Urban</a>-->
<!--               </div>-->
<!--            </div>-->
<!--         </div>-->
<!--		 <div class="col-3">-->
<!--            <div class="card-image">-->
<!--               <img src="/image/newsimage/6fbf113da681a5352f6a35d5f2bdbf2e.jpg" class="card-img-top" alt="..." height="192px" width="287px">-->
<!--               <div class="card-news">-->
<!--                  <h5 class="card-title medium_font">Hamilton Studios</h5>-->
<!--                  <p class="date-news medium_font">Nov’23</p>-->
<!--               </div>-->
<!--               <div>-->
<!--                  <p class="card-text regular_font">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>-->
<!--                  <a href="#" class="heri-button art-red regular_font">Heritage</a>-->
<!--                  <a href="#" class="heri-button art-yellow regular_font">Art</a>-->
<!--               </div>-->
<!--            </div>-->
<!--         </div>-->
<!--		 <div class="col-3">-->
<!--            <div class="card-image">-->
<!--               <img src="/image/newsimage/1b4b3c53dbc3de1307a03544dcae5592.jpg" class="card-img-top" alt="..." height="255px" width="287px">-->
<!--               <div class="card-news">-->
<!--                  <h5 class="card-title medium_font">Hamilton Studios</h5>-->
<!--                  <p class="date-news medium_font">Nov’23</p>-->
<!--               </div>-->
<!--               <div>-->
<!--                  <p class="card-text regular_font">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>-->
<!--                  <a href="#" class="heri-button art-red regular_font">Heritage</a>-->
<!--                  <a href="#" class="heri-button art-darkgreen regular_font">Urban</a>-->
<!--               </div>-->
<!--            </div>-->
<!--         </div>-->
<!--      </div>-->
<!--   </div>-->
<!--   </div>-->
<!--   <div id="events" class="event-section">-->
<!--   <div class="container">-->
<!--      <h4 class="news-event bold_font">EVENTS</h4>-->
<!--      <p class="news-para regular_font">Two three lines introducing Five cross architects, Two three lines introducing Five cross architects. Two three lines introducing Five cross architects. Two three lines introducing Five cross architects. Two three lines introducing Five cross architects. Two three lines</p>-->
<!--   </div>-->
<!--   <div class="container">-->
<!--      <div class="row">-->
<!--         <div class="col-3">-->
<!--            <div class="card-image">-->
<!--               <img src="/image/newsimage/6fbf113da681a5352f6a35d5f2bdbf2e.jpg" class="card-img-top" alt="..." height="192px" width="287px">-->
<!--               <div class="card-news">-->
<!--                  <h5 class="card-title medium_font">Hamilton Studios</h5>-->
<!--                  <p class="date-news medium_font">Nov’23</p>-->
<!--               </div>-->
<!--               <div>-->
<!--                  <p class="card-text regular_font">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>-->
<!--                  <a href="#" class="heri-button art-red regular_font">Heritage</a>-->
<!--                  <a href="#" class="heri-button art-yellow regular_font">Art</a>-->
<!--               </div>-->
<!--            </div>-->
<!--         </div>-->
<!--		 <div class="col-3">-->
<!--            <div class="card-image">-->
<!--               <img src="/image/newsimage/1b4b3c53dbc3de1307a03544dcae5592.jpg" class="card-img-top" alt="..." height="255px" width="287px">-->
<!--               <div class="card-news">-->
<!--                  <h5 class="card-title medium_font">Hamilton Studios</h5>-->
<!--                  <p class="date-news medium_font">Nov’23</p>-->
<!--               </div>-->
<!--               <div>-->
<!--                  <p class="card-text regular_font">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>-->
<!--                  <a href="#" class="heri-button art-red regular_font">Heritage</a>-->
<!--                  <a href="#" class="heri-button art-darkgreen regular_font">Urban</a>-->
<!--               </div>-->
<!--            </div>-->
<!--         </div>-->
<!--		 <div class="col-3">-->
<!--            <div class="card-image">-->
<!--               <img src="/image/newsimage/6fbf113da681a5352f6a35d5f2bdbf2e.jpg" class="card-img-top" alt="..." height="192px" width="287px">-->
<!--               <div class="card-news">-->
<!--                  <h5 class="card-title medium_font">Hamilton Studios</h5>-->
<!--                  <p class="date-news medium_font">Nov’23</p>-->
<!--               </div>-->
<!--               <div>-->
<!--                  <p class="card-text regular_font">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>-->
<!--                  <a href="#" class="heri-button art-red regular_font">Heritage</a>-->
<!--                  <a href="#" class="heri-button art-yellow regular_font">Art</a>-->
<!--               </div>-->
<!--            </div>-->
<!--         </div>-->
<!--		 <div class="col-3">-->
<!--            <div class="card-image">-->
<!--               <img src="/image/newsimage/1b4b3c53dbc3de1307a03544dcae5592.jpg" class="card-img-top" alt="..." height="255px" width="287px">-->
<!--               <div class="card-news">-->
<!--                  <h5 class="card-title medium_font">Hamilton Studios</h5>-->
<!--                  <p class="date-news medium_font">Nov’23</p>-->
<!--               </div>-->
<!--               <div>-->
<!--                  <p class="card-text regular_font">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>-->
<!--                  <a href="#" class="heri-button art-red regular_font">Heritage</a>-->
<!--                  <a href="#" class="heri-button art-darkgreen regular_font">Urban</a>-->
<!--               </div>-->
<!--            </div>-->
<!--         </div>-->
<!--      </div>-->
<!--   </div>-->
<!--   </div>-->
<!--</div>-->
</div>

<div class="container ncom">
<div class="com_soon">
    <p class="boldcond_font">Coming Soon...</p>
</div>
</div>


<section class="container fotter-text1"> <?php include 'footer.php';?> </section>



 <script>

$(document).ready(function(){
  var navbar = $(".navbar_sticky");
  var sticky = navbar.offset().top;

  $(window).scroll(function() {
    if (window.pageYOffset >= sticky) {
      navbar.addClass("sticky");
      navbar.css("width", $(".container").width()); // Adjust width to match container width
    } else {
      navbar.removeClass("sticky");
      navbar.css("width", "auto"); // Reset width to auto
    }
  });
});

// search icon
function toggleSearch() {
    var icon = document.querySelector('.search-icon');
    icon.classList.toggle('active');
  }
  

</script>
