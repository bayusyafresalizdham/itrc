
<?php include_once 'header.php';?>
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Dashboard</h1>
                </div>
                <div class="col-lg-4">
                        <form action="#" method="POST" style="display:block;">
                        Title : <input type="text" class="form-control" name="title" value="<?php  if(isset($_GET['action'])){  if($_GET['action'] == "edit"){echo $_GET['title'];}}?>">
                        Child Title : <input type="text" class="form-control" name="child_title" value="<?php  if(isset($_GET['action'])){  if($_GET['action'] == "edit"){echo $_GET['child_title'];}}?>">
                        Desc : <input type="text" class="form-control" name="desc" value="<?php  if(isset($_GET['action'])){  if($_GET['action'] == "edit"){echo $_GET['desc'];}}?>">
                        Category : <select name="category" class="form-control">
                        <?php $cat= $db->query("select * from category ");
                        while($row1 = $cat->fetch_assoc()){?>
                          <option value="<?php echo $row1['id'];?>" <?php  if(isset($_GET['action'])){  if($_GET['action'] == "edit"){if($row1['id']==$_GET['id']){ echo "selected";}}}?>><?php echo $row1['title'];?></option>
                        <?php }?>
                      </select>
                        <input type="submit" class="btn btn-primary" style="margin-top:5px;" name="submit" value="<?php  if(isset($_GET['action'])){  if($_GET['action'] == "edit"){echo 'Ubah';}else{echo 'Tambah';}}else{echo 'Tambah';}?>">
                        </form>

                    <?php
                    if(isset($_POST['submit'])){

                      if(isset($_GET['action'])){
                        if($_GET['action'] == "edit"){
                          $delete= $db->query("update acara set title='".$_POST['title']."',child_title='".$_POST['child_title']."',description='".$_POST['desc']."',category='".$_POST['category']."' where id='".$_GET['id']."'");
                          if($delete){
                              echo "<script>alert('Data Berhasil Di Update');</script>";
                              echo "<script>document.location= 'acara.php'</script>";
                          }else{
                              echo "<script>alert('Data tidak Berhasil Di Update');</script>";
                              echo "<script>document.location= 'acara.php'</script>";
                          }
                        }
                      }else{
                        $insert= $db->query("INSERT INTO `acara`( `title`, `child_title`, `desc`, `category`) VALUES ('$_POST[title]','$_POST[child_title]','$_POST[desc]','$_POST[category]')");
                        if($insert){
                            echo "<script>alert('Data Berhasil Di Tambah');</script>";
                            echo "<script>document.location= 'acara.php'</script>";
                        }else{
                            echo "<script>alert('Data tidak Berhasil Di Tambah');</script>";
                            echo "<script>document.location= 'acara.php'</script>";
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
                                          <th>Title</th>
                                          <th>Child Title</th>
                                          <th>Desc</th>
                                          <th>Category</th>
                                          <th>Action</th>
                                      </tr>
                                  </thead>
                                  <tbody>

                                      <?php $result= $db->query('select * from acara');$a=0;?>
                                      <?php while($row = $result->fetch_assoc()){?>
                                      <tr>

                                          <td><?php $a++;echo $a;?></td>
                                          <td><?php echo $row['title'];?></td>
                                          <td><?php echo $row['child_title'];?></td>
                                          <td><?php echo $row['description'];?></td>
                                          <?php $cat= $db->query("select * from category where id='".$row['category']."'");
                                          while($row1 = $cat->fetch_assoc()){?>
                                          <td><?php echo $row1['title'];?></td>
                                          <?php }?>
                                          <td><a href="acara.php?action=delete&id=<?php echo $row['id'];?>">Delete</a>
                                          <a href="acara.php?action=edit&id=<?php echo $row['id'];?>&title=<?php echo $row['title'];?>&child_title=<?php echo $row['child_title']; ?>&desc=<?php echo $row['description'];?>&category=<?php echo $row['category'];?>">Edit</a></td>
                                      </tr>
                                      <?php }?>
                                  </tbody>
                              </table>
                              <?php
                              if(isset($_GET['action'])){
                                if($_GET['action'] == "delete"){
                                    $delete= $db->query("delete from acara where id='".$_GET['id']."'");
                                    if($delete){
                                        echo "<script>alert('Data Berhasil Di Delete');</script>";
                                        echo "<script>document.location= 'acara.php'</script>";
                                    }else{
                                        echo "<script>alert('Data tidak Berhasil Di Delete');</script>";
                                        echo "<script>document.location= 'acara.php'</script>";
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
