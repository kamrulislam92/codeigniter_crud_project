<!--Inspired from Themeforest Template-->
<link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css"
    />
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
<!-- <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet"> -->
<link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>

<div class="sidebar">
  <h1><i class="fa fa-bars push"></i>Animated <span class="color"><strong>Nav</strong></span></h1>
    <ul>
    <li><a href="<?php echo base_url('userController/create'); ?>"><i class="fa fa-dashboard push"></i>Home<i class="fa fa-angle-right"></i></a><span class="hover"></span>
    </li>
    <li><a href="#"><i class="fa fa-user push"></i>About<i class="fa fa-angle-right"></i></a><span class="hover"></span>
      <ul class="sub-menu">
         <li><a href="#">Add User<i class="fa fa-angle-right"></i></a><span class="hover"></span></li>
         <li><a href="#">Manage Users<i class="fa fa-angle-right"></i></a><span class="hover"></span></li>
      </ul>
    </li>
    <li><a href="#"><i class="fa fa-cog push"></i>Services<i class="fa fa-angle-right"></i></a><span class="hover"></span>
     <ul class="sub-menu">
         <li><a href="#">Web Design<i class="fa fa-angle-right"></i></a><span class="hover"></span></li>
         <li><a href="#">Logo Design<i class="fa fa-angle-right"></i></a><span class="hover"></span></li>
        <li><a href="#">Motion Graphics<i class="fa fa-angle-right"></i></a><span class="hover"></span></li>
       <li><a href="#">WordPress<i class="fa fa-angle-right"></i></a><span class="hover"></span></li>
      </ul></li>
    <li><a href="#"><i class="fa fa-picture-o push"></i>portfolio<i class="fa fa-angle-right"></i></a><span class="hover"></span>
        <ul class="sub-menu">
         <li><a href="#">Selected Works<i class="fa fa-angle-right"></i></a><span class="hover"></span>
          </li>
         <li><a href="#">Featured Works<i class="fa fa-angle-right"></i></a><span class="hover"></span></li>
      </ul>
    </li>
    <li><a href="#"><i class="fa fa-file push"></i>My Blog<i class="fa fa-angle-right"></i></a><span class="hover"></span>
        <ul class="sub-menu">
         <li><a href="#">Latest News<i class="fa fa-angle-right"></i></a><span class="hover"></span>
          </li>
         <li><a href="#">Recent Articles<i class="fa fa-angle-right"></i></a><span class="hover"></span></li>
      </ul>
    </li>
    <li><a href="#"><i class="fa fa-plane push"></i>Contact<i class="fa fa-angle-right"></i></a><span class="hover"></span></li>
  </ul>
</div>
<div class="portfolio">
<div class="container">
  <div class="row">
    <div class="col-lg-4 col-md-6" style="margin-top: 20px">
      <div class="card border-primary">
        <div class="card-body bg-primary text-white">
          <div class="row">
            <div class="col-3">
              <i class="fa fa-random fa-5x"></i>
            </div>
            <div class="col-9 text-right">
              <h1>10</h1>
              <h4>Branches</h4>
            </div>
          </div>
        </div>
        <a href="https://www.linkedin.com/in/younes-elmorabit" target="_blank">
          <div class="card-footer bg-light text-primary">
            <span class="float-left">More details</span>
            <span class="float-right"><i class="fa fa-arrow-circle-right"></i></span>
            <div class="clearfix"></div>
          </div>
        </a>
      </div>
    </div>
    <div class="col-lg-4 col-md-6" style="margin-top: 20px">
      <div class="card border-secondary">
        <div class="card-body bg-secondary text-white">
          <div class="row">
            <div class="col-3">
              <i class="fa fa-user-graduate fa-5x"></i>
            </div>
            <div class="col-9 text-right">
              <h1>20</h1>
              <h4>Students</h4>
            </div>
          </div>
        </div>
        <a href="<?php echo base_url('userController/create'); ?>" target="_blank">
          <div class="card-footer bg-light text-secondary">
            <span class="float-left">More details</span>
            <span class="float-right"><i class="fa fa-arrow-circle-right"></i></span>
            <div class="clearfix"></div>
          </div>
        </a>
      </div>
    </div>
    <div class="col-lg-4 col-md-6" style="margin-top: 20px">
      <div class="card border-success">
        <div class="card-body bg-success text-white">
          <div class="row">
            <div class="col-3">
              <i class="fa fa-user-tie fa-5x"></i>
            </div>
            <div class="col-9 text-right">
              <h1>50</h1>
              <h4>Teachers</h4>
            </div>
          </div>
        </div>
        <a href="https://www.linkedin.com/in/younes-elmorabit" target="_blank">
          <div class="card-footer bg-light text-success">
            <span class="float-left">More details</span>
            <span class="float-right"><i class="fa fa-arrow-circle-right"></i></span>
            <div class="clearfix"></div>
          </div>
        </a>
      </div>
    </div>
    <div class="col-lg-4 col-md-6" style="margin-top: 20px">
      <div class="card border-danger">
        <div class="card-body bg-danger text-white">
          <div class="row">
            <div class="col-3">
              <i class="fa fa-book fa-5x"></i>
            </div>
            <div class="col-9 text-right">
              <h1>60</h1>
              <h4>Modules</h4>
            </div>
          </div>
        </div>
        <a href="https://www.linkedin.com/in/younes-elmorabit" target="_blank">
          <div class="card-footer bg-light text-danger">
            <span class="float-left">More details</span>
            <span class="float-right"><i class="fa fa-arrow-circle-right"></i></span>
            <div class="clearfix"></div>
          </div>
        </a>
      </div>
    </div>
    <div class="col-lg-4 col-md-6" style="margin-top: 20px">
      <div class="card border-warning">
        <div class="card-body bg-warning text-white">
          <div class="row">
            <div class="col-3">
              <i class="fa fa-university fa-5x"></i>
            </div>
            <div class="col-9 text-right">
              <h1>4</h1>
              <h4>Companies</h4>
            </div>
          </div>
        </div>
        <a href="https://www.linkedin.com/in/younes-elmorabit" target="_blank">
          <div class="card-footer bg-light text-warning">
            <span class="float-left">More details</span>
            <span class="float-right"><i class="fa fa-arrow-circle-right"></i></span>
            <div class="clearfix"></div>
          </div>
        </a>
      </div>
    </div>
    <div class="col-lg-4 col-md-6" style="margin-top: 20px">
      <div class="card border-info">
        <div class="card-body bg-info text-white">
          <div class="row">
            <div class="col-3">
              <i class="fa fa-suitcase fa-5x"></i>
            </div>
            <div class="col-9 text-right">
              <h1>30</h1>
              <h4>Internships</h4>
            </div>
          </div>
        </div>
        <a href="https://www.linkedin.com/in/younes-elmorabit" target="_blank">
          <div class="card-footer bg-light text-info">
            <span class="float-left">More details</span>
            <span class="float-right"><i class="fa fa-arrow-circle-right"></i></span>
            <div class="clearfix"></div>
          </div>
        </a>
      </div>
    </div>
  </div>
</div>
</div>
</div>

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
	 width: 250px;
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
  width:1040px;
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