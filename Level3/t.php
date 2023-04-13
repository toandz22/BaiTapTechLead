<?php
// Ham sắp xếp
function sap_xep_tang($mang)
{
    $sophantu = count($mang);
    // Sắp xếp mảng
    for ($i = 0; $i < ($sophantu - 1); $i++)
    {
        for ($j = $i + 1; $j < $sophantu; $j++)
        {
            if ($mang[$i] > $mang[$j])
            {
                // hoán vị
                $tmp = $mang[$j];
                $mang[$j] = $mang[$i];
                $mang[$i] = $tmp;
            }
        }
    }
    return $mang;
}
  
function xuat_mang_ra_man_hinh($mang)
{
    $sophantu = count($mang);
    for ($i = 0; $i < $sophantu; $i++){
        echo $mang[$i] . ' ';
    }
}
  

$mang = array(1, 5, 9, 2, 4, 9); 
  
$mang = sap_xep_tang($mang);
  
xuat_mang_ra_man_hinh($mang);
?>