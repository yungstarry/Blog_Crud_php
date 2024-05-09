<?php
include 'partials/header.php';
?>


<section class="form__section">
  <div class="container form__section-container">
    <h2>Add User</h2>
    <div class="alert__message error">
      <p>This is an error message</p>
    </div>

    <form action="<?= ROOT_URL ?>admin/add-user-logic.php" enctype="multipart/form-data" method="POST">
      <input type="text" name="firstname" placeholder="First Name">
      <input type="text" name="lastname" placeholder="Last Name ">
      <input type="text" name="username" placeholder="Username">
      <input type="email" name="email" placeholder="email">
      <input type="password" name="createpassword" placeholder="Create Password">
      <input type="password" name="confirmpassword" placeholder="Confirm Password">
      <select name="userrole">
        <option value="0">Author</option>
        <option value="1">admin</option>
      </select>

      <div class="form__control">
        <label for="avatar">Add Avatar</label>
        <input type="file" name="avatar" id="thumbnail" />
      </div>

      <button type="submit" name="submit" class="btn">Add User</button>

    </form>
  </div>
</section>

<?php
include '../partials/footer.php';
?>