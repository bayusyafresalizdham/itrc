
<?php include_once 'header.php';?>
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Pemenang</h1>
                </div>
                <div class="col-lg-4">
                        <form action="#" method="POST" style="display:block;">
                        Nama : <input type="text" <?php  if(!isset($_GET['action'])){ echo "disabled";}?>  class="form-control" name="nama" value="<?php  if(isset($_GET['action'])){  if($_GET['action'] == "edit"){echo $_GET['nama'];}}?>">
                        Sekolah : <input type="text" <?php  if(!isset($_GET['action'])){ echo "disabled";}?> class="form-control" name="sekolah" value="<?php  if(isset($_GET['action'])){  if($_GET['action'] == "edit"){echo $_GET['sekolah'];}}?>">
                        <input type="submit" <?php  if(!isset($_GET['action'])){ echo "disabled";}?> class="btn btn-primary" style="margin-top:5px;" name="submit" value="<?php  if(isset($_GET['action'])){  if($_GET['action'] == "edit"){echo 'Ubah';}else{echo 'Tambah';}}else{echo 'Tambah';}?>">
                        </form>

                    <?php
                    if(isset($_POST['submit'])){

                      if(isset($_GET['action'])){
                        if($_GET['action'] == "edit"){
                          $delete= $db->query("update pemanang set nama='".$_POST['nama']."',sekolah='".$_POST['sekolah']."' where id='".$_GET['id']."'");
                          if($delete){
                              echo "<script>alert('Data Berhasil Di Update');</script>";
                              echo "<script>document.location= 'pemenang.php'</script>";
                          }else{
                              echo "<script>alert('Data tidak Berhasil Di Update');</script>";
                              echo "<script>document.location= 'pemenang.php'</script>";
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
                                          <th>Nama</th>
                                          <th>Sekolah</th>
                                          <th>Kategori</th>
                                          <th>Juara</th>
                                          <th>Action</th>
                                      </tr>
                                  </thead>
                                  <tbody>

                                      <?php $result= $db->query('select * from pemanang');$a=0;?>
                                      <?php while($row = $result->fetch_assoc()){?>
                                      <tr>

                                          <td><?php $a++;echo $a;?></td>
                                          <td><?php echo $row['nama'];?></td>
                                          <td><?php echo $row['sekolah'];?></td>
                                          <td><?php if($row['role'] =="1")echo "SMA"; else echo "SMP";?></td>
                                          <td><?php echo $row['juara'];?></td>
                                          <td>
                                          <a href="pemenang.php?action=edit&id=<?php echo $row['id'];?>&nama=<?php echo $row['nama'];?>&sekolah=<?php echo $row['sekolah']; ?>">Edit</a></td>
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
