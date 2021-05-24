


<?php include 'header.php'; ?>
<div id="main-content">
<form class="post-form"  action="http://172.16.32.11:8000/server/updatedata.php" method="post">
        <div class="form-group">
            <label for="">Name</label>
            <input type="hidden" name="sid"  value="<?php echo $_GET['sid']; ?>" />
            <input type="text" name="sname" value="<?php echo $_GET["sname"]; ?>" />
        </div>
        <div class="form-group">
            <label>Address</label>
            <input type="text" name="semail" value="<?php echo $_GET["semail"];?>" />
        </div>
        <div class="form-group">
            <label>Phone</label>
            <input type="text" name="sphone" value="<?php echo $_GET['sphone']; ?>"  />
        </div>

        <div class="form-group">
            <label>Class</label>
            <input type="text" name="sclass" value="<?php echo $_GET['sclass']; ?>"  />
        </div>
    <input class="submit" type="submit" value="Update" name="update"  />
    </form>

   

</div>
</div>
</body>
</html>
