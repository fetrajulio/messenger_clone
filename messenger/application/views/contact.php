<div class="card bg-light mb-3">
        <div class="form-groupe">
            <?php foreach($amis as $ami){
                $a=$this->dbModel->getPerson($ami["id_2"]);
            ?>
            <a href="<?php echo base_url('control/page/') . $a["idP"] ?>">
            <div class="row">
                <div class="col-3" id="avatar2"><img src="<?php echo base_url('assets/img/avatar-2.png'); ?>"></img></div>
                <div class="col-9">
                    
                    <h5 id="anarana"><?php echo $a["Nom"];?></h5>
                    <p class="text-secondary">Bonjour je suis <?php echo $a["Nom"];?> !!!</p>
                </div>
            </div>
            </a>
            <?php }?>
       
        </div>
      </div>
        