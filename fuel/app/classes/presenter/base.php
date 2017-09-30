<?php

/**
 * Created by PhpStorm.
 * User: gachakra
 * Date: 5/14/16
 * Time: 22:30
 * 
 * TAGジェネレータ（実験）
 * 必要性を感じる、かつ可能であれば拡張予定
 */
class Presenter_Base extends Presenter{

    protected function generate_option_tags($from, $to, $default = null){

        $tags = '';

        for($i = $from; $i <= $to; $i++){

            $is_selected = $i === (int)$default ? true : false;
            $tags .= $this->generate_tag($i, 'option', 'value', $is_selected);
        }

        return $tags;
    }

    protected function generate_tag($var, $tag, $attr = null, $is_selected = false){

        $attr = $attr ? ' ' . $attr . '=' . $var : '';
//        $selected = $is_selected ? ' ' . 'selected' : '';
        
        $selected = '';
        if($is_selected && $tag === 'option') $selected = ' selected';
        if($is_selected && $tag === 'input type="radio"') $selected = ' checked';

        return '<' . $tag . $attr . $selected . '>' . $var .  '</' . $tag . '>';
    }
}