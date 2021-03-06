<?php
	
/**
 * @version		0.4 alpha-test - 2013-06-03
 * @package		Tourism System Server
 * @copyright	Copyright (C) 2010 Raccourci Interactive
 * @license		Qt Public License; see LICENSE.txt
 * @author		Nicolas Marchand <nicolas.raccourci@gmail.com>
 */
 
	require_once('application/modele/droitModele.php');
	require_once('application/collection/profilDroitCollection.php');
	
	final class profilDroitModele extends droitModele implements WSDLable
	{
		
		protected $idGroupe;
		
		protected $idProfil;
		protected $libelle;
		protected $droitsChamp = array();

		public function setDroitsChamp(object $droitsChamp)
		{
			$this -> droitsChamp = $droitsChamp;
		}

	}
