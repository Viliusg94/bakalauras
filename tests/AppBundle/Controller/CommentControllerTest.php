<?php

namespace Tests\AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class CommentControllerTest extends WebTestCase
{
    
    /**
     * Formos testavimas
     */
    public function testCommentForm()
    {
        $client = static::createClient();
        $crawler = $client->request('GET', '/');

        $form = $crawler->selectButton('Komentuoti')->form();
        $form['appbundle_comment[name]'] = 'WebTestCase';
        $form['appbundle_comment[text]'] = 'funkcinis testas2';
        $client->submit($form);
    }

    /**
     * Ar užsikrauna visi image?
     */
    public function testImg()
    {
        $client = static::createClient();
        $crawler = $client->request('GET', '/');

        $result = $crawler
            ->filterXpath('//img')
            ->extract(array('src'));
        $target_domain = 'http://localhost:7777/';

        foreach ($result as $image) {
            $file = file_get_contents($target_domain . $image);
        }
    }

}
