
<div class="form">
<?php
    foreach(Yii::app()->user->getFlashes() as $key => $message) {
        echo '<div class="flash-' . $key . '">' . $message . "</div>\n";
    }
?>
<form method="post" enctype="multipart/form-data" action="/bloodDonationApp/index.php/userDetails/upload" >


<div class="row">
file<input type="file" name="file" required/></div>
<div class="row">
<input type="submit" value="send" />
</div>
</form>
</div>