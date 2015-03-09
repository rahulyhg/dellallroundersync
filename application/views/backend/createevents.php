<div class="row" style="padding:1% 0">
    <div class="col-md-12">
        <div class="pull-right">
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                events Details
            </header>
            <div class="panel-body">
                <form class='form-horizontal tasi-form' method='post' action='<?php echo site_url("site/createeventssubmit");?>' enctype='multipart/form-data'>
                    <div class="panel-body">
                        <div class="form-group">
                            <label class="col-sm-2 control-label" for="normal-field">name</label>
                            <div class="col-sm-4">
                                <input type="text" id="normal-field" class="form-control" name="name" value='<?php echo set_value(' name ');?>'>
                            </div>
                        </div>
                        <div class=" form-group">
                            <label class="col-sm-2 control-label" for="normal-field">image</label>
                            <div class="col-sm-4">
                                <input type="file" id="normal-field" class="form-control" name="image" value='<?php echo set_value(' image ');?>'>
                            </div>
                        </div>
                        <div class=" form-group">
                            <label class="col-sm-2 control-label" for="normal-field">venue</label>
                            <div class="col-sm-8">
                                <textarea name="venue" id="" cols="20" rows="10" class="form-control tinymce">
                                    <?php echo set_value( 'venue');?>
                                </textarea>
                            </div>
                        </div>
                        <div class=" form-group">
                            <label class="col-sm-2 control-label" for="normal-field">description</label>
                            <div class="col-sm-8">
                                <textarea name="description" id="" cols="20" rows="10" class="form-control tinymce">
                                    <?php echo set_value( 'description');?>
                                </textarea>
                            </div>
                        </div>
                        <div class=" form-group">
                            <label class="col-sm-2 control-label" for="normal-field">photoalbum</label>
                            <div class="col-sm-4">
                                <?php echo form_dropdown( "photoalbum",$photoalbum,set_value( 'photoalbum'), "class='chzn-select form-control'");?>
                            </div>
                        </div>
                        <div class=" form-group">
                            <label class="col-sm-2 control-label" for="normal-field">videoalbum</label>
                            <div class="col-sm-4">
                                <?php echo form_dropdown( "videoalbum",$videoalbum,set_value( 'videoalbum'), "class='chzn-select form-control'");?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label" for="normal-field">&nbsp;</label>
                            <div class="col-sm-4">
                                <button type="submit" class="btn btn-primary">Save</button>
                                <a href="<?php echo site_url(" site/viewpage "); ?>" class="btn btn-secondary">Cancel</a>
                            </div>
                        </div>
                </form>
                </div>
        </section>
        </div>
    </div>
