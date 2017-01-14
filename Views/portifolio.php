<div class="portifolio">
    <h1>Meus Trabalhos</h1>
    <?php foreach ($portifolio as $item ): ?>
    <div class="port_item">
        <img src="../assets/images/galeria/<?php echo $item['url_img']; ?>" border="0" width="200" height="150"/>    
    </div>
    <?php endforeach; ?>
    <div style="clear: both"></div>
</div>

