<?php 
include('header.php');
require('db_config.php');
$posts = array();
$sql = "SELECT * FROM posts";
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
                    <div class="col-6 user-card">
                    <a style="text-decoration: none; outline:none; color: black;" href="detail.php?id=<?php echo $value['id']; ?>">
                      <div class="col-12">
                        <img src="<?php echo "assets/images/".$value['image']; ?>" class="w-100 user-img" alt="">
                        <div class="mt-2 date"><?php echo $value['posted_on']; ?></div>
                        <div class=" mt-1 title"><?php echo $value['title']; ?> </div>
                        <div class="mt-2 description"><?php echo $value['short_description']; ?></div>
                      </div>
                    </a>
                    </div>
                  <?php } ?>

          

                </div>
              </div>
            </div>
        </div>
    </section>

<?php include('footer.php'); ?>