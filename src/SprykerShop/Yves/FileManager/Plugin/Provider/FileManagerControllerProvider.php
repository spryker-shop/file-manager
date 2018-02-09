<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace SprykerShop\Yves\FileManager\Plugin\Provider;

use Silex\Application;
use SprykerShop\Yves\ShopApplication\Plugin\Provider\AbstractYvesControllerProvider;

class FileManagerControllerProvider extends AbstractYvesControllerProvider
{
    const ROUTE_DOWNLOAD = 'download';
    const PARAM_NAME_FILE = 'id-file';

    /**
     * @param \Silex\Application $app
     *
     * @return void
     */
    protected function defineControllers(Application $app)
    {
        $allowedLocalesPattern = $this->getAllowedLocalesPattern();

        $this->createController('/zaeblo', 'zaeblo', 'FileManager', 'Download');
//            ->assert('download', $allowedLocalesPattern . 'download|download');
//            ->value('fileName', 'fileName');
    }
}
