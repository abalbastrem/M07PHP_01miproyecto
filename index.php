<!DOCTYPE html>
<html>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<head>
<meta charset="UTF-8">
<title>formulario</title>
</head>
<body>

<div class="container">
  <h2>formulario de registro</h2>
  <form action="examplepost.php" method="POST">
    <div class="form-group">
      <label for="dni">dni</label>
      <input type="text" class="form-control" id="dni" name="dni" value="46994355L">
    </div>
    <div class="form-group">
      <label for="name">nombre</label>
      <input type="text" class="form-control" id="name" name="name" value="Albert">
    </div>
    <div class="form-group">
      <label for="surnames">apellidos</label>
      <input type="text" class="form-control" id="surnames" name="surnames" value="Balbastre Morte">
    </div>
    <div class="form-group">
      <label for="pass">contraseña</label>
      <input type="password" class="form-control" id="pass" name="pass" value="jupiter">
    </div>
    <div class="form-group">
      <label for="dob">fecha de nacimiento</label>
      <input type="text" class="form-control" id="dob" placeholder="DD/MM/AAAA" name="dob" value="08/12/1988">
    </div>
    <div class="form-group">
      <label for="address">dirección</label>
      <input type="text" class="form-control" id="address" name="address" value="C/ Numancia, Barcelona">
    </div>
    <div class="form-group">
      <label for="sex">sexo</label>
      <input type="text" class="form-control" id="sex" placeholder="h/m" name="sex" value="h">
    </div>
    <div class="form-group">
      <label for="phone">teléfono</label>
      <input type="text" class="form-control" id="phone" name="phone" value="601241674">
    </div>
    <div class="form-group">
      <input style="display:none" type="text" class="form-control" id="sw" name="sw" value="registry">
    </div>
    <button type="submit" class="btn btn-default">crear perfil</button>
  </form>
</div>

</body>
</html>