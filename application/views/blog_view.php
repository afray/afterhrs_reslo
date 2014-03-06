<!DOCTYPE html>
<link rel="stylesheet" type="text/css" href="/~ccit1574/CCT460/assets/style2.css">
   <p> <a href= "http://phoenix.sheridanc.on.ca./~ccit1574/CCT460/index.php/Admin"> Go to Home</a> </p>
  

<html>
  <head>
     <title> Blog</title>
  </head>
  
  <body>
    <h1><?php echo $title;?></h1>
   <?php foreach($posts as $post):?>
   <h2><?php echo $post['title'];?></h2> 
   <p> <?php echo $post['content'];?></p>
  <p> <?php echo $post['categories'];?></p>
   
   <?php endforeach; ?>
   
  </body>
  
  </html>

