<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Post data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    
</head>
<body>
    <div class="container">
      <div class="formADD">
          <form method="POST" action="/api/demoApi">
              @csrf
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Name</label>
                <input name='name' type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text"></div>
              </div>
              <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Information</label>
                <input name='information' type="text" class="form-control" id="exampleInputPassword1">
              </div>
              <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Image</label>
                  <input name='image' type="text" class="form-control" id="exampleInputPassword1">
              </div>
              <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Price</label>
                  <input name='price' type="number" class="form-control" id="exampleInputPassword1">
              </div>
              <button type="submit" class="btn btn-primary">Save</button>
            </form>
      </div>
    </div>
</body>
</html>