<?php


namespace BEAPITest;


use Goutte\Client;
use PHPUnit\Framework\TestCase;

class FunctionnalPostsTest extends TestCase
{
    public function testIndexPage()
    {
        $client = new Client();

        $crawler = $client->request('GET', 'http://localhost:8080/');

        $this->assertStringContainsString(
            'Mon super site',
            $crawler->filter('.site-title > a')->text(),
        );
    }

    public function testLoginPage()
    {
        $client = new Client();

        $crawler = $client->request('GET', 'http://localhost:8080/wp-admin/');

        // Debug :
        // var_dump($client->getResponse()->getContent());

        $this->assertEquals(200, $client->getResponse()->getStatusCode());
        $form = $crawler->filter('#loginform')->form([
            'log' => 'romain',
            'pwd' => 'romain',
        ]);

        $crawler = $client->submit($form);

        $this->assertEquals(200, $client->getResponse()->getStatusCode());
        $this->assertStringContainsString(
            'Bonjour, romainromain',
            $crawler->text()
        );
    }
}