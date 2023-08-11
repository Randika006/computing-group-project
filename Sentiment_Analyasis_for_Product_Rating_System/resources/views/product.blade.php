<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home page</title>
    <link href="/css/custom.css" rel="stylesheet" />
    <!-- Font Awesome -->
    <!--<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet"/>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.11.0/mdb.min.css" rel="stylesheet"/>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;0,600;0,700;1,300&amp;display=swap" rel="stylesheet"/>-->
 <style> 
body {
  padding: 10px;
  font-family: 'Calibri';
}

body * {
  box-sizing: none;
}

a,
a:hover,
a:focus,
a:active {
  text-decoration: none;
  color: #555;
}

.win7-btn {
  margin-right: 10px;
  border-radius: 3px;
  border: 1px solid #ddd;
  padding: 3px 15px 3px 15px;
  background: #f2f2f2;
  background: -moz-linear-gradient(top, #f2f2f2 0%, #ebebeb 42%, #dddddd 47%, #cfcfcf 100%);
  background: -webkit-linear-gradient(top, #f2f2f2 0%, #ebebeb 42%, #dddddd 47%, #cfcfcf 100%);
  background: linear-gradient(to bottom, #f2f2f2 0%, #ebebeb 42%, #dddddd 47%, #cfcfcf 100%);
  filter: progid: DXImageTransform.Microsoft.gradient( startColorstr='#f2f2f2', endColorstr='#cfcfcf', GradientType=0);
  transition: all 0.1s ease-in;
  border: 1px solid #707070;
}

.win7-btn:hover,
.win7-btn:focus {
  outline: 0;
  background: #eaf6fd;
  background: -moz-linear-gradient(top, #eaf6fd 0%, #d9f0fc 42%, #bee6fd 47%, #bce5fc 58%, #a7d9f5 100%);
  background: -webkit-linear-gradient(top, #eaf6fd 0%, #d9f0fc 42%, #bee6fd 47%, #bce5fc 58%, #a7d9f5 100%);
  background: linear-gradient(to bottom, #eaf6fd 0%, #d9f0fc 42%, #bee6fd 47%, #bce5fc 58%, #a7d9f5 100%);
  filter: progid: DXImageTransform.Microsoft.gradient( startColorstr='#eaf6fd', endColorstr='#a7d9f5', GradientType=0);
  border: 1px solid #3C7FB1;
  box-shadow: 0 0 3px #A7D9F5;
  -o-box-shadow: 0 0 3px #A7D9F5;
  -webkit-box-shadow: 0 0 3px #A7D9F5;
  -moz-box-shadow: 0 0 3px #A7D9F5;
}

.win7-btn:active {
  box-shadow: inset 0 -1px 6px rgba(0, 0, 0, 0.2), inset 0 -0.7em #BEE6FD, 0 0 3px #A7D9F5;
  -o-box-shadow: inset 0 -1px 6px rgba(0, 0, 0, 0.2), inset 0 -0.7em #BEE6FD, 0 0 3px #A7D9F5;
  -webkit-box-shadow: inset 0 -1px 6px rgba(0, 0, 0, 0.2), inset 0 -0.7em #BEE6FD, 0 0 3px #A7D9F5;
  -moz-box-shadow: inset 0 -1px 6px rgba(0, 0, 0, 0.2), inset 0 -0.7em #BEE6FD, 0 0 3px #A7D9F5;
}

.winCl-wrap {
  border: 1px solid #000;
  display: inline;
  margin-right: 10px;
  padding-top: 1px;
  padding-bottom: 3px;
  background: #c6c6c6;
}

.winCl-btn {
  border-left: 1px solid #fff;
  border-top: 1px solid #fff;
  border-right: 1px solid #848484;
  border-bottom: 1px solid #848484;
  background-color: transparent;
  padding: 3px 15px 3px 15px;
}

.winCl-btn:hover,
.winCl-btn:focus {
  outline: 0;
}

.winCl-btn:active {
  border-right: 1px solid #fff;
  border-bottom: 1px solid #fff;
  border-left: 1px solid #848484;
  border-top: 1px solid #848484;
}

.winXP-wrap {
  border: 1px solid RGB(1, 63, 102);
  margin-right: 10px;
  border-radius: 3px;
  display: inline;
  margin-right: 10px;
  padding-top: 2px;
  padding-bottom: 4px;
  background: #f6f6f6;
  background: -moz-linear-gradient(top, #f6f6f6 0%, #ffffff 6%, #fffdfe 12%, #fbf9fa 18%, #f8f7f5 41%, #f7f3f0 47%, #f8f3ef 82%, #e7e0d8 94%, #dad3c9 100%);
  background: -webkit-linear-gradient(top, #f6f6f6 0%, #ffffff 6%, #fffdfe 12%, #fbf9fa 18%, #f8f7f5 41%, #f7f3f0 47%, #f8f3ef 82%, #e7e0d8 94%, #dad3c9 100%);
  background: linear-gradient(to bottom, #f6f6f6 0%, #ffffff 6%, #fffdfe 12%, #fbf9fa 18%, #f8f7f5 41%, #f7f3f0 47%, #f8f3ef 82%, #e7e0d8 94%, #dad3c9 100%);
  filter: progid: DXImageTransform.Microsoft.gradient( startColorstr='#f6f6f6', endColorstr='#dad3c9', GradientType=0);
}

.winXP-btn {
  padding: 3px 15px 3px 15px;
  border: 2px solid transparent;
  background: transparent;
}

.winXP-btn:hover,
.winXP-btn:focus {
  outline: 0;
  border: 2px solid #B9D0F0;
}

.winXP-btn:active {
  background: #dad3c9;
  background: -moz-linear-gradient(top, #dad3c9 0%, #e7e0d8 6%, #f8f3ef 18%, #f7f3f0 53%, #f8f7f5 59%, #fbf9fa 82%, #fffdfe 88%, #ffffff 94%, #f6f6f6 100%);
  background: -webkit-linear-gradient(top, #dad3c9 0%, #e7e0d8 6%, #f8f3ef 18%, #f7f3f0 53%, #f8f7f5 59%, #fbf9fa 82%, #fffdfe 88%, #ffffff 94%, #f6f6f6 100%);
  background: linear-gradient(to bottom, #dad3c9 0%, #e7e0d8 6%, #f8f3ef 18%, #f7f3f0 53%, #f8f7f5 59%, #fbf9fa 82%, #fffdfe 88%, #ffffff 94%, #f6f6f6 100%);
  filter: progid: DXImageTransform.Microsoft.gradient( startColorstr='#dad3c9', endColorstr='#f6f6f6', GradientType=0);
}

.clear {
  height: 10px;
}

.Cheight {
  height:40px;
}

 </style>



<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link href="/css/style.css" rel="stylesheet"/> 
<link href="/css/search.css" rel="stylesheet"/> 

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css" />

</head>

  <body>
    <header>
      <?php include("./partials/nav2.html"); ?>
      <br/>
      <!--Search Bar-->
      <div class="container">
        <form action="http://127.0.0.1:8000/top" method="get" target="_blank" id="search-form">
        <input name="q" type="text" placeholder="Search here..." autocomplete="off" autofocus>
        <!-- <button type="button"><i class="fas fa-microphone"></i></button> -->
        </form>
        <p class="info"></p>
        </div>
        <!--<p>https://www.google.com/search</p>-->

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

      

      <div class="p-5 bg-light" style="background: gr; background: radial-gradient(#fff, #ffd6d6)">
        <div class="row g-0">
          <div class="col-md-4">
            <img src="https://pngimg.com/uploads/football_player/football_player_PNG30.png" alt="Trendy Pants and Shoes" class="img-fluid rounded-start"/>
          </div>
          <div class="col-md-8">
            <h1 class="mb-3 mt-5">Give Your Workout A New Style!</h1>
            <h4 class="mb-3 m-2">
              Success isn't always about greatness. It's about consistency.
              Consistent hard work gains success. Greatness will come.
            </h4>

            <!--<a class="btn btn-primary mt-5" href="/" role="button"><font color="black">Explore Now</font></a>-->
           
             <input class="win7-btn" type="button" value="Explore Now"  />

          </div>
        </div>
      </div>
    </header>

      <!--
    <div class="container-sm">
      <div class="p-5 text-center">
        <h2 class="title">Some Text Here.</h2>
      </div>

      <?php //include("./partials/carousel.html"); ?>
</div>
-->
    <div class="container-sm">
      <div class="p-5 text-center">
        <h2 class="title">Featured Products.</h2>
      </div>

      <div class="row row-cols-1 row-cols-md-4 g-4">
        <div class="col">
          <div class="card">
              <div class="bg-image hover-zoom card-img-top">
              <img src="/img/SS 10.jpg" class="card-img-top" />
            </div>

            <div class="card-body">
              <h5 class="card-title"><a href="http://127.0.0.1:8000/running_blue_tshirt" class="a1" target="_blank">RUN DRY MENS RUNNING T-SHIRT - PETROL BLUE</a>
              </h5>
              <div class="rating">
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span>
              </div>

              <p class="card-text">
                <code> 1200.00 lkr </code>
              </p>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card">
         
            <div class="bg-image hover-zoom card-img-top">
              <img src="/img/SS 11.jpg" class="card-img-top" />
            </div>

            <div class="card-body">
              <h5 class="card-title"><a href="http://127.0.0.1:8000/keepdry_layer" class="a1" target="_blank">KEEPDRY 100 ADULT BASE LAYER TOP - BLACK</a>
              </h5>
              <div class="rating">
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span>
              </div>

              <p class="card-text">
                <code> 1400.00 lkr </code>
              </p>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card">
           
              <div class="bg-image hover-zoom card-img-top">
              <img src="/img/SS 12.jpg" class="card-img-top" />
            </div>

            <div class="card-body">
              <h5 class="card-title"><a href="http://127.0.0.1:8000/running_grey_tshirt" class="a1" target="_blank">RUN DRY MENS RUNNING T-SHIRT - GREY</a></h5>
              <div class="rating">
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span>
              </div>

              <p class="card-text">
                <code> 1500.00 lkr </code>
              </p>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card">
           
               <div class="bg-image hover-zoom card-img-top">
              <img src="/img/SS 13.jpg" class="card-img-top" />
            </div>


            <div class="card-body">
              <h5 class="card-title"><a href="http://127.0.0.1:8000/top_black" class="a1" target="_blank">RUN DRY MENS RUNNING TANK TOP BLACK</a></h5>
              <div class="rating">
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span>
              </div>

              <p class="card-text">
                <code> 1600.00 lkr </code>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>


    
    <div class="container-sm">
      <div class="p-5 text-center">
        <h2 class="title">Latest Products.</h2>
      </div>

      <div class="row row-cols-1 row-cols-md-4 g-4">
        <div class="col">
          <div class="card">
           
              <div class="bg-image hover-zoom card-img-top">
              <img src="./img/dryred.PNG" class="card-img-top" height="478px"/>
            </div>

            <div class="card-body">
              <h5 class="card-title"><a href="http://127.0.0.1:8000/red_tshirt" class="a1" target="_blank">RUN DRY MENS RUNNING T-SHIRT - RED</a></h5>
              <div class="rating">
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span>
              </div>

              <p class="card-text">
                <code> 1200.00 lkr </code>
              </p>
            </div>
          </div>
        </div>
            <div class="col">
          <div class="card">
           
               <div class="bg-image hover-zoom card-img-top">
              <img src="/img/SS 14.jpg" class="card-img-top" />
            </div>


            <div class="card-body">
              <h5 class="card-title"><a href="http://127.0.0.1:8000/red_bike" class="a1" target="_blank">BTWIN ROCKRIDER 340 RED MTB CYCLE</a></h5>
              <div class="rating">
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span>
              </div>

              <p class="card-text">
                <code> 1200.00 lkr </code>
              </p>
            </div>
          </div>
        </div>
            <div class="col">
          <div class="card">
         

              <div class="bg-image hover-zoom card-img-top">
              <img src="/img/SS 16.jpg" class="card-img-top" />
            </div>

            <div class="card-body">
              <h5 class="card-title"><a href="http://127.0.0.1:8000/men_non_stretchable" class="a1" target="_blank">Men's Non-Stretchable Fitness Workout Track Pants - Black</a></h5>
              <div class="rating">
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span>
              </div>

              <p class="card-text">
                <code> 1200.00 lkr </code>
              </p>
            </div>
          </div>
        </div>
            <div class="col">
          <div class="card">
          
                 <div class="bg-image hover-zoom card-img-top">
              <img src="/img/SS 18.jpg" class="card-img-top" />
            </div>

            <div class="card-body">
              <h5 class="card-title"><a href="http://127.0.0.1:8000/knife_black" class="a1" target="_blank"> Axis 85 Folding Knife Black</a></h5>
              <div class="rating">
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span>
              </div>

              <p class="card-text">
                <code> 1200.00 lkr </code>
              </p>
            </div>
          </div>
        </div>
             
      </div>
    </div>

      <br />
    <div class="container-sm">
      <div class="p-5 text-center">
        <h2 class="title">Exclusively Available On Stanford Store</h2>
      </div>

      <?php include("./partials/featureproduct.html"); ?>
    </div>



          <br />
    <div class="container-sm">
      <div class="p-5 text-center">
        <h2 class="title">From Our Customers</h2>
      </div>


        <div class="row row-cols-1 row-cols-md-3 g-4">

<div class="col">
          <div class="container">
  <section class="mx-auto my-5" style="max-width: 23rem;">
      
    <div class="card testimonial-card mt-2 mb-3">
      <div class="card-up aqua-gradient"></div>
      <div class="avatar mx-auto white">
        <img src="/img/SS 26.jpg" class="rounded-circle img-fluid"
          alt="woman avatar" height="50" width="360">
      </div>
      <div class="card-body text-center">
        <h4 class="card-title font-weight-bold">Olivia Smith</h4>
        <hr>
        <p><i class="fas fa-quote-left"></i>There is huge collection of sport items available</p>
      </div>
    </div>
    
  </section>
          </div>
        </div>
          <div class="col">
          <div class="container">
  <section class="mx-auto my-5" style="max-width: 23rem;">
      
    <div class="card testimonial-card mt-2 mb-3">
      <div class="card-up aqua-gradient"></div>
      <div class="avatar mx-auto white">
        <img src="/img/pic2.png" class="rounded-circle img-fluid"
          alt="woman avatar">
      </div>
      <div class="card-body text-center">
        <h4 class="card-title font-weight-bold">S.Jayaweera</h4>
        <hr>
        <p><i class="fas fa-quote-left"></i>simple and easy to use this site and love the collection</p>
      </div>
    </div>
    
  </section>
          </div>
        </div>
          <div class="col">
          <div class="container">
  <section class="mx-auto my-5" style="max-width: 23rem;">
      
    <div class="card testimonial-card mt-2 mb-3">
      <div class="card-up aqua-gradient"></div>
      <div class="avatar mx-auto white">
        <img src="/img/pic5.png" class="rounded-circle img-fluid"
          alt="woman avatar" >
      </div>
      <div class="card-body text-center">
        <h4 class="card-title font-weight-bold">Lora Andrea</h4>
        <hr>
        <p><i class="fas fa-quote-left"></i>Reasonable prices for our Budget and need more items</p>
      </div>
    </div>
    
  </section>
          </div>
    </div>
      </div>

    </div>
      <br />
      <br />
      <br />

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
    <script>
      function myFunction() {
        window.open("http://127.0.0.1:8000/items");
      }
      </script>

    <script
      type="text/javascript"
      src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.11.0/mdb.min.js"
    ></script>



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

      <script src="https://apps.elfsight.com/p/platform.js" defer></script>
<div class="elfsight-app-54a4b29b-1ef4-43dc-9af3-0921ff7f2af7"></div>

</html>
