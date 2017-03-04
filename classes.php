<?php
class News 
{
	private $NewsId;
	private $NewsDate;
	private $NewsRubric;
	private $SeoH1;
	private $SeoTitle;
	private $SeoDescription;
	private $PreviewPhoto;
	private $NewsText;
	private $NewsSource;
	private $NewsAuthorId;
	public $oNewsAuthor;
	function __construct($args = [])
	{
		foreach ( args as $key => $value)
			$this->$key = $value;
	}

	function setNewsId($NewsId)
	{
    		$this->NewsId = $NewsId;
	}
	function getNewsId()
	{
   	 	return $this->NewsId;
	}
	function setNewsDate($NewsDate)
	{
   		$this->NewsDate = $NewsDate;
	}
	function getNewsDate()
	{
    		return $this->NewsDate;
	}
	function setNewsRubric($NewsRubric)
	{
    		$this->NewsRubric = $NewsRubric;
	}
	function getNewsRubric()
	{
    		return $this->NewsRubric;
	}
	function setSeoH1($SeoH1)
	{
    		$this->seoH1 = $SeoH1;
	}
	function getSeoH1()
	{
    		return $this->SeoH1;
	}
	function setSeoTitle($SeoTitle)
	{
		$this->SeoTitle = $SeoTitle;
	}
	function getSeoTitle()
	{
		return $this->SeoTitle;
	}
	function setSeoDescription($SeoDescription)
	{
		$this->SeoDescription = $SeoDescription;
	}
	function getSeoDescription()
	{
		return $this->SeoDescription;
	}
	function setPreviewPhoto($PreviewPhoto)
	{
		$this->PreviewPhoto = $PreviewPhoto;
	}
	function getPreviewPhoto()
	{
		return $this->PreviewPhoto;
	}
	function setNewsText($NewsText)
	{
		$this->NewsText = $NewsText;
	}
	function getNewsText()
	{
		return $this->NewsText;
	}
	function setNewsSource($NewsSource)
	{
		$this->NewsSource = $NewsSource;
	}
	function getNewsSource()
	{
		return $this->NewsSource;
	}
	function setNewsAuthorId($NewsAuthorId)
	{
		$this->NewsAuthorId = $NewsAuthorId;
	}
	function getNewsAuthorId()
	{
		return $this->NewsAuthorId;
	}
	function getoNewsAuthor()
	{
		if ($this->oNewsAuthor){
			//getting the object from the database
		}
	function setoNewsAuthor($oNewsAuthor)
	{
		$this->oNewsAuthor = $oNewsAuthor;
	}
	}

	public function __get($property)
	{
		switch ($property) {
			case 'NewsId':
				return $this->getNewsId();
				break;
			case 'NewsDate':
				return $this->getNewsDate();
				break;
			case 'NewsRubric':
				return $this->getNewsRubric();
				break;
			case 'SeoH1':
				return $this->getSeoH1();
				break;								
			case 'SeoTitle':
				return $this->getSeoTitle();
				break;
			case 'SeoDescription':
				return $this->getSeoDescription();
				break;
			case 'PreviewPhoto':
				return $this->getPreviewPhoto();
				break;
			case 'NewsText':
				return $this->getNewsText();
				break;
			case 'NewsSource':
				return $this->getNewsSource();
				break;
			case 'NewsAuthorId':
				return $this->getNewsAuthorId();
				break;
			case 'oNewsAuthor':
				return $this->getoNewsAuthor();
				break;															
			default:
				return null;
				break;
		}
	}
	public function __set($property, $value)
	{
		switch ($property) {
			case 'NewsId':
				$this->NewsId = $value;
				break;
			case 'NewsDate':
				$this->NewsDate = $value;
				break;
			case 'NewsRubric':
				$this->NewsRubric = $value;
				break;
			case 'SeoH1':
				$this->SeoH1 = $value;
				break;
			case 'SeoTitle':
				$this->SeoTitle = $value;
				break;
			case 'SeoDescription':
				$this->SeoDescription = $value;
				break;
			case 'PreviewPhoto':
				$this->PreviewPhoto = $value;
				break;
			case 'NewsText':
				$this->NewsText = $value;
				break;
			case '$NewsSource':
				$this->$NewsSource = $value;
				break;
			case 'NewsAuthorId':
				$this->NewsAuthorId = $value;
				break;
			case 'oNewsAuthor':
				$this->oNewsAuthor = $value;
				break;
			
			default:
				return null;
				break;
		}
	}

}

class Comment
{
	private $NewsId;
	private $CommentId;
	private $CommentDate;
	private $CommentAuthorId;
	public $oCommentAuthor;
	private $CommentText;
	private $Moderated;
	function __construct($args = [])
	{
		foreach ( args as $key => $value)
			$this->$key = $value;
	}
	function setNewsId($NewsId)
	{
		$this->NewsId = $NewsId;
	}
	function getNewsId()
	{
		return $this->NewsId;
	}
	function setCommentId($CommentId)
	{
		$this->CommentId = $CommentId;
	}
	function getCommentId()
	{
		return $this->CommentId;
	}
	function setCommentDate($CommentDate)
	{
		$this->CommentDate = $CommentDate;
	}
	function getCommentDate()
	{
		return $this->CommentDate;
	}
	function setCCommentAuthorId($CommentAuthor)
	{
		$this->CommentAuthor = $CommentAuthor;
	}
	function getCCommentAuthorId()
	{
		return $this->CommentAuthor;
	}
	function setoCommentAuthor($oCommentAuthor)
	{
		$this->oCommentAuthor = $oCommentAuthor;
	}
	function getoCommentAuthor()
	{
		if ($this->oCommentAuthor){
			//get the object from the database
		}
	}
	function setCommentText($CommentText)
	{
		$this->CommentText = $CommentText;
	}
	function getCommentText()
	{
		return $this->CommentText;
	}
	function setModerated($Moderated)
	{
		$this->Moderated = $Moderated;
	}
	function isModerated()
	{
		return $this->Moderated;
	}
	public function __get($property)
	{
		switch ($property) {
			case 'NewsId':
				return $this->getNewsId();
				break;
			case 'CommentId':
				return $this->getCommentId();
				break;
			case 'CommentDate':
				return $this->getCommentDate();
				break;
			case 'CommentAuthorId':
				return $this->getCommentAuthorId();
				break;
			case 'oCommentAuthor':
				return $this->getoCommentAuthor();
				break;
			case 'CommentText':
				return $this->getCommentText();
				break;
			case 'Moderated':
				return $this->isModerated();
				break;
			
			default:
				return null;
				break;
		}
	}
	public function __set($property,$value)
	{
		switch ($property) {
			case 'NewsId':
				$this->NewsId = $value;
				break;
			case 'CommentId':
				$this->CommentId = $value;
				break;
			case 'CommentDate':
				$this->CommentDate = $value;
				break;
			case 'CommentAuthorId':
				$this->CommentAuthorId = $value;
				break;
			case 'oCommentAuthor':
				$this->NewsId = $value;
				break;
			case 'CommentText':
				$this->CommentText = $value;
				break;
			case '$Moderated':
				$this->$Moderated = $value;
				break;
			
			default:
				return null;
				break;
		}
	}
}
class User
{
	private $UserId;
	private $UserName;
	private $PasswordHash;
	private $Administrator;
	private $Journalist;
	private $Editor;
	private $Moderator;
	public $oNews = array();
	public $oComments = array();
	function __construct($args = [])
	{
		foreach ( args as $key => $value)
			$this->$key = $value;
	}
	function setUserId($UserId)
	{
		$this->UserId = $UserId;
	}
	function getUserId()
	{
		return $this->UserId;
	}
	function setUserName($UserName)
	{
		$this->UserName = $UserName;
	}
	function getUserName()
	{
		return $this->UserName;
	}
	function setPasswordHash($PasswordHash)
	{
		$this->PasswordHash = $PasswordHash;
	}
	function getPasswordHash()
	{
		return $this->PasswordHash;
	}
	function setAdministrator($Administrator)
	{
		$this->Administrator = $Administrator;
	}
	function isAdministrator()
	{
		return $this->Administrator;
	}
	function setJournalist($Journalist)
	{
		$this->Journalist = $Journalist;
	}
	function isJournalist()
	{
		return $this->Journalist;
	}
	function setEditor($Editor)
	{
		$this->Editor = $Editor;
	}
	function isEditor()
	{
		return $this->Editor;
	}
	function setModerator($Moderator)
	{
		$this->Moderator = $Moderator;
	}
	function isModerator()
	{
		return $this->Moderator;
	}
	function setoNews($oNews)
	{
		$this->oNews = $oNews;
	}
	function getoNews()
	{
		if ($this->oNews){
		//get the array of objects from the database			
		}

	}
	function setoComments($oComments)
	{
		$this->oComments = $oComments;
	}
	function getoComments()
	{
		if ($this->oComments){
		//get the array of objects from the database			
		}

	}
	public function __get($property)
	{
		switch ($property){
			case 'UserId':
				return $this->getUserId();
				break;
			case 'UserName':
				return $this->getUserName();
				break;
			case 'PasswordHash':
				return $this->getPasswordHash();
				break;
			case 'Administrator':
				return $this->isAdministrator();
				break;
			case 'Journalist':
				return $this->isJournalist();
				break;
			case 'Editor':
				return $this->isEditor();
				break;
			case 'Moderator':
				return $this->isModerator();
				break;
			case 'oNews':
				return $this->getoNews();
				break;
			case 'oComments':
				return $this->getoComments();
				break;
			default:
				return null;

		}
	}
	public function __set($property, $value)
	{
		switch ($property) {
			case 'UserId':
				$this->UserId = $value;
				break;
			case 'UserName':
				$this->UserName = $value;
				break;
			case 'PasswordHash':
				$this->PasswordHash = $value;
				break;
			case 'Administrator':
				$this->Administrator = $value;
				break;
			case 'Journalist':
				$this->Journalist = $value;
				break;
			case 'Editor':
				$this->Editor = $value;
				break;
			case 'Moderator':
				$this->Moderator = $value;
				break;
			case 'oNews':
				$this->oNews = $value;
				break;
			case 'oComments':
				$this->oComments = $value;
				break;
			
			default:
				return null;
				break;
		}
	}

}
