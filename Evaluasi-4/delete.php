<?php

require 'Koneksi.php';

$konek = new Koneksi();

$konek->delete($_GET['id']);