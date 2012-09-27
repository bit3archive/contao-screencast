<?php

class ModuleScreencastList extends Module
{
	/**
	 * Template
	 * @var string
	 */
	protected $strTemplate = 'mod_screencast_list';

    /**
     * Compile the current element
     */
    protected function compile()
    {
        $time = time();

        $objScreencast = Database::getInstance()
            ->prepare('SELECT s.*, a.title AS `archive`
                       FROM tl_screencast s
                       INNER JOIN tl_screencast_archive a
                       ON a.id=s.pid
                       WHERE s.pid=?
                       AND a.published=?
                       AND (a.start=? OR a.start<?)
                       AND (a.stop=? OR a.stop>?)
                       AND s.published=?
                       AND (s.start=? OR s.start<?)
                       AND (s.stop=? OR s.stop>?)
                       ORDER BY s.sorting')
            ->execute($this->screencast_archives, 1, '', $time, '', $time, 1, '', $time, '', $time);

        $this->Template->screencasts = $objScreencast->fetchAllAssoc();
    }
}