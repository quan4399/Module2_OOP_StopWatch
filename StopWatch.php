<?php
/*StopWatch
------------------
- private $startTime: int
- private $endTime: int
------------------
+ __construct(startTime): System time
+ getStartTime()
+ getEndTime()
+ start(): void
+ stop(): void
+ getElapsedTime(): time milisecond s
 */

class StopWatch
{
    private $startTime;
    private $endTime;

    public function __construct()
    {
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $this->startTime = date("H:i:s");
        $this->endTime = date("H:i:s");
    }

    public function start()
    {
        return $this->startTime;
    }

    public function stop()
    {
        return $this->endTime;
    }

    public function getElapsedTime()
    {
        $timeStartStr = substr($this->startTime, -1, 2);
        $timeStartNum = (int)$timeStartStr;
        $timeEndStr = substr($this->endTime, -1, 2);
        $timeEndNum = (int)$timeEndStr;
        return  ($timeEndNum - $timeStartNum) * 1000 ;
    }
}