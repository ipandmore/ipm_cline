<?php
namespace Ipandmore\IpmCline\Controller;

/***************************************************************
 *
 *  Copyright notice
 *
 *  (c) 2017 ip&more GmbH <developer@ipandmore.de>, ip&more GmbH
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
 * ClineController
 */
class ClineController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{
  /**
   * action show
   *
   */
  public function showAction()
  {
    $settings = $this->settings;

  	if ($settings["copyrightEndTilNow"] == 1) {
  		$settings["copyrightEnd"]="".time()."";
  	}

    if ($settings["mergeFieldsAsAOneLiner"] == 1) {

      if (!empty($settings["bodytext"]) && 0 === strpos($settings["bodytext"], '<p>')) {
        $oneLiner = '';
      } else {
        $oneLiner = '<p>';
      }

      if ($settings["startWithCopyrightLabel"] == 1) {
        $oneLiner .= '© ';
      }

      if (!empty($settings["copyrightStart"])) {
        $startDate = date($settings["copyrightDateFormat"], $settings["copyrightStart"]);
        $oneLiner .= $startDate;
      }

      if (!empty($settings["copyrightStart"]) && !empty($settings["copyrightEnd"])) {
        $oneLiner .= ' - ';
      }

      if (!empty($settings["copyrightEnd"])) {
        $endDate = date($settings["copyrightDateFormat"], $settings["copyrightEnd"]);
        $oneLiner .= $endDate . ' ';
      }

      if (!empty($settings["bodytext"]) && 0 === strpos($settings["bodytext"], '<p>')) {
          $oneLiner = preg_replace("/<p>/", "<p>" . $oneLiner, $settings["bodytext"], 1);
      } else {
        $oneLiner .= $settings["bodytext"];
        $oneLiner .= '</p>';
      }

      $this->view->assign('oneLiner', $oneLiner);
  	} else {
      $this->view->assign('settings', $settings);
    }
  }
}
