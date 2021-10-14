 <?php
class UserManager{
	
	private $dbo ; 
	
	public function __construct($db) {
		$this->db = $db;
	}
	
	public function ajouterUser($user) {
		$retour = -1;
		if($User instanceof User){
			$req = $this->db->prepare('INSERT INTO User (user_nom, user_prenom, user_mail, user_tel, user_poste)
										VALUES (:userNom, :userPrenom, :userMail, :userTel, :userPoste);');
			$req->bindValue(':UserNom', $user->getUserNom());
			$req->bindValue(':userPrenom', $user->getUserPrenom());
			$req->bindValue(':userMail', $user->getUserMail());			
			$req->bindValue(':userTel', $user->getUserTel());
			$req->bindValue(':userPoste', $user->getUserPoste());

			$retour = $req->execute();		
		}
		return $retour;
	}
	
	public function existantUser($user){
		$sql = 'SELECT user_id, user_mail, user_prenom FROM User WHERE user_mail=:userMail';
		$req = $this->db->prepare($sql);
		$req->bindValue(':userMail', $user->getUserMail());
		$req->execute();
		
		$userExist[] = $req->FETCH(PDO::FETCH_ASSOC);
		$req->closeCursor();
		
		return $userExist[0] ;
	}
	
	public function supprimerUser($user) {
		$retour = -1;
		if($user instanceof User){
			$req = $this->db->prepare("DELETE FROM user WHERE user_id = :userId");
			$req->bindValue(':userId', $user->getUserId());
			$retour = $req->execute();
		}
		return $retour;
	}
}