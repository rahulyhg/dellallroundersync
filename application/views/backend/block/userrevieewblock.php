<section class="panel">

    <div class="panel-body">
        <ul class="nav nav-stacked">
           <li><a href="<?php echo site_url('site/editusersreview?id=').$this->input->get('id'); ?>">Users List</a></li>
            <li><a href="<?php echo site_url('site/viewreviews?id=').$this->input->get('id'); ?>"> Review List</a></li>
            <li><a onclick='window.open("<?php echo site_url('site/viewcertificate?id=').$this->input->get('id'); ?>","_blank","width=725,titlebar=no,menubar=no,resizable=no,scrollbars=no",height=100)'>Get Certificate</a></li>

        </ul>
    </div>
</section>