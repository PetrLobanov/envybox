<?php

namespace App\Forms;

class Factory {

    public static function getForms($instance) {

        $className = "App\Forms\\".$instance;

        if (class_exists( $className ) ) {

            return new $className();

        } else {

            dd('Form not found');

        }


    }

}
