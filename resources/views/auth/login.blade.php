@extends('layouts.master')
@section('content')
<style>
.login{
    padding-top: 20px;
    background:url('../assets/images/login.jpg') no-repeat  fixed center  ;
    background-size: cover;
    background-position: center;
      -webkit-background-size:cover;
     -moz-background-size:cover;
     -o-background-size:cover;
     /*background-size:cover;*/
     max-width: 100%;
    height: 700px;
    font-family: "Times New Roman";


}
.opacity{
    background-color: rgb(3,3,3,0.2);
    max-width: 100%;
    height: 700px;
}
.card-body{

    width:  380px;
    height: 550px;
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


}
label{
 font-family: "Times New Roman";
 
 font-size: 18px;
 padding-top: 25px;
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
    margin-left: 140px;

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
<section class="login text-center">
    <div class="opacity">
<div class="container">
    <div class="row ">
        <div class="col-md-4 col-md-offset-4">
            
                <img src="{{ url('../assets/images/avat.png')}}" class="avatar">
                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        {{ @csrf_field() }}
                        <h1>Login here</h1>
                        <a href="{{ url('register')}}">Don't have an account?</a>
                        <br>
                        

                            <label for="email" >{{ __('E-Mail Address') }}</label>
                               <br>
                            
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Enter Your Email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                               
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        {{ $message }}
                                    </span>
                                @enderror
                            
                              
                              
                        
                            <label for="password"  >{{ __('Password') }}</label>

                            
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Enter Your Password" required autocomplete="current-password">
                                
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        {{ $message }}
                                    </span>
                                @enderror
                            
                                

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                 
                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary ">
                                    {{ __('Login') }}
                                </button>
                                <br><br>
                                @if (Route::has('password.request'))
                                   <div class="forgot">
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                </div>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
</section>
@endsection