<?php
    header('Cache-Control: no-store, no-cache, must-revalidate, max-age=0');
    header('Cache-Control: post-check=0, pre-check=0', false);
    header('Pragma: no-cache');
    session_start();
    include '../groups-aad9b4.php';
    function checkAccess($groups) {
        if(isset($_SESSION['user_groups'])) {
            return count(array_intersect($groups, $_SESSION['user_groups'])) > 0;
        }
        return FALSE;
    }
    if(isset($_SESSION['user_logged']) && 1 > 0) {
        $now = new DateTime();
        $fmt = "Y-m-d\TH:i:sP"; // ATOM
        $end = DateTime::createFromFormat($fmt, $_SESSION['user_logged']->format($fmt));
        $end->add(new DateInterval("PT1H"));
        $diff = $now->diff($end);
        if($diff->invert) {
            unset($_SESSION['session_id']);
            unset($_SESSION['user_id']);
            unset($_SESSION['username']);
            unset($_SESSION['user_name']);
            unset($_SESSION['user_surname']);
            unset($_SESSION['user_email']);
            unset($_SESSION['user_info']);
            unset($_SESSION['user_groups']);
            unset($_SESSION['user_logged']);
            unset($_SESSION['user_redirect']);
            unset($_SESSION['user_redirect_attempt']);
            $redirect = 'index.php';
            if(strlen($redirect) > 0) {
                $_SESSION['user_redirect'] = $redirect;
            }
            header('Location: ../nutzeranmeldung.html');
            exit;
        }
    }
    $acg = array('0');
    if(!isset($_SESSION['session_id']) || $_SESSION['session_id'] !== 'C56EC4F4-B1E2-4A01-85D3-9F73346D7DD0' || !isset($_SESSION['user_id']) || !isset($_SESSION['user_logged']) || $acg === NULL || !checkAccess($acg)) {
        $redirect = 'index.php';
        if(strlen($redirect) > 0) {
            $_SESSION['user_redirect'] = $redirect;
        }
        header('Location: ../nutzeranmeldung.html');
        exit;
    }
    unset($_SESSION['user_redirect']);
    unset($_SESSION['user_redirect_attempt']);

    header('Content-Type: text/css');
    header('Content-Length: 444');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('Ym9keXstLWY6MTstLXN3OjBweDttaW4td2lkdGg6MTIwMHB4fUBtZWRpYSAobWluLXdpZHRoOjk2MHB4KSBhbmQgKG1heC13aWR0aDoxMTk5cHgpe2JvZHl7bWluLXdpZHRoOjk2MHB4fX1AbWVkaWEgKG1pbi13aWR0aDo3NjhweCkgYW5kIChtYXgtd2lkdGg6OTU5cHgpe2JvZHl7bWluLXdpZHRoOjc2OHB4fX1AbWVkaWEgKG1heC13aWR0aDo3NjdweCl7Ym9keXttaW4td2lkdGg6MzIwcHh9fUBmb250LWZhY2V7Zm9udC1kaXNwbGF5OmJsb2NrO2ZvbnQtZmFtaWx5OiJMYXRvIjtzcmM6dXJsKCdMYXRvLVJlZ3VsYXIud29mZjInKSBmb3JtYXQoJ3dvZmYyJyksdXJsKCdMYXRvLVJlZ3VsYXIud29mZicpIGZvcm1hdCgnd29mZicpO2ZvbnQtd2VpZ2h0OjQwMH0uYzF7ZGlzcGxheTppbmxpbmUtYmxvY2s7cG9zaXRpb246cmVsYXRpdmU7bWFyZ2luLWxlZnQ6MDttYXJnaW4tdG9wOjB9');
