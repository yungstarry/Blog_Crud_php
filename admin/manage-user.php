<?php
include 'partials/header.php';
?>


<section class="dashboard">
  <div class="container dashboard__container">

    <button id="show__sidebar-btn" class="sidebar__toggle"><i class="uil uil-angle-right-b"></i></button>
    <button id="hide__sidebar-btn" class="sidebar__toggle"><i class="uil uil-angle-left-b"></i></button>
    <aside>
      <ul>
        <li>
          <a href="add-post.php"><i class="uil uil-pen"></i>
            <h5>Add Post</h5>
          </a>
        </li>
        <li>
          <a href="index.php"><i class="uil uil-postcard"></i>
            <h5>Manage Post</h5>
          </a>
        </li>
        <li>
          <a href="add-user.php"><i class="uil uil-user-plus"></i>
            <h5>Add User</h5>
          </a>
        </li>
        <li>
          <a href="manage-user.php" class="active"><i class="uil uil-users-alt"></i>
            <h5>Manage Users</h5>
          </a>
        </li>
        <li>
          <a href="add-category.php"><i class="uil uil-edit"></i>
            <h5>Add Category</h5>
          </a>
        </li>
        <li>
          <a href="manage-categories.php"><i class="uil uil-list-ul"></i>
            <h5>Manage Categories</h5>
          </a>
        </li>
      </ul>
    </aside>
    <main>
      <h2>Manage Users</h2>
      <table>
        <thead>
          <tr>
            <th>Name</th>
            <th>Username</th>
            <th>Edit</th>
            <th>Delete</th>
            <th>Admin</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Odumehi </td>
            <td>achiever</td>
            <td><a href="edit-user.html" class="btn sm">Edit</a></td>
            <td><a href="delete-user.html" class="btn danger sm">Delete</a></td>
            <td>Yes</td>
          </tr>
          <td>solomon </td>
          <td>solo</td>
          <td><a href="edit-user.html" class="btn sm">Edit</a></td>
          <td><a href="delete-user.html" class="btn danger sm">Delete</a></td>
          <td>No</td>
          </tr>
          <td>Bosede </td>
          <td>bossy</td>
          <td><a href="edit-user.html" class="btn sm">Edit</a></td>
          <td><a href="delete-user.html" class="btn danger sm">Delete</a></td>
          <td>Yes</td>
          </tr>

        </tbody>
      </table>
    </main>
  </div>
</section>

<?php
include '../partials/footer.php';
?>