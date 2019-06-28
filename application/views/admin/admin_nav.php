<?php 
  $active = "class='active'";
  $class = 'active'; 
?>
<ul class="sidebar-menu" data-widget="tree">
    <li class="header">MAIN NAVIGATION</li>
    <li class="active">
      <a href="">
        <i class="fa fa-home"></i> <span>Dashboard</span>
      </a>
      <ul class="treeview-menu <?php echo ($nav_top == 'dashboard')? $class :""; ?>">
        <li <?php echo (basename($_SERVER['PHP_SELF']) == 'home')? $active :""; ?>>
          <a href="<?php echo base_url('admin');?>">
        <i class="fa fa-home"></i> home</a></li>
      </ul>
    </li>
    

    <li class="treeview <?php echo ($nav_top == 'master')? $class :""; ?>">
      <a href="#">
        <i class="fa fa-gear"></i>
        <span>Master</span>
        <span class="pull-right-container">
          <i class="fa fa-angle-left pull-right"></i>
        </span>
      </a>
      <ul class="treeview-menu">
        <li <?php echo (basename($_SERVER['PHP_SELF']) == 'bobot')? $active :""; ?>>
          <a href="<?php echo base_url('admin/bobot');?>"><i class="fa fa-ellipsis-v"></i>Data Nilai Bobot</a>
        </li>
        <li <?php echo (basename($_SERVER['PHP_SELF']) == 'kriteria')? $active :""; ?>>
          <a href="<?php echo base_url('admin/kriteria');?>"><i class="fa fa-ellipsis-v"></i>Data Kriteria</a>
        </li>
        <li <?php echo (basename($_SERVER['PHP_SELF']) == 'atribut')? $active :""; ?>>
          <a href="<?php echo base_url('admin/atribut');?>"><i class="fa fa-ellipsis-v"></i>Data Kriteria Atribut</a>
        </li>
       
      </ul>
    </li>

    <li class="treeview <?php echo ($nav_top == 'warga')? $class :""; ?>">
      <a href="#">
        <i class="fa fa-users"></i>
        <span>Warga</span>
        <span class="pull-right-container">
          <i class="fa fa-angle-left pull-right"></i>
        </span>
      </a>
      <ul class="treeview-menu">
        <li <?php echo (basename($_SERVER['PHP_SELF']) == 'warga')? $active :""; ?>>
          <a href="<?php echo base_url('admin/warga');?>"><i class="fa fa-ellipsis-v"></i>Data warga</a>
        </li>
      </ul>
    </li>

    <li class="treeview <?php echo ($nav_top == 'penilaian')? $class :""; ?>">
      <a href="#">
        <i class="fa fa-users"></i>
        <span>Penilaian</span>
        <span class="pull-right-container">
          <i class="fa fa-angle-left pull-right"></i>
        </span>
      </a>
      <ul class="treeview-menu">
        <li <?php echo (basename($_SERVER['PHP_SELF']) == 'penilaian_saw')? $active :""; ?>>
          <a href="<?php echo base_url('admin/nilai_saw');?>"><i class="fa fa-ellipsis-v"></i>Penilaian SAW</a>
        </li>
        <li <?php echo (basename($_SERVER['PHP_SELF']) == 'penilaian_wp')? $active :""; ?>>
          <a href="<?php echo base_url('admin/nilai_wp');?>"><i class="fa fa-ellipsis-v"></i>Penilaian WP</a>
        </li>
      </ul>
    </li>

    



</ul>