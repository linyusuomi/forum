<?php

// src/Ens/ForumBundle/DataFixtures/ORM/LoadPostData.php
namespace Ens\ForumBundle\DataFixtures\ORM;
 
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Ens\ForumBundle\Entity\Post;
 
class LoadPostData extends AbstractFixture implements OrderedFixtureInterface
{
  public function load(ObjectManager $em)
  {
    $post = new Post();
    $post->setName("Yulin");
    $post->setText("hello world");
    $post->setImage("web/images/test.gif");

 
    $em->persist($post);

    $em->flush();
  }
 
  public function getOrder()
  {
    return 1; // the order in which fixtures will be loaded
  }
}