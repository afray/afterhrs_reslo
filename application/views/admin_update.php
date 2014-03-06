<html>
  <link rel="stylesheet" type="text/css" href="/~ccit1574/CCT460/assets/style.css">

 

<head>
   <title>Admin</title>
   </head>
   
   
   <body>
  <?php foreach($post as $p): ?> 
  <?php echo form_open('Admin/update_post/' . $p['id']) ?> 
     <h1><?php echo $title; ?> </h1>
     <label>Title</label>
     <input type="text" name = "title" value= "<?php echo $p['title']; ?>">

          <label>Content</label>
     <textarea name="content"><?php echo $p['content']; ?></textarea>
      <label> Categories</Label>
      <textarea name="categories"><?php echo $p['categories']; ?></textarea>

     <input type= "submit" name="submit" value="Save">



     </form>
     <?php endforeach; ?>
</body>
</html>

 <p> <a href= "http://phoenix.sheridanc.on.ca./~ccit1574/CCT460/index.php/Admin"> Go to Home</a> </p>