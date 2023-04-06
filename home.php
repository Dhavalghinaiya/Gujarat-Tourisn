<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="style.css" type="text/css" />
  <title>Welcome To Tourisum Portal</title>
  <link rel = "icon" href="images/gujaratlogo.jpg"></link>
</head>

<body>

<div>
  <?php
 
  alert("SESSION IS SET");
  
  function alert($msg) {
      echo "<script type='text/javascript'>alert('$msg');</script>";
  }


if (!isset($_COOKIE['count'])) { 
  echo "<script>alert ('Welcome! This is the first time you have viewed this page.')</script>"; 
  $cookie = 1;
  setcookie("count", $cookie);
}else{
  $cookie = ++$_COOKIE['count'];
  setcookie("count", $cookie,time() + 6); 
  echo "<script>alert ('You have viewed this page $cookie times.')</script>"; 
  }
?>
</div>

  <header>
    <nav>
      <div class="main">
        
        <ul class="main-list">
          <li class="active main-list-item"><a href="home.html">Home</a></li>
          <li class="main-list-item"><a href="famousplaces.html">Famous Places</a></li>
          <li class="main-list-item"><a href="videos.html">Videos</a></li>
          <li class="main-list-item"><a href="Aboutus.html">About us</a></li>
          <li class="main-list-item"><a href="contactus.html">Contact Us</a></li>
          <li class="main-list-item"><a href="webserch.html" ><i class="fa fa-search" aria-hidden="true" ></i></a></li>
          <li style="margin-left: 40px; " class="main-list-item"><a href="index.php">logout</a></li>
          <li style="margin-left: 50px; " class="main-list-item">

          <img src="Upload/<?php echo $_SESSION['image']; ?>" width="50px" height="50px" alt="Avatar" class="avatar">
            
          </li>
         
      </div>
    </nav>
    <div class="title">
      <span class="heading">Welcome To Gujarat Tour</span>
    </div>
  </header>

  <div class="page-wrapper">
    <main>
      <section>
        <div class="page-wrapper">
          <div class="history">
            <h1 class="history-heading1">History of Gujarat</h1>
            <table >
              <tr >
                <td>
                  <div style="float: left; margin-left: 200px; margin-right: 200px; margin-top: -50px;" align="justify">
                    <span class="history-caption" >"Gujarat draws its name from the Gurjara, who ruled the area during the 8th and 9th centuries ce. 
                      The state assumed its present form in 1960, when the former Bombay state was divided between Maharashtra and Gujarat on the basis of language."</span>
                      </div>
                </td>
                <td>
                    <img class="shake" src="images/gujaratlogo.jpg" alt="image" style="height: 300px; margin-right: 50px; width: 600px; background-size:cover; margin-left: 10px; border: 2px solid black; border-style:dashed; border-radius: 500px;">
                  
                </td>
              </tr>
            </table>
          </div>
            <h3 class="history-heading2">Gujarat</h3>
            <table style="margin-top: 100px; margin-left: 100px;">
              <tr>
                <td style="height: 500px; width: 500px;">
                  <div class="slides slowFade" >
                    <div class="slide">
                        <img src="images/1.jpg" alt="img"/ style="background-size: 100% 100%;">
                    </div>
                    <div class="slide">
                        <img src="images/2.jpg" alt="img"/ style="background-size: 100% 100%;">
                    </div>
                    <div class="slide">
                        <img src="images/3.jpg" alt="img"/ style="background-size: 100% 100%;">
                    </div>
                    <div class="slide">
                        <img src="images/gujaratlogo.jpg" alt="img"/ style="background-size: 100% 100%;">
                    </div>
                    <!-- <div class="slide">
                      <img src="images/gujaratlogo.jpg" alt="img"/ style="background-size: 100% 100%;">
                  </div> -->
                  </div>
                </td>
                <td style="display: flex; top: 20%;">
                  <div style="float: left; margin-left: 100px; margin-right: 100px; font-size: large; margin-top: 50px;" align="justify">
                    <p class="history-gujarat" style="margin-left: 20%;">
                      Much of the culture of Gujarat reflects the mythology surrounding the Hindu deity Krishna,
                      as transmitted in the Puranas, a class of Hindu sacred literature. The older rasnritya and 
                      raslila dance traditions honouring Krishna find their contemporary manifestation in the popular 
                      dance called garba. The dance is performed primarily at the Navratri festival, which honours 
                      the divine feminine; dancers move in a circle, singing and keeping time by clapping their hands. 
                      Also commonly performed at Navratri is bhavai, a type of popular, rural, comic drama that depicts 
                      various aspects of rural life. All of the roles in bhavai—both male and female—are played by men.
                    </p>
                  </div>
                </td>
              </tr>
            </table>
              
            
            
            
            <h3 class="history-heading2" style="margin-top: 50px;">Famous Work In Gujarat</h3>
            <p class="history-para" style="margin-left: 70px;">Gujarat is famous for its classy thread work.
              <strong>'Zari'</strong> industry based in Surat and <strong>'Kathi'</strong> embroidery of Kutch are the best examples of thread works..</p>
                
            <div class="row" style="margin-left: 10%;">
              <div class="column">
                <img src="images/handicraft.jpg" style="height: 280px;">

              </div>
              <div class="column">
                <img src="images/handmade.jpg" style="height: 280px;">


              </div>
              <div class="column">
                <img src="images/mati.jpg" style="height: 280px;">
              </div>
              <div class="column">
                <img src="images/bharatkam.jpg" style="height: 280px;">

              </div>

            </div>

          </div>
        </div>
      </section>
    </main>
  </div>
                      

  <div id="id01" class="modal">
  
</div>



  <script>
var modal = document.getElementById('id01');
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}

</script>

</body>

</html>