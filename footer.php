<!-- F  O O T E R    S E C T I O N-->

<div class="fotter-main">
    <div class="">
        <p class="fotter-text medium_font">Sign up to stay in touch</p>
        <form class="d-flex my-3" id="subscriptionForm">
            <input placeholder="Enter Your Email" class="form-control search-box search-form" type="email" id="email" name="email" required>
            <button class="btn fotter-btn" type="submit">Submit</button>
        </form>
    </div>
    <div class="d-flex justify-content-between fotter-list-group">
        <div class="col-md-8 col-sm-12">
            <ul class="list-group ">
                <li class="list-group-item "><p class="footer-list-text medium_font">India | Germany</p> </li>
                <li class="list-group-item">
                    <ul class="list-group list-group-horizontal">
                        <li class="list-group-item p-0"><a href="https://www.linkedin.com/company/five-cross-architects-india-germany/"><img src="image/linkedin.png" alt="Linkedin" class="linkedin"></a></li>
                        <li class="list-group-item p-0"><a href="https://www.instagram.com/fivecrossarchitects/"><img src="image/instagram.png" alt="Instagram" class="linkedin"></a></li>
                        <li class="list-group-item p-0"><a href="https://open.spotify.com/playlist/7pXbmKvBdTxny1KegZ74q9?si=1c2f99a508ff4133&nd=1"><img src="image/spotify.png" alt="Spotify" class="linkedin"></a></li>
                        
                    </ul>
                </li >
            </ul>
            <p class="footbot-one regular_font copy_right">Copyright @ Five Cross Architects</p>
        </div>
        <div class="col-md-4 col-sm-12 d-flex justify-content-between">
            <div class="footer-text">
                <ul class="list-group">
                    <li class="list-group-item medium_font"><a href="https://fivecrossarchitects.com/project.php">Projects</a></li>
                    <li class="list-group-item medium_font"><a href="https://fivecrossarchitects.com/new-&-insights.php">News</a></li>
                    <li class="list-group-item medium_font"><a href="https://fivecrossarchitects.com/about-us.php">About Us</a></li>
                </ul>
            </div>
            <div class="footer-text">
                <ul class="list-group">
                    <li class="list-group-item medium_font"><a href="#">Career</a></li>
                    <li class="list-group-item medium_font"><a href="https://fivecrossarchitects.com/contact-us.php">Contact Us</a></li>
                    <li class="list-group-item medium_font"><a href="#">Privacy Policy</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!--<div class="foot-bot">
    <p class="footbot-one medium_font">Copyright @ Five Cross Architects</p>
    <p class="footbot-two medium_font">Design by Vatsala | Developed by NexGeno</p>
</div>-->
<div class="sctopbut">
    <button class="btntop"><i class="fa fa-arrow-up"></i></button>
</div>
    
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/jquery.min.js"></script>
<!--<script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>
<script src="js/main.js"></script>

    <!-- Popper.js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.11.6/umd/popper.min.js"></script>
    <!-- Owl Carousel JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
       <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script>
        $(document).ready(function() {
            toastr.options = {
                closeButton: true,
                debug: false,
                newestOnTop: false,
                progressBar: true,
                positionClass: 'toast-top-right',
                preventDuplicates: true,
                onclick: null,
                showDuration: '5000',
                hideDuration: '2000',
                timeOut: '6000',
                extendedTimeOut: '1000',
                showEasing: 'swing',
                hideEasing: 'linear',
                showMethod: 'fadeIn',
                hideMethod: 'fadeOut'
            };
            
            $('#subscriptionForm').on('submit', function(e) {
                e.preventDefault();
                var email = $('#email').val(); // Get the email value from the input
                $.ajax({
                    url: 'subscribe.php',
                    type: 'POST',
                    data: { email: email },
                    success: function(response) {
                        $('#subscriptionForm')[0].reset();
                        toastr.success('Subscription successful!');
                    },
                    error: function(xhr, status, error) {
                        toastr.error('An error occurred: ' + xhr.responseText);
                    }
                });
            });
        });
    </script>
    <!--scroll to top button-->
    <script>
        const button = document.querySelector('.btntop');

const displayButton = () => {
  window.addEventListener('scroll', () => {
    console.log(window.scrollY);
  
    if (window.scrollY > 100) {
      button.style.display = "block";
    } else {
      button.style.display = "none";
    }
  });
};

const scrollToTop = () => {
  button.addEventListener("click", () => {
    window.scroll({
      top: 0,
      left: 0,
      behavior: 'smooth'
    }); 
    console.log(event);
  });
};

displayButton();
scrollToTop();
    </script>
    
    <!--scroll to top button-->
    
    
<!--
<script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en,de', includedLanguages: 'en,de', layout: google.translate.TranslateElement.InlineLayout.SIMPLE, defaultLanguage: 'en'}, 'google_translate_element');
}

function toggleLanguage() {
  var translateElement = document.getElementById("google_translate_element");
  var currentLanguage = translateElement.getAttribute("lang");
  var newLanguage = (currentLanguage === "en") ? "en" : "de";
  translateElement.innerHTML = "";
  new google.translate.TranslateElement({pageLanguage: 'en', includedLanguages: 'en,de', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
  translateElement.setAttribute("lang", newLanguage);
  document.getElementById("languageText").innerHTML = newLanguage;
}

// Initialize translation with default language
googleTranslateElementInit();
</script>

<script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
-->
<script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
    <script type="text/javascript">
        var currentLanguage = 'en'; // Initially set to English

        function googleTranslateElementInit() {
            new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
        }

        function toggleLanguage() {
            currentLanguage = currentLanguage === 'en' ? 'de' : 'en'; // Toggle between English and Hindi
            changeLanguage(currentLanguage);
            var translate = document.querySelector('.goog-te-combo').value;
            if (translate === '' || translate === null || translate === undefined) {
                toggleLanguage()
                var selectElement = document.querySelector('.goog-te-combo');
                selectElement.value = currentLanguage;
                selectElement.dispatchEvent(new Event('change'));
                document.getElementById('btn-eng').click(); // Simulate button click
            }
        }

        function changeLanguage(language) {
            var selectElement = document.querySelector('.goog-te-combo');
            selectElement.value = language;
            selectElement.dispatchEvent(new Event('change'));
        }
    </script>
</body>
</html>