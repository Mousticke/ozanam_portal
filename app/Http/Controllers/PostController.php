<?php
/**
 * Created by PhpStorm.
 * User: Akim
 * Date: 03/05/2016
 * Time: 13:31
 */
namespace App\Http\Controllers;

use App\Color;
use App\Carousel;
use App\File;
use App\Link;
use App\Menu;
use App\Post;
use App\Timeline;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;


class PostController extends Controller
{

    /**
     * Retourne la dashboard avec tous les posts crées suivant l'ordre décroissant
     * @return mixed
     */
    public function getDashboard ()
    {
        $string = <<<XML
        <rss xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:exist="http://exist.sourceforge.net/NS/exist" xmlns:marc="http://www.loc.gov/MARC21/slim" xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:dcterms="http://purl.org/dc/terms/" xmlns:opensearch="http://a9.com/-/spec/opensearch/1.1/" version="2.0">
            <channel>
<title>Spécial Mangas</title>
<link>
http://0511147v.esidoc.fr/search.php?lookfor=%220511147v_3439%22+OU+%220511147v_10986%22+OU+%220511147v_7667%22+OU+%220511147v_10155%22+OU+%220511147v_16436%22+OU+%220511147v_720%22+OU+%220511147v_5805%22+OU+%220511147v_7%22+OU+%220511147v_11393%22+OU+%220511147v_1842%22&amp;type=id
</link>
<language>fr</language>
<pubDate>Fri, 03 Jun 2016 08:46:39 +0200</pubDate>
<generator>e-sidoc Webservice</generator>
<image>
<title>
<![CDATA[ e-sidoc CDI - LYCEE PRIVE FREDERIC OZANAM ]]>
</title>
<url>
http://static.esidoc.fr/sites/all/themes/biblio/template03/images/logo-bg-footer.png
</url>
<link>
http://0511147v.esidoc.fr/search.php?lookfor=%220511147v_3439%22+OU+%220511147v_10986%22+OU+%220511147v_7667%22+OU+%220511147v_10155%22+OU+%220511147v_16436%22+OU+%220511147v_720%22+OU+%220511147v_5805%22+OU+%220511147v_7%22+OU+%220511147v_11393%22+OU+%220511147v_1842%22&amp;type=id
</link>
<description>
<![CDATA[ e-sidoc CDI - LYCEE PRIVE FREDERIC OZANAM ]]>
</description>
<width>97</width>
<height>36</height>
</image>
<dc:identifier>
http://0511147v.esidoc.fr/search.php?action=Basket&amp;method=admin_view_rss&amp;pid=2260&amp;image_type=large&amp;count=10
</dc:identifier>
<dcterms:alternative xsi:type="URI">
http://0511147v.esidoc.fr/search.php?action=Basket&amp;method=admin_view_html&amp;pid=2260&amp;image_type=large&amp;count=10
</dcterms:alternative>
<description/>
<opensearch:totalResults>10</opensearch:totalResults>
<opensearch:startIndex>0</opensearch:startIndex>
<opensearch:itemsPerPage>10</opensearch:itemsPerPage>
<opensearch:count>10</opensearch:count>
<item>
<dc:identifier>0511147v_10155</dc:identifier>
<title>
<![CDATA[ Bakuman 2 ]]>
</title>
<link>http://0511147v.esidoc.fr/id_0511147v_10155.html</link>
<guid isPermaLink="true">http://0511147v.esidoc.fr/id_0511147v_10155.html</guid>
<description>
<![CDATA[
Moritaka Mashiro est en 3e année de collège, ses dons pour le dessin lui ont permis de remporter plusieurs prix. Il est amoureux en secret de Miho Azuki mais n'ose pas lui révéler cet amour jusqu'à ce que son ami, Akito Takagi, force le destin. Akito est le meilleur élève de sa classe, il écrit également des scénarios et souhaite que Mashiro les transpose en manga. Celui-ci refuse dans un premier temps, mais il se voit obligé d'accepter une fois qu'il se trouve devant la belle Azuki. Quant à elle, Azuki rêve de devenir doubleuse de films et de dessins animés. Si Azuki et Mashiro réalisent leur rêve, ils se marieront, mais d'ici là ils ne doivent plus se voir et communiquer uniquement par e-mail... La lente ascension pour réaliser le meilleur manga jamais édité commence !
]]>
</description>
<author>
<![CDATA[ Ohba, Tsugumi ]]>
</author>
<dc:creator>
<![CDATA[ Ohba, Tsugumi ]]>
</dc:creator>
<category>
<![CDATA[ Livre ]]>
</category>
<enclosure url="http://images.esidoc.fr/images/electre/large/d21ac97ff37291c64ac135dc40dab361/image.jpg" type="image/jpeg"/>
<dc:ean>9782505008279</dc:ean>
<dc:isbn>9782505008279</dc:isbn>
<dc:nature>
<![CDATA[ manga ]]>
</dc:nature>
<dc:publicsStr>
<![CDATA[ tous publics ]]>
</dc:publicsStr>
<dc:niveauxStr>
<![CDATA[ tous niveaux ]]>
</dc:niveauxStr>
<dc:subject>
<![CDATA[ Adolescence ]]>
</dc:subject>
<dc:subject>
<![CDATA[ Amitié ]]>
</dc:subject>
<dc:subject>
<![CDATA[ Amour ]]>
</dc:subject>
<dc:subject>
<![CDATA[ Dessin : art ]]>
</dc:subject>
<dc:subject>
<![CDATA[ Manga (bande dessinée) ]]>
</dc:subject>
<dc:language>fre</dc:language>
<dc:publisher>
<![CDATA[ Kana ]]>
</dc:publisher>
<pubDate>2013-01-01T00:00:00Z</pubDate>
<dc:format>
<![CDATA[ livre ]]>
</dc:format>
</item>
<item>
<dc:identifier>0511147v_11393</dc:identifier>
<title>
<![CDATA[ Beck 2 ]]>
</title>
<link>http://0511147v.esidoc.fr/id_0511147v_11393.html</link>
<guid isPermaLink="true">http://0511147v.esidoc.fr/id_0511147v_11393.html</guid>
<description>
<![CDATA[
Yukio travaille d'arrache-pied à la découverte de la musique occidentale, aidé par Ryûsuke qui lui a fait cadeau... d'une guitare ! De son côté, ce dernier recherche toujours un nouveau chanteur pour son groupe. Son choix s'est porté sur deux candidats. Mais la solution pourrait être plus inattendue. Et pourquoi pas le jeune et novice Yukio par exemple ?
]]>
</description>
<author>
<![CDATA[ Sakuishi, Harold ]]>
</author>
<dc:creator>
<![CDATA[ Sakuishi, Harold ]]>
</dc:creator>
<category>
<![CDATA[ Livre ]]>
</category>
<enclosure url="http://images.esidoc.fr/images/electre/large/af3ad9b1f25dacc57baabfa4bfefba8f/image.jpg" type="image/jpeg"/>
<dc:ean>9782847894660</dc:ean>
<dc:isbn>9782847894660</dc:isbn>
<dc:nature>
<![CDATA[ manga ]]>
</dc:nature>
<dc:publicsStr>
<![CDATA[ tous publics ]]>
</dc:publicsStr>
<dc:niveauxStr>
<![CDATA[ tous niveaux ]]>
</dc:niveauxStr>
<dc:subject>
<![CDATA[ Adolescence ]]>
</dc:subject>
<dc:subject>
<![CDATA[ Rock ]]>
</dc:subject>
<dc:subject>
<![CDATA[ Amour ]]>
</dc:subject>
<dc:subject>
<![CDATA[ Amitié ]]>
</dc:subject>
<dc:subject>
<![CDATA[ Musique ]]>
</dc:subject>
<dc:language>fre</dc:language>
<dc:publisher>
<![CDATA[ Delcourt ]]>
</dc:publisher>
<pubDate>2008-01-01T00:00:00Z</pubDate>
<dc:format>
<![CDATA[ livre ]]>
</dc:format>
</item>
<item>
<dc:identifier>0511147v_720</dc:identifier>
<title>
<![CDATA[ Black Butler 2 ]]>
</title>
<link>http://0511147v.esidoc.fr/id_0511147v_720.html</link>
<guid isPermaLink="true">http://0511147v.esidoc.fr/id_0511147v_720.html</guid>
<description>
<![CDATA[
Ciel et Sebastian reçoivent la tante de Ciel : Madame Red, veuve du Comte Barnett, ainsi que son majordome Grell Sutcliff. C'est la fin de la saison mondaine et Londres est en émoi à cause de meurtres perpétrés par celui que l'on a déjà surnommé "Jack l'Éventreur". Plusieurs prostituées sont en effet massacrées dans d'horribles circonstances. Sebastian et Ciel soupçonnent le Vicomte de Druitt d'être le coupable et ils mettent au point un stratagème pour le piéger.
]]>
</description>
<author>
<![CDATA[ Toboso, Yana ]]>
</author>
<dc:creator>
<![CDATA[ Toboso, Yana ]]>
</dc:creator>
<category>
<![CDATA[ Livre ]]>
</category>
<enclosure url="http://images.esidoc.fr/images/electre/large/31d288357252fde0a2513286a93601c5/image.jpg" type="image/jpeg"/>
<dc:ean>9782505008293</dc:ean>
<dc:isbn>9782505008293</dc:isbn>
<dc:nature>
<![CDATA[ manga ]]>
</dc:nature>
<dc:publicsStr>
<![CDATA[ tous publics ]]>
</dc:publicsStr>
<dc:niveauxStr>
<![CDATA[ tous niveaux ]]>
</dc:niveauxStr>
<dc:subject>
<![CDATA[ Policier : genre ]]>
</dc:subject>
<dc:subject>
<![CDATA[ Fantastique : genre ]]>
</dc:subject>
<dc:subject>
<![CDATA[ Phénomène surnaturel ]]>
</dc:subject>
<dc:language>fre</dc:language>
<dc:publisher>
<![CDATA[ Kana ]]>
</dc:publisher>
<pubDate>2010-01-01T00:00:00Z</pubDate>
<dc:format>
<![CDATA[ livre ]]>
</dc:format>
</item>
<item>
<dc:identifier>0511147v_1842</dc:identifier>
<title>
<![CDATA[ Dream team 1 ]]>
</title>
<link>http://0511147v.esidoc.fr/id_0511147v_1842.html</link>
<guid isPermaLink="true">http://0511147v.esidoc.fr/id_0511147v_1842.html</guid>
<description>
<![CDATA[
Complexé par sa petite taille, Sora est passionné de basket. Lorsqu'il entre en seconde, il décide naturellement d'intégrer l'équipe du lycée, mais découvre vite que le club est le repaire des pires voyous de l'école et qu'ils n'ont aucune intention de s'entraîner. L'enthousiasme sans limite de Sora pour le basket, déterminé à prouver que son talent dépasse son physique chétif, lui crée bientôt autant d'amis que d'ennemis...
]]>
</description>
<author>
<![CDATA[ Hinata, Takeshi ]]>
</author>
<dc:creator>
<![CDATA[ Hinata, Takeshi ]]>
</dc:creator>
<category>
<![CDATA[ Livre ]]>
</category>
<enclosure url="http://images.esidoc.fr/images/electre/large/294d62c4363e6e29bfdfeb42bfc2861f/image.jpg" type="image/jpeg"/>
<dc:ean>9782723478694</dc:ean>
<dc:isbn>9782723478694</dc:isbn>
<dc:nature>
<![CDATA[ manga ]]>
</dc:nature>
<dc:publicsStr>
<![CDATA[ tous publics ]]>
</dc:publicsStr>
<dc:niveauxStr>
<![CDATA[ tous niveaux ]]>
</dc:niveauxStr>
<dc:subject>
<![CDATA[ Basket-ball ]]>
</dc:subject>
<dc:subject>
<![CDATA[ Lycée ]]>
</dc:subject>
<dc:subject>
<![CDATA[ Adolescence ]]>
</dc:subject>
<dc:subject>
<![CDATA[ Délinquance ]]>
</dc:subject>
<dc:subject>
<![CDATA[ Relation mère-enfant ]]>
</dc:subject>
<dc:subject>
<![CDATA[ Violence ]]>
</dc:subject>
<dc:language>fre</dc:language>
<dc:publisher>
<![CDATA[ Glénat ]]>
</dc:publisher>
<pubDate>2011-01-01T00:00:00Z</pubDate>
<dc:format>
<![CDATA[ livre ]]>
</dc:format>
</item>
<item>
<dc:identifier>0511147v_5805</dc:identifier>
<title>
<![CDATA[ Pandora Hearts 1 ]]>
</title>
<link>http://0511147v.esidoc.fr/id_0511147v_5805.html</link>
<guid isPermaLink="true">http://0511147v.esidoc.fr/id_0511147v_5805.html</guid>
<description>
<![CDATA[
Oz Vessalius, 15 ans, est l'héritier d'un des quatre grands duchés du pays. Le jour de sa cérémonie de passage à l'âge adulte, des bourreaux masqués le précipitent dans un monde sombre et confus, l' Abysse, pour un crime dont il ignore tout.Dans cette prison à l'écart du temps, il rencontre Alice, une jeune fille aux pouvoirs mystérieux, qui lui propose de nouer un pacte pour l'arracher à ce cauchemar. Mais l'organisation secrète Pandora, qui a pour mission de lever le voile sur les mystères de l' Abysse, attend son retour de pied ferme...
]]>
</description>
<author>
<![CDATA[ Mochizuki, Jun ]]>
</author>
<dc:creator>
<![CDATA[ Mochizuki, Jun ]]>
</dc:creator>
<category>
<![CDATA[ Livre ]]>
</category>
<enclosure url="http://images.esidoc.fr/images/electre/large/dd79dc88a63a448e0ee45e4ffb121026/image.jpg" type="image/jpeg"/>
<dc:ean>9782355921759</dc:ean>
<dc:isbn>9782355921759</dc:isbn>
<dc:nature>
<![CDATA[ manga ]]>
</dc:nature>
<dc:publicsStr>
<![CDATA[ tous publics ]]>
</dc:publicsStr>
<dc:niveauxStr>
<![CDATA[ tous niveaux ]]>
</dc:niveauxStr>
<dc:subject>
<![CDATA[ Fantastique : genre ]]>
</dc:subject>
<dc:subject>
<![CDATA[ Policier : genre ]]>
</dc:subject>
<dc:language>fre</dc:language>
<dc:publisher>
<![CDATA[ KI-OON ]]>
</dc:publisher>
<pubDate>2014-01-01T00:00:00Z</pubDate>
<dc:format>
<![CDATA[ livre ]]>
</dc:format>
</item>
<item>
<dc:identifier>0511147v_10986</dc:identifier>
<title>
<![CDATA[ Silver Spoon 1 ]]>
</title>
<link>http://0511147v.esidoc.fr/id_0511147v_10986.html</link>
<guid isPermaLink="true">http://0511147v.esidoc.fr/id_0511147v_10986.html</guid>
<description>
<![CDATA[
Yûgo Hachiken est un collégien qui vient du prestigieux établissement de Shin Sapporo. Il est ce qu'on appelle un génie dans le domaine des mathématiques et aux autres matières cérébrales. Lorsqu'il arrive au lycée agricole de Ôezo, situé sur l'île d'Hokkaidô, il croit que sa vie sera facile : avec tous ces fils de fermiers incapables d'aligner deux équations, devenir premier de la classe sera du gâteau ! Mais c était sans compter les cours d' élevage, de sciences de la nutrition, de gestion agricole et les clubs de sport épuisants... Comment va-t-il faire pour survivre dans cet enfer ?! Mais surtout, pourquoi est-il entré dans ce lycée qui semble ne pas du tout correspondre à son profil scolaire... ?
]]>
</description>
<author>
<![CDATA[ Arakawa, Hiromu ]]>
</author>
<dc:creator>
<![CDATA[ Arakawa, Hiromu ]]>
</dc:creator>
<category>
<![CDATA[ Livre ]]>
</category>
<enclosure url="http://images.esidoc.fr/images/electre/large/a4c6bf713383fe29465c26a854f8d5ef/image.jpg" type="image/jpeg"/>
<dc:ean>9782351428344</dc:ean>
<dc:isbn>9782351428344</dc:isbn>
<dc:nature>
<![CDATA[ manga ]]>
</dc:nature>
<dc:publicsStr>
<![CDATA[ tous publics ]]>
</dc:publicsStr>
<dc:niveauxStr>
<![CDATA[ tous niveaux ]]>
</dc:niveauxStr>
<dc:subject>
<![CDATA[ Adolescence ]]>
</dc:subject>
<dc:subject>
<![CDATA[ Établissement agricole du second degré ]]>
</dc:subject>
<dc:subject>
<![CDATA[ Élevage ]]>
</dc:subject>
<dc:subject>
<![CDATA[ Orientation scolaire ]]>
</dc:subject>
<dc:language>fre</dc:language>
<dc:publisher>
<![CDATA[ Kurokawa ]]>
</dc:publisher>
<pubDate>2014-01-01T00:00:00Z</pubDate>
<dc:format>
<![CDATA[ livre ]]>
</dc:format>
</item>
<item>
<dc:identifier>0511147v_16436</dc:identifier>
<title>
<![CDATA[ Black Butler 1 ]]>
</title>
<link>http://0511147v.esidoc.fr/id_0511147v_16436.html</link>
<guid isPermaLink="true">http://0511147v.esidoc.fr/id_0511147v_16436.html</guid>
<description>
<![CDATA[
Sébastian est majordome au service de Ciel Phantomhive, héritier d'une grande famille de la noblesse anglaise. En matière d'érudition, d'éducation, d'art culinaire, rien à redire, il est parfait. Mais ne vous fiez pas à sa distinction, si vous vous en prenez à son jeune maître, vous découv
]]>
<![CDATA[
rirez sa vraie nature... Ciel aurait-il signé un pacte avec le Diable... ?
]]>
</description>
<author>
<![CDATA[ Toboso, Yana ]]>
</author>
<dc:creator>
<![CDATA[ Toboso, Yana ]]>
</dc:creator>
<category>
<![CDATA[ Livre ]]>
</category>
<enclosure url="http://images.esidoc.fr/images/electre/large/b872c04dbf6ca2f6934d9a37c53ca53b/image.jpg" type="image/jpeg"/>
<dc:ean>9782505007654</dc:ean>
<dc:isbn>9782505007654</dc:isbn>
<dc:nature>
<![CDATA[ manga ]]>
</dc:nature>
<dc:publicsStr>
<![CDATA[ tous publics ]]>
</dc:publicsStr>
<dc:niveauxStr>
<![CDATA[ tous niveaux ]]>
</dc:niveauxStr>
<dc:subject>
<![CDATA[ Phénomène surnaturel ]]>
</dc:subject>
<dc:subject>
<![CDATA[ Fantastique : genre ]]>
</dc:subject>
<dc:language>fre</dc:language>
<dc:publisher>
<![CDATA[ Kana ]]>
</dc:publisher>
<pubDate>2010-01-01T00:00:00Z</pubDate>
<dc:format>
<![CDATA[ livre ]]>
</dc:format>
</item>
<item>
<dc:identifier>0511147v_3439</dc:identifier>
<title>
<![CDATA[ No longer heroine 1 ]]>
</title>
<link>http://0511147v.esidoc.fr/id_0511147v_3439.html</link>
<guid isPermaLink="true">http://0511147v.esidoc.fr/id_0511147v_3439.html</guid>
<description>
<![CDATA[
"C'est moi, la future héroïne de cette Love Story", se persuade Hatori, jeune fille dynamique éprise depuis toujours de son ami d'enfance, le séduisant Rita. Hélas, ce dernier multiplie les rendez-vous, mais l'aspect rapide et dégagé de ces amourettes successives rassure Hatori. En effet, si
]]>
<![CDATA[
elle n'est jamais sorti avec lui, Hatori reste sa confidente la plus proche, et espère bien que ce lien solide évoluera un jour en un sentiment plus profond. Cependant, l'arrivée d'une nouvelle fille au bras de Rita, Adachi, une fille discrète aux antipodes des précédentes conquêtes superficielles du jeune homme, pourrait bien changer la donne... Et si Hatori était en train de devenir un second rôle dans sa propre histoire d'amour ?
]]>
</description>
<author>
<![CDATA[ Kôda, Momoko ]]>
</author>
<dc:creator>
<![CDATA[ Kôda, Momoko ]]>
</dc:creator>
<category>
<![CDATA[ Livre ]]>
</category>
<enclosure url="http://images.esidoc.fr/images/electre/large/bb80d2249a9c702e6bc61396290c68d9/image.jpg" type="image/jpeg"/>
<dc:ean>9782756035055</dc:ean>
<dc:isbn>9782756035055</dc:isbn>
<dc:nature>
<![CDATA[ manga ]]>
</dc:nature>
<dc:publicsStr>
<![CDATA[ tous publics ]]>
</dc:publicsStr>
<dc:niveauxStr>
<![CDATA[ tous niveaux ]]>
</dc:niveauxStr>
<dc:subject>
<![CDATA[ Amour ]]>
</dc:subject>
<dc:subject>
<![CDATA[ Lycée ]]>
</dc:subject>
<dc:subject>
<![CDATA[ Adolescence ]]>
</dc:subject>
<dc:language>fre</dc:language>
<dc:publisher>
<![CDATA[ Delcourt ]]>
</dc:publisher>
<pubDate>2013-01-01T00:00:00Z</pubDate>
<dc:format>
<![CDATA[ livre ]]>
</dc:format>
</item>
<item>
<dc:identifier>0511147v_7</dc:identifier>
<title>
<![CDATA[ Beck 1 ]]>
</title>
<link>http://0511147v.esidoc.fr/id_0511147v_7.html</link>
<guid isPermaLink="true">http://0511147v.esidoc.fr/id_0511147v_7.html</guid>
<description>
<![CDATA[
Dans la vie, Yukio Tanaka est ce que l'on pourrait appeler un "looser". Être la risée de toute la classe à cause de sa maladresse, être la victime de voyous à qui sa tête ne plaît pas... Tout cela fait partie de son quotidien. Un quotidien ennuyeux à mourir... jusqu'au jour où il rencontre un certain Ryûsuke Minami et son étrange chien, Beck. Ryûsuke lui a du succès avec les filles, il est sûr de lui et c'est surtout une "bête" en guitare. Grâce à lui, Yukio va peu à peu découvrir le monde de la musique et le monde de la musique va découvrir Yukio...
]]>
</description>
<author>
<![CDATA[ Sakuishi, Harold ]]>
</author>
<dc:creator>
<![CDATA[ Sakuishi, Harold ]]>
</dc:creator>
<category>
<![CDATA[ Livre ]]>
</category>
<enclosure url="http://images.esidoc.fr/images/electre/large/86e389eab995274023c67ca30db2d955/image.jpg" type="image/jpeg"/>
<dc:ean>9782847894516</dc:ean>
<dc:isbn>9782847894516</dc:isbn>
<dc:nature>
<![CDATA[ manga ]]>
</dc:nature>
<dc:publicsStr>
<![CDATA[ tous publics ]]>
</dc:publicsStr>
<dc:niveauxStr>
<![CDATA[ tous niveaux ]]>
</dc:niveauxStr>
<dc:subject>
<![CDATA[ Adolescence ]]>
</dc:subject>
<dc:subject>
<![CDATA[ Rock ]]>
</dc:subject>
<dc:subject>
<![CDATA[ Amour ]]>
</dc:subject>
<dc:subject>
<![CDATA[ Amitié ]]>
</dc:subject>
<dc:subject>
<![CDATA[ Musique ]]>
</dc:subject>
<dc:language>fre</dc:language>
<dc:publisher>
<![CDATA[ Delcourt ]]>
</dc:publisher>
<pubDate>2004-01-01T00:00:00Z</pubDate>
<dc:format>
<![CDATA[ livre ]]>
</dc:format>
</item>
<item>
<dc:identifier>0511147v_7667</dc:identifier>
<title>
<![CDATA[ Bakuman 1 ]]>
</title>
<link>http://0511147v.esidoc.fr/id_0511147v_7667.html</link>
<guid isPermaLink="true">http://0511147v.esidoc.fr/id_0511147v_7667.html</guid>
<description>
<![CDATA[
Moritaka Mashiro, surnommé Saïko par ses amis, est en 3e année de collège et ses dons pour le dessin lui ont permis de remporter plusieurs prix. Il est amoureux en secret de Miho Azuki mais n'ose pas lui révéler cet amour jusqu'à ce que son ami, Akito Takagi, force le destin. Takagi est le meilleur élève de sa classe, il écrit également des scénarios et souhaite que Mashiro les transpose en manga. Celui-ci refuse dans un premier temps, mais il se voit obligé d'accepter une fois qu'il se trouve devant la belle Azuki. Quant à elle, Azuki rêve de devenir doubleuse de films et de dessins animés. Si Azuki et Mashiro réalisent leur rêve, ils se marieront, mais d'ici là ils ne doivent plus se voir et communiquer uniquement par e-mail... La lente ascension pour réaliser le meilleur manga jamais édité commence !
]]>
</description>
<author>
<![CDATA[ Ohba, Tsugumi ]]>
</author>
<dc:creator>
<![CDATA[ Ohba, Tsugumi ]]>
</dc:creator>
<category>
<![CDATA[ Livre ]]>
</category>
<enclosure url="http://images.esidoc.fr/images/electre/large/4aac913bed9741b64aa1e7602ae0bca1/image.jpg" type="image/jpeg"/>
<dc:ean>9782505008262</dc:ean>
<dc:isbn>9782505008262</dc:isbn>
<dc:nature>
<![CDATA[ manga ]]>
</dc:nature>
<dc:publicsStr>
<![CDATA[ tous publics ]]>
</dc:publicsStr>
<dc:niveauxStr>
<![CDATA[ tous niveaux ]]>
</dc:niveauxStr>
<dc:subject>
<![CDATA[ Manga (bande dessinée) ]]>
</dc:subject>
<dc:subject>
<![CDATA[ Adolescence ]]>
</dc:subject>
<dc:subject>
<![CDATA[ Amitié ]]>
</dc:subject>
<dc:subject>
<![CDATA[ Amour ]]>
</dc:subject>
<dc:subject>
<![CDATA[ Dessin : art ]]>
</dc:subject>
<dc:language>fre</dc:language>
<dc:publisher>
<![CDATA[ Kana ]]>
</dc:publisher>
<pubDate>2013-01-01T00:00:00Z</pubDate>
<dc:format>
<![CDATA[ livre ]]>
</dc:format>
</item>
</channel>
        </rss>
XML;

        $xml = simplexml_load_string($string);

        $posts = Post::orderBy('created_at', 'desc')->get();
        $links = Link::orderBy('created_at', 'desc')->get();
        $files = File::orderBy('created_at', 'desc')->get();
        $carousels = Carousel::orderBy('created_at', 'desc')->get();
        $menus = Menu::orderBy('created_at', 'desc')->get();
        return view('dashboard', [
            'posts' => $posts,
            'carousels' => $carousels,
            'menus' => $menus,
            'links' => $links,
            'files' => $files,
            'xml' => $xml,
        ]);
    }

    /**
     * Retourne la dashboard de l'index
     * @return mixed
     */
    public function getDashboardIndex ()
    {
        $string = <<<XML
        <rss xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:exist="http://exist.sourceforge.net/NS/exist" xmlns:marc="http://www.loc.gov/MARC21/slim" xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:dcterms="http://purl.org/dc/terms/" xmlns:opensearch="http://a9.com/-/spec/opensearch/1.1/" version="2.0">
            <channel>
<title>Spécial Mangas</title>
<link>
http://0511147v.esidoc.fr/search.php?lookfor=%220511147v_3439%22+OU+%220511147v_10986%22+OU+%220511147v_7667%22+OU+%220511147v_10155%22+OU+%220511147v_16436%22+OU+%220511147v_720%22+OU+%220511147v_5805%22+OU+%220511147v_7%22+OU+%220511147v_11393%22+OU+%220511147v_1842%22&amp;type=id
</link>
<language>fr</language>
<pubDate>Fri, 03 Jun 2016 08:46:39 +0200</pubDate>
<generator>e-sidoc Webservice</generator>
<image>
<title>
<![CDATA[ e-sidoc CDI - LYCEE PRIVE FREDERIC OZANAM ]]>
</title>
<url>
http://static.esidoc.fr/sites/all/themes/biblio/template03/images/logo-bg-footer.png
</url>
<link>
http://0511147v.esidoc.fr/search.php?lookfor=%220511147v_3439%22+OU+%220511147v_10986%22+OU+%220511147v_7667%22+OU+%220511147v_10155%22+OU+%220511147v_16436%22+OU+%220511147v_720%22+OU+%220511147v_5805%22+OU+%220511147v_7%22+OU+%220511147v_11393%22+OU+%220511147v_1842%22&amp;type=id
</link>
<description>
<![CDATA[ e-sidoc CDI - LYCEE PRIVE FREDERIC OZANAM ]]>
</description>
<width>97</width>
<height>36</height>
</image>
<dc:identifier>
http://0511147v.esidoc.fr/search.php?action=Basket&amp;method=admin_view_rss&amp;pid=2260&amp;image_type=large&amp;count=10
</dc:identifier>
<dcterms:alternative xsi:type="URI">
http://0511147v.esidoc.fr/search.php?action=Basket&amp;method=admin_view_html&amp;pid=2260&amp;image_type=large&amp;count=10
</dcterms:alternative>
<description/>
<opensearch:totalResults>10</opensearch:totalResults>
<opensearch:startIndex>0</opensearch:startIndex>
<opensearch:itemsPerPage>10</opensearch:itemsPerPage>
<opensearch:count>10</opensearch:count>
<item>
<dc:identifier>0511147v_10155</dc:identifier>
<title>
<![CDATA[ Bakuman 2 ]]>
</title>
<link>http://0511147v.esidoc.fr/id_0511147v_10155.html</link>
<guid isPermaLink="true">http://0511147v.esidoc.fr/id_0511147v_10155.html</guid>
<description>
<![CDATA[
Moritaka Mashiro est en 3e année de collège, ses dons pour le dessin lui ont permis de remporter plusieurs prix. Il est amoureux en secret de Miho Azuki mais n'ose pas lui révéler cet amour jusqu'à ce que son ami, Akito Takagi, force le destin. Akito est le meilleur élève de sa classe, il écrit également des scénarios et souhaite que Mashiro les transpose en manga. Celui-ci refuse dans un premier temps, mais il se voit obligé d'accepter une fois qu'il se trouve devant la belle Azuki. Quant à elle, Azuki rêve de devenir doubleuse de films et de dessins animés. Si Azuki et Mashiro réalisent leur rêve, ils se marieront, mais d'ici là ils ne doivent plus se voir et communiquer uniquement par e-mail... La lente ascension pour réaliser le meilleur manga jamais édité commence !
]]>
</description>
<author>
<![CDATA[ Ohba, Tsugumi ]]>
</author>
<dc:creator>
<![CDATA[ Ohba, Tsugumi ]]>
</dc:creator>
<category>
<![CDATA[ Livre ]]>
</category>
<enclosure url="http://images.esidoc.fr/images/electre/large/d21ac97ff37291c64ac135dc40dab361/image.jpg" type="image/jpeg"/>
<dc:ean>9782505008279</dc:ean>
<dc:isbn>9782505008279</dc:isbn>
<dc:nature>
<![CDATA[ manga ]]>
</dc:nature>
<dc:publicsStr>
<![CDATA[ tous publics ]]>
</dc:publicsStr>
<dc:niveauxStr>
<![CDATA[ tous niveaux ]]>
</dc:niveauxStr>
<dc:subject>
<![CDATA[ Adolescence ]]>
</dc:subject>
<dc:subject>
<![CDATA[ Amitié ]]>
</dc:subject>
<dc:subject>
<![CDATA[ Amour ]]>
</dc:subject>
<dc:subject>
<![CDATA[ Dessin : art ]]>
</dc:subject>
<dc:subject>
<![CDATA[ Manga (bande dessinée) ]]>
</dc:subject>
<dc:language>fre</dc:language>
<dc:publisher>
<![CDATA[ Kana ]]>
</dc:publisher>
<pubDate>2013-01-01T00:00:00Z</pubDate>
<dc:format>
<![CDATA[ livre ]]>
</dc:format>
</item>
<item>
<dc:identifier>0511147v_11393</dc:identifier>
<title>
<![CDATA[ Beck 2 ]]>
</title>
<link>http://0511147v.esidoc.fr/id_0511147v_11393.html</link>
<guid isPermaLink="true">http://0511147v.esidoc.fr/id_0511147v_11393.html</guid>
<description>
<![CDATA[
Yukio travaille d'arrache-pied à la découverte de la musique occidentale, aidé par Ryûsuke qui lui a fait cadeau... d'une guitare ! De son côté, ce dernier recherche toujours un nouveau chanteur pour son groupe. Son choix s'est porté sur deux candidats. Mais la solution pourrait être plus inattendue. Et pourquoi pas le jeune et novice Yukio par exemple ?
]]>
</description>
<author>
<![CDATA[ Sakuishi, Harold ]]>
</author>
<dc:creator>
<![CDATA[ Sakuishi, Harold ]]>
</dc:creator>
<category>
<![CDATA[ Livre ]]>
</category>
<enclosure url="http://images.esidoc.fr/images/electre/large/af3ad9b1f25dacc57baabfa4bfefba8f/image.jpg" type="image/jpeg"/>
<dc:ean>9782847894660</dc:ean>
<dc:isbn>9782847894660</dc:isbn>
<dc:nature>
<![CDATA[ manga ]]>
</dc:nature>
<dc:publicsStr>
<![CDATA[ tous publics ]]>
</dc:publicsStr>
<dc:niveauxStr>
<![CDATA[ tous niveaux ]]>
</dc:niveauxStr>
<dc:subject>
<![CDATA[ Adolescence ]]>
</dc:subject>
<dc:subject>
<![CDATA[ Rock ]]>
</dc:subject>
<dc:subject>
<![CDATA[ Amour ]]>
</dc:subject>
<dc:subject>
<![CDATA[ Amitié ]]>
</dc:subject>
<dc:subject>
<![CDATA[ Musique ]]>
</dc:subject>
<dc:language>fre</dc:language>
<dc:publisher>
<![CDATA[ Delcourt ]]>
</dc:publisher>
<pubDate>2008-01-01T00:00:00Z</pubDate>
<dc:format>
<![CDATA[ livre ]]>
</dc:format>
</item>
<item>
<dc:identifier>0511147v_720</dc:identifier>
<title>
<![CDATA[ Black Butler 2 ]]>
</title>
<link>http://0511147v.esidoc.fr/id_0511147v_720.html</link>
<guid isPermaLink="true">http://0511147v.esidoc.fr/id_0511147v_720.html</guid>
<description>
<![CDATA[
Ciel et Sebastian reçoivent la tante de Ciel : Madame Red, veuve du Comte Barnett, ainsi que son majordome Grell Sutcliff. C'est la fin de la saison mondaine et Londres est en émoi à cause de meurtres perpétrés par celui que l'on a déjà surnommé "Jack l'Éventreur". Plusieurs prostituées sont en effet massacrées dans d'horribles circonstances. Sebastian et Ciel soupçonnent le Vicomte de Druitt d'être le coupable et ils mettent au point un stratagème pour le piéger.
]]>
</description>
<author>
<![CDATA[ Toboso, Yana ]]>
</author>
<dc:creator>
<![CDATA[ Toboso, Yana ]]>
</dc:creator>
<category>
<![CDATA[ Livre ]]>
</category>
<enclosure url="http://images.esidoc.fr/images/electre/large/31d288357252fde0a2513286a93601c5/image.jpg" type="image/jpeg"/>
<dc:ean>9782505008293</dc:ean>
<dc:isbn>9782505008293</dc:isbn>
<dc:nature>
<![CDATA[ manga ]]>
</dc:nature>
<dc:publicsStr>
<![CDATA[ tous publics ]]>
</dc:publicsStr>
<dc:niveauxStr>
<![CDATA[ tous niveaux ]]>
</dc:niveauxStr>
<dc:subject>
<![CDATA[ Policier : genre ]]>
</dc:subject>
<dc:subject>
<![CDATA[ Fantastique : genre ]]>
</dc:subject>
<dc:subject>
<![CDATA[ Phénomène surnaturel ]]>
</dc:subject>
<dc:language>fre</dc:language>
<dc:publisher>
<![CDATA[ Kana ]]>
</dc:publisher>
<pubDate>2010-01-01T00:00:00Z</pubDate>
<dc:format>
<![CDATA[ livre ]]>
</dc:format>
</item>
<item>
<dc:identifier>0511147v_1842</dc:identifier>
<title>
<![CDATA[ Dream team 1 ]]>
</title>
<link>http://0511147v.esidoc.fr/id_0511147v_1842.html</link>
<guid isPermaLink="true">http://0511147v.esidoc.fr/id_0511147v_1842.html</guid>
<description>
<![CDATA[
Complexé par sa petite taille, Sora est passionné de basket. Lorsqu'il entre en seconde, il décide naturellement d'intégrer l'équipe du lycée, mais découvre vite que le club est le repaire des pires voyous de l'école et qu'ils n'ont aucune intention de s'entraîner. L'enthousiasme sans limite de Sora pour le basket, déterminé à prouver que son talent dépasse son physique chétif, lui crée bientôt autant d'amis que d'ennemis...
]]>
</description>
<author>
<![CDATA[ Hinata, Takeshi ]]>
</author>
<dc:creator>
<![CDATA[ Hinata, Takeshi ]]>
</dc:creator>
<category>
<![CDATA[ Livre ]]>
</category>
<enclosure url="http://images.esidoc.fr/images/electre/large/294d62c4363e6e29bfdfeb42bfc2861f/image.jpg" type="image/jpeg"/>
<dc:ean>9782723478694</dc:ean>
<dc:isbn>9782723478694</dc:isbn>
<dc:nature>
<![CDATA[ manga ]]>
</dc:nature>
<dc:publicsStr>
<![CDATA[ tous publics ]]>
</dc:publicsStr>
<dc:niveauxStr>
<![CDATA[ tous niveaux ]]>
</dc:niveauxStr>
<dc:subject>
<![CDATA[ Basket-ball ]]>
</dc:subject>
<dc:subject>
<![CDATA[ Lycée ]]>
</dc:subject>
<dc:subject>
<![CDATA[ Adolescence ]]>
</dc:subject>
<dc:subject>
<![CDATA[ Délinquance ]]>
</dc:subject>
<dc:subject>
<![CDATA[ Relation mère-enfant ]]>
</dc:subject>
<dc:subject>
<![CDATA[ Violence ]]>
</dc:subject>
<dc:language>fre</dc:language>
<dc:publisher>
<![CDATA[ Glénat ]]>
</dc:publisher>
<pubDate>2011-01-01T00:00:00Z</pubDate>
<dc:format>
<![CDATA[ livre ]]>
</dc:format>
</item>
<item>
<dc:identifier>0511147v_5805</dc:identifier>
<title>
<![CDATA[ Pandora Hearts 1 ]]>
</title>
<link>http://0511147v.esidoc.fr/id_0511147v_5805.html</link>
<guid isPermaLink="true">http://0511147v.esidoc.fr/id_0511147v_5805.html</guid>
<description>
<![CDATA[
Oz Vessalius, 15 ans, est l'héritier d'un des quatre grands duchés du pays. Le jour de sa cérémonie de passage à l'âge adulte, des bourreaux masqués le précipitent dans un monde sombre et confus, l' Abysse, pour un crime dont il ignore tout.Dans cette prison à l'écart du temps, il rencontre Alice, une jeune fille aux pouvoirs mystérieux, qui lui propose de nouer un pacte pour l'arracher à ce cauchemar. Mais l'organisation secrète Pandora, qui a pour mission de lever le voile sur les mystères de l' Abysse, attend son retour de pied ferme...
]]>
</description>
<author>
<![CDATA[ Mochizuki, Jun ]]>
</author>
<dc:creator>
<![CDATA[ Mochizuki, Jun ]]>
</dc:creator>
<category>
<![CDATA[ Livre ]]>
</category>
<enclosure url="http://images.esidoc.fr/images/electre/large/dd79dc88a63a448e0ee45e4ffb121026/image.jpg" type="image/jpeg"/>
<dc:ean>9782355921759</dc:ean>
<dc:isbn>9782355921759</dc:isbn>
<dc:nature>
<![CDATA[ manga ]]>
</dc:nature>
<dc:publicsStr>
<![CDATA[ tous publics ]]>
</dc:publicsStr>
<dc:niveauxStr>
<![CDATA[ tous niveaux ]]>
</dc:niveauxStr>
<dc:subject>
<![CDATA[ Fantastique : genre ]]>
</dc:subject>
<dc:subject>
<![CDATA[ Policier : genre ]]>
</dc:subject>
<dc:language>fre</dc:language>
<dc:publisher>
<![CDATA[ KI-OON ]]>
</dc:publisher>
<pubDate>2014-01-01T00:00:00Z</pubDate>
<dc:format>
<![CDATA[ livre ]]>
</dc:format>
</item>
<item>
<dc:identifier>0511147v_10986</dc:identifier>
<title>
<![CDATA[ Silver Spoon 1 ]]>
</title>
<link>http://0511147v.esidoc.fr/id_0511147v_10986.html</link>
<guid isPermaLink="true">http://0511147v.esidoc.fr/id_0511147v_10986.html</guid>
<description>
<![CDATA[
Yûgo Hachiken est un collégien qui vient du prestigieux établissement de Shin Sapporo. Il est ce qu'on appelle un génie dans le domaine des mathématiques et aux autres matières cérébrales. Lorsqu'il arrive au lycée agricole de Ôezo, situé sur l'île d'Hokkaidô, il croit que sa vie sera facile : avec tous ces fils de fermiers incapables d'aligner deux équations, devenir premier de la classe sera du gâteau ! Mais c était sans compter les cours d' élevage, de sciences de la nutrition, de gestion agricole et les clubs de sport épuisants... Comment va-t-il faire pour survivre dans cet enfer ?! Mais surtout, pourquoi est-il entré dans ce lycée qui semble ne pas du tout correspondre à son profil scolaire... ?
]]>
</description>
<author>
<![CDATA[ Arakawa, Hiromu ]]>
</author>
<dc:creator>
<![CDATA[ Arakawa, Hiromu ]]>
</dc:creator>
<category>
<![CDATA[ Livre ]]>
</category>
<enclosure url="http://images.esidoc.fr/images/electre/large/a4c6bf713383fe29465c26a854f8d5ef/image.jpg" type="image/jpeg"/>
<dc:ean>9782351428344</dc:ean>
<dc:isbn>9782351428344</dc:isbn>
<dc:nature>
<![CDATA[ manga ]]>
</dc:nature>
<dc:publicsStr>
<![CDATA[ tous publics ]]>
</dc:publicsStr>
<dc:niveauxStr>
<![CDATA[ tous niveaux ]]>
</dc:niveauxStr>
<dc:subject>
<![CDATA[ Adolescence ]]>
</dc:subject>
<dc:subject>
<![CDATA[ Établissement agricole du second degré ]]>
</dc:subject>
<dc:subject>
<![CDATA[ Élevage ]]>
</dc:subject>
<dc:subject>
<![CDATA[ Orientation scolaire ]]>
</dc:subject>
<dc:language>fre</dc:language>
<dc:publisher>
<![CDATA[ Kurokawa ]]>
</dc:publisher>
<pubDate>2014-01-01T00:00:00Z</pubDate>
<dc:format>
<![CDATA[ livre ]]>
</dc:format>
</item>
<item>
<dc:identifier>0511147v_16436</dc:identifier>
<title>
<![CDATA[ Black Butler 1 ]]>
</title>
<link>http://0511147v.esidoc.fr/id_0511147v_16436.html</link>
<guid isPermaLink="true">http://0511147v.esidoc.fr/id_0511147v_16436.html</guid>
<description>
<![CDATA[
Sébastian est majordome au service de Ciel Phantomhive, héritier d'une grande famille de la noblesse anglaise. En matière d'érudition, d'éducation, d'art culinaire, rien à redire, il est parfait. Mais ne vous fiez pas à sa distinction, si vous vous en prenez à son jeune maître, vous découv
]]>
<![CDATA[
rirez sa vraie nature... Ciel aurait-il signé un pacte avec le Diable... ?
]]>
</description>
<author>
<![CDATA[ Toboso, Yana ]]>
</author>
<dc:creator>
<![CDATA[ Toboso, Yana ]]>
</dc:creator>
<category>
<![CDATA[ Livre ]]>
</category>
<enclosure url="http://images.esidoc.fr/images/electre/large/b872c04dbf6ca2f6934d9a37c53ca53b/image.jpg" type="image/jpeg"/>
<dc:ean>9782505007654</dc:ean>
<dc:isbn>9782505007654</dc:isbn>
<dc:nature>
<![CDATA[ manga ]]>
</dc:nature>
<dc:publicsStr>
<![CDATA[ tous publics ]]>
</dc:publicsStr>
<dc:niveauxStr>
<![CDATA[ tous niveaux ]]>
</dc:niveauxStr>
<dc:subject>
<![CDATA[ Phénomène surnaturel ]]>
</dc:subject>
<dc:subject>
<![CDATA[ Fantastique : genre ]]>
</dc:subject>
<dc:language>fre</dc:language>
<dc:publisher>
<![CDATA[ Kana ]]>
</dc:publisher>
<pubDate>2010-01-01T00:00:00Z</pubDate>
<dc:format>
<![CDATA[ livre ]]>
</dc:format>
</item>
<item>
<dc:identifier>0511147v_3439</dc:identifier>
<title>
<![CDATA[ No longer heroine 1 ]]>
</title>
<link>http://0511147v.esidoc.fr/id_0511147v_3439.html</link>
<guid isPermaLink="true">http://0511147v.esidoc.fr/id_0511147v_3439.html</guid>
<description>
<![CDATA[
"C'est moi, la future héroïne de cette Love Story", se persuade Hatori, jeune fille dynamique éprise depuis toujours de son ami d'enfance, le séduisant Rita. Hélas, ce dernier multiplie les rendez-vous, mais l'aspect rapide et dégagé de ces amourettes successives rassure Hatori. En effet, si
]]>
<![CDATA[
elle n'est jamais sorti avec lui, Hatori reste sa confidente la plus proche, et espère bien que ce lien solide évoluera un jour en un sentiment plus profond. Cependant, l'arrivée d'une nouvelle fille au bras de Rita, Adachi, une fille discrète aux antipodes des précédentes conquêtes superficielles du jeune homme, pourrait bien changer la donne... Et si Hatori était en train de devenir un second rôle dans sa propre histoire d'amour ?
]]>
</description>
<author>
<![CDATA[ Kôda, Momoko ]]>
</author>
<dc:creator>
<![CDATA[ Kôda, Momoko ]]>
</dc:creator>
<category>
<![CDATA[ Livre ]]>
</category>
<enclosure url="http://images.esidoc.fr/images/electre/large/bb80d2249a9c702e6bc61396290c68d9/image.jpg" type="image/jpeg"/>
<dc:ean>9782756035055</dc:ean>
<dc:isbn>9782756035055</dc:isbn>
<dc:nature>
<![CDATA[ manga ]]>
</dc:nature>
<dc:publicsStr>
<![CDATA[ tous publics ]]>
</dc:publicsStr>
<dc:niveauxStr>
<![CDATA[ tous niveaux ]]>
</dc:niveauxStr>
<dc:subject>
<![CDATA[ Amour ]]>
</dc:subject>
<dc:subject>
<![CDATA[ Lycée ]]>
</dc:subject>
<dc:subject>
<![CDATA[ Adolescence ]]>
</dc:subject>
<dc:language>fre</dc:language>
<dc:publisher>
<![CDATA[ Delcourt ]]>
</dc:publisher>
<pubDate>2013-01-01T00:00:00Z</pubDate>
<dc:format>
<![CDATA[ livre ]]>
</dc:format>
</item>
<item>
<dc:identifier>0511147v_7</dc:identifier>
<title>
<![CDATA[ Beck 1 ]]>
</title>
<link>http://0511147v.esidoc.fr/id_0511147v_7.html</link>
<guid isPermaLink="true">http://0511147v.esidoc.fr/id_0511147v_7.html</guid>
<description>
<![CDATA[
Dans la vie, Yukio Tanaka est ce que l'on pourrait appeler un "looser". Être la risée de toute la classe à cause de sa maladresse, être la victime de voyous à qui sa tête ne plaît pas... Tout cela fait partie de son quotidien. Un quotidien ennuyeux à mourir... jusqu'au jour où il rencontre un certain Ryûsuke Minami et son étrange chien, Beck. Ryûsuke lui a du succès avec les filles, il est sûr de lui et c'est surtout une "bête" en guitare. Grâce à lui, Yukio va peu à peu découvrir le monde de la musique et le monde de la musique va découvrir Yukio...
]]>
</description>
<author>
<![CDATA[ Sakuishi, Harold ]]>
</author>
<dc:creator>
<![CDATA[ Sakuishi, Harold ]]>
</dc:creator>
<category>
<![CDATA[ Livre ]]>
</category>
<enclosure url="http://images.esidoc.fr/images/electre/large/86e389eab995274023c67ca30db2d955/image.jpg" type="image/jpeg"/>
<dc:ean>9782847894516</dc:ean>
<dc:isbn>9782847894516</dc:isbn>
<dc:nature>
<![CDATA[ manga ]]>
</dc:nature>
<dc:publicsStr>
<![CDATA[ tous publics ]]>
</dc:publicsStr>
<dc:niveauxStr>
<![CDATA[ tous niveaux ]]>
</dc:niveauxStr>
<dc:subject>
<![CDATA[ Adolescence ]]>
</dc:subject>
<dc:subject>
<![CDATA[ Rock ]]>
</dc:subject>
<dc:subject>
<![CDATA[ Amour ]]>
</dc:subject>
<dc:subject>
<![CDATA[ Amitié ]]>
</dc:subject>
<dc:subject>
<![CDATA[ Musique ]]>
</dc:subject>
<dc:language>fre</dc:language>
<dc:publisher>
<![CDATA[ Delcourt ]]>
</dc:publisher>
<pubDate>2004-01-01T00:00:00Z</pubDate>
<dc:format>
<![CDATA[ livre ]]>
</dc:format>
</item>
<item>
<dc:identifier>0511147v_7667</dc:identifier>
<title>
<![CDATA[ Bakuman 1 ]]>
</title>
<link>http://0511147v.esidoc.fr/id_0511147v_7667.html</link>
<guid isPermaLink="true">http://0511147v.esidoc.fr/id_0511147v_7667.html</guid>
<description>
<![CDATA[
Moritaka Mashiro, surnommé Saïko par ses amis, est en 3e année de collège et ses dons pour le dessin lui ont permis de remporter plusieurs prix. Il est amoureux en secret de Miho Azuki mais n'ose pas lui révéler cet amour jusqu'à ce que son ami, Akito Takagi, force le destin. Takagi est le meilleur élève de sa classe, il écrit également des scénarios et souhaite que Mashiro les transpose en manga. Celui-ci refuse dans un premier temps, mais il se voit obligé d'accepter une fois qu'il se trouve devant la belle Azuki. Quant à elle, Azuki rêve de devenir doubleuse de films et de dessins animés. Si Azuki et Mashiro réalisent leur rêve, ils se marieront, mais d'ici là ils ne doivent plus se voir et communiquer uniquement par e-mail... La lente ascension pour réaliser le meilleur manga jamais édité commence !
]]>
</description>
<author>
<![CDATA[ Ohba, Tsugumi ]]>
</author>
<dc:creator>
<![CDATA[ Ohba, Tsugumi ]]>
</dc:creator>
<category>
<![CDATA[ Livre ]]>
</category>
<enclosure url="http://images.esidoc.fr/images/electre/large/4aac913bed9741b64aa1e7602ae0bca1/image.jpg" type="image/jpeg"/>
<dc:ean>9782505008262</dc:ean>
<dc:isbn>9782505008262</dc:isbn>
<dc:nature>
<![CDATA[ manga ]]>
</dc:nature>
<dc:publicsStr>
<![CDATA[ tous publics ]]>
</dc:publicsStr>
<dc:niveauxStr>
<![CDATA[ tous niveaux ]]>
</dc:niveauxStr>
<dc:subject>
<![CDATA[ Manga (bande dessinée) ]]>
</dc:subject>
<dc:subject>
<![CDATA[ Adolescence ]]>
</dc:subject>
<dc:subject>
<![CDATA[ Amitié ]]>
</dc:subject>
<dc:subject>
<![CDATA[ Amour ]]>
</dc:subject>
<dc:subject>
<![CDATA[ Dessin : art ]]>
</dc:subject>
<dc:language>fre</dc:language>
<dc:publisher>
<![CDATA[ Kana ]]>
</dc:publisher>
<pubDate>2013-01-01T00:00:00Z</pubDate>
<dc:format>
<![CDATA[ livre ]]>
</dc:format>
</item>
</channel>
        </rss>
XML;

        $xml = simplexml_load_string($string);

        $links = Link::orderBy('created_at', 'desc')->get();
        $posts = Post::orderBy('created_at', 'desc')->get();
        $files = File::orderBy('created_at', 'desc')->get();
        $carousels = Carousel::orderBy('created_at', 'desc')->get();
        $menus = Menu::orderBy('created_at', 'desc')->get();
        return view('welcome', [
            'posts' => $posts,
            'carousels' => $carousels,
            'menus' => $menus,
            'links' => $links,
            'files' => $files,
            'xml' => $xml,
        ]);
    }

    /**
     * On ne supprime qu'un seul post. On le reconnait en passant en paramètre son id
     * Une fois que le post est supprimé, nous sommes redirigé sur la même page avec un message
     * @param $post_id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function getDeleteActualiteAdmin ($post_id)
    {
        $post = Post::where('id', $post_id)->first();
        $timeline = new Timeline();
        $timeline->title = "Suppression d'une actualité";
        $timeline->post_id = 1;
        $timeline->model = 2; // 0 Carousel 1 Menu 2 Actualités
        $timeline->action = 1; //0 Ajout 1 Suppression 2 Edition
        $timeline->container = $post->body;
        $timeline->user_id = 3;
        $timeline->save();
        $post->delete();
        return redirect()->route('admin_actualite')->with(['message' => 'Post effacé et ajouté à la timeline']);
    }

    /**
     * Les actualités sont triées par ordre décroissant en fonction de la date.
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function getManageActualiteAdmin(){
        $colors = Color::orderBy('name', 'desc')->get();
        $posts = Post::orderBy('created_at', 'desc')->get();
        return view('admin.includes.manageActualite',[
            'posts' => $posts,
            'colors' => $colors,
        ]);
    }

    /**
     * Creation et validation de l'actualité. Une fois qu'il n'y a pas d'erreur au niveau du body
     * on crée un nouveau post. Si la requête est bien executée, nous avons un message de réussite
     * Nous sommes ensuite redirigé sur la même page
     * @param Request $request
     * @return mixed
     */
    public function postCreateActualite (Request $request)
    {
        $this->validate($request, [
            'titre' => 'required',
            'image_actu',
            'external_link',
            'body' => 'required|max:500',
            'color_actu' => 'required',
            'facebook_actu',
            'twitter_actu',
            'google_actu',
        ]);

        $timeline = new Timeline();
        $post = new Post();
        $files = Input::file('external_file');

        $post->titre = $request['titre'];
        $post->body = $request['body'];
        $post->color = $request['color_actu'];
        $post->facebook_post = $request['facebook_actu'];
        $post->twitter_post = $request['twitter_actu'];
        $post->google_post = $request['google_actu'];

        $imgactu = $request->file('image_actu');
        $imgactu->move('files/shares/actualite/', $imgactu->getClientOriginalName());
        $post->image_actu = 'files/shares/actualite/' . $imgactu->getClientOriginalName();

        $message = 'Il n\' y a une erreur';
        $message2 = 'Il n\' y a une erreur';
        /*Save the post si c'est un succès c'est bon.*/
        if ($request->user()->post()->save($post)) {
            $message = 'Le post a été ajouté';
        }
        $timeline->action = 0; //0 Ajout 1 Suppression 2 Edition
        $timeline->post_id = $post->id;
        $timeline->model = 2; // 0 Carousel 1 Menu 2 Actualités
        $timeline->title = "Ajout d'une actualité";
        $timeline->container = $post->body;
        if ($request->user()->post()->save($timeline)) {
            $message2 = 'Ajout à la timeline réussi';
        }

        $message3 = 'Il y a une erreur';
        for ($i=0; $i<count($request->external_link); $i++){
            $link_post = new Link();
            $link_post->body = $request->external_link[$i];
            $link_post->user_id = 3;
            $link_post->post_id = $post->id;
            if($request->user()->post()->save($link_post))
                $message3 = 'Lien ajouté';
        }

        $message4 = 'Il y a une erreur';
        foreach($files as $file) {
            $file_post = new File();
            $file->move('files/shares/', $file->getClientOriginalName());
            $file_post->body = 'files/shares/' . $file->getClientOriginalName();
            $file_post->user_id = 3;
            $file_post->post_id = $post->id;
            if($request->user()->post()->save($file_post))
                $message4 = 'Fichier ajouté';
        }

        return redirect()->route('admin_actualite')->with(['message' => $message, 'message2' =>$message2, 'message3' =>$message3, 'message4'=> $message4]);
    }

    /**
     * Si on met rien dans le modal, on a une erreur et il n'y aura pas de changement
     * On va corriger ça. De plus, on doit reloader la page si l'on veut voir les modifications. On va modifer le contenu grâce à l'ajax
     * dans notre fichier .js
     * @see public/src/js/appAdmin.js
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function postEditActualiteAdmin (Request $request)
    {
        $this->validate($request, [
            'body' => 'required'
        ]);

        $post = Post::find($request['postId']);
        $timeline = new Timeline();
        $timeline->container = $post->body;

        $post->body = $request['body'];
        $timeline->action = 2;
        $timeline->post_id = $request['postId'];
        $timeline->model = 2;
        $timeline->title = "Edition d'une actualité";

        $message = 'Il n\' y a une erreur';
    
        if ($request->user()->post()->save($timeline)) {
            $message = 'Ajout à la timeline réussi';
        }
        $post->update();


        return response()->json(['new_body' => $post->body, 'message' => $message], 200);
    }






    /**
     *                                      PARTIE OBSOLETE
     */

    /**
     * On ne peut supprimer que notre post. Même via l'url, on ne peut pas supprimer si on n'est pas
     * le propriétaire
     * @param $post_id
     * @return mixed
     */
    public function getDeletePost ($post_id)
    {

        /*Alternative :
         * $post = Post::find($post_id)->first();
         */

        //chercher un unique post à supprimer par son id
        $post = Post::where('id', $post_id)->first();
        if (Auth::user() != $post->user) {
            return redirect()->back();
        }
        $post->delete();

        return redirect()->route('dashboard')->with(['message' => 'Post effacé']);
    }

    /**
     * Si on met rien dans le modal, on a une erreur et pas de changement
     * On va corriger ça. De plus, on doit reloader la page. On va modifer le js
     * @param Request $request
     * @return mixed
     */
    public function postEditPost (Request $request)
    {
        $this->validate($request, [
            'body' => 'required'
        ]);

        /**
         * On edite son propre poste. Pas celui des autres
         */
        $post = Post::find($request['postId']);
        if (Auth::user() != $post->user) {
            return redirect()->back();
        }
        $post->body = $request['body'];
        $post->update();
        return response()->json(['new_body' => $post->body], 200);
    }

}