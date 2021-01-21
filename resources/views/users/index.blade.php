@extends('layouts.master')
@section('content')

<style>
    .index {
        padding-top: 40px;
        background: url('../assets/images/login.jpg') no-repeat fixed center;
        width: 100%;
        min-height: 700px;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
    }

    .index .MyPatients {
        margin-top: -22px;
        padding-top: 20px;
        margin-left: 70px;
        margin-right: 70px;
        background: rgba(0, 0, 0, 0.6);
        min-height: 700px;
        color: aliceblue;
    }

    .index .MyPatients h1 {
        font-family: "Times New Roman";
        padding-top: 25px;
        font-style: italic;
        color: #fff;
        padding-bottom: 20px;
    }
   
   th {
   	text-align: center;
   	font-style: italic;
   	color:#4BAABC;
   	font-size: 20px;
   	}
   	td{
   		font-size: 17px;
   	}
   	/*les lignes du tableau index*/
   	.table>tbody>tr>td, 
   	.table>tbody>tr>th,
   	.table>tfoot>tr>td,
   	.table>tfoot>tr>th,
   	.table>thead>tr>td,
   	.table>thead>tr>th{

   		padding-bottom: 20px;
   		padding-top: 20px;




   	}
   	a{
   		color:#fff;
   		font-size: 20px;
   		 font-family: "Times New Roman";
   		 font-style: italic;
   		

   	}
   	a:hover{
   		
  background-color: #4BAABC;
  color: white;
  padding: 10px 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  border-radius: 10px;
}
.btn
{
   	border-radius: 15px;
   	
}
.btn-default
{

   		color:#fff;
   		background-color:#87e6ea;
}
.alert{
  background:#337AB7;
  font-weight: bold;
  border-radius: 20px;


}


   </style>
<section class="index text-center">
    <div class="MyPatients">
      <!--Pour afficher de succes de la creation -->
          @if(session()->has('succes'))
           <div class="alert atert-default">
            {{session()->get('succes')}}
          </div>
          @endif
          <!--end of msg alert-->

          <!--Pour afficher de succes de modification -->
          @if(session()->has('modify'))
           <div class="alert atert-danger">
            {{session()->get('modify')}}
          </div>
          @endif
          <!--end of msg alert-->
        <div class="container">
          
            <h1>Our Patients</h1>
            <div class="row">
                <div class="col-md-12 col-xs-12">
                	<div class="pull-right ">
                		<a href="{{url('register')}}"> Add New Patient</a>
                	</div>
                    <table class="table">

                        <head>
                            <tr>
                                
                                <th> Name </th>
                                <th> Phone </th>
                                <th> Email </th>
                                <th> Action</th>
                            </tr>
                        </head>

                        <body>
                            @foreach($User as $user)
                            <tr>
                                <td> {{ $user->name}}</td>
                                <td> {{ $user->Phone}}</td>
                                <td> {{ $user->email}}</td>
                                
                                   <td>
                              

                                    <form action="{{url('users/'.$user->id)}}" method="post">
                                    {{ csrf_field()}}
                                    {{ method_field('DELETE')}}
                                    <a href="##" class="btn btn-primary">Details</a>
                                     <a href="{{url('users/'.$user->id.'/edit')}}" class="btn btn-default">Edit</a>

                                    <button type="submit" class="btn btn-danger">Drop</button>

                                </form>

                               </td>

                               
                            </tr>
                            @endforeach
                        </body>
                    </table>
                </div>

            </div>
        </div>
    </div>
</section>
@endsection