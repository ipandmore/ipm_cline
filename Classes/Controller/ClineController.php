<?php

namespace Ipandmore\IpmCline\Controller;

/***************************************************************
 *
 *  Copyright notice
 *
 *  (c) 2024 ip&more GmbH <developer@ipandmore.de>, ip&more GmbH
 *
 ***************************************************************/

class ClineController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{
    public function showAction()
    {
        $settings = $this->settings;

        if ($settings["copyrightEndTilNow"] == 1) {
            $settings["copyrightEnd"] = (string)time();
        }

        if ($settings["mergeFieldsAsAOneLiner"] == 1) {

            if (!empty($settings["bodytext"]) && str_starts_with($settings["bodytext"], '<p>')) {
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

            if (!empty($settings["bodytext"]) && str_starts_with($settings["bodytext"], '<p>')) {
                $oneLiner = preg_replace("/<p>/", "<p>" . $oneLiner, $settings["bodytext"], 1);
            } else {
                $oneLiner .= $settings["bodytext"];
                $oneLiner .= '</p>';
            }

            $this->view->assign('oneLiner', $oneLiner);
        } else {
            $this->view->assign('settings', $settings);
        }
        return $this->htmlResponse();
    }
}
