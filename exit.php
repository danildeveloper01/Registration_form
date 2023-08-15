<?php

    setcookie('user', $user['name'], time() - 60*60*24*365*100, "/");
    header("location: /");