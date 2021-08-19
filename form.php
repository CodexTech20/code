
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
.error {color: #FF0000;}
</style>
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
          </div>
      </div>
    <div class="row">

        <div class="col">
          <h3>Experience</h3>
            <ul>
              <li>2013-Junior Ui/Ux Designer,</li>
              <li>2015-Senior Ui/Ux Designer,</li>
              <li>2016-Lead Ui/Ux Designer</li>
            </ul>
        </div>
        <div class="col">
          <h3>REFERENCES</h3>
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
<p><span class="error">* required field</span></p>
  <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    Full Name: <input type="text" class="form-control" name="name" value="<?php echo $name;?>">
      <span class="error">* <?php echo $nameErr;?></span>
      <br><br>
    E-mail: <input type="text" class="form-control" name="email" value="<?php echo $email;?>">
      <span class="error">* <?php echo $emailErr;?></span>
      <br><br>
    Phone Number: <input type="text" class="form-control" name="phone" value="<?php echo $phone;?>">
      <span class="error">* <?php echo $phoneErr;?></span>
      <br><br>
    Message Me: <textarea name="comment" rows="5" cols="40"><?php echo $comment;?></textarea>
      <br><br>
      <input type="submit" name="submit" value="Submit">
  </form>
</div>
<?php
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $phone;
echo "<br>";
echo $comment;
?>

</body>
</html>
