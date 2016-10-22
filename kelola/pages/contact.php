
<?php include_once 'header.php';?>
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Contact</h1>
                </div>
                <div class="col-lg-4">
                        <form action="#" method="POST" style="display:block;">
                        Title : <input type="text" class="form-control" name="title" value="<?php  if(isset($_GET['action'])){  if($_GET['action'] == "edit"){echo $_GET['title'];}}?>">
                        Contact : <input type="text" class="form-control" name="contact" value="<?php  if(isset($_GET['action'])){  if($_GET['action'] == "edit"){echo $_GET['contact'];}}?>">
                        Url : <input type="text" class="form-control" name="url" value="<?php  if(isset($_GET['action'])){  if($_GET['action'] == "edit"){echo $_GET['url'];}}?>">
                        <input type="submit" class="btn btn-primary" style="margin-top:5px;" name="submit" value="<?php  if(isset($_GET['action'])){  if($_GET['action'] == "edit"){echo 'Ubah';}else{echo 'Tambah';}}else{echo 'Tambah';}?>">
                        </form>

                    <?php
                    if(isset($_POST['submit'])){

                      if(isset($_GET['action'])){
                        if($_GET['action'] == "edit"){
                          $delete= $db->query("update contact set title='".$_POST['title']."',contact='".$_POST['contact']."',url ='".$_POST['url']."' where id='".$_GET['id']."'");
                          if($delete){
                              echo "<script>alert('Data Berhasil Di Update');</script>";
                              echo "<script>document.location= 'contact.php'</script>";
                          }else{
                              echo "<script>alert('Data tidak Berhasil Di Update');</script>";
                              echo "<script>document.location= 'contact.php'</script>";
                          }
                        }
                      }else{
                        $insert= $db->query("INSERT INTO `contact`( `title`, `contact`, `url`) VALUES ('$_POST[title]','$_POST[contact]','$_POST[url]')");
                        if($insert){
                            echo "<script>alert('Data Berhasil Di Tambah');</script>";
                            echo "<script>document.location= 'contact.php'</script>";
                        }else{
                            echo "<script>alert('Data tidak Berhasil Di Tambah');</script>";
                            echo "<script>document.location= 'contact.php'</script>";
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
                                          <th>Name</th>
                                          <th>Contact</th>
                                          <th>URL</th>
                                          <th>Action</th>
                                      </tr>
                                  </thead>
                                  <tbody>

                                      <?php $result= $db->query('select * from contact');$a=0;?>
                                      <?php while($row = $result->fetch_assoc()){?>
                                      <tr>

                                          <td><?php $a++;echo $a;?></td>
                                          <td><?php echo $row['title'];?></td>
                                          <td><?php echo $row['contact'];?></td>
                                          <td><?php echo $row['url'];?></td>
                                          <td><a href="contact.php?action=delete&id=<?php echo $row['id'];?>">Delete</a>
                                          <a href="contact.php?action=edit&id=<?php echo $row['id'];?>&title=<?php echo $row['title'];?>&contact=<?php echo $row['contact']; ?>&url=<?php echo $row['url'];?>">Edit</a></td>
                                      </tr>
                                      <?php }?>
                                  </tbody>
                              </table>
                              <?php
                              if(isset($_GET['action'])){
                                if($_GET['action'] == "delete"){
                                    $delete= $db->query("delete from contact where id='".$_GET['id']."'");
                                    if($delete){
                                        echo "<script>alert('Data Berhasil Di Delete');</script>";
                                        echo "<script>document.location= 'contact.php'</script>";
                                    }else{
                                        echo "<script>alert('Data tidak Berhasil Di Delete');</script>";
                                        echo "<script>document.location= 'contact.php'</script>";
                                    }
                                }
                              }
                              ?>
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
