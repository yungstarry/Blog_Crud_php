<?php
include 'partials/header.php';
?>


<section class="form__section">
  <div class="container form__section-container">
    <h2>Edi Post</h2>


    <form action="" enctype="multipart/form-data">
      <input type="text" placeholder="Title" />
      <select>
        <option value="1">Travel</option>
        <option value="1">Art</option>
        <option value="1">Science & Technology</option>
        <option value="1">Travel</option>
        <option value="1">Travel</option>
        <option value="1">Travel</option>
      </select>
      <textarea rows="10" placeholder="body"></textarea>
      <div class="form__control inline">
        <input type="checkbox" checked id="is_featured" />
        <label for="is_featured">Features</label>
      </div>
      <div class="form__control">
        <label for="thumbnail">Change thumbnail</label>
        <input type="file" id="thumbnail" />
      </div>

      <button type="submit" class="btn">Update Post</button>
    </form>
  </div>
</section>


<?php
include '../partials/footer.php';
?>