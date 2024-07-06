<style>
.con-text{color:#344815;}
.icon{height: 1.2rem;}
.icon_1{height: 1.3rem;}
</style>
<section style=" background: linear-gradient(to right, #fdc830, #f37335);">
  <div class="container-flude">
    <div class="row">
      <div class="col-md-5 pt-1">
        <h6>
          <span style="padding-left:3rem;color:green;"><i class="fa fa-phone-square" aria-hidden="true"></i></span class="con-text">+91 9028388889, 9572852742<span></span></h6></div>
      <div class="col-md-5 pt-1">
        <h6>
          <span><i class="fa fa-envelope" aria-hidden="true"></i></span>
          <span class="con-text">&nbsp;camwelsolution@gmail.com</span>
        </h6>
      </div>

      <div class="col-md-2 pt-1">
        <h6>
          <span><a href=""><img src="<?php echo base_url();?>media/icon/facebook-icon.png" alt="" class="icon"></a></span>&nbsp;
          <span><a href=""><img src="<?php echo base_url();?>media/icon/instagram-icon.png" alt="" class="icon"></a></span>&nbsp;
          <span><a href=""><img src="<?php echo base_url();?>media/icon/teligram-icon.png" alt="" class="icon"></a></span>&nbsp;
          <span><a href=""><img src="<?php echo base_url();?>media/icon/youtube-icon.png" alt="" class="icon_1"></a></span>&nbsp;
          <span><a href=""><img src="<?php echo base_url();?>media/icon/whatsapp-icon.png" alt="" class="icon"></a></span>&nbsp;
        </h6>
      </div>
    </div>
  </div>
</section>

<?php // print_r($submenu); ?>
<nav class="navbar navbar-expand-lg bg-body-tertiary" style="border:1px solid red;">
  <div class="container-fluid">
    <a class="navbar-brand" href="<?php echo base_url();?>"><img src="<?php echo base_url() . "uploads/logo/" . $logo['logo']; ?>" alt="" ></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">



      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
       

        <!-- menu started -->
        <?php foreach ($menu as $m) : ?>
          <li class="nav-item dropdown">
            <a class="nav-link <?php echo ($m['child']>0)?'dropdown-toggle':'';?>" href="<?php echo base_url()."Website/page/{$m['id']}";?>" role="button" data-bs-toggle="<?php echo ($m['child']>0)?'dropdown':'';?>" aria-expanded="false">
              <?php echo $m["menu"]; ?>
            </a>
            <!-- submenu section start-->
            <ul class="dropdown-menu">              
              <?php foreach ($submenu as $sm) : ?>
                <?php if ($m['id'] == $sm['menu_id']) : ?>
                  <li><a class="dropdown-item" href="<?php echo base_url()."Website/sub_page/{$m['id']}/{$sm['id']}";?>"><?php echo $sm['sub_menu'];?></a></li>
                <?php endif; ?>
                <?php endforeach; ?>
              </ul>

            <!-- submenu section  end-->
          </li>
        <?php endforeach; ?>
        <!-- menu end -->
      </ul>



      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>