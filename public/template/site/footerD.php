<footer class="footer-main mauchu">
            <div class="form-footer space">
                <div class="infor-song">
                    <div class="space " style="margin-right: 10px;padding:20px;">
                        <img src="../img/play.jpg" alt="" width="60" height="60">
                        <div class="inforn-name khoangc">
                            <h6>Easy On My</h6>
                            <p>Adele</p>
                        </div>
                        <p title="Lưu vào thư viện" class="khoangc"><i class="bi bi-suit-heart"></i></p>
                        <p class="khoangc"><i class=" bi bi-aspect-ratio"></i></p>
                    </div>
                </div>
                <div class="thanhnhac">
                    <div class="player">
                        <div class="control mauchu">
                            <div class="btn btn-repeat">
                                <i title="Bật trộn bài" class="bi bi-shuffle"></i>
                            </div>
                            <div class="btn btn-prev">
                                <i title="Trước" class="fas fa-step-backward"></i>
                            </div>
                            <div class="btn btn-toggle-play">
                                <i title="Dừng" class="fas fa-pause icon-pause"></i>
                                <i title="Phát" class="fas fa-play icon-play"></i>
                            </div>
                            <div class="btn btn-next">
                                <i title="Tiếp" class="fas fa-step-forward"></i>
                            </div>
                            <div class="btn btn-random">
                                <i title="Kích hoạt chế độ lặp lại" class="bi bi-arrow-repeat"></i>
                            </div>
                        </div>
                    </div>
                    <div class="space">
                        <span>0:00</span>&nbsp;&nbsp;
                        <span><input id="progresss" class="progresss" type="range" value="0" step="1" min="0"
                                max="100"></span>
                        <audio id="audio" src=""></audio>
                        &nbsp;&nbsp;<span>0:00</span>
                    </div>
                </div>
                <div class="infor-more space">
                    <div class="Lyrics khoangc">
                        <i title="Lyrics" class="i bi-mic"></i>
                    </div>
                    <div class="waiting-list khoangc">
                        <i title="Danh sách chờ" class="bi bi-music-note-list"></i>
                    </div>
                    <div class="connect-equi khoangc">
                        <i title="Kết nối với một thiết bị" class="bi bi-sliders"></i>
                    </div>
                    <div class="adjusted khoangc">
                        <i title="Tắt tiếng" class="bi bi-volume-up"><input id="volume" class="volume" type="range"
                                value="0" step="1" min="0" max="100"></i>
                        <i title="Bật tiếng" class=" bi bi-volume-mute"></i>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
</body>

</html>