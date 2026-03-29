<?php include 'header.php'; ?>

    <style>
    #site-header {
position: absolute;
}

    #site-header {
    top: 0;
    left: 0;
    width: 100%;
    background-color: rgba(255, 255, 255, 0.5);
    transition: background-color 0.3s ease;
    z-index: 1000;
    padding: 0px;

}
    
    
.ban_ner {
    position: relative;
    width: 100%;
    height: 100vh;
    overflow: hidden;
    /*margin-top: 100px;*/
}

.sli_des {
    position: absolute;
    width: 100%;
    height: 100%;
}

.sli_des img {
    position: absolute;
    width: 100%;
    height: 100%;
    opacity: 0;
    transition: opacity 1s ease-in-out;
}

.sli_des img.active {
    opacity: 1;
}
.test_ban {
    width: 100%;
    position: absolute;
    z-index: 9;
    padding-bottom: 70px;
    margin-top: -15%;
}
/*.ban_ner:hover {*/
/*    transition: 0.5s all;*/
/*    transform: scale(1.2);*/
/*}*/

 .imagehover-container {
            position: relative;
            overflow: hidden;
        }
        
            .imagehover-container img {
              width: 100%;
              /* height: auto; */
              transition: transform 0.5s ease;
            }
        .card-contenthover .title-imghover {
    margin: 0 !important;
    font-size: 18px;
    font-weight: 600;
}
.card-contenthover .disc-imghover {
    margin: 0 !important;
    font-size: 18px;
    font-weight: 600;
}
            .over-lay {
              position: absolute;
              bottom: 0;
              left: 0;
              width: 100%;
              color: white;  
              transform: translateY(100%);
              transition: transform 0.5s ease;
            }
            .grid-img1{
              background-color: #c74827; /* Change opacity if needed */
            }
            .grid-img2{
              background-color: #9dc6d8; /* Change opacity if needed */
            }
            .grid-img3{
              background-color: #fba328; /* Change opacity if needed */
            }
            .grid-img4{
              background-color: #7e8334; /* Change opacity if needed */
            }
            .grid-img5{
              background-color: #107c91; /* Change opacity if needed */
            }
        
            .imagehover-container:hover .over-lay {
              transform: translateY(0%);
            }
        
            .title-datehover {
              display: flex;
              justify-content: space-between;
              align-items: center;
            }
        
            .card-contenthover {
              padding: 15px;
            }
            .hom-grid{
                padding-bottom:60px;
                /*margin: -20px 0px 0px 0px; */
                box-shadow: 1px 1px 10px rgba(0, 0, 0, 0.5);
                border-radius: 25px;
                background-color: #fff;
                position: relative;
                z-index:999;
            }
            
            .hom-grid .prax-heading h1 {
            font-size: 110px;
            color: #000;
        }
        .hom-grid .two-text {
            display: flex;
            flex-direction: row-reverse;
            align-items: flex-end;
        }
        .hom-grid .two-text p {
            font-size: 28px;
            line-height: 34px;
            margin-bottom: 40px;
            text-align: right;
            font-weight: 500;
        }
        .hom-grid .checkout-text {
            background-color: #323232;
            padding: 30px 30px;
            height: 301px;
            margin-right: 40px;
        }
        .hom-grid .secondrow-img {
            margin-right: 40px;
        }
        .hom-grid .checkout-text h3{
            color: #fff;
            font-size: 46px;
            line-height: 55.43px;
            font-weight: 600;
            text-transform: uppercase;
        }
        .hom-grid .first-row{
            padding:100px 0px;
        }
        .hom-grid p.disc-texthover{
            font-size:18px;
            text-align:left;
        }
        .hom-grid .want-text {
            background-color: #323232;
            padding: 30px 30px;
            height: 294px;
        }
        .hom-grid .want-text h2{
            color: #fff;
            font-size: 46px;
            line-height: 55.43px;
            font-weight: 600;
            text-transform: uppercase;
        }
        .hom-grid .sec-col{
            margin-top:60px;
        }




        .ban_main {
            position: relative;
            width: 100%;
            height: 100vh;
            overflow: hidden;
        }

        .ban_main img {
            visibility: hidden; /* Initially hide the image */
            width: 100%;
            height: 100vh;
            object-fit: cover;
        }
       .bannersimg {
    position: fixed;
    top: 0px;
    width: 100%;
    z-index:0 !important;
}
        .bottom-text {
            position: absolute;
            z-index:0 !important;
            bottom: 40px;
            left: 50%;
            transform: translateX(-50%);
            width: 100%;
            box-sizing: border-box;
            padding: 10px;
        }
   
        .textbanner {
            font-size: 34px;
            color: #fff;
            font-weight: 500;
            text-shadow: 0 0 15px rgba(0, 0, 0, 1);
        }
        p.allbantext {
    font-size: 24px;
}
    </style>
    <div class="ban_main">
    <div class="bannersimg">
        <img id="bannerImage" src="" alt="Banner Image">
    </div>
    <div class="bottom-text">
        <div class="container">                
            <div class="textbanner medium_font" id="bannerText">
                <p id="bannerDescription"></p>
                <p class="allbantext">From the archival collection of Mission for Indian History and Archaeology, University of Tokyo, in 1959-60, 1961-62</p>
            </div>                
        </div>
    </div>
</div>


    <!-- hero-contain  -->
    <section class="hom-grid">
        <div class="container">
            <div class="first-row">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <div class="prax-heading">
                            <h1 class="boldcond_font">PRAXIS,<br> RESEARCH & DIALOGUE</h1>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12 two-text">
                        <p class="medium_font">The confluence of Art, Architecture, and<br> Technology is the primary area of interest for<br> Five Cross Architects, established in 2021</p>
                    </div>
                </div>
            </div>
            <div class="sec2-img">
                <div class="row">
                    <div class="col-md-6 col-sm-12 desk_view">
                        <div class="checkout-text">
                            <h3 class="boldcond_font"> Check out <br> our latest <br>projects</h3>
                        </div>
                    </div>
                    <!--mobile-->
                    <div class="col-md-6 col-sm-12 mobile_view">
                        <div class="checkout-text">
                            <h3 class="boldcond_font"> Check out our<br> latest projects</h3>
                        </div>
                    </div>
                    <!--mobile-->
                    <div class="col-md-6 col-sm-12">
                        <div class="imagehover-container">
                            <img src="/image/Dadar-Flower-Market.webp" alt="Your Image" height="370">
                            <!-- <h6 class="imgtitle-imghover medium_font">Project Name</h6>        -->
                            <div class="over-lay grid-img1">
                                <div class="card-contenthover">
                                    <div class="title-datehover">
                                        <h5 class="title-imghover medium_font">Re-envisioning of the Dadar Flower Market</h5>
                                        <p class="disc-imghover medium_font art-red">Heritage</p>
                                    </div>
                                    <!--<p class="disc-texthover regular_font"></p>-->
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="sec2-img">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <div class="secondrow-img">
                            <div class="imagehover-container">
                                <img src="/image/Adam.webp" alt="Your Image" height="452">
                                <!-- <h6 class="imgtitle-imghover medium_font">Project Name</h6>        -->
                                <div class="over-lay grid-img1">
                                    <div class="card-contenthover">
                                        <div class="title-datehover">
                                            <h5 class="title-imghover medium_font">Rural Resilience for St. Lambrecht</h5>
                                            <p class="disc-imghover medium_font art-red">Heritage</p>
                                        </div>
                                        <!--<p class="disc-texthover regular_font"></p>-->
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-6 col-sm-12 content-art-text mb-0">
                        <div class="imagehover-container">
                            <img src="/image/bhulhome.webp" alt="Your Image" height="383">
                            <!-- <h6 class="imgtitle-imghover medium_font">Project Name</h6>        -->
                            <div class="over-lay grid-img1">
                                <div class="card-contenthover">
                                    <div class="title-datehover">
                                        <h5 class="title-imghover medium_font">Bhuleshwar - Kalbadevi Community Led Heritage Regeneration  </h5>
                                        <p class="disc-imghover medium_font art-red">Heritage</p>
                                    </div>
                                    <!--<p class="disc-texthover regular_font"></p>-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="sec2-img">
                <div class="row">
                    <div class="col-md-7 col-sm-12">
                        <div class="secondrow-img">
                            <div class="imagehover-container sec-col">
                                <img src="/image/Hamilton-Studios.webp" alt="Your Image" height="737">
                                <!-- <h6 class="imgtitle-imghover medium_font">Project Name</h6>        -->
                                <div class="over-lay grid-img1">
                                    <div class="card-contenthover">
                                        <div class="title-datehover">
                                            <h5 class="title-imghover medium_font">Hamilton Studios</h5>
                                            <p class="disc-imghover medium_font art-red">Heritage</p>
                                        </div>
                                        <!--<p class="disc-texthover medium_font" style="font-size:18px;"></p>-->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-5">
                        <div class="row">
                            <div class="col-md-12 col-sm-12">
                                <div class="imagehover-container sec-col">
                                    <img src="/image/tombachhome.webp" alt="Your Image" height="383">
                                    <!-- <h6 class="imgtitle-imghover medium_font">Project Name</h6>        -->
                                    <div class="over-lay grid-img1">
                                        <div class="card-contenthover">
                                            <div class="title-datehover">
                                                <h5 class="title-imghover medium_font">Tambach Castle </h5>
                                                <p class="disc-imghover medium_font art-red">Heritage</p>
                                            </div>
                                            <!--<p class="disc-texthover regular_font"></p>-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mob_none">
                            <div class="col-md-12 col-sm-12">
                                 <a href="https://fivecrossarchitects.com/project.php">
                                <div class="want-text sec-col">
                                    <h2 class="boldcond_font"> Want to find  
                                    <span class="desktop-block">out more ?</span> </h2>
                                </div></a>
                            </div>
                        </div>
                        <div class="row d_vw">
                            <div class="col-md-12 col-sm-12">
                                 <a href="https://fivecrossarchitects.com/project.php">
                                <div class="want-text sec-col">
                                    <h2 class="boldcond_font">VIEW MORE PROJECTS<i class="fa fa-arrow-right"></i></h2>
                                </div></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- slider-->
    
    <?php include 'demo.php';?>

   
    <script>
    const banners = [
        {
            src: '/image/AgraFort.webp',
            text: 'Agra Fort'
        },
        {
            src: '/image/AgraItmadUdDaula.webp',
            text: 'Agra Itmad Ud Daula'
        },
        {
            src: '/image/AgraMahal.webp',
            text: 'Agra Mahal'
        },
        {
            src: '/image/AhmedabadBaiHarirVavMosque.webp',
            text: 'Ahmedabad Bai Harir Vav Mosque & Tomb'
        },
        {
            src: '/image/BidarHumayunBahmani.webp',
            text: 'Bidar Humayun Bahmani'
        },
        {
            src: '/image/BidarMuhammedGawanMadarsa.webp',
            text: 'Bidar Muhammed Gawan Madarsa'
        },
        {
            src: '/image/VijayapuraGolGumbaz.webp',
            text: 'Vijaya pura Gol Gumbaz'
        },
        {
            src: '/image/DelhiBagchiWithTomb.webp',
            text: 'Delhi Bagchi With Tomb'
        },
        {
            src: '/image/DelhiFatehpurSikri.webp',
            text: 'Delhi Fatehpur Sikri'
        },
        {
            src: '/image/DelhiHouseKaleSahib.webp',
            text: 'Delhi House of Kale Sahib'
        },
        {
            src: '/image/DelhiIsaKhan.webp',
            text: 'Delhi Isa Khan'
        },
        {
            src: '/image/DelhiLahoreGate.webp',
            text: 'Delhi Lahore Gate'
        },
        {
            src: '/image/DelhiTurkmanGate.webp',
            text: 'Delhi Turkman Gate'
        },
        {
            src: '/image/GolkondaIdgahBaoli.webp',
            text: 'Golkonda Idgah Baoli'
        },
        {
            src: '/image/JaunpurBridgeMunimKhan.webp',
            text: 'Jaunpur Bridge of Munim Khan'
        },
        {
            src: '/image/ManduHindolaBaoli.webp',
            text: 'Mandu Hindola Baoli'
        },
        {
            src: '/image/ManduJahazMahall.webp',
            text: 'Mandu Jahaz Mahal'
        },
        {
            src: '/image/ManduRoyalPalace.webp',
            text: 'Mandu Royal Palace'
        },
        {
            src: '/image/SasaramSherShahSuri.webp',
            text: 'Sasaram Sher Shah Suri'
        },
        {
            src: '/image/SasaramSherShahSurii.webp',
            text: 'Sasaram Sher Shah Suri'
        },
        {
            src: '/image/SasaramSherShahSur.webp',
            text: 'Sasaram Sher Shah Suri'
        },
        {
            src: '/image/Agra moti masjid.jpg',
            text: 'Agra Fort Moti Masjid'
        },
        {
            src: '/image/Varanasi - Alamgir Mosqu.jpg',
            text: 'Varanasi - Alamgir Mosque'
        },
        {
            src: '/image/Varanasi - Lal Khan Tomb (1).jpg',
            text: 'Varanasi - Lal Khan Tomb'
        },
        {
            src: '/image/Sikandar - Akbar Tomb.jpg',
            text: 'Sikandar - Akbar Tomb'
        },
        {
            src: '/image/Pandua Adina Masjid.jpg',
            text: 'Pandua Adina Masjid'
        },
        {
            src: '/image/Jaunpur - Khalis Mukhlis Masji.jpg',
            text: 'Jaunpur - Khalis Mukhlis Masjid'
        },
        {
            src: '/image/Jaunpur - Jama Masjid.jpg',
            text: 'Jaunpur - Jama Masjid'
        },
        {
            src: '/image/Mandu - Hindola Baol.jpg',
            text: 'Mandu - Hindola Baoli'
        },
        {
            src: '/image/Jaunpur - Bridge of Munim Kha.jpg',
            text: 'Jaunpur - Bridge of Munim Khan'
        },
        {
            src: '/image/Gwalior - Palace.jpg',
            text: 'Gwalior - Palace'
        },
        {
            src: '/image/Gwalior - Muhammad Ghaus Tomb.jpg',
            text: 'Gwalior - Muhammad Ghaus Tomb'
        },
        {
            src: '/image/Gwalior - Fort.jpg',
            text: 'Gwalior - Fort'
        },
        {
            src: '/image/Gwalior - Fort.jpg',
            text: 'Gwalior - Fort'
        },
        {
            src: '/image/Golkonda - Idgah.jpg',
            text: 'Golkonda - Idgah'
        },
        {
            src: '/image/Gulberga - Jama Masjid.jpg',
            text: 'Gulberga - Jama Masjid'
        },
        {
            src: '/image/Gulberga - Wall & Mosque.jpg',
            text: 'Gulberga - Wall & Mosque'
        },
        {
            src: '/image/Golkonda - Quli Qutb Shah Tomb.jpg',
            text: 'Golkonda - Quli Qutb Shah Tomb'
        },
        {
            src: '/image/Golconda - Hayyat Bakhshi Begam Tomb.jpg',
            text: 'Golkonda - Hayyat Bakhshi Begam Tomb'
        },
        {
            src: '/image/Delhi - Mosque of Isa Khan.jpg',
            text: 'Delhi - Mosque of Isa Khan'
        },
        {
            src: '/image/Delhi - Jama Masjid.jpg',
            text: 'Delhi - Jama Masjid'
        },
        {
            src: '/image/Delhi - Humayun Tomb.jpg',
            text: 'Delhi - Humayun Tomb'
        },
        {
            src: '/image/ManduJahazMahal.webp',
            text: 'Mandu Jahaz Mahal'
        }
    ];

    const bannerImage = document.getElementById('bannerImage');
    const bannerDescription = document.getElementById('bannerDescription');

    // Get a random banner
    const randomBanner = banners[Math.floor(Math.random() * banners.length)];

    // Set the image and text
    bannerImage.src = randomBanner.src;
    bannerImage.onload = function() {
        // Show the image once it's fully loaded
        bannerImage.style.visibility = 'visible';
    }
    bannerDescription.textContent = randomBanner.text;
</script>