<?php

namespace App\Traits;

trait UrlParamCheck
{
    use ResponseAPI;
    /**
     * Check request with Include ?
     *
     * @param array $alloweds
     * @param string $value
     * @param bool $dashToCamelCase
     *
     * @return array|null
     */
    public function requestParamCheckAndConvert(string $name, array $alloweds, string $value, ?bool $dashToCamelCase = false)
    {
        $includes = null;
        $includes = explode(",", $value);

        foreach ($includes as $key => $include) {
            if (!in_array($include, $alloweds)) {
                return $this->responseMessage(__('messages.not_allowed', ['name' => $name, 'include' => $include, 'allowed' => implode(", ", $alloweds)]), 400);
            };

            // conver dash to camelCase
            if ($dashToCamelCase) {
                $includes[$key] = lcfirst(str_replace('-', '', ucwords($include, '-')));
            }
        }

        return $includes;
    }
}
