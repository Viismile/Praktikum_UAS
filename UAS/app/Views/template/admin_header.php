<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $title; ?></title>
    <link rel="stylesheet" href="<?= base_url('/adminstyle.css');?>">
    <link rel="shortcut icon" href="<?= base_url('/R.png');?>">
</head>
<body>
    <div id="container">
    <header>
        <img src="<?= base_url('/R.png');?>" title="R Logo" alt="R Logo" width="75"
            style="float: left; margin-right:10px;">
        <h1>Iuran RT 05</h1>
    </header>
    <navbar>
        <ul>
            <li><a href="<?= base_url('/warga');?>" class="active">Dashboard</a></li>
            <li><a href="">Iuran Warga</a>
                <ul class="sub1">
                    <li><a href="<?= base_url('/admin/iuran');?>">Daftar Kas Warga</a></li>
                    <li><a href="<?= base_url('/admin/kas');?>">Laporan Transaksi</a></li>
                </ul>
            </li>
        </ul>
        <a href="<?= base_url('/admin/logout');?>" onclick="return confirm('Yakin ingin logout?')">Logout</a>
    </navbar>
    <section id="wrapper">
        <section id="main">
