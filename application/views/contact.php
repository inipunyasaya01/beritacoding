<!DOCTYPE html>
<html lang="en">
<head>
<?php $this->load->view('_partials/head.php'); ?>
</head>
    <body>
    <?php $this->load-> view ('_partials/navbar.php'); ?>
    <h1>Contact Us</h1>
    <p>Ini adalah halaman Contact</p>
    <from action="" methode="post">
        <div>
            <label for="name">Name</label>
            <input type="text" name="name" placeholder="your name" require/>
</div>
        <div> 
        <label for="email">Email</label>
        <input type="email" name="email" placeholder="your email address" require/>
</div>
        <div>
        <label for="massage">Massage</label>
        <input type="massage" name="massage" placeholder="rite your massage" require/>
</div>
        <div>
            <input type="submit" value="Kirim">
            <input type="reset" value="Reset">
</from>
<?php $this->load-> view ('_partials/footer.php'); ?>
</body>
</html>