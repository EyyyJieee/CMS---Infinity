<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="assets/css/admin-boots.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <title>JCIZ Goals</title>
  </head>
  <body>
    <!--NAVIGATION-->
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
          <a class="navbar-brand" href="admin-boots.php"><img src="assets/img/LOGO-Edited2.png" class="header_logo" alt="JCI logo"></a>
          <form class="d-flex">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="admin-boots.php"><i class="bi bi-person-circle"></i> Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="index.php">Log out</a>
                    </li>
                </ul>
            </div>
          </form>
        </div>
    </nav>
    <!--Header Content-->
    <div class="container-sm">
      <h2>Hi, Gian Brix Bungco!</h2>
      <h4> Welcome to your <b>JCIZ GOALS</b> dashboard</h4>
    </div>
    <!--COLUMN-->
    <div class="container">
        <div class="row">
          <!--PROFILE-->
          <div class="profile" style="max-width:250px;">
              <img src="assets/img/gian.jpg" alt="" class="profile-pic">
              <h3>GIAN BRIX T. BUNGCO</h3>
              <p><i class="bi bi-telephone-fill"></i> 09435354451</p>
              <p><i class="bi bi-person-check-fill"></i> Secretary</p>
              <p><i class="bi bi-geo-alt-fill"></i> Zamboanga</p>
              <a href="proposal-files.html"><div class="files">
                <i class="bi bi-file-earmark-text"></i>
                <p class="file-name">Project Proposals</p>
              </div></a>
              <a href="donate-files.html"><div class="files">
                <i class="bi bi-file-earmark-text"></i>
                <p class="file-name">Donate Forms</p>
              </div></a>
              <a href="volunteer-files.html"><div class="files">
                <i class="bi bi-file-earmark-text"></i>
                <p class="file-name">Volunteer Forms</p>
              </div></a>
              <a href="membership-files.html"><div class="files">
                <i class="bi bi-file-earmark-text"></i>
                <p class="file-name">Membership Forms</p>
              </div></a>
              <a href="partner-files.html"><div class="files">
                <i class="bi bi-file-earmark-text"></i>
                <p class="file-name">Partnership Forms</p>
              </div></a>
          </div>
          <!--LATEST POSTS-->
          <div class="col" style="width:780px;">
            <div class="create-post">
                <div class="row">
                    <div class="col-logo">
                      <img src="assets/img/LOGO-Edited2.png" width="100%">
                    </div>
                    <div class="col-button">
                        <div class="d-grid gap-2">
                            <button class="btn" type="button"  data-bs-toggle="modal" data-bs-target="#create-post">Create post</button>
                          </div>
                    </div>
                  </div>
            </div>
            <h4>Latest Post</h4>
            <div id="posts">
              <div class="card mb-3"></div>
            </div>
          </div>
          <!--SCHEDULED EVENTS-->
          <div class="event" style="max-width:350px;">
            <div class="create-event">
                <div class="row">
                    <div class="event-logo">
                      <img src="assets/img/LOGO-Edited2.png" width="100%">
                    </div>
                    <div class="event-button">
                        <div class="d-grid gap-2">
                            <button class="btn" type="button"  data-bs-toggle="modal" data-bs-target="#create-event">Create new event</button>
                        </div>
                    </div>
                  </div>
            </div>
            <h4>Discover Events</h4>
            <!---CARD 1-->
            <div class="event-card">
              <!--button-->
              <div class="btn-group">
                <button type="button" class="btn dropdown-toggle" data-bs-toggle="dropdown" data-bs-display="static" aria-expanded="false"></button>
                <ul class="dropdown-menu dropdown-menu-lg-end">
                  <li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#edit-event">Edit</a></li>
                  <li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#delete-event">Delete</a></li>
                  <li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#Share-event">Share</a></li>
                </ul>
              </div>
              <img src="assets/img/post1.jpg" class="card-img-top">
              <div class="card-body">
                <p class="card-text"><small class="text-muted">TODAY AT 4PM</small></p>
                <h5 class="card-text">TITLE EVENT</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              </div>
            </div>
            <!---CARD 2-->
            <div class="event-card">
              <!--button-->
              <div class="btn-group">
                <button type="button" class="btn dropdown-toggle" data-bs-toggle="dropdown" data-bs-display="static" aria-expanded="false"></button>
                <ul class="dropdown-menu dropdown-menu-lg-end">
                  <li><a class="dropdown-item" href="#">Edit</a></li>
                  <li><a class="dropdown-item" href="#">Delete</a></li>
                  <li><a class="dropdown-item" href="#">Share</a></li>
                </ul>
              </div>
              <img src="assets/img/post1.jpg" class="card-img-top">
              <div class="card-body">
                <p class="card-text"><small class="text-muted">TODAY AT 4PM</small></p>
                <h5 class="card-text">TITLE EVENT</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              </div>
            </div>
          </div>
        </div>
    </div>
    <!-------------------MODAL //post----------------------------------->

    <!-- Modal // CREATE POST-->
    <div class="modal fade" id="create-post" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="staticBackdropLabel">Post</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <!---form-->
            <form action="#">
              <div class="content-create">
                <img src="assets/img/LOGO-Edited2.png" alt="logo">
                <div class="details">
                  <p>JCIZ Goals</p>
                </div>
              </div>
              <input id="title" type="text" class="mb-0" placeholder="Title here..." spellcheck="false" required></input>  
              <textarea id="post" placeholder="Description..." class="mt-1" spellcheck="false" required></textarea>  
              <div class="options">
                <p>Add to Your Post</p>
                <div class="upload-btn-wrapper">
                  <button class="btn-post">Select a file</button>
                  <input type="file" name="img" id="img" accept="image/png, image/gif, image/jpeg"  >
                </div>
              </div>
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" id="savedraft">Save Draft</button>
            <button type="button" class="btn btn-primary" id="postme">Post</button>
          </div>
        </div>
      </div>
    </div>
    <!-- Modal // EDIT POST-->
    <div class="modal fade" id="edit-post" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="staticBackdropLabel">Edit post</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <!---form-->
            <form action="#">
              <div class="content-create">
                <img src="assets/img/LOGO-Edited2.png" alt="logo">
                <div class="details">
                  <p>JCIZ Goals</p>
                </div>
              </div>
              <input id="edit_post_id" type="text" hidden></input>  
              <input id="edit_title" type="text" class="mb-0" placeholder="Title here..." spellcheck="false" required></input>  
              <textarea id="edit_post" placeholder="Create a post..." class="mt-1" spellcheck="false" required></textarea> 
              <div class="options">
                <p>Add to Your Post</p>
                <div class="upload-btn-wrapper">
                  <button class="btn-post">Select a file</button>
                  <input type="file" name="img" id="img" accept="image/png, image/gif, image/jpeg"  >
                </div>
              </div>
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-primary" onclick="return saveEdit();">Save changes</button>
          </div>
        </div>
      </div>
    </div>
    <!-- Modal // DELETE POST-->
    <div class="modal fade" id="delete-post" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="staticBackdropLabel">Delete post</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <input id="delete_post_id" type="text" hidden></input>  
            <p>Are you sure you want to delete this post?</p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-primary" onclick="return deletePost();">DELETE</button>
          </div>
        </div>
      </div>
    </div>
    <!-- Modal // SHARE POST-->
    <div class="modal fade" id="Share-post" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="staticBackdropLabel">Share</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <p class="social-media"><i class="bi bi-facebook"></i>Facebook Page</p>
            <p class="social-media"><i class="bi bi-twitter"></i>Twitter</p>
            <p class="social-media"><i class="bi bi-instagram"></i>Instagram</p>
            <p class="social-media"><i class="bi bi-youtube"></i>Youtube Post</p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-primary">Done</button>
          </div>
        </div>
      </div>
    </div>

    <!-------------------MODAL // event----------------------------------->
    <!-- Modal // CREATE event-->
    <div class="modal fade" id="create-event" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="staticBackdropLabel">Event</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <!---form-->
            <form action="#">
              <div class="content-create">
                <img src="assets/img/LOGO-Edited2.png" alt="logo">
                <div class="details">
                  <p>JCIZ Goals</p>
                </div>
              </div>
                <label for="eventname">Event Name</label>
                <input type="text" id="eventname" name="eventname" placeholder="Name of the event..">
                <label for="start-date">Start Date</label>
                <input type="date" id="start-date" name="start-date">
                <label for="end-date">End Date</label>
                <input type="date" id="end-date" name="end-date">
              <label for="">Description</label>
              <textarea placeholder="Write a description..." spellcheck="false" required></textarea>  
              <div class="options">
                <p>Add to Your Post</p>
                <ul class="list">
                  <li><i class="bi bi-image"></i></li>
                  <li><i class="bi bi-play-btn-fill"></i></li>
                  <li><i class="bi bi-mic-fill"></i></li>
                  <li><img src="assets/img/admin/aa.png" class="unsdg" alt=""></li>
                  <li><img src="assets/img/admin/more.svg" alt="gallery"></li>
                </ul>
              </div>
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-primary">Create</button>
          </div>
        </div>
      </div>
    </div>
    <!-- Modal // EDIT event-->
    <div class="modal fade" id="edit-event" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="staticBackdropLabel">Edit event</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <!---form-->
            <form action="#">
              <div class="content-create">
                <img src="assets/img/LOGO-Edited2.png" alt="logo">
                <div class="details">
                  <p>JCIZ Goals</p>
                </div>
              </div>
                <label for="eventname">Event Name</label>
                <input type="text" id="eventname" name="eventname" placeholder="Name of the event..">
                <label for="start-date">Start Date</label>
                <input type="date" id="start-date" name="start-date">
                <label for="end-date">End Date</label>
                <input type="date" id="end-date" name="end-date">
              <label for="">Description</label>
              <textarea placeholder="Write a description..." spellcheck="false" required></textarea>  
              <div class="options">
                <p>Add to Your Post</p>
                <ul class="list">
                  <li><i class="bi bi-image"></i></li>
                  <li><i class="bi bi-play-btn-fill"></i></li>
                  <li><i class="bi bi-mic-fill"></i></li>
                  <li><img src="assets/img/admin/aa.png" class="unsdg" alt=""></li>
                  <li><img src="assets/img/admin/more.svg" alt="gallery"></li>
                </ul>
              </div>
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-primary">Post</button>
          </div>
        </div>
      </div>
    </div>
    <!-- Modal // DELETE event-->
    <div class="modal fade" id="delete-event" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="staticBackdropLabel">Delete post</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <p>Are you sure you want to delete this post?</p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-primary">DELETE</button>
          </div>
        </div>
      </div>
    </div>
    <!-- Modal // SHARE event-->
    <div class="modal fade" id="Share-event" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="staticBackdropLabel">Share</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <p class="social-media"><i class="bi bi-facebook"></i>Facebook Page</p>
            <p class="social-media"><i class="bi bi-twitter"></i>Twitter</p>
            <p class="social-media"><i class="bi bi-instagram"></i>Instagram</p>
            <p class="social-media"><i class="bi bi-youtube"></i>Youtube Post</p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-primary">Done</button>
          </div>
        </div>
      </div>
    </div>



<!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <script>
        $(document).ready(function() {
          diplayPosts();

          $('#savedraft').on('click', function(){
            savePost(1);
          });

          $('#postme').on('click', function(){
            savePost(0);
          });

        });

        function savePost(draft){
          let formData = new FormData();
          formData.append("title", $('#title').val());
          formData.append("post", $('#post').val());
          formData.append("draft", draft);
          formData.append("img", $('#img')[0].files[0]);
          $.ajax({
            url:'script/admin.php',
            dataType: 'json',
            type: 'POST',
            data: formData,
            contentType: false,
            processData: false,
            success: function(resp){
              $('#title').val('');
              $('#post').val('');
              $('#img').val('');
              $('#create-post').modal('toggle');
              diplayPosts();
              alert("Post Saved as Draft!");
              return false;
            },
            error: function(a,b,c){
                return;
            }
          });
        }

        function diplayPosts(){
          $.ajax({
              url:'script/admin.php',
              dataType: 'json',
              type: 'GET',
              contentType: false,
              processData: false,
              success: function(data){
                $("#posts").children(".card").remove();
                if(data.length>0){
                  for(let x = 0; x < data.length; x++){
                    let post = `<div class="card mb-3" style="max-width: 640px;">
                      <div class="row g-0">
                        <div class="col-md-4">
                          <img src="${data[x].image}" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-8">
                          <div class="card-body">
                              <div class="btn-group">
                                  <button type="button" class="btn dropdown-toggle" data-bs-toggle="dropdown" data-bs-display="static" aria-expanded="false"></button>
                                  <ul class="dropdown-menu dropdown-menu-lg-end">
                                    <li><a class="dropdown-item" data-bs-toggle="modal" onclick="displayEdit('${data[x].id}', '${data[x].title}', '${data[x].post}');">Edit</a></li>
                                    <li><a class="dropdown-item" data-bs-toggle="modal" onclick="setDelete('${data[x].id}')">Delete</a></li>
                                    <li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#Share-post">Share</a></li>
                                  </ul>
                              </div>
                            <h5 class="card-title">${data[x].title}</h5>
                            <p class="card-text">${data[x].post}</p>
                            <p class="card-text"><small class="text-muted">Last updated ${countDiff(data[x].date_modified)} mins ago</small></p>
                          </div>
                        </div>
                      </div>
                    </div>`;
                    $("#posts").append(post);
                  }
                }
                return;
              },
              error: function(a,b,c){
                  alert('internet connection error..');
                  return;
              }
          }); 
          function countDiff(dates){
            const parsed = Date.parse(dates);
            const today = new Date();
            const diffMs = (today - parsed); // milliseconds between now & Christmas
            const diffHrs = Math.floor((diffMs % 86400000) / 3600000); // hours
            return Math.round(((diffMs % 86400000) % 3600000) / 60000); // minutes
          }
        }

        function displayEdit(id, title, post){
          $('#edit-post').modal('toggle');
          $('#edit_post_id').val(id);
          $('#edit_title').val(title);
          $('#edit_post').val(post);
        }

        function setDelete(id){
          $('#delete-post').modal('toggle');
          $('#delete_post_id').val(id);
        }

        function saveEdit(){
          console.log('edit');
          let formData = new FormData();
          formData.append("id", $('#edit_post_id').val());
          formData.append("title", $('#edit_title').val());
          formData.append("post", $('#edit_post').val());
          formData.append("img", $('#edit_post_image')[0].files[0]);
          formData.append("update", true);
          const data = JSON.stringify({'id':$('#edit_post_id').val()});
          $.ajax({
            url:'script/admin.php',
            type: 'POST',
            dataType: 'json',
            // data: JSON.stringify({'id':$('#edit_post_id').val()}),
            data: formData,
            contentType: false,
            processData: false,
            success: function(resp){
              $('#edit_title').val('');
              $('#edit_post').val('');
              $('#edit_post_image').val('');
              $('#edit_post_id').val(0);
              $('#edit-post').modal('toggle');
              diplayPosts();
              alert("Post Saved as Draft!");
              return false;
            },
            error: function(a,b,c){
              console.log('a', a ,'b', b, 'c', c);
              return;
            }
          });
        }

        function deletePost(){
          let formData = new FormData();
          formData.append("id", $('#delete_post_id').val());
          $.ajax({
            url:'script/admin.php',
            dataType: 'json',
            type: 'DELETE',
            data: formData,
            contentType: false,
            processData: false,
            success: function(resp){
              $('#delete_post_id').val(0);
              $('#delete-post').modal('toggle');
              diplayPosts();
              alert("Post Deleted!");
              return false;
            },
            error: function(a,b,c){
                return;
            }
          });
        }

    </script>
  </body>
</html>