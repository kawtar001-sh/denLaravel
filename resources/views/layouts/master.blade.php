<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Dentist</title>
</head>
<link rel="stylesheet"href="{{ asset('assets/css/bootstrap.min.css') }}" />
<link rel="stylesheet" href="{{asset('assets/css/all.css')}}">
<link rel="stylesheet" href="//cdn.materialdesignicons.com/5.4.55/css/materialdesignicons.min.css">

<link rel="stylesheet" href="{{ asset('assets/css/style.css')}}" />
<script defer src="{{asset('assets/js/all.js')}}"></script>



<body>
    
     <!-- Start our Navbar-->

    

    <nav class="navbar navbar-default  navbar-fixed-top">
        
        <div class="container">
            <!-- <div class="container-fluid"> -->

            <!-- le nom du site+ boutton sur tel-->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#ournavbar" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#"> <span>Pro</span> .Dentist 
                </a>
            </div>

            <!-- links,dropdown,search -->
            <div class="collapse navbar-collapse" id="ournavbar">

                <ul class="nav navbar-nav navbar-right">

                    <li class="active"><a href="#"> Home </a></li>



                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Administration<span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="{{url('users')}}">ALL PATIENTS</a></li>
                            <li><a href="#">PERIONTODOLOGY</a></li>
                            <li><a href="#">PREVENTATIVE CARE</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="#">TOOTH PlIERS</a></li>

                        </ul>

                    </li>
                    <li><a href="#">Patients</a></li>
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">News</a></li>
                    <li><a href="#">Contact</a></li>
                    <li><a href="{{url('login')}}"> <strong>Login</strong> </a></li>
                </ul>
            </div>

        </div> <!-- fin container -->
   
    </nav><!-- end of our Navbar-->



    

@yield('content')

<script  src="{{asset('assets/js/jquery-1.11.1.js')}}"></script>
<script  src="{{asset('assets/js/bootstrap.min.js')}}"></script>


</body>
<footer>
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
  </footer>



</html>