<!doctype html>
<html lang="en">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta charset="utf-8">
    <title>Simple unifi qrcode tool</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="includes/css/footer.css">
  </head>
  <body>
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
      <a class="navbar-brand" href="#">UniFi qrcode tool</a>
    </nav>
    <br>
    <div class="container">
      <div class="row">
        <div class="col">
          <div class="card">
            <div class="card-header">Selection</div>
            <div class="card-body">
              <form>
                <div class="form-group">
                  <label for="sites">Select site:</label>
                  <select class="form-control" id="sites"></select>
                </div>
                <div class="form-group">
                  <label for="ssid">Select ssid:</label>
                  <select class="form-control" id="ssid"></select>
                </div>
              </form>
            </div>
          </div><br>
        </div>
        <div class="col">
          <div class="card">
            <div class="card-header">Code</div>
            <div class="card-body">
              <div id="qrcode"></div>
              <a href="#" id="export" class="btn btn-primary" role="button" target="_blank" data-toggle="tooltip" title="Download the QR code as a PNG."><i class="fas fa-download"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <footer class="footer">
      <div class="container">
        <span class="text-muted">Written by <a href="https://florisvdk.net/">florisvdk</a>.</span>
      </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="includes/js/jquery.qrcode.min.js"></script>
    <script src="includes/js/form.js"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
  </body>
</html>