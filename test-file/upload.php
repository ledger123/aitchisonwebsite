<?php
// Define the document root
$documentRoot = $_SERVER['DOCUMENT_ROOT'];


$folder = '';
if (isset($_GET['folder'])) {

    $folder = $_GET['folder'];

    if (substr($folder, -3) === '/..') {

        $folder = str_replace('/..', '', $folder);

        $end = strrpos($folder, '/');

        if ($end === '') {
            $folder = '';
        } else {
            $folder = substr($folder, 0, $end);
        }
    }
}

// Initialize the current path
$currentPath = $documentRoot . ($folder === '' ? '' : '/' . $folder);


function breadCrumb($path) {
    $arr = [];
    $crumbs = explode("/", $path);
    $address = 'https://dev.aitchison.edu.pk/test-file/upload.php'; // 'http://'.$_SERVER['HTTP_HOST'];

    $arr[] = ['href' => $address, 'title' => 'Home'];
    
    $address = $address.'?folder=';

    $build = '';
    foreach($crumbs as $crumb) {
        
        $build = ($build !== '') ? $build.'/' : $build;
        $build .= $crumb;
        $crumb = ucfirst(str_replace(array(".php","_"),array(""," "),$crumb) . '');
        if($crumb !== '') {

            $arr[] = ['href' => $address.$build, 'title' => $crumb];
        }
        
    }

    echo '<div class="btn-group btn-breadcrumb">';
    foreach ($arr as $element) {
        if($element === reset($arr) && $element === end($arr)) { // first & last $element

            echo '<a class="btn btn-default"><img src="house.svg" alt="home" style="width: 16px;"/></a>';
        }
        elseif($element === reset($arr)) { // first $element

            echo '<a href='.$element['href'].' class="btn btn-default"><img src="house.svg" alt="home" style="width: 16px;"/></a>';
        }
        elseif($element === end($arr)) { // last $element

             echo '<a class="btn btn-default">'.$element['title'].'</a>';
        }
        else {

            echo '<a href='.$element['href'].' class="btn btn-default">'.$element['title'].'</a>';
        }
    }
    echo '</div>';

}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>
    <title>Image Upload</title>
    <style>
        /** The Magic **/
.btn-breadcrumb .btn:not(:last-child):after {
  content: " ";
  display: block;
  width: 0;
  height: 0;
  border-top: 17px solid transparent;
  border-bottom: 17px solid transparent;
  border-left: 10px solid white;
  position: absolute;
  top: 50%;
  margin-top: -17px;
  left: 100%;
  z-index: 3;
}
.btn-breadcrumb .btn:not(:last-child):before {
  content: " ";
  display: block;
  width: 0;
  height: 0;
  border-top: 17px solid transparent;
  border-bottom: 17px solid transparent;
  border-left: 10px solid rgb(173, 173, 173);
  position: absolute;
  top: 50%;
  margin-top: -17px;
  margin-left: 1px;
  left: 100%;
  z-index: 3;
}

/** The Spacing **/
.btn-breadcrumb .btn {
  border: 1px solid #ccc;
  padding:6px 12px 6px 24px;
}
.btn-breadcrumb .btn:first-child {
  padding:6px 6px 6px 10px;
}
.btn-breadcrumb .btn:last-child {
  padding:6px 18px 6px 24px;
}

.btn-breadcrumb .btn.btn-default:hover:not(:last-child) {
    background-color: #00000012;
}
/** Default button **/
.btn-breadcrumb .btn.btn-default:not(:last-child):after {
  border-left: 10px solid #fff;
}
.btn-breadcrumb .btn.btn-default:not(:last-child):before {
  border-left: 10px solid #ccc;
}
.btn-breadcrumb .btn.btn-default:hover:not(:last-child):after {
  border-left: 10px solid #ebebeb;
}
.btn-breadcrumb .btn.btn-default:hover:not(:last-child):before {
  border-left: 10px solid #adadad;
}

/** Primary button **/
.btn-breadcrumb .btn.btn-primary:not(:last-child):after {
  border-left: 10px solid #428bca;
}
.btn-breadcrumb .btn.btn-primary:not(:last-child):before {
  border-left: 10px solid #357ebd;
}
.btn-breadcrumb .btn.btn-primary:hover:not(:last-child):after {
  border-left: 10px solid #3276b1;
}
.btn-breadcrumb .btn.btn-primary:hover:not(:last-child):before {
  border-left: 10px solid #285e8e;
}

/** Success button **/
.btn-breadcrumb .btn.btn-success:not(:last-child):after {
  border-left: 10px solid #5cb85c;
}
.btn-breadcrumb .btn.btn-success:not(:last-child):before {
  border-left: 10px solid #4cae4c;
}
.btn-breadcrumb .btn.btn-success:hover:not(:last-child):after {
  border-left: 10px solid #47a447;
}
.btn-breadcrumb .btn.btn-success:hover:not(:last-child):before {
  border-left: 10px solid #398439;
}

/** Danger button **/
.btn-breadcrumb .btn.btn-danger:not(:last-child):after {
  border-left: 10px solid #d9534f;
}
.btn-breadcrumb .btn.btn-danger:not(:last-child):before {
  border-left: 10px solid #d43f3a;
}
.btn-breadcrumb .btn.btn-danger:hover:not(:last-child):after {
  border-left: 10px solid #d2322d;
}
.btn-breadcrumb .btn.btn-danger:hover:not(:last-child):before {
  border-left: 10px solid #ac2925;
}

/** Warning button **/
.btn-breadcrumb .btn.btn-warning:not(:last-child):after {
  border-left: 10px solid #f0ad4e;
}
.btn-breadcrumb .btn.btn-warning:not(:last-child):before {
  border-left: 10px solid #eea236;
}
.btn-breadcrumb .btn.btn-warning:hover:not(:last-child):after {
  border-left: 10px solid #ed9c28;
}
.btn-breadcrumb .btn.btn-warning:hover:not(:last-child):before {
  border-left: 10px solid #d58512;
}

/** Info button **/
.btn-breadcrumb .btn.btn-info:not(:last-child):after {
  border-left: 10px solid #5bc0de;
}
.btn-breadcrumb .btn.btn-info:not(:last-child):before {
  border-left: 10px solid #46b8da;
}
.btn-breadcrumb .btn.btn-info:hover:not(:last-child):after {
  border-left: 10px solid #39b3d7;
}
.btn-breadcrumb .btn.btn-info:hover:not(:last-child):before {
  border-left: 10px solid #269abc;
}
    </style>
</head>

<body>

    <!-- Display the current directory -->
    

    <!-- Display a list of folders and subfolders -->
    <div class="container-fluid">
        <h3>Folder Explorer</h3>
        <div class="row">
            <div class="col-md-3 col-sm-12">
                <div style="overflow-y: scroll; height: 600px">
                
                    <ul>
                        <?php
                        $folder = ($folder === '') ? $folder : $folder . '/';

                        $contents = scandir($currentPath);
                        foreach ($contents as $item) {
                            if ($item != '.') {
                                if (is_dir($currentPath . '/' . $item)) {
                                    echo '<li><a href="?folder=' . $folder . $item . '">' . $item . '</a></li>';
                                }
                            }
                        }
                        ?>
                    </ul>
                </div>
            </div>


            
            <div class="col-md-9 col-sm-12 p-5 text-center" style="padding-top: 0!important;">
                <p><?php breadCrumb('/'.$folder); ?></p>
                <div class="header bg-primary p-2 rounded text-white w-50 mx-auto font-weight-bold">Image Upload</div>
                <form id='uploadform' enctype="multipart/form-data">
                    <label style="display: block;">
                        <img id="uploadimage2" src="img/featured.gif" style="width: 300px;
                            height: 300px;
                            cursor: pointer;
                            object-fit: cover;
                            object-position: center top;
                            padding: 6px;
                            border: 1px solid;
                            border-radius: 6px;
                            margin: 11px;">

                    </label>
                    <input type="file" name="filename[]" multiple id="filename" accept="image/*,video/*,audio/*,application/pdf">
                    <input type="hidden" id="dir" value="<?php echo $currentPath; ?>" />
                    <div id="message" class="text-danger">&nbsp;</div>
                    <div class="container w-50 mx-auto" id="progress" style="display: none;">
                        <hr>
                        <div class="status"></div>
                        <div class="progress" style="height: 26px;">
                            <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="height: 26px; width: 0%">Uploading (0%)</div>
                        </div>
                        <hr>
                    </div>
                    <div class="form-group">
                        <input type="submit" id="upload" value="Upload" class="btn btn-primary">
                    </div>
                </form>

            </div>
        </div>
    </div>
</body>
<script>
    var files;
    var progressBar;
    var progressCon;
    //Declaring the ajax on submit function
    $(document).ready(function() {
        $(uploadform).submit(function(e) {
            var status = $('.status');
            var progress = $('.progress-bar');
            progressCon = $('#progress');
            e.preventDefault();
            if ($('#filename').val() == '') {
                alert('Please selet file');
                return;
            }

            var formData = new FormData(this);
            var totalFiles = $('#filename')[0].files.length;
            var uploadedFiles = 0;
            var overAllProgress = 0;
            let totalSize = 0;

            // for (var i = 0; i < $('#filename')[0].files.length; i++) {
            //     totalSize += $('#filename')[0].files[i].size;
            // }
            //console.log(totalSize)


            files = $('#filename')[0].files;

            uploadFile(0);

            /*
            $.each($('#filename')[0].files, function(i, file) {

                formData.set('image', file);
                console.log(file.name)

                $.ajax({
                    type: "POST",
                    url: "upload-file.php",
                    data: formData,
                    cache:false,
                    dataType: 'json',
                    contentType: false,
                    processData: false,
                    beforeSend: () => {
                        
                        $(progressCon).slideDown();
                    },
                    xhr: function() {
                        
                        var xhr = new window.XMLHttpRequest();
                        xhr.upload.addEventListener("progress", function(evt) {
                            if (evt.lengthComputable) {
                                var percentComplete = (evt.loaded / evt.total) * 100;

                                //Do something with upload progress here    
                                $(progress).attr("aria-valuenow", percentComplete.toFixed(0));
                                $(progress).width(percentComplete.toFixed(0)+'%');
                                $(progress).text('Uploading ('+percentComplete.toFixed(2)+'%)');

                            }
                        }, false);
                        console.log('returning...');
                        return xhr;
                        },
                    success: function (response) {
                        console.log('success');
                        $(progress).text('Uploaded (100%)');
                        $(progress).addClass('bg-success');
                        $('#uploadimage2').attr('src', 'img/featured.gif');
                        setTimeout(() => {
                            $(progressCon).fadeOut(() => {
                                $(progress).removeClass('bg-success');
                                $(progress).addClass('bg-primary');
                                $(progress).attr("aria-valuenow", '0');
                                $(progress).width('0%');
                                $(progress).text('Uploading (0%)');
                            });
                        }, 3000);
                    }
                });

                totalFiles--;

            });
            */


        });


        
        $('#filename').on( 'change', function() {
            files = $('#filename')[0].files;
            var allowedExtensions = ["jpg", "jpeg", "png", "gif", "pdf", "mp4"];
            for (var i = 0; i < files.length; i++) {
                var fileExtension = files[i].name.split(".").pop().toLowerCase();

                if ($.inArray(fileExtension, allowedExtensions) === -1) {
                    console.log(fileExtension)
                    $("#message").text("File " + files[i].name + " has an invalid extension. Allowed extensions are: " + allowedExtensions.join(", "));
                    
                    $("#upload").prop('disabled', true);

                    return;
                }
            }

            $("#upload").prop('disabled', false);
        });

    });



    function uploadFile(index) {

        var progress = $('.progress-bar');
        var progressCon = $('#progress');

        if (index >= files.length) {

            setTimeout(() => {
                $(progress).removeClass('bg-success');
                $(progress).addClass('bg-primary');
                $(progress).width('100%');
                $(progress).text('Upload Complete (100%)');
            }, 3000);
            return; // All files are uploaded
        }

        var file = files[index];
        var formData = new FormData();
        formData.set('image', file);
        formData.set('dir', $('#dir').val());

        
        //var status = $('.status');

        imageView(file);

        $('.status').text(file.name);

        $.ajax({
            type: "POST",
            url: "upload-file.php",
            data: formData,
            cache: false,
            dataType: 'json',
            contentType: false,
            processData: false,
            beforeSend: () => {

                $(progressCon).slideDown();
            },
            xhr: function() {

                var xhr = new window.XMLHttpRequest();
                xhr.upload.addEventListener("progress", function(evt) {
                    if (evt.lengthComputable) {
                        var percentComplete = (evt.loaded / evt.total) * 100;

                        //Do something with upload progress here    
                        $(progress).attr("aria-valuenow", percentComplete.toFixed(0));
                        $(progress).width(percentComplete.toFixed(0) + '%');
                        $(progress).text('Uploading (' + percentComplete.toFixed(2) + '%)');

                    }
                }, false);

                return xhr;
            },
            success: function(response) {
                console.log('success');
                $(progress).text('Uploaded (100%)');
                $(progress).addClass('bg-success');
                $('#uploadimage2').attr('src', 'img/featured.gif');
                // setTimeout(() => {
                //     $(progressCon).fadeOut(() => {
                //         $(progress).removeClass('bg-success');
                //         $(progress).addClass('bg-primary');
                //         $(progress).attr("aria-valuenow", '0');
                //         $(progress).width('0%');
                //         $(progress).text('Uploading (0%)');
                //     });
                // }, 3000);

                uploadFile(index + 1);
            },
            error: function(xhr, status, error) {

                console.error(status);
                console.error(error);

                // Upload the next file
                uploadFile(index + 1);
            }
        });
    }

    const imageView = (file) => {
        var oFReader = new FileReader();
        oFReader.readAsDataURL(file);

        oFReader.onload = function (oFREvent) {
            if (oFReader.readyState == 2) {
                document.getElementById("uploadimage2").src = oFREvent.target.result;
            }
            
        };
    }

</script>

</html>