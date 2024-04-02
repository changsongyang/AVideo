<?php

class Page
{

    private $title;
    private $bodyClass = '';
    private $extraScripts = array();
    private $extraStyles = array();
    private $inlineStyles = '';
    private $inlineScripts = '';
    private $bodyContent = '';
    private $includeNavbar = true;
    private $includeFooter = true;
    private $includeBGAnimation = false;
    private $includeInHead = array();
    private $includeInFooter = array();

    public function __construct($title, $bodyClass = '', $loadBasicCSSAndJS = false)
    {
        $this->title = $title;
        $this->bodyClass = $bodyClass;
        _ob_start();
        if ($loadBasicCSSAndJS) {
            $this->loadBasicCSSAndJS();
        }
    }

    public function loadBasicCSSAndJS()
    {
        $this->setExtraScripts(
            array(
                'view/css/DataTables/datatables.min.js',
                'view/js/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js'
            )
        );
        $this->setExtraStyles(
            array(
                'view/css/DataTables/datatables.min.css',
                'view/js/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css'
            )
        );
    }

    public function setTitle(string $title)
    {
        $this->title = $title;
    }

    public function setBodyClass(string $bodyClass)
    {
        $this->bodyClass = $bodyClass;
    }

    public function setExtraScripts(array $extraScripts)
    {
        $this->extraScripts = $extraScripts;
    }

    public function setExtraStyles(array $extraStyles)
    {
        $this->extraStyles = $extraStyles;
    }

    public function setInlineStyles(string $inlineStyles)
    {
        $this->inlineStyles = $inlineStyles;
    }

    public function setInlineScripts(string $inlineScripts)
    {
        $this->inlineScripts = $inlineScripts;
    }

    public function setBodyContent(string $bodyContent)
    {
        $this->bodyContent = $bodyContent;
    }

    public function setIncludeNavbar(bool $includeNavbar)
    {
        $this->includeNavbar = $includeNavbar;
    }

    public function setIncludeFooter(bool $includeFooter)
    {
        $this->includeFooter = $includeFooter;
    }

    public function setIncludeInHead(array $includeInHead)
    {
        $this->includeInHead = $includeInHead;
    }

    public function setIncludeInFooter(array $includeInFooter)
    {
        $this->includeInFooter = $includeInFooter;
    }

    public function setIncludeBGAnimation(bool $includeBGAnimation)
    {
        $this->includeBGAnimation = $includeBGAnimation;
    }

    public function getHead()
    {
        global $config, $global;
        if (!is_array($this->title)) {
            $this->title = array($this->title);
        }
        foreach ($this->title as $key => $value) {
            $this->title[$key] = __($value);
        }
        echo "<head>";
        echo getHTMLTitle($this->title);
        //echo "<title>" . implode($config->getPageTitleSeparator(), $this->title) . getSEOComplement() . $config->getPageTitleSeparator() . $config->getWebSiteTitle() . "</title>";
        include $global['systemRootPath'] . 'view/include/head.php';
        if (!empty($this->includeInHead)) {
            foreach ($this->includeInHead as $value) {
                include $global['systemRootPath'] . $value;
            }
        }
        if (!empty($this->extraStyles)) {
            foreach ($this->extraStyles as $style) {
                echo "<link href=\"" . $global['webSiteRootURL'] . $style . "\" rel=\"stylesheet\" type=\"text/css\" />";
            }
        }

        if (!empty($this->inlineStyles)) {
            echo "<style>" . $this->inlineStyles . "</style>";
        }
        echo "</head>";
    }

    public function getNavBar()
    {
        global $global;
        if($this->includeBGAnimation){
            CustomizeUser::autoIncludeBGAnimationFile();
        }
        $redirectUri = getRedirectUri();
        if (stripos($redirectUri, "embed/") !== false) {
            $this->includeNavbar = false;
        }
        if ($this->includeNavbar) {
            // Your navbar HTML
            include $global['systemRootPath'] . 'view/include/navbar.php';
        }
    }

    public function getFooter()
    {
        global $config, $global;
        if ($this->includeFooter) {
            // Your footer HTML
            include $global['systemRootPath'] . 'view/include/footer.php';
        }
        if (!empty($this->includeInFooter)) {
            foreach ($this->includeInFooter as $value) {
                include $global['systemRootPath'] . $value;
            }
        }
        if (!empty($this->extraScripts)) {
            foreach ($this->extraScripts as $script) {
                echo "<script src=\"" . $global['webSiteRootURL'] . $script . "\" type=\"text/javascript\"></script>";
            }
        }
        if (!empty($this->inlineScripts)) {
            echo "<script>" . $this->inlineScripts . "</script>";
        }
    }

    public function getContent()
    {
        global $global;
        $rtl = '';
        if (isRTL()) {
            $rtl = 'rtl';
        }
        echo "<body class=\"{$global['bodyClass']} {$rtl} {$this->bodyClass}\">";
        $this->getNavBar();
        //echo '<div id="_avideoPageContentLoading" class="progress"><div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%"><span class="sr-only">Loading...</span></div></div>';
        //echo '<div id="_avideoPageContent">';
        echo $this->bodyContent;
        //echo '</div>';
        $this->getFooter();
        echo "</body>";
    }

    public function getPage()
    {
        echo "<!DOCTYPE html>";
        echo "<html lang=\"" . getLanguage() . "\">";
        $this->getHead();
        $this->getContent();
        echo "</html>";
    }

    public function print($include_end = true)
    {
        global $config, $global;
        $html = _ob_get_clean();
        _ob_start();
        $this->bodyContent = $html;
        $this->getPage();
        if ($include_end) {
            include $global['systemRootPath'] . 'objects/include_end.php';
        }
    }
}
