<?php
    while ($list = $lists->fetch()) {
        echo json_encode($list);
    }
?>