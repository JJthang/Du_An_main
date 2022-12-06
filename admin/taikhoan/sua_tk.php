<!-- <?php 
     if (is_array($sua_tk)) {
        extract($sua_tk);
     }
?> -->

<div class="container-fluid">
        <div class="khung_list_title" style="width: 100%;height: 50px;">
            <h1>Cập nhật tài khoản</h1>
        </div>
        <div class="show_update">
        <form action="index.php?act=updatetk" method="post" enctype="multipart/form-data">

           <div class="Nhap_ten_sp">
            <label for="" >
                Tên tài khoản :
            </label>
            <br>
            <input type="text" class="import" name="name_tk" value="<?php echo $name_tk ?>">
           </div>
           <div class="Nhap_gia_sp">
           <label for="" >
                Pass tài khoản :
            </label>
            <br>
            <input type="text" class="import" name="pass_tk" value="<?php echo $pass_tk ?>">
           </div>
           
           <div class="Nhap_anh_sp">
           <label for="" >
                Email tài khoản :
            </label>
            <br>
            <input type="text" class="import" name="email_tk" value="<?php echo $email_tk ?>">
           </div>
           <div class="Nhap_gia_sp">
           <label for="" >
                Address tài khoản :
            </label>
            <br>
            <input type="text" class="import" name="address_tk" value="<?php echo $address_tk ?>">
           </div>
           <div class="Nhap_gia_sp">
           <label for="" >
                Tel tài khoản :
            </label>
            <br>
            <input type="text" class="import" name="tel_tk" value="<?php echo $tel_tk ?>">
            </div>
            <div class="chucnang">
            <input type="hidden" name="id_tk" value="<?=$id_tk?>">
            <input type="submit" name="capnhat" id="" value="Cập nhật" style="color: #fff;background-color: #7460ee;border-color: #7460ee; border-radius: 2px; width: 80px; height: 35px; cursor: pointer;">
                <a href="index.php?act=listtk" style="padding-left: 10px;">
                    <input type="button" id="" value="Danh sách" style="color: #fff;background-color: #6c757d;border-color: #6c757d; border-radius: 2px; width: 80px; height: 35px; cursor: pointer;">
                </a>
            </div>
            <?php
            if (isset($thongbao) && $thongbao != "") {
                echo $thongbao;
            }
            ?>
        </form>
        </div>
</div>