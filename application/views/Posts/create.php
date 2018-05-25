<h2> <?= $title; ?></h2>

<?php echo validation_errors(); ?>

<?php echo form_open('posts/create'); ?>
<div class="form-group">
<label> Title </label>
<input type="text" class="form-control" name="title" placeholder="Add Title">
</div>
<div class="form-group">
<label>Body</label>
<textarea class="form-control" name="body" placeholder="Add Body"></textarea>
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