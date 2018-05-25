<h2> <?= $title; ?></h2>

<?php echo validation_errors(); ?>
<?php echo form_open('posts/update'); ?>
<input type="hidden" name=od" value=<?php echo $post['id']; ?>">
<div class="form-group">
<label> Title </label><br><br>
<input type="text" class="form-control" name="title" placeholder="Add Title" value="<?php echo $post['title']; ?>">
</div>
<div class="form-group">
<label>Body</label><br><br>
<textarea class="form-control" name="body" placeholder="Add Body" value=""<?php echo $post['body']; ?>""></textarea>
</div>
    <div class="form-group">
        <label> Category</label>
            <select name="category_id" class="form-control">
                <?php foreach($categories as $c): ?>
                    print_r($c);
                    <option value="<?php echo $c['id']; ?>"><?php echo $c['name']; ?>
                    </option>
                <?php endforeach; ?>
            </select>
    </div>
<button type="submit" class="btn btn-default">Submit Post</buton>
</form>