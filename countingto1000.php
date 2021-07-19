<?php

//for ($i=1; $i<=1000; $i++)
//{
//    echo $i . '<br>';
//}
//
//for ($i=999; $i>=0; $i--)
//{
//    echo $i . '<br>';
//}


//echo join('<br>',range(0,1000)).'<br>'.join('<br>',range(999,0));

echo join('<br>',array_merge(range(0,1000),range(999,0)));
