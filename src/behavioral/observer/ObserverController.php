<?php
/**
 * Created by PhpStorm.
 * User: genom
 * Date: 4/20/19
 * Time: 11:12 AM
 */

namespace src\behavioral\observer;


use src\BaseController;

class ObserverController extends BaseController
{

    public function index()
    {
        // Create subscribers
        $johnDoe = new JobSeeker('John Doe');
        $janeDoe = new JobSeeker('Jane Doe');

        // Create publisher and attach subscribers
        $jobPostings = new EmploymentAgency();
        $jobPostings->attach($johnDoe);
        $jobPostings->attach($janeDoe);

        // Add a new job and see if subscribers get notified
        $jobPostings->addJob(new JobPost('Software Engineer'));

        // Output
        // Hi John Doe! New job posted: Software Engineer
        // Hi Jane Doe! New job posted: Software Engineer
    }

    public function getDescription()
    {
        // TODO: Implement getDescription() method.
    }
}