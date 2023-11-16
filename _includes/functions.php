<?php

// ---------------------------------------------------------
// FUNCTIONS FOR CHECK SECURITY
// ---------------------------------------------------------

/**
 * Function for generate token 
 *
 * @return void
 */
function generateToken ():void {
  if(!isset($_SESSION['token'])|| !isset($_SESSION['tokenExpire'])|| $_SESSION['tokenExpire'] < time() ) {
  $_SESSION['token'] = md5(uniqid(mt_rand(), true));
  $_SESSION['tokenExpire'] =  time() +  15 * 60;
  }};

/**
 * Check for CSRF with referer and token
 * Redirect to the given page in case of error
 *
 * @param string $url The page to redirect
 * @return void
 */
function checkCSRF(string $url): void
{
    if (!isset($_SERVER['HTTP_REFERER']) || !str_contains($_SERVER['HTTP_REFERER'], 'http://localhost/scobi.com')) {
        $_SESSION['error'] = 'error_referer';
    } else if (
        !isset($_SESSION['token']) || !isset($_REQUEST['token'])
        || $_REQUEST['token'] !== $_SESSION['token']
        || $_SESSION['tokenExpire'] < time()
    ) {
        $_SESSION['error'] = 'error_token';
    }
    else return;

    header('Location: ' . $url);
    exit;
}


/**
 * Apply treatment on given array to prevent XSS fault.
 * 
 * @param array &$array
 */
function checkXSS(array &$array): void
{
    $array = array_map('strip_tags', $array);
}








// ---------------------------------------------------------
// FUNCTIONS FOR DISPLAY
// ---------------------------------------------------------

//FOR ADD CLASS ACTIVE WHENE IS PAGE ACTIVE
function addClassActive(string $url) :string {
    if (str_contains($_SERVER['REQUEST_URI'], $url ))
      return "active";
    else {
        return "";
    };
}