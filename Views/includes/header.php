<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,400i,500,600,700,800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.bundle.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Date Css -->
    <link rel="stylesheet" href="Views/assets/css/datepicker.css">
    <!-- End CSS -->
    <link href="Views/assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="Views/assets/css/main.css" rel="stylesheet">
    <link href="Views/assets/css/responsive.css" rel="stylesheet">
  </head>
  <div class="d-flex" id="wrapper">
    <?php include("sidebar.php")?>
    <div id="page-content-wrapper" >
      <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
        <div class="menu-toggle-menu"></div>
        <img src="Views/assets/images/Icon-ios-menu.png" alt="" id="menu-toggle">
        <div class="navbar-nav ml-auto">
          <div class="row">
            <button type="button" class="btn btn-primary btnn custom-drop d-sm-block d-none" data-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">
            <span class="message-custom float-right">1</span>
            <i class="far fa-bell icon-custom-color"></i>
            </button>
            <div class="card ml-sm-3 ml-0">
              <div class="card-body">
                <div class="d-flex">
                  <span class="cus-span">240$</span>
                  <span class="ml-sm-4 ml-2 mr-4 cus-span2">Bregor Axhimusa</span>
                  <img src="Views/assets/images/user.png" height="38px" width="60px" alt="">
                  <div class="btn-group">
                    <button type="button" class="text-white bg-transparent border-0 dropdown-toggle-split ml-sm-3 ml-0 custom-drop" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-chevron-down i-res"></i>
                    </button>
                    <div class="dropdown-menu">
                      <a class="dropdown-item d-flex a-btn" href="#">
                        <img src="Views/assets/images/Icon open-account-login@2x.png" alt="">
                        <p class="ml-2">Log out</p>
                      </a>
                      <a class="dropdown-item d-flex a-btn" href="#">
                        <img src="Views/assets/images/Icon material-account-balance-wallett@2x.png" alt="">
                        <p class="ml-2">Mbyll arken</p>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </nav>
      <!-- Navigation -->
      <div class="row custom-navigation">
        <div class="col-lg-12">
          <div class="collapse multi-collapse" id="multiCollapseExample1">
            <div class="card">
              <ul class="list-group">
                <div class="list-group-item list-group-item-action custom-remove">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <img src="Views/assets/images/Icon ionic-ios-close-circle-outline.png" width="20px" height="20px" class="mt-1" alt="" >
                  </button>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos sapiente mollitia dolore facere cum, cupiditate aliquid saepe animi laborum voluptates tenetur numquam nam, sed est obcaecati reprehenderit sint perspiciatis quos!</p>
                </div>
              </ul>
            </div>
          </div>
        </div>
      </div>