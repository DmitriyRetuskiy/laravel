<html>
<body>
 <?php 
    echo __DIR__ . '<br />';
    if(file_exists('/storage/file.txt'))
    {
        echo 'файл есть';
    }
 ?>

</body>


</html>