<html>
    <body>
        <?php
            $name=[
                "1"=>"佐藤",
                "2"=>"鈴木",
                "3"=>"高橋"
                ];
        ?>
        <?php foreach($name as $key=>$value):?>
        <p><?php echo $key?>番目は<?php echo $value?>さんです</p>

        <?php endforeach;?>
    </body>
</html>