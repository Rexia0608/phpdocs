<<<<<<< HEAD
<?php

    // Simple Array
    // $subjects = array("Web Fundimentals", "PHP", "JS");
    //             for($num = 1; $num <= count($subjects); $num++){
    //                 echo "Subject $num: " . $subjects[$num-1] . "<br>";
    //             }
            // output in echo: 
            //                 echo "Subject 1: " . $subjects[0] . "<br>"; 
            //                 echo "Subject 2: " . $subjects[1] . "<br>"; 
            //                 echo "Subject 3: " . $subjects[2] . "<br>"; 
        
    
    
  
 // ______________________________________________________________________________________
              // two dimensional array. 2 ways to approach this.
        // $courses = array(
        //             array("Web Funfimental", " Basic", 2),
        //             array("PHP","Intermediate", 4),
        //             array("JS", "Advanced", 4)
        // );

             // output in echo: 
                            // echo $courses[0][0] . " " . $courses[0][1] . " " . $cours[0][2] . "<br>";
                            // echo $courses[1][0] . " " . $courses[1][1] . " " . $cours[1][2] . "<br>";
                            // echo $courses[2][0] . " " . $courses[1][1] . " " . $cours[2][2] . "<br>";
// ______________________first approach________________________________________________
                // if you have something you wanted to display in a row of array it better to use this!

                    // for($row = 0; $row < count($courses); $row++)
                    // {
                    //     for($val = 0; $val < count($courses[$row]); $val++)
                    //     {
                    //         echo $courses[$row][$val] . " ";
                    //     }
                    //     echo "<br>";
                    // }        
 //____________________second approach using the foreach loops_______________________
             // if you wanted to display each value of row its better to use this approach !
                    // foreach($courses as $courses)
                    // {
                    //     foreach($courses as $arrayValueInside)
                    //     {
                    //         echo $arrayValueInside . " ";
                    //     }
                    //     echo "<br>";
                    // }


//_____________________Assosiative array(key value pair)_____________

                        // $details = array("courses_name" => "Web Fundimentals", "weeks" => 2);
                            // output in echo:
                            //  echo $details["courses_name"] . "<br/>";
                            //  echo $details["weeks"] . "<br/>";

                            //  foreach($details as $details)
                            //  {
                            //     echo $details . " ";
                            //  }



//_____________________Two-Dimensional Assosciateive Arrays_______________________________
                            // $tracks = array(
                            //             array("courses_name" => "Web Fundimental", "level" => "Basic", "weeks" => 2),
                            //             array("courses_name" => "PHP", "level" => "Intermediate", "weeks" => 4),
                            //             array("courses_name" => "JS", "level" => "Advanced", "weeks" => 4)
                            //         );

                            // output in echo:
                                    // echo $tracks[0]["courses_name"] . " " . $tracks[0]["level"] . " " . $tracks[0]["weeks"] . "<br>";
                                    // echo $tracks[1]["courses_name"] . " " . $tracks[1]["level"] . " " . $tracks[1]["weeks"] . "<br>";
                                    // echo $tracks[2]["courses_name"] . " " . $tracks[2]["level"] . " " . $tracks[2]["weeks"] . "<br>";

//_________________________________________without applyig the value key___________________________________//

                                // foreach($tracks as $row)
                                // {
                                //     foreach($row as $val)
                                //     {
                                //         echo $val . " " . ;
                                //     }
                                //         echo "<br>";
                                // }
//_________________________________________with applyig the value key___________________________________//
                                // foreach($tracks as $row)
                                // {
                                //     foreach($row as $any_Name_for_courseValue => $val)
                                //     {
                                //         echo $val . " " . $any_Name_for_courseValue . " ";
                                //     }
                                //         echo "<br>";
                                // }

                









=======
<?php

    // Simple Array
    // $subjects = array("Web Fundimentals", "PHP", "JS");
    //             for($num = 1; $num <= count($subjects); $num++){
    //                 echo "Subject $num: " . $subjects[$num-1] . "<br>";
    //             }
            // output in echo: 
            //                 echo "Subject 1: " . $subjects[0] . "<br>"; 
            //                 echo "Subject 2: " . $subjects[1] . "<br>"; 
            //                 echo "Subject 3: " . $subjects[2] . "<br>"; 
        
    
    
  
 // ______________________________________________________________________________________
              // two dimensional array. 2 ways to approach this.
        // $courses = array(
        //             array("Web Funfimental", " Basic", 2),
        //             array("PHP","Intermediate", 4),
        //             array("JS", "Advanced", 4)
        // );

             // output in echo: 
                            // echo $courses[0][0] . " " . $courses[0][1] . " " . $cours[0][2] . "<br>";
                            // echo $courses[1][0] . " " . $courses[1][1] . " " . $cours[1][2] . "<br>";
                            // echo $courses[2][0] . " " . $courses[1][1] . " " . $cours[2][2] . "<br>";
// ______________________first approach________________________________________________
                // if you have something you wanted to display in a row of array it better to use this!

                    // for($row = 0; $row < count($courses); $row++)
                    // {
                    //     for($val = 0; $val < count($courses[$row]); $val++)
                    //     {
                    //         echo $courses[$row][$val] . " ";
                    //     }
                    //     echo "<br>";
                    // }        
 //____________________second approach using the foreach loops_______________________
             // if you wanted to display each value of row its better to use this approach !
                    // foreach($courses as $courses)
                    // {
                    //     foreach($courses as $arrayValueInside)
                    //     {
                    //         echo $arrayValueInside . " ";
                    //     }
                    //     echo "<br>";
                    // }


//_____________________Assosiative array(key value pair)_____________

                        // $details = array("courses_name" => "Web Fundimentals", "weeks" => 2);
                            // output in echo:
                            //  echo $details["courses_name"] . "<br/>";
                            //  echo $details["weeks"] . "<br/>";

                            //  foreach($details as $details)
                            //  {
                            //     echo $details . " ";
                            //  }



//_____________________Two-Dimensional Assosciateive Arrays_______________________________
                            // $tracks = array(
                            //             array("courses_name" => "Web Fundimental", "level" => "Basic", "weeks" => 2),
                            //             array("courses_name" => "PHP", "level" => "Intermediate", "weeks" => 4),
                            //             array("courses_name" => "JS", "level" => "Advanced", "weeks" => 4)
                            //         );

                            // output in echo:
                                    // echo $tracks[0]["courses_name"] . " " . $tracks[0]["level"] . " " . $tracks[0]["weeks"] . "<br>";
                                    // echo $tracks[1]["courses_name"] . " " . $tracks[1]["level"] . " " . $tracks[1]["weeks"] . "<br>";
                                    // echo $tracks[2]["courses_name"] . " " . $tracks[2]["level"] . " " . $tracks[2]["weeks"] . "<br>";

//_________________________________________without applyig the value key___________________________________//

                                // foreach($tracks as $row)
                                // {
                                //     foreach($row as $val)
                                //     {
                                //         echo $val . " " . ;
                                //     }
                                //         echo "<br>";
                                // }
//_________________________________________with applyig the value key___________________________________//
                                // foreach($tracks as $row)
                                // {
                                //     foreach($row as $any_Name_for_courseValue => $val)
                                //     {
                                //         echo $val . " " . $any_Name_for_courseValue . " ";
                                //     }
                                //         echo "<br>";
                                // }

                









>>>>>>> 24268d811b2bb64d779d94c4efe9e87d50601d2c
?>