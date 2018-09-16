<?php
$this->load->view('includes/upper'); //loades the header

$this->load->view('includes/header'); //loades the sidebar menu

$this->load->view($page_to_load);

$this->load->view('includes/footer'); //loades the footer
?>