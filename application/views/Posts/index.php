<h2><?= $title ?></h2>
<?php foreach($posts as $p) : ?>

    <h3><?php echo $p['title']; ?></h3>
    <small><class="post-date">Posted on: <?php echo $p['created_at'];?> in<strong><?php $p['name']; ?> </strong></small><br>
    <?php echo $p['body']; ?>
    <br><br>
    <p><a class="btn btn-default" href="<?php echo site_url('/posts/'. $p['slug']); ?>">Read more</a></p>

<?php endforeach ?>