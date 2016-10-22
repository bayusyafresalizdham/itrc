
<?php include_once 'header.php';?>
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Detail</h1>
                </div>
                <div class="col-lg-4">
                        <form action="#" method="POST" style="display:block;">
                        Title : <input type="text" class="form-control" name="title" value="<?php  if(isset($_GET['action'])){  if($_GET['action'] == "edit"){echo $_GET['title'];}}?>" readonly>
                        Biaya : <input type="text" <?php  if(!isset($_GET['action'])){ echo "disabled";}?>  class="form-control" name="biaya" value="<?php  if(isset($_GET['action'])){  if($_GET['action'] == "edit"){echo $_GET['biaya'];}}?>" >
                        Peserta : <input type="text" <?php  if(!isset($_GET['action'])){ echo "disabled";}?> class="form-control" name="peserta" value="<?php  if(isset($_GET['action'])){  if($_GET['action'] == "edit"){echo $_GET['peserta'];}}?>">
                        <input type="submit" <?php  if(!isset($_GET['action'])){ echo "disabled";}?> class="btn btn-primary" style="margin-top:5px;" name="submit" value="Ubah">
                        </form>

                    <?php
                    if(isset($_POST['submit'])){

                      if(isset($_GET['action'])){
                        if($_GET['action'] == "edit"){
                          $delete= $db->query("update detail set title='".$_POST['title']."',biaya='".$_POST['biaya']."',peserta='".$_POST['peserta']."' where id='".$_GET['id']."'");
                          if($delete){
                              echo "<script>alert('Data Berhasil Di Update');</script>";
                              echo "<script>document.location= 'detail.php'</script>";
                          }else{
                              echo "<script>alert('Data tidak Berhasil Di Update');</script>";
                              echo "<script>document.location= 'detail.php'</script>";
                          }
                        }
                      }
                    }
                    ?>
                </div>
                <div class="col-lg-12" style="margin-top:20px;">
                  <div class="panel panel-default">
                      <div class="panel-heading">
                          Basic Table
                      </div>
                      <!-- /.panel-heading -->
                      <div class="panel-body">
                          <div class="table-responsive">
                              <table class="table">
                                  <thead>
                                      <tr>
                                          <th>No.</th>
                                          <th>title</th>
                                          <th>biaya</th>
                                          <th>peserta</th>
                                          <th>Action</th>
                                      </tr>
                                  </thead>
                                  <tbody>

                                      <?php $result= $db->query('select * from detail');$a=0;?>
                                      <?php while($row = $result->fetch_assoc()){?>
                                      <tr>

                                          <td><?php $a++;echo $a;?></td>
                                          <td><?php echo $row['title'];?></td>
                                          <td><?php echo $row['biaya'];?></td>
                                          <td><?php echo $row['peserta'];?></td>
                                          <td>
                                          <a href="detail.php?action=edit&id=<?php echo $row['id'];?>&title=<?php echo $row['title'];?>&biaya=<?php echo $row['biaya']; ?>&peserta=<?php echo $row['peserta']; ?>">Edit</a></td>
                                      </tr>
                                      <?php }?>
                                  </tbody>
                              </table>
                          </div>
                          <!-- /.table-responsive -->
                      </div>
                      <!-- /.panel-body -->
                  </div>

                </div>
                <!-- /.col-lg-12 -->
            </div>
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->
<?php include_once 'footer.php';?>
