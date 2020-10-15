<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  background-image: url('wecareforyou.jpeg');
  background-repeat: no-repeat;
  background-position: center;
  background-size: cover;
  backface-visibility: hidden;
}
form {
  border: 3px solid #f1f1f1;
}

input[type=text]{
  width: auto;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
  align-items: center;
}

button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}
h1{
  text-align: center;
  font-size: 14;
  text-decoration-style: wavy;
}
h2{
text-align:center;
text-decoration-style: solid;
text-shadow: 10%;
}
h3{
  text-align: center;
  text-decoration-style: double;
}
button:hover {
  opacity: 0.8;
}


.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
}

img.wecareforyou {
  width: 40%;
  border-radius: 50%;
}

.container {
  padding: 10px;
  text-align:center;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
</style>
</head>
<body>
  <div class="container" style="background-color:#9400d3">
      <marquee>Disclimar: All 2017-2021 Passedout Students(721 Students) data is Considered for calucualating Rank and Average Percentiles</marquee>
  </div>
<div class="container" style="background-color:#7fffd4">
    <h1>GITAM <h1>
    <h1>Diractrate of Training and Placemets</h1>
</div>
<div class="container" style="background-color:#ffdab9">
    <h2>Internal Asssisment Results 2017-2021 Batch</h2>
</div>
<form action="result.php" method="post">
  <div class="imgcontainer">
    <img src="images/wecareforyou1.jpeg" alt="wecareforyou" class="wecareforyou">
  </div>

  <div class="container">
    <label for="RollNumber"><b>Registration Number</b></label>
    <input type="text" placeholder="Enter Roll Number" name="RollNumber" required>



    <button type="submit">Get Results</button>

  </div>

  <div class="container" style="background-color:#7fffd4">
    <marquee>   Design & Developed by <b>K P Naveen Reddy</b> & <b>Chaitra S</b> from <i>Final Year CSE-B4</i> </marquee>
  </div>
</form>

</body>
</html>
