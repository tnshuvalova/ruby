<?php
namespace tshuvalova\PerformanceBundle\DataFixtures\ORM;
 
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use tshuvalova\PerformanceBundle\Entity\Task;
use DateTime;
 
class LoadTaskData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $em)
    {
         $task1 = new Task();
         $task1->setName('Plant daisies');
         $task1->setStatus('in progress');
         $task1->setProject($em->merge($this->getReference('project-daisies')));

         $task2 = new Task();
         $task2->setName('Water daisies');
         $task2->setStatus('in progress');
         $task2->setProject($em->merge($this->getReference('project-daisies')));

         $task3 = new Task();
         $task3->setName('Collect daisies');
         $task3->setStatus('done');
         $task3->setProject($em->merge($this->getReference('project-daisies')));

         $task4 = new Task();
         $task4->setName('Paint daisies');
         $task4->setStatus('done');
         $task4->setProject($em->merge($this->getReference('project-daisies')));

         $task5 = new Task();
         $task5->setName('Plant cornflowers');
         $task5->setStatus('done');
         $task5->setProject($em->merge($this->getReference('project-cornflowers')));

         $task6 = new Task();
         $task6->setName('Water cornflowers');
         $task6->setStatus('done');
         $task6->setProject($em->merge($this->getReference('project-cornflowers')));

         $task7 = new Task();
         $task7->setName('Collect cornflowers');
         $task7->setStatus('done');
         $task7->setProject($em->merge($this->getReference('project-cornflowers')));

         $task8 = new Task();
         $task8->setName('Paint cornflowers');
         $task8->setStatus('delayed');
         $task8->setProject($em->merge($this->getReference('project-cornflowers')));

         $task9 = new Task();
         $task9->setName('Paint violet');
         $task9->setStatus('delayed');
         $task9->setProject($em->merge($this->getReference('project-violet')));

         $task10 = new Task();
         $task10->setName('Plant violet');
         $task10->setStatus('delayed');
         $task10->setProject($em->merge($this->getReference('project-violet')));

         $task11 = new Task();
         $task11->setName('Plant violet');
         $task11->setStatus('to do');
         $task11->setProject($em->merge($this->getReference('project-violet')));


         $task12 = new Task();
         $task12->setName('Plant violet');
         $task12->setStatus('to do');
         $task12->setProject($em->merge($this->getReference('project-violet')));


         $task13 = new Task();
         $task13->setName('Plant daisies');
         $task13->setStatus('delayed');
         $task13->setProject($em->merge($this->getReference('project-daisies')));

         $task14 = new Task();
         $task14->setName('Do cornflowers');
         $task14->setStatus('done');
         $task14->setProject($em->merge($this->getReference('project-cornflowers')));

         $task15 = new Task();
         $task15->setName('Do cornflowers');
         $task15->setStatus('done');
         $task15->setProject($em->merge($this->getReference('project-cornflowers')));


         $task16 = new Task();
         $task16->setName('Do violet');
         $task16->setStatus('delayed');
         $task16->setProject($em->merge($this->getReference('project-violet')));

         $task17 = new Task();
         $task17->setName('Do violet');
         $task17->setStatus('to do');
         $task17->setProject($em->merge($this->getReference('project-violet')));

         $task18 = new Task();
         $task18->setName('Do violet');
         $task18->setStatus('to do');
         $task18->setProject($em->merge($this->getReference('project-violet')));

         $task19 = new Task();
         $task19->setName('Plant grass');
         $task19->setStatus('to do');
         $task19->setProject($em->merge($this->getReference('project-grass')));

         $task20 = new Task();
         $task20->setName('Water grass');
         $task20->setStatus('to do');
         $task20->setProject($em->merge($this->getReference('project-grass')));

         $task21 = new Task();
         $task21->setName('Collect glass');
         $task21->setStatus('to do');
         $task21->setProject($em->merge($this->getReference('project-glass')));

         $task22 = new Task();
         $task22->setName('Plant grass');
         $task22->setStatus('to do');
         $task22->setProject($em->merge($this->getReference('project-grass')));

         $task23 = new Task();
         $task23->setName('Water glass');
         $task23->setStatus('to do');
         $task23->setProject($em->merge($this->getReference('project-glass')));

         $task24 = new Task();
         $task24->setName('Collect grass');
         $task24->setStatus('to do');
         $task24->setProject($em->merge($this->getReference('project-grass')));

         $task25 = new Task();
         $task25->setName('Collect grass');
         $task25->setStatus('to do');
         $task25->setProjectId('NULL');

         $task26 = new Task();
         $task26->setName('Collect grass');
         $task26->setStatus('to do');
         $task26->setProjectId('NULL');

         $task27 = new Task();
         $task27->setName('Collect grass');
         $task27->setStatus('to do');
         $task27->setProjectId('NULL');

         $task28 = new Task();
         $task28->setName('Fix issue');
         $task28->setStatus('to do');
         $task28->setProject($em->merge($this->getReference('project-arage')));

         $task29 = new Task();
         $task29->setName('Fix issue');
         $task29->setStatus('to do');
         $task29->setProject($em->merge($this->getReference('project-arage')));

         $task30 = new Task();
         $task30->setName('Fix issue');
         $task30->setStatus('done');
         $task30->setProject($em->merge($this->getReference('project-arage')));

         $task31 = new Task();
         $task31->setName('Ask user');
         $task31->setStatus('to do');
         $task31->setProject($em->merge($this->getReference('project-arage')));

         $task32 = new Task();
         $task32->setName('Ask user');
         $task32->setStatus('delayed');
         $task32->setProject($em->merge($this->getReference('project-arage')));

         $task33 = new Task();
         $task33->setName('Ask user');
         $task33->setStatus('delayed');
         $task33->setProject($em->merge($this->getReference('project-arage')));

         $task34 = new Task();
         $task34->setName('Ask user');
         $task34->setStatus('to do');
         $task34->setProject($em->merge($this->getReference('project-arage')));

         $task35 = new Task();
         $task35->setName('Make offer');
         $task35->setStatus('done');
         $task35->setProject($em->merge($this->getReference('project-arage')));

         $task36 = new Task();
         $task36->setName('Refund');
         $task36->setStatus('to do');
         $task36->setProject($em->merge($this->getReference('project-arage')));

         $task37 = new Task();
         $task37->setName('Refund');
         $task37->setStatus('to do');
         $task37->setProject($em->merge($this->getReference('project-arage')));

         $task38 = new Task();
         $task38->setName('Refund');
         $task38->setStatus('in progress');
         $task38->setProject($em->merge($this->getReference('project-arage')));

         $task39 = new Task();
         $task39->setName('Refund');
         $task39->setStatus('in progress');
         $task39->setProject($em->merge($this->getReference('project-arage')));

         $task40 = new Task();
         $task40->setName('Deny');
         $task40->setStatus('in progress');
         $task40->setProject($em->merge($this->getReference('project-arage')));

         $task41 = new Task();
         $task41->setName('Ask user');
         $task41->setStatus('to do');
         $task41->setProject($em->merge($this->getReference('project-arage')));

         $task42 = new Task();
         $task42->setName('Fix');
         $task42->setStatus('completed');
         $task42->setProject($em->merge($this->getReference('project-weetcorn')));

         $task43 = new Task();
         $task43->setName('Water grass');
         $task43->setStatus('completed');
         $task43->setProject($em->merge($this->getReference('project-weetcorn')));

         $task44 = new Task();
         $task44->setName('Water grass');
         $task44->setStatus('completed');
         $task44->setProject($em->merge($this->getReference('project-weetcorn')));

         $task45 = new Task();
         $task45->setName('Fix');
         $task45->setStatus('completed');
         $task45->setProject($em->merge($this->getReference('project-weetcorn')));

         $task46 = new Task();
         $task46->setName('Do violet');
         $task46->setStatus('completed');
         $task46->setProject($em->merge($this->getReference('project-weetcorn')));

         $task47 = new Task();
         $task47->setName('Fix');
         $task47->setStatus('completed');
         $task47->setProject($em->merge($this->getReference('project-weetcorn')));

         $task48 = new Task();
         $task48->setName('Water grass');
         $task48->setStatus('completed');
         $task48->setProject($em->merge($this->getReference('project-weetcorn')));

         $task49 = new Task();
         $task49->setName('Do violet');
         $task49->setStatus('completed');
         $task49->setProject($em->merge($this->getReference('project-weetcorn')));

         $task50 = new Task();
         $task50->setName('Fix');
         $task50->setStatus('completed');
         $task50->setProject($em->merge($this->getReference('project-weetcorn')));

         $task51 = new Task();
         $task51->setName('Do violet');
         $task51->setStatus('completed');
         $task51->setProject($em->merge($this->getReference('project-weetcorn')));

         $task52 = new Task();
         $task52->setName('Fix');
         $task52->setStatus('completed');
         $task52->setProject($em->merge($this->getReference('project-weetcorn')));

         $task53 = new Task();
         $task53->setName('Paint daisies');
         $task53->setStatus('completed');
         $task53->setProject($em->merge($this->getReference('project-weetcorn')));

         $task54 = new Task();
         $task54->setName('Fix');
         $task54->setStatus('completed');
         $task54->setProject($em->merge($this->getReference('project-weetcorn')));

         $task55 = new Task();
         $task55->setName('Do violet');
         $task55->setStatus('not completed');
         $task55->setProject($em->merge($this->getReference('project-weetcorn')));

         $task56 = new Task();
         $task56->setName('Fix');
         $task56->setStatus('not completed');
         $task56->setProject($em->merge($this->getReference('project-weetcorn')));

         $task57 = new Task();
         $task57->setName('Do violet');
         $task57->setStatus('not completed');
         $task57->setProject($em->merge($this->getReference('project-weetcorn')));

         $task58 = new Task();
         $task58->setName('Water grass');
         $task58->setStatus('not completed');
         $task58->setProject($em->merge($this->getReference('project-weetcorn')));

         $task59 = new Task();
         $task59->setName('Fix');
         $task59->setStatus('not completed');
         $task59->setProject($em->merge($this->getReference('project-weetcorn')));

         $task60 = new Task();
         $task60->setName('Paint daisies');
         $task60->setStatus('completed');
         $task60->setProject($em->merge($this->getReference('project-weetcorn')));

         $task61 = new Task();
         $task61->setName('Create');
         $task61->setStatus('completed');
         $task61->setProject($em->merge($this->getReference('project-weetcorn')));

         $task62 = new Task();
         $task62->setName('Create');
         $task62->setStatus('completed');
         $task62->setProject($em->merge($this->getReference('project-weetcorn')));

         $task63 = new Task();
         $task63->setName('Plant grass');
         $task63->setStatus('completed');
         $task63->setProject($em->merge($this->getReference('project-cup')));

         $task64 = new Task();
         $task64->setName('Water grass');
         $task64->setStatus('completed');
         $task64->setProject($em->merge($this->getReference('project-cup')));

         $task65 = new Task();
         $task65->setName('Fix');
         $task65->setStatus('completed');
         $task65->setProject($em->merge($this->getReference('project-cup')));

         $task66 = new Task();
         $task66->setName('Create');
         $task66->setStatus('completed');
         $task66->setProject($em->merge($this->getReference('project-cup')));

         $task67 = new Task();
         $task67->setName('Fix');
         $task67->setStatus('completed');
         $task67->setProject($em->merge($this->getReference('project-cup')));

         $task68 = new Task();
         $task68->setName('Create');
         $task68->setStatus('completed');
         $task68->setProject($em->merge($this->getReference('project-cup')));

         $task69 = new Task();
         $task69->setName('Paint daisies');
         $task69->setStatus('completed');
         $task69->setProject($em->merge($this->getReference('project-cup')));

         $task70 = new Task();
         $task70->setName('Fix');
         $task70->setStatus('completed');
         $task70->setProject($em->merge($this->getReference('project-cup')));

         $task71 = new Task();
         $task71->setName('Create');
         $task71->setStatus('completed');
         $task71->setProject($em->merge($this->getReference('project-cup')));

         $task72 = new Task();
         $task72->setName('Paint daisies');
         $task72->setStatus('not completed');
         $task72->setProject($em->merge($this->getReference('project-cup')));

         $task73 = new Task();
         $task73->setName('Fix');
         $task73->setStatus('not completed');
         $task73->setProject($em->merge($this->getReference('project-cup')));

         $task74 = new Task();
         $task74->setName('Plant grass');
         $task74->setStatus('not completed');
         $task74->setProjectId(12);

         $task75 = new Task();
         $task75->setName('Plant grass');
         $task75->setStatus('not completed');
         $task75->setProject($em->merge($this->getReference('project-cup')));

         $task76 = new Task();
         $task76->setName('Fix');
         $task76->setStatus('not completed');
         $task76->setProject($em->merge($this->getReference('project-cup')));

         $allTasks = [$task1,$task2,$task3,$task4, $task5,$task6,$task7,$task8,$task9,$task10,$task11,$task12,$task13,$task14,$task15,$task16,$task17,$task18,$task19,$task20,$task21,$task22,$task23,$task24,$task25,$task26,$task27,$task28,$task29,$task30,$task31,$task32,$task33,$task34, $task35,$task36,$task37,$task38,$task39,$task40,$task41,$task42,$task43,$task44, $task45,$task46,$task47,$task48,$task49,$task50,$task51,$task52,$task53,$task54, $task55,$task56,$task57,$task58,$task59,$task60,$task61,$task62,$task63,$task64, $task65,$task66,$task67,$task68,$task69,$task70,$task71,$task72,$task73,$task74, $task75,$task76];

        for($i = 0; $i < count($allTasks); $i++)
        {
            $mon = ($i+100)%12;
            $d = ($i+100)%31;
            $dt = new DateTime("$mon/$d/2014");
            $allTasks[$i]->setDate($dt);
        }


         $em->persist($task1);
         $em->persist($task2);
         $em->persist($task3);
         $em->persist($task4);
         $em->persist($task5);
         $em->persist($task6);
         $em->persist($task7);
         $em->persist($task8);
         $em->persist($task9);
         $em->persist($task10);
         $em->persist($task11);
         $em->persist($task12);
         $em->persist($task13);
         $em->persist($task14);
         $em->persist($task15);
         $em->persist($task16);
         $em->persist($task17);
         $em->persist($task18);
         $em->persist($task19);
         $em->persist($task20);
         $em->persist($task21);
         $em->persist($task22);
         $em->persist($task23);
         $em->persist($task24);
         $em->persist($task25);
         $em->persist($task26);
         $em->persist($task27);
         $em->persist($task28);
         $em->persist($task29);
         $em->persist($task30);
         $em->persist($task31);
         $em->persist($task32);
         $em->persist($task33);
         $em->persist($task34);
         $em->persist($task35);
         $em->persist($task36);
         $em->persist($task37);
         $em->persist($task38);
         $em->persist($task39);
         $em->persist($task40);
         $em->persist($task41);
         $em->persist($task42);
         $em->persist($task43);
         $em->persist($task44);
         $em->persist($task45);
         $em->persist($task46);
         $em->persist($task47);
         $em->persist($task48);
         $em->persist($task49);
         $em->persist($task50);
         $em->persist($task51);
         $em->persist($task52);
         $em->persist($task53);
         $em->persist($task54);
         $em->persist($task55);
         $em->persist($task56);
         $em->persist($task57);
         $em->persist($task58);
         $em->persist($task59);
         $em->persist($task60);
         $em->persist($task61);
         $em->persist($task62);
         $em->persist($task63);
         $em->persist($task64);
         $em->persist($task65);
         $em->persist($task66);
         $em->persist($task67);
         $em->persist($task68);
         $em->persist($task69);
         $em->persist($task70);
         $em->persist($task71);
         $em->persist($task72);
         $em->persist($task73);
         $em->persist($task74);
         $em->persist($task75);
         $em->persist($task76);
         $em->flush();
    }
 
    public function getOrder()
    {
        return 2; // the order in which fixtures will be loaded
    }
}
