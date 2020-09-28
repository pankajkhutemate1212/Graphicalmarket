<!DOCTYPE HTML>



    

<?php $this->load->view('admin/components/page_head'); ?>



<?php $this->load->view('admin/components/admin_header_menu'); ?>

<div class="row">



        <div class="container" style="margin-top:50px">    

             <br>

             

             <?php if (isset($error)): ?>

                <div class="alert alert-error"><?php echo $error; ?></div>

            <?php endif; ?>

            <?php if ($this->session->flashdata('success') == TRUE): ?>

                <div class="alert alert-success"><?php echo $this->session->flashdata('success'); ?></div>

            <?php endif; ?>

             

            <h2>MSF News Upload Panel</h2>
            <hr/>

                <form method="post" action="<?php echo base_url() ?>news/importcsv" enctype="multipart/form-data">

                    <input type="file" name="userfile" ><br><br>

                    <input type="submit" name="submit" value="UPLOAD" class="btn btn-primary">

                </form>


    





        </div>









