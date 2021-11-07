<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Coder Tamim</title>
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="img/logo.png" type="image/x-icon">
</head>
<body>
    <?php
    include "navbar.php";
    ?>
    <div class="logo">
        <img src="img/logo.png" alt="">
        <h3 class="smtxt">
            Assalamualikum
        </h3>
    </div>
    <br>
    <h1 class="about">
           About me
       </h1>
    <div class="about" id="about">
      
    
        
            <h4>
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Molestiae pariatur iste enim accusamus, qui, cum cupiditate ducimus repudiandae saepe quos voluptates placeat explicabo provident, nostrum itaque! Aut maxime nobis cupiditate facere itaque delectus libero non, saepe, voluptas iure, quae sunt? Quaerat optio vero esse quos ducimus, incidunt accusamus autem dolorem sed hic impedit velit est iusto molestiae sunt officiis eveniet. Vero aspernatur reprehenderit, minus quisquam quasi assumenda explicabo earum, aut temporibus dolore repellendus id fugiat, soluta deserunt unde dignissimos debitis veritatis numquam laboriosam quia ut error iusto labore minima. Perspiciatis magnam fuga ipsam ab temporibus dolorem, minima commodi nostrum velit quia porro repudiandae exercitationem esse consequuntur magni libero nihil! Molestias ipsam doloremque deleniti. Dolore ullam corporis tenetur sint sequi in sapiente vero omnis quisquam quam velit quas nesciunt laudantium voluptates est voluptatem, at molestiae soluta? Quibusdam, a dignissimos. Harum a repellat illo deserunt voluptate quod exercitationem libero similique ea cumque. Ipsum doloribus pariatur amet? Sit ipsum delectus non corrupti repellendus quaerat, exercitationem totam placeat saepe esse. Natus in omnis, quae architecto voluptate enim distinctio modi eveniet doloremque nemo quidem molestiae alias dolores dignissimos repellat exercitationem quasi! Obcaecati ad, sint molestias enim deserunt mollitia sunt magnam itaque iure! Adipisci, maiores asperiores?
            </h4>
    </div>
    <br>
    <div class="blog" id="blog">
    <div class="flip-card">
  <div class="flip-card-inner">
    <div class="flip-card-front">
      <h1>some text about blog</h1>
        <h4>Lorem ipsum dolor sit.</h4>
    </div>
    <div class="flip-card-back">
      <h1>John Doe</h1> 
      <p>Architect & Engineer</p> 
      <p>We love that guy</p>
    </div>
  </div>
</div>
<div class="flip-card">
  <div class="flip-card-inner">
    <div class="flip-card-front">
      <h1>some text about blog</h1>
        <h4>Lorem ipsum dolor sit.</h4>
    </div>
    <div class="flip-card-back">
      <h1>John Doe</h1> 
      <p>Architect & Engineer</p> 
      <p>We love that guy</p>
    </div>
  </div>
</div>
<div class="flip-card">
  <div class="flip-card-inner">
    <div class="flip-card-front">
      <h1>some text about blog</h1>
        <h4>Lorem ipsum dolor sit.</h4>
    </div>
    <div class="flip-card-back">
      <h1>John Doe</h1> 
      <p>Architect & Engineer</p> 
      <p>We love that guy</p>
    </div>
  </div>
</div>
<div class="flip-card">
  <div class="flip-card-inner">
    <div class="flip-card-front">
      <h1>some text about blog</h1>
        <h4>Lorem ipsum dolor sit.</h4>
    </div>
    <div class="flip-card-back">
      <h1>John Doe</h1> 
      <p>Architect & Engineer</p> 
      <p>We love that guy</p>
    </div>
  </div>
</div>
<div class="flip-card">
  <div class="flip-card-inner">
    <div class="flip-card-front">
      <h1>some text about blog</h1>
        <h4>Lorem ipsum dolor sit.</h4>
    </div>
    <div class="flip-card-back">
      <h1>John Doe</h1> 
      <p>Architect & Engineer</p> 
      <p>We love that guy</p>
    </div>
  </div>
</div>
<div class="flip-card">
  <div class="flip-card-inner">
    <div class="flip-card-front">
      <h1>some text about blog</h1>
        <h4>Lorem ipsum dolor sit.</h4>
    </div>
    <div class="flip-card-back">
      <h1>John Doe</h1> 
      <p>Architect & Engineer</p> 
      <p>We love that guy</p>
    </div>
  </div>
</div>
<div class="flip-card">
  <div class="flip-card-inner">
    <div class="flip-card-front">
      <h1>some text about blog</h1>
        <h4>Lorem ipsum dolor sit.</h4>
    </div>
    <div class="flip-card-back">
      <h1>John Doe</h1> 
      <p>Architect & Engineer</p> 
      <p>We love that guy</p>
    </div>
  </div>
</div>
<div class="flip-card">
  <div class="flip-card-inner">
    <div class="flip-card-front">
      <h1>some text about blog</h1>
        <h4>Lorem ipsum dolor sit.</h4>
    </div>
    <div class="flip-card-back">
      <h1>John Doe</h1> 
      <p>Architect & Engineer</p> 
      <p>We love that guy</p>
    </div>
  </div>
</div>
<?php
 $servername="localhost";
 $username="root";
 $password="";
 $database="mycontacts";
 $conn=mysqli_connect($servername,$username,$password,$database);
 if (!$conn) {
     echo mysqli_error($conn);
 }
 if ($_SERVER['REQUEST_METHOD'] == "POST") {
     $name=$_POST['name'];
     $email=$_POST['email'];
     $phone=$_POST['phone'];
     $msg=$_POST['msg'];
     $sql="INSERT INTO `contacts` (`name`, `email`, `msg`) VALUES ('$name', '$email', '$msg')";
     $result=mysqli_query($conn,$sql);
 }


?>
    </div>
    <div class="contact" id="contact">
        <h1 style="border: 2px solid white;text-align: center; color: aliceblue;" >Contact me</h1>
    <form action="index.php" method="post">
    <label for="fname">First Name</label>
    <input  style="color: #000;" type="text" id="fname" name="name" placeholder="Your name..">

    <label for="lname">Last Name</label>
    <input  style="color: #000;" class="email" type="email" id="lname" name="email" placeholder="Your email">

   

    <label for="subject">Subject</label>
    <textarea  style="color: #000;" id="subject" name="msg" placeholder="Write something.." style="height:200px"></textarea>

  <button type="submit" name="submit">Submit</button>
  </form>
    </div>
</body>
</html>