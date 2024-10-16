<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDashboardDatabase extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        DB::statement('CREATE TABLE IF NOT EXISTS `amenities` (
            `id` int NOT NULL AUTO_INCREMENT,
            `name` varchar(100) NOT NULL,
            PRIMARY KEY (`id`)
            ) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;');

        DB::statement('DELETE FROM `amenities`;');

        DB::statement("INSERT INTO `amenities` (`id`, `name`) VALUES
            (1, 'Air conditioner'),
            (2, 'Breakfast'),
            (3, 'Cleaning'),
            (4, 'Grocery'),
            (5, 'Shop near'),
            (6, '24/7 Online Support'),
            (7, 'Smart Security'),
            (8, 'High speed WiFi'),
            (9, 'Kitchen'),
            (10, 'Shower'),
            (11, 'Single bed'),
            (12, 'Towels'),
            (13, 'Strong locker'),
            (14, 'Expert Team');");

        DB::statement("CREATE TABLE IF NOT EXISTS `rooms` (
            `id` int NOT NULL AUTO_INCREMENT,
            `type` enum('Single Bed','Double Bed','Double Superior','Suite') NOT NULL,
            `floor` varchar(40) NOT NULL,
            `number` int NOT NULL,
            `images` varchar(255) NOT NULL,
            `price` int NOT NULL,
            `offer` int NOT NULL,
            `status` enum('booked','maintenance','available') NOT NULL,
            `description` varchar(5000) NOT NULL,
            PRIMARY KEY (`id`)
            ) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;");

        DB::statement('DELETE FROM `rooms`;');

        DB::statement("INSERT INTO `rooms` (`id`, `type`, `floor`, `number`, `images`, `price`, `offer`, `status`, `description`) VALUES
            (1, 'Double Superior', 'Floor C-5', 57, 'https://picsum.photos/seed/tjEpew3/1750/3172', 4222, 88, 'booked', 'Conitor aestus ciminatio. Calculus texo sophismata caste cibo theatrum comprehendo. Molestias peior cultellus caelestis terra. Antea vulgaris exercitationem perspiciatis. Anser sumo tener abduco conscendo cinis ea. Alo ultra audax causa tener.'),
            (2, 'Double Superior', 'Floor B-2', 59, 'https://loremflickr.com/610/670?lock=854913337703266', 3156, 39, 'available', 'Delicate molestias arma. Terga cauda abduco tenetur odit adopto. Dolor derideo thymum conculco aspicio conduco tutis subiungo vomica. Solutio at suscipit triumphus absens illum soleo conduco. Votum delectus adficio quia alter cunae aliquid. Toties cuius addo conicio dolore pel. Adipisci truculenter denuo adduco strenuus carus virga in. Cometes cupressus occaecati stabilis vindico urbanus.'),
            (3, 'Single Bed', 'Floor C-3', 51, 'https://picsum.photos/seed/NlxS9/150/2203', 1295, 63, 'maintenance', 'Praesentium bestia harum. Amicitia tibi beneficium bestia caute. Facilis delibero caute absens crux cerno cado combibo. Curtus sonitus voluptatum cupio sollicito coadunatio acidus degero tripudio.'),
            (4, 'Double Bed', 'Floor C-8', 75, 'https://loremflickr.com/1573/573?lock=5634062786380010', 1270, 32, 'maintenance', 'Commemoro similique vomito. Magni pel ultio vaco canis voro contabesco vitae culpo. Aestivus labore earum abundans verus acerbitas. Cunctatio adipiscor recusandae. Campana alias vere fuga. Admoneo supellex cohaero celo. Quos cauda amissio tametsi terebro sed viridis amissio uxor blandior. Demergo pauci depopulo strenuus vereor.'),
            (5, 'Single Bed', 'Floor A-6', 62, 'https://picsum.photos/seed/shOyRsC/1560/957', 8632, 43, 'booked', 'Crinis arcus succedo coma decimus somniculosus quo tot. Terga apostolus ter officia. Eos hic textor amaritudo.'),
            (6, 'Single Bed', 'Floor B-3', 87, 'https://loremflickr.com/607/2081?lock=4233276539802595', 850, 72, 'booked', 'Arguo viduo caput tenax aestivus. Catena tenax comprehendo utique placeat suppono vicissitudo. Pecus sumo aeternus. Adinventitias atavus pel cupressus tero textilis admitto volutabrum tenetur deleniti. Cunctatio cogo verbera. Vapulus consuasor tenus cerno crustulum. Aqua amplexus verus valens.'),
            (7, 'Double Superior', 'Floor C-2', 65, 'https://picsum.photos/seed/2TbuJK/3893/2637', 895, 57, 'booked', 'Conicio nam substantia adeptio triumphus stella. Valeo suppono arto nemo ademptio ipsam balbus cornu. Urbanus consequuntur a verumtamen speciosus consectetur distinctio clementia. Vox deprimo spes cavus aeger aetas cum. Autus defendo chirographum ad cernuus vita caries creo cur alveus. Aureus statim cognatus coniecto. Thymum benevolentia ullus cupressus claro officiis conscendo tendo.'),
            (8, 'Single Bed', 'Floor C-5', 54, 'https://picsum.photos/seed/xMVajMh/3064/2936', 377, 48, 'available', 'Taedium solium comptus adsidue arbitro celebrer aureus vita cubo decimus. Optio carmen eaque amissio cena vado caute coniuratio curis. Ulterius depromo arto campana demens. Talus arbor vulariter. Candidus vae subiungo. Corpus cavus universe abutor. Videlicet conscendo coepi comminor comptus.'),
            (9, 'Double Bed', 'Floor A-8', 75, 'https://picsum.photos/seed/1aHnVds/3372/1948', 5394, 12, 'booked', 'Ceno vae voluptatem adfero ultio advoco thalassinus. Socius absconditus cogito vinculum tergeo alioqui vesica. Solvo tertius quas tubineus torqueo decor compello.'),
            (10, 'Double Bed', 'Floor C-3', 96, 'https://loremflickr.com/3970/1772?lock=5236964862817918', 4038, 18, 'booked', 'Acerbitas bellum labore libero. Talus beneficium calculus curiositas omnis comminor similique ipsam arguo dolorum. Adduco talio spiculum inflammatio aperiam cupiditate quibusdam.'),
            (11, 'Double Bed', 'Floor B-0', 55, 'https://picsum.photos/seed/mszD7E/3217/1907', 1187, 83, 'maintenance', 'Et cuppedia alius cogo quidem vulgivagus adipiscor tremo. Crudelis adfero acceptus advenio pel impedit. Pauci turpis catena iure annus utpote suppellex ipsam. Custodia cena bellicus ater ab ciminatio comedo summisse. Thesaurus aliquam suasoria concedo. Terminatio talio conservo amplexus natus veniam patrocinor. Victoria cohors abeo a tabella. Caute crastinus sursum abbas esse.'),
            (12, 'Double Superior', 'Floor C-6', 74, 'https://picsum.photos/seed/Fkeezis/3423/2648', 1835, 66, 'maintenance', 'Delibero at virgo terra custodia alo. Versus aperte caput condico. Sublime summa supellex spiculum delicate. Vulgo verus tui cunctatio accedo adeo desidero admiratio abutor convoco. Vigor theatrum sulum. Arcesso delicate confido excepturi.'),
            (13, 'Double Bed', 'Floor C-2', 75, 'https://loremflickr.com/2469/2108?lock=8461717702881232', 7836, 36, 'maintenance', 'Videlicet totidem ventus sed. Solitudo ver conspergo. Apto bonus demens tersus sol totus adiuvo verbum. Cado ultio deinde coniuratio viriliter tremo. Aqua paens adicio sumo. Cognomen harum cibus beatus crastinus alias audax temporibus distinctio.'),
            (14, 'Double Bed', 'Floor A-0', 78, 'https://picsum.photos/seed/uPrUHmEV/3562/3431', 2933, 49, 'maintenance', 'Optio chirographum ipsam vindico adsidue. Theca ubi acidus. Eveniet saepe conspergo angelus trepide tyrannus. Venustas verus defluo fugiat quibusdam voro ultio. Amissio caterva viduo. Amaritudo bis earum blanditiis desipio claudeo non tot angelus amoveo. Considero carbo rerum patior desipio. Titulus volubilis beatus vae.'),
            (15, 'Double Bed', 'Floor C-0', 49, 'https://picsum.photos/seed/d67iAVH3/2577/1195', 594, 84, 'booked', 'Explicabo voluptates cito nisi carcer sum appono demoror deinde. Aeger ultra id ars caterva. Congregatio usus tui. Aggero ars teneo. Id timor tandem.'),
            (16, 'Double Bed', 'Floor C-8', 52, 'https://picsum.photos/seed/c4zaiz/1024/3204', 7014, 72, 'booked', 'Toties caelum aptus cruciamentum viriliter blandior turpis modi valeo comitatus. Despecto stipes dolorum adinventitias alias. Utique arma id cras pectus. Caelum autem urbanus nam exercitationem cui.'),
            (17, 'Suite', 'Floor B-10', 40, 'https://picsum.photos/seed/7zigI/739/617', 8757, 72, 'booked', 'Armarium comptus tubineus ventus quidem sordeo theatrum. Cilicium adstringo vehemens aperiam volutabrum capillus suus aedificium. Corona ter tertius depraedor illum baiulus strenuus. Tempus casus cursus amoveo contigo. Tam deficio confido bonus decerno uberrime vinitor. Vere turpis repellendus derelinquo tredecim thymum maiores annus adopto defleo. Colligo vae amplexus approbo casus caute. Nulla minus tres bos.'),
            (18, 'Double Bed', 'Floor A-5', 77, 'https://loremflickr.com/3246/2486?lock=4004030268095885', 100, 49, 'maintenance', 'Ars aufero adnuo caute adiuvo cernuus temeritas cultellus. Dolorum paens decor sperno celo aeneus vobis pecco nemo. Abduco vinitor ara sponte corrigo. Deputo consuasor vestrum vehemens. Sol supplanto tribuo viriliter convoco trans via.'),
            (19, 'Suite', 'Floor C-1', 90, 'https://loremflickr.com/1235/546?lock=6346316548833488', 7710, 57, 'maintenance', 'Alter pauper tempore copia sunt canto amissio deserunt. Assumenda valeo est debeo carus defetiscor impedit uterque articulus spiculum. Vaco cognatus quis comminor. Paens sublime suppono congregatio coerceo ager creber. Atque varietas voco decens volubilis patior tutamen traho denuncio colligo. Ullam termes derideo conculco debeo adipiscor pauci.'),
            (20, 'Double Bed', 'Floor B-6', 98, 'https://loremflickr.com/1496/3514?lock=8504281371844179', 7009, 77, 'maintenance', 'Utrum arcesso crapula canis animi suffragium candidus illo. Bardus ubi volaticus. Cognatus dicta aggero usitas arcesso uxor.');");

        DB::statement('CREATE TABLE IF NOT EXISTS `rooms_amenities` (
            `id` int NOT NULL AUTO_INCREMENT,
            `room_id` int NOT NULL,
            `amenity_id` int NOT NULL,
            PRIMARY KEY (`id`),
            KEY `room_id` (`room_id`),
            KEY `amenity_id` (`amenity_id`),
            CONSTRAINT `rooms_amenities_ibfk_1` FOREIGN KEY (`room_id`) REFERENCES `rooms` (`id`) ON DELETE CASCADE,
            CONSTRAINT `rooms_amenities_ibfk_2` FOREIGN KEY (`amenity_id`) REFERENCES `amenities` (`id`) ON DELETE CASCADE
            ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;');

        DB::statement('DELETE FROM `rooms_amenities`;');
        
        DB::statement("CREATE TABLE IF NOT EXISTS `bookings` (
            `id` int NOT NULL AUTO_INCREMENT,
            `customer_name` varchar(100) NOT NULL,
            `customer_dni` varchar(100) NOT NULL,
            `date` varchar(100) NOT NULL,
            `status` enum('checking_out','checking_in','in_progress') NOT NULL,
            `room_id` int NOT NULL,
            `check_in` varchar(100) NOT NULL,
            `check_out` varchar(100) NOT NULL,
            `notes` varchar(5000) NOT NULL,
            PRIMARY KEY (`id`),
            KEY `room_id` (`room_id`),
            CONSTRAINT `bookings_ibfk_1` FOREIGN KEY (`room_id`) REFERENCES `rooms` (`id`) ON DELETE CASCADE
            ) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;");

        DB::statement('DELETE FROM `bookings`;');

        DB::statement("INSERT INTO `bookings` (`id`, `customer_name`, `customer_dni`, `date`, `status`, `room_id`, `check_in`, `check_out`, `notes`) VALUES
            (1, 'Wilma Kuhlman', '12345678D', '2024-10-06 11:37:20', 'checking_out', 12, '2023-12-14 00:19:51', '2025-02-05 18:42:47', 'Omnis architecto validus expedita tubineus aiunt chirographum triduana speciosus beatus. Conor expedita studio ustulo vinum sui bestia hic adeo. Caveo totidem saepe ventosus constans admitto turpis caput cresco absum. Omnis advenio atrocitas comedo tondeo accusator uberrime.'),
            (2, 'Darrin Emard MD', '12345678D', '2024-10-06 10:45:43', 'checking_out', 19, '2024-05-05 01:35:29', '2025-05-02 18:50:18', 'Sponte comprehendo ars vomer vacuus quaerat odio sordeo arx sto. Vitiosus facilis ter curvo nemo sumptus suffragium damnatio. Auctor vigilo copia convoco caelestis suppellex uberrime argumentum. Cunabula qui una cruentus curso.'),
            (3, 'Maurice Reichert', '12345678D', '2024-10-06 12:45:34', 'in_progress', 8, '2024-05-14 19:18:17', '2025-03-19 16:58:23', 'Tenuis vitiosus argumentum pauci. Casus contigo caritas maxime coadunatio tepidus torqueo degusto bibo dolor. Desparatus tantum celo capio.'),
            (4, 'Timothy Waters', '12345678D', '2024-10-06 05:50:31', 'in_progress', 1, '2024-09-23 13:34:54', '2025-01-30 12:33:14', 'Infit sophismata harum substantia valeo thermae nobis fuga arma. Sum cometes degusto. Temporibus tamen virgo contra termes deputo copiose eius ancilla. Adfero vigor auxilium acceptus avarus adiuvo angulus. Approbo degusto arcus eius. Coniecto terra accusamus. Pectus cura utpote.'),
            (5, 'Mrs. Lynne Fay', '12345678D', '2024-10-05 20:19:22', 'checking_out', 3, '2024-07-06 14:52:36', '2025-02-19 03:26:57', 'Adamo attero accusamus succedo eaque depraedor. Nam solitudo vociferor repellendus demo soleo tendo facilis angulus debilito. Creptio cubo conatus uxor audeo anser adstringo basium. Coepi admitto damnatio et. Urbs quidem careo cito spargo mollitia. Blanditiis cetera stipes sto comburo torqueo.'),
            (6, 'Christy Cremin', '12345678D', '2024-10-05 19:10:38', 'in_progress', 9, '2024-05-11 06:50:36', '2025-08-31 09:52:32', 'Temperantia triumphus infit adulescens vulnero testimonium illum campana ea uredo. Ultra amo sit universe adhaero tondeo colo. Depromo comptus aufero sublime. Ustilo speculum nemo confido cedo numquam. Adhaero strues utrimque ustilo. Theca trans tardus denique. Cubitum adsidue cerno cernuus tandem conservo.'),
            (7, 'Brent Goodwin', '12345678D', '2024-10-06 05:17:49', 'in_progress', 20, '2024-08-23 06:07:11', '2025-06-10 04:47:08', 'Cenaculum decretum cena tripudio depono cum. Tondeo contego pauci. Tantillus modi acceptus arto socius denego agnosco. Peccatus coaegresco vivo verumtamen confero perferendis nemo. Deludo agnitio ver basium aro aetas beneficium non.'),
            (8, 'Sara Reinger', '12345678D', '2024-10-05 19:31:07', 'checking_in', 19, '2024-01-16 08:07:40', '2025-04-10 11:49:24', 'Campana cogo demonstro ulciscor cohaero. Vomica deporto decerno corrumpo soluta. Adinventitias solutio laboriosam. Veritatis vicissitudo verus viscus excepturi. Accusator architecto ventus hic commodo conduco solvo apto tubineus sustineo. Vesica amissio antepono depopulo virga veritas cupiditas dens cruciamentum. Aestivus utrimque tumultus. Suggero virtus theatrum defluo aspicio carus tener.'),
            (9, 'Mrs. Flora Carter', '12345678D', '2024-10-06 11:54:53', 'checking_in', 15, '2024-08-02 02:24:47', '2025-03-31 17:25:55', 'Pax eligendi vulticulus. Quaerat correptius tolero arbor depereo tero quam inventore. Creptio vox volup altus aspernatur curiositas ciminatio articulus.'),
            (10, 'Beth Fritsch', '12345678D', '2024-10-06 11:52:29', 'checking_in', 4, '2024-08-17 12:13:56', '2024-10-30 20:18:43', 'Bestia modi pax qui. Valeo aliquid compello. Aqua suppono tempus vester decor tibi bos nam. Vesper coaegresco subvenio alo. Corpus neque artificiose voluptate temeritas dens aperiam. Deserunt bonus abutor. Porro beatae ubi. Calco temperantia versus amor patior consuasor cresco.'),
            (11, 'Patricia Dickens', '12345678D', '2024-10-05 18:51:36', 'checking_out', 17, '2024-01-23 16:50:53', '2025-06-26 09:07:17', 'Culpa approbo tener vulgus cenaculum copiose speculum trado alioqui vulgaris. Vulnero solvo tamquam recusandae vobis ater. Apto cornu praesentium alter nulla uter. Tardus victoria ambulo sordeo claudeo depromo utrum vespillo varietas. Certus aurum clarus cilicium audax callide.'),
            (12, 'Freda Lakin-Hills DVM', '12345678D', '2024-10-06 04:27:20', 'checking_out', 3, '2024-09-01 03:55:49', '2025-08-01 12:00:11', 'Degusto veritas aestas tendo facilis atque verto valeo. Dolore volva antiquus tamen pax expedita cavus. Dolore deficio capto voveo vetus fugit. Theca mollitia adamo non cubicularis explicabo cornu caritas acies alienus. Asporto certe sonitus.'),
            (13, 'Ms. Shari Heller', '12345678D', '2024-10-05 15:43:55', 'in_progress', 4, '2024-05-13 11:59:27', '2024-11-26 09:29:29', 'Sustineo ratione angelus tripudio delectatio consequatur argentum demonstro vomica molestiae. Spiculum conventus suadeo celebrer vehemens beatae urbanus soluta. Curiositas vester voro. Vigilo complectus decerno deserunt.'),
            (14, 'Wesley Bogan', '12345678D', '2024-10-05 18:12:40', 'checking_out', 13, '2024-08-18 08:55:05', '2025-06-30 10:35:10', 'Cras crastinus temeritas audentia tenus expedita quas eaque odio cotidie. Accedo viriliter claustrum eos labore. Omnis commodi ciminatio sumptus.'),
            (15, 'Rita Johnston-Fahey', '12345678D', '2024-10-05 15:33:53', 'in_progress', 6, '2024-01-07 05:26:15', '2025-09-06 22:55:45', 'Cauda clamo corrumpo casso. Triduana tandem adipisci conatus peior conscendo testimonium tenetur complectus. Voco sum blanditiis adnuo atrox summopere. Vinculum curso tui cometes articulus civitas volutabrum. Ara approbo defetiscor. Apud tantum sponte valens curtus usitas dolorum apparatus. Capio tyrannus verbum alioqui vomica.'),
            (16, 'Abel Rutherford Jr.', '12345678D', '2024-10-06 00:10:17', 'in_progress', 14, '2024-08-08 09:26:14', '2025-08-18 18:50:44', 'Cultellus apto sulum deporto aggero umbra torrens vulnero clementia. Cornu eius colo solium. Ustulo sono tenus convoco trans ratione xiphias conduco bellicus sed. Voluptatibus patrocinor minima cometes amita damno spero arcus deripio nemo.'),
            (17, 'Jonathan Williamson', '12345678D', '2024-10-06 04:31:43', 'checking_in', 19, '2024-05-25 09:25:30', '2025-03-04 08:52:31', 'Aestivus territo curso. Abundans carus calcar paulatim cubitum succurro patior cito. Solum ancilla abbas tabella ceno sulum carcer ulciscor. Thesaurus laudantium amicitia argentum suscipio allatus stabilis curto tripudio. Officia strues coepi assumenda solutio strenuus caute est arx utrimque. Capitulus thalassinus ver sui truculenter ultio aggero desino caelum. Creator deduco conturbo concedo appono adamo non.'),
            (18, 'Edna Zemlak IV', '12345678D', '2024-10-06 09:29:36', 'checking_in', 2, '2023-10-25 10:33:29', '2025-05-23 20:26:49', 'Cubo suasoria aliquam calculus reprehenderit depulso vigor. Thesaurus solus aequitas temptatio cernuus temperantia curo esse. Viriliter vita viriliter validus uredo demens suffoco civis. Tam conor socius minus cunae. Careo annus perferendis abduco casso acerbitas.'),
            (19, 'Jessie Ryan', '12345678D', '2024-10-06 04:30:47', 'checking_out', 3, '2023-10-07 23:54:55', '2025-06-06 07:22:44', 'Tempore beneficium stella quibusdam thema tremo. Tego attero talis defleo venio delectatio conatus corrigo. Assentator artificiose curo benigne aliquid decipio doloremque benevolentia. Curia sustineo cornu vere compello ademptio somniculosus excepturi torqueo vaco.'),
            (20, 'Mitchell Reichel Sr.', '12345678D', '2024-10-05 17:01:06', 'checking_in', 5, '2024-04-14 16:54:34', '2025-07-13 16:34:24', 'Vulgo curto tactus. Sopor cavus verbum. Eligendi cimentarius civis collum amicitia curto artificiose. Caritas cruentus vox coniecto varietas antiquus mollitia ut abstergo. Terga appono conduco bestia alter.');");
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookings');
        Schema::dropIfExists('rooms');
        Schema::dropIfExists('users');
        Schema::dropIfExists('amenities');
        Schema::dropIfExists('rooms_amenities');
    }
};
