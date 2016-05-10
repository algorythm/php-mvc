<?php
/**
 * Profile
 */
class Profile extends Controller
{
  function __construct()
  {
		parent::__construct();
		Session::init();
		$logged = Session::get('loggedIn');
		if ($logged == false) {
			Session::destroy();
			header('location: login');
			exit;
		}
	}

  function index()
  {
    $this->view->render('profile/index');
  }

  function logout()
  {
    Session::destroy();
    echo 'You just logged out.';
    header('refresh:2;url='.URL);
    exit;
  }
}
?>
