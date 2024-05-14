<!DOCTYPE html>
<html>
<head>
  <title>Package Management</title>
  <link rel="stylesheet" type="text/css" href="../css/manageevent.css">
</head>
<body>
  <header>
    <button id="create-package-btn">Create Package</button>
    <button id="edit-package-btn">Edit Package</button>
  </header>

  <div id="create-package" class="container hidden">
    <h1>Create Package</h1>
    <form id="create-package-form">
      <label for="package-name">Package Name:</label>
      <input type="text" id="package-name" name="package-name" required>

      <label for="package-type">Package Type:</label>
      <input type="text" id="package-type" name="package-type" required>

      <label for="additional-info">Additional Information:</label>
      <textarea id="additional-info" name="additional-info"></textarea>

      <label for="description">Description:</label>
      <textarea id="description" name="description" required></textarea>

      <label for="photo">Upload Photo:</label>
      <input type="file" id="photo" name="photo">

      <input type="submit" value="Create">
    </form>
  </div>

  <div id="edit-package" class="container hidden">
    <h1>Edit Package</h1>
    <form id="edit-package-form">
      <label for="edit-package-name">Package Name:</label>
      <input type="text" id="edit-package-name" name="edit-package-name" required>

      <label for="edit-package-type">Package Type:</label>
      <input type="text" id="edit-package-type" name="edit-package-type" required>

      <label for="edit-additional-info">Additional Information:</label>
      <textarea id="edit-additional-info" name="edit-additional-info"></textarea>

      <label for="edit-description">Description:</label>
      <textarea id="edit-description" name="edit-description" required></textarea>

      <label for="edit-photo">Upload Photo:</label>
      <input type="file" id="edit-photo" name="edit-photo">

      <input type="submit" value="Save">
    </form>
  </div>

  <script src="../js/manageevent.js"></script>
</body>
</html>
