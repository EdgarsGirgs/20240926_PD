<!DOCTYPE html>
<html lang="en">
<head>
    <link href="style.css" rel="stylesheet" />
    <script scr="app.js"></script>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="blog.php">iet uz blog</a>
    <h1>Piesakies webināram!”</h1>
   

    

    <form action="index.html" method="post">
  <label>
    Vārds:
    <input type="text" name="Vārds" dirname="Vārds-dir" value="" />
  </label>
  <input type="submit" />
</form>

<form action="index.html" method="post">
  <label>
    E-pasts:
    <input type="text" name="E-pasts" dirname="E-pasts-dir" value="" />
  </label>
  <input type="submit" />
</form>

    <select name="select">
  <option value="first">Beginner</option>
  <option value="second">Intermediate</option>
  <option value="third">Advanced</option>
    </select>
    <fieldset>
        
    <legend>Vai vēlies saņemt info par citiem mūsu organizētajiem pasākumiem?</legend>
    <label><input type="radio" name="radio" value="yes" /> Yes</label>
    <label><input type="radio" name="radio" value="no" /> No</label>
  </fieldset>
</body>
</html>