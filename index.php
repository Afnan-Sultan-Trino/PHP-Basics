
<?php

  //for printing anything---

  echo "Hello World <br>";
  print "Hello World";
  printf("Hello");
  

  //--variables declaration--

  $yt = "Afnan Sultan Trino";
  $dept = "CSE";
  $CGPA = 3.72;
  $isScholarship=true;

  echo "student Info are : <br> $yt, $dept, $CGPA, $isScholarship <br>";


  //--Condition--

  if($CGPA>3.50 || $CGPA< 4){
    echo "TREEEEAT STEAK";
  }
  else{
    echo "Study Harder";
  }


 //--Loops

 //1. For Loops:

 for($i= 0; $i<10; $i++){
    echo $dept."<br>";
 }

 //2. while Loops:

    while($i< 10){
        echo $dept."<br>";
        $i++;
    }

  //---array print--

  $name=["Ishti","Momi","Omi"]  ;
  
  echo "Names are : $name[0], $name[1], $name[2]";
  echo "<br>";

  for ($i= 0; $i<3; $i++) {  
    echo $name[$i];
  }

  //using foreach loop

  foreach($name as $item) {
    echo $item ."<br>";
  }

  //assign different names

  $names=[
    "president"=>"Ishti",
    "Vice-president"=> "Omi",
    "General Member"=> "Sami",

  ];
  echo "<br>";
  echo $names["Vice-president"];

//--for print array, built-in function :

    print_r($names);
    echo "<br>";
    echo "<br>";


//---for knows types of variables/data, built-in function :

    var_dump($names);
    echo "<br>";
    echo "<br>";
    var_dump($yt);
    echo "<br>";
    var_dump($CGPA);
    echo "<br>";
    var_dump($isScholarship);

































?>




