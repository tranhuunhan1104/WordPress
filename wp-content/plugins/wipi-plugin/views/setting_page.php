<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<div class="wrap">
    <h2>My Setting</h2>
    <?php 
        settings_errors($this->_menuSlug,false,false);
    ?>
    <p> Đây là form hiển thị cấu hình của WIPI_PLUGIN ! </p>
    <form method="post" id="wipi_plugin_setting" action="options.php" enctype="multipart/form-data">
        <?php echo settings_fields('Wipi_option'); ?>
        <?php echo do_settings_sections( $this->_menuSlug); ?>
        <p class="submit">
            <input type="submit" name="submit" value="Save change" class="btn btn-primary">
        </p>
    </form>
</div>