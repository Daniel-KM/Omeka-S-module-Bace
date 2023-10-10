BACE (module pour Omeka S)
==========================

> __Les nouvelles versions de ce modules et l’assistance pour Omeka S version 3.0
> et supérieur sont disponibles sur [GitLab], qui semble mieux respecter les
> utilisateurs et la vie privée que le précédent entrepôt.__

See [English readme].

[BACE] est un module pour [Omeka S] qui ajoute des fonctionnalités pour la base
BACE.


Installation
------------

Consulter la documentation utilisateur pour [installer un module].

Le module optionel [Generic] peut être installé en premier.

Le module utilise une bibliothèque externe : utilisez le zip pour installer le
module ou utilisez et initialisez la source.

* À partir du zip

Télécharger la dernière livraison [Bace.zip] depuis la liste des livraisons (la
source principale ne contient pas la dépendance) et décompresser le dans le
dossier `modules`.

* Depuis la source et pour le développement

Si le module est installé depuis la source, renommez le nom du dossier du module
en `Bace`, puis allez à la racine du module et lancez :

```sh
composer install --no-dev
```


Avertissement
-------------

À utiliser à vos propres risques.

Il est toujours recommandé de sauvegarder vos fichiers et vos bases de données
et de vérifier vos archives régulièrement afin de pouvoir les reconstituer si
nécessaire.


Dépannage
---------

Voir les problèmes en ligne sur la page des [questions du module] du GitLab.


Licence
-------

Ce module est publié sous la licence [CeCILL v2.1], compatible avec [GNU/GPL] et
approuvée par la [FSF] et l’[OSI].

Ce logiciel est régi par la licence CeCILL de droit français et respecte les
règles de distribution des logiciels libres. Vous pouvez utiliser, modifier
et/ou redistribuer le logiciel selon les termes de la licence CeCILL telle que
diffusée par le CEA, le CNRS et l’INRIA à l’URL suivante "http://www.cecill.info".

En contrepartie de l’accès au code source et des droits de copie, de
modification et de redistribution accordée par la licence, les utilisateurs ne
bénéficient que d’une garantie limitée et l’auteur du logiciel, le détenteur des
droits patrimoniaux, et les concédants successifs n’ont qu’une responsabilité
limitée.

À cet égard, l’attention de l’utilisateur est attirée sur les risques liés au
chargement, à l’utilisation, à la modification et/ou au développement ou à la
reproduction du logiciel par l’utilisateur compte tenu de son statut spécifique
de logiciel libre, qui peut signifier qu’il est compliqué à manipuler, et qui
signifie donc aussi qu’il est réservé aux développeurs et aux professionnels
expérimentés ayant des connaissances informatiques approfondies. Les
utilisateurs sont donc encouragés à charger et à tester l’adéquation du logiciel
à leurs besoins dans des conditions permettant d’assurer la sécurité de leurs
systèmes et/ou de leurs données et, plus généralement, à l’utiliser et à
l’exploiter dans les mêmes conditions en matière de sécurité.

Le fait que vous lisez actuellement ce document signifie que vous avez pris
connaissance de la licence CeCILL et que vous en acceptez les termes.

* La bibliothèque [chosen-jquery] est publiée sous licence.


Copyright
---------

* Copyright Daniel Berthereau, 2023 (voir [Daniel-KM] sur GitLab)
* Bibliothèque [chosen-jquery]


[BACE]: https://gitlab.com/Daniel-KM/Omeka-S-module-Bace
[English readme]: https://gitlab.com/Daniel-KM/Omeka-S-module-Bace/-/blob/master/README.md
[Omeka S]: https://omeka.org/s
[installer un module]: https://omeka.org/s/docs/user-manual/modules/#installing-modules
[Generic]: https://gitlab.com/Daniel-KM/Omeka-S-module-Generic
[Bace.zip]: https://gitlab.com/Daniel-KM/Omeka-S-module-Bace/-/releases
[questions du module]: https://gitlab.com/Daniel-KM/Omeka-S-module-Bace/-/issues
[CeCILL v2.1]: https://www.cecill.info/licences/Licence_CeCILL_V2.1-en.html
[GNU/GPL]: https://www.gnu.org/licenses/gpl-3.0.html
[FSF]: https://www.fsf.org
[OSI]: http://opensource.org
[MIT]: http://opensource.org/licenses/MIT
[GitLab]: https://gitlab.com/Daniel-KM
[Daniel-KM]: https://gitlab.com/Daniel-KM "Daniel Berthereau"
