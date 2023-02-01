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
    if(isset($_SESSION['user_logged']) && 8 > 0) {
        $now = new DateTime();
        $fmt = "Y-m-d\TH:i:sP"; // ATOM
        $end = DateTime::createFromFormat($fmt, $_SESSION['user_logged']->format($fmt));
        $end->add(new DateInterval("PT8H"));
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

    header('Content-Type: image/svg+xml');
    header('Content-Length: 1343');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiPz48c3ZnIHZlcnNpb249IjEuMSIgdmlld0JveD0iMCAwIDE5NiA2NSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj48ZGVmcz48bWFzayBpZD0iYSI+PHJlY3Qgd2lkdGg9IjIzMC40NiIgaGVpZ2h0PSI5OS4zOSIgZmlsbD0iI0ZGRiIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoLTE3LjE5LTE3LjE5KSIvPjwvbWFzaz48L2RlZnM+PGcgdHJhbnNmb3JtPSJzY2FsZSguOTk5NTkpIj48ZyBtYXNrPSJ1cmwoI2EpIj48cGF0aCBmaWxsPSIjRkZGIiBkPSJNNTAuOTEgMTcuNTZjMjEgMCAzNC45NCA5LjQgNjQuMzIgOS40IDI5LjM4IDAgNDMuMjktOS40IDY0LjMyLTkuNCA0NC40NiAwIDQ0LjQ2IDY0LjI3IDAgNjQuMjcgLTIxIDAtMzUtOS40LTY0LjMyLTkuNCAtMjkuMzIgMC00My4yOSA5LjQtNjQuMzIgOS40IC00NC40NiAwLTQ0LjQ2LTY0LjI3IDAtNjQuMjciIHRyYW5zZm9ybT0idHJhbnNsYXRlKC0xNy4xOS0xNy4xOSkiLz48cGF0aCBmaWxsPSJub25lIiBzdHJva2U9IiMxRDFEMUIiIHN0cm9rZS13aWR0aD0iLjc1IiBkPSJNNTAuOTEgMTcuNTZjMjEgMCAzNC45NCA5LjQgNjQuMzIgOS40IDI5LjM4IDAgNDMuMjktOS40IDY0LjMyLTkuNCA0NC40NiAwIDQ0LjQ2IDY0LjI3IDAgNjQuMjcgLTIxIDAtMzUtOS40LTY0LjMyLTkuNCAtMjkuMzIgMC00My4yOSA5LjQtNjQuMzIgOS40IC00NC40NiAwLTQ0LjQ2LTY0LjI3IDAtNjQuMjdaIiB0cmFuc2Zvcm09InRyYW5zbGF0ZSgtMTcuMTktMTcuMTkpIi8+PHBhdGggZmlsbD0iIzFEMUQxQiIgZD0iTTQxLjgzIDU2Ljg5djBjNC4zODUxLjAwNTQgNy45NDQ0LTMuNTQ1MSA3Ljk0OTgtNy45MzAyIC4wMDU0LTQuMzg1Mi0zLjU0NTEtNy45NDQ1LTcuOTMwMi03Ljk0OTkgLTQuMzg1Mi0uMDA1NS03Ljk0NDUgMy41NDUtNy45NDk5IDcuOTMwMSAtLjAwMDEuMDE5OSAwIC4wMzk4LjAwMDEuMDU5OHYwYy0uMDA1NiA0LjM3OTYgMy41NDAzIDcuOTM0NCA3LjkxOTkgNy45Mzk5IC4wMDMzIDAgLjAwNjYgMCAuMDEgMCIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoLTE3LjE5LTE3LjE5KSIvPjxjaXJjbGUgY3g9IjI0LjY1IiBjeT0iMzEuNzYiIHI9IjkuODgiIGZpbGw9Im5vbmUiIHN0cm9rZT0iIzFEMUQxQiIgc3Ryb2tlLXdpZHRoPSIuNzUiLz48L2c+PGcgc3Ryb2tlLXdpZHRoPSIuNzUiIGZpbGw9Im5vbmUiIHN0cm9rZT0iIzFEMUQxQiI+PGxpbmUgeDE9IjExMS4zOSIgeDI9IjM4LjUyIiB5MT0iMzIuNTEiIHkyPSIzMi41MSIvPjxwb2x5bGluZSBwb2ludHM9IjQyLjI2IDM1Ljk4IDM4LjUyIDMyLjUxIDQyLjI2IDI5LjA0Ii8+PC9nPjwvZz48L3N2Zz4=');
