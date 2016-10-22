
<?php include_once 'header.php';?>
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">FAQ</h1>
                </div>
                <div class="col-lg-4">
                        <form action="#" method="POST" style="display:block;">
                        Question : <input type="text" class="form-control" name="ask" value="<?php  if(isset($_GET['action'])){  if($_GET['action'] == "edit"){echo $_GET['ask'];}}?>">
                        Answer : <input type="text" class="form-control" name="answer" value="<?php  if(isset($_GET['action'])){  if($_GET['action'] == "edit"){echo $_GET['answer'];}}?>">
                        <input type="submit" class="btn btn-primary" style="margin-top:5px;" name="submit" value="<?php  if(isset($_GET['action'])){  if($_GET['action'] == "edit"){echo 'Ubah';}else{echo 'Tambah';}}else{echo 'Tambah';}?>">
                        </form>

                    <?php
                    if(isset($_POST['submit'])){

                      if(isset($_GET['action'])){
                        if($_GET['action'] == "edit"){
                          $delete= $db->query("update faq set ask='".$_POST['ask']."',answer='".$_POST['answer']."' where id='".$_GET['id']."'");
                          if($delete){
                              echo "<script>alert('Data Berhasil Di Update');</script>";
                              echo "<script>document.location= 'faq.php'</script>";
                          }else{
                              echo "<script>alert('Data tidak Berhasil Di Update');</script>";
                              echo "<script>document.location= 'faq.php'</script>";
                          }
                        }
                      }else{
                        $insert= $db->query("INSERT INTO `faq`( `ask`, `answer`) VALUES ('$_POST[ask]','$_POST[answer]')");
                        if($insert){
                            echo "<script>alert('Data Berhasil Di Tambah');</script>";
                            echo "<script>document.location= 'faq.php'</script>";
                        }else{
                            echo "<script>alert('Data tidak Berhasil Di Tambah');</script>";
                            echo "<script>document.location= 'faq.php'</script>";
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
                                          <th>Question</th>
                                          <th>Answer</th>
                                          <th>Action</th>
                                      </tr>
                                  </thead>
                                  <tbody>

                                      <?php $result= $db->query('select * from faq');$a=0;?>
                                      <?php while($row = $result->fetch_assoc()){?>
                                      <tr>

                                          <td><?php $a++;echo $a;?></td>
                                          <td><?php echo $row['ask'];?></td>
                                          <td><?php echo $row['answer'];?></td>
                                          <td><a href="faq.php?action=delete&id=<?php echo $row['id'];?>">Delete</a>
                                          <a href="faq.php?action=edit&id=<?php echo $row['id'];?>&ask=<?php echo $row['ask'];?>&answer=<?php echo $row['answer']; ?>">Edit</a></td>
                                      </tr>
                                      <?php }?>
                                  </tbody>
                              </table>
                              <?php
                              if(isset($_GET['action'])){
                                if($_GET['action'] == "delete"){
                                    $delete= $db->query("delete from faq where id='".$_GET['id']."'");
                                    if($delete){
                                        echo "<script>alert('Data Berhasil Di Delete');</script>";
                                        echo "<script>document.location= 'faq.php'</script>";
                                    }else{
                                        echo "<script>alert('Data tidak Berhasil Di Delete');</script>";
                                        echo "<script>document.location= 'faq.php'</script>";
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
