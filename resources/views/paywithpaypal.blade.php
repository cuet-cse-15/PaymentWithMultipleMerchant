<html>
<head>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body>

     {{-- @php
     $client_id_test='done..';
     $secret_test='Success';
     $path = base_path('.env');

          if (file_exists($path)) {

               file_put_contents($path, str_replace(
        'APP_KEY='.$this->laravel['config']['app.key'], 'APP_KEY='.$key, file_get_contents($path)
    ));


          file_put_contents($path, str_replace(
             'PAYPAL_CLIENT_ID='.$client_id_test,
             'PAYPAL_SECRET='.$secret_test, file_get_contents($path)
          ));
          }
     @endphp --}}
    <div class="w3-container">
        @if ($message = Session::get('success'))
        <div class="w3-panel w3-green w3-display-container">
            <span onclick="this.parentElement.style.display='none'"
    				class="w3-button w3-green w3-large w3-display-topright">&times;</span>
            <p>{!! $message !!}</p>
        </div>
        <?php Session::forget('success');?>
        @endif

        @if ($message = Session::get('error'))
        <div class="w3-panel w3-red w3-display-container">
            <span onclick="this.parentElement.style.display='none'"
    				class="w3-button w3-red w3-large w3-display-topright">&times;</span>
            <p>{!! $message !!}</p>
        </div>
        <?php Session::forget('error');?>
        @endif

    	<form class="w3-container w3-display-middle w3-card-4 w3-padding-16" method="POST" id="payment-form"
          action="{!! URL::to('paypal') !!}">
    	  <div class="w3-container w3-teal w3-padding-16">Paywith Paypal</div>
       <div class="w3-container w3-teal w3-padding-16">{{$client_id}}</div>
    	  <div class="w3-container w3-teal w3-padding-16">{{$secret}}</div>
    	  {{ csrf_field() }}
    	  <h2 class="w3-text-blue">Payment Form</h2>
    	  <p>Demo PayPal form - Integrating paypal in laravel</p>
    	  <label class="w3-text-blue"><b>Enter Amount</b></label>
    	  <input class="w3-input w3-border" id="amount" type="text" name="amount"></p>
    	  <button class="w3-btn w3-blue">Pay with PayPal</button>
    	</form>
    </div>
</body>
</html>