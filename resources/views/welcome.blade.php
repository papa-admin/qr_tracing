<!DOCTYPE html>
</html>
<head>
<title>Tracing System</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<link href="{{ asset('css/front.css') }}" rel="stylesheet">
<style>
</style>
</head>

<body>
    <!-- main body of the webpage -->
    <div class="main_container">
    <h1>Visitor Tracing for <br>Individuals and Businesses</h1>
    @if (Route::has('login'))
        @auth
        <a href="{{ url('/home') }}" class="text-sm text-gray-700 underline">Home</a>
    @else
            <div class="sub_container">
                @if (Route::has('register'))
                    <p><b>For individuals</b> who wanted to generate qr code for tracing in establishments</p>
                    <button type="button" id="btn" data-toggle="modal" data-target="#register_qr"><b>Register for Personal QR</b></button>
                @endif
                <p><b>For businesses</b> who wanted to record tracing in your establishments</p>
                <button type="button" id="btn" onclick="window.location='{{ route('login') }}'"><b>Login</b></button>
                <button type="button" id="btn" onclick="window.location='{{ route('register') }}'"><b>Register</b></button>
                <p>
                    <b>For individuals</b> who wanted additional copy of QR Code. <br>
                    <i><b>Note:</b> We will send your qr code directly to the email you entered.</i>
                </p>
                <button type="button" id="btn_modal" data-toggle="modal" data-target="#send_email"><b>Send QR through your email</b></button>
            </div>
        @endauth
    @endif
    </div>

    <!-- send email modal -->
    <div class="modal fade" id="send_email" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Send QR in your email.</h4>
                </div>
                <div class="modal-body">
                    <p>
                        Input your email below:<br><br>
                        <input type="text" placeholder="Input your email here" class="send_field">
                        <br><br>
                        Note that if you did not receive any messages from us, you haven't registered in our system.
                    </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-warning" data-dismiss="modal">Send</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>


    <!-- register individual modal -->
    <div class="modal fade" id="register_qr" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Register to get your Personal QR.</h4>
                </div>
                <form action="regis_indiv" method="POST">
                    <div class="modal-body">
                        
                            @csrf
                            <div class="form_contain">
                                <div>
                                    <h4>Full name</h4>
                                    <input type="text" placeholder="Lastname" name="lname" id="form_regis" autocomplete="off"><br>
                                    <input type="text" placeholder="Firstname" name="fname"id="form_regis" autocomplete="off"><br>
                                    <input type="text" placeholder="Middlename" name="mname"id="form_regis" autocomplete="off"><br>
                                </div>
                                <div>
                                    <h4>Address</h4>
                                    <input type="text" placeholder="Home No." name="num_h"id="form_regis" autocomplete="off"><br>
                                    <input type="text" placeholder="Street" name="st" id="form_regis" autocomplete="off"><br>
                                    <input type="text" placeholder="Barangay" name="brgy" id="form_regis" autocomplete="off"><br>
                                    <input type="text" placeholder="City" name="city" id="form_regis" autocomplete="off">
                                </div>
                                <div>
                                    <h4>Contact Info</h4>
                                    <input type="text" placeholder="Phone Number" name="p_num"id="form_regis" autocomplete="off"><br>
                                    <input type="text" placeholder="Email" name="email" id="form_regis" autocomplete="off"><br>
                                </div>
                            </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-danger">Register</button>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </form>  
            </div>
        </div>
    </div>

  <!-- This is the footer -->
  <footer>
    <p>
        <b>&#169; Segovia Development Corporation </b><br><br>
        For inquiries, contact US : <br><br>
        <i><b>Email: </b><u><a href="">helpIT@segoviadevelopment.com</a></u></i><br>
        <i><b>Landline Number: </b>12345678</i><br>
        <i><b>Phone Number: </b>+639123456789</i>
    </p>
    
</footer>
    <script>
      $(document).ready(function() {
          $("body").on("contextmenu", function(e) {
              return false;
            });
        });
    </script>
</body>
</html>