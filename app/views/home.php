<!DOCTYPE html>
<html>
<head>
  <title>My App</title>
  <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
<div class="form-wrapper">
  <div class="table-container">
    <button id="add-new-field-btn">Add New Field</button>
    <table class="dark-table">
      <thead>
        <tr>
          <th>ID</th>
          <th>Name</th>
          <th>Email</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>1</td>
          <td>John Doe</td>
          <td>johndoe@gmail.com</td>
          <td>
            <a href="#">Edit</a> | <a href="#">Delete</a>
          </td>
        </tr>
        <tr>
          <td>2</td>
          <td>Jane Smith</td>
          <td>janesmith@gmail.com</td>
          <td>
            <a href="#">Edit</a> | <a href="#">Delete</a>
          </td>
        </tr>
      </tbody>
    </table>

    <div class="modal" id="add-modal">
      <div class="modal-content">
        <span class="close">&times;</span>
        <h2>Add New Field</h2>
        <form>
          <label for="name">Name:</label>
          <input type="text" id="name" name="name" required>
          <label for="email">Email:</label>
          <input type="email" id="email" name="email" required>
          <button type="submit">Add</button>
        </form>
      </div>
    </div>
  </div>

</div>
<script src="assets/js/jQuery.js"></script>
<script src="assets/js/scripts.js"></script>
</body>
</html>
