<?php
/**
 * Created by PhpStorm.
 * User: genom
 * Date: 4/20/19
 * Time: 11:12 AM
 */

namespace src\observer;

class JobSeeker
{
    protected $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function onJobPosted(JobPost $job)
    {
        // Do something with the job posting
        echo 'Hi ' . $this->name . '! New job posted: '. $job->getTitle();
        echo '<br />';
    }
}