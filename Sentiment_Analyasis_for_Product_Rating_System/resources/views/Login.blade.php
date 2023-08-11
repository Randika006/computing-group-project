<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
    <link href="/css/custom.css" rel="stylesheet" />
    <!-- Font Awesome -->
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
      rel="stylesheet"
    />
    <!-- Google Fonts -->
    <link
      href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
      rel="stylesheet"
    />
    <!-- MDB -->
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.11.0/mdb.min.css"
      rel="stylesheet"
    />

    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;0,600;0,700;1,300&amp;display=swap"
      rel="stylesheet"
    />


    <script>
      function validateForm() {
        var x = document.forms["myForm"]["mail"].value;
        var y=document.forms["myForm"]["password"].value;

        var x=document.myForm.mail.value;  
        var atposition=x.indexOf("@");  
        var dotposition=x.lastIndexOf(".");  


        if (x == "") {
          alert("mail must be can not empty");
          return false;
        }else if(y==""){
          alert("password must be can not empty");
          return false;
        }

        if (atposition<1 || dotposition<atposition+2 || dotposition+2>=x.length){  
          alert("Please enter a valid e-mail address \n atpostion:"+atposition+"\n dotposition:"+dotposition);  
          return false;  
         }  


      }
      </script>
  </head>

  <body>
    <header>
      <?php include("./partials/nav.html"); ?>

      <div
        class="p-5 bg-light"
        style="background: gr; background: radial-gradient(#fff, #ffd6d6)"
      >
        <div class="row g-0">
          <div class="col-md-8">
            <h1 class="mb-3">First Sign In Here!</h1>
            
          </div>
        </div>
      </div>
      </header>

        <div class="container-sm" style="width: 50%;">
      <div class="p-5 text-center">
        <h2 class="title">Sign In</h2>
        </div>

          <div class="card">
          <div class="card-body p-5">

       
            @if (session('status'))
            <div class="alert alert-success" role="alert">
          <!--<button type="button" class="close" data-dismiss="alert"></button>-->
          {{ session('status') }}
            </div>
          @elseif(session('failed'))
           <div class="alert alert-danger" role="alert">
          <!--<button type="button" class="close" data-dismiss="alert"></button>-->
          {{ session('failed') }}
            </div>
           @endif   



<form  name="myForm"    action="form"    onsubmit="return validateForm()"     method="POST">
  @csrf
  <!-- Email input -->
  <div class="form-outline mb-4">
    <input type="email" id="form1Example1" class="form-control" />
    <label class="form-label" for="form1Example1">Email address</label>
    <input type="text" class="form-control" id="mail" name="mail">
  </div>

  <!-- Password input -->
  <div class="form-outline mb-4">
    <input type="password" id="form1Example2" class="form-control" />
    <label class="form-label" for="form1Example2">Password</label>
    <input type="password" class="form-control" id="password" name="password">

  </div>

  <!-- 2 column grid layout for inline styling -->
  <div class="row mb-4">
   
    <div class="col">
      <!-- Simple link -->

      <center><p>Don't have an Account ?<a href="http://127.0.0.1:8000/add">Sing Up</a> here</p></center>
    </div>
  </div>

  <!-- Submit button -->
  <button type="submit" class="btn btn-primary btn-block">Sign in</button>
</form>
          
     </div>
</div>


      </div>

        <br/>        <br/>
        <br/>
        <br/>
        <br/>



 <?php include("./partials/footer.html"); ?>



    <script
      type="text/javascript"
      src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.11.0/mdb.min.js"
    ></script>
  </body>
</html>
