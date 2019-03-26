<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<!--title.blade.php-->
<title>@yield('title')</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link href="{!!asset ('style.css')!!} rel="stylesheet" type="text/css" />
<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript" src="js/arial.js"></script>
<script type="text/javascript" src="js/cuf_run.js"></script>
</head>
<!--endtitle-->
<style>
/*
Design by http://www.bluewebtemplates.com
Released for free under a Creative Commons Attribution 3.0 License
*/
@charset "utf-8";
body { margin:0; padding:0; width:100%; color:#5f5f5f; font:normal 12px/1.8em Arial, Helvetica, sans-serif;}
html, .main { padding:0; margin:0; background-color:#c1e09e;}
.clr { clear:both; padding:0; margin:0; width:100%; font-size:0px; line-height:0px;}
h1 { margin:0; padding:12px 0; color:#fff; font:normal 40px/1.2em Arial, Helvetica, sans-serif;}
h1 a, h1 a:hover { color:#fff; text-decoration:none;}
h2 { font:bold 24px Arial, Helvetica, sans-serif; color:#81b436; padding:8px 0; margin:8px 0;}
p { margin:8px 0; padding:0 0 8px 0; font:normal 12px/1.8em Arial, Helvetica, sans-serif;}
a { color:#81b436; text-decoration:underline;}

.header, .content, .menu_nav, .fbg, .footer, form, ol, ol li, ul, .content .mainbar, .content .sidebar { margin:0; padding:0;}
.header_resize, .content_resize, .fbg_resize, .footer_resize { margin:0 auto; padding:0 40px; width:890px;}
.fbg, .footer { padding:16px 0;}
.content_resize, .menu_nav ul li a { border-radius:12px; -moz-border-radius:12px; -webkit-border-radius:12px;}

/* header */
.header { height:140px; background:url(images/header_bg.gif) repeat-x top;}
.header .logo { padding-top:24px; float:left;}

/* menu */
.menu_nav { float:right; width:auto; padding-top:70px;}
.menu_nav ul { list-style:none; background:url(images/menu.gif) repeat-x top;}
.menu_nav ul li { margin:0 10px; float:left;}
.menu_nav ul li a { display:block; margin:0; padding:4px 20px; color:#fff; text-decoration:none; background-color:#81bb35;}
.menu_nav ul li a { border-radius:8px; -moz-border-radius:8px; -webkit-border-radius:8px;}
.menu_nav ul li a:hover, .menu_nav ul li.active a { background-color:#8fd533;}

/* content */
.content { background:url(images/content_bg.gif) repeat-x bottom;}
.content_resize { padding-bottom:16px; background-color:#e4f4cd;}
.content_resize { border-radius:12px; -moz-border-radius:12px; -webkit-border-radius:12px;}
.content img.ctop { margin:20px 0 20px -20px;}
.content .mainbar { float:left; width:630px;}
.content .mainbar img { margin-bottom:24px; padding:4px; border:1px solid #b7b7b7; background-color:#fff;}
.content .mainbar img.fl { float:left; margin-right:12px;}
.content .mainbar .article, .content .sidebar .gadget { margin:0; padding:0 0 16px 0;}
.content .sidebar { float:right; width:236px;}
ul.sb_menu, ul.ex_menu { margin:0; padding:0; list-style:none; color:#959595;}
ul.sb_menu li, ul.ex_menu li { margin:0; background:url(images/li.gif) no-repeat 0 12px;}
ul.sb_menu li { padding:4px 0;}
ul.ex_menu li { padding:4px 0 8px;}
ul.sb_menu li a, ul.ex_menu li a { color:#5f5f5f; text-decoration:none;}
ul.sb_menu li a:hover, ul.ex_menu li a:hover { color:#81b436; font-weight:bold;}
ul.sb_menu li a:hover { text-decoration:underline;}
ul.ex_menu li a:hover { text-decoration:none;}

/* subpages */
.content .mainbar .comment { margin:0; padding:16px 0 0 0;}
.content .mainbar .comment img.userpic { border:1px solid #dedede; margin:10px 16px 0 0; padding:0; float:left;}

/* fbg */
.fbg { background:#7baf30 url(images/fbg_bg.gif) repeat-x top;}
.fbg_resize { padding:0 0 16px 40px; width:930px;}
.fbg, .fbg a, .fbg h2 { color:#fff;}
.fbg img { border:1px solid #77a239;}
.fbg .col { margin:0; float:left;}
.fbg .c1 { padding:0 16px 0 0; width:620px;}
.fbg .c3 { padding:0 0 0 16px; width:270px;}
.fbg .c3 img { margin:4px;}
.fbg .c1 img { margin:8px 16px 16px 0; float:left;}
.fbg ul.sb_menu { width:160px;}
.fbg ul.sb_menu li { border-bottom:1px solid #fff;}
.fbg ul.sb_menu a, .fbg ul.sb_menu a:hover { color:#fff;}

/* footer */
.footer { background-color:#e4f4cd;}
.footer p.lf { margin:0; padding:1px 0; float:left; width:auto; line-height:0 em;}
ul.fmenu { margin:0; padding:2px 0; list-style:none; float:right; width:auto;}
ul.fmenu li { margin:0; padding:0 4px; float:left;}
ul.fmenu li a { color:#5f5f5f; text-decoration:none; padding:2px 6px;}
ul.fmenu li a:hover, ul.fmenu li.active a { color:#81b436;}
ul.fmenu li a:hover { text-decoration:underline;}

/* form */
ol { list-style:none;}
ol li { display:block; clear:both;}
ol li label { display:block; margin:0; padding:16px 0 0 0;}
ol li input.text { width:480px; border:1px solid #c0c0c0; margin:2px 0; padding:5px 2px; height:16px; background:#fff;}
ol li textarea { width:480px; border:1px solid #c0c0c0; margin:2px 0; padding:2px; background:#fff;}
ol li .send { margin:16px 0 0 0;}

</style>
<!--header.blade.php-->
<body>
<div class="main">
  <div class="header">
    <div class="header_resize">
      <div class="logo">
        <h1><a href="index.html">Vernon Indonesia</a></h1>
      </div>
      <div class="menu_nav">
        <ul>
          <li class="active"><a href="/">Beranda</a></li>
          <li><a href="sofi">Berita</a></li>
          <li><a href="login">Login</a></li>
          <li><a href="welcome">laravel</a></li>
         <!-- <li><a href="contact.html">Contact Us</a></li>-->
        </ul>
      </div>
      <div class="clr"></div>
	  
    </div>
  </div>
   <!--endheader-->
   
   <!--content.blade.php-->
 
	
    <div class="content_resize"> <img src="images/img1.jpg" width="927" height="240" alt="" class="ctop" /> 
   @yield('content')
	<!--<div class="content">
      <div class="mainbar">
        <div class="article">
          <h2><span>Vernon HaloMalang.com</span></h2>
          <p>Posted by <a href="#">Sandiophie@gmail.com</a> |</a></p>
          <p>Halomalang.com berdiri sejak 1 Maret 2012 dan kami berkomitmen untuk menyajikan berita tentang lifestyle yang terjadi di seputar Malang Raya. Dari awal kami mencoba untuk menampung keinginan pemilik bisnis yang ada di Malang Raya serta para pembaca website kami. Bagi para pemilik bisnis, Halomalang.com dapat menjadi solusi beriklan dan promo bisnis. Sedangkan bagi pembaca, Halomalang.com merupakan tempat untuk mendapatkan informasi tentang Malang Raya, khususnya ranah lifestyle.
		Tagline kami "Dari Ngalamers Untuk Kita Semua" merupakan simbol bahwa halomalang.com tidak bisa lepas dari kontribusi para pembaca dan klien, yang kami beri julukan Ngalamers. Kontribusi dari Ngalamers inilah yang selanjutnya menjadi kekuatan kami untuk terus menyajikan informasi lifestyle ter-aktual di Malang Raya.</p>
          <p><a href="#">Read more</a> | March 12, 2019</p>
        </div>
        </div>
      </div>   
	  <!--endcontent-->
	  
	  
	  
	  @include('layout/sidebar')
	  <!--sidebar.blade.php-->
	  
   <!--  <div class="sidebar">
        <div class="gadget">
          <h2 class="star"><span>Sidebar</span> Menu</h2>
          <ul class="sb_menu">
            <li><a href="#">Home</a></li>
            <li><a href="#">TemplateInfo</a></li>
            <li><a href="#">Style Demo</a></li>
            <li><a href="#">Blog</a></li>
            <li><a href="#">Archives</a></li>
            <li><a href="#">Website Templates</a></li>
          </ul>
        </div>
        <div class="gadget">
          <h2 class="star"><span>Sponsors</span></h2>
          <ul class="ex_menu">
            <li><a href="#">DreamTemplate</a><br />
              Over 6,000+ Premium Web Templates</li>
            <li><a href="#">TemplateSOLD</a><br />
              Premium WordPress &amp; Joomla Themes</li>
            <li><a href="#">ImHosted.com</a><br />
              Affordable Web Hosting Provider</li>
            <li><a href="#">DreamStock</a><br />
              Download Amazing Stock Photos</li>
            <li><a href="#">Evrsoft</a><br />
              Website Builder Software &amp; Tools</li>
            <li><a href="#">MyVectorStore</a><br />
              Royalty Free Stock Icons</li>
          </ul>
        </div>
      </div><!--endsidebar-->
	  
	  
      <!--<div class="clr"></div>
	  
    </div>-->
  </div>
 <!-- <div class="fbg">
    <div class="fbg_resize">
      <div class="col c1">
        <h2>About</h2>
        <img src="images/white.jpg" width="66" height="66" alt="" />
        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec libero. Suspendisse bibendum. Cras id urna. Morbi tincidunt, orci ac convallis aliquam, lectus turpis varius lorem, eu posuere nunc justo tempus leo. llorem, eu posuere nunc justo tempus leo. Donec mattis, purus nec placerat bibendum. <a href="#">Learn more...</a></p>
      </div>
      <div class="col c3">
        <h2>Image Galley</h2>
        <img src="images/pix1.jpg" width="66" height="66" alt="" /> <img src="images/pix2.jpg" width="66" height="66" alt="" /> <img src="images/pix3.jpg" width="66" height="66" alt="" /> <img src="images/pix4.jpg" width="66" height="66" alt="" /> <img src="images/pix5.jpg" width="66" height="66" alt="" /> <img src="images/pix6.jpg" width="66" height="66" alt="" /> </div>
      <div class="clr"></div>
    </div>
  </div>-->
  <!--endsidebar-->
  
  
  @include('layout/footer')
  <!--footer.blade.php-->
  <!--<div class="footer">
    <div class="footer_resize">
      <p class="lf">&copy; Copyright MyWebSite. Designed by Blue <a href="http://www.bluewebtemplates.com/">Website Templates</a></p>
      <ul class="fmenu">
        <li class="active"><a href="index.html">Home</a></li>
        <li><a href="support.html">Support</a></li>
        <li><a href="blog.html">Blog</a></li>
        <li><a href="about.html">About Us</a></li>
        <li><a href="contact.html">Contacts</a></li>
      </ul>
      <div class="clr"></div>
    </div>
  </div>-->
</div>
<div align=center>This template  downloaded form <a href='http://all-free-download.com/free-website-templates/'>free website templates</a></div>
</body>
</html>
<!--endfooter-->