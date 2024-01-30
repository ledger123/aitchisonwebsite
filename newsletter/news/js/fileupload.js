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
		if (typeof FileReader !== "undefined" && (/image/i).test(file.type)) {
			/*img = document.createElement("img");
			li.appendChild(img);
			reader = new FileReader();
			reader.onload = (function (theImg) {
				return function (evt) {
					theImg.src = evt.target.result;
				};
			}(img));
			reader.readAsDataURL(file);*/
		}
		
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
		
		
		var formData = new FormData();
		formData.append("files-upload", file);
		
		
		// Send the file (doh)
		xhr.send(formData);
		
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