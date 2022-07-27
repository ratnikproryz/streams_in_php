<?php 
    $source = fopen('file://'.__DIR__.'/text/email.txt', 'r');
    $dest = fopen('file://'.__DIR__.'/text/copy_email.txt', 'w');
    while(1){
        $index= ftell($source);
        $email= fgets($source);
        if($email){
            echo $index." - ".$email."<br>";
            fputs($dest, $email);
        }
        else{
            break;
        }
    }
    // stream_copy_to_stream($source, $dest);
    fclose($source);
    fclose($dest);
  
