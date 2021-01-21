
@extends('layouts.master') 
@section('content')


    <!-- Crousel-->
    <div id="MyCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#MyCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#MyCarousel" data-slide-to="1"></li>
            <li data-target="#MyCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox" >
            <div class="item active">
                <img src="{{asset('assets/images/slide1.jpg')}}" alt="image1">
                <div class="carousel-caption">
                     <h3>WE PRIORITY YOUR </h3>
                    <p> YOUR <strong>NEW SMILE</strong>  </p>
                </div>
            </div>
            
            <div class="item">
               <img src="{{asset('assets/images/slide2.jpg')}}" alt="image1">
                
            </div>
            
           <div class="item">
                <img src="{{asset('assets/images/slide3.jpg')}}" alt="image1">
               
            </div>
          
            
        </div>

        
       
    </div><!-- End of Crousel -->

  <section class="section-66 bg-default-liac">
          <div class="container">
            <div class="row row-50 text-sm-left">
              <div class="col-sm-6 col-lg-3 order-lg-1">
                <div class="block-title">
                  <div class="icon icon-xs mdi mdi-calendar-clock text-gray"></div>
                  <h6 class="d-inline-block inset-left-10 text-primary">opening hours</h6>
                  <hr class="hr-gray">
                </div>
                <div class="row offset-top-24 justify-content-sm-between row-15 text-gray-darker">
                  <div class="col-sm-4">Mon–Thu</div>
                  <div class="col-sm-7 text-sm-right">8:00am–7:00pm</div>
                  <div class="col-sm-4">Friday</div>
                  <div class="col-sm-7 text-sm-right">9:00am–5:00pm</div>
                  <div class="col-sm-4">Saturday</div>
                  <div class="col-sm-7 text-sm-right">9:00am–3:00pm</div>
                  <div class="col-sm-4">Sunday</div>
                  <div class="col-sm-7 text-sm-right">9:00am–3:00pm</div>
                </div>
              </div>
              
              <div class="col-lg-6 order-lg-2">
                <div class="block-title">
                  <div class="icon icon-xs mdi mdi-calendar text-gray"></div>
                  <h6 class="d-inline-block inset-left-10 text-primary">Make an Appointment</h6>
                  <hr class="hr-gray">
                </div>
                <div class="offset-top-24">
                 
                  <!-- RD Mailform-->
                  <form class="rd-mailform text-left row row-20" data-form-output="form-output-global" data-form-type="contact" method="post" action="{{ url('appointments')}}" novalidate="novalidate">
                    {{ csrf_field()}}
                    <div class="col-sm-6">
                      <div class="form-wrap">
                        
                      <input class="form-input form-control-has-validation form-control-last-child" id="appointment-name" type="text" name="name" data-constraints="@Required" placeholder ="Name"><span class="form-validation" ></span>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-wrap">
                        <input class="form-input form-control-has-validation form-control-last-child" id="appointment-phone" type="text" name="phone" data-constraints="@Numeric @Required" placeholder ="Phone" disabled><span class="form-validation"></span>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-wrap">
    
                        <input class="form-input form-control-has-validation form-control-last-child" id="appointment-email" type="email" name="email" data-constraints="@Email @Required" placeholder ="E-Mail"><span class="form-validation"></span>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <!--Select 2-->
                     <div class="form-wrap">
                        <select class="form-input select-filter form-control-has-validation form-control-last-child select2-hidden-accessible"  data-placeholder="Doctor" data-minimum-results-for-search="Infinity" data-constraints="@Required" id="regula-generated-783201" tabindex="-1" aria-hidden="true" placeholder="Doctor" name="doctor">
                          <option value="Doctor">Doctor</option>
                          <option value="Dr. Katherine Wong">Dr. Katherine Wong</option>
                          <option value="Dr. Nicholas Bryant">Dr. Nicholas Bryant</option>
                          <option value="Dr. Victoria Morgan">Dr. Victoria Morgan</option>
                        </select><span class="select2 select2-container select2-container--default" dir="ltr" ><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-regula-generated-783201-container"><span class="select2-selection_rendered" id="select2-regula-generated-783201-container"><span class="select2-selectionplaceholder"></span></span><span class="select2-selection_arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span><span class="form-validation"></span>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-wrap">
                       
                        <input class="form-input form-control-has-validation form-control-last-child" id="appointment-date" type="text" name="date" data-time-picker="date" data-constraints="@Required" data-dtp="dtp_t4bd9" placeholder ="Date"><span class="form-validation"></span>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-wrap">
                      
                        <input class="form-input form-control-has-validation form-control-last-child" id="appointment-time" type="text" name="time" data-time-picker="time" data-constraints="@Required" data-dtp="dtp_w0M0p" placeholder ="Time"><span class="form-validation"></span>
                      </div>
                    </div>
                    <div class="col-12">
                      <div class="form-button group-sm text-center text-lg-left offset-top-10">
                        <button class="btn btn-ellipse btn-java btn-send" type="submit">SEND</button>
                      </div>
                    </div>
                  </form>
                </div> 
              </div> 
               <div class="col-sm-6 col-lg-3 order-lg-3">
                <div class="block-title">
                  <div class="icon icon-xs mdi mdi-phone text-gray"></div>
                  <h6 class="d-inline-block inset-left-10 text-primary">emergency cases</h6>
                  <hr class="hr-gray">
                  <div class="offset-top-24 text-gray-darker">
                    <p>Our clinic provides high-level dental services, offers comprehensive solutions for the treatment of any dental diseases.</p>
                  </div>
                  <div class="offset-top-24 text-gray-darker">
                    <h5><a href="tel:#">1-800-1234-567</a></h5>
                    <p> Call us!</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>

        <!-- why chose the prodent clinic -->
        <section class="section-2">
          <div class="fields">
          <div class="container">
           <h1 class="choose text-center">Why choose the <span class="pro">PRODENT</span> clinic?</h1> 
            <div class="row">
              <div class="col-md-3  col-xs-12">
                <div class="icon-1">
                <i class="fas fa-book fa-3x "></i>
              </div>
                <h3 class="text-white-1">Easy booking</h3>
                <p class="lead p-1">Booking an appointment at our dental clinic is as easy as doing 2 clicks!</p>
               
              </div>
              <div class="col-md-3  col-xs-12">
                <div class="icon-2">
                <i class="fas fa-users fa-3x "></i>
              </div>
                <h3 class="text-white-2">Experience</h3>
                <p class="lead p-2">Combined, our 5 dentists have over half a century of practical experience. They are ready to put it to action for you!</p>
               </div>

              <div class="col-md-3  col-xs-12">
                <div class="icon-3">
                <i class="far fa-clock fa-3x "></i>
              </div>
                <h3 class="text-white">Flexible schedule</h3>
                <p class="lead p-3">We work during all state holidays, besides working till late during the regular days. In case of emergencies we accept weekend bookings.</p>
               </div> 
              
              <div class="col-md-3  col-xs-12">
                <div class="icon-4">
                <i class="far fa-thumbs-up fa-3x"></i>
                </div>
                <h3 class="text-white">Best price guarantee</h3>
                <p class="lead p-4">Our reasonable prices made thousands of people smile with a new, beautiful smile, as never before!!</p>
               </div>
            </div>
          </div>
          </div>
        </section>

      <section class="our-services ">
        <div class="container">
          <h1 class="text-center h1">Our services</h1>

          <div class="col-md-3 col-xs-12 col1">
            <img src="assets/service1.jpg">
            <h3 class="h3-1">General and preventive care </h3>
          </div>

           <div class="col-md-3 col-xs-12 col2">
            <img src="assets/service2.jpg">
            <h3 class="h3-2">Cosmetic solutions </h3>
          </div>

           <div class="col-md-3 col-xs-12 col3">
            <img src="assets/services3.jpg">
            <h3 class="h3-3">Restorative solutions</h3>
          </div>

           <div class="col-md-3 col-xs-12 col4">
            <img src="assets/services4.jpg">
            <h3 class="h3-4">Additional treatmens </h3>
          </div>
      
          <button class="btn btn-ellipse btn-java btn-all-serv " type="submit">See all Services</button>
        </div>
      </section>

      <section class="testimonials">
        <div class="container">
          <h1 class="text-center title">What  our patients say</h1>
          <div class="col-md-4 col-xs-12">
            
              <div class="img-testimonial">
            <img src="assets/testimonials1.jpg">
              </div>
              <i class="fas fa-quote-left fa-2x quote"></i>
            <p class="lead">I urgently required dental help last 4th of July. And despite all other clinics being closed, BeDentist took my appointment!</p>
            <div>
             <cite class="text-extra-bold text-gray-light">Herbert Wallace</cite>
              <time class="text-gray-lighter text-italic" datetime="2018-04-30"> – May 10, 2020</time>
            </div>
          
          </div>

           <div class="col-md-4 col-xs-12">
           
              <div class="img-testimonial">
            <img src="assets/testimonials2.jpg">
             </div>
             <i class="fas fa-quote-left fa-2x quote"></i>
            <p class="lead"> Comparing teeth whitening prices here and elsewhere, I picked BeDentist. The result was beyond my expectations!</p>
            <div>
             <cite class="text-extra-bold text-gray-light">Gary Growles</cite>
              <time class="text-gray-lighter text-italic" datetime="2020-04-30"> – May 10, 2020</time>
            </div>
            
          
          </div>

           <div class="col-md-4 col-xs-12">
           
              <div class="img-testimonial">
            <img src="assets/testimonials3.jpg">
            </div>
            <i class="fas fa-quote-left fa-2x quote"></i>
            <p class="lead"> Taking my kids to a dentist has never been easier. They just loved the welcoming and warm atmosphere in there!</p>
            <div>
             <cite class="text-extra-bold text-gray-light"> Daniela Robbery</cite>
              <time class="text-gray-lighter text-italic" datetime="2020-04-30"> – May 10, 2020</time>
            </div>
           
          
          </div>


</div>
        
      </section>


      <section class="our-team">
        <div class="container">
          <h1 class="text-center"> Our Team </h1>
          <hr class="divider divider-lg bg-java">

          <div class="col-md-3 col-xs-12">
            <img src="assets/our-team1.jpg">
            <div class="dr">
            <h3>Dr.Katherine Wong</h3>
            <p>General Dentist</p>
            </div>
            <button class="btn btn-ellipse btn-java btn-team " type="submit">VIEW FULL PROFILE</button>
          </div>

          <div class="col-md-3 col-xs-12">
            <img src="assets/our-team2.jpg">
            <div class="dr">
            <h3>Dr.Nicholas Bryant</h3>
            <p>Orthodontist</p>
            </div>
            <button class="btn btn-ellipse btn-java btn-team " type="submit">VIEW FULL PROFILE</button>
          </div>

          <div class="col-md-3 col-xs-12">
            <img src="assets/our-team3.jpg">
            <div class="dr">
            <h3>Dr.Victoria Morgan</h3>
            <p>Pediatric Dentist</p>
            </div>
            <button class="btn btn-ellipse btn-java btn-team " type="submit">VIEW FULL PROFILE</button>
          </div>

          <div class="col-md-3 col-xs-12">
            <img src="assets/our-team4.jpg">
            <div class="dr">
            <h3>Dr.Walter Jenkins</h3>
            <p>Periodontist</p>
            </div>
            <button class="btn btn-ellipse btn-java btn-team " type="submit">VIEW FULL PROFILE</button>
          </div>
         <button class="btn btn-ellipse btn-java btn-all-team " type="submit">View all team </button>
        </div>
      </section>

        <section class="footer">
          <div class="container">
            <div class="row">
        <div class="col-xs-6 logo-footer">
          <img src="assets/logo-dark.jpg">
        </div>
        
          <div class=" col-xs-6 ">
            <div class="icon-info">
            <span class="icon icon-circle icon-secondary-filled mdi mdi-phone mdi-2x icon-border-none"></span>
            <p>1-800-1234-567</p>
            </div>
            <div class="row">
              <div class="col-xs-12 ">
                <div class="icon-info">
                <span class="icon icon-circle icon-secondary-filled mdi mdi-map-marker icon-border-none"></span>
                <p> 2130 Fulton Street San Diego, CA 94117-1080 USA </p>
              </div>
              </div>
              <div class="icon-info">
             <span class="icon icon-circle icon-secondary-filled mdi mdi-email-outline icon-border-none gmail"></span>
              <p> ProdentClinic@gmail.com </p>
            </div>
          </div>
          <div class="row socail-media">
            <div class="col-xs-12">
              <ul class="list-inline">
                   <li> <a class="fab fa-facebook-square fa-2x fab-circle icon-white fb " href="#"> </a></li>
                    <li><a class="fab fa-twitter-square fa-2x icon-white twr " href="#"></a></li>
                     <li><a class="fab fa-google-plus-square fa-2x icon-white gl" href="#"></a></li>
                      <li><a class="fas fa-rss-square fa-2x icon-white rs " href="#"></a></li>
                      </ul>

            </div>
          </div>
          </div>
          </div>
          </div>
      </section>



@endsection