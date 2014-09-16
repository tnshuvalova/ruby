<?php
namespace tshuvalova\PerformanceBundle\DataFixtures\ORM;
 
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use tshuvalova\PerformanceBundle\Entity\Project;
 
class LoadProjectData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $em)
    {
        $daisies = new Project();
        $daisies->setName('Red daisies');
	$daisies->setDescription('Lorem ipsum dolor sit amet, consectetur adipiscing elit. An haec ab eo non dicuntur? Philosophi autem in suis lectulis plerumque moriuntur. Haec quo modo conveniant, non sane intellego. Duo Reges: constructio interrete. Honesta oratio, Socratica, Platonis etiam. Apparet statim, quae sint officia, quae actiones. Collige omnia, quae soletis: Praesidium amicorum. Quae animi affectio suum cuique tribuens atque hanc, quam dico. Erat enim res aperta. Aliter enim nosmet ipsos nosse non possumus. Faceres tu quidem, Torquate, haec omnia;');

        $cornflowers = new Project();
        $cornflowers->setName('Yellow cornflowers');
	$cornflowers->setDescription('Lorem ipsum dolor sit amet, consectetur adipiscing elit. An haec ab eo non dicuntur? Philosophi autem in suis lectulis plerumque moriuntur. Haec quo modo conveniant, non sane intellego. Duo Reges: constructio interrete. Honesta oratio, Socratica, Platonis etiam. Apparet statim, quae sint officia, quae actiones. Collige omnia, quae soletis: Praesidium amicorum. Quae animi affectio suum cuique tribuens atque hanc, quam dico. Erat enim res aperta. Aliter enim nosmet ipsos nosse non possumus. Faceres tu quidem, Torquate, haec omnia; ');

        $violet = new Project();
        $violet->setName('Green violet');
	$violet->setDescription('Lorem ipsum dolor sit amet, consectetur adipiscing elit. An haec ab eo non dicuntur? Philosophi autem in suis lectulis plerumque moriuntur. Haec quo modo conveniant, non sane intellego. Duo Reges: constructio interrete. Honesta oratio, Socratica, Platonis etiam. Apparet statim, quae sint officia, quae actiones. Collige omnia, quae soletis: Praesidium amicorum. Quae animi affectio suum cuique tribuens atque hanc, quam dico. Erat enim res aperta. Aliter enim nosmet ipsos nosse non possumus. Faceres tu quidem, Torquate, haec omnia;');

        $glass = new Project();
        $glass->setName('Narrow glass');
	$glass->setDescription('Lorem ipsum dolor sit amet, consectetur adipiscing elit. An haec ab eo non dicuntur? Philosophi autem in suis lectulis plerumque moriuntur. Haec quo modo conveniant, non sane intellego. Duo Reges: constructio interrete. Honesta oratio, Socratica, Platonis etiam. Apparet statim, quae sint officia, quae actiones. Collige omnia, quae soletis: Praesidium amicorum. Quae animi affectio suum cuique tribuens atque hanc, quam dico. Erat enim res aperta. Aliter enim nosmet ipsos nosse non possumus. Faceres tu quidem, Torquate, haec omnia;');

        $grass = new Project();
        $grass->setName('Napalm grass');
	$grass->setDescription('Lorem ipsum dolor sit amet, consectetur adipiscing elit. An haec ab eo non dicuntur? Philosophi autem in suis lectulis plerumque moriuntur. Haec quo modo conveniant, non sane intellego. Duo Reges: constructio interrete. Honesta oratio, Socratica, Platonis etiam. Apparet statim, quae sint officia, quae actiones. Collige omnia, quae soletis: Praesidium amicorum. Quae animi affectio suum cuique tribuens atque hanc, quam dico. Erat enim res aperta. Aliter enim nosmet ipsos nosse non possumus. Faceres tu quidem, Torquate, haec omnia;');

        $fish = new Project();
        $fish->setName('Sparkling fish');
	$fish->setDescription('Lorem ipsum dolor sit amet, consectetur adipiscing elit. An haec ab eo non dicuntur? Philosophi autem in suis lectulis plerumque moriuntur. Haec quo modo conveniant, non sane intellego. Duo Reges: constructio interrete. Honesta oratio, Socratica, Platonis etiam. Apparet statim, quae sint officia, quae actiones. Collige omnia, quae soletis: Praesidium amicorum. Quae animi affectio suum cuique tribuens atque hanc, quam dico. Erat enim res aperta. Aliter enim nosmet ipsos nosse non possumus. Faceres tu quidem, Torquate, haec omnia;');

        $apple = new Project();
        $apple->setName('Dark apple');
	$apple->setDescription('Lorem ipsum dolor sit amet, consectetur adipiscing elit. An haec ab eo non dicuntur? Philosophi autem in suis lectulis plerumque moriuntur. Haec quo modo conveniant, non sane intellego. Duo Reges: constructio interrete. Honesta oratio, Socratica, Platonis etiam. Apparet statim, quae sint officia, quae actiones. Collige omnia, quae soletis: Praesidium amicorum. Quae animi affectio suum cuique tribuens atque hanc, quam dico. Erat enim res aperta. Aliter enim nosmet ipsos nosse non possumus. Faceres tu quidem, Torquate, haec omnia;');

        $cucumber = new Project();
        $cucumber->setName('Armed cucumber');
	$cucumber->setDescription('Lorem ipsum dolor sit amet, consectetur adipiscing elit. An haec ab eo non dicuntur? Philosophi autem in suis lectulis plerumque moriuntur. Haec quo modo conveniant, non sane intellego. Duo Reges: constructio interrete. Honesta oratio, Socratica, Platonis etiam. Apparet statim, quae sint officia, quae actiones. Collige omnia, quae soletis: Praesidium amicorum. Quae animi affectio suum cuique tribuens atque hanc, quam dico. Erat enim res aperta. Aliter enim nosmet ipsos nosse non possumus. Faceres tu quidem, Torquate, haec omnia;');

        $unda = new Project();
        $unda->setName('Peppered unda');
	$unda->setDescription('Lorem ipsum dolor sit amet, consectetur adipiscing elit. An haec ab eo non dicuntur? Philosophi autem in suis lectulis plerumque moriuntur. Haec quo modo conveniant, non sane intellego. Duo Reges: constructio interrete. Honesta oratio, Socratica, Platonis etiam. Apparet statim, quae sint officia, quae actiones. Collige omnia, quae soletis: Praesidium amicorum. Quae animi affectio suum cuique tribuens atque hanc, quam dico. Erat enim res aperta. Aliter enim nosmet ipsos nosse non possumus. Faceres tu quidem, Torquate, haec omnia;');

        $arage = new Project();
        $arage->setName('Garage');
	$arage->setDescription('Lorem ipsum dolor sit amet, consectetur adipiscing elit. An haec ab eo non dicuntur? Philosophi autem in suis lectulis plerumque moriuntur. Haec quo modo conveniant, non sane intellego. Duo Reges: constructio interrete. Honesta oratio, Socratica, Platonis etiam. Apparet statim, quae sint officia, quae actiones. Collige omnia, quae soletis: Praesidium amicorum. Quae animi affectio suum cuique tribuens atque hanc, quam dico. Erat enim res aperta. Aliter enim nosmet ipsos nosse non possumus. Faceres tu quidem, Torquate, haec omnia;');

        $weetcorn = new Project();
        $weetcorn->setName('Sweetcorn');
	$weetcorn->setDescription('Lorem ipsum dolor sit amet, consectetur adipiscing elit. An haec ab eo non dicuntur? Philosophi autem in suis lectulis plerumque moriuntur. Haec quo modo conveniant, non sane intellego. Duo Reges: constructio interrete. Honesta oratio, Socratica, Platonis etiam. Apparet statim, quae sint officia, quae actiones. Collige omnia, quae soletis: Praesidium amicorum. Quae animi affectio suum cuique tribuens atque hanc, quam dico. Erat enim res aperta. Aliter enim nosmet ipsos nosse non possumus. Faceres tu quidem, Torquate, haec omnia;');

        $cup = new Project();
        $cup->setName('Green cup');
	$cup->setDescription('Lorem ipsum dolor sit amet, consectetur adipiscing elit. An haec ab eo non dicuntur? Philosophi autem in suis lectulis plerumque moriuntur. Haec quo modo conveniant, non sane intellego. Duo Reges: constructio interrete. Honesta oratio, Socratica, Platonis etiam. Apparet statim, quae sint officia, quae actiones. Collige omnia, quae soletis: Praesidium amicorum. Quae animi affectio suum cuique tribuens atque hanc, quam dico. Erat enim res aperta. Aliter enim nosmet ipsos nosse non possumus. Faceres tu quidem, Torquate, haec omnia;');

        $em->persist($daisies);
        $em->persist($cornflowers);
        $em->persist($violet);
        $em->persist($glass);
        $em->persist($grass);
        $em->persist($fish);
        $em->persist($apple);
        $em->persist($cucumber);
        $em->persist($unda);
        $em->persist($arage);
        $em->persist($weetcorn);
        $em->persist($cup);
        $em->flush();
 
        $this->addReference('project-daisies', $daisies);
        $this->addReference('project-cornflowers', $cornflowers);
        $this->addReference('project-violet', $violet);
        $this->addReference('project-glass', $glass);
        $this->addReference('project-grass', $grass);
        $this->addReference('project-fish', $fish);
        $this->addReference('project-apple', $apple);
        $this->addReference('project-cucumber', $cucumber);
        $this->addReference('project-unda', $unda);
        $this->addReference('project-arage', $arage);
        $this->addReference('project-weetcorn', $weetcorn);
        $this->addReference('project-cup', $cup);

    }
 
    public function getOrder()
    {
        return 1; // the order in which fixtures will be loaded
    }
}
