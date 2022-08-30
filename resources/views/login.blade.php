<!DOCTYPE html>
<head>
  <title>Pusher Test</title>
  <!-- <script src="https://js.pusher.com/7.2/pusher.min.js"></script>
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
  <script src="{{asset('js/pusher-echo.js')}}"></script> -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script>
        // Pusher.logToConsole = true;

        // var echo = new Echo({
        //     broadcaster: 'pusher',
        //     // key:'82f0fb3432d96ef914b3',
        //     cluster:'eu',
        //     forceTLS: true
        // });

        window.Echo.channel('new-user')
            .listen('NewUser', (e) => {
                console.log("NewUser", e);
                document.getElementById('user-deails').innerHTML = e;
                // document.getElementById('wcount').innerHTML = e.wc;
            });
    </script>
</head>
<body>
    <h1>Details</h1>
  <p id="user-deails">
    
  </p>
</body>