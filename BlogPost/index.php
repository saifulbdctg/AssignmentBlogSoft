
<HTML>
<HEAD>
<TITLE>Simple PHP Shopping Cart</TITLE>
<link href="style.css" type="text/css" rel="stylesheet" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
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
  transition: background-color 0.3s ease-in-out;
}

nav a:hover {
  background-color: #fff;
  color: #333;
}

/* Featured post section */
.featured-post {
  margin: 2rem auto;
  max-width: 960px;
}

.featured-post h2 {
  text-align: center;
  margin-bottom: 2rem;
}

.post {
  display: flex;
  margin-bottom: 2rem;
}

.post img {
  width: 300px;
  margin-right: 2rem;
}

.post-content {
  flex: 1;
}

.post-content h3 a {
  color: #333;
}

.post-content p {
  margin-top: 1rem;
}

</style>
</HEAD>
<BODY>
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
    <section class="featured-post">
      <h2>Featured Post</h2>
      <div class="post">
        <img src="post-image.jpg" alt="Post Image">
        <div class="post-content">
          <h3><a href="#">Post Title</a></h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed suscipit ante vel nulla lacinia, quis elementum nunc convallis.</p>
        </div>
      </div>
    </section>
  </main>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</BODY>
</HTML>