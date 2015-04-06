<article class="<?php echo($post_status); ?>">
    <div class="shadow"></div>
</article>


<article class="intro">
    <a class="post-link" href="<?php echo($post_link); ?>" title="<?php echo($post_title); ?>"></a>
    
    <div class="look<?php echo(($post_index + 1) % 3); ?>" style="background-image: url('<?php echo($post_image); ?>');">
    </div>
    
    <div class="read<?php echo(($post_index + 1) % 3); ?>">
        <div class="post">
            <h2><?php echo($post_title); ?></h2>
            
            <span class="meta"><?php echo($published_date); ?> by  <?php echo($post_author); ?></span>
            
            <p><?php echo($post_intro); ?></p>
        </div>
    </div>
</article>
