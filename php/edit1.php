<!DOCTYPE html>
<html>
<head>
  <title>Edit Package</title>
  <link rel="stylesheet" type="text/css" href="../css/edit.css">
</head>
<body>
  <h1>Edit Package</h1>
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

  <script src="script.js"></script>
</body>
</html>