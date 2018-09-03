<?php
    /**
     * # Configuration
     * Add properties by copying the line beneath and adjusting the 'value' and 'name'.
     * 
     *      $_CONFIG["name"] = "value"; 
     * 
     */
    $_CONFIG = [];

    //APPLICATION
    $_CONFIG["application_title"] = "ANTISOCIAL";
    $_CONFIG["application_version"] = "1.0.0";
    $_CONFIG["application_version_stage"] = false; //For future error reporting

    //DEFAULT
    $_CONFIG["default_meta_title_appendix"] = " | ANTISOCIAL";
    $_CONFIG["default_meta_keywords"] = array("social network","social","share");
    $_CONFIG["default_meta_menu"] = true;
    $_CONFIG["default_meta_image"] = "image";
    $_CONFIG["default_meta_themecolor"] = "rgb(250,200,0)";

    //USER / CLIENT
    $_CONFIG["user_guest_allow"] = false;