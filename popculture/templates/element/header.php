
<?php
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    type="text/css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    
    <?= $this->Html->css(['normalize.min', 'milligram.min', 'cake']) ?>
    
    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
</head>

<body>
<nav class="navbar navbar-expand-md navbar-light py-5" >
    <div class="container"> <button class="navbar-toggler navbar-toggler-right border-0" type="button"
        data-toggle="collapse" data-target="#navbar6">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbar6"> <a class="navbar-brand d-none d-md-block" style="color:hotpink;"
          href="index.html">
          <h1><b>POP CULTURE</b></h1>
        </a>
        <ul class="navbar-nav mx-auto">
          <li class="nav-item"> <a class="nav-link" href="about.html" style="color:hotpink;"><h3>About us</h3></a> </li>
          <li class="dropdown">
            <a href="#" aria-expanded="false" data-toggle="dropdown" class="nav-link" style="color:hotpink;"><h3>Flavors</h3></a>
            <ul class="dropdown-menu" style="color:hotpink;">
              <li><a href="flavors.html" class="nav-link" style="color:hotpink;">Fruits</a></li>
              <li><a href="flavors.html" class="nav-link" style="color:hotpink;">Vegetables</a></li>
              <li><a href="flavors.html" class="nav-link" style="color:hotpink;">Alcohol</a></li>
              <li class="divider" style="color:hotpink;"></li>
              <li><a href=<?=$this->Url->build(['controller'=>'PopCulture', 'action'=>'list']);?> class="nav-link" style="color:hotpink;">All flavors</a></li>
            </ul>
          </li>
          <li class="nav-item">  <a class="btn btn-outline-primary navbar-btn ml-md-2" href=<?=$this->Url->build(['controller'=>'PopCulture', 'action'=>'contact']);?>  style="color:hotpink;font-size:20"><h3>Contact us</h3></a></li>
        </ul>
        <ul class="navbar-nav">
          <div class="input-group"> <input type="text" class="form-control" placeholder="Search for a POP" style="color:hotpink;" id="formcover1">
            <div class="input-group-append"> <button class="btn" type="button" style="color:hotpink;"><h3>Search</h3></button> </div>
          </div>
        </ul>
        <ul class="navbar-nav">
          <li class="nav-item"> <a class="nav-link" href=<?=$this->Url->build(['controller'=>'popsicles', 'action'=>'']);?> style="color:hotpink;">Admin</a> </li>

        </ul>
      </div>
    </div>
  </nav>
</div>
<div class="py-1">
    <div class="container">