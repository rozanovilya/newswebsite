<?php
class Model
{

	static $oDbConnection;

	function __construct($args = [])
	{
		foreach ( args as $key => $value)
			$this->$key = $value;
	}
	public function __get($property)
	{

		if (property_exists(self::class,$property)){
			$functionname = 'get'.$property.'()';
			return $this->$functionname;	
		}
		return null;

	}
		public function __set($property, $value)
	{

		if (property_exists(self::class,$property)){
			$functionname = 'set'.$property;
			$functionname($property);	
		}
		return null;
	}

	static function getModel($id)
	{
		$Class = get_called_class();
		if (empty($table = $Class::$table))
			return null;
		$query = self::$oDbConnection->prepare("SELECT * FROM $table WHERE 'id'=:id");
		$query->execute(['id'=>$id]);
		$res = $query->fetch(PDO::FETCH_ASSOS);
		return ($res) ? new $Class($res) : null;
	}
	static function saveModel($this)
	{
		$Class = get_called_class();
		$id = $this->id;
		$queryIfExists = self::$oDbConnection->prepare("SELECT * FROM $table WHERE 'id'=:id");
		$queryIfExists->execute(['id'=>$id]);
		$res = $queryIfExists->fetch(PDO::FETCH_ASSOS);
		if ($res){
			//update query
		}
		else{
			//insert query
		}

	}
}

class News extends Model
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

	protected static $table ='News';

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
	}
	function setoNewsAuthor($oNewsAuthor)
	{
		$this->oNewsAuthor = $oNewsAuthor;
	}
	


}

class Comment extends Model
{
	private $NewsId;
	private $CommentId;
	private $CommentDate;
	private $CommentAuthorId;
	public $oCommentAuthor;
	private $CommentText;
	private $Moderated;

	protected static $table ='Comments';

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
	function getModerated()
	{
		return $this->Moderated;
	}

}
class User extends Model
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

	protected static $table ='Users';

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
	function getAdministrator()
	{
		return $this->Administrator;
	}
	function setJournalist($Journalist)
	{
		$this->Journalist = $Journalist;
	}
	function getJournalist()
	{
		return $this->Journalist;
	}
	function setEditor($Editor)
	{
		$this->Editor = $Editor;
	}
	function getEditor()
	{
		return $this->Editor;
	}
	function setModerator($Moderator)
	{
		$this->Moderator = $Moderator;
	}
	function getModerator()
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

}

class Rubric extends Model
{
	private $RubricId;
	private $RubricName;
	public $oNews = array();

	protected static $table ='Rubrics';

	function setRubricId($RubricId)
	{
		$this->RubricId = $RubricId;
	}
	function getRubricId()
	{
		return $this->RubricId;
	}
	function setRubricName($RubricName)
	{
		$this->RubricName = $RubricName;
	}
	function getRubricName()
	{
		return $this->RubricName;
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

}