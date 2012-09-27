<?php

class DataContainerScreencast
{
    public function getScreencastOptions()
    {
        $objScreencast = Database::getInstance()
            ->query('SELECT s.*, a.title AS archive
                     FROM tl_screencast s
                     INNER JOIN tl_screencast_archive a
                     ON a.id=s.pid
                     ORDER BY a.title, s.sorting');

        $arrOptions = array();
        while ($objScreencast->next()) {
            $arrOptions[$objScreencast->archive][$objScreencast->id] = $objScreencast->title;
        }
        return $arrOptions;
    }
}
