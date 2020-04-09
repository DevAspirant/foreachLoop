$array = ["ammar, "," AMMAR, "," アンマール"];

foreach($array as $a) {

  echo $a;

}

// المصفوفة الترابطية Associate Array 
$a_array = ["degree"=>["PHP"=>10,"swift"=>100],"DevAspirant"=>["js"=>100]]; 

foreach($a_array["degree"] as $assic => $mark ){
  echo ", $assic: $mark, ";
}


// طباعة الارقام الفردية 
$i = 0;
while($i++<10){
  if($i % 2 == 0){
      continue;
      echo "$i,";  
  }
}


