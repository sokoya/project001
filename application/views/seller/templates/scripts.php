<script src="<?= base_url('assets/seller/js/jquery.min.js'); ?>"></script>
<script src="<?= base_url('assets/seller/js/bootstrap.min.js'); ?>"></script>
<script src="<?= base_url('assets/seller/js/nifty.min.js');?>"></script>
<script src="<?= base_url('assets/seller/js/demo/nifty-demo.min.js'); ?>"></script>
<script type="text/javascript"> base_url = '<?= base_url(); ?>';</script>
<?php if( in_array($pg_name, array('product','template'))) :?>
    <script src="<?= base_url('assets/seller/plugins/dropzone/dropzone.min.js'); ?>"></script>
    <script src="<?= base_url('assets/seller/js/demo/form-file-upload.js'); ?>"></script>
    <script src="<?= base_url('assets/seller/plugins/bootstrap-wizard/jquery.bootstrap.wizard.min.js'); ?>"></script>
    <script src="<?= base_url('assets/seller/plugins/bootstrap-validator/bootstrapValidator.min.js'); ?>"></script>
    <script src="<?= base_url('assets/seller/js/demo/form-wizard.js'); ?>"></script>
    <script src="<?= base_url('assets/seller/plugins/bootstrap-markdown/js/bootstrap-markdown.js'); ?>"></script>
    <script src="<?= base_url('assets/seller/plugins/bootstrap-select/bootstrap-select.min.js'); ?>"></script>
    <script src="<?= base_url('assets/seller/plugins/bootstrap-datepicker/bootstrap-datepicker.min.js'); ?>"></script>
<?php endif; ?>
<?php if( in_array($pg_name, array('manage_product'))) :?>
    <script src="<?= base_url('assets/seller/plugins/datatables/media/js/jquery.dataTables.js'); ?>"></script>
    <script src="<?= base_url('assets/seller/plugins/datatables/media/js/dataTables.bootstrap.js'); ?>"></script>
    <script src="<?= base_url('assets/seller/plugins/datatables/extensions/Responsive/js/dataTables.responsive.min.js'); ?>"></script>

<?php endif; ?>
