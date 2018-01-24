<?php
/**
 * Created by IntelliJ IDEA.
 * User: emcnaughton
 * Date: 1/19/18
 * Time: 3:09 PM
 */
return [
  [
    'name' => 'google_maps',
    'entity' => 'Geocoder',
    'params' => [
      'version' => 3,
      'name' => 'google_maps',
      'title' => 'Google Maps',
      'class' => 'GoogleMaps\GoogleMaps',
      'is_active' => 1,
      'weight' => 3,
      ],
    'help_text' => ts('Adhering to Terms of service is your responsibility - https://support.google.com/code/answer/55180?hl=en'),
    'user_editable_fields' => ['api', 'threshold_standdown']
  ]
];