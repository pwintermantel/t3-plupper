<?php

/***************************************************************
 *  Copyright notice
 *
 *  (c) 2012 Philipp Wintermantel <philipp@wintermantel.org>
 *  
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 3 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/


/**
 *
 *
 * @package plupper
 * @license http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 *
 */
class Tx_Plupper_Controller_PlupperController extends Tx_Extbase_MVC_Controller_ActionController {

  public function statusAction() {
    try {
      $url = $this->settings['apiUrl'] . '/resources/provider/' . $this->settings['accountId'] . '/status';
      $result = $this->makeApiCall($url);
      $this->view->assign('status', $result);
    } catch(Exception $e) {
      $this->forward('error');
      return;
    }
  }

  public function errorAction() { }


  /**
   * Handles the communication with the API
   *
   * @param string $resource The resource to load from
   * @returns stdObj
   * @throws Exception
   */
  private function makeApiCall($uri) {
   	  $ch = curl_init($uri);
      curl_setopt_array($ch, array(
          CURLOPT_RETURNTRANSFER => true,
          //CURLOPT_HEADER         => true,
          CURLOPT_HTTPHEADER     => array('Content-Type:application/json')
      ));

      $rawData = curl_exec($ch);
      $data    = json_decode($rawData);

      if (curl_errno($ch) || !$data) {
        throw new Exception('Error during API Request:' .  serialize(array(curl_errno($ch), $uri)));
      }
      return $data;
  }
}
