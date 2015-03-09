<div class="row" style="padding:1% 0">
    <div class="col-md-12">
        <a class="btn btn-primary pull-right" href="<?php echo site_url("site/createphotos?id=").$this->input->get('id');?>"><i class="icon-plus"></i>Create </a> &nbsp;
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                photos Details
            </header>
            <div class="drawchintantable">
                <?php $this->chintantable->createsearch("photos List");?>
                <table class="table table-striped table-hover" id="" cellpadding="0" cellspacing="0">
                    <thead>
                        <tr>
                            <th data-field="id">id</th>
                            <th data-field="name">name</th>
                            <th data-field="Email">Email</th>
                            <th data-field="Phone">Phone</th>
                           <th data-field="dots">dots</th>
                            <th data-field="jerseyscore">jerseyscore</th>
                            <th data-field="testtime">testtime</th>
                            <th data-field="certificate">certificate</th>
                              <th data-field="Message">Message</th>
                            <th data-field="Action ">Action</th>
                           
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
                <?php $this->chintantable->createpagination();?>
            </div>
        </section>
        <script>
                       function drawtable(resultrow) {
                
                return "<tr><td>" + resultrow.id + "</td><td>" + resultrow.name + "</td><td>" + resultrow.email + "</td><td>" + resultrow.phone + "</td><td>" + resultrow.dots + "</td><td>"+resultrow.jerseyscore+"</td><td>"+resultrow.testtime+"</td><td>"+resultrow.certificate+"</td><td>"+resultrow.jerseyscore+"</td><td><a class='btn btn-primary btn-xs' href='<?php echo site_url('site/editusersreview?id=');?>" + resultrow.id + "'><i class='icon-pencil'></i></a><a class='btn btn-danger btn-xs' href='<?php echo site_url('site/deletephotos?id=');?>" + resultrow.id + "'><i class='icon-trash '></i></a></td></tr>";
            }
            generatejquery("<?php echo $base_url;?>");
        </script>
    </div>
</div>
