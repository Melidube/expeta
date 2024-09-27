<?php

declare(strict_types=1);

namespace App\Controllers;

use Framework\TemplateEngine;
use App\Config\Paths;

class ErrorController
{
  public function __construct(private TemplateEngine $view)
  {
  }

  public function notFound()
  {
    echo $this->view->render("not-found.php");
  }
}
