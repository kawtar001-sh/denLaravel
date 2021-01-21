@extends('layouts.master')
@section('content')
<style>
	/*lis-appointements view */

.list-appointmants , .edit-appointmants{
    color:#fff; 
}
.appointmants{
     background: rgba(82,78,78,0.7);
     margin-right: 60px;
     margin-left: 130px;
}

.appointmants h1 {
    margin-top: 60px;
    margin-bottom: 40px;
    color:#fafcff;
    font-family: "times new roman";
    font-weight: 800;
    font-size: 60px;

}
.table > tbody > tr > td  {
 padding: 22px;
 border-top: 2px solid #3daedd;        
}
.table > tbody > tr > th{
    padding: 22px;
    border-top: 2px solid #3daedd;    
    font-family: "times new roman";
    font-size: 24px;
    font-weight: 600;
    color:#ceebf9;
}
.btn-edit {
    background: #3daedd;
}
		

	}
	</style>
<section class="list-appointmants" style="background: url('assets/images/dental-tools.jpg') no-repeat center ;min-height:500px ;
	width:100%; background-size :1512px;">
	<div class="appointmants">
      <div class="container">
	    <div class="row">

		    <div class="col-md-12">
			    <h1 class="text-center">list of appointments</h1>
			        <table class="table">
				        <head>
					        <tr>
						        <th>Name</th>
						        <th>Phone</th>
						        <th>E-Mail</th>
						        <th>Doctor</th>
						        <th>Date</th>
						        <th>Time</th>
						        <th>Actions</th>
					        </tr>
				        </head>
				<body>
					@foreach($appointments as $appointment)
					<tr>
						<td> {{ $appointment->Name }} </td>
						<td> {{ $appointment->phone}} </td>
						<td> {{ $appointment->Email}} </td>
						<td> {{ $appointment->doctor}} </td>
						<td> {{ $appointment->Date}} </td>
						<td> {{ $appointment->time}} </td>
						<td>
							<a href="{{url('appointments/'.$appointment->id .'/edit') }}" class="btn btn-primary btn-edit">Edit</a>
							<a href="" class="btn btn-danger">Cancel</a>
					
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