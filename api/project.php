<?php include 'header.php'; ?>
 

        
            <style>
            .fotter-text1 .foot-bot p {
    color: #000;
}
                .search-container {
                     position: relative;
            
                  }
            .page-project input[type="radio"] {
            -webkit-appearance: none !important;
            -moz-appearance: none !important;
            appearance: none !important;
            width: 14px;
            height: 14px;
            border: 2px solid #404040;
            border-radius: 100%;
            outline: none;
            cursor: pointer;
            position: relative;
        }

.page-project input[type="radio"]:checked::before {
            content: '';
            display: block;
            width: 14px;
            height: 14px;
            border-radius: 100%;
            background: #404040;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }
        .proneimg .card-contenthover {
    height: 245px;
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
                     padding-left: 30px;
                     /* Adjust padding to accommodate icon */
                     border: none;
                     outline: none;
                     transition: width 0.3s ease;
                  }
            
                  .search-icon.active {
                     left: -10px;
                     /* Adjust distance to move icon to the left */
                  }
            
                  .search-icon.active+.search-input {
                     width: 150px;
                     /* Adjust width as needed */
                  }
           
                .acc-para {
                     margin: 0;
                  }
            
                  .accordion-body.body-1 {
                     border-bottom: 1px solid #404040;
                     display: flex;
                     justify-content: space-between;
                     height: 70px;
                     align-items: center;
                  }
            
                  .accordion-button.acc-title {
                     background-color: #fff;
                     border-bottom: 1px solid #404040;
                     box-shadow: none;
                     height: 100px;
                     font-size: 24px;
                     font-weight: 600;
                     line-height: 28.8px;
                     text-align: left;
                     color: #000;
                  }
            
                  
            .accordion-item{
                border:none;
                
            }
            button.accordion-button.acc-title {
    border-left: 2px dashed #404040;
}
            .accordion-item:last-of-type .accordion-button.collapsed{
             border-radius:0;   
            }
                  .body-one {
                     background-image: linear-gradient(to left, #FBA328 50%, transparent 50%);
                     background-size: 200% 100%;
                     border-left:20px solid #FBA328;
                     transition: background-position 0.5s;
                  }
            
                  .body-one:hover {
                     background-position: -100% 0;
                  }
            
                  .body-two {
                     background-image: linear-gradient(to left, #9DC6D8 50%, transparent 50%);
                     background-size: 200% 100%;
                     border-left:20px solid #9DC6D8;
                     transition: background-position 0.5s;
                  }
            
                  .body-two:hover {
                     background-position: -100% 0;
                  }
            
                  .body-three {
                     background-image: linear-gradient(to left, #C74827 50%, transparent 50%);
                     background-size: 200% 100%;
                     border-left:20px solid #C74827;
                     transition: background-position 0.5s;
                  }
            
                  .body-three:hover {
                     background-position: -100% 0;
                  }
            
                  .body-four {
                     background-image: linear-gradient(to left, #1D8E9E 50%, transparent 50%);
                     background-size: 200% 100%;
                     border-left:20px solid #1D8E9E;
                     transition: background-position 0.5s;
                  }
            
                  .body-four:hover {
                     background-position: -100% 0;
                  }
            
                  .body-five {
                     background-image: linear-gradient(to left, #919552 50%, transparent 50%);
                     background-size: 200% 100%;
                     border-left:20px solid #919552;
                     transition: background-position 0.5s;
                  }
            
                  .body-five:hover {
                     background-position: -100% 0;
                  }
            
                  .acc-para1 {
                     font-size: 24px;
                     font-weight: 400;
                     
                     color: #000;
                  }
            
                  .acc-para2 {
                     font-size: 18px;
                     font-weight: 400;
                     position: relative;
                     bottom: 27px;
                     color: #000;
                  }
                  
                  
                  
                  /*new*/


.container.galcontent {
    padding-left: 60px !important;
    padding-right: 60px !important;
}
.imagehover-container:before {
    content: '';
    position: absolute;
    background: linear-gradient(180deg, rgba(255, 255, 255, 0) 0%, rgba(0, 0, 0, 0.453125) 58.85%, #000000 100%);
    top: 0;
    height: 100%;
    width: 100%;
    opacity: 0;
    transition: opacity 0.3s ease;
}

.imagehover-container:hover:before {
    opacity: 1;
}

            .imagehover-container {
              position: relative;
              overflow: hidden;
              width: 100%;
            }
        
            .imagehover-container img {
              width: 100%;
              /* height: auto; */
              transition: transform 0.5s ease;
            }
            
            .overlay-1 {
              position: absolute;
              bottom: 0;
              left: 0;
              width: 100%;
              color: white;  
              transform: translateY(75%);
              transition: transform 0.5s ease;
            }
        
            .imagehover-container:hover .overlay-1 {
              transform: translateY(0%);
            }
        
            .title-datehover {
              display: flex;
              justify-content: space-between;
            }
        
            .card-contenthover {
              padding: 20px;
              height:153px;
            }
        /*  */
        .projectpage-section {
            padding: 40px 0px;
        }
        .Check-title{
          background-color: #323232;
          color: #fff;
          padding: 20px;
        
        }
        .pro_lightblue{
background: #9DC6D8;
}
.pro_red{
background: #C74827;
}
        .fir-grid {
    border-right: 1px solid #000;
    padding-right: 10px;
}
.float-end {
    margin-top:20px;
}
.pr-name {
    position: relative;
    left: 20px;
    bottom: 10px;
}
.imgtitle-imghover {
    font-size: 24px;
    font-weight: 500;
}
input[type="radio"]:checked + label {
        font-family: "UniversNextProBold" !important;
    }
    #grid-layout svg{
            cursor: pointer;
    }
    #list-layout svg{
            cursor: pointer;
    }
.news-navbar select#select-year-list {
    border: none;
    font-size: 20px;
    padding: 0px 30px 0 0px;
}

.acc-para2{
    float:right;
}
button.accordion-button.acc-title {
    padding-bottom: 0;
}
.cir-img {
    position: relative;
    left: -30px;
    top: -7px;
}
.disc-texthover {
    font-size: 16px;
    line-height: 19.2px;
    font-weight: 400;
}
.title-imghover {
    font-size: 18px;
    font-weight: 500;
}
.disc-imghover {
    font-size: 16px;
    font-weight: 500;
}
.pro-page .accordion-button::after {
    background-image: url(/image/accicon.png) !important;
}

.sticky .galcontent {
    margin-top: 100px !important;
}

.width50 img {
    height: 457px;
    object-fit: cover;
}
.width50{
	width:50% !important;
}
.many_para{
    font-size:18px;
}
        /**/

            </style>

<section>
<div class="page-project">
            <section class="pr_head">
            <div class="container">
                <div class="navbar_sticky">
                <div class="news-navbar d-flex justify-content-between">
                    <nav id="navbar-example2" class="navbar ">
                        <ul class="nav">
                            <li class="nav-item">
                                <a id="all-proj" class="nav-link light_font" href="#">All Projects</a>
                            </li>
                            <li class="nav-item">
                                <a id="all-channel" class="nav-link light_font" href="#insights">Channel</a>
                            </li>
                            <li class="nav-item">
                                <a id="all-status" class="nav-link light_font" href="#exhibitions">Status</a>
                            </li>
                            <li class="nav-item" id="sort-header">
                                <a id="all-sort" class="nav-link light_font" href="#events">Sort By</a>
                            </li>
                            <li class="nav-item d-none" id="sort-list-header">
                                <select class="form-select" aria-label="Year" id="select-year-list">
                                    <option value="" selected>Year</option>
                                    <option value="2023" class="light_font">2023</option>
                                    <option value="1940s" class="light_font">1940s</option>
                                    <option value="1920" class="light_font">1920</option>
                                    <option value="1850s" class="light_font">1850s</option>
                                    <option value="1700s" class="light_font">1700s</option>
                                    <option value="1600s" class="light_font">1600s</option>
                                    <option value="9th - 12th Century" class="light_font">9th - 12th</option>
                                </select>
                            </li>
                        </ul>
                    </nav>
                    <!-- Search Icon -->
                    <div class="nav-item">
                        <div class="search-container">
                            <div class="search-icon" onclick="toggleSearch()"><i class="bi bi-search"></i></div>
                            <input type="text" id="search_filter" class="search-input" placeholder="Search..." onkeyup="searchElements(this.value)">
                        </div>
                    </div>
                </div>
                
                <div class="row">
                        <div class="col-md-10 col-10">
                            <div class="filter-tabs d-none" id="filter-tabs-all-projects">
                        <ul class="mil_radio">  
                        <li class="fil_redio">
                        <input type="radio" id="all-tab" name="filter" value="all-projects" checked>
                        <label for="all-tab" class="regular_font">All</label>
                        </li>
                        <li class="fil_redio">
                        <input type="radio" id="residential-tab" name="filter" value="residential">
                        <label for="residential-tab" class="regular_font">Residential</label>
                        </li>
                        <li class="fil_redio">
                        <input type="radio" id="commercial-tab" name="filter" value="commercial">
                        <label for="commercial-tab" class="regular_font">Commercial</label>
                        </li>
                        <li class="fil_redio">
                        <input type="radio" id="heritage-con-tab" name="filter" value="heritage-con">
                        <label for="heritage-con-tab" class="regular_font">Heritage Conservation</label>
                        </li>
                        <li class="fil_redio">
                        <input type="radio" id="education-tab" name="filter" value="education">
                        <label for="education-tab" class="regular_font">Education</label>
                        </li>
                        <li class="fil_redio">
                        <input type="radio" id="hospitality-tab" name="filter" value="hospitality">
                        <label for="hospitality-tab" class="regular_font">Hospitality</label>
                        </li>
                        <li class="fil_redio">
                        <input type="radio" id="institutional-tab" name="filter" value="institutional">
                        <label for="institutional-tab" class="regular_font">Institutional</label>
                        </li>
                        </ul> 
                    </div>

                    <div class="filter-tabs d-none" id="filter-tabs-all-channel">
                        <ul class="mil_radio">
                        <li class="fil_redio">
                        <input type="radio" id="all-tab-channel" name="filter" value="all-channel" checked>
                        <label for="all-tab-channel" class="regular_font">All</label>
                        </li>
                        <li class="fil_redio">
                        <input type="radio" id="heritage-tab" name="filter" value="heritage">
                        <label for="heritage-tab" class="regular_font">Heritage</label>
                        </li>
                        <li class="fil_redio">
                        <input type="radio" id="urban-tab" name="filter" value="urban">
                        <label for="urban-tab" class="regular_font">Urban</label>
                        </li>
                        <li class="fil_redio">
                        <input type="radio" id="architecture-tab" name="filter" value="architecture">
                        <label for="architecture-tab" class="regular_font">Architecture</label>
                        </li>
                        <li class="fil_redio">
                        <input type="radio" id="art-tab" name="filter" value="art">
                        <label for="art-tab" class="regular_font">Art & Culture</label>
                        </li>
                        </ul>
                    </div>

                    <div class="filter-tabs d-none" id="filter-tabs-status">
                        <ul class="mil_radio">
                        <li class="fil_redio">
                        <input type="radio" id="all-tab-status" name="filter" value="all-status" checked>
                        <label for="all-tab-status" class="regular_font">All</label>
                        </li>
                        <li class="fil_redio">
                        <input type="radio" id="completed-tab" name="filter" value="completed">
                        <label for="completed-tab" class="regular_font">Completed</label>
                        </li>
                        <li class="fil_redio">
                        <input type="radio" id="under_construction-tab" name="filter" value="under_construction">
                        <label for="under_construction-tab" class="regular_font">Ongoing</label>
                        </li>
                        <li class="fil_redio">
                        <input type="radio" id="unbuilt-tab" name="filter" value="unbuilt">
                        <label for="unbuilt-tab" class="regular_font">Unbuilt</label>
                        </li>
                        </ul>
                    </div>

                    <div class="filter-tabs d-none" id="filter-tabs-sort">
                        <ul class="mil_radio">
                        <li class="fil_redio">
                        <input type="radio" id="all-tab-asc" name="filter" value="asc" checked>
                        <label for="all-tab-asc">Asc</label>
                        </li>
                        <li class="fil_redio">
                        <input type="radio" id="all-tab-desc" name="filter" value="desc">
                        <label for="all-tab-desc-tab">Desc</label>
                        </li>
                        </ul>
                    </div>

                    <div class="filter-tabs d-none" id="filter-tabs-list">
                        <p class="regular_font many_para">Many of the projects we work on were built years ago, check out how we are giving them a newlife</p>
                    </div>
                        </div>
                        
                        <div class="col-md-2 col-2">
                            <div class="float-end d-flex">
                        <div id="grid-layout" class="fir-grid mx-1" onclick="toggleSolid('grid-layout')">
                          <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#5f6368">
                            <path d="M128-520v-312h312v312H128Zm0 392v-312h312v312H128Zm392-392v-312h312v312H520Zm0 392v-312h312v312H520ZM194-586h180v-180H194v180Zm392 0h180v-180H586v180Zm0 392h180v-180H586v180Zm-392 0h180v-180H194v180Zm392-392Zm0 212Zm-212 0Zm0-212Z"/>
                          </svg>
                        </div>
                        <div id="list-layout" class="mx-1" onclick="toggleSolid('list-layout')">
                          <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#5f6368">
                            <path d="m612-292 56-56-148-148v-184h-80v216l172 172ZM480-80q-83 0-156-31.5T197-197q-54-54-85.5-127T80-480q0-83 31.5-156T197-763q54-54 127-85.5T480-880q83 0 156 31.5T763-763q54 54 85.5 127T880-480q0 83-31.5 156T763-197q-54 54-127 85.5T480-80Zm0-400Zm0 320q133 0 226.5-93.5T800-480q0-133-93.5-226.5T480-800q-133 0-226.5 93.5T160-480q0 133 93.5 226.5T480-160Z"/>
                          </svg>
                        </div>
                      </div>
                        </div>
                    </div>
                </div>
            </div>
            </section>


            
                



                    
                    


                    


                    <!------------------------------------------------ grid  ------------------------------------------------->
                <div class="container galcontent">
                    <div id="grid-view">
                        <div class="image-gallery">
                            <!-- Images for All -->
                            <div id="all-content">


                                <!---------- Residential ------------------->
                               
                                    <div class="cont-iamges row">
                                        <div class="col-md-6" data-catg="heritage-con" data-channel="heritage urban art" data-status="under_construction" data-sort="2018" data-proj-name="Bhuleshwar">
                                            <div class="imagehover-container">
                                                <img src='/image/BhulKalba.webp' alt="Your Image" height="493">
                                                <div class="overlay-1 proneimg">
                                                    <div class="pr-name">
                                                        <h6 class="imgtitle-imghover medium_font">Bhuleshwar - Kalbadevi Community Led Heritage Regeneration </h6>
                                                    </div>
                                                    <div class="overlay-2 pro_red">
                                                        <div class="card-contenthover">
                                                            <div class="title-datehover">
                                                                <h5 class="title-imghover medium_font">Heritage + Urbanism + Art + Culture</h5>
                                                                <p class="disc-imghover medium_font">Ongoing</p>
                                                            </div>
                                                            <p class="disc-texthover regular_font">Community-led heritage regeneration of Bhuleshwar - Kalbadevi focuses on preserving cultural identity, empowering local crafts, and fostering equitable economic growth.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-6" data-catg="residential" data-channel="heritage architecture art" data-status="unbuilt" data-sort="2018" data-proj-name="Baroque">
                                            <div class="imagehover-container">
                                                <img src='/image/prbaro.webp' alt="Your Image" height="493">
                                                <!-- <h6 class="imgtitle-imghover medium_font">Project Name</h6>        -->
                                                <div class="overlay-1 pro_two">
                                                    <div class="pr-name">
                                                        <h6 class="imgtitle-imghover medium_font">Baroque Garden at Haffenprepach</h6>
                                                    </div>
                                                    <div class="overlay-2 pro_red">
                                                        <div class="card-contenthover">
                                                            <div class="title-datehover">
                                                                <h5 class="title-imghover medium_font">Heritage + Architecture + Art </h5>
                                                                <p class="disc-imghover medium_font">Unbuilt</p>
                                                            </div>
                                                            <p class="disc-texthover regular_font">Private Landscape Garden for a Baroque Schloss in Bayern</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    
                                
                                <!---------- Residential ------------------->


                                <!---------- Commercial ------------------->



                                
                                    <div class="col-md-4" data-catg="education" data-channel="heritage architecture" data-status="unbuilt" data-sort="2019" data-proj-name="Heilgersdorf">
                                        <div class="imagehover-container">
                                            <img src='/image/Heilgersdorf.webp' alt="Your Image" height="348">
                                            <!-- <h6 class="imgtitle-imghover medium_font">Project Name</h6>        -->
                                            <div class="overlay-1">
                                                    <div class="pr-name">
                                                        <h6 class="imgtitle-imghover medium_font">Heilgersdorf Art & Music Centre</h6>
                                                    </div>
                                                    <div class="overlay-2 pro_red">
                                                        <div class="card-contenthover">
                                                            <div class="title-datehover">
                                                                <h5 class="title-imghover medium_font">Heritage + Architecture</h5>
                                                                <p class="disc-imghover medium_font">Unbuilt</p>
                                                            </div>
                                                            <p class="disc-texthover regular_font">Adaptive Re-Use of a residential palace into an Art, Music and Cultural Center.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4" data-catg="heritage-con" data-channel="heritage" data-status="under_construction" data-sort="2019" data-proj-name="Maharaja">
                                        <div class="imagehover-container">
                                            <img src='/image/Maharaja-Agrasen-Palace.png' alt="Your Image" height="348">
                                            <!-- <h6 class="imgtitle-imghover medium_font">Project Name</h6>        -->
                                            <div class="overlay-1">
                                                    <div class="pr-name">
                                                        <h6 class="imgtitle-imghover medium_font">Saanjho Bhadreshwar</h6>
                                                    </div>
                                                    <div class="overlay-2 pro_lightblue">
                                                        <div class="card-contenthover">
                                                            <div class="title-datehover">
                                                                <h5 class="title-imghover medium_font">Heritage </h5>
                                                                <p class="disc-imghover medium_font">Ongoing</p>
                                                            </div>
                                                            <p class="disc-texthover regular_font">Focusing on the Conservation and Heritage Management for the Oldest port town of India</p>
                                                        </div>
                                                    </div>
                                                </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4" data-catg="education" data-channel="urban" data-status="under_construction" data-sort="2019" data-proj-name="Rural">
                                        <div class="imagehover-container">
                                            <img src='/image/Rural-Resillience.webp' alt="Your Image" height="348">
                                            <!-- <h6 class="imgtitle-imghover medium_font">Project Name</h6>        -->
                                            <div class="overlay-1">
                                                    <div class="pr-name">
                                                        <h6 class="imgtitle-imghover medium_font">Rural Resilience for Sesslach</h6>
                                                    </div>
                                                    <div class="overlay-2 pro_red">
                                                        <div class="card-contenthover">
                                                            <div class="title-datehover">
                                                                <h5 class="title-imghover medium_font">Heritage + Urbanism</h5>
                                                                <p class="disc-imghover medium_font">Ongoing</p>
                                                            </div>
                                                            <p class="disc-texthover regular_font">Project investigating the rural resilience of the medivial town of sesslach fostering - Sustainable Rural Regeration, Adaptive Re-use Strategies and Community Engagement</p>
                                                        </div>
                                                    </div>
                                                </div>
                                        </div>
                                    </div>

                                <!---------- Commercial ------------------->


                                <!---------- Heritage  ------------------->

                                
                                    <div class="col-md-4" data-catg="residential" data-channel="architecture" data-status="under_construction" data-sort="2020" data-proj-name="Baumhaus">
                                        <div class="imagehover-container">
                                            <img src='/image/Baumhaus.png' alt="Your Image" height="348">
                                            <!-- <h6 class="imgtitle-imghover medium_font">Project Name</h6>        -->
                                            <div class="overlay-1">
                                                    <div class="pr-name">
                                                        <h6 class="imgtitle-imghover medium_font">Baumhaus</h6>
                                                    </div>
                                                    <div class="overlay-2 pro_lightblue">
                                                        <div class="card-contenthover">
                                                            <div class="title-datehover">
                                                                <h5 class="title-imghover medium_font">Architecture</h5>
                                                                <p class="disc-imghover medium_font">Ongoing</p>
                                                            </div>
                                                            <p class="disc-texthover regular_font">Architectural prototype for Transient Experiential Living.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4" data-catg="institutional" data-channel="heritage art" data-status="completed" data-sort="2020" data-proj-name="Tambach">
                                        <div class="imagehover-container">
                                            <img src='/image/Tambach-Castle.webp' alt="Your Image" height="348">
                                            <!-- <h6 class="imgtitle-imghover medium_font">Project Name</h6>        -->
                                            <div class="overlay-1">
                                                    <div class="pr-name">
                                                        <h6 class="imgtitle-imghover medium_font">Tambach Castle</h6>
                                                    </div>
                                                    <div class="overlay-2 pro_red">
                                                        <div class="card-contenthover">
                                                            <div class="title-datehover">
                                                                <h5 class="title-imghover medium_font">Heritage + Art + Culture </h5>
                                                                <p class="disc-imghover medium_font">Completed</p>
                                                            </div>
                                                            <p class="disc-texthover regular_font">Adaptive Re-use proposal for the Castle of Tambach</p>
                                                        </div>
                                                    </div>
                                                </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4" data-catg="institutional" data-channel="art" data-status="under_construction" data-sort="2020" data-proj-name="Meditation">
                                        <div class="imagehover-container">
                                            <img src='/image/mediation.png' alt="Your Image" height="348">
                                            <!-- <h6 class="imgtitle-imghover medium_font">Project Name</h6>        -->
                                            <div class="overlay-1">
                                                    <div class="pr-name">
                                                        <h6 class="imgtitle-imghover medium_font">Meditation Centre at Ratlam</h6>
                                                    </div>
                                                    <div class="overlay-2 pro_lightblue">
                                                        <div class="card-contenthover">
                                                            <div class="title-datehover">
                                                                <h5 class="title-imghover medium_font">Architecture + Culture</h5>
                                                                <p class="disc-imghover medium_font">Ongoing</p>
                                                            </div>
                                                            <p class="disc-texthover regular_font">Architectural Design, Planning & Realisation of the Meditation centre in Ratlam.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                        </div>
                                    </div>
                                

                                <!---------- Education  ------------------->
                               
                                    <div class="col-md-4" data-catg="heritage-con" data-channel="heritage" data-status="completed" data-sort="2017" data-proj-name="Well">
                                        <div class="imagehover-container">
                                            <img src='/image/wellpro.webp' alt="Your Image" height="437">
                                            <!-- <h6 class="imgtitle-imghover medium_font">Project Name</h6>        -->
                                            <div class="overlay-1">
                                                    <div class="pr-name">
                                                        <h6 class="imgtitle-imghover medium_font">Well Restoration</h6>
                                                    </div>
                                                    <div class="overlay-2 pro_red">
                                                        <div class="card-contenthover">
                                                            <div class="title-datehover">
                                                                <h5 class="title-imghover medium_font">Heritage</h5>
                                                                <p class="disc-imghover medium_font">Completed</p>
                                                            </div>
                                                            <p class="disc-texthover regular_font">Restoring an old well, maintaining its historical significance and enhancing its usability.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                        </div>
                                    </div>
                                    <div class="col-md-8" data-catg="commercial" data-channel="heritage urban architecture art" data-status="unbuilt" data-sort="2017" data-proj-name="Re-envisioning">
                                        <div class="imagehover-container">
                                            <img src='/image/Dadar-Flower-Market.webp' alt="Your Image" height="437">
                                            <!-- <h6 class="imgtitle-imghover medium_font">Project Name</h6>        -->
                                            <div class="overlay-1">
                                                    <div class="pr-name">
                                                        <h6 class="imgtitle-imghover medium_font">Re-envisioning of the Dadar Flower Market</h6>
                                                    </div>
                                                    <div class="overlay-2 pro_red">
                                                        <div class="card-contenthover">
                                                            <div class="title-datehover">
                                                                <h5 class="title-imghover medium_font">Heritage + Urbanism + Architecture + Art + Culture</h5>
                                                                <p class="disc-imghover medium_font">Unbuilt</p>
                                                            </div>
                                                            <p class="disc-texthover regular_font">Adaptive Re-use of the oldest flower market in Mumbai</p>
                                                        </div>
                                                    </div>
                                                </div>
                                        </div>
                                    </div>
                                    
                                    
                                    

                                
                                <!---------- Education  ------------------->
                                <!---------- Residential ------------------->
                                
                                        <div class="col-md-6" data-catg="education" data-channel="heritage urban architecture art" data-status="under_construction" data-sort="2018" data-proj-name="Rural">
                                            <div class="imagehover-container">
                                                <img src='/image/Adamm.webp' alt="Your Image" height="493">
                                                <div class="overlay-1">
                                                    <div class="pr-name">
                                                        <h6 class="imgtitle-imghover medium_font">Rural Resilience for St. Lambrecht</h6>
                                                    </div>
                                                    <div class="overlay-2 pro_red">
                                                        <div class="card-contenthover">
                                                            <div class="title-datehover">
                                                                <h5 class="title-imghover medium_font">Heritage + Urbanism + Architecture + Art + Culture</h5>
                                                                <p class="disc-imghover medium_font">Ongoing</p>
                                                            </div>
                                                            <p class="disc-texthover regular_font">Regeneration and Rural Development for the district of Muaru, in Styria - Austria; through one of the most important Benedictine monasteries in Austria.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-6" data-catg="institutional education" data-channel="heritage architecture art" data-status="under_construction" data-sort="2018" data-proj-name="Hamilton">
                                            <div class="imagehover-container">
                                                <img src='/image/Humal.webp' alt="Your Image" height="493">
                                                <!-- <h6 class="imgtitle-imghover medium_font">Project Name</h6>        -->
                                                <div class="overlay-1 pro_two">
                                                    <div class="pr-name">
                                                        <h6 class="imgtitle-imghover medium_font">Hamilton Studios</h6>
                                                    </div>
                                                    <div class="overlay-2 pro_red">
                                                        <div class="card-contenthover">
                                                            <div class="title-datehover">
                                                                <h5 class="title-imghover medium_font">Heritage + Architecture + Art + Culture</h5>
                                                                <p class="disc-imghover medium_font">Ongoing</p>
                                                            </div>
                                                            <p class="disc-texthover regular_font">Revitalising and Refurbishment of the oldest photography studio in Mumbai</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="col-md-8" data-catg="heritage-con education" data-channel="heritage" data-status="under_construction" data-sort="2017" data-proj-name="Digital-Archival-Project">
                                        <div class="imagehover-container">
                                            <img src='/image/digital.png' alt="Your Image" height="437">
                                            <!-- <h6 class="imgtitle-imghover medium_font">Project Name</h6>        -->
                                            <div class="overlay-1">
                                                    <div class="pr-name">
                                                        <h6 class="imgtitle-imghover medium_font">Digital Archival Project</h6>
                                                    </div>
                                                    <div class="overlay-2 pro_red">
                                                        <div class="card-contenthover">
                                                            <div class="title-datehover">
                                                                <h5 class="title-imghover medium_font">Heritage</h5>
                                                                <p class="disc-imghover medium_font">Ongoing</p>
                                                            </div>
                                                            <p class="disc-texthover regular_font">Digitised collection of historic monuments in India produced by the “Mission for Indian History and Archaeology, University of Tokyo, in 1959-62” and the “Resurvey of the Delhi Monuments, RICAS in 2015–18”.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                        </div>
                                    </div>
                                    </div>
                                <!---------- Residential ------------------->
                                <!---------- other  ------------------->




                            </div>
                        </div>



                    </div>

                    <!------------------------------------------------ grid  ------------------------------------------------->


                    <!------------------------------------------------ list  ------------------------------------------------->

                    <div id="list-view" class="d-none">
                        <section class="pro-page mt-5 mb-5">
                            <div class="accordion" id="accordionPanelsStayOpenExample">

                                <div class="accordion-item" data-year="2023">
                                    <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                               <button class="accordion-button acc-title boldcond_font" type="button"
                                  data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne"
                                  aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                                  <img class="cir-img" src='/image/cir-image.png' alt="Your Image" height="">
                                  <p class="tab-y-ear">2023</p>
                               </button>
                            </h2>
                                    <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
                                        <div class="accordion-body body-1 body-two" data-catg="education" data-channel="architecture" data-status="under_construction" data-sort1="2017">
                                            <p class="acc-para acc-para1 regular_font">Maharaja Agrasen Palace</p>
                                            <p class="acc-para acc-para2 regular_font">Ongoing</p>
                                        </div>
                                        <div class="accordion-body body-1 body-two" data-catg="commercial" data-channel="art" data-status="under_construction" data-sort1="2017">
                                            <p class="acc-para acc-para1 regular_font">Baumhaus Project</p>
                                            <p class="acc-para acc-para2 regular_font">Ongoing</p>
                                        </div>
                                        <div class="accordion-body body-1 body-two" data-catg="residential" data-channel="urban" data-status="completed" data-sort1="2017">
                                            <p class="acc-para acc-para1 regular_font">Meditation Centre at Ratlam</p>
                                            <p class="acc-para acc-para2 regular_font">Ongoing</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item" data-year="1940s">
                                    <h2 class="accordion-header" id="panelsStayOpen-headingThree">
                               <button class="accordion-button acc-title boldcond_font collapsed" type="button"
                                  data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree"
                                  aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                                  <img class="cir-img" src='/image/cir-image.png' alt="Your Image" height="">
                                  <p class="tab-y-ear">1940s</p>
                               </button>
                            </h2>
                                    <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingThree">
                                        <div class="accordion-body body-1 body-three" data-catg="education" data-channel="culture" data-status="under_construction" data-sort1="2017">
                                            <p class="acc-para acc-para1 regular_font">Re-envisioning of the Dadar Flower Market</p>
                                            <p class="acc-para acc-para2 regular_font">Unbuilt</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item" data-year="1920">
                                    <h2 class="accordion-header" id="panelsStayOpen-headingFour">
                               <button class="accordion-button acc-title boldcond_font collapsed" type="button"
                                  data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseFour"
                                  aria-expanded="false" aria-controls="panelsStayOpen-collapseFour">
                                  <img class="cir-img" src='/image/cir-image.png' alt="Your Image" height="">
                                  <p class="tab-y-ear">1920</p>
                               </button>
                            </h2>
                                    <div id="panelsStayOpen-collapseFour" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingFour">
                                        <div class="accordion-body body-1 body-three" data-catg="residential" data-channel="culture" data-status="under_construction" data-sort1="2017">
                                            <p class="acc-para acc-para1 regular_font">Hamilton Studios</p>
                                            <p class="acc-para acc-para2 regular_font">Ongoing</p>
                                        </div>
                                        <div class="accordion-body body-1 body-three" data-catg="education" data-channel="culture" data-status="under_construction" data-sort1="2017">
                                            <p class="acc-para acc-para1 regular_font">Banganga - 1928</p>
                                            <p class="acc-para acc-para2 regular_font">Ongoing</p>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="accordion-item" data-year="1850s">
                                    <h2 class="accordion-header" id="panelsStayOpen-headingFive">
                               <button class="accordion-button acc-title boldcond_font collapsed" type="button"
                                  data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseFive"
                                  aria-expanded="false" aria-controls="panelsStayOpen-collapseFive">
                                  <img class="cir-img" src='/image/cir-image.png' alt="Your Image" height="">
                                  <p class="tab-y-ear">1850s</p>
                               </button>
                            </h2>
                                    <div id="panelsStayOpen-collapseFive" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingFive">
                                        <div class="accordion-body body-1 body-three" data-catg="residential" data-channel="culture" data-status="under_construction" data-sort1="2017">
                                            <p class="acc-para acc-para1 regular_font">Bhuleshwar - Kalbadevi - Community Led Heritage </p>
                                            <p class="acc-para acc-para2 regular_font">Ongoing</p>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="accordion-item" data-year="1700s">
                                    <h2 class="accordion-header" id="panelsStayOpen-headingSix">
                               <button class="accordion-button acc-title boldcond_font collapsed" type="button"
                                  data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseSix"
                                  aria-expanded="false" aria-controls="panelsStayOpen-collapseSix">
                                  <img class="cir-img" src='/image/cir-image.png' alt="Your Image" height="">
                                  <p class="tab-y-ear">1700s</p>
                               </button>
                            </h2>
                                    <div id="panelsStayOpen-collapseSix" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingSix">
                                        <div class="accordion-body body-1 body-three" data-catg="residential" data-channel="culture" data-status="under_construction" data-sort1="2017">
                                            <p class="acc-para acc-para1 regular_font">Baroque Garden at Haffenprepach - 1714</p>
                                            <p class="acc-para acc-para2 regular_font">Unbuilt</p>
                                        </div>
                                        <div class="accordion-body body-1 body-three" data-catg="residential" data-channel="culture" data-status="under_construction" data-sort1="2017">
                                            <p class="acc-para acc-para1 regular_font">Heilgersdorf - Art & Music Centre - 1770</p>
                                            <p class="acc-para acc-para2 regular_font">Ongoing</p>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="accordion-item" data-year="1600s">
                                    <h2 class="accordion-header" id="panelsStayOpen-headingSeven">
                               <button class="accordion-button acc-title boldcond_font collapsed" type="button"
                                  data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseSeven"
                                  aria-expanded="false" aria-controls="panelsStayOpen-collapseSeven">
                                  <img class="cir-img" src='/image/cir-image.png' alt="Your Image" height="">
                                  <p class="tab-y-ear">1600s</p>
                               </button>
                            </h2>
                                    <div id="panelsStayOpen-collapseSeven" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingSeven">
                                        <div class="accordion-body body-1 body-three" data-catg="residential" data-channel="culture" data-status="under_construction" data-sort1="2017">
                                            <p class="acc-para acc-para1 regular_font">Well Restoration </p>
                                            <p class="acc-para acc-para2 regular_font">Completed</p>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="accordion-item" data-year="9th - 12th Century">
                                    <h2 class="accordion-header" id="panelsStayOpen-headingEight">
                               <button class="accordion-button acc-title boldcond_font collapsed" type="button"
                                  data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseEight"
                                  aria-expanded="false" aria-controls="panelsStayOpen-collapseEight">
                                  <img class="cir-img" src='/image/cir-image.png' alt="Your Image" height="">
                                  <p class="tab-y-ear">9th - 12th Century</p>
                               </button>
                            </h2>
                                    <div id="panelsStayOpen-collapseEight" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingEight">
                                        <div class="accordion-body body-1 body-three" data-catg="residential" data-channel="culture" data-status="under_construction" data-sort1="2017">
                                            <p class="acc-para acc-para1 regular_font">Digital Archival Collection: Mission for Indian History and Archaeology</p>
                                            <p class="acc-para acc-para2 regular_font">Ongoing</p>
                                        </div>
                                        <div class="accordion-body body-1 body-three" data-catg="residential" data-channel="culture" data-status="under_construction" data-sort1="2017">
                                            <p class="acc-para acc-para1 regular_font">Tambach Castle - 1200s</p>
                                            <p class="acc-para acc-para2 regular_font">Completed</p>
                                        </div>
                                        <div class="accordion-body body-1 body-three" data-catg="residential" data-channel="culture" data-status="under_construction" data-sort1="2017">
                                            <p class="acc-para acc-para1 regular_font">Rural Resillience (Sesslach) - 1120 </p>
                                            <p class="acc-para acc-para2 regular_font">Ongoing</p>
                                        </div>
                                        <div class="accordion-body body-1 body-three" data-catg="residential" data-channel="culture" data-status="under_construction" data-sort1="2017">
                                            <p class="acc-para acc-para1 regular_font">Rural Resilience for St. Lambrecht - 1076 </p>
                                            <p class="acc-para acc-para2 regular_font">Under Construction</p>
                                        </div>
                                    </div>
                                </div>


                            </div>
                        </section>

                    </div>

                    <!------------------------------------------------ list  ------------------------------------------------->


                </div>

        </div>

    </section>

    <section class="container fotter-text1">
        <?php include 'footer.php';?>
    </section>

    <script>
   

    function toggleSolid(clickedId) {
      var gridIcon = document.getElementById('grid-layout').querySelector('svg');
      var listIcon = document.getElementById('list-layout').querySelector('svg');

      if (clickedId === 'grid-layout') {
        gridIcon.setAttribute('fill', '#000000');
        listIcon.setAttribute('fill', '#5f6368');
      } else {
        gridIcon.setAttribute('fill', '#5f6368');
        listIcon.setAttribute('fill', '#000000');
      }
    }
  
  
  
  
  
// document.querySelectorAll('.body-one, .body-two, .body-three, .body-four, .body-five').forEach(function(element) {
//     element.addEventListener('mouseover', function() {
//         this.style.backgroundPosition = '-100% 0';
//         this.removeEventListener('mouseout', restoreBackgroundPosition);
//     });
    
//     element.addEventListener('mouseout', restoreBackgroundPosition);
// });

// function restoreBackgroundPosition() {
//     this.style.backgroundPosition = '100% 0';
// }

//sticky nav

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
    
    
    
    
    
    
    
    
    
        function reset_sort(){
            if (document.getElementById('all-sort').classList.contains('active')) {
                location.reload();
            }
        }
    
        document.addEventListener("DOMContentLoaded", function() {
            auto_select();
            document.getElementById('grid-layout').click();
    
        });
        
        document.addEventListener("DOMContentLoaded", function() {
            var selectElement = document.getElementById("select-year-list");
        
            // Add event listener to the select element
            selectElement.addEventListener("change", function() {
                var selectedYear = selectElement.value;
        
                // Get all elements with the data-year attribute
                var elements = document.querySelectorAll("[data-year]");
        
                // Loop through each element and check its data-year attribute
                elements.forEach(function(element) {
                    var dataYear = element.getAttribute("data-year");
        
                    // Show the element if the selected year matches the data-year attribute, or if no year is selected
                    if (selectedYear === "" || selectedYear === dataYear) {
                        element.style.display = "block";
                    } else {
                        element.style.display = "none";
                    }
                });
            });
        });
            
        
        
        function empty_data(){
            
            // Get the parent element
            var parentElement = document.getElementById("panelsStayOpen-collapseFour");
        
            // Check if the parent element contains any child div elements
            var childDivs = parentElement.querySelectorAll("div");
            if (childDivs.length === 0) {
                // If no child div elements are found, add a new div with the content "no data"
                var newDataDiv = document.createElement("div");
                newDataDiv.textContent = "no data";
                parentElement.appendChild(newDataDiv);
            } else {
                // If child div elements are found, remove them
                childDivs.forEach(function(childDiv) {
                    parentElement.removeChild(childDiv);
                });
            }
            
        }
        
        
        
        
        /*-------------------- main filter --------------------------------*/
        
        document.getElementById('all-proj').addEventListener('click', function() {
            document.getElementById('filter-tabs-all-projects').classList.remove('d-none');
            document.getElementById('filter-tabs-all-channel').classList.add('d-none');
            document.getElementById('filter-tabs-status').classList.add('d-none');
            document.getElementById('filter-tabs-list').classList.add('d-none');
            document.getElementById('filter-tabs-sort').classList.add('d-none');
            
            document.getElementById('all-channel').classList.remove('active');
            document.getElementById('all-status').classList.remove('active');
            
            this.classList.add('active');
            
            document.getElementById('all-tab').click();
            
            document.getElementById('grid-layout').click();
            
            layout_shift();
            reset_sort();
        });
        
        document.getElementById('all-channel').addEventListener('click', function() {
            document.getElementById('filter-tabs-all-projects').classList.add('d-none');
            document.getElementById('filter-tabs-all-channel').classList.remove('d-none');
            document.getElementById('filter-tabs-status').classList.add('d-none');
            document.getElementById('filter-tabs-list').classList.add('d-none');
            document.getElementById('filter-tabs-sort').classList.add('d-none');
            
            document.getElementById('all-proj').classList.remove('active');
            document.getElementById('all-status').classList.remove('active');
            
            
            this.classList.add('active');
            
            document.getElementById('all-tab-channel').click();
            
            layout_shift();
            reset_sort();
        });
        
        document.getElementById('all-status').addEventListener('click', function() {
            document.getElementById('filter-tabs-all-projects').classList.add('d-none');
            document.getElementById('filter-tabs-all-channel').classList.add('d-none');
            document.getElementById('filter-tabs-status').classList.remove('d-none');
            document.getElementById('filter-tabs-list').classList.add('d-none');
            document.getElementById('filter-tabs-sort').classList.add('d-none');
            
            document.getElementById('all-channel').classList.remove('active');
            document.getElementById('all-proj').classList.remove('active');
            
    
            
            this.classList.add('active');
            
            document.getElementById('all-tab-status').click();
            
            layout_shift();
            reset_sort();
        });
        
        document.getElementById('all-sort').addEventListener('click', function() {
            document.getElementById('filter-tabs-all-projects').classList.add('d-none');
            document.getElementById('filter-tabs-all-channel').classList.add('d-none');
            document.getElementById('filter-tabs-status').classList.add('d-none');
            document.getElementById('filter-tabs-list').classList.add('d-none');
            document.getElementById('filter-tabs-sort').classList.remove('d-none');
        
            document.getElementById('all-channel').classList.remove('active');
            document.getElementById('all-proj').classList.remove('active');
            document.getElementById('all-status').classList.remove('active');
    
            this.classList.add('active');
            
            document.getElementById('all-tab-asc').click();
            
            layout_shift();
        });
        
        /*-------------------- main filter --------------------------------*/
        
        /* --------------------------- sub filter ---------------------------- */
    
        document.getElementById('all-tab').addEventListener('change', function() {
            if (this.checked) {
                showAll();
            }
        });
        
        document.getElementById('all-tab-channel').addEventListener('change', function() {
            if (this.checked) {
                showAll_channel();
            }
        });
        
        document.getElementById('all-tab-status').addEventListener('change', function() {
            if (this.checked) {
                showAll_status();
            }
        });
        
        /* --------------------------- sub filter ---------------------------- */
        
        /* --------------------------- sub filter ITEMS ---------------------------- */
    
        /*----------------------------------------------*/
        
        document.getElementById('residential-tab').addEventListener('change', function() {
            if (this.checked) {
                // console.log('1');
                filterByCategory('residential');
            }
        });
    
        document.getElementById('commercial-tab').addEventListener('change', function() {
            if (this.checked) {
                filterByCategory('commercial');
            }
        });
    
        document.getElementById('heritage-con-tab').addEventListener('change', function() {
            if (this.checked) {
                filterByCategory('heritage-con');
            }
        });
    
        document.getElementById('education-tab').addEventListener('change', function() {
            if (this.checked) {
                filterByCategory('education');
            }
        });
        document.getElementById('hospitality-tab').addEventListener('change', function() {
            if (this.checked) {
                filterByCategory('hospitality');
            }
        });
        document.getElementById('institutional-tab').addEventListener('change', function() {
            if (this.checked) {
                filterByCategory('institutional');
            }
        });
        
        /*---------------------------------------------------*/
        
        document.getElementById('heritage-tab').addEventListener('change', function() {
            if (this.checked) {
                filterByChannel('heritage');
            }
        });
        
        document.getElementById('urban-tab').addEventListener('change', function() {
            if (this.checked) {
                filterByChannel('urban');
            }
        });
        
        document.getElementById('architecture-tab').addEventListener('change', function() {
            if (this.checked) {
                filterByChannel('architecture');
            }
        });
        
        document.getElementById('art-tab').addEventListener('change', function() {
            if (this.checked) {
                filterByChannel('art');
            }
        });
        
        document.getElementById('culture-tab').addEventListener('change', function() {
            if (this.checked) {
                filterByChannel('culture');
            }
        });
        
        /*---------------------------------------------------*/
        
        document.getElementById('completed-tab').addEventListener('change', function() {
            if (this.checked) {
                filterByStatus('completed');
            }
        });
        
        document.getElementById('under_construction-tab').addEventListener('change', function() {
            if (this.checked) {
                filterByStatus('under_construction');
            }
        });
        
        document.getElementById('unbuilt-tab').addEventListener('change', function() {
            if (this.checked) {
                filterByStatus('unbuilt');
            }
        });
        
        /* --------------------------- sub filter ITEMS ---------------------------- */
    
        /*-------------------------- ALL TAB ----------------------------------------*/
    
        function showAll() {
            var elements = document.querySelectorAll('[data-catg]');
            elements.forEach(function(element) {
                element.style.display = 'block';
                element.classList.remove('width50');
            });
        }
        
        function showAll_channel() {
            showAll();
            var elements = document.querySelectorAll('[data-channel]');
            elements.forEach(function(element) {
                if (element.hasAttribute('data-channel') && element.getAttribute('data-channel') !== '') {
                    // console.log('fine');
                    element.style.display = 'block';
                } else {
                    // console.log('not fine');
                    element.style.display = 'none';
                    element.classList.remove('width50');
                }
            });
        }
        
        
        function showAll_status() {
            showAll();
            var elements = document.querySelectorAll('[data-status]');
            elements.forEach(function(element) {
                if (element.hasAttribute('data-status') && element.getAttribute('data-status') !== '') {
                    element.style.display = 'block';
                } else {
                    element.style.display = 'none';
                    element.classList.remove('width50');
                }
            });
        }
        
        /*-------------------------- ALL TAB ----------------------------------------*/
        
    
    
        function filterByCategory(category) {
            var elements = document.querySelectorAll('[data-catg]');
            elements.forEach(function(element) {
                if (element.hasAttribute('data-catg') && element.getAttribute('data-catg') !== '') {
                    if (element.getAttribute('data-catg') === category) {
                        element.style.display = 'block';
                        element.classList.add('width50');
                    } else if (element.getAttribute('data-catg').includes(category)) {
                        element.style.display = 'block';
                        element.classList.add('width50');
                    } else {
                        element.style.display = 'none';
                        element.classList.remove('width50');
                    }
                } else {
                    element.style.display = 'none';
                    element.classList.remove('width50');
                }
            });
        }
        
        
        function filterByChannel(category) {
            var elements = document.querySelectorAll('[data-channel]');
            elements.forEach(function(element) {
                if (element.hasAttribute('data-channel') && element.getAttribute('data-channel') !== '') {
                    if (element.getAttribute('data-channel') === category) {
                        element.style.display = 'block';
                        element.classList.add('width50');
                    } else if (element.getAttribute('data-channel').includes(category)) {
                        element.style.display = 'block';
                        element.classList.add('width50');
                    } else {
                        element.style.display = 'none';
                        element.classList.remove('width50');
                    }
                } else {
                    element.style.display = 'none';
                    element.classList.remove('width50');
                }
            });
        }
        
        function filterByStatus(category) {
            var elements = document.querySelectorAll('[data-status]');
            elements.forEach(function(element) {
                if (element.hasAttribute('data-status') && element.getAttribute('data-status') !== '') {
                    if (element.getAttribute('data-status') === category) {
                        element.style.display = 'block';
                        element.classList.add('width50');
                    } else {
                        element.style.display = 'none';
                        element.classList.remove('width50');
                    }
                } else {
                    element.style.display = 'none';
                    element.classList.remove('width50');
                }
            });
        }
        
        
        // Add click event listeners to grid and list layout icons
        document.getElementById('grid-layout').addEventListener('click', function() {
            // Hide list view content
            document.getElementById('list-view').classList.add('d-none');
            // Show grid view content
            document.getElementById('grid-view').classList.remove('d-none');
            
            document.getElementById('filter-tabs-all-projects').classList.remove('d-none');
            document.getElementById('filter-tabs-all-channel').classList.add('d-none');
            document.getElementById('filter-tabs-status').classList.add('d-none');
            document.getElementById('filter-tabs-list').classList.add('d-none');
            
            document.getElementById('sort-header').classList.remove('d-none');
            document.getElementById('sort-list-header').classList.add('d-none');
            
            var allProj = document.getElementById('all-proj');
            var allTab = document.getElementById('all-tab');
            
            allProj.click();
            allTab.click();
            
        });
    
        document.getElementById('list-layout').addEventListener('click', function() {
            // Hide grid view content
            document.getElementById('grid-view').classList.add('d-none');
            // Show list view content
            document.getElementById('list-view').classList.remove('d-none');
            
            document.getElementById('filter-tabs-all-projects').classList.add('d-none');
            document.getElementById('filter-tabs-all-channel').classList.add('d-none');
            document.getElementById('filter-tabs-status').classList.add('d-none');
            document.getElementById('filter-tabs-sort').classList.add('d-none');
            
            document.getElementById('sort-header').classList.add('d-none');
            document.getElementById('sort-list-header').classList.remove('d-none');
            
            document.getElementById('filter-tabs-list').classList.remove('d-none');
    
                    
            
            showAll();
            
        });
        
        /*---------------------- CUSTOM ---------------------*/
        
        function auto_select() {
    
            var allProj = document.getElementById('all-proj');
            var allTab = document.getElementById('all-tab');
            
            allProj.click();
            allTab.click();
        }
        
        function layout_shift(){
            // Hide list view content
            document.getElementById('list-view').classList.add('d-none');
            // Show grid view content
            document.getElementById('grid-view').classList.remove('d-none');
            
            document.getElementById('sort-header').classList.remove('d-none');
            document.getElementById('sort-list-header').classList.add('d-none');
            
        }
        
        
        // OLD SEARCH CODE
        
        // function searchElements(query) {
        //     // Convert query to lowercase
        //     query = query.toLowerCase();
            
        //     // Check if query length is at least 3 characters
        //     if (query.length < 3) {
        //         // Show all elements if query is empty or less than 3 characters
        //         var elements = document.querySelectorAll('[data-catg], [data-channel], [data-status], [data-sort], [data-proj-name]');
        //         elements.forEach(function(element) {
        //             element.style.display = 'block';
        //             element.classList.add('width50');
        //         });
        //         return; // Exit function if query length is less than 3
        //     }
        
        //     var elements = document.querySelectorAll('[data-catg], [data-channel], [data-status], [data-sort], [data-proj-name], [data-sort1]');
        //     elements.forEach(function(element) {
        //         var catg = (element.getAttribute('data-catg') || '').toLowerCase();
        //         var channel = (element.getAttribute('data-channel') || '').toLowerCase();
        //         var status = (element.getAttribute('data-status') || '').toLowerCase();
        //         var sort = (element.getAttribute('data-sort') || '').toLowerCase();
        //         var project = (element.getAttribute('data-proj-name') || '').toLowerCase();
        //         var sort1 = (element.getAttribute('data-sort1') || '').toLowerCase();
                
        //         // Check if any attribute value contains the query
        //         if (catg.includes(query) || channel.includes(query) || status.includes(query) || sort.includes(query) || project.includes(query) || sort1.includes(query)) {
        //             element.style.display = 'block';
        //         } else {
        //             element.style.display = 'none';
        //         }
        //     });
        // }
        
       // NEW SEARCH CODE
       
function searchElements(query) {
    query = query.toLowerCase();
    var container = document.getElementById('grid-view');

    if (!container) return;

    var elements = container.querySelectorAll('[data-catg], [data-channel], [data-status], [data-sort], [data-proj-name], [data-sort1]');

    if (query.length < 3) {
        elements.forEach(function(element) {
            element.style.display = 'block';
            element.classList.add('width50'); // Optional, if needed
        });
        return;
    }

    elements.forEach(function(element) {
        var catg = (element.getAttribute('data-catg') || '').toLowerCase();
        var channel = (element.getAttribute('data-channel') || '').toLowerCase();
        var status = (element.getAttribute('data-status') || '').toLowerCase();
        var sort = (element.getAttribute('data-sort') || '').toLowerCase();
        var project = (element.getAttribute('data-proj-name') || '').toLowerCase();
        var sort1 = (element.getAttribute('data-sort1') || '').toLowerCase();

        if (catg.includes(query) || channel.includes(query) || status.includes(query) || sort.includes(query) || project.includes(query) || sort1.includes(query)) {
            element.style.display = 'block';
        } else {
            element.style.display = 'none';
        }
    });
}





        
        
        /*------------------------------ sort function ------------------------------------- */
        
        document.addEventListener("DOMContentLoaded", function() {
            // Add event listeners to the radio buttons
            document.getElementById('all-tab-asc').addEventListener('change', function() {
                if (this.checked) {
                    sortElements('asc');
                }
            });
        
            document.getElementById('all-tab-desc').addEventListener('change', function() {
                if (this.checked) {
                    sortElements('desc');
                }
            });
        });
        
        function sortElements(order) {
            var container = document.querySelector('#all-content > .cont-iamges ');
            var elements = document.querySelectorAll('[data-proj-name]');
            var sortedElements = Array.from(elements).sort(function(a, b) {
                var sortA = a.getAttribute('data-proj-name');
                var sortB = b.getAttribute('data-proj-name');
                if (order === 'asc') {
                    return sortA.localeCompare(sortB);
                } else {
                    return sortB.localeCompare(sortA);
                }
            });
        
            // Clear the container
            // var container = document.getElementById('grid-view');
            container.innerHTML = '';
        
            // Append sorted elements to the container
            sortedElements.forEach(function(element) {
                container.appendChild(element);
            });
        }
    </script>

    <script>
        // search icon
           function toggleSearch() {
              var icon = document.querySelector('.search-icon');
              icon.classList.toggle('active');
           }
    </script>