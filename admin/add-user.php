<?php
include 'partials/header.php';
?>


<section class="form__section">
  <div class="container form__section-container">
    <h2>Add User</h2>
    <div class="alert__message error">
      <p>This is an error message</p>
    </div>

    <form action="" enctype="multipart/form-data">
      <input type="text" placeholder="First Name">
      <input type="text" placeholder="Last Name ">
      <input type="text" placeholder="Username">
      <input type="email" placeholder="email">
      <input type="password" placeholder="Create Password">
      <input type="password" placeholder="Confirm Password">
      <select>
        <option value="0">Author</option>
        <option value="1">admin</option>
      </select>

      <div class="form__control">
        <label for="avatar">Add Avatar</label>
        <input type="file" id="thumbnail" />
      </div>

      <button type="submit" class="btn">Add User</button>

    </form>
  </div>
</section>

<?php
include '../partials/footer.php';
?>