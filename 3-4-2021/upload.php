<?php 

if(isset($_POST['submit'])){ 
    $file=$_FILES['file']; 
    $fileName=$_FILES['file']['name']; 
    $fileSize=$_FILES['file']['size']; 
    $fileError=$_FILES['file']['error']; 
    $fileTmpName=$_FILES['file']['tmp_name']; 
    print_r($file); 

    //getting array of filename and extension
    //getting extension from array
    $fileExt = explode('.', $fileName); 
    $fileActualExt = strtolower(end($fileExt)); //want the extension which is last item of $fileExt array; 

    //create array of allowed formats
    $allowed = array('jpg', 'jpeg', 'png'); 

    //set of if statements to check if 
        //extension allowed 
        //errors happened 
        //file size 
        //if not take temporary upload and save to uploads 
    if(in_array($fileActualExt, $allowed)){
        if($fileError == 0){ 
            if($fileSize < 10000000){ 
                // do something 
                $fileNameNew = uniqid('', true).".".$fileActualExt; 
                $fileDestination = 'uploads/'.$fileNameNew; 

                move_uploaded_file($fileTmpName, $fileDestination); 
                header("Location: comics.php?uploaded=success"); 
            }
        }else { 
            echo 'No errors happened'; 
        }
    }else { 
        echo 'Format not allowed'; 
    }
}