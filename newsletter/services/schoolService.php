<?php

#using in account/group_rights.php for Saving Group Rights
if(isset($_REQUEST["select"]) && (int)$_REQUEST["select"] == 1)
{
	$path = "../";
	require_once($path."classes/usersession.php");
	require_once($path."classes/settings.php");
	
	require_once($path.'accounts/accountrepository.php');
	
	$groupId = (int)$_REQUEST["groupId"];
	$selectedIds = $_REQUEST["selectedIds"];
	
	$accountRepo = new AccountRepository($dc);
	
	$response = $accountRepo->UpdateUserGroupRights($groupId, $selectedIds);
	
	if ($response == true)
		echo "1,Group rights are saved.";
	else
	{
		echo "0".$response;
	}
	//else echo "0,Group rights not saved.";
	
}


#using in news/upload.php for updating image width and height
if(isset($_REQUEST["select"]) && (int)$_REQUEST["select"] == 2)
{
	$path = "../";
	require_once($path."classes/usersession.php");
	require_once($path."classes/settings.php");
	
	require_once($path.'accounts/accountrepository.php');
	
	$fileId = (int)$_REQUEST["fileId"];
	$width  = $_REQUEST["width"];
	$height = $_REQUEST["height"];
	$image = (int)$_REQUEST["image"];	//1=width1, height1		2=width2, height2
	
	$fields = "Width".$image . "=?, Height".$image . "=?";
	
	$qry = 
		"UPDATE n_news_files SET ". $fields ."
		 WHERE Id=?";
	
	$params = array(
		array("datatype"=>"s", "value"=>$width),
		array("datatype"=>"s", "value"=>$height),
		array("datatype"=>"i", "value"=>$fileId)
	);
	
	$response = $dc->ExecuteNonQuery($qry, $params);
	
	if ($response == true)
		echo "1,Image size saved.";
	else
	{
		echo "0".$response;
	}
	
}



#using in news/upload.php for delete the file
if(isset($_REQUEST["select"]) && (int)$_REQUEST["select"] == 3)
{
	$path = "../";
	require_once($path."classes/usersession.php");
	require_once($path."classes/settings.php");
	
	require_once($path.'news/newsrepository.php');
	
	$fileId = (int)$_REQUEST["fileId"];
	$image = (int)$_REQUEST["image"];	//1=width1, height1		2=width2, height2
	
	$newsRepo = new NewsRepository( $dc );
	$tFiles = $newsRepo->GetNewsFiles(0, $fileId);
	
	$Destination = $_SERVER['DOCUMENT_ROOT'] . $domainName . "news/"; // "http://localhost/newsletter/news/";
	//echo $Destination = $domainName . "news/"; // "http://localhost/newsletter/news/";
	//$Destination = "https://aitchison.edu.pk/newsletter/news/";
	//$Destination = "/../news/";
	
	//exit;
	
	if ($tFiles->rowsCount() > 0)
	{
		$fileName = $Destination.$tFiles->Rows[0]["FileName" . $image];
		//echo "0,".$fileName;
		//exit;
		//if ( file_exists( $fileName ) )
		if ( true )
		{
			if ($image == 1) $image2 = 2;
			elseif ($image == 2) $image2 = 1;
			
			//if ($tFiles->Rows[0]["FileName" . $image2] == "")
			if ( true )
			{
				//delet db record
				
				$qry = "DELETE FROM n_news_files WHERE Id=?";
				
				$params = array(
					array("datatype"=>"i", "value"=>$fileId)
				);
				
				$response = $dc->ExecuteNonQuery($qry, $params);
				
			}
			else
			{
				//update db record
				
				echo $qry = 
					"UPDATE n_news_files SET FileName". $image ." = '', FileType". $image ." = '', Width". $image ." = 0, Height". $image ." = 0,
					 WHERE Id=?";
				exit;
				$params = array(
					array("datatype"=>"i", "value"=>$fileId)
				);
				
				$response = $dc->ExecuteNonQuery($qry, $params);
				
			}
			
			#database response			
			if ($response == true)
			{
				//echo $fileName;
				
				chmod($fileName, 0777);
				
				unlink( $fileName );
				
				echo "1,File deleted.";
			}
			else
			{
				echo "0,".$response;
			}
		}
		else
		{
			echo "0,File doesn't exist.";
		}
	}
	else
	{
		echo "0,File not found.";
	}
	
}



#using in news/contents.php for updating image display order
if(isset($_REQUEST["select"]) && (int)$_REQUEST["select"] == 4)
{
	$path = "../";
	require_once($path."classes/usersession.php");
	require_once($path."classes/settings.php");
	
	require_once($path.'accounts/accountrepository.php');
	
	$newsId = (int)$_REQUEST["newsId"];
	
	
	$data = $_REQUEST["data"];
	
	#remove trailing "}"
	$data = substr($data, 0, strlen($data)-1);
	
	$tokens = explode("},", $data);
	
	foreach($tokens as $token)
	{
		$values = explode(",", $token);
		$id = substr($values[0], 1);
		$fileName1 = $values[1];
		$fileName2 = $values[2];
		
		
		$qry = 
			"UPDATE n_news_files SET FileName1=?, FileName2=? 
			 WHERE Id=? AND NewsId=?";
		
		/*
		echo $qry = 
			"UPDATE news_files SET FileName1=$fileName1, FileName2=$fileName2
			 WHERE Id=$id AND NewsId=$newsId"."\n";
		*/
		
		$params = array(
			array("datatype"=>"s", "value"=>$fileName1),
			array("datatype"=>"s", "value"=>$fileName2),
			array("datatype"=>"i", "value"=>$id),
			array("datatype"=>"i", "value"=>$newsId)
		);
		
		$response = $dc->ExecuteNonQuery($qry, $params);
		
	}
	
	echo "1,Images display order updated.";
	
}


#using in news/upload.php for updating image title
if(isset($_REQUEST["select"]) && (int)$_REQUEST["select"] == 5)
{
	$path = "../";
	require_once($path."classes/usersession.php");
	require_once($path."classes/settings.php");
	
	require_once($path.'accounts/accountrepository.php');
	
	$fileId = (int)$_REQUEST["fileId"];
	$title  = $_REQUEST["title"];
	$image  = (int)$_REQUEST["image"];	//1=width1, height1		2=width2, height2
	
	$fields = "Title".$image . "=?";
	
	$qry = 
		"UPDATE n_news_files SET ". $fields ."
		 WHERE Id=?";
	
	$params = array(
		array("datatype"=>"s", "value"=>$title),
		array("datatype"=>"i", "value"=>$fileId)
	);
	
	$response = $dc->ExecuteNonQuery($qry, $params);
	
	if ($response == true)
		echo "1,Image title updated.";
	else
	{
		echo "0,Image title not updated.";
	}
	
}


?>