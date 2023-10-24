<?php
require './src/dbConnect.php';
require './configs/global.php';
?>
<form action="#" method="post" class="formulaire">
  <ul class="info_form">
    <li>
      <input type="text" id="name" name="name" placeholder="name" />
    </li>
    <li>
      <input type="text" id="surname" name="surname" placeholder="surname"/>
    </li>
    <li>
      <input type="text" id="email" name="email" placeholder="email"/>
    </li>
    <li>
      <input type="text" id="tel" name="tel" placeholder="téléphone"/>
    </li>
  </ul>
   <input type="submit" class="boutton">
</form>

<?php 
if(isset($_POST['name']) && isset($_POST['surname']) && isset($_POST['email']) && isset($_POST['tel'])){
  $connection->query(queryBuilder('c', 'annuaire_nws', ['name' => $_POST['name']],['surname' => $_POST['surname']],['email' => $_POST['email']],['tel' => $_POST['tel']]));
}
