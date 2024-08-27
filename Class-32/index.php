<?php

// got to
for($outer_list =1; $outer_list<=3; $outer_list++){
    echo "List $outer_list<br> ";
    for($inner_list =1;$inner_list <=2;$inner_list++){
        echo "------------ Inner List $inner_list<br> ";
    if($outer_list ==2 && $inner_list ==1){
        goto Out;
    }
    
    }
}
Out:
echo "End";
?>