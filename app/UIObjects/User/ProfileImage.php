<?php
/**
 * ProfileImage.php
 *
 * PHP version 7
 *
 * @category    UIObjects
 * @package     App\UIObjects\User
 * @author      XE Developers <developers@xpressengine.com>
 * @copyright   2015 Copyright (C) NAVER Corp. <http://www.navercorp.com>
 * @license     http://www.gnu.org/licenses/old-licenses/lgpl-2.1.html LGPL-2.1
 * @link        https://xpressengine.io
 */

namespace App\UIObjects\User;

use XeFrontend;
use App\UIObjects\Form\FormImage;

/**
 * Class ProfileImage
 *
 * @category    UIObjects
 * @package     App\UIObjects\User
 * @author      XE Developers <developers@xpressengine.com>
 * @copyright   2015 Copyright (C) NAVER Corp. <http://www.navercorp.com>
 * @license     http://www.gnu.org/licenses/old-licenses/lgpl-2.1.html LGPL-2.1
 * @link        https://xpressengine.io
 */
class ProfileImage extends FormImage
{
    /**
     * The component id
     *
     * @var string
     */
    protected static $id = 'uiobject/xpressengine@profileImage';

    /**
     * The name of view
     *
     * @var string
     */
    protected $view = 'uiobjects.user.profileImage';

    /**
     * Load assets.
     *
     * @return void
     */
    protected function loadAssets()
    {
        XeFrontend::js([
            'assets/vendor/jQuery-File-Upload/js/canvas-to-blob.min.js',
            'assets/vendor/jQuery-File-Upload/js/load-image.all.min.js',
            'assets/vendor/jQuery-File-Upload/js/vendor/jquery.ui.widget.js',
            'assets/vendor/jQuery-File-Upload/js/jquery.iframe-transport.js',
            'assets/vendor/jQuery-File-Upload/js/jquery.fileupload.js',
            'assets/vendor/jQuery-File-Upload/js/jquery.fileupload-ui.js',
            'assets/vendor/jQuery-File-Upload/js/jquery.fileupload-process.js',
            'assets/vendor/jQuery-File-Upload/js/jquery.fileupload-image.js',
            'assets/vendor/jQuery-File-Upload/js/jquery.fileupload-audio.js',
            'assets/vendor/jQuery-File-Upload/js/jquery.fileupload-video.js',
            'assets/vendor/jQuery-File-Upload/js/jquery.fileupload-validate.js',
        ])->appendTo('head')->load();

        XeFrontend::css([
            'assets/vendor/jQuery-File-Upload/css/jquery.fileupload.css',
            'assets/vendor/jQuery-File-Upload/css/jquery.fileupload-ui.css',
        ])->load();
    }
}
