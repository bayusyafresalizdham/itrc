
<?php include_once 'header.php';?>
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Download</h1>
                </div>
                <div class="col-lg-4">
                        <form action="#" method="POST" style="display:block;" enctype="multipart/form-data">
                          <h3>POSTER</h3>
                          File : <input type="file" class="form-control" name="data_upload">
                          <?php
                          $res = $db->query("select * from download where id='1'");
                          while($row = $res->fetch_assoc()){
                            echo "File Saat ini : ".$row['name'];
                          }
                          ?><br>
                          <input type="submit" class="btn btn-primary" style="margin-top:5px;" name="submit1" value="Ubah">
                          <h3>Rules</h3>
                          File : <input type="file" class="form-control" name="data_upload1">
                          <?php
                          $res = $db->query("select * from download where id='2'");
                          while($row = $res->fetch_assoc()){
                            echo "File Saat ini : ".$row['name'];
                          }
                          ?><br>
                          <input type="submit" class="btn btn-primary" style="margin-top:5px;" name="submit2" value="Ubah">
                          <h3>Soal</h3>
                          File : <input type="file" class="form-control" name="data_upload2">
                          <?php
                          $res = $db->query("select * from download where id='3'");
                          while($row = $res->fetch_assoc()){
                            echo "File Saat ini : ".$row['name'];
                          }
                          ?><br>
                          <input type="submit" class="btn btn-primary" style="margin-top:5px;" name="submit3" value="Ubah">
                        </form>

                    <?php
                    if(isset($_POST['submit1'])){
                      $eror		= false;
                      $folder		= '../../';
                      //type file yang bisa diupload
                      $file_type	= array('jpg','jpeg','png','gif','bmp','doc','docx','xls','xlsx','sql');
                      //tukuran maximum file yang dapat diupload
                      $max_size	= 10000000; // 1MB
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
                          $insert= $db->query("update download set name='".$file_name."' where id='1'");
                          if($insert){
                              echo "<script>alert('Data Berhasil Di Ubah');</script>";
                              echo "<script>document.location= 'download.php'</script>";
                          }else{
                              echo "<script>alert('Data tidak Berhasil Di Ubah');</script>";
                              echo "<script>document.location= 'download.php'</script>";
                          }
                        }
                      }
                    }
                    else if(isset($_POST['submit2'])){
                        $eror		= false;
                        $folder		= '../../';
                        //type file yang bisa diupload
                        $file_type	= array('jpg','jpeg','png','gif','bmp','doc','docx','xls','xlsx','sql','pdf');
                        //tukuran maximum file yang dapat diupload
                        $max_size	= 10000000; // 1MB
                        $file_name	= $_FILES['data_upload1']['name'];
                        $file_size	= $_FILES['data_upload1']['size'];
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
                          if(move_uploaded_file($_FILES['data_upload1']['tmp_name'], $folder.$file_name)){
                            $insert= $db->query("update download set name='".$file_name."' where id='2'");
                            if($insert){
                                echo "<script>alert('Data Berhasil Di Ubah');</script>";
                                echo "<script>document.location= 'download.php'</script>";
                            }else{
                                echo "<script>alert('Data tidak Berhasil Di Ubah');</script>";
                                echo "<script>document.location= 'download.php'</script>";
                            }
                          }
                        }
                      }
                      else if(isset($_POST['submit3'])){
                          $eror		= false;
                          $folder		= '../../';
                          //type file yang bisa diupload
                          $file_type	= array('jpg','jpeg','png','gif','bmp','doc','docx','xls','xlsx','sql','pdf');
                          //tukuran maximum file yang dapat diupload
                          $max_size	= 10000000; // 1MB
                          $file_name	= $_FILES['data_upload2']['name'];
                          $file_size	= $_FILES['data_upload2']['size'];
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
                            if(move_uploaded_file($_FILES['data_upload2']['tmp_name'], $folder.$file_name)){
                              $insert= $db->query("update download set name='".$file_name."' where id='3'");
                              if($insert){
                                  echo "<script>alert('Data Berhasil Di Ubah');</script>";
                                  echo "<script>document.location= 'download.php'</script>";
                              }else{
                                  echo "<script>alert('Data tidak Berhasil Di Ubah');</script>";
                                  echo "<script>document.location= 'download.php'</script>";
                              }
                            }
                          }
                        }

                    ?>
                </div>
            </div>
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->
<?php include_once 'footer.php';?>
