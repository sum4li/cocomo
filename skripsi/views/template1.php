<html>
    <head>
        <title><?php echo $title; ?></title>
    </head>
    <body>
        <h2><?php echo $title; ?></h2>
        <hr>
        <?php foreach ($item->result() as $row){ ?>
        id item :<?php echo $row->idItem; ?><br>
        hero item :<?php echo $row->namaHero; ?><br>
        hero attribut :<?php echo $row->attributHero; ?><br>
        nama item :<?php echo $row->namaItem; ?><br>
        rarity :<?php echo $row->rarity; ?><hr>
        <?php } ?>
        <?php echo $halaman; ?>
    </body>
</html>