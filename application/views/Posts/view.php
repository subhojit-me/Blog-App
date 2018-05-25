<h3><?php echo $post['title']; ?></h3>
    <small><class="post-date"> posted on: <?php echo $post['created_at']; ?> </small><br>
  <div class="post-body">
    <?php echo $post['body']; ?>
  </div>

  <hr>
  <a class="btn btn-default" href="<?php echo base_url();?>posts/edit/<?php echo $post['slug']; ?>">Edit </a><br><br>

  <?php echo form_open('posts/delete/'. $post['id']); ?>
    <input type="submit" value="Delete" class="btn btn-danger">
  </form>