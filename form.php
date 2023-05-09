<!DOCTYPE html>
<html>
<head>
  <title>Kapcsolat</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

  <div class="container">
    <h2>Kapcsolat</h2>
    <form action="submit-form.php" method="post">
      <div class="form-group">
        <label for="name">Név:</label>
        <input type="text" class="form-control" id="name" name="name" required minlength="2" maxlength="50">
      </div>
      <div class="form-group">
        <label for="email">Email cím:</label>
        <input type="email" class="form-control" id="email" name="email" required>
      </div>
      <div class="form-group">
        <label for="message">Üzenet (max 300 karakter):</label>
        <textarea class="form-control" id="message" name="message" maxlength="300" required></textarea>
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>

</body>
</html>
