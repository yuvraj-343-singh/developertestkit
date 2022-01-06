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
              <div class="col-5 sidebar">
                <?php include('sidebar.php'); ?>
              </div>

              <div class="col-7 main-section">
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

                  <div class="col- mb-3">
                    <div style="height: 2px; background-color: #cccccc; " class="col-9"></div>
                  </div>

                  <div class="col-12 d-flex mb-3" style="justify-content: space-around;">
                    <a href="https://google.com" onclick="return confirm('Are you sure you want to leave the page?')" ><button class="btn btn-primary ps-4 pe-5 rounded"><i class="fa fa-facebook ms-2 me-3"></i>Share</button></a>
                    <a href="https://google.com" onclick="return confirm('Are you sure you want to leave the page?')" ><button class="btn btn-info text-white ps-4 pe-5 rounded"><i class="fa fa-twitter ms-2 me-3"></i>Tweet</button></a>
                    <a href="https://google.com" onclick="return confirm('Are you sure you want to leave the page?')" ><button class="btn btn-danger text-white ps-4 pe-5 rounded"><i class="fa fa-pinterest ms-2 me-3"></i>Pin</button></a>
                    <a href="https://google.com" onclick="return confirm('Are you sure you want to leave the page?')" ><button class="btn text-white ps-4 pe-5 rounded" style="background-color: #7e7e7e;"><i class="fa fa-envelope ms-2 me-3"></i>Email</button></a>
                    <a href="https://google.com" onclick="return confirm('Are you sure you want to leave the page?')" ><button class="btn text-white ps-4 pe-5 rounded" style="background-color: #95d140;"><i class="fa fa-share-alt ms-2 me-3"></i>Email</button></a>
                  </div>
                </div>
              </div>
            </div>
        </div>
    </section>

    
<?php include('footer.php'); ?>