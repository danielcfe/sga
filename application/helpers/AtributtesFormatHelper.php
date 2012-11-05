<?php
  
function attribute_format($mode,$attribute)
{
  switch ($moed) {
    case 'direct':
      return $attribute;
    case 'number_format' :
      return number_format($attribute,0,',','.');
    case 'telf_format' :
      return '('.substr($attribute, 0,4) .') '. substr($attribute, 4,3) .'(.)'. substr($attribute, 7)  
    default:
      throw new Exception('undefined attribute mode');
      break;
  }
}