<!doctype html>
<html lang="en">
  <head>
    <title>Womens Footer</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- Bootstrap CSS -->
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
   <link href="/css/style.css" rel="stylesheet"/> 
   <link href="/css/style3.css" rel="stylesheet"/> 

   <link href="/css/search.css" rel="stylesheet"/> 


  
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css" />
   <style>
    .Cheight {
      height:40px;
     }
  </style>
</head>
  <body>
    <!--<div class="bg-danger"> *We delivery within 2-3 days within Colombo,Out of Colombo within 3-4 working days-Delivery delay may occur due to COVID-19* </div>-->
    <!-- Navbar -->
    <?php include("./partials/nav.html"); ?>

<!-- Navbar -->

    
<!--Search Bar-->
        <div class="container">
            <form action="https://www.google.com/search" method="get" target="_blank" id="search-form">
            <input name="q" type="text" placeholder="Search here..." autocomplete="off" autofocus>
            <!-- <button type="button"><i class="fas fa-microphone"></i></button> -->
            </form>
            <p class="info"></p>
            </div>


        <script>
          const searchForm = document.querySelector("#search-form");
          const searchFormInput = searchForm.querySelector("input"); // <=> document.querySelector("#search-form input");
          const info = document.querySelector(".info");

           // The speech recognition interface lives on the browser’s window object
          const SpeechRecognition = window.SpeechRecognition || window.webkitSpeechRecognition; // if none exists -> undefined

        if(SpeechRecognition) {
          console.log("Your Browser supports speech Recognition");
  
           const recognition = new SpeechRecognition();
           recognition.continuous = true;
          // recognition.lang = "en-US";

         searchForm.insertAdjacentHTML("beforeend", '<button type="button"><i class="fas fa-microphone"></i></button>');
         searchFormInput.style.paddingRight = "50px";

        const micBtn = searchForm.querySelector("button");
        const micIcon = micBtn.firstElementChild;

      micBtn.addEventListener("click", micBtnClick);
      function micBtnClick() {
       if(micIcon.classList.contains("fa-microphone")) { // Start Voice Recognition
      recognition.start(); // First time you have to allow access to mic!
     }
     else {
      recognition.stop();
    }
   }

  recognition.addEventListener("start", startSpeechRecognition); // <=> recognition.onstart = function() {...}
  function startSpeechRecognition() {
    micIcon.classList.remove("fa-microphone");
    micIcon.classList.add("fa-microphone-slash");
    searchFormInput.focus();
    console.log("Voice activated, SPEAK");
  }

  recognition.addEventListener("end", endSpeechRecognition); // <=> recognition.onend = function() {...}
  function endSpeechRecognition() {
    micIcon.classList.remove("fa-microphone-slash");
    micIcon.classList.add("fa-microphone");
    searchFormInput.focus();
    console.log("Speech recognition service disconnected");
  }

  recognition.addEventListener("result", resultOfSpeechRecognition); // <=> recognition.onresult = function(event) {...} - Fires when you stop talking
  function resultOfSpeechRecognition(event) {
    const current = event.resultIndex;
    const transcript = event.results[current][0].transcript;
    
    if(transcript.toLowerCase().trim()==="stop recording") {
      recognition.stop();
    }
    else if(!searchFormInput.value) {
      searchFormInput.value = transcript;
    }
    else {
      if(transcript.toLowerCase().trim()==="go") {
        searchForm.submit();
      }
      else if(transcript.toLowerCase().trim()==="reset input") {
        searchFormInput.value = "";
      }
      else {
        searchFormInput.value = transcript;
      }
    }
    // searchFormInput.value = transcript;
    // searchFormInput.focus();
    // setTimeout(() => {
    //   searchForm.submit();
    // }, 500);
  }
  
  //info.textContent = 'Voice Commands: "stop recording", "reset input", "go"';
  
}
else {
  console.log("Your Browser does not support speech Recognition");
  info.textContent = "Your Browser does not support Speech Recognition";
}
</script>
         
    
    <section class="testimonials">
           
        <div class="container py-5">
            <!-- For Demo Purpose-->
            <header class="text-center mb-5">
              <h1 class="display-4 font-weight-bold">Womens' Footer</h1>
              
            </header>
          
          
            <div class="row pb-5 mb-4">
              <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
                <!-- Card-->
                <div class="card rounded shadow-sm border-0">
                  <div class="card-body p-4"><img src="/img/CShoe.jpg" alt="" class="img-fluid d-block mx-auto mb-3">
                    <h5 class="card-title p1">Rs Rs 7,490</h5>

                    <h5> <a href="http://127.0.0.1:8000/CShoe" class="text-dark">CRICKET SHOE CS 100 BLUE SR</a></h5>
                    <p class="small text-muted font-italic">TARMAK</p>
                    <br/>
                    <ul class="list-inline small">
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"><a href="" class="a3" target="_blank">2 reviews</a></span>
                        
                    </ul>
                     <div class="BOTTOM"></div>
                     
                    <div class="card-text p5">&#11044; In Stock</div>

                  </div>
                </div>
              </div>
          
              <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
                <!-- Card-->
                <div class="card rounded shadow-sm border-0">
                  <div class="card-body p-4"><img src="/img/sandls.jpg" alt="" class="img-fluid d-block mx-auto mb-3">
                    <h5 class="card-title p1">Rs 4,790</h5>

                    <h5> <a href="http://127.0.0.1:8000/sandles" class="text-dark">Sandals NH50 - Black</a></h5>
                    <p class="small text-muted font-italic">QUECHUA</p>
                    <br/>
                    <ul class="list-inline small">
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked1"></span>
                        <span class="fa fa-star checked1"><a href="" class="a3" target="_blank">2 reviews</a></span>
                    </ul>
                    <div class="BOTTOM"></div>
                     
                    <div class="card-text p5">&#11044; In Stock</div>
                  </div>
                </div>
              </div>
          
              <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
                <!-- Card-->
                <div class="card rounded shadow-sm border-0">
                  <div class="card-body p-4"><img src="/img/socks.jpg" alt="" class="img-fluid d-block mx-auto mb-3">
                    <h5 class="card-title p1">Rs 990</h5>

                    <h5> <a href="http://127.0.0.1:8000/socks" class="text-dark">NH100 High country walking socks - grey x 2 pairs</a></h5>
                    <p class="small text-muted font-italic">TARMAK</p>
                    <br/>
                    <ul class="list-inline small">
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"><a href="" class="a3" target="_blank">2 reviews</a></span>
                      </ul>
                      <div class="BOTTOM"></div>
                    <div class="card-text p5">&#11044; In Stock</div>
                  </div>
                </div>
              </div>
          
              <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
                <!-- Card-->
                <div class="card rounded shadow-sm border-0">
                  <div class="card-body p-4"><img src="/img/FWalking.jpg" alt="" class="img-fluid d-block mx-auto mb-3">
                    <h5 class="card-title p1">Rs 990</h5>

                    <h5> <a href="http://127.0.0.1:8000/Shoe123" class="text-dark">RUN CUSHION MEN'S RUNNING SHOES - BLUE/BLACK</a></h5>
                    <p class="small text-muted font-italic">TARMAK</p>
                    <br/>
                    <ul class="list-inline small">
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"><a href="" class="a3" target="_blank">1 reviews</a></span>
                  </ul>
                  <div class="BOTTOM"></div>
                  <div class="card-text p5">&#11044; In Stock</div>
                  </div>
                </div>
              </div>
            </div>    
    </section>

    
<!-- Footer -->
<footer class="text-center text-lg-start bg-light text-muted content1">
  <!-- Section: Social media -->
  <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom ">
      <!-- Left -->
      <div class="me-5 d-none d-lg-block ">
          <span><strong>Get connected with us on social networks:</strong></span>
      </div>
      <!-- Left -->

      <!-- Right -->
      <div>
          <a href=" " class="me-4 text-reset ">
              <i class="fab fa-facebook-f "></i>
          </a>
          <a href=" " class="me-4 text-reset ">
              <i class="fab fa-twitter "></i>
          </a>
          <a href=" " class="me-4 text-reset ">
              <i class="fab fa-google "></i>
          </a>
          <a href=" " class="me-4 text-reset ">
              <i class="fab fa-instagram "></i>
          </a>
          <a href=" " class="me-4 text-reset ">
              <i class="fab fa-linkedin "></i>
          </a>
          <a href=" " class="me-4 text-reset ">
              <i class="fab fa-github "></i>
          </a>
      </div>
      <!-- Right -->
  </section>
  <!-- Section: Social media -->

  <!-- Section: Links  -->
  <section class=" ">
      <div class="container text-center text-md-start mt-5 ">
          <!-- Grid row -->
          <div class="row mt-3 ">
              <!-- Grid column -->

              <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4 ">
                  <!-- Content -->
                  <h6 class="text-uppercase fw-bold mb-4 ">
                      <div class="Cheight">
                      </div>
                      <i class="fas fa-gem me-3 "></i>

                      <strong>Company name</strong>
                  </h6>
                  <p>
                      <b>Here you can use rows and columns to organize your footer content. Lorem ipsum dolor sit amet, consectetur adipisicing elit.</b>
                  </p>
              </div>
              <!-- Grid column -->

              <!-- Grid column -->
              <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4 ">
                  <!-- Links -->
                  <div class="Cheight">
                  </div>
                  <h6 class="text-uppercase fw-bold mb-4 ">
                      <b>Products</b>
                  </h6>
                  <p>
                      <a href="#! " class="text-reset ">
                          <b>Angular</b></a>
                  </p>
                  <p>
                      <a href="#! " class="text-reset ">
                          <b>React</b></a>
                  </p>
                  <p>
                      <a href="#! " class="text-reset ">
                          <b>Vue</b></a>
                  </p>
                  <p>
                      <a href="#! " class="text-reset ">
                          <b>Laravel</b></a>
                  </p>
              </div>
              <!-- Grid column -->

              <!-- Grid column -->
              <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4 ">
                  <!-- Links -->
                  <div class="Cheight">
                  </div>
                  <h6 class="text-uppercase fw-bold mb-4 ">
                      <b>Useful links</b>
                  </h6>
                  <p>
                      <a href="#! " class="text-reset ">
                      </a><b>Pricing</b></a>
                  </p>
                  <p>
                      <a href="#! " class="text-reset ">
                          <b>Settings</b></a>
                  </p>
                  <p>
                      <a href="#! " class="text-reset ">
                          <b>Orders</b></a>
                  </p>
                  <p>
                      <a href="#! " class="text-reset ">
                          <b>Help</b></a>
                  </p>
              </div>
              <!-- Grid column -->

              <!-- Grid column -->
              <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4 ">
                  <!-- Links -->
                  <h6 class="text-uppercase fw-bold mb-4 ">
                      <b>Contact</b>
                  </h6>
                  <p><i class="fas fa-home me-3 "></i>
                      <b>Colombo,Nugegoda</b></p>
                  <p>
                      <i class="fas fa-envelope me-3 "></i>
                      <b>decksport@gmail.com</b>
                  </p>
                  <p><i class="fas fa-phone me-3 "></i>
                      <b>+ 01 234 567 88</b></p>
                  <p><i class="fas fa-print me-3 "></i>
                      <b>+ 01 234 567 89</b></p>
              </div>
              <!-- Grid column -->
          </div>
          <!-- Grid row -->
      </div>
  </section>
  <!-- Section: Links  -->

  <!-- Copyright -->
  <div class="text-center p-4 " style="background-color: rgba(0, 0, 0, 0.05); ">
      <b>© 2021 Copyright:</b>
      <a class="text-reset fw-bold " href="/ ">
          <b>shop</b>
      </a>
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->
   
    <!-- End of .container -->
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="/script/script.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>
    <script>
        baguetteBox.run('.cards-gallery', {
            animation: 'slideIn'
        });
    </script>


  </body>
</html>