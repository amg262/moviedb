<?php


class MovieDB
{

    private $pm2 = 'P:\Movies 2';
    private $pmt = 'P:\Torrents';
    private $dm = 'D:\Movies';
    private $dmt = 'D:\Theater';
    public $dir;
    private $dir_files = [];
    private $file;
    private $json;
    private $csv;


    /**
     * Class Constructor
     */
    public function __construct()
    {
    }


    public function scan_dir()
    {


        $this->dir = scandir($this->pm2);

        $this->json = json_encode($this->dir);
    }
}

$a = new MovieDB();
$a->scan_dir();
echo count($a->dir);
