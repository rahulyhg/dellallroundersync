<section class="panel">
    <header class="panel-heading">
        Review From User
    </header>
    <?php foreach($before as $row) { ?>
    <div class="panel-body">

        <form class='form-horizontal tasi-form'>
            <h3>Which is the best feature of the 2-in-1?</h3>

            <div class="form-group">
                <label class="col-sm-2 control-label" for="normal-field">Flexibility</label>
                <div class="col-sm-4">
                    <input type="text" class="form-control" disabled value="<?php if($row->flexibility=='1') { echo " Yes "; } else { echo "No "; }?>">
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 control-label" for="normal-field">Light weight</label>
                <div class="col-sm-4">
                    <input type="text" class="form-control" disabled value="<?php if($row->lightweight=='1') { echo " Yes "; } else { echo "No "; }?>">
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 control-label" for="normal-field">East to carry</label>
                <div class="col-sm-4">
                    <input type="text" class="form-control" disabled value="<?php if($row->easytocarry=='1') { echo " Yes "; } else { echo "No "; }?>">
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 control-label" for="normal-field">All of above</label>
                <div class="col-sm-4">
                    <input type="text" class="form-control" disabled value="<?php if($row->allfeature=='1') { echo " Yes "; } else { echo "No "; }?>">
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 control-label" for="normal-field">Screen clarity and touch pad</label>
                <div class="col-sm-4">
                    <input type="text" class="form-control" disabled value="<?php if($row->screenclarity=='1') { echo " Yes "; } else { echo "No "; }?>">
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 control-label" for="normal-field">Stylus</label>
                <div class="col-sm-4">
                    <input type="text" class="form-control" disabled value="<?php if($row->stylus=='1') { echo " Yes "; } else { echo "No "; }?>">
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 control-label" for="normal-field">Easy to use</label>
                <div class="col-sm-4">
                    <input type="text" class="form-control" disabled value="<?php if($row->easytouse=='1') { echo " Yes "; } else { echo "No "; }?>">
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 control-label" for="normal-field">Other</label>
                <div class="col-sm-4">
                    <textarea name="" id="" cols="30" rows="10" class="form-control" disabled>
                        <?php echo $row->otherfeature?></textarea>
                </div>
            </div>
            
            
            
            <h3>How would the 2-in-1 be useful to you?</h3>
            <div class="form-group">
                <label class="col-sm-2 control-label" for="normal-field">Convienient for travel </label>
                <div class="col-sm-4">
                    <input type="text" class="form-control" disabled value="<?php if($row->travel=='1') { echo " Yes "; } else { echo "No "; }?>">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label" for="normal-field">Plenty of hard drive space</label>
                <div class="col-sm-4">
                    <input type="text" class="form-control" disabled value="<?php if($row->harddrive=='1') { echo " Yes "; } else { echo "No "; }?>">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label" for="normal-field">All of above</label>
                <div class="col-sm-4">
                    <input type="text" class="form-control" disabled value="<?php if($row->alluse=='1') { echo " Yes "; } else { echo "No "; }?>">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label" for="normal-field">Versatile device for work and home</label>
                <div class="col-sm-4">
                    <input type="text" class="form-control" disabled value="<?php if($row->versatile=='1') { echo " Yes "; } else { echo "No "; }?>">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label" for="normal-field">Freedom of built-in stylus </label>
                <div class="col-sm-4">
                    <input type="text" class="form-control" disabled value="<?php if($row->builtinstylus=='1') { echo " Yes "; } else { echo "No "; }?>">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label" for="normal-field">Other</label>
                <div class="col-sm-4">
                    <textarea name="" id="" cols="30" rows="10" class="form-control" disabled>
                        <?php echo $row->otheruse?></textarea>
                </div>
            </div>
            
            <h3>Would you recommend Dell Inspiron 2-in-1 to others?</h3>
            <div class="form-group">
                <label class="col-sm-2 control-label" for="normal-field">Recommend</label>
                <div class="col-sm-4">
                     <input type="text" class="form-control" disabled value="<?php if($row->recommend=='1') { echo " Yes "; } else { echo "No "; }?>">
                </div>
            </div>
            
            <h3>I would like promotional updates from Dell India</h3>
            <div class="form-group">
                <label class="col-sm-2 control-label" for="normal-field">Updates</label>
                <div class="col-sm-4">
                     <input type="text" class="form-control" disabled value="<?php if($row->updates=='1') { echo " Yes "; } else { echo "No "; }?>">
                </div>
            </div>
        </form>
    </div>
    <?php } ?>
</section>
