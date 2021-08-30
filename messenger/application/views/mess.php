</div>
        <div class="col-6">
        <div class="card bg-light mb-3">
            <section class="message">
                
                        <div class="grid-message">

                        <?php 
                    $querry = $this->db->get("message");
                    $tab = $querry->result_array();
                    foreach($tab as $t){
                        if($t['a1']==$id1 && $t['a2']==$id2){
                            ?>
                            <div class="col-message-sent">
                            <div class="message-sent">
                                <p><?php echo $t["message"];?></p>
                            </div>
                            </div>
                            <?php
                            
                        }

                        else if($t['a1']==$id2 && $t['a2']==$id1){
                            ?>
                            <div class="col-message-received">
                                <div class="message-received">
                                    <p><?php echo $t["message"];?></p>
                                </div>
                            </div>
                            <?php
                        }
                    }
                
                ?>
                            






                            
                        </div>

                        
            </section>
            <div class="container">
                
                <form method="POST" action="<?php $tp="/"; echo base_url('control/send/').$id1.$tp.$id2?>">
                <div class="row">
                    <div class="col-11">
                        <textarea name="mess" class="form-control" id="exampleTextarea" rows="1"></textarea>
                    </div>
                    <div class="col-1" id="picSend">
                        <button type="submit">
                            <a href="#"id="picSend"><img src="<?php echo base_url('assets/img/send.png'); ?>"></img></a></div>
                        </button>
                </div>
                </form>
            </div>
            
        </div>
    
        </div>
        <div class="col-3">
        <div class="card bg-light mb-3">
            
            <img src="<?php echo base_url('assets/img/avatar-2.png'); ?>"></img>
        </div>
        </div>
    </div>
    </body>
</html>