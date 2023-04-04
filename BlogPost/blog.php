
<?php
session_start();
require_once("dbcontroller.php");
$db_handle = new DBController();

			
	

?>



<!DOCTYPE html>
<html lang="en">
<head>
<style>
/* Header */
header {
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 1rem;
  background-color: #333;
  color: #fff;
}

.logo img {
  width: 150px;
}

nav ul {
  display: flex;
  gap: 1rem;
  list-style: none;
}

nav a {
  color: #fff;
  text-decoration: none;
  font-weight: bold;
  padding: 0.5rem;
  border-radius: 5px;
 

</style>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>My Blog - Blog</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <header>
    <div class="logo">
      <img src="logo.png" alt="My Blog">
    </div>
    <nav>
      <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="blog.php">Blog</a></li>
        <li><a href="contact.php">Contact</a></li>
      </ul>
    </nav>
  </header>
  
  <main>
    <div class="container">
      <section class="blog-posts">
        <h2>Blog Posts</h2>
        <?php
        $product_array = $db_handle->runQuery("SELECT * FROM blog ORDER BY id DESC");
        if (!empty($product_array)) { 
            foreach($product_array as $key=>$value){
        ?>
        <div class="post">
          <div class="post-image">
            <img src="post2-image.jpg" alt="Post 2 Image">
          </div>
          <div class="post-content">
            <h3><a href="#"><?php echo $product_array[$key]["title"]; ?></a></h3>
            <p><?php echo substr($product_array[$key]["message"], 0, 100).'....'; ?></p>
            <a href="ReadMore.php" class="read-more">Read More</a>
          </div>
        </div>
        <?php
          }
         }
        ?>
        /* <!-- add more posts here -->
      </section>
      
      <aside class="sidebar">
        <form>
          <input type="text" placeholder="Search...">
          <button type="submit">Go</button>
        </form>
        <h3>Categories</h3>
        <ul>
          <li><a href="#">Category 1</a></li>
          <li><a href="#">Category 2</a></li>
          <li><a href="#">Category 3</a></li>
          <!-- add more categories here -->
        </ul>
      </aside> */
    </div>
  </main>
</body>
</html>
