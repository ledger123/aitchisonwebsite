<html>
    <head>
        <title>Progress Bar For File Upload</title>
        <link rel='stylesheet' href='styles.css'>
        <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
    </head>

    <body>
        <h1>AJAX FILE UPLOAD WITH PROGRESS BAR</h1>
        <form class="form" id="uploadForm">
        <div class="file-upload">
            <div class="image-upload-wrap">
              <input class="file-upload-input" type='file' accept="image/*" name="image[]" id="inpFile" multiple/>
              <div class="drag-text">
                <h3>Drag and drop Images</h3>
              </div>
            </div>
            <div class="file-upload-content">
                <div class="uploaded-images">
                </div>
              <div class="image-title-wrap">
                <button type="button" class="remove-image">Remove Uploaded Images</button>
              </div>
            </div>
          </div>
          <br>
          <input class='upload-image' type="submit" value="Upload">
          <p id="ajax-response"></p>
        </form>
        <div class='progress-bar' id="progressBar" style="display:none;">
            <div class="progress-bar-fill">
                <span class="progress-bar-text">0%</span>
            </div>
        </div>
        <script src='scripts.js'></script>
    </body>
</html>

<script>
    const uploadForm = document.querySelector('#uploadForm');
const inpFile = document.querySelector('#inpFile');
const progressBarFill = document.querySelector('#progressBar>.progress-bar-fill');
const progressBar = document.querySelector('#progressBar');
const progressBarText = progressBarFill.querySelector('.progress-bar-text');
const imageUploadWrap = document.querySelector('.image-upload-wrap');
const imageTitleWrap = document.querySelector('.image-title-wrap');
const fileUploadImg = document.querySelector('.file-upload-image');
const fileUploadContent = document.querySelector('.file-upload-content');
const fileUploadInput = document.querySelector('.file-upload-input');
const ajaxResponse = document.querySelector('#ajax-response');
const uploadImage = document.querySelector('.upload-image');
const uploadedImages = document.querySelector('.uploaded-images');


uploadForm.addEventListener("submit" , uploadFile);
document.querySelector('button').addEventListener("click" , removeUpload);
fileUploadInput.addEventListener("change" , function() { readURL(this); } );
imageUploadWrap.addEventListener('dragover', function () {
    imageUploadWrap.classList.add('image-dropping');
    });

function uploadFile(e) {
    e.preventDefault();
    if(inpFile.value!=''){
    uploadImage.style.display = "none";
    imageTitleWrap.style.display = "none";
    progressBar.style.display = "block";
    const xhr = new XMLHttpRequest();
    xhr.open('POST','upload-server.php');
    xhr.upload.addEventListener('progress',e => {
        const percent = e.lengthComputable ? (e.loaded/e.total) * 100 : 0 ;
        progressBarFill.style.width = percent.toFixed(2)+'%';
        progressBarText.textContent = percent.toFixed(2)+'%';
    });
    xhr.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            ajaxResponse.innerHTML = this.responseText;
            progressBar.style.display = "none";
            imageTitleWrap.style.display = "block";
       }
    };
    xhr.send(new FormData(uploadForm));
    }
    
}


function readURL(input) {
    if (input.files && input.files[0]) {
        for (i = 0; i < input.files.length; i++) {
        const reader = new FileReader();
        reader.onload = function(e) {
        imageUploadWrap.style.display = "none";
        fileUploadContent.style.display = "block";
        uploadedImages.innerHTML += '<img class="file-upload-image" src="'+e.target.result+'" style="width: 300px;" alt="your image"/>';
      };
      reader.readAsDataURL(input.files[i]);
    }
  
    } else {
      removeUpload();
    }
  }
  
  function removeUpload() {
    fileUploadInput.value='';
    fileUploadContent.style.display = "none";
    imageUploadWrap.style.display = "block";
    imageUploadWrap.classList.remove('image-dropping');
    uploadImage.style.display = "block";
    const percent = 0 ;
    progressBarFill.style.width = percent.toFixed(2)+'%';
    progressBarText.textContent = percent.toFixed(2)+'%';
    ajaxResponse.innerHTML = '';
  }
</script>