<!DOCTYPE html>
<html lang="nl">
<head>
    <style>
        #nav {
            height: 75px;
            line-height: 75px;
            border: 1px solid black;
        }
        img {
            -ms-transform: translateY(-50%);
  transform: translateY(-50%);
  top: 50%;
  margin-left: 250px;
  position: relative;
  height: 75px;
  width: 75px;
        }
        ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  float: right;
}

li {
  display: inline;
  padding: 25px;
}
a {
    text-decoration: none;
    color: black;
    font-size: 18px;
}
a:hover:not(.active) {
  color: grey;
}
#content {
    margin-left: 250px;
    margin-right: 250px;
    margin-top: 100px;
    height: 2000px;
    border: 1px solid black;
}
#footer {
    height: 250px;
            margin-top: 100px;
            padding-left: 250px;
            padding-right: 250px;
            border: 1px solid black;
}
#footer_left    {
    border: 1px solid black;
    margin-left: 250px;
}
#bottom-footer {
    height: 75px;
            border: 1px solid black;
            border-top: none;
}
#footerlogo {
    border: 1px solid black;
    top: 25px;
    margin-top: 25px;
    margin-left: 25px;
    position: relative;
    height: 50px;
    width: 200px;
}
#logomail   {
    height: 25px;
    width: 25px;
    border: 1px solid black;
    margin-left: 25px;
    top: 25px;
    position: relative;
}
#facebook   {
    height: 25px;
    width: 25px;
    border: 1px solid black;
    margin-left: 25px;
    top: 50px;
    position: relative;
}
#instagram   {
    height: 25px;
    width: 25px;
    border: 1px solid black;
    margin-left: 25px;
    top: 50px;
    position: relative;
}
#twitter   {
    height: 25px;
    width: 25px;
    border: 1px solid black;
    margin-left: 25px;
    top: 50px;
    position: relative;
}
#youtube   {
    height: 25px;
    width: 25px;
    border: 1px solid black;
    margin-left: 25px;
    top: 50px;
    position: relative;
}






        </style>


</head>
<body>
    <div id="nav">
        <img src="logo.png" style="margin-left:250px;">
        <ul>
  <li><a href="#home">Home</a></li>
  <li><a href="#news">News</a></li>
  <li><a href="#contact">Contact</a></li>
  <li><a href="#about" style="margin-right: 250px;">About</a></li>
</ul>
</div>


<div id="content">







</form>
</div>

<div id="footer">
    <img src="logo.png" id="footerlogo">
    <br>
    <a style="margin-left: 25px;">dit is text blablabla</a>
    <br>
    <a style="margin-left: 25px;">dit is text blablabla</a>
    <br>
    <img src="#" id="logomail">TESTTEKST!!
    <br>
    <img src="#" id="facebook"><img src="#" id="instagram"><img src="#" id="twitter"><img src="#" id="youtube">
    <p style="float: right;">Piep</p>
</div>

<div id="bottom-footer" style="text-align: center;">
<p> &copy; <?php echo date("Y"); ?> Fitnez-z</p>
<p>Powered and designed by <a href="https://www.linkedin.com/in/gino-schreuders-338403196/">Gino Schreuders</a></p>
</div>

</body>
</html>
