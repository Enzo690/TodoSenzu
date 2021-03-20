


<?php 

    while ($list = $lists->fetch()) {
        echo(json_encode($list)) ;
    }
       
?>
<script>

fetch("localhost/TodoList/?action=get")
.then(response => response.json())
.then(data => {
    console.log(data);
});


</script>