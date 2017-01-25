</div>
<div id="footer">
    Copyright <?php echo date("Y", time()); ?> Kamol Roy
</div>
</body>
<?php if(isset($database)) {$database->close_connection();} ?>
</html>
