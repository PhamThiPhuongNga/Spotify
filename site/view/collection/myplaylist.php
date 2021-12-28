<?php
    include('../../../public\template\site\headerD.php');
?>
<div class="main-bottom text-light bg-dark">
                <div class="main-bottom-t">
                    <div class="container  ">
                        <div class="row ">
                            <div class="col-3 "><button class="btn-playlist align-items-center bg-dark">
                                    <i class="material-icons my-icon-thuvien text-secondary">add_a_photo</i>
                                    <i class="bi bi-music-note-beamed my-icon-thuvien text-secondary"></i>
                                </button></div>
                            <div class="col-9 p-5">
                                <p>PLAYLIST</p>
                                <a href="" class="text-decoration-none link-light ">
                                    <h1 style="font-size: 6.0rem;">Playlist của tôi #1</h1>
                                </a>
                                <p><a href="" class="text-decoration-none link-light a-cogach"> Duy Nguyễn</a></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="main-bottom-c">
                    <a href=""><i class="fas fa-ellipsis-h fs-4 p-3 text-muted my-icon-fa-ellipsis-h"></i></a>
                </div>
                <div class="main-bottom-b ">
                    <h4>Hãy cùng tìm nội dung cho danh sách phát của bạn</h4>
                    <div style="display: flex;">
                        <div class="form_search-nd  p-2">

                            <i class="fa fa-search"></i>
                            <input type="text"
                                style=" border: 1px; background-color: #2D2D2D;width: 400px;color: aliceblue;"
                                placeholder="Tìm bài hát và tập podcast">
                        </div>
                        <a href=""><i class="fas fa-times text-secondary fs-2 my-fa-times"></i></a>
                    </div>
                </div>
            </div>
            <!-- end main-bottom -->
        </main>

<?php
    include ('../../../public\template\site\footerD.php');
?>