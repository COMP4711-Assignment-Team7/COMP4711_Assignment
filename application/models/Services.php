<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class Services extends CI_Model {

    // array that holds all of the service recipies
    var $services = array(
        array('id' => '1', 'name' => 'Preparation',
              'description' => 'Top off plane with fuel and oil. Takes 50 gallons of fuel, and 12 gallons of oil.', 
              'supplies' => array('Fuel' => 50, 'Oil' => 12)),
            array('id' => '2', 'name' => 'Maintenence',
              'description' => 'Check oil levels and overall wear on rivets, airframe, eqiupment, engine, and plane coating. Takes 20 gallons of oil and 25 rivets.', 
              'supplies' => array('Oil' => 20, 'Rivets' => 25)),
            array('id' => '3', 'name' => 'Rearm for Air Combat',
              'description' => 'Add missles and ammo to rearm. Takes 6 missles and 480 rounds of ammo.', 
              'supplies' => array('Missles' => 6, 'Ammo' => 480)),
        array('id' => '4', 'name' => 'Rearm for Ground Combat',
              'description' => 'Add a few missles, ammo, and some bombs to rearm. Takes 2 missles, 480 rounds of ammo, and 4 JDAM\'s.', 
              'supplies' => array('Missles' => 2, 'Ammo' => 480, 'JDAM' => 4)),
        array('id' => '5', 'name' => 'Wheel Repair',
              'description' => 'Swap wheel and check landing gear. Takes 3 wheels.', 
              'supplies' => array('Wheel' => 3)),
        array('id' => '6', 'name' => 'Replace Windshield',
              'description' => 'Swap the windshield, as it may be cracked by airborne materials or high G manouvers. Takes 1 Windshield', 
              'supplies' => array('Windshield' => 1))
        );

    // Default Constructor
    public function __construct()
    {
            parent::__construct();
    }

    // Grab all of the service recipe
    public function get_all()
    {
        return $this->services;
    }

    // Get one service recipe
    public function get_one($id)
    {
        // find the correct service id, return it
        foreach($this->services as $service)
        {
            if($service['id'] == $id)
            {
                return $service;
            }
        }
    }
    
    // Get an array of supplies that the service needs
    public function get_supply_list($id)
    {
                // find the correct service id, return it
        foreach($this->services as $service)
        {
            if($service['id'] == $id)
            {
                return $service['supplies'];
            }
        }
    }
    
        // Get the description of the Stock item
    public function get_description($name)
    {
        // find the correct service name, return the description
        foreach($this->services as $service)
        {
            if($service['name'] == $name)
            {
                return $service['description'];
            }
        }
    }
    
        // Set the description of the Stock item
    public function set_description($name, $description)
    {
        // find the correct service name, set the description
        foreach($this->services as $service)
        {
            if($service['name'] == $name)
            {
                $service['description'] = $description;
            }
        }
    }
}
