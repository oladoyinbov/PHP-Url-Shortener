<?php

/*
 * Follow Me On Twitter - @wildfoster.
 *
 * (c) Oladoyinbo Vincent <support@digitalpoint.com.ng>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);
require "autoloader.php";

if(isset($_GET["go"])){
    $shortval = sanitize_endpoint($_GET["go"]);
    $process::execute($shortval);
    return;
    }

    
    require "header.php";

    require Views("index");

    require "footer.php";

?>
