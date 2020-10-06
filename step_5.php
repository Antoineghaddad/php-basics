    <?php
    $course_name ="javascript";
    $enrolled_students = 15;
    $price = 15.5;
    $on_discount = true;

    echo "Course title : $course_name";
    echo "<br> enrolled students : 15";
    echo "<br> price : 15.5";
    echo '<br>Course ' . $on_discount;
    if($on_discount) {
        echo "yes";
    }
    else{
        echo "no";
    }
    
    ?>