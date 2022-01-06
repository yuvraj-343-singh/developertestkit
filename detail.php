<?php 
include('header.php');
require('db_config.php'); 
$id = $_GET['id'];
$posts = array();
$sql = "SELECT * FROM posts WHERE id = '$id'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    $posts[] = $row;
  }
} else {
  echo "0 results";
}

?>


  <style>
      .user-card img {
          height: 393px;
      }
     
  </style>

  <body>
    <section class="wrapper">
        <div class="container">
            <div class="row">
              <div class="col-md-5 sidebar">
                <?php include('sidebar.php'); ?>
              </div>

              <div class="col-md-7 main-section">
                <div class="row">
                  <div class="col-12 "><div class="mb-5 news">NEWS</div></div>
                  
                  <?php foreach($posts as $key => $value) { ?>
                    <div class="col-12 user-card">
                      <div class="col-12">
                        <img src="<?php echo "assets/images/".$value['image']; ?>" class="w-100 user-img" alt="">
                        <div class="mt-3 date"><?php echo $value['posted_on']; ?></div>
                        <div class=" mt-1 title fw-bold"><?php echo $value['title']; ?> </div>
                        <div class="mt-2 description"><?php echo $value['description']; ?></div>
                      </div>
                    </div>
                  <?php } ?>

                  <div class="col-12 mb-3">
                    <div style="height: 2px; background-color: #cccccc; " class="col-9"></div>
                  </div>

                  <div class="col-12 row g-2 mb-3 footer">
                    <a href="https://google.com"  onclick="return confirm('Are you sure you want to leave the page?')" >
                      <button class="btn btn-primary px-3 rounded"><i class="fa fa-facebook  me-3"></i>Share</button>
                    </a>
                    <a href="https://google.com"  onclick="return confirm('Are you sure you want to leave the page?')" >
                      <button class="btn btn-info text-white px-3 rounded"><i class="fa fa-twitter  me-3"></i>Tweet</button>
                    </a>
                    <a href="https://google.com"  onclick="return confirm('Are you sure you want to leave the page?')" >
                      <button class="btn btn-danger text-white px-3 rounded"><i class="fa fa-pinterest  me-3"></i>Pin</button>
                    </a>
                    <a href="https://google.com"  onclick="return confirm('Are you sure you want to leave the page?')" >
                      <button class="btn text-white px-3 rounded" style="background-color: #7e7e7e;"><i class="fa fa-envelope  me-3"></i>Email</button>
                    </a>
                    <a href="https://google.com"  onclick="return confirm('Are you sure you want to leave the page?')" >
                      <button class="btn text-white px-3 rounded" style="background-color: #95d140;"><i class="fa fa-share-alt me-3"></i>Email</button>
                    </a>
                  </div>
                </div>
              </div>
            </div>
        </div>
    </section>

    
<?php include('footer.php'); ?>