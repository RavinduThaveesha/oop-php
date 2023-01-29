<?php

interface Newsletter {

    public function subscribe($email);

}

class CampaingMonitor implements Newsletter {

    public function subscribe($email)
    {
        die('Camping Monitor');
    }
}

class Drip implements Newsletter {

    public function subscribe($email)
    {
        die('Drip');
    }
}


class NewsletterSubscription  {

    public function store(Newsletter $newsletter)
    {
        $newsletter->subscribe('test@email.com');
    }

}

$newsletter = new NewsletterSubscription();
$newsletter->store(new Drip());