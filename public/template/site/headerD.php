<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Spotify-Thư viện</title>
    <!-- cdn boostrap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- cdn fontawesome -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <!-- cdn icon boostrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../../../public\css\styleD.css">
</head>

<body>
    <div class="warmp">
        <header class="warmp-header">
            <div class="banner-left text-center ">
                <div class="logo-banner d-flex">
                    <!-- <a class="nav-item-logo" href="#"><img src="../img/LogoSpotify.PNG" alt="Logo Spotify" width="170px"></a> -->
                    <i class="fab fa-spotify fs-1 text-light "></i>
                    <p><span class="text-light fs-4"> Spotify</span></p>
                </div>
                <div class="contain-ban">
                    <ul class="nav flex-column nav-bottom">
                        <li class="nav-item roww">
                            <i class="material-icon bi bi-house-door"></i>
                            <a class="nav-linkk " href="../index/home.php">Trang chủ</a>
                        </li>
                        <li class="nav-item roww">
                            <i class="material-icon bi bi-search"></i>
                            <a class="nav-linkk" href="../index/search.php">Tìm kiếm</a>
                        </li>
                        <li class="nav-item roww">
                            <i class="material-icon bi bi-book"></i>
                            <a class="nav-linkk" href="#">Thư viện</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-linkk"></a>
                        </li>
                        <li class="nav-item roww">
                            <i class="material-icon bi bi-plus-square"></i>
                            <a class="nav-linkk" href="#">Tạo playlist</a>
                        </li>
                        <li class="nav-item roww">
                            <i class="material-icon bi bi-suit-heart"></i>
                            <a class="nav-linkk" href="#">Bài hát đã thích</a>
                        </li>
                    </ul>
                    <div class="list-playlist ">
                        <ul style="padding-left: 0px ;">
                            <li class="list-unstyled "><a class="nav-linkk " href="">Playlist của tôi #1</a></li>
                            <li class="list-unstyled"><a class="nav-linkk" href="">Playlist của tôi #1</a></li>
                        </ul>
                    </div>
                </div>
                <div class="download-app text-light ">
                    <i class="far fa-arrow-alt-circle-down"></i> Cài đặt ứng dụng
                </div>
            </div>
        </header>
        <main class="bg-dark my-main">
            <div class="main-top p-3 navbar">

                <ul class="nav nav-pills d-flex align-items-center ">
                    <i class="fas fa-chevron-circle-left fs-3 ml-5 myIconArrow"><a href="#" target="_blank"
                            rel="noopener noreferrer"></a></i>
                    <i class="fas fa-chevron-circle-right fs-3 pl-5 myIconArrow"></i>

                    <li class="nav-item menu-list">
                        <a class="nav-link  text-light" aria-current="page" href="playlists.html">Playlist</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link active text-light" href="podcasts.html">Postcast</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="artists.html">Nghệ sĩ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="albums.html">Album</a>
                    </li>

                </ul>
                <div class="dropdown myDropdown">
                    <a class="btn btn-dark dropdown-toggle d-flex align-items-center" href="#" role="button"
                        id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="bi bi-person-circle fs-4 ">&nbsp;</i> Duy Nguyen
                    </a>

                    <ul class="dropdown-menu bg-dark " aria-labelledby="dropdownMenuLink">
                        <li><a class="dropdown-item text-light" href="#">Tài khoản </a></li>
                        <li><a class="dropdown-item text-light" href="#">Hồ sơ </a></li>
                        <li><a class="dropdown-item text-light" href="#">Nâng cấp lên Premium </a></li>
                        <li><a class="dropdown-item text-light" href="#">Đăng xuất </a></li>
                    </ul>
                </div>
            </div>
            <!-- end main-top -->