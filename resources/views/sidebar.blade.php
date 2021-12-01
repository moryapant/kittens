<div class="w-1/3 ml-5">

<?php

  
$servername = "bollykittens.net:3306";
$username = "bollyaob_mnpw";
$password = "chhaya";
$db_name = 'bollyaob_cpg549';

// Create connection
$connection1 = mysqli_connect($servername, $username, $password,$db_name);

// Check connection
if (!$connection1) {
  die("Connection failed: " . mysqli_connect_error());
}
 "Connected successfully";


 $query = "SELECT hits,filename,filepath FROM `cpgtj_pictures` order by hits DESC LIMIT 1";
    $images = mysqli_query($connection1, $query);
    while($row=mysqli_fetch_assoc($images)){
     $hits = $row['hits'];
    echo "<br>";
    $filename = $row['filename'];
    echo "<br>";
    $filepath = $row['filepath'];
    }

  $new_filename = "http://bollykittens.net/photo/albums/" .$filepath .$filename;

         
  // *************ALia BHATT Images ************************         
 
  $query = "SELECT aid FROM `cpgtj_albums` where category = 3";
    $catagory = mysqli_query($connection1, $query);        
    while($row=mysqli_fetch_assoc($catagory)){
        
     $array[] = $row['aid']   ;
        
        
    }
          
   
  $query2 = "SELECT * FROM `cpgtj_pictures` where aid IN (".implode(',',$array).") order by hits DESC LIMIT 1";
    $catagory2 = mysqli_query($connection1, $query2);  
    while($row=mysqli_fetch_assoc($catagory2)){      
         
     $a_hits = $row['hits']  ; 
    $a_name = $row['filename']  ; 
    $a_path = $row['filepath']  ;  }
    $a_image = "http://bollykittens.net/photo/albums/" .$a_path .$a_name;


 // *************ALia BHATT Images ************************  
// *************Deepika Images ************************  


        
        
$query = "SELECT aid FROM `cpgtj_albums` where category = 2";
    $catagory_d = mysqli_query($connection1, $query);        
    while($row=mysqli_fetch_assoc($catagory_d)){
        
     $array_d[] = $row['aid']   ;
        
        
    }
          
   
  $query2 = "SELECT * FROM `cpgtj_pictures` where aid IN (".implode(',',$array_d).") order by hits DESC LIMIT 1";
    $catagory3 = mysqli_query($connection1, $query2);  
    while($row=mysqli_fetch_assoc($catagory3)){      
         
     $d_hits = $row['hits']  ; 
    $d_name = $row['filename']  ; 
    $d_path = $row['filepath']  ;  }
    $d_image = "http://bollykittens.net/photo/albums/" .$d_path .$d_name;
   
 // *************Deepika Images ************************ 

 // *************LATEST IMAGES ************************ 


    
          
   
 $query3 = "SELECT * FROM `cpgtj_pictures`order by mtime DESC LIMIT 1";
    $catagory4 = mysqli_query($connection1, $query3);  
    while($row=mysqli_fetch_assoc($catagory4)){      
         
     $i_hits = $row['hits']  ; 
    $i_name = $row['filename']  ; 
    $i_path = $row['filepath']  ;  }
    $i_image = "http://bollykittens.net/photo/albums/" .$i_path .$i_name;
   


 // *************LATEST IMAGES ************************ 


?>



<div class="space-y-2">
    <div class="">
        <div class="bg-blue-500 p-1  shadow-md text-center text-white">
            Most Viewed Picture
        </div>
        <div>
            <img src="{{$new_filename}}" alt="">
        </div>
        <div class="bg-yellow-500 p-1  shadow-md text-center text-white">
            {{ $hits }} Views
        </div>
    </div>


    <div>
        <div class="bg-blue-500 p-1  shadow-md text-center text-white">
            Last Viewed Picture
        </div>
        <div>
            <img src="{{ $i_image}}" alt="">
        </div>
        <div class="bg-yellow-500 p-1  shadow-md text-center text-white">
           {{ $i_hits }} Views
        </div>
    </div>
    <div>
        <div class="bg-blue-500 p-1  shadow-md text-center text-white">
            Last Viewed Alia Bhatt Picture
        </div>
        <div>
            <img src="{{$a_image}}" alt="">
        </div>
        <div class="bg-yellow-500 p-1  shadow-md text-center text-white">
            {{ $a_hits }} Views
        </div>
    </div>

    <div>
        <div class="bg-blue-500 p-1  shadow-md text-center text-white">
            Last Viewed Deepika Padukone Picture
        </div>
        <div>
            <img src="{{$d_image}}" alt="">
        </div>
        <div class="bg-yellow-500 p-1  shadow-md text-center text-white">
            {{ $d_hits }} Views
        </div>
    </div>

</div>

</div>
