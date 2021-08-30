<html>

    <head>
        <title>Messenger Clone</title>
        <meta charset="utf-8">
        <link href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>" rel="stylesheet">
        <link href="<?php echo base_url('assets/css/index.css'); ?>" rel="stylesheet">
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid">
          <div class="container">
            <div class="row"  >
              <div class="col-2" id="logoBare">
                <img src="<?php echo base_url('assets/img/logo.svg'); ?>"></img>
              </div>
              
              <div class="col-6"><h4 class="text-center">
                </h4>
              </div>
              <div class="col-1" id="setbar">
                <img src="<?php echo base_url('assets/img/settings.svg'); ?>"></img>
              </div>
              <div class="col-2">
                <h5 class="text-center"><?php if($idP['Nom'])echo $idP['Nom'];?></h5>
              </div>
              <div class="col-1" id="avatar">
                <img src="<?php echo base_url('assets/img/avatar-2.png'); ?>"></img>
              </div>
            </div>
          </div>
          
      </div>
    </nav>

    <div class="row">
        <div class="col-3">
        
