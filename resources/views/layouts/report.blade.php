<!DOCTYPE html>
<html>
<head>
	  <!-- Bootstrap 3.3.7 -->
      <!-- Styles -->
      <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
      <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->

      <!-- Font Awesome -->
      <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
      <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->

      <!-- Ionicons -->
      <link href="{{ asset('css/ionicons.min.css') }}" rel="stylesheet">
      <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css"> -->

      <!-- Theme style -->
      <link href="{{ asset('css/AdminLTE.min.css') }}" rel="stylesheet">
      <link href="{{ asset('css/skins/_all-skins.min.css') }}" rel="stylesheet">

    <!--   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/2.4.3/css/AdminLTE.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/2.4.3/css/skins/_all-skins.min.css"> -->

      <!-- iCheck -->
      <link href="{{ asset('css/skins/_all.css') }}" rel="stylesheet">
      <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/iCheck/1.0.2/skins/square/_all.css"> -->
      <script type="text/javascript" src="js/jquery.printPage.js"></script>
	<style>
		body{
			  	background: rgb(204,204,204); 
			}
			page {
			  background: white;
			  display: block;
			  margin: 0 auto;
			  margin-bottom: 0.5cm;
			  box-shadow: 0 0 0.5cm rgba(0,0,0,0.5);
			}
			page[size="A4"] {  
			  width: 21cm;
			  height: 29.7cm; 
			}
			page[size="A4"][layout="landscape"] {
			  width: 29.7cm;
			  height: 21cm;  
			}
			@media print {
			  body, page {
			    margin: 0;
			    box-shadow: 0;
			  }
			}
	</style>
</head>

<body>
	
		@yield('content')
		
</body>

</html>