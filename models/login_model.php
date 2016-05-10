<?php
/**
 * Login_model
 */
class Login_Model extends Model
{
  function __construct()
  {
    parent::__construct();
  }

  public function login()
  {
    $sth = $this->db->prepare("SELECT id FROM users WHERE
				username = :username AND password = MD5(:password)");
		$sth->execute(array(
			':username' => $_POST['username'],
			':password' => $_POST['password']
		));

    $count = $sth->rowCount();
    if ($count > 0) {
      Session::init();
			Session::set('loggedIn', true);
      echo 'Logged in.';
      header('refresh:2;url='.URL.'profile');
    } else {
      echo 'We were not able to match the credentials with any data from our database.<br/>';
      echo '[<a href="'.URL.'login">back</a>]';
      header('refresh:5;url='.URL.'login');
    }
  }
}
?>
