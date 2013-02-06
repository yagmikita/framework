<?php

namespace NG\Frontend;

/**
 * Sets the basic behavior for all frontend elements
 */
interface FrontendElementInterface
{
    /**
     * Full render of the element itself
     * @return string
     */
    public function renderSelf();
    /**
     * Renders inner elements' content
     * @return string
     */
    public function renderContent();
    /**
     * Renders elements' attributes
     * @return string
     */
    public function renderAttributes();
}