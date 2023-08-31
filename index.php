<?php
/*
 * Dans ce travail, vous devez créer une class Person qui hérite de la classe Human.
 * De plus, dans la classe Person, il vous faut récupérer le nom qui est une variable protégé.
 * À la fin, vous devez me faire afficher, via la commande echo, le nom de la personne ainsi
 * que son âge.
 *
 * ATTENTION! LORS DE L'INSTANCIATION DE LA CLASSE, VOUS DEVREZ LUI PASSER LES VALEURS!
 *
 * Pour ce travail, vous devrez probablement utiliser les fonctions suivante:
 * __construct (https://www.php.net/manual/fr/language.oop5.decon.php)
 * getter (https://www.phpflow.com/php/access-specifiers-in-php-public-private-and-protected/)
 * extends (https://www.w3schools.in/php/inheritance)
 *
 +------------------------------------------------------------------------------+
|              Grille d'évaluation pour l'implémentation de la classe           |
+----+--------------------------------------------------------------------------+
| #  | Critère                                                                  |
+----+--------------------------------------------------------------------------+
|  1 | Création de la classe Person qui hérite de la classe Human (25%)         |
|    | - La classe Person est correctement créée et hérite de Human             |
|    | - La relation d'héritage est établie correctement                        |
+----+--------------------------------------------------------------------------+
|  2 | Récupération du nom (variable protégée) dans la classe Person (15%)      |
|    | - Le nom (variable protégée) est correctement récupéré dans la classe    |
|    |   Person                                                                 |
+----+--------------------------------------------------------------------------+
|  3 | Implémentation des getters et des setters pour la classe Person (25%)    |
|    | - Les getters (accesseurs) sont implémentés correctement pour obtenir le |
|    |   nom et l'âge de la personne                                            |
|    | - Les setters (mutateurs) sont implémentés correctement pour modifier le |
|    |   nom et l'âge de la personne                                            |
+----+--------------------------------------------------------------------------+
|  4 | Affichage du nom et de l'âge de la personne avec la commande echo  (10%) |
|    | - Le nom et l'âge de la personne sont correctement affichés via la       |
|    |   commande echo                                                          |
+----+--------------------------------------------------------------------------+
|  5 | Respect des bonnes pratiques de programmation (15%)                      |
|    | - La classe et ses méthodes sont correctement nommées et descriptives    |
|    | - Le code est bien structuré et facile à comprendre                      |
|    | - Les commentaires sont utilisés lorsque nécessaire                      |
+----+--------------------------------------------------------------------------+
|  6 | Test et validation (10%)                                                 |
|    | - La classe est testée avec différents scénarios pour vérifier           |
|    |   le bon fonctionnement des getters, setters et de l'affichage           |
|    | - Le code fonctionne sans erreurs et répond aux exigences spécifiées     |
+----+--------------------------------------------------------------------------+
Bonne chance!
 */
class Human {
    protected $name;
    public function __construct($name){
        $this->name = $name;
    }

    public function getName() {
        return $this->name;
    }

    public function setName($newName){
        $this->name = $newName;
    }
}

class Person extends Human {
    protected $age;

    public function __construct($name, $age){
        parent::__construct($name);
        $this->age = $age;
    }

    public function getAge() {
        return $this->age;
    }

    public function setAge($newAge){
        $this->age = $newAge;
    }
}

$person1 = new Person('Bob', '33');
$person2 = new Person('Pedro', '44');

echo $person1->getName() . '<br>';
echo $person1->getAge() . '<br>' . '<br>';

echo $person2->getName() . '<br>';
echo $person2->getAge() . '<br>' . '<br>';

$person1->setName('John');
$person1->setAge('22');

$person2->setName('Peter');
$person2->setAge('55');

echo $person1->getName() . '<br>';
echo $person1->getAge() . '<br>' . '<br>';

echo $person2->getName() . '<br>';
echo $person2->getAge() . '<br>' . '<br>';