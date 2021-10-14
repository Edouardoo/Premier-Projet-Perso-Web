<?php
class Client{
	
	//Attribut
	private $cliId;
	private $cliNom;
	private $cliPrenom;
	private $cliMail;
	private $cliTel;
	private $cliAdresse;
	private $CliIdVoiture;
	private $CliTypeAbo;
	
	//Constructeur
	public function __construct($valeur = array()){
		if(!empty($valeur)){
			$this->affect($valeur);
		}
	}
		
	public function affect($donnees){
		foreach($donnees as $attribut => $valeur){
			switch ($attribut){
				case 'id_cli':$this->setCliId($valeur);break;
				case 'nom_cli':$this->setCliNom($valeur);break;
				case 'prenom_cli':$this->setCliPrenom($valeur);break;
				case 'mail_cli':$this->setCliMail($valeur);break;
				case 'tel_cli':$this->setCliAdresse($valeur);break;
				case 'id':$this->setCliVoiture($valeur);break;
				case 'cli_tel':$this->setCliTypeAbo($valeur);break;
			}
		}
	}
	
	//Getteurs et Setteurs
		//Identifiant
	public function setCliId($id) {
		$this->cliId = $id;
	}
	
	public function getCliId()	{
		return $this->cliId;
	}
		//Nom
	public function setCliNom($nom)	{
		$this->cliNom = $nom;
	}
	
	public function getCliNom()	{
		return $this->cliNom;
	}
		//Prénom
	public function setCliPrenom($prenom) {
		$this->cliPrenom = $prenom;
	}
	public function getCliPrenom() {
		return $this->cliPrenom;
	}
	
		//Adresse
	public function setCliAdresse($adresse)	{
		$this->cliAdresse = $adresse;
	}
	public function getCliAdresse() {
		return $this->cliAdresse;
	}
	
		//Mail
	public function setCliMail($mail) {
		$this->cliMail = $mail;
	}
	public function getCliMail() {
		return $this->cliMail;
	}
	
		//Date de naissance
	public function setCliNaissance($nais)	{
		$this->cliNaissance = $nais;
	}
	
	public function getCliNaissance()	{
		return $this->cliNaissance;
	}

		//Téléphone
	public function setCliTel($tel)	{
		$this->cliTel = $tel;
	}
	
	public function getCliTel()	{
		return $this->cliTel;
	}


	
}