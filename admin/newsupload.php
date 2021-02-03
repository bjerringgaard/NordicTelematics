<?php
require("../controller/includer.php");
confirm_logged_in();
?>
<div class="news">
  <h2>Opret nyhed</h2>
  <form action="" method="post" enctype="multipart/form-data">
  <div>
    <label for="file">Banner</label>
    <div class="uploadbanner">
      <input type="file" name="file">
    </div>
  </div>
    
  <div>
    <label for="title">Titel</label>
    <input type="text" name="title"/>
  </div>

  <div>
    <label for="description">Beskrivelse</label>
    <textarea type="textarea" name="description"></textarea>
  </div>

  <div>
    <label for="buttontext">Knap</label>
    <div class="linkbutton">
      <input type="text" placeholder="Knap tekst" name="buttontext"/>
      <input type="text" placeholder="Knap link" name="buttonlink"/>
    </div>
  </div>

  <div >
    <input id="submit" type="submit" name="submit" value="Post"/>
  </div>    
  </form>
</div>

<?php 
require("../controller/addnews.php");
?>
