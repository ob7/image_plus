<?php

namespace Concrete\Package\ImagePlus;
use Package;
use BlockType;

class Controller extends Package
{
    protected $pkgHandle = 'image_plus';
    protected $appVersionRequired = '5.7.5.8';
    protected $pkgVersion = '0.9';

    public function getPackageName()
    {
        return t('Image Block Plus');
    }

    public function getPackageDescription()
    {
        return t('Add an image with more options such as captions');
    }

    public function install()
    {
        $pkg = parent::install();
        BlockType::installBlockTypeFromPackage('image_plus', $pkg);
    }
}

?>
