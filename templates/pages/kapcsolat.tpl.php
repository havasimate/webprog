<div class="container">
    <h2>Kapcsolat</h2>
    <form id="form" action="logicals/submit-form.php" method="post">
      <div class="form-group">
        <label for="email">Email cím:</label>
        <input type="text" class="form-control" id="email" name="email">
      </div>
      <div class="form-group">
        <label for="message">Üzenet (max 300 karakter):</label>
        <textarea class="form-control" id="message" name="message"></textarea>
      </div>
      <button type="submit" class="btn btn-primary">Küldés</button>
      <button type="button"class="btn btn-danger"><a href="index.php?oldal=uzenetek">Üzenetek</a></button>
    </form>
  </div>
  <script src="logicals/validator.js"></script>