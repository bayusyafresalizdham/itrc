
<?php include_once 'header.php';?>
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Dashboard</h1>
                </div>
                <div class="col-lg-4">
                    <form action="#" method="POST">
                      <?php $result= $db->query('select * from lomba');?>
                      Tanggal Lomba : <input type="text" class="form-control" name="tgl" value="<?php while($row=$result->fetch_assoc()){echo $row['tgl'];}?>">
                      <input type="submit" class="btn btn-primary" style="margin-top:5px;" name="submit" value="Ubah">
                    </form>
                    <?php
                    if(isset($_POST['submit'])){
                      $res = $db->query("UPDATE lomba SET tgl='".$_POST['tgl']."' WHERE id='1'");
                      if($res){
                        echo "<script>alert('Data Berhasil Di ubah');</script>";
                      }else{
                          echo "<script>alert('Data Tidak Berhasil Di ubah');</script>";
                      }
                    }
                    ?>
                </div>
                <!-- /.col-lg-12 -->
            </div>
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->
<?php include_once 'footer.php';?>
