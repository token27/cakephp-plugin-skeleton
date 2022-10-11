<?php

/**
 *
 *
 * Version      1.0.0
 * Created      11/10/2022
 * Modified     11/10/2022
 *
 * @author      Token27
 * @copyright   Token27
 */
declare(strict_types=1);

namespace YourPluginName\Controller\Component;

# CakePHP
use Cake\ORM\TableRegistry;
use Cake\Controller\Component;
use Cake\Controller\ComponentRegistry;

# Curl Client
use Cake\Http\Client;
use DateTime;
use DateTimeZone;
use DateInterval;

/**
 *
 */
class YourPluginNameComponent extends Component
{

    /**
     * Constructor hook method.
     *
     * Implement this method to avoid having to overwrite
     * the constructor and call parent.
     *
     * @param array $config The configuration settings provided to this component.
     * @return void
     */
    public function initialize(array $config): void
    {

    }


    /**
     *
     *
     * @param string $url
     * @param string $endpoint
     * @param array $params
     * @param array $options
     * @param string $protocol
     * @return array|null
     */
    public function doRequest(string $url, string $endpoint = '', array $params = [], array $options = [], string $protocol = 'https'): array
    {
        $result = [];
        $full_url = $protocol . '://' . $url . $endpoint;
        if (!empty($params)) {
            $full_url .= '?' . http_build_query($params);
        }

        try {
            $http = new Client();
            $response = $http->get($full_url, [], $options);
            if ($response->isOk()) {
                $result = $response->getJson();
            }
        } catch (\Exception $e) {

        }
        return (array)$result;
    }


}
