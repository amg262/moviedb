<?php

if ( isset( $_POST['poop'] ) ) {

	echo $_POST['poop'];
} else {

}

include_once __DIR__ . '/db.php';

/*
$db = new Database();
$db->connect();
$db->create_part();

$db->insert('hey dude','blahblahblah','1.9');
$db->close();
*/


class MovieDB {

	public $dir;
	private $pm2 = 'P:\Movies 2';
	private $pmt = 'P:\Torrents';
	private $dm = 'D:\Movies';
	private $dmt = 'D:\Theater';
	private $dir_files = [];
	private $file;
	private $json;
	private $csv;


	/**
	 * Class Constructor
	 */
	public function __construct() {
	}


	public function scan_dir() {

		$this->dir = scandir( $this->pm2, SCANDIR_SORT_NONE );

		$this->json = json_encode( $this->dir );


		if (file_exists('mdb.json')) {
			$data = file_get_contents( 'mdb.json' );

			var_dump(json_encode($data));

		} else {
			file_put_contents( 'mdb.json', $this->json, LOCK_EX );

		}


	}

	public function write() {

		$data = file_get_contents( 'mdb.json' );

		$file = file_put_contents( 'mdb.json', 'data', FILE_APPEND | LOCK_EX );

	}
}

$a = new MovieDB();
$a->scan_dir();
echo count( $a->dir );


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="./favicon.ico">

    <title>MovieDB</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css"
          integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <style>
        body {
            padding-top: 5rem;
        }

        .starter-template {
            padding: 3rem 1.5rem;
            text-align: center;
        }
    </style>
</head>

<body>

<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault"
            aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" href="#">Disabled</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown01" data-toggle="dropdown"
                   aria-haspopup="true" aria-expanded="false">Dropdown</a>
                <div class="dropdown-menu" aria-labelledby="dropdown01">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
    </div>
</nav>

<div class="container">

    <div class="starter-template">
        <h1>Bootstrap starter template</h1>
        <p class="lead">Use this document as a way to quickly start any new project.<br> All you get is this text and a
            mostly barebones HTML document.</p>
    </div>


    <div class="container col-xs-6 col-sm-6 col-md-6 col-lg-6">


        <form action="index.php" method="post" role="form">
            <legend>Form Title</legend>


            <div class="form-group">
                <label for=""></label>
                <input type="text" class="form-control" name="poop" id="" placeholder="Input...">
            </div>


            <div class="form-group">
                <label for=""></label>
                <input type="text" class="form-control" name="poop" id="" placeholder="Input...">
            </div>

            <div class="form-group">
                <label for=""></label>
                <input type="text" class="form-control" name="poop" id="" placeholder="Input...">
            </div>

            <div class="form-group">
                <label for=""></label>
                <input type="text" class="form-control" name="poop" id="" placeholder="Input...">
            </div>

            <div class="form-group">
                <label for="" class="col-sm-2 control-label"></label>

                <select class="form-control" id="">
                    <option value=""></option>

                </select>

            </div>


            <button type="submit" class="btn btn-primary|secondary|success|info|warning|danger">Submit</button>

        </form>
    </div>

</div><!-- /.container -->

<div>
    <!-- Bootstrap core JavaScript
	================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
            integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
            crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"
            integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4"
            crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js"
            integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1"
            crossorigin="anonymous"></script>

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="https://maxcdn.bootstrapcdn.com/js/ie10-viewport-bug-workaround.js"></script>
    <!-- Holder.js for placeholder images -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/holder/2.9.4/holder.min.js"></script>
</div>

</body>
</html>
