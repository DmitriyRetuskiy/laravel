<html>
<body>
 <?php 
    echo __DIR__ . '<br />';
    $file =  dirname( __DIR__, 2 ) . '/app/public/file.txt';
    echo $file . '<br />';
    if(file_exists($file))
    {
        echo 'файл существует есть';
       
    }
 ?>

</body>


</html>