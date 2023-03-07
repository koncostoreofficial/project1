<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

    @livewireStyles
</head>
<body>
<div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="bg-primary">Navbar</a>
            </div>    
        </nav>  
</div>    
<div>
    <div class="container">
        <div class="row">
            <div class="col-3">
               <div class="card">
                   <div class="card-header">
                         Status
                   </div>
                   <div class="card-body">

                   <div clas="card-body">
                         komentar <br />
                        <input type="text" class="from-control" wire:model='txtHAVE_FUN' />
                        <br />
                        <input type="submit" class="btn btn-primary" value="KIRIM" />
                    </div>

                   </div>
               </div>
            </div>
            <div class="col-9">
                <div class="card">
                    <div class="card-header">
                        kiriman saya
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>

      
</body>
</html>