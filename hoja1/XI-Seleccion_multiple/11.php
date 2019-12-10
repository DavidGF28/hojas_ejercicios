<?php
//variables
$numero1= 0;
//datos
$numero1=$_REQUEST['uno'];
//procesado
//echo "tu numero es $numero1";
if ($numero1<3)
{    echo "muy deficiente";}
else
    {if ($numero1<5)
    {echo "suspenso";}
    else
        {if ($numero1<6)
        {echo "suficiente";}
        else
            {if ($numero1<7)
            {echo "bien";}
            else
                {if ($numero1<9)
                {echo "notable";}
                else
                {echo "sobresaliente";}
                }
            }
        }
    }