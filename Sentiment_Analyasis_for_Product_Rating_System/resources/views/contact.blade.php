<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact</title>
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
            <h1 class="mb-3">Contact Us!</h1>
            <h4 class="mb-3">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
            </h4>

          </div>
        </div>
      </div>
      </header>

                <div class="container-sm" style="width: 50%;">

      <div class="p-5 text-center">
      
       
        <h2 class="title">Contact Us Toady!</h2>
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
               
  <form action="add" method="POST">
  <!-- 2 column grid layout with text inputs for the first and last names -->
  @csrf
  <div class="row mb-4">
    <div class="col">
      <div class="form-outline">
        <input type="text" id="form3Example1" class="form-control" />
        <label class="form-label" for="form3Example1">First name</label>
        <input type="text" class="form-control" id="fname" name="fname">

      </div>
    </div>
    <div class="col">
      <div class="form-outline">
        <input type="text" id="form3Example2" class="form-control" />
        <label class="form-label" for="form3Example2">Last name</label>
        <input type="text" class="form-control" id="lname" name="lname">

      </div>
    </div>
  </div>
  <!-- 2 column grid layout with text inputs for the first and last names -->
  <div class="row mb-4">
    <div class="col">
      <div class="form-outline">
        <input type="text" id="form3Example1" class="form-control" />
        <label class="form-label" for="form3Example1">Email</label>
        <input type="text" class="form-control" id="mail" name="mail">

      </div>
    </div>
    <div class="col">
      <div class="form-outline">
        <input type="text" id="form3Example2" class="form-control" />
        <label class="form-label" for="form3Example2">Phone Number</label>
        <input type="text" class="form-control" id="tel" name="tel">

      </div>
    </div>
              </div>



  <!-- Password input -->
  <div class="form-outline mb-4">
    <input type="text" id="form3Example4" class="form-control" />
    <label class="form-label" for="form3Example4">How can we help you</label>
    <input type="text" class="form-control" id="description" name="description">

  </div>

  <!-- Checkbox -->
  <div class="form-check d-flex justify-content-center mb-4">
    <input class="form-check-input me-2" type="checkbox" value="" id="form2Example33" checked />
    <label class="form-check-label" for="form2Example33">
      Subscribe to our newsletter
    </label>
  </div>

  <!-- Submit button -->
  <button type="submit" class="btn btn-primary btn-block mb-4">Send Message</button>
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
