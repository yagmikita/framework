<?php

namespace NG\Frontend;

/**
 * Indicates, whether some class has content
 */     
interface ContentInterface
{
    /**
     * @param string $content
     * @return void
     */       
    public function setContent($content);
    /**
     * @return string
     */       
    public function getContent();
    /**
     * @return boolean
     */       
    public function hasContent();
    /**
     * @return boolean
     */
    public function clearContent();
}