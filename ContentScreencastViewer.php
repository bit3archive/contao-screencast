<?php

class ContentScreencastViewer extends ContentElement
{
	/**
	 * Template
	 * @var string
	 */
	protected $strTemplate = 'ce_screencast_viewer';

    /**
     * Compile the current element
     */
    protected function compile()
    {
        $time = time();

        $objScreencast = Database::getInstance()
            ->prepare('SELECT s.*
                       FROM tl_screencast s
                       INNER JOIN tl_screencast_archive a
                       ON a.id=s.pid
                       WHERE s.id=?
                       AND a.published=?
                       AND (a.start=? OR a.start<?)
                       AND (a.stop=? OR a.stop>?)
                       AND s.published=?
                       AND (s.start=? OR s.start<?)
                       AND (s.stop=? OR s.stop>?)')
            ->execute($this->screencast, 1, '', $time, '', $time, 1, '', $time, '', $time);

        if ($objScreencast->next()) {
            $this->Template->screencast = $objScreencast->row();
        }
    }
}
