<?php
require('lib/print.php');
?>
<?php
require('view/top.php');
?>
      <?php
      print_list();
      ?>
    </ol>
    <a href="create.php">create</a>
    <form action="create_process.php" method="post">
      <p>
        <input type="text" name="title" placeholder="Title">
      </p>
      <p>
        <textarea name="description" placeholder="Description"></textarea>
      </p>
      <p>
        <input type="submit">
      </p>
    </form>
<?php
require('view/bottom.php');
?>
