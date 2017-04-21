<?php

namespace Tests\AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class CommentControllerTest extends WebTestCase
{
    public function testIndex()
    {
//        sukuriamas dirbtinis vartotojas, testuojama ar veikia puslapis (grazina HTTP 200)
        $client = static::createClient();
        $crawler = $client->request('GET', '/');
        $this->assertEquals(200, $client->getResponse()->getStatusCode());

//        formos testavimas
        $form = $crawler->selectButton('Komentuoti')->form();
        $form['appbundle_comment[name]'] = 'WebTestCase';
        $form['appbundle_comment[text]'] = 'funkcinis testas';
        $crawler = $client->submit($form);


//
//        $this->assertGreaterThan(0, $crawler->filter('img')->count());
//        var_dump($crawler->filter('img')->count());
    }
}
