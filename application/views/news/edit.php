<h2><?php echo $title; ?></h2>

<?php echo validation_errors(); ?>

<?php echo form_open('news/edit/' . $news_item['slug']); ?>
    <input type="hidden" name="slug" class="form-control" value="<?=$news_item['slug']?>" /><br />

    <label for="title">Title</label>
    <input type="input" name="title" class="form-control" value="<?=$news_item['title']?>" /><br />

    <label for="text">Text</label>
    <textarea name="text" class="form-control" rows="10"><?=$news_item['text']?></textarea><br />

    <input type="submit" name="submit" value="UPDATE BRUH" class="btn btn-s" />

</form>