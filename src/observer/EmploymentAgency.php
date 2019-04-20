<?php
/**
 * Created by PhpStorm.
 * User: genom
 * Date: 4/20/19
 * Time: 11:15 AM
 */

namespace src\observer;


class EmploymentAgency
{
    protected $observers = [];

    protected function notify(JobPost $jobPosting)
    {
        foreach ($this->observers as $observer) {
            $observer->onJobPosted($jobPosting);
        }
    }

    public function attach(JobSeeker $observer)
    {
        $this->observers[] = $observer;
    }

    public function addJob(JobPost $jobPosting)
    {
        $this->notify($jobPosting);
    }
}