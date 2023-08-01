<?php 



if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
   $heading = $_POST['heading'];
   $description = $_POST['description'];
   $align = $_POST['align'];
   $color = $_POST['color'];

    try {


        $path = 'uploads/';

        if (isset($_FILES['file'])) {

            $errors = [];
            
            $extensions = ['jpg', 'jpeg', 'png', 'gif'];
        
            $file_name = $_FILES['file']['name'];
            $file_tmp = $_FILES['file']['tmp_name'];
            $file_type = $_FILES['file']['type'];
            $file_size = $_FILES['file']['size'];
            $file_ext = strtolower(end(explode('.', $_FILES['file']['name'])));
        
            $storePath = $path . $file_name;
        
            if (!in_array($file_ext, $extensions)) {
                $errors[] = 'Extension not allowed: ' . $file_name . ' ' . $file_type;
            }
            
            if ($file_size > 2097152) {
                $errors[] = 'File size exceeds limit: ' . $file_name . ' ' . $file_type;
            }
        
        
            if (empty($errors)) {
                move_uploaded_file($file_tmp, $storePath);
            }
        
            if ($errors) print_r($errors);
        
            if($file_ext == 'png'){
                $img = imagecreatefrompng($storePath) or die ("Cannot Initialize new GD image stream");
            }else{
    
                $img = imagecreatefromjpeg($storePath) or die ("Cannot Initialize new GD image stream");
            }

             // Get image Width and Height
            $img_width = imagesx($img);  
            $img_height = imagesy($img);
            
            }else{

                  $img_width = 600;
                  $img_height = 200;

                  $img = @ImageCreate ($img_width,$img_height);

                  $background_color = ImageColorAllocate ($img, 204, 204, 204); 

                  $file_name =  time().'.jpg';
                  $storePath = $path .$file_name;
            }


        if($align == 'center'){
            $textXPosition = $img_width/2;
        }else if($align == 'right'){
            $textXPosition = $img_width - 150;
        }else{
            $textXPosition = 20;
        }

      

        if($color == 'blue'){
            $textColor = imagecolorallocate($img, 0, 200, 250);
        }else if($color == 'green'){
            $textColor = imagecolorallocate($img, 0, 255, 0);
        }else{
            $textColor = imagecolorallocate($img, 0, 0, 0);
        }

        $fontPath = dirname(__FILE__) . '/res/fonts/arial.ttf';
        imagettftext($img, 40, 0, $textXPosition, 50 + 2, $textColor, $fontPath, $heading);
        imagettftext($img, 25, 0, $img_width/20, $img_height*5.5/6 - 5, $textColor, $fontPath, $description);


        header('Content-Description: File Transfer');
        header("Content-type: application/octet-stream");
        header("Content-disposition: attachment; filename= " . $file_name. "");

       imagejpeg($img);
       imagedestroy($img); 

    } catch (\Throwable $th) {
        //throw $th;
        print_r($th);
    }

}
