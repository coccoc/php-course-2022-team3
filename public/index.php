<?php
    $arr2=['CBD & Inner Suburbs', 'Central Asia', 'India & South Asia', 'Hastings'];
    // include "array.php"
    function forArra($arr1,$arr2)
    {
        $demoArray=[];
            // foreach($arr1 as $value1)
            // {
            //     foreach($arr2 as $value2)
            //     {
            //         if($value1['label']==$value2)
            //         {
            //             array_push($demoArray,$value1);
            //         }
            //     }
            // }
        //==>>Độ phức tạp của thuật toán là O(n^2);
        echo json_encode($demoArray);
    }
    forArra($area,$arr2);
?>
