<!DOCTYPE html>
<html>
<head>
       <title>Visitor Log</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" type="text/css" href="site.css">

</head>
<style>
     .center {
    margin: auto;
    width: 40%;
    border: 3px solid #73AD21;
    padding: 10px;
    background-color: lightgreen
}
            
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color:chartreuse
}

li {
    float: left;
    border-right: black 
}

li a {
    display: block;
    color: blue;
    text-align: center;
    padding: 18px 20px;
    text-decoration: none;
}
li a:hover:not(.active) {
    background-color: yellow;
}

.active {
    background-color: blue
}
 body {
        background-color:lightblue;
        }
</style>        

</head>
<ul>
  <li><a href="index.html">HomePage</a></li>
  <li><a href="current.html">Current Work</a></li>
  <li><a href="about.html">About My Page</a></li>
    <li><a href="Visitor Log.php">Visitor Log</a></li>
        <li><a href="About Me.html">Bootstrap</a></li>

</ul>
<body>
  





<div class="center">
   
   
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  Hello there! Please enter your name: <input type="text" name="fname">
  <input type="submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field
    $name = htmlspecialchars($_REQUEST['fname']); 
    if (empty($name)) {
        echo "I'm sorry! I didn't get your name. Please enter again. Thank you!";
    } else {
        echo "<h3> Welcome, $name! </h3>";
    }
}
?>

</div>

</body>
</html>
