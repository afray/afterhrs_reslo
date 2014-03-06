
<!DOCTYPE html> 

<html> 
  <head> 
    <title>Admin</title> 
  </head> 

  <body> 


<h1><?php echo $title; ?> </h1> 
<?php echo form_open('Admin/create') ?> 
  <label>Title</label> 
  <input type="text" name="title"> 
  <label>Content</label> 
  <textarea name="content"></textarea> 
   <label>Categories</label> 
  <input type="text" name="categories"> 
  <input type="submit" name="submit" value="Create"> 
</form> 

<h2>Edit Posts</h2> 
<ul> 
  <?php foreach($posts as $post): ?> 
    <li><a href="/~ccit1574/CCT460/index.php/Admin/update/<?php echo $post['id']; ?>"><?php echo $post['title']; ?></a> | <a href="/~ccit1574/CCT460/index.php/Admin/delete/<?php echo $post['id']; ?>">delete post</a></li>
  <?php endforeach; ?> 
</ul>
 </body> 

</html>