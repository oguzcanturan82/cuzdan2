<?php

$sentence = "Cüzdan olarak seni aramızda görmek istiyoruz!";

//  cümledeki boşlukları kaldırıyoruz (ek2-2 deki listelemeyi istiyorsak bunu yapıyoruz yoksa boşluklarda dahil olabilir)
$sentence = preg_replace('/\s+/', '', $sentence);

//  stringimizi parçalıyoruz
$sentence_arr = mb_str_split( $sentence );


$totals = array_count_values( $sentence_arr );

// en sık kullanılan karakterı ilk olacak şekilde sıralıyoruz
arsort( $totals );

echo '<pre>';
print_r( $totals );

?>
