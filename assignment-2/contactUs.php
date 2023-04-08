
 <!DOCTYPE html>
<html lang="en" class="back">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Contact Us</title>
 

 <link href="css/contactUs.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body class="back">

 <!--- Contact Us -->
 <div class="container mt-5 mb-5" id="last">
  <div class="container mt-5 mb-5" id="contact">
    <div class="row align-items-center">
      <div class="col">
        
        <div class="m-2" id="whyus" style="width: 18rem; ">
          <div class="card-body" id="picture">
            <div class="center-text">
            <h5 class="card-title" id="why">Find Us</h5>
            <p></p>
            <!-- <h6 class="card-subtitle mb-2 text-muted"></h6> -->
            <p class="card-text"><h5>Phone:</h5>+1 5589 55488 55s</p>
            <p class="card-text"><h5>Email:</h5>icare@example.com</p>
            <p class="card-text"><h5>Location:</h5>A108 Adam Street, New York, NY 535022</p>
            </div>
          </div>
        </div>
      </div>
   
      <div class="col m-2 card" id="talk-to">
      <form action="saveContact.php" method="POST">
        <h5 id="message">Talk To Us</h5>
        <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label mt-2">First Name</label>
          <input type="text" class="form-control" name="fname" placeholder="John">
        </div>
        <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label mt-2">Last Name</label>
          <input type="text" class="form-control" name="lname" placeholder="Doe">
        </div>
        <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label mt-2">Email address</label>
          <input type="email" class="form-control" name="address" placeholder="name@example.com">
        </div>
        <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label mt-2">Phone Number</label>
          <input type="number" class="form-control" name="phone_number" placeholder="Type your phone number here...">
        </div>
        <div class="mb-3">
          <label for="exampleFormControlTextarea1" class="form-label mt-2">Message</label>
          <textarea class="form-control" type="text" name="message" rows="3" placeholder="Type your message here..."></textarea>
        </div>
        <input type="submit" class="my_btn" value="Submit"></input>  
      </div>
        </div>
      </form>
    </div>
  </div>
  </div>
  <!--- End Contact Us -->


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>