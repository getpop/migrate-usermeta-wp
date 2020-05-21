<?php
$class = (new class() extends \PoP\Root\Component\AbstractComponent
{
    public static function getDependedComponentClasses(): array
    {
        return [];
    }

    /**
     * Boot component
     *
     * @return void
     */
    public static function beforeBoot(): void
    {
        parent::beforeBoot();

        // Initialize code
        require_once 'migrate/pop-usermeta-wp.php';
    }
});
$class::initialize();
