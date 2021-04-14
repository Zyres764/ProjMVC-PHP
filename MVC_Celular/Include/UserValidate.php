<?php
    class UserValidate {
        public static function testarId($paramId) {
            if (is_numeric($paramId)){
                return true;
            }
            else {
                return false;
            }
            }

            /**public static function testarEmail($paramEmail) {
                $Sintaxe = '#^[\w.-]+@[\w.-]+\.[a - zA-Z] {2,6}$#';
                if (preg_match($Sintaxe, $paramEmail)) {
                    return true;
                }
                else {
                    return false;
                }
            }*/
    }


?>