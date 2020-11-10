<?php
	class UserClass
    {
    	//Properties and Method
	public $name;
	public $username;
	public $email;


	function set_name($name)
	{
		$this->name = $name;
    }

    function get_name()
    {
    	return $this->name;
    }

    function set_username($username) 
    {
    	$this->username = $username;
    }
    
    function get_username()
    {
    	return $this->username;
    }

    function set_email($email) 
    { 
    	$this->email = $email;
	}

	function get_email()
	{
		return $this->email;
	}


	}

	$first = new UserClass();
	$second = new UserClass();
	$third = new UserClass();

	$first->set_name('Victoria Angela Marie A. Dolor');
	$second->set_username('victoriadolor');
	$third->set_email("lullabyangela@gmail.com");

	echo "{$first->get_name()} Added a friend.";
	echo "<br>";
	echo "{$second->get_username()} Posted a status.";
?>
