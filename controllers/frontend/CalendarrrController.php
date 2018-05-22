<?php

namespace kouosl\calendarrr\controllers\frontend;


class CalendarrrController extends \kouosl\base\controllers\backend\BaseController
{
    public function actionIndex()
    {
        return $this->render('_index');
    }
}
