

<button onclick="location.href='<?php echo base_url();?>index.php/news/create'">Register</button>
<?php foreach ($news as $news_item): ?>
	<div style="padding: 50px;background-color: antiquewhite;margin: 20px;">
		
        <h3><?php echo $news_item['title']; ?></h3>
        <div class="main">
                <?php echo $news_item['text']; ?>
        </div>
        <p><a href="<?php echo site_url('news/'.$news_item['slug']); ?>">View article</a></p>
	</div>

<?php endforeach; ?>