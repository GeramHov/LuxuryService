<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>My Portfolio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="SCSS\style.css">
  </head>
  <body>
    <section id="home">
        <!-- LOGO -->
       <a href="index.php">
           <h1 id="logo" class="text-lighted">GUERAM</h1>
       </a>
   
       <div class="container-fluid">
           <div class="row">
               <div class="col col-lg-1 col-md-1 col-sm-2"></div>
               <div class="col col-lg-5 col-md-5 col-sm-2">
                   
   
               </div>
   
               <!-- MENU ITEMS CARD -->
               <div class="col col-lg-5 col-md-5 col-sm-7 d-flex justify-content-end">
                   <div id="maincard" class="card rounded-0 bg-cerise w-50 py-5 mb-3">
                       <div class="card-body m-0">
                           <a id="link" class="text-white" href="">
                               <h4 id="homelink" class="px-5">HOME</h4>
                           </a>
                           <a id="link" class="text-white" href="">
                               <h4 id="projectslink" class="px-5">PROJECTS</h4>
                           </a>
                           <a id="link" class="text-white" href="">
                               <h4 id="aboutlink" class="px-5">ABOUT</h4>
                           </a>
                           <a id="link" class="text-white" href="">
                               <h4 id="contactlink" class="px-5">CONTACT</h4>
                           </a>
                       </div>
                   </div>
               </div>
   
               <!-- DROPDOWN LANGUAGE MENU -->
               <div class="lang col col-lg-1 col-md-1 col-sm-1 d-flex justify-content-center">
                     <div class="dropdown">
                       <a id="language" class="btn text-white dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          <img id="mainflag" class="flagicon mb-1" src="./ICONS/flag_usa.png" alt="actlangflag">
                       </a>
               
                       <ul class="dropdown-menu">
                         <li><a id="chooseflag1" class="dropdown-item" href="">
                              <img id="flag1" class="flagicon mb-1 me-1" src="./ICONS/flag_france.png" alt="langflag">
                              Français
                             </a></li>
                         <li><a id="chooseflag2" class="dropdown-item" href="">
                         <img id="flag2" class="flagicon mb-1 me-1" src="./ICONS/flag_russia.png" alt="langflag">
                              Русский
                         </a></li>
                         <li><a id="chooseflag3" class="dropdown-item" href="">
                         <img id="flag3" class="flagicon mb-1 me-1" src="./ICONS/flag_armenia.png" alt="langflag">
                              Հայերեն
                         </a></li>
                       </ul>
                   </div>
               </div>
   
           </div>
       </div>
   
       <!-- HOME MAIN -->
       <div class="container-fluid">
           <div class="row">
               <div class="main col col-lg-6 col-md-6 col-sm-3 d-flex justify-content-center align-items-center">
                <div class="d-flex flex-column ms-5">
                    <h3 id="hello" class="text-white text-center">Hello!</h3>
                    <h1 id="myportfolio" class="text-white ps-4">This is my <br> portfolio</h1>
                    <h3 id="talk" class="pacifico pt-4 text-white text-center">Talk Soon!</h3>
                    <div class="d-flex justify-content-center">
                        <a id="resume" href="./CV/cv-gueramhovhannisyan-english.pdf" target="_blank">
                            <button id="cv" class="btn btn-lg text-white my-4 rounded-0">View my résumé</button>
                        </a>
                    </div>
                </div>
               </div>
               <div class="col col-lg-5 col-md-5 col-sm-6 d-flex justify-content-end ps-5">

               <div class="card rounded-0 w-50 bg-transparent border-0 py-4">
                       <div class="card-body m-0">
                           <img id="myphoto" src="./IMAGES/my-photo.jpg" alt="myphoto"> <br>
                           <div class="d-flex justify-content-center flex-column">
                            <div class="d-flex text-center py-3">
                                <h5 class="myname text-white fw-bold" style="cursor: default">Hovhannisyan Gueram </h5>
                            </div>
                            <p id="intro" class="text-light fw-lighter pt-2" style="cursor: default">Currently studying web development and working on developing skills in HTML, CSS, JavaScript, PHP and other programming languages</p>
                            
                           </div>
                       </div>
                   </div>

               </div>
               <div class="col col-lg-1 col-md-1 col-sm-0 d-flex justify-content-end"></div>
           </div>
       </div>

       <div class="container-fluid">
           <div class="row">
               <div class="main col col-lg-6 col-md-6 col-sm-4">
               </div>
               <div class="col col-lg-5 col-md-5 col-sm-7 d-flex justify-content-end">
                   <div class="purplecard card rounded-0 bg-lighted w-50">
                   </div>
               </div>
               <div class="col col-lg-1 col-md-1 col-sm-1 d-flex justify-content-end"></div>
           </div>
       </div>

    </section>

    <section id="projects">

        <div class="container text-center">
            <h1 id="section-project" class="text-darken my-5">PROJECTS</h1>
        </div>

        <div id="projectbox" class="container-fluid d-flex p-0 mt-5 pt-3">

                    <img id="leftarrowbtn" src="ICONS/leftarrow.png" alt="arrowleft">
            
            <div id="cardbox" class="card w-25 rounded-0 border-0 bg-transparent py-3">
                <div class="card-body p-0 m-0">
                    <a href="https://github.com/GeramHov/ChatBox" target="_blank">
                        <img src="IMAGES/chatbox.png" alt="chatbox" style="width:100%; height:100%; object-fit:cover;">
                    </a>
                </div>
                    <h6 class="text-darken text-center my-3"><q>Super Nova</q></h6>
                    <p id="app-descript" class="text-darken text-center"><i>Chat application</i></p>
                    <div class="d-flex justify-content-center">
                        <div class="progress-bar w-75">
                                <div class="progress rounded-0" style="width: 55%; background-color: #8993be;"></div>
                                <div class="progress rounded-0" style="width: 25%; background-color: #264de4;"></div>
                                <div class="progress rounded-0" style="width: 20%; background-color: #f0db4f;"></div>
                        </div>
                    </div>
                    <div id="showbtn" class="lang mx-5 d-flex align-items-center justify-content-between">
                        <div class="d-flex">
                            <img class="mx-1 mt-1" src="ICONS/circle-php.png" alt="langdot" width="12" height="12">
                            <p class="px-2 mb-2 fw-light">PHP: 55%</p> 
                        </div>
                        <div class="d-flex">
                            <img class="mx-1 mt-1" src="ICONS/circle-css.png" alt="langdot" width="12" height="12">
                            <p class="px-2 mb-2 fw-light">CSS: 25%</p> 
                        </div>
                        <div class="d-flex">
                            <img class="mx-1 mt-1" src="ICONS/circle-js.png" alt="langdot" width="12" height="12">
                            <p class="px-2 mb-2 fw-light">JS: 20%</p> 
                        </div>
                    </div>
            </div>
            
            <div id="cardbox" class="card w-25 rounded-0 border-0 bg-transparent py-3">
                <div class="card-body p-0 m-0">
                    <a href="https://github.com/GeramHov/Quiz" target="_blank">
                        <img src="IMAGES/quiz.png" alt="quiz" style="width:100%; height:100%; object-fit:cover;">
                    </a>
                </div>
                <h6 class="text-darken text-center my-3"><q>Quiz</q></h6>
                <p id="app-descript" class="text-darken text-center"><i>A programming bases quiz</i></p>
                <div class="d-flex justify-content-center">
                    <div class="progress-bar w-75">
                        <div class="progress rounded-0" style="width: 88%; background-color: #8993be;"></div>
                        <div class="progress rounded-0" style="width: 12%; background-color: #0074D9;"></div>
                    </div>
                </div>
                    <div id="showbtn" class="lang mx-5 d-flex align-items-center justify-content-between">
                        <div class="d-flex">
                            <img class="mx-1 mt-1" src="ICONS/circle-php.png" alt="langdot" width="12" height="12">
                            <p class="px-2 mb-2 fw-light">PHP: 88%</p> 
                        </div>
                        <div class="d-flex">
                            <img class="mx-1 mt-1" src="ICONS/circle-css.png" alt="langdot" width="12" height="12">
                            <p class="px-2 mb-2 fw-light">CSS: 12%</p> 
                        </div>
                    </div>
            </div>
            
            <div id="cardbox" class="card w-25 rounded-0 border-0 bg-transparent py-3">
                <div class="card-body p-0 m-0">
                    <a href="https://www.gueram-compare-operator.projets.garage404.com/index.php" target="_blank">
                        <img src="IMAGES/compareoperator.png" alt="compareoperator" style="width:100%; height:100%; object-fit:cover;">
                    </a>
                </div>
                <h6 class="text-darken text-center my-3"><q>Compare Operator</q></h6>
                <p id="app-descript" class="text-darken text-center"><i>Flight prices comparing application</i></p>
                <div class="d-flex justify-content-center">
                        <div class="progress-bar w-75">
                                <div class="progress rounded-0" style="width: 82%; background-color: #cc6699;"></div>
                                <div class="progress rounded-0" style="width: 15%; background-color: #8993be;"></div>
                                <div class="progress rounded-0" style="width: 3%; background-color: #f0db4f;"></div>
                        </div>
                    </div>
                    <div id="showbtn" class="lang mx-5 d-flex align-items-center justify-content-between">
                        <div class="d-flex">
                            <img class="mx-1 mt-1" src="ICONS/circle-scss.png" alt="langdot" width="12" height="12">
                            <p class="px-2 mb-2 fw-light">SASS: 82%</p> 
                        </div>
                        <div class="d-flex">
                            <img class="mx-1 mt-1" src="ICONS/circle-php.png" alt="langdot" width="12" height="12">
                            <p class="px-2 mb-2 fw-light">PHP: 15%</p> 
                        </div>
                        <div class="d-flex">
                            <img class="mx-1 mt-1" src="ICONS/circle-js.png" alt="langdot" width="12" height="12">
                            <p class="px-2 mb-2 fw-light">JS: 3%</p> 
                        </div>
                    </div>
            </div>
            
            <div id="cardbox" class="card bigcard w-25 rounded-0 border-0 bg-transparent py-3">
            <div class="card-body p-0 m-0">
                <a href="https://www.gueram-sonic-owl-player.projets.garage404.com/index.php" target="_blank">
                    <img src="IMAGES/sonicowl.png" alt="sonicowl" style="width:100%; height:100%; object-fit:cover;">
                </a>
                </div>
                <h6 class="text-darken text-center my-3"><q>Sonic Owl</q></h6>
                <p id="app-descript" class="text-darken text-center"><i>A music streaming application</i></p>
                <div class="d-flex justify-content-center">
                        <div class="progress-bar w-75">
                                <div class="progress rounded-0" style="width: 75%; background-color: #8993be;"></div>
                                <div class="progress rounded-0" style="width: 13%; background-color: #f0db4f;"></div>
                                <div class="progress rounded-0" style="width: 12%; background-color: #264de4;"></div>
                        </div>
                    </div>
                    <div id="showbtn" class="lang mx-5 d-flex align-items-center justify-content-between">
                        <div class="d-flex">
                            <img class="mx-1 mt-1" src="ICONS/circle-php.png" alt="langdot" width="12" height="12">
                            <p class="px-2 mb-2 fw-light">PHP: 75%</p> 
                        </div>
                        <div class="d-flex">
                            <img class="mx-1 mt-1" src="ICONS/circle-js.png" alt="langdot" width="12" height="12">
                            <p class="px-2 mb-2 fw-light">JS: 13%</p> 
                        </div>
                        <div class="d-flex">
                            <img class="mx-1 mt-1" src="ICONS/circle-css.png" alt="langdot" width="12" height="12">
                            <p class="px-2 mb-2 fw-light">CSS: 12%</p> 
                        </div>
                    </div>
            </div>
            
            <div id="cardbox" class="card w-25 rounded-0 border-0 bg-transparent py-3">
                <div class="card-body p-0 m-0">
                    <a href="https://www.gueram-zoo.projets.garage404.com/index.php" target="_blank">
                        <img src="IMAGES/zoo.png" alt="zoo" style="width:100%; height:100%; object-fit:cover;">
                    </a>
                </div>
                <h6 class="text-darken text-center my-3"><q>Zoo</q></h6>
                <p id="app-descript" class="text-darken text-center"><i>A Zoo imitation game</i></p>
                <div class="d-flex justify-content-center">
                        <div class="progress-bar w-75">
                                <div class="progress rounded-0" style="width: 74%; background-color: #8993be;"></div>
                                <div class="progress rounded-0" style="width: 23%; background-color: #f0db4f;"></div>
                                <div class="progress rounded-0" style="width: 3%; background-color: #264de4;"></div>
                        </div>
                    </div>
                    <div id="showbtn" class="lang mx-5 d-flex align-items-center justify-content-between">
                        <div class="d-flex">
                            <img class="mx-1 mt-1" src="ICONS/circle-php.png" alt="langdot" width="12" height="12">
                            <p class="px-2 mb-2 fw-light">PHP: 74%</p> 
                        </div>
                        <div class="d-flex">
                            <img class="mx-1 mt-1" src="ICONS/circle-js.png" alt="langdot" width="12" height="12">
                            <p class="px-2 mb-2 fw-light">JS: 23%</p> 
                        </div>
                        <div class="d-flex">
                            <img class="mx-1 mt-1" src="ICONS/circle-css.png" alt="langdot" width="12" height="12">
                            <p class="px-2 mb-2 fw-light">CSS: 3%</p> 
                        </div>
                    </div>
            </div>
            
            <div id="cardbox" class="card w-25 rounded-0 border-0 bg-transparent py-3">
            <div class="card-body p-0 m-0">
                <a href="https://github.com/GeramHov/YellowSASS" target="_blank">
                    <img src="IMAGES/yellowsass.png" alt="yellowsass" style="width:100%; height:100%; object-fit:cover;">
                </a>
                </div>
                <h6 class="text-darken text-center my-3"><q>Yellow SASS</q></h6>
                <p id="app-descript" class="text-darken text-center"><i>Perfect copy of a one-page web site</i></p>
                <div class="d-flex justify-content-center">
                        <div class="progress-bar w-75">
                                <div class="progress rounded-0" style="width: 97%; background-color: #cc6699;"></div>
                                <div class="progress rounded-0" style="width: 2%; background-color: #e34c26;"></div>
                                <div class="progress rounded-0" style="width: 1%; background-color: #f0db4f;"></div>
                        </div>
                    </div>
                    <div id="showbtn" class="lang mx-5 d-flex align-items-center justify-content-between">
                        <div class="d-flex">
                            <img class="mx-1 mt-1" src="ICONS/circle-scss.png" alt="langdot" width="12" height="12">
                            <p class="px-2 mb-2 fw-light">SASS: 97%</p> 
                        </div>
                        <div class="d-flex">
                            <img class="mx-1 mt-1" src="ICONS/circle-html.png" alt="langdot" width="12" height="12">
                            <p class="px-2 mb-2 fw-light">HTML: 2%</p> 
                        </div>
                        <div class="d-flex">
                            <img class="mx-1 mt-1" src="ICONS/circle-js.png" alt="langdot" width="12" height="12">
                            <p class="px-2 mb-2 fw-light">JS: 1%</p> 
                        </div>
                    </div>
            </div>

            <div id="cardbox" class="card w-25 rounded-0 border-0 bg-transparent py-3">
                <div class="card-body p-0 m-0">
                    <a href="https://github.com/GeramHov/Projet-allo-cine" target="_blank">
                        <img src="IMAGES/allocine.png" alt="allocine" style="width:100%; height:100%; object-fit:cover;">
                    </a>
                </div>
                <h6 class="text-darken text-center my-3"><q>Allo Ciné</q></h6>
                <p id="app-descript" class="text-darken text-center"><i>Movies showing application using JSON data</i></p>
                <div class="d-flex justify-content-center">
                        <div class="progress-bar w-75">
                                <div class="progress rounded-0" style="width: 50%; background-color: #e34c26;"></div>
                                <div class="progress rounded-0" style="width: 40%; background-color: #264de4;"></div>
                                <div class="progress rounded-0" style="width: 10%; background-color: #f0db4f;"></div>
                        </div>
                    </div>
                    <div id="showbtn" class="lang mx-5 d-flex align-items-center justify-content-between">
                        <div class="d-flex">
                            <img class="mx-1 mt-1" src="ICONS/circle-html.png" alt="langdot" width="12" height="12">
                            <p class="px-2 mb-2 fw-light">HTML: 50%</p> 
                        </div>
                        <div class="d-flex">
                            <img class="mx-1 mt-1" src="ICONS/circle-css.png" alt="langdot" width="12" height="12">
                            <p class="px-2 mb-2 fw-light">CSS: 40%</p> 
                        </div>
                        <div class="d-flex">
                            <img class="mx-1 mt-1" src="ICONS/circle-js.png" alt="langdot" width="12" height="12">
                            <p class="px-2 mb-2 fw-light">JS: 10%</p> 
                        </div>
                    </div>
            </div>

                <img id="rightarrowbtn" src="ICONS/rightarrow.png" alt="arrowright">

        </div>
    </section>

    <section id="about">
        <div class="container py-5 text-center">
             <h1 id="section-about" class="text-darken my-5">ABOUT ME</h1>
            <div class="about-box text-secondary text-start">
                <p id="text-about"><i>
                 Let's get acquainted!
                 My name is <u>Geram Hovhannisyan</u>, I'm 30 years old and I am a Junior Web Developer currently studying at <u>Garage 404</u> in Roanne, France. I enjoy the coding a lot and I'm working on myself to become an accomplished programmer in order to contribute my skills to the exciting technological advances that happen every day. I'm an former car mechanic and car electrician, converted to Web Developement in late 2022. Being an armenian-origin I live and work in France since 2010. I like to <u>travel</u> and listen to music a lot. Watching and playing soccer, is one of my favorite spare-time occupations
                </i></p>
            </div>
        </div>
        <div class="container slider py-3 d-flex justify-content-center">

            <div class="slider">
                <span id="slide-1"></span>
                <span id="slide-2"></span>
                <span id="slide-3"></span>
            <div class="image-container">
                <img src="IMAGES/img (6).jpg" class="slide" width="500" height="300" />
                <img src="IMAGES/img (5).jpg" class="slide" width="500" height="300" />
                <img src="IMAGES/img (4).jpg" class="slide" width="500" height="300" />
            </div>
        </div>
    </div>
    <div class="container d-flex justify-content-center mt-2 mb-5">
        <div class="buttons">
            <div id="slide1" class="whitebtn mx-1"></div>
            <div id="slide2" class="whitebtn mx-1"></div>
            <div id="slide3" class="whitebtn mx-1"></div>
        </div>
    </div>

    </section>

    <div id="mid"></div>

    <section id="contact">
    <div class="container py-5 text-center">
             <h1 id="section-contact" class="text-darken my-3">CONTACT</h1>
    </div>         
    <div class="container mb-5">
			<div class="row my-3 justify-content-center">
				<div class="col-lg-10 mb-5">
					<div class="wrapper">
						<div class="row no-gutters">
							<div class="col-md-6 d-flex align-items-stretch p-0">
								<div class="contact-wrap w-100 p-md-5 p-4 py-5">
									<h3 id="writeme" class="mb-4">Write me</h3>
									<div id="form-message-warning" class="mb-4"></div> 
				      		<div id="form-message-success" class="mb-4">
				            
				      		</div>
									<form method="POST" id="contactForm" name="contactForm" class="contactForm">
										<div class="row">
											<div class="col-md-12">
												<div class="form-group">
													<input type="text" class="form-control" name="name" id="name" placeholder="Name">
												</div>
											</div>
											<div class="col-md-12"> 
												<div class="form-group">
													<input type="email" class="form-control" name="email" id="email" placeholder="Email">
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group">
													<input type="text" class="form-control" name="subject" id="subject" placeholder="Subject">
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group">
													<textarea name="message" class="form-control" id="message" cols="30" rows="6" placeholder="Message"></textarea>
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group">
                                                    <button id="sendbtn" type="submit" class="btn text-white my-4 rounded-0">Send Message</button>
												<div class="submitting"></div>
												</div>
											</div>
										</div>
									</form>
								</div>
							</div>
							<div class="col-md-6 d-flex align-items-stretch p-0">
								<div class="info-wrap w-100 p-md-5 p-4 py-5 img">
									<h3 id="contact-info">Contact information</h3>
				        	<div class="dbox w-100 d-flex align-items-start pt-5 mt-5">
				        		<div class="icon d-flex align-items-center justify-content-center">
				        			<img src="ICONS/point.png" alt="point" width="25" height="25">
				        		</div>
				        		<div class="text ps-3">
					            <p class="text-secondary"><span id="address">Address:</span> 477, rue Dr Calmette, 42153 Riorges, FR</p>
					          </div>
				          </div>
				        	<div class="dbox w-100 d-flex align-items-center">
				        		<div class="icon d-flex align-items-center justify-content-center">
                                <img src="ICONS/phone.png" alt="point" width="25" height="25">
				        		</div>
				        		<div class="text ps-3">
					            <p><span id="phone">Phone:</span> <a href="">+33 (0) 633836553</a></p>
					          </div>
				          </div>
				        	<div class="dbox w-100 d-flex align-items-center">
				        		<div class="icon d-flex align-items-center justify-content-center">
                                <img src="ICONS/mail.png" alt="point" width="25" height="25">
				        		</div>
				        		<div id="e-mail" class="text ps-3">
					            <p><span>Email:</span> <a href="mailto:gueram.hov@proton.me">gueram.hov@proton.me</a></p>
					          </div>
				          </div>
			          </div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
    </section>
    
    <img class="uparrow" src="ICONS/up-arrow.png" alt="scrollup" width="35" height="35">

    <footer>
        <div class="container d-flex justify-content-between align-items-end">
            <p id="footer-info" class="pt-5">Geram Hovhannisyan © 2023 <br>
               All rights reserved</p>
            
               <div class="d-flex pt-5 mt-2">
                   <a href="https://www.linkedin.com/in/gueram-hovhannisyan-75916026a/" target="_blank">
                       <img class="icon" src="ICONS/linkedin.png" alt="logosocialmedia" width="45" height="45">
                    </a>
                    <a href="https://github.com/GeramHov" target="_blank">
                        <img class="icon mx-3" src="ICONS/github.png" alt="logosocialmedia" width="45" height="45">
                    </a>
                    <a href="https://www.facebook.com/geram.hovhannisian" target="_blank">
                        <img class="icon" src="ICONS/facebook.png" alt="logosocialmedia" width="45" height="45">
                    </a>
               </div>
        </div>


    </footer>
    
    <script src="JS/slide.js"></script>
    <script src="JS/lang_fr.js"></script>
    <script src="JS/lang_ru.js"></script>
    <script src="JS/lang_hy.js"></script>
    <script src="JS/getsection.js"></script>
    <script src="JS/mailer.js"></script>
    <script src="JS/scrollup.js"></script>
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
  </body>
</html>