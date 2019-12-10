<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $a = 8;
        $b = 6;
        
        if ($a > $b){
            print "a es mayor que b<br>";
            $b=$a;
        }
        
        
        if ($a > $b):
            print "A es mayor que B<br>";
        endif;
        
        
        if ($a > $b){
            print "a es mayor que b<br>";
        } elseif ($a == $b){
            print "a es igual que b<br>";  
        } else 
            print "b es mayor que a<br>";
        
        if ($a > $b):
            print "a es mayor que b<br>";
            print "...";
         elseif ($a == $b):
            print "a es igual que b<br>";
            print "!!!";
         else: 
            print "b es mayor que a<br>";
            endif;
        ?>
    </body>
</html>