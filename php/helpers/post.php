<?php

    namespace Helpers;

    Class Post {

        /**
         * Checks if an POST element exists.
         * @param String $id Identifier of the element.
         * @return Boolean Returns True if the elemant exists.
         */
        public static function exists($id){
            return isset($_POST[$id]);
        }

        /**
         * Checks if multiple POST elements exist.
         * @param String[] $array Array of identifiers to check.
         * @return Boolean Returns True if all elements exist.
         */
        public static function exist($array){
            $exist = true;
            foreach($array as $id){
                if(!Self::exists($id)){ $exist = false; }
            }
            return $exist;
        }

        /**
         * Returns a POST element.
         * @param String $id Identifier of the element.
         * @return Mixed Returns the content of the element.
         */
        public static function get($id){
            return $_POST[$id];
        }

    }

?>