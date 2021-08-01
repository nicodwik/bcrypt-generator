<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Bcrypt Generator | Nerd Project</title>
  </head>
  <body class="bg-dark d-flex align-items-center" style="min-height: 100vh">
    <div class="container">
        <div class="text-center">
            <div class="card py-4">
                <h1>Bcrypt Generator v.1</h1>
                <span><small>by <a href="https://instagram.com/nicodwi_k" target="_blank">Nico Dwi K</a> | Nerd Project</small></span>
                <div class="card-body mt-5">
                    <form action="{{route('hash')}}" method="POST">
                        @csrf
                        <div class="form-group">
                            <input type="text" class="form-control" name="text" placeholder="Input Text">
                        </div>
                        <button type="submit" class="btn btn-primary btn-block mt-4">Hash</button>
                    </form>
                </div>
                @if (Session::has('hashed'))
                    <div class="card-body">
                        <div class="alert alert-success" role="alert">
                            {{Session::get('hashed')}}
                        </div>
                        <button class="btn btn-light" id="copy" onclick="copy()">Copy</button>
                    </div>
                @endif
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script>
        function copy() {
            const el = document.createElement('input')
            el.value = '{{Session::get('hashed')}}'
            document.body.appendChild(el).select()
            document.execCommand('copy')
            document.body.removeChild(el)
            document.getElementById('copy').innerText = 'Copied'
        }
    </script>
  </body>
</html>
