<?php


class File
{
    public static function read()
    {
        if(!isset($_FILES['file'])) throw new Exception('Пустой файл');
        if ($_FILES['file']['error']) {
            throw new Exception($_FILES['file']['error']);
        } else {
            $mimes = ['application/vnd.ms-excel', 'text/plain', 'text/csv', 'text/tsv'];
            if(!in_array($_FILES['file']['type'], $mimes)) throw new Exception('Неверный формат файла');

            // Чтение из файла в массив
            $file = $_FILES['file']['tmp_name'];
            $csv = array_map(function($v){return str_getcsv($v, ";");}, file($file));
            return $csv;
        }
    }
}