<?php
/**
 * Created by PhpStorm.
 * User: claudio.santos
 * Date: 10/07/2019
 * Time: 08:35
 */

namespace RSC\model;


class Arquivo
{
    protected $table;
    private $permanentName;
    public $path;
    private $uploadDirPath;
    private $directoryName;
    private $extension;

    public function __construct() {
        $this->uploadDirPath = wp_upload_dir()['basedir'];
        $this->directoryName = 'documentos';
    }

    private function generateFileNameMd5($name) {
        $this->permanentName = md5($name);
    }

    public function setExtension($valueName) {
        $this->extension = pathinfo($valueName, PATHINFO_EXTENSION);
    }

    public function saveFileInDisk($file) {
        $this->generateFileNameMd5($file['name'][0]);
        $this->setExtension($file['name'][0]);
        $this->path = '/'
            . $this->directoryName
            . '/'
            . $this->permanentName
            . '.'
            . $this->extension;

        $pathDisk = $this->uploadDirPath . $this->path;
        move_uploaded_file($file['tmp_name'][0], $pathDisk);
        return $this->path;
    }


}