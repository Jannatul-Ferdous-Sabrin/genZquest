
<?php
include '../config.php';

$companyDetails = mysqli_query($conn, "SELECT * FROM `company`");
?>
    <link href="../CSS/bootstrap.min.css" rel="stylesheet">
<style>
	
.row {
  	margin-bottom:10px;
  }
  .grid-container {
  display: grid;
  grid-template-columns: auto auto auto auto;
  grid-gap: 10px;
  background-color: #2196F3;
  padding: 10px;
}
.grid-container > p {
  background-color: rgba(255, 255, 255, 0.8);
  text-align: center;
  padding: 20px 0;
  font-size: 30px;
}
</style>
<section id="content">
        <div class="grid-container content">     
        	<!-- Service Blcoks -->  
        	<div class="row">
				<?php
                	while ($row = mysqli_fetch_array($companyDetails)) {
                ?>
                    <div class="col-sm-4 info-blocks">
                        <i class="icon-info-blocks fa fa-building-o"></i>
                        <div class="info-blocks-in">
						<p><?php echo $row['COMPANYLOGO']; ?></p>
							<p><?php echo $row['COMPANYNAME']; ?></p>
                            <p>Address :<?php echo $row['COMPANYADDRESS']; ?></p>
                            <p>Contact No. :<?php echo $row['COMPANYEMAIL']; ?></p>
                        </div>
                    </div>
				<?php
					}
					?>
 
 
         	</div> 
        </div>
    </section>