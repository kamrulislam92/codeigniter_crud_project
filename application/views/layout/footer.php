    
    
      </div>
    </div>
  </body>
</html>
<script>
	

	$( "li" ).hover(
  function() {
      $(this).find("a").css("color","#FFF");
      $(this).find("span").stop().animate({
      width:"100%",
      opacity:"1",
    }, 600, function () {
        // Animation complete.
        // Show Navigation
    })
  }, function() {
      $(this).find("a").css("color","#555");
      $(this).find("span").stop().animate({
      width:"0%",
      opacity:"0",
    }, 600, function () {
        // Animation complete.
        // Show Navigation
    })
  }
);

 $(function() {
    $( ".portfolio li" ).draggable();
    $( ".portfolio li" ).on( "dragstart", function( event, ui ) {
      $(this).addClass("active-drag");
    } );
  });
</script>

<style>
	
	* {
	 margin: 0px;
}
 body {
	 background: #202838;
}
 .sidebar {
	 width: 200px;
	 height: 100%;
	 position: fixed;
	 z-index: 2000;
	 background: url("http://themes.mediacreed.com/html/synergy/assets/patterns/menu/menu_pattern_1.png");
	 border-right: 10px solid #d00355;
}
 .sidebar ul {
	 margin-top: 30px;
}
 .sidebar li {
	 list-style: none;
	 padding: 10px;
	 position: relative;
}
.sidebar .hover {
    display: block;
    position: absolute;
    width: 0%;
    height: 40px;
    top: 0px;
    left: 0px;
    background: #d00355;
    z-index: 0;
    opacity: 0;
}
 .sidebar a {
	 text-decoration: none;
	 color: #555;
	 font: 14px Oswald;
	 text-transform: uppercase;
	 position: relative;
	 z-index: 1000;
}
 .sidebar .hover {
	 display: block;
	 position: absolute;
	 width: 0%;
	 height: 40px;
	 top: 0px;
	 left: 0px;
	 background: #d00355;
	 z-index: 0;
	 opacity: 0;
}
 .sidebar a:hover {
	 color: #fff;
}
 .sidebar .fa-angle-right {
	 position: absolute;
	 left: 150px;
	 top: 1px;
}
 .sidebar .sub-menu {
	 z-index: 2000;
	 position: absolute;
	 left: 210px;
	 top: -30px;
	 padding: 0px;
	 width: 220px;
	 display: none;
	 background: url("http://themes.mediacreed.com/html/synergy/assets/patterns/menu/menu_pattern_1.png");
}
 .sidebar .sub-menu li a {
	 padding-left: 20px;
	 font-size: 13px;
}
 .sidebar .sub-menu i {
	 left: 180px;
}
 .sidebar ul li:hover ul {
	 display: block;
}
 .sidebar .push {
	 margin-right: 10px;
}
 h1 {
	 color: #fff;
	 font: 16px Open Sans;
	 padding-left: 50px;
	 padding-top: 30px;
}
 .color {
	 color: #d00355;
}


body{
  background: #202838;
}

.sidebar{
  width:250px;
  height:100%;
  position:fixed;
 z-index:2000; background:url("http://themes.mediacreed.com/html/synergy/assets/patterns/menu/menu_pattern_1.png");
  border-right:10px solid #d00355;
  
  ul{
    margin-top:30px;
  }
  
  li{
    list-style:none;
    padding:10px;
    position:relative;
   
  }
  
  a{
    text-decoration:none;
    color:#555;
    font:14px Oswald;
    text-transform:uppercase;
    position:relative;
    z-index:1000;
  }
  
  .hover{
    display:block;
    position:absolute;
    width:0%;
    height:40px;
    top:0px;
    left:0px;
    background:#d00355;
    z-index:0;
    opacity:0;
  }
  
  a:hover{
    color:#FFF;
  }
  

  .fa-angle-right{
    position:absolute;
    left:150px;
    top:1px;
  }
  
  .sub-menu{
    z-index:2000;
    position:absolute;
    left:210px;
    top:-30px;
    padding:0px;
    width:220px;
    display:none; background:url("http://themes.mediacreed.com/html/synergy/assets/patterns/menu/menu_pattern_1.png");
    
    li{
      a{
        padding-left:20px;
        font-size:13px;
      }
    }
    
    i{
      left:180px;
    }
  }
  .sidebar ul li:hover {
    list-style: none;
    padding: 10px;
    position: relative;
    background: red;
}
  ul li:hover ul{
    display:block;
	
	background:red;
  
  }
  
  .push{
    margin-right:10px;
  }
}

h1{
  color:#FFF;
  font:16px Open Sans;
  padding-left:50px;
  padding-top:30px;
}

.color{
  color:#d00355;
}

.portfolio{
  /* width:100%; */
  margin-left:250px;
  position:relative;
  z-index:0;
  padding-top:20px;
  li{
    list-style:none;
    float:left;
    box-shadow:#000 0px 0px 10px;
    border:1px solid #000;
    position:relative;
    overflow:hidden;
    margin-right:10px;
    z-index:0;
    margin-bottom:20px;
  }
  
  li:before{
    content:"";
    position:absolute;
    width:160%;
    top:-100px;
    left:-120px;
    height:200px;
    -webkit-transform:rotate(-36deg);
    -moz-transform:rotate(-36deg);
    -o-transform:rotate(-36deg);
    -ms-transform:rotate(-36deg);
    transform:rotate(-36deg);
    background:rgba(255,255,255,0.1);
  }
}

.caption{
  width:230px;
  background:#FFF;
  margin-top:-5px;
  padding-bottom:10px;
  
  h1{
    color:#d00355;
    text-align:center;
    margin:0px;
    padding:0px;
    font:16px Oswald;
    text-transform:uppercase;
    padding-top:10px;
  }
  p{
    font:13px Open Sans;
    text-align:center;
    padding:10px;
  }
  
  i{
    margin-left:110px;
    margin-top:15px;
    color:#d00355;
  }
}

.active-drag{
  -webkit-animation:drag 1.5s infinite;
}

@-webkit-keyframes drag{
  0%{
     -webkit-transform:scale(1);
  }
  
  50%{
     -webkit-transform:scale(0.8);
  }
  100%{
    -webkit-transform:scale(1);
  }

}





 

</style>