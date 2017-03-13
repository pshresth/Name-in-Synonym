<!DOCTYPE html>
<html>
<head>
  <style>
  .text{
    position: relative;
    top: 20px;
    height: 30px;
    margin-left: 30px;
    width: 680px;
  }
  .fontword{
    font-size: 30px;
  }
  .divInputs{
    position: relative;
    top: 80px;
    height: 140px;
    margin-left: 200px;
    width: 980px;
  }
  .inputleft{
    border-radius: 25px;
    height: 130px;
    width: 450px;
    border-width: 3px;
    border-style: solid;
    margin-top: 90px;
    margin-left: 0px;
  }
  .inputright{
    border-radius: 25px;
    height: 130px;
    width: 450px;
    border-width: 3px;
    border-style: solid;
    margin-top: -135px;
    margin-left: 530px;
  }
  .textbox{
    background-color: transparent;
    border: 0px solid;
    outline: none;
    margin-left: 15px;
    margin-top: 10px;
    height:100px;
    width:340px;
    font-size: 35px;    
  }
  .imagediv{
    margin-top: -100px;
    margin-left: 460px; 
  }
  .addButton{
    background-color: #70baeb;
    border: 2px solid black;
    color: black;
    padding: 15px 32px;
    width: 320px;
    height: 60px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size:30px;
    margin: 4px 2px;
    cursor: pointer;
    border-radius: 12px;
    margin-left: 540px;
    margin-top: 120px;
  }

  </style>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="styles/main_style.css" type="text/css">
</head>
<title>Final Project</title>
<body>
  <h2>Final Project</h2>
  <h3>Team: DOLPHIN</h3>
  <h3>Dennis Lee, Gary Webb, Prashant Shrestha, Tyler Thrash</h3>
  <br><br><br>

  <div class="header">
    <a href="http://puzzles.thisisjava.com/"><img class="logo" src="./pic/logo.png"></img></a>
    <div class="imageDiv">
      <input class="headerButton" type="image" src="./pic/list.png">
      <input class="headerButton" type="image" src="./pic/addPuzzle.png">
      <input class="headerButton" type="image" src="./pic/addWord.png">
      <a href="./login.php"><input class="headerButton" type="image" src="./pic/login.png"></a>
    </div>
    <div class="divTitle"><font class="font">Name in Synonyms</font></div>
    <br>
  </div>
  <div class="text">
    <font class="fontword">Name In Synonym <img src="./pic/arrow.png"> Add Word Pairs<br>
      Enter a synonym (main word) and the clue word for it</font>
  </div>
  <div class="divInputs">
    <div class="inputleft"><input type="text" class="textbox" name="mainWord"></div>
    <div class="inputright"><input type="text" class="textbox" name="clueWord"></div>
    <div class="imagediv"><img src="./pic/equals.png"></div>
  </div>
  <input  class="addButton" type="submit" name="submit" value="Add Word Pairs">


</body>
</html>