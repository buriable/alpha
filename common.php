<?php
session_start();
header('Cache-control: private'); // IE 6 FIX

if(isSet($_GET['lang']))
{
$lang = $_GET['lang'];

// register the session and set the cookie
$_SESSION['lang'] = $lang;

setcookie("lang", $lang, time() + (3600 * 24 * 30));
}
else if(isSet($_SESSION['lang']))
{
$lang = $_SESSION['lang'];
}
else if(isSet($_COOKIE['lang']))
{
$lang = $_COOKIE['lang'];
}
else
{
$lang = 'a';
}

switch ($lang) {
  case 'a':
  $lang_file = 'letter.a.php';
  break;

  case 'b':
  $lang_file = 'letter.b.php';
  break;

  case 'c':
  $lang_file = 'letter.c.php';
  break;
  
  case 'd':
  $lang_file = 'letter.d.php';
  break;
  
  case 'e':
  $lang_file = 'letter.e.php';
  break;
  
  case 'f':
  $lang_file = 'letter.f.php';
  break;
  
  case 'g':
  $lang_file = 'letter.g.php';
  break;
  
  case 'h':
  $lang_file = 'letter.h.php';
  break;
  
  case 'i':
  $lang_file = 'letter.i.php';
  break;
  
  case 'j':
  $lang_file = 'letter.j.php';
  break;
  
  case 'k':
  $lang_file = 'letter.k.php';
  break;
  
  case 'l':
  $lang_file = 'letter.l.php';
  break;
  
  case 'm':
  $lang_file = 'letter.m.php';
  break;
  
  case 'n':
  $lang_file = 'letter.n.php';
  break;
  
  case 'o':
  $lang_file = 'letter.o.php';
  break;
  
  case 'p':
  $lang_file = 'letter.p.php';
  break;
  
  case 'q':
  $lang_file = 'letter.q.php';
  break;
  
  case 'r':
  $lang_file = 'letter.r.php';
  break;
  
  case 's':
  $lang_file = 'letter.s.php';
  break;
  
  case 't':
  $lang_file = 'letter.t.php';
  break;
  
  case 'u':
  $lang_file = 'letter.u.php';
  break;
  
  case 'v':
  $lang_file = 'letter.v.php';
  break;
  
  case 'w':
  $lang_file = 'letter.w.php';
  break;
  
  case 'x':
  $lang_file = 'letter.x.php';
  break;
  
  case 'y':
  $lang_file = 'letter.y.php';
  break;
  
  case 'z':
  $lang_file = 'letter.z.php';
  break;

  default:
  $lang_file = 'letter.a.php';

}

include_once 'alphabet/'.$lang_file;
?>