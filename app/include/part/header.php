<div id="k-header" class="">

<a href="./">
<img src="./files/img/source/logo-hd.png" class="img-k-header">
</a>
<div class="menu-k-header"><center>&equiv;</center></div>
</div>
<div class="top-head">
<div class="top-head-content">
	<div style="float: left;" id="ticker-roll" class="ticker">
	<ul>
	<li><a href="page/event/post_1.html" class="link-top-head">Angkat Ki Ageng Cempaluk</a></li>
	<li><a href="#" class="link-top-head">Kajen Carnival Batik 2018</a></li>
	<li>This is Item 3</li>
	<li>This is Item 4</li>
	<li>This is Item 5</li>
	</ul>
	</div>
	<a href="#" class="link-top-head">Facebook</a>
	<a href="page/about" class="link-top-head">Tentang Kami</a>
</div>
</div>

<div class="header">
<div class="logo-hd-area">
<a href="./">
<img src="./files/img/source/logo-hd.png" class="img-hd">
</a>
</div>
<div class="div-nav-area">

<a href="javascript:void(0)" class="link-nav-mob bg-transparn" onclick="openNav()">Menu &#187;</a>
<a href="javascript:void(0)" class="link-nav-src bg-transparn tooltip" onclick="openSrc()">
	<img src="./files/img/source/search.png" style="height: 40px">
	<span class="tooltiptext">Search</span>
</a>
<a class="link-nav bg-transparn" href="page/galery">Galery</a>
<a class="link-nav bg-transparn" href="page/event">Event</a>
<a class="link-nav bg-transparn" href="page/kebudayaan">Budaya</a>
<a class="link-nav bg-transparn" href="page/kesenian">Seni</a>

</div>
<!-- Sidebar -->
<div class="w3-sidebar w3-bar-block w3-white w3-animate-left" style="display:none;z-index:4" id="navSide">
  <button class="w3-black w3-bar-item w3-button" onclick="closeNav()">Close</button>
  <br />
	<center>
	  <input type="text" class="w3-input" style="width: 90%;border:1px solid #888;border-radius:5px;margin-bottom: 5px;" placeholder="Cari Sesuatu....">
	  <input type="submit" class="w3-btn w3-red" style="font-family: comic sans ms;" value="Search">
	</center>
	<br />
	<a href="javascript:void(0)" class="w3-bar-item w3-button">Home</a> 
	<a href="page/kesenian" class="w3-bar-item w3-button">Kesenian</a> 
	<a href="page/kebudayaan" class="w3-bar-item w3-button">Kebudayaan</a> 
	<a href="page/event" class="w3-bar-item w3-button">Event</a> 
	<a href="page/about" class="w3-bar-item w3-button">Tentang Kami</a> 
	
</div>

<!-- Overlay -->
<div class="w3-overlay" onclick="closeNav()" style="cursor:pointer"></div>
<!-- Page Content -->
<div class="w3-overlay w3-animate-opacity" onclick="closeNav()" style="cursor:pointer" id="myOverlay"></div>


<script>
function openNav() {
  document.getElementById("navSide").style.display = "block";
  document.getElementById("myOverlay").style.display = "block";
}

function closeNav() {
  document.getElementById("navSide").style.display = "none";
  document.getElementById("myOverlay").style.display = "none";
}
</script>

<!-- Overlay2 -->
<div class="w3-overlay" onclick="closeSrc()" style="cursor:pointer"></div>
<!-- Page Content2 -->
<div class="w3-overlay w3-animate-opacity" onclick="closeSrc()" style="cursor:pointer" id="myOverlay2"></div>

<!-- The Modal -->
<div id="modalSrc" class="w3-modal" style="">
  <div class="w3-modal-content w3-animate-top">
    <div class="">
      <span onclick="closeSrc()" class="w3-button w3-xlarge w3-hover-red w3-display-topright" title="Close Modal">&times;</span>
		<div class="w3-blue">
		  <h1 class="text-src-modal" style="">Search &#187; </h1>
		</div>
		<center>
		  <input type="text" class="w3-input" style="width: 90%;border:1px solid #888;border-radius:5px;margin-bottom: 5px;" placeholder="Cari Sesuatu...."><br />
		  <input type="submit" class="w3-btn w3-blue" style="font-family: comic sans ms;" value="Search &#187;">
		</center>
		<br />
    </div>
  </div>
</div>
<script>
function openSrc() {
  document.getElementById("modalSrc").style.display = "block";
  document.getElementById("myOverlay2").style.display = "block";
}

function closeSrc() {
  document.getElementById("modalSrc").style.display = "none";
  document.getElementById("myOverlay2").style.display = "none";
}
</script>
</div>
<!--end Header-->