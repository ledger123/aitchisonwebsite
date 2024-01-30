<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Upload test</title>

<link href="../vendors/jquery/dist/jquery.min.js" rel="stylesheet" type="text/css">
<link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>

<div class="row form-group">
	<h3>Choose file(s)</h3>
    <p>
        <input id="files-upload" name="files-upload" type="file" multiple><br />
        <input id="file1" name="file1" type="file">
        <input type="button" onClick="javascript:getImageString()" value="Upload"/>
        
    </p>
    <p id="drop-area" style="height:100px; background:#DCDCDC">
        <span class="drop-instructions">or drag and drop files here</span>
        <span class="drop-over">Drop files here!</span>
    </p>
    
    <ul id="file-list" class="list-group">
        <!--<li class="no-items">(no files uploaded yet)</li>-->
    </ul>
</div>

</body>
</html>
<script src="../vendors/jquery/dist/jquery.min.js"></script>
<!--<script src="js/fileupload.js"></script>-->

<script>


$(function () {
	
	var filesUpload1 = document.getElementById("file1");
	alert("1");
	filesUpload1.addEventListener("change", function () {
		var files = this.files;
		if (typeof files !== "undefined") {
			for (var i=0, l=files.length; i<l; i++) {
				alert(files[i].name);
				alert(filesUpload1.src);
			}
		}
		else {
			fileList.innerHTML = "No support for the File API in this web browser";
		}
		
	}, false);
	
	
	
	
	
});

function getImageString()
{
	/*
	var img = document.getElementById("foundation.png");
	//alert(img.type);
	//data:image\/png;
	var start = img.src.indexOf("/");
	var end = img.src.indexOf(";");
	var type = img.src.substring(start +1, end);
	alert(type);
	
	var canvas = document.createElement("canvas");
    canvas.width = img.width;
    canvas.height = img.height;

    // Copy the image contents to the canvas
    var ctx = canvas.getContext("2d");
    ctx.drawImage(img, 0, 0);
	
	
    // Get the data-URL formatted image
    // Firefox supports PNG and JPEG. You could check img.src to
    // guess the original format, but be aware the using "image/jpg"
    // will re-encode the image.
    var dataURL = canvas.toDataURL("image/" + type);
	
	alert(dataURL);
	*/
    //alert( dataURL.replace(/^data:image\/(png|jpg);base64,/, "") );
}



(function () {
	var filesUpload = document.getElementById("files-upload"),
		dropArea = document.getElementById("drop-area"),
		fileList = document.getElementById("file-list");
		
	function uploadFile (file) {
		var li = document.createElement("li"),
			div = document.createElement("div"),
			img,
			progressBarContainer = document.createElement("div"),
			progressBar = document.createElement("div"),
			reader,
			xhr,
			fileContainer = document.createElement("div"),
			fileInfo;
		
		fileContainer.className = "alert alert-success";
		li.className = "list-group-item";
		
		fileContainer.appendChild(li);
		li.appendChild(div);
		
		
		
		progressBarContainer.className = "progress";
		progressBar.className = "progress-bar";
		progressBar.setAttribute("role", "progressbar");
		progressBar.setAttribute("aria-valuenow", "0");
		progressBar.setAttribute("aria-valuemin", "0");
		progressBar.setAttribute("aria-valuemax", "100");
		progressBar.style.width = "0%";
		progressBar.innerHTML = "0%";
		
		progressBarContainer.appendChild(progressBar);
		li.appendChild(progressBarContainer);
		
		/*
			If the file is an image and the web browser supports FileReader,
			present a preview in the file list
		*/
		
		var base64string = "";
		if (typeof FileReader !== "undefined" && (/image/i).test(file.type)) {
			img = document.createElement("img");
			img.setAttribute("id", file.name);
			li.appendChild(img);
			reader = new FileReader();
			reader.onload = (function (theImg) {
				return function (evt) {
					
					theImg.src = evt.target.result;
					base64string = theImg.src;
				};
			}(img));
			reader.readAsDataURL(file);
			
		}
		/*
		base64( file, function(data){
		  base64string = data.base64;
		});*/
		
		//alert(base64string);
		alert(file.name);
		
		// Uploading - for Firefox, Google Chrome and Safari
		xhr = new XMLHttpRequest();
		
		// Update progress bar
		xhr.upload.addEventListener("progress", function (evt) {
			if (evt.lengthComputable) {
				progressBar.style.width = (evt.loaded / evt.total) * 100 + "%";
			}
			else {
				// No data to calculate on
				alert(xhr.status);
			}
		}, false);
		
		// File uploaded
		xhr.addEventListener("load", function () {
			alert("load: " + this.responseText);
			progressBarContainer.className += " uploaded";
			progressBar.innerHTML = "Uploaded!";
		}, false);
		
		xhr.addEventListener("error", function () {
			//alert(evt.loaded);
			alert("error: " + xhr.status);
		}, false);
		
		xhr.open("post", "upload.php", true);
		
		
		
		// Set appropriate headers
		xhr.setRequestHeader("Content-Type", "multipart/form-data");
		xhr.setRequestHeader("X_FILENAME", file.name);
		xhr.setRequestHeader("X_FILESIZE", file.size);
		xhr.setRequestHeader("X_FILETYPE", file.type);
		xhr.setRequestHeader("X_FILE", file);
		xhr.setRequestHeader("X_STRING", base64string);
		
		var formData = new FormData();
		//formData.append("files-upload", file);
		//formData.append("base64string", base64string);
		
		
		// Send the file (doh)
		//xhr.send();
		
		// Present file info and append it to the list of files
		var size = parseInt(file.size / 1024, 10);
		
		fileInfo = "<div>" + file.name + " - " + size + "kb</div>";
		//fileInfo += "<div><strong>Size:</strong> " + size + " kb</div>";
		//fileInfo += "<div><strong>Type:</strong> " + file.type + "</div>";
		div.innerHTML = fileInfo;
		
		fileList.appendChild(li);
	}
	
	function traverseFiles (files) {
		if (typeof files !== "undefined") {
			for (var i=0, l=files.length; i<l; i++) {
				uploadFile(files[i]);
			}
		}
		else {
			fileList.innerHTML = "No support for the File API in this web browser";
		}	
	}
	
	filesUpload.addEventListener("change", function () {
		traverseFiles(this.files);
	}, false);
	
	dropArea.addEventListener("dragleave", function (evt) {
		var target = evt.target;
		
		if (target && target === dropArea) {
			this.className = "";
		}
		evt.preventDefault();
		evt.stopPropagation();
	}, false);
	
	dropArea.addEventListener("dragenter", function (evt) {
		this.className = "over";
		evt.preventDefault();
		evt.stopPropagation();
	}, false);
	
	dropArea.addEventListener("dragover", function (evt) {
		evt.preventDefault();
		evt.stopPropagation();
	}, false);
	
	dropArea.addEventListener("drop", function (evt) {
		traverseFiles(evt.dataTransfer.files);
		this.className = "";
		evt.preventDefault();
		evt.stopPropagation();
	}, false);										
})();	

//Author James Harrington 2014
function base64(file, callback){
  var coolFile = {};
  function readerOnload(e){
    var base64 = btoa(e.target.result);
    coolFile.base64 = base64;
    callback(coolFile)
  };

  var reader = new FileReader();
  reader.onload = readerOnload;

  //var file = file[0].files[0];
  coolFile.filetype = file.type;
  coolFile.size = file.size;
  coolFile.filename = file.name;
  reader.readAsBinaryString(file);
}

function getBase64Image(img) {
    // Create an empty canvas element
    var canvas = document.createElement("canvas");
    canvas.width = img.width;
    canvas.height = img.height;

    // Copy the image contents to the canvas
    var ctx = canvas.getContext("2d");
    ctx.drawImage(img, 0, 0);

    // Get the data-URL formatted image
    // Firefox supports PNG and JPEG. You could check img.src to
    // guess the original format, but be aware the using "image/jpg"
    // will re-encode the image.
    var dataURL = canvas.toDataURL("image/png");

    return dataURL.replace(/^data:image\/(png|jpg);base64,/, "");
}

</script>