<?php include('../../public/template/site/header_main.php');?>
 
<div class="contain-right">
    <div class="control-page space control-page" style="margin-left:50px;margin-top:10px;">
        <i class="material-icon fas fa-chevron-circle-left fs-3 ml-5 myIconArrow ">
            <a href="#" target="_blank"
                rel="noopener noreferrer">
            </a>
        </i>
        <i class="material-icon fas fa-chevron-circle-right fs-3 pl-5 myIconArrow "></i>
    </div>
    <div class="box-search">
        <div class="form-search">
            <form class="">
                <input class="search-input" type="text" name="search" id="search" placeholder="Nghệ sĩ, bài hát, hoặc postcard"> 
                <i class=" icon-search bi bi-search"></i>
            </form>
        </div>
    </div>
    <div class="header-material space">
        <div class=" dropdown space">
            <i class="material-icon bi bi-person-circle"></i>
            <a class="nav-linkk dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Phạm Thị Phương Nga</a>
            <ul class="dropdown-menu mauchu"style="">
                <li><a class="dropdown-item" href="#">Tài khoản</a></li>
                <li><a class="dropdown-item" href="#">Hồ sơ</a></li>
                <li><a class="dropdown-item" href="#">Nâng cấp lên Premium</a></li>
                <li><a class="dropdown-item" href="#">Đăng xuất</a></li>
            </ul>
        </div>
    </div>
</div>        
<div class="main">
    <div class="main-inner-vien">
        <div class="form-item text">
            <div class="title-h space">
                <h4 class=""style="font-weight:700; letter-spacing:-1.5px;">Duyệt tìm tất cả</h4>
            </div>
            <div class="clear"></div>
            <div class="row">
            <?php 
                $conn= mysqli_connect('localhost','root','','spotify');
                if(!$conn)
                {
                    die('Kết nối thất bại');
                }
                $sql = "SELECT * FROM `categories`";
                $result = mysqli_query($conn,$sql);
                if(mysqli_num_rows($result) > 0){
                    while($row = mysqli_fetch_assoc($result)){
            ?> 
                
                    <div class="col-md-2 vien-item">
                        <a href="<?php echo $row['link']?>">
                            <div  class="image-content"style="background-color: <?php echo $row['maunen'] ?>;">
                                <img src="<?php echo $row['anh'] ?>" class="card-img-topp image-item" alt="..."width="auto">
                                <div class="caption mauchu">
                                    <h4 style="font-weight:700;"><?php echo $row['ten'] ?></h4>
                                </div>
                            </div>
                        </a>
                    </div>
            <?php }}?>
            </div>
        </div>
    </div>
</div>
<?php include('../../public/template/site/footer_main.php');?>