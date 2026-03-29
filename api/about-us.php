<!DOCTYPE html>
<html lang="en">

<body>
    
<section class="head_about">
    <?php include 'header.php'; ?>
    </section>
        <style>
      
/*.ab-page .scrollspy-example {*/
/*  scroll-snap-type: y mandatory; */
/*  overflow-y: scroll; */
/*  height: 100vh; */
/*}*/
/*.sc_snap {*/
/*  scroll-snap-align: start; */
/*}*/
.ab-page .scrollspy-example::-webkit-scrollbar {
  display: none;
}

.ab-page .scrollspy-example {
  -ms-overflow-style: none;  /* For Internet Explorer and Edge */
  scrollbar-width: none;  /* For Firefox */
}
        .head_about #site-header {
        position: fixed;
        background-color: #fff;
    }
    .img_nonhov {
        width: 270px;
        background-color: #404040;
        padding: 20px;
        position:relative;
        /*border: 1px solid #797676;*/
    }
            .ab-page .about-para {
                margin-bottom: 20px;
                font-size: 18px;
                font-weight: 400;
                line-height: 21.6px;
                text-align: left;
                color: #000;
                }
                .ab-page {
                margin-top: 140px;
            }
                .ab-page .about-headings {
                  margin-bottom: 20px;
                }
                .ab-page .nav-pills .nav-link.active {
                background-color: #fff;
                color: #404040;
                font-size: 20px;
                font-weight: 600;
            }
            .ab-page .nav-pills .nav-link {
                font-size: 20px;
                font-weight: 400;
                line-height: 40px;
                color: #404040;
            }
            .ab-page .about-headings {
                font-size: 28px;
                font-weight: 600;
                line-height: 33.6px;
                text-align: left;
                color: #000;
            }
            .team_title{
                padding-left:50px;
            }
            .ab-page .first-para {
                padding-bottom: 50px;
            }
            .ab-page .Office-sec.scroll-example {
                margin-top: 60px;
              }
            
            .ab-page .off-gall img {
                margin-bottom: 20px;
              }
             .ab-page img.card-img-top {
                object-fit: cover;
            }
            .ab-page .card-image {
                padding: 10px;
            }
            .ab-page .card-news {
                display: flex;
                justify-content: space-between;
                padding-top: 10px;
            }
            .ab-page .card-news .card-title {
                font-size: 15px;
                font-weight: 500;
                line-height: 18px;
                text-align: left;
            
            }
            .ab-page .col-md-2 {
                border-right: 1px solid #404040;
            }
            .ab-page .col-lg-10 {
                padding:0px;
            }
            
            .ab-page .img-accordion {
                
                margin: 0 auto;
                padding: 20px;
                border: 1px solid #ccc;
                text-align: left;
                cursor: pointer;
                transition: height 0.3s ease;
                overflow: hidden;
                background-size: cover;
                background-position: center;
                color: #000; /* Set text color to black */
              }
            
             .ab-page .description {
                display: none;
              }
            
              .ab-page .img-accordion.active .description {
                display: block;
              }
            
            .ab-page .img-accordion.active .titdisc-bg {
                background-color: #fff;
                margin: 40px;
                padding: 20px;
                text-align: left;
                border-radius: 20px;
            }
            .collfirstrow{
                height:210px !important;
            }
            
              .ab-page .img-accordion .titdisc-bg {
                background-color: transparent; /* Set default background color to transparent */
              }
              
              .stickyleft-column {
                 position: -webkit-sticky; /* For Safari */
                position: sticky;
                top: 140px; /* Adjust this value as needed */
                height: 100vh; /* Make it full height to ensure it covers the viewport */
                overflow-y: auto; /* Add scroll within the sticky column if needed */
              }
    
            .ab-page .about-para {
                margin-bottom: 20px;
                font-size: 18px;
                font-weight: 400;
                line-height: 24px;
                text-align: left;
                color: #000;
                }
                
                .ab-page .about-headings {
                  margin-bottom: 20px;
                }
                .ab-page .nav-pills .nav-link.active {
                background-color: #fff;
                color: #404040;
                font-size: 20px;
                font-weight: 600;
            }
            .log_sec {
        margin-top: 40px;
    }
            .ab-page .nav-pills .nav-link {
                font-size: 20px;
                font-weight: 400;
                line-height: 40px;
                color: #404040;
                padding:8px 0px;
            }
            .ab-page .about-headings {
                font-size: 28px;
                font-weight: 600;
                line-height: 33.6px;
                text-align: left;
                color: #000;
            }
            .ab-page .first-para {
                padding-bottom: 50px;
            }
            .ab-page .Office-sec.scroll-example {
                margin-top: 60px;
              }
            
            .ab-page .off-gall img {
                margin-bottom: 20px;
              }
             .ab-page img.card-img-top {
                object-fit: cover;
            }
            .ab-page .card-image {
                padding: 10px;
            }
            .ab-page .card-news {
                display: flex;
                justify-content: space-between;
                padding-top: 10px;
            }
            .ab-page .card-news .card-title {
                font-size: 15px;
                font-weight: 500;
                line-height: 18px;
                text-align: left;
            
            }
            .ab-page .col-md-2 {
                border-right: 1px solid #404040;
            }
            .ab-page .tab-content {
                padding-left: 50px;
            }
    .img-accordion.active {
        opacity: inherit !important;
    }
            ul.ab_ul {
        padding-left: 20px;
    }
            .ab-page .img-accordion {
                
                margin: 0 auto;
                padding: 20px;
                border: 1px solid #ccc;
                text-align: left;
                cursor: pointer;
                transition: height 0.3s ease;
                overflow: hidden;
                opacity:0.5;
                background-size: cover;
                background-position: center;
                color: #000; /* Set text color to black */
              }
            
             .ab-page .description {
                display: none;
              }
            
              .ab-page .img-accordion.active .description {
                display: block;
              }
            
            .ab-page .img-accordion.active .titdisc-bg {
                background-color: #fff;
                margin: 40px;
                padding: 20px;
                text-align: left;
                border-radius: 20px;
            }
            
              .ab-page .img-accordion .titdisc-bg {
                background-color: transparent; /* Set default background color to transparent */
              }
              .collab_card {
                display: flex;
                /* align-items: center; */
                padding: 20px 0px 30px 0px;
                /*width: 690px;*/
                height:239px;
                border-bottom: 1px solid #404040;
            }
            
            .collab_logo {
                width: 80px !important;
                height: 80px !important;   
            }
            .collab_img {
    margin-right: 20px;
}
.scrollspy-example:focus-visible {
    outline: 0 !important;
}
            .collab_title {
                font-size: 20px;    
                margin: 0;
            }
            .collab_card:last-child {
                border-bottom: none;
            }
            .collab_desc {
                font-size: 16px;
                font-weight: 400;
                line-height: 20px;
                text-align: left;
                margin-top: 10px;
                margin-bottom: 0;
                padding-right: 30px;
            }
            
            
            .img_hov {
                position: relative;
                width: 270px; /* Adjust as necessary */
            }
    .team_name{
        font-size: 24px;
        font-weight: 600;
        line-height: 33.6px;
        color:#fff;
    }
    .ed_name{
        font-size: 14px;
        font-weight: 600;
        line-height: 19.2px;
        color:#fff;
    }
    .role_team{
        font-size: 16px;
        font-weight: 500;
        line-height: 19.2px;
        color:#fff;
    }
            
    
            .over_img {
                position: absolute;
                top: 0;
                left: 0;
                right: 0;
                bottom: 0;
                color: white;           
                opacity: 0;
                transition: opacity 0.3s ease;
                padding: 20px;
            }
            .lightblue_img{
                background: #9DC6D8;
            }
            .blue_img{
                background: #107C91;
            }
            .red_img{
                background: #C74827;
            }
            .yellow_img{
                background-color: #FBA328;
            }
            .green_img{
                background: #7E8334;
            }
            .black_img{
                background: #404040;
            }
    
            .img_hov:hover .over_img {
                opacity: 1;
            }
    
            .over_img .cont_text {
                margin: auto;
            }
            p.role_team {
        position: absolute;
        bottom: 0px !important;
        padding-bottom: 20px;
    }
    
    
    .photo img {
        width: 270px;
        height: 270px;
        display: block;
        filter: grayscale(1);
    }
    .all_team {
                overflow: hidden; 
                position: relative; 
                width: 100%; /
            }
.all_team {
    overflow-x: auto;
    overflow-y: hidden; /* Hide vertical scrollbar if not needed */
    -ms-overflow-style: none;  /* Hide scrollbar for Internet Explorer and Edge */
    scrollbar-width: none;  /* Hide scrollbar for Firefox */
}

.all_team::-webkit-scrollbar {
    display: none; /* Hide scrollbar for WebKit browsers */
}

            .photo_row {
                display: flex;
                width: max-content; 
                transition: transform 0.3s ease; 
            }
            .vid_ab img {
        height: 565px;
        width: 100%;
    }
    .ab-page .list-group-item.active {
        background-color: #fff;
        color: #404040;
        font-size: 20px;
        font-weight: 600;
    }
    
    .ab-page .list-group-item {
        font-size: 20px;
        font-weight: 400;
        line-height: 40px;
        color: #404040;
        padding: 8px 0px;
        border: none;
    }
    .ab-page .list-group-item-action:focus, .list-group-item-action:hover{
        background-color: #fff;
    }
    #coll_sec .owl-nav {
        padding: 15px 15px 20px 15px;
        border-radius: 50%;
        background-color: black;
        color: white;
        border: none;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 20px;
        cursor: pointer;
        position: absolute;
        top: 25%;
        right: 50%;
    }
    #coll_sec .owl-nav button.owl-prev{
        padding: 5px !important;
    }
    #coll_sec .owl-nav button.owl-next{
        padding: 5px !important;
    }
    #coll_sec .owl-nav {
      animation: zoom 0.5s ease-in-out 0s 1;
    }
    
    @keyframes zoom {
      0% {
        transform: scale(0.0);
      }
      100% {
        transform: scale(1.0);
      }
    }
    #coll_sec .owl-nav{
        display:none;
    }
    /*#collaborators:hover #coll_sec .owl-nav{
        display:block !important;
    }*/
    #collaborators {
        padding-left: 50px;
    }
    .abouttab{
        margin-bottom:40px;
        padding-left:50px;
    }
    .vidmar{
        margin-top:40px;
    }
    #philosophy{
        margin-bottom:40px;
        padding-left:50px;
    }
    #five-channels{
        margin-bottom:40px;
    }
    #office{
        margin-bottom:40px;
        padding-left:50px;
    }
    #team {
    margin-top: 0px;
    margin-bottom: 0px;
}
    .ab_projsec {
        margin-top: 40px;
    }
    .ab_encsec {
        margin-top: 40px;
    }
    .ab_pressec {
        margin-top: 40px;
    }
.over_imgnon .team_name {
    margin: 0;
    font-size: 22px !important;
    line-height: 29px !important;
}
    /*cursor animation*/
            #collaborators {
                position: relative; /* Ensure the #collaborators section has a relative position */
            }
            .circle {
                width: 60px;
                height: 60px;
                background-image: url('/image/arcoll.webp');
                position: absolute;
                pointer-events: none;
                transform: translate(-50%, -50%);
                transition: width 0.3s ease, height 0.3s ease;
                display: none; /* Start hidden */
                z-index:9999;
            }
            
            #collaborators:hover .circle {
                display: block !important; /* Show circle only when hovering over #collaborators */
            }
            
            
    /*cursor animation*/
    
  .custom-accordion {
            width: 100%;
        }

        .custom-accordion-item {
            border-bottom: 1px solid #000;
            padding: 10px 0;
        }

        .custom-accordion-title {
            background-color: #fff;
            padding: 15px 0px;
            cursor: pointer;
            font-weight: bold;
            display: flex;
            align-items: center;
        }
.custom-icon.active img {
            transform: rotate(180deg) !important;
        }
        .custom-accordion-title img {
            width: 50px;
            height: auto;
            margin-right: 10px;
        }

        .custom-accordion-content {
            display: none;
            font-size: 14px;
            line-height: 1.6;
        }

        .custom-accordion-title.active + .custom-accordion-content {
            display: block;
        }

        .custom-icon {
            margin-left: auto;
            font-size: 18px;
            transition: transform 0.3s ease;
        }
        
        .custom-collab-title {
            font-size: 16px;
            flex-grow: 1;
        }

        .custom-collab-desc {
            font-size: 14px;
            color: #404040;
            padding-top: 10px;
        }
.custom-icon img{
    width:15px !important;
    margin: 0;
}


  .mobile-contentab .tab-content {
      margin-top: 20px;
    }
    .mobile-contentab .nav-buttons {
      margin-top: 20px;
    }
    .mobile-contentab .nav-buttons .btn-prev {
      float: left;
    }
    .mobile-contentab .nav-buttons .btn-next {
      float: right;
    }
        </style>
        
        <section class="ab-page">
            <div class="desktop_about">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2 col-md-3 col-sm-12 stickyleft-column">
                        <div id="simple-list-example" class="d-flex flex-column gap-2 simple-list-example-scrollspy">      
                            <a class="list-group-item list-group-item-action regular_font" href="#about-us">About Us</a>
                            <a class="list-group-item list-group-item-action regular_font" href="#philosophy">Philosophy</a>
                            <a class="list-group-item list-group-item-action regular_font" href="#five-channels">Five Channels</a>
                            <a class="list-group-item list-group-item-action regular_font" href="#office">Office</a>
                            <a class="list-group-item list-group-item-action regular_font" href="#collaborators">Collaborators</a>
                            <a class="list-group-item list-group-item-action regular_font" href="#team">Team</a>
                          </div>
                    </div>
                    <div class="col-lg-10 col-md-9 col-sm-12">
                        <div data-bs-spy="scroll" data-bs-target="#simple-list-example" data-bs-offset="0" data-bs-smooth-scroll="true" class="scrollspy-example" tabindex="0">
                            
                                  <div id="about-us" class="abouttab ">
                                    <div class="ab_pracdesc">
                                    <p class="about-para regular_font">The practice is a brainchild of Adil Dholakia who is the director and principal. He is an architect, urban conservator and researcher who specializes in community engagement via heritage management, conservation,
                                        and development activities within the rural and urban environment. </p>
                                    <p class="about-para regular_font">The practices’ research and NGO arm attempts to investigate the inherent linkages between the heritage environment and the intangible attributes to socio-cultural-economic frameworks. He holds a double master's degree in
                                        urban design, heritage conservation and restoration from Brandenburg Technical University in Germany and Alexandria University in Egypt.</p>
                                    </div>
                                    <div class="row vidmar">
                                        <div class="col-lg-6 col-md-12 col-sm-12">
                                            <div class="vid_ab">
                                            <img src="/image/aboutvid.gif">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-12 col-sm-12">
                                            <div class="abtextvid">
                                            <div class="why_sec">
                                            <h4 class="about-headings boldcond_font">WHY ‘FIVE CROSS’ ?</h4>
                                            <p class="about-para regular_font">The title "Five Cross" refers to the practice's five core principles, as well as its association with the five elements found in nature. (Panchamahabhuta). </p>
                                            <p class="about-para regular_font">Additionally, it is linked to Germanys' rural Fachwerk architectural style, a traditional heritage design where the Five Cross joinery plays a significant role. This is also where the foundation of the practice
                                                was laid. </p>
                                            </div>
                                            <div class="log_sec">
                                            <h4 class="about-headings boldcond_font">THE LOGO</h4>
                                            <p class="about-para regular_font">The logo for Five Cross Architects was created through a collaboration with renowned Indian origin artist Ratnadeep Adivrekar (@ratnadeepstudio).
                                            </p>
                                            <p class="about-para regular_font">The principles of the practises are clearly translated inside the diaphragm of the Logo, highlighting the interdisciplinary crossroads in the domains of Urbanism, Heritage, Architecture, Art, and Culture.</p>
                                            </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                            
                            
                                
                                    <div id="philosophy" class="">
                                    <div class="ab_prsec">
                                    <h4 class="about-headings boldcond_font">PRACTICE</h4>
                                    <ul class="ab_ul">
                                    <li class="regular_font">The confluence of art, architecture, and technology is the primary area of interest for Five Cross Architects, which was established in 2021.</li>
                                    <li class="regular_font">The practice aims at advocating the relationship between the community, cultures and the precincts it works in.</li>
                                    <li class="regular_font">The practice embraces to revive the values, authenticity, and integrity of the heritage context. Investing in a heritage precinct is an investment in the people and the community, eventually improving the quality of life.</li>
                                    </ul>
                                    </div>
                                    <div class="ab_projsec">
                                    <h4 class="about-headings boldcond_font">PROJECT ENDEAVOURS</h4>
                                    <ul class="ab_ul">
                                    <li class="regular_font">The office currently participates in projects in India and Germany owing to the principal architect/founders’ long-standing relationship with the two countries. The two countries' connection translates into an exchange
                                        of expertise, resources, and technology that help alleviate the quality of projects undertaken at either ends.</li>
                                    <li class="regular_font">This international practice concentrates on undertaking projects in the realms of heritage revitalization, including management, conservation, and preservation as well as architectural development at the cultural, educational,
                                        and civic tiers, both at the private and public stages.</li>
                                    <li class="regular_font">While exploring more contemporary methods for urban and rural precincts, it is essential to strike a balance between embracing progress and preserving the nostalgic essence of time.</li>
                                    </ul>
                                    </div>
                                    <div class="ab_encsec">
                                    <h4 class="about-headings boldcond_font">ENCOURAGE REGENERATION</h4>
                                    <ul class="ab_ul">
                                    <li class="regular_font">Undertaking regeneration initiatives to revitalize urban and rural historic contexts.</li>
                                    <li class="regular_font">Promoting the value of underappreciated historical components.</li>
                                    <li class="regular_font">Empowering communities via capacity building and encouraging active engagement in their development.</li>
                                     </ul>
                                     </div>
                                     <div class="ab_pressec">
                                    <h4 class="about-headings boldcond_font">PRESERVE AND ENGAGE</h4>
                                    <ul class="ab_ul">
                                    <li class="regular_font">Culture, heritage, and representation are integral to the essence of the idea. It focuses on preserving the physical identity and its various components, whether they are tangible or intangible, built or unbuilt.</li>
                                    <li class="regular_font">When approaching the idea, it is crucial to consider the perspectives of communities associated to these assets. This viewpoint encourages user interaction with both the architectural object itself and its context.</li>
                                    </ul>
                                    </div>
                                </div>
                            
                            
                                
                                    <div id="five-channels" class="">
                                    <div class="fiv-accor">
                                        <div class="img-accordion active" style="background-image: url('/image/heri (1).webp');" onclick="toggleDescription(this)">
                                            <div class="titdisc-bg">
                                                <h4 class="boldcond_font">HERITAGE</h4>
                                                <div class="description">
                                                    <p class="regular_font">We embrace an ethos that aligns deeply with nature's elements - The Earth; Symbolized by the rich, warm hue of Terracotta, the element embodies a profound connection to our ancestral roots, cultural practices,
                                                        and historical heritage. This link extends to heritage sites like ancient fortifications, cultural monuments, and traditional settings that are not only situated on the Earth but also harmoniously intertwined
                                                        with its ecosystems. Our design philosophy seeks to honor this intrinsic connection by merging historical context with contemporary innovation, fostering a sustainable and culturally rich future.</p>
                                                    <p class="regular_font">We are dedicated to using heritage as a progressive tool, unearthed and rediscovered through our planning and design efforts. Our work reveals timeless narratives, embracing the past and present in a harmonious
                                                        architectural dialogue. "Rooted in Time" encapsulates our approach, signifying the unveiling of layers where history and nature entwine, reflecting a seamless integration of culture and the natural world.
                                                        Through our projects, we strive to craft spaces where tradition and modernity coalesce, creating an evolving tapestry that celebrates and preserves the essence of heritage.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="img-accordion" style="background-image: url('/image/ecology.webp');" onclick="toggleDescription(this)">
                                            <div class="titdisc-bg">
                                                <h4 class="boldcond_font">ECOLOGY</h4>
                                                <div class="description">
                                                    <p class="regular_font">Our ethos embodies the elements of nature, where Space is represented by tranquil turquoise. The harmonious balance of all biotic and abiotic components, the interweaving of tangible and intangible facets, strewn across a myriad of scales forms the crux of the practice.</p>
                                                    <p class="regular_font">We cultivate a holistic approach, working with networks of people and relying on our collective knowledge to ensure impact across all strata of the ecological spectrum. Our aim is to enhance the socio-economic and overall well-being of society by employing productive and ecologically sensitive interventions. The body of our work re-enforces the intricate networks that exist across the biosphere, acknowledging every component as crucial to building a sustainable future. Our vision is to craft ecosystems that can self-sustain through the test of time and propagate parallelly with the built environment.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="img-accordion" style="background-image: url('/image/urba (1).webp');" onclick="toggleDescription(this)">
                                            <div class="titdisc-bg">
                                                <h4 class="boldcond_font">URBANISM</h4>
                                                <div class="description">
                                                    <p class="regular_font">Our ethos resonates deeply with the elements of nature, where Air takes center stage, embodied by the refreshing hue of Green. Urbanism, a cornerstone of our practice encompasses the intricate planning,
                                                        design, and development of cities, spanning infrastructure, architecture, transportation, and public spaces. Yet urbanism transcends mere construction; it embodies a harmonious balance between human
                                                        creations and the natural environment.</p>
                                                    <p class="regular_font">We redefine urbanism by fostering community engagement and conducting meticulous, community-based research. Our approach integrates verdant green tones into urban landscapes, blending cityscapes with nature
                                                        seamlessly. The trajectory of our development endeavors emphasizes a dynamic relationship with nature, viewing land not just as a space for construction but as an integral ecosystem. At Five Cross Studio,
                                                        we strive to enrich urban environments where nature and urbanism coexist harmoniously, shaping sustainable and livable communities for the future.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="img-accordion" style="background-image: url('/image/architech (1).webp');" onclick="toggleDescription(this)">
                                            <div class="titdisc-bg">
                                                <h4 class="boldcond_font">ARCHITECTURE</h4>
                                                <div class="description">
                                                    <p class="regular_font">Our studio's ethos is deeply rooted in the harmony of natural elements, where Water is symbolized by the serene hue of light blue. In architectural design, Water's dynamic and fluid characteristics inspire us to create spaces characterized by curved lines, flowing forms, and open environments. These elements evoke a sense of movement and fluidity, mirroring the tranquil qualities of water and sky. The colour blue promotes feelings of tranquility, serenity, and calmness – fostering a seamless integration of the built environment with nature.</p>
                                                    <p class="regular_font">At our studio, we strive to craft architectural experiences that resonate with visual harmony and aesthetic appeal responding sensitively to their surroundings. Our approach celebrates Fluid Tranquility, where architectural designs reflect diverse identities while cultivating a serene environment. Embracing Architectural Elegance, our designs flow naturally, integrating materials and forms that harmonize effortlessly with their natural environment. Through this synergy, we aim to create places that not only inspire but also enhance the human experience through thoughtful and elegant architectural solutions.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="img-accordion" style="background-image: url('/image/art (1).webp');" onclick="toggleDescription(this)">
                                            <div class="titdisc-bg">
                                                <h4 class="boldcond_font">ART & CULTURE</h4>
                                                <div class="description">
                                                    <p class="regular_font">Our ethos deeply resonates with the elemental forces of nature, where Art and Culture find their interconnected expressions. Art manifests through the dynamic element of Fire, symbolized by the vibrant color Orange, embodying passion, creativity, transformation, and vitality. Culture, while resonating with the same elemental energy, retains its profound individuality - evoking the vastness and timelessness of heritage, exploration, and collective identity.</p>
                                                    <p class="regular_font">Within our practice, the innate connection between arts and culture is intricately woven into every project. We are dedicated to creating a natural synthesis that enhances spaces with expressive design and cultural depth. Our approach embraces Vibrant Energy, where art stimulates spaces with emotional resonance and culture roots them within a continuum of communal meaning.</p>
                                                    <p class="regular_font">Each project becomes a catalyst for cultural dialogue and creativity, inspiring vibrant pathways that enrich communities and elevate everyday life. Through this harmonious convergence, our studio aspires to craft environments that honor the past, invigorate the present, and inspire a sustainable, culturally enriched future.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            
                            
                                
                                    <div id="office" class="">
                                    <div class="Office-sec">
                                        <h4 id="list-item-3" class="about-headings boldcond_font">OFFICE</h4>
                                        <p class="about-para regular_font">At Five Cross Architects, our space is more than just a studio – it's a dynamic hub for creativity during the day and a vibrant design forum in the evening. </p>
                                        <p class="about-para regular_font">Exciting collaboration and representation in India with @porzellanmanufakturnymphenburg, bridging continents in the realms of Heritage, Art, and Culture. Our studio creates an interesting environment that encourages
                                            cross-cultural dialogues by including a range of unique aspects.</p>
                                    </div>
                                    <div class="off-gall">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="column">
                                                    <img src="/image/first.webp" class="img-fluid" alt="Image 1">
                                                    <img src="/image/second.webp" class="img-fluid" alt="Image 2">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="column">
                                                    <img src="/image/third.webp" class="img-fluid" alt="Image 2">
                                                    <img src="/image/forth.webp" class="img-fluid" alt="Image 2">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="column">
                                                    <img src="/image/fifth.webp" class="img-fluid" alt="Image 3">
                                                    <img src="/image/sixth.webp" class="img-fluid" alt="Image 2">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            
                            
                                
                                    <div id="collaborators" class="">
                                        <div class="desk_collacc">
                                        <div class="circle"></div>
                                    <div class="collab-sec">
                                        <h4 id="list-item-3" class="about-headings boldcond_font">COLLABORATORS</h4>
                                        <p class="about-para regular_font">A focus on collaboration through engagement with allied disciplines and the establishment of collaborations both nationally and internationally, allowing for varied knowledge and viewpoints. Finally, undertaking initiatives to improve beneficiaries' quality of life, understanding the necessity of establishing places that promote well-being, functioning, and overall improvement.</p>
                                    </div>
                                    <div id="coll_sec" class="owl-carousel">
                                        <div class="collab_item">
                                            <div class="collab_card collfirstrow">
                                                <div class="collab_img">
                                                    <img src="/image/5linelogo.webp" alt="Hamilton Studios Logo" class="collab_logo">
                                                </div>
                                                <div class="collab_content">
                                                    <h4 class="collab_title boldcond_font">5 LINES - ART, HERITAGE AND URBANISM</h4>
                                                    <p class="collab_desc regular_font">The research and NGO division of Five Cross Architects explores the intersection of art, heritage, and urbanism, aiming to integrate cultural preservation and contemporary design within urban development.</p>
                                                </div>
                                            </div>
                                            <div class="collab_card">
                                                <div class="collab_img">
                                                    <img src="/image/UTOKIYOTRANS.webp" alt="Hamilton Studios Logo" class="collab_logo">
                                                </div>
                                                <div class="collab_content">
                                                    <h4 class="collab_title boldcond_font">UNIVERSITY OF TOKYO, RICAS</h4>
                                                    <p class="collab_desc regular_font">RICAS- Founded in 1941, the Institute for Advanced Studies on Asia has evolved into one of Japan's leading centers for Asian studies. While it originally concentrated on East Asia, its scope now includes South, Southeast, and West Asia, featuring five specialized departments and a renowned library.</p>
                                                </div>
                                            </div>
                                            <div class="collab_card">
                                                <div class="collab_img">
                                                    <img src="/image/nymph.webp" alt="Hamilton Studios Logo" class="collab_logo">
                                                </div>
                                                <div class="collab_content">
                                                    <h4 class="collab_title boldcond_font">NYMPHENBURG PORCELAIN MANUFACTORY</h4>
                                                    <p class="collab_desc regular_font">Nymphenburg Porzellan, celebrated for its exceptional craftsmanship, has been creating luxury porcelain in Munich since 1747. Each piece, known for its intricate detail and artistry, merges tradition with innovation. Their collections, spanning tableware to decorative art, embody elegance and heritage in fine porcelain.  </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="collab_item">
                                            <div class="collab_card collfirstrow">
                                                <div class="collab_img">
                                                    <img src="/image/adits.webp" alt="Hamilton Studios Logo" class="collab_logo">
                                                </div>
                                                <div class="collab_content">
                                                    <h4 class="collab_title boldcond_font">ADITES GMBH</h4>
                                                    <p class="collab_desc regular_font">Collaborator in offering expert consultancy in sustainable energy solutions, specializing in photovoltaic systems and energy management for projects across India and Germany.</p>
                                                </div>
                                            </div>
                                            <div class="collab_card">
                                                <div class="collab_img">
                                                    <img src="/image/bayer.webp" alt="Hamilton Studios Logo" class="collab_logo">
                                                </div>
                                                <div class="collab_content">
                                                    <h4 class="collab_title boldcond_font">BAYERISCHE LANDESAMT FÜR DENKMAL PFELGE</h4>
                                                    <p class="collab_desc regular_font">The Bavarian State Office for Monument Preservation is the central specialist authority of the Free State of Bavaria for Monument Protection and Monument Preservation. Founded in 1908 as a General Conservatory of Art Monuments and Antiquities of Bavaria, we now see ourselves as a service provider for the cultural heritage of Bavaria.</p>
                                                </div>
                                            </div>
                                            <!--<div class="collab_card">-->
                                            <!--    <div class="collab_img">-->
                                            <!--        <img src="/image/urbndes.webp" alt="Hamilton Studios Logo" class="collab_logo">-->
                                            <!--    </div>-->
                                            <!--    <div class="collab_content">-->
                                            <!--        <h4 class="collab_title boldcond_font">UDRI</h4>-->
                                            <!--        <p class="collab_desc regular_font">UDRI focusses works towards making Mumbai an inclusive region which is humane, and balances its cosmopolitan cultural heritage and social fabric with equitable growth and efficient infrastructure. In this respect, urban planning and policy, urban design and heritage conservation are the core concerns of UDRI.</p>-->
                                            <!--    </div>-->
                                            <!--</div>-->
                                            <div class="collab_card">
                                                <div class="collab_img">
                                                    <img src="/image/ham.webp" alt="Hamilton Studios Logo" class="collab_logo">
                                                </div>
                                                <div class="collab_content">
                                                    <h4 class="collab_title boldcond_font">HAMILTON STUDIOS</h4>
                                                    <p class="collab_desc regular_font">The oldest photography studio in Mumbai, renowned for its rich history and expertise as an advisor in documentation and archival.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="collab_item">
                                            <div class="collab_card collfirstrow">
                                                <div class="collab_img">
                                                    <img src="/image/himacedmy.webp" alt="Hamilton Studios Logo" class="collab_logo">
                                                </div>
                                                <div class="collab_content">
                                                    <h4 class="collab_title boldcond_font">HIMS ACADEMY</h4>
                                                    <p class="collab_desc regular_font">Collaborator in classical music, art, and culture, focusing on intercultural exchange. Located in the castle of hafenpreppach, it hosts high-quality programs and projects promoting creativity, education, and tranquility. The academy offers summer programs, art exhibitions, and artist residencies, fostering a rich cultural environment.</p>
                                                </div>
                                            </div>
                                            <div class="collab_card">
                                                <div class="collab_img">
                                                    <img src="/image/archnet.webp" alt="Hamilton Studios Logo" class="collab_logo">
                                                </div>
                                                <div class="collab_content">
                                                    <h4 class="collab_title boldcond_font">ARCHNET.ORG</h4>
                                                    <p class="collab_desc regular_font">Archnet.org is a comprehensive online resource dedicated to architecture, urbanism, and design in the civil society, featuring extensive collections, scholarly articles, and educational materials. Archnet is hosted and supported by MIT Libraries | Aga Khan Documentation Center at MIT</p>
                                                </div>
                                            </div>
                                            <div class="collab_card">
                                                <div class="collab_img">
                                                    <img src="/image/kun.webp" alt="Hamilton Studios Logo" class="collab_logo">
                                                </div>
                                                <div class="collab_content">
                                                    <h4 class="collab_title boldcond_font">KUNST UND VEREIN IM HAFENPREPPACH</h4>
                                                    <p class="collab_desc regular_font">Musik und Kunst is a collaborator, a German platform celebrating music and art, offering insights, resources, and community for enthusiasts and professionals alike, fostering appreciation and creativity in cultural expression.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="collab_item">
                                            <div class="collab_card collfirstrow">
                                                <div class="collab_img">
                                                    <img src="/image/adammm.png" alt="Hamilton Studios Logo" class="collab_logo">
                                                </div>
                                                <div class="collab_content">
                                                    <h4 class="collab_title boldcond_font">AKADEMIE FÜR DIALOG-ANWENDUNG UND MEDIATION</h4>
                                                    <p class="collab_desc regular_font">ADAM promotes and shapes educational diversity, facilitates knowledge transfer, and drives change. It also focuses on building bridges between East and West, create networks spanning North and South. ADAM contributes to shaping and strengthening a culture of dialogue across politics and society, economy and environment, and science and art.</p>
                                                </div>
                                            </div>
                                            <div class="collab_card">
                                                <div class="collab_img">
                                                    <img src="/image/atharlinee.png" alt="Hamilton Studios Logo" class="collab_logo">
                                                </div>
                                                <div class="collab_content">
                                                    <h4 class="collab_title boldcond_font">ATHAR LINA</h4>
                                                    <p class="collab_desc regular_font">Athar Lina - Athar Lina is a participatory conservation initiative by the Built Environment Collective|Megawra. It views monuments as resources, not burdens, and promotes community involvement in heritage conservation to foster development and ensure sustainable preservation.</p>
                                                </div>
                                            </div>
                                            <div class="collab_card">
                                                <div class="collab_img">
                                                    <img src="/image/stadt.png" alt="Hamilton Studios Logo" class="collab_logo">
                                                </div>
                                                <div class="collab_content">
                                                    <h4 class="collab_title boldcond_font">STADT SESSLACH</h4>
                                                    <p class="collab_desc regular_font">Co-operating with the local municipality for the development of the town of Sesslach.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="collab_item">
                                            <div class="collab_card collfirstrow">
                                                <div class="collab_img">
                                                    <img src="/image/chcho.webp" alt="Hamilton Studios Logo" class="collab_logo">
                                                </div>
                                                <div class="collab_content">
                                                    <h4 class="collab_title boldcond_font">CENTRE FOR HERITAGE CONSERVATION (CHC)</h4>
                                                    <p class="collab_desc regular_font">Center for Heritage Conservation (CHC) is a knowledge partner and an arm of the CEPT University - that focuses on advancing the discourse of built heritage conservation through the lenses of sustainability and equity considering the challenges faced by the Global South.</p>
                                                </div>
                                            </div>
                                            <div class="collab_card">
                                                <div class="collab_img">
                                                    <img src="/image/atchh.webp" alt="Hamilton Studios Logo" class="collab_logo">
                                                </div>
                                                <div class="collab_content">
                                                    <h4 class="collab_title boldcond_font">AGA KHAN TRUST FOR CULTURE</h4>
                                                    <p class="collab_desc regular_font">The Aga Khan Trust for Culture is a private Organisation that promotes cultural heritage preservation, urban revitalization, and architectural excellence, enhancing quality of life and fostering cultural identity in historically significant areas worldwide.</p>
                                                </div>
                                            </div>
                                            <div class="collab_card">
                                                <div class="collab_img">
                                                    <img src="/image/edencollab.webp" alt="Hamilton Studios Logo" class="collab_logo">
                                                </div>
                                                <div class="collab_content">
                                                    <h4 class="collab_title boldcond_font">EDEN</h4>
                                                    <p class="collab_desc regular_font">EdEn focusses on the philosophy of "goal before method" driving a focus on sustainability by integrating environmental sensitivity into design. The firm creates efficient, innovative solutions that balance economy, ecology, and society, meeting LEED, GRIHA, and IGBC certification standards.</p>
                                                </div>
                                            </div>
                                        </div>
                                       
                                    </div>
                                    </div>
                                    <div class="mobile_viewacc">
                                        <div class="collab-sec">
                                        <h4 id="list-item-3" class="about-headings boldcond_font">COLLABORATORS</h4>
                                        <p class="about-para regular_font">A focus on collaboration through engagement with allied disciplines and the establishment of collaborations both nationally and internationally, allowing for varied knowledge and viewpoints. Finally, undertaking initiatives to improve beneficiaries' quality of life, understanding the necessity of establishing places that promote well-being, functioning, and overall improvement.</p>
                                    </div>
                                            <div class="custom-accordion">
        <!-- First Accordion Item -->
        <div class="custom-accordion-item">
            <div class="custom-accordion-title">
                <img src="/image/5linelogo.webp" alt="5 Lines Logo">
                <span class="custom-collab-title boldcond_font">5 LINES - ART, HERITAGE AND URBANISM</span>
                <span class="custom-icon">
                    <img src="/image/colic.png" alt="arrow icon">
                </span>
            </div>
            <div class="custom-accordion-content">
                <p class="custom-collab-desc regular_font">
                    The research and NGO division of Five Cross Architects explores the intersection of art, heritage, and urbanism, aiming to integrate cultural preservation and contemporary design within urban development.
                </p>
            </div>
        </div>

        <!-- Second Accordion Item -->
        <div class="custom-accordion-item">
            <div class="custom-accordion-title">
                <img src="/image/UTOKIYOTRANS.webp" alt="University of Tokyo Logo">
                <span class="custom-collab-title boldcond_font">UNIVERSITY OF TOKYO, RICAS</span>
                <span class="custom-icon">
                    <img src="/image/colic.png" alt="arrow icon">
                </span>
            </div>
            <div class="custom-accordion-content">
                <p class="custom-collab-desc regular_font">
                    RICAS- Founded in 1941, the Institute for Advanced Studies on Asia has evolved into one of Japan's leading centers for Asian studies. While it originally concentrated on East Asia, its scope now includes South, Southeast, and West Asia, featuring five specialized departments and a renowned library.
                </p>
            </div>
        </div>

        <!-- Third Accordion Item -->
        <div class="custom-accordion-item">
            <div class="custom-accordion-title">
                <img src="/image/nymph.webp" alt="Nymphenburg Porcelain Logo">
                <span class="custom-collab-title boldcond_font">NYMPHENBURG PORCELAIN MANUFACTORY</span>
                <span class="custom-icon">
                    <img src="/image/colic.png" alt="arrow icon">
                </span>
            </div>
            <div class="custom-accordion-content">
                <p class="custom-collab-desc regular_font">
                    Nymphenburg Porzellan, celebrated for its exceptional craftsmanship, has been creating luxury porcelain in Munich since 1747. Each piece merges tradition with innovation, embodying elegance and heritage in fine porcelain.
                </p>
            </div>
        </div>
		
		<!-- Fourth Accordion Item -->
        <div class="custom-accordion-item">
            <div class="custom-accordion-title">
                <img src="/image/adits.webp" alt="Nymphenburg Porcelain Logo">
                <span class="custom-collab-title boldcond_font">ADITES GMBH</span>
                <span class="custom-icon">
                    <img src="/image/colic.png" alt="arrow icon">
                </span>
            </div>
            <div class="custom-accordion-content">
                <p class="custom-collab-desc regular_font">
                    Collaborator in offering expert consultancy in sustainable energy solutions, specializing in photovoltaic systems and energy management for projects across India and Germany.
                </p>
            </div>
        </div>
		
		<!-- Five Accordion Item -->
        <div class="custom-accordion-item">
            <div class="custom-accordion-title">
                <img src="/image/bayer.webp" alt="Nymphenburg Porcelain Logo">
                <span class="custom-collab-title boldcond_font">BAYERISCHE LANDESAMT FÜR DENKMAL PFELGE</span>
                <span class="custom-icon">
                    <img src="/image/colic.png" alt="arrow icon">
                </span>
            </div>
            <div class="custom-accordion-content">
                <p class="custom-collab-desc regular_font">
                    The Bavarian State Office for Monument Preservation is the central specialist authority of the Free State of Bavaria for Monument Protection and Monument Preservation. Founded in 1908 as a General Conservatory of Art Monuments and Antiquities of Bavaria, we now see ourselves as a service provider for the cultural heritage of Bavaria.
                </p>
            </div>
        </div>
		
		<!-- Six Accordion Item -->
        <!--<div class="custom-accordion-item">-->
        <!--    <div class="custom-accordion-title">-->
        <!--        <img src="/image/urbndes.webp" alt="Nymphenburg Porcelain Logo">-->
        <!--        <span class="custom-collab-title boldcond_font">UDRI</span>-->
        <!--        <span class="custom-icon">-->
        <!--            <img src="/image/colic.png" alt="arrow icon">-->
        <!--        </span>-->
        <!--    </div>-->
        <!--    <div class="custom-accordion-content">-->
        <!--        <p class="custom-collab-desc regular_font">-->
        <!--            UDRI focusses works towards making Mumbai an inclusive region which is humane, and balances its cosmopolitan cultural heritage and social fabric with equitable growth and efficient infrastructure. In this respect, urban planning and policy, urban design and heritage conservation are the core concerns of UDRI.-->
        <!--        </p>-->
        <!--    </div>-->
        <!--</div>-->
		
		<!-- Seven Accordion Item -->
        <div class="custom-accordion-item">
            <div class="custom-accordion-title">
                <img src="/image/ham.webp" alt="Nymphenburg Porcelain Logo">
                <span class="custom-collab-title boldcond_font">HAMILTON STUDIOS</span>
                <span class="custom-icon">
                    <img src="/image/colic.png" alt="arrow icon">
                </span>
            </div>
            <div class="custom-accordion-content">
                <p class="custom-collab-desc regular_font">
                    The oldest photography studio in Mumbai, renowned for its rich history and expertise as an advisor in documentation and archival.
                </p>
            </div>
        </div>
		
		<!-- Eight Accordion Item -->
        <div class="custom-accordion-item">
            <div class="custom-accordion-title">
                <img src="/image/himacedmy.webp" alt="Nymphenburg Porcelain Logo">
                <span class="custom-collab-title boldcond_font">HIMS ACADEMY</span>
                <span class="custom-icon">
                    <img src="/image/colic.png" alt="arrow icon">
                </span>
            </div>
            <div class="custom-accordion-content">
                <p class="custom-collab-desc regular_font">
                    Collaborator in classical music, art, and culture, focusing on intercultural exchange. Located in the castle of hafenpreppach, it hosts high-quality programs and projects promoting creativity, education, and tranquility. The academy offers summer programs, art exhibitions, and artist residencies, fostering a rich cultural environment.
                </p>
            </div>
        </div>
		
		<!-- Nine Accordion Item -->
        <div class="custom-accordion-item">
            <div class="custom-accordion-title">
                <img src="/image/archnet.webp" alt="Nymphenburg Porcelain Logo">
                <span class="custom-collab-title boldcond_font">ARCHNET.ORG</span>
                <span class="custom-icon">
                    <img src="/image/colic.png" alt="arrow icon">
                </span>
            </div>
            <div class="custom-accordion-content">
                <p class="custom-collab-desc regular_font">
                    Archnet.org is a comprehensive online resource dedicated to architecture, urbanism, and design in the civil society, featuring extensive collections, scholarly articles, and educational materials. Archnet is hosted and supported by MIT Libraries | Aga Khan Documentation Center at MIT
                </p>
            </div>
        </div>
		
		<!-- Ten Accordion Item -->
        <div class="custom-accordion-item">
            <div class="custom-accordion-title">
                <img src="/image/kun.webp" alt="Nymphenburg Porcelain Logo">
                <span class="custom-collab-title boldcond_font">KUNST UND VEREIN IM HAFENPREPPACH</span>
                <span class="custom-icon">
                    <img src="/image/colic.png" alt="arrow icon">
                </span>
            </div>
            <div class="custom-accordion-content">
                <p class="custom-collab-desc regular_font">
                    Musik und Kunst is a collaborator, a German platform celebrating music and art, offering insights, resources, and community for enthusiasts and professionals alike, fostering appreciation and creativity in cultural expression.
                </p>
            </div>
        </div>
		
		<!-- Eleven Accordion Item -->
        <div class="custom-accordion-item">
            <div class="custom-accordion-title">
                <img src="/image/adammm.png" alt="Nymphenburg Porcelain Logo">
                <span class="custom-collab-title boldcond_font">AKADEMIE FÜR DIALOG-ANWENDUNG UND MEDIATION</span>
                <span class="custom-icon">
                    <img src="/image/colic.png" alt="arrow icon">
                </span>
            </div>
            <div class="custom-accordion-content">
                <p class="custom-collab-desc regular_font">
                    ADAM promotes and shapes educational diversity, facilitates knowledge transfer, and drives change. It also focuses on building bridges between East and West, create networks spanning North and South. ADAM contributes to shaping and strengthening a culture of dialogue across politics and society, economy and environment, and science and art.
                </p>
            </div>
        </div>
		
		<!-- Twelve Accordion Item -->
        <div class="custom-accordion-item">
            <div class="custom-accordion-title">
                <img src="/image/atharlinee.png" alt="Nymphenburg Porcelain Logo">
                <span class="custom-collab-title boldcond_font">ATHAR LINA</span>
                <span class="custom-icon">
                    <img src="/image/colic.png" alt="arrow icon">
                </span>
            </div>
            <div class="custom-accordion-content">
                <p class="custom-collab-desc regular_font">
                    Athar Lina - Athar Lina is a participatory conservation initiative by the Built Environment Collective|Megawra. It views monuments as resources, not burdens, and promotes community involvement in heritage conservation to foster development and ensure sustainable preservation.
                </p>
            </div>
        </div>
		
		<!-- Thirteen Accordion Item -->
        <div class="custom-accordion-item">
            <div class="custom-accordion-title">
                <img src="/image/stadt.png" alt="Nymphenburg Porcelain Logo">
                <span class="custom-collab-title boldcond_font">STADT SESSLACH</span>
                <span class="custom-icon">
                    <img src="/image/colic.png" alt="arrow icon">
                </span>
            </div>
            <div class="custom-accordion-content">
                <p class="custom-collab-desc regular_font">
                    Co-operating with the local municipality for the development of the town of Sesslach.
                </p>
            </div>
        </div>
		
		<!-- forteen Accordion Item -->
        <div class="custom-accordion-item">
            <div class="custom-accordion-title">
                <img src="/image/chcho.webp" alt="Nymphenburg Porcelain Logo">
                <span class="custom-collab-title boldcond_font">CENTRE FOR HERITAGE CONSERVATION (CHC)</span>
                <span class="custom-icon">
                    <img src="/image/colic.png" alt="arrow icon">
                </span>
            </div>
            <div class="custom-accordion-content">
                <p class="custom-collab-desc regular_font">
                    Center for Heritage Conservation (CHC) is a knowledge partner and an arm of the CEPT University - that focuses on advancing the discourse of built heritage conservation through the lenses of sustainability and equity considering the challenges faced by the Global South.
                </p>
            </div>
        </div>
		
		<!-- fifthteen Accordion Item -->
        <div class="custom-accordion-item">
            <div class="custom-accordion-title">
                <img src="/image/atchh.webp" alt="Nymphenburg Porcelain Logo">
                <span class="custom-collab-title boldcond_font">AGA KHAN TRUST FOR CULTURE</span>
                <span class="custom-icon">
                    <img src="/image/colic.png" alt="arrow icon">
                </span>
            </div>
            <div class="custom-accordion-content">
                <p class="custom-collab-desc regular_font">
                    The Aga Khan Trust for Culture is a private Organisation that promotes cultural heritage preservation, urban revitalization, and architectural excellence, enhancing quality of life and fostering cultural identity in historically significant areas worldwide.
                </p>
            </div>
        </div>
        
        <!-- Sixth Accordion Item -->
        <div class="custom-accordion-item">
            <div class="custom-accordion-title">
                <img src="/image/edencollab.webp" alt="Nymphenburg Porcelain Logo">
                <span class="custom-collab-title boldcond_font">EDEN</span>
                <span class="custom-icon">
                    <img src="/image/colic.png" alt="arrow icon">
                </span>
            </div>
            <div class="custom-accordion-content">
                <p class="custom-collab-desc regular_font">
                    EdEn focusses on the philosophy of "goal before method" driving a focus on sustainability by integrating environmental sensitivity into design. The firm creates efficient, innovative solutions that balance economy, ecology, and society, meeting LEED, GRIHA, and IGBC certification standards.
                </p>
            </div>
        </div>

        <!-- Add more accordion items as needed -->
    </div>
                                    </div>
                                </div>
                            
                            
                            <div id="team" class="">
                                <div class="team_sec">
                                        <h4 id="list-item-3" class="team_title about-headings boldcond_font">TEAM</h4>
    
                                        <div class="all_team">
                                            <div class="photo_row">
                                                <div class="img_hov">
                                                    <div class="photo">
                                                        <img src="/image/ADILDHOLAKIA.webp" alt="Person 1">
                                                    </div>
                                                    <div class="over_img red_img">
                                                        <div class="cont_text">
                                                            <h5 class="team_name boldcond_font">ADIL DHOLAKIA</h5>
                                                            <!--<p class="ed_name regular_font">FIVE CROSS ARCHITECTS</p>-->
                                                            <p class="role_team medium_font">Director</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="img_hov">
                                                    <div class="photo">
                                                        <img src="/image/DR-NAOKI-FUKAMI.webp" alt="Person 1">
                                                    </div>
                                                    <div class="over_img red_img">
                                                        <div class="cont_text">
                                                            <h5 class="team_name boldcond_font">DR. NAOKI FUKAMI</h5>
                                                            <!--<p class="ed_name regular_font">TOKYO UNIVERSITY</p>-->
                                                            <p class="role_team medium_font">Art Historian</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="img_hov">
                                                    <div class="photo">
                                                        <img src="/image/DR-SABINE-KROISENBRUNNER.webp" alt="Person 1">
                                                    </div>
                                                    <div class="over_img blue_img">
                                                        <div class="cont_text">
                                                            <h5 class="team_name boldcond_font">SABINE KROISENBRUNNER</h5>
                                                            <!--<p class="ed_name regular_font">ORGANISATION</p>-->
                                                            <p class="role_team medium_font">Political Scientist & Program Coordinator</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="img_hov">
                                                    <div class="photo">
                                                        <img src="/image/VISHAKHA-GANGAR.webp" alt="Person 1">
                                                    </div>
                                                    <div class="over_img red_img">
                                                        <div class="cont_text">
                                                            <h5 class="team_name boldcond_font">VISHAKHA GANGAR</h5>
                                                            <!--<p class="ed_name regular_font">FIVE CROSS ARCHITECTS</p>-->
                                                            <p class="role_team medium_font">Architect - Researcher</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="img_hov">
                                                    <div class="photo">
                                                        <img src="/image/VATSALA-SHUKLA.webp" alt="Person 1">
                                                    </div>
                                                    <div class="over_img yellow_img">
                                                        <div class="cont_text">
                                                            <h5 class="team_name boldcond_font">VATSALA SHUKLA</h5>
                                                            <!--<p class="ed_name regular_font">-</p>-->
                                                            <p class="role_team medium_font">UX/UI Designer</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                            <div class="photo_row">
                                                <div class="img_hov">
                                                    <div class="photo">
                                                        <img src="/image/Katyayani-Agarwal.webp" alt="Person 1">
                                                    </div>
                                                    <div class="over_img blue_img">
                                                        <div class="cont_text">
                                                            <h5 class="team_name boldcond_font">KATYAYANI AGARWAL</h5>
                                                            <!--<p class="ed_name regular_font">-</p>-->
                                                            <p class="role_team medium_font">Studio Advisor & Collaborator</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="img_hov">
                                                    <div class="photo">
                                                        <img src="/image/THWISHA-SHAH.webp" alt="Person 1">
                                                    </div>
                                                    <div class="over_img lightblue_img">
                                                        <div class="cont_text">
                                                            <h5 class="team_name boldcond_font">THWISHA SHAH</h5>
                                                            <!--<p class="ed_name regular_font">FIVE CROSS ARCHITECTS</p>-->
                                                            <p class="role_team medium_font">Architect - Researcher</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="img_hov">
                                                    <div class="photo">
                                                        <img src="/image/VIRAJ-TANK.webp" alt="Person 1">
                                                    </div>
                                                    <div class="over_img lightblue_img">
                                                        <div class="cont_text">
                                                            <h5 class="team_name boldcond_font">VIRAJ TANK</h5>
                                                            <!--<p class="ed_name regular_font">-</p>-->
                                                            <p class="role_team medium_font">Architect</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="img_hov">
                                                    <div class="photo">
                                                        <img src="/image/TREVIND.webp" alt="Person 1">
                                                    </div>
                                                    <div class="over_img lightblue_img">
                                                        <div class="cont_text">
                                                            <h5 class="team_name boldcond_font">TREVIN D'SOUZA</h5>
                                                            <!--<p class="ed_name regular_font">-</p>-->
                                                            <p class="role_team medium_font">Architect</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="img_hov">
                                                    <div class="photo">
                                                        <img src="/image/ISMAIL-MUKADAM.webp" alt="Person 1">
                                                    </div>
                                                    <div class="over_img yellow_img">
                                                        <div class="cont_text">
                                                            <h5 class="team_name boldcond_font">ISMAIL MUKADAM</h5>
                                                            <!--<p class="ed_name regular_font">-</p>-->
                                                            <p class="role_team medium_font">Studio Advisor & Collaborator</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--<div class="img_hov">-->
                                                <!--    <div class="photo">-->
                                                <!--        <img src="/image/sakhi mishra.webp" alt="Person 1">-->
                                                <!--    </div>-->
                                                <!--    <div class="over_img lightblue_img">-->
                                                <!--        <div class="cont_text">-->
                                                <!--            <h5 class="team_name boldcond_font">SAKHI MISHRA</h5>-->
                                                            <!--<p class="ed_name regular_font">-</p>-->
                                                <!--            <p class="role_team medium_font">Intern</p>-->
                                                <!--        </div>-->
                                                <!--    </div>-->
                                                <!--</div>-->
                                            </div>
                                            <div class="photo_row">
                                                <div class="img_hov">
                                                    <div class="photo">
                                                        <img src="/image/NIZARDHOLAKIA.webp" alt="Person 1">
                                                    </div>
                                                    <div class="over_img blue_img">
                                                        <div class="cont_text">
                                                            <h5 class="team_name boldcond_font">NIZAR DHOLAKIA</h5>
                                                            <!--<p class="ed_name regular_font">-</p>-->
                                                            <p class="role_team medium_font">Studio Advisor</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="img_hov">
                                                    <div class="photo">
                                                        <img src="/image/ARNAZ-DHOLAKIA.webp" alt="Person 1">
                                                    </div>
                                                    <div class="over_img green_img">
                                                        <div class="cont_text">
                                                            <h5 class="team_name boldcond_font">ARNAZ DHOLAKIA</h5>
                                                            <!--<p class="ed_name regular_font">ORGANISATION</p>-->
                                                            <p class="role_team medium_font">Climate Data Analyst</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="img_hov">
                                                    <div class="photo">
                                                        <img src="/image/NARESH-BORICHA.webp" alt="Person 1">
                                                    </div>
                                                    <div class="over_img blue_img">
                                                        <div class="cont_text">
                                                            <h5 class="team_name boldcond_font">NARESH BORICHA</h5>
                                                            <!--<p class="ed_name regular_font">-</p>-->
                                                            <p class="role_team medium_font">Accounts Manager</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--<div class="img_nonhov">-->
                                                <!--    <div class="over_imgnon black_img">-->
                                                <!--        <div class="cont_textnon">-->
                                                <!--            <h5 class="team_name boldcond_font">SHREYA NACHANE</h5>-->
                                                <!--            <h5 class="team_name boldcond_font">VINAY KATARIA</h5>-->
                                                <!--            <h5 class="team_name boldcond_font">KRUTHIK JAIN</h5>-->
                                                <!--            <h5 class="team_name boldcond_font">MUSKAAN SRIVASTAVA</h5>-->
                                                <!--            <h5 class="team_name boldcond_font">BATUL LOKHANDWALA</h5>-->
                                                <!--            <p class="role_team medium_font">Past Members</p>                                                            -->
                                                <!--        </div>-->
                                                <!--    </div>-->
                                                <!--</div>-->
                                                
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
            
            
            <section class="mobile-viewaboutpage">
    <div class="mobile-contentab">
    <div class="container">
  <!-- Tabs navigation -->
  <ul class="nav nav-tabs stickyleft-column" id="myTab" role="tablist">
    <li class="nav-item" role="presentation">
      <button class="nav-link active" id="mobileabout-tab" data-bs-toggle="tab" data-bs-target="#mobileabout" type="button" role="tab" aria-controls="about" aria-selected="true">About Us</button>
    </li>
    <li class="nav-item" role="presentation">
      <button class="nav-link" id="mobilephilosophy-tab" data-bs-toggle="tab" data-bs-target="#mobilephilosophy" type="button" role="tab" aria-controls="philosophy" aria-selected="false">Philosophy</button>
    </li>
    <li class="nav-item" role="presentation">
      <button class="nav-link" id="mobilefive-channel-tab" data-bs-toggle="tab" data-bs-target="#mobilefive-channel" type="button" role="tab" aria-controls="five-channel" aria-selected="false">Five Channels</button>
    </li>
    <li class="nav-item" role="presentation">
      <button class="nav-link" id="mobileoffice-tab" data-bs-toggle="tab" data-bs-target="#mobileoffice" type="button" role="tab" aria-controls="office" aria-selected="false">Office</button>
    </li>
    <li class="nav-item" role="presentation">
      <button class="nav-link" id="mobilecollaborators-tab" data-bs-toggle="tab" data-bs-target="#mobilecollaborators" type="button" role="tab" aria-controls="collaborators" aria-selected="false">Collaborators</button>
    </li>
    <li class="nav-item" role="presentation">
      <button class="nav-link" id="mobileteam-tab" data-bs-toggle="tab" data-bs-target="#mobileteam" type="button" role="tab" aria-controls="team" aria-selected="false">Team</button>
    </li>
  </ul>

  <!-- Tabs content -->
  <div class="tab-content" id="myTabContent">
    <div class="tab-pane fade show active" id="mobileabout" role="tabpanel" aria-labelledby="mobileabout-tab">
      <h3 class="aboutmain-headings boldcond_font abmobtitle">ABOUT US</h3>
      <div class="ab_pracdesc">
                                    <p class="about-para regular_font">The practice is a brainchild of Adil Dholakia who is the director and principal. He is an architect, urban conservator and researcher who specializes in community engagement via heritage management, conservation,
                                        and development activities within the rural and urban environment. </p>
                                    <p class="about-para regular_font">The practices’ research and NGO arm attempts to investigate the inherent linkages between the heritage environment and the intangible attributes to socio-cultural-economic frameworks. He holds a double master's degree in
                                        urban design, heritage conservation and restoration from Brandenburg Technical University in Germany and Alexandria University in Egypt.</p>
                                    </div>
                                    <div class="row vidmar">
                                        <div class="col-lg-6 col-md-12 col-sm-12">
                                            <div class="vid_ab">
                                            <img src="/image/aboutvid.gif">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-12 col-sm-12">
                                            <div class="abtextvid">
                                            <div class="why_sec">
                                            <h4 class="about-headings boldcond_font">WHY ‘FIVE CROSS’ ?</h4>
                                            <p class="about-para regular_font">The title "Five Cross" refers to the practice's five core principles, as well as its association with the five elements found in nature. (Panchamahabhuta). </p>
                                            <p class="about-para regular_font">Additionally, it is linked to Germanys' rural Fachwerk architectural style, a traditional heritage design where the Five Cross joinery plays a significant role. This is also where the foundation of the practice
                                                was laid. </p>
                                            </div>
                                            <div class="log_sec">
                                            <h4 class="about-headings boldcond_font">THE LOGO</h4>
                                            <p class="about-para regular_font">The logo for Five Cross Architects was created through a collaboration with renowned Indian origin artist Ratnadeep Adivrekar (@ratnadeepstudio).
                                            </p>
                                            <p class="about-para regular_font">The principles of the practises are clearly translated inside the diaphragm of the Logo, highlighting the interdisciplinary crossroads in the domains of Urbanism, Heritage, Architecture, Art, and Culture.</p>
                                            </div>
                                            </div>
                                        </div>
                                    </div>
    </div>
    <div class="tab-pane fade" id="mobilephilosophy" role="tabpanel" aria-labelledby="mobilephilosophy-tab">
      <h3 class="aboutmain-headings boldcond_font">PHILOSOPHY</h3>
      <div class="ab_prsec">
                                    <h4 class="about-headings boldcond_font">PRACTICE</h4>
                                    <ul class="ab_ul">
                                    <li class="regular_font">The confluence of art, architecture, and technology is the primary area of interest for Five Cross Architects, which was established in 2021.</li>
                                    <li class="regular_font">The practice aims at advocating the relationship between the community, cultures and the precincts it works in.</li>
                                    <li class="regular_font">The practice embraces to revive the values, authenticity, and integrity of the heritage context. Investing in a heritage precinct is an investment in the people and the community, eventually improving the quality of life.</li>
                                    </ul>
                                    </div>
                                    <div class="ab_projsec">
                                    <h4 class="about-headings boldcond_font">PROJECT ENDEAVOURS</h4>
                                    <ul class="ab_ul">
                                    <li class="regular_font">The office currently participates in projects in India and Germany owing to the principal architect/founders’ long-standing relationship with the two countries. The two countries' connection translates into an exchange
                                        of expertise, resources, and technology that help alleviate the quality of projects undertaken at either ends.</li>
                                    <li class="regular_font">This international practice concentrates on undertaking projects in the realms of heritage revitalization, including management, conservation, and preservation as well as architectural development at the cultural, educational,
                                        and civic tiers, both at the private and public stages.</li>
                                    <li class="regular_font">While exploring more contemporary methods for urban and rural precincts, it is essential to strike a balance between embracing progress and preserving the nostalgic essence of time.</li>
                                    </ul>
                                    </div>
                                    <div class="ab_encsec">
                                    <h4 class="about-headings boldcond_font">ENCOURAGE REGENERATION</h4>
                                    <ul class="ab_ul">
                                    <li class="regular_font">Undertaking regeneration initiatives to revitalize urban and rural historic contexts.</li>
                                    <li class="regular_font">Promoting the value of underappreciated historical components.</li>
                                    <li class="regular_font">Empowering communities via capacity building and encouraging active engagement in their development.</li>
                                     </ul>
                                     </div>
                                     <div class="ab_pressec">
                                    <h4 class="about-headings boldcond_font">PRESERVE AND ENGAGE</h4>
                                    <ul class="ab_ul">
                                    <li class="regular_font">Culture, heritage, and representation are integral to the essence of the idea. It focuses on preserving the physical identity and its various components, whether they are tangible or intangible, built or unbuilt.</li>
                                    <li class="regular_font">When approaching the idea, it is crucial to consider the perspectives of communities associated to these assets. This viewpoint encourages user interaction with both the architectural object itself and its context.</li>
                                    </ul>
                                    </div>
    </div>
    <div class="tab-pane fade" id="mobilefive-channel" role="tabpanel" aria-labelledby="mobilefive-channel-tab">
      <div class="fiv-accor">
                                        <div class="img-accordion active" style="background-image: url('/image/heri (1).webp');" onclick="toggleDescription(this)">
                                            <div class="titdisc-bg">
                                                <h4 class="boldcond_font">HERITAGE</h4>
                                                <div class="description">
                                                    <p class="regular_font">We embrace an ethos that aligns deeply with nature's elements - The Earth; Symbolized by the rich, warm hue of Terracotta, the element embodies a profound connection to our ancestral roots, cultural practices,
                                                        and historical heritage. This link extends to heritage sites like ancient fortifications, cultural monuments, and traditional settings that are not only situated on the Earth but also harmoniously intertwined
                                                        with its ecosystems. Our design philosophy seeks to honor this intrinsic connection by merging historical context with contemporary innovation, fostering a sustainable and culturally rich future.</p>
                                                    <p class="regular_font">We are dedicated to using heritage as a progressive tool, unearthed and rediscovered through our planning and design efforts. Our work reveals timeless narratives, embracing the past and present in a harmonious
                                                        architectural dialogue. "Rooted in Time" encapsulates our approach, signifying the unveiling of layers where history and nature entwine, reflecting a seamless integration of culture and the natural world.
                                                        Through our projects, we strive to craft spaces where tradition and modernity coalesce, creating an evolving tapestry that celebrates and preserves the essence of heritage.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="img-accordion" style="background-image: url('/image/ecology.webp');" onclick="toggleDescription(this)">
                                            <div class="titdisc-bg">
                                                <h4 class="boldcond_font">ECOLOGY</h4>
                                                <div class="description">
                                                    <p class="regular_font">Our ethos embodies the elements of nature, where Space is represented by tranquil turquoise. The harmonious balance of all biotic and abiotic components, the interweaving of tangible and intangible facets, strewn across a myriad of scales forms the crux of the practice.</p>
                                                    <p class="regular_font">We cultivate a holistic approach, working with networks of people and relying on our collective knowledge to ensure impact across all strata of the ecological spectrum. Our aim is to enhance the socio-economic and overall well-being of society by employing productive and ecologically sensitive interventions. The body of our work re-enforces the intricate networks that exist across the biosphere, acknowledging every component as crucial to building a sustainable future. Our vision is to craft ecosystems that can self-sustain through the test of time and propagate parallelly with the built environment.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="img-accordion" style="background-image: url('/image/urba (1).webp');" onclick="toggleDescription(this)">
                                            <div class="titdisc-bg">
                                                <h4 class="boldcond_font">URBANISM</h4>
                                                <div class="description">
                                                    <p class="regular_font">Our ethos resonates deeply with the elements of nature, where Air takes center stage, embodied by the refreshing hue of Green. Urbanism, a cornerstone of our practice encompasses the intricate planning,
                                                        design, and development of cities, spanning infrastructure, architecture, transportation, and public spaces. Yet urbanism transcends mere construction; it embodies a harmonious balance between human
                                                        creations and the natural environment.</p>
                                                    <p class="regular_font">We redefine urbanism by fostering community engagement and conducting meticulous, community-based research. Our approach integrates verdant green tones into urban landscapes, blending cityscapes with nature
                                                        seamlessly. The trajectory of our development endeavors emphasizes a dynamic relationship with nature, viewing land not just as a space for construction but as an integral ecosystem. At Five Cross Studio,
                                                        we strive to enrich urban environments where nature and urbanism coexist harmoniously, shaping sustainable and livable communities for the future.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="img-accordion" style="background-image: url('/image/architech (1).webp');" onclick="toggleDescription(this)">
                                            <div class="titdisc-bg">
                                                <h4 class="boldcond_font">ARCHITECTURE</h4>
                                                <div class="description">
                                                    <p class="regular_font">Our studio's ethos is deeply rooted in the harmony of natural elements, where Water is symbolized by the serene hue of light blue. In architectural design, Water's dynamic and fluid characteristics inspire us to create spaces characterized by curved lines, flowing forms, and open environments. These elements evoke a sense of movement and fluidity, mirroring the tranquil qualities of water and sky. The colour blue promotes feelings of tranquility, serenity, and calmness – fostering a seamless integration of the built environment with nature.</p>
                                                    <p class="regular_font">At our studio, we strive to craft architectural experiences that resonate with visual harmony and aesthetic appeal responding sensitively to their surroundings. Our approach celebrates Fluid Tranquility, where architectural designs reflect diverse identities while cultivating a serene environment. Embracing Architectural Elegance, our designs flow naturally, integrating materials and forms that harmonize effortlessly with their natural environment. Through this synergy, we aim to create places that not only inspire but also enhance the human experience through thoughtful and elegant architectural solutions.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="img-accordion" style="background-image: url('/image/art (1).webp');" onclick="toggleDescription(this)">
                                            <div class="titdisc-bg">
                                                <h4 class="boldcond_font">ART & CULTURE</h4>
                                                <div class="description">
                                                    <p class="regular_font">Our ethos deeply resonates with the elemental forces of nature, where Art and Culture find their interconnected expressions. Art manifests through the dynamic element of Fire, symbolized by the vibrant color Orange, embodying passion, creativity, transformation, and vitality. Culture, while resonating with the same elemental energy, retains its profound individuality - evoking the vastness and timelessness of heritage, exploration, and collective identity.</p>
                                                    <p class="regular_font">Within our practice, the innate connection between arts and culture is intricately woven into every project. We are dedicated to creating a natural synthesis that enhances spaces with expressive design and cultural depth. Our approach embraces Vibrant Energy, where art stimulates spaces with emotional resonance and culture roots them within a continuum of communal meaning.</p>
                                                    <p class="regular_font">Each project becomes a catalyst for cultural dialogue and creativity, inspiring vibrant pathways that enrich communities and elevate everyday life. Through this harmonious convergence, our studio aspires to craft environments that honor the past, invigorate the present, and inspire a sustainable, culturally enriched future.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
    </div>
    <div class="tab-pane fade" id="mobileoffice" role="tabpanel" aria-labelledby="mobileoffice-tab">
      
      <div class="Office-sec">
                                        <h4 id="list-item-3" class="aboutmain-headings boldcond_font">OFFICE</h4>
                                        <p class="about-para regular_font">At Five Cross Architects, our space is more than just a studio – it's a dynamic hub for creativity during the day and a vibrant design forum in the evening. </p>
                                        <p class="about-para regular_font">Exciting collaboration and representation in India with @porzellanmanufakturnymphenburg, bridging continents in the realms of Heritage, Art, and Culture. Our studio creates an interesting environment that encourages
                                            cross-cultural dialogues by including a range of unique aspects.</p>
                                    </div>
                                    <div class="off-gall">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="column">
                                                    <img src="/image/mobileimg1.webp" class="img-fluid" alt="Image 1">
                                                    <img src="/image/mobileimg2.webp" class="img-fluid" alt="Image 2">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="column">
                                                    <img src="/image/mobileimg3.webp" class="img-fluid" alt="Image 2">
                                                    <img src="/image/mobileimg4.webp" class="img-fluid" alt="Image 2">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="column">
                                                    <img src="/image/mobileimgoff5.webp" class="img-fluid" alt="Image 3">
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
    </div>
    <div class="tab-pane fade" id="mobilecollaborators" role="tabpanel" aria-labelledby="mobilecollaborators-tab">
      <div class="mobile_viewacc">
                                        <div class="collab-sec">
                                        <h4 id="list-item-3" class="aboutmain-headings boldcond_font">COLLABORATORS</h4>
                                        <p class="about-para regular_font">A focus on collaboration through engagement with allied disciplines and the establishment of collaborations both nationally and internationally, allowing for varied knowledge and viewpoints. Finally, undertaking initiatives to improve beneficiaries' quality of life, understanding the necessity of establishing places that promote well-being, functioning, and overall improvement.</p>
                                    </div>
                                            <div class="custom-accordion">
        <!-- First Accordion Item -->
        <div class="custom-accordion-item">
            <div class="custom-accordion-title">
                <img src="/image/5linelogo.webp" alt="5 Lines Logo">
                <span class="custom-collab-title boldcond_font">5 LINES - ART, HERITAGE AND URBANISM</span>
                <span class="custom-icon">
                    <img src="/image/colic.png" alt="arrow icon">
                </span>
            </div>
            <div class="custom-accordion-content">
                <p class="custom-collab-desc regular_font">
                    The research and NGO division of Five Cross Architects explores the intersection of art, heritage, and urbanism, aiming to integrate cultural preservation and contemporary design within urban development.
                </p>
            </div>
        </div>

        <!-- Second Accordion Item -->
        <div class="custom-accordion-item">
            <div class="custom-accordion-title">
                <img src="/image/UTOKIYOTRANS.webp" alt="University of Tokyo Logo">
                <span class="custom-collab-title boldcond_font">UNIVERSITY OF TOKYO, RICAS</span>
                <span class="custom-icon">
                    <img src="/image/colic.png" alt="arrow icon">
                </span>
            </div>
            <div class="custom-accordion-content">
                <p class="custom-collab-desc regular_font">
                    RICAS- Founded in 1941, the Institute for Advanced Studies on Asia has evolved into one of Japan's leading centers for Asian studies. While it originally concentrated on East Asia, its scope now includes South, Southeast, and West Asia, featuring five specialized departments and a renowned library.
                </p>
            </div>
        </div>

        <!-- Third Accordion Item -->
        <div class="custom-accordion-item">
            <div class="custom-accordion-title">
                <img src="/image/nymph.webp" alt="Nymphenburg Porcelain Logo">
                <span class="custom-collab-title boldcond_font">NYMPHENBURG PORCELAIN MANUFACTORY</span>
                <span class="custom-icon">
                    <img src="/image/colic.png" alt="arrow icon">
                </span>
            </div>
            <div class="custom-accordion-content">
                <p class="custom-collab-desc regular_font">
                    Nymphenburg Porzellan, celebrated for its exceptional craftsmanship, has been creating luxury porcelain in Munich since 1747. Each piece merges tradition with innovation, embodying elegance and heritage in fine porcelain.
                </p>
            </div>
        </div>
		
		<!-- Fourth Accordion Item -->
        <div class="custom-accordion-item">
            <div class="custom-accordion-title">
                <img src="/image/adits.webp" alt="Nymphenburg Porcelain Logo">
                <span class="custom-collab-title boldcond_font">ADITES GMBH</span>
                <span class="custom-icon">
                    <img src="/image/colic.png" alt="arrow icon">
                </span>
            </div>
            <div class="custom-accordion-content">
                <p class="custom-collab-desc regular_font">
                    Collaborator in offering expert consultancy in sustainable energy solutions, specializing in photovoltaic systems and energy management for projects across India and Germany.
                </p>
            </div>
        </div>
		
		<!-- Five Accordion Item -->
        <div class="custom-accordion-item">
            <div class="custom-accordion-title">
                <img src="/image/bayer.webp" alt="Nymphenburg Porcelain Logo">
                <span class="custom-collab-title boldcond_font">BAYERISCHE LANDESAMT FÜR DENKMAL PFELGE</span>
                <span class="custom-icon">
                    <img src="/image/colic.png" alt="arrow icon">
                </span>
            </div>
            <div class="custom-accordion-content">
                <p class="custom-collab-desc regular_font">
                    The Bavarian State Office for Monument Preservation is the central specialist authority of the Free State of Bavaria for Monument Protection and Monument Preservation. Founded in 1908 as a General Conservatory of Art Monuments and Antiquities of Bavaria, we now see ourselves as a service provider for the cultural heritage of Bavaria.
                </p>
            </div>
        </div>
		
		<!-- Six Accordion Item -->
        <!--<div class="custom-accordion-item">-->
        <!--    <div class="custom-accordion-title">-->
        <!--        <img src="/image/urbndes.webp" alt="Nymphenburg Porcelain Logo">-->
        <!--        <span class="custom-collab-title boldcond_font">UDRI</span>-->
        <!--        <span class="custom-icon">-->
        <!--            <img src="/image/colic.png" alt="arrow icon">-->
        <!--        </span>-->
        <!--    </div>-->
        <!--    <div class="custom-accordion-content">-->
        <!--        <p class="custom-collab-desc regular_font">-->
        <!--            UDRI focusses works towards making Mumbai an inclusive region which is humane, and balances its cosmopolitan cultural heritage and social fabric with equitable growth and efficient infrastructure. In this respect, urban planning and policy, urban design and heritage conservation are the core concerns of UDRI.-->
        <!--        </p>-->
        <!--    </div>-->
        <!--</div>-->
		
		<!-- Seven Accordion Item -->
        <div class="custom-accordion-item">
            <div class="custom-accordion-title">
                <img src="/image/ham.webp" alt="Nymphenburg Porcelain Logo">
                <span class="custom-collab-title boldcond_font">HAMILTON STUDIOS</span>
                <span class="custom-icon">
                    <img src="/image/colic.png" alt="arrow icon">
                </span>
            </div>
            <div class="custom-accordion-content">
                <p class="custom-collab-desc regular_font">
                    The oldest photography studio in Mumbai, renowned for its rich history and expertise as an advisor in documentation and archival.
                </p>
            </div>
        </div>
		
		<!-- Eight Accordion Item -->
        <div class="custom-accordion-item">
            <div class="custom-accordion-title">
                <img src="/image/himacedmy.webp" alt="Nymphenburg Porcelain Logo">
                <span class="custom-collab-title boldcond_font">HIMS ACADEMY</span>
                <span class="custom-icon">
                    <img src="/image/colic.png" alt="arrow icon">
                </span>
            </div>
            <div class="custom-accordion-content">
                <p class="custom-collab-desc regular_font">
                    Collaborator in classical music, art, and culture, focusing on intercultural exchange. Located in the castle of hafenpreppach, it hosts high-quality programs and projects promoting creativity, education, and tranquility. The academy offers summer programs, art exhibitions, and artist residencies, fostering a rich cultural environment.
                </p>
            </div>
        </div>
		
		<!-- Nine Accordion Item -->
        <div class="custom-accordion-item">
            <div class="custom-accordion-title">
                <img src="/image/archnet.webp" alt="Nymphenburg Porcelain Logo">
                <span class="custom-collab-title boldcond_font">ARCHNET.ORG</span>
                <span class="custom-icon">
                    <img src="/image/colic.png" alt="arrow icon">
                </span>
            </div>
            <div class="custom-accordion-content">
                <p class="custom-collab-desc regular_font">
                    Archnet.org is a comprehensive online resource dedicated to architecture, urbanism, and design in the civil society, featuring extensive collections, scholarly articles, and educational materials. Archnet is hosted and supported by MIT Libraries | Aga Khan Documentation Center at MIT
                </p>
            </div>
        </div>
		
		<!-- Ten Accordion Item -->
        <div class="custom-accordion-item">
            <div class="custom-accordion-title">
                <img src="/image/kun.webp" alt="Nymphenburg Porcelain Logo">
                <span class="custom-collab-title boldcond_font">KUNST UND VEREIN IM HAFENPREPPACH</span>
                <span class="custom-icon">
                    <img src="/image/colic.png" alt="arrow icon">
                </span>
            </div>
            <div class="custom-accordion-content">
                <p class="custom-collab-desc regular_font">
                    Musik und Kunst is a collaborator, a German platform celebrating music and art, offering insights, resources, and community for enthusiasts and professionals alike, fostering appreciation and creativity in cultural expression.
                </p>
            </div>
        </div>
		
		<!-- Eleven Accordion Item -->
        <div class="custom-accordion-item">
            <div class="custom-accordion-title">
                <img src="/image/adammm.png" alt="Nymphenburg Porcelain Logo">
                <span class="custom-collab-title boldcond_font">AKADEMIE FÜR DIALOG-ANWENDUNG UND MEDIATION</span>
                <span class="custom-icon">
                    <img src="/image/colic.png" alt="arrow icon">
                </span>
            </div>
            <div class="custom-accordion-content">
                <p class="custom-collab-desc regular_font">
                    ADAM promotes and shapes educational diversity, facilitates knowledge transfer, and drives change. It also focuses on building bridges between East and West, create networks spanning North and South. ADAM contributes to shaping and strengthening a culture of dialogue across politics and society, economy and environment, and science and art.
                </p>
            </div>
        </div>
		
		<!-- Twelve Accordion Item -->
        <div class="custom-accordion-item">
            <div class="custom-accordion-title">
                <img src="/image/atharlinee.png" alt="Nymphenburg Porcelain Logo">
                <span class="custom-collab-title boldcond_font">ATHAR LINA</span>
                <span class="custom-icon">
                    <img src="/image/colic.png" alt="arrow icon">
                </span>
            </div>
            <div class="custom-accordion-content">
                <p class="custom-collab-desc regular_font">
                    Athar Lina - Athar Lina is a participatory conservation initiative by the Built Environment Collective|Megawra. It views monuments as resources, not burdens, and promotes community involvement in heritage conservation to foster development and ensure sustainable preservation.
                </p>
            </div>
        </div>
		
		<!-- Thirteen Accordion Item -->
        <div class="custom-accordion-item">
            <div class="custom-accordion-title">
                <img src="/image/stadt.png" alt="Nymphenburg Porcelain Logo">
                <span class="custom-collab-title boldcond_font">STADT SESSLACH</span>
                <span class="custom-icon">
                    <img src="/image/colic.png" alt="arrow icon">
                </span>
            </div>
            <div class="custom-accordion-content">
                <p class="custom-collab-desc regular_font">
                    Co-operating with the local municipality for the development of the town of Sesslach.
                </p>
            </div>
        </div>
		
		<!-- forteen Accordion Item -->
        <div class="custom-accordion-item">
            <div class="custom-accordion-title">
                <img src="/image/chcho.webp" alt="Nymphenburg Porcelain Logo">
                <span class="custom-collab-title boldcond_font">CENTRE FOR HERITAGE CONSERVATION (CHC)</span>
                <span class="custom-icon">
                    <img src="/image/colic.png" alt="arrow icon">
                </span>
            </div>
            <div class="custom-accordion-content">
                <p class="custom-collab-desc regular_font">
                    Center for Heritage Conservation (CHC) is a knowledge partner and an arm of the CEPT University - that focuses on advancing the discourse of built heritage conservation through the lenses of sustainability and equity considering the challenges faced by the Global South.
                </p>
            </div>
        </div>
		
		<!-- fifthteen Accordion Item -->
        <div class="custom-accordion-item">
            <div class="custom-accordion-title">
                <img src="/image/atchh.webp" alt="Nymphenburg Porcelain Logo">
                <span class="custom-collab-title boldcond_font">AGA KHAN TRUST FOR CULTURE</span>
                <span class="custom-icon">
                    <img src="/image/colic.png" alt="arrow icon">
                </span>
            </div>
            <div class="custom-accordion-content">
                <p class="custom-collab-desc regular_font">
                    The Aga Khan Trust for Culture is a private Organisation that promotes cultural heritage preservation, urban revitalization, and architectural excellence, enhancing quality of life and fostering cultural identity in historically significant areas worldwide.
                </p>
            </div>
        </div>
        <!-- Sixth Accordion Item -->
        <div class="custom-accordion-item">
            <div class="custom-accordion-title">
                <img src="/image/edencollab.webp" alt="Nymphenburg Porcelain Logo">
                <span class="custom-collab-title boldcond_font">EDEN</span>
                <span class="custom-icon">
                    <img src="/image/colic.png" alt="arrow icon">
                </span>
            </div>
            <div class="custom-accordion-content">
                <p class="custom-collab-desc regular_font">
                    EdEn focusses on the philosophy of "goal before method" driving a focus on sustainability by integrating environmental sensitivity into design. The firm creates efficient, innovative solutions that balance economy, ecology, and society, meeting LEED, GRIHA, and IGBC certification standards.
                </p>
            </div>
        </div>

        <!-- Add more accordion items as needed -->
    </div>
                                    </div>
    </div>
    <div class="tab-pane fade" id="mobileteam" role="tabpanel" aria-labelledby="mobileteam-tab">
      <div class="team_sec">
                                        <h4 id="list-item-3" class="team_title aboutmain-headings boldcond_font">TEAM</h4>
    
                                        <div class="mobileall_team">
                                            <div class="photo_row">
                                                <div class="img_hov">
                                                    <div class="photo">
                                                        <img src="/image/ADILDHOLAKIA.webp" alt="Person 1">
                                                    </div>
                                                    <div class="over_img red_img">
                                                        <div class="cont_text">
                                                            <h5 class="team_name boldcond_font">ADIL DHOLAKIA</h5>
                                                            <!--<p class="ed_name regular_font">FIVE CROSS ARCHITECTS</p>-->
                                                            <p class="role_team medium_font">Director</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="img_hov">
                                                    <div class="photo">
                                                        <img src="/image/DR-NAOKI-FUKAMI.webp" alt="Person 1">
                                                    </div>
                                                    <div class="over_img red_img">
                                                        <div class="cont_text">
                                                            <h5 class="team_name boldcond_font">DR. NAOKI FUKAMI</h5>
                                                            <!--<p class="ed_name regular_font">TOKYO UNIVERSITY</p>-->
                                                            <p class="role_team medium_font">Art Historian</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="img_hov">
                                                    <div class="photo">
                                                        <img src="/image/DR-SABINE-KROISENBRUNNER.webp" alt="Person 1">
                                                    </div>
                                                    <div class="over_img blue_img">
                                                        <div class="cont_text">
                                                            <h5 class="team_name boldcond_font">SABINE KROISENBRUNNER</h5>
                                                            <!--<p class="ed_name regular_font">ORGANISATION</p>-->
                                                            <p class="role_team medium_font">Political Scientist & Program Coordinator</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="img_hov">
                                                    <div class="photo">
                                                        <img src="/image/VISHAKHA-GANGAR.webp" alt="Person 1">
                                                    </div>
                                                    <div class="over_img red_img">
                                                        <div class="cont_text">
                                                            <h5 class="team_name boldcond_font">VISHAKHA GANGAR</h5>
                                                            <!--<p class="ed_name regular_font">FIVE CROSS ARCHITECTS</p>-->
                                                            <p class="role_team medium_font">Architect - Researcher</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="img_hov">
                                                    <div class="photo">
                                                        <img src="/image/VATSALA-SHUKLA.webp" alt="Person 1">
                                                    </div>
                                                    <div class="over_img yellow_img">
                                                        <div class="cont_text">
                                                            <h5 class="team_name boldcond_font">VATSALA SHUKLA</h5>
                                                            <!--<p class="ed_name regular_font">-</p>-->
                                                            <p class="role_team medium_font">UX/UI Designer</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                            <div class="photo_row">
                                                <div class="img_hov">
                                                    <div class="photo">
                                                        <img src="/image/Katyayani-Agarwal.webp" alt="Person 1">
                                                    </div>
                                                    <div class="over_img blue_img">
                                                        <div class="cont_text">
                                                            <h5 class="team_name boldcond_font">KATYAYANI AGARWAL</h5>
                                                            <!--<p class="ed_name regular_font">-</p>-->
                                                            <p class="role_team medium_font">Studio Advisor & Collaborator</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="img_hov">
                                                    <div class="photo">
                                                        <img src="/image/THWISHA-SHAH.webp" alt="Person 1">
                                                    </div>
                                                    <div class="over_img lightblue_img">
                                                        <div class="cont_text">
                                                            <h5 class="team_name boldcond_font">THWISHA SHAH</h5>
                                                            <!--<p class="ed_name regular_font">FIVE CROSS ARCHITECTS</p>-->
                                                            <p class="role_team medium_font">Architect - Researcher</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="img_hov">
                                                    <div class="photo">
                                                        <img src="/image/VIRAJ-TANK.webp" alt="Person 1">
                                                    </div>
                                                    <div class="over_img lightblue_img">
                                                        <div class="cont_text">
                                                            <h5 class="team_name boldcond_font">VIRAJ TANK</h5>
                                                            <!--<p class="ed_name regular_font">-</p>-->
                                                            <p class="role_team medium_font">Architect</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="img_hov">
                                                    <div class="photo">
                                                        <img src="/image/TREVIND.webp" alt="Person 1">
                                                    </div>
                                                    <div class="over_img lightblue_img">
                                                        <div class="cont_text">
                                                            <h5 class="team_name boldcond_font">TREVIN D'SOUZA</h5>
                                                            <!--<p class="ed_name regular_font">-</p>-->
                                                            <p class="role_team medium_font">Architect</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--<div class="img_hov">-->
                                                <!--    <div class="photo">-->
                                                <!--        <img src="/image/sakhi mishra.webp" alt="Person 1">-->
                                                <!--    </div>-->
                                                <!--    <div class="over_img lightblue_img">-->
                                                <!--        <div class="cont_text">-->
                                                <!--            <h5 class="team_name boldcond_font">SAKHI MISHRA</h5>-->
                                                            <!--<p class="ed_name regular_font">-</p>-->
                                                <!--            <p class="role_team medium_font">Intern</p>-->
                                                <!--        </div>-->
                                                <!--    </div>-->
                                                <!--</div>-->
                                                <div class="img_hov">
                                                    <div class="photo">
                                                        <img src="/image/ISMAIL-MUKADAM.webp" alt="Person 1">
                                                    </div>
                                                    <div class="over_img yellow_img">
                                                        <div class="cont_text">
                                                            <h5 class="team_name boldcond_font">ISMAIL MUKADAM</h5>
                                                            <!--<p class="ed_name regular_font">-</p>-->
                                                            <p class="role_team medium_font">Studio Advisor & Collaborator</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="photo_row">
                                                
                                                <div class="img_hov">
                                                    <div class="photo">
                                                        <img src="/image/NIZARDHOLAKIA.webp" alt="Person 1">
                                                    </div>
                                                    <div class="over_img blue_img">
                                                        <div class="cont_text">
                                                            <h5 class="team_name boldcond_font">NIZAR DHOLAKIA</h5>
                                                            <!--<p class="ed_name regular_font">-</p>-->
                                                            <p class="role_team medium_font">Studio Advisor</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="img_hov">
                                                    <div class="photo">
                                                        <img src="/image/ARNAZ-DHOLAKIA.webp" alt="Person 1">
                                                    </div>
                                                    <div class="over_img green_img">
                                                        <div class="cont_text">
                                                            <h5 class="team_name boldcond_font">ARNAZ DHOLAKIA</h5>
                                                            <!--<p class="ed_name regular_font">ORGANISATION</p>-->
                                                            <p class="role_team medium_font">Climate Data Analyst</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="img_hov">
                                                    <div class="photo">
                                                        <img src="/image/NARESH-BORICHA.webp" alt="Person 1">
                                                    </div>
                                                    <div class="over_img blue_img">
                                                        <div class="cont_text">
                                                            <h5 class="team_name boldcond_font">NARESH BORICHA</h5>
                                                            <!--<p class="ed_name regular_font">-</p>-->
                                                            <p class="role_team medium_font">Accounts Manager</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--<div class="img_nonhov">-->
                                                <!--    <div class="over_imgnon black_img">-->
                                                <!--        <div class="cont_textnon">-->
                                                <!--            <h5 class="team_name boldcond_font">SHREYA NACHANE</h5>-->
                                                <!--            <h5 class="team_name boldcond_font">VINAY KATARIA</h5>-->
                                                <!--            <h5 class="team_name boldcond_font">KRUTHIK JAIN</h5>-->
                                                <!--            <h5 class="team_name boldcond_font">MUSKAAN SRIVASTAVA</h5>-->
                                                <!--            <h5 class="team_name boldcond_font">BATUL LOKHANDWALA</h5>-->
                                                <!--            <p class="role_team medium_font">Past Members</p>                                                            -->
                                                <!--        </div>-->
                                                <!--    </div>-->
                                                <!--</div>-->
                                                
                                            </div>
                                        </div>
                                    </div>
    </div>
  </div>

  <!-- Next and Previous buttons -->
  <div class="nav-buttons">
    <button class="btn btn-primary btn-prev" id="prevBtn" style="display: none;">
      <i class="bi bi-arrow-left"></i> <span>About Us</span>
    </button>
    <button class="btn btn-primary btn-next" id="nextBtn">
      <span>Philosophy</span> <i class="bi bi-arrow-right"></i>
    </button>
  </div>
</div>
</div>
</section>
        </section>
        
        


    
        <section class="container fotter-text1">
            <?php include 'footer.php';?>
        </section>
    
        <script>
            // about Tab
            $(document).ready(function(){
                // Activate the first tab on page load
                $('#v-pills-tab a:first').tab('show');
              });
            
            
$(document).ready(function(){
    $("#coll_sec").owlCarousel({
        items: 1,
        loop: false,
        nav: false,
        margin: 40,
        dots: false,
        navText: ["<", ">"], // Add custom text for navigation
        responsive: {
            0: {
                items: 1
            },
            480: {
                items: 1
            },
            768: {
                items: 1
            },
            1024: {
                items: 1
            },
            1200: {
                items: 2
            },
            1400: {
                items: 2
            }
        }
    });
});

    
               
    
    document.addEventListener('mousemove', (e) => {
                const collaborators = document.querySelector('#collaborators');
                const circle = document.querySelector('.circle');
                const rect = collaborators.getBoundingClientRect();
                
                if (
                    e.clientX >= rect.left &&
                    e.clientX <= rect.right &&
                    e.clientY >= rect.top &&
                    e.clientY <= rect.bottom
                ) {
                    // Move the circle within the #collaborators section
                    circle.style.left = `${e.clientX - rect.left}px`;
                    circle.style.top = `${e.clientY - rect.top}px`;
                    circle.style.display = 'block'; // Ensure circle is visible
                } else {
                    circle.style.display = 'none'; // Hide circle when outside
                }
            });
      // collab tab end        
               
            //   team tab strat
                
            const slider = document.querySelector('.all_team');
            let isDown = false;
            let startX;
            let scrollLeft;
    
            slider.addEventListener('mousedown', (e) => {
                isDown = true;
                startX = e.pageX - slider.offsetLeft;
                scrollLeft = slider.scrollLeft;
            });
    
            slider.addEventListener('mouseleave', () => {
                isDown = false;
            });
    
            slider.addEventListener('mouseup', () => {
                isDown = false;
            });
    
            slider.addEventListener('mousemove', (e) => {
                if (!isDown) return;
                e.preventDefault();
                const x = e.pageX - slider.offsetLeft;
                const walk = (x - startX) * 3; // Adjust scrolling speed here
                slider.scrollLeft = scrollLeft - walk;
            });
        
            // team tab end
            
// five channel script
function toggleDescription(container) {
    // Get all accordions
    var accordions = document.querySelectorAll('.img-accordion');
    
    // Check if the clicked accordion is already active
    var isActive = container.classList.contains('active');

    // Close all descriptions and reset background color, except the active one
    if (!isActive) {
        accordions.forEach(function(accordion) {
            accordion.classList.remove('active');
            accordion.querySelector('.titdisc-bg').style.backgroundColor = 'transparent';
        });
        
        // Activate the clicked accordion
        container.classList.add('active');
        container.querySelector('.titdisc-bg').style.backgroundColor = '#fff'; // Set background color for the active one
    }
}
        </script>
        <script>
        const customAccordionItems = document.querySelectorAll('.custom-accordion-title');

        customAccordionItems.forEach(item => {
            item.addEventListener('click', function () {
                const content = this.nextElementSibling;
                content.style.display = content.style.display === 'block' ? 'none' : 'block';

                // Toggle the active state for the accordion title and icon
                this.classList.toggle('active');
                const icon = this.querySelector('.custom-icon');
                icon.classList.toggle('active');
            });
        });
        
        // 
        
        
//   mobitle view 
  // Only target elements inside .mobile-contentab
        const mobileContentab = document.querySelector('.mobile-contentab');
        const tabs = mobileContentab.querySelectorAll('.nav-tabs .nav-link');  // Select all tab buttons
        let currentTab = 0;
      
        // Function to update the Next and Previous button labels and the current tab
        function updateTab() {
          const prevBtn = mobileContentab.querySelector('#prevBtn');
          const nextBtn = mobileContentab.querySelector('#nextBtn');
      
          // Activate the correct tab
          const tab = new bootstrap.Tab(tabs[currentTab]);
          tab.show();
      
          // Hide the Previous button on the first tab and align the Next button to the right
          if (currentTab === 0) {
            prevBtn.style.display = 'none'; // Hide previous button
            nextBtn.style.float = 'right'; // Align next button to the right
          } else {
            prevBtn.style.display = 'inline-block'; // Show previous button
            prevBtn.style.float = 'left'; // Align previous button to the left
            nextBtn.style.float = 'right'; // Align next button to the right
          }
      
          // Hide the Next button on the last tab
          nextBtn.style.display = currentTab === tabs.length - 1 ? 'none' : 'inline-block';
      
          // Update the Previous button text
          if (currentTab > 0) {
            prevBtn.querySelector('span').innerText = tabs[currentTab - 1].textContent.trim();
          }
      
          // Update the Next button text
          if (currentTab < tabs.length - 1) {
            nextBtn.querySelector('span').innerText = tabs[currentTab + 1].textContent.trim();
          }
        }
      
        // Handle Next button click
        mobileContentab.querySelector('#nextBtn').addEventListener('click', function() {
          if (currentTab < tabs.length - 1) {
            currentTab++;
            updateTab();
          }
        });
      
        // Handle Previous button click
        mobileContentab.querySelector('#prevBtn').addEventListener('click', function() {
          if (currentTab > 0) {
            currentTab--;
            updateTab();
          }
        });
      
        // Listen to tab click events to update the buttons when a tab is clicked
        tabs.forEach((tabLink, index) => {
          tabLink.addEventListener('shown.bs.tab', function () {
            currentTab = index;
            updateTab();
          });
        });
      
        // Initial setup for buttons
        updateTab();        
  
//   mobitle view 
    </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.11.6/umd/popper.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
</body>
</html>