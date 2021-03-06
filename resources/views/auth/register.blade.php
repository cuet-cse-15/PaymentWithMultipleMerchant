<!DOCTYPE html>
<html lang="en">
<head>
<title>{{ config('app.name', 'RMS') }}</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="/images/icons/favicon.ico"/>
	<link rel="stylesheet" type="text/css" href="/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<style>


	@font-face {
	  font-family: Poppins-Regular;
	  src: url('/fonts/poppins/Poppins-Regular.ttf');
	}

	@font-face {
	  font-family: Poppins-Bold;
	  src: url('/fonts/poppins/Poppins-Bold.ttf');
	}

	@font-face {
	  font-family: Poppins-Medium;
	  src: url('/fonts/poppins/Poppins-Medium.ttf');
	}

	@font-face {
	  font-family: Montserrat-Bold;
	  src: url('/fonts/montserrat/Montserrat-Bold.ttf');
	}

	/*//////////////////////////////////////////////////////////////////
	[ RESTYLE TAG ]*/

	* {
		margin: 0px;
		padding: 0px;
		box-sizing: border-box;
	}

	body, html {
		height: 100%;
		font-family: Poppins-Regular, sans-serif;
	}

	/*---------------------------------------------*/
	a {
		font-family: Poppins-Regular;
		font-size: 14px;
		line-height: 1.7;
		color: #666666;
		margin: 0px;
		transition: all 0.4s;
		-webkit-transition: all 0.4s;
	  -o-transition: all 0.4s;
	  -moz-transition: all 0.4s;
	}

	a:focus {
		outline: none !important;
	}

	a:hover {
		text-decoration: none;
	  color: #ffffff;
	}

	/*---------------------------------------------*/
	h1,h2,h3,h4,h5,h6 {
		margin: 0px;
	}

	p {
		font-family: Poppins-Regular;
		font-size: 14px;
		line-height: 1.7;
		color: #666666;
		margin: 0px;
	}

	ul, li {
		margin: 0px;
		list-style-type: none;
	}


	/*---------------------------------------------*/
	input {
		outline: none;
		border: none;
	}

	textarea {
	  outline: none;
	  border: none;
	}

	textarea:focus, input:focus {
	  border-color: transparent !important;
	}

	input:focus::-webkit-input-placeholder { color:transparent; }
	input:focus:-moz-placeholder { color:transparent; }
	input:focus::-moz-placeholder { color:transparent; }
	input:focus:-ms-input-placeholder { color:transparent; }

	textarea:focus::-webkit-input-placeholder { color:transparent; }
	textarea:focus:-moz-placeholder { color:transparent; }
	textarea:focus::-moz-placeholder { color:transparent; }
	textarea:focus:-ms-input-placeholder { color:transparent; }

	input::-webkit-input-placeholder { color: #999999; }
	input:-moz-placeholder { color: #999999; }
	input::-moz-placeholder { color: #999999; }
	input:-ms-input-placeholder { color: #999999; }

	textarea::-webkit-input-placeholder { color: #999999; }
	textarea:-moz-placeholder { color: #999999; }
	textarea::-moz-placeholder { color: #999999; }
	textarea:-ms-input-placeholder { color: #999999; }

	/*---------------------------------------------*/
	button {
		outline: none !important;
		border: none;
		background: transparent;
	}

	button:hover {
		cursor: pointer;
	}

	iframe {
		border: none !important;
	}


	/*//////////////////////////////////////////////////////////////////
	[ Utility ]*/
	.txt1 {
	  font-family: Poppins-Regular;
	  font-size: 13px;
	  line-height: 1.5;
	  color: #999999;
	}

	.txt2 {
	  font-family: Poppins-Regular;
	  font-size: 13px;
	  line-height: 1.5;
	  color: #dddddd;
       font-weight: 700;
       text-decoration: none;

	}


	/*//////////////////////////////////////////////////////////////////
	[ login ]*/

	.limiter {
	  width: 100%;
	  margin: 0 auto;
	}

	.container-login100 {
	  width: 100%;
	  min-height: 100vh;
	  display: -webkit-box;
	  display: -webkit-flex;
	  display: -moz-box;
	  display: -ms-flexbox;
	  display: flex;
	  flex-wrap: wrap;
	  justify-content: center;
	  align-items: center;
	  padding: 15px;
	  background: #9053c7;
	  background: -webkit-linear-gradient(-135deg, #c850c0, #4158d0);
	  background: -o-linear-gradient(-135deg, #c850c0, #4158d0);
	  background: -moz-linear-gradient(-135deg, #c850c0, #4158d0);
	  background: linear-gradient(-135deg, #c850c0, #4158d0);
	}

	.wrap-login100 {
	  width: 960px;
	  background: #ffffff42;
	  border-radius: 10px;
	  overflow: hidden;

	  display: -webkit-box;
	  display: -webkit-flex;
	  display: -moz-box;
	  display: -ms-flexbox;
	  display: flex;
	  flex-wrap: wrap;
	  justify-content: space-between;
	  padding: 80px 130px 80px 95px;
	}

	/*------------------------------------------------------------------
	[  ]*/
	.login100-pic {
	  width: 316px;
	}

	.login100-pic img {
	  max-width: 100%;
	}


	/*------------------------------------------------------------------
	[  ]*/
	.login100-form {
	  width: 290px;
	}

	.login100-form-title {
	  font-family: Poppins-Bold;
	  font-size: 24px;
	  color: #ffffff;
	  line-height: 1.2;
	  text-align: center;

	  width: 100%;
	  display: block;
	  padding-bottom: 30px;
	}


	/*---------------------------------------------*/
	.wrap-input100 {
	  position: relative;
	  width: 100%;
	  z-index: 1;
	  margin-bottom: 10px;
	}

	.input100 {
	  font-family: Poppins-Medium;
	  font-size: 15px;
	  line-height: 1.5;
	  color: #666666;

	  display: block;
	  width: 100%;
	  background: #e6e6e6;
	  height: 50px;
	  border-radius: 25px;
	  padding: 0 30px 0 68px;
	}


	/*------------------------------------------------------------------
	[ Focus ]*/
	.focus-input100 {
	  display: block;
	  position: absolute;
	  border-radius: 25px;
	  bottom: 0;
	  left: 0;
	  z-index: -1;
	  width: 100%;
	  height: 100%;
	  box-shadow: 0px 0px 0px 0px;
	  color: rgba(87,184,70, 0.8);
	}

	.input100:focus + .focus-input100 {
	  -webkit-animation: anim-shadow 0.5s ease-in-out forwards;
	  animation: anim-shadow 0.5s ease-in-out forwards;
	}

	@-webkit-keyframes anim-shadow {
	  to {
	    box-shadow: 0px 0px 70px 25px;
	    opacity: 0;
	  }
	}

	@keyframes anim-shadow {
	  to {
	    box-shadow: 0px 0px 70px 25px;
	    opacity: 0;
	  }
	}

	.symbol-input100 {
	  font-size: 15px;

	  display: -webkit-box;
	  display: -webkit-flex;
	  display: -moz-box;
	  display: -ms-flexbox;
	  display: flex;
	  align-items: center;
	  position: absolute;
	  border-radius: 25px;
	  bottom: 0;
	  left: 0;
	  width: 100%;
	  height: 100%;
	  padding-left: 35px;
	  pointer-events: none;
	  color: #666666;

	  -webkit-transition: all 0.4s;
	  -o-transition: all 0.4s;
	  -moz-transition: all 0.4s;
	  transition: all 0.4s;
	}

	.input100:focus + .focus-input100 + .symbol-input100 {
	  color: #57b846;
	  padding-left: 28px;
	}

	/*------------------------------------------------------------------
	[ Button ]*/
	.container-login100-form-btn {
	  width: 100%;
	  display: -webkit-box;
	  display: -webkit-flex;
	  display: -moz-box;
	  display: -ms-flexbox;
	  display: flex;
	  flex-wrap: wrap;
	  justify-content: center;
	  padding-top: 20px;
	}

	.login100-form-btn {
	  font-family: Montserrat-Bold;
	  font-size: 15px;
	  line-height: 1.5;
	  color: #fff;
	  text-transform: uppercase;

	  width: 100%;
	  height: 50px;
	  border-radius: 25px;
	  background: #57b846;
	  display: -webkit-box;
	  display: -webkit-flex;
	  display: -moz-box;
	  display: -ms-flexbox;
	  display: flex;
	  justify-content: center;
	  align-items: center;
	  padding: 0 25px;

	  -webkit-transition: all 0.4s;
	  -o-transition: all 0.4s;
	  -moz-transition: all 0.4s;
	  transition: all 0.4s;
	}

	.login100-form-btn:hover {
	  background: #ffffff;
       color: #57b846;
	}



	/*------------------------------------------------------------------
	[ Responsive ]*/



	@media (max-width: 992px) {
	  .wrap-login100 {
	    padding: 177px 90px 33px 85px;
	  }

	  .login100-pic {
	    width: 35%;
	  }

	  .login100-form {
	    width: 50%;
	  }
	}

	@media (max-width: 768px) {
	  .wrap-login100 {
	    padding: 100px 80px 33px 80px;
	  }

	  .login100-pic {
	    display: none;
	  }

	  .login100-form {
	    width: 100%;
	  }
	}

	@media (max-width: 576px) {
	  .wrap-login100 {
	    padding: 100px 15px 33px 15px;
	  }
	}
     .invalid-feedback{
          font-size: 12px;
    padding: 0px 10px;
    color: #e50707;
     }


	</style>

	<!--===============================================================================================-->

</head>
<body>

	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="images/img-01.png" alt="IMG">
				</div>

                    <form class="login100-form validate-form" method="post" action="{{ route('register') }}">
                        {{ csrf_field() }}
                                         <span class="login100-form-title">
                                               Register
                                         </span>

                        <div class="wrap-input100 validate-input">
                            <input class="input100" type="text" placeholder="Name" name="name" value="{{ old('name') }}" required autofocus>
                            <span class="focus-input100"></span>
                            <span class="symbol-input100">
                                 <i class="fa fa-envelope" aria-hidden="true"></i>
                            </span>

                        </div>

                                   @if ($errors->has('name'))
                                        <div class="wrap-input100">
                                       <span class="invalid-feedback" role="alert">
                                           <strong>{{ $errors->first('name') }}</strong>
                                      </div>
                                       </span>
                                   @endif

                        <div class="wrap-input100 validate-input">
                            <input class="input100" type="text" name="email" placeholder="Email" value="{{ old('email') }}" required>
                            <span class="focus-input100"></span>
                            <span class="symbol-input100">
                                 <i class="fa fa-envelope" aria-hidden="true"></i>
                            </span>

                        </div>



                        @if ($errors->has('email'))
                              <div class="wrap-input100">
                                    <span class="invalid-feedback" role="alert">
                                         <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                               </div>
                       @endif



                        <div class="wrap-input100 validate-input">
                            <input class="input100" type="password" name="password" placeholder="Password" required>
                            <span class="focus-input100"></span>
                            <span class="symbol-input100">
                                 <i class="fa fa-lock" aria-hidden="true"></i>
                            </span>

                        </div>

                        @if ($errors->has('password'))
                             <div class="wrap-input100">
                                    <span class="invalid-feedback" role="alert">
                                         <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                               </div>
                       @endif


                        <div class="wrap-input100 validate-input">
                            <input class="input100" type="password" name="password_confirmation" placeholder="Confirm Password" required>
                            <span class="focus-input100"></span>
                            <span class="symbol-input100">
                                 <i class="fa fa-lock" aria-hidden="true"></i>
                            </span>

                        </div>


                        <div class="container-login100-form-btn">
                            <button type="submit" class="login100-form-btn">
                                Register
                            </button>
                        </div>

                        <br>

                        <div class="text-center p-t-12">
                            <span class="txt2">
                                 Already Has Account
                                  <i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
                            </span>

                            <a class="txt2" href="/login" style="float:right">
                                Login
                            </a>
                        </div>
                    </form>
			</div>
		</div>
	</div>


</body>
</html>
