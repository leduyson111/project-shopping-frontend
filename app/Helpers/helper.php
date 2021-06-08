<?php

use App\Models\SettingsModel;

function getConfigValueFormSettingTable($configKey){

    $settings = SettingsModel::where('config_key',$configKey)->first();

    if(!empty($settings)){
        return $settings->config_value;

    }
    return null;


}