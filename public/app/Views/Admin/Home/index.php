<?php 
echo $this->extend('Admin/layout/main'); 

echo $this->section('title');
echo $title;
echo $this->endSection();

echo $this->section('styles');
echo $this->endSection();

echo $this->section('content');
echo '<h1>'.$title.'</h1>';
echo $this->endSection();

echo $this->section('scripts');
echo $this->endSection();
?>