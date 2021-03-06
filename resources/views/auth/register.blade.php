@extends('layouts.master')

@section('content')
<style>
.register{
    padding-top: 20px;
    background:url('../assets/images/login.jpg') no-repeat  fixed center  ;
    background-size: cover;
    background-position: center;
    -webkit-background-size:cover;
    -moz-background-size:cover;
    -o-background-size:cover;
    max-width: 100%;
    height: 900px;
    font-family: "Times New Roman";


}
.opacity{
    background-color: rgb(3,3,3,0.2);
    max-width: 100%;
    height:900px;

}
.card-body{

    width:  380px;
    height: 670px;
    background-color: rgb(2,2,2,0.6);
    border:border-box;
    border-radius: 10px;
    color:#fff;
    left:50%;
    border:border-box;
    padding-top: 30px;
    background-position: center
}
.avatar{
    width: 100px;
    height: 100px;
    margin-top: 20px;
    margin-bottom: -50px;
    border-radius: 50%;
    border-color: #4baabc;
    margin-left: 20px;
    right:70px;
}
h1{
    padding: 0 0 20px;
    font-size: 25px;
    font-family: "Times New Roman";
    color: #28d1ef;
    font-weight: bold;
    padding-top: 25px;
    padding-bottom: 5px;



}
label{
 font-family: "Times New Roman";
 
 font-size: 18px;
 padding-top: 20px;
 font-family: "Times New Roman";
 
 
}
.form-control {
    display: block;
    width: 70%;
    height: 40px;
    margin-left: 60px;

  
}
.btn-primary {
    width:50%;
    height: 40px;
    

}
.btn {
    
    font-size: 20px;
    height: 45px;
    border-radius: 20px;
    font-family: "Times New Roman";
    

}
a {
    font-family: "Times New Roman";
  color:#2087db;
 font-size: 18px;

}
    a:hover{
        
  
  color: white;
  padding: 10px 20px;
 
  display: inline-block;
  border-radius: 10px;
}
.btn-link {
    font-size: 18px;
    font-family: "Times New Roman";
    color: #28d1ef;

}
.btn-link:hover{
    color: white;
  padding: 10px 20px;

}
.invalid-feedback
{
   padding: 10px 20px;
   
   font-family: serif;
   color:red;
   font-size: 20px; 
}


</style>
<section class="register text-center">
    <div class="opacity">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-md-offset-4">
                    <div class="card">

                        <img src="{{ url('../assets/images/avat.png')}}" class="avatar">

                        <div class="card-body">
                            <form method="POST" action="{{ route('register') }}">
                                @csrf
                                <h1>Create An Account </h1>

                                <label for="name">{{ __('Name') }}</label>


                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" placeholder="Enter Name.." value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    {{ $message }}
                                </span>
                                @enderror


                                <label for="Phone">{{ __('Phone') }}</label>


                                <input id="Phone" type="int" class="form-control @error('phone') is-invalid @enderror" name="Phone"placeholder="Enter Phone.." value="{{ old('Phone') }}" required autocomplete="Phone" autofocus>

                                @error('Phone')
                                <span class="invalid-feedback" role="alert">
                                    {{ $message }}
                                </span>
                                @enderror




                                <label for="email">{{ __('E-Mail Address') }}</label>


                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Enter Email-Adress.." value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    {{ $message }}
                                </span>
                                @enderror


                                <label for="password">{{ __('Password') }}</label>


                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Enter Password.." required autocomplete="new-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    {{ $message }}
                                </span>
                                @enderror



                                <label for="password-confirm">{{ __('Confirm Password') }}</label>


                                <input id="password-confirm" type="password" class="form-control" placeholder="Confirm Password.." name="password_confirmation" required autocomplete="new-password">

                                <br><br>
                                <div class="form-group row mb-0">
                                    
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('Submit') }}
                                        </button>

                                    
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
