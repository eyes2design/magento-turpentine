<?php

/** 
 * Nexcess.net Turpentine Extension for Magento
 * Copyright (C) 2012  Nexcess.net L.L.C.
 * 
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 * 
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 * 
 * You should have received a copy of the GNU General Public License along
 * with this program; if not, write to the Free Software Foundation, Inc.,
 * 51 Franklin Street, Fifth Floor, Boston, MA 02110-1301 USA.
 */ 

class Nexcessnet_Turpentine_Block_Management
    extends Mage_Adminhtml_Block_Template {

    public function __construct() {
        $this->_controller = 'management';
        $this->setTemplate( 'turpentine/varnish_management.phtml' );
        parent::__construct();
    }

    /**
     * Get the flushAll url
     *
     * @return string
     */
    public function getFlushAllUrl() {
        return $this->getUrl( '*/*/flushAll' );
    }

    /**
     * Get the flushPartial URL
     *
     * @return string
     */
    public function getFlushPartialUrl() {
        return $this->getUrl( '*/*/flushPartial' );
    }

    /**
     * Get the flushContentType URL
     *
     * @return string
     */
    public function getFlushContentTypeUrl() {
        return $this->getUrl( '*/*/flushContentType' );
    }

    /**
     * Get the applyConfig URL
     *
     * @return string
     */
    public function getApplyConfigUrl() {
        return $this->getUrl( '*/*/applyConfig' );
    }

    /**
     * Get the saveConfig URL
     *
     * @return string
     */
    public function getSaveConfigUrl() {
        return $this->getUrl('*/*/saveConfig');
    }

    /**
     * Get the getConfig URL
     *
     * @return string
     */
    public function getGetConfigUrl() {
        return $this->getUrl('*/*/getConfig');
    }
}