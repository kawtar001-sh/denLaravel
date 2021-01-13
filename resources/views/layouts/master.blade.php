<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Document</title>
</head>
<link rel="stylesheet"href="{{ asset('assets/css/bootstrap.min.css') }}" />
<link rel="stylsheet" href="{{ asset('assets/css/font-awesome.min.css')}}" />
<link rel="stylsheet" href="{{ asset('assets/css/style.css')}}" />



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
                <a class="navbar-brand" href="#">Site <span>.sh </span></a>
            </div>

            <!-- links,dropdown,search -->
            <div class="collapse navbar-collapse" id="ournavbar">

                <ul class="nav navbar-nav navbar-right">

                    <li class="active"><a href="#"> Home</a></li>
                    <li><a href="#">About</a></li>


                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Service<span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="#">Web Design</a></li>
                            <li><a href="#">Desktop</a></li>
                            <li><a href="#">JavaScript</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="#">java jEE</a></li>

                        </ul>

                    </li>
                    <li><a href="#">Contact</a></li>
                </ul>


                <!-- la barre de recherche

           <form class="navbar-form navbar-left">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>
        
   -->
                <!-- autre dropdown

      <ul class="nav navbar-nav navbar-right">
        <li><a href="#">Link</a></li>

        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
          </ul>
        </li>

      </ul>
    -->

            </div>

        </div> <!-- fin container -->
    </nav><!-- end of our Navbar-->

@yield('content')

<script  src="{{asset('js/jquery-1.11.1.js')}}"></script>
<script  src="{{asset('js/bootstrap.min.js')}}"></script>

<script  src="{{asset('js/plugins.js')}}"></script>

</body>

</html>