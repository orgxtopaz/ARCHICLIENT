<?php include 'header.php';

?>

<div id="main-content">
    <h2>Add New Record</h2>

    <form class="post-form" action="http://172.16.32.11:8000/server/savedata.php" method="post">
      
        <div class="form-group">
            <label>Name</label>
            <input type="text" name="sname" required/>
        </div>
        <div class="form-group">
            <label>Address</label>
            <input type="text" name="semail" required/>
        </div>
        <div class="form-group">
            <label>Phone</label>
            <input type="text" name="sphone" required/>
        </div>

        <div class="form-group">
            <label>Class</label>
            <input type="text" name="sclass" required/>
        </div>
        <input class="submit" type="submit" value="Save"/>
    </form>
</div>
</div>
</body>
</html>
