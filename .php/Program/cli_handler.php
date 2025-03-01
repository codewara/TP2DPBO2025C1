<?php
  require_once 'Baju.php';
  if (session_status () == PHP_SESSION_NONE) session_start ();

  header('Content-Type: application/json');
  $data = json_decode (file_get_contents ('php://input'), true);
  $response = ["message" => "Command not found!", "refresh" => false];
  if (!isset ($_SESSION ['newId'])) $_SESSION ['newId'] = 6;
  $newId = &$_SESSION ['newId'];
  $list = &$_SESSION ['list'];
  $command = $data ['command'];

  $parts = explode (' ', $command);
  $cmd = strtoupper ($parts [0]);
  
  if ($cmd == 'ADD') {
    $addParts = explode ('"', $command);
    $addNama = trim ($addParts [1]);
    $addJenis = trim ($addParts [3]);
    $addBahan = trim ($addParts [5]);
    $addWarna = trim ($addParts [7]);
    $addTarget = trim ($addParts [9]);
    $addSize = trim ($addParts [11]);
    $addMerk = trim ($addParts [13]);
    $addStok = intval (trim (explode (' ', $addParts [14])[1]));
    $addHarga = intval (trim (explode (' ', $addParts [14])[2]));
    $addFoto = trim ($addParts [15]);
    $list [] = new Baju ($newId, $addNama, $addJenis, $addBahan, $addWarna, $addTarget, $addSize, $addMerk, $addStok, $addHarga, $addFoto);
    $newId++;
    $response ["message"] = 'A new data has been added.';
    $response ["refresh"] = true;
  } else $response ["message"] = 'Command not found!';

  $_SESSION['list'] = $list;
  echo json_encode($response);
?>
