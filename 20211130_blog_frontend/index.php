<?php
    // http://myproject.com/PHP/40_1851061445_DinhCongTuyen/20211130_blog_frontend : URL mặc định
    // Sử dụng button Home-Featured-ViewPost để chuyển trang
    echo file_get_contents("./header.html");
    if (isset($_GET['id'])) {
        if ($_GET['id'] == 2) {
            echo file_get_contents("./view.html"); 
            echo "<script> $('#pageView').addClass('active');</script>";
        }
        else {
            echo file_get_contents("./featured.html"); 
            echo "<script> $('#pageFeatured').addClass('active');</script>";
        }
    } else {
        echo "<script>$('#pageHome').addClass('active');</script>";
        echo file_get_contents("./home.html"); 
    }    
    echo file_get_contents("./footer.html");


    
