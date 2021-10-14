<?php
class User{
	
	//Attribut
	private $UserId;
	private $UserNom;
	private $UserPrenom;
	private $UserMotdepasse
	private $UserMail;
	private $cUserTel;
	private $UserPoste;
	
	//Constructeur
	public function __construct($valeur = array()){
		if(!empty($valeur)){
			$this->affect($valeur);
		}
	}
		
	public function affect($donnees){
		foreach($donnees as $attribut => $valeur){
			switch ($attribut){
				case 'user_id':$this->setUserId($valeur);break;
				case 'user_nom':$this->setUserNom($valeur);break;
				case 'user_prenom':$this->setUserPrenom($valeur);break;
				case 'user_mail':$this->setUserMail($valeur);break;
				case 'user_tel':$this->setUserTel($valeur);break;
				case 'user_poste':$this->setUserPoste($valeur);break;
			}
		}
	}
	
	//Getteurs et Setteurs
		//Identifiant
	public function setUserId($id) {
		$this->userId = $id;
	}
	
	public function getUserId()	{
		return $this->userId;
	}
		//Nom
	public function setUserNom($nom)	{
		$this->userNom = $nom;
	}
	
	public function getUserNom()	{
		return $this->userNom;
	}
		//Prénom
	public function setUserPrenom($prenom) {
		$this->userPrenom = $prenom;
	}
	public function getUserPrenom() {
		return $this->userPrenom;
	}
	
		//Mail
	public function setUserMail($mail)	{
		$this->userMail = $mail;
	}
	public function getUserMail() {
		return $this->userMail;
	}
	
		//Tel
	public function setUserTel($tel) {
		$this->userTel = $tel;
	}
	public function getUserTel() {
		return $this->userTel;
	}
	
		//Poste
	public function setUserPoste($poste)	{
		$this->userPoste = $poste;
	}
	
	public function getUserPoste()	{
		return $this->userPoste;
	}



	
}