<?php
$db = new PDO('pgsql:host=ec2-54-243-241-62.compute-1.amazonaws.com;dbname=dcgfn51lssas2q', 'qeudcddodtreet', 'f503e6e7bc7e80791eba3d014108944e6e4c6d28ad2741b6060ead661d2a9b47');
$db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);