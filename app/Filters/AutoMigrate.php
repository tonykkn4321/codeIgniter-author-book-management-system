<?php

namespace App\Filters;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

class AutoMigrate implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        try {
            $migrations = \Config\Services::migrations();
            $migrations->latest();
        } catch (\Throwable $e) {
            log_message('error', 'Auto-migration failed: ' . $e->getMessage());
        }
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // No action needed after response
    }
}
