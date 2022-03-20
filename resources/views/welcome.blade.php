<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="TemplateMo">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">

    <title>RoW Portal | Nagaland</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-edu-meeting.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/lightbox.css">
<!--

TemplateMo 569 Edu Meeting

https://templatemo.com/tm-569-edu-meeting

-->
  </head>

<body>

  <!-- Sub Header -->
  <div class="sub-header">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-sm-8">
          <div class="left-content">
            <p>Official RoW Portal | <a href="https://nagaland.gov.in">Government of Nagaland</a></p>
          </div>
        </div>
        <div class="col-lg-4 col-sm-4">
          <div class="right-icons">
            <ul>
              <li><a class="btn btn-sm btn-danger" href="{{ route('login') }}">Sign In</a></li>
              <li><a class="btn btn-sm btn-success"href="{{ route('register') }}">Sign Up</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky">
      <div class="container">
          <div class="row">
              <div class="col-12">
                  <nav class="main-nav">
                      <!-- ***** Logo Start ***** -->
                      <a href="{{url('/')}}" class="logo">
                          <img src="assets/images/row-logo-l.png"/>
                      </a>
                      <!-- ***** Logo End ***** -->
                      <!-- ***** Menu Start ***** -->
                      <ul class="nav">
                          <li class="scroll-to-section"><a href="#top" class="active">Dashboard</a></li>
                          <li><a href="#apply">About</a></li>
                          <li><a href="{{ asset('RoW_Guideline_Nagaland.pdf') }}" target="_blank" >Guideline</a></li>
                          <li class="has-sub">
                              <a href="javascript:void(0)">Services</a>
                              <ul class="sub-menu">
                                  <li><a href="{{ route('login') }}">New Tower Reg.</a></li>
                                  <li><a href="{{ route('login') }}">Reg. Renewal</a></li>
                              </ul>
                          </li>
                          <li class="scroll-to-section"><a href="#contact">Contact Us</a></li>

                      </ul>
                      <a class='menu-trigger'>
                          <span>Menu</span>
                      </a>
                      <!-- ***** Menu End ***** -->
                  </nav>
              </div>
          </div>
      </div>
  </header>
  <!-- ***** Header Area End ***** -->

  <!-- ***** Main Banner Area Start ***** -->
  <section class="section main-banner" id="top" data-section="section1">
      <video autoplay muted loop id="bg-video">
          <source src="assets/images/row-video.mp4" type="video/mp4" />
      </video>

      <div class="video-overlay header-text">
          <div class="container">
            <div class="row">
              <div class="col-lg-12">
                <div class="caption">
              <h6>Government of Nagaland</h6>
              <h2>RIGHT OF WAY PORTAL</h2>
              <p>The guideline for granting right of way (row) for installation of telecom infrastructure in the state of Nagaland 2019 notified by the State Government stipulates a set of standards and regulations for granting permission for installation of telegraph/telecom infrastructure both overground (mobile towers, aerial ofc) and underground optical fibre within the territorial jurisdiction of Nagaland.</p>
              <p>In pursuance to <a href=#>to the notified guideline</a>, this Portal has been developed with the objective
              to provide online services relating to application for Telecom Infrastructure Permissions in Nagaland and bring transparency, accountability and responsiveness to all stake holders while processing the application.</p>
              <div class="main-button-red">
                  <div class="scroll-to-section"><a href="#contact" style="background:#fff;color:#000">Contact us</a>
              </div>
          </div>
              </div>
            </div>
          </div>
      </div>
  </section>
  <!-- ***** Main Banner Area End ***** -->

  <section class="services">
    <div class="container pt-5">
      <div class="row">
        <div class="col-lg-12">
          <div class="owl-service-item owl-carousel">

            <div class="item">
              <div class="icon">
                <img src="assets/images/service-icon-01.png" alt="">
              </div>
              <div class="down-content">
                <h4>Permission for </h4>
                <p>Establishment of Overground Telecom Infrastructure</p> <br>
                <div class="btn btn-dark rounded-pill text-white">
                  <div><a href="{{route('login')}}">Apply</a></div>
                </div>
              </div>
            </div>

            <div class="item">
              <div class="icon">
                <img src="assets/images/service-icon-02.png" alt="">
              </div>
              <div class="down-content">
                <h4>Renewal of</h4>
                <p>Overground Telecom Infrastructure</p><br><br>
                <div class="btn btn-dark rounded-pill text-white">
                  <div><a href="{{route('login')}}">Apply</a></div>
                </div>
              </div>
            </div>

            <div class="item">
              <div class="icon">
                <img src="assets/images/service-icon-03.png" alt="">
              </div>
              <div class="down-content">
                <h4>Permission for</h4>
                <p>Establishment of Underground Telecom Infrastructure</p><br>
                <div class="btn btn-dark rounded-pill text-white">
                  <div><a href="" class="disabled">Coming soon</a></div>
                </div>
              </div>
            </div>

            <div class="item">
              <div class="icon">
                <img src="assets/images/service-icon-02.png" alt="">
              </div>
              <div class="down-content">
                <h4>Regularization of </h4>
                <p>Mobile Towers in Nagaland</p><br><br>
                <div class="btn btn-dark rounded-pill text-white">
                  <div><a href="" class="disabled">Coming soon</a></div>
                </div>
              </div>
            </div>

            <div class="item">
              <div class="icon">
                <img src="assets/images/service-icon-03.png" alt="">
              </div>
              <div class="down-content">
                <h4>Shifting of</h4>
                <p>Telecom Infrastructure</p><br><br>
                <div class="btn btn-dark rounded-pill text-white">
                  <div><a href="" class="disabled">Coming soon</a></div>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="upcoming-meetings" id="meetings">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="section-heading">
            <h2>Application Process</h2>
          </div>
        </div>
        <!-- <div class="col-lg-4">
          <div class="categories">
            <h4>Meeting Catgories</h4>
            <ul>
              <li><a href="#">Sed tempus enim leo</a></li>
              <li><a href="#">Aenean molestie quis</a></li>
              <li><a href="#">Cras et metus vestibulum</a></li>
              <li><a href="#">Nam et condimentum</a></li>
              <li><a href="#">Phasellus nec sapien</a></li>
            </ul>
            <div class="main-button-red">
              <a href="meetings.html">All Upcoming Meetings</a>
            </div>
          </div>
        </div> -->
        <div class="col-lg-12 text-center" style="color:#fff">
          <h5 class="mb-5"><b>NEW OVERGROUND TOWER PERMISSION</b></h5>
          <img src="{{asset('assets/images/process1.png')}}"/>

          <h5 class="mt-5"><b>RENEWAL OF APPLICATION</b></h5>
          <img src="{{asset('assets/images/process.png')}}" style="height:200px;width:auto"/>
          <h5 style="color:#fff">* For shifting of Tower -> New Tower Form</h5>
          <h3>Charges</h3>
          <p style="color:#fff">
            <b>One Time Charge</b> : Rs. 10,000/- <br>
            <b>Annual Charges</b> : <br>
            <ul>
              <li style="color:#fff">1. Municipal Areas : Rs. 10,000/-</li>
              <li style="color:#fff">2. Town/Village : Rs. 5,000/-</li>
            </ul>
          </p>
        </div>
      </div>
    </div>
  </section>

  <section class="apply-now" id="apply">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 align-self-center">
          <div class="row">
            <div class="col-lg-12">
              <div class="item">
                <h3>NODAL DEPARTMENT</h3>
                <p>For the implementation and co-ordination of this Policy the Information Technology and Communication Department shall be the Nodal Department. To overcome any difficulties in the implementation of the Policy, necessary interpretation, clarification, instruction will be issued from time to time by the Information Technology and Communication Department.</p>
                <div class="main-button-red">
                  <div><a href="https://ditc.nagaland.gov.in" target="_blank">DITC Website</a></div>
              </div>
              </div>
            </div>
            <div class="col-lg-12">
              <div class="item">
                <h3>RoW Guidelines</h3>
                <p>For the complete Guideline for granting permission to establish over-ground telegraph / telecom
                    infrastructure (Mobile Towers) click below.</p>
                <div class="main-button-yellow">
                  <div><a href="{{ asset('RoW_Guideline_Nagaland.pdf') }}" target="_blank" >View Guideline</a></div>
              </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="accordions is-first-expanded">
            <article class="accordion">
                <div class="accordion-head">
                    <span>About</span>
                    <span class="icon">
                        <i class="icon fa fa-chevron-right"></i>
                    </span>
                </div>
                <div class="accordion-body">
                    <div class="content">
                        <p>Given the importance of Telecom Connectivity in the modern age, the state Government had issued notification vide no No.IT&C/14-
                        3/2013, Dated 30/12014 stipulating a set of guidelines to be complied with at the time of installation
                        of mobile towers within the territorial jurisdiction of Nagaland</p>
                        <p><b>Subsequently, the Department of Telecom, Government of India</b> had issued the ROW policy 2016
                        for both over ground and underground telecom infrastructure.</p>
                    </div>
                </div>
            </article>
            <article class="accordion">
                <div class="accordion-head">
                    <span>District Nodal officer and Approving Authority</span>
                    <span class="icon">
                        <i class="icon fa fa-chevron-right"></i>
                    </span>
                </div>
                <div class="accordion-body">
                    <div class="content">
                        <p>The Competent Authority for granting the permission under this guideline is the Deputy
                        Commissioner of the respective District.</p>
                    </div>
                </div>
            </article>
            <article class="accordion">
                <div class="accordion-head">
                    <span>Applicability:</span>
                    <span class="icon">
                        <i class="icon fa fa-chevron-right"></i>
                    </span>
                </div>
                <div class="accordion-body">
                    <div class="content">
                        <p>These regulations shall apply to the whole of the State of Nagaland and shall be implemented
                        by all the Telecom Service Providers, Municipal Councils and other designated Bodies/ Areas,
                        Authorities in district, blocks and village levels empowered to give plan approval of buildings
                        within their jurisdiction. These regulations will be applicable to all existing/ proposed telecom
                        towers installed/ to be installed</p>
                    </div>
                </div>
            </article>
            <div class="main-button-red mt-4">
              <div><a href="{{ asset('RoW_Guideline_Nagaland.pdf') }}" class="disabled" download>Download the full guidline</a></div>
            </div>
        </div>
        </div>
      </div>
    </div>
  </section>





  <section class="contact-us" id="contact">
    <div class="container">
      <div class="row">
        <div class="col-lg-9 align-self-center">
          <div class="row">
            <div class="col-lg-12">
              <div class="card">
                <div class="card-header">
                  <h5 class="card-title">Contact Details of DC's</h5>
                </div>
                <div class="card-body">
                  <style media="screen">
                    .contact-table tr *{font-size:14px;}
                  </style>
                  <table class="table table-striped table-sm contact-table">
                  <thead class="thead-dark">
                    <tr>
                      <th>DISTRICT</th>
                      <th>DEPUTY COMMISSIONER</th>
                      <th>OFFICE</th>
                      <th>Email</th>
                    </tr>
                  </thead>
                    <tbody>
                   <tr>
                     <td>KOHIMA</td>
                     <td>Mr.Gregory Thejawalie, NCS</td>
                     <td>0370-2290355 (T/F)</td>
                     <td>dckma-ngl@nic.in</td>
                   </tr>
                   <tr>
                     <td>MOKOKCHUNG</td>
                     <td>Mr. Limawabang Jamir, NCS</td>
                     <td>0369-2226231/2226055 (F)</td>
                     <td>dcmok@gmail.com,dcmok-ngl@nic.in</td>
                   </tr>
                   <tr>
                     <td>TUENSANG</td>
                     <td>Mr. Kumar Ramnikant, IAS</td>
                     <td>03861-220333/220791 (F)</td>
                     <td>dctuensang@gmail.com,nagtus@nic.in</td>
                   </tr>
                   <tr>
                     <td>MON</td>
                     <td>Mr. Thavaseelan K, IAS</td>
                     <td>03869-221246/251264 /251625(F)</td>
                     <td>nagmon@nic.in</td>
                   </tr>
                   <tr>
                     <td>ZUNHEBOTO</td>
                     <td>Mr. Peter Lichamo</td>
                     <td>03867-220325/ 220387 (F)</td>
                     <td>zbtodc@gmail.com</td>
                   </tr>
                   <tr>
                     <td>WOKHA</td>
                     <td>Mr. Orenthung Lotha, NCS</td>
                     <td>03860-242040/242010 (F)</td>
                     <td>dc.wokha@gmail.com</td>
                   </tr>
                   <tr>
                     <td>PHEK</td>
                     <td>Mr. Razouvolie Dozo, NCS</td>
                     <td>03865-223037/223045 (F)</td>
                     <td>phekdc@gmail.com,nagphk@nic.in</td>
                   </tr>
                   <tr>
                     <td>DIMAPUR</td>
                     <td>Mr. Rajesh Soundararajan, IAS</td>
                     <td>03862-248530/248520/248613 (F)</td>
                     <td>dcdimapur@gmail.com /nagdmp@nic.i</td>
                   </tr>
                   <tr>
                     <td>KIPHIRE</td>
                     <td>Mr. T . Wait Aier, NCS</td>
                     <td>03863-225511/225551 (F)</td>
                     <td>dckiphire@gmail.com,nagkip@nic.in</td>
                   </tr>
                   <tr>
                     <td>LONGLENG</td>
                     <td>Mr. M. Shayung Phom, NCS</td>
                     <td>03869-2236271 (T/F) /223611</td>
                     <td>naglng@nic.in,nic.longleng@gmail.com</td>
                   </tr>
                   <tr>
                     <td>PEREN</td>
                     <td>Mr. Sentiwabang Aier, NCS</td>
                     <td>03839-267220 / 268560 (F)</td>
                     <td>nagprn@nic.in</td>
                   </tr>
                   <tr>
                     <td>NOKLAK</td>
                     <td>Mr. Haizu Meru, NCS</td>
                     <td>&nbsp;</td>
                     <td>dcnoklak-ngl@gov.in,haizumeru@gmail.com</td>
                   </tr>
                   <tr>
                     <td>NIULAND</td>
                     <td>Ajit Kumar Verma, IAS</td>
                     <td>&nbsp;</td>
                     <td>&nbsp;</td>
                   </tr>
                   <tr>
                     <td>CHUMUKEDIMA</td>
                     <td>Abhinav Shivam, IAS</td>
                     <td>&nbsp;</td>
                     <td>&nbsp;</td>
                   </tr>
                   <tr>
                     <td>SHAMATOR</td>
                     <td>Mr.Thsuvisie Phoji, NCS</td>
                     <td>&nbsp;</td>
                     <td>&nbsp;</td>
                   </tr>
                   <tr>
                     <td>TSEMINYU</td>
                     <td>Dr. Zasekouli Chusi, IAS</td>
                     <td>&nbsp;</td>
                     <td></td>
                   </tr>
                  </tbody>
                </table>
                </div>
              </div>

            </div>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="right-info">
            <ul>
              <li>
                <h6>Helpdesk Number</h6>
                <span style="font-size:14px;">(+91) 8929307387</span>
              </li>
              <li>
                <h6>Email Address</h6>
                <span style="font-size:14px;">rowinfo@nagaland.gov.in</span>
              </li>
              <li>
                <h6>Street Address</h6>
                <span style="font-size:14px;">Directorate of Information Technology & Communication, Thizama Road, Kohima, Nagaland</span>
              </li>
              <li>
                <h6>Website URL</h6>
                <span style="font-size:14px;">www.ditc.nagaland.gov.in</span>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="footer">
      <p style="font-size:12px">Copyright © {{date('Y')}} Right of Way Portal | Government of Nagaland, All Rights Reserved.
          <br>
          Developed by : <a href="https://ditc.nagaland.gov.in" target="_parent" title="free css templates">Department of Information Technology & Communication</a> <br>
          Government of Nagaland
        </p>
    </div>
  </section>

  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="assets/js/isotope.min.js"></script>
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/lightbox.js"></script>
    <script src="assets/js/tabs.js"></script>
    <script src="assets/js/video.js"></script>
    <script src="assets/js/slick-slider.js"></script>
    <script src="assets/js/custom.js"></script>
    <script>
        //according to loftblog tut
        $('.nav li:first').addClass('active');

        var showSection = function showSection(section, isAnimate) {
          var
          direction = section.replace(/#/, ''),
          reqSection = $('.section').filter('[data-section="' + direction + '"]'),
          reqSectionPos = reqSection.offset().top - 0;

          if (isAnimate) {
            $('body, html').animate({
              scrollTop: reqSectionPos },
            800);
          } else {
            $('body, html').scrollTop(reqSectionPos);
          }

        };

        var checkSection = function checkSection() {
          $('.section').each(function () {
            var
            $this = $(this),
            topEdge = $this.offset().top - 80,
            bottomEdge = topEdge + $this.height(),
            wScroll = $(window).scrollTop();
            if (topEdge < wScroll && bottomEdge > wScroll) {
              var
              currentId = $this.data('section'),
              reqLink = $('a').filter('[href*=\\#' + currentId + ']');
              reqLink.closest('li').addClass('active').
              siblings().removeClass('active');
            }
          });
        };

        $('.main-menu, .responsive-menu, .scroll-to-section').on('click', 'a', function (e) {
          e.preventDefault();
          showSection($(this).attr('href'), true);
        });

        $(window).scroll(function () {
          checkSection();
        });
    </script>
</body>

</body>
</html>
