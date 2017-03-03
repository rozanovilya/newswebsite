<?php
class News {
private $NewsId;
private $NewsDate;
private $NewsRubric;
private $SeoH1;
private $SeoTitle;
private $SeoDescription;
private $PreviewPhoto;
private $NewsText;
private $NewsSource;
private $NewsAuthor;
function __construct($NewsId,$NewsDate,$NewsRubric,$SeoH1,$SeoTitle,$SeoDescription,$PreviewPhoto,$NewsText,$NewsSource,$NewsAuthor){
$this->NewsId = $NewsId;
$this->NewsDate = $NewsDate;
$this->NewsRubric = $NewsRubric;
$this->SeoH1 = $SeoH1;
$this->SeoTitle = $SeoTitle;
$this->SeoDescription = $SeoDescription;
$this->PreviewPhoto = $PreviewPhoto;
$this->NewsText = $NewsText;
$this->NewsSource = $NewsSource;
$this->NewsAuthor = $NewsAuthor;
}

function setNewsId($NewsId){
    $this->NewsId = $NewsId;
}
function getNewsId(){
    return $this->NewsId;
}
function setNewsDate($NewsDate){
    $this->NewsDate = $NewsDate;
}
function getNewsDate(){
    return $this->NewsDate;
}
function setNewsRubric($NewsRubric){
    $this->NewsRubric = $NewsRubric;
}
function getNewsRubric(){
    return $this->NewsRubric;
}
function setSeoH1($SeoH1){
    $this->seoH1 = $SeoH1;
}
function getSeoH1(){
    return $this->SeoH1;
}
function setSeoTitle($SeoTitle){
	$this->SeoTitle = $SeoTitle;
}
function getSeoTitle(){
	return $this->SeoTitle;
}
function setSeoDescription($SeoDescription){
	$this->SeoDescription = $SeoDescription;
}
function getSeoDescription(){
	return $this->SeoDescription;
}
function setPreviewPhoto($PreviewPhoto){
	$this->PreviewPhoto = $PreviewPhoto;
}
function getPreviewPhoto(){
	return $this->PreviewPhoto;
}
function setNewsText($NewsText){
	$this->NewsText = $NewsText;
}
function getNewsText(){
	return $this->NewsText;
}
function setNewsSource($NewsSource){
	$this->NewsSource = $NewsSource;
}
function getNewsSource(){
	return $this->NewsSource;
}
function setNewsAuthor($NewsAuthor){
	$this->NewsAuthor = $NewsAuthor;
}
function getNewsAuthor(){
	return $this->NewsAuthor;
}

}

class Comment{
	private $NewsId;
	private $CommentId;
	private $CommentDate;
	private $CommentAuthor;
	private $CommentText;
	function __construct($NewsId,$CommentId,$CommentDate,$CommentAuthor,$CommentText){
		$this->NewsId = $NewsId;
		$this->CommentId = $CommentId;
		$this->CommentDate = $CommentDate;
		$this->CommentAuthor = $CommentAuthor;
		$this->CommentText = $CommentText;		
	}
	function setNewsId($NewsId){
		$this->NewsId = $NewsId;
	}
	function getNewsId(){
		return $this->NewsId;
	}
	function setCommentId($CommentId){
		$this->CommentId = $CommentId;
	}
	function getCommentId(){
		return $this->CommentId;
	}
	function setCommentDate($CommentDate){
		$this->CommentDate = $CommentDate;
	}
	function getCommentDate(){
		return $this->CommentDate;
	}
	function setCommentAuthor($CommentAuthor){
		$this->CommentAuthor = $CommentAuthor;
	}
	function getCommentAuthor(){
		return $this->CommentAuthor;
	}
	function setCommentText($CommentText){
		$this->CommentText = $CommentText;
	}
	function getCommentText(){
		return $this->CommentText;
	}
}
class User{
	private $UserId;
	private $UserName;
	private $PasswordHash;
	private $Administrator;
	private $Journalist;
	private $Editor;
	private $Moderator;
	function __construct($UserId,$UserName,$PasswordHash,$Administrator = false, $Journalist = false, $Editor = false, $Moderator = false){
		$this->UserId = $UserId;
		$this->UserName = $UserName;
		$this->PasswordHash = $PasswordHash;
		$this->Administrator = $Administrator;
		$this->Journalist =$Journalist;
		$this->Editor = $Editor;
		$this->Moderator = $Moderator;
	}
	function setUserId($UserId){
		$this->UserId = $UserId;
	}
	function getUserId(){
		return $this->UserId;
	}
	function setUserName($UserName){
		$this->UserName = $UserName;
	}
	function getUserName(){
		return $this->UserName;
	}
	function setPasswordHash($PasswordHash){
		$this->PasswordHash = $PasswordHash;
	}
	function getPasswordHash(){
		return $this->PasswordHash;
	}
	function setAdministrator($Administrator){
		$this->Administrator = $Administrator;
	}
	function isAdministrator(){
		return $this->Administrator;
	}
	function setJournalist($Journalist){
		$this->Journalist = $Journalist;
	}
	function isJournalist(){
		return $this->Journalist;
	}
	function setEditor($Editor){
		$this->Editor = $Editor;
	}
	function isEditor(){
		return $this->Editor;
	}
	function setModerator($Moderator){
		$this->Moderator = $Moderator;
	}
	function isModerator(){
		return $this->Moderator;
	}

}
