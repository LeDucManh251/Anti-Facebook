



    <div class="box-upnews">
        <div class="box-upnews-line1">
          <div class="box-upnews-user">
              <img src="./uploads/<?= $user['p_p'] ?>" alt="">
          </div>
           <div class="box-upnews-text">
             <button id="myBtn"><?= $user['name'] ?> ơi, bạn đang nghĩ gì thế?</button>
           </div>
    </div></div>
<form action="app/modules/quanlibaiviet/xuli_baiviet.php?user_id=<?php echo $user['user_id'] ?>" method="POST" enctype="multipart/form-data">    
<div id="myModal" class="modal">

<!-- Modal content -->
<div class="modal-content">
    <div class="modal-content-title">
      <span class="close">&times;</span>
       <p>Tạo Bài Viết Mới</p>
    </div>
    <div class="modal-content-center">
        <div class="modal-content-center1">
        <div class="box-upnews-user">
              <img src="./uploads/<?= $user['p_p'] ?>" alt="">
          </div>
          <div class="modal-content-center1-2">
              <div class="modal-content-center1-name"><?= $user['name'] ?></div>
               <div class="modal-content-center1-status">
                   Bạn đang cảm thấy
                    <select name="trangthai" >
                        <option value="1">vui vẻ</option>
                        <option value="2">buồn bã</option>
                        <option value="3">tức giận</option>
                        <option value="4">thất vọng</option>
                    </select>
               </div>
             
          </div></div>
          <div class="modal-content-center2">
              <textarea name="noidung" placeholder="Write somethings . . ." required="required"></textarea>
          </div>

          <div class="box-skill">

            <div class="box-skill-title">
              Thêm vào bài viết của bạn
            </div>
            <div class="box-skill-po">
               <div class="upload-btn-wrapper">
                   <button class="btn_file"><i class="fas fa-image"></i></button>
                   <input type="file" name="hinhanh_bv"/>
              </div>
              <div class="upload-btn-wrapper">
                   <button class="btn_file btn_file2"><i class="fas fa-video"></i></button>
                   <input type="file" name="video_bv"/>
              </div></div>


          </div>
          
          <div class="modal-content-center3">
              <button name="thembaiviet">Đăng</button>
          </div>
        
    </div>
</div>

</div>
</form>



<script >

var modal = document.getElementById("myModal");
var btn = document.getElementById("myBtn");
var span = document.getElementsByClassName("close")[0];
btn.onclick = function() {
  modal.style.display = "block";
}
span.onclick = function() {
  modal.style.display = "none";
}
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>