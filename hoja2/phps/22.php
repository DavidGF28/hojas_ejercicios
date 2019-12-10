<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $array=[8,6];
        //$a = 8;
        //$b = 6;
        
        if ($array[0] > $array[1]){
            print "a es mayor que b<br>";
            $array[1]=$array[0];
        }
        
        
        if ($array[0] > $array[1]):
            print "A es mayor que B<br>";
        endif;
        
        
        if ($array[0] > $array[1]){
            print "a es mayor que b<br>";
        } elseif ($array[0] == $array[1]){
            print "a es igual que b<br>";  
        } else 
            print "b es mayor que a<br>";
        
        if ($array[0] > $array[1]):
            print "a es mayor que b<br>";
            print "...";
         elseif ($array[0] == $array[1]):
            print "a es igual que b<br>";
            print "!!!";
         else: 
            print "b es mayor que a<br>";
            endif;
        ?>
    </body>
</html>