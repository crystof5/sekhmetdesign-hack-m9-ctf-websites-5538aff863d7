<?php

class User { 
	private $db;
	private $iv;
	private $key;

	//Initialise la cle et le iv
	function __construct($cn) {
		$this->db = $cn;
		$this->iv = '0000000000000000';
		$this->key = 'D0nTGu3SsM3ItSN0tTh3G0Al';
	}

	public function verify_login($u, $p) {
		$query = $this->db->prepare("SELECT * FROM users WHERE username = :uname LIMIT 1");
            	$query->execute(array(":uname" => $u));
		$res = $query->fetch(PDO::FETCH_ASSOC);
            	if($query->rowCount() > 0) {
			if($p === $res['password']) {
				setcookie('auth', $this->encrypt_cookie($this->make_token($res['username'], $res['email'])));
                    		return true;
			} else 
                    		return false;
            	}
	}

	//Verifie si l'utilisateur est connecte
	public function is_loggedin() {
		if(isset($_SESSION['session'])) 
			return true;
		else
			return false;
	}

	//Encryption du cookie mode CBC
	public function encrypt_cookie($token) {
		return array_shift(unpack('H*', mcrypt_encrypt(MCRYPT_RIJNDAEL_128, $this->key, $token, MCRYPT_MODE_CBC, $this->iv)));
	}

	//Decryption du cookie mode CBC
	public function decrypt_cookie() {
		return str_replace("\x00", "", mcrypt_decrypt(MCRYPT_RIJNDAEL_128, $this->key, pack('H*', $_COOKIE['auth']), MCRYPT_MODE_CBC, $this->iv));
	}

	//Creation du token pour le cookie
	public function make_token($u, $e) {
		return "username=$u;email=$e;admin=false";
	}

	//Verifie si l'utilisateur est administrateur
	public function verify_admin() {
		$isadmin = false;
		$token = explode(";", $this->decrypt_cookie());
		if(sizeof($token) === 3){
			foreach ($token as $pairs) {
				$value = explode('=', $pairs);
				if($value[0] === 'admin' && $value[1] === 'true' && count($value) === 2)
					$isadmin = true;
			}
		}
		return $isadmin;
	}

	//Creation d'un nouvel utilisateur
	public function new_user($u, $p, $e) {
		$query = $this->db->prepare("SELECT * FROM users WHERE username = :uname LIMIT 1");
            	$query->execute(array(":uname" => $u));
		$res = $query->fetch(PDO::FETCH_ASSOC);
            	if($query->rowCount() <= 0) {
			try {
				$this->db->beginTransaction();
				$stmt = $this->db->prepare("INSERT INTO users (username, password, email) VALUES (:u, :p, :e)");
				$stmt->bindParam(':u', $u);
				$stmt->bindParam(':p', $p);
				$stmt->bindParam(':e', $e);
				$stmt->execute();
				$this->db->commit();
				$this->verify_login($u, $p);
				$_SESSION['session'] = 'true';
				header("Location: /");
				return true;
			} catch (Exceptioon $e) {
				$this->db->rollback();
				throw $e;
				return false;
			}
		}
		else
			return false;
	}
}
?>
