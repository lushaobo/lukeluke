<?php

namespace Lukeluke\Repos\traits;

/**
 * 配置插件
 */
trait ConfigTrait
{


    /**
     * 获取配置
     *
     * @param mixed $key
     * @param mixed $default
     * @return mixed
     */
    public function getConfig($key = null, $default = null)
    {
        if (is_null($key)) {
            return $this->config;
        }

        return isset($this->config[$key]) ? $this->config[$key] : $default;
    }

    /**
     * 设置配置
     *
     * @param array|string $key 如果为数组，则表示批量配置，否则为单个选项的配置
     * @param mixed $value
     * @return $this
     */
    public function setConfig($key, $value = null)
    {
        if (is_array($key)) {
            $this->config = array_merge($this->config, $key);
        } else {
            $this->config[$key] = $value;
        }

        return $this;
    }
}
