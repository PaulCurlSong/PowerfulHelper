<?php 
/**
 * 帮助函数
 */
namespace Zzan\Pwfhlr;

/**
 * 封装 json_encode(不进行unicode编码)
 * @return json
 */
if (! function_exists('Zzan\Pwfhlr\Json')) {

    function Json($arr) {
        return json_encode($arr, JSON_UNESCAPED_UNICODE);
    }
}