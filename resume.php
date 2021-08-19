
<!DOCTYPE HTML>
<html>
<head>
  <meta charset="utf-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"/>
  <link rel="preconnect" href="https://fonts.googleapis.com"/>
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin/>
  <link href="https://fonts.googleapis.com/css2?family=Merriweather&display=swap" rel="stylesheet"/>
  <link rel="stylesheet" href="resume.css"/>

  <title>RESUME</title>
<style>

input [type=text], text, textarea {
  width: 50%;
}

#form1 {
width: 50%;
}

.content {
    display: block;
    padding: 10px;
    margin: 0px auto;
    text-align: center;
    font: 25px garamond, serif;
    font-size: 14px;
    width:250px;
}
.foot {
 display:inline;
    line-height: 70px;
}
.content img {
 height:100px;
    width: 200px;
    float:center;
}
</style>

<script>

function validateForm() {
let x = document.forms["portfolio"]["name"]["email"]["phone"].value;
if (x == "") {
  alert("must be filled out");
  return false;
}
}

</script>
</head>
<body>

  <header>
    <nav class="navbar container">
            <!-- Avatar and menu  -->
      <div class="container-fluid">
        <h1>  <a class="navbar-brand" href="#">RESUME</a> </h1>
      </div>
    </nav>
            <!-- End Avatar and Menu -->

    <div class="container justify text-center">

      <h1> PERSONAL DETAILS </h1>
        <p>James Becker <br>
            example@gmail.com <br>
            (557) 775-55-55
        </p>
    </div>
  </header>

  <main class="">
    <section class="container">


      <div class="row">
          <div class="col">
            <h3> Education </h3>
              <ul>
                <li> 2007-Studio Art Centers, Italy,</li>
                <li> 2011-Royal College of Art, London </li>
              </ul>
          </div>
          <div class="col">
            <h3>SKILLS</h3>
              <h6>HTML, CSS, BOOTSTRAP</h6>
            <div class="progress">
              <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 80%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">
              </div>
            </div>
            <h6>JAVASCRIPT</h6>
            <div class="progress">
              <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: 60%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
              </div>
            </div>
            <h6>MERN STACK</h6>
            <div class="progress">
              <div class="progress-bar progress-bar-striped bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <h6>DJANGO FRAMEWORK</h6>
            <div class="progress">
              <div class="progress-bar progress-bar-striped bg-warning" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>
      </div>
    <div class="row">

        <div class="col"><br>
          <h3>Experience</h3>
            <ul>
              <li>2013-Junior Frontend Developer,</li>
              <li>2015-Senior Backend Developer,</li>
              <li>2016-Lead FullStack Developer.</li>
            </ul>
        </div>
        <div class="col"><br>
          <h3>REFERENCES</h3>
            <ul>
              <li>Frank Dorsey</li>
              <li>Shawn Carter</li>
              <li>Mark Zuckerburg</li>
            </ul>
        </div>
      </div>
      <div class="row">
          <div class="col">

            <h3>Awards</h3>
              <ul>
                <li>2008-Best Showcase for NYT Wellness,</li>
                <li>2014-Honorable Mention for Nike</li>
              </ul>
        </div>


      </div>
    </section>


<?php
// define variables and set to empty values
$nameErr = $emailErr = $phoneErr = "";
$name = $email = $comment = $phone = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed";
    }
  }


  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  }

  if (empty($_POST["phone"])) {
    $phoneErr = "Phone number is required";
  } else {
    $phone = test_input($_POST["phone"]);
    // check if phone only contain numbers)
    if (!preg_match("/^[0-9]*$/",$phone)) {
      $phoneErr = "Invalid Phone Number";
    }
  }

  if (empty($_POST["comment"])) {
    $comment = "";
  } else {
    $comment = test_input($_POST["comment"]);
  }

}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
<div class="container">

<h2>CONTACT ME</h2>

  <form method="post" name="portfolio"  action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    Full Name: <input type="text" class="form-control" id="form1" name="name" required><br>


    E-mail: <input type="email" class="form-control" id="form1" name="email" required><br>

    Phone Number: <input type="tel" class="form-control" id="form1" placeholder="format - 08012345678" name="phone" pattern="[0-9]{11}" required><br>


    <p> MESSAGE ME</p>
    <textarea name="comment" rows="5" cols="40"></textarea>
      <br>
      <button onclick="myFunction()">SUBMIT</button><br>
      <script>
          function myFunction() {
            alert("MESSAGE SENT");
          }
      </script>
  </form>
</div>
<footer class="container">
  <div class="row">
    <div class="col">

    </div>

  </div>

  <?php
  if(isset($_POST['submit'])){
      $to = "laiyemosegun@gmail.com"; 
      $from = $_POST['email']; 
      $name = $_POST['name'];
      $subject = "Form submission";

      $message = $name . " " . " wrote the following:" . "\n\n" . $_POST['comment'];
      $message2 = "Here is a copy of your message " . $name . "\n\n" . $_POST['comment'];

      $headers = "From:" . $from;
      $headers2 = "From:" . $to;
      mail($to,$subject,$message,$headers);
      mail($from,$message2,$headers2) or die("Error!");
      echo "Message Sent. Thank you " . $name . ", we will contact you shortly.";   
      }
  ?>

</footer>
<div class="siteFooterBar container">
    <div class="content foot">
    <a target="_blank" href="https://training.zuri.team/">
      <img src="/zuri.png" width="200px" height="100px" align="center">
    </a>
      <div class="foot"><a target="_blank" href="https://training.zuri.team/">2021 © ZURI TRAINING</a> </div>
    </div>
</div>
</body>
</html>
