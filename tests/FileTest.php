<?php

namespace csvImporter\Tests;

use csvImporter\App\File;
use PHPUnit\Framework\TestCase;
use Exception;

class FileTest extends TestCase
{
    public function test_thrown_exception_empty_file()
    {
        $this->expectException(Exception::class);
        $_FILES['file'] = null;
        $file = new File;
        $file->read();
    }

    public function test_thrown_exception_file_any_error()
    {
        $this->expectException(Exception::class);
        $_FILES['file']['error'] = 1;
        $file = new File;
        $file->read();
    }

    public function test_thrown_exception_file_format_invalid()
    {
        $this->expectException(Exception::class);
        $_FILES['file']['type'] = 'image/jpeg';
        $file = new File;
        $file->read();
    }

}