
<?php include_once 'header.php';?>
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Sponsor</h1>
                </div>
                <div class="col-lg-4">
                        <form action="#" method="POST" style="display:block;" enctype="multipart/form-data">
                        Image : <input type="file" class="form-control" name="data_upload">
                        Url : <input type="text" class="form-control" name="redirect" >
                        <input type="submit" class="btn btn-primary" style="margin-top:5px;" name="submit" value="Tambah">
                        </form>

                    <?php
                    if(isset($_POST['submit'])){

                        $eror		= false;
                        $folder		= '../../img/';
                        //type file yang bisa diupload
                        $file_type	= array('jpg','jpeg','png','gif','bmp','doc','docx','xls','xlsx','sql');
                        //tukuran maximum file yang dapat diupload
                        $max_size	= 1000000; // 1MB
                        $file_name	= $_FILES['data_upload']['name'];
                      	$file_size	= $_FILES['data_upload']['size'];
                      	//cari extensi file dengan menggunakan fungsi explode
                      	$explode	= explode('.',$file_name);
                      	$extensi	= $explode[count($explode)-1];

                      	//check apakah type file sudah sesuai
                      	if(!in_array($extensi,$file_type)){
                      		$eror   = true;
                      		$pesan .= '- Type file yang anda upload tidak sesuai<br />';
                      	}
                      	if($file_size > $max_size){
                      		$eror   = true;
                      		$pesan .= '- Ukuran file melebihi batas maximum<br />';
                      	}
                      	//check ukuran file apakah sudah sesuai

                      	if($eror == true){
                      		echo '<div id="eror">'.$pesan.'</div>';
                      	}
                      	else{
                          if(move_uploaded_file($_FILES['data_upload']['tmp_name'], $folder.$file_name)){
                            $insert= $db->query("INSERT INTO `sponsor`( `link`, `redirect`) VALUES ('$file_name','$_POST[redirect]')");
                            if($insert){
                                echo "<script>alert('Data Berhasil Di Tambah');</script>";
                                echo "<script>document.location= 'sponsor.php'</script>";
                            }else{
                                echo "<script>alert('Data tidak Berhasil Di Tambah');</script>";
                                echo "<script>document.location= 'sponsor.php'</script>";
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
                                          <th>Image</th>
                                          <th>Url</th>
                                          <th>Action</th>
                                      </tr>
                                  </thead>
                                  <tbody>

                                      <?php $result= $db->query('select * from sponsor');$a=0;?>
                                      <?php while($row = $result->fetch_assoc()){?>
                                      <tr>

                                          <td><?php $a++;echo $a;?></td>
                                          <td><img src="../../img/<?php echo $row['link'];?>" width="80"></td>
                                          <td><?php echo $row['redirect'];?></td>
                                          <td><a href="sponsor.php?action=delete&id=<?php echo $row['id'];?>">Delete</a></td>
                                      </tr>
                                      <?php }?>
                                  </tbody>
                              </table>
                              <?php
                              if(isset($_GET['action'])){
                                if($_GET['action'] == "delete"){
                                    $delete= $db->query("delete from sponsor where id='".$_GET['id']."'");
                                    if($delete){
                                        echo "<script>alert('Data Berhasil Di Delete');</script>";
                                        echo "<script>document.location= 'sponsor.php'</script>";
                                    }else{
                                        echo "<script>alert('Data tidak Berhasil Di Delete');</script>";
                                        echo "<script>document.location= 'sponsor.php'</script>";
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
